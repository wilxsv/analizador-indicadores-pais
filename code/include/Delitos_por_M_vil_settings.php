<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDelitos_por_M_vil = array();
	$tdataDelitos_por_M_vil[".truncateText"] = true;
	$tdataDelitos_por_M_vil[".NumberOfChars"] = 80;
	$tdataDelitos_por_M_vil[".ShortName"] = "Delitos_por_M_vil";
	$tdataDelitos_por_M_vil[".OwnerID"] = "";
	$tdataDelitos_por_M_vil[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsDelitos_por_M_vil = array();
$fieldToolTipsDelitos_por_M_vil = array();
$pageTitlesDelitos_por_M_vil = array();
$placeHoldersDelitos_por_M_vil = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsDelitos_por_M_vil["Spanish"] = array();
	$fieldToolTipsDelitos_por_M_vil["Spanish"] = array();
	$placeHoldersDelitos_por_M_vil["Spanish"] = array();
	$pageTitlesDelitos_por_M_vil["Spanish"] = array();
	$fieldLabelsDelitos_por_M_vil["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsDelitos_por_M_vil["Spanish"]["a_o_hecho"] = "";
	$placeHoldersDelitos_por_M_vil["Spanish"]["a_o_hecho"] = "";
	$fieldLabelsDelitos_por_M_vil["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipsDelitos_por_M_vil["Spanish"]["muni_he"] = "";
	$placeHoldersDelitos_por_M_vil["Spanish"]["muni_he"] = "";
	$fieldLabelsDelitos_por_M_vil["Spanish"]["COUNT_muni_he_"] = "COUNT(muni He)";
	$fieldToolTipsDelitos_por_M_vil["Spanish"]["COUNT_muni_he_"] = "";
	$placeHoldersDelitos_por_M_vil["Spanish"]["COUNT_muni_he_"] = "";
	$fieldLabelsDelitos_por_M_vil["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipsDelitos_por_M_vil["Spanish"]["depart_he"] = "";
	$placeHoldersDelitos_por_M_vil["Spanish"]["depart_he"] = "";
	$fieldLabelsDelitos_por_M_vil["Spanish"]["delito"] = "Delito";
	$fieldToolTipsDelitos_por_M_vil["Spanish"]["delito"] = "";
	$placeHoldersDelitos_por_M_vil["Spanish"]["delito"] = "";
	$fieldLabelsDelitos_por_M_vil["Spanish"]["movil_he"] = "Movil He";
	$fieldToolTipsDelitos_por_M_vil["Spanish"]["movil_he"] = "";
	$placeHoldersDelitos_por_M_vil["Spanish"]["movil_he"] = "";
	$fieldLabelsDelitos_por_M_vil["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsDelitos_por_M_vil["Spanish"]["sector_ppd"] = "";
	$placeHoldersDelitos_por_M_vil["Spanish"]["sector_ppd"] = "";
	if (count($fieldToolTipsDelitos_por_M_vil["Spanish"]))
		$tdataDelitos_por_M_vil[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDelitos_por_M_vil["English"] = array();
	$fieldToolTipsDelitos_por_M_vil["English"] = array();
	$placeHoldersDelitos_por_M_vil["English"] = array();
	$pageTitlesDelitos_por_M_vil["English"] = array();
	$fieldLabelsDelitos_por_M_vil["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsDelitos_por_M_vil["English"]["a_o_hecho"] = "";
	$placeHoldersDelitos_por_M_vil["English"]["a_o_hecho"] = "";
	$fieldLabelsDelitos_por_M_vil["English"]["muni_he"] = "Muni He";
	$fieldToolTipsDelitos_por_M_vil["English"]["muni_he"] = "";
	$placeHoldersDelitos_por_M_vil["English"]["muni_he"] = "";
	$fieldLabelsDelitos_por_M_vil["English"]["COUNT_muni_he_"] = "COUNT(muni He)";
	$fieldToolTipsDelitos_por_M_vil["English"]["COUNT_muni_he_"] = "";
	$placeHoldersDelitos_por_M_vil["English"]["COUNT_muni_he_"] = "";
	$fieldLabelsDelitos_por_M_vil["English"]["depart_he"] = "Depart He";
	$fieldToolTipsDelitos_por_M_vil["English"]["depart_he"] = "";
	$placeHoldersDelitos_por_M_vil["English"]["depart_he"] = "";
	$fieldLabelsDelitos_por_M_vil["English"]["delito"] = "Delito";
	$fieldToolTipsDelitos_por_M_vil["English"]["delito"] = "";
	$placeHoldersDelitos_por_M_vil["English"]["delito"] = "";
	$fieldLabelsDelitos_por_M_vil["English"]["movil_he"] = "Movil He";
	$fieldToolTipsDelitos_por_M_vil["English"]["movil_he"] = "";
	$placeHoldersDelitos_por_M_vil["English"]["movil_he"] = "";
	$fieldLabelsDelitos_por_M_vil["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsDelitos_por_M_vil["English"]["sector_ppd"] = "";
	$placeHoldersDelitos_por_M_vil["English"]["sector_ppd"] = "";
	if (count($fieldToolTipsDelitos_por_M_vil["English"]))
		$tdataDelitos_por_M_vil[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDelitos_por_M_vil[""] = array();
	$fieldToolTipsDelitos_por_M_vil[""] = array();
	$placeHoldersDelitos_por_M_vil[""] = array();
	$pageTitlesDelitos_por_M_vil[""] = array();
	if (count($fieldToolTipsDelitos_por_M_vil[""]))
		$tdataDelitos_por_M_vil[".isUseToolTips"] = true;
}





$tdataDelitos_por_M_vil[".shortTableName"] = "Delitos_por_M_vil";
$tdataDelitos_por_M_vil[".nSecOptions"] = 0;
$tdataDelitos_por_M_vil[".recsPerRowPrint"] = 1;
$tdataDelitos_por_M_vil[".mainTableOwnerID"] = "";
$tdataDelitos_por_M_vil[".moveNext"] = 1;
$tdataDelitos_por_M_vil[".entityType"] = 2;

$tdataDelitos_por_M_vil[".strOriginalTableName"] = "hechosdelictivos";

	



$tdataDelitos_por_M_vil[".showAddInPopup"] = false;

$tdataDelitos_por_M_vil[".showEditInPopup"] = false;

$tdataDelitos_por_M_vil[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDelitos_por_M_vil[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDelitos_por_M_vil[".fieldsForRegister"] = array();

$tdataDelitos_por_M_vil[".listAjax"] = false;

	$tdataDelitos_por_M_vil[".audit"] = false;

	$tdataDelitos_por_M_vil[".locking"] = false;


$tdataDelitos_por_M_vil[".add"] = true;
$tdataDelitos_por_M_vil[".afterAddAction"] = 1;
$tdataDelitos_por_M_vil[".closePopupAfterAdd"] = 1;
$tdataDelitos_por_M_vil[".afterAddActionDetTable"] = "";

$tdataDelitos_por_M_vil[".list"] = true;



$tdataDelitos_por_M_vil[".reorderRecordsByHeader"] = true;



$tdataDelitos_por_M_vil[".inlineAdd"] = true;


$tdataDelitos_por_M_vil[".exportTo"] = true;

$tdataDelitos_por_M_vil[".printFriendly"] = true;


$tdataDelitos_por_M_vil[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataDelitos_por_M_vil[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataDelitos_por_M_vil[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataDelitos_por_M_vil[".searchSaving"] = false;
//

$tdataDelitos_por_M_vil[".showSearchPanel"] = true;
		$tdataDelitos_por_M_vil[".flexibleSearch"] = true;

$tdataDelitos_por_M_vil[".isUseAjaxSuggest"] = true;






$tdataDelitos_por_M_vil[".ajaxCodeSnippetAdded"] = false;

$tdataDelitos_por_M_vil[".buttonsAdded"] = false;

$tdataDelitos_por_M_vil[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDelitos_por_M_vil[".isUseTimeForSearch"] = false;





$tdataDelitos_por_M_vil[".allSearchFields"] = array();
$tdataDelitos_por_M_vil[".filterFields"] = array();
$tdataDelitos_por_M_vil[".requiredSearchFields"] = array();

$tdataDelitos_por_M_vil[".allSearchFields"][] = "aÑo_hecho";
		$tdataDelitos_por_M_vil[".requiredSearchFields"][] = "aÑo_hecho";
$tdataDelitos_por_M_vil[".allSearchFields"][] = "muni_he";
		$tdataDelitos_por_M_vil[".requiredSearchFields"][] = "muni_he";
$tdataDelitos_por_M_vil[".allSearchFields"][] = "sector_ppd";
		$tdataDelitos_por_M_vil[".requiredSearchFields"][] = "sector_ppd";
$tdataDelitos_por_M_vil[".allSearchFields"][] = "depart_he";
		$tdataDelitos_por_M_vil[".requiredSearchFields"][] = "depart_he";



$tdataDelitos_por_M_vil[".panelSearchFields"] = array();
$tdataDelitos_por_M_vil[".searchPanelOptions"] = array();
$tdataDelitos_por_M_vil[".panelSearchFields"][] = "aÑo_hecho";
	$tdataDelitos_por_M_vil[".panelSearchFields"][] = "muni_he";
	$tdataDelitos_por_M_vil[".panelSearchFields"][] = "sector_ppd";
	$tdataDelitos_por_M_vil[".panelSearchFields"][] = "depart_he";
	

$tdataDelitos_por_M_vil[".tableType"] = "report";

$tdataDelitos_por_M_vil[".printerPageOrientation"] = 0;
$tdataDelitos_por_M_vil[".nPrinterPageScale"] = 100;

$tdataDelitos_por_M_vil[".nPrinterSplitRecords"] = 40;

$tdataDelitos_por_M_vil[".nPrinterPDFSplitRecords"] = 40;



$tdataDelitos_por_M_vil[".geocodingEnabled"] = false;

//report settings
$tdataDelitos_por_M_vil[".crossTabReport"] = true;

$tdataDelitos_por_M_vil[".reportGroupFields"] = true;
$tdataDelitos_por_M_vil[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "delito";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "movil_he";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
$tdataDelitos_por_M_vil[".reportGroupFieldsData"] = $reportGroupFields;

$tdataDelitos_por_M_vil[".reportHorizontalSummary"] = true;

$tdataDelitos_por_M_vil[".isExistTotalFields"] = true;

$tdataDelitos_por_M_vil[".reportVerticalSummary"] = true;



$tdataDelitos_por_M_vil[".repShowDet"] = true;

$tdataDelitos_por_M_vil[".reportLayout"] = 6;

//end of report settings




$tdataDelitos_por_M_vil[".listGridLayout"] = 3;

$tdataDelitos_por_M_vil[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY delito DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDelitos_por_M_vil[".strOrderBy"] = $tstrOrderBy;

$tdataDelitos_por_M_vil[".orderindexes"] = array();
$tdataDelitos_por_M_vil[".orderindexes"][] = array(7, (0 ? "ASC" : "DESC"), "delito");

$tdataDelitos_por_M_vil[".sqlHead"] = "SELECT COUNT(muni_he) AS `COUNT(muni_he)`,  `aÑo_hecho`,  muni_he,  sector_ppd,  depart_he,  movil_he,  delito AS delito";
$tdataDelitos_por_M_vil[".sqlFrom"] = "FROM hechos_delictivos1";
$tdataDelitos_por_M_vil[".sqlWhereExpr"] = "";
$tdataDelitos_por_M_vil[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDelitos_por_M_vil[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDelitos_por_M_vil[".arrGroupsPerPage"] = $arrGPP;

$tdataDelitos_por_M_vil[".highlightSearchResults"] = true;

$tableKeysDelitos_por_M_vil = array();
$tdataDelitos_por_M_vil[".Keys"] = $tableKeysDelitos_por_M_vil;

$tdataDelitos_por_M_vil[".listFields"] = array();
$tdataDelitos_por_M_vil[".listFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_M_vil[".listFields"][] = "aÑo_hecho";
$tdataDelitos_por_M_vil[".listFields"][] = "muni_he";
$tdataDelitos_por_M_vil[".listFields"][] = "sector_ppd";
$tdataDelitos_por_M_vil[".listFields"][] = "depart_he";
$tdataDelitos_por_M_vil[".listFields"][] = "movil_he";
$tdataDelitos_por_M_vil[".listFields"][] = "delito";

$tdataDelitos_por_M_vil[".hideMobileList"] = array();


$tdataDelitos_por_M_vil[".viewFields"] = array();
$tdataDelitos_por_M_vil[".viewFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_M_vil[".viewFields"][] = "aÑo_hecho";
$tdataDelitos_por_M_vil[".viewFields"][] = "muni_he";
$tdataDelitos_por_M_vil[".viewFields"][] = "sector_ppd";
$tdataDelitos_por_M_vil[".viewFields"][] = "depart_he";
$tdataDelitos_por_M_vil[".viewFields"][] = "movil_he";
$tdataDelitos_por_M_vil[".viewFields"][] = "delito";

$tdataDelitos_por_M_vil[".addFields"] = array();
$tdataDelitos_por_M_vil[".addFields"][] = "aÑo_hecho";
$tdataDelitos_por_M_vil[".addFields"][] = "muni_he";
$tdataDelitos_por_M_vil[".addFields"][] = "sector_ppd";
$tdataDelitos_por_M_vil[".addFields"][] = "depart_he";
$tdataDelitos_por_M_vil[".addFields"][] = "delito";

$tdataDelitos_por_M_vil[".masterListFields"] = array();
$tdataDelitos_por_M_vil[".masterListFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_M_vil[".masterListFields"][] = "aÑo_hecho";
$tdataDelitos_por_M_vil[".masterListFields"][] = "muni_he";
$tdataDelitos_por_M_vil[".masterListFields"][] = "sector_ppd";
$tdataDelitos_por_M_vil[".masterListFields"][] = "depart_he";
$tdataDelitos_por_M_vil[".masterListFields"][] = "movil_he";
$tdataDelitos_por_M_vil[".masterListFields"][] = "delito";

$tdataDelitos_por_M_vil[".inlineAddFields"] = array();
$tdataDelitos_por_M_vil[".inlineAddFields"][] = "aÑo_hecho";
$tdataDelitos_por_M_vil[".inlineAddFields"][] = "muni_he";
$tdataDelitos_por_M_vil[".inlineAddFields"][] = "sector_ppd";
$tdataDelitos_por_M_vil[".inlineAddFields"][] = "depart_he";
$tdataDelitos_por_M_vil[".inlineAddFields"][] = "delito";

$tdataDelitos_por_M_vil[".editFields"] = array();
$tdataDelitos_por_M_vil[".editFields"][] = "aÑo_hecho";
$tdataDelitos_por_M_vil[".editFields"][] = "muni_he";
$tdataDelitos_por_M_vil[".editFields"][] = "sector_ppd";
$tdataDelitos_por_M_vil[".editFields"][] = "depart_he";
$tdataDelitos_por_M_vil[".editFields"][] = "delito";

$tdataDelitos_por_M_vil[".inlineEditFields"] = array();
$tdataDelitos_por_M_vil[".inlineEditFields"][] = "aÑo_hecho";
$tdataDelitos_por_M_vil[".inlineEditFields"][] = "muni_he";
$tdataDelitos_por_M_vil[".inlineEditFields"][] = "sector_ppd";
$tdataDelitos_por_M_vil[".inlineEditFields"][] = "depart_he";
$tdataDelitos_por_M_vil[".inlineEditFields"][] = "delito";

$tdataDelitos_por_M_vil[".updateSelectedFields"] = array();
$tdataDelitos_por_M_vil[".updateSelectedFields"][] = "aÑo_hecho";
$tdataDelitos_por_M_vil[".updateSelectedFields"][] = "muni_he";
$tdataDelitos_por_M_vil[".updateSelectedFields"][] = "sector_ppd";
$tdataDelitos_por_M_vil[".updateSelectedFields"][] = "depart_he";
$tdataDelitos_por_M_vil[".updateSelectedFields"][] = "delito";


$tdataDelitos_por_M_vil[".exportFields"] = array();
$tdataDelitos_por_M_vil[".exportFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_M_vil[".exportFields"][] = "aÑo_hecho";
$tdataDelitos_por_M_vil[".exportFields"][] = "muni_he";
$tdataDelitos_por_M_vil[".exportFields"][] = "sector_ppd";
$tdataDelitos_por_M_vil[".exportFields"][] = "depart_he";
$tdataDelitos_por_M_vil[".exportFields"][] = "movil_he";
$tdataDelitos_por_M_vil[".exportFields"][] = "delito";

$tdataDelitos_por_M_vil[".importFields"] = array();
$tdataDelitos_por_M_vil[".importFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_M_vil[".importFields"][] = "aÑo_hecho";
$tdataDelitos_por_M_vil[".importFields"][] = "muni_he";
$tdataDelitos_por_M_vil[".importFields"][] = "sector_ppd";
$tdataDelitos_por_M_vil[".importFields"][] = "depart_he";
$tdataDelitos_por_M_vil[".importFields"][] = "movil_he";
$tdataDelitos_por_M_vil[".importFields"][] = "delito";

$tdataDelitos_por_M_vil[".printFields"] = array();
$tdataDelitos_por_M_vil[".printFields"][] = "COUNT(muni_he)";
$tdataDelitos_por_M_vil[".printFields"][] = "aÑo_hecho";
$tdataDelitos_por_M_vil[".printFields"][] = "muni_he";
$tdataDelitos_por_M_vil[".printFields"][] = "sector_ppd";
$tdataDelitos_por_M_vil[".printFields"][] = "depart_he";
$tdataDelitos_por_M_vil[".printFields"][] = "movil_he";
$tdataDelitos_por_M_vil[".printFields"][] = "delito";

//	COUNT(muni_he)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "COUNT(muni_he)";
	$fdata["GoodName"] = "COUNT_muni_he_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Delitos_por_M_vil","COUNT_muni_he_");
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








	$tdataDelitos_por_M_vil["COUNT(muni_he)"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_M_vil","a_o_hecho");
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




	$tdataDelitos_por_M_vil["aÑo_hecho"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_M_vil","muni_he");
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




	$tdataDelitos_por_M_vil["muni_he"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_M_vil","sector_ppd");
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




	$tdataDelitos_por_M_vil["sector_ppd"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_M_vil","depart_he");
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




	$tdataDelitos_por_M_vil["depart_he"] = $fdata;
//	movil_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "movil_he";
	$fdata["GoodName"] = "movil_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_M_vil","movil_he");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "movil_he";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "movil_he";

	
	
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








	$tdataDelitos_por_M_vil["movil_he"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_M_vil","delito");
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








	$tdataDelitos_por_M_vil["delito"] = $fdata;


$tables_data["Delitos por Móvil"]=&$tdataDelitos_por_M_vil;
$field_labels["Delitos_por_M_vil"] = &$fieldLabelsDelitos_por_M_vil;
$fieldToolTips["Delitos_por_M_vil"] = &$fieldToolTipsDelitos_por_M_vil;
$placeHolders["Delitos_por_M_vil"] = &$placeHoldersDelitos_por_M_vil;
$page_titles["Delitos_por_M_vil"] = &$pageTitlesDelitos_por_M_vil;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Delitos por Móvil"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Delitos_por_M_vil()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COUNT(muni_he) AS `COUNT(muni_he)`,  `aÑo_hecho`,  muni_he,  sector_ppd,  depart_he,  movil_he,  delito AS delito";
$proto0["m_strFrom"] = "FROM hechos_delictivos1";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY delito DESC";
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
			$proto7=array();
$proto7["m_functiontype"] = "SQLF_COUNT";
$proto7["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por Móvil"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto7);

$proto6["m_sql"] = "COUNT(muni_he)";
$proto6["m_srcTableName"] = "Delitos por Móvil";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "COUNT(muni_he)";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por Móvil"
));

$proto9["m_sql"] = "`aÑo_hecho`";
$proto9["m_srcTableName"] = "Delitos por Móvil";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por Móvil"
));

$proto11["m_sql"] = "muni_he";
$proto11["m_srcTableName"] = "Delitos por Móvil";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por Móvil"
));

$proto13["m_sql"] = "sector_ppd";
$proto13["m_srcTableName"] = "Delitos por Móvil";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por Móvil"
));

$proto15["m_sql"] = "depart_he";
$proto15["m_srcTableName"] = "Delitos por Móvil";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "movil_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por Móvil"
));

$proto17["m_sql"] = "movil_he";
$proto17["m_srcTableName"] = "Delitos por Móvil";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por Móvil"
));

$proto19["m_sql"] = "delito";
$proto19["m_srcTableName"] = "Delitos por Móvil";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "delito";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "hechos_delictivos1";
$proto22["m_srcTableName"] = "Delitos por Móvil";
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
$proto21["m_srcTableName"] = "Delitos por Móvil";
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
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por Móvil"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "movil_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por Móvil"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por Móvil"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por Móvil"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por Móvil"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por Móvil"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por Móvil"
));

$proto37["m_column"]=$obj;
$proto37["m_bAsc"] = 0;
$proto37["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto37);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Delitos por Móvil";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Delitos_por_M_vil = createSqlQuery_Delitos_por_M_vil();


	
		;

							

$tdataDelitos_por_M_vil[".sqlquery"] = $queryData_Delitos_por_M_vil;

$tableEvents["Delitos por Móvil"] = new eventsBase;
$tdataDelitos_por_M_vil[".hasEvents"] = false;

?>