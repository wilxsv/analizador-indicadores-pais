<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPPL_por_rango_etario_seg_n_g_nero = array();
	$tdataPPL_por_rango_etario_seg_n_g_nero[".truncateText"] = true;
	$tdataPPL_por_rango_etario_seg_n_g_nero[".NumberOfChars"] = 80;
	$tdataPPL_por_rango_etario_seg_n_g_nero[".ShortName"] = "PPL_por_rango_etario_seg_n_g_nero";
	$tdataPPL_por_rango_etario_seg_n_g_nero[".OwnerID"] = "";
	$tdataPPL_por_rango_etario_seg_n_g_nero[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsPPL_por_rango_etario_seg_n_g_nero = array();
$fieldToolTipsPPL_por_rango_etario_seg_n_g_nero = array();
$pageTitlesPPL_por_rango_etario_seg_n_g_nero = array();
$placeHoldersPPL_por_rango_etario_seg_n_g_nero = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPPL_por_rango_etario_seg_n_g_nero["Spanish"] = array();
	$fieldToolTipsPPL_por_rango_etario_seg_n_g_nero["Spanish"] = array();
	$placeHoldersPPL_por_rango_etario_seg_n_g_nero["Spanish"] = array();
	$pageTitlesPPL_por_rango_etario_seg_n_g_nero["Spanish"] = array();
	$fieldLabelsPPL_por_rango_etario_seg_n_g_nero["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPPL_por_rango_etario_seg_n_g_nero["Spanish"]["mun_resid"] = "";
	$placeHoldersPPL_por_rango_etario_seg_n_g_nero["Spanish"]["mun_resid"] = "";
	$fieldLabelsPPL_por_rango_etario_seg_n_g_nero["Spanish"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPPL_por_rango_etario_seg_n_g_nero["Spanish"]["depart_resid"] = "";
	$placeHoldersPPL_por_rango_etario_seg_n_g_nero["Spanish"]["depart_resid"] = "";
	$fieldLabelsPPL_por_rango_etario_seg_n_g_nero["Spanish"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsPPL_por_rango_etario_seg_n_g_nero["Spanish"]["rangoetario"] = "";
	$placeHoldersPPL_por_rango_etario_seg_n_g_nero["Spanish"]["rangoetario"] = "";
	$fieldLabelsPPL_por_rango_etario_seg_n_g_nero["Spanish"]["genero"] = "Genero";
	$fieldToolTipsPPL_por_rango_etario_seg_n_g_nero["Spanish"]["genero"] = "";
	$placeHoldersPPL_por_rango_etario_seg_n_g_nero["Spanish"]["genero"] = "";
	$fieldLabelsPPL_por_rango_etario_seg_n_g_nero["Spanish"]["COUNT_genero_"] = "COUNT(genero)";
	$fieldToolTipsPPL_por_rango_etario_seg_n_g_nero["Spanish"]["COUNT_genero_"] = "";
	$placeHoldersPPL_por_rango_etario_seg_n_g_nero["Spanish"]["COUNT_genero_"] = "";
	if (count($fieldToolTipsPPL_por_rango_etario_seg_n_g_nero["Spanish"]))
		$tdataPPL_por_rango_etario_seg_n_g_nero[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPPL_por_rango_etario_seg_n_g_nero["English"] = array();
	$fieldToolTipsPPL_por_rango_etario_seg_n_g_nero["English"] = array();
	$placeHoldersPPL_por_rango_etario_seg_n_g_nero["English"] = array();
	$pageTitlesPPL_por_rango_etario_seg_n_g_nero["English"] = array();
	$fieldLabelsPPL_por_rango_etario_seg_n_g_nero["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPPL_por_rango_etario_seg_n_g_nero["English"]["mun_resid"] = "";
	$placeHoldersPPL_por_rango_etario_seg_n_g_nero["English"]["mun_resid"] = "";
	$fieldLabelsPPL_por_rango_etario_seg_n_g_nero["English"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPPL_por_rango_etario_seg_n_g_nero["English"]["depart_resid"] = "";
	$placeHoldersPPL_por_rango_etario_seg_n_g_nero["English"]["depart_resid"] = "";
	$fieldLabelsPPL_por_rango_etario_seg_n_g_nero["English"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsPPL_por_rango_etario_seg_n_g_nero["English"]["rangoetario"] = "";
	$placeHoldersPPL_por_rango_etario_seg_n_g_nero["English"]["rangoetario"] = "";
	$fieldLabelsPPL_por_rango_etario_seg_n_g_nero["English"]["genero"] = "Genero";
	$fieldToolTipsPPL_por_rango_etario_seg_n_g_nero["English"]["genero"] = "";
	$placeHoldersPPL_por_rango_etario_seg_n_g_nero["English"]["genero"] = "";
	$fieldLabelsPPL_por_rango_etario_seg_n_g_nero["English"]["COUNT_genero_"] = "COUNT(genero)";
	$fieldToolTipsPPL_por_rango_etario_seg_n_g_nero["English"]["COUNT_genero_"] = "";
	$placeHoldersPPL_por_rango_etario_seg_n_g_nero["English"]["COUNT_genero_"] = "";
	if (count($fieldToolTipsPPL_por_rango_etario_seg_n_g_nero["English"]))
		$tdataPPL_por_rango_etario_seg_n_g_nero[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPPL_por_rango_etario_seg_n_g_nero[""] = array();
	$fieldToolTipsPPL_por_rango_etario_seg_n_g_nero[""] = array();
	$placeHoldersPPL_por_rango_etario_seg_n_g_nero[""] = array();
	$pageTitlesPPL_por_rango_etario_seg_n_g_nero[""] = array();
	if (count($fieldToolTipsPPL_por_rango_etario_seg_n_g_nero[""]))
		$tdataPPL_por_rango_etario_seg_n_g_nero[".isUseToolTips"] = true;
}





$tdataPPL_por_rango_etario_seg_n_g_nero[".shortTableName"] = "PPL_por_rango_etario_seg_n_g_nero";
$tdataPPL_por_rango_etario_seg_n_g_nero[".nSecOptions"] = 0;
$tdataPPL_por_rango_etario_seg_n_g_nero[".recsPerRowPrint"] = 1;
$tdataPPL_por_rango_etario_seg_n_g_nero[".mainTableOwnerID"] = "";
$tdataPPL_por_rango_etario_seg_n_g_nero[".moveNext"] = 1;
$tdataPPL_por_rango_etario_seg_n_g_nero[".entityType"] = 2;

$tdataPPL_por_rango_etario_seg_n_g_nero[".strOriginalTableName"] = "carcel";

	



$tdataPPL_por_rango_etario_seg_n_g_nero[".showAddInPopup"] = false;

$tdataPPL_por_rango_etario_seg_n_g_nero[".showEditInPopup"] = false;

$tdataPPL_por_rango_etario_seg_n_g_nero[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPPL_por_rango_etario_seg_n_g_nero[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPPL_por_rango_etario_seg_n_g_nero[".fieldsForRegister"] = array();

$tdataPPL_por_rango_etario_seg_n_g_nero[".listAjax"] = false;

	$tdataPPL_por_rango_etario_seg_n_g_nero[".audit"] = false;

	$tdataPPL_por_rango_etario_seg_n_g_nero[".locking"] = false;



$tdataPPL_por_rango_etario_seg_n_g_nero[".list"] = true;



$tdataPPL_por_rango_etario_seg_n_g_nero[".reorderRecordsByHeader"] = true;





$tdataPPL_por_rango_etario_seg_n_g_nero[".exportTo"] = true;

$tdataPPL_por_rango_etario_seg_n_g_nero[".printFriendly"] = true;


$tdataPPL_por_rango_etario_seg_n_g_nero[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPPL_por_rango_etario_seg_n_g_nero[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPPL_por_rango_etario_seg_n_g_nero[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPPL_por_rango_etario_seg_n_g_nero[".searchSaving"] = false;
//

$tdataPPL_por_rango_etario_seg_n_g_nero[".showSearchPanel"] = true;
		$tdataPPL_por_rango_etario_seg_n_g_nero[".flexibleSearch"] = true;

$tdataPPL_por_rango_etario_seg_n_g_nero[".isUseAjaxSuggest"] = true;






$tdataPPL_por_rango_etario_seg_n_g_nero[".ajaxCodeSnippetAdded"] = false;

$tdataPPL_por_rango_etario_seg_n_g_nero[".buttonsAdded"] = false;

$tdataPPL_por_rango_etario_seg_n_g_nero[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPPL_por_rango_etario_seg_n_g_nero[".isUseTimeForSearch"] = false;





$tdataPPL_por_rango_etario_seg_n_g_nero[".allSearchFields"] = array();
$tdataPPL_por_rango_etario_seg_n_g_nero[".filterFields"] = array();
$tdataPPL_por_rango_etario_seg_n_g_nero[".requiredSearchFields"] = array();

$tdataPPL_por_rango_etario_seg_n_g_nero[".allSearchFields"][] = "rangoetario";
	$tdataPPL_por_rango_etario_seg_n_g_nero[".allSearchFields"][] = "genero";
	$tdataPPL_por_rango_etario_seg_n_g_nero[".allSearchFields"][] = "COUNT(genero)";
	$tdataPPL_por_rango_etario_seg_n_g_nero[".allSearchFields"][] = "mun_resid";
	$tdataPPL_por_rango_etario_seg_n_g_nero[".allSearchFields"][] = "depart_resid";
	

$tdataPPL_por_rango_etario_seg_n_g_nero[".googleLikeFields"] = array();
$tdataPPL_por_rango_etario_seg_n_g_nero[".googleLikeFields"][] = "rangoetario";
$tdataPPL_por_rango_etario_seg_n_g_nero[".googleLikeFields"][] = "genero";
$tdataPPL_por_rango_etario_seg_n_g_nero[".googleLikeFields"][] = "COUNT(genero)";
$tdataPPL_por_rango_etario_seg_n_g_nero[".googleLikeFields"][] = "mun_resid";
$tdataPPL_por_rango_etario_seg_n_g_nero[".googleLikeFields"][] = "depart_resid";


$tdataPPL_por_rango_etario_seg_n_g_nero[".advSearchFields"] = array();
$tdataPPL_por_rango_etario_seg_n_g_nero[".advSearchFields"][] = "rangoetario";
$tdataPPL_por_rango_etario_seg_n_g_nero[".advSearchFields"][] = "genero";
$tdataPPL_por_rango_etario_seg_n_g_nero[".advSearchFields"][] = "COUNT(genero)";
$tdataPPL_por_rango_etario_seg_n_g_nero[".advSearchFields"][] = "mun_resid";
$tdataPPL_por_rango_etario_seg_n_g_nero[".advSearchFields"][] = "depart_resid";

$tdataPPL_por_rango_etario_seg_n_g_nero[".tableType"] = "report";

$tdataPPL_por_rango_etario_seg_n_g_nero[".printerPageOrientation"] = 0;
$tdataPPL_por_rango_etario_seg_n_g_nero[".nPrinterPageScale"] = 100;

$tdataPPL_por_rango_etario_seg_n_g_nero[".nPrinterSplitRecords"] = 40;

$tdataPPL_por_rango_etario_seg_n_g_nero[".nPrinterPDFSplitRecords"] = 40;



$tdataPPL_por_rango_etario_seg_n_g_nero[".geocodingEnabled"] = false;

//report settings
$tdataPPL_por_rango_etario_seg_n_g_nero[".crossTabReport"] = true;

$tdataPPL_por_rango_etario_seg_n_g_nero[".reportGroupFields"] = true;
$tdataPPL_por_rango_etario_seg_n_g_nero[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "genero";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "rangoetario";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdataPPL_por_rango_etario_seg_n_g_nero[".reportGroupFieldsData"] = $reportGroupFields;

$tdataPPL_por_rango_etario_seg_n_g_nero[".reportHorizontalSummary"] = true;

$tdataPPL_por_rango_etario_seg_n_g_nero[".isExistTotalFields"] = true;

$tdataPPL_por_rango_etario_seg_n_g_nero[".reportVerticalSummary"] = true;


$tdataPPL_por_rango_etario_seg_n_g_nero[".reportGlobalSummary"] = true;

$tdataPPL_por_rango_etario_seg_n_g_nero[".repShowDet"] = true;

$tdataPPL_por_rango_etario_seg_n_g_nero[".reportLayout"] = 0;

//end of report settings




$tdataPPL_por_rango_etario_seg_n_g_nero[".listGridLayout"] = 3;

$tdataPPL_por_rango_etario_seg_n_g_nero[".isDisplayLoading"] = true;




// view page pdf

// print page pdf
$tdataPPL_por_rango_etario_seg_n_g_nero[".isPrinterPagePDF"] = true;
$tdataPPL_por_rango_etario_seg_n_g_nero[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "ORDER BY mun_resid, rangoetario DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPPL_por_rango_etario_seg_n_g_nero[".strOrderBy"] = $tstrOrderBy;

$tdataPPL_por_rango_etario_seg_n_g_nero[".orderindexes"] = array();
$tdataPPL_por_rango_etario_seg_n_g_nero[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "rangoetario");
$tdataPPL_por_rango_etario_seg_n_g_nero[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "mun_resid");

$tdataPPL_por_rango_etario_seg_n_g_nero[".sqlHead"] = "SELECT rangoetario,  genero,  COUNT(genero) AS `COUNT(genero)`,  mun_resid,  depart_resid";
$tdataPPL_por_rango_etario_seg_n_g_nero[".sqlFrom"] = "FROM carcel";
$tdataPPL_por_rango_etario_seg_n_g_nero[".sqlWhereExpr"] = "";
$tdataPPL_por_rango_etario_seg_n_g_nero[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPPL_por_rango_etario_seg_n_g_nero[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPPL_por_rango_etario_seg_n_g_nero[".arrGroupsPerPage"] = $arrGPP;

$tdataPPL_por_rango_etario_seg_n_g_nero[".highlightSearchResults"] = true;

$tableKeysPPL_por_rango_etario_seg_n_g_nero = array();
$tdataPPL_por_rango_etario_seg_n_g_nero[".Keys"] = $tableKeysPPL_por_rango_etario_seg_n_g_nero;

$tdataPPL_por_rango_etario_seg_n_g_nero[".listFields"] = array();
$tdataPPL_por_rango_etario_seg_n_g_nero[".listFields"][] = "rangoetario";
$tdataPPL_por_rango_etario_seg_n_g_nero[".listFields"][] = "genero";
$tdataPPL_por_rango_etario_seg_n_g_nero[".listFields"][] = "COUNT(genero)";
$tdataPPL_por_rango_etario_seg_n_g_nero[".listFields"][] = "mun_resid";
$tdataPPL_por_rango_etario_seg_n_g_nero[".listFields"][] = "depart_resid";

$tdataPPL_por_rango_etario_seg_n_g_nero[".hideMobileList"] = array();


$tdataPPL_por_rango_etario_seg_n_g_nero[".viewFields"] = array();
$tdataPPL_por_rango_etario_seg_n_g_nero[".viewFields"][] = "rangoetario";
$tdataPPL_por_rango_etario_seg_n_g_nero[".viewFields"][] = "genero";
$tdataPPL_por_rango_etario_seg_n_g_nero[".viewFields"][] = "COUNT(genero)";
$tdataPPL_por_rango_etario_seg_n_g_nero[".viewFields"][] = "mun_resid";
$tdataPPL_por_rango_etario_seg_n_g_nero[".viewFields"][] = "depart_resid";

$tdataPPL_por_rango_etario_seg_n_g_nero[".addFields"] = array();
$tdataPPL_por_rango_etario_seg_n_g_nero[".addFields"][] = "rangoetario";
$tdataPPL_por_rango_etario_seg_n_g_nero[".addFields"][] = "genero";
$tdataPPL_por_rango_etario_seg_n_g_nero[".addFields"][] = "mun_resid";
$tdataPPL_por_rango_etario_seg_n_g_nero[".addFields"][] = "depart_resid";

$tdataPPL_por_rango_etario_seg_n_g_nero[".masterListFields"] = array();
$tdataPPL_por_rango_etario_seg_n_g_nero[".masterListFields"][] = "rangoetario";
$tdataPPL_por_rango_etario_seg_n_g_nero[".masterListFields"][] = "genero";
$tdataPPL_por_rango_etario_seg_n_g_nero[".masterListFields"][] = "COUNT(genero)";
$tdataPPL_por_rango_etario_seg_n_g_nero[".masterListFields"][] = "mun_resid";
$tdataPPL_por_rango_etario_seg_n_g_nero[".masterListFields"][] = "depart_resid";

$tdataPPL_por_rango_etario_seg_n_g_nero[".inlineAddFields"] = array();
$tdataPPL_por_rango_etario_seg_n_g_nero[".inlineAddFields"][] = "rangoetario";
$tdataPPL_por_rango_etario_seg_n_g_nero[".inlineAddFields"][] = "genero";
$tdataPPL_por_rango_etario_seg_n_g_nero[".inlineAddFields"][] = "mun_resid";
$tdataPPL_por_rango_etario_seg_n_g_nero[".inlineAddFields"][] = "depart_resid";

$tdataPPL_por_rango_etario_seg_n_g_nero[".editFields"] = array();
$tdataPPL_por_rango_etario_seg_n_g_nero[".editFields"][] = "rangoetario";
$tdataPPL_por_rango_etario_seg_n_g_nero[".editFields"][] = "genero";
$tdataPPL_por_rango_etario_seg_n_g_nero[".editFields"][] = "mun_resid";
$tdataPPL_por_rango_etario_seg_n_g_nero[".editFields"][] = "depart_resid";

$tdataPPL_por_rango_etario_seg_n_g_nero[".inlineEditFields"] = array();
$tdataPPL_por_rango_etario_seg_n_g_nero[".inlineEditFields"][] = "rangoetario";
$tdataPPL_por_rango_etario_seg_n_g_nero[".inlineEditFields"][] = "genero";
$tdataPPL_por_rango_etario_seg_n_g_nero[".inlineEditFields"][] = "mun_resid";
$tdataPPL_por_rango_etario_seg_n_g_nero[".inlineEditFields"][] = "depart_resid";

$tdataPPL_por_rango_etario_seg_n_g_nero[".updateSelectedFields"] = array();
$tdataPPL_por_rango_etario_seg_n_g_nero[".updateSelectedFields"][] = "rangoetario";
$tdataPPL_por_rango_etario_seg_n_g_nero[".updateSelectedFields"][] = "genero";
$tdataPPL_por_rango_etario_seg_n_g_nero[".updateSelectedFields"][] = "mun_resid";
$tdataPPL_por_rango_etario_seg_n_g_nero[".updateSelectedFields"][] = "depart_resid";


$tdataPPL_por_rango_etario_seg_n_g_nero[".exportFields"] = array();
$tdataPPL_por_rango_etario_seg_n_g_nero[".exportFields"][] = "rangoetario";
$tdataPPL_por_rango_etario_seg_n_g_nero[".exportFields"][] = "genero";
$tdataPPL_por_rango_etario_seg_n_g_nero[".exportFields"][] = "COUNT(genero)";
$tdataPPL_por_rango_etario_seg_n_g_nero[".exportFields"][] = "mun_resid";
$tdataPPL_por_rango_etario_seg_n_g_nero[".exportFields"][] = "depart_resid";

$tdataPPL_por_rango_etario_seg_n_g_nero[".importFields"] = array();
$tdataPPL_por_rango_etario_seg_n_g_nero[".importFields"][] = "rangoetario";
$tdataPPL_por_rango_etario_seg_n_g_nero[".importFields"][] = "genero";
$tdataPPL_por_rango_etario_seg_n_g_nero[".importFields"][] = "COUNT(genero)";
$tdataPPL_por_rango_etario_seg_n_g_nero[".importFields"][] = "mun_resid";
$tdataPPL_por_rango_etario_seg_n_g_nero[".importFields"][] = "depart_resid";

$tdataPPL_por_rango_etario_seg_n_g_nero[".printFields"] = array();
$tdataPPL_por_rango_etario_seg_n_g_nero[".printFields"][] = "rangoetario";
$tdataPPL_por_rango_etario_seg_n_g_nero[".printFields"][] = "genero";
$tdataPPL_por_rango_etario_seg_n_g_nero[".printFields"][] = "COUNT(genero)";
$tdataPPL_por_rango_etario_seg_n_g_nero[".printFields"][] = "mun_resid";
$tdataPPL_por_rango_etario_seg_n_g_nero[".printFields"][] = "depart_resid";

//	rangoetario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rangoetario";
	$fdata["GoodName"] = "rangoetario";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_por_rango_etario_seg_n_g_nero","rangoetario");
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

		$fdata["strField"] = "rangoetario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rangoetario";

	
	
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




	$tdataPPL_por_rango_etario_seg_n_g_nero["rangoetario"] = $fdata;
//	genero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "genero";
	$fdata["GoodName"] = "genero";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_por_rango_etario_seg_n_g_nero","genero");
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

		$fdata["strField"] = "genero";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "genero";

	
	
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




	$tdataPPL_por_rango_etario_seg_n_g_nero["genero"] = $fdata;
//	COUNT(genero)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "COUNT(genero)";
	$fdata["GoodName"] = "COUNT_genero_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PPL_por_rango_etario_seg_n_g_nero","COUNT_genero_");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(genero)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(genero)";

	
	
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




	$tdataPPL_por_rango_etario_seg_n_g_nero["COUNT(genero)"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_por_rango_etario_seg_n_g_nero","mun_resid");
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
	$fdata["FullName"] = "mun_resid";

	
	
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




	$tdataPPL_por_rango_etario_seg_n_g_nero["mun_resid"] = $fdata;
//	depart_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "depart_resid";
	$fdata["GoodName"] = "depart_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_por_rango_etario_seg_n_g_nero","depart_resid");
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

		$fdata["strField"] = "depart_resid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "depart_resid";

	
	
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




	$tdataPPL_por_rango_etario_seg_n_g_nero["depart_resid"] = $fdata;


$tables_data["PPL por rango etario según género"]=&$tdataPPL_por_rango_etario_seg_n_g_nero;
$field_labels["PPL_por_rango_etario_seg_n_g_nero"] = &$fieldLabelsPPL_por_rango_etario_seg_n_g_nero;
$fieldToolTips["PPL_por_rango_etario_seg_n_g_nero"] = &$fieldToolTipsPPL_por_rango_etario_seg_n_g_nero;
$placeHolders["PPL_por_rango_etario_seg_n_g_nero"] = &$placeHoldersPPL_por_rango_etario_seg_n_g_nero;
$page_titles["PPL_por_rango_etario_seg_n_g_nero"] = &$pageTitlesPPL_por_rango_etario_seg_n_g_nero;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["PPL por rango etario según género"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PPL_por_rango_etario_seg_n_g_nero()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "rangoetario,  genero,  COUNT(genero) AS `COUNT(genero)`,  mun_resid,  depart_resid";
$proto0["m_strFrom"] = "FROM carcel";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY mun_resid, rangoetario DESC";
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
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL por rango etario según género"
));

$proto6["m_sql"] = "rangoetario";
$proto6["m_srcTableName"] = "PPL por rango etario según género";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL por rango etario según género"
));

$proto8["m_sql"] = "genero";
$proto8["m_srcTableName"] = "PPL por rango etario según género";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_COUNT";
$proto11["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL por rango etario según género"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "COUNT(genero)";
$proto10["m_srcTableName"] = "PPL por rango etario según género";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "COUNT(genero)";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL por rango etario según género"
));

$proto13["m_sql"] = "mun_resid";
$proto13["m_srcTableName"] = "PPL por rango etario según género";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL por rango etario según género"
));

$proto15["m_sql"] = "depart_resid";
$proto15["m_srcTableName"] = "PPL por rango etario según género";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "carcel";
$proto18["m_srcTableName"] = "PPL por rango etario según género";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "id";
$proto18["m_columns"][] = "sipe";
$proto18["m_columns"][] = "afis";
$proto18["m_columns"][] = "edad";
$proto18["m_columns"][] = "rangoetario";
$proto18["m_columns"][] = "genero";
$proto18["m_columns"][] = "fecha_nac";
$proto18["m_columns"][] = "edad1";
$proto18["m_columns"][] = "dui";
$proto18["m_columns"][] = "nivel_edu";
$proto18["m_columns"][] = "educacionanalisis";
$proto18["m_columns"][] = "profesion_oficio";
$proto18["m_columns"][] = "estado_civil";
$proto18["m_columns"][] = "ciudadania";
$proto18["m_columns"][] = "mun_nacimiento";
$proto18["m_columns"][] = "depto_nacim";
$proto18["m_columns"][] = "direccion";
$proto18["m_columns"][] = "mun_resid";
$proto18["m_columns"][] = "depart_resid";
$proto18["m_columns"][] = "delitosanalisis";
$proto18["m_columns"][] = "sj_interno";
$proto18["m_columns"][] = "fase";
$proto18["m_columns"][] = "org_delictiva";
$proto18["m_columns"][] = "tipo_mara";
$proto18["m_columns"][] = "reincidente";
$proto18["m_columns"][] = "deportado";
$proto18["m_columns"][] = "direccion1";
$proto18["m_columns"][] = "sector";
$proto18["m_columns"][] = "celda";
$proto18["m_columns"][] = "fecha_ing__sp";
$proto18["m_columns"][] = "libro";
$proto18["m_columns"][] = "fecha_ing__cp";
$proto18["m_columns"][] = "total_delitos";
$proto18["m_columns"][] = "delitos";
$proto18["m_columns"][] = "delitoanalisis";
$proto18["m_columns"][] = "sector_ppd";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "carcel";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "PPL por rango etario según género";
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
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL por rango etario según género"
));

$proto21["m_column"]=$obj;
$obj = new SQLGroupByItem($proto21);

$proto0["m_groupby"][]=$obj;
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "genero",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL por rango etario según género"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL por rango etario según género"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL por rango etario según género"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL por rango etario según género"
));

$proto29["m_column"]=$obj;
$proto29["m_bAsc"] = 1;
$proto29["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto29);

$proto0["m_orderby"][]=$obj;					
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL por rango etario según género"
));

$proto31["m_column"]=$obj;
$proto31["m_bAsc"] = 0;
$proto31["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto31);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="PPL por rango etario según género";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PPL_por_rango_etario_seg_n_g_nero = createSqlQuery_PPL_por_rango_etario_seg_n_g_nero();


	
		;

					

$tdataPPL_por_rango_etario_seg_n_g_nero[".sqlquery"] = $queryData_PPL_por_rango_etario_seg_n_g_nero;

$tableEvents["PPL por rango etario según género"] = new eventsBase;
$tdataPPL_por_rango_etario_seg_n_g_nero[".hasEvents"] = false;

?>