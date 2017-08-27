<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDelitos_por_mes_del_hecho = array();
	$tdataDelitos_por_mes_del_hecho[".truncateText"] = true;
	$tdataDelitos_por_mes_del_hecho[".NumberOfChars"] = 80;
	$tdataDelitos_por_mes_del_hecho[".ShortName"] = "Delitos_por_mes_del_hecho";
	$tdataDelitos_por_mes_del_hecho[".OwnerID"] = "";
	$tdataDelitos_por_mes_del_hecho[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsDelitos_por_mes_del_hecho = array();
$fieldToolTipsDelitos_por_mes_del_hecho = array();
$pageTitlesDelitos_por_mes_del_hecho = array();
$placeHoldersDelitos_por_mes_del_hecho = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsDelitos_por_mes_del_hecho["Spanish"] = array();
	$fieldToolTipsDelitos_por_mes_del_hecho["Spanish"] = array();
	$placeHoldersDelitos_por_mes_del_hecho["Spanish"] = array();
	$pageTitlesDelitos_por_mes_del_hecho["Spanish"] = array();
	$fieldLabelsDelitos_por_mes_del_hecho["Spanish"]["delito"] = "Delito";
	$fieldToolTipsDelitos_por_mes_del_hecho["Spanish"]["delito"] = "";
	$placeHoldersDelitos_por_mes_del_hecho["Spanish"]["delito"] = "";
	$fieldLabelsDelitos_por_mes_del_hecho["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipsDelitos_por_mes_del_hecho["Spanish"]["muni_he"] = "";
	$placeHoldersDelitos_por_mes_del_hecho["Spanish"]["muni_he"] = "";
	$fieldLabelsDelitos_por_mes_del_hecho["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsDelitos_por_mes_del_hecho["Spanish"]["sector_ppd"] = "";
	$placeHoldersDelitos_por_mes_del_hecho["Spanish"]["sector_ppd"] = "";
	$fieldLabelsDelitos_por_mes_del_hecho["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipsDelitos_por_mes_del_hecho["Spanish"]["depart_he"] = "";
	$placeHoldersDelitos_por_mes_del_hecho["Spanish"]["depart_he"] = "";
	$fieldLabelsDelitos_por_mes_del_hecho["Spanish"]["mes_corre"] = "Mes Corre";
	$fieldToolTipsDelitos_por_mes_del_hecho["Spanish"]["mes_corre"] = "";
	$placeHoldersDelitos_por_mes_del_hecho["Spanish"]["mes_corre"] = "";
	$fieldLabelsDelitos_por_mes_del_hecho["Spanish"]["COUNT_muni_he_"] = "COUNT(muni He)";
	$fieldToolTipsDelitos_por_mes_del_hecho["Spanish"]["COUNT_muni_he_"] = "";
	$placeHoldersDelitos_por_mes_del_hecho["Spanish"]["COUNT_muni_he_"] = "";
	$fieldLabelsDelitos_por_mes_del_hecho["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsDelitos_por_mes_del_hecho["Spanish"]["a_o_hecho"] = "";
	$placeHoldersDelitos_por_mes_del_hecho["Spanish"]["a_o_hecho"] = "";
	if (count($fieldToolTipsDelitos_por_mes_del_hecho["Spanish"]))
		$tdataDelitos_por_mes_del_hecho[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDelitos_por_mes_del_hecho["English"] = array();
	$fieldToolTipsDelitos_por_mes_del_hecho["English"] = array();
	$placeHoldersDelitos_por_mes_del_hecho["English"] = array();
	$pageTitlesDelitos_por_mes_del_hecho["English"] = array();
	$fieldLabelsDelitos_por_mes_del_hecho["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsDelitos_por_mes_del_hecho["English"]["sector_ppd"] = "";
	$placeHoldersDelitos_por_mes_del_hecho["English"]["sector_ppd"] = "";
	$fieldLabelsDelitos_por_mes_del_hecho["English"]["depart_he"] = "Depart He";
	$fieldToolTipsDelitos_por_mes_del_hecho["English"]["depart_he"] = "";
	$placeHoldersDelitos_por_mes_del_hecho["English"]["depart_he"] = "";
	$fieldLabelsDelitos_por_mes_del_hecho["English"]["mes_corre"] = "Mes Corre";
	$fieldToolTipsDelitos_por_mes_del_hecho["English"]["mes_corre"] = "";
	$placeHoldersDelitos_por_mes_del_hecho["English"]["mes_corre"] = "";
	$fieldLabelsDelitos_por_mes_del_hecho["English"]["COUNT_muni_he_"] = "COUNT(muni He)";
	$fieldToolTipsDelitos_por_mes_del_hecho["English"]["COUNT_muni_he_"] = "";
	$placeHoldersDelitos_por_mes_del_hecho["English"]["COUNT_muni_he_"] = "";
	$fieldLabelsDelitos_por_mes_del_hecho["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsDelitos_por_mes_del_hecho["English"]["a_o_hecho"] = "";
	$placeHoldersDelitos_por_mes_del_hecho["English"]["a_o_hecho"] = "";
	$fieldLabelsDelitos_por_mes_del_hecho["English"]["delito"] = "Delito";
	$fieldToolTipsDelitos_por_mes_del_hecho["English"]["delito"] = "";
	$placeHoldersDelitos_por_mes_del_hecho["English"]["delito"] = "";
	$fieldLabelsDelitos_por_mes_del_hecho["English"]["muni_he"] = "Muni He";
	$fieldToolTipsDelitos_por_mes_del_hecho["English"]["muni_he"] = "";
	$placeHoldersDelitos_por_mes_del_hecho["English"]["muni_he"] = "";
	if (count($fieldToolTipsDelitos_por_mes_del_hecho["English"]))
		$tdataDelitos_por_mes_del_hecho[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDelitos_por_mes_del_hecho[""] = array();
	$fieldToolTipsDelitos_por_mes_del_hecho[""] = array();
	$placeHoldersDelitos_por_mes_del_hecho[""] = array();
	$pageTitlesDelitos_por_mes_del_hecho[""] = array();
	if (count($fieldToolTipsDelitos_por_mes_del_hecho[""]))
		$tdataDelitos_por_mes_del_hecho[".isUseToolTips"] = true;
}





$tdataDelitos_por_mes_del_hecho[".shortTableName"] = "Delitos_por_mes_del_hecho";
$tdataDelitos_por_mes_del_hecho[".nSecOptions"] = 0;
$tdataDelitos_por_mes_del_hecho[".recsPerRowPrint"] = 1;
$tdataDelitos_por_mes_del_hecho[".mainTableOwnerID"] = "";
$tdataDelitos_por_mes_del_hecho[".moveNext"] = 1;
$tdataDelitos_por_mes_del_hecho[".entityType"] = 2;

$tdataDelitos_por_mes_del_hecho[".strOriginalTableName"] = "hechosdelictivos";

	



$tdataDelitos_por_mes_del_hecho[".showAddInPopup"] = false;

$tdataDelitos_por_mes_del_hecho[".showEditInPopup"] = false;

$tdataDelitos_por_mes_del_hecho[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDelitos_por_mes_del_hecho[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDelitos_por_mes_del_hecho[".fieldsForRegister"] = array();

$tdataDelitos_por_mes_del_hecho[".listAjax"] = false;

	$tdataDelitos_por_mes_del_hecho[".audit"] = false;

	$tdataDelitos_por_mes_del_hecho[".locking"] = false;


$tdataDelitos_por_mes_del_hecho[".add"] = true;
$tdataDelitos_por_mes_del_hecho[".afterAddAction"] = 1;
$tdataDelitos_por_mes_del_hecho[".closePopupAfterAdd"] = 1;
$tdataDelitos_por_mes_del_hecho[".afterAddActionDetTable"] = "";

$tdataDelitos_por_mes_del_hecho[".list"] = true;



$tdataDelitos_por_mes_del_hecho[".reorderRecordsByHeader"] = true;



$tdataDelitos_por_mes_del_hecho[".inlineAdd"] = true;


$tdataDelitos_por_mes_del_hecho[".exportTo"] = true;

$tdataDelitos_por_mes_del_hecho[".printFriendly"] = true;


$tdataDelitos_por_mes_del_hecho[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataDelitos_por_mes_del_hecho[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataDelitos_por_mes_del_hecho[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataDelitos_por_mes_del_hecho[".searchSaving"] = false;
//

$tdataDelitos_por_mes_del_hecho[".showSearchPanel"] = true;
		$tdataDelitos_por_mes_del_hecho[".flexibleSearch"] = true;

$tdataDelitos_por_mes_del_hecho[".isUseAjaxSuggest"] = true;






$tdataDelitos_por_mes_del_hecho[".ajaxCodeSnippetAdded"] = false;

$tdataDelitos_por_mes_del_hecho[".buttonsAdded"] = false;

$tdataDelitos_por_mes_del_hecho[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDelitos_por_mes_del_hecho[".isUseTimeForSearch"] = false;





$tdataDelitos_por_mes_del_hecho[".allSearchFields"] = array();
$tdataDelitos_por_mes_del_hecho[".filterFields"] = array();
$tdataDelitos_por_mes_del_hecho[".requiredSearchFields"] = array();

$tdataDelitos_por_mes_del_hecho[".allSearchFields"][] = "sector_ppd";
		$tdataDelitos_por_mes_del_hecho[".requiredSearchFields"][] = "sector_ppd";
$tdataDelitos_por_mes_del_hecho[".allSearchFields"][] = "muni_he";
		$tdataDelitos_por_mes_del_hecho[".requiredSearchFields"][] = "muni_he";
$tdataDelitos_por_mes_del_hecho[".allSearchFields"][] = "depart_he";
		$tdataDelitos_por_mes_del_hecho[".requiredSearchFields"][] = "depart_he";
$tdataDelitos_por_mes_del_hecho[".allSearchFields"][] = "aÑo_hecho";
		$tdataDelitos_por_mes_del_hecho[".requiredSearchFields"][] = "aÑo_hecho";


$tdataDelitos_por_mes_del_hecho[".googleLikeFields"] = array();
$tdataDelitos_por_mes_del_hecho[".googleLikeFields"][] = "sector_ppd";
$tdataDelitos_por_mes_del_hecho[".googleLikeFields"][] = "muni_he";
$tdataDelitos_por_mes_del_hecho[".googleLikeFields"][] = "depart_he";
$tdataDelitos_por_mes_del_hecho[".googleLikeFields"][] = "aÑo_hecho";

$tdataDelitos_por_mes_del_hecho[".panelSearchFields"] = array();
$tdataDelitos_por_mes_del_hecho[".searchPanelOptions"] = array();
$tdataDelitos_por_mes_del_hecho[".panelSearchFields"][] = "sector_ppd";
	$tdataDelitos_por_mes_del_hecho[".panelSearchFields"][] = "muni_he";
	$tdataDelitos_por_mes_del_hecho[".panelSearchFields"][] = "depart_he";
	$tdataDelitos_por_mes_del_hecho[".panelSearchFields"][] = "aÑo_hecho";
	
$tdataDelitos_por_mes_del_hecho[".advSearchFields"] = array();
$tdataDelitos_por_mes_del_hecho[".advSearchFields"][] = "sector_ppd";
$tdataDelitos_por_mes_del_hecho[".advSearchFields"][] = "muni_he";
$tdataDelitos_por_mes_del_hecho[".advSearchFields"][] = "depart_he";
$tdataDelitos_por_mes_del_hecho[".advSearchFields"][] = "aÑo_hecho";

$tdataDelitos_por_mes_del_hecho[".tableType"] = "report";

$tdataDelitos_por_mes_del_hecho[".printerPageOrientation"] = 0;
$tdataDelitos_por_mes_del_hecho[".nPrinterPageScale"] = 100;

$tdataDelitos_por_mes_del_hecho[".nPrinterSplitRecords"] = 40;

$tdataDelitos_por_mes_del_hecho[".nPrinterPDFSplitRecords"] = 40;



$tdataDelitos_por_mes_del_hecho[".geocodingEnabled"] = false;

//report settings
$tdataDelitos_por_mes_del_hecho[".crossTabReport"] = true;

$tdataDelitos_por_mes_del_hecho[".reportGroupFields"] = true;
$tdataDelitos_por_mes_del_hecho[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "mes_corre";
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
$tdataDelitos_por_mes_del_hecho[".reportGroupFieldsData"] = $reportGroupFields;

$tdataDelitos_por_mes_del_hecho[".reportHorizontalSummary"] = true;

$tdataDelitos_por_mes_del_hecho[".isExistTotalFields"] = true;

$tdataDelitos_por_mes_del_hecho[".reportVerticalSummary"] = true;



$tdataDelitos_por_mes_del_hecho[".repShowDet"] = true;

$tdataDelitos_por_mes_del_hecho[".reportLayout"] = 6;

//end of report settings




$tdataDelitos_por_mes_del_hecho[".listGridLayout"] = 3;

$tdataDelitos_por_mes_del_hecho[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY mes_corre";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDelitos_por_mes_del_hecho[".strOrderBy"] = $tstrOrderBy;

$tdataDelitos_por_mes_del_hecho[".orderindexes"] = array();
$tdataDelitos_por_mes_del_hecho[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "mes_corre");

$tdataDelitos_por_mes_del_hecho[".sqlHead"] = "SELECT mes_corre,  delito,  sector_ppd,  muni_he,  depart_he,  COUNT(muni_he) AS `COUNT(muni_he)`,  `aÑo_hecho`";
$tdataDelitos_por_mes_del_hecho[".sqlFrom"] = "FROM hechos_delictivos1";
$tdataDelitos_por_mes_del_hecho[".sqlWhereExpr"] = "";
$tdataDelitos_por_mes_del_hecho[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDelitos_por_mes_del_hecho[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDelitos_por_mes_del_hecho[".arrGroupsPerPage"] = $arrGPP;

$tdataDelitos_por_mes_del_hecho[".highlightSearchResults"] = true;

$tableKeysDelitos_por_mes_del_hecho = array();
$tdataDelitos_por_mes_del_hecho[".Keys"] = $tableKeysDelitos_por_mes_del_hecho;

$tdataDelitos_por_mes_del_hecho[".listFields"] = array();
$tdataDelitos_por_mes_del_hecho[".listFields"][] = "mes_corre";
$tdataDelitos_por_mes_del_hecho[".listFields"][] = "delito";
$tdataDelitos_por_mes_del_hecho[".listFields"][] = "sector_ppd";
$tdataDelitos_por_mes_del_hecho[".listFields"][] = "muni_he";
$tdataDelitos_por_mes_del_hecho[".listFields"][] = "depart_he";
$tdataDelitos_por_mes_del_hecho[".listFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_mes_del_hecho[".listFields"][] = "aÑo_hecho";

$tdataDelitos_por_mes_del_hecho[".hideMobileList"] = array();


$tdataDelitos_por_mes_del_hecho[".viewFields"] = array();
$tdataDelitos_por_mes_del_hecho[".viewFields"][] = "mes_corre";
$tdataDelitos_por_mes_del_hecho[".viewFields"][] = "delito";
$tdataDelitos_por_mes_del_hecho[".viewFields"][] = "sector_ppd";
$tdataDelitos_por_mes_del_hecho[".viewFields"][] = "muni_he";
$tdataDelitos_por_mes_del_hecho[".viewFields"][] = "depart_he";
$tdataDelitos_por_mes_del_hecho[".viewFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_mes_del_hecho[".viewFields"][] = "aÑo_hecho";

$tdataDelitos_por_mes_del_hecho[".addFields"] = array();
$tdataDelitos_por_mes_del_hecho[".addFields"][] = "delito";
$tdataDelitos_por_mes_del_hecho[".addFields"][] = "sector_ppd";
$tdataDelitos_por_mes_del_hecho[".addFields"][] = "muni_he";
$tdataDelitos_por_mes_del_hecho[".addFields"][] = "depart_he";
$tdataDelitos_por_mes_del_hecho[".addFields"][] = "aÑo_hecho";

$tdataDelitos_por_mes_del_hecho[".masterListFields"] = array();
$tdataDelitos_por_mes_del_hecho[".masterListFields"][] = "mes_corre";
$tdataDelitos_por_mes_del_hecho[".masterListFields"][] = "delito";
$tdataDelitos_por_mes_del_hecho[".masterListFields"][] = "sector_ppd";
$tdataDelitos_por_mes_del_hecho[".masterListFields"][] = "muni_he";
$tdataDelitos_por_mes_del_hecho[".masterListFields"][] = "depart_he";
$tdataDelitos_por_mes_del_hecho[".masterListFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_mes_del_hecho[".masterListFields"][] = "aÑo_hecho";

$tdataDelitos_por_mes_del_hecho[".inlineAddFields"] = array();
$tdataDelitos_por_mes_del_hecho[".inlineAddFields"][] = "delito";
$tdataDelitos_por_mes_del_hecho[".inlineAddFields"][] = "sector_ppd";
$tdataDelitos_por_mes_del_hecho[".inlineAddFields"][] = "muni_he";
$tdataDelitos_por_mes_del_hecho[".inlineAddFields"][] = "depart_he";
$tdataDelitos_por_mes_del_hecho[".inlineAddFields"][] = "aÑo_hecho";

$tdataDelitos_por_mes_del_hecho[".editFields"] = array();
$tdataDelitos_por_mes_del_hecho[".editFields"][] = "delito";
$tdataDelitos_por_mes_del_hecho[".editFields"][] = "sector_ppd";
$tdataDelitos_por_mes_del_hecho[".editFields"][] = "muni_he";
$tdataDelitos_por_mes_del_hecho[".editFields"][] = "depart_he";
$tdataDelitos_por_mes_del_hecho[".editFields"][] = "aÑo_hecho";

$tdataDelitos_por_mes_del_hecho[".inlineEditFields"] = array();
$tdataDelitos_por_mes_del_hecho[".inlineEditFields"][] = "delito";
$tdataDelitos_por_mes_del_hecho[".inlineEditFields"][] = "sector_ppd";
$tdataDelitos_por_mes_del_hecho[".inlineEditFields"][] = "muni_he";
$tdataDelitos_por_mes_del_hecho[".inlineEditFields"][] = "depart_he";
$tdataDelitos_por_mes_del_hecho[".inlineEditFields"][] = "aÑo_hecho";

$tdataDelitos_por_mes_del_hecho[".updateSelectedFields"] = array();
$tdataDelitos_por_mes_del_hecho[".updateSelectedFields"][] = "delito";
$tdataDelitos_por_mes_del_hecho[".updateSelectedFields"][] = "sector_ppd";
$tdataDelitos_por_mes_del_hecho[".updateSelectedFields"][] = "muni_he";
$tdataDelitos_por_mes_del_hecho[".updateSelectedFields"][] = "depart_he";
$tdataDelitos_por_mes_del_hecho[".updateSelectedFields"][] = "aÑo_hecho";


$tdataDelitos_por_mes_del_hecho[".exportFields"] = array();
$tdataDelitos_por_mes_del_hecho[".exportFields"][] = "mes_corre";
$tdataDelitos_por_mes_del_hecho[".exportFields"][] = "delito";
$tdataDelitos_por_mes_del_hecho[".exportFields"][] = "sector_ppd";
$tdataDelitos_por_mes_del_hecho[".exportFields"][] = "muni_he";
$tdataDelitos_por_mes_del_hecho[".exportFields"][] = "depart_he";
$tdataDelitos_por_mes_del_hecho[".exportFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_mes_del_hecho[".exportFields"][] = "aÑo_hecho";

$tdataDelitos_por_mes_del_hecho[".importFields"] = array();
$tdataDelitos_por_mes_del_hecho[".importFields"][] = "mes_corre";
$tdataDelitos_por_mes_del_hecho[".importFields"][] = "delito";
$tdataDelitos_por_mes_del_hecho[".importFields"][] = "sector_ppd";
$tdataDelitos_por_mes_del_hecho[".importFields"][] = "muni_he";
$tdataDelitos_por_mes_del_hecho[".importFields"][] = "depart_he";
$tdataDelitos_por_mes_del_hecho[".importFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_mes_del_hecho[".importFields"][] = "aÑo_hecho";

$tdataDelitos_por_mes_del_hecho[".printFields"] = array();
$tdataDelitos_por_mes_del_hecho[".printFields"][] = "mes_corre";
$tdataDelitos_por_mes_del_hecho[".printFields"][] = "delito";
$tdataDelitos_por_mes_del_hecho[".printFields"][] = "sector_ppd";
$tdataDelitos_por_mes_del_hecho[".printFields"][] = "muni_he";
$tdataDelitos_por_mes_del_hecho[".printFields"][] = "depart_he";
$tdataDelitos_por_mes_del_hecho[".printFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_mes_del_hecho[".printFields"][] = "aÑo_hecho";

//	mes_corre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "mes_corre";
	$fdata["GoodName"] = "mes_corre";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_mes_del_hecho","mes_corre");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mes_corre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mes_corre";

	
	
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








	$tdataDelitos_por_mes_del_hecho["mes_corre"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_mes_del_hecho","delito");
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








	$tdataDelitos_por_mes_del_hecho["delito"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_mes_del_hecho","sector_ppd");
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




	$tdataDelitos_por_mes_del_hecho["sector_ppd"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_mes_del_hecho","muni_he");
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




	$tdataDelitos_por_mes_del_hecho["muni_he"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_mes_del_hecho","depart_he");
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




	$tdataDelitos_por_mes_del_hecho["depart_he"] = $fdata;
//	COUNT(muni_he)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "COUNT(muni_he)";
	$fdata["GoodName"] = "COUNT_muni_he_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Delitos_por_mes_del_hecho","COUNT_muni_he_");
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








	$tdataDelitos_por_mes_del_hecho["COUNT(muni_he)"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_mes_del_hecho","a_o_hecho");
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




	$tdataDelitos_por_mes_del_hecho["aÑo_hecho"] = $fdata;


$tables_data["Delitos por mes del hecho"]=&$tdataDelitos_por_mes_del_hecho;
$field_labels["Delitos_por_mes_del_hecho"] = &$fieldLabelsDelitos_por_mes_del_hecho;
$fieldToolTips["Delitos_por_mes_del_hecho"] = &$fieldToolTipsDelitos_por_mes_del_hecho;
$placeHolders["Delitos_por_mes_del_hecho"] = &$placeHoldersDelitos_por_mes_del_hecho;
$page_titles["Delitos_por_mes_del_hecho"] = &$pageTitlesDelitos_por_mes_del_hecho;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Delitos por mes del hecho"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Delitos_por_mes_del_hecho()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "mes_corre,  delito,  sector_ppd,  muni_he,  depart_he,  COUNT(muni_he) AS `COUNT(muni_he)`,  `aÑo_hecho`";
$proto0["m_strFrom"] = "FROM hechos_delictivos1";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY mes_corre";
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
	"m_strName" => "mes_corre",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por mes del hecho"
));

$proto6["m_sql"] = "mes_corre";
$proto6["m_srcTableName"] = "Delitos por mes del hecho";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por mes del hecho"
));

$proto8["m_sql"] = "delito";
$proto8["m_srcTableName"] = "Delitos por mes del hecho";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por mes del hecho"
));

$proto10["m_sql"] = "sector_ppd";
$proto10["m_srcTableName"] = "Delitos por mes del hecho";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por mes del hecho"
));

$proto12["m_sql"] = "muni_he";
$proto12["m_srcTableName"] = "Delitos por mes del hecho";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por mes del hecho"
));

$proto14["m_sql"] = "depart_he";
$proto14["m_srcTableName"] = "Delitos por mes del hecho";
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
	"m_srcTableName" => "Delitos por mes del hecho"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "COUNT(muni_he)";
$proto16["m_srcTableName"] = "Delitos por mes del hecho";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "COUNT(muni_he)";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por mes del hecho"
));

$proto19["m_sql"] = "`aÑo_hecho`";
$proto19["m_srcTableName"] = "Delitos por mes del hecho";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "hechos_delictivos1";
$proto22["m_srcTableName"] = "Delitos por mes del hecho";
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
$proto21["m_srcTableName"] = "Delitos por mes del hecho";
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
	"m_strName" => "mes_corre",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por mes del hecho"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por mes del hecho"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por mes del hecho"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por mes del hecho"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por mes del hecho"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por mes del hecho"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "mes_corre",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por mes del hecho"
));

$proto37["m_column"]=$obj;
$proto37["m_bAsc"] = 1;
$proto37["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto37);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Delitos por mes del hecho";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Delitos_por_mes_del_hecho = createSqlQuery_Delitos_por_mes_del_hecho();


	
		;

							

$tdataDelitos_por_mes_del_hecho[".sqlquery"] = $queryData_Delitos_por_mes_del_hecho;

$tableEvents["Delitos por mes del hecho"] = new eventsBase;
$tdataDelitos_por_mes_del_hecho[".hasEvents"] = false;

?>