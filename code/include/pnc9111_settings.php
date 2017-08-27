<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapnc9111 = array();
	$tdatapnc9111[".truncateText"] = true;
	$tdatapnc9111[".NumberOfChars"] = 80;
	$tdatapnc9111[".ShortName"] = "pnc9111";
	$tdatapnc9111[".OwnerID"] = "";
	$tdatapnc9111[".OriginalTable"] = "pnc911";

//	field labels
$fieldLabelspnc9111 = array();
$fieldToolTipspnc9111 = array();
$pageTitlespnc9111 = array();
$placeHolderspnc9111 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspnc9111["Spanish"] = array();
	$fieldToolTipspnc9111["Spanish"] = array();
	$placeHolderspnc9111["Spanish"] = array();
	$pageTitlespnc9111["Spanish"] = array();
	$fieldLabelspnc9111["Spanish"]["tipificacion"] = "Tipificacion";
	$fieldToolTipspnc9111["Spanish"]["tipificacion"] = "";
	$placeHolderspnc9111["Spanish"]["tipificacion"] = "";
	$fieldLabelspnc9111["Spanish"]["direccion_validacion"] = "Direccion Validacion";
	$fieldToolTipspnc9111["Spanish"]["direccion_validacion"] = "";
	$placeHolderspnc9111["Spanish"]["direccion_validacion"] = "";
	$fieldLabelspnc9111["Spanish"]["direccion_libre"] = "Direccion Libre";
	$fieldToolTipspnc9111["Spanish"]["direccion_libre"] = "";
	$placeHolderspnc9111["Spanish"]["direccion_libre"] = "";
	$fieldLabelspnc9111["Spanish"]["coordenadas_x"] = "Coordenadas X";
	$fieldToolTipspnc9111["Spanish"]["coordenadas_x"] = "";
	$placeHolderspnc9111["Spanish"]["coordenadas_x"] = "";
	$fieldLabelspnc9111["Spanish"]["coordenadas_y"] = "Coordenadas Y";
	$fieldToolTipspnc9111["Spanish"]["coordenadas_y"] = "";
	$placeHolderspnc9111["Spanish"]["coordenadas_y"] = "";
	$fieldLabelspnc9111["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipspnc9111["Spanish"]["departamento"] = "";
	$placeHolderspnc9111["Spanish"]["departamento"] = "";
	$fieldLabelspnc9111["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipspnc9111["Spanish"]["municipio"] = "";
	$placeHolderspnc9111["Spanish"]["municipio"] = "";
	$fieldLabelspnc9111["Spanish"]["ppddsc"] = "Ppddsc";
	$fieldToolTipspnc9111["Spanish"]["ppddsc"] = "";
	$placeHolderspnc9111["Spanish"]["ppddsc"] = "";
	$fieldLabelspnc9111["Spanish"]["meses"] = "Meses";
	$fieldToolTipspnc9111["Spanish"]["meses"] = "";
	$placeHolderspnc9111["Spanish"]["meses"] = "";
	$fieldLabelspnc9111["Spanish"]["avisos911"] = "Avisos911";
	$fieldToolTipspnc9111["Spanish"]["avisos911"] = "";
	$placeHolderspnc9111["Spanish"]["avisos911"] = "";
	if (count($fieldToolTipspnc9111["Spanish"]))
		$tdatapnc9111[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspnc9111["English"] = array();
	$fieldToolTipspnc9111["English"] = array();
	$placeHolderspnc9111["English"] = array();
	$pageTitlespnc9111["English"] = array();
	$fieldLabelspnc9111["English"]["tipificacion"] = "Tipificacion";
	$fieldToolTipspnc9111["English"]["tipificacion"] = "";
	$placeHolderspnc9111["English"]["tipificacion"] = "";
	$fieldLabelspnc9111["English"]["direccion_validacion"] = "Direccion Validacion";
	$fieldToolTipspnc9111["English"]["direccion_validacion"] = "";
	$placeHolderspnc9111["English"]["direccion_validacion"] = "";
	$fieldLabelspnc9111["English"]["direccion_libre"] = "Direccion Libre";
	$fieldToolTipspnc9111["English"]["direccion_libre"] = "";
	$placeHolderspnc9111["English"]["direccion_libre"] = "";
	$fieldLabelspnc9111["English"]["coordenadas_x"] = "Coordenadas X";
	$fieldToolTipspnc9111["English"]["coordenadas_x"] = "";
	$placeHolderspnc9111["English"]["coordenadas_x"] = "";
	$fieldLabelspnc9111["English"]["coordenadas_y"] = "Coordenadas Y";
	$fieldToolTipspnc9111["English"]["coordenadas_y"] = "";
	$placeHolderspnc9111["English"]["coordenadas_y"] = "";
	$fieldLabelspnc9111["English"]["departamento"] = "Departamento";
	$fieldToolTipspnc9111["English"]["departamento"] = "";
	$placeHolderspnc9111["English"]["departamento"] = "";
	$fieldLabelspnc9111["English"]["municipio"] = "Municipio";
	$fieldToolTipspnc9111["English"]["municipio"] = "";
	$placeHolderspnc9111["English"]["municipio"] = "";
	$fieldLabelspnc9111["English"]["ppddsc"] = "Ppddsc";
	$fieldToolTipspnc9111["English"]["ppddsc"] = "";
	$placeHolderspnc9111["English"]["ppddsc"] = "";
	$fieldLabelspnc9111["English"]["meses"] = "Meses";
	$fieldToolTipspnc9111["English"]["meses"] = "";
	$placeHolderspnc9111["English"]["meses"] = "";
	$fieldLabelspnc9111["English"]["avisos911"] = "Avisos911";
	$fieldToolTipspnc9111["English"]["avisos911"] = "";
	$placeHolderspnc9111["English"]["avisos911"] = "";
	if (count($fieldToolTipspnc9111["English"]))
		$tdatapnc9111[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspnc9111[""] = array();
	$fieldToolTipspnc9111[""] = array();
	$placeHolderspnc9111[""] = array();
	$pageTitlespnc9111[""] = array();
	if (count($fieldToolTipspnc9111[""]))
		$tdatapnc9111[".isUseToolTips"] = true;
}





$tdatapnc9111[".shortTableName"] = "pnc9111";
$tdatapnc9111[".nSecOptions"] = 0;
$tdatapnc9111[".recsPerRowPrint"] = 1;
$tdatapnc9111[".mainTableOwnerID"] = "";
$tdatapnc9111[".moveNext"] = 1;
$tdatapnc9111[".entityType"] = 0;

$tdatapnc9111[".strOriginalTableName"] = "pnc911";

	



$tdatapnc9111[".showAddInPopup"] = false;

$tdatapnc9111[".showEditInPopup"] = false;

$tdatapnc9111[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapnc9111[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapnc9111[".fieldsForRegister"] = array();

	$tdatapnc9111[".listAjax"] = true;

	$tdatapnc9111[".audit"] = false;

	$tdatapnc9111[".locking"] = false;


$tdatapnc9111[".add"] = true;
$tdatapnc9111[".afterAddAction"] = 1;
$tdatapnc9111[".closePopupAfterAdd"] = 1;
$tdatapnc9111[".afterAddActionDetTable"] = "";

$tdatapnc9111[".list"] = true;



$tdatapnc9111[".reorderRecordsByHeader"] = true;
$tdatapnc9111[".createSortByDropdown"] = true;
$tdatapnc9111[".strSortControlSettingsJSON"] = "";



$tdatapnc9111[".inlineAdd"] = true;

$tdatapnc9111[".import"] = true;

$tdatapnc9111[".exportTo"] = true;

$tdatapnc9111[".printFriendly"] = true;


$tdatapnc9111[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapnc9111[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapnc9111[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapnc9111[".searchSaving"] = false;
//

$tdatapnc9111[".showSearchPanel"] = true;
		$tdatapnc9111[".flexibleSearch"] = true;

$tdatapnc9111[".isUseAjaxSuggest"] = true;

$tdatapnc9111[".rowHighlite"] = true;





$tdatapnc9111[".ajaxCodeSnippetAdded"] = false;

$tdatapnc9111[".buttonsAdded"] = false;

$tdatapnc9111[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapnc9111[".isUseTimeForSearch"] = false;





$tdatapnc9111[".allSearchFields"] = array();
$tdatapnc9111[".filterFields"] = array();
$tdatapnc9111[".requiredSearchFields"] = array();

$tdatapnc9111[".allSearchFields"][] = "tipificacion";
	$tdatapnc9111[".allSearchFields"][] = "direccion_validacion";
	$tdatapnc9111[".allSearchFields"][] = "direccion_libre";
	$tdatapnc9111[".allSearchFields"][] = "coordenadas_x";
	$tdatapnc9111[".allSearchFields"][] = "coordenadas_y";
	$tdatapnc9111[".allSearchFields"][] = "departamento";
	$tdatapnc9111[".allSearchFields"][] = "municipio";
	$tdatapnc9111[".allSearchFields"][] = "ppddsc";
	$tdatapnc9111[".allSearchFields"][] = "meses";
	$tdatapnc9111[".allSearchFields"][] = "avisos911";
	

$tdatapnc9111[".googleLikeFields"] = array();
$tdatapnc9111[".googleLikeFields"][] = "tipificacion";
$tdatapnc9111[".googleLikeFields"][] = "direccion_validacion";
$tdatapnc9111[".googleLikeFields"][] = "direccion_libre";
$tdatapnc9111[".googleLikeFields"][] = "coordenadas_x";
$tdatapnc9111[".googleLikeFields"][] = "coordenadas_y";
$tdatapnc9111[".googleLikeFields"][] = "departamento";
$tdatapnc9111[".googleLikeFields"][] = "municipio";
$tdatapnc9111[".googleLikeFields"][] = "ppddsc";
$tdatapnc9111[".googleLikeFields"][] = "meses";
$tdatapnc9111[".googleLikeFields"][] = "avisos911";


$tdatapnc9111[".advSearchFields"] = array();
$tdatapnc9111[".advSearchFields"][] = "tipificacion";
$tdatapnc9111[".advSearchFields"][] = "direccion_validacion";
$tdatapnc9111[".advSearchFields"][] = "direccion_libre";
$tdatapnc9111[".advSearchFields"][] = "coordenadas_x";
$tdatapnc9111[".advSearchFields"][] = "coordenadas_y";
$tdatapnc9111[".advSearchFields"][] = "departamento";
$tdatapnc9111[".advSearchFields"][] = "municipio";
$tdatapnc9111[".advSearchFields"][] = "ppddsc";
$tdatapnc9111[".advSearchFields"][] = "meses";
$tdatapnc9111[".advSearchFields"][] = "avisos911";

$tdatapnc9111[".tableType"] = "list";

$tdatapnc9111[".printerPageOrientation"] = 0;
$tdatapnc9111[".nPrinterPageScale"] = 100;

$tdatapnc9111[".nPrinterSplitRecords"] = 40;

$tdatapnc9111[".nPrinterPDFSplitRecords"] = 40;



$tdatapnc9111[".geocodingEnabled"] = false;





$tdatapnc9111[".listGridLayout"] = 3;

$tdatapnc9111[".isDisplayLoading"] = true;




// view page pdf
$tdatapnc9111[".isViewPagePDF"] = true;
$tdatapnc9111[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatapnc9111[".isPrinterPagePDF"] = true;
$tdatapnc9111[".nPrinterPagePDFScale"] = 100;


$tdatapnc9111[".pageSize"] = 10;

$tdatapnc9111[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapnc9111[".strOrderBy"] = $tstrOrderBy;

$tdatapnc9111[".orderindexes"] = array();

$tdatapnc9111[".sqlHead"] = "SELECT tipificacion,  	direccion_validacion,  	direccion_libre,  	coordenadas_x,  	coordenadas_y,  	departamento,  	municipio,  	ppddsc,  	meses,  	avisos911";
$tdatapnc9111[".sqlFrom"] = "FROM pnc911";
$tdatapnc9111[".sqlWhereExpr"] = "";
$tdatapnc9111[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapnc9111[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapnc9111[".arrGroupsPerPage"] = $arrGPP;

$tdatapnc9111[".highlightSearchResults"] = true;

$tableKeyspnc9111 = array();
$tdatapnc9111[".Keys"] = $tableKeyspnc9111;

$tdatapnc9111[".listFields"] = array();
$tdatapnc9111[".listFields"][] = "tipificacion";
$tdatapnc9111[".listFields"][] = "direccion_validacion";
$tdatapnc9111[".listFields"][] = "direccion_libre";
$tdatapnc9111[".listFields"][] = "coordenadas_x";
$tdatapnc9111[".listFields"][] = "coordenadas_y";
$tdatapnc9111[".listFields"][] = "departamento";
$tdatapnc9111[".listFields"][] = "municipio";
$tdatapnc9111[".listFields"][] = "ppddsc";
$tdatapnc9111[".listFields"][] = "meses";
$tdatapnc9111[".listFields"][] = "avisos911";

$tdatapnc9111[".hideMobileList"] = array();


$tdatapnc9111[".viewFields"] = array();
$tdatapnc9111[".viewFields"][] = "tipificacion";
$tdatapnc9111[".viewFields"][] = "direccion_validacion";
$tdatapnc9111[".viewFields"][] = "direccion_libre";
$tdatapnc9111[".viewFields"][] = "coordenadas_x";
$tdatapnc9111[".viewFields"][] = "coordenadas_y";
$tdatapnc9111[".viewFields"][] = "departamento";
$tdatapnc9111[".viewFields"][] = "municipio";
$tdatapnc9111[".viewFields"][] = "ppddsc";
$tdatapnc9111[".viewFields"][] = "meses";
$tdatapnc9111[".viewFields"][] = "avisos911";

$tdatapnc9111[".addFields"] = array();
$tdatapnc9111[".addFields"][] = "tipificacion";
$tdatapnc9111[".addFields"][] = "direccion_validacion";
$tdatapnc9111[".addFields"][] = "direccion_libre";
$tdatapnc9111[".addFields"][] = "coordenadas_x";
$tdatapnc9111[".addFields"][] = "coordenadas_y";
$tdatapnc9111[".addFields"][] = "departamento";
$tdatapnc9111[".addFields"][] = "municipio";
$tdatapnc9111[".addFields"][] = "ppddsc";
$tdatapnc9111[".addFields"][] = "meses";
$tdatapnc9111[".addFields"][] = "avisos911";

$tdatapnc9111[".masterListFields"] = array();
$tdatapnc9111[".masterListFields"][] = "tipificacion";
$tdatapnc9111[".masterListFields"][] = "direccion_validacion";
$tdatapnc9111[".masterListFields"][] = "direccion_libre";
$tdatapnc9111[".masterListFields"][] = "coordenadas_x";
$tdatapnc9111[".masterListFields"][] = "coordenadas_y";
$tdatapnc9111[".masterListFields"][] = "departamento";
$tdatapnc9111[".masterListFields"][] = "municipio";
$tdatapnc9111[".masterListFields"][] = "ppddsc";
$tdatapnc9111[".masterListFields"][] = "meses";
$tdatapnc9111[".masterListFields"][] = "avisos911";

$tdatapnc9111[".inlineAddFields"] = array();
$tdatapnc9111[".inlineAddFields"][] = "tipificacion";
$tdatapnc9111[".inlineAddFields"][] = "direccion_validacion";
$tdatapnc9111[".inlineAddFields"][] = "direccion_libre";
$tdatapnc9111[".inlineAddFields"][] = "coordenadas_x";
$tdatapnc9111[".inlineAddFields"][] = "coordenadas_y";
$tdatapnc9111[".inlineAddFields"][] = "departamento";
$tdatapnc9111[".inlineAddFields"][] = "municipio";
$tdatapnc9111[".inlineAddFields"][] = "ppddsc";
$tdatapnc9111[".inlineAddFields"][] = "meses";
$tdatapnc9111[".inlineAddFields"][] = "avisos911";

$tdatapnc9111[".editFields"] = array();
$tdatapnc9111[".editFields"][] = "tipificacion";
$tdatapnc9111[".editFields"][] = "direccion_validacion";
$tdatapnc9111[".editFields"][] = "direccion_libre";
$tdatapnc9111[".editFields"][] = "coordenadas_x";
$tdatapnc9111[".editFields"][] = "coordenadas_y";
$tdatapnc9111[".editFields"][] = "departamento";
$tdatapnc9111[".editFields"][] = "municipio";
$tdatapnc9111[".editFields"][] = "ppddsc";
$tdatapnc9111[".editFields"][] = "meses";
$tdatapnc9111[".editFields"][] = "avisos911";

$tdatapnc9111[".inlineEditFields"] = array();
$tdatapnc9111[".inlineEditFields"][] = "tipificacion";
$tdatapnc9111[".inlineEditFields"][] = "direccion_validacion";
$tdatapnc9111[".inlineEditFields"][] = "direccion_libre";
$tdatapnc9111[".inlineEditFields"][] = "coordenadas_x";
$tdatapnc9111[".inlineEditFields"][] = "coordenadas_y";
$tdatapnc9111[".inlineEditFields"][] = "departamento";
$tdatapnc9111[".inlineEditFields"][] = "municipio";
$tdatapnc9111[".inlineEditFields"][] = "ppddsc";
$tdatapnc9111[".inlineEditFields"][] = "meses";
$tdatapnc9111[".inlineEditFields"][] = "avisos911";

$tdatapnc9111[".updateSelectedFields"] = array();
$tdatapnc9111[".updateSelectedFields"][] = "tipificacion";
$tdatapnc9111[".updateSelectedFields"][] = "direccion_validacion";
$tdatapnc9111[".updateSelectedFields"][] = "direccion_libre";
$tdatapnc9111[".updateSelectedFields"][] = "coordenadas_x";
$tdatapnc9111[".updateSelectedFields"][] = "coordenadas_y";
$tdatapnc9111[".updateSelectedFields"][] = "departamento";
$tdatapnc9111[".updateSelectedFields"][] = "municipio";
$tdatapnc9111[".updateSelectedFields"][] = "ppddsc";
$tdatapnc9111[".updateSelectedFields"][] = "meses";
$tdatapnc9111[".updateSelectedFields"][] = "avisos911";


$tdatapnc9111[".exportFields"] = array();
$tdatapnc9111[".exportFields"][] = "tipificacion";
$tdatapnc9111[".exportFields"][] = "direccion_validacion";
$tdatapnc9111[".exportFields"][] = "direccion_libre";
$tdatapnc9111[".exportFields"][] = "coordenadas_x";
$tdatapnc9111[".exportFields"][] = "coordenadas_y";
$tdatapnc9111[".exportFields"][] = "departamento";
$tdatapnc9111[".exportFields"][] = "municipio";
$tdatapnc9111[".exportFields"][] = "ppddsc";
$tdatapnc9111[".exportFields"][] = "meses";
$tdatapnc9111[".exportFields"][] = "avisos911";

$tdatapnc9111[".importFields"] = array();
$tdatapnc9111[".importFields"][] = "tipificacion";
$tdatapnc9111[".importFields"][] = "direccion_validacion";
$tdatapnc9111[".importFields"][] = "direccion_libre";
$tdatapnc9111[".importFields"][] = "coordenadas_x";
$tdatapnc9111[".importFields"][] = "coordenadas_y";
$tdatapnc9111[".importFields"][] = "departamento";
$tdatapnc9111[".importFields"][] = "municipio";
$tdatapnc9111[".importFields"][] = "ppddsc";
$tdatapnc9111[".importFields"][] = "meses";
$tdatapnc9111[".importFields"][] = "avisos911";

$tdatapnc9111[".printFields"] = array();
$tdatapnc9111[".printFields"][] = "tipificacion";
$tdatapnc9111[".printFields"][] = "direccion_validacion";
$tdatapnc9111[".printFields"][] = "direccion_libre";
$tdatapnc9111[".printFields"][] = "coordenadas_x";
$tdatapnc9111[".printFields"][] = "coordenadas_y";
$tdatapnc9111[".printFields"][] = "departamento";
$tdatapnc9111[".printFields"][] = "municipio";
$tdatapnc9111[".printFields"][] = "ppddsc";
$tdatapnc9111[".printFields"][] = "meses";
$tdatapnc9111[".printFields"][] = "avisos911";

//	tipificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tipificacion";
	$fdata["GoodName"] = "tipificacion";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc9111","tipificacion");
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




	$tdatapnc9111["tipificacion"] = $fdata;
//	direccion_validacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "direccion_validacion";
	$fdata["GoodName"] = "direccion_validacion";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc9111","direccion_validacion");
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




	$tdatapnc9111["direccion_validacion"] = $fdata;
//	direccion_libre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "direccion_libre";
	$fdata["GoodName"] = "direccion_libre";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc9111","direccion_libre");
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




	$tdatapnc9111["direccion_libre"] = $fdata;
//	coordenadas_x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "coordenadas_x";
	$fdata["GoodName"] = "coordenadas_x";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc9111","coordenadas_x");
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




	$tdatapnc9111["coordenadas_x"] = $fdata;
//	coordenadas_y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "coordenadas_y";
	$fdata["GoodName"] = "coordenadas_y";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc9111","coordenadas_y");
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




	$tdatapnc9111["coordenadas_y"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc9111","departamento");
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




	$tdatapnc9111["departamento"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc9111","municipio");
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




	$tdatapnc9111["municipio"] = $fdata;
//	ppddsc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ppddsc";
	$fdata["GoodName"] = "ppddsc";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc9111","ppddsc");
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




	$tdatapnc9111["ppddsc"] = $fdata;
//	meses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "meses";
	$fdata["GoodName"] = "meses";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc9111","meses");
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




	$tdatapnc9111["meses"] = $fdata;
//	avisos911
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "avisos911";
	$fdata["GoodName"] = "avisos911";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc9111","avisos911");
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




	$tdatapnc9111["avisos911"] = $fdata;


$tables_data["pnc9111"]=&$tdatapnc9111;
$field_labels["pnc9111"] = &$fieldLabelspnc9111;
$fieldToolTips["pnc9111"] = &$fieldToolTipspnc9111;
$placeHolders["pnc9111"] = &$placeHolderspnc9111;
$page_titles["pnc9111"] = &$pageTitlespnc9111;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pnc9111"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["pnc9111"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pnc9111()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tipificacion,  	direccion_validacion,  	direccion_libre,  	coordenadas_x,  	coordenadas_y,  	departamento,  	municipio,  	ppddsc,  	meses,  	avisos911";
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
	"m_strName" => "tipificacion",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc9111"
));

$proto6["m_sql"] = "tipificacion";
$proto6["m_srcTableName"] = "pnc9111";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion_validacion",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc9111"
));

$proto8["m_sql"] = "direccion_validacion";
$proto8["m_srcTableName"] = "pnc9111";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion_libre",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc9111"
));

$proto10["m_sql"] = "direccion_libre";
$proto10["m_srcTableName"] = "pnc9111";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "coordenadas_x",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc9111"
));

$proto12["m_sql"] = "coordenadas_x";
$proto12["m_srcTableName"] = "pnc9111";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "coordenadas_y",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc9111"
));

$proto14["m_sql"] = "coordenadas_y";
$proto14["m_srcTableName"] = "pnc9111";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc9111"
));

$proto16["m_sql"] = "departamento";
$proto16["m_srcTableName"] = "pnc9111";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc9111"
));

$proto18["m_sql"] = "municipio";
$proto18["m_srcTableName"] = "pnc9111";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ppddsc",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc9111"
));

$proto20["m_sql"] = "ppddsc";
$proto20["m_srcTableName"] = "pnc9111";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "meses",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc9111"
));

$proto22["m_sql"] = "meses";
$proto22["m_srcTableName"] = "pnc9111";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "avisos911",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc9111"
));

$proto24["m_sql"] = "avisos911";
$proto24["m_srcTableName"] = "pnc9111";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "pnc911";
$proto27["m_srcTableName"] = "pnc9111";
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
$proto26["m_srcTableName"] = "pnc9111";
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
$proto0["m_srcTableName"]="pnc9111";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pnc9111 = createSqlQuery_pnc9111();


	
		;

										

$tdatapnc9111[".sqlquery"] = $queryData_pnc9111;

$tableEvents["pnc9111"] = new eventsBase;
$tdatapnc9111[".hasEvents"] = false;

?>