<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMINED_INDICE = array();
	$tdataMINED_INDICE[".truncateText"] = true;
	$tdataMINED_INDICE[".NumberOfChars"] = 80;
	$tdataMINED_INDICE[".ShortName"] = "MINED_INDICE";
	$tdataMINED_INDICE[".OwnerID"] = "";
	$tdataMINED_INDICE[".OriginalTable"] = "mined";

//	field labels
$fieldLabelsMINED_INDICE = array();
$fieldToolTipsMINED_INDICE = array();
$pageTitlesMINED_INDICE = array();
$placeHoldersMINED_INDICE = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsMINED_INDICE["Spanish"] = array();
	$fieldToolTipsMINED_INDICE["Spanish"] = array();
	$placeHoldersMINED_INDICE["Spanish"] = array();
	$pageTitlesMINED_INDICE["Spanish"] = array();
	$fieldLabelsMINED_INDICE["Spanish"]["x"] = "X";
	$fieldToolTipsMINED_INDICE["Spanish"]["x"] = "";
	$placeHoldersMINED_INDICE["Spanish"]["x"] = "";
	$fieldLabelsMINED_INDICE["Spanish"]["y"] = "Y";
	$fieldToolTipsMINED_INDICE["Spanish"]["y"] = "";
	$placeHoldersMINED_INDICE["Spanish"]["y"] = "";
	$fieldLabelsMINED_INDICE["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsMINED_INDICE["Spanish"]["departamento"] = "";
	$placeHoldersMINED_INDICE["Spanish"]["departamento"] = "";
	$fieldLabelsMINED_INDICE["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsMINED_INDICE["Spanish"]["municipio"] = "";
	$placeHoldersMINED_INDICE["Spanish"]["municipio"] = "";
	$fieldLabelsMINED_INDICE["Spanish"]["sector_ppd"] = "SECTOR PPD";
	$fieldToolTipsMINED_INDICE["Spanish"]["sector_ppd"] = "";
	$placeHoldersMINED_INDICE["Spanish"]["sector_ppd"] = "";
	$fieldLabelsMINED_INDICE["Spanish"]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsMINED_INDICE["Spanish"]["nombre_c_e"] = "";
	$placeHoldersMINED_INDICE["Spanish"]["nombre_c_e"] = "";
	$fieldLabelsMINED_INDICE["Spanish"]["DisplayOnMap"] = "ENCABEZADO";
	$fieldToolTipsMINED_INDICE["Spanish"]["DisplayOnMap"] = "";
	$placeHoldersMINED_INDICE["Spanish"]["DisplayOnMap"] = "";
	$fieldLabelsMINED_INDICE["Spanish"]["ipce_0_1"] = "IPCE";
	$fieldToolTipsMINED_INDICE["Spanish"]["ipce_0_1"] = "";
	$placeHoldersMINED_INDICE["Spanish"]["ipce_0_1"] = "";
	$fieldLabelsMINED_INDICE["Spanish"]["codigo"] = "CODIGO";
	$fieldToolTipsMINED_INDICE["Spanish"]["codigo"] = "";
	$placeHoldersMINED_INDICE["Spanish"]["codigo"] = "";
	if (count($fieldToolTipsMINED_INDICE["Spanish"]))
		$tdataMINED_INDICE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMINED_INDICE["English"] = array();
	$fieldToolTipsMINED_INDICE["English"] = array();
	$placeHoldersMINED_INDICE["English"] = array();
	$pageTitlesMINED_INDICE["English"] = array();
	$fieldLabelsMINED_INDICE["English"]["x"] = "X";
	$fieldToolTipsMINED_INDICE["English"]["x"] = "";
	$placeHoldersMINED_INDICE["English"]["x"] = "";
	$fieldLabelsMINED_INDICE["English"]["y"] = "Y";
	$fieldToolTipsMINED_INDICE["English"]["y"] = "";
	$placeHoldersMINED_INDICE["English"]["y"] = "";
	$fieldLabelsMINED_INDICE["English"]["departamento"] = "Departamento";
	$fieldToolTipsMINED_INDICE["English"]["departamento"] = "";
	$placeHoldersMINED_INDICE["English"]["departamento"] = "";
	$fieldLabelsMINED_INDICE["English"]["municipio"] = "Municipio";
	$fieldToolTipsMINED_INDICE["English"]["municipio"] = "";
	$placeHoldersMINED_INDICE["English"]["municipio"] = "";
	$fieldLabelsMINED_INDICE["English"]["sector_ppd"] = "SECTOR PPD";
	$fieldToolTipsMINED_INDICE["English"]["sector_ppd"] = "";
	$placeHoldersMINED_INDICE["English"]["sector_ppd"] = "";
	$fieldLabelsMINED_INDICE["English"]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsMINED_INDICE["English"]["nombre_c_e"] = "";
	$placeHoldersMINED_INDICE["English"]["nombre_c_e"] = "";
	$fieldLabelsMINED_INDICE["English"]["DisplayOnMap"] = "ENCABEZADO";
	$fieldToolTipsMINED_INDICE["English"]["DisplayOnMap"] = "";
	$placeHoldersMINED_INDICE["English"]["DisplayOnMap"] = "";
	$fieldLabelsMINED_INDICE["English"]["ipce_0_1"] = "IPCE";
	$fieldToolTipsMINED_INDICE["English"]["ipce_0_1"] = "";
	$placeHoldersMINED_INDICE["English"]["ipce_0_1"] = "";
	$fieldLabelsMINED_INDICE["English"]["codigo"] = "CODIGO";
	$fieldToolTipsMINED_INDICE["English"]["codigo"] = "";
	$placeHoldersMINED_INDICE["English"]["codigo"] = "";
	if (count($fieldToolTipsMINED_INDICE["English"]))
		$tdataMINED_INDICE[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMINED_INDICE[""] = array();
	$fieldToolTipsMINED_INDICE[""] = array();
	$placeHoldersMINED_INDICE[""] = array();
	$pageTitlesMINED_INDICE[""] = array();
	$fieldLabelsMINED_INDICE[""]["x"] = "X";
	$fieldToolTipsMINED_INDICE[""]["x"] = "";
	$placeHoldersMINED_INDICE[""]["x"] = "";
	$fieldLabelsMINED_INDICE[""]["y"] = "Y";
	$fieldToolTipsMINED_INDICE[""]["y"] = "";
	$placeHoldersMINED_INDICE[""]["y"] = "";
	$fieldLabelsMINED_INDICE[""]["departamento"] = "Departamento";
	$fieldToolTipsMINED_INDICE[""]["departamento"] = "";
	$placeHoldersMINED_INDICE[""]["departamento"] = "";
	$fieldLabelsMINED_INDICE[""]["municipio"] = "Municipio";
	$fieldToolTipsMINED_INDICE[""]["municipio"] = "";
	$placeHoldersMINED_INDICE[""]["municipio"] = "";
	$fieldLabelsMINED_INDICE[""]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsMINED_INDICE[""]["sector_ppd"] = "";
	$placeHoldersMINED_INDICE[""]["sector_ppd"] = "";
	$fieldLabelsMINED_INDICE[""]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsMINED_INDICE[""]["nombre_c_e"] = "";
	$placeHoldersMINED_INDICE[""]["nombre_c_e"] = "";
	$fieldLabelsMINED_INDICE[""]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsMINED_INDICE[""]["DisplayOnMap"] = "";
	$placeHoldersMINED_INDICE[""]["DisplayOnMap"] = "";
	$fieldLabelsMINED_INDICE[""]["ipce_0_1"] = "Ipce 0 1";
	$fieldToolTipsMINED_INDICE[""]["ipce_0_1"] = "";
	$placeHoldersMINED_INDICE[""]["ipce_0_1"] = "";
	$fieldLabelsMINED_INDICE[""]["codigo"] = "Codigo";
	$fieldToolTipsMINED_INDICE[""]["codigo"] = "";
	$placeHoldersMINED_INDICE[""]["codigo"] = "";
	if (count($fieldToolTipsMINED_INDICE[""]))
		$tdataMINED_INDICE[".isUseToolTips"] = true;
}


	$tdataMINED_INDICE[".NCSearch"] = true;



$tdataMINED_INDICE[".shortTableName"] = "MINED_INDICE";
$tdataMINED_INDICE[".nSecOptions"] = 0;
$tdataMINED_INDICE[".recsPerRowPrint"] = 1;
$tdataMINED_INDICE[".mainTableOwnerID"] = "";
$tdataMINED_INDICE[".moveNext"] = 1;
$tdataMINED_INDICE[".entityType"] = 1;

$tdataMINED_INDICE[".strOriginalTableName"] = "mined";

	



$tdataMINED_INDICE[".showAddInPopup"] = false;

$tdataMINED_INDICE[".showEditInPopup"] = false;

$tdataMINED_INDICE[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMINED_INDICE[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMINED_INDICE[".fieldsForRegister"] = array();

	$tdataMINED_INDICE[".listAjax"] = true;

	$tdataMINED_INDICE[".audit"] = false;

	$tdataMINED_INDICE[".locking"] = false;

$tdataMINED_INDICE[".edit"] = true;
$tdataMINED_INDICE[".afterEditAction"] = 1;
$tdataMINED_INDICE[".closePopupAfterEdit"] = 1;
$tdataMINED_INDICE[".afterEditActionDetTable"] = "";

$tdataMINED_INDICE[".add"] = true;
$tdataMINED_INDICE[".afterAddAction"] = 1;
$tdataMINED_INDICE[".closePopupAfterAdd"] = 1;
$tdataMINED_INDICE[".afterAddActionDetTable"] = "";

$tdataMINED_INDICE[".list"] = true;

$tdataMINED_INDICE[".inlineEdit"] = true;

$tdataMINED_INDICE[".updateSelected"] = true;

$tdataMINED_INDICE[".reorderRecordsByHeader"] = true;
$tdataMINED_INDICE[".createSortByDropdown"] = true;
$tdataMINED_INDICE[".strSortControlSettingsJSON"] = "";



$tdataMINED_INDICE[".inlineAdd"] = true;
$tdataMINED_INDICE[".view"] = true;

$tdataMINED_INDICE[".import"] = true;

$tdataMINED_INDICE[".exportTo"] = true;

$tdataMINED_INDICE[".printFriendly"] = true;


$tdataMINED_INDICE[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataMINED_INDICE[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataMINED_INDICE[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataMINED_INDICE[".searchSaving"] = false;
//

$tdataMINED_INDICE[".showSearchPanel"] = true;
		$tdataMINED_INDICE[".flexibleSearch"] = true;

$tdataMINED_INDICE[".isUseAjaxSuggest"] = true;

$tdataMINED_INDICE[".rowHighlite"] = true;





$tdataMINED_INDICE[".ajaxCodeSnippetAdded"] = false;

$tdataMINED_INDICE[".buttonsAdded"] = false;

$tdataMINED_INDICE[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMINED_INDICE[".isUseTimeForSearch"] = false;


		$tdataMINED_INDICE[".isUseMainMaps"] = true;

$tdataMINED_INDICE[".badgeColor"] = "00c2c5";


$tdataMINED_INDICE[".allSearchFields"] = array();
$tdataMINED_INDICE[".filterFields"] = array();
$tdataMINED_INDICE[".requiredSearchFields"] = array();

$tdataMINED_INDICE[".allSearchFields"][] = "departamento";
	$tdataMINED_INDICE[".allSearchFields"][] = "municipio";
	$tdataMINED_INDICE[".allSearchFields"][] = "sector_ppd";
	$tdataMINED_INDICE[".allSearchFields"][] = "nombre_c_e";
	$tdataMINED_INDICE[".allSearchFields"][] = "ipce_0_1";
	$tdataMINED_INDICE[".allSearchFields"][] = "codigo";
	

$tdataMINED_INDICE[".googleLikeFields"] = array();
$tdataMINED_INDICE[".googleLikeFields"][] = "departamento";
$tdataMINED_INDICE[".googleLikeFields"][] = "municipio";
$tdataMINED_INDICE[".googleLikeFields"][] = "sector_ppd";
$tdataMINED_INDICE[".googleLikeFields"][] = "ipce_0_1";
$tdataMINED_INDICE[".googleLikeFields"][] = "codigo";


$tdataMINED_INDICE[".advSearchFields"] = array();
$tdataMINED_INDICE[".advSearchFields"][] = "departamento";
$tdataMINED_INDICE[".advSearchFields"][] = "municipio";
$tdataMINED_INDICE[".advSearchFields"][] = "sector_ppd";
$tdataMINED_INDICE[".advSearchFields"][] = "nombre_c_e";
$tdataMINED_INDICE[".advSearchFields"][] = "ipce_0_1";
$tdataMINED_INDICE[".advSearchFields"][] = "codigo";

$tdataMINED_INDICE[".tableType"] = "list";

$tdataMINED_INDICE[".printerPageOrientation"] = 0;
$tdataMINED_INDICE[".nPrinterPageScale"] = 100;

$tdataMINED_INDICE[".nPrinterSplitRecords"] = 40;

$tdataMINED_INDICE[".nPrinterPDFSplitRecords"] = 40;



$tdataMINED_INDICE[".geocodingEnabled"] = true;
$tdataMINED_INDICE[".geocodingData"] = array();
$tdataMINED_INDICE[".geocodingData"]["latField"] = "y";
$tdataMINED_INDICE[".geocodingData"]["lngField"] = "x";
$tdataMINED_INDICE[".geocodingData"]["addressFields"] = array();
	$tdataMINED_INDICE[".geocodingData"]["addressFields"][] = "departamento";
	$tdataMINED_INDICE[".geocodingData"]["addressFields"][] = "municipio";
	$tdataMINED_INDICE[".geocodingData"]["addressFields"][] = "ipce_0_1";
	$tdataMINED_INDICE[".geocodingData"]["addressFields"][] = "sector_ppd";
	$tdataMINED_INDICE[".geocodingData"]["addressFields"][] = "x";
	$tdataMINED_INDICE[".geocodingData"]["addressFields"][] = "y";
	$tdataMINED_INDICE[".geocodingData"]["addressFields"][] = "DisplayOnMap";





$tdataMINED_INDICE[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataMINED_INDICE[".pageSize"] = 20;

$tdataMINED_INDICE[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMINED_INDICE[".strOrderBy"] = $tstrOrderBy;

$tdataMINED_INDICE[".orderindexes"] = array();

$tdataMINED_INDICE[".sqlHead"] = "SELECT x,  y,  departamento,  municipio,  sector_ppd,  nombre_c_e,  ipce_0_1,  concat('Nombre del Centro:  ', nombre_c_e, '\\n', 'IPCE:  ', ipce_0_1, '\\n', 'Sector Estandarizado: ', sector_ppd) AS DisplayOnMap,  codigo";
$tdataMINED_INDICE[".sqlFrom"] = "FROM mined";
$tdataMINED_INDICE[".sqlWhereExpr"] = "";
$tdataMINED_INDICE[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMINED_INDICE[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMINED_INDICE[".arrGroupsPerPage"] = $arrGPP;

$tdataMINED_INDICE[".highlightSearchResults"] = true;

$tableKeysMINED_INDICE = array();
$tableKeysMINED_INDICE[] = "x";
$tableKeysMINED_INDICE[] = "y";
$tdataMINED_INDICE[".Keys"] = $tableKeysMINED_INDICE;

$tdataMINED_INDICE[".listFields"] = array();
$tdataMINED_INDICE[".listFields"][] = "x";
$tdataMINED_INDICE[".listFields"][] = "y";
$tdataMINED_INDICE[".listFields"][] = "departamento";
$tdataMINED_INDICE[".listFields"][] = "municipio";
$tdataMINED_INDICE[".listFields"][] = "sector_ppd";
$tdataMINED_INDICE[".listFields"][] = "nombre_c_e";
$tdataMINED_INDICE[".listFields"][] = "ipce_0_1";
$tdataMINED_INDICE[".listFields"][] = "DisplayOnMap";
$tdataMINED_INDICE[".listFields"][] = "codigo";

$tdataMINED_INDICE[".hideMobileList"] = array();


$tdataMINED_INDICE[".viewFields"] = array();
$tdataMINED_INDICE[".viewFields"][] = "ipce_0_1";
$tdataMINED_INDICE[".viewFields"][] = "DisplayOnMap";
$tdataMINED_INDICE[".viewFields"][] = "codigo";

$tdataMINED_INDICE[".addFields"] = array();
$tdataMINED_INDICE[".addFields"][] = "ipce_0_1";
$tdataMINED_INDICE[".addFields"][] = "codigo";

$tdataMINED_INDICE[".masterListFields"] = array();
$tdataMINED_INDICE[".masterListFields"][] = "x";
$tdataMINED_INDICE[".masterListFields"][] = "y";
$tdataMINED_INDICE[".masterListFields"][] = "departamento";
$tdataMINED_INDICE[".masterListFields"][] = "municipio";
$tdataMINED_INDICE[".masterListFields"][] = "sector_ppd";
$tdataMINED_INDICE[".masterListFields"][] = "nombre_c_e";
$tdataMINED_INDICE[".masterListFields"][] = "ipce_0_1";
$tdataMINED_INDICE[".masterListFields"][] = "DisplayOnMap";
$tdataMINED_INDICE[".masterListFields"][] = "codigo";

$tdataMINED_INDICE[".inlineAddFields"] = array();
$tdataMINED_INDICE[".inlineAddFields"][] = "ipce_0_1";
$tdataMINED_INDICE[".inlineAddFields"][] = "codigo";

$tdataMINED_INDICE[".editFields"] = array();
$tdataMINED_INDICE[".editFields"][] = "ipce_0_1";
$tdataMINED_INDICE[".editFields"][] = "codigo";

$tdataMINED_INDICE[".inlineEditFields"] = array();
$tdataMINED_INDICE[".inlineEditFields"][] = "ipce_0_1";
$tdataMINED_INDICE[".inlineEditFields"][] = "codigo";

$tdataMINED_INDICE[".updateSelectedFields"] = array();
$tdataMINED_INDICE[".updateSelectedFields"][] = "ipce_0_1";


$tdataMINED_INDICE[".exportFields"] = array();
$tdataMINED_INDICE[".exportFields"][] = "x";
$tdataMINED_INDICE[".exportFields"][] = "y";
$tdataMINED_INDICE[".exportFields"][] = "departamento";
$tdataMINED_INDICE[".exportFields"][] = "municipio";
$tdataMINED_INDICE[".exportFields"][] = "sector_ppd";
$tdataMINED_INDICE[".exportFields"][] = "nombre_c_e";
$tdataMINED_INDICE[".exportFields"][] = "ipce_0_1";
$tdataMINED_INDICE[".exportFields"][] = "DisplayOnMap";
$tdataMINED_INDICE[".exportFields"][] = "codigo";

$tdataMINED_INDICE[".importFields"] = array();
$tdataMINED_INDICE[".importFields"][] = "x";
$tdataMINED_INDICE[".importFields"][] = "y";
$tdataMINED_INDICE[".importFields"][] = "departamento";
$tdataMINED_INDICE[".importFields"][] = "municipio";
$tdataMINED_INDICE[".importFields"][] = "sector_ppd";
$tdataMINED_INDICE[".importFields"][] = "nombre_c_e";
$tdataMINED_INDICE[".importFields"][] = "ipce_0_1";
$tdataMINED_INDICE[".importFields"][] = "DisplayOnMap";
$tdataMINED_INDICE[".importFields"][] = "codigo";

$tdataMINED_INDICE[".printFields"] = array();
$tdataMINED_INDICE[".printFields"][] = "x";
$tdataMINED_INDICE[".printFields"][] = "y";
$tdataMINED_INDICE[".printFields"][] = "departamento";
$tdataMINED_INDICE[".printFields"][] = "municipio";
$tdataMINED_INDICE[".printFields"][] = "sector_ppd";
$tdataMINED_INDICE[".printFields"][] = "nombre_c_e";
$tdataMINED_INDICE[".printFields"][] = "ipce_0_1";
$tdataMINED_INDICE[".printFields"][] = "DisplayOnMap";
$tdataMINED_INDICE[".printFields"][] = "codigo";

//	x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "x";
	$fdata["GoodName"] = "x";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("MINED_INDICE","x");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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








	$tdataMINED_INDICE["x"] = $fdata;
//	y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "y";
	$fdata["GoodName"] = "y";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("MINED_INDICE","y");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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








	$tdataMINED_INDICE["y"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("MINED_INDICE","departamento");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataMINED_INDICE["departamento"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("MINED_INDICE","municipio");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataMINED_INDICE["municipio"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("MINED_INDICE","sector_ppd");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sector_ppd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sector_ppd";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataMINED_INDICE["sector_ppd"] = $fdata;
//	nombre_c_e
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nombre_c_e";
	$fdata["GoodName"] = "nombre_c_e";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("MINED_INDICE","nombre_c_e");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nombre_c_e";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_c_e";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataMINED_INDICE["nombre_c_e"] = $fdata;
//	ipce_0_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ipce_0_1";
	$fdata["GoodName"] = "ipce_0_1";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("MINED_INDICE","ipce_0_1");
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

		$fdata["strField"] = "ipce_0_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ipce_0_1";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataMINED_INDICE["ipce_0_1"] = $fdata;
//	DisplayOnMap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DisplayOnMap";
	$fdata["GoodName"] = "DisplayOnMap";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MINED_INDICE","DisplayOnMap");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DisplayOnMap";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat('Nombre del Centro:  ', nombre_c_e, '\\n', 'IPCE:  ', ipce_0_1, '\\n', 'Sector Estandarizado: ', sector_ppd)";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataMINED_INDICE["DisplayOnMap"] = $fdata;
//	codigo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "codigo";
	$fdata["GoodName"] = "codigo";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("MINED_INDICE","codigo");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "codigo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigo";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataMINED_INDICE["codigo"] = $fdata;


$tables_data["MINED INDICE"]=&$tdataMINED_INDICE;
$field_labels["MINED_INDICE"] = &$fieldLabelsMINED_INDICE;
$fieldToolTips["MINED_INDICE"] = &$fieldToolTipsMINED_INDICE;
$placeHolders["MINED_INDICE"] = &$placeHoldersMINED_INDICE;
$page_titles["MINED_INDICE"] = &$pageTitlesMINED_INDICE;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["MINED INDICE"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["MINED INDICE"] = array();


	
	// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_MINED_INDICE()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "x,  y,  departamento,  municipio,  sector_ppd,  nombre_c_e,  ipce_0_1,  concat('Nombre del Centro:  ', nombre_c_e, '\\n', 'IPCE:  ', ipce_0_1, '\\n', 'Sector Estandarizado: ', sector_ppd) AS DisplayOnMap,  codigo";
$proto0["m_strFrom"] = "FROM mined";
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
	"m_strName" => "x",
	"m_strTable" => "mined",
	"m_srcTableName" => "MINED INDICE"
));

$proto6["m_sql"] = "x";
$proto6["m_srcTableName"] = "MINED INDICE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "y",
	"m_strTable" => "mined",
	"m_srcTableName" => "MINED INDICE"
));

$proto8["m_sql"] = "y";
$proto8["m_srcTableName"] = "MINED INDICE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "mined",
	"m_srcTableName" => "MINED INDICE"
));

$proto10["m_sql"] = "departamento";
$proto10["m_srcTableName"] = "MINED INDICE";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "mined",
	"m_srcTableName" => "MINED INDICE"
));

$proto12["m_sql"] = "municipio";
$proto12["m_srcTableName"] = "MINED INDICE";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "mined",
	"m_srcTableName" => "MINED INDICE"
));

$proto14["m_sql"] = "sector_ppd";
$proto14["m_srcTableName"] = "MINED INDICE";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_c_e",
	"m_strTable" => "mined",
	"m_srcTableName" => "MINED INDICE"
));

$proto16["m_sql"] = "nombre_c_e";
$proto16["m_srcTableName"] = "MINED INDICE";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ipce_0_1",
	"m_strTable" => "mined",
	"m_srcTableName" => "MINED INDICE"
));

$proto18["m_sql"] = "ipce_0_1";
$proto18["m_srcTableName"] = "MINED INDICE";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_CUSTOM";
$proto21["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "'Nombre del Centro:  '"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "nombre_c_e"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'IPCE:  '"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ipce_0_1"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'Sector Estandarizado: '"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sector_ppd"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "concat('Nombre del Centro:  ', nombre_c_e, '\\n', 'IPCE:  ', ipce_0_1, '\\n', 'Sector Estandarizado: ', sector_ppd)";
$proto20["m_srcTableName"] = "MINED INDICE";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "DisplayOnMap";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo",
	"m_strTable" => "mined",
	"m_srcTableName" => "MINED INDICE"
));

$proto30["m_sql"] = "codigo";
$proto30["m_srcTableName"] = "MINED INDICE";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "mined";
$proto33["m_srcTableName"] = "MINED INDICE";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "idderespuesta";
$proto33["m_columns"][] = "codigo";
$proto33["m_columns"][] = "depto";
$proto33["m_columns"][] = "departamento";
$proto33["m_columns"][] = "mun";
$proto33["m_columns"][] = "municipio";
$proto33["m_columns"][] = "nombre_c_e";
$proto33["m_columns"][] = "x";
$proto33["m_columns"][] = "y";
$proto33["m_columns"][] = "sector_ppd";
$proto33["m_columns"][] = "matricula_inicial";
$proto33["m_columns"][] = "matricula_final";
$proto33["m_columns"][] = "maras";
$proto33["m_columns"][] = "robos";
$proto33["m_columns"][] = "hurtos";
$proto33["m_columns"][] = "drogas";
$proto33["m_columns"][] = "violaciones";
$proto33["m_columns"][] = "pab";
$proto33["m_columns"][] = "paf";
$proto33["m_columns"][] = "escasos_recursos";
$proto33["m_columns"][] = "incorpo_actividades_prod";
$proto33["m_columns"][] = "lejania_ce";
$proto33["m_columns"][] = "violencia_pandilleril";
$proto33["m_columns"][] = "embarazo";
$proto33["m_columns"][] = "acoso";
$proto33["m_columns"][] = "violacion_sexual";
$proto33["m_columns"][] = "cambio_domicilio";
$proto33["m_columns"][] = "migracion";
$proto33["m_columns"][] = "bajo_rendimiento";
$proto33["m_columns"][] = "enfermedad";
$proto33["m_columns"][] = "prostitucion";
$proto33["m_columns"][] = "dep_mun";
$proto33["m_columns"][] = "max_matric2016";
$proto33["m_columns"][] = "mrf2016";
$proto33["m_columns"][] = "pab_af";
$proto33["m_columns"][] = "r_h";
$proto33["m_columns"][] = "ipce_naive";
$proto33["m_columns"][] = "ipce_0_1";
$proto33["m_columns"][] = "aÑo";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "mined";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "MINED INDICE";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="MINED INDICE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_MINED_INDICE = createSqlQuery_MINED_INDICE();


	
		;

									

$tdataMINED_INDICE[".sqlquery"] = $queryData_MINED_INDICE;

include_once(getabspath("include/MINED_INDICE_events.php"));
$tableEvents["MINED INDICE"] = new eventclass_MINED_INDICE;
$tdataMINED_INDICE[".hasEvents"] = true;

?>