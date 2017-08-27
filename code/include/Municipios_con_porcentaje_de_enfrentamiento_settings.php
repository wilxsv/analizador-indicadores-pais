<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMunicipios_con_porcentaje_de_enfrentamiento = array();
	$tdataMunicipios_con_porcentaje_de_enfrentamiento[".truncateText"] = true;
	$tdataMunicipios_con_porcentaje_de_enfrentamiento[".NumberOfChars"] = 80;
	$tdataMunicipios_con_porcentaje_de_enfrentamiento[".ShortName"] = "Municipios_con_porcentaje_de_enfrentamiento";
	$tdataMunicipios_con_porcentaje_de_enfrentamiento[".OwnerID"] = "";
	$tdataMunicipios_con_porcentaje_de_enfrentamiento[".OriginalTable"] = "homicidios_sv_2016";

//	field labels
$fieldLabelsMunicipios_con_porcentaje_de_enfrentamiento = array();
$fieldToolTipsMunicipios_con_porcentaje_de_enfrentamiento = array();
$pageTitlesMunicipios_con_porcentaje_de_enfrentamiento = array();
$placeHoldersMunicipios_con_porcentaje_de_enfrentamiento = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsMunicipios_con_porcentaje_de_enfrentamiento["Spanish"] = array();
	$fieldToolTipsMunicipios_con_porcentaje_de_enfrentamiento["Spanish"] = array();
	$placeHoldersMunicipios_con_porcentaje_de_enfrentamiento["Spanish"] = array();
	$pageTitlesMunicipios_con_porcentaje_de_enfrentamiento["Spanish"] = array();
	$fieldLabelsMunicipios_con_porcentaje_de_enfrentamiento["Spanish"]["__municipio_"] = "Municipio";
	$fieldToolTipsMunicipios_con_porcentaje_de_enfrentamiento["Spanish"]["__municipio_"] = "";
	$placeHoldersMunicipios_con_porcentaje_de_enfrentamiento["Spanish"]["__municipio_"] = "";
	$fieldLabelsMunicipios_con_porcentaje_de_enfrentamiento["Spanish"]["__causa_pr_1"] = "Causa Pr 1";
	$fieldToolTipsMunicipios_con_porcentaje_de_enfrentamiento["Spanish"]["__causa_pr_1"] = "";
	$placeHoldersMunicipios_con_porcentaje_de_enfrentamiento["Spanish"]["__causa_pr_1"] = "";
	$fieldLabelsMunicipios_con_porcentaje_de_enfrentamiento["Spanish"]["COUNT___causa_pr_1_"] = "COUNT(  Causa Pr 1)";
	$fieldToolTipsMunicipios_con_porcentaje_de_enfrentamiento["Spanish"]["COUNT___causa_pr_1_"] = "";
	$placeHoldersMunicipios_con_porcentaje_de_enfrentamiento["Spanish"]["COUNT___causa_pr_1_"] = "";
	if (count($fieldToolTipsMunicipios_con_porcentaje_de_enfrentamiento["Spanish"]))
		$tdataMunicipios_con_porcentaje_de_enfrentamiento[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMunicipios_con_porcentaje_de_enfrentamiento["English"] = array();
	$fieldToolTipsMunicipios_con_porcentaje_de_enfrentamiento["English"] = array();
	$placeHoldersMunicipios_con_porcentaje_de_enfrentamiento["English"] = array();
	$pageTitlesMunicipios_con_porcentaje_de_enfrentamiento["English"] = array();
	$fieldLabelsMunicipios_con_porcentaje_de_enfrentamiento["English"]["__municipio_"] = "Municipio";
	$fieldToolTipsMunicipios_con_porcentaje_de_enfrentamiento["English"]["__municipio_"] = "";
	$placeHoldersMunicipios_con_porcentaje_de_enfrentamiento["English"]["__municipio_"] = "";
	$fieldLabelsMunicipios_con_porcentaje_de_enfrentamiento["English"]["__causa_pr_1"] = "Causa Pr 1";
	$fieldToolTipsMunicipios_con_porcentaje_de_enfrentamiento["English"]["__causa_pr_1"] = "";
	$placeHoldersMunicipios_con_porcentaje_de_enfrentamiento["English"]["__causa_pr_1"] = "";
	$fieldLabelsMunicipios_con_porcentaje_de_enfrentamiento["English"]["COUNT___causa_pr_1_"] = "COUNT(  Causa Pr 1)";
	$fieldToolTipsMunicipios_con_porcentaje_de_enfrentamiento["English"]["COUNT___causa_pr_1_"] = "";
	$placeHoldersMunicipios_con_porcentaje_de_enfrentamiento["English"]["COUNT___causa_pr_1_"] = "";
	if (count($fieldToolTipsMunicipios_con_porcentaje_de_enfrentamiento["English"]))
		$tdataMunicipios_con_porcentaje_de_enfrentamiento[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMunicipios_con_porcentaje_de_enfrentamiento[""] = array();
	$fieldToolTipsMunicipios_con_porcentaje_de_enfrentamiento[""] = array();
	$placeHoldersMunicipios_con_porcentaje_de_enfrentamiento[""] = array();
	$pageTitlesMunicipios_con_porcentaje_de_enfrentamiento[""] = array();
	if (count($fieldToolTipsMunicipios_con_porcentaje_de_enfrentamiento[""]))
		$tdataMunicipios_con_porcentaje_de_enfrentamiento[".isUseToolTips"] = true;
}





$tdataMunicipios_con_porcentaje_de_enfrentamiento[".shortTableName"] = "Municipios_con_porcentaje_de_enfrentamiento";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".nSecOptions"] = 0;
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".recsPerRowPrint"] = 1;
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".mainTableOwnerID"] = "";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".moveNext"] = 1;
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".entityType"] = 2;

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".strOriginalTableName"] = "homicidios_sv_2016";

	



$tdataMunicipios_con_porcentaje_de_enfrentamiento[".showAddInPopup"] = false;

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".showEditInPopup"] = false;

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMunicipios_con_porcentaje_de_enfrentamiento[".fieldsForRegister"] = array();

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".listAjax"] = false;

	$tdataMunicipios_con_porcentaje_de_enfrentamiento[".audit"] = false;

	$tdataMunicipios_con_porcentaje_de_enfrentamiento[".locking"] = false;



$tdataMunicipios_con_porcentaje_de_enfrentamiento[".list"] = true;



$tdataMunicipios_con_porcentaje_de_enfrentamiento[".reorderRecordsByHeader"] = true;





$tdataMunicipios_con_porcentaje_de_enfrentamiento[".exportTo"] = true;

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".printFriendly"] = true;


$tdataMunicipios_con_porcentaje_de_enfrentamiento[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".searchSaving"] = false;
//

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".showSearchPanel"] = true;
		$tdataMunicipios_con_porcentaje_de_enfrentamiento[".flexibleSearch"] = true;

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".isUseAjaxSuggest"] = true;






$tdataMunicipios_con_porcentaje_de_enfrentamiento[".ajaxCodeSnippetAdded"] = false;

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".buttonsAdded"] = false;

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".isUseTimeForSearch"] = false;





$tdataMunicipios_con_porcentaje_de_enfrentamiento[".allSearchFields"] = array();
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".filterFields"] = array();
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".requiredSearchFields"] = array();

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".allSearchFields"][] = "__municipio_";
	$tdataMunicipios_con_porcentaje_de_enfrentamiento[".allSearchFields"][] = "__causa_pr_1";
	$tdataMunicipios_con_porcentaje_de_enfrentamiento[".allSearchFields"][] = "COUNT(__causa_pr_1)";
	

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".googleLikeFields"] = array();
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".googleLikeFields"][] = "__municipio_";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".googleLikeFields"][] = "__causa_pr_1";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".googleLikeFields"][] = "COUNT(__causa_pr_1)";


$tdataMunicipios_con_porcentaje_de_enfrentamiento[".advSearchFields"] = array();
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".advSearchFields"][] = "__municipio_";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".advSearchFields"][] = "__causa_pr_1";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".advSearchFields"][] = "COUNT(__causa_pr_1)";

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".tableType"] = "report";

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".printerPageOrientation"] = 0;
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".nPrinterPageScale"] = 100;

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".nPrinterSplitRecords"] = 40;

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".nPrinterPDFSplitRecords"] = 40;



$tdataMunicipios_con_porcentaje_de_enfrentamiento[".geocodingEnabled"] = false;

//report settings
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".crossTabReport"] = true;

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".reportGroupFields"] = true;
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "__municipio_";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "__causa_pr_1";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".reportGroupFieldsData"] = $reportGroupFields;

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".reportHorizontalSummary"] = true;

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".isExistTotalFields"] = true;

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".reportVerticalSummary"] = true;



$tdataMunicipios_con_porcentaje_de_enfrentamiento[".repShowDet"] = true;

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".reportLayout"] = 6;

//end of report settings




$tdataMunicipios_con_porcentaje_de_enfrentamiento[".listGridLayout"] = 3;

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".strOrderBy"] = $tstrOrderBy;

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".orderindexes"] = array();

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".sqlHead"] = "SELECT `__municipio_`,  `__causa_pr_1`,  COUNT(`__causa_pr_1`) AS `COUNT(__causa_pr_1)`";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".sqlFrom"] = "FROM homicidios_sv_2016";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".sqlWhereExpr"] = "";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".arrGroupsPerPage"] = $arrGPP;

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".highlightSearchResults"] = true;

$tableKeysMunicipios_con_porcentaje_de_enfrentamiento = array();
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".Keys"] = $tableKeysMunicipios_con_porcentaje_de_enfrentamiento;

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".listFields"] = array();
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".listFields"][] = "__municipio_";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".listFields"][] = "__causa_pr_1";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".listFields"][] = "COUNT(__causa_pr_1)";

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".hideMobileList"] = array();


$tdataMunicipios_con_porcentaje_de_enfrentamiento[".viewFields"] = array();
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".viewFields"][] = "__municipio_";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".viewFields"][] = "__causa_pr_1";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".viewFields"][] = "COUNT(__causa_pr_1)";

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".addFields"] = array();
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".addFields"][] = "__municipio_";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".addFields"][] = "__causa_pr_1";

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".masterListFields"] = array();
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".masterListFields"][] = "__municipio_";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".masterListFields"][] = "__causa_pr_1";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".masterListFields"][] = "COUNT(__causa_pr_1)";

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".inlineAddFields"] = array();
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".inlineAddFields"][] = "__municipio_";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".inlineAddFields"][] = "__causa_pr_1";

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".editFields"] = array();
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".editFields"][] = "__municipio_";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".editFields"][] = "__causa_pr_1";

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".inlineEditFields"] = array();
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".inlineEditFields"][] = "__municipio_";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".inlineEditFields"][] = "__causa_pr_1";

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".updateSelectedFields"] = array();
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".updateSelectedFields"][] = "__municipio_";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".updateSelectedFields"][] = "__causa_pr_1";


$tdataMunicipios_con_porcentaje_de_enfrentamiento[".exportFields"] = array();
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".exportFields"][] = "__municipio_";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".exportFields"][] = "__causa_pr_1";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".exportFields"][] = "COUNT(__causa_pr_1)";

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".importFields"] = array();
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".importFields"][] = "__municipio_";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".importFields"][] = "__causa_pr_1";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".importFields"][] = "COUNT(__causa_pr_1)";

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".printFields"] = array();
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".printFields"][] = "__municipio_";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".printFields"][] = "__causa_pr_1";
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".printFields"][] = "COUNT(__causa_pr_1)";

//	__municipio_
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "__municipio_";
	$fdata["GoodName"] = "__municipio_";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("Municipios_con_porcentaje_de_enfrentamiento","__municipio_");
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

		$fdata["strField"] = "__municipio_";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__municipio_`";

	
	
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




	$tdataMunicipios_con_porcentaje_de_enfrentamiento["__municipio_"] = $fdata;
//	__causa_pr_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "__causa_pr_1";
	$fdata["GoodName"] = "__causa_pr_1";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("Municipios_con_porcentaje_de_enfrentamiento","__causa_pr_1");
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

		$fdata["strField"] = "__causa_pr_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__causa_pr_1`";

	
	
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




	$tdataMunicipios_con_porcentaje_de_enfrentamiento["__causa_pr_1"] = $fdata;
//	COUNT(__causa_pr_1)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "COUNT(__causa_pr_1)";
	$fdata["GoodName"] = "COUNT___causa_pr_1_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Municipios_con_porcentaje_de_enfrentamiento","COUNT___causa_pr_1_");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(__causa_pr_1)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(`__causa_pr_1`)";

	
	
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




	$tdataMunicipios_con_porcentaje_de_enfrentamiento["COUNT(__causa_pr_1)"] = $fdata;


$tables_data["Municipios con porcentaje de enfrentamiento"]=&$tdataMunicipios_con_porcentaje_de_enfrentamiento;
$field_labels["Municipios_con_porcentaje_de_enfrentamiento"] = &$fieldLabelsMunicipios_con_porcentaje_de_enfrentamiento;
$fieldToolTips["Municipios_con_porcentaje_de_enfrentamiento"] = &$fieldToolTipsMunicipios_con_porcentaje_de_enfrentamiento;
$placeHolders["Municipios_con_porcentaje_de_enfrentamiento"] = &$placeHoldersMunicipios_con_porcentaje_de_enfrentamiento;
$page_titles["Municipios_con_porcentaje_de_enfrentamiento"] = &$pageTitlesMunicipios_con_porcentaje_de_enfrentamiento;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Municipios con porcentaje de enfrentamiento"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Municipios_con_porcentaje_de_enfrentamiento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`__municipio_`,  `__causa_pr_1`,  COUNT(`__causa_pr_1`) AS `COUNT(__causa_pr_1)`";
$proto0["m_strFrom"] = "FROM homicidios_sv_2016";
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
	"m_strName" => "__municipio_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "Municipios con porcentaje de enfrentamiento"
));

$proto6["m_sql"] = "`__municipio_`";
$proto6["m_srcTableName"] = "Municipios con porcentaje de enfrentamiento";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "__causa_pr_1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "Municipios con porcentaje de enfrentamiento"
));

$proto8["m_sql"] = "`__causa_pr_1`";
$proto8["m_srcTableName"] = "Municipios con porcentaje de enfrentamiento";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_COUNT";
$proto11["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "__causa_pr_1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "Municipios con porcentaje de enfrentamiento"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "COUNT(`__causa_pr_1`)";
$proto10["m_srcTableName"] = "Municipios con porcentaje de enfrentamiento";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "COUNT(__causa_pr_1)";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "homicidios_sv_2016";
$proto14["m_srcTableName"] = "Municipios con porcentaje de enfrentamiento";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "situacion";
$proto14["m_columns"][] = "hoja";
$proto14["m_columns"][] = "__homicidios";
$proto14["m_columns"][] = "__edad";
$proto14["m_columns"][] = "__relacion_e";
$proto14["m_columns"][] = "__sexo";
$proto14["m_columns"][] = "__relacionad";
$proto14["m_columns"][] = "__causa_prel";
$proto14["m_columns"][] = "__circunstan";
$proto14["m_columns"][] = "__movil";
$proto14["m_columns"][] = "__tipo_viole";
$proto14["m_columns"][] = "__relac_vict";
$proto14["m_columns"][] = "__victima_pa";
$proto14["m_columns"][] = "__segun";
$proto14["m_columns"][] = "__pandilla";
$proto14["m_columns"][] = "__ocupacion_";
$proto14["m_columns"][] = "__nacionalid";
$proto14["m_columns"][] = "__depto";
$proto14["m_columns"][] = "__municipio";
$proto14["m_columns"][] = "__canton";
$proto14["m_columns"][] = "__caserio";
$proto14["m_columns"][] = "__barrio";
$proto14["m_columns"][] = "__comunidad";
$proto14["m_columns"][] = "__reparto";
$proto14["m_columns"][] = "__colonia";
$proto14["m_columns"][] = "__no";
$proto14["m_columns"][] = "__calle";
$proto14["m_columns"][] = "__avenida";
$proto14["m_columns"][] = "__alameda";
$proto14["m_columns"][] = "__boulevard";
$proto14["m_columns"][] = "__pasaje";
$proto14["m_columns"][] = "__sector_spd";
$proto14["m_columns"][] = "__tipo_lugar";
$proto14["m_columns"][] = "__area";
$proto14["m_columns"][] = "__x";
$proto14["m_columns"][] = "__y";
$proto14["m_columns"][] = "__fecha_hech";
$proto14["m_columns"][] = "__dia";
$proto14["m_columns"][] = "__mes";
$proto14["m_columns"][] = "__hora_hecho";
$proto14["m_columns"][] = "__periodo";
$proto14["m_columns"][] = "__tipo_arma";
$proto14["m_columns"][] = "__especifica";
$proto14["m_columns"][] = "__calibre";
$proto14["m_columns"][] = "__tipo_delit";
$proto14["m_columns"][] = "__muertos";
$proto14["m_columns"][] = "__fecha_leva";
$proto14["m_columns"][] = "__hora_de_le";
$proto14["m_columns"][] = "__observacio";
$proto14["m_columns"][] = "__f50";
$proto14["m_columns"][] = "__numforma";
$proto14["m_columns"][] = "__edad1";
$proto14["m_columns"][] = "__sexo1";
$proto14["m_columns"][] = "__departamen";
$proto14["m_columns"][] = "__municipio_";
$proto14["m_columns"][] = "__canton1";
$proto14["m_columns"][] = "__caserio1";
$proto14["m_columns"][] = "__colonia1";
$proto14["m_columns"][] = "__fechahecho";
$proto14["m_columns"][] = "__hora";
$proto14["m_columns"][] = "__minutos";
$proto14["m_columns"][] = "__tipoarma";
$proto14["m_columns"][] = "__especifiqu";
$proto14["m_columns"][] = "__calificaci";
$proto14["m_columns"][] = "__fecha_de_l";
$proto14["m_columns"][] = "__departam_1";
$proto14["m_columns"][] = "__municipi_1";
$proto14["m_columns"][] = "__conciliaci";
$proto14["m_columns"][] = "__levantamie";
$proto14["m_columns"][] = "__profesión";
$proto14["m_columns"][] = "__tipo_halla";
$proto14["m_columns"][] = "__victimario";
$proto14["m_columns"][] = "__causa_pr_1";
$proto14["m_columns"][] = "__dpto";
$proto14["m_columns"][] = "__munic";
$proto14["m_columns"][] = "__cdpto_cmun";
$proto14["m_columns"][] = "__cab_dpto";
$proto14["m_columns"][] = "__cdpto";
$proto14["m_columns"][] = "__fid";
$proto14["m_columns"][] = "__area1";
$proto14["m_columns"][] = "__munic25k_";
$proto14["m_columns"][] = "__munic25k_i";
$proto14["m_columns"][] = "__poly_";
$proto14["m_columns"][] = "__subclass";
$proto14["m_columns"][] = "__subclass_";
$proto14["m_columns"][] = "__rings_ok";
$proto14["m_columns"][] = "__rings_nok";
$proto14["m_columns"][] = "__dpto1";
$proto14["m_columns"][] = "__munic1";
$proto14["m_columns"][] = "__cdpto_cmun1";
$proto14["m_columns"][] = "__cab_dpto1";
$proto14["m_columns"][] = "__cdpto1";
$proto14["m_columns"][] = "__acres";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "homicidios_sv_2016";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "Municipios con porcentaje de enfrentamiento";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto17=array();
						$obj = new SQLField(array(
	"m_strName" => "__municipio_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "Municipios con porcentaje de enfrentamiento"
));

$proto17["m_column"]=$obj;
$obj = new SQLGroupByItem($proto17);

$proto0["m_groupby"][]=$obj;
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "__causa_pr_1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "Municipios con porcentaje de enfrentamiento"
));

$proto19["m_column"]=$obj;
$obj = new SQLGroupByItem($proto19);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Municipios con porcentaje de enfrentamiento";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Municipios_con_porcentaje_de_enfrentamiento = createSqlQuery_Municipios_con_porcentaje_de_enfrentamiento();


	
		;

			

$tdataMunicipios_con_porcentaje_de_enfrentamiento[".sqlquery"] = $queryData_Municipios_con_porcentaje_de_enfrentamiento;

$tableEvents["Municipios con porcentaje de enfrentamiento"] = new eventsBase;
$tdataMunicipios_con_porcentaje_de_enfrentamiento[".hasEvents"] = false;

?>