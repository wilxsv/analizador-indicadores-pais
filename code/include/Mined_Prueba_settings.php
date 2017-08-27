<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMined_Prueba = array();
	$tdataMined_Prueba[".truncateText"] = true;
	$tdataMined_Prueba[".NumberOfChars"] = 80;
	$tdataMined_Prueba[".ShortName"] = "Mined_Prueba";
	$tdataMined_Prueba[".OwnerID"] = "";
	$tdataMined_Prueba[".OriginalTable"] = "mined";

//	field labels
$fieldLabelsMined_Prueba = array();
$fieldToolTipsMined_Prueba = array();
$pageTitlesMined_Prueba = array();
$placeHoldersMined_Prueba = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsMined_Prueba["Spanish"] = array();
	$fieldToolTipsMined_Prueba["Spanish"] = array();
	$placeHoldersMined_Prueba["Spanish"] = array();
	$pageTitlesMined_Prueba["Spanish"] = array();
	$fieldLabelsMined_Prueba["Spanish"]["x"] = "X";
	$fieldToolTipsMined_Prueba["Spanish"]["x"] = "";
	$placeHoldersMined_Prueba["Spanish"]["x"] = "";
	$fieldLabelsMined_Prueba["Spanish"]["y"] = "Y";
	$fieldToolTipsMined_Prueba["Spanish"]["y"] = "";
	$placeHoldersMined_Prueba["Spanish"]["y"] = "";
	$fieldLabelsMined_Prueba["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsMined_Prueba["Spanish"]["departamento"] = "";
	$placeHoldersMined_Prueba["Spanish"]["departamento"] = "";
	$fieldLabelsMined_Prueba["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsMined_Prueba["Spanish"]["municipio"] = "";
	$placeHoldersMined_Prueba["Spanish"]["municipio"] = "";
	$fieldLabelsMined_Prueba["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsMined_Prueba["Spanish"]["sector_ppd"] = "";
	$placeHoldersMined_Prueba["Spanish"]["sector_ppd"] = "";
	$fieldLabelsMined_Prueba["Spanish"]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsMined_Prueba["Spanish"]["nombre_c_e"] = "";
	$placeHoldersMined_Prueba["Spanish"]["nombre_c_e"] = "";
	$fieldLabelsMined_Prueba["Spanish"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsMined_Prueba["Spanish"]["DisplayOnMap"] = "";
	$placeHoldersMined_Prueba["Spanish"]["DisplayOnMap"] = "";
	$fieldLabelsMined_Prueba["Spanish"]["ipce_0_1"] = "Ipce 0 1";
	$fieldToolTipsMined_Prueba["Spanish"]["ipce_0_1"] = "";
	$placeHoldersMined_Prueba["Spanish"]["ipce_0_1"] = "";
	if (count($fieldToolTipsMined_Prueba["Spanish"]))
		$tdataMined_Prueba[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMined_Prueba["English"] = array();
	$fieldToolTipsMined_Prueba["English"] = array();
	$placeHoldersMined_Prueba["English"] = array();
	$pageTitlesMined_Prueba["English"] = array();
	$fieldLabelsMined_Prueba["English"]["x"] = "X";
	$fieldToolTipsMined_Prueba["English"]["x"] = "";
	$placeHoldersMined_Prueba["English"]["x"] = "";
	$fieldLabelsMined_Prueba["English"]["y"] = "Y";
	$fieldToolTipsMined_Prueba["English"]["y"] = "";
	$placeHoldersMined_Prueba["English"]["y"] = "";
	$fieldLabelsMined_Prueba["English"]["departamento"] = "Departamento";
	$fieldToolTipsMined_Prueba["English"]["departamento"] = "";
	$placeHoldersMined_Prueba["English"]["departamento"] = "";
	$fieldLabelsMined_Prueba["English"]["municipio"] = "Municipio";
	$fieldToolTipsMined_Prueba["English"]["municipio"] = "";
	$placeHoldersMined_Prueba["English"]["municipio"] = "";
	$fieldLabelsMined_Prueba["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsMined_Prueba["English"]["sector_ppd"] = "";
	$placeHoldersMined_Prueba["English"]["sector_ppd"] = "";
	$fieldLabelsMined_Prueba["English"]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsMined_Prueba["English"]["nombre_c_e"] = "";
	$placeHoldersMined_Prueba["English"]["nombre_c_e"] = "";
	$fieldLabelsMined_Prueba["English"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsMined_Prueba["English"]["DisplayOnMap"] = "";
	$placeHoldersMined_Prueba["English"]["DisplayOnMap"] = "";
	$fieldLabelsMined_Prueba["English"]["ipce_0_1"] = "Ipce 0 1";
	$fieldToolTipsMined_Prueba["English"]["ipce_0_1"] = "";
	$placeHoldersMined_Prueba["English"]["ipce_0_1"] = "";
	if (count($fieldToolTipsMined_Prueba["English"]))
		$tdataMined_Prueba[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMined_Prueba[""] = array();
	$fieldToolTipsMined_Prueba[""] = array();
	$placeHoldersMined_Prueba[""] = array();
	$pageTitlesMined_Prueba[""] = array();
	$fieldLabelsMined_Prueba[""]["x"] = "X";
	$fieldToolTipsMined_Prueba[""]["x"] = "";
	$placeHoldersMined_Prueba[""]["x"] = "";
	$fieldLabelsMined_Prueba[""]["y"] = "Y";
	$fieldToolTipsMined_Prueba[""]["y"] = "";
	$placeHoldersMined_Prueba[""]["y"] = "";
	$fieldLabelsMined_Prueba[""]["departamento"] = "Departamento";
	$fieldToolTipsMined_Prueba[""]["departamento"] = "";
	$placeHoldersMined_Prueba[""]["departamento"] = "";
	$fieldLabelsMined_Prueba[""]["municipio"] = "Municipio";
	$fieldToolTipsMined_Prueba[""]["municipio"] = "";
	$placeHoldersMined_Prueba[""]["municipio"] = "";
	$fieldLabelsMined_Prueba[""]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsMined_Prueba[""]["sector_ppd"] = "";
	$placeHoldersMined_Prueba[""]["sector_ppd"] = "";
	$fieldLabelsMined_Prueba[""]["nombre_c_e"] = "Nombre C E";
	$fieldToolTipsMined_Prueba[""]["nombre_c_e"] = "";
	$placeHoldersMined_Prueba[""]["nombre_c_e"] = "";
	$fieldLabelsMined_Prueba[""]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsMined_Prueba[""]["DisplayOnMap"] = "";
	$placeHoldersMined_Prueba[""]["DisplayOnMap"] = "";
	$fieldLabelsMined_Prueba[""]["ipce_0_1"] = "Ipce 0 1";
	$fieldToolTipsMined_Prueba[""]["ipce_0_1"] = "";
	$placeHoldersMined_Prueba[""]["ipce_0_1"] = "";
	if (count($fieldToolTipsMined_Prueba[""]))
		$tdataMined_Prueba[".isUseToolTips"] = true;
}


	$tdataMined_Prueba[".NCSearch"] = true;



$tdataMined_Prueba[".shortTableName"] = "Mined_Prueba";
$tdataMined_Prueba[".nSecOptions"] = 0;
$tdataMined_Prueba[".recsPerRowPrint"] = 1;
$tdataMined_Prueba[".mainTableOwnerID"] = "";
$tdataMined_Prueba[".moveNext"] = 1;
$tdataMined_Prueba[".entityType"] = 1;

$tdataMined_Prueba[".strOriginalTableName"] = "mined";

	



$tdataMined_Prueba[".showAddInPopup"] = false;

$tdataMined_Prueba[".showEditInPopup"] = false;

$tdataMined_Prueba[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMined_Prueba[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMined_Prueba[".fieldsForRegister"] = array();

	$tdataMined_Prueba[".listAjax"] = true;

	$tdataMined_Prueba[".audit"] = false;

	$tdataMined_Prueba[".locking"] = false;

$tdataMined_Prueba[".edit"] = true;
$tdataMined_Prueba[".afterEditAction"] = 1;
$tdataMined_Prueba[".closePopupAfterEdit"] = 1;
$tdataMined_Prueba[".afterEditActionDetTable"] = "";

$tdataMined_Prueba[".add"] = true;
$tdataMined_Prueba[".afterAddAction"] = 1;
$tdataMined_Prueba[".closePopupAfterAdd"] = 1;
$tdataMined_Prueba[".afterAddActionDetTable"] = "";

$tdataMined_Prueba[".list"] = true;

$tdataMined_Prueba[".inlineEdit"] = true;

$tdataMined_Prueba[".updateSelected"] = true;

$tdataMined_Prueba[".reorderRecordsByHeader"] = true;
$tdataMined_Prueba[".createSortByDropdown"] = true;
$tdataMined_Prueba[".strSortControlSettingsJSON"] = "";



$tdataMined_Prueba[".inlineAdd"] = true;
$tdataMined_Prueba[".view"] = true;

$tdataMined_Prueba[".import"] = true;

$tdataMined_Prueba[".exportTo"] = true;

$tdataMined_Prueba[".printFriendly"] = true;


$tdataMined_Prueba[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataMined_Prueba[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataMined_Prueba[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataMined_Prueba[".searchSaving"] = false;
//

$tdataMined_Prueba[".showSearchPanel"] = true;
		$tdataMined_Prueba[".flexibleSearch"] = true;

$tdataMined_Prueba[".isUseAjaxSuggest"] = true;

$tdataMined_Prueba[".rowHighlite"] = true;





$tdataMined_Prueba[".ajaxCodeSnippetAdded"] = false;

$tdataMined_Prueba[".buttonsAdded"] = false;

$tdataMined_Prueba[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMined_Prueba[".isUseTimeForSearch"] = false;


		$tdataMined_Prueba[".isUseMainMaps"] = true;

$tdataMined_Prueba[".badgeColor"] = "00c2c5";


$tdataMined_Prueba[".allSearchFields"] = array();
$tdataMined_Prueba[".filterFields"] = array();
$tdataMined_Prueba[".requiredSearchFields"] = array();

$tdataMined_Prueba[".allSearchFields"][] = "departamento";
	$tdataMined_Prueba[".allSearchFields"][] = "municipio";
	$tdataMined_Prueba[".allSearchFields"][] = "sector_ppd";
	$tdataMined_Prueba[".allSearchFields"][] = "nombre_c_e";
	$tdataMined_Prueba[".allSearchFields"][] = "ipce_0_1";
	

$tdataMined_Prueba[".googleLikeFields"] = array();
$tdataMined_Prueba[".googleLikeFields"][] = "departamento";
$tdataMined_Prueba[".googleLikeFields"][] = "municipio";
$tdataMined_Prueba[".googleLikeFields"][] = "sector_ppd";
$tdataMined_Prueba[".googleLikeFields"][] = "ipce_0_1";


$tdataMined_Prueba[".advSearchFields"] = array();
$tdataMined_Prueba[".advSearchFields"][] = "departamento";
$tdataMined_Prueba[".advSearchFields"][] = "municipio";
$tdataMined_Prueba[".advSearchFields"][] = "sector_ppd";
$tdataMined_Prueba[".advSearchFields"][] = "nombre_c_e";
$tdataMined_Prueba[".advSearchFields"][] = "ipce_0_1";

$tdataMined_Prueba[".tableType"] = "list";

$tdataMined_Prueba[".printerPageOrientation"] = 0;
$tdataMined_Prueba[".nPrinterPageScale"] = 100;

$tdataMined_Prueba[".nPrinterSplitRecords"] = 40;

$tdataMined_Prueba[".nPrinterPDFSplitRecords"] = 40;



$tdataMined_Prueba[".geocodingEnabled"] = true;
$tdataMined_Prueba[".geocodingData"] = array();
$tdataMined_Prueba[".geocodingData"]["latField"] = "y";
$tdataMined_Prueba[".geocodingData"]["lngField"] = "x";
$tdataMined_Prueba[".geocodingData"]["addressFields"] = array();
	$tdataMined_Prueba[".geocodingData"]["addressFields"][] = "departamento";
	$tdataMined_Prueba[".geocodingData"]["addressFields"][] = "municipio";
	$tdataMined_Prueba[".geocodingData"]["addressFields"][] = "ipce_0_1";
	$tdataMined_Prueba[".geocodingData"]["addressFields"][] = "sector_ppd";
	$tdataMined_Prueba[".geocodingData"]["addressFields"][] = "x";
	$tdataMined_Prueba[".geocodingData"]["addressFields"][] = "y";
	$tdataMined_Prueba[".geocodingData"]["addressFields"][] = "DisplayOnMap";





$tdataMined_Prueba[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataMined_Prueba[".pageSize"] = 20;

$tdataMined_Prueba[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMined_Prueba[".strOrderBy"] = $tstrOrderBy;

$tdataMined_Prueba[".orderindexes"] = array();

$tdataMined_Prueba[".sqlHead"] = "SELECT x,  y,  departamento,  municipio,  sector_ppd,  nombre_c_e,  ipce_0_1,  concat('Nombre del Centro:  ', nombre_c_e, '\\n', 'IPCE:  ', ipce_0_1, '\\n', 'Sector Estandarizado: ', sector_ppd) AS DisplayOnMap";
$tdataMined_Prueba[".sqlFrom"] = "FROM mined";
$tdataMined_Prueba[".sqlWhereExpr"] = "";
$tdataMined_Prueba[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMined_Prueba[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMined_Prueba[".arrGroupsPerPage"] = $arrGPP;

$tdataMined_Prueba[".highlightSearchResults"] = true;

$tableKeysMined_Prueba = array();
$tableKeysMined_Prueba[] = "x";
$tableKeysMined_Prueba[] = "y";
$tdataMined_Prueba[".Keys"] = $tableKeysMined_Prueba;

$tdataMined_Prueba[".listFields"] = array();
$tdataMined_Prueba[".listFields"][] = "x";
$tdataMined_Prueba[".listFields"][] = "y";
$tdataMined_Prueba[".listFields"][] = "departamento";
$tdataMined_Prueba[".listFields"][] = "municipio";
$tdataMined_Prueba[".listFields"][] = "sector_ppd";
$tdataMined_Prueba[".listFields"][] = "nombre_c_e";
$tdataMined_Prueba[".listFields"][] = "ipce_0_1";
$tdataMined_Prueba[".listFields"][] = "DisplayOnMap";

$tdataMined_Prueba[".hideMobileList"] = array();


$tdataMined_Prueba[".viewFields"] = array();
$tdataMined_Prueba[".viewFields"][] = "ipce_0_1";
$tdataMined_Prueba[".viewFields"][] = "DisplayOnMap";

$tdataMined_Prueba[".addFields"] = array();
$tdataMined_Prueba[".addFields"][] = "ipce_0_1";

$tdataMined_Prueba[".masterListFields"] = array();
$tdataMined_Prueba[".masterListFields"][] = "x";
$tdataMined_Prueba[".masterListFields"][] = "y";
$tdataMined_Prueba[".masterListFields"][] = "departamento";
$tdataMined_Prueba[".masterListFields"][] = "municipio";
$tdataMined_Prueba[".masterListFields"][] = "sector_ppd";
$tdataMined_Prueba[".masterListFields"][] = "nombre_c_e";
$tdataMined_Prueba[".masterListFields"][] = "ipce_0_1";
$tdataMined_Prueba[".masterListFields"][] = "DisplayOnMap";

$tdataMined_Prueba[".inlineAddFields"] = array();
$tdataMined_Prueba[".inlineAddFields"][] = "ipce_0_1";

$tdataMined_Prueba[".editFields"] = array();
$tdataMined_Prueba[".editFields"][] = "ipce_0_1";

$tdataMined_Prueba[".inlineEditFields"] = array();
$tdataMined_Prueba[".inlineEditFields"][] = "ipce_0_1";

$tdataMined_Prueba[".updateSelectedFields"] = array();
$tdataMined_Prueba[".updateSelectedFields"][] = "ipce_0_1";


$tdataMined_Prueba[".exportFields"] = array();
$tdataMined_Prueba[".exportFields"][] = "x";
$tdataMined_Prueba[".exportFields"][] = "y";
$tdataMined_Prueba[".exportFields"][] = "departamento";
$tdataMined_Prueba[".exportFields"][] = "municipio";
$tdataMined_Prueba[".exportFields"][] = "sector_ppd";
$tdataMined_Prueba[".exportFields"][] = "nombre_c_e";
$tdataMined_Prueba[".exportFields"][] = "ipce_0_1";
$tdataMined_Prueba[".exportFields"][] = "DisplayOnMap";

$tdataMined_Prueba[".importFields"] = array();
$tdataMined_Prueba[".importFields"][] = "x";
$tdataMined_Prueba[".importFields"][] = "y";
$tdataMined_Prueba[".importFields"][] = "departamento";
$tdataMined_Prueba[".importFields"][] = "municipio";
$tdataMined_Prueba[".importFields"][] = "sector_ppd";
$tdataMined_Prueba[".importFields"][] = "nombre_c_e";
$tdataMined_Prueba[".importFields"][] = "ipce_0_1";
$tdataMined_Prueba[".importFields"][] = "DisplayOnMap";

$tdataMined_Prueba[".printFields"] = array();
$tdataMined_Prueba[".printFields"][] = "x";
$tdataMined_Prueba[".printFields"][] = "y";
$tdataMined_Prueba[".printFields"][] = "departamento";
$tdataMined_Prueba[".printFields"][] = "municipio";
$tdataMined_Prueba[".printFields"][] = "sector_ppd";
$tdataMined_Prueba[".printFields"][] = "nombre_c_e";
$tdataMined_Prueba[".printFields"][] = "ipce_0_1";
$tdataMined_Prueba[".printFields"][] = "DisplayOnMap";

//	x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "x";
	$fdata["GoodName"] = "x";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Prueba","x");
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








	$tdataMined_Prueba["x"] = $fdata;
//	y
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "y";
	$fdata["GoodName"] = "y";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Prueba","y");
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








	$tdataMined_Prueba["y"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Prueba","departamento");
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




	$tdataMined_Prueba["departamento"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Prueba","municipio");
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




	$tdataMined_Prueba["municipio"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Prueba","sector_ppd");
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




	$tdataMined_Prueba["sector_ppd"] = $fdata;
//	nombre_c_e
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nombre_c_e";
	$fdata["GoodName"] = "nombre_c_e";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Prueba","nombre_c_e");
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




	$tdataMined_Prueba["nombre_c_e"] = $fdata;
//	ipce_0_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ipce_0_1";
	$fdata["GoodName"] = "ipce_0_1";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("Mined_Prueba","ipce_0_1");
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




	$tdataMined_Prueba["ipce_0_1"] = $fdata;
//	DisplayOnMap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DisplayOnMap";
	$fdata["GoodName"] = "DisplayOnMap";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Mined_Prueba","DisplayOnMap");
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








	$tdataMined_Prueba["DisplayOnMap"] = $fdata;


$tables_data["Mined Prueba"]=&$tdataMined_Prueba;
$field_labels["Mined_Prueba"] = &$fieldLabelsMined_Prueba;
$fieldToolTips["Mined_Prueba"] = &$fieldToolTipsMined_Prueba;
$placeHolders["Mined_Prueba"] = &$placeHoldersMined_Prueba;
$page_titles["Mined_Prueba"] = &$pageTitlesMined_Prueba;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Mined Prueba"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Mined Prueba"] = array();


	
	// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Mined_Prueba()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "x,  y,  departamento,  municipio,  sector_ppd,  nombre_c_e,  ipce_0_1,  concat('Nombre del Centro:  ', nombre_c_e, '\\n', 'IPCE:  ', ipce_0_1, '\\n', 'Sector Estandarizado: ', sector_ppd) AS DisplayOnMap";
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
	"m_srcTableName" => "Mined Prueba"
));

$proto6["m_sql"] = "x";
$proto6["m_srcTableName"] = "Mined Prueba";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "y",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined Prueba"
));

$proto8["m_sql"] = "y";
$proto8["m_srcTableName"] = "Mined Prueba";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined Prueba"
));

$proto10["m_sql"] = "departamento";
$proto10["m_srcTableName"] = "Mined Prueba";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined Prueba"
));

$proto12["m_sql"] = "municipio";
$proto12["m_srcTableName"] = "Mined Prueba";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined Prueba"
));

$proto14["m_sql"] = "sector_ppd";
$proto14["m_srcTableName"] = "Mined Prueba";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_c_e",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined Prueba"
));

$proto16["m_sql"] = "nombre_c_e";
$proto16["m_srcTableName"] = "Mined Prueba";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ipce_0_1",
	"m_strTable" => "mined",
	"m_srcTableName" => "Mined Prueba"
));

$proto18["m_sql"] = "ipce_0_1";
$proto18["m_srcTableName"] = "Mined Prueba";
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
$proto20["m_srcTableName"] = "Mined Prueba";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "DisplayOnMap";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mined";
$proto31["m_srcTableName"] = "Mined Prueba";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "idderespuesta";
$proto31["m_columns"][] = "codigo";
$proto31["m_columns"][] = "depto";
$proto31["m_columns"][] = "departamento";
$proto31["m_columns"][] = "mun";
$proto31["m_columns"][] = "municipio";
$proto31["m_columns"][] = "nombre_c_e";
$proto31["m_columns"][] = "x";
$proto31["m_columns"][] = "y";
$proto31["m_columns"][] = "sector_ppd";
$proto31["m_columns"][] = "matricula_inicial";
$proto31["m_columns"][] = "matricula_final";
$proto31["m_columns"][] = "maras";
$proto31["m_columns"][] = "robos";
$proto31["m_columns"][] = "hurtos";
$proto31["m_columns"][] = "drogas";
$proto31["m_columns"][] = "violaciones";
$proto31["m_columns"][] = "pab";
$proto31["m_columns"][] = "paf";
$proto31["m_columns"][] = "escasos_recursos";
$proto31["m_columns"][] = "incorpo_actividades_prod";
$proto31["m_columns"][] = "lejania_ce";
$proto31["m_columns"][] = "violencia_pandilleril";
$proto31["m_columns"][] = "embarazo";
$proto31["m_columns"][] = "acoso";
$proto31["m_columns"][] = "violacion_sexual";
$proto31["m_columns"][] = "cambio_domicilio";
$proto31["m_columns"][] = "migracion";
$proto31["m_columns"][] = "bajo_rendimiento";
$proto31["m_columns"][] = "enfermedad";
$proto31["m_columns"][] = "prostitucion";
$proto31["m_columns"][] = "dep_mun";
$proto31["m_columns"][] = "max_matric2016";
$proto31["m_columns"][] = "mrf2016";
$proto31["m_columns"][] = "pab_af";
$proto31["m_columns"][] = "r_h";
$proto31["m_columns"][] = "ipce_naive";
$proto31["m_columns"][] = "ipce_0_1";
$proto31["m_columns"][] = "aÑo";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "mined";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "Mined Prueba";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Mined Prueba";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Mined_Prueba = createSqlQuery_Mined_Prueba();


	
		;

								

$tdataMined_Prueba[".sqlquery"] = $queryData_Mined_Prueba;

include_once(getabspath("include/Mined_Prueba_events.php"));
$tableEvents["Mined Prueba"] = new eventclass_Mined_Prueba;
$tdataMined_Prueba[".hasEvents"] = true;

?>