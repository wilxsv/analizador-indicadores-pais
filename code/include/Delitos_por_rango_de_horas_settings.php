<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDelitos_por_rango_de_horas = array();
	$tdataDelitos_por_rango_de_horas[".truncateText"] = true;
	$tdataDelitos_por_rango_de_horas[".NumberOfChars"] = 80;
	$tdataDelitos_por_rango_de_horas[".ShortName"] = "Delitos_por_rango_de_horas";
	$tdataDelitos_por_rango_de_horas[".OwnerID"] = "";
	$tdataDelitos_por_rango_de_horas[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsDelitos_por_rango_de_horas = array();
$fieldToolTipsDelitos_por_rango_de_horas = array();
$pageTitlesDelitos_por_rango_de_horas = array();
$placeHoldersDelitos_por_rango_de_horas = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsDelitos_por_rango_de_horas["Spanish"] = array();
	$fieldToolTipsDelitos_por_rango_de_horas["Spanish"] = array();
	$placeHoldersDelitos_por_rango_de_horas["Spanish"] = array();
	$pageTitlesDelitos_por_rango_de_horas["Spanish"] = array();
	$fieldLabelsDelitos_por_rango_de_horas["Spanish"]["delito"] = "Delito";
	$fieldToolTipsDelitos_por_rango_de_horas["Spanish"]["delito"] = "";
	$placeHoldersDelitos_por_rango_de_horas["Spanish"]["delito"] = "";
	$fieldLabelsDelitos_por_rango_de_horas["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipsDelitos_por_rango_de_horas["Spanish"]["muni_he"] = "";
	$placeHoldersDelitos_por_rango_de_horas["Spanish"]["muni_he"] = "";
	$fieldLabelsDelitos_por_rango_de_horas["Spanish"]["rango_hora"] = "Rango Hora";
	$fieldToolTipsDelitos_por_rango_de_horas["Spanish"]["rango_hora"] = "";
	$placeHoldersDelitos_por_rango_de_horas["Spanish"]["rango_hora"] = "";
	$fieldLabelsDelitos_por_rango_de_horas["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipsDelitos_por_rango_de_horas["Spanish"]["depart_he"] = "";
	$placeHoldersDelitos_por_rango_de_horas["Spanish"]["depart_he"] = "";
	$fieldLabelsDelitos_por_rango_de_horas["Spanish"]["COUNT_muni_he_"] = "COUNT(muni He)";
	$fieldToolTipsDelitos_por_rango_de_horas["Spanish"]["COUNT_muni_he_"] = "";
	$placeHoldersDelitos_por_rango_de_horas["Spanish"]["COUNT_muni_he_"] = "";
	$fieldLabelsDelitos_por_rango_de_horas["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsDelitos_por_rango_de_horas["Spanish"]["sector_ppd"] = "";
	$placeHoldersDelitos_por_rango_de_horas["Spanish"]["sector_ppd"] = "";
	if (count($fieldToolTipsDelitos_por_rango_de_horas["Spanish"]))
		$tdataDelitos_por_rango_de_horas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDelitos_por_rango_de_horas["English"] = array();
	$fieldToolTipsDelitos_por_rango_de_horas["English"] = array();
	$placeHoldersDelitos_por_rango_de_horas["English"] = array();
	$pageTitlesDelitos_por_rango_de_horas["English"] = array();
	$fieldLabelsDelitos_por_rango_de_horas["English"]["rango_hora"] = "Rango Hora";
	$fieldToolTipsDelitos_por_rango_de_horas["English"]["rango_hora"] = "";
	$placeHoldersDelitos_por_rango_de_horas["English"]["rango_hora"] = "";
	$fieldLabelsDelitos_por_rango_de_horas["English"]["depart_he"] = "Depart He";
	$fieldToolTipsDelitos_por_rango_de_horas["English"]["depart_he"] = "";
	$placeHoldersDelitos_por_rango_de_horas["English"]["depart_he"] = "";
	$fieldLabelsDelitos_por_rango_de_horas["English"]["delito"] = "Delito";
	$fieldToolTipsDelitos_por_rango_de_horas["English"]["delito"] = "";
	$placeHoldersDelitos_por_rango_de_horas["English"]["delito"] = "";
	$fieldLabelsDelitos_por_rango_de_horas["English"]["muni_he"] = "Muni He";
	$fieldToolTipsDelitos_por_rango_de_horas["English"]["muni_he"] = "";
	$placeHoldersDelitos_por_rango_de_horas["English"]["muni_he"] = "";
	$fieldLabelsDelitos_por_rango_de_horas["English"]["COUNT_muni_he_"] = "COUNT(muni He)";
	$fieldToolTipsDelitos_por_rango_de_horas["English"]["COUNT_muni_he_"] = "";
	$placeHoldersDelitos_por_rango_de_horas["English"]["COUNT_muni_he_"] = "";
	$fieldLabelsDelitos_por_rango_de_horas["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsDelitos_por_rango_de_horas["English"]["sector_ppd"] = "";
	$placeHoldersDelitos_por_rango_de_horas["English"]["sector_ppd"] = "";
	if (count($fieldToolTipsDelitos_por_rango_de_horas["English"]))
		$tdataDelitos_por_rango_de_horas[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDelitos_por_rango_de_horas[""] = array();
	$fieldToolTipsDelitos_por_rango_de_horas[""] = array();
	$placeHoldersDelitos_por_rango_de_horas[""] = array();
	$pageTitlesDelitos_por_rango_de_horas[""] = array();
	if (count($fieldToolTipsDelitos_por_rango_de_horas[""]))
		$tdataDelitos_por_rango_de_horas[".isUseToolTips"] = true;
}





$tdataDelitos_por_rango_de_horas[".shortTableName"] = "Delitos_por_rango_de_horas";
$tdataDelitos_por_rango_de_horas[".nSecOptions"] = 0;
$tdataDelitos_por_rango_de_horas[".recsPerRowPrint"] = 1;
$tdataDelitos_por_rango_de_horas[".mainTableOwnerID"] = "";
$tdataDelitos_por_rango_de_horas[".moveNext"] = 1;
$tdataDelitos_por_rango_de_horas[".entityType"] = 2;

$tdataDelitos_por_rango_de_horas[".strOriginalTableName"] = "hechosdelictivos";

	



$tdataDelitos_por_rango_de_horas[".showAddInPopup"] = false;

$tdataDelitos_por_rango_de_horas[".showEditInPopup"] = false;

$tdataDelitos_por_rango_de_horas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDelitos_por_rango_de_horas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDelitos_por_rango_de_horas[".fieldsForRegister"] = array();

$tdataDelitos_por_rango_de_horas[".listAjax"] = false;

	$tdataDelitos_por_rango_de_horas[".audit"] = false;

	$tdataDelitos_por_rango_de_horas[".locking"] = false;


$tdataDelitos_por_rango_de_horas[".add"] = true;
$tdataDelitos_por_rango_de_horas[".afterAddAction"] = 1;
$tdataDelitos_por_rango_de_horas[".closePopupAfterAdd"] = 1;
$tdataDelitos_por_rango_de_horas[".afterAddActionDetTable"] = "";

$tdataDelitos_por_rango_de_horas[".list"] = true;



$tdataDelitos_por_rango_de_horas[".reorderRecordsByHeader"] = true;



$tdataDelitos_por_rango_de_horas[".inlineAdd"] = true;


$tdataDelitos_por_rango_de_horas[".exportTo"] = true;

$tdataDelitos_por_rango_de_horas[".printFriendly"] = true;


$tdataDelitos_por_rango_de_horas[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataDelitos_por_rango_de_horas[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataDelitos_por_rango_de_horas[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataDelitos_por_rango_de_horas[".searchSaving"] = false;
//

$tdataDelitos_por_rango_de_horas[".showSearchPanel"] = true;
		$tdataDelitos_por_rango_de_horas[".flexibleSearch"] = true;

$tdataDelitos_por_rango_de_horas[".isUseAjaxSuggest"] = true;






$tdataDelitos_por_rango_de_horas[".ajaxCodeSnippetAdded"] = false;

$tdataDelitos_por_rango_de_horas[".buttonsAdded"] = false;

$tdataDelitos_por_rango_de_horas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDelitos_por_rango_de_horas[".isUseTimeForSearch"] = false;





$tdataDelitos_por_rango_de_horas[".allSearchFields"] = array();
$tdataDelitos_por_rango_de_horas[".filterFields"] = array();
$tdataDelitos_por_rango_de_horas[".requiredSearchFields"] = array();

$tdataDelitos_por_rango_de_horas[".allSearchFields"][] = "muni_he";
		$tdataDelitos_por_rango_de_horas[".requiredSearchFields"][] = "muni_he";
$tdataDelitos_por_rango_de_horas[".allSearchFields"][] = "depart_he";
		$tdataDelitos_por_rango_de_horas[".requiredSearchFields"][] = "depart_he";
$tdataDelitos_por_rango_de_horas[".allSearchFields"][] = "COUNT(muni_he)";
	$tdataDelitos_por_rango_de_horas[".allSearchFields"][] = "sector_ppd";
		$tdataDelitos_por_rango_de_horas[".requiredSearchFields"][] = "sector_ppd";


$tdataDelitos_por_rango_de_horas[".googleLikeFields"] = array();
$tdataDelitos_por_rango_de_horas[".googleLikeFields"][] = "muni_he";
$tdataDelitos_por_rango_de_horas[".googleLikeFields"][] = "depart_he";
$tdataDelitos_por_rango_de_horas[".googleLikeFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_rango_de_horas[".googleLikeFields"][] = "sector_ppd";

$tdataDelitos_por_rango_de_horas[".panelSearchFields"] = array();
$tdataDelitos_por_rango_de_horas[".searchPanelOptions"] = array();
$tdataDelitos_por_rango_de_horas[".panelSearchFields"][] = "muni_he";
	$tdataDelitos_por_rango_de_horas[".panelSearchFields"][] = "depart_he";
	$tdataDelitos_por_rango_de_horas[".panelSearchFields"][] = "sector_ppd";
	
$tdataDelitos_por_rango_de_horas[".advSearchFields"] = array();
$tdataDelitos_por_rango_de_horas[".advSearchFields"][] = "muni_he";
$tdataDelitos_por_rango_de_horas[".advSearchFields"][] = "depart_he";
$tdataDelitos_por_rango_de_horas[".advSearchFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_rango_de_horas[".advSearchFields"][] = "sector_ppd";

$tdataDelitos_por_rango_de_horas[".tableType"] = "report";

$tdataDelitos_por_rango_de_horas[".printerPageOrientation"] = 0;
$tdataDelitos_por_rango_de_horas[".nPrinterPageScale"] = 100;

$tdataDelitos_por_rango_de_horas[".nPrinterSplitRecords"] = 40;

$tdataDelitos_por_rango_de_horas[".nPrinterPDFSplitRecords"] = 40;



$tdataDelitos_por_rango_de_horas[".geocodingEnabled"] = false;

//report settings
$tdataDelitos_por_rango_de_horas[".crossTabReport"] = true;

$tdataDelitos_por_rango_de_horas[".reportGroupFields"] = true;
$tdataDelitos_por_rango_de_horas[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "delito";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "rango_hora";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdataDelitos_por_rango_de_horas[".reportGroupFieldsData"] = $reportGroupFields;

$tdataDelitos_por_rango_de_horas[".reportHorizontalSummary"] = true;

$tdataDelitos_por_rango_de_horas[".isExistTotalFields"] = true;

$tdataDelitos_por_rango_de_horas[".reportVerticalSummary"] = true;



$tdataDelitos_por_rango_de_horas[".repShowDet"] = true;

$tdataDelitos_por_rango_de_horas[".reportLayout"] = 6;

//end of report settings




$tdataDelitos_por_rango_de_horas[".listGridLayout"] = 3;

$tdataDelitos_por_rango_de_horas[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDelitos_por_rango_de_horas[".strOrderBy"] = $tstrOrderBy;

$tdataDelitos_por_rango_de_horas[".orderindexes"] = array();

$tdataDelitos_por_rango_de_horas[".sqlHead"] = "SELECT muni_he,  depart_he,  delito,  rango_hora,  COUNT(muni_he) AS `COUNT(muni_he)`,  sector_ppd";
$tdataDelitos_por_rango_de_horas[".sqlFrom"] = "FROM hechos_delictivos1";
$tdataDelitos_por_rango_de_horas[".sqlWhereExpr"] = "";
$tdataDelitos_por_rango_de_horas[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDelitos_por_rango_de_horas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDelitos_por_rango_de_horas[".arrGroupsPerPage"] = $arrGPP;

$tdataDelitos_por_rango_de_horas[".highlightSearchResults"] = true;

$tableKeysDelitos_por_rango_de_horas = array();
$tdataDelitos_por_rango_de_horas[".Keys"] = $tableKeysDelitos_por_rango_de_horas;

$tdataDelitos_por_rango_de_horas[".listFields"] = array();
$tdataDelitos_por_rango_de_horas[".listFields"][] = "muni_he";
$tdataDelitos_por_rango_de_horas[".listFields"][] = "depart_he";
$tdataDelitos_por_rango_de_horas[".listFields"][] = "delito";
$tdataDelitos_por_rango_de_horas[".listFields"][] = "rango_hora";
$tdataDelitos_por_rango_de_horas[".listFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_rango_de_horas[".listFields"][] = "sector_ppd";

$tdataDelitos_por_rango_de_horas[".hideMobileList"] = array();


$tdataDelitos_por_rango_de_horas[".viewFields"] = array();
$tdataDelitos_por_rango_de_horas[".viewFields"][] = "muni_he";
$tdataDelitos_por_rango_de_horas[".viewFields"][] = "depart_he";
$tdataDelitos_por_rango_de_horas[".viewFields"][] = "delito";
$tdataDelitos_por_rango_de_horas[".viewFields"][] = "rango_hora";
$tdataDelitos_por_rango_de_horas[".viewFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_rango_de_horas[".viewFields"][] = "sector_ppd";

$tdataDelitos_por_rango_de_horas[".addFields"] = array();
$tdataDelitos_por_rango_de_horas[".addFields"][] = "muni_he";
$tdataDelitos_por_rango_de_horas[".addFields"][] = "depart_he";
$tdataDelitos_por_rango_de_horas[".addFields"][] = "delito";
$tdataDelitos_por_rango_de_horas[".addFields"][] = "rango_hora";
$tdataDelitos_por_rango_de_horas[".addFields"][] = "sector_ppd";

$tdataDelitos_por_rango_de_horas[".masterListFields"] = array();
$tdataDelitos_por_rango_de_horas[".masterListFields"][] = "muni_he";
$tdataDelitos_por_rango_de_horas[".masterListFields"][] = "depart_he";
$tdataDelitos_por_rango_de_horas[".masterListFields"][] = "delito";
$tdataDelitos_por_rango_de_horas[".masterListFields"][] = "rango_hora";
$tdataDelitos_por_rango_de_horas[".masterListFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_rango_de_horas[".masterListFields"][] = "sector_ppd";

$tdataDelitos_por_rango_de_horas[".inlineAddFields"] = array();
$tdataDelitos_por_rango_de_horas[".inlineAddFields"][] = "muni_he";
$tdataDelitos_por_rango_de_horas[".inlineAddFields"][] = "depart_he";
$tdataDelitos_por_rango_de_horas[".inlineAddFields"][] = "delito";
$tdataDelitos_por_rango_de_horas[".inlineAddFields"][] = "rango_hora";
$tdataDelitos_por_rango_de_horas[".inlineAddFields"][] = "sector_ppd";

$tdataDelitos_por_rango_de_horas[".editFields"] = array();
$tdataDelitos_por_rango_de_horas[".editFields"][] = "muni_he";
$tdataDelitos_por_rango_de_horas[".editFields"][] = "depart_he";
$tdataDelitos_por_rango_de_horas[".editFields"][] = "delito";
$tdataDelitos_por_rango_de_horas[".editFields"][] = "rango_hora";
$tdataDelitos_por_rango_de_horas[".editFields"][] = "sector_ppd";

$tdataDelitos_por_rango_de_horas[".inlineEditFields"] = array();
$tdataDelitos_por_rango_de_horas[".inlineEditFields"][] = "muni_he";
$tdataDelitos_por_rango_de_horas[".inlineEditFields"][] = "depart_he";
$tdataDelitos_por_rango_de_horas[".inlineEditFields"][] = "delito";
$tdataDelitos_por_rango_de_horas[".inlineEditFields"][] = "rango_hora";
$tdataDelitos_por_rango_de_horas[".inlineEditFields"][] = "sector_ppd";

$tdataDelitos_por_rango_de_horas[".updateSelectedFields"] = array();
$tdataDelitos_por_rango_de_horas[".updateSelectedFields"][] = "muni_he";
$tdataDelitos_por_rango_de_horas[".updateSelectedFields"][] = "depart_he";
$tdataDelitos_por_rango_de_horas[".updateSelectedFields"][] = "delito";
$tdataDelitos_por_rango_de_horas[".updateSelectedFields"][] = "rango_hora";
$tdataDelitos_por_rango_de_horas[".updateSelectedFields"][] = "sector_ppd";


$tdataDelitos_por_rango_de_horas[".exportFields"] = array();
$tdataDelitos_por_rango_de_horas[".exportFields"][] = "muni_he";
$tdataDelitos_por_rango_de_horas[".exportFields"][] = "depart_he";
$tdataDelitos_por_rango_de_horas[".exportFields"][] = "delito";
$tdataDelitos_por_rango_de_horas[".exportFields"][] = "rango_hora";
$tdataDelitos_por_rango_de_horas[".exportFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_rango_de_horas[".exportFields"][] = "sector_ppd";

$tdataDelitos_por_rango_de_horas[".importFields"] = array();
$tdataDelitos_por_rango_de_horas[".importFields"][] = "muni_he";
$tdataDelitos_por_rango_de_horas[".importFields"][] = "depart_he";
$tdataDelitos_por_rango_de_horas[".importFields"][] = "delito";
$tdataDelitos_por_rango_de_horas[".importFields"][] = "rango_hora";
$tdataDelitos_por_rango_de_horas[".importFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_rango_de_horas[".importFields"][] = "sector_ppd";

$tdataDelitos_por_rango_de_horas[".printFields"] = array();
$tdataDelitos_por_rango_de_horas[".printFields"][] = "muni_he";
$tdataDelitos_por_rango_de_horas[".printFields"][] = "depart_he";
$tdataDelitos_por_rango_de_horas[".printFields"][] = "delito";
$tdataDelitos_por_rango_de_horas[".printFields"][] = "rango_hora";
$tdataDelitos_por_rango_de_horas[".printFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_rango_de_horas[".printFields"][] = "sector_ppd";

//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_rango_de_horas","muni_he");
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




	$tdataDelitos_por_rango_de_horas["muni_he"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_rango_de_horas","depart_he");
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




	$tdataDelitos_por_rango_de_horas["depart_he"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_rango_de_horas","delito");
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








	$tdataDelitos_por_rango_de_horas["delito"] = $fdata;
//	rango_hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "rango_hora";
	$fdata["GoodName"] = "rango_hora";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_rango_de_horas","rango_hora");
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

		$fdata["strField"] = "rango_hora";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rango_hora";

	
	
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








	$tdataDelitos_por_rango_de_horas["rango_hora"] = $fdata;
//	COUNT(muni_he)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "COUNT(muni_he)";
	$fdata["GoodName"] = "COUNT_muni_he_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Delitos_por_rango_de_horas","COUNT_muni_he_");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataDelitos_por_rango_de_horas["COUNT(muni_he)"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_rango_de_horas","sector_ppd");
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




	$tdataDelitos_por_rango_de_horas["sector_ppd"] = $fdata;


$tables_data["Delitos por rango de horas"]=&$tdataDelitos_por_rango_de_horas;
$field_labels["Delitos_por_rango_de_horas"] = &$fieldLabelsDelitos_por_rango_de_horas;
$fieldToolTips["Delitos_por_rango_de_horas"] = &$fieldToolTipsDelitos_por_rango_de_horas;
$placeHolders["Delitos_por_rango_de_horas"] = &$placeHoldersDelitos_por_rango_de_horas;
$page_titles["Delitos_por_rango_de_horas"] = &$pageTitlesDelitos_por_rango_de_horas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Delitos por rango de horas"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Delitos_por_rango_de_horas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "muni_he,  depart_he,  delito,  rango_hora,  COUNT(muni_he) AS `COUNT(muni_he)`,  sector_ppd";
$proto0["m_strFrom"] = "FROM hechos_delictivos1";
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
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por rango de horas"
));

$proto6["m_sql"] = "muni_he";
$proto6["m_srcTableName"] = "Delitos por rango de horas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por rango de horas"
));

$proto8["m_sql"] = "depart_he";
$proto8["m_srcTableName"] = "Delitos por rango de horas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por rango de horas"
));

$proto10["m_sql"] = "delito";
$proto10["m_srcTableName"] = "Delitos por rango de horas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "rango_hora",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por rango de horas"
));

$proto12["m_sql"] = "rango_hora";
$proto12["m_srcTableName"] = "Delitos por rango de horas";
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
	"m_srcTableName" => "Delitos por rango de horas"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "COUNT(muni_he)";
$proto14["m_srcTableName"] = "Delitos por rango de horas";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "COUNT(muni_he)";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por rango de horas"
));

$proto17["m_sql"] = "sector_ppd";
$proto17["m_srcTableName"] = "Delitos por rango de horas";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "hechos_delictivos1";
$proto20["m_srcTableName"] = "Delitos por rango de horas";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id1";
$proto20["m_columns"][] = "id11";
$proto20["m_columns"][] = "correlativo";
$proto20["m_columns"][] = "numero";
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "numero2";
$proto20["m_columns"][] = "lugaranalisis";
$proto20["m_columns"][] = "area";
$proto20["m_columns"][] = "delito";
$proto20["m_columns"][] = "codigo_muni";
$proto20["m_columns"][] = "depart_he";
$proto20["m_columns"][] = "muni_he";
$proto20["m_columns"][] = "dire_hecho";
$proto20["m_columns"][] = "lugar_esp";
$proto20["m_columns"][] = "forma_cono";
$proto20["m_columns"][] = "delito_espe";
$proto20["m_columns"][] = "dia_hecho";
$proto20["m_columns"][] = "hora_hecho";
$proto20["m_columns"][] = "rango_hora";
$proto20["m_columns"][] = "fecha_hecho";
$proto20["m_columns"][] = "mes_hecho";
$proto20["m_columns"][] = "aÑo_hecho";
$proto20["m_columns"][] = "edad_victima";
$proto20["m_columns"][] = "ran_eta_vic";
$proto20["m_columns"][] = "s_victima";
$proto20["m_columns"][] = "oc_victima";
$proto20["m_columns"][] = "relacion_vi_agre";
$proto20["m_columns"][] = "edad_agresor";
$proto20["m_columns"][] = "sexo_agresor";
$proto20["m_columns"][] = "ocupa_agresor";
$proto20["m_columns"][] = "movil";
$proto20["m_columns"][] = "tipo_arma";
$proto20["m_columns"][] = "canton_hecho";
$proto20["m_columns"][] = "colonia_hecho";
$proto20["m_columns"][] = "caserio_hecho";
$proto20["m_columns"][] = "calle_hecho";
$proto20["m_columns"][] = "avenida_hecho";
$proto20["m_columns"][] = "casa_hecho";
$proto20["m_columns"][] = "com_hecho";
$proto20["m_columns"][] = "barrio_hecho";
$proto20["m_columns"][] = "comp_hecho";
$proto20["m_columns"][] = "sector_ppd";
$proto20["m_columns"][] = "tipo";
$proto20["m_columns"][] = "nombre";
$proto20["m_columns"][] = "x";
$proto20["m_columns"][] = "y";
$proto20["m_columns"][] = "correlativo1";
$proto20["m_columns"][] = "mes_corre";
$proto20["m_columns"][] = "arma_analisis";
$proto20["m_columns"][] = "movil_he";
$proto20["m_columns"][] = "ocupa_analisis";
$proto20["m_columns"][] = "rel_vic_ag_anali";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "hechos_delictivos1";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "Delitos por rango de horas";
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
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por rango de horas"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por rango de horas"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por rango de horas"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "rango_hora",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por rango de horas"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por rango de horas"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Delitos por rango de horas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Delitos_por_rango_de_horas = createSqlQuery_Delitos_por_rango_de_horas();


	
		;

						

$tdataDelitos_por_rango_de_horas[".sqlquery"] = $queryData_Delitos_por_rango_de_horas;

$tableEvents["Delitos por rango de horas"] = new eventsBase;
$tdataDelitos_por_rango_de_horas[".hasEvents"] = false;

?>