<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMuertes_PNC_enfrentamientos = array();
	$tdataMuertes_PNC_enfrentamientos[".truncateText"] = true;
	$tdataMuertes_PNC_enfrentamientos[".NumberOfChars"] = 80;
	$tdataMuertes_PNC_enfrentamientos[".ShortName"] = "Muertes_PNC_enfrentamientos";
	$tdataMuertes_PNC_enfrentamientos[".OwnerID"] = "";
	$tdataMuertes_PNC_enfrentamientos[".OriginalTable"] = "homicidios_sv_2016";

//	field labels
$fieldLabelsMuertes_PNC_enfrentamientos = array();
$fieldToolTipsMuertes_PNC_enfrentamientos = array();
$pageTitlesMuertes_PNC_enfrentamientos = array();
$placeHoldersMuertes_PNC_enfrentamientos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsMuertes_PNC_enfrentamientos["Spanish"] = array();
	$fieldToolTipsMuertes_PNC_enfrentamientos["Spanish"] = array();
	$placeHoldersMuertes_PNC_enfrentamientos["Spanish"] = array();
	$pageTitlesMuertes_PNC_enfrentamientos["Spanish"] = array();
	$fieldLabelsMuertes_PNC_enfrentamientos["Spanish"]["__municipio_"] = "Municipio";
	$fieldToolTipsMuertes_PNC_enfrentamientos["Spanish"]["__municipio_"] = "";
	$placeHoldersMuertes_PNC_enfrentamientos["Spanish"]["__municipio_"] = "";
	$fieldLabelsMuertes_PNC_enfrentamientos["Spanish"]["__causa_pr_1"] = "Causa Pr 1";
	$fieldToolTipsMuertes_PNC_enfrentamientos["Spanish"]["__causa_pr_1"] = "";
	$placeHoldersMuertes_PNC_enfrentamientos["Spanish"]["__causa_pr_1"] = "";
	$fieldLabelsMuertes_PNC_enfrentamientos["Spanish"]["COUNT___causa_pr_1_"] = "COUNT(  Causa Pr 1)";
	$fieldToolTipsMuertes_PNC_enfrentamientos["Spanish"]["COUNT___causa_pr_1_"] = "";
	$placeHoldersMuertes_PNC_enfrentamientos["Spanish"]["COUNT___causa_pr_1_"] = "";
	$fieldLabelsMuertes_PNC_enfrentamientos["Spanish"]["__ocupacion_"] = "Ocupacion";
	$fieldToolTipsMuertes_PNC_enfrentamientos["Spanish"]["__ocupacion_"] = "";
	$placeHoldersMuertes_PNC_enfrentamientos["Spanish"]["__ocupacion_"] = "";
	if (count($fieldToolTipsMuertes_PNC_enfrentamientos["Spanish"]))
		$tdataMuertes_PNC_enfrentamientos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMuertes_PNC_enfrentamientos["English"] = array();
	$fieldToolTipsMuertes_PNC_enfrentamientos["English"] = array();
	$placeHoldersMuertes_PNC_enfrentamientos["English"] = array();
	$pageTitlesMuertes_PNC_enfrentamientos["English"] = array();
	$fieldLabelsMuertes_PNC_enfrentamientos["English"]["__municipio_"] = "Municipio";
	$fieldToolTipsMuertes_PNC_enfrentamientos["English"]["__municipio_"] = "";
	$placeHoldersMuertes_PNC_enfrentamientos["English"]["__municipio_"] = "";
	$fieldLabelsMuertes_PNC_enfrentamientos["English"]["__causa_pr_1"] = "Causa Pr 1";
	$fieldToolTipsMuertes_PNC_enfrentamientos["English"]["__causa_pr_1"] = "";
	$placeHoldersMuertes_PNC_enfrentamientos["English"]["__causa_pr_1"] = "";
	$fieldLabelsMuertes_PNC_enfrentamientos["English"]["COUNT___causa_pr_1_"] = "COUNT(  Causa Pr 1)";
	$fieldToolTipsMuertes_PNC_enfrentamientos["English"]["COUNT___causa_pr_1_"] = "";
	$placeHoldersMuertes_PNC_enfrentamientos["English"]["COUNT___causa_pr_1_"] = "";
	$fieldLabelsMuertes_PNC_enfrentamientos["English"]["__ocupacion_"] = "Ocupacion";
	$fieldToolTipsMuertes_PNC_enfrentamientos["English"]["__ocupacion_"] = "";
	$placeHoldersMuertes_PNC_enfrentamientos["English"]["__ocupacion_"] = "";
	if (count($fieldToolTipsMuertes_PNC_enfrentamientos["English"]))
		$tdataMuertes_PNC_enfrentamientos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMuertes_PNC_enfrentamientos[""] = array();
	$fieldToolTipsMuertes_PNC_enfrentamientos[""] = array();
	$placeHoldersMuertes_PNC_enfrentamientos[""] = array();
	$pageTitlesMuertes_PNC_enfrentamientos[""] = array();
	if (count($fieldToolTipsMuertes_PNC_enfrentamientos[""]))
		$tdataMuertes_PNC_enfrentamientos[".isUseToolTips"] = true;
}





$tdataMuertes_PNC_enfrentamientos[".shortTableName"] = "Muertes_PNC_enfrentamientos";
$tdataMuertes_PNC_enfrentamientos[".nSecOptions"] = 0;
$tdataMuertes_PNC_enfrentamientos[".recsPerRowPrint"] = 1;
$tdataMuertes_PNC_enfrentamientos[".mainTableOwnerID"] = "";
$tdataMuertes_PNC_enfrentamientos[".moveNext"] = 1;
$tdataMuertes_PNC_enfrentamientos[".entityType"] = 2;

$tdataMuertes_PNC_enfrentamientos[".strOriginalTableName"] = "homicidios_sv_2016";

	



$tdataMuertes_PNC_enfrentamientos[".showAddInPopup"] = false;

$tdataMuertes_PNC_enfrentamientos[".showEditInPopup"] = false;

$tdataMuertes_PNC_enfrentamientos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMuertes_PNC_enfrentamientos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMuertes_PNC_enfrentamientos[".fieldsForRegister"] = array();

$tdataMuertes_PNC_enfrentamientos[".listAjax"] = false;

	$tdataMuertes_PNC_enfrentamientos[".audit"] = false;

	$tdataMuertes_PNC_enfrentamientos[".locking"] = false;



$tdataMuertes_PNC_enfrentamientos[".list"] = true;



$tdataMuertes_PNC_enfrentamientos[".reorderRecordsByHeader"] = true;





$tdataMuertes_PNC_enfrentamientos[".exportTo"] = true;

$tdataMuertes_PNC_enfrentamientos[".printFriendly"] = true;


$tdataMuertes_PNC_enfrentamientos[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataMuertes_PNC_enfrentamientos[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataMuertes_PNC_enfrentamientos[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataMuertes_PNC_enfrentamientos[".searchSaving"] = false;
//

$tdataMuertes_PNC_enfrentamientos[".showSearchPanel"] = true;
		$tdataMuertes_PNC_enfrentamientos[".flexibleSearch"] = true;

$tdataMuertes_PNC_enfrentamientos[".isUseAjaxSuggest"] = true;






$tdataMuertes_PNC_enfrentamientos[".ajaxCodeSnippetAdded"] = false;

$tdataMuertes_PNC_enfrentamientos[".buttonsAdded"] = false;

$tdataMuertes_PNC_enfrentamientos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMuertes_PNC_enfrentamientos[".isUseTimeForSearch"] = false;





$tdataMuertes_PNC_enfrentamientos[".allSearchFields"] = array();
$tdataMuertes_PNC_enfrentamientos[".filterFields"] = array();
$tdataMuertes_PNC_enfrentamientos[".requiredSearchFields"] = array();

$tdataMuertes_PNC_enfrentamientos[".allSearchFields"][] = "__municipio_";
	$tdataMuertes_PNC_enfrentamientos[".allSearchFields"][] = "__causa_pr_1";
	$tdataMuertes_PNC_enfrentamientos[".allSearchFields"][] = "COUNT(__causa_pr_1)";
	$tdataMuertes_PNC_enfrentamientos[".allSearchFields"][] = "__ocupacion_";
	

$tdataMuertes_PNC_enfrentamientos[".googleLikeFields"] = array();
$tdataMuertes_PNC_enfrentamientos[".googleLikeFields"][] = "__municipio_";
$tdataMuertes_PNC_enfrentamientos[".googleLikeFields"][] = "__causa_pr_1";
$tdataMuertes_PNC_enfrentamientos[".googleLikeFields"][] = "COUNT(__causa_pr_1)";
$tdataMuertes_PNC_enfrentamientos[".googleLikeFields"][] = "__ocupacion_";


$tdataMuertes_PNC_enfrentamientos[".advSearchFields"] = array();
$tdataMuertes_PNC_enfrentamientos[".advSearchFields"][] = "__municipio_";
$tdataMuertes_PNC_enfrentamientos[".advSearchFields"][] = "__causa_pr_1";
$tdataMuertes_PNC_enfrentamientos[".advSearchFields"][] = "COUNT(__causa_pr_1)";
$tdataMuertes_PNC_enfrentamientos[".advSearchFields"][] = "__ocupacion_";

$tdataMuertes_PNC_enfrentamientos[".tableType"] = "report";

$tdataMuertes_PNC_enfrentamientos[".printerPageOrientation"] = 0;
$tdataMuertes_PNC_enfrentamientos[".nPrinterPageScale"] = 100;

$tdataMuertes_PNC_enfrentamientos[".nPrinterSplitRecords"] = 40;

$tdataMuertes_PNC_enfrentamientos[".nPrinterPDFSplitRecords"] = 40;



$tdataMuertes_PNC_enfrentamientos[".geocodingEnabled"] = false;

//report settings
$tdataMuertes_PNC_enfrentamientos[".crossTabReport"] = true;

$tdataMuertes_PNC_enfrentamientos[".reportGroupFields"] = true;
$tdataMuertes_PNC_enfrentamientos[".pageSize"] = 5;
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
$tdataMuertes_PNC_enfrentamientos[".reportGroupFieldsData"] = $reportGroupFields;

$tdataMuertes_PNC_enfrentamientos[".reportHorizontalSummary"] = true;

$tdataMuertes_PNC_enfrentamientos[".isExistTotalFields"] = true;

$tdataMuertes_PNC_enfrentamientos[".reportVerticalSummary"] = true;



$tdataMuertes_PNC_enfrentamientos[".repShowDet"] = true;

$tdataMuertes_PNC_enfrentamientos[".reportLayout"] = 6;

//end of report settings




$tdataMuertes_PNC_enfrentamientos[".listGridLayout"] = 3;

$tdataMuertes_PNC_enfrentamientos[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMuertes_PNC_enfrentamientos[".strOrderBy"] = $tstrOrderBy;

$tdataMuertes_PNC_enfrentamientos[".orderindexes"] = array();

$tdataMuertes_PNC_enfrentamientos[".sqlHead"] = "SELECT `__municipio_`,  `__causa_pr_1`,  COUNT(`__causa_pr_1`) AS `COUNT(__causa_pr_1)`,  `__ocupacion_`";
$tdataMuertes_PNC_enfrentamientos[".sqlFrom"] = "FROM homicidios_sv_2016";
$tdataMuertes_PNC_enfrentamientos[".sqlWhereExpr"] = "(`__ocupacion_` ='MILITAR' OR `__ocupacion_` ='PNC')";
$tdataMuertes_PNC_enfrentamientos[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMuertes_PNC_enfrentamientos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMuertes_PNC_enfrentamientos[".arrGroupsPerPage"] = $arrGPP;

$tdataMuertes_PNC_enfrentamientos[".highlightSearchResults"] = true;

$tableKeysMuertes_PNC_enfrentamientos = array();
$tdataMuertes_PNC_enfrentamientos[".Keys"] = $tableKeysMuertes_PNC_enfrentamientos;

$tdataMuertes_PNC_enfrentamientos[".listFields"] = array();
$tdataMuertes_PNC_enfrentamientos[".listFields"][] = "__municipio_";
$tdataMuertes_PNC_enfrentamientos[".listFields"][] = "__causa_pr_1";
$tdataMuertes_PNC_enfrentamientos[".listFields"][] = "COUNT(__causa_pr_1)";
$tdataMuertes_PNC_enfrentamientos[".listFields"][] = "__ocupacion_";

$tdataMuertes_PNC_enfrentamientos[".hideMobileList"] = array();


$tdataMuertes_PNC_enfrentamientos[".viewFields"] = array();
$tdataMuertes_PNC_enfrentamientos[".viewFields"][] = "__municipio_";
$tdataMuertes_PNC_enfrentamientos[".viewFields"][] = "__causa_pr_1";
$tdataMuertes_PNC_enfrentamientos[".viewFields"][] = "COUNT(__causa_pr_1)";
$tdataMuertes_PNC_enfrentamientos[".viewFields"][] = "__ocupacion_";

$tdataMuertes_PNC_enfrentamientos[".addFields"] = array();
$tdataMuertes_PNC_enfrentamientos[".addFields"][] = "__municipio_";
$tdataMuertes_PNC_enfrentamientos[".addFields"][] = "__causa_pr_1";
$tdataMuertes_PNC_enfrentamientos[".addFields"][] = "__ocupacion_";

$tdataMuertes_PNC_enfrentamientos[".masterListFields"] = array();
$tdataMuertes_PNC_enfrentamientos[".masterListFields"][] = "__municipio_";
$tdataMuertes_PNC_enfrentamientos[".masterListFields"][] = "__causa_pr_1";
$tdataMuertes_PNC_enfrentamientos[".masterListFields"][] = "COUNT(__causa_pr_1)";
$tdataMuertes_PNC_enfrentamientos[".masterListFields"][] = "__ocupacion_";

$tdataMuertes_PNC_enfrentamientos[".inlineAddFields"] = array();
$tdataMuertes_PNC_enfrentamientos[".inlineAddFields"][] = "__municipio_";
$tdataMuertes_PNC_enfrentamientos[".inlineAddFields"][] = "__causa_pr_1";
$tdataMuertes_PNC_enfrentamientos[".inlineAddFields"][] = "__ocupacion_";

$tdataMuertes_PNC_enfrentamientos[".editFields"] = array();
$tdataMuertes_PNC_enfrentamientos[".editFields"][] = "__municipio_";
$tdataMuertes_PNC_enfrentamientos[".editFields"][] = "__causa_pr_1";
$tdataMuertes_PNC_enfrentamientos[".editFields"][] = "__ocupacion_";

$tdataMuertes_PNC_enfrentamientos[".inlineEditFields"] = array();
$tdataMuertes_PNC_enfrentamientos[".inlineEditFields"][] = "__municipio_";
$tdataMuertes_PNC_enfrentamientos[".inlineEditFields"][] = "__causa_pr_1";
$tdataMuertes_PNC_enfrentamientos[".inlineEditFields"][] = "__ocupacion_";

$tdataMuertes_PNC_enfrentamientos[".updateSelectedFields"] = array();
$tdataMuertes_PNC_enfrentamientos[".updateSelectedFields"][] = "__municipio_";
$tdataMuertes_PNC_enfrentamientos[".updateSelectedFields"][] = "__causa_pr_1";
$tdataMuertes_PNC_enfrentamientos[".updateSelectedFields"][] = "__ocupacion_";


$tdataMuertes_PNC_enfrentamientos[".exportFields"] = array();
$tdataMuertes_PNC_enfrentamientos[".exportFields"][] = "__municipio_";
$tdataMuertes_PNC_enfrentamientos[".exportFields"][] = "__causa_pr_1";
$tdataMuertes_PNC_enfrentamientos[".exportFields"][] = "COUNT(__causa_pr_1)";
$tdataMuertes_PNC_enfrentamientos[".exportFields"][] = "__ocupacion_";

$tdataMuertes_PNC_enfrentamientos[".importFields"] = array();
$tdataMuertes_PNC_enfrentamientos[".importFields"][] = "__municipio_";
$tdataMuertes_PNC_enfrentamientos[".importFields"][] = "__causa_pr_1";
$tdataMuertes_PNC_enfrentamientos[".importFields"][] = "COUNT(__causa_pr_1)";
$tdataMuertes_PNC_enfrentamientos[".importFields"][] = "__ocupacion_";

$tdataMuertes_PNC_enfrentamientos[".printFields"] = array();
$tdataMuertes_PNC_enfrentamientos[".printFields"][] = "__municipio_";
$tdataMuertes_PNC_enfrentamientos[".printFields"][] = "__causa_pr_1";
$tdataMuertes_PNC_enfrentamientos[".printFields"][] = "COUNT(__causa_pr_1)";
$tdataMuertes_PNC_enfrentamientos[".printFields"][] = "__ocupacion_";

//	__municipio_
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "__municipio_";
	$fdata["GoodName"] = "__municipio_";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("Muertes_PNC_enfrentamientos","__municipio_");
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




	$tdataMuertes_PNC_enfrentamientos["__municipio_"] = $fdata;
//	__causa_pr_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "__causa_pr_1";
	$fdata["GoodName"] = "__causa_pr_1";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("Muertes_PNC_enfrentamientos","__causa_pr_1");
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




	$tdataMuertes_PNC_enfrentamientos["__causa_pr_1"] = $fdata;
//	COUNT(__causa_pr_1)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "COUNT(__causa_pr_1)";
	$fdata["GoodName"] = "COUNT___causa_pr_1_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Muertes_PNC_enfrentamientos","COUNT___causa_pr_1_");
	$fdata["FieldType"] = 3;

		// report field settings
				$fdata["isTotalMax"] = true;
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




	$tdataMuertes_PNC_enfrentamientos["COUNT(__causa_pr_1)"] = $fdata;
//	__ocupacion_
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "__ocupacion_";
	$fdata["GoodName"] = "__ocupacion_";
	$fdata["ownerTable"] = "homicidios_sv_2016";
	$fdata["Label"] = GetFieldLabel("Muertes_PNC_enfrentamientos","__ocupacion_");
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

		$fdata["strField"] = "__ocupacion_";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`__ocupacion_`";

	
	
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




	$tdataMuertes_PNC_enfrentamientos["__ocupacion_"] = $fdata;


$tables_data["Muertes PNC enfrentamientos"]=&$tdataMuertes_PNC_enfrentamientos;
$field_labels["Muertes_PNC_enfrentamientos"] = &$fieldLabelsMuertes_PNC_enfrentamientos;
$fieldToolTips["Muertes_PNC_enfrentamientos"] = &$fieldToolTipsMuertes_PNC_enfrentamientos;
$placeHolders["Muertes_PNC_enfrentamientos"] = &$placeHoldersMuertes_PNC_enfrentamientos;
$page_titles["Muertes_PNC_enfrentamientos"] = &$pageTitlesMuertes_PNC_enfrentamientos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Muertes PNC enfrentamientos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Muertes_PNC_enfrentamientos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`__municipio_`,  `__causa_pr_1`,  COUNT(`__causa_pr_1`) AS `COUNT(__causa_pr_1)`,  `__ocupacion_`";
$proto0["m_strFrom"] = "FROM homicidios_sv_2016";
$proto0["m_strWhere"] = "(`__ocupacion_` ='MILITAR' OR `__ocupacion_` ='PNC')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`__ocupacion_` ='MILITAR' OR `__ocupacion_` ='PNC'";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`__ocupacion_` ='MILITAR' OR `__ocupacion_` ='PNC'"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "`__ocupacion_` ='MILITAR'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "__ocupacion_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "Muertes PNC enfrentamientos"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "='MILITAR'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "`__ocupacion_` ='PNC'";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "__ocupacion_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "Muertes PNC enfrentamientos"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "='PNC'";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "__municipio_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "Muertes PNC enfrentamientos"
));

$proto10["m_sql"] = "`__municipio_`";
$proto10["m_srcTableName"] = "Muertes PNC enfrentamientos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "__causa_pr_1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "Muertes PNC enfrentamientos"
));

$proto12["m_sql"] = "`__causa_pr_1`";
$proto12["m_srcTableName"] = "Muertes PNC enfrentamientos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_COUNT";
$proto15["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "__causa_pr_1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "Muertes PNC enfrentamientos"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "COUNT(`__causa_pr_1`)";
$proto14["m_srcTableName"] = "Muertes PNC enfrentamientos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "COUNT(__causa_pr_1)";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "__ocupacion_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "Muertes PNC enfrentamientos"
));

$proto17["m_sql"] = "`__ocupacion_`";
$proto17["m_srcTableName"] = "Muertes PNC enfrentamientos";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "homicidios_sv_2016";
$proto20["m_srcTableName"] = "Muertes PNC enfrentamientos";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "situacion";
$proto20["m_columns"][] = "hoja";
$proto20["m_columns"][] = "__homicidios";
$proto20["m_columns"][] = "__edad";
$proto20["m_columns"][] = "__relacion_e";
$proto20["m_columns"][] = "__sexo";
$proto20["m_columns"][] = "__relacionad";
$proto20["m_columns"][] = "__causa_prel";
$proto20["m_columns"][] = "__circunstan";
$proto20["m_columns"][] = "__movil";
$proto20["m_columns"][] = "__tipo_viole";
$proto20["m_columns"][] = "__relac_vict";
$proto20["m_columns"][] = "__victima_pa";
$proto20["m_columns"][] = "__segun";
$proto20["m_columns"][] = "__pandilla";
$proto20["m_columns"][] = "__ocupacion_";
$proto20["m_columns"][] = "__nacionalid";
$proto20["m_columns"][] = "__depto";
$proto20["m_columns"][] = "__municipio";
$proto20["m_columns"][] = "__canton";
$proto20["m_columns"][] = "__caserio";
$proto20["m_columns"][] = "__barrio";
$proto20["m_columns"][] = "__comunidad";
$proto20["m_columns"][] = "__reparto";
$proto20["m_columns"][] = "__colonia";
$proto20["m_columns"][] = "__no";
$proto20["m_columns"][] = "__calle";
$proto20["m_columns"][] = "__avenida";
$proto20["m_columns"][] = "__alameda";
$proto20["m_columns"][] = "__boulevard";
$proto20["m_columns"][] = "__pasaje";
$proto20["m_columns"][] = "__sector_spd";
$proto20["m_columns"][] = "__tipo_lugar";
$proto20["m_columns"][] = "__area";
$proto20["m_columns"][] = "__x";
$proto20["m_columns"][] = "__y";
$proto20["m_columns"][] = "__fecha_hech";
$proto20["m_columns"][] = "__dia";
$proto20["m_columns"][] = "__mes";
$proto20["m_columns"][] = "__hora_hecho";
$proto20["m_columns"][] = "__periodo";
$proto20["m_columns"][] = "__tipo_arma";
$proto20["m_columns"][] = "__especifica";
$proto20["m_columns"][] = "__calibre";
$proto20["m_columns"][] = "__tipo_delit";
$proto20["m_columns"][] = "__muertos";
$proto20["m_columns"][] = "__fecha_leva";
$proto20["m_columns"][] = "__hora_de_le";
$proto20["m_columns"][] = "__observacio";
$proto20["m_columns"][] = "__f50";
$proto20["m_columns"][] = "__numforma";
$proto20["m_columns"][] = "__edad1";
$proto20["m_columns"][] = "__sexo1";
$proto20["m_columns"][] = "__departamen";
$proto20["m_columns"][] = "__municipio_";
$proto20["m_columns"][] = "__canton1";
$proto20["m_columns"][] = "__caserio1";
$proto20["m_columns"][] = "__colonia1";
$proto20["m_columns"][] = "__fechahecho";
$proto20["m_columns"][] = "__hora";
$proto20["m_columns"][] = "__minutos";
$proto20["m_columns"][] = "__tipoarma";
$proto20["m_columns"][] = "__especifiqu";
$proto20["m_columns"][] = "__calificaci";
$proto20["m_columns"][] = "__fecha_de_l";
$proto20["m_columns"][] = "__departam_1";
$proto20["m_columns"][] = "__municipi_1";
$proto20["m_columns"][] = "__conciliaci";
$proto20["m_columns"][] = "__levantamie";
$proto20["m_columns"][] = "__profesión";
$proto20["m_columns"][] = "__tipo_halla";
$proto20["m_columns"][] = "__victimario";
$proto20["m_columns"][] = "__causa_pr_1";
$proto20["m_columns"][] = "__dpto";
$proto20["m_columns"][] = "__munic";
$proto20["m_columns"][] = "__cdpto_cmun";
$proto20["m_columns"][] = "__cab_dpto";
$proto20["m_columns"][] = "__cdpto";
$proto20["m_columns"][] = "__fid";
$proto20["m_columns"][] = "__area1";
$proto20["m_columns"][] = "__munic25k_";
$proto20["m_columns"][] = "__munic25k_i";
$proto20["m_columns"][] = "__poly_";
$proto20["m_columns"][] = "__subclass";
$proto20["m_columns"][] = "__subclass_";
$proto20["m_columns"][] = "__rings_ok";
$proto20["m_columns"][] = "__rings_nok";
$proto20["m_columns"][] = "__dpto1";
$proto20["m_columns"][] = "__munic1";
$proto20["m_columns"][] = "__cdpto_cmun1";
$proto20["m_columns"][] = "__cab_dpto1";
$proto20["m_columns"][] = "__cdpto1";
$proto20["m_columns"][] = "__acres";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "homicidios_sv_2016";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "Muertes PNC enfrentamientos";
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
	"m_strName" => "__municipio_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "Muertes PNC enfrentamientos"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "__causa_pr_1",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "Muertes PNC enfrentamientos"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "__ocupacion_",
	"m_strTable" => "homicidios_sv_2016",
	"m_srcTableName" => "Muertes PNC enfrentamientos"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Muertes PNC enfrentamientos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Muertes_PNC_enfrentamientos = createSqlQuery_Muertes_PNC_enfrentamientos();


	
		;

				

$tdataMuertes_PNC_enfrentamientos[".sqlquery"] = $queryData_Muertes_PNC_enfrentamientos;

$tableEvents["Muertes PNC enfrentamientos"] = new eventsBase;
$tdataMuertes_PNC_enfrentamientos[".hasEvents"] = false;

?>