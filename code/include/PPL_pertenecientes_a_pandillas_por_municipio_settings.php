<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPPL_pertenecientes_a_pandillas_por_municipio = array();
	$tdataPPL_pertenecientes_a_pandillas_por_municipio[".truncateText"] = true;
	$tdataPPL_pertenecientes_a_pandillas_por_municipio[".NumberOfChars"] = 80;
	$tdataPPL_pertenecientes_a_pandillas_por_municipio[".ShortName"] = "PPL_pertenecientes_a_pandillas_por_municipio";
	$tdataPPL_pertenecientes_a_pandillas_por_municipio[".OwnerID"] = "";
	$tdataPPL_pertenecientes_a_pandillas_por_municipio[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsPPL_pertenecientes_a_pandillas_por_municipio = array();
$fieldToolTipsPPL_pertenecientes_a_pandillas_por_municipio = array();
$pageTitlesPPL_pertenecientes_a_pandillas_por_municipio = array();
$placeHoldersPPL_pertenecientes_a_pandillas_por_municipio = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPPL_pertenecientes_a_pandillas_por_municipio["Spanish"] = array();
	$fieldToolTipsPPL_pertenecientes_a_pandillas_por_municipio["Spanish"] = array();
	$placeHoldersPPL_pertenecientes_a_pandillas_por_municipio["Spanish"] = array();
	$pageTitlesPPL_pertenecientes_a_pandillas_por_municipio["Spanish"] = array();
	$fieldLabelsPPL_pertenecientes_a_pandillas_por_municipio["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsPPL_pertenecientes_a_pandillas_por_municipio["Spanish"]["sector_ppd"] = "";
	$placeHoldersPPL_pertenecientes_a_pandillas_por_municipio["Spanish"]["sector_ppd"] = "";
	$fieldLabelsPPL_pertenecientes_a_pandillas_por_municipio["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPPL_pertenecientes_a_pandillas_por_municipio["Spanish"]["mun_resid"] = "";
	$placeHoldersPPL_pertenecientes_a_pandillas_por_municipio["Spanish"]["mun_resid"] = "";
	$fieldLabelsPPL_pertenecientes_a_pandillas_por_municipio["Spanish"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsPPL_pertenecientes_a_pandillas_por_municipio["Spanish"]["COUNT_mun_resid_"] = "";
	$placeHoldersPPL_pertenecientes_a_pandillas_por_municipio["Spanish"]["COUNT_mun_resid_"] = "";
	$fieldLabelsPPL_pertenecientes_a_pandillas_por_municipio["Spanish"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipsPPL_pertenecientes_a_pandillas_por_municipio["Spanish"]["org_delictiva"] = "";
	$placeHoldersPPL_pertenecientes_a_pandillas_por_municipio["Spanish"]["org_delictiva"] = "";
	$fieldLabelsPPL_pertenecientes_a_pandillas_por_municipio["Spanish"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsPPL_pertenecientes_a_pandillas_por_municipio["Spanish"]["tipo_mara"] = "";
	$placeHoldersPPL_pertenecientes_a_pandillas_por_municipio["Spanish"]["tipo_mara"] = "";
	$fieldLabelsPPL_pertenecientes_a_pandillas_por_municipio["Spanish"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPPL_pertenecientes_a_pandillas_por_municipio["Spanish"]["depart_resid"] = "";
	$placeHoldersPPL_pertenecientes_a_pandillas_por_municipio["Spanish"]["depart_resid"] = "";
	if (count($fieldToolTipsPPL_pertenecientes_a_pandillas_por_municipio["Spanish"]))
		$tdataPPL_pertenecientes_a_pandillas_por_municipio[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPPL_pertenecientes_a_pandillas_por_municipio["English"] = array();
	$fieldToolTipsPPL_pertenecientes_a_pandillas_por_municipio["English"] = array();
	$placeHoldersPPL_pertenecientes_a_pandillas_por_municipio["English"] = array();
	$pageTitlesPPL_pertenecientes_a_pandillas_por_municipio["English"] = array();
	$fieldLabelsPPL_pertenecientes_a_pandillas_por_municipio["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsPPL_pertenecientes_a_pandillas_por_municipio["English"]["sector_ppd"] = "";
	$placeHoldersPPL_pertenecientes_a_pandillas_por_municipio["English"]["sector_ppd"] = "";
	$fieldLabelsPPL_pertenecientes_a_pandillas_por_municipio["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPPL_pertenecientes_a_pandillas_por_municipio["English"]["mun_resid"] = "";
	$placeHoldersPPL_pertenecientes_a_pandillas_por_municipio["English"]["mun_resid"] = "";
	$fieldLabelsPPL_pertenecientes_a_pandillas_por_municipio["English"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsPPL_pertenecientes_a_pandillas_por_municipio["English"]["COUNT_mun_resid_"] = "";
	$placeHoldersPPL_pertenecientes_a_pandillas_por_municipio["English"]["COUNT_mun_resid_"] = "";
	$fieldLabelsPPL_pertenecientes_a_pandillas_por_municipio["English"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipsPPL_pertenecientes_a_pandillas_por_municipio["English"]["org_delictiva"] = "";
	$placeHoldersPPL_pertenecientes_a_pandillas_por_municipio["English"]["org_delictiva"] = "";
	$fieldLabelsPPL_pertenecientes_a_pandillas_por_municipio["English"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsPPL_pertenecientes_a_pandillas_por_municipio["English"]["tipo_mara"] = "";
	$placeHoldersPPL_pertenecientes_a_pandillas_por_municipio["English"]["tipo_mara"] = "";
	$fieldLabelsPPL_pertenecientes_a_pandillas_por_municipio["English"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsPPL_pertenecientes_a_pandillas_por_municipio["English"]["depart_resid"] = "";
	$placeHoldersPPL_pertenecientes_a_pandillas_por_municipio["English"]["depart_resid"] = "";
	if (count($fieldToolTipsPPL_pertenecientes_a_pandillas_por_municipio["English"]))
		$tdataPPL_pertenecientes_a_pandillas_por_municipio[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPPL_pertenecientes_a_pandillas_por_municipio[""] = array();
	$fieldToolTipsPPL_pertenecientes_a_pandillas_por_municipio[""] = array();
	$placeHoldersPPL_pertenecientes_a_pandillas_por_municipio[""] = array();
	$pageTitlesPPL_pertenecientes_a_pandillas_por_municipio[""] = array();
	if (count($fieldToolTipsPPL_pertenecientes_a_pandillas_por_municipio[""]))
		$tdataPPL_pertenecientes_a_pandillas_por_municipio[".isUseToolTips"] = true;
}





$tdataPPL_pertenecientes_a_pandillas_por_municipio[".shortTableName"] = "PPL_pertenecientes_a_pandillas_por_municipio";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".nSecOptions"] = 0;
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".recsPerRowPrint"] = 1;
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".mainTableOwnerID"] = "";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".moveNext"] = 1;
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".entityType"] = 2;

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".strOriginalTableName"] = "carcel";

	



$tdataPPL_pertenecientes_a_pandillas_por_municipio[".showAddInPopup"] = false;

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".showEditInPopup"] = false;

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPPL_pertenecientes_a_pandillas_por_municipio[".fieldsForRegister"] = array();

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".listAjax"] = false;

	$tdataPPL_pertenecientes_a_pandillas_por_municipio[".audit"] = false;

	$tdataPPL_pertenecientes_a_pandillas_por_municipio[".locking"] = false;



$tdataPPL_pertenecientes_a_pandillas_por_municipio[".list"] = true;



$tdataPPL_pertenecientes_a_pandillas_por_municipio[".reorderRecordsByHeader"] = true;





$tdataPPL_pertenecientes_a_pandillas_por_municipio[".exportTo"] = true;

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".printFriendly"] = true;


$tdataPPL_pertenecientes_a_pandillas_por_municipio[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".searchSaving"] = false;
//

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".showSearchPanel"] = true;
		$tdataPPL_pertenecientes_a_pandillas_por_municipio[".flexibleSearch"] = true;

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".isUseAjaxSuggest"] = true;






$tdataPPL_pertenecientes_a_pandillas_por_municipio[".ajaxCodeSnippetAdded"] = false;

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".buttonsAdded"] = false;

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".isUseTimeForSearch"] = false;





$tdataPPL_pertenecientes_a_pandillas_por_municipio[".allSearchFields"] = array();
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".filterFields"] = array();
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".requiredSearchFields"] = array();

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".allSearchFields"][] = "mun_resid";
	$tdataPPL_pertenecientes_a_pandillas_por_municipio[".allSearchFields"][] = "org_delictiva";
	$tdataPPL_pertenecientes_a_pandillas_por_municipio[".allSearchFields"][] = "tipo_mara";
	$tdataPPL_pertenecientes_a_pandillas_por_municipio[".allSearchFields"][] = "sector_ppd";
	$tdataPPL_pertenecientes_a_pandillas_por_municipio[".allSearchFields"][] = "depart_resid";
	$tdataPPL_pertenecientes_a_pandillas_por_municipio[".allSearchFields"][] = "COUNT(mun_resid)";
	

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".googleLikeFields"] = array();
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".googleLikeFields"][] = "mun_resid";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".googleLikeFields"][] = "depart_resid";


$tdataPPL_pertenecientes_a_pandillas_por_municipio[".advSearchFields"] = array();
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".advSearchFields"][] = "mun_resid";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".advSearchFields"][] = "depart_resid";

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".tableType"] = "report";

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".printerPageOrientation"] = 0;
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".nPrinterPageScale"] = 100;

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".nPrinterSplitRecords"] = 40;

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".nPrinterPDFSplitRecords"] = 40;



$tdataPPL_pertenecientes_a_pandillas_por_municipio[".geocodingEnabled"] = false;

//report settings
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".crossTabReport"] = true;

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".reportGroupFields"] = true;
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".pageSize"] = 5;
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".showGroupSummaryCount"] = true;
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
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".reportGroupFieldsData"] = $reportGroupFields;

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".reportHorizontalSummary"] = true;

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".isExistTotalFields"] = true;

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".reportVerticalSummary"] = true;


$tdataPPL_pertenecientes_a_pandillas_por_municipio[".reportGlobalSummary"] = true;

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".repShowDet"] = true;

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".reportLayout"] = 0;

//end of report settings




$tdataPPL_pertenecientes_a_pandillas_por_municipio[".listGridLayout"] = 3;

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".isDisplayLoading"] = true;




// view page pdf

// print page pdf
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".isPrinterPagePDF"] = true;
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".nPrinterPagePDFScale"] = 100;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".strOrderBy"] = $tstrOrderBy;

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".orderindexes"] = array();

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".sqlHead"] = "SELECT mun_resid,  org_delictiva,  tipo_mara,  sector_ppd,  depart_resid,  COUNT(mun_resid) AS `COUNT(mun_resid)`";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".sqlFrom"] = "FROM carcel";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".sqlWhereExpr"] = "";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".arrGroupsPerPage"] = $arrGPP;

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".highlightSearchResults"] = true;

$tableKeysPPL_pertenecientes_a_pandillas_por_municipio = array();
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".Keys"] = $tableKeysPPL_pertenecientes_a_pandillas_por_municipio;

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".listFields"] = array();
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".listFields"][] = "mun_resid";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".listFields"][] = "org_delictiva";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".listFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".listFields"][] = "sector_ppd";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".listFields"][] = "depart_resid";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".listFields"][] = "COUNT(mun_resid)";

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".hideMobileList"] = array();


$tdataPPL_pertenecientes_a_pandillas_por_municipio[".viewFields"] = array();
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".viewFields"][] = "mun_resid";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".viewFields"][] = "org_delictiva";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".viewFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".viewFields"][] = "sector_ppd";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".viewFields"][] = "depart_resid";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".viewFields"][] = "COUNT(mun_resid)";

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".addFields"] = array();
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".addFields"][] = "mun_resid";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".addFields"][] = "org_delictiva";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".addFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".addFields"][] = "sector_ppd";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".addFields"][] = "depart_resid";

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".masterListFields"] = array();
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".masterListFields"][] = "mun_resid";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".masterListFields"][] = "org_delictiva";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".masterListFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".masterListFields"][] = "sector_ppd";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".masterListFields"][] = "depart_resid";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".masterListFields"][] = "COUNT(mun_resid)";

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".inlineAddFields"] = array();
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".inlineAddFields"][] = "mun_resid";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".inlineAddFields"][] = "org_delictiva";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".inlineAddFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".inlineAddFields"][] = "sector_ppd";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".inlineAddFields"][] = "depart_resid";

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".editFields"] = array();
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".editFields"][] = "mun_resid";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".editFields"][] = "org_delictiva";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".editFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".editFields"][] = "sector_ppd";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".editFields"][] = "depart_resid";

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".inlineEditFields"] = array();
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".inlineEditFields"][] = "mun_resid";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".inlineEditFields"][] = "org_delictiva";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".inlineEditFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".inlineEditFields"][] = "sector_ppd";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".inlineEditFields"][] = "depart_resid";

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".updateSelectedFields"] = array();
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".updateSelectedFields"][] = "mun_resid";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".updateSelectedFields"][] = "org_delictiva";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".updateSelectedFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".updateSelectedFields"][] = "sector_ppd";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".updateSelectedFields"][] = "depart_resid";


$tdataPPL_pertenecientes_a_pandillas_por_municipio[".exportFields"] = array();
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".exportFields"][] = "mun_resid";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".exportFields"][] = "org_delictiva";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".exportFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".exportFields"][] = "sector_ppd";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".exportFields"][] = "depart_resid";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".exportFields"][] = "COUNT(mun_resid)";

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".importFields"] = array();
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".importFields"][] = "mun_resid";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".importFields"][] = "org_delictiva";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".importFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".importFields"][] = "sector_ppd";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".importFields"][] = "depart_resid";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".importFields"][] = "COUNT(mun_resid)";

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".printFields"] = array();
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".printFields"][] = "mun_resid";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".printFields"][] = "org_delictiva";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".printFields"][] = "tipo_mara";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".printFields"][] = "sector_ppd";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".printFields"][] = "depart_resid";
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".printFields"][] = "COUNT(mun_resid)";

//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_pertenecientes_a_pandillas_por_municipio","mun_resid");
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

	$fdata["ViewFormats"]["dashboard"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPPL_pertenecientes_a_pandillas_por_municipio["mun_resid"] = $fdata;
//	org_delictiva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "org_delictiva";
	$fdata["GoodName"] = "org_delictiva";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_pertenecientes_a_pandillas_por_municipio","org_delictiva");
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

		$fdata["strField"] = "org_delictiva";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "org_delictiva";

	
	
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




	$tdataPPL_pertenecientes_a_pandillas_por_municipio["org_delictiva"] = $fdata;
//	tipo_mara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tipo_mara";
	$fdata["GoodName"] = "tipo_mara";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_pertenecientes_a_pandillas_por_municipio","tipo_mara");
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
	$fdata["FullName"] = "tipo_mara";

	
	
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




	$tdataPPL_pertenecientes_a_pandillas_por_municipio["tipo_mara"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_pertenecientes_a_pandillas_por_municipio","sector_ppd");
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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

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




	$tdataPPL_pertenecientes_a_pandillas_por_municipio["sector_ppd"] = $fdata;
//	depart_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "depart_resid";
	$fdata["GoodName"] = "depart_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_pertenecientes_a_pandillas_por_municipio","depart_resid");
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




	$tdataPPL_pertenecientes_a_pandillas_por_municipio["depart_resid"] = $fdata;
//	COUNT(mun_resid)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "COUNT(mun_resid)";
	$fdata["GoodName"] = "COUNT_mun_resid_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PPL_pertenecientes_a_pandillas_por_municipio","COUNT_mun_resid_");
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
	$fdata["FullName"] = "COUNT(mun_resid)";

	
	
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




	$tdataPPL_pertenecientes_a_pandillas_por_municipio["COUNT(mun_resid)"] = $fdata;


$tables_data["PPL pertenecientes a pandillas por municipio"]=&$tdataPPL_pertenecientes_a_pandillas_por_municipio;
$field_labels["PPL_pertenecientes_a_pandillas_por_municipio"] = &$fieldLabelsPPL_pertenecientes_a_pandillas_por_municipio;
$fieldToolTips["PPL_pertenecientes_a_pandillas_por_municipio"] = &$fieldToolTipsPPL_pertenecientes_a_pandillas_por_municipio;
$placeHolders["PPL_pertenecientes_a_pandillas_por_municipio"] = &$placeHoldersPPL_pertenecientes_a_pandillas_por_municipio;
$page_titles["PPL_pertenecientes_a_pandillas_por_municipio"] = &$pageTitlesPPL_pertenecientes_a_pandillas_por_municipio;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["PPL pertenecientes a pandillas por municipio"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PPL_pertenecientes_a_pandillas_por_municipio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "mun_resid,  org_delictiva,  tipo_mara,  sector_ppd,  depart_resid,  COUNT(mun_resid) AS `COUNT(mun_resid)`";
$proto0["m_strFrom"] = "FROM carcel";
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
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL pertenecientes a pandillas por municipio"
));

$proto6["m_sql"] = "mun_resid";
$proto6["m_srcTableName"] = "PPL pertenecientes a pandillas por municipio";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL pertenecientes a pandillas por municipio"
));

$proto8["m_sql"] = "org_delictiva";
$proto8["m_srcTableName"] = "PPL pertenecientes a pandillas por municipio";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL pertenecientes a pandillas por municipio"
));

$proto10["m_sql"] = "tipo_mara";
$proto10["m_srcTableName"] = "PPL pertenecientes a pandillas por municipio";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL pertenecientes a pandillas por municipio"
));

$proto12["m_sql"] = "sector_ppd";
$proto12["m_srcTableName"] = "PPL pertenecientes a pandillas por municipio";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL pertenecientes a pandillas por municipio"
));

$proto14["m_sql"] = "depart_resid";
$proto14["m_srcTableName"] = "PPL pertenecientes a pandillas por municipio";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_COUNT";
$proto17["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL pertenecientes a pandillas por municipio"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "COUNT(mun_resid)";
$proto16["m_srcTableName"] = "PPL pertenecientes a pandillas por municipio";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "COUNT(mun_resid)";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "carcel";
$proto20["m_srcTableName"] = "PPL pertenecientes a pandillas por municipio";
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
$proto19["m_sql"] = "carcel";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "PPL pertenecientes a pandillas por municipio";
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
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL pertenecientes a pandillas por municipio"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL pertenecientes a pandillas por municipio"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL pertenecientes a pandillas por municipio"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL pertenecientes a pandillas por municipio"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL pertenecientes a pandillas por municipio"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PPL pertenecientes a pandillas por municipio";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PPL_pertenecientes_a_pandillas_por_municipio = createSqlQuery_PPL_pertenecientes_a_pandillas_por_municipio();


	
		;

						

$tdataPPL_pertenecientes_a_pandillas_por_municipio[".sqlquery"] = $queryData_PPL_pertenecientes_a_pandillas_por_municipio;

$tableEvents["PPL pertenecientes a pandillas por municipio"] = new eventsBase;
$tdataPPL_pertenecientes_a_pandillas_por_municipio[".hasEvents"] = false;

?>