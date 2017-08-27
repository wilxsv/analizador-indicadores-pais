<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapnc911 = array();
	$tdatapnc911[".truncateText"] = true;
	$tdatapnc911[".NumberOfChars"] = 80;
	$tdatapnc911[".ShortName"] = "pnc911";
	$tdatapnc911[".OwnerID"] = "";
	$tdatapnc911[".OriginalTable"] = "pnc911";

//	field labels
$fieldLabelspnc911 = array();
$fieldToolTipspnc911 = array();
$pageTitlespnc911 = array();
$placeHolderspnc911 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspnc911["Spanish"] = array();
	$fieldToolTipspnc911["Spanish"] = array();
	$placeHolderspnc911["Spanish"] = array();
	$pageTitlespnc911["Spanish"] = array();
	$fieldLabelspnc911["Spanish"]["tipificacion"] = "Tipificacion";
	$fieldToolTipspnc911["Spanish"]["tipificacion"] = "";
	$placeHolderspnc911["Spanish"]["tipificacion"] = "";
	$fieldLabelspnc911["Spanish"]["avisos911"] = "Avisos911";
	$fieldToolTipspnc911["Spanish"]["avisos911"] = "";
	$placeHolderspnc911["Spanish"]["avisos911"] = "";
	$fieldLabelspnc911["Spanish"]["direccion_validacion"] = "Direccion Validacion";
	$fieldToolTipspnc911["Spanish"]["direccion_validacion"] = "";
	$placeHolderspnc911["Spanish"]["direccion_validacion"] = "";
	$fieldLabelspnc911["Spanish"]["direccion_libre"] = "Direccion Libre";
	$fieldToolTipspnc911["Spanish"]["direccion_libre"] = "";
	$placeHolderspnc911["Spanish"]["direccion_libre"] = "";
	$fieldLabelspnc911["Spanish"]["coordenadas_x"] = "Coordenadas X";
	$fieldToolTipspnc911["Spanish"]["coordenadas_x"] = "";
	$placeHolderspnc911["Spanish"]["coordenadas_x"] = "";
	$fieldLabelspnc911["Spanish"]["coordenadas_y"] = "Coordenadas Y";
	$fieldToolTipspnc911["Spanish"]["coordenadas_y"] = "";
	$placeHolderspnc911["Spanish"]["coordenadas_y"] = "";
	$fieldLabelspnc911["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipspnc911["Spanish"]["departamento"] = "";
	$placeHolderspnc911["Spanish"]["departamento"] = "";
	$fieldLabelspnc911["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipspnc911["Spanish"]["municipio"] = "";
	$placeHolderspnc911["Spanish"]["municipio"] = "";
	$fieldLabelspnc911["Spanish"]["ppddsc"] = "Ppddsc";
	$fieldToolTipspnc911["Spanish"]["ppddsc"] = "";
	$placeHolderspnc911["Spanish"]["ppddsc"] = "";
	$fieldLabelspnc911["Spanish"]["meses"] = "Meses";
	$fieldToolTipspnc911["Spanish"]["meses"] = "";
	$placeHolderspnc911["Spanish"]["meses"] = "";
	if (count($fieldToolTipspnc911["Spanish"]))
		$tdatapnc911[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspnc911["English"] = array();
	$fieldToolTipspnc911["English"] = array();
	$placeHolderspnc911["English"] = array();
	$pageTitlespnc911["English"] = array();
	$fieldLabelspnc911["English"]["tipificacion"] = "Tipificacion";
	$fieldToolTipspnc911["English"]["tipificacion"] = "";
	$placeHolderspnc911["English"]["tipificacion"] = "";
	$fieldLabelspnc911["English"]["avisos911"] = "Avisos911";
	$fieldToolTipspnc911["English"]["avisos911"] = "";
	$placeHolderspnc911["English"]["avisos911"] = "";
	$fieldLabelspnc911["English"]["direccion_validacion"] = "Direccion Validacion";
	$fieldToolTipspnc911["English"]["direccion_validacion"] = "";
	$placeHolderspnc911["English"]["direccion_validacion"] = "";
	$fieldLabelspnc911["English"]["direccion_libre"] = "Direccion Libre";
	$fieldToolTipspnc911["English"]["direccion_libre"] = "";
	$placeHolderspnc911["English"]["direccion_libre"] = "";
	$fieldLabelspnc911["English"]["coordenadas_x"] = "Coordenadas X";
	$fieldToolTipspnc911["English"]["coordenadas_x"] = "";
	$placeHolderspnc911["English"]["coordenadas_x"] = "";
	$fieldLabelspnc911["English"]["coordenadas_y"] = "Coordenadas Y";
	$fieldToolTipspnc911["English"]["coordenadas_y"] = "";
	$placeHolderspnc911["English"]["coordenadas_y"] = "";
	$fieldLabelspnc911["English"]["departamento"] = "Departamento";
	$fieldToolTipspnc911["English"]["departamento"] = "";
	$placeHolderspnc911["English"]["departamento"] = "";
	$fieldLabelspnc911["English"]["municipio"] = "Municipio";
	$fieldToolTipspnc911["English"]["municipio"] = "";
	$placeHolderspnc911["English"]["municipio"] = "";
	$fieldLabelspnc911["English"]["ppddsc"] = "Ppddsc";
	$fieldToolTipspnc911["English"]["ppddsc"] = "";
	$placeHolderspnc911["English"]["ppddsc"] = "";
	$fieldLabelspnc911["English"]["meses"] = "Meses";
	$fieldToolTipspnc911["English"]["meses"] = "";
	$placeHolderspnc911["English"]["meses"] = "";
	if (count($fieldToolTipspnc911["English"]))
		$tdatapnc911[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspnc911[""] = array();
	$fieldToolTipspnc911[""] = array();
	$placeHolderspnc911[""] = array();
	$pageTitlespnc911[""] = array();
	if (count($fieldToolTipspnc911[""]))
		$tdatapnc911[".isUseToolTips"] = true;
}





$tdatapnc911[".shortTableName"] = "pnc911";
$tdatapnc911[".nSecOptions"] = 0;
$tdatapnc911[".recsPerRowPrint"] = 1;
$tdatapnc911[".mainTableOwnerID"] = "";
$tdatapnc911[".moveNext"] = 1;
$tdatapnc911[".entityType"] = 1;

$tdatapnc911[".strOriginalTableName"] = "pnc911";

	



$tdatapnc911[".showAddInPopup"] = false;

$tdatapnc911[".showEditInPopup"] = false;

$tdatapnc911[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapnc911[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapnc911[".fieldsForRegister"] = array();

	$tdatapnc911[".listAjax"] = true;

	$tdatapnc911[".audit"] = false;

	$tdatapnc911[".locking"] = false;


$tdatapnc911[".add"] = true;
$tdatapnc911[".afterAddAction"] = 1;
$tdatapnc911[".closePopupAfterAdd"] = 1;
$tdatapnc911[".afterAddActionDetTable"] = "";

$tdatapnc911[".list"] = true;



$tdatapnc911[".reorderRecordsByHeader"] = true;
$tdatapnc911[".createSortByDropdown"] = true;
$tdatapnc911[".strSortControlSettingsJSON"] = "";



$tdatapnc911[".inlineAdd"] = true;

$tdatapnc911[".import"] = true;

$tdatapnc911[".exportTo"] = true;

$tdatapnc911[".printFriendly"] = true;


$tdatapnc911[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapnc911[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapnc911[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapnc911[".searchSaving"] = false;
//

$tdatapnc911[".showSearchPanel"] = true;
		$tdatapnc911[".flexibleSearch"] = true;

$tdatapnc911[".isUseAjaxSuggest"] = true;

$tdatapnc911[".rowHighlite"] = true;





$tdatapnc911[".ajaxCodeSnippetAdded"] = false;

$tdatapnc911[".buttonsAdded"] = false;

$tdatapnc911[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapnc911[".isUseTimeForSearch"] = false;





$tdatapnc911[".allSearchFields"] = array();
$tdatapnc911[".filterFields"] = array();
$tdatapnc911[".requiredSearchFields"] = array();

$tdatapnc911[".allSearchFields"][] = "direccion_validacion";
	$tdatapnc911[".allSearchFields"][] = "direccion_libre";
	$tdatapnc911[".allSearchFields"][] = "coordenadas_x";
	$tdatapnc911[".allSearchFields"][] = "coordenadas_y";
	$tdatapnc911[".allSearchFields"][] = "departamento";
	$tdatapnc911[".allSearchFields"][] = "municipio";
	$tdatapnc911[".allSearchFields"][] = "ppddsc";
	$tdatapnc911[".allSearchFields"][] = "meses";
	$tdatapnc911[".allSearchFields"][] = "tipificacion";
	$tdatapnc911[".allSearchFields"][] = "avisos911";
	

$tdatapnc911[".googleLikeFields"] = array();
$tdatapnc911[".googleLikeFields"][] = "direccion_validacion";
$tdatapnc911[".googleLikeFields"][] = "direccion_libre";
$tdatapnc911[".googleLikeFields"][] = "coordenadas_x";
$tdatapnc911[".googleLikeFields"][] = "coordenadas_y";
$tdatapnc911[".googleLikeFields"][] = "departamento";
$tdatapnc911[".googleLikeFields"][] = "municipio";
$tdatapnc911[".googleLikeFields"][] = "ppddsc";
$tdatapnc911[".googleLikeFields"][] = "meses";
$tdatapnc911[".googleLikeFields"][] = "tipificacion";
$tdatapnc911[".googleLikeFields"][] = "avisos911";


$tdatapnc911[".advSearchFields"] = array();
$tdatapnc911[".advSearchFields"][] = "direccion_validacion";
$tdatapnc911[".advSearchFields"][] = "direccion_libre";
$tdatapnc911[".advSearchFields"][] = "coordenadas_x";
$tdatapnc911[".advSearchFields"][] = "coordenadas_y";
$tdatapnc911[".advSearchFields"][] = "departamento";
$tdatapnc911[".advSearchFields"][] = "municipio";
$tdatapnc911[".advSearchFields"][] = "ppddsc";
$tdatapnc911[".advSearchFields"][] = "meses";
$tdatapnc911[".advSearchFields"][] = "tipificacion";
$tdatapnc911[".advSearchFields"][] = "avisos911";

$tdatapnc911[".tableType"] = "list";

$tdatapnc911[".printerPageOrientation"] = 0;
$tdatapnc911[".nPrinterPageScale"] = 100;

$tdatapnc911[".nPrinterSplitRecords"] = 40;

$tdatapnc911[".nPrinterPDFSplitRecords"] = 40;



$tdatapnc911[".geocodingEnabled"] = false;





$tdatapnc911[".listGridLayout"] = 3;

$tdatapnc911[".isDisplayLoading"] = true;




// view page pdf
$tdatapnc911[".isViewPagePDF"] = true;
$tdatapnc911[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatapnc911[".isPrinterPagePDF"] = true;
$tdatapnc911[".nPrinterPagePDFScale"] = 100;


$tdatapnc911[".pageSize"] = 10;

$tdatapnc911[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapnc911[".strOrderBy"] = $tstrOrderBy;

$tdatapnc911[".orderindexes"] = array();

$tdatapnc911[".sqlHead"] = "SELECT direccion_validacion,  direccion_libre,  coordenadas_x,  coordenadas_y,  departamento,  municipio,  ppddsc,  meses,  tipificacion,  avisos911";
$tdatapnc911[".sqlFrom"] = "FROM pnc911";
$tdatapnc911[".sqlWhereExpr"] = "";
$tdatapnc911[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapnc911[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapnc911[".arrGroupsPerPage"] = $arrGPP;

$tdatapnc911[".highlightSearchResults"] = true;

$tableKeyspnc911 = array();
$tdatapnc911[".Keys"] = $tableKeyspnc911;

$tdatapnc911[".listFields"] = array();
$tdatapnc911[".listFields"][] = "direccion_validacion";
$tdatapnc911[".listFields"][] = "direccion_libre";
$tdatapnc911[".listFields"][] = "coordenadas_x";
$tdatapnc911[".listFields"][] = "coordenadas_y";
$tdatapnc911[".listFields"][] = "departamento";
$tdatapnc911[".listFields"][] = "municipio";
$tdatapnc911[".listFields"][] = "ppddsc";
$tdatapnc911[".listFields"][] = "meses";
$tdatapnc911[".listFields"][] = "tipificacion";
$tdatapnc911[".listFields"][] = "avisos911";

$tdatapnc911[".hideMobileList"] = array();


$tdatapnc911[".viewFields"] = array();
$tdatapnc911[".viewFields"][] = "direccion_validacion";
$tdatapnc911[".viewFields"][] = "direccion_libre";
$tdatapnc911[".viewFields"][] = "coordenadas_x";
$tdatapnc911[".viewFields"][] = "coordenadas_y";
$tdatapnc911[".viewFields"][] = "departamento";
$tdatapnc911[".viewFields"][] = "municipio";
$tdatapnc911[".viewFields"][] = "ppddsc";
$tdatapnc911[".viewFields"][] = "meses";
$tdatapnc911[".viewFields"][] = "tipificacion";
$tdatapnc911[".viewFields"][] = "avisos911";

$tdatapnc911[".addFields"] = array();
$tdatapnc911[".addFields"][] = "direccion_validacion";
$tdatapnc911[".addFields"][] = "direccion_libre";
$tdatapnc911[".addFields"][] = "coordenadas_x";
$tdatapnc911[".addFields"][] = "coordenadas_y";
$tdatapnc911[".addFields"][] = "departamento";
$tdatapnc911[".addFields"][] = "municipio";
$tdatapnc911[".addFields"][] = "ppddsc";
$tdatapnc911[".addFields"][] = "meses";
$tdatapnc911[".addFields"][] = "tipificacion";
$tdatapnc911[".addFields"][] = "avisos911";

$tdatapnc911[".masterListFields"] = array();
$tdatapnc911[".masterListFields"][] = "direccion_validacion";
$tdatapnc911[".masterListFields"][] = "direccion_libre";
$tdatapnc911[".masterListFields"][] = "coordenadas_x";
$tdatapnc911[".masterListFields"][] = "coordenadas_y";
$tdatapnc911[".masterListFields"][] = "departamento";
$tdatapnc911[".masterListFields"][] = "municipio";
$tdatapnc911[".masterListFields"][] = "ppddsc";
$tdatapnc911[".masterListFields"][] = "meses";
$tdatapnc911[".masterListFields"][] = "tipificacion";
$tdatapnc911[".masterListFields"][] = "avisos911";

$tdatapnc911[".inlineAddFields"] = array();
$tdatapnc911[".inlineAddFields"][] = "direccion_validacion";
$tdatapnc911[".inlineAddFields"][] = "direccion_libre";
$tdatapnc911[".inlineAddFields"][] = "coordenadas_x";
$tdatapnc911[".inlineAddFields"][] = "coordenadas_y";
$tdatapnc911[".inlineAddFields"][] = "departamento";
$tdatapnc911[".inlineAddFields"][] = "municipio";
$tdatapnc911[".inlineAddFields"][] = "ppddsc";
$tdatapnc911[".inlineAddFields"][] = "meses";
$tdatapnc911[".inlineAddFields"][] = "tipificacion";
$tdatapnc911[".inlineAddFields"][] = "avisos911";

$tdatapnc911[".editFields"] = array();
$tdatapnc911[".editFields"][] = "direccion_validacion";
$tdatapnc911[".editFields"][] = "direccion_libre";
$tdatapnc911[".editFields"][] = "coordenadas_x";
$tdatapnc911[".editFields"][] = "coordenadas_y";
$tdatapnc911[".editFields"][] = "departamento";
$tdatapnc911[".editFields"][] = "municipio";
$tdatapnc911[".editFields"][] = "ppddsc";
$tdatapnc911[".editFields"][] = "meses";
$tdatapnc911[".editFields"][] = "tipificacion";
$tdatapnc911[".editFields"][] = "avisos911";

$tdatapnc911[".inlineEditFields"] = array();
$tdatapnc911[".inlineEditFields"][] = "direccion_validacion";
$tdatapnc911[".inlineEditFields"][] = "direccion_libre";
$tdatapnc911[".inlineEditFields"][] = "coordenadas_x";
$tdatapnc911[".inlineEditFields"][] = "coordenadas_y";
$tdatapnc911[".inlineEditFields"][] = "departamento";
$tdatapnc911[".inlineEditFields"][] = "municipio";
$tdatapnc911[".inlineEditFields"][] = "ppddsc";
$tdatapnc911[".inlineEditFields"][] = "meses";
$tdatapnc911[".inlineEditFields"][] = "tipificacion";
$tdatapnc911[".inlineEditFields"][] = "avisos911";

$tdatapnc911[".updateSelectedFields"] = array();
$tdatapnc911[".updateSelectedFields"][] = "direccion_validacion";
$tdatapnc911[".updateSelectedFields"][] = "direccion_libre";
$tdatapnc911[".updateSelectedFields"][] = "coordenadas_x";
$tdatapnc911[".updateSelectedFields"][] = "coordenadas_y";
$tdatapnc911[".updateSelectedFields"][] = "departamento";
$tdatapnc911[".updateSelectedFields"][] = "municipio";
$tdatapnc911[".updateSelectedFields"][] = "ppddsc";
$tdatapnc911[".updateSelectedFields"][] = "meses";
$tdatapnc911[".updateSelectedFields"][] = "tipificacion";
$tdatapnc911[".updateSelectedFields"][] = "avisos911";


$tdatapnc911[".exportFields"] = array();
$tdatapnc911[".exportFields"][] = "direccion_validacion";
$tdatapnc911[".exportFields"][] = "direccion_libre";
$tdatapnc911[".exportFields"][] = "coordenadas_x";
$tdatapnc911[".exportFields"][] = "coordenadas_y";
$tdatapnc911[".exportFields"][] = "departamento";
$tdatapnc911[".exportFields"][] = "municipio";
$tdatapnc911[".exportFields"][] = "ppddsc";
$tdatapnc911[".exportFields"][] = "meses";
$tdatapnc911[".exportFields"][] = "tipificacion";
$tdatapnc911[".exportFields"][] = "avisos911";

$tdatapnc911[".importFields"] = array();
$tdatapnc911[".importFields"][] = "direccion_validacion";
$tdatapnc911[".importFields"][] = "direccion_libre";
$tdatapnc911[".importFields"][] = "coordenadas_x";
$tdatapnc911[".importFields"][] = "coordenadas_y";
$tdatapnc911[".importFields"][] = "departamento";
$tdatapnc911[".importFields"][] = "municipio";
$tdatapnc911[".importFields"][] = "ppddsc";
$tdatapnc911[".importFields"][] = "meses";
$tdatapnc911[".importFields"][] = "tipificacion";
$tdatapnc911[".importFields"][] = "avisos911";

$tdatapnc911[".printFields"] = array();
$tdatapnc911[".printFields"][] = "direccion_validacion";
$tdatapnc911[".printFields"][] = "direccion_libre";
$tdatapnc911[".printFields"][] = "coordenadas_x";
$tdatapnc911[".printFields"][] = "coordenadas_y";
$tdatapnc911[".printFields"][] = "departamento";
$tdatapnc911[".printFields"][] = "municipio";
$tdatapnc911[".printFields"][] = "ppddsc";
$tdatapnc911[".printFields"][] = "meses";
$tdatapnc911[".printFields"][] = "tipificacion";
$tdatapnc911[".printFields"][] = "avisos911";

//	direccion_validacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "direccion_validacion";
	$fdata["GoodName"] = "direccion_validacion";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc911","direccion_validacion");
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

		$fdata["strField"] = "direccion_validacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direccion_validacion";

	
	
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




	$tdatapnc911["direccion_validacion"] = $fdata;
//	direccion_libre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "direccion_libre";
	$fdata["GoodName"] = "direccion_libre";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc911","direccion_libre");
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

		$fdata["strField"] = "direccion_libre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direccion_libre";

	
	
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




	$tdatapnc911["direccion_libre"] = $fdata;
//	coordenadas_x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "coordenadas_x";
	$fdata["GoodName"] = "coordenadas_x";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc911","coordenadas_x");
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

		$fdata["strField"] = "coordenadas_x";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "coordenadas_x";

	
	
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




	$tdatapnc911["coordenadas_x"] = $fdata;
//	coordenadas_y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "coordenadas_y";
	$fdata["GoodName"] = "coordenadas_y";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc911","coordenadas_y");
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

		$fdata["strField"] = "coordenadas_y";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "coordenadas_y";

	
	
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




	$tdatapnc911["coordenadas_y"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc911","departamento");
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




	$tdatapnc911["departamento"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc911","municipio");
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




	$tdatapnc911["municipio"] = $fdata;
//	ppddsc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ppddsc";
	$fdata["GoodName"] = "ppddsc";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc911","ppddsc");
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

		$fdata["strField"] = "ppddsc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ppddsc";

	
	
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




	$tdatapnc911["ppddsc"] = $fdata;
//	meses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "meses";
	$fdata["GoodName"] = "meses";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc911","meses");
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

		$fdata["strField"] = "meses";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "meses";

	
	
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




	$tdatapnc911["meses"] = $fdata;
//	tipificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "tipificacion";
	$fdata["GoodName"] = "tipificacion";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc911","tipificacion");
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

		$fdata["strField"] = "tipificacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipificacion";

	
	
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




	$tdatapnc911["tipificacion"] = $fdata;
//	avisos911
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "avisos911";
	$fdata["GoodName"] = "avisos911";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc911","avisos911");
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

		$fdata["strField"] = "avisos911";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "avisos911";

	
	
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




	$tdatapnc911["avisos911"] = $fdata;


$tables_data["pnc911"]=&$tdatapnc911;
$field_labels["pnc911"] = &$fieldLabelspnc911;
$fieldToolTips["pnc911"] = &$fieldToolTipspnc911;
$placeHolders["pnc911"] = &$placeHolderspnc911;
$page_titles["pnc911"] = &$pageTitlespnc911;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pnc911"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["pnc911"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pnc911()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "direccion_validacion,  direccion_libre,  coordenadas_x,  coordenadas_y,  departamento,  municipio,  ppddsc,  meses,  tipificacion,  avisos911";
$proto0["m_strFrom"] = "FROM pnc911";
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
	"m_strName" => "direccion_validacion",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911"
));

$proto6["m_sql"] = "direccion_validacion";
$proto6["m_srcTableName"] = "pnc911";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion_libre",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911"
));

$proto8["m_sql"] = "direccion_libre";
$proto8["m_srcTableName"] = "pnc911";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "coordenadas_x",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911"
));

$proto10["m_sql"] = "coordenadas_x";
$proto10["m_srcTableName"] = "pnc911";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "coordenadas_y",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911"
));

$proto12["m_sql"] = "coordenadas_y";
$proto12["m_srcTableName"] = "pnc911";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911"
));

$proto14["m_sql"] = "departamento";
$proto14["m_srcTableName"] = "pnc911";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911"
));

$proto16["m_sql"] = "municipio";
$proto16["m_srcTableName"] = "pnc911";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ppddsc",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911"
));

$proto18["m_sql"] = "ppddsc";
$proto18["m_srcTableName"] = "pnc911";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "meses",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911"
));

$proto20["m_sql"] = "meses";
$proto20["m_srcTableName"] = "pnc911";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "tipificacion",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911"
));

$proto22["m_sql"] = "tipificacion";
$proto22["m_srcTableName"] = "pnc911";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "avisos911",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911"
));

$proto24["m_sql"] = "avisos911";
$proto24["m_srcTableName"] = "pnc911";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "pnc911";
$proto27["m_srcTableName"] = "pnc911";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "tipificacion";
$proto27["m_columns"][] = "direccion_validacion";
$proto27["m_columns"][] = "direccion_libre";
$proto27["m_columns"][] = "coordenadas_x";
$proto27["m_columns"][] = "coordenadas_y";
$proto27["m_columns"][] = "departamento";
$proto27["m_columns"][] = "municipio";
$proto27["m_columns"][] = "ppddsc";
$proto27["m_columns"][] = "meses";
$proto27["m_columns"][] = "avisos911";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "pnc911";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "pnc911";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pnc911";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pnc911 = createSqlQuery_pnc911();


	
		;

										

$tdatapnc911[".sqlquery"] = $queryData_pnc911;

$tableEvents["pnc911"] = new eventsBase;
$tdatapnc911[".hasEvents"] = false;

?>