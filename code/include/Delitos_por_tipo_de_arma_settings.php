<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDelitos_por_tipo_de_arma = array();
	$tdataDelitos_por_tipo_de_arma[".truncateText"] = true;
	$tdataDelitos_por_tipo_de_arma[".NumberOfChars"] = 80;
	$tdataDelitos_por_tipo_de_arma[".ShortName"] = "Delitos_por_tipo_de_arma";
	$tdataDelitos_por_tipo_de_arma[".OwnerID"] = "";
	$tdataDelitos_por_tipo_de_arma[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsDelitos_por_tipo_de_arma = array();
$fieldToolTipsDelitos_por_tipo_de_arma = array();
$pageTitlesDelitos_por_tipo_de_arma = array();
$placeHoldersDelitos_por_tipo_de_arma = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsDelitos_por_tipo_de_arma["Spanish"] = array();
	$fieldToolTipsDelitos_por_tipo_de_arma["Spanish"] = array();
	$placeHoldersDelitos_por_tipo_de_arma["Spanish"] = array();
	$pageTitlesDelitos_por_tipo_de_arma["Spanish"] = array();
	$fieldLabelsDelitos_por_tipo_de_arma["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipsDelitos_por_tipo_de_arma["Spanish"]["muni_he"] = "";
	$placeHoldersDelitos_por_tipo_de_arma["Spanish"]["muni_he"] = "";
	$fieldLabelsDelitos_por_tipo_de_arma["Spanish"]["delito"] = "Delito";
	$fieldToolTipsDelitos_por_tipo_de_arma["Spanish"]["delito"] = "";
	$placeHoldersDelitos_por_tipo_de_arma["Spanish"]["delito"] = "";
	$fieldLabelsDelitos_por_tipo_de_arma["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsDelitos_por_tipo_de_arma["Spanish"]["a_o_hecho"] = "";
	$placeHoldersDelitos_por_tipo_de_arma["Spanish"]["a_o_hecho"] = "";
	$fieldLabelsDelitos_por_tipo_de_arma["Spanish"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipsDelitos_por_tipo_de_arma["Spanish"]["tipo_arma"] = "";
	$placeHoldersDelitos_por_tipo_de_arma["Spanish"]["tipo_arma"] = "";
	$fieldLabelsDelitos_por_tipo_de_arma["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipsDelitos_por_tipo_de_arma["Spanish"]["depart_he"] = "";
	$placeHoldersDelitos_por_tipo_de_arma["Spanish"]["depart_he"] = "";
	$fieldLabelsDelitos_por_tipo_de_arma["Spanish"]["COUNT_muni_he_"] = "COUNT(muni He)";
	$fieldToolTipsDelitos_por_tipo_de_arma["Spanish"]["COUNT_muni_he_"] = "";
	$placeHoldersDelitos_por_tipo_de_arma["Spanish"]["COUNT_muni_he_"] = "";
	$fieldLabelsDelitos_por_tipo_de_arma["Spanish"]["arma_analisis"] = "Arma Analisis";
	$fieldToolTipsDelitos_por_tipo_de_arma["Spanish"]["arma_analisis"] = "";
	$placeHoldersDelitos_por_tipo_de_arma["Spanish"]["arma_analisis"] = "";
	$fieldLabelsDelitos_por_tipo_de_arma["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsDelitos_por_tipo_de_arma["Spanish"]["sector_ppd"] = "";
	$placeHoldersDelitos_por_tipo_de_arma["Spanish"]["sector_ppd"] = "";
	if (count($fieldToolTipsDelitos_por_tipo_de_arma["Spanish"]))
		$tdataDelitos_por_tipo_de_arma[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDelitos_por_tipo_de_arma["English"] = array();
	$fieldToolTipsDelitos_por_tipo_de_arma["English"] = array();
	$placeHoldersDelitos_por_tipo_de_arma["English"] = array();
	$pageTitlesDelitos_por_tipo_de_arma["English"] = array();
	$fieldLabelsDelitos_por_tipo_de_arma["English"]["muni_he"] = "Muni He";
	$fieldToolTipsDelitos_por_tipo_de_arma["English"]["muni_he"] = "";
	$placeHoldersDelitos_por_tipo_de_arma["English"]["muni_he"] = "";
	$fieldLabelsDelitos_por_tipo_de_arma["English"]["delito"] = "Delito";
	$fieldToolTipsDelitos_por_tipo_de_arma["English"]["delito"] = "";
	$placeHoldersDelitos_por_tipo_de_arma["English"]["delito"] = "";
	$fieldLabelsDelitos_por_tipo_de_arma["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsDelitos_por_tipo_de_arma["English"]["a_o_hecho"] = "";
	$placeHoldersDelitos_por_tipo_de_arma["English"]["a_o_hecho"] = "";
	$fieldLabelsDelitos_por_tipo_de_arma["English"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipsDelitos_por_tipo_de_arma["English"]["tipo_arma"] = "";
	$placeHoldersDelitos_por_tipo_de_arma["English"]["tipo_arma"] = "";
	$fieldLabelsDelitos_por_tipo_de_arma["English"]["depart_he"] = "Depart He";
	$fieldToolTipsDelitos_por_tipo_de_arma["English"]["depart_he"] = "";
	$placeHoldersDelitos_por_tipo_de_arma["English"]["depart_he"] = "";
	$fieldLabelsDelitos_por_tipo_de_arma["English"]["COUNT_muni_he_"] = "COUNT(muni He)";
	$fieldToolTipsDelitos_por_tipo_de_arma["English"]["COUNT_muni_he_"] = "";
	$placeHoldersDelitos_por_tipo_de_arma["English"]["COUNT_muni_he_"] = "";
	$fieldLabelsDelitos_por_tipo_de_arma["English"]["arma_analisis"] = "Arma Analisis";
	$fieldToolTipsDelitos_por_tipo_de_arma["English"]["arma_analisis"] = "";
	$placeHoldersDelitos_por_tipo_de_arma["English"]["arma_analisis"] = "";
	$fieldLabelsDelitos_por_tipo_de_arma["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsDelitos_por_tipo_de_arma["English"]["sector_ppd"] = "";
	$placeHoldersDelitos_por_tipo_de_arma["English"]["sector_ppd"] = "";
	if (count($fieldToolTipsDelitos_por_tipo_de_arma["English"]))
		$tdataDelitos_por_tipo_de_arma[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDelitos_por_tipo_de_arma[""] = array();
	$fieldToolTipsDelitos_por_tipo_de_arma[""] = array();
	$placeHoldersDelitos_por_tipo_de_arma[""] = array();
	$pageTitlesDelitos_por_tipo_de_arma[""] = array();
	if (count($fieldToolTipsDelitos_por_tipo_de_arma[""]))
		$tdataDelitos_por_tipo_de_arma[".isUseToolTips"] = true;
}





$tdataDelitos_por_tipo_de_arma[".shortTableName"] = "Delitos_por_tipo_de_arma";
$tdataDelitos_por_tipo_de_arma[".nSecOptions"] = 0;
$tdataDelitos_por_tipo_de_arma[".recsPerRowPrint"] = 1;
$tdataDelitos_por_tipo_de_arma[".mainTableOwnerID"] = "";
$tdataDelitos_por_tipo_de_arma[".moveNext"] = 1;
$tdataDelitos_por_tipo_de_arma[".entityType"] = 2;

$tdataDelitos_por_tipo_de_arma[".strOriginalTableName"] = "hechosdelictivos";

	



$tdataDelitos_por_tipo_de_arma[".showAddInPopup"] = false;

$tdataDelitos_por_tipo_de_arma[".showEditInPopup"] = false;

$tdataDelitos_por_tipo_de_arma[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDelitos_por_tipo_de_arma[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDelitos_por_tipo_de_arma[".fieldsForRegister"] = array();

$tdataDelitos_por_tipo_de_arma[".listAjax"] = false;

	$tdataDelitos_por_tipo_de_arma[".audit"] = false;

	$tdataDelitos_por_tipo_de_arma[".locking"] = false;


$tdataDelitos_por_tipo_de_arma[".add"] = true;
$tdataDelitos_por_tipo_de_arma[".afterAddAction"] = 1;
$tdataDelitos_por_tipo_de_arma[".closePopupAfterAdd"] = 1;
$tdataDelitos_por_tipo_de_arma[".afterAddActionDetTable"] = "";

$tdataDelitos_por_tipo_de_arma[".list"] = true;



$tdataDelitos_por_tipo_de_arma[".reorderRecordsByHeader"] = true;



$tdataDelitos_por_tipo_de_arma[".inlineAdd"] = true;


$tdataDelitos_por_tipo_de_arma[".exportTo"] = true;

$tdataDelitos_por_tipo_de_arma[".printFriendly"] = true;


$tdataDelitos_por_tipo_de_arma[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataDelitos_por_tipo_de_arma[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataDelitos_por_tipo_de_arma[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataDelitos_por_tipo_de_arma[".searchSaving"] = false;
//

$tdataDelitos_por_tipo_de_arma[".showSearchPanel"] = true;
		$tdataDelitos_por_tipo_de_arma[".flexibleSearch"] = true;

$tdataDelitos_por_tipo_de_arma[".isUseAjaxSuggest"] = true;






$tdataDelitos_por_tipo_de_arma[".ajaxCodeSnippetAdded"] = false;

$tdataDelitos_por_tipo_de_arma[".buttonsAdded"] = false;

$tdataDelitos_por_tipo_de_arma[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDelitos_por_tipo_de_arma[".isUseTimeForSearch"] = false;





$tdataDelitos_por_tipo_de_arma[".allSearchFields"] = array();
$tdataDelitos_por_tipo_de_arma[".filterFields"] = array();
$tdataDelitos_por_tipo_de_arma[".requiredSearchFields"] = array();

$tdataDelitos_por_tipo_de_arma[".allSearchFields"][] = "aÑo_hecho";
		$tdataDelitos_por_tipo_de_arma[".requiredSearchFields"][] = "aÑo_hecho";
$tdataDelitos_por_tipo_de_arma[".allSearchFields"][] = "muni_he";
		$tdataDelitos_por_tipo_de_arma[".requiredSearchFields"][] = "muni_he";
$tdataDelitos_por_tipo_de_arma[".allSearchFields"][] = "depart_he";
		$tdataDelitos_por_tipo_de_arma[".requiredSearchFields"][] = "depart_he";
$tdataDelitos_por_tipo_de_arma[".allSearchFields"][] = "sector_ppd";
		$tdataDelitos_por_tipo_de_arma[".requiredSearchFields"][] = "sector_ppd";


$tdataDelitos_por_tipo_de_arma[".googleLikeFields"] = array();
$tdataDelitos_por_tipo_de_arma[".googleLikeFields"][] = "sector_ppd";

$tdataDelitos_por_tipo_de_arma[".panelSearchFields"] = array();
$tdataDelitos_por_tipo_de_arma[".searchPanelOptions"] = array();
$tdataDelitos_por_tipo_de_arma[".panelSearchFields"][] = "aÑo_hecho";
	$tdataDelitos_por_tipo_de_arma[".panelSearchFields"][] = "muni_he";
	$tdataDelitos_por_tipo_de_arma[".panelSearchFields"][] = "depart_he";
	$tdataDelitos_por_tipo_de_arma[".panelSearchFields"][] = "sector_ppd";
	
$tdataDelitos_por_tipo_de_arma[".advSearchFields"] = array();
$tdataDelitos_por_tipo_de_arma[".advSearchFields"][] = "sector_ppd";

$tdataDelitos_por_tipo_de_arma[".tableType"] = "report";

$tdataDelitos_por_tipo_de_arma[".printerPageOrientation"] = 0;
$tdataDelitos_por_tipo_de_arma[".nPrinterPageScale"] = 100;

$tdataDelitos_por_tipo_de_arma[".nPrinterSplitRecords"] = 40;

$tdataDelitos_por_tipo_de_arma[".nPrinterPDFSplitRecords"] = 40;



$tdataDelitos_por_tipo_de_arma[".geocodingEnabled"] = false;

//report settings
$tdataDelitos_por_tipo_de_arma[".crossTabReport"] = true;

$tdataDelitos_por_tipo_de_arma[".reportGroupFields"] = true;
$tdataDelitos_por_tipo_de_arma[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "arma_analisis";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "delito";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdataDelitos_por_tipo_de_arma[".reportGroupFieldsData"] = $reportGroupFields;

$tdataDelitos_por_tipo_de_arma[".reportHorizontalSummary"] = true;

$tdataDelitos_por_tipo_de_arma[".isExistTotalFields"] = true;

$tdataDelitos_por_tipo_de_arma[".reportVerticalSummary"] = true;



$tdataDelitos_por_tipo_de_arma[".repShowDet"] = true;

$tdataDelitos_por_tipo_de_arma[".reportLayout"] = 6;

//end of report settings




$tdataDelitos_por_tipo_de_arma[".listGridLayout"] = 3;

$tdataDelitos_por_tipo_de_arma[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY delito DESC, tipo_arma DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDelitos_por_tipo_de_arma[".strOrderBy"] = $tstrOrderBy;

$tdataDelitos_por_tipo_de_arma[".orderindexes"] = array();
$tdataDelitos_por_tipo_de_arma[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "delito");
$tdataDelitos_por_tipo_de_arma[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "tipo_arma");

$tdataDelitos_por_tipo_de_arma[".sqlHead"] = "SELECT delito,  tipo_arma,  `aÑo_hecho`,  muni_he,  depart_he,  COUNT(muni_he) AS `COUNT(muni_he)`,  arma_analisis,  sector_ppd";
$tdataDelitos_por_tipo_de_arma[".sqlFrom"] = "FROM hechos_delictivos1";
$tdataDelitos_por_tipo_de_arma[".sqlWhereExpr"] = "";
$tdataDelitos_por_tipo_de_arma[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDelitos_por_tipo_de_arma[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDelitos_por_tipo_de_arma[".arrGroupsPerPage"] = $arrGPP;

$tdataDelitos_por_tipo_de_arma[".highlightSearchResults"] = true;

$tableKeysDelitos_por_tipo_de_arma = array();
$tdataDelitos_por_tipo_de_arma[".Keys"] = $tableKeysDelitos_por_tipo_de_arma;

$tdataDelitos_por_tipo_de_arma[".listFields"] = array();
$tdataDelitos_por_tipo_de_arma[".listFields"][] = "delito";
$tdataDelitos_por_tipo_de_arma[".listFields"][] = "tipo_arma";
$tdataDelitos_por_tipo_de_arma[".listFields"][] = "aÑo_hecho";
$tdataDelitos_por_tipo_de_arma[".listFields"][] = "muni_he";
$tdataDelitos_por_tipo_de_arma[".listFields"][] = "depart_he";
$tdataDelitos_por_tipo_de_arma[".listFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_tipo_de_arma[".listFields"][] = "arma_analisis";
$tdataDelitos_por_tipo_de_arma[".listFields"][] = "sector_ppd";

$tdataDelitos_por_tipo_de_arma[".hideMobileList"] = array();


$tdataDelitos_por_tipo_de_arma[".viewFields"] = array();
$tdataDelitos_por_tipo_de_arma[".viewFields"][] = "delito";
$tdataDelitos_por_tipo_de_arma[".viewFields"][] = "tipo_arma";
$tdataDelitos_por_tipo_de_arma[".viewFields"][] = "aÑo_hecho";
$tdataDelitos_por_tipo_de_arma[".viewFields"][] = "muni_he";
$tdataDelitos_por_tipo_de_arma[".viewFields"][] = "depart_he";
$tdataDelitos_por_tipo_de_arma[".viewFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_tipo_de_arma[".viewFields"][] = "arma_analisis";
$tdataDelitos_por_tipo_de_arma[".viewFields"][] = "sector_ppd";

$tdataDelitos_por_tipo_de_arma[".addFields"] = array();
$tdataDelitos_por_tipo_de_arma[".addFields"][] = "delito";
$tdataDelitos_por_tipo_de_arma[".addFields"][] = "tipo_arma";
$tdataDelitos_por_tipo_de_arma[".addFields"][] = "aÑo_hecho";
$tdataDelitos_por_tipo_de_arma[".addFields"][] = "muni_he";
$tdataDelitos_por_tipo_de_arma[".addFields"][] = "depart_he";
$tdataDelitos_por_tipo_de_arma[".addFields"][] = "sector_ppd";

$tdataDelitos_por_tipo_de_arma[".masterListFields"] = array();
$tdataDelitos_por_tipo_de_arma[".masterListFields"][] = "delito";
$tdataDelitos_por_tipo_de_arma[".masterListFields"][] = "tipo_arma";
$tdataDelitos_por_tipo_de_arma[".masterListFields"][] = "aÑo_hecho";
$tdataDelitos_por_tipo_de_arma[".masterListFields"][] = "muni_he";
$tdataDelitos_por_tipo_de_arma[".masterListFields"][] = "depart_he";
$tdataDelitos_por_tipo_de_arma[".masterListFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_tipo_de_arma[".masterListFields"][] = "arma_analisis";
$tdataDelitos_por_tipo_de_arma[".masterListFields"][] = "sector_ppd";

$tdataDelitos_por_tipo_de_arma[".inlineAddFields"] = array();
$tdataDelitos_por_tipo_de_arma[".inlineAddFields"][] = "delito";
$tdataDelitos_por_tipo_de_arma[".inlineAddFields"][] = "tipo_arma";
$tdataDelitos_por_tipo_de_arma[".inlineAddFields"][] = "aÑo_hecho";
$tdataDelitos_por_tipo_de_arma[".inlineAddFields"][] = "muni_he";
$tdataDelitos_por_tipo_de_arma[".inlineAddFields"][] = "depart_he";
$tdataDelitos_por_tipo_de_arma[".inlineAddFields"][] = "sector_ppd";

$tdataDelitos_por_tipo_de_arma[".editFields"] = array();
$tdataDelitos_por_tipo_de_arma[".editFields"][] = "delito";
$tdataDelitos_por_tipo_de_arma[".editFields"][] = "tipo_arma";
$tdataDelitos_por_tipo_de_arma[".editFields"][] = "aÑo_hecho";
$tdataDelitos_por_tipo_de_arma[".editFields"][] = "muni_he";
$tdataDelitos_por_tipo_de_arma[".editFields"][] = "depart_he";
$tdataDelitos_por_tipo_de_arma[".editFields"][] = "sector_ppd";

$tdataDelitos_por_tipo_de_arma[".inlineEditFields"] = array();
$tdataDelitos_por_tipo_de_arma[".inlineEditFields"][] = "delito";
$tdataDelitos_por_tipo_de_arma[".inlineEditFields"][] = "tipo_arma";
$tdataDelitos_por_tipo_de_arma[".inlineEditFields"][] = "aÑo_hecho";
$tdataDelitos_por_tipo_de_arma[".inlineEditFields"][] = "muni_he";
$tdataDelitos_por_tipo_de_arma[".inlineEditFields"][] = "depart_he";
$tdataDelitos_por_tipo_de_arma[".inlineEditFields"][] = "sector_ppd";

$tdataDelitos_por_tipo_de_arma[".updateSelectedFields"] = array();
$tdataDelitos_por_tipo_de_arma[".updateSelectedFields"][] = "delito";
$tdataDelitos_por_tipo_de_arma[".updateSelectedFields"][] = "tipo_arma";
$tdataDelitos_por_tipo_de_arma[".updateSelectedFields"][] = "aÑo_hecho";
$tdataDelitos_por_tipo_de_arma[".updateSelectedFields"][] = "muni_he";
$tdataDelitos_por_tipo_de_arma[".updateSelectedFields"][] = "depart_he";
$tdataDelitos_por_tipo_de_arma[".updateSelectedFields"][] = "sector_ppd";


$tdataDelitos_por_tipo_de_arma[".exportFields"] = array();
$tdataDelitos_por_tipo_de_arma[".exportFields"][] = "delito";
$tdataDelitos_por_tipo_de_arma[".exportFields"][] = "tipo_arma";
$tdataDelitos_por_tipo_de_arma[".exportFields"][] = "aÑo_hecho";
$tdataDelitos_por_tipo_de_arma[".exportFields"][] = "muni_he";
$tdataDelitos_por_tipo_de_arma[".exportFields"][] = "depart_he";
$tdataDelitos_por_tipo_de_arma[".exportFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_tipo_de_arma[".exportFields"][] = "arma_analisis";
$tdataDelitos_por_tipo_de_arma[".exportFields"][] = "sector_ppd";

$tdataDelitos_por_tipo_de_arma[".importFields"] = array();
$tdataDelitos_por_tipo_de_arma[".importFields"][] = "delito";
$tdataDelitos_por_tipo_de_arma[".importFields"][] = "tipo_arma";
$tdataDelitos_por_tipo_de_arma[".importFields"][] = "aÑo_hecho";
$tdataDelitos_por_tipo_de_arma[".importFields"][] = "muni_he";
$tdataDelitos_por_tipo_de_arma[".importFields"][] = "depart_he";
$tdataDelitos_por_tipo_de_arma[".importFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_tipo_de_arma[".importFields"][] = "arma_analisis";
$tdataDelitos_por_tipo_de_arma[".importFields"][] = "sector_ppd";

$tdataDelitos_por_tipo_de_arma[".printFields"] = array();
$tdataDelitos_por_tipo_de_arma[".printFields"][] = "delito";
$tdataDelitos_por_tipo_de_arma[".printFields"][] = "tipo_arma";
$tdataDelitos_por_tipo_de_arma[".printFields"][] = "aÑo_hecho";
$tdataDelitos_por_tipo_de_arma[".printFields"][] = "muni_he";
$tdataDelitos_por_tipo_de_arma[".printFields"][] = "depart_he";
$tdataDelitos_por_tipo_de_arma[".printFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_tipo_de_arma[".printFields"][] = "arma_analisis";
$tdataDelitos_por_tipo_de_arma[".printFields"][] = "sector_ppd";

//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_tipo_de_arma","delito");
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

		$fdata["strField"] = "delito";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delito";

	
	
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








	$tdataDelitos_por_tipo_de_arma["delito"] = $fdata;
//	tipo_arma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipo_arma";
	$fdata["GoodName"] = "tipo_arma";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_tipo_de_arma","tipo_arma");
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








	$tdataDelitos_por_tipo_de_arma["tipo_arma"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_tipo_de_arma","a_o_hecho");
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




	$tdataDelitos_por_tipo_de_arma["aÑo_hecho"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_tipo_de_arma","muni_he");
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




	$tdataDelitos_por_tipo_de_arma["muni_he"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_tipo_de_arma","depart_he");
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




	$tdataDelitos_por_tipo_de_arma["depart_he"] = $fdata;
//	COUNT(muni_he)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "COUNT(muni_he)";
	$fdata["GoodName"] = "COUNT_muni_he_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Delitos_por_tipo_de_arma","COUNT_muni_he_");
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








	$tdataDelitos_por_tipo_de_arma["COUNT(muni_he)"] = $fdata;
//	arma_analisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "arma_analisis";
	$fdata["GoodName"] = "arma_analisis";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_tipo_de_arma","arma_analisis");
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








	$tdataDelitos_por_tipo_de_arma["arma_analisis"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_tipo_de_arma","sector_ppd");
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




	$tdataDelitos_por_tipo_de_arma["sector_ppd"] = $fdata;


$tables_data["Delitos por tipo de arma"]=&$tdataDelitos_por_tipo_de_arma;
$field_labels["Delitos_por_tipo_de_arma"] = &$fieldLabelsDelitos_por_tipo_de_arma;
$fieldToolTips["Delitos_por_tipo_de_arma"] = &$fieldToolTipsDelitos_por_tipo_de_arma;
$placeHolders["Delitos_por_tipo_de_arma"] = &$placeHoldersDelitos_por_tipo_de_arma;
$page_titles["Delitos_por_tipo_de_arma"] = &$pageTitlesDelitos_por_tipo_de_arma;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Delitos por tipo de arma"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Delitos_por_tipo_de_arma()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "delito,  tipo_arma,  `aÑo_hecho`,  muni_he,  depart_he,  COUNT(muni_he) AS `COUNT(muni_he)`,  arma_analisis,  sector_ppd";
$proto0["m_strFrom"] = "FROM hechos_delictivos1";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY delito DESC, tipo_arma DESC";
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
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por tipo de arma"
));

$proto6["m_sql"] = "delito";
$proto6["m_srcTableName"] = "Delitos por tipo de arma";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_arma",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por tipo de arma"
));

$proto8["m_sql"] = "tipo_arma";
$proto8["m_srcTableName"] = "Delitos por tipo de arma";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por tipo de arma"
));

$proto10["m_sql"] = "`aÑo_hecho`";
$proto10["m_srcTableName"] = "Delitos por tipo de arma";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por tipo de arma"
));

$proto12["m_sql"] = "muni_he";
$proto12["m_srcTableName"] = "Delitos por tipo de arma";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por tipo de arma"
));

$proto14["m_sql"] = "depart_he";
$proto14["m_srcTableName"] = "Delitos por tipo de arma";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_COUNT";
$proto17["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por tipo de arma"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "COUNT(muni_he)";
$proto16["m_srcTableName"] = "Delitos por tipo de arma";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "COUNT(muni_he)";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "arma_analisis",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por tipo de arma"
));

$proto19["m_sql"] = "arma_analisis";
$proto19["m_srcTableName"] = "Delitos por tipo de arma";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por tipo de arma"
));

$proto21["m_sql"] = "sector_ppd";
$proto21["m_srcTableName"] = "Delitos por tipo de arma";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "hechos_delictivos1";
$proto24["m_srcTableName"] = "Delitos por tipo de arma";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "id1";
$proto24["m_columns"][] = "id11";
$proto24["m_columns"][] = "correlativo";
$proto24["m_columns"][] = "numero";
$proto24["m_columns"][] = "id";
$proto24["m_columns"][] = "numero2";
$proto24["m_columns"][] = "lugaranalisis";
$proto24["m_columns"][] = "area";
$proto24["m_columns"][] = "delito";
$proto24["m_columns"][] = "codigo_muni";
$proto24["m_columns"][] = "depart_he";
$proto24["m_columns"][] = "muni_he";
$proto24["m_columns"][] = "dire_hecho";
$proto24["m_columns"][] = "lugar_esp";
$proto24["m_columns"][] = "forma_cono";
$proto24["m_columns"][] = "delito_espe";
$proto24["m_columns"][] = "dia_hecho";
$proto24["m_columns"][] = "hora_hecho";
$proto24["m_columns"][] = "rango_hora";
$proto24["m_columns"][] = "fecha_hecho";
$proto24["m_columns"][] = "mes_hecho";
$proto24["m_columns"][] = "aÑo_hecho";
$proto24["m_columns"][] = "edad_victima";
$proto24["m_columns"][] = "ran_eta_vic";
$proto24["m_columns"][] = "s_victima";
$proto24["m_columns"][] = "oc_victima";
$proto24["m_columns"][] = "relacion_vi_agre";
$proto24["m_columns"][] = "edad_agresor";
$proto24["m_columns"][] = "sexo_agresor";
$proto24["m_columns"][] = "ocupa_agresor";
$proto24["m_columns"][] = "movil";
$proto24["m_columns"][] = "tipo_arma";
$proto24["m_columns"][] = "canton_hecho";
$proto24["m_columns"][] = "colonia_hecho";
$proto24["m_columns"][] = "caserio_hecho";
$proto24["m_columns"][] = "calle_hecho";
$proto24["m_columns"][] = "avenida_hecho";
$proto24["m_columns"][] = "casa_hecho";
$proto24["m_columns"][] = "com_hecho";
$proto24["m_columns"][] = "barrio_hecho";
$proto24["m_columns"][] = "comp_hecho";
$proto24["m_columns"][] = "sector_ppd";
$proto24["m_columns"][] = "tipo";
$proto24["m_columns"][] = "nombre";
$proto24["m_columns"][] = "x";
$proto24["m_columns"][] = "y";
$proto24["m_columns"][] = "correlativo1";
$proto24["m_columns"][] = "mes_corre";
$proto24["m_columns"][] = "arma_analisis";
$proto24["m_columns"][] = "movil_he";
$proto24["m_columns"][] = "ocupa_analisis";
$proto24["m_columns"][] = "rel_vic_ag_anali";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "hechos_delictivos1";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "Delitos por tipo de arma";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
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
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por tipo de arma"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "tipo_arma",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por tipo de arma"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por tipo de arma"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por tipo de arma"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por tipo de arma"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "arma_analisis",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por tipo de arma"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por tipo de arma"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por tipo de arma"
));

$proto41["m_column"]=$obj;
$proto41["m_bAsc"] = 0;
$proto41["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto41);

$proto0["m_orderby"][]=$obj;					
												$proto43=array();
						$obj = new SQLField(array(
	"m_strName" => "tipo_arma",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por tipo de arma"
));

$proto43["m_column"]=$obj;
$proto43["m_bAsc"] = 0;
$proto43["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto43);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Delitos por tipo de arma";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Delitos_por_tipo_de_arma = createSqlQuery_Delitos_por_tipo_de_arma();


	
		;

								

$tdataDelitos_por_tipo_de_arma[".sqlquery"] = $queryData_Delitos_por_tipo_de_arma;

$tableEvents["Delitos por tipo de arma"] = new eventsBase;
$tdataDelitos_por_tipo_de_arma[".hasEvents"] = false;

?>