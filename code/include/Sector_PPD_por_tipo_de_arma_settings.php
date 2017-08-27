<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSector_PPD_por_tipo_de_arma = array();
	$tdataSector_PPD_por_tipo_de_arma[".truncateText"] = true;
	$tdataSector_PPD_por_tipo_de_arma[".NumberOfChars"] = 80;
	$tdataSector_PPD_por_tipo_de_arma[".ShortName"] = "Sector_PPD_por_tipo_de_arma";
	$tdataSector_PPD_por_tipo_de_arma[".OwnerID"] = "";
	$tdataSector_PPD_por_tipo_de_arma[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsSector_PPD_por_tipo_de_arma = array();
$fieldToolTipsSector_PPD_por_tipo_de_arma = array();
$pageTitlesSector_PPD_por_tipo_de_arma = array();
$placeHoldersSector_PPD_por_tipo_de_arma = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsSector_PPD_por_tipo_de_arma["Spanish"] = array();
	$fieldToolTipsSector_PPD_por_tipo_de_arma["Spanish"] = array();
	$placeHoldersSector_PPD_por_tipo_de_arma["Spanish"] = array();
	$pageTitlesSector_PPD_por_tipo_de_arma["Spanish"] = array();
	$fieldLabelsSector_PPD_por_tipo_de_arma["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipsSector_PPD_por_tipo_de_arma["Spanish"]["muni_he"] = "";
	$placeHoldersSector_PPD_por_tipo_de_arma["Spanish"]["muni_he"] = "";
	$fieldLabelsSector_PPD_por_tipo_de_arma["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsSector_PPD_por_tipo_de_arma["Spanish"]["a_o_hecho"] = "";
	$placeHoldersSector_PPD_por_tipo_de_arma["Spanish"]["a_o_hecho"] = "";
	$fieldLabelsSector_PPD_por_tipo_de_arma["Spanish"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipsSector_PPD_por_tipo_de_arma["Spanish"]["tipo_arma"] = "";
	$placeHoldersSector_PPD_por_tipo_de_arma["Spanish"]["tipo_arma"] = "";
	$fieldLabelsSector_PPD_por_tipo_de_arma["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipsSector_PPD_por_tipo_de_arma["Spanish"]["depart_he"] = "";
	$placeHoldersSector_PPD_por_tipo_de_arma["Spanish"]["depart_he"] = "";
	$fieldLabelsSector_PPD_por_tipo_de_arma["Spanish"]["COUNT_muni_he_"] = "COUNT(muni He)";
	$fieldToolTipsSector_PPD_por_tipo_de_arma["Spanish"]["COUNT_muni_he_"] = "";
	$placeHoldersSector_PPD_por_tipo_de_arma["Spanish"]["COUNT_muni_he_"] = "";
	$fieldLabelsSector_PPD_por_tipo_de_arma["Spanish"]["arma_analisis"] = "Arma Analisis";
	$fieldToolTipsSector_PPD_por_tipo_de_arma["Spanish"]["arma_analisis"] = "";
	$placeHoldersSector_PPD_por_tipo_de_arma["Spanish"]["arma_analisis"] = "";
	$fieldLabelsSector_PPD_por_tipo_de_arma["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsSector_PPD_por_tipo_de_arma["Spanish"]["sector_ppd"] = "";
	$placeHoldersSector_PPD_por_tipo_de_arma["Spanish"]["sector_ppd"] = "";
	if (count($fieldToolTipsSector_PPD_por_tipo_de_arma["Spanish"]))
		$tdataSector_PPD_por_tipo_de_arma[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSector_PPD_por_tipo_de_arma["English"] = array();
	$fieldToolTipsSector_PPD_por_tipo_de_arma["English"] = array();
	$placeHoldersSector_PPD_por_tipo_de_arma["English"] = array();
	$pageTitlesSector_PPD_por_tipo_de_arma["English"] = array();
	$fieldLabelsSector_PPD_por_tipo_de_arma["English"]["muni_he"] = "Muni He";
	$fieldToolTipsSector_PPD_por_tipo_de_arma["English"]["muni_he"] = "";
	$placeHoldersSector_PPD_por_tipo_de_arma["English"]["muni_he"] = "";
	$fieldLabelsSector_PPD_por_tipo_de_arma["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsSector_PPD_por_tipo_de_arma["English"]["a_o_hecho"] = "";
	$placeHoldersSector_PPD_por_tipo_de_arma["English"]["a_o_hecho"] = "";
	$fieldLabelsSector_PPD_por_tipo_de_arma["English"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipsSector_PPD_por_tipo_de_arma["English"]["tipo_arma"] = "";
	$placeHoldersSector_PPD_por_tipo_de_arma["English"]["tipo_arma"] = "";
	$fieldLabelsSector_PPD_por_tipo_de_arma["English"]["depart_he"] = "Depart He";
	$fieldToolTipsSector_PPD_por_tipo_de_arma["English"]["depart_he"] = "";
	$placeHoldersSector_PPD_por_tipo_de_arma["English"]["depart_he"] = "";
	$fieldLabelsSector_PPD_por_tipo_de_arma["English"]["COUNT_muni_he_"] = "COUNT(muni He)";
	$fieldToolTipsSector_PPD_por_tipo_de_arma["English"]["COUNT_muni_he_"] = "";
	$placeHoldersSector_PPD_por_tipo_de_arma["English"]["COUNT_muni_he_"] = "";
	$fieldLabelsSector_PPD_por_tipo_de_arma["English"]["arma_analisis"] = "Arma Analisis";
	$fieldToolTipsSector_PPD_por_tipo_de_arma["English"]["arma_analisis"] = "";
	$placeHoldersSector_PPD_por_tipo_de_arma["English"]["arma_analisis"] = "";
	$fieldLabelsSector_PPD_por_tipo_de_arma["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsSector_PPD_por_tipo_de_arma["English"]["sector_ppd"] = "";
	$placeHoldersSector_PPD_por_tipo_de_arma["English"]["sector_ppd"] = "";
	if (count($fieldToolTipsSector_PPD_por_tipo_de_arma["English"]))
		$tdataSector_PPD_por_tipo_de_arma[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSector_PPD_por_tipo_de_arma[""] = array();
	$fieldToolTipsSector_PPD_por_tipo_de_arma[""] = array();
	$placeHoldersSector_PPD_por_tipo_de_arma[""] = array();
	$pageTitlesSector_PPD_por_tipo_de_arma[""] = array();
	if (count($fieldToolTipsSector_PPD_por_tipo_de_arma[""]))
		$tdataSector_PPD_por_tipo_de_arma[".isUseToolTips"] = true;
}





$tdataSector_PPD_por_tipo_de_arma[".shortTableName"] = "Sector_PPD_por_tipo_de_arma";
$tdataSector_PPD_por_tipo_de_arma[".nSecOptions"] = 0;
$tdataSector_PPD_por_tipo_de_arma[".recsPerRowPrint"] = 1;
$tdataSector_PPD_por_tipo_de_arma[".mainTableOwnerID"] = "";
$tdataSector_PPD_por_tipo_de_arma[".moveNext"] = 1;
$tdataSector_PPD_por_tipo_de_arma[".entityType"] = 2;

$tdataSector_PPD_por_tipo_de_arma[".strOriginalTableName"] = "hechosdelictivos";

	



$tdataSector_PPD_por_tipo_de_arma[".showAddInPopup"] = false;

$tdataSector_PPD_por_tipo_de_arma[".showEditInPopup"] = false;

$tdataSector_PPD_por_tipo_de_arma[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSector_PPD_por_tipo_de_arma[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSector_PPD_por_tipo_de_arma[".fieldsForRegister"] = array();

$tdataSector_PPD_por_tipo_de_arma[".listAjax"] = false;

	$tdataSector_PPD_por_tipo_de_arma[".audit"] = false;

	$tdataSector_PPD_por_tipo_de_arma[".locking"] = false;


$tdataSector_PPD_por_tipo_de_arma[".add"] = true;
$tdataSector_PPD_por_tipo_de_arma[".afterAddAction"] = 1;
$tdataSector_PPD_por_tipo_de_arma[".closePopupAfterAdd"] = 1;
$tdataSector_PPD_por_tipo_de_arma[".afterAddActionDetTable"] = "";

$tdataSector_PPD_por_tipo_de_arma[".list"] = true;



$tdataSector_PPD_por_tipo_de_arma[".reorderRecordsByHeader"] = true;



$tdataSector_PPD_por_tipo_de_arma[".inlineAdd"] = true;


$tdataSector_PPD_por_tipo_de_arma[".exportTo"] = true;

$tdataSector_PPD_por_tipo_de_arma[".printFriendly"] = true;


$tdataSector_PPD_por_tipo_de_arma[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataSector_PPD_por_tipo_de_arma[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataSector_PPD_por_tipo_de_arma[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataSector_PPD_por_tipo_de_arma[".searchSaving"] = false;
//

$tdataSector_PPD_por_tipo_de_arma[".showSearchPanel"] = true;
		$tdataSector_PPD_por_tipo_de_arma[".flexibleSearch"] = true;

$tdataSector_PPD_por_tipo_de_arma[".isUseAjaxSuggest"] = true;






$tdataSector_PPD_por_tipo_de_arma[".ajaxCodeSnippetAdded"] = false;

$tdataSector_PPD_por_tipo_de_arma[".buttonsAdded"] = false;

$tdataSector_PPD_por_tipo_de_arma[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSector_PPD_por_tipo_de_arma[".isUseTimeForSearch"] = false;





$tdataSector_PPD_por_tipo_de_arma[".allSearchFields"] = array();
$tdataSector_PPD_por_tipo_de_arma[".filterFields"] = array();
$tdataSector_PPD_por_tipo_de_arma[".requiredSearchFields"] = array();

$tdataSector_PPD_por_tipo_de_arma[".allSearchFields"][] = "aÑo_hecho";
		$tdataSector_PPD_por_tipo_de_arma[".requiredSearchFields"][] = "aÑo_hecho";
$tdataSector_PPD_por_tipo_de_arma[".allSearchFields"][] = "muni_he";
		$tdataSector_PPD_por_tipo_de_arma[".requiredSearchFields"][] = "muni_he";
$tdataSector_PPD_por_tipo_de_arma[".allSearchFields"][] = "depart_he";
		$tdataSector_PPD_por_tipo_de_arma[".requiredSearchFields"][] = "depart_he";
$tdataSector_PPD_por_tipo_de_arma[".allSearchFields"][] = "sector_ppd";
		$tdataSector_PPD_por_tipo_de_arma[".requiredSearchFields"][] = "sector_ppd";


$tdataSector_PPD_por_tipo_de_arma[".googleLikeFields"] = array();
$tdataSector_PPD_por_tipo_de_arma[".googleLikeFields"][] = "sector_ppd";

$tdataSector_PPD_por_tipo_de_arma[".panelSearchFields"] = array();
$tdataSector_PPD_por_tipo_de_arma[".searchPanelOptions"] = array();
$tdataSector_PPD_por_tipo_de_arma[".panelSearchFields"][] = "aÑo_hecho";
	$tdataSector_PPD_por_tipo_de_arma[".panelSearchFields"][] = "muni_he";
	$tdataSector_PPD_por_tipo_de_arma[".panelSearchFields"][] = "depart_he";
	$tdataSector_PPD_por_tipo_de_arma[".panelSearchFields"][] = "sector_ppd";
	
$tdataSector_PPD_por_tipo_de_arma[".advSearchFields"] = array();
$tdataSector_PPD_por_tipo_de_arma[".advSearchFields"][] = "sector_ppd";

$tdataSector_PPD_por_tipo_de_arma[".tableType"] = "report";

$tdataSector_PPD_por_tipo_de_arma[".printerPageOrientation"] = 0;
$tdataSector_PPD_por_tipo_de_arma[".nPrinterPageScale"] = 100;

$tdataSector_PPD_por_tipo_de_arma[".nPrinterSplitRecords"] = 40;

$tdataSector_PPD_por_tipo_de_arma[".nPrinterPDFSplitRecords"] = 40;



$tdataSector_PPD_por_tipo_de_arma[".geocodingEnabled"] = false;

//report settings
$tdataSector_PPD_por_tipo_de_arma[".crossTabReport"] = true;

$tdataSector_PPD_por_tipo_de_arma[".reportGroupFields"] = true;
$tdataSector_PPD_por_tipo_de_arma[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "arma_analisis";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "sector_ppd";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdataSector_PPD_por_tipo_de_arma[".reportGroupFieldsData"] = $reportGroupFields;

$tdataSector_PPD_por_tipo_de_arma[".reportHorizontalSummary"] = true;

$tdataSector_PPD_por_tipo_de_arma[".isExistTotalFields"] = true;

$tdataSector_PPD_por_tipo_de_arma[".reportVerticalSummary"] = true;



$tdataSector_PPD_por_tipo_de_arma[".repShowDet"] = true;

$tdataSector_PPD_por_tipo_de_arma[".reportLayout"] = 6;

//end of report settings




$tdataSector_PPD_por_tipo_de_arma[".listGridLayout"] = 3;

$tdataSector_PPD_por_tipo_de_arma[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY tipo_arma DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSector_PPD_por_tipo_de_arma[".strOrderBy"] = $tstrOrderBy;

$tdataSector_PPD_por_tipo_de_arma[".orderindexes"] = array();
$tdataSector_PPD_por_tipo_de_arma[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "tipo_arma");

$tdataSector_PPD_por_tipo_de_arma[".sqlHead"] = "SELECT tipo_arma,  `aÑo_hecho`,  muni_he,  depart_he,  COUNT(muni_he) AS `COUNT(muni_he)`,  arma_analisis,  sector_ppd";
$tdataSector_PPD_por_tipo_de_arma[".sqlFrom"] = "FROM hechos_delictivos1";
$tdataSector_PPD_por_tipo_de_arma[".sqlWhereExpr"] = "";
$tdataSector_PPD_por_tipo_de_arma[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSector_PPD_por_tipo_de_arma[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSector_PPD_por_tipo_de_arma[".arrGroupsPerPage"] = $arrGPP;

$tdataSector_PPD_por_tipo_de_arma[".highlightSearchResults"] = true;

$tableKeysSector_PPD_por_tipo_de_arma = array();
$tdataSector_PPD_por_tipo_de_arma[".Keys"] = $tableKeysSector_PPD_por_tipo_de_arma;

$tdataSector_PPD_por_tipo_de_arma[".listFields"] = array();
$tdataSector_PPD_por_tipo_de_arma[".listFields"][] = "tipo_arma";
$tdataSector_PPD_por_tipo_de_arma[".listFields"][] = "aÑo_hecho";
$tdataSector_PPD_por_tipo_de_arma[".listFields"][] = "muni_he";
$tdataSector_PPD_por_tipo_de_arma[".listFields"][] = "depart_he";
$tdataSector_PPD_por_tipo_de_arma[".listFields"][] = "COUNT(muni_he)";
$tdataSector_PPD_por_tipo_de_arma[".listFields"][] = "arma_analisis";
$tdataSector_PPD_por_tipo_de_arma[".listFields"][] = "sector_ppd";

$tdataSector_PPD_por_tipo_de_arma[".hideMobileList"] = array();


$tdataSector_PPD_por_tipo_de_arma[".viewFields"] = array();
$tdataSector_PPD_por_tipo_de_arma[".viewFields"][] = "tipo_arma";
$tdataSector_PPD_por_tipo_de_arma[".viewFields"][] = "aÑo_hecho";
$tdataSector_PPD_por_tipo_de_arma[".viewFields"][] = "muni_he";
$tdataSector_PPD_por_tipo_de_arma[".viewFields"][] = "depart_he";
$tdataSector_PPD_por_tipo_de_arma[".viewFields"][] = "COUNT(muni_he)";
$tdataSector_PPD_por_tipo_de_arma[".viewFields"][] = "arma_analisis";
$tdataSector_PPD_por_tipo_de_arma[".viewFields"][] = "sector_ppd";

$tdataSector_PPD_por_tipo_de_arma[".addFields"] = array();
$tdataSector_PPD_por_tipo_de_arma[".addFields"][] = "tipo_arma";
$tdataSector_PPD_por_tipo_de_arma[".addFields"][] = "aÑo_hecho";
$tdataSector_PPD_por_tipo_de_arma[".addFields"][] = "muni_he";
$tdataSector_PPD_por_tipo_de_arma[".addFields"][] = "depart_he";
$tdataSector_PPD_por_tipo_de_arma[".addFields"][] = "sector_ppd";

$tdataSector_PPD_por_tipo_de_arma[".masterListFields"] = array();
$tdataSector_PPD_por_tipo_de_arma[".masterListFields"][] = "tipo_arma";
$tdataSector_PPD_por_tipo_de_arma[".masterListFields"][] = "aÑo_hecho";
$tdataSector_PPD_por_tipo_de_arma[".masterListFields"][] = "muni_he";
$tdataSector_PPD_por_tipo_de_arma[".masterListFields"][] = "depart_he";
$tdataSector_PPD_por_tipo_de_arma[".masterListFields"][] = "COUNT(muni_he)";
$tdataSector_PPD_por_tipo_de_arma[".masterListFields"][] = "arma_analisis";
$tdataSector_PPD_por_tipo_de_arma[".masterListFields"][] = "sector_ppd";

$tdataSector_PPD_por_tipo_de_arma[".inlineAddFields"] = array();
$tdataSector_PPD_por_tipo_de_arma[".inlineAddFields"][] = "tipo_arma";
$tdataSector_PPD_por_tipo_de_arma[".inlineAddFields"][] = "aÑo_hecho";
$tdataSector_PPD_por_tipo_de_arma[".inlineAddFields"][] = "muni_he";
$tdataSector_PPD_por_tipo_de_arma[".inlineAddFields"][] = "depart_he";
$tdataSector_PPD_por_tipo_de_arma[".inlineAddFields"][] = "sector_ppd";

$tdataSector_PPD_por_tipo_de_arma[".editFields"] = array();
$tdataSector_PPD_por_tipo_de_arma[".editFields"][] = "tipo_arma";
$tdataSector_PPD_por_tipo_de_arma[".editFields"][] = "aÑo_hecho";
$tdataSector_PPD_por_tipo_de_arma[".editFields"][] = "muni_he";
$tdataSector_PPD_por_tipo_de_arma[".editFields"][] = "depart_he";
$tdataSector_PPD_por_tipo_de_arma[".editFields"][] = "sector_ppd";

$tdataSector_PPD_por_tipo_de_arma[".inlineEditFields"] = array();
$tdataSector_PPD_por_tipo_de_arma[".inlineEditFields"][] = "tipo_arma";
$tdataSector_PPD_por_tipo_de_arma[".inlineEditFields"][] = "aÑo_hecho";
$tdataSector_PPD_por_tipo_de_arma[".inlineEditFields"][] = "muni_he";
$tdataSector_PPD_por_tipo_de_arma[".inlineEditFields"][] = "depart_he";
$tdataSector_PPD_por_tipo_de_arma[".inlineEditFields"][] = "sector_ppd";

$tdataSector_PPD_por_tipo_de_arma[".updateSelectedFields"] = array();
$tdataSector_PPD_por_tipo_de_arma[".updateSelectedFields"][] = "tipo_arma";
$tdataSector_PPD_por_tipo_de_arma[".updateSelectedFields"][] = "aÑo_hecho";
$tdataSector_PPD_por_tipo_de_arma[".updateSelectedFields"][] = "muni_he";
$tdataSector_PPD_por_tipo_de_arma[".updateSelectedFields"][] = "depart_he";
$tdataSector_PPD_por_tipo_de_arma[".updateSelectedFields"][] = "sector_ppd";


$tdataSector_PPD_por_tipo_de_arma[".exportFields"] = array();
$tdataSector_PPD_por_tipo_de_arma[".exportFields"][] = "tipo_arma";
$tdataSector_PPD_por_tipo_de_arma[".exportFields"][] = "aÑo_hecho";
$tdataSector_PPD_por_tipo_de_arma[".exportFields"][] = "muni_he";
$tdataSector_PPD_por_tipo_de_arma[".exportFields"][] = "depart_he";
$tdataSector_PPD_por_tipo_de_arma[".exportFields"][] = "COUNT(muni_he)";
$tdataSector_PPD_por_tipo_de_arma[".exportFields"][] = "arma_analisis";
$tdataSector_PPD_por_tipo_de_arma[".exportFields"][] = "sector_ppd";

$tdataSector_PPD_por_tipo_de_arma[".importFields"] = array();
$tdataSector_PPD_por_tipo_de_arma[".importFields"][] = "tipo_arma";
$tdataSector_PPD_por_tipo_de_arma[".importFields"][] = "aÑo_hecho";
$tdataSector_PPD_por_tipo_de_arma[".importFields"][] = "muni_he";
$tdataSector_PPD_por_tipo_de_arma[".importFields"][] = "depart_he";
$tdataSector_PPD_por_tipo_de_arma[".importFields"][] = "COUNT(muni_he)";
$tdataSector_PPD_por_tipo_de_arma[".importFields"][] = "arma_analisis";
$tdataSector_PPD_por_tipo_de_arma[".importFields"][] = "sector_ppd";

$tdataSector_PPD_por_tipo_de_arma[".printFields"] = array();
$tdataSector_PPD_por_tipo_de_arma[".printFields"][] = "tipo_arma";
$tdataSector_PPD_por_tipo_de_arma[".printFields"][] = "aÑo_hecho";
$tdataSector_PPD_por_tipo_de_arma[".printFields"][] = "muni_he";
$tdataSector_PPD_por_tipo_de_arma[".printFields"][] = "depart_he";
$tdataSector_PPD_por_tipo_de_arma[".printFields"][] = "COUNT(muni_he)";
$tdataSector_PPD_por_tipo_de_arma[".printFields"][] = "arma_analisis";
$tdataSector_PPD_por_tipo_de_arma[".printFields"][] = "sector_ppd";

//	tipo_arma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tipo_arma";
	$fdata["GoodName"] = "tipo_arma";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_tipo_de_arma","tipo_arma");
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

		$fdata["strField"] = "tipo_arma";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_arma";

	
	
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








	$tdataSector_PPD_por_tipo_de_arma["tipo_arma"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_tipo_de_arma","a_o_hecho");
	$fdata["FieldType"] = 5;

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

		$fdata["strField"] = "aÑo_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`aÑo_hecho`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["report"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
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
							
	
	//	End validation

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD_por_tipo_de_arma["aÑo_hecho"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_tipo_de_arma","muni_he");
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

		$fdata["strField"] = "muni_he";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "muni_he";

	
	
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




	$tdataSector_PPD_por_tipo_de_arma["muni_he"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_tipo_de_arma","depart_he");
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

		$fdata["strField"] = "depart_he";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "depart_he";

	
	
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




	$tdataSector_PPD_por_tipo_de_arma["depart_he"] = $fdata;
//	COUNT(muni_he)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "COUNT(muni_he)";
	$fdata["GoodName"] = "COUNT_muni_he_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_tipo_de_arma","COUNT_muni_he_");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(muni_he)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(muni_he)";

	
	
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








	$tdataSector_PPD_por_tipo_de_arma["COUNT(muni_he)"] = $fdata;
//	arma_analisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "arma_analisis";
	$fdata["GoodName"] = "arma_analisis";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_tipo_de_arma","arma_analisis");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "arma_analisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "arma_analisis";

	
	
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








	$tdataSector_PPD_por_tipo_de_arma["arma_analisis"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Sector_PPD_por_tipo_de_arma","sector_ppd");
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

		$fdata["strField"] = "sector_ppd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sector_ppd";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "sectorppd";
	$edata["LookupConnId"] = "delitos_at_localhost";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idsectorppd";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "idsectorppd";

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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




	$tdataSector_PPD_por_tipo_de_arma["sector_ppd"] = $fdata;


$tables_data["Sector PPD por tipo de arma"]=&$tdataSector_PPD_por_tipo_de_arma;
$field_labels["Sector_PPD_por_tipo_de_arma"] = &$fieldLabelsSector_PPD_por_tipo_de_arma;
$fieldToolTips["Sector_PPD_por_tipo_de_arma"] = &$fieldToolTipsSector_PPD_por_tipo_de_arma;
$placeHolders["Sector_PPD_por_tipo_de_arma"] = &$placeHoldersSector_PPD_por_tipo_de_arma;
$page_titles["Sector_PPD_por_tipo_de_arma"] = &$pageTitlesSector_PPD_por_tipo_de_arma;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Sector PPD por tipo de arma"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Sector_PPD_por_tipo_de_arma()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tipo_arma,  `aÑo_hecho`,  muni_he,  depart_he,  COUNT(muni_he) AS `COUNT(muni_he)`,  arma_analisis,  sector_ppd";
$proto0["m_strFrom"] = "FROM hechos_delictivos1";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY tipo_arma DESC";
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
	"m_strName" => "tipo_arma",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Sector PPD por tipo de arma"
));

$proto6["m_sql"] = "tipo_arma";
$proto6["m_srcTableName"] = "Sector PPD por tipo de arma";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Sector PPD por tipo de arma"
));

$proto8["m_sql"] = "`aÑo_hecho`";
$proto8["m_srcTableName"] = "Sector PPD por tipo de arma";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Sector PPD por tipo de arma"
));

$proto10["m_sql"] = "muni_he";
$proto10["m_srcTableName"] = "Sector PPD por tipo de arma";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Sector PPD por tipo de arma"
));

$proto12["m_sql"] = "depart_he";
$proto12["m_srcTableName"] = "Sector PPD por tipo de arma";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_COUNT";
$proto15["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Sector PPD por tipo de arma"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "COUNT(muni_he)";
$proto14["m_srcTableName"] = "Sector PPD por tipo de arma";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "COUNT(muni_he)";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "arma_analisis",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Sector PPD por tipo de arma"
));

$proto17["m_sql"] = "arma_analisis";
$proto17["m_srcTableName"] = "Sector PPD por tipo de arma";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Sector PPD por tipo de arma"
));

$proto19["m_sql"] = "sector_ppd";
$proto19["m_srcTableName"] = "Sector PPD por tipo de arma";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "hechos_delictivos1";
$proto22["m_srcTableName"] = "Sector PPD por tipo de arma";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "id1";
$proto22["m_columns"][] = "id11";
$proto22["m_columns"][] = "correlativo";
$proto22["m_columns"][] = "numero";
$proto22["m_columns"][] = "id";
$proto22["m_columns"][] = "numero2";
$proto22["m_columns"][] = "lugaranalisis";
$proto22["m_columns"][] = "area";
$proto22["m_columns"][] = "delito";
$proto22["m_columns"][] = "codigo_muni";
$proto22["m_columns"][] = "depart_he";
$proto22["m_columns"][] = "muni_he";
$proto22["m_columns"][] = "dire_hecho";
$proto22["m_columns"][] = "lugar_esp";
$proto22["m_columns"][] = "forma_cono";
$proto22["m_columns"][] = "delito_espe";
$proto22["m_columns"][] = "dia_hecho";
$proto22["m_columns"][] = "hora_hecho";
$proto22["m_columns"][] = "rango_hora";
$proto22["m_columns"][] = "fecha_hecho";
$proto22["m_columns"][] = "mes_hecho";
$proto22["m_columns"][] = "aÑo_hecho";
$proto22["m_columns"][] = "edad_victima";
$proto22["m_columns"][] = "ran_eta_vic";
$proto22["m_columns"][] = "s_victima";
$proto22["m_columns"][] = "oc_victima";
$proto22["m_columns"][] = "relacion_vi_agre";
$proto22["m_columns"][] = "edad_agresor";
$proto22["m_columns"][] = "sexo_agresor";
$proto22["m_columns"][] = "ocupa_agresor";
$proto22["m_columns"][] = "movil";
$proto22["m_columns"][] = "tipo_arma";
$proto22["m_columns"][] = "canton_hecho";
$proto22["m_columns"][] = "colonia_hecho";
$proto22["m_columns"][] = "caserio_hecho";
$proto22["m_columns"][] = "calle_hecho";
$proto22["m_columns"][] = "avenida_hecho";
$proto22["m_columns"][] = "casa_hecho";
$proto22["m_columns"][] = "com_hecho";
$proto22["m_columns"][] = "barrio_hecho";
$proto22["m_columns"][] = "comp_hecho";
$proto22["m_columns"][] = "sector_ppd";
$proto22["m_columns"][] = "tipo";
$proto22["m_columns"][] = "nombre";
$proto22["m_columns"][] = "x";
$proto22["m_columns"][] = "y";
$proto22["m_columns"][] = "correlativo1";
$proto22["m_columns"][] = "mes_corre";
$proto22["m_columns"][] = "arma_analisis";
$proto22["m_columns"][] = "movil_he";
$proto22["m_columns"][] = "ocupa_analisis";
$proto22["m_columns"][] = "rel_vic_ag_anali";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "hechos_delictivos1";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "Sector PPD por tipo de arma";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "tipo_arma",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Sector PPD por tipo de arma"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Sector PPD por tipo de arma"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Sector PPD por tipo de arma"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Sector PPD por tipo de arma"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "arma_analisis",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Sector PPD por tipo de arma"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Sector PPD por tipo de arma"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "tipo_arma",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Sector PPD por tipo de arma"
));

$proto37["m_column"]=$obj;
$proto37["m_bAsc"] = 0;
$proto37["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto37);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Sector PPD por tipo de arma";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Sector_PPD_por_tipo_de_arma = createSqlQuery_Sector_PPD_por_tipo_de_arma();


	
		;

							

$tdataSector_PPD_por_tipo_de_arma[".sqlquery"] = $queryData_Sector_PPD_por_tipo_de_arma;

$tableEvents["Sector PPD por tipo de arma"] = new eventsBase;
$tdataSector_PPD_por_tipo_de_arma[".hasEvents"] = false;

?>