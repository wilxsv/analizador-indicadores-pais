<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDelitos_por__rea = array();
	$tdataDelitos_por__rea[".truncateText"] = true;
	$tdataDelitos_por__rea[".NumberOfChars"] = 80;
	$tdataDelitos_por__rea[".ShortName"] = "Delitos_por__rea";
	$tdataDelitos_por__rea[".OwnerID"] = "";
	$tdataDelitos_por__rea[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsDelitos_por__rea = array();
$fieldToolTipsDelitos_por__rea = array();
$pageTitlesDelitos_por__rea = array();
$placeHoldersDelitos_por__rea = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsDelitos_por__rea["Spanish"] = array();
	$fieldToolTipsDelitos_por__rea["Spanish"] = array();
	$placeHoldersDelitos_por__rea["Spanish"] = array();
	$pageTitlesDelitos_por__rea["Spanish"] = array();
	$fieldLabelsDelitos_por__rea["Spanish"]["delito"] = "Delito";
	$fieldToolTipsDelitos_por__rea["Spanish"]["delito"] = "";
	$placeHoldersDelitos_por__rea["Spanish"]["delito"] = "";
	$fieldLabelsDelitos_por__rea["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipsDelitos_por__rea["Spanish"]["muni_he"] = "";
	$placeHoldersDelitos_por__rea["Spanish"]["muni_he"] = "";
	$fieldLabelsDelitos_por__rea["Spanish"]["COUNT_delito_"] = "COUNT(delito)";
	$fieldToolTipsDelitos_por__rea["Spanish"]["COUNT_delito_"] = "";
	$placeHoldersDelitos_por__rea["Spanish"]["COUNT_delito_"] = "";
	$fieldLabelsDelitos_por__rea["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsDelitos_por__rea["Spanish"]["a_o_hecho"] = "";
	$placeHoldersDelitos_por__rea["Spanish"]["a_o_hecho"] = "";
	$fieldLabelsDelitos_por__rea["Spanish"]["area"] = "Area";
	$fieldToolTipsDelitos_por__rea["Spanish"]["area"] = "";
	$placeHoldersDelitos_por__rea["Spanish"]["area"] = "";
	$fieldLabelsDelitos_por__rea["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsDelitos_por__rea["Spanish"]["sector_ppd"] = "";
	$placeHoldersDelitos_por__rea["Spanish"]["sector_ppd"] = "";
	$fieldLabelsDelitos_por__rea["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipsDelitos_por__rea["Spanish"]["depart_he"] = "";
	$placeHoldersDelitos_por__rea["Spanish"]["depart_he"] = "";
	if (count($fieldToolTipsDelitos_por__rea["Spanish"]))
		$tdataDelitos_por__rea[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDelitos_por__rea["English"] = array();
	$fieldToolTipsDelitos_por__rea["English"] = array();
	$placeHoldersDelitos_por__rea["English"] = array();
	$pageTitlesDelitos_por__rea["English"] = array();
	$fieldLabelsDelitos_por__rea["English"]["area"] = "Area";
	$fieldToolTipsDelitos_por__rea["English"]["area"] = "";
	$placeHoldersDelitos_por__rea["English"]["area"] = "";
	$fieldLabelsDelitos_por__rea["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsDelitos_por__rea["English"]["sector_ppd"] = "";
	$placeHoldersDelitos_por__rea["English"]["sector_ppd"] = "";
	$fieldLabelsDelitos_por__rea["English"]["depart_he"] = "Depart He";
	$fieldToolTipsDelitos_por__rea["English"]["depart_he"] = "";
	$placeHoldersDelitos_por__rea["English"]["depart_he"] = "";
	$fieldLabelsDelitos_por__rea["English"]["delito"] = "Delito";
	$fieldToolTipsDelitos_por__rea["English"]["delito"] = "";
	$placeHoldersDelitos_por__rea["English"]["delito"] = "";
	$fieldLabelsDelitos_por__rea["English"]["COUNT_delito_"] = "COUNT(delito)";
	$fieldToolTipsDelitos_por__rea["English"]["COUNT_delito_"] = "";
	$placeHoldersDelitos_por__rea["English"]["COUNT_delito_"] = "";
	$fieldLabelsDelitos_por__rea["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsDelitos_por__rea["English"]["a_o_hecho"] = "";
	$placeHoldersDelitos_por__rea["English"]["a_o_hecho"] = "";
	$fieldLabelsDelitos_por__rea["English"]["muni_he"] = "Muni He";
	$fieldToolTipsDelitos_por__rea["English"]["muni_he"] = "";
	$placeHoldersDelitos_por__rea["English"]["muni_he"] = "";
	if (count($fieldToolTipsDelitos_por__rea["English"]))
		$tdataDelitos_por__rea[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDelitos_por__rea[""] = array();
	$fieldToolTipsDelitos_por__rea[""] = array();
	$placeHoldersDelitos_por__rea[""] = array();
	$pageTitlesDelitos_por__rea[""] = array();
	if (count($fieldToolTipsDelitos_por__rea[""]))
		$tdataDelitos_por__rea[".isUseToolTips"] = true;
}





$tdataDelitos_por__rea[".shortTableName"] = "Delitos_por__rea";
$tdataDelitos_por__rea[".nSecOptions"] = 0;
$tdataDelitos_por__rea[".recsPerRowPrint"] = 1;
$tdataDelitos_por__rea[".mainTableOwnerID"] = "";
$tdataDelitos_por__rea[".moveNext"] = 1;
$tdataDelitos_por__rea[".entityType"] = 2;

$tdataDelitos_por__rea[".strOriginalTableName"] = "hechosdelictivos";

	



$tdataDelitos_por__rea[".showAddInPopup"] = false;

$tdataDelitos_por__rea[".showEditInPopup"] = false;

$tdataDelitos_por__rea[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDelitos_por__rea[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDelitos_por__rea[".fieldsForRegister"] = array();

$tdataDelitos_por__rea[".listAjax"] = false;

	$tdataDelitos_por__rea[".audit"] = false;

	$tdataDelitos_por__rea[".locking"] = false;


$tdataDelitos_por__rea[".add"] = true;
$tdataDelitos_por__rea[".afterAddAction"] = 1;
$tdataDelitos_por__rea[".closePopupAfterAdd"] = 1;
$tdataDelitos_por__rea[".afterAddActionDetTable"] = "";

$tdataDelitos_por__rea[".list"] = true;



$tdataDelitos_por__rea[".reorderRecordsByHeader"] = true;



$tdataDelitos_por__rea[".inlineAdd"] = true;


$tdataDelitos_por__rea[".exportTo"] = true;

$tdataDelitos_por__rea[".printFriendly"] = true;


$tdataDelitos_por__rea[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataDelitos_por__rea[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataDelitos_por__rea[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataDelitos_por__rea[".searchSaving"] = false;
//

$tdataDelitos_por__rea[".showSearchPanel"] = true;
		$tdataDelitos_por__rea[".flexibleSearch"] = true;

$tdataDelitos_por__rea[".isUseAjaxSuggest"] = true;






$tdataDelitos_por__rea[".ajaxCodeSnippetAdded"] = false;

$tdataDelitos_por__rea[".buttonsAdded"] = false;

$tdataDelitos_por__rea[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDelitos_por__rea[".isUseTimeForSearch"] = false;





$tdataDelitos_por__rea[".allSearchFields"] = array();
$tdataDelitos_por__rea[".filterFields"] = array();
$tdataDelitos_por__rea[".requiredSearchFields"] = array();

$tdataDelitos_por__rea[".allSearchFields"][] = "aÑo_hecho";
		$tdataDelitos_por__rea[".requiredSearchFields"][] = "aÑo_hecho";
$tdataDelitos_por__rea[".allSearchFields"][] = "muni_he";
		$tdataDelitos_por__rea[".requiredSearchFields"][] = "muni_he";
$tdataDelitos_por__rea[".allSearchFields"][] = "sector_ppd";
		$tdataDelitos_por__rea[".requiredSearchFields"][] = "sector_ppd";
$tdataDelitos_por__rea[".allSearchFields"][] = "depart_he";
		$tdataDelitos_por__rea[".requiredSearchFields"][] = "depart_he";



$tdataDelitos_por__rea[".panelSearchFields"] = array();
$tdataDelitos_por__rea[".searchPanelOptions"] = array();
$tdataDelitos_por__rea[".panelSearchFields"][] = "aÑo_hecho";
	$tdataDelitos_por__rea[".panelSearchFields"][] = "muni_he";
	$tdataDelitos_por__rea[".panelSearchFields"][] = "sector_ppd";
	$tdataDelitos_por__rea[".panelSearchFields"][] = "depart_he";
	

$tdataDelitos_por__rea[".tableType"] = "report";

$tdataDelitos_por__rea[".printerPageOrientation"] = 0;
$tdataDelitos_por__rea[".nPrinterPageScale"] = 100;

$tdataDelitos_por__rea[".nPrinterSplitRecords"] = 40;

$tdataDelitos_por__rea[".nPrinterPDFSplitRecords"] = 40;



$tdataDelitos_por__rea[".geocodingEnabled"] = false;

//report settings
$tdataDelitos_por__rea[".crossTabReport"] = true;

$tdataDelitos_por__rea[".reportGroupFields"] = true;
$tdataDelitos_por__rea[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "area";
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
$tdataDelitos_por__rea[".reportGroupFieldsData"] = $reportGroupFields;

$tdataDelitos_por__rea[".reportHorizontalSummary"] = true;

$tdataDelitos_por__rea[".isExistTotalFields"] = true;

$tdataDelitos_por__rea[".reportVerticalSummary"] = true;



$tdataDelitos_por__rea[".repShowDet"] = true;

$tdataDelitos_por__rea[".reportLayout"] = 6;

//end of report settings




$tdataDelitos_por__rea[".listGridLayout"] = 3;

$tdataDelitos_por__rea[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY area DESC, delito DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDelitos_por__rea[".strOrderBy"] = $tstrOrderBy;

$tdataDelitos_por__rea[".orderindexes"] = array();
$tdataDelitos_por__rea[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "area");
$tdataDelitos_por__rea[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "delito");

$tdataDelitos_por__rea[".sqlHead"] = "SELECT area,  delito,  COUNT(delito) AS `COUNT(delito)`,  `aÑo_hecho`,  muni_he,  sector_ppd,  depart_he";
$tdataDelitos_por__rea[".sqlFrom"] = "FROM hechos_delictivos1";
$tdataDelitos_por__rea[".sqlWhereExpr"] = "";
$tdataDelitos_por__rea[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDelitos_por__rea[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDelitos_por__rea[".arrGroupsPerPage"] = $arrGPP;

$tdataDelitos_por__rea[".highlightSearchResults"] = true;

$tableKeysDelitos_por__rea = array();
$tdataDelitos_por__rea[".Keys"] = $tableKeysDelitos_por__rea;

$tdataDelitos_por__rea[".listFields"] = array();
$tdataDelitos_por__rea[".listFields"][] = "area";
$tdataDelitos_por__rea[".listFields"][] = "delito";
$tdataDelitos_por__rea[".listFields"][] = "COUNT(delito)";
$tdataDelitos_por__rea[".listFields"][] = "aÑo_hecho";
$tdataDelitos_por__rea[".listFields"][] = "muni_he";
$tdataDelitos_por__rea[".listFields"][] = "sector_ppd";
$tdataDelitos_por__rea[".listFields"][] = "depart_he";

$tdataDelitos_por__rea[".hideMobileList"] = array();


$tdataDelitos_por__rea[".viewFields"] = array();
$tdataDelitos_por__rea[".viewFields"][] = "area";
$tdataDelitos_por__rea[".viewFields"][] = "delito";
$tdataDelitos_por__rea[".viewFields"][] = "COUNT(delito)";
$tdataDelitos_por__rea[".viewFields"][] = "aÑo_hecho";
$tdataDelitos_por__rea[".viewFields"][] = "muni_he";
$tdataDelitos_por__rea[".viewFields"][] = "sector_ppd";
$tdataDelitos_por__rea[".viewFields"][] = "depart_he";

$tdataDelitos_por__rea[".addFields"] = array();
$tdataDelitos_por__rea[".addFields"][] = "area";
$tdataDelitos_por__rea[".addFields"][] = "delito";
$tdataDelitos_por__rea[".addFields"][] = "aÑo_hecho";
$tdataDelitos_por__rea[".addFields"][] = "muni_he";
$tdataDelitos_por__rea[".addFields"][] = "sector_ppd";
$tdataDelitos_por__rea[".addFields"][] = "depart_he";

$tdataDelitos_por__rea[".masterListFields"] = array();
$tdataDelitos_por__rea[".masterListFields"][] = "area";
$tdataDelitos_por__rea[".masterListFields"][] = "delito";
$tdataDelitos_por__rea[".masterListFields"][] = "COUNT(delito)";
$tdataDelitos_por__rea[".masterListFields"][] = "aÑo_hecho";
$tdataDelitos_por__rea[".masterListFields"][] = "muni_he";
$tdataDelitos_por__rea[".masterListFields"][] = "sector_ppd";
$tdataDelitos_por__rea[".masterListFields"][] = "depart_he";

$tdataDelitos_por__rea[".inlineAddFields"] = array();
$tdataDelitos_por__rea[".inlineAddFields"][] = "area";
$tdataDelitos_por__rea[".inlineAddFields"][] = "delito";
$tdataDelitos_por__rea[".inlineAddFields"][] = "aÑo_hecho";
$tdataDelitos_por__rea[".inlineAddFields"][] = "muni_he";
$tdataDelitos_por__rea[".inlineAddFields"][] = "sector_ppd";
$tdataDelitos_por__rea[".inlineAddFields"][] = "depart_he";

$tdataDelitos_por__rea[".editFields"] = array();
$tdataDelitos_por__rea[".editFields"][] = "area";
$tdataDelitos_por__rea[".editFields"][] = "delito";
$tdataDelitos_por__rea[".editFields"][] = "aÑo_hecho";
$tdataDelitos_por__rea[".editFields"][] = "muni_he";
$tdataDelitos_por__rea[".editFields"][] = "sector_ppd";
$tdataDelitos_por__rea[".editFields"][] = "depart_he";

$tdataDelitos_por__rea[".inlineEditFields"] = array();
$tdataDelitos_por__rea[".inlineEditFields"][] = "area";
$tdataDelitos_por__rea[".inlineEditFields"][] = "delito";
$tdataDelitos_por__rea[".inlineEditFields"][] = "aÑo_hecho";
$tdataDelitos_por__rea[".inlineEditFields"][] = "muni_he";
$tdataDelitos_por__rea[".inlineEditFields"][] = "sector_ppd";
$tdataDelitos_por__rea[".inlineEditFields"][] = "depart_he";

$tdataDelitos_por__rea[".updateSelectedFields"] = array();
$tdataDelitos_por__rea[".updateSelectedFields"][] = "area";
$tdataDelitos_por__rea[".updateSelectedFields"][] = "delito";
$tdataDelitos_por__rea[".updateSelectedFields"][] = "aÑo_hecho";
$tdataDelitos_por__rea[".updateSelectedFields"][] = "muni_he";
$tdataDelitos_por__rea[".updateSelectedFields"][] = "sector_ppd";
$tdataDelitos_por__rea[".updateSelectedFields"][] = "depart_he";


$tdataDelitos_por__rea[".exportFields"] = array();
$tdataDelitos_por__rea[".exportFields"][] = "area";
$tdataDelitos_por__rea[".exportFields"][] = "delito";
$tdataDelitos_por__rea[".exportFields"][] = "COUNT(delito)";
$tdataDelitos_por__rea[".exportFields"][] = "aÑo_hecho";
$tdataDelitos_por__rea[".exportFields"][] = "muni_he";
$tdataDelitos_por__rea[".exportFields"][] = "sector_ppd";
$tdataDelitos_por__rea[".exportFields"][] = "depart_he";

$tdataDelitos_por__rea[".importFields"] = array();
$tdataDelitos_por__rea[".importFields"][] = "area";
$tdataDelitos_por__rea[".importFields"][] = "delito";
$tdataDelitos_por__rea[".importFields"][] = "COUNT(delito)";
$tdataDelitos_por__rea[".importFields"][] = "aÑo_hecho";
$tdataDelitos_por__rea[".importFields"][] = "muni_he";
$tdataDelitos_por__rea[".importFields"][] = "sector_ppd";
$tdataDelitos_por__rea[".importFields"][] = "depart_he";

$tdataDelitos_por__rea[".printFields"] = array();
$tdataDelitos_por__rea[".printFields"][] = "area";
$tdataDelitos_por__rea[".printFields"][] = "delito";
$tdataDelitos_por__rea[".printFields"][] = "COUNT(delito)";
$tdataDelitos_por__rea[".printFields"][] = "aÑo_hecho";
$tdataDelitos_por__rea[".printFields"][] = "muni_he";
$tdataDelitos_por__rea[".printFields"][] = "sector_ppd";
$tdataDelitos_por__rea[".printFields"][] = "depart_he";

//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por__rea","area");
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

		$fdata["strField"] = "area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "area";

	
	
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








	$tdataDelitos_por__rea["area"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por__rea","delito");
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








	$tdataDelitos_por__rea["delito"] = $fdata;
//	COUNT(delito)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "COUNT(delito)";
	$fdata["GoodName"] = "COUNT_delito_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Delitos_por__rea","COUNT_delito_");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(delito)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(delito)";

	
	
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








	$tdataDelitos_por__rea["COUNT(delito)"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por__rea","a_o_hecho");
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




	$tdataDelitos_por__rea["aÑo_hecho"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por__rea","muni_he");
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




	$tdataDelitos_por__rea["muni_he"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por__rea","sector_ppd");
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




	$tdataDelitos_por__rea["sector_ppd"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por__rea","depart_he");
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




	$tdataDelitos_por__rea["depart_he"] = $fdata;


$tables_data["Delitos por área"]=&$tdataDelitos_por__rea;
$field_labels["Delitos_por__rea"] = &$fieldLabelsDelitos_por__rea;
$fieldToolTips["Delitos_por__rea"] = &$fieldToolTipsDelitos_por__rea;
$placeHolders["Delitos_por__rea"] = &$placeHoldersDelitos_por__rea;
$page_titles["Delitos_por__rea"] = &$pageTitlesDelitos_por__rea;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Delitos por área"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Delitos_por__rea()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "area,  delito,  COUNT(delito) AS `COUNT(delito)`,  `aÑo_hecho`,  muni_he,  sector_ppd,  depart_he";
$proto0["m_strFrom"] = "FROM hechos_delictivos1";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY area DESC, delito DESC";
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
	"m_strName" => "area",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por área"
));

$proto6["m_sql"] = "area";
$proto6["m_srcTableName"] = "Delitos por área";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por área"
));

$proto8["m_sql"] = "delito";
$proto8["m_srcTableName"] = "Delitos por área";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_COUNT";
$proto11["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por área"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "COUNT(delito)";
$proto10["m_srcTableName"] = "Delitos por área";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "COUNT(delito)";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por área"
));

$proto13["m_sql"] = "`aÑo_hecho`";
$proto13["m_srcTableName"] = "Delitos por área";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por área"
));

$proto15["m_sql"] = "muni_he";
$proto15["m_srcTableName"] = "Delitos por área";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por área"
));

$proto17["m_sql"] = "sector_ppd";
$proto17["m_srcTableName"] = "Delitos por área";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por área"
));

$proto19["m_sql"] = "depart_he";
$proto19["m_srcTableName"] = "Delitos por área";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "hechos_delictivos1";
$proto22["m_srcTableName"] = "Delitos por área";
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
$proto21["m_srcTableName"] = "Delitos por área";
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
	"m_strName" => "area",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por área"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por área"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por área"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por área"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por área"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por área"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por área"
));

$proto37["m_column"]=$obj;
$proto37["m_bAsc"] = 0;
$proto37["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto37);

$proto0["m_orderby"][]=$obj;					
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por área"
));

$proto39["m_column"]=$obj;
$proto39["m_bAsc"] = 0;
$proto39["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto39);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Delitos por área";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Delitos_por__rea = createSqlQuery_Delitos_por__rea();


	
		;

							

$tdataDelitos_por__rea[".sqlquery"] = $queryData_Delitos_por__rea;

$tableEvents["Delitos por área"] = new eventsBase;
$tdataDelitos_por__rea[".hasEvents"] = false;

?>