<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRetornados_Municipios_por_a_o = array();
	$tdataRetornados_Municipios_por_a_o[".truncateText"] = true;
	$tdataRetornados_Municipios_por_a_o[".NumberOfChars"] = 80;
	$tdataRetornados_Municipios_por_a_o[".ShortName"] = "Retornados_Municipios_por_a_o";
	$tdataRetornados_Municipios_por_a_o[".OwnerID"] = "";
	$tdataRetornados_Municipios_por_a_o[".OriginalTable"] = "retornados";

//	field labels
$fieldLabelsRetornados_Municipios_por_a_o = array();
$fieldToolTipsRetornados_Municipios_por_a_o = array();
$pageTitlesRetornados_Municipios_por_a_o = array();
$placeHoldersRetornados_Municipios_por_a_o = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsRetornados_Municipios_por_a_o["Spanish"] = array();
	$fieldToolTipsRetornados_Municipios_por_a_o["Spanish"] = array();
	$placeHoldersRetornados_Municipios_por_a_o["Spanish"] = array();
	$pageTitlesRetornados_Municipios_por_a_o["Spanish"] = array();
	$fieldLabelsRetornados_Municipios_por_a_o["Spanish"]["a_o"] = "Año";
	$fieldToolTipsRetornados_Municipios_por_a_o["Spanish"]["a_o"] = "";
	$placeHoldersRetornados_Municipios_por_a_o["Spanish"]["a_o"] = "";
	$fieldLabelsRetornados_Municipios_por_a_o["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsRetornados_Municipios_por_a_o["Spanish"]["departamento"] = "";
	$placeHoldersRetornados_Municipios_por_a_o["Spanish"]["departamento"] = "";
	$fieldLabelsRetornados_Municipios_por_a_o["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsRetornados_Municipios_por_a_o["Spanish"]["municipio"] = "";
	$placeHoldersRetornados_Municipios_por_a_o["Spanish"]["municipio"] = "";
	$fieldLabelsRetornados_Municipios_por_a_o["Spanish"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsRetornados_Municipios_por_a_o["Spanish"]["sectorppd"] = "";
	$placeHoldersRetornados_Municipios_por_a_o["Spanish"]["sectorppd"] = "";
	$fieldLabelsRetornados_Municipios_por_a_o["Spanish"]["COUNT_municipio_"] = "COUNT(municipio)";
	$fieldToolTipsRetornados_Municipios_por_a_o["Spanish"]["COUNT_municipio_"] = "";
	$placeHoldersRetornados_Municipios_por_a_o["Spanish"]["COUNT_municipio_"] = "";
	if (count($fieldToolTipsRetornados_Municipios_por_a_o["Spanish"]))
		$tdataRetornados_Municipios_por_a_o[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRetornados_Municipios_por_a_o["English"] = array();
	$fieldToolTipsRetornados_Municipios_por_a_o["English"] = array();
	$placeHoldersRetornados_Municipios_por_a_o["English"] = array();
	$pageTitlesRetornados_Municipios_por_a_o["English"] = array();
	$fieldLabelsRetornados_Municipios_por_a_o["English"]["a_o"] = "Año";
	$fieldToolTipsRetornados_Municipios_por_a_o["English"]["a_o"] = "";
	$placeHoldersRetornados_Municipios_por_a_o["English"]["a_o"] = "";
	$fieldLabelsRetornados_Municipios_por_a_o["English"]["departamento"] = "Departamento";
	$fieldToolTipsRetornados_Municipios_por_a_o["English"]["departamento"] = "";
	$placeHoldersRetornados_Municipios_por_a_o["English"]["departamento"] = "";
	$fieldLabelsRetornados_Municipios_por_a_o["English"]["municipio"] = "Municipio";
	$fieldToolTipsRetornados_Municipios_por_a_o["English"]["municipio"] = "";
	$placeHoldersRetornados_Municipios_por_a_o["English"]["municipio"] = "";
	$fieldLabelsRetornados_Municipios_por_a_o["English"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsRetornados_Municipios_por_a_o["English"]["sectorppd"] = "";
	$placeHoldersRetornados_Municipios_por_a_o["English"]["sectorppd"] = "";
	$fieldLabelsRetornados_Municipios_por_a_o["English"]["COUNT_municipio_"] = "COUNT(municipio)";
	$fieldToolTipsRetornados_Municipios_por_a_o["English"]["COUNT_municipio_"] = "";
	$placeHoldersRetornados_Municipios_por_a_o["English"]["COUNT_municipio_"] = "";
	if (count($fieldToolTipsRetornados_Municipios_por_a_o["English"]))
		$tdataRetornados_Municipios_por_a_o[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRetornados_Municipios_por_a_o[""] = array();
	$fieldToolTipsRetornados_Municipios_por_a_o[""] = array();
	$placeHoldersRetornados_Municipios_por_a_o[""] = array();
	$pageTitlesRetornados_Municipios_por_a_o[""] = array();
	if (count($fieldToolTipsRetornados_Municipios_por_a_o[""]))
		$tdataRetornados_Municipios_por_a_o[".isUseToolTips"] = true;
}


	$tdataRetornados_Municipios_por_a_o[".NCSearch"] = true;



$tdataRetornados_Municipios_por_a_o[".shortTableName"] = "Retornados_Municipios_por_a_o";
$tdataRetornados_Municipios_por_a_o[".nSecOptions"] = 0;
$tdataRetornados_Municipios_por_a_o[".recsPerRowPrint"] = 1;
$tdataRetornados_Municipios_por_a_o[".mainTableOwnerID"] = "";
$tdataRetornados_Municipios_por_a_o[".moveNext"] = 1;
$tdataRetornados_Municipios_por_a_o[".entityType"] = 2;

$tdataRetornados_Municipios_por_a_o[".strOriginalTableName"] = "retornados";

	



$tdataRetornados_Municipios_por_a_o[".showAddInPopup"] = false;

$tdataRetornados_Municipios_por_a_o[".showEditInPopup"] = false;

$tdataRetornados_Municipios_por_a_o[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRetornados_Municipios_por_a_o[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRetornados_Municipios_por_a_o[".fieldsForRegister"] = array();

$tdataRetornados_Municipios_por_a_o[".listAjax"] = false;

	$tdataRetornados_Municipios_por_a_o[".audit"] = false;

	$tdataRetornados_Municipios_por_a_o[".locking"] = false;



$tdataRetornados_Municipios_por_a_o[".list"] = true;



$tdataRetornados_Municipios_por_a_o[".reorderRecordsByHeader"] = true;





$tdataRetornados_Municipios_por_a_o[".exportTo"] = true;

$tdataRetornados_Municipios_por_a_o[".printFriendly"] = true;


$tdataRetornados_Municipios_por_a_o[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataRetornados_Municipios_por_a_o[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataRetornados_Municipios_por_a_o[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataRetornados_Municipios_por_a_o[".searchSaving"] = false;
//

$tdataRetornados_Municipios_por_a_o[".showSearchPanel"] = true;
		$tdataRetornados_Municipios_por_a_o[".flexibleSearch"] = true;

$tdataRetornados_Municipios_por_a_o[".isUseAjaxSuggest"] = true;






$tdataRetornados_Municipios_por_a_o[".ajaxCodeSnippetAdded"] = false;

$tdataRetornados_Municipios_por_a_o[".buttonsAdded"] = false;

$tdataRetornados_Municipios_por_a_o[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRetornados_Municipios_por_a_o[".isUseTimeForSearch"] = false;





$tdataRetornados_Municipios_por_a_o[".allSearchFields"] = array();
$tdataRetornados_Municipios_por_a_o[".filterFields"] = array();
$tdataRetornados_Municipios_por_a_o[".requiredSearchFields"] = array();

$tdataRetornados_Municipios_por_a_o[".allSearchFields"][] = "año";
		$tdataRetornados_Municipios_por_a_o[".requiredSearchFields"][] = "año";
$tdataRetornados_Municipios_por_a_o[".allSearchFields"][] = "sectorppd";
		$tdataRetornados_Municipios_por_a_o[".requiredSearchFields"][] = "sectorppd";
$tdataRetornados_Municipios_por_a_o[".allSearchFields"][] = "municipio";
		$tdataRetornados_Municipios_por_a_o[".requiredSearchFields"][] = "municipio";
$tdataRetornados_Municipios_por_a_o[".allSearchFields"][] = "departamento";
		$tdataRetornados_Municipios_por_a_o[".requiredSearchFields"][] = "departamento";


$tdataRetornados_Municipios_por_a_o[".googleLikeFields"] = array();
$tdataRetornados_Municipios_por_a_o[".googleLikeFields"][] = "año";
$tdataRetornados_Municipios_por_a_o[".googleLikeFields"][] = "sectorppd";
$tdataRetornados_Municipios_por_a_o[".googleLikeFields"][] = "municipio";
$tdataRetornados_Municipios_por_a_o[".googleLikeFields"][] = "departamento";

$tdataRetornados_Municipios_por_a_o[".panelSearchFields"] = array();
$tdataRetornados_Municipios_por_a_o[".searchPanelOptions"] = array();
$tdataRetornados_Municipios_por_a_o[".panelSearchFields"][] = "año";
	$tdataRetornados_Municipios_por_a_o[".panelSearchFields"][] = "sectorppd";
	$tdataRetornados_Municipios_por_a_o[".panelSearchFields"][] = "municipio";
	$tdataRetornados_Municipios_por_a_o[".panelSearchFields"][] = "departamento";
	
$tdataRetornados_Municipios_por_a_o[".advSearchFields"] = array();
$tdataRetornados_Municipios_por_a_o[".advSearchFields"][] = "año";
$tdataRetornados_Municipios_por_a_o[".advSearchFields"][] = "sectorppd";
$tdataRetornados_Municipios_por_a_o[".advSearchFields"][] = "municipio";
$tdataRetornados_Municipios_por_a_o[".advSearchFields"][] = "departamento";

$tdataRetornados_Municipios_por_a_o[".tableType"] = "report";

$tdataRetornados_Municipios_por_a_o[".printerPageOrientation"] = 0;
$tdataRetornados_Municipios_por_a_o[".nPrinterPageScale"] = 100;

$tdataRetornados_Municipios_por_a_o[".nPrinterSplitRecords"] = 40;

$tdataRetornados_Municipios_por_a_o[".nPrinterPDFSplitRecords"] = 40;



$tdataRetornados_Municipios_por_a_o[".geocodingEnabled"] = false;

//report settings

$tdataRetornados_Municipios_por_a_o[".reportPrintPartitionType"] = 1;
$tdataRetornados_Municipios_por_a_o[".reportPrintGroupsPerPage"] = 3;
$tdataRetornados_Municipios_por_a_o[".reportPrintPDFGroupsPerPage"] = 3;
$tdataRetornados_Municipios_por_a_o[".lowGroup"] = 2;



$tdataRetornados_Municipios_por_a_o[".reportGroupFields"] = true;
$tdataRetornados_Municipios_por_a_o[".pageSize"] = 5;
$tdataRetornados_Municipios_por_a_o[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "departamento";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "municipio";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataRetornados_Municipios_por_a_o[".reportGroupFieldsData"] = $reportGroupFields;

$tdataRetornados_Municipios_por_a_o[".reportHorizontalSummary"] = true;

$tdataRetornados_Municipios_por_a_o[".isExistTotalFields"] = true;

$tdataRetornados_Municipios_por_a_o[".reportVerticalSummary"] = true;

$tdataRetornados_Municipios_por_a_o[".reportPageSummary"] = true;

$tdataRetornados_Municipios_por_a_o[".reportGlobalSummary"] = true;

$tdataRetornados_Municipios_por_a_o[".repShowDet"] = true;

$tdataRetornados_Municipios_por_a_o[".reportLayout"] = 0;

//end of report settings




$tdataRetornados_Municipios_por_a_o[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY departamento";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRetornados_Municipios_por_a_o[".strOrderBy"] = $tstrOrderBy;

$tdataRetornados_Municipios_por_a_o[".orderindexes"] = array();
$tdataRetornados_Municipios_por_a_o[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "departamento");

$tdataRetornados_Municipios_por_a_o[".sqlHead"] = "SELECT `año`,  sectorppd,  municipio,  departamento,  COUNT(municipio) AS `COUNT(municipio)`";
$tdataRetornados_Municipios_por_a_o[".sqlFrom"] = "FROM retornados";
$tdataRetornados_Municipios_por_a_o[".sqlWhereExpr"] = "";
$tdataRetornados_Municipios_por_a_o[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRetornados_Municipios_por_a_o[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRetornados_Municipios_por_a_o[".arrGroupsPerPage"] = $arrGPP;

$tdataRetornados_Municipios_por_a_o[".highlightSearchResults"] = true;

$tableKeysRetornados_Municipios_por_a_o = array();
$tdataRetornados_Municipios_por_a_o[".Keys"] = $tableKeysRetornados_Municipios_por_a_o;

$tdataRetornados_Municipios_por_a_o[".listFields"] = array();
$tdataRetornados_Municipios_por_a_o[".listFields"][] = "año";
$tdataRetornados_Municipios_por_a_o[".listFields"][] = "sectorppd";
$tdataRetornados_Municipios_por_a_o[".listFields"][] = "municipio";
$tdataRetornados_Municipios_por_a_o[".listFields"][] = "departamento";
$tdataRetornados_Municipios_por_a_o[".listFields"][] = "COUNT(municipio)";

$tdataRetornados_Municipios_por_a_o[".hideMobileList"] = array();


$tdataRetornados_Municipios_por_a_o[".viewFields"] = array();
$tdataRetornados_Municipios_por_a_o[".viewFields"][] = "año";
$tdataRetornados_Municipios_por_a_o[".viewFields"][] = "sectorppd";
$tdataRetornados_Municipios_por_a_o[".viewFields"][] = "municipio";
$tdataRetornados_Municipios_por_a_o[".viewFields"][] = "departamento";
$tdataRetornados_Municipios_por_a_o[".viewFields"][] = "COUNT(municipio)";

$tdataRetornados_Municipios_por_a_o[".addFields"] = array();
$tdataRetornados_Municipios_por_a_o[".addFields"][] = "año";
$tdataRetornados_Municipios_por_a_o[".addFields"][] = "sectorppd";
$tdataRetornados_Municipios_por_a_o[".addFields"][] = "municipio";
$tdataRetornados_Municipios_por_a_o[".addFields"][] = "departamento";

$tdataRetornados_Municipios_por_a_o[".masterListFields"] = array();
$tdataRetornados_Municipios_por_a_o[".masterListFields"][] = "año";
$tdataRetornados_Municipios_por_a_o[".masterListFields"][] = "sectorppd";
$tdataRetornados_Municipios_por_a_o[".masterListFields"][] = "municipio";
$tdataRetornados_Municipios_por_a_o[".masterListFields"][] = "departamento";
$tdataRetornados_Municipios_por_a_o[".masterListFields"][] = "COUNT(municipio)";

$tdataRetornados_Municipios_por_a_o[".inlineAddFields"] = array();
$tdataRetornados_Municipios_por_a_o[".inlineAddFields"][] = "año";
$tdataRetornados_Municipios_por_a_o[".inlineAddFields"][] = "sectorppd";
$tdataRetornados_Municipios_por_a_o[".inlineAddFields"][] = "municipio";
$tdataRetornados_Municipios_por_a_o[".inlineAddFields"][] = "departamento";

$tdataRetornados_Municipios_por_a_o[".editFields"] = array();
$tdataRetornados_Municipios_por_a_o[".editFields"][] = "año";
$tdataRetornados_Municipios_por_a_o[".editFields"][] = "sectorppd";
$tdataRetornados_Municipios_por_a_o[".editFields"][] = "municipio";
$tdataRetornados_Municipios_por_a_o[".editFields"][] = "departamento";

$tdataRetornados_Municipios_por_a_o[".inlineEditFields"] = array();
$tdataRetornados_Municipios_por_a_o[".inlineEditFields"][] = "año";
$tdataRetornados_Municipios_por_a_o[".inlineEditFields"][] = "sectorppd";
$tdataRetornados_Municipios_por_a_o[".inlineEditFields"][] = "municipio";
$tdataRetornados_Municipios_por_a_o[".inlineEditFields"][] = "departamento";

$tdataRetornados_Municipios_por_a_o[".updateSelectedFields"] = array();
$tdataRetornados_Municipios_por_a_o[".updateSelectedFields"][] = "año";
$tdataRetornados_Municipios_por_a_o[".updateSelectedFields"][] = "sectorppd";
$tdataRetornados_Municipios_por_a_o[".updateSelectedFields"][] = "municipio";
$tdataRetornados_Municipios_por_a_o[".updateSelectedFields"][] = "departamento";


$tdataRetornados_Municipios_por_a_o[".exportFields"] = array();
$tdataRetornados_Municipios_por_a_o[".exportFields"][] = "año";
$tdataRetornados_Municipios_por_a_o[".exportFields"][] = "sectorppd";
$tdataRetornados_Municipios_por_a_o[".exportFields"][] = "municipio";
$tdataRetornados_Municipios_por_a_o[".exportFields"][] = "departamento";
$tdataRetornados_Municipios_por_a_o[".exportFields"][] = "COUNT(municipio)";

$tdataRetornados_Municipios_por_a_o[".importFields"] = array();
$tdataRetornados_Municipios_por_a_o[".importFields"][] = "año";
$tdataRetornados_Municipios_por_a_o[".importFields"][] = "sectorppd";
$tdataRetornados_Municipios_por_a_o[".importFields"][] = "municipio";
$tdataRetornados_Municipios_por_a_o[".importFields"][] = "departamento";
$tdataRetornados_Municipios_por_a_o[".importFields"][] = "COUNT(municipio)";

$tdataRetornados_Municipios_por_a_o[".printFields"] = array();
$tdataRetornados_Municipios_por_a_o[".printFields"][] = "año";
$tdataRetornados_Municipios_por_a_o[".printFields"][] = "sectorppd";
$tdataRetornados_Municipios_por_a_o[".printFields"][] = "municipio";
$tdataRetornados_Municipios_por_a_o[".printFields"][] = "departamento";
$tdataRetornados_Municipios_por_a_o[".printFields"][] = "COUNT(municipio)";

//	año
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "año";
	$fdata["GoodName"] = "a_o";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Municipios_por_a_o","a_o");
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

		$fdata["strField"] = "año";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`año`";

	
	
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




	$tdataRetornados_Municipios_por_a_o["año"] = $fdata;
//	sectorppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sectorppd";
	$fdata["GoodName"] = "sectorppd";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Municipios_por_a_o","sectorppd");
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

		$fdata["strField"] = "sectorppd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sectorppd";

	
	
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




	$tdataRetornados_Municipios_por_a_o["sectorppd"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Municipios_por_a_o","municipio");
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




	$tdataRetornados_Municipios_por_a_o["municipio"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Municipios_por_a_o","departamento");
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




	$tdataRetornados_Municipios_por_a_o["departamento"] = $fdata;
//	COUNT(municipio)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "COUNT(municipio)";
	$fdata["GoodName"] = "COUNT_municipio_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Retornados_Municipios_por_a_o","COUNT_municipio_");
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








	$tdataRetornados_Municipios_por_a_o["COUNT(municipio)"] = $fdata;


$tables_data["Retornados-Municipios por año"]=&$tdataRetornados_Municipios_por_a_o;
$field_labels["Retornados_Municipios_por_a_o"] = &$fieldLabelsRetornados_Municipios_por_a_o;
$fieldToolTips["Retornados_Municipios_por_a_o"] = &$fieldToolTipsRetornados_Municipios_por_a_o;
$placeHolders["Retornados_Municipios_por_a_o"] = &$placeHoldersRetornados_Municipios_por_a_o;
$page_titles["Retornados_Municipios_por_a_o"] = &$pageTitlesRetornados_Municipios_por_a_o;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Retornados-Municipios por año"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Retornados-Municipios por año"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Retornados_Municipios_por_a_o()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`año`,  sectorppd,  municipio,  departamento,  COUNT(municipio) AS `COUNT(municipio)`";
$proto0["m_strFrom"] = "FROM retornados";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY departamento";
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
	"m_strName" => "año",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Municipios por año"
));

$proto6["m_sql"] = "`año`";
$proto6["m_srcTableName"] = "Retornados-Municipios por año";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sectorppd",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Municipios por año"
));

$proto8["m_sql"] = "sectorppd";
$proto8["m_srcTableName"] = "Retornados-Municipios por año";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Municipios por año"
));

$proto10["m_sql"] = "municipio";
$proto10["m_srcTableName"] = "Retornados-Municipios por año";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Municipios por año"
));

$proto12["m_sql"] = "departamento";
$proto12["m_srcTableName"] = "Retornados-Municipios por año";
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
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Municipios por año"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "COUNT(municipio)";
$proto14["m_srcTableName"] = "Retornados-Municipios por año";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "COUNT(municipio)";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "retornados";
$proto18["m_srcTableName"] = "Retornados-Municipios por año";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "año";
$proto18["m_columns"][] = "mes";
$proto18["m_columns"][] = "fechaentrevista";
$proto18["m_columns"][] = "tipoentrevista";
$proto18["m_columns"][] = "ficha";
$proto18["m_columns"][] = "numalien";
$proto18["m_columns"][] = "fechanacimiento";
$proto18["m_columns"][] = "documentoficha";
$proto18["m_columns"][] = "numerodocumento";
$proto18["m_columns"][] = "nombredocumento";
$proto18["m_columns"][] = "consulado";
$proto18["m_columns"][] = "consulado_analisis";
$proto18["m_columns"][] = "departamento";
$proto18["m_columns"][] = "municipio";
$proto18["m_columns"][] = "sexo";
$proto18["m_columns"][] = "edad";
$proto18["m_columns"][] = "rango_etario";
$proto18["m_columns"][] = "tipoedad";
$proto18["m_columns"][] = "paisrepatriacion";
$proto18["m_columns"][] = "regionrepatriacion";
$proto18["m_columns"][] = "antecedentes_penales";
$proto18["m_columns"][] = "tipo_antecedentes";
$proto18["m_columns"][] = "antecedentes";
$proto18["m_columns"][] = "sectorppd";
$proto18["m_columns"][] = "num_mes";
$proto18["m_columns"][] = "antecedente_analisis";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "retornados";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "Retornados-Municipios por año";
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
	"m_strName" => "año",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Municipios por año"
));

$proto21["m_column"]=$obj;
$obj = new SQLGroupByItem($proto21);

$proto0["m_groupby"][]=$obj;
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "sectorppd",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Municipios por año"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Municipios por año"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Municipios por año"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Municipios por año"
));

$proto29["m_column"]=$obj;
$proto29["m_bAsc"] = 1;
$proto29["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto29);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Retornados-Municipios por año";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Retornados_Municipios_por_a_o = createSqlQuery_Retornados_Municipios_por_a_o();


	
		;

					

$tdataRetornados_Municipios_por_a_o[".sqlquery"] = $queryData_Retornados_Municipios_por_a_o;

$tableEvents["Retornados-Municipios por año"] = new eventsBase;
$tdataRetornados_Municipios_por_a_o[".hasEvents"] = false;

?>