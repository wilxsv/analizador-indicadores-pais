<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPPL_pertenecientes_a_Pandilla_prueba1 = array();
	$tdataPPL_pertenecientes_a_Pandilla_prueba1[".truncateText"] = true;
	$tdataPPL_pertenecientes_a_Pandilla_prueba1[".NumberOfChars"] = 80;
	$tdataPPL_pertenecientes_a_Pandilla_prueba1[".ShortName"] = "PPL_pertenecientes_a_Pandilla_prueba1";
	$tdataPPL_pertenecientes_a_Pandilla_prueba1[".OwnerID"] = "";
	$tdataPPL_pertenecientes_a_Pandilla_prueba1[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba1 = array();
$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba1 = array();
$pageTitlesPPL_pertenecientes_a_Pandilla_prueba1 = array();
$placeHoldersPPL_pertenecientes_a_Pandilla_prueba1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba1["Spanish"] = array();
	$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba1["Spanish"] = array();
	$placeHoldersPPL_pertenecientes_a_Pandilla_prueba1["Spanish"] = array();
	$pageTitlesPPL_pertenecientes_a_Pandilla_prueba1["Spanish"] = array();
	$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba1["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba1["Spanish"]["mun_resid"] = "";
	$placeHoldersPPL_pertenecientes_a_Pandilla_prueba1["Spanish"]["mun_resid"] = "";
	$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba1["Spanish"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba1["Spanish"]["COUNT_mun_resid_"] = "";
	$placeHoldersPPL_pertenecientes_a_Pandilla_prueba1["Spanish"]["COUNT_mun_resid_"] = "";
	$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba1["Spanish"]["COUNT_tipo_mara_"] = "COUNT(tipo Mara)";
	$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba1["Spanish"]["COUNT_tipo_mara_"] = "";
	$placeHoldersPPL_pertenecientes_a_Pandilla_prueba1["Spanish"]["COUNT_tipo_mara_"] = "";
	$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba1["Spanish"]["COUNT_org_delictiva_"] = "COUNT(org Delictiva)";
	$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba1["Spanish"]["COUNT_org_delictiva_"] = "";
	$placeHoldersPPL_pertenecientes_a_Pandilla_prueba1["Spanish"]["COUNT_org_delictiva_"] = "";
	$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba1["Spanish"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba1["Spanish"]["tipo_mara"] = "";
	$placeHoldersPPL_pertenecientes_a_Pandilla_prueba1["Spanish"]["tipo_mara"] = "";
	if (count($fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba1["Spanish"]))
		$tdataPPL_pertenecientes_a_Pandilla_prueba1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba1["English"] = array();
	$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba1["English"] = array();
	$placeHoldersPPL_pertenecientes_a_Pandilla_prueba1["English"] = array();
	$pageTitlesPPL_pertenecientes_a_Pandilla_prueba1["English"] = array();
	$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba1["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba1["English"]["mun_resid"] = "";
	$placeHoldersPPL_pertenecientes_a_Pandilla_prueba1["English"]["mun_resid"] = "";
	$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba1["English"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba1["English"]["COUNT_mun_resid_"] = "";
	$placeHoldersPPL_pertenecientes_a_Pandilla_prueba1["English"]["COUNT_mun_resid_"] = "";
	$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba1["English"]["COUNT_tipo_mara_"] = "COUNT(tipo Mara)";
	$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba1["English"]["COUNT_tipo_mara_"] = "";
	$placeHoldersPPL_pertenecientes_a_Pandilla_prueba1["English"]["COUNT_tipo_mara_"] = "";
	$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba1["English"]["COUNT_org_delictiva_"] = "COUNT(org Delictiva)";
	$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba1["English"]["COUNT_org_delictiva_"] = "";
	$placeHoldersPPL_pertenecientes_a_Pandilla_prueba1["English"]["COUNT_org_delictiva_"] = "";
	$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba1["English"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba1["English"]["tipo_mara"] = "";
	$placeHoldersPPL_pertenecientes_a_Pandilla_prueba1["English"]["tipo_mara"] = "";
	if (count($fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba1["English"]))
		$tdataPPL_pertenecientes_a_Pandilla_prueba1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba1[""] = array();
	$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba1[""] = array();
	$placeHoldersPPL_pertenecientes_a_Pandilla_prueba1[""] = array();
	$pageTitlesPPL_pertenecientes_a_Pandilla_prueba1[""] = array();
	if (count($fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba1[""]))
		$tdataPPL_pertenecientes_a_Pandilla_prueba1[".isUseToolTips"] = true;
}


	$tdataPPL_pertenecientes_a_Pandilla_prueba1[".NCSearch"] = true;



$tdataPPL_pertenecientes_a_Pandilla_prueba1[".shortTableName"] = "PPL_pertenecientes_a_Pandilla_prueba1";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".nSecOptions"] = 0;
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".recsPerRowPrint"] = 1;
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".mainTableOwnerID"] = "";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".moveNext"] = 1;
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".entityType"] = 2;

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".strOriginalTableName"] = "carcel";

	



$tdataPPL_pertenecientes_a_Pandilla_prueba1[".showAddInPopup"] = false;

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".showEditInPopup"] = false;

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPPL_pertenecientes_a_Pandilla_prueba1[".fieldsForRegister"] = array();

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".listAjax"] = false;

	$tdataPPL_pertenecientes_a_Pandilla_prueba1[".audit"] = false;

	$tdataPPL_pertenecientes_a_Pandilla_prueba1[".locking"] = false;



$tdataPPL_pertenecientes_a_Pandilla_prueba1[".list"] = true;



$tdataPPL_pertenecientes_a_Pandilla_prueba1[".reorderRecordsByHeader"] = true;





$tdataPPL_pertenecientes_a_Pandilla_prueba1[".exportTo"] = true;

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".printFriendly"] = true;


$tdataPPL_pertenecientes_a_Pandilla_prueba1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".searchSaving"] = false;
//

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".showSearchPanel"] = true;
		$tdataPPL_pertenecientes_a_Pandilla_prueba1[".flexibleSearch"] = true;

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".isUseAjaxSuggest"] = true;






$tdataPPL_pertenecientes_a_Pandilla_prueba1[".ajaxCodeSnippetAdded"] = false;

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".buttonsAdded"] = false;

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".isUseTimeForSearch"] = false;





$tdataPPL_pertenecientes_a_Pandilla_prueba1[".allSearchFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".filterFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".requiredSearchFields"] = array();

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".allSearchFields"][] = "COUNT(mun_resid)";
	$tdataPPL_pertenecientes_a_Pandilla_prueba1[".allSearchFields"][] = "COUNT(tipo_mara)";
	$tdataPPL_pertenecientes_a_Pandilla_prueba1[".allSearchFields"][] = "COUNT(org_delictiva)";
	$tdataPPL_pertenecientes_a_Pandilla_prueba1[".allSearchFields"][] = "tipo_mara";
	$tdataPPL_pertenecientes_a_Pandilla_prueba1[".allSearchFields"][] = "mun_resid";
	

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".googleLikeFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".googleLikeFields"][] = "COUNT(mun_resid)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".googleLikeFields"][] = "COUNT(tipo_mara)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".googleLikeFields"][] = "COUNT(org_delictiva)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".googleLikeFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".googleLikeFields"][] = "mun_resid";


$tdataPPL_pertenecientes_a_Pandilla_prueba1[".advSearchFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".advSearchFields"][] = "COUNT(mun_resid)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".advSearchFields"][] = "COUNT(tipo_mara)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".advSearchFields"][] = "COUNT(org_delictiva)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".advSearchFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".advSearchFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".tableType"] = "report";

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".printerPageOrientation"] = 0;
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".nPrinterPageScale"] = 100;

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".nPrinterSplitRecords"] = 40;

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".nPrinterPDFSplitRecords"] = 40;



$tdataPPL_pertenecientes_a_Pandilla_prueba1[".geocodingEnabled"] = false;

//report settings
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".crossTabReport"] = true;

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".reportGroupFields"] = true;
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".pageSize"] = 5;
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".showGroupSummaryCount"] = true;
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
	$rgroupField = array();
	$rgroupField['strGroupField'] = "COUNT(org_delictiva)";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 3;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".reportGroupFieldsData"] = $reportGroupFields;

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".reportHorizontalSummary"] = true;

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".isExistTotalFields"] = true;

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".reportVerticalSummary"] = true;


$tdataPPL_pertenecientes_a_Pandilla_prueba1[".reportGlobalSummary"] = true;

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".repShowDet"] = true;

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".reportLayout"] = 0;

//end of report settings




$tdataPPL_pertenecientes_a_Pandilla_prueba1[".listGridLayout"] = 3;





// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".strOrderBy"] = $tstrOrderBy;

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".orderindexes"] = array();

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".sqlHead"] = "SELECT COUNT(p.mun_resid) AS `COUNT(mun_resid)`,  COUNT(sp.tipo_mara) AS `COUNT(tipo_mara)`,  COUNT(p.org_delictiva) AS `COUNT(org_delictiva)`,  sp.tipo_mara,  p.mun_resid";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".sqlFrom"] = "FROM carcel AS p  INNER JOIN tipo_mara AS sp ON p.org_delictiva = sp.org_delictiva";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".sqlWhereExpr"] = "(p.mun_resid IN       (SELECT mun_resid     FROM carcel))";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".arrGroupsPerPage"] = $arrGPP;

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".highlightSearchResults"] = true;

$tableKeysPPL_pertenecientes_a_Pandilla_prueba1 = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".Keys"] = $tableKeysPPL_pertenecientes_a_Pandilla_prueba1;

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".listFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".listFields"][] = "COUNT(mun_resid)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".listFields"][] = "COUNT(tipo_mara)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".listFields"][] = "COUNT(org_delictiva)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".listFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".listFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".hideMobileList"] = array();


$tdataPPL_pertenecientes_a_Pandilla_prueba1[".viewFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".viewFields"][] = "COUNT(mun_resid)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".viewFields"][] = "COUNT(tipo_mara)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".viewFields"][] = "COUNT(org_delictiva)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".viewFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".viewFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".addFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".addFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".addFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".masterListFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".masterListFields"][] = "COUNT(mun_resid)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".masterListFields"][] = "COUNT(tipo_mara)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".masterListFields"][] = "COUNT(org_delictiva)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".masterListFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".masterListFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".inlineAddFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".inlineAddFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".inlineAddFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".editFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".editFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".editFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".inlineEditFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".inlineEditFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".inlineEditFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".updateSelectedFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".updateSelectedFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".updateSelectedFields"][] = "mun_resid";


$tdataPPL_pertenecientes_a_Pandilla_prueba1[".exportFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".exportFields"][] = "COUNT(mun_resid)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".exportFields"][] = "COUNT(tipo_mara)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".exportFields"][] = "COUNT(org_delictiva)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".exportFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".exportFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".importFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".importFields"][] = "COUNT(mun_resid)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".importFields"][] = "COUNT(tipo_mara)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".importFields"][] = "COUNT(org_delictiva)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".importFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".importFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".printFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".printFields"][] = "COUNT(mun_resid)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".printFields"][] = "COUNT(tipo_mara)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".printFields"][] = "COUNT(org_delictiva)";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".printFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".printFields"][] = "mun_resid";

//	COUNT(mun_resid)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "COUNT(mun_resid)";
	$fdata["GoodName"] = "COUNT_mun_resid_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PPL_pertenecientes_a_Pandilla_prueba1","COUNT_mun_resid_");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(mun_resid)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(p.mun_resid)";

	
	
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




	$tdataPPL_pertenecientes_a_Pandilla_prueba1["COUNT(mun_resid)"] = $fdata;
//	COUNT(tipo_mara)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "COUNT(tipo_mara)";
	$fdata["GoodName"] = "COUNT_tipo_mara_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PPL_pertenecientes_a_Pandilla_prueba1","COUNT_tipo_mara_");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(tipo_mara)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(sp.tipo_mara)";

	
	
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




	$tdataPPL_pertenecientes_a_Pandilla_prueba1["COUNT(tipo_mara)"] = $fdata;
//	COUNT(org_delictiva)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "COUNT(org_delictiva)";
	$fdata["GoodName"] = "COUNT_org_delictiva_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PPL_pertenecientes_a_Pandilla_prueba1","COUNT_org_delictiva_");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(org_delictiva)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(p.org_delictiva)";

	
	
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




	$tdataPPL_pertenecientes_a_Pandilla_prueba1["COUNT(org_delictiva)"] = $fdata;
//	tipo_mara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tipo_mara";
	$fdata["GoodName"] = "tipo_mara";
	$fdata["ownerTable"] = "tipo_mara";
	$fdata["Label"] = GetFieldLabel("PPL_pertenecientes_a_Pandilla_prueba1","tipo_mara");
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
	$fdata["FullName"] = "sp.tipo_mara";

	
	
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




	$tdataPPL_pertenecientes_a_Pandilla_prueba1["tipo_mara"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_pertenecientes_a_Pandilla_prueba1","mun_resid");
	$fdata["FieldType"] = 200;

		// report field settings
					$fdata["isTotalSum"] = true;
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
	$fdata["FullName"] = "p.mun_resid";

	
	
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




	$tdataPPL_pertenecientes_a_Pandilla_prueba1["mun_resid"] = $fdata;


$tables_data["PPL pertenecientes a Pandilla_prueba1"]=&$tdataPPL_pertenecientes_a_Pandilla_prueba1;
$field_labels["PPL_pertenecientes_a_Pandilla_prueba1"] = &$fieldLabelsPPL_pertenecientes_a_Pandilla_prueba1;
$fieldToolTips["PPL_pertenecientes_a_Pandilla_prueba1"] = &$fieldToolTipsPPL_pertenecientes_a_Pandilla_prueba1;
$placeHolders["PPL_pertenecientes_a_Pandilla_prueba1"] = &$placeHoldersPPL_pertenecientes_a_Pandilla_prueba1;
$page_titles["PPL_pertenecientes_a_Pandilla_prueba1"] = &$pageTitlesPPL_pertenecientes_a_Pandilla_prueba1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["PPL pertenecientes a Pandilla_prueba1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PPL_pertenecientes_a_Pandilla_prueba1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COUNT(p.mun_resid) AS `COUNT(mun_resid)`,  COUNT(sp.tipo_mara) AS `COUNT(tipo_mara)`,  COUNT(p.org_delictiva) AS `COUNT(org_delictiva)`,  sp.tipo_mara,  p.mun_resid";
$proto0["m_strFrom"] = "FROM carcel AS p  INNER JOIN tipo_mara AS sp ON p.org_delictiva = sp.org_delictiva";
$proto0["m_strWhere"] = "(p.mun_resid IN       (SELECT mun_resid     FROM carcel))";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "p.mun_resid IN       (SELECT mun_resid     FROM carcel)";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "p",
	"m_srcTableName" => "PPL pertenecientes a Pandilla_prueba1"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "IN       (SELECT mun_resid     FROM carcel)";
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
			$proto7=array();
$proto7["m_functiontype"] = "SQLF_COUNT";
$proto7["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "p",
	"m_srcTableName" => "PPL pertenecientes a Pandilla_prueba1"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto7);

$proto6["m_sql"] = "COUNT(p.mun_resid)";
$proto6["m_srcTableName"] = "PPL pertenecientes a Pandilla_prueba1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "COUNT(mun_resid)";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$proto10=array();
$proto10["m_functiontype"] = "SQLF_COUNT";
$proto10["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "sp",
	"m_srcTableName" => "PPL pertenecientes a Pandilla_prueba1"
));

$proto10["m_arguments"][]=$obj;
$proto10["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto10);

$proto9["m_sql"] = "COUNT(sp.tipo_mara)";
$proto9["m_srcTableName"] = "PPL pertenecientes a Pandilla_prueba1";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "COUNT(tipo_mara)";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_COUNT";
$proto13["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "p",
	"m_srcTableName" => "PPL pertenecientes a Pandilla_prueba1"
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "COUNT(p.org_delictiva)";
$proto12["m_srcTableName"] = "PPL pertenecientes a Pandilla_prueba1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "COUNT(org_delictiva)";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "sp",
	"m_srcTableName" => "PPL pertenecientes a Pandilla_prueba1"
));

$proto15["m_sql"] = "sp.tipo_mara";
$proto15["m_srcTableName"] = "PPL pertenecientes a Pandilla_prueba1";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "p",
	"m_srcTableName" => "PPL pertenecientes a Pandilla_prueba1"
));

$proto17["m_sql"] = "p.mun_resid";
$proto17["m_srcTableName"] = "PPL pertenecientes a Pandilla_prueba1";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "carcel";
$proto20["m_srcTableName"] = "PPL pertenecientes a Pandilla_prueba1";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "sipe";
$proto20["m_columns"][] = "afis";
$proto20["m_columns"][] = "edad";
$proto20["m_columns"][] = "rangoetario";
$proto20["m_columns"][] = "genero";
$proto20["m_columns"][] = "fecha_nac";
$proto20["m_columns"][] = "edad1";
$proto20["m_columns"][] = "dui";
$proto20["m_columns"][] = "nivel_edu";
$proto20["m_columns"][] = "educacionanalisis";
$proto20["m_columns"][] = "profesion_oficio";
$proto20["m_columns"][] = "estado_civil";
$proto20["m_columns"][] = "ciudadania";
$proto20["m_columns"][] = "mun_nacimiento";
$proto20["m_columns"][] = "depto_nacim";
$proto20["m_columns"][] = "direccion";
$proto20["m_columns"][] = "mun_resid";
$proto20["m_columns"][] = "depart_resid";
$proto20["m_columns"][] = "delitosanalisis";
$proto20["m_columns"][] = "sj_interno";
$proto20["m_columns"][] = "fase";
$proto20["m_columns"][] = "org_delictiva";
$proto20["m_columns"][] = "tipo_mara";
$proto20["m_columns"][] = "reincidente";
$proto20["m_columns"][] = "deportado";
$proto20["m_columns"][] = "direccion1";
$proto20["m_columns"][] = "sector";
$proto20["m_columns"][] = "celda";
$proto20["m_columns"][] = "fecha_ing__sp";
$proto20["m_columns"][] = "libro";
$proto20["m_columns"][] = "fecha_ing__cp";
$proto20["m_columns"][] = "total_delitos";
$proto20["m_columns"][] = "delitos";
$proto20["m_columns"][] = "delitoanalisis";
$proto20["m_columns"][] = "sector_ppd";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "carcel AS p";
$proto19["m_alias"] = "p";
$proto19["m_srcTableName"] = "PPL pertenecientes a Pandilla_prueba1";
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
												$proto23=array();
$proto23["m_link"] = "SQLL_INNERJOIN";
			$proto24=array();
$proto24["m_strName"] = "tipo_mara";
$proto24["m_srcTableName"] = "PPL pertenecientes a Pandilla_prueba1";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "org_delictiva";
$proto24["m_columns"][] = "tipo_mara";
$proto24["m_columns"][] = "ID_1";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "INNER JOIN tipo_mara AS sp ON p.org_delictiva = sp.org_delictiva";
$proto23["m_alias"] = "sp";
$proto23["m_srcTableName"] = "PPL pertenecientes a Pandilla_prueba1";
$proto25=array();
$proto25["m_sql"] = "p.org_delictiva = sp.org_delictiva";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "p",
	"m_srcTableName" => "PPL pertenecientes a Pandilla_prueba1"
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "= sp.org_delictiva";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "p",
	"m_srcTableName" => "PPL pertenecientes a Pandilla_prueba1"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "sp",
	"m_srcTableName" => "PPL pertenecientes a Pandilla_prueba1"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PPL pertenecientes a Pandilla_prueba1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PPL_pertenecientes_a_Pandilla_prueba1 = createSqlQuery_PPL_pertenecientes_a_Pandilla_prueba1();


	
		;

					

$tdataPPL_pertenecientes_a_Pandilla_prueba1[".sqlquery"] = $queryData_PPL_pertenecientes_a_Pandilla_prueba1;

$tableEvents["PPL pertenecientes a Pandilla_prueba1"] = new eventsBase;
$tdataPPL_pertenecientes_a_Pandilla_prueba1[".hasEvents"] = false;

?>