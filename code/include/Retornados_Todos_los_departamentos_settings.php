<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRetornados_Todos_los_departamentos = array();
	$tdataRetornados_Todos_los_departamentos[".truncateText"] = true;
	$tdataRetornados_Todos_los_departamentos[".NumberOfChars"] = 80;
	$tdataRetornados_Todos_los_departamentos[".ShortName"] = "Retornados_Todos_los_departamentos";
	$tdataRetornados_Todos_los_departamentos[".OwnerID"] = "";
	$tdataRetornados_Todos_los_departamentos[".OriginalTable"] = "retornados";

//	field labels
$fieldLabelsRetornados_Todos_los_departamentos = array();
$fieldToolTipsRetornados_Todos_los_departamentos = array();
$pageTitlesRetornados_Todos_los_departamentos = array();
$placeHoldersRetornados_Todos_los_departamentos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsRetornados_Todos_los_departamentos["Spanish"] = array();
	$fieldToolTipsRetornados_Todos_los_departamentos["Spanish"] = array();
	$placeHoldersRetornados_Todos_los_departamentos["Spanish"] = array();
	$pageTitlesRetornados_Todos_los_departamentos["Spanish"] = array();
	$fieldLabelsRetornados_Todos_los_departamentos["Spanish"]["a_o"] = "Año";
	$fieldToolTipsRetornados_Todos_los_departamentos["Spanish"]["a_o"] = "";
	$placeHoldersRetornados_Todos_los_departamentos["Spanish"]["a_o"] = "";
	$fieldLabelsRetornados_Todos_los_departamentos["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsRetornados_Todos_los_departamentos["Spanish"]["departamento"] = "";
	$placeHoldersRetornados_Todos_los_departamentos["Spanish"]["departamento"] = "";
	$fieldLabelsRetornados_Todos_los_departamentos["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsRetornados_Todos_los_departamentos["Spanish"]["municipio"] = "";
	$placeHoldersRetornados_Todos_los_departamentos["Spanish"]["municipio"] = "";
	$fieldLabelsRetornados_Todos_los_departamentos["Spanish"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsRetornados_Todos_los_departamentos["Spanish"]["sectorppd"] = "";
	$placeHoldersRetornados_Todos_los_departamentos["Spanish"]["sectorppd"] = "";
	$fieldLabelsRetornados_Todos_los_departamentos["Spanish"]["a_o1"] = "Año1";
	$fieldToolTipsRetornados_Todos_los_departamentos["Spanish"]["a_o1"] = "";
	$placeHoldersRetornados_Todos_los_departamentos["Spanish"]["a_o1"] = "";
	$fieldLabelsRetornados_Todos_los_departamentos["Spanish"]["COUNT_departamento_"] = "COUNT(departamento)";
	$fieldToolTipsRetornados_Todos_los_departamentos["Spanish"]["COUNT_departamento_"] = "";
	$placeHoldersRetornados_Todos_los_departamentos["Spanish"]["COUNT_departamento_"] = "";
	if (count($fieldToolTipsRetornados_Todos_los_departamentos["Spanish"]))
		$tdataRetornados_Todos_los_departamentos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRetornados_Todos_los_departamentos["English"] = array();
	$fieldToolTipsRetornados_Todos_los_departamentos["English"] = array();
	$placeHoldersRetornados_Todos_los_departamentos["English"] = array();
	$pageTitlesRetornados_Todos_los_departamentos["English"] = array();
	$fieldLabelsRetornados_Todos_los_departamentos["English"]["a_o"] = "Año";
	$fieldToolTipsRetornados_Todos_los_departamentos["English"]["a_o"] = "";
	$placeHoldersRetornados_Todos_los_departamentos["English"]["a_o"] = "";
	$fieldLabelsRetornados_Todos_los_departamentos["English"]["departamento"] = "Departamento";
	$fieldToolTipsRetornados_Todos_los_departamentos["English"]["departamento"] = "";
	$placeHoldersRetornados_Todos_los_departamentos["English"]["departamento"] = "";
	$fieldLabelsRetornados_Todos_los_departamentos["English"]["municipio"] = "Municipio";
	$fieldToolTipsRetornados_Todos_los_departamentos["English"]["municipio"] = "";
	$placeHoldersRetornados_Todos_los_departamentos["English"]["municipio"] = "";
	$fieldLabelsRetornados_Todos_los_departamentos["English"]["sectorppd"] = "Sectorppd";
	$fieldToolTipsRetornados_Todos_los_departamentos["English"]["sectorppd"] = "";
	$placeHoldersRetornados_Todos_los_departamentos["English"]["sectorppd"] = "";
	$fieldLabelsRetornados_Todos_los_departamentos["English"]["a_o1"] = "Año1";
	$fieldToolTipsRetornados_Todos_los_departamentos["English"]["a_o1"] = "";
	$placeHoldersRetornados_Todos_los_departamentos["English"]["a_o1"] = "";
	$fieldLabelsRetornados_Todos_los_departamentos["English"]["COUNT_departamento_"] = "COUNT(departamento)";
	$fieldToolTipsRetornados_Todos_los_departamentos["English"]["COUNT_departamento_"] = "";
	$placeHoldersRetornados_Todos_los_departamentos["English"]["COUNT_departamento_"] = "";
	if (count($fieldToolTipsRetornados_Todos_los_departamentos["English"]))
		$tdataRetornados_Todos_los_departamentos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRetornados_Todos_los_departamentos[""] = array();
	$fieldToolTipsRetornados_Todos_los_departamentos[""] = array();
	$placeHoldersRetornados_Todos_los_departamentos[""] = array();
	$pageTitlesRetornados_Todos_los_departamentos[""] = array();
	if (count($fieldToolTipsRetornados_Todos_los_departamentos[""]))
		$tdataRetornados_Todos_los_departamentos[".isUseToolTips"] = true;
}


	$tdataRetornados_Todos_los_departamentos[".NCSearch"] = true;



$tdataRetornados_Todos_los_departamentos[".shortTableName"] = "Retornados_Todos_los_departamentos";
$tdataRetornados_Todos_los_departamentos[".nSecOptions"] = 0;
$tdataRetornados_Todos_los_departamentos[".recsPerRowPrint"] = 1;
$tdataRetornados_Todos_los_departamentos[".mainTableOwnerID"] = "";
$tdataRetornados_Todos_los_departamentos[".moveNext"] = 1;
$tdataRetornados_Todos_los_departamentos[".entityType"] = 2;

$tdataRetornados_Todos_los_departamentos[".strOriginalTableName"] = "retornados";

	



$tdataRetornados_Todos_los_departamentos[".showAddInPopup"] = false;

$tdataRetornados_Todos_los_departamentos[".showEditInPopup"] = false;

$tdataRetornados_Todos_los_departamentos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRetornados_Todos_los_departamentos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRetornados_Todos_los_departamentos[".fieldsForRegister"] = array();

$tdataRetornados_Todos_los_departamentos[".listAjax"] = false;

	$tdataRetornados_Todos_los_departamentos[".audit"] = false;

	$tdataRetornados_Todos_los_departamentos[".locking"] = false;



$tdataRetornados_Todos_los_departamentos[".list"] = true;



$tdataRetornados_Todos_los_departamentos[".reorderRecordsByHeader"] = true;





$tdataRetornados_Todos_los_departamentos[".exportTo"] = true;

$tdataRetornados_Todos_los_departamentos[".printFriendly"] = true;


$tdataRetornados_Todos_los_departamentos[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataRetornados_Todos_los_departamentos[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataRetornados_Todos_los_departamentos[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataRetornados_Todos_los_departamentos[".searchSaving"] = false;
//

$tdataRetornados_Todos_los_departamentos[".showSearchPanel"] = true;
		$tdataRetornados_Todos_los_departamentos[".flexibleSearch"] = true;

$tdataRetornados_Todos_los_departamentos[".isUseAjaxSuggest"] = true;






$tdataRetornados_Todos_los_departamentos[".ajaxCodeSnippetAdded"] = false;

$tdataRetornados_Todos_los_departamentos[".buttonsAdded"] = false;

$tdataRetornados_Todos_los_departamentos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRetornados_Todos_los_departamentos[".isUseTimeForSearch"] = false;





$tdataRetornados_Todos_los_departamentos[".allSearchFields"] = array();
$tdataRetornados_Todos_los_departamentos[".filterFields"] = array();
$tdataRetornados_Todos_los_departamentos[".requiredSearchFields"] = array();

$tdataRetornados_Todos_los_departamentos[".allSearchFields"][] = "año";
		$tdataRetornados_Todos_los_departamentos[".requiredSearchFields"][] = "año";
$tdataRetornados_Todos_los_departamentos[".allSearchFields"][] = "sectorppd";
		$tdataRetornados_Todos_los_departamentos[".requiredSearchFields"][] = "sectorppd";
$tdataRetornados_Todos_los_departamentos[".allSearchFields"][] = "departamento";
		$tdataRetornados_Todos_los_departamentos[".requiredSearchFields"][] = "departamento";
$tdataRetornados_Todos_los_departamentos[".allSearchFields"][] = "año1";
	$tdataRetornados_Todos_los_departamentos[".allSearchFields"][] = "COUNT(departamento)";
	$tdataRetornados_Todos_los_departamentos[".allSearchFields"][] = "municipio";
		$tdataRetornados_Todos_los_departamentos[".requiredSearchFields"][] = "municipio";


$tdataRetornados_Todos_los_departamentos[".googleLikeFields"] = array();
$tdataRetornados_Todos_los_departamentos[".googleLikeFields"][] = "año";
$tdataRetornados_Todos_los_departamentos[".googleLikeFields"][] = "sectorppd";
$tdataRetornados_Todos_los_departamentos[".googleLikeFields"][] = "departamento";
$tdataRetornados_Todos_los_departamentos[".googleLikeFields"][] = "año1";
$tdataRetornados_Todos_los_departamentos[".googleLikeFields"][] = "COUNT(departamento)";
$tdataRetornados_Todos_los_departamentos[".googleLikeFields"][] = "municipio";

$tdataRetornados_Todos_los_departamentos[".panelSearchFields"] = array();
$tdataRetornados_Todos_los_departamentos[".searchPanelOptions"] = array();
$tdataRetornados_Todos_los_departamentos[".panelSearchFields"][] = "año";
	$tdataRetornados_Todos_los_departamentos[".panelSearchFields"][] = "sectorppd";
	$tdataRetornados_Todos_los_departamentos[".panelSearchFields"][] = "departamento";
	$tdataRetornados_Todos_los_departamentos[".panelSearchFields"][] = "municipio";
	
$tdataRetornados_Todos_los_departamentos[".advSearchFields"] = array();
$tdataRetornados_Todos_los_departamentos[".advSearchFields"][] = "año";
$tdataRetornados_Todos_los_departamentos[".advSearchFields"][] = "sectorppd";
$tdataRetornados_Todos_los_departamentos[".advSearchFields"][] = "departamento";
$tdataRetornados_Todos_los_departamentos[".advSearchFields"][] = "año1";
$tdataRetornados_Todos_los_departamentos[".advSearchFields"][] = "COUNT(departamento)";
$tdataRetornados_Todos_los_departamentos[".advSearchFields"][] = "municipio";

$tdataRetornados_Todos_los_departamentos[".tableType"] = "report";

$tdataRetornados_Todos_los_departamentos[".printerPageOrientation"] = 0;
$tdataRetornados_Todos_los_departamentos[".nPrinterPageScale"] = 100;

$tdataRetornados_Todos_los_departamentos[".nPrinterSplitRecords"] = 40;

$tdataRetornados_Todos_los_departamentos[".nPrinterPDFSplitRecords"] = 40;



$tdataRetornados_Todos_los_departamentos[".geocodingEnabled"] = false;

//report settings
$tdataRetornados_Todos_los_departamentos[".crossTabReport"] = true;

$tdataRetornados_Todos_los_departamentos[".reportGroupFields"] = true;
$tdataRetornados_Todos_los_departamentos[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "año";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "departamento";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdataRetornados_Todos_los_departamentos[".reportGroupFieldsData"] = $reportGroupFields;

$tdataRetornados_Todos_los_departamentos[".reportHorizontalSummary"] = true;

$tdataRetornados_Todos_los_departamentos[".isExistTotalFields"] = true;

$tdataRetornados_Todos_los_departamentos[".reportVerticalSummary"] = true;



$tdataRetornados_Todos_los_departamentos[".repShowDet"] = true;

$tdataRetornados_Todos_los_departamentos[".reportLayout"] = 6;

//end of report settings




$tdataRetornados_Todos_los_departamentos[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY departamento";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRetornados_Todos_los_departamentos[".strOrderBy"] = $tstrOrderBy;

$tdataRetornados_Todos_los_departamentos[".orderindexes"] = array();
$tdataRetornados_Todos_los_departamentos[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "departamento");

$tdataRetornados_Todos_los_departamentos[".sqlHead"] = "SELECT `año`,  sectorppd,  departamento,  `año` AS `año1`,  COUNT(departamento) AS `COUNT(departamento)`,  municipio";
$tdataRetornados_Todos_los_departamentos[".sqlFrom"] = "FROM retornados";
$tdataRetornados_Todos_los_departamentos[".sqlWhereExpr"] = "";
$tdataRetornados_Todos_los_departamentos[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRetornados_Todos_los_departamentos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRetornados_Todos_los_departamentos[".arrGroupsPerPage"] = $arrGPP;

$tdataRetornados_Todos_los_departamentos[".highlightSearchResults"] = true;

$tableKeysRetornados_Todos_los_departamentos = array();
$tdataRetornados_Todos_los_departamentos[".Keys"] = $tableKeysRetornados_Todos_los_departamentos;

$tdataRetornados_Todos_los_departamentos[".listFields"] = array();
$tdataRetornados_Todos_los_departamentos[".listFields"][] = "año";
$tdataRetornados_Todos_los_departamentos[".listFields"][] = "sectorppd";
$tdataRetornados_Todos_los_departamentos[".listFields"][] = "departamento";
$tdataRetornados_Todos_los_departamentos[".listFields"][] = "año1";
$tdataRetornados_Todos_los_departamentos[".listFields"][] = "COUNT(departamento)";
$tdataRetornados_Todos_los_departamentos[".listFields"][] = "municipio";

$tdataRetornados_Todos_los_departamentos[".hideMobileList"] = array();


$tdataRetornados_Todos_los_departamentos[".viewFields"] = array();
$tdataRetornados_Todos_los_departamentos[".viewFields"][] = "año";
$tdataRetornados_Todos_los_departamentos[".viewFields"][] = "sectorppd";
$tdataRetornados_Todos_los_departamentos[".viewFields"][] = "departamento";
$tdataRetornados_Todos_los_departamentos[".viewFields"][] = "año1";
$tdataRetornados_Todos_los_departamentos[".viewFields"][] = "COUNT(departamento)";
$tdataRetornados_Todos_los_departamentos[".viewFields"][] = "municipio";

$tdataRetornados_Todos_los_departamentos[".addFields"] = array();
$tdataRetornados_Todos_los_departamentos[".addFields"][] = "año";
$tdataRetornados_Todos_los_departamentos[".addFields"][] = "sectorppd";
$tdataRetornados_Todos_los_departamentos[".addFields"][] = "departamento";
$tdataRetornados_Todos_los_departamentos[".addFields"][] = "municipio";

$tdataRetornados_Todos_los_departamentos[".masterListFields"] = array();
$tdataRetornados_Todos_los_departamentos[".masterListFields"][] = "año";
$tdataRetornados_Todos_los_departamentos[".masterListFields"][] = "sectorppd";
$tdataRetornados_Todos_los_departamentos[".masterListFields"][] = "departamento";
$tdataRetornados_Todos_los_departamentos[".masterListFields"][] = "año1";
$tdataRetornados_Todos_los_departamentos[".masterListFields"][] = "COUNT(departamento)";
$tdataRetornados_Todos_los_departamentos[".masterListFields"][] = "municipio";

$tdataRetornados_Todos_los_departamentos[".inlineAddFields"] = array();
$tdataRetornados_Todos_los_departamentos[".inlineAddFields"][] = "año";
$tdataRetornados_Todos_los_departamentos[".inlineAddFields"][] = "sectorppd";
$tdataRetornados_Todos_los_departamentos[".inlineAddFields"][] = "departamento";
$tdataRetornados_Todos_los_departamentos[".inlineAddFields"][] = "municipio";

$tdataRetornados_Todos_los_departamentos[".editFields"] = array();
$tdataRetornados_Todos_los_departamentos[".editFields"][] = "año";
$tdataRetornados_Todos_los_departamentos[".editFields"][] = "sectorppd";
$tdataRetornados_Todos_los_departamentos[".editFields"][] = "departamento";
$tdataRetornados_Todos_los_departamentos[".editFields"][] = "municipio";

$tdataRetornados_Todos_los_departamentos[".inlineEditFields"] = array();
$tdataRetornados_Todos_los_departamentos[".inlineEditFields"][] = "año";
$tdataRetornados_Todos_los_departamentos[".inlineEditFields"][] = "sectorppd";
$tdataRetornados_Todos_los_departamentos[".inlineEditFields"][] = "departamento";
$tdataRetornados_Todos_los_departamentos[".inlineEditFields"][] = "municipio";

$tdataRetornados_Todos_los_departamentos[".updateSelectedFields"] = array();
$tdataRetornados_Todos_los_departamentos[".updateSelectedFields"][] = "año";
$tdataRetornados_Todos_los_departamentos[".updateSelectedFields"][] = "sectorppd";
$tdataRetornados_Todos_los_departamentos[".updateSelectedFields"][] = "departamento";
$tdataRetornados_Todos_los_departamentos[".updateSelectedFields"][] = "municipio";


$tdataRetornados_Todos_los_departamentos[".exportFields"] = array();
$tdataRetornados_Todos_los_departamentos[".exportFields"][] = "año";
$tdataRetornados_Todos_los_departamentos[".exportFields"][] = "sectorppd";
$tdataRetornados_Todos_los_departamentos[".exportFields"][] = "departamento";
$tdataRetornados_Todos_los_departamentos[".exportFields"][] = "año1";
$tdataRetornados_Todos_los_departamentos[".exportFields"][] = "COUNT(departamento)";
$tdataRetornados_Todos_los_departamentos[".exportFields"][] = "municipio";

$tdataRetornados_Todos_los_departamentos[".importFields"] = array();
$tdataRetornados_Todos_los_departamentos[".importFields"][] = "año";
$tdataRetornados_Todos_los_departamentos[".importFields"][] = "sectorppd";
$tdataRetornados_Todos_los_departamentos[".importFields"][] = "departamento";
$tdataRetornados_Todos_los_departamentos[".importFields"][] = "año1";
$tdataRetornados_Todos_los_departamentos[".importFields"][] = "COUNT(departamento)";
$tdataRetornados_Todos_los_departamentos[".importFields"][] = "municipio";

$tdataRetornados_Todos_los_departamentos[".printFields"] = array();
$tdataRetornados_Todos_los_departamentos[".printFields"][] = "año";
$tdataRetornados_Todos_los_departamentos[".printFields"][] = "sectorppd";
$tdataRetornados_Todos_los_departamentos[".printFields"][] = "departamento";
$tdataRetornados_Todos_los_departamentos[".printFields"][] = "año1";
$tdataRetornados_Todos_los_departamentos[".printFields"][] = "COUNT(departamento)";
$tdataRetornados_Todos_los_departamentos[".printFields"][] = "municipio";

//	año
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "año";
	$fdata["GoodName"] = "a_o";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Todos_los_departamentos","a_o");
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




	$tdataRetornados_Todos_los_departamentos["año"] = $fdata;
//	sectorppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sectorppd";
	$fdata["GoodName"] = "sectorppd";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Todos_los_departamentos","sectorppd");
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




	$tdataRetornados_Todos_los_departamentos["sectorppd"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Todos_los_departamentos","departamento");
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




	$tdataRetornados_Todos_los_departamentos["departamento"] = $fdata;
//	año1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "año1";
	$fdata["GoodName"] = "a_o1";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Todos_los_departamentos","a_o1");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdataRetornados_Todos_los_departamentos["año1"] = $fdata;
//	COUNT(departamento)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "COUNT(departamento)";
	$fdata["GoodName"] = "COUNT_departamento_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Retornados_Todos_los_departamentos","COUNT_departamento_");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(departamento)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(departamento)";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataRetornados_Todos_los_departamentos["COUNT(departamento)"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "retornados";
	$fdata["Label"] = GetFieldLabel("Retornados_Todos_los_departamentos","municipio");
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




	$tdataRetornados_Todos_los_departamentos["municipio"] = $fdata;


$tables_data["Retornados-Todos los departamentos"]=&$tdataRetornados_Todos_los_departamentos;
$field_labels["Retornados_Todos_los_departamentos"] = &$fieldLabelsRetornados_Todos_los_departamentos;
$fieldToolTips["Retornados_Todos_los_departamentos"] = &$fieldToolTipsRetornados_Todos_los_departamentos;
$placeHolders["Retornados_Todos_los_departamentos"] = &$placeHoldersRetornados_Todos_los_departamentos;
$page_titles["Retornados_Todos_los_departamentos"] = &$pageTitlesRetornados_Todos_los_departamentos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Retornados-Todos los departamentos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Retornados_Todos_los_departamentos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`año`,  sectorppd,  departamento,  `año` AS `año1`,  COUNT(departamento) AS `COUNT(departamento)`,  municipio";
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
	"m_srcTableName" => "Retornados-Todos los departamentos"
));

$proto6["m_sql"] = "`año`";
$proto6["m_srcTableName"] = "Retornados-Todos los departamentos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sectorppd",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Todos los departamentos"
));

$proto8["m_sql"] = "sectorppd";
$proto8["m_srcTableName"] = "Retornados-Todos los departamentos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Todos los departamentos"
));

$proto10["m_sql"] = "departamento";
$proto10["m_srcTableName"] = "Retornados-Todos los departamentos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "año",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Todos los departamentos"
));

$proto12["m_sql"] = "`año`";
$proto12["m_srcTableName"] = "Retornados-Todos los departamentos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "año1";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_COUNT";
$proto15["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Todos los departamentos"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "COUNT(departamento)";
$proto14["m_srcTableName"] = "Retornados-Todos los departamentos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "COUNT(departamento)";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Todos los departamentos"
));

$proto17["m_sql"] = "municipio";
$proto17["m_srcTableName"] = "Retornados-Todos los departamentos";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "retornados";
$proto20["m_srcTableName"] = "Retornados-Todos los departamentos";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "año";
$proto20["m_columns"][] = "mes";
$proto20["m_columns"][] = "fechaentrevista";
$proto20["m_columns"][] = "tipoentrevista";
$proto20["m_columns"][] = "ficha";
$proto20["m_columns"][] = "numalien";
$proto20["m_columns"][] = "fechanacimiento";
$proto20["m_columns"][] = "documentoficha";
$proto20["m_columns"][] = "numerodocumento";
$proto20["m_columns"][] = "nombredocumento";
$proto20["m_columns"][] = "consulado";
$proto20["m_columns"][] = "consulado_analisis";
$proto20["m_columns"][] = "departamento";
$proto20["m_columns"][] = "municipio";
$proto20["m_columns"][] = "sexo";
$proto20["m_columns"][] = "edad";
$proto20["m_columns"][] = "rango_etario";
$proto20["m_columns"][] = "tipoedad";
$proto20["m_columns"][] = "paisrepatriacion";
$proto20["m_columns"][] = "regionrepatriacion";
$proto20["m_columns"][] = "antecedentes_penales";
$proto20["m_columns"][] = "tipo_antecedentes";
$proto20["m_columns"][] = "antecedentes";
$proto20["m_columns"][] = "sectorppd";
$proto20["m_columns"][] = "num_mes";
$proto20["m_columns"][] = "antecedente_analisis";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "retornados";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "Retornados-Todos los departamentos";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "año",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Todos los departamentos"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "sectorppd",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Todos los departamentos"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Todos los departamentos"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Todos los departamentos"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "retornados",
	"m_srcTableName" => "Retornados-Todos los departamentos"
));

$proto31["m_column"]=$obj;
$proto31["m_bAsc"] = 1;
$proto31["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto31);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Retornados-Todos los departamentos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Retornados_Todos_los_departamentos = createSqlQuery_Retornados_Todos_los_departamentos();


	
		;

						

$tdataRetornados_Todos_los_departamentos[".sqlquery"] = $queryData_Retornados_Todos_los_departamentos;

$tableEvents["Retornados-Todos los departamentos"] = new eventsBase;
$tdataRetornados_Todos_los_departamentos[".hasEvents"] = false;

?>