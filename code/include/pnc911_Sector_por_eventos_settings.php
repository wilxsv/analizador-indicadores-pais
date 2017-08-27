<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapnc911_Sector_por_eventos = array();
	$tdatapnc911_Sector_por_eventos[".truncateText"] = true;
	$tdatapnc911_Sector_por_eventos[".NumberOfChars"] = 80;
	$tdatapnc911_Sector_por_eventos[".ShortName"] = "pnc911_Sector_por_eventos";
	$tdatapnc911_Sector_por_eventos[".OwnerID"] = "";
	$tdatapnc911_Sector_por_eventos[".OriginalTable"] = "pnc911";

//	field labels
$fieldLabelspnc911_Sector_por_eventos = array();
$fieldToolTipspnc911_Sector_por_eventos = array();
$pageTitlespnc911_Sector_por_eventos = array();
$placeHolderspnc911_Sector_por_eventos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspnc911_Sector_por_eventos["Spanish"] = array();
	$fieldToolTipspnc911_Sector_por_eventos["Spanish"] = array();
	$placeHolderspnc911_Sector_por_eventos["Spanish"] = array();
	$pageTitlespnc911_Sector_por_eventos["Spanish"] = array();
	$fieldLabelspnc911_Sector_por_eventos["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipspnc911_Sector_por_eventos["Spanish"]["departamento"] = "";
	$placeHolderspnc911_Sector_por_eventos["Spanish"]["departamento"] = "";
	$fieldLabelspnc911_Sector_por_eventos["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipspnc911_Sector_por_eventos["Spanish"]["municipio"] = "";
	$placeHolderspnc911_Sector_por_eventos["Spanish"]["municipio"] = "";
	$fieldLabelspnc911_Sector_por_eventos["Spanish"]["ppddsc"] = "Ppddsc";
	$fieldToolTipspnc911_Sector_por_eventos["Spanish"]["ppddsc"] = "";
	$placeHolderspnc911_Sector_por_eventos["Spanish"]["ppddsc"] = "";
	$fieldLabelspnc911_Sector_por_eventos["Spanish"]["avisos911"] = "Avisos911";
	$fieldToolTipspnc911_Sector_por_eventos["Spanish"]["avisos911"] = "";
	$placeHolderspnc911_Sector_por_eventos["Spanish"]["avisos911"] = "";
	$fieldLabelspnc911_Sector_por_eventos["Spanish"]["COUNT_municipio_"] = "COUNT(municipio)";
	$fieldToolTipspnc911_Sector_por_eventos["Spanish"]["COUNT_municipio_"] = "";
	$placeHolderspnc911_Sector_por_eventos["Spanish"]["COUNT_municipio_"] = "";
	if (count($fieldToolTipspnc911_Sector_por_eventos["Spanish"]))
		$tdatapnc911_Sector_por_eventos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspnc911_Sector_por_eventos["English"] = array();
	$fieldToolTipspnc911_Sector_por_eventos["English"] = array();
	$placeHolderspnc911_Sector_por_eventos["English"] = array();
	$pageTitlespnc911_Sector_por_eventos["English"] = array();
	$fieldLabelspnc911_Sector_por_eventos["English"]["departamento"] = "Departamento";
	$fieldToolTipspnc911_Sector_por_eventos["English"]["departamento"] = "";
	$placeHolderspnc911_Sector_por_eventos["English"]["departamento"] = "";
	$fieldLabelspnc911_Sector_por_eventos["English"]["municipio"] = "Municipio";
	$fieldToolTipspnc911_Sector_por_eventos["English"]["municipio"] = "";
	$placeHolderspnc911_Sector_por_eventos["English"]["municipio"] = "";
	$fieldLabelspnc911_Sector_por_eventos["English"]["ppddsc"] = "Ppddsc";
	$fieldToolTipspnc911_Sector_por_eventos["English"]["ppddsc"] = "";
	$placeHolderspnc911_Sector_por_eventos["English"]["ppddsc"] = "";
	$fieldLabelspnc911_Sector_por_eventos["English"]["avisos911"] = "Avisos911";
	$fieldToolTipspnc911_Sector_por_eventos["English"]["avisos911"] = "";
	$placeHolderspnc911_Sector_por_eventos["English"]["avisos911"] = "";
	$fieldLabelspnc911_Sector_por_eventos["English"]["COUNT_municipio_"] = "COUNT(municipio)";
	$fieldToolTipspnc911_Sector_por_eventos["English"]["COUNT_municipio_"] = "";
	$placeHolderspnc911_Sector_por_eventos["English"]["COUNT_municipio_"] = "";
	if (count($fieldToolTipspnc911_Sector_por_eventos["English"]))
		$tdatapnc911_Sector_por_eventos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspnc911_Sector_por_eventos[""] = array();
	$fieldToolTipspnc911_Sector_por_eventos[""] = array();
	$placeHolderspnc911_Sector_por_eventos[""] = array();
	$pageTitlespnc911_Sector_por_eventos[""] = array();
	if (count($fieldToolTipspnc911_Sector_por_eventos[""]))
		$tdatapnc911_Sector_por_eventos[".isUseToolTips"] = true;
}





$tdatapnc911_Sector_por_eventos[".shortTableName"] = "pnc911_Sector_por_eventos";
$tdatapnc911_Sector_por_eventos[".nSecOptions"] = 0;
$tdatapnc911_Sector_por_eventos[".recsPerRowPrint"] = 1;
$tdatapnc911_Sector_por_eventos[".mainTableOwnerID"] = "";
$tdatapnc911_Sector_por_eventos[".moveNext"] = 1;
$tdatapnc911_Sector_por_eventos[".entityType"] = 2;

$tdatapnc911_Sector_por_eventos[".strOriginalTableName"] = "pnc911";

	



$tdatapnc911_Sector_por_eventos[".showAddInPopup"] = false;

$tdatapnc911_Sector_por_eventos[".showEditInPopup"] = false;

$tdatapnc911_Sector_por_eventos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapnc911_Sector_por_eventos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapnc911_Sector_por_eventos[".fieldsForRegister"] = array();

$tdatapnc911_Sector_por_eventos[".listAjax"] = false;

	$tdatapnc911_Sector_por_eventos[".audit"] = false;

	$tdatapnc911_Sector_por_eventos[".locking"] = false;



$tdatapnc911_Sector_por_eventos[".list"] = true;



$tdatapnc911_Sector_por_eventos[".reorderRecordsByHeader"] = true;





$tdatapnc911_Sector_por_eventos[".exportTo"] = true;

$tdatapnc911_Sector_por_eventos[".printFriendly"] = true;


$tdatapnc911_Sector_por_eventos[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapnc911_Sector_por_eventos[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapnc911_Sector_por_eventos[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapnc911_Sector_por_eventos[".searchSaving"] = false;
//

$tdatapnc911_Sector_por_eventos[".showSearchPanel"] = true;
		$tdatapnc911_Sector_por_eventos[".flexibleSearch"] = true;

$tdatapnc911_Sector_por_eventos[".isUseAjaxSuggest"] = true;






$tdatapnc911_Sector_por_eventos[".ajaxCodeSnippetAdded"] = false;

$tdatapnc911_Sector_por_eventos[".buttonsAdded"] = false;

$tdatapnc911_Sector_por_eventos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapnc911_Sector_por_eventos[".isUseTimeForSearch"] = false;





$tdatapnc911_Sector_por_eventos[".allSearchFields"] = array();
$tdatapnc911_Sector_por_eventos[".filterFields"] = array();
$tdatapnc911_Sector_por_eventos[".requiredSearchFields"] = array();

$tdatapnc911_Sector_por_eventos[".allSearchFields"][] = "departamento";
		$tdatapnc911_Sector_por_eventos[".requiredSearchFields"][] = "departamento";
$tdatapnc911_Sector_por_eventos[".allSearchFields"][] = "municipio";
		$tdatapnc911_Sector_por_eventos[".requiredSearchFields"][] = "municipio";
$tdatapnc911_Sector_por_eventos[".allSearchFields"][] = "ppddsc";
		$tdatapnc911_Sector_por_eventos[".requiredSearchFields"][] = "ppddsc";


$tdatapnc911_Sector_por_eventos[".googleLikeFields"] = array();
$tdatapnc911_Sector_por_eventos[".googleLikeFields"][] = "departamento";
$tdatapnc911_Sector_por_eventos[".googleLikeFields"][] = "municipio";
$tdatapnc911_Sector_por_eventos[".googleLikeFields"][] = "ppddsc";

$tdatapnc911_Sector_por_eventos[".panelSearchFields"] = array();
$tdatapnc911_Sector_por_eventos[".searchPanelOptions"] = array();
$tdatapnc911_Sector_por_eventos[".panelSearchFields"][] = "departamento";
	$tdatapnc911_Sector_por_eventos[".panelSearchFields"][] = "municipio";
	$tdatapnc911_Sector_por_eventos[".panelSearchFields"][] = "ppddsc";
	
$tdatapnc911_Sector_por_eventos[".advSearchFields"] = array();
$tdatapnc911_Sector_por_eventos[".advSearchFields"][] = "departamento";
$tdatapnc911_Sector_por_eventos[".advSearchFields"][] = "municipio";
$tdatapnc911_Sector_por_eventos[".advSearchFields"][] = "ppddsc";

$tdatapnc911_Sector_por_eventos[".tableType"] = "report";

$tdatapnc911_Sector_por_eventos[".printerPageOrientation"] = 0;
$tdatapnc911_Sector_por_eventos[".nPrinterPageScale"] = 100;

$tdatapnc911_Sector_por_eventos[".nPrinterSplitRecords"] = 40;

$tdatapnc911_Sector_por_eventos[".nPrinterPDFSplitRecords"] = 40;



$tdatapnc911_Sector_por_eventos[".geocodingEnabled"] = false;

//report settings
$tdatapnc911_Sector_por_eventos[".crossTabReport"] = true;

$tdatapnc911_Sector_por_eventos[".reportGroupFields"] = true;
$tdatapnc911_Sector_por_eventos[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "avisos911";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "ppddsc";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdatapnc911_Sector_por_eventos[".reportGroupFieldsData"] = $reportGroupFields;

$tdatapnc911_Sector_por_eventos[".reportHorizontalSummary"] = true;

$tdatapnc911_Sector_por_eventos[".isExistTotalFields"] = true;

$tdatapnc911_Sector_por_eventos[".reportVerticalSummary"] = true;



$tdatapnc911_Sector_por_eventos[".repShowDet"] = true;

$tdatapnc911_Sector_por_eventos[".reportLayout"] = 6;

//end of report settings




$tdatapnc911_Sector_por_eventos[".listGridLayout"] = 3;

$tdatapnc911_Sector_por_eventos[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapnc911_Sector_por_eventos[".strOrderBy"] = $tstrOrderBy;

$tdatapnc911_Sector_por_eventos[".orderindexes"] = array();

$tdatapnc911_Sector_por_eventos[".sqlHead"] = "SELECT departamento,  municipio,  ppddsc,  avisos911,  COUNT(municipio) AS `COUNT(municipio)`";
$tdatapnc911_Sector_por_eventos[".sqlFrom"] = "FROM pnc911";
$tdatapnc911_Sector_por_eventos[".sqlWhereExpr"] = "departamento is not null";
$tdatapnc911_Sector_por_eventos[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapnc911_Sector_por_eventos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapnc911_Sector_por_eventos[".arrGroupsPerPage"] = $arrGPP;

$tdatapnc911_Sector_por_eventos[".highlightSearchResults"] = true;

$tableKeyspnc911_Sector_por_eventos = array();
$tdatapnc911_Sector_por_eventos[".Keys"] = $tableKeyspnc911_Sector_por_eventos;

$tdatapnc911_Sector_por_eventos[".listFields"] = array();
$tdatapnc911_Sector_por_eventos[".listFields"][] = "departamento";
$tdatapnc911_Sector_por_eventos[".listFields"][] = "municipio";
$tdatapnc911_Sector_por_eventos[".listFields"][] = "ppddsc";
$tdatapnc911_Sector_por_eventos[".listFields"][] = "avisos911";
$tdatapnc911_Sector_por_eventos[".listFields"][] = "COUNT(municipio)";

$tdatapnc911_Sector_por_eventos[".hideMobileList"] = array();


$tdatapnc911_Sector_por_eventos[".viewFields"] = array();
$tdatapnc911_Sector_por_eventos[".viewFields"][] = "departamento";
$tdatapnc911_Sector_por_eventos[".viewFields"][] = "municipio";
$tdatapnc911_Sector_por_eventos[".viewFields"][] = "ppddsc";
$tdatapnc911_Sector_por_eventos[".viewFields"][] = "avisos911";
$tdatapnc911_Sector_por_eventos[".viewFields"][] = "COUNT(municipio)";

$tdatapnc911_Sector_por_eventos[".addFields"] = array();
$tdatapnc911_Sector_por_eventos[".addFields"][] = "departamento";
$tdatapnc911_Sector_por_eventos[".addFields"][] = "municipio";
$tdatapnc911_Sector_por_eventos[".addFields"][] = "ppddsc";
$tdatapnc911_Sector_por_eventos[".addFields"][] = "avisos911";

$tdatapnc911_Sector_por_eventos[".masterListFields"] = array();
$tdatapnc911_Sector_por_eventos[".masterListFields"][] = "departamento";
$tdatapnc911_Sector_por_eventos[".masterListFields"][] = "municipio";
$tdatapnc911_Sector_por_eventos[".masterListFields"][] = "ppddsc";
$tdatapnc911_Sector_por_eventos[".masterListFields"][] = "avisos911";
$tdatapnc911_Sector_por_eventos[".masterListFields"][] = "COUNT(municipio)";

$tdatapnc911_Sector_por_eventos[".inlineAddFields"] = array();
$tdatapnc911_Sector_por_eventos[".inlineAddFields"][] = "departamento";
$tdatapnc911_Sector_por_eventos[".inlineAddFields"][] = "municipio";
$tdatapnc911_Sector_por_eventos[".inlineAddFields"][] = "ppddsc";
$tdatapnc911_Sector_por_eventos[".inlineAddFields"][] = "avisos911";

$tdatapnc911_Sector_por_eventos[".editFields"] = array();
$tdatapnc911_Sector_por_eventos[".editFields"][] = "departamento";
$tdatapnc911_Sector_por_eventos[".editFields"][] = "municipio";
$tdatapnc911_Sector_por_eventos[".editFields"][] = "ppddsc";
$tdatapnc911_Sector_por_eventos[".editFields"][] = "avisos911";

$tdatapnc911_Sector_por_eventos[".inlineEditFields"] = array();
$tdatapnc911_Sector_por_eventos[".inlineEditFields"][] = "departamento";
$tdatapnc911_Sector_por_eventos[".inlineEditFields"][] = "municipio";
$tdatapnc911_Sector_por_eventos[".inlineEditFields"][] = "ppddsc";
$tdatapnc911_Sector_por_eventos[".inlineEditFields"][] = "avisos911";

$tdatapnc911_Sector_por_eventos[".updateSelectedFields"] = array();
$tdatapnc911_Sector_por_eventos[".updateSelectedFields"][] = "departamento";
$tdatapnc911_Sector_por_eventos[".updateSelectedFields"][] = "municipio";
$tdatapnc911_Sector_por_eventos[".updateSelectedFields"][] = "ppddsc";
$tdatapnc911_Sector_por_eventos[".updateSelectedFields"][] = "avisos911";


$tdatapnc911_Sector_por_eventos[".exportFields"] = array();
$tdatapnc911_Sector_por_eventos[".exportFields"][] = "departamento";
$tdatapnc911_Sector_por_eventos[".exportFields"][] = "municipio";
$tdatapnc911_Sector_por_eventos[".exportFields"][] = "ppddsc";
$tdatapnc911_Sector_por_eventos[".exportFields"][] = "avisos911";
$tdatapnc911_Sector_por_eventos[".exportFields"][] = "COUNT(municipio)";

$tdatapnc911_Sector_por_eventos[".importFields"] = array();
$tdatapnc911_Sector_por_eventos[".importFields"][] = "departamento";
$tdatapnc911_Sector_por_eventos[".importFields"][] = "municipio";
$tdatapnc911_Sector_por_eventos[".importFields"][] = "ppddsc";
$tdatapnc911_Sector_por_eventos[".importFields"][] = "avisos911";
$tdatapnc911_Sector_por_eventos[".importFields"][] = "COUNT(municipio)";

$tdatapnc911_Sector_por_eventos[".printFields"] = array();
$tdatapnc911_Sector_por_eventos[".printFields"][] = "departamento";
$tdatapnc911_Sector_por_eventos[".printFields"][] = "municipio";
$tdatapnc911_Sector_por_eventos[".printFields"][] = "ppddsc";
$tdatapnc911_Sector_por_eventos[".printFields"][] = "avisos911";
$tdatapnc911_Sector_por_eventos[".printFields"][] = "COUNT(municipio)";

//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc911_Sector_por_eventos","departamento");
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




	$tdatapnc911_Sector_por_eventos["departamento"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc911_Sector_por_eventos","municipio");
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




	$tdatapnc911_Sector_por_eventos["municipio"] = $fdata;
//	ppddsc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ppddsc";
	$fdata["GoodName"] = "ppddsc";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc911_Sector_por_eventos","ppddsc");
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

		$fdata["strField"] = "ppddsc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ppddsc";

	
	
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




	$tdatapnc911_Sector_por_eventos["ppddsc"] = $fdata;
//	avisos911
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "avisos911";
	$fdata["GoodName"] = "avisos911";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc911_Sector_por_eventos","avisos911");
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








	$tdatapnc911_Sector_por_eventos["avisos911"] = $fdata;
//	COUNT(municipio)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "COUNT(municipio)";
	$fdata["GoodName"] = "COUNT_municipio_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("pnc911_Sector_por_eventos","COUNT_municipio_");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(municipio)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(municipio)";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapnc911_Sector_por_eventos["COUNT(municipio)"] = $fdata;


$tables_data["pnc911 Sector por eventos"]=&$tdatapnc911_Sector_por_eventos;
$field_labels["pnc911_Sector_por_eventos"] = &$fieldLabelspnc911_Sector_por_eventos;
$fieldToolTips["pnc911_Sector_por_eventos"] = &$fieldToolTipspnc911_Sector_por_eventos;
$placeHolders["pnc911_Sector_por_eventos"] = &$placeHolderspnc911_Sector_por_eventos;
$page_titles["pnc911_Sector_por_eventos"] = &$pageTitlespnc911_Sector_por_eventos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["pnc911 Sector por eventos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pnc911_Sector_por_eventos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "departamento,  municipio,  ppddsc,  avisos911,  COUNT(municipio) AS `COUNT(municipio)`";
$proto0["m_strFrom"] = "FROM pnc911";
$proto0["m_strWhere"] = "departamento is not null";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "departamento is not null";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911 Sector por eventos"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "is not null";
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
	"m_strName" => "departamento",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911 Sector por eventos"
));

$proto6["m_sql"] = "departamento";
$proto6["m_srcTableName"] = "pnc911 Sector por eventos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911 Sector por eventos"
));

$proto8["m_sql"] = "municipio";
$proto8["m_srcTableName"] = "pnc911 Sector por eventos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ppddsc",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911 Sector por eventos"
));

$proto10["m_sql"] = "ppddsc";
$proto10["m_srcTableName"] = "pnc911 Sector por eventos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "avisos911",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911 Sector por eventos"
));

$proto12["m_sql"] = "avisos911";
$proto12["m_srcTableName"] = "pnc911 Sector por eventos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_COUNT";
$proto15["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911 Sector por eventos"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "COUNT(municipio)";
$proto14["m_srcTableName"] = "pnc911 Sector por eventos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "COUNT(municipio)";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "pnc911";
$proto18["m_srcTableName"] = "pnc911 Sector por eventos";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "tipificacion";
$proto18["m_columns"][] = "direccion_validacion";
$proto18["m_columns"][] = "direccion_libre";
$proto18["m_columns"][] = "coordenadas_x";
$proto18["m_columns"][] = "coordenadas_y";
$proto18["m_columns"][] = "departamento";
$proto18["m_columns"][] = "municipio";
$proto18["m_columns"][] = "ppddsc";
$proto18["m_columns"][] = "meses";
$proto18["m_columns"][] = "avisos911";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "pnc911";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "pnc911 Sector por eventos";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto21=array();
						$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911 Sector por eventos"
));

$proto21["m_column"]=$obj;
$obj = new SQLGroupByItem($proto21);

$proto0["m_groupby"][]=$obj;
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911 Sector por eventos"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "ppddsc",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911 Sector por eventos"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "avisos911",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911 Sector por eventos"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pnc911 Sector por eventos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pnc911_Sector_por_eventos = createSqlQuery_pnc911_Sector_por_eventos();


	
		;

					

$tdatapnc911_Sector_por_eventos[".sqlquery"] = $queryData_pnc911_Sector_por_eventos;

$tableEvents["pnc911 Sector por eventos"] = new eventsBase;
$tdatapnc911_Sector_por_eventos[".hasEvents"] = false;

?>