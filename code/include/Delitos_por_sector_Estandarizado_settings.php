<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDelitos_por_sector_Estandarizado = array();
	$tdataDelitos_por_sector_Estandarizado[".truncateText"] = true;
	$tdataDelitos_por_sector_Estandarizado[".NumberOfChars"] = 80;
	$tdataDelitos_por_sector_Estandarizado[".ShortName"] = "Delitos_por_sector_Estandarizado";
	$tdataDelitos_por_sector_Estandarizado[".OwnerID"] = "";
	$tdataDelitos_por_sector_Estandarizado[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsDelitos_por_sector_Estandarizado = array();
$fieldToolTipsDelitos_por_sector_Estandarizado = array();
$pageTitlesDelitos_por_sector_Estandarizado = array();
$placeHoldersDelitos_por_sector_Estandarizado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsDelitos_por_sector_Estandarizado["Spanish"] = array();
	$fieldToolTipsDelitos_por_sector_Estandarizado["Spanish"] = array();
	$placeHoldersDelitos_por_sector_Estandarizado["Spanish"] = array();
	$pageTitlesDelitos_por_sector_Estandarizado["Spanish"] = array();
	$fieldLabelsDelitos_por_sector_Estandarizado["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsDelitos_por_sector_Estandarizado["Spanish"]["sector_ppd"] = "";
	$placeHoldersDelitos_por_sector_Estandarizado["Spanish"]["sector_ppd"] = "";
	$fieldLabelsDelitos_por_sector_Estandarizado["Spanish"]["delito"] = "Delito";
	$fieldToolTipsDelitos_por_sector_Estandarizado["Spanish"]["delito"] = "";
	$placeHoldersDelitos_por_sector_Estandarizado["Spanish"]["delito"] = "";
	$fieldLabelsDelitos_por_sector_Estandarizado["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipsDelitos_por_sector_Estandarizado["Spanish"]["muni_he"] = "";
	$placeHoldersDelitos_por_sector_Estandarizado["Spanish"]["muni_he"] = "";
	$fieldLabelsDelitos_por_sector_Estandarizado["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipsDelitos_por_sector_Estandarizado["Spanish"]["depart_he"] = "";
	$placeHoldersDelitos_por_sector_Estandarizado["Spanish"]["depart_he"] = "";
	$fieldLabelsDelitos_por_sector_Estandarizado["Spanish"]["a_o_hecho"] = "Año Hecho";
	$fieldToolTipsDelitos_por_sector_Estandarizado["Spanish"]["a_o_hecho"] = "";
	$placeHoldersDelitos_por_sector_Estandarizado["Spanish"]["a_o_hecho"] = "";
	$fieldLabelsDelitos_por_sector_Estandarizado["Spanish"]["COUNT_muni_he_"] = "COUNT(muni He)";
	$fieldToolTipsDelitos_por_sector_Estandarizado["Spanish"]["COUNT_muni_he_"] = "";
	$placeHoldersDelitos_por_sector_Estandarizado["Spanish"]["COUNT_muni_he_"] = "";
	if (count($fieldToolTipsDelitos_por_sector_Estandarizado["Spanish"]))
		$tdataDelitos_por_sector_Estandarizado[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDelitos_por_sector_Estandarizado["English"] = array();
	$fieldToolTipsDelitos_por_sector_Estandarizado["English"] = array();
	$placeHoldersDelitos_por_sector_Estandarizado["English"] = array();
	$pageTitlesDelitos_por_sector_Estandarizado["English"] = array();
	$fieldLabelsDelitos_por_sector_Estandarizado["English"]["depart_he"] = "Depart He";
	$fieldToolTipsDelitos_por_sector_Estandarizado["English"]["depart_he"] = "";
	$placeHoldersDelitos_por_sector_Estandarizado["English"]["depart_he"] = "";
	$fieldLabelsDelitos_por_sector_Estandarizado["English"]["a_o_hecho"] = "Año Hecho";
	$fieldToolTipsDelitos_por_sector_Estandarizado["English"]["a_o_hecho"] = "";
	$placeHoldersDelitos_por_sector_Estandarizado["English"]["a_o_hecho"] = "";
	$fieldLabelsDelitos_por_sector_Estandarizado["English"]["COUNT_muni_he_"] = "COUNT(muni He)";
	$fieldToolTipsDelitos_por_sector_Estandarizado["English"]["COUNT_muni_he_"] = "";
	$placeHoldersDelitos_por_sector_Estandarizado["English"]["COUNT_muni_he_"] = "";
	$fieldLabelsDelitos_por_sector_Estandarizado["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsDelitos_por_sector_Estandarizado["English"]["sector_ppd"] = "";
	$placeHoldersDelitos_por_sector_Estandarizado["English"]["sector_ppd"] = "";
	$fieldLabelsDelitos_por_sector_Estandarizado["English"]["delito"] = "Delito";
	$fieldToolTipsDelitos_por_sector_Estandarizado["English"]["delito"] = "";
	$placeHoldersDelitos_por_sector_Estandarizado["English"]["delito"] = "";
	$fieldLabelsDelitos_por_sector_Estandarizado["English"]["muni_he"] = "Muni He";
	$fieldToolTipsDelitos_por_sector_Estandarizado["English"]["muni_he"] = "";
	$placeHoldersDelitos_por_sector_Estandarizado["English"]["muni_he"] = "";
	if (count($fieldToolTipsDelitos_por_sector_Estandarizado["English"]))
		$tdataDelitos_por_sector_Estandarizado[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDelitos_por_sector_Estandarizado[""] = array();
	$fieldToolTipsDelitos_por_sector_Estandarizado[""] = array();
	$placeHoldersDelitos_por_sector_Estandarizado[""] = array();
	$pageTitlesDelitos_por_sector_Estandarizado[""] = array();
	if (count($fieldToolTipsDelitos_por_sector_Estandarizado[""]))
		$tdataDelitos_por_sector_Estandarizado[".isUseToolTips"] = true;
}





$tdataDelitos_por_sector_Estandarizado[".shortTableName"] = "Delitos_por_sector_Estandarizado";
$tdataDelitos_por_sector_Estandarizado[".nSecOptions"] = 0;
$tdataDelitos_por_sector_Estandarizado[".recsPerRowPrint"] = 1;
$tdataDelitos_por_sector_Estandarizado[".mainTableOwnerID"] = "";
$tdataDelitos_por_sector_Estandarizado[".moveNext"] = 1;
$tdataDelitos_por_sector_Estandarizado[".entityType"] = 2;

$tdataDelitos_por_sector_Estandarizado[".strOriginalTableName"] = "hechosdelictivos";

	



$tdataDelitos_por_sector_Estandarizado[".showAddInPopup"] = false;

$tdataDelitos_por_sector_Estandarizado[".showEditInPopup"] = false;

$tdataDelitos_por_sector_Estandarizado[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDelitos_por_sector_Estandarizado[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDelitos_por_sector_Estandarizado[".fieldsForRegister"] = array();

$tdataDelitos_por_sector_Estandarizado[".listAjax"] = false;

	$tdataDelitos_por_sector_Estandarizado[".audit"] = false;

	$tdataDelitos_por_sector_Estandarizado[".locking"] = false;


$tdataDelitos_por_sector_Estandarizado[".add"] = true;
$tdataDelitos_por_sector_Estandarizado[".afterAddAction"] = 1;
$tdataDelitos_por_sector_Estandarizado[".closePopupAfterAdd"] = 1;
$tdataDelitos_por_sector_Estandarizado[".afterAddActionDetTable"] = "";

$tdataDelitos_por_sector_Estandarizado[".list"] = true;



$tdataDelitos_por_sector_Estandarizado[".reorderRecordsByHeader"] = true;



$tdataDelitos_por_sector_Estandarizado[".inlineAdd"] = true;


$tdataDelitos_por_sector_Estandarizado[".exportTo"] = true;

$tdataDelitos_por_sector_Estandarizado[".printFriendly"] = true;


$tdataDelitos_por_sector_Estandarizado[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataDelitos_por_sector_Estandarizado[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataDelitos_por_sector_Estandarizado[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataDelitos_por_sector_Estandarizado[".searchSaving"] = false;
//

$tdataDelitos_por_sector_Estandarizado[".showSearchPanel"] = true;
		$tdataDelitos_por_sector_Estandarizado[".flexibleSearch"] = true;

$tdataDelitos_por_sector_Estandarizado[".isUseAjaxSuggest"] = true;






$tdataDelitos_por_sector_Estandarizado[".ajaxCodeSnippetAdded"] = false;

$tdataDelitos_por_sector_Estandarizado[".buttonsAdded"] = false;

$tdataDelitos_por_sector_Estandarizado[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDelitos_por_sector_Estandarizado[".isUseTimeForSearch"] = false;





$tdataDelitos_por_sector_Estandarizado[".allSearchFields"] = array();
$tdataDelitos_por_sector_Estandarizado[".filterFields"] = array();
$tdataDelitos_por_sector_Estandarizado[".requiredSearchFields"] = array();

$tdataDelitos_por_sector_Estandarizado[".allSearchFields"][] = "año_hecho";
		$tdataDelitos_por_sector_Estandarizado[".requiredSearchFields"][] = "año_hecho";
$tdataDelitos_por_sector_Estandarizado[".allSearchFields"][] = "sector_ppd";
		$tdataDelitos_por_sector_Estandarizado[".requiredSearchFields"][] = "sector_ppd";
$tdataDelitos_por_sector_Estandarizado[".allSearchFields"][] = "muni_he";
		$tdataDelitos_por_sector_Estandarizado[".requiredSearchFields"][] = "muni_he";
$tdataDelitos_por_sector_Estandarizado[".allSearchFields"][] = "depart_he";
		$tdataDelitos_por_sector_Estandarizado[".requiredSearchFields"][] = "depart_he";



$tdataDelitos_por_sector_Estandarizado[".panelSearchFields"] = array();
$tdataDelitos_por_sector_Estandarizado[".searchPanelOptions"] = array();
$tdataDelitos_por_sector_Estandarizado[".panelSearchFields"][] = "año_hecho";
	$tdataDelitos_por_sector_Estandarizado[".panelSearchFields"][] = "sector_ppd";
	$tdataDelitos_por_sector_Estandarizado[".panelSearchFields"][] = "muni_he";
	$tdataDelitos_por_sector_Estandarizado[".panelSearchFields"][] = "depart_he";
	

$tdataDelitos_por_sector_Estandarizado[".tableType"] = "report";

$tdataDelitos_por_sector_Estandarizado[".printerPageOrientation"] = 0;
$tdataDelitos_por_sector_Estandarizado[".nPrinterPageScale"] = 100;

$tdataDelitos_por_sector_Estandarizado[".nPrinterSplitRecords"] = 40;

$tdataDelitos_por_sector_Estandarizado[".nPrinterPDFSplitRecords"] = 40;



$tdataDelitos_por_sector_Estandarizado[".geocodingEnabled"] = false;

//report settings
$tdataDelitos_por_sector_Estandarizado[".crossTabReport"] = true;

$tdataDelitos_por_sector_Estandarizado[".reportGroupFields"] = true;
$tdataDelitos_por_sector_Estandarizado[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "delito";
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
$tdataDelitos_por_sector_Estandarizado[".reportGroupFieldsData"] = $reportGroupFields;

$tdataDelitos_por_sector_Estandarizado[".reportHorizontalSummary"] = true;

$tdataDelitos_por_sector_Estandarizado[".isExistTotalFields"] = true;

$tdataDelitos_por_sector_Estandarizado[".reportVerticalSummary"] = true;



$tdataDelitos_por_sector_Estandarizado[".repShowDet"] = true;

$tdataDelitos_por_sector_Estandarizado[".reportLayout"] = 6;

//end of report settings




$tdataDelitos_por_sector_Estandarizado[".listGridLayout"] = 3;

$tdataDelitos_por_sector_Estandarizado[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDelitos_por_sector_Estandarizado[".strOrderBy"] = $tstrOrderBy;

$tdataDelitos_por_sector_Estandarizado[".orderindexes"] = array();

$tdataDelitos_por_sector_Estandarizado[".sqlHead"] = "SELECT hechos_delictivos1.`año_hecho`,  sector_ppd,  delito,  muni_he,  depart_he,  COUNT(muni_he) AS `COUNT(muni_he)`";
$tdataDelitos_por_sector_Estandarizado[".sqlFrom"] = "FROM hechos_delictivos1";
$tdataDelitos_por_sector_Estandarizado[".sqlWhereExpr"] = "";
$tdataDelitos_por_sector_Estandarizado[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDelitos_por_sector_Estandarizado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDelitos_por_sector_Estandarizado[".arrGroupsPerPage"] = $arrGPP;

$tdataDelitos_por_sector_Estandarizado[".highlightSearchResults"] = true;

$tableKeysDelitos_por_sector_Estandarizado = array();
$tdataDelitos_por_sector_Estandarizado[".Keys"] = $tableKeysDelitos_por_sector_Estandarizado;

$tdataDelitos_por_sector_Estandarizado[".listFields"] = array();
$tdataDelitos_por_sector_Estandarizado[".listFields"][] = "año_hecho";
$tdataDelitos_por_sector_Estandarizado[".listFields"][] = "sector_ppd";
$tdataDelitos_por_sector_Estandarizado[".listFields"][] = "delito";
$tdataDelitos_por_sector_Estandarizado[".listFields"][] = "muni_he";
$tdataDelitos_por_sector_Estandarizado[".listFields"][] = "depart_he";
$tdataDelitos_por_sector_Estandarizado[".listFields"][] = "COUNT(muni_he)";

$tdataDelitos_por_sector_Estandarizado[".hideMobileList"] = array();


$tdataDelitos_por_sector_Estandarizado[".viewFields"] = array();
$tdataDelitos_por_sector_Estandarizado[".viewFields"][] = "año_hecho";
$tdataDelitos_por_sector_Estandarizado[".viewFields"][] = "sector_ppd";
$tdataDelitos_por_sector_Estandarizado[".viewFields"][] = "delito";
$tdataDelitos_por_sector_Estandarizado[".viewFields"][] = "muni_he";
$tdataDelitos_por_sector_Estandarizado[".viewFields"][] = "depart_he";
$tdataDelitos_por_sector_Estandarizado[".viewFields"][] = "COUNT(muni_he)";

$tdataDelitos_por_sector_Estandarizado[".addFields"] = array();
$tdataDelitos_por_sector_Estandarizado[".addFields"][] = "sector_ppd";
$tdataDelitos_por_sector_Estandarizado[".addFields"][] = "delito";
$tdataDelitos_por_sector_Estandarizado[".addFields"][] = "muni_he";
$tdataDelitos_por_sector_Estandarizado[".addFields"][] = "depart_he";

$tdataDelitos_por_sector_Estandarizado[".masterListFields"] = array();
$tdataDelitos_por_sector_Estandarizado[".masterListFields"][] = "año_hecho";
$tdataDelitos_por_sector_Estandarizado[".masterListFields"][] = "sector_ppd";
$tdataDelitos_por_sector_Estandarizado[".masterListFields"][] = "delito";
$tdataDelitos_por_sector_Estandarizado[".masterListFields"][] = "muni_he";
$tdataDelitos_por_sector_Estandarizado[".masterListFields"][] = "depart_he";
$tdataDelitos_por_sector_Estandarizado[".masterListFields"][] = "COUNT(muni_he)";

$tdataDelitos_por_sector_Estandarizado[".inlineAddFields"] = array();
$tdataDelitos_por_sector_Estandarizado[".inlineAddFields"][] = "sector_ppd";
$tdataDelitos_por_sector_Estandarizado[".inlineAddFields"][] = "delito";
$tdataDelitos_por_sector_Estandarizado[".inlineAddFields"][] = "muni_he";
$tdataDelitos_por_sector_Estandarizado[".inlineAddFields"][] = "depart_he";

$tdataDelitos_por_sector_Estandarizado[".editFields"] = array();
$tdataDelitos_por_sector_Estandarizado[".editFields"][] = "sector_ppd";
$tdataDelitos_por_sector_Estandarizado[".editFields"][] = "delito";
$tdataDelitos_por_sector_Estandarizado[".editFields"][] = "muni_he";
$tdataDelitos_por_sector_Estandarizado[".editFields"][] = "depart_he";

$tdataDelitos_por_sector_Estandarizado[".inlineEditFields"] = array();
$tdataDelitos_por_sector_Estandarizado[".inlineEditFields"][] = "sector_ppd";
$tdataDelitos_por_sector_Estandarizado[".inlineEditFields"][] = "delito";
$tdataDelitos_por_sector_Estandarizado[".inlineEditFields"][] = "muni_he";
$tdataDelitos_por_sector_Estandarizado[".inlineEditFields"][] = "depart_he";

$tdataDelitos_por_sector_Estandarizado[".updateSelectedFields"] = array();
$tdataDelitos_por_sector_Estandarizado[".updateSelectedFields"][] = "sector_ppd";
$tdataDelitos_por_sector_Estandarizado[".updateSelectedFields"][] = "delito";
$tdataDelitos_por_sector_Estandarizado[".updateSelectedFields"][] = "muni_he";
$tdataDelitos_por_sector_Estandarizado[".updateSelectedFields"][] = "depart_he";


$tdataDelitos_por_sector_Estandarizado[".exportFields"] = array();
$tdataDelitos_por_sector_Estandarizado[".exportFields"][] = "año_hecho";
$tdataDelitos_por_sector_Estandarizado[".exportFields"][] = "sector_ppd";
$tdataDelitos_por_sector_Estandarizado[".exportFields"][] = "delito";
$tdataDelitos_por_sector_Estandarizado[".exportFields"][] = "muni_he";
$tdataDelitos_por_sector_Estandarizado[".exportFields"][] = "depart_he";
$tdataDelitos_por_sector_Estandarizado[".exportFields"][] = "COUNT(muni_he)";

$tdataDelitos_por_sector_Estandarizado[".importFields"] = array();
$tdataDelitos_por_sector_Estandarizado[".importFields"][] = "año_hecho";
$tdataDelitos_por_sector_Estandarizado[".importFields"][] = "sector_ppd";
$tdataDelitos_por_sector_Estandarizado[".importFields"][] = "delito";
$tdataDelitos_por_sector_Estandarizado[".importFields"][] = "muni_he";
$tdataDelitos_por_sector_Estandarizado[".importFields"][] = "depart_he";
$tdataDelitos_por_sector_Estandarizado[".importFields"][] = "COUNT(muni_he)";

$tdataDelitos_por_sector_Estandarizado[".printFields"] = array();
$tdataDelitos_por_sector_Estandarizado[".printFields"][] = "año_hecho";
$tdataDelitos_por_sector_Estandarizado[".printFields"][] = "sector_ppd";
$tdataDelitos_por_sector_Estandarizado[".printFields"][] = "delito";
$tdataDelitos_por_sector_Estandarizado[".printFields"][] = "muni_he";
$tdataDelitos_por_sector_Estandarizado[".printFields"][] = "depart_he";
$tdataDelitos_por_sector_Estandarizado[".printFields"][] = "COUNT(muni_he)";

//	año_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "año_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Delitos_por_sector_Estandarizado","a_o_hecho");
	$fdata["FieldType"] = 5;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "año_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hechos_delictivos1.`año_hecho`";

	
	
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




	$tdataDelitos_por_sector_Estandarizado["año_hecho"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_sector_Estandarizado","sector_ppd");
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




	$tdataDelitos_por_sector_Estandarizado["sector_ppd"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_sector_Estandarizado","delito");
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








	$tdataDelitos_por_sector_Estandarizado["delito"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_sector_Estandarizado","muni_he");
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




	$tdataDelitos_por_sector_Estandarizado["muni_he"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_por_sector_Estandarizado","depart_he");
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




	$tdataDelitos_por_sector_Estandarizado["depart_he"] = $fdata;
//	COUNT(muni_he)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "COUNT(muni_he)";
	$fdata["GoodName"] = "COUNT_muni_he_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Delitos_por_sector_Estandarizado","COUNT_muni_he_");
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








	$tdataDelitos_por_sector_Estandarizado["COUNT(muni_he)"] = $fdata;


$tables_data["Delitos por sector Estandarizado"]=&$tdataDelitos_por_sector_Estandarizado;
$field_labels["Delitos_por_sector_Estandarizado"] = &$fieldLabelsDelitos_por_sector_Estandarizado;
$fieldToolTips["Delitos_por_sector_Estandarizado"] = &$fieldToolTipsDelitos_por_sector_Estandarizado;
$placeHolders["Delitos_por_sector_Estandarizado"] = &$placeHoldersDelitos_por_sector_Estandarizado;
$page_titles["Delitos_por_sector_Estandarizado"] = &$pageTitlesDelitos_por_sector_Estandarizado;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Delitos por sector Estandarizado"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Delitos_por_sector_Estandarizado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "hechos_delictivos1.`año_hecho`,  sector_ppd,  delito,  muni_he,  depart_he,  COUNT(muni_he) AS `COUNT(muni_he)`";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "hechos_delictivos1.`año_hecho`"
));

$proto6["m_sql"] = "hechos_delictivos1.`año_hecho`";
$proto6["m_srcTableName"] = "Delitos por sector Estandarizado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por sector Estandarizado"
));

$proto8["m_sql"] = "sector_ppd";
$proto8["m_srcTableName"] = "Delitos por sector Estandarizado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por sector Estandarizado"
));

$proto10["m_sql"] = "delito";
$proto10["m_srcTableName"] = "Delitos por sector Estandarizado";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por sector Estandarizado"
));

$proto12["m_sql"] = "muni_he";
$proto12["m_srcTableName"] = "Delitos por sector Estandarizado";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por sector Estandarizado"
));

$proto14["m_sql"] = "depart_he";
$proto14["m_srcTableName"] = "Delitos por sector Estandarizado";
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
	"m_srcTableName" => "Delitos por sector Estandarizado"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "COUNT(muni_he)";
$proto16["m_srcTableName"] = "Delitos por sector Estandarizado";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "COUNT(muni_he)";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "hechos_delictivos1";
$proto20["m_srcTableName"] = "Delitos por sector Estandarizado";
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
$proto19["m_srcTableName"] = "Delitos por sector Estandarizado";
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
						$obj = new SQLNonParsed(array(
	"m_sql" => "hechos_delictivos1.`año_hecho`"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por sector Estandarizado"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por sector Estandarizado"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por sector Estandarizado"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos por sector Estandarizado"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Delitos por sector Estandarizado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Delitos_por_sector_Estandarizado = createSqlQuery_Delitos_por_sector_Estandarizado();


	
		;

						

$tdataDelitos_por_sector_Estandarizado[".sqlquery"] = $queryData_Delitos_por_sector_Estandarizado;

$tableEvents["Delitos por sector Estandarizado"] = new eventsBase;
$tdataDelitos_por_sector_Estandarizado[".hasEvents"] = false;

?>