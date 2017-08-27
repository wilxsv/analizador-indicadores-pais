<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapnc911municipios = array();
	$tdatapnc911municipios[".truncateText"] = true;
	$tdatapnc911municipios[".NumberOfChars"] = 80;
	$tdatapnc911municipios[".ShortName"] = "pnc911municipios";
	$tdatapnc911municipios[".OwnerID"] = "";
	$tdatapnc911municipios[".OriginalTable"] = "pnc911";

//	field labels
$fieldLabelspnc911municipios = array();
$fieldToolTipspnc911municipios = array();
$pageTitlespnc911municipios = array();
$placeHolderspnc911municipios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspnc911municipios["Spanish"] = array();
	$fieldToolTipspnc911municipios["Spanish"] = array();
	$placeHolderspnc911municipios["Spanish"] = array();
	$pageTitlespnc911municipios["Spanish"] = array();
	$fieldLabelspnc911municipios["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipspnc911municipios["Spanish"]["departamento"] = "";
	$placeHolderspnc911municipios["Spanish"]["departamento"] = "";
	$fieldLabelspnc911municipios["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipspnc911municipios["Spanish"]["municipio"] = "";
	$placeHolderspnc911municipios["Spanish"]["municipio"] = "";
	$fieldLabelspnc911municipios["Spanish"]["ppddsc"] = "Ppddsc";
	$fieldToolTipspnc911municipios["Spanish"]["ppddsc"] = "";
	$placeHolderspnc911municipios["Spanish"]["ppddsc"] = "";
	$fieldLabelspnc911municipios["Spanish"]["avisos911"] = "Avisos911";
	$fieldToolTipspnc911municipios["Spanish"]["avisos911"] = "";
	$placeHolderspnc911municipios["Spanish"]["avisos911"] = "";
	$fieldLabelspnc911municipios["Spanish"]["COUNT_municipio_"] = "COUNT(municipio)";
	$fieldToolTipspnc911municipios["Spanish"]["COUNT_municipio_"] = "";
	$placeHolderspnc911municipios["Spanish"]["COUNT_municipio_"] = "";
	if (count($fieldToolTipspnc911municipios["Spanish"]))
		$tdatapnc911municipios[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspnc911municipios["English"] = array();
	$fieldToolTipspnc911municipios["English"] = array();
	$placeHolderspnc911municipios["English"] = array();
	$pageTitlespnc911municipios["English"] = array();
	$fieldLabelspnc911municipios["English"]["departamento"] = "Departamento";
	$fieldToolTipspnc911municipios["English"]["departamento"] = "";
	$placeHolderspnc911municipios["English"]["departamento"] = "";
	$fieldLabelspnc911municipios["English"]["municipio"] = "Municipio";
	$fieldToolTipspnc911municipios["English"]["municipio"] = "";
	$placeHolderspnc911municipios["English"]["municipio"] = "";
	$fieldLabelspnc911municipios["English"]["ppddsc"] = "Ppddsc";
	$fieldToolTipspnc911municipios["English"]["ppddsc"] = "";
	$placeHolderspnc911municipios["English"]["ppddsc"] = "";
	$fieldLabelspnc911municipios["English"]["avisos911"] = "Avisos911";
	$fieldToolTipspnc911municipios["English"]["avisos911"] = "";
	$placeHolderspnc911municipios["English"]["avisos911"] = "";
	$fieldLabelspnc911municipios["English"]["COUNT_municipio_"] = "COUNT(municipio)";
	$fieldToolTipspnc911municipios["English"]["COUNT_municipio_"] = "";
	$placeHolderspnc911municipios["English"]["COUNT_municipio_"] = "";
	if (count($fieldToolTipspnc911municipios["English"]))
		$tdatapnc911municipios[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspnc911municipios[""] = array();
	$fieldToolTipspnc911municipios[""] = array();
	$placeHolderspnc911municipios[""] = array();
	$pageTitlespnc911municipios[""] = array();
	if (count($fieldToolTipspnc911municipios[""]))
		$tdatapnc911municipios[".isUseToolTips"] = true;
}





$tdatapnc911municipios[".shortTableName"] = "pnc911municipios";
$tdatapnc911municipios[".nSecOptions"] = 0;
$tdatapnc911municipios[".recsPerRowPrint"] = 1;
$tdatapnc911municipios[".mainTableOwnerID"] = "";
$tdatapnc911municipios[".moveNext"] = 1;
$tdatapnc911municipios[".entityType"] = 2;

$tdatapnc911municipios[".strOriginalTableName"] = "pnc911";

	



$tdatapnc911municipios[".showAddInPopup"] = false;

$tdatapnc911municipios[".showEditInPopup"] = false;

$tdatapnc911municipios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapnc911municipios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapnc911municipios[".fieldsForRegister"] = array();

$tdatapnc911municipios[".listAjax"] = false;

	$tdatapnc911municipios[".audit"] = false;

	$tdatapnc911municipios[".locking"] = false;



$tdatapnc911municipios[".list"] = true;



$tdatapnc911municipios[".reorderRecordsByHeader"] = true;





$tdatapnc911municipios[".exportTo"] = true;

$tdatapnc911municipios[".printFriendly"] = true;


$tdatapnc911municipios[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapnc911municipios[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapnc911municipios[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapnc911municipios[".searchSaving"] = false;
//

$tdatapnc911municipios[".showSearchPanel"] = true;
		$tdatapnc911municipios[".flexibleSearch"] = true;

$tdatapnc911municipios[".isUseAjaxSuggest"] = true;






$tdatapnc911municipios[".ajaxCodeSnippetAdded"] = false;

$tdatapnc911municipios[".buttonsAdded"] = false;

$tdatapnc911municipios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapnc911municipios[".isUseTimeForSearch"] = false;





$tdatapnc911municipios[".allSearchFields"] = array();
$tdatapnc911municipios[".filterFields"] = array();
$tdatapnc911municipios[".requiredSearchFields"] = array();

$tdatapnc911municipios[".allSearchFields"][] = "departamento";
		$tdatapnc911municipios[".requiredSearchFields"][] = "departamento";
$tdatapnc911municipios[".allSearchFields"][] = "municipio";
		$tdatapnc911municipios[".requiredSearchFields"][] = "municipio";
$tdatapnc911municipios[".allSearchFields"][] = "ppddsc";
		$tdatapnc911municipios[".requiredSearchFields"][] = "ppddsc";


$tdatapnc911municipios[".googleLikeFields"] = array();
$tdatapnc911municipios[".googleLikeFields"][] = "departamento";
$tdatapnc911municipios[".googleLikeFields"][] = "municipio";
$tdatapnc911municipios[".googleLikeFields"][] = "ppddsc";

$tdatapnc911municipios[".panelSearchFields"] = array();
$tdatapnc911municipios[".searchPanelOptions"] = array();
$tdatapnc911municipios[".panelSearchFields"][] = "departamento";
	$tdatapnc911municipios[".panelSearchFields"][] = "municipio";
	$tdatapnc911municipios[".panelSearchFields"][] = "ppddsc";
	
$tdatapnc911municipios[".advSearchFields"] = array();
$tdatapnc911municipios[".advSearchFields"][] = "departamento";
$tdatapnc911municipios[".advSearchFields"][] = "municipio";
$tdatapnc911municipios[".advSearchFields"][] = "ppddsc";

$tdatapnc911municipios[".tableType"] = "report";

$tdatapnc911municipios[".printerPageOrientation"] = 0;
$tdatapnc911municipios[".nPrinterPageScale"] = 100;

$tdatapnc911municipios[".nPrinterSplitRecords"] = 40;

$tdatapnc911municipios[".nPrinterPDFSplitRecords"] = 40;



$tdatapnc911municipios[".geocodingEnabled"] = false;

//report settings
$tdatapnc911municipios[".crossTabReport"] = true;

$tdatapnc911municipios[".reportGroupFields"] = true;
$tdatapnc911municipios[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "avisos911";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "municipio";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdatapnc911municipios[".reportGroupFieldsData"] = $reportGroupFields;

$tdatapnc911municipios[".reportHorizontalSummary"] = true;

$tdatapnc911municipios[".isExistTotalFields"] = true;

$tdatapnc911municipios[".reportVerticalSummary"] = true;



$tdatapnc911municipios[".repShowDet"] = true;

$tdatapnc911municipios[".reportLayout"] = 6;

//end of report settings




$tdatapnc911municipios[".listGridLayout"] = 3;

$tdatapnc911municipios[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapnc911municipios[".strOrderBy"] = $tstrOrderBy;

$tdatapnc911municipios[".orderindexes"] = array();

$tdatapnc911municipios[".sqlHead"] = "SELECT departamento,  municipio,  ppddsc,  avisos911,  COUNT(municipio) AS `COUNT(municipio)`";
$tdatapnc911municipios[".sqlFrom"] = "FROM pnc911";
$tdatapnc911municipios[".sqlWhereExpr"] = "departamento is not null";
$tdatapnc911municipios[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapnc911municipios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapnc911municipios[".arrGroupsPerPage"] = $arrGPP;

$tdatapnc911municipios[".highlightSearchResults"] = true;

$tableKeyspnc911municipios = array();
$tdatapnc911municipios[".Keys"] = $tableKeyspnc911municipios;

$tdatapnc911municipios[".listFields"] = array();
$tdatapnc911municipios[".listFields"][] = "departamento";
$tdatapnc911municipios[".listFields"][] = "municipio";
$tdatapnc911municipios[".listFields"][] = "ppddsc";
$tdatapnc911municipios[".listFields"][] = "avisos911";
$tdatapnc911municipios[".listFields"][] = "COUNT(municipio)";

$tdatapnc911municipios[".hideMobileList"] = array();


$tdatapnc911municipios[".viewFields"] = array();
$tdatapnc911municipios[".viewFields"][] = "departamento";
$tdatapnc911municipios[".viewFields"][] = "municipio";
$tdatapnc911municipios[".viewFields"][] = "ppddsc";
$tdatapnc911municipios[".viewFields"][] = "avisos911";
$tdatapnc911municipios[".viewFields"][] = "COUNT(municipio)";

$tdatapnc911municipios[".addFields"] = array();
$tdatapnc911municipios[".addFields"][] = "departamento";
$tdatapnc911municipios[".addFields"][] = "municipio";
$tdatapnc911municipios[".addFields"][] = "ppddsc";
$tdatapnc911municipios[".addFields"][] = "avisos911";

$tdatapnc911municipios[".masterListFields"] = array();
$tdatapnc911municipios[".masterListFields"][] = "departamento";
$tdatapnc911municipios[".masterListFields"][] = "municipio";
$tdatapnc911municipios[".masterListFields"][] = "ppddsc";
$tdatapnc911municipios[".masterListFields"][] = "avisos911";
$tdatapnc911municipios[".masterListFields"][] = "COUNT(municipio)";

$tdatapnc911municipios[".inlineAddFields"] = array();
$tdatapnc911municipios[".inlineAddFields"][] = "departamento";
$tdatapnc911municipios[".inlineAddFields"][] = "municipio";
$tdatapnc911municipios[".inlineAddFields"][] = "ppddsc";
$tdatapnc911municipios[".inlineAddFields"][] = "avisos911";

$tdatapnc911municipios[".editFields"] = array();
$tdatapnc911municipios[".editFields"][] = "departamento";
$tdatapnc911municipios[".editFields"][] = "municipio";
$tdatapnc911municipios[".editFields"][] = "ppddsc";
$tdatapnc911municipios[".editFields"][] = "avisos911";

$tdatapnc911municipios[".inlineEditFields"] = array();
$tdatapnc911municipios[".inlineEditFields"][] = "departamento";
$tdatapnc911municipios[".inlineEditFields"][] = "municipio";
$tdatapnc911municipios[".inlineEditFields"][] = "ppddsc";
$tdatapnc911municipios[".inlineEditFields"][] = "avisos911";

$tdatapnc911municipios[".updateSelectedFields"] = array();
$tdatapnc911municipios[".updateSelectedFields"][] = "departamento";
$tdatapnc911municipios[".updateSelectedFields"][] = "municipio";
$tdatapnc911municipios[".updateSelectedFields"][] = "ppddsc";
$tdatapnc911municipios[".updateSelectedFields"][] = "avisos911";


$tdatapnc911municipios[".exportFields"] = array();
$tdatapnc911municipios[".exportFields"][] = "departamento";
$tdatapnc911municipios[".exportFields"][] = "municipio";
$tdatapnc911municipios[".exportFields"][] = "ppddsc";
$tdatapnc911municipios[".exportFields"][] = "avisos911";
$tdatapnc911municipios[".exportFields"][] = "COUNT(municipio)";

$tdatapnc911municipios[".importFields"] = array();
$tdatapnc911municipios[".importFields"][] = "departamento";
$tdatapnc911municipios[".importFields"][] = "municipio";
$tdatapnc911municipios[".importFields"][] = "ppddsc";
$tdatapnc911municipios[".importFields"][] = "avisos911";
$tdatapnc911municipios[".importFields"][] = "COUNT(municipio)";

$tdatapnc911municipios[".printFields"] = array();
$tdatapnc911municipios[".printFields"][] = "departamento";
$tdatapnc911municipios[".printFields"][] = "municipio";
$tdatapnc911municipios[".printFields"][] = "ppddsc";
$tdatapnc911municipios[".printFields"][] = "avisos911";
$tdatapnc911municipios[".printFields"][] = "COUNT(municipio)";

//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc911municipios","departamento");
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




	$tdatapnc911municipios["departamento"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc911municipios","municipio");
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




	$tdatapnc911municipios["municipio"] = $fdata;
//	ppddsc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ppddsc";
	$fdata["GoodName"] = "ppddsc";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc911municipios","ppddsc");
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




	$tdatapnc911municipios["ppddsc"] = $fdata;
//	avisos911
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "avisos911";
	$fdata["GoodName"] = "avisos911";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc911municipios","avisos911");
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








	$tdatapnc911municipios["avisos911"] = $fdata;
//	COUNT(municipio)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "COUNT(municipio)";
	$fdata["GoodName"] = "COUNT_municipio_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("pnc911municipios","COUNT_municipio_");
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








	$tdatapnc911municipios["COUNT(municipio)"] = $fdata;


$tables_data["pnc911municipios"]=&$tdatapnc911municipios;
$field_labels["pnc911municipios"] = &$fieldLabelspnc911municipios;
$fieldToolTips["pnc911municipios"] = &$fieldToolTipspnc911municipios;
$placeHolders["pnc911municipios"] = &$placeHolderspnc911municipios;
$page_titles["pnc911municipios"] = &$pageTitlespnc911municipios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["pnc911municipios"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pnc911municipios()
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
	"m_srcTableName" => "pnc911municipios"
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
	"m_srcTableName" => "pnc911municipios"
));

$proto6["m_sql"] = "departamento";
$proto6["m_srcTableName"] = "pnc911municipios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911municipios"
));

$proto8["m_sql"] = "municipio";
$proto8["m_srcTableName"] = "pnc911municipios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ppddsc",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911municipios"
));

$proto10["m_sql"] = "ppddsc";
$proto10["m_srcTableName"] = "pnc911municipios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "avisos911",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911municipios"
));

$proto12["m_sql"] = "avisos911";
$proto12["m_srcTableName"] = "pnc911municipios";
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
	"m_srcTableName" => "pnc911municipios"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "COUNT(municipio)";
$proto14["m_srcTableName"] = "pnc911municipios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "COUNT(municipio)";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "pnc911";
$proto18["m_srcTableName"] = "pnc911municipios";
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
$proto17["m_srcTableName"] = "pnc911municipios";
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
	"m_srcTableName" => "pnc911municipios"
));

$proto21["m_column"]=$obj;
$obj = new SQLGroupByItem($proto21);

$proto0["m_groupby"][]=$obj;
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911municipios"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "ppddsc",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911municipios"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "avisos911",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc911municipios"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pnc911municipios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pnc911municipios = createSqlQuery_pnc911municipios();


	
		;

					

$tdatapnc911municipios[".sqlquery"] = $queryData_pnc911municipios;

$tableEvents["pnc911municipios"] = new eventsBase;
$tdatapnc911municipios[".hasEvents"] = false;

?>