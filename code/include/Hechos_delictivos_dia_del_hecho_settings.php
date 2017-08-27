<?php
require_once(getabspath("classes/cipherer.php"));




$tdataHechos_delictivos_dia_del_hecho = array();
	$tdataHechos_delictivos_dia_del_hecho[".truncateText"] = true;
	$tdataHechos_delictivos_dia_del_hecho[".NumberOfChars"] = 80;
	$tdataHechos_delictivos_dia_del_hecho[".ShortName"] = "Hechos_delictivos_dia_del_hecho";
	$tdataHechos_delictivos_dia_del_hecho[".OwnerID"] = "";
	$tdataHechos_delictivos_dia_del_hecho[".OriginalTable"] = "hechos_delictivos1";

//	field labels
$fieldLabelsHechos_delictivos_dia_del_hecho = array();
$fieldToolTipsHechos_delictivos_dia_del_hecho = array();
$pageTitlesHechos_delictivos_dia_del_hecho = array();
$placeHoldersHechos_delictivos_dia_del_hecho = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsHechos_delictivos_dia_del_hecho["Spanish"] = array();
	$fieldToolTipsHechos_delictivos_dia_del_hecho["Spanish"] = array();
	$placeHoldersHechos_delictivos_dia_del_hecho["Spanish"] = array();
	$pageTitlesHechos_delictivos_dia_del_hecho["Spanish"] = array();
	$fieldLabelsHechos_delictivos_dia_del_hecho["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipsHechos_delictivos_dia_del_hecho["Spanish"]["depart_he"] = "";
	$placeHoldersHechos_delictivos_dia_del_hecho["Spanish"]["depart_he"] = "";
	$fieldLabelsHechos_delictivos_dia_del_hecho["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipsHechos_delictivos_dia_del_hecho["Spanish"]["muni_he"] = "";
	$placeHoldersHechos_delictivos_dia_del_hecho["Spanish"]["muni_he"] = "";
	$fieldLabelsHechos_delictivos_dia_del_hecho["Spanish"]["delito"] = "Delito";
	$fieldToolTipsHechos_delictivos_dia_del_hecho["Spanish"]["delito"] = "";
	$placeHoldersHechos_delictivos_dia_del_hecho["Spanish"]["delito"] = "";
	$fieldLabelsHechos_delictivos_dia_del_hecho["Spanish"]["dia_hecho"] = "Dia Hecho";
	$fieldToolTipsHechos_delictivos_dia_del_hecho["Spanish"]["dia_hecho"] = "";
	$placeHoldersHechos_delictivos_dia_del_hecho["Spanish"]["dia_hecho"] = "";
	$fieldLabelsHechos_delictivos_dia_del_hecho["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsHechos_delictivos_dia_del_hecho["Spanish"]["sector_ppd"] = "";
	$placeHoldersHechos_delictivos_dia_del_hecho["Spanish"]["sector_ppd"] = "";
	$fieldLabelsHechos_delictivos_dia_del_hecho["Spanish"]["COUNT_muni_he_"] = "COUNT(muni He)";
	$fieldToolTipsHechos_delictivos_dia_del_hecho["Spanish"]["COUNT_muni_he_"] = "";
	$placeHoldersHechos_delictivos_dia_del_hecho["Spanish"]["COUNT_muni_he_"] = "";
	if (count($fieldToolTipsHechos_delictivos_dia_del_hecho["Spanish"]))
		$tdataHechos_delictivos_dia_del_hecho[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsHechos_delictivos_dia_del_hecho["English"] = array();
	$fieldToolTipsHechos_delictivos_dia_del_hecho["English"] = array();
	$placeHoldersHechos_delictivos_dia_del_hecho["English"] = array();
	$pageTitlesHechos_delictivos_dia_del_hecho["English"] = array();
	$fieldLabelsHechos_delictivos_dia_del_hecho["English"]["depart_he"] = "Depart He";
	$fieldToolTipsHechos_delictivos_dia_del_hecho["English"]["depart_he"] = "";
	$placeHoldersHechos_delictivos_dia_del_hecho["English"]["depart_he"] = "";
	$fieldLabelsHechos_delictivos_dia_del_hecho["English"]["muni_he"] = "Muni He";
	$fieldToolTipsHechos_delictivos_dia_del_hecho["English"]["muni_he"] = "";
	$placeHoldersHechos_delictivos_dia_del_hecho["English"]["muni_he"] = "";
	$fieldLabelsHechos_delictivos_dia_del_hecho["English"]["delito"] = "Delito";
	$fieldToolTipsHechos_delictivos_dia_del_hecho["English"]["delito"] = "";
	$placeHoldersHechos_delictivos_dia_del_hecho["English"]["delito"] = "";
	$fieldLabelsHechos_delictivos_dia_del_hecho["English"]["dia_hecho"] = "Dia Hecho";
	$fieldToolTipsHechos_delictivos_dia_del_hecho["English"]["dia_hecho"] = "";
	$placeHoldersHechos_delictivos_dia_del_hecho["English"]["dia_hecho"] = "";
	$fieldLabelsHechos_delictivos_dia_del_hecho["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsHechos_delictivos_dia_del_hecho["English"]["sector_ppd"] = "";
	$placeHoldersHechos_delictivos_dia_del_hecho["English"]["sector_ppd"] = "";
	$fieldLabelsHechos_delictivos_dia_del_hecho["English"]["COUNT_muni_he_"] = "COUNT(muni He)";
	$fieldToolTipsHechos_delictivos_dia_del_hecho["English"]["COUNT_muni_he_"] = "";
	$placeHoldersHechos_delictivos_dia_del_hecho["English"]["COUNT_muni_he_"] = "";
	if (count($fieldToolTipsHechos_delictivos_dia_del_hecho["English"]))
		$tdataHechos_delictivos_dia_del_hecho[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsHechos_delictivos_dia_del_hecho[""] = array();
	$fieldToolTipsHechos_delictivos_dia_del_hecho[""] = array();
	$placeHoldersHechos_delictivos_dia_del_hecho[""] = array();
	$pageTitlesHechos_delictivos_dia_del_hecho[""] = array();
	if (count($fieldToolTipsHechos_delictivos_dia_del_hecho[""]))
		$tdataHechos_delictivos_dia_del_hecho[".isUseToolTips"] = true;
}





$tdataHechos_delictivos_dia_del_hecho[".shortTableName"] = "Hechos_delictivos_dia_del_hecho";
$tdataHechos_delictivos_dia_del_hecho[".nSecOptions"] = 0;
$tdataHechos_delictivos_dia_del_hecho[".recsPerRowPrint"] = 1;
$tdataHechos_delictivos_dia_del_hecho[".mainTableOwnerID"] = "";
$tdataHechos_delictivos_dia_del_hecho[".moveNext"] = 1;
$tdataHechos_delictivos_dia_del_hecho[".entityType"] = 2;

$tdataHechos_delictivos_dia_del_hecho[".strOriginalTableName"] = "hechos_delictivos1";

	



$tdataHechos_delictivos_dia_del_hecho[".showAddInPopup"] = false;

$tdataHechos_delictivos_dia_del_hecho[".showEditInPopup"] = false;

$tdataHechos_delictivos_dia_del_hecho[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataHechos_delictivos_dia_del_hecho[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataHechos_delictivos_dia_del_hecho[".fieldsForRegister"] = array();

$tdataHechos_delictivos_dia_del_hecho[".listAjax"] = false;

	$tdataHechos_delictivos_dia_del_hecho[".audit"] = false;

	$tdataHechos_delictivos_dia_del_hecho[".locking"] = false;



$tdataHechos_delictivos_dia_del_hecho[".list"] = true;



$tdataHechos_delictivos_dia_del_hecho[".reorderRecordsByHeader"] = true;





$tdataHechos_delictivos_dia_del_hecho[".exportTo"] = true;

$tdataHechos_delictivos_dia_del_hecho[".printFriendly"] = true;


$tdataHechos_delictivos_dia_del_hecho[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataHechos_delictivos_dia_del_hecho[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataHechos_delictivos_dia_del_hecho[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataHechos_delictivos_dia_del_hecho[".searchSaving"] = false;
//

$tdataHechos_delictivos_dia_del_hecho[".showSearchPanel"] = true;
		$tdataHechos_delictivos_dia_del_hecho[".flexibleSearch"] = true;

$tdataHechos_delictivos_dia_del_hecho[".isUseAjaxSuggest"] = true;






$tdataHechos_delictivos_dia_del_hecho[".ajaxCodeSnippetAdded"] = false;

$tdataHechos_delictivos_dia_del_hecho[".buttonsAdded"] = false;

$tdataHechos_delictivos_dia_del_hecho[".addPageEvents"] = false;

// use timepicker for search panel
$tdataHechos_delictivos_dia_del_hecho[".isUseTimeForSearch"] = false;





$tdataHechos_delictivos_dia_del_hecho[".allSearchFields"] = array();
$tdataHechos_delictivos_dia_del_hecho[".filterFields"] = array();
$tdataHechos_delictivos_dia_del_hecho[".requiredSearchFields"] = array();

$tdataHechos_delictivos_dia_del_hecho[".allSearchFields"][] = "depart_he";
		$tdataHechos_delictivos_dia_del_hecho[".requiredSearchFields"][] = "depart_he";
$tdataHechos_delictivos_dia_del_hecho[".allSearchFields"][] = "muni_he";
		$tdataHechos_delictivos_dia_del_hecho[".requiredSearchFields"][] = "muni_he";
$tdataHechos_delictivos_dia_del_hecho[".allSearchFields"][] = "sector_ppd";
	

$tdataHechos_delictivos_dia_del_hecho[".googleLikeFields"] = array();
$tdataHechos_delictivos_dia_del_hecho[".googleLikeFields"][] = "depart_he";
$tdataHechos_delictivos_dia_del_hecho[".googleLikeFields"][] = "muni_he";
$tdataHechos_delictivos_dia_del_hecho[".googleLikeFields"][] = "sector_ppd";

$tdataHechos_delictivos_dia_del_hecho[".panelSearchFields"] = array();
$tdataHechos_delictivos_dia_del_hecho[".searchPanelOptions"] = array();
$tdataHechos_delictivos_dia_del_hecho[".panelSearchFields"][] = "depart_he";
	$tdataHechos_delictivos_dia_del_hecho[".panelSearchFields"][] = "muni_he";
	$tdataHechos_delictivos_dia_del_hecho[".panelSearchFields"][] = "sector_ppd";
	
$tdataHechos_delictivos_dia_del_hecho[".advSearchFields"] = array();
$tdataHechos_delictivos_dia_del_hecho[".advSearchFields"][] = "depart_he";
$tdataHechos_delictivos_dia_del_hecho[".advSearchFields"][] = "muni_he";
$tdataHechos_delictivos_dia_del_hecho[".advSearchFields"][] = "sector_ppd";

$tdataHechos_delictivos_dia_del_hecho[".tableType"] = "report";

$tdataHechos_delictivos_dia_del_hecho[".printerPageOrientation"] = 0;
$tdataHechos_delictivos_dia_del_hecho[".nPrinterPageScale"] = 100;

$tdataHechos_delictivos_dia_del_hecho[".nPrinterSplitRecords"] = 40;

$tdataHechos_delictivos_dia_del_hecho[".nPrinterPDFSplitRecords"] = 40;



$tdataHechos_delictivos_dia_del_hecho[".geocodingEnabled"] = false;

//report settings
$tdataHechos_delictivos_dia_del_hecho[".crossTabReport"] = true;

$tdataHechos_delictivos_dia_del_hecho[".reportGroupFields"] = true;
$tdataHechos_delictivos_dia_del_hecho[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "dia_hecho";
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
$tdataHechos_delictivos_dia_del_hecho[".reportGroupFieldsData"] = $reportGroupFields;

$tdataHechos_delictivos_dia_del_hecho[".reportHorizontalSummary"] = true;

$tdataHechos_delictivos_dia_del_hecho[".isExistTotalFields"] = true;

$tdataHechos_delictivos_dia_del_hecho[".reportVerticalSummary"] = true;



$tdataHechos_delictivos_dia_del_hecho[".repShowDet"] = true;

$tdataHechos_delictivos_dia_del_hecho[".reportLayout"] = 6;

//end of report settings




$tdataHechos_delictivos_dia_del_hecho[".listGridLayout"] = 3;

$tdataHechos_delictivos_dia_del_hecho[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataHechos_delictivos_dia_del_hecho[".strOrderBy"] = $tstrOrderBy;

$tdataHechos_delictivos_dia_del_hecho[".orderindexes"] = array();

$tdataHechos_delictivos_dia_del_hecho[".sqlHead"] = "SELECT depart_he,  muni_he,  delito,  sector_ppd,  dia_hecho,  COUNT(muni_he) AS `COUNT(muni_he)`";
$tdataHechos_delictivos_dia_del_hecho[".sqlFrom"] = "FROM hechos_delictivos1";
$tdataHechos_delictivos_dia_del_hecho[".sqlWhereExpr"] = "";
$tdataHechos_delictivos_dia_del_hecho[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataHechos_delictivos_dia_del_hecho[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataHechos_delictivos_dia_del_hecho[".arrGroupsPerPage"] = $arrGPP;

$tdataHechos_delictivos_dia_del_hecho[".highlightSearchResults"] = true;

$tableKeysHechos_delictivos_dia_del_hecho = array();
$tdataHechos_delictivos_dia_del_hecho[".Keys"] = $tableKeysHechos_delictivos_dia_del_hecho;

$tdataHechos_delictivos_dia_del_hecho[".listFields"] = array();
$tdataHechos_delictivos_dia_del_hecho[".listFields"][] = "depart_he";
$tdataHechos_delictivos_dia_del_hecho[".listFields"][] = "muni_he";
$tdataHechos_delictivos_dia_del_hecho[".listFields"][] = "delito";
$tdataHechos_delictivos_dia_del_hecho[".listFields"][] = "sector_ppd";
$tdataHechos_delictivos_dia_del_hecho[".listFields"][] = "dia_hecho";
$tdataHechos_delictivos_dia_del_hecho[".listFields"][] = "COUNT(muni_he)";

$tdataHechos_delictivos_dia_del_hecho[".hideMobileList"] = array();


$tdataHechos_delictivos_dia_del_hecho[".viewFields"] = array();
$tdataHechos_delictivos_dia_del_hecho[".viewFields"][] = "depart_he";
$tdataHechos_delictivos_dia_del_hecho[".viewFields"][] = "muni_he";
$tdataHechos_delictivos_dia_del_hecho[".viewFields"][] = "delito";
$tdataHechos_delictivos_dia_del_hecho[".viewFields"][] = "sector_ppd";
$tdataHechos_delictivos_dia_del_hecho[".viewFields"][] = "dia_hecho";
$tdataHechos_delictivos_dia_del_hecho[".viewFields"][] = "COUNT(muni_he)";

$tdataHechos_delictivos_dia_del_hecho[".addFields"] = array();
$tdataHechos_delictivos_dia_del_hecho[".addFields"][] = "depart_he";
$tdataHechos_delictivos_dia_del_hecho[".addFields"][] = "muni_he";
$tdataHechos_delictivos_dia_del_hecho[".addFields"][] = "delito";
$tdataHechos_delictivos_dia_del_hecho[".addFields"][] = "sector_ppd";
$tdataHechos_delictivos_dia_del_hecho[".addFields"][] = "dia_hecho";

$tdataHechos_delictivos_dia_del_hecho[".masterListFields"] = array();
$tdataHechos_delictivos_dia_del_hecho[".masterListFields"][] = "depart_he";
$tdataHechos_delictivos_dia_del_hecho[".masterListFields"][] = "muni_he";
$tdataHechos_delictivos_dia_del_hecho[".masterListFields"][] = "delito";
$tdataHechos_delictivos_dia_del_hecho[".masterListFields"][] = "sector_ppd";
$tdataHechos_delictivos_dia_del_hecho[".masterListFields"][] = "dia_hecho";
$tdataHechos_delictivos_dia_del_hecho[".masterListFields"][] = "COUNT(muni_he)";

$tdataHechos_delictivos_dia_del_hecho[".inlineAddFields"] = array();
$tdataHechos_delictivos_dia_del_hecho[".inlineAddFields"][] = "depart_he";
$tdataHechos_delictivos_dia_del_hecho[".inlineAddFields"][] = "muni_he";
$tdataHechos_delictivos_dia_del_hecho[".inlineAddFields"][] = "delito";
$tdataHechos_delictivos_dia_del_hecho[".inlineAddFields"][] = "sector_ppd";
$tdataHechos_delictivos_dia_del_hecho[".inlineAddFields"][] = "dia_hecho";

$tdataHechos_delictivos_dia_del_hecho[".editFields"] = array();
$tdataHechos_delictivos_dia_del_hecho[".editFields"][] = "depart_he";
$tdataHechos_delictivos_dia_del_hecho[".editFields"][] = "muni_he";
$tdataHechos_delictivos_dia_del_hecho[".editFields"][] = "delito";
$tdataHechos_delictivos_dia_del_hecho[".editFields"][] = "sector_ppd";
$tdataHechos_delictivos_dia_del_hecho[".editFields"][] = "dia_hecho";

$tdataHechos_delictivos_dia_del_hecho[".inlineEditFields"] = array();
$tdataHechos_delictivos_dia_del_hecho[".inlineEditFields"][] = "depart_he";
$tdataHechos_delictivos_dia_del_hecho[".inlineEditFields"][] = "muni_he";
$tdataHechos_delictivos_dia_del_hecho[".inlineEditFields"][] = "delito";
$tdataHechos_delictivos_dia_del_hecho[".inlineEditFields"][] = "sector_ppd";
$tdataHechos_delictivos_dia_del_hecho[".inlineEditFields"][] = "dia_hecho";

$tdataHechos_delictivos_dia_del_hecho[".updateSelectedFields"] = array();
$tdataHechos_delictivos_dia_del_hecho[".updateSelectedFields"][] = "depart_he";
$tdataHechos_delictivos_dia_del_hecho[".updateSelectedFields"][] = "muni_he";
$tdataHechos_delictivos_dia_del_hecho[".updateSelectedFields"][] = "delito";
$tdataHechos_delictivos_dia_del_hecho[".updateSelectedFields"][] = "sector_ppd";
$tdataHechos_delictivos_dia_del_hecho[".updateSelectedFields"][] = "dia_hecho";


$tdataHechos_delictivos_dia_del_hecho[".exportFields"] = array();
$tdataHechos_delictivos_dia_del_hecho[".exportFields"][] = "depart_he";
$tdataHechos_delictivos_dia_del_hecho[".exportFields"][] = "muni_he";
$tdataHechos_delictivos_dia_del_hecho[".exportFields"][] = "delito";
$tdataHechos_delictivos_dia_del_hecho[".exportFields"][] = "sector_ppd";
$tdataHechos_delictivos_dia_del_hecho[".exportFields"][] = "dia_hecho";
$tdataHechos_delictivos_dia_del_hecho[".exportFields"][] = "COUNT(muni_he)";

$tdataHechos_delictivos_dia_del_hecho[".importFields"] = array();
$tdataHechos_delictivos_dia_del_hecho[".importFields"][] = "depart_he";
$tdataHechos_delictivos_dia_del_hecho[".importFields"][] = "muni_he";
$tdataHechos_delictivos_dia_del_hecho[".importFields"][] = "delito";
$tdataHechos_delictivos_dia_del_hecho[".importFields"][] = "sector_ppd";
$tdataHechos_delictivos_dia_del_hecho[".importFields"][] = "dia_hecho";
$tdataHechos_delictivos_dia_del_hecho[".importFields"][] = "COUNT(muni_he)";

$tdataHechos_delictivos_dia_del_hecho[".printFields"] = array();
$tdataHechos_delictivos_dia_del_hecho[".printFields"][] = "depart_he";
$tdataHechos_delictivos_dia_del_hecho[".printFields"][] = "muni_he";
$tdataHechos_delictivos_dia_del_hecho[".printFields"][] = "delito";
$tdataHechos_delictivos_dia_del_hecho[".printFields"][] = "sector_ppd";
$tdataHechos_delictivos_dia_del_hecho[".printFields"][] = "dia_hecho";
$tdataHechos_delictivos_dia_del_hecho[".printFields"][] = "COUNT(muni_he)";

//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Hechos_delictivos_dia_del_hecho","depart_he");
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




	$tdataHechos_delictivos_dia_del_hecho["depart_he"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Hechos_delictivos_dia_del_hecho","muni_he");
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




	$tdataHechos_delictivos_dia_del_hecho["muni_he"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Hechos_delictivos_dia_del_hecho","delito");
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








	$tdataHechos_delictivos_dia_del_hecho["delito"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Hechos_delictivos_dia_del_hecho","sector_ppd");
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




	$tdataHechos_delictivos_dia_del_hecho["sector_ppd"] = $fdata;
//	dia_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dia_hecho";
	$fdata["GoodName"] = "dia_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Hechos_delictivos_dia_del_hecho","dia_hecho");
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

		$fdata["strField"] = "dia_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dia_hecho";

	
	
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








	$tdataHechos_delictivos_dia_del_hecho["dia_hecho"] = $fdata;
//	COUNT(muni_he)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "COUNT(muni_he)";
	$fdata["GoodName"] = "COUNT_muni_he_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Hechos_delictivos_dia_del_hecho","COUNT_muni_he_");
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








	$tdataHechos_delictivos_dia_del_hecho["COUNT(muni_he)"] = $fdata;


$tables_data["Hechos delictivos dia del hecho"]=&$tdataHechos_delictivos_dia_del_hecho;
$field_labels["Hechos_delictivos_dia_del_hecho"] = &$fieldLabelsHechos_delictivos_dia_del_hecho;
$fieldToolTips["Hechos_delictivos_dia_del_hecho"] = &$fieldToolTipsHechos_delictivos_dia_del_hecho;
$placeHolders["Hechos_delictivos_dia_del_hecho"] = &$placeHoldersHechos_delictivos_dia_del_hecho;
$page_titles["Hechos_delictivos_dia_del_hecho"] = &$pageTitlesHechos_delictivos_dia_del_hecho;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Hechos delictivos dia del hecho"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Hechos_delictivos_dia_del_hecho()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "depart_he,  muni_he,  delito,  sector_ppd,  dia_hecho,  COUNT(muni_he) AS `COUNT(muni_he)`";
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
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hechos delictivos dia del hecho"
));

$proto6["m_sql"] = "depart_he";
$proto6["m_srcTableName"] = "Hechos delictivos dia del hecho";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hechos delictivos dia del hecho"
));

$proto8["m_sql"] = "muni_he";
$proto8["m_srcTableName"] = "Hechos delictivos dia del hecho";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hechos delictivos dia del hecho"
));

$proto10["m_sql"] = "delito";
$proto10["m_srcTableName"] = "Hechos delictivos dia del hecho";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hechos delictivos dia del hecho"
));

$proto12["m_sql"] = "sector_ppd";
$proto12["m_srcTableName"] = "Hechos delictivos dia del hecho";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hechos delictivos dia del hecho"
));

$proto14["m_sql"] = "dia_hecho";
$proto14["m_srcTableName"] = "Hechos delictivos dia del hecho";
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
	"m_srcTableName" => "Hechos delictivos dia del hecho"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "COUNT(muni_he)";
$proto16["m_srcTableName"] = "Hechos delictivos dia del hecho";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "COUNT(muni_he)";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "hechos_delictivos1";
$proto20["m_srcTableName"] = "Hechos delictivos dia del hecho";
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
$proto19["m_srcTableName"] = "Hechos delictivos dia del hecho";
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
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hechos delictivos dia del hecho"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hechos delictivos dia del hecho"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hechos delictivos dia del hecho"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hechos delictivos dia del hecho"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "dia_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Hechos delictivos dia del hecho"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Hechos delictivos dia del hecho";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Hechos_delictivos_dia_del_hecho = createSqlQuery_Hechos_delictivos_dia_del_hecho();


	
		;

						

$tdataHechos_delictivos_dia_del_hecho[".sqlquery"] = $queryData_Hechos_delictivos_dia_del_hecho;

$tableEvents["Hechos delictivos dia del hecho"] = new eventsBase;
$tdataHechos_delictivos_dia_del_hecho[".hasEvents"] = false;

?>