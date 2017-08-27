<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPPL_pertenecientes_a_Pandilla_prueba = array();
	$tdataPPL_pertenecientes_a_Pandilla_prueba[".truncateText"] = true;
	$tdataPPL_pertenecientes_a_Pandilla_prueba[".NumberOfChars"] = 80;
	$tdataPPL_pertenecientes_a_Pandilla_prueba[".ShortName"] = "PPL_pertenecientes_a_Pandilla_prueba";
	$tdataPPL_pertenecientes_a_Pandilla_prueba[".OwnerID"] = "";
	$tdataPPL_pertenecientes_a_Pandilla_prueba[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba = array();
$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba = array();
$pageTitlesPPL_pertenecientes_a_Pandilla_prueba = array();
$placeHoldersPPL_pertenecientes_a_Pandilla_prueba = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba["Spanish"] = array();
	$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba["Spanish"] = array();
	$placeHoldersPPL_pertenecientes_a_Pandilla_prueba["Spanish"] = array();
	$pageTitlesPPL_pertenecientes_a_Pandilla_prueba["Spanish"] = array();
	$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba["Spanish"]["mun_resid"] = "";
	$placeHoldersPPL_pertenecientes_a_Pandilla_prueba["Spanish"]["mun_resid"] = "";
	$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba["Spanish"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba["Spanish"]["tipo_mara"] = "";
	$placeHoldersPPL_pertenecientes_a_Pandilla_prueba["Spanish"]["tipo_mara"] = "";
	$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba["Spanish"]["COUNT_org_delictiva_"] = "COUNT(org Delictiva)";
	$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba["Spanish"]["COUNT_org_delictiva_"] = "";
	$placeHoldersPPL_pertenecientes_a_Pandilla_prueba["Spanish"]["COUNT_org_delictiva_"] = "";
	if (count($fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba["Spanish"]))
		$tdataPPL_pertenecientes_a_Pandilla_prueba[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba["English"] = array();
	$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba["English"] = array();
	$placeHoldersPPL_pertenecientes_a_Pandilla_prueba["English"] = array();
	$pageTitlesPPL_pertenecientes_a_Pandilla_prueba["English"] = array();
	$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba["English"]["mun_resid"] = "";
	$placeHoldersPPL_pertenecientes_a_Pandilla_prueba["English"]["mun_resid"] = "";
	$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba["English"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba["English"]["tipo_mara"] = "";
	$placeHoldersPPL_pertenecientes_a_Pandilla_prueba["English"]["tipo_mara"] = "";
	$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba["English"]["COUNT_org_delictiva_"] = "COUNT(org Delictiva)";
	$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba["English"]["COUNT_org_delictiva_"] = "";
	$placeHoldersPPL_pertenecientes_a_Pandilla_prueba["English"]["COUNT_org_delictiva_"] = "";
	if (count($fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba["English"]))
		$tdataPPL_pertenecientes_a_Pandilla_prueba[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba[""] = array();
	$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba[""] = array();
	$placeHoldersPPL_pertenecientes_a_Pandilla_prueba[""] = array();
	$pageTitlesPPL_pertenecientes_a_Pandilla_prueba[""] = array();
	if (count($fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba[""]))
		$tdataPPL_pertenecientes_a_Pandilla_prueba[".isUseToolTips"] = true;
}


	$tdataPPL_pertenecientes_a_Pandilla_prueba[".NCSearch"] = true;



$tdataPPL_pertenecientes_a_Pandilla_prueba[".shortTableName"] = "PPL_pertenecientes_a_Pandilla_prueba";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".nSecOptions"] = 0;
$tdataPPL_pertenecientes_a_Pandilla_prueba[".recsPerRowPrint"] = 1;
$tdataPPL_pertenecientes_a_Pandilla_prueba[".mainTableOwnerID"] = "";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".moveNext"] = 1;
$tdataPPL_pertenecientes_a_Pandilla_prueba[".entityType"] = 2;

$tdataPPL_pertenecientes_a_Pandilla_prueba[".strOriginalTableName"] = "carcel";

	



$tdataPPL_pertenecientes_a_Pandilla_prueba[".showAddInPopup"] = false;

$tdataPPL_pertenecientes_a_Pandilla_prueba[".showEditInPopup"] = false;

$tdataPPL_pertenecientes_a_Pandilla_prueba[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPPL_pertenecientes_a_Pandilla_prueba[".fieldsForRegister"] = array();

$tdataPPL_pertenecientes_a_Pandilla_prueba[".listAjax"] = false;

	$tdataPPL_pertenecientes_a_Pandilla_prueba[".audit"] = false;

	$tdataPPL_pertenecientes_a_Pandilla_prueba[".locking"] = false;



$tdataPPL_pertenecientes_a_Pandilla_prueba[".list"] = true;



$tdataPPL_pertenecientes_a_Pandilla_prueba[".reorderRecordsByHeader"] = true;





$tdataPPL_pertenecientes_a_Pandilla_prueba[".exportTo"] = true;

$tdataPPL_pertenecientes_a_Pandilla_prueba[".printFriendly"] = true;


$tdataPPL_pertenecientes_a_Pandilla_prueba[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPPL_pertenecientes_a_Pandilla_prueba[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPPL_pertenecientes_a_Pandilla_prueba[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPPL_pertenecientes_a_Pandilla_prueba[".searchSaving"] = false;
//

$tdataPPL_pertenecientes_a_Pandilla_prueba[".showSearchPanel"] = true;
		$tdataPPL_pertenecientes_a_Pandilla_prueba[".flexibleSearch"] = true;

$tdataPPL_pertenecientes_a_Pandilla_prueba[".isUseAjaxSuggest"] = true;






$tdataPPL_pertenecientes_a_Pandilla_prueba[".ajaxCodeSnippetAdded"] = false;

$tdataPPL_pertenecientes_a_Pandilla_prueba[".buttonsAdded"] = false;

$tdataPPL_pertenecientes_a_Pandilla_prueba[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPPL_pertenecientes_a_Pandilla_prueba[".isUseTimeForSearch"] = false;





$tdataPPL_pertenecientes_a_Pandilla_prueba[".allSearchFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba[".filterFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba[".requiredSearchFields"] = array();

$tdataPPL_pertenecientes_a_Pandilla_prueba[".allSearchFields"][] = "tipo_mara";
	$tdataPPL_pertenecientes_a_Pandilla_prueba[".allSearchFields"][] = "COUNT(org_delictiva)";
	$tdataPPL_pertenecientes_a_Pandilla_prueba[".allSearchFields"][] = "mun_resid";
	

$tdataPPL_pertenecientes_a_Pandilla_prueba[".googleLikeFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba[".googleLikeFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".googleLikeFields"][] = "mun_resid";


$tdataPPL_pertenecientes_a_Pandilla_prueba[".advSearchFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba[".advSearchFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".advSearchFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla_prueba[".tableType"] = "report";

$tdataPPL_pertenecientes_a_Pandilla_prueba[".printerPageOrientation"] = 0;
$tdataPPL_pertenecientes_a_Pandilla_prueba[".nPrinterPageScale"] = 100;

$tdataPPL_pertenecientes_a_Pandilla_prueba[".nPrinterSplitRecords"] = 40;

$tdataPPL_pertenecientes_a_Pandilla_prueba[".nPrinterPDFSplitRecords"] = 40;



$tdataPPL_pertenecientes_a_Pandilla_prueba[".geocodingEnabled"] = false;

//report settings
$tdataPPL_pertenecientes_a_Pandilla_prueba[".crossTabReport"] = true;

$tdataPPL_pertenecientes_a_Pandilla_prueba[".reportGroupFields"] = true;
$tdataPPL_pertenecientes_a_Pandilla_prueba[".pageSize"] = 5;
$tdataPPL_pertenecientes_a_Pandilla_prueba[".showGroupSummaryCount"] = true;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "tipo_mara";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "mun_resid";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdataPPL_pertenecientes_a_Pandilla_prueba[".reportGroupFieldsData"] = $reportGroupFields;

$tdataPPL_pertenecientes_a_Pandilla_prueba[".reportHorizontalSummary"] = true;

$tdataPPL_pertenecientes_a_Pandilla_prueba[".isExistTotalFields"] = true;

$tdataPPL_pertenecientes_a_Pandilla_prueba[".reportVerticalSummary"] = true;


$tdataPPL_pertenecientes_a_Pandilla_prueba[".reportGlobalSummary"] = true;

$tdataPPL_pertenecientes_a_Pandilla_prueba[".repShowDet"] = true;

$tdataPPL_pertenecientes_a_Pandilla_prueba[".reportLayout"] = 0;

//end of report settings




$tdataPPL_pertenecientes_a_Pandilla_prueba[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPPL_pertenecientes_a_Pandilla_prueba[".strOrderBy"] = $tstrOrderBy;

$tdataPPL_pertenecientes_a_Pandilla_prueba[".orderindexes"] = array();

$tdataPPL_pertenecientes_a_Pandilla_prueba[".sqlHead"] = "SELECT tipo_mara.tipo_mara,  COUNT(carcel.org_delictiva) AS `COUNT(org_delictiva)`,  carcel.mun_resid";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".sqlFrom"] = "FROM carcel  INNER JOIN tipo_mara ON carcel.org_delictiva = tipo_mara.org_delictiva";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".sqlWhereExpr"] = "";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPPL_pertenecientes_a_Pandilla_prueba[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPPL_pertenecientes_a_Pandilla_prueba[".arrGroupsPerPage"] = $arrGPP;

$tdataPPL_pertenecientes_a_Pandilla_prueba[".highlightSearchResults"] = true;

$tableKeysPPL_pertenecientes_a_Pandilla_prueba = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba[".Keys"] = $tableKeysPPL_pertenecientes_a_Pandilla_prueba;

$tdataPPL_pertenecientes_a_Pandilla_prueba[".listFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba[".listFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".listFields"][] = "COUNT(org_delictiva)";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".listFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla_prueba[".hideMobileList"] = array();


$tdataPPL_pertenecientes_a_Pandilla_prueba[".viewFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba[".viewFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".viewFields"][] = "COUNT(org_delictiva)";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".viewFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla_prueba[".addFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba[".addFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".addFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla_prueba[".masterListFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba[".masterListFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".masterListFields"][] = "COUNT(org_delictiva)";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".masterListFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla_prueba[".inlineAddFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba[".inlineAddFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".inlineAddFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla_prueba[".editFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba[".editFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".editFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla_prueba[".inlineEditFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba[".inlineEditFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".inlineEditFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla_prueba[".updateSelectedFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba[".updateSelectedFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".updateSelectedFields"][] = "mun_resid";


$tdataPPL_pertenecientes_a_Pandilla_prueba[".exportFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba[".exportFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".exportFields"][] = "COUNT(org_delictiva)";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".exportFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla_prueba[".importFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba[".importFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".importFields"][] = "COUNT(org_delictiva)";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".importFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla_prueba[".printFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba[".printFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".printFields"][] = "COUNT(org_delictiva)";
$tdataPPL_pertenecientes_a_Pandilla_prueba[".printFields"][] = "mun_resid";

//	tipo_mara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tipo_mara";
	$fdata["GoodName"] = "tipo_mara";
	$fdata["ownerTable"] = "tipo_mara";
	$fdata["Label"] = GetFieldLabel("PPL_pertenecientes_a_Pandilla_prueba","tipo_mara");
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

		$fdata["strField"] = "tipo_mara";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_mara.tipo_mara";

	
	
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




	$tdataPPL_pertenecientes_a_Pandilla_prueba["tipo_mara"] = $fdata;
//	COUNT(org_delictiva)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "COUNT(org_delictiva)";
	$fdata["GoodName"] = "COUNT_org_delictiva_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PPL_pertenecientes_a_Pandilla_prueba","COUNT_org_delictiva_");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(org_delictiva)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(carcel.org_delictiva)";

	
	
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




	$tdataPPL_pertenecientes_a_Pandilla_prueba["COUNT(org_delictiva)"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_pertenecientes_a_Pandilla_prueba","mun_resid");
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

		$fdata["strField"] = "mun_resid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carcel.mun_resid";

	
	
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




	$tdataPPL_pertenecientes_a_Pandilla_prueba["mun_resid"] = $fdata;


$tables_data["PPL pertenecientes a Pandilla_prueba"]=&$tdataPPL_pertenecientes_a_Pandilla_prueba;
$field_labels["PPL_pertenecientes_a_Pandilla_prueba"] = &$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba;
$fieldToolTips["PPL_pertenecientes_a_Pandilla_prueba"] = &$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba;
$placeHolders["PPL_pertenecientes_a_Pandilla_prueba"] = &$placeHoldersPPL_pertenecientes_a_Pandilla_prueba;
$page_titles["PPL_pertenecientes_a_Pandilla_prueba"] = &$pageTitlesPPL_pertenecientes_a_Pandilla_prueba;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["PPL pertenecientes a Pandilla_prueba"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PPL_pertenecientes_a_Pandilla_prueba()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tipo_mara.tipo_mara,  COUNT(carcel.org_delictiva) AS `COUNT(org_delictiva)`,  carcel.mun_resid";
$proto0["m_strFrom"] = "FROM carcel  INNER JOIN tipo_mara ON carcel.org_delictiva = tipo_mara.org_delictiva";
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
	"m_strName" => "tipo_mara",
	"m_strTable" => "tipo_mara",
	"m_srcTableName" => "PPL pertenecientes a Pandilla_prueba"
));

$proto6["m_sql"] = "tipo_mara.tipo_mara";
$proto6["m_srcTableName"] = "PPL pertenecientes a Pandilla_prueba";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_COUNT";
$proto9["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL pertenecientes a Pandilla_prueba"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "COUNT(carcel.org_delictiva)";
$proto8["m_srcTableName"] = "PPL pertenecientes a Pandilla_prueba";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "COUNT(org_delictiva)";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL pertenecientes a Pandilla_prueba"
));

$proto11["m_sql"] = "carcel.mun_resid";
$proto11["m_srcTableName"] = "PPL pertenecientes a Pandilla_prueba";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "carcel";
$proto14["m_srcTableName"] = "PPL pertenecientes a Pandilla_prueba";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "sipe";
$proto14["m_columns"][] = "afis";
$proto14["m_columns"][] = "edad";
$proto14["m_columns"][] = "rangoetario";
$proto14["m_columns"][] = "genero";
$proto14["m_columns"][] = "fecha_nac";
$proto14["m_columns"][] = "edad1";
$proto14["m_columns"][] = "dui";
$proto14["m_columns"][] = "nivel_edu";
$proto14["m_columns"][] = "educacionanalisis";
$proto14["m_columns"][] = "profesion_oficio";
$proto14["m_columns"][] = "estado_civil";
$proto14["m_columns"][] = "ciudadania";
$proto14["m_columns"][] = "mun_nacimiento";
$proto14["m_columns"][] = "depto_nacim";
$proto14["m_columns"][] = "direccion";
$proto14["m_columns"][] = "mun_resid";
$proto14["m_columns"][] = "depart_resid";
$proto14["m_columns"][] = "delitosanalisis";
$proto14["m_columns"][] = "sj_interno";
$proto14["m_columns"][] = "fase";
$proto14["m_columns"][] = "org_delictiva";
$proto14["m_columns"][] = "tipo_mara";
$proto14["m_columns"][] = "reincidente";
$proto14["m_columns"][] = "deportado";
$proto14["m_columns"][] = "direccion1";
$proto14["m_columns"][] = "sector";
$proto14["m_columns"][] = "celda";
$proto14["m_columns"][] = "fecha_ing__sp";
$proto14["m_columns"][] = "libro";
$proto14["m_columns"][] = "fecha_ing__cp";
$proto14["m_columns"][] = "total_delitos";
$proto14["m_columns"][] = "delitos";
$proto14["m_columns"][] = "delitoanalisis";
$proto14["m_columns"][] = "sector_ppd";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "carcel";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "PPL pertenecientes a Pandilla_prueba";
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
												$proto17=array();
$proto17["m_link"] = "SQLL_INNERJOIN";
			$proto18=array();
$proto18["m_strName"] = "tipo_mara";
$proto18["m_srcTableName"] = "PPL pertenecientes a Pandilla_prueba";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "org_delictiva";
$proto18["m_columns"][] = "tipo_mara";
$proto18["m_columns"][] = "ID_1";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "INNER JOIN tipo_mara ON carcel.org_delictiva = tipo_mara.org_delictiva";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "PPL pertenecientes a Pandilla_prueba";
$proto19=array();
$proto19["m_sql"] = "carcel.org_delictiva = tipo_mara.org_delictiva";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL pertenecientes a Pandilla_prueba"
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "= tipo_mara.org_delictiva";
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
	"m_strName" => "tipo_mara",
	"m_strTable" => "tipo_mara",
	"m_srcTableName" => "PPL pertenecientes a Pandilla_prueba"
));

$proto21["m_column"]=$obj;
$obj = new SQLGroupByItem($proto21);

$proto0["m_groupby"][]=$obj;
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL pertenecientes a Pandilla_prueba"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL pertenecientes a Pandilla_prueba"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PPL pertenecientes a Pandilla_prueba";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PPL_pertenecientes_a_Pandilla_prueba = createSqlQuery_PPL_pertenecientes_a_Pandilla_prueba();


	
		;

			

$tdataPPL_pertenecientes_a_Pandilla_prueba[".sqlquery"] = $queryData_PPL_pertenecientes_a_Pandilla_prueba;

$tableEvents["PPL pertenecientes a Pandilla_prueba"] = new eventsBase;
$tdataPPL_pertenecientes_a_Pandilla_prueba[".hasEvents"] = false;

?>