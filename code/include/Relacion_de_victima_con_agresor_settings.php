<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRelacion_de_victima_con_agresor = array();
	$tdataRelacion_de_victima_con_agresor[".truncateText"] = true;
	$tdataRelacion_de_victima_con_agresor[".NumberOfChars"] = 80;
	$tdataRelacion_de_victima_con_agresor[".ShortName"] = "Relacion_de_victima_con_agresor";
	$tdataRelacion_de_victima_con_agresor[".OwnerID"] = "";
	$tdataRelacion_de_victima_con_agresor[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsRelacion_de_victima_con_agresor = array();
$fieldToolTipsRelacion_de_victima_con_agresor = array();
$pageTitlesRelacion_de_victima_con_agresor = array();
$placeHoldersRelacion_de_victima_con_agresor = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsRelacion_de_victima_con_agresor["Spanish"] = array();
	$fieldToolTipsRelacion_de_victima_con_agresor["Spanish"] = array();
	$placeHoldersRelacion_de_victima_con_agresor["Spanish"] = array();
	$pageTitlesRelacion_de_victima_con_agresor["Spanish"] = array();
	$fieldLabelsRelacion_de_victima_con_agresor["Spanish"]["delito"] = "Delito";
	$fieldToolTipsRelacion_de_victima_con_agresor["Spanish"]["delito"] = "";
	$placeHoldersRelacion_de_victima_con_agresor["Spanish"]["delito"] = "";
	$fieldLabelsRelacion_de_victima_con_agresor["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipsRelacion_de_victima_con_agresor["Spanish"]["muni_he"] = "";
	$placeHoldersRelacion_de_victima_con_agresor["Spanish"]["muni_he"] = "";
	$fieldLabelsRelacion_de_victima_con_agresor["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsRelacion_de_victima_con_agresor["Spanish"]["sector_ppd"] = "";
	$placeHoldersRelacion_de_victima_con_agresor["Spanish"]["sector_ppd"] = "";
	$fieldLabelsRelacion_de_victima_con_agresor["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipsRelacion_de_victima_con_agresor["Spanish"]["depart_he"] = "";
	$placeHoldersRelacion_de_victima_con_agresor["Spanish"]["depart_he"] = "";
	$fieldLabelsRelacion_de_victima_con_agresor["Spanish"]["COUNT_muni_he_"] = "COUNT(muni He)";
	$fieldToolTipsRelacion_de_victima_con_agresor["Spanish"]["COUNT_muni_he_"] = "";
	$placeHoldersRelacion_de_victima_con_agresor["Spanish"]["COUNT_muni_he_"] = "";
	$fieldLabelsRelacion_de_victima_con_agresor["Spanish"]["rel_vic_ag_anali"] = "Rel Vic Ag Anali";
	$fieldToolTipsRelacion_de_victima_con_agresor["Spanish"]["rel_vic_ag_anali"] = "";
	$placeHoldersRelacion_de_victima_con_agresor["Spanish"]["rel_vic_ag_anali"] = "";
	if (count($fieldToolTipsRelacion_de_victima_con_agresor["Spanish"]))
		$tdataRelacion_de_victima_con_agresor[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRelacion_de_victima_con_agresor["English"] = array();
	$fieldToolTipsRelacion_de_victima_con_agresor["English"] = array();
	$placeHoldersRelacion_de_victima_con_agresor["English"] = array();
	$pageTitlesRelacion_de_victima_con_agresor["English"] = array();
	$fieldLabelsRelacion_de_victima_con_agresor["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsRelacion_de_victima_con_agresor["English"]["sector_ppd"] = "";
	$placeHoldersRelacion_de_victima_con_agresor["English"]["sector_ppd"] = "";
	$fieldLabelsRelacion_de_victima_con_agresor["English"]["depart_he"] = "Depart He";
	$fieldToolTipsRelacion_de_victima_con_agresor["English"]["depart_he"] = "";
	$placeHoldersRelacion_de_victima_con_agresor["English"]["depart_he"] = "";
	$fieldLabelsRelacion_de_victima_con_agresor["English"]["COUNT_muni_he_"] = "COUNT(muni He)";
	$fieldToolTipsRelacion_de_victima_con_agresor["English"]["COUNT_muni_he_"] = "";
	$placeHoldersRelacion_de_victima_con_agresor["English"]["COUNT_muni_he_"] = "";
	$fieldLabelsRelacion_de_victima_con_agresor["English"]["rel_vic_ag_anali"] = "Rel Vic Ag Anali";
	$fieldToolTipsRelacion_de_victima_con_agresor["English"]["rel_vic_ag_anali"] = "";
	$placeHoldersRelacion_de_victima_con_agresor["English"]["rel_vic_ag_anali"] = "";
	$fieldLabelsRelacion_de_victima_con_agresor["English"]["delito"] = "Delito";
	$fieldToolTipsRelacion_de_victima_con_agresor["English"]["delito"] = "";
	$placeHoldersRelacion_de_victima_con_agresor["English"]["delito"] = "";
	$fieldLabelsRelacion_de_victima_con_agresor["English"]["muni_he"] = "Muni He";
	$fieldToolTipsRelacion_de_victima_con_agresor["English"]["muni_he"] = "";
	$placeHoldersRelacion_de_victima_con_agresor["English"]["muni_he"] = "";
	if (count($fieldToolTipsRelacion_de_victima_con_agresor["English"]))
		$tdataRelacion_de_victima_con_agresor[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRelacion_de_victima_con_agresor[""] = array();
	$fieldToolTipsRelacion_de_victima_con_agresor[""] = array();
	$placeHoldersRelacion_de_victima_con_agresor[""] = array();
	$pageTitlesRelacion_de_victima_con_agresor[""] = array();
	if (count($fieldToolTipsRelacion_de_victima_con_agresor[""]))
		$tdataRelacion_de_victima_con_agresor[".isUseToolTips"] = true;
}





$tdataRelacion_de_victima_con_agresor[".shortTableName"] = "Relacion_de_victima_con_agresor";
$tdataRelacion_de_victima_con_agresor[".nSecOptions"] = 0;
$tdataRelacion_de_victima_con_agresor[".recsPerRowPrint"] = 1;
$tdataRelacion_de_victima_con_agresor[".mainTableOwnerID"] = "";
$tdataRelacion_de_victima_con_agresor[".moveNext"] = 1;
$tdataRelacion_de_victima_con_agresor[".entityType"] = 2;

$tdataRelacion_de_victima_con_agresor[".strOriginalTableName"] = "hechosdelictivos";

	



$tdataRelacion_de_victima_con_agresor[".showAddInPopup"] = false;

$tdataRelacion_de_victima_con_agresor[".showEditInPopup"] = false;

$tdataRelacion_de_victima_con_agresor[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRelacion_de_victima_con_agresor[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRelacion_de_victima_con_agresor[".fieldsForRegister"] = array();

$tdataRelacion_de_victima_con_agresor[".listAjax"] = false;

	$tdataRelacion_de_victima_con_agresor[".audit"] = false;

	$tdataRelacion_de_victima_con_agresor[".locking"] = false;


$tdataRelacion_de_victima_con_agresor[".add"] = true;
$tdataRelacion_de_victima_con_agresor[".afterAddAction"] = 1;
$tdataRelacion_de_victima_con_agresor[".closePopupAfterAdd"] = 1;
$tdataRelacion_de_victima_con_agresor[".afterAddActionDetTable"] = "";

$tdataRelacion_de_victima_con_agresor[".list"] = true;



$tdataRelacion_de_victima_con_agresor[".reorderRecordsByHeader"] = true;



$tdataRelacion_de_victima_con_agresor[".inlineAdd"] = true;


$tdataRelacion_de_victima_con_agresor[".exportTo"] = true;

$tdataRelacion_de_victima_con_agresor[".printFriendly"] = true;


$tdataRelacion_de_victima_con_agresor[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataRelacion_de_victima_con_agresor[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataRelacion_de_victima_con_agresor[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataRelacion_de_victima_con_agresor[".searchSaving"] = false;
//

$tdataRelacion_de_victima_con_agresor[".showSearchPanel"] = true;
		$tdataRelacion_de_victima_con_agresor[".flexibleSearch"] = true;

$tdataRelacion_de_victima_con_agresor[".isUseAjaxSuggest"] = true;






$tdataRelacion_de_victima_con_agresor[".ajaxCodeSnippetAdded"] = false;

$tdataRelacion_de_victima_con_agresor[".buttonsAdded"] = false;

$tdataRelacion_de_victima_con_agresor[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRelacion_de_victima_con_agresor[".isUseTimeForSearch"] = false;





$tdataRelacion_de_victima_con_agresor[".allSearchFields"] = array();
$tdataRelacion_de_victima_con_agresor[".filterFields"] = array();
$tdataRelacion_de_victima_con_agresor[".requiredSearchFields"] = array();

$tdataRelacion_de_victima_con_agresor[".allSearchFields"][] = "rel_vic_ag_anali";
	$tdataRelacion_de_victima_con_agresor[".allSearchFields"][] = "delito";
	$tdataRelacion_de_victima_con_agresor[".allSearchFields"][] = "sector_ppd";
	$tdataRelacion_de_victima_con_agresor[".allSearchFields"][] = "muni_he";
		$tdataRelacion_de_victima_con_agresor[".requiredSearchFields"][] = "muni_he";
$tdataRelacion_de_victima_con_agresor[".allSearchFields"][] = "depart_he";
		$tdataRelacion_de_victima_con_agresor[".requiredSearchFields"][] = "depart_he";
$tdataRelacion_de_victima_con_agresor[".allSearchFields"][] = "COUNT(muni_he)";
	

$tdataRelacion_de_victima_con_agresor[".googleLikeFields"] = array();
$tdataRelacion_de_victima_con_agresor[".googleLikeFields"][] = "rel_vic_ag_anali";
$tdataRelacion_de_victima_con_agresor[".googleLikeFields"][] = "delito";
$tdataRelacion_de_victima_con_agresor[".googleLikeFields"][] = "sector_ppd";
$tdataRelacion_de_victima_con_agresor[".googleLikeFields"][] = "muni_he";
$tdataRelacion_de_victima_con_agresor[".googleLikeFields"][] = "depart_he";
$tdataRelacion_de_victima_con_agresor[".googleLikeFields"][] = "COUNT(muni_he)";

$tdataRelacion_de_victima_con_agresor[".panelSearchFields"] = array();
$tdataRelacion_de_victima_con_agresor[".searchPanelOptions"] = array();
$tdataRelacion_de_victima_con_agresor[".panelSearchFields"][] = "muni_he";
	$tdataRelacion_de_victima_con_agresor[".panelSearchFields"][] = "depart_he";
	
$tdataRelacion_de_victima_con_agresor[".advSearchFields"] = array();
$tdataRelacion_de_victima_con_agresor[".advSearchFields"][] = "rel_vic_ag_anali";
$tdataRelacion_de_victima_con_agresor[".advSearchFields"][] = "delito";
$tdataRelacion_de_victima_con_agresor[".advSearchFields"][] = "sector_ppd";
$tdataRelacion_de_victima_con_agresor[".advSearchFields"][] = "muni_he";
$tdataRelacion_de_victima_con_agresor[".advSearchFields"][] = "depart_he";
$tdataRelacion_de_victima_con_agresor[".advSearchFields"][] = "COUNT(muni_he)";

$tdataRelacion_de_victima_con_agresor[".tableType"] = "report";

$tdataRelacion_de_victima_con_agresor[".printerPageOrientation"] = 0;
$tdataRelacion_de_victima_con_agresor[".nPrinterPageScale"] = 100;

$tdataRelacion_de_victima_con_agresor[".nPrinterSplitRecords"] = 40;

$tdataRelacion_de_victima_con_agresor[".nPrinterPDFSplitRecords"] = 40;



$tdataRelacion_de_victima_con_agresor[".geocodingEnabled"] = false;

//report settings
$tdataRelacion_de_victima_con_agresor[".crossTabReport"] = true;

$tdataRelacion_de_victima_con_agresor[".reportGroupFields"] = true;
$tdataRelacion_de_victima_con_agresor[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "rel_vic_ag_anali";
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
$tdataRelacion_de_victima_con_agresor[".reportGroupFieldsData"] = $reportGroupFields;

$tdataRelacion_de_victima_con_agresor[".reportHorizontalSummary"] = true;

$tdataRelacion_de_victima_con_agresor[".isExistTotalFields"] = true;

$tdataRelacion_de_victima_con_agresor[".reportVerticalSummary"] = true;



$tdataRelacion_de_victima_con_agresor[".repShowDet"] = true;

$tdataRelacion_de_victima_con_agresor[".reportLayout"] = 6;

//end of report settings




$tdataRelacion_de_victima_con_agresor[".listGridLayout"] = 3;

$tdataRelacion_de_victima_con_agresor[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRelacion_de_victima_con_agresor[".strOrderBy"] = $tstrOrderBy;

$tdataRelacion_de_victima_con_agresor[".orderindexes"] = array();

$tdataRelacion_de_victima_con_agresor[".sqlHead"] = "SELECT rel_vic_ag_anali,  delito,  sector_ppd,  muni_he,  depart_he,  COUNT(muni_he) AS `COUNT(muni_he)`";
$tdataRelacion_de_victima_con_agresor[".sqlFrom"] = "FROM hechos_delictivos1";
$tdataRelacion_de_victima_con_agresor[".sqlWhereExpr"] = "";
$tdataRelacion_de_victima_con_agresor[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRelacion_de_victima_con_agresor[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRelacion_de_victima_con_agresor[".arrGroupsPerPage"] = $arrGPP;

$tdataRelacion_de_victima_con_agresor[".highlightSearchResults"] = true;

$tableKeysRelacion_de_victima_con_agresor = array();
$tdataRelacion_de_victima_con_agresor[".Keys"] = $tableKeysRelacion_de_victima_con_agresor;

$tdataRelacion_de_victima_con_agresor[".listFields"] = array();
$tdataRelacion_de_victima_con_agresor[".listFields"][] = "rel_vic_ag_anali";
$tdataRelacion_de_victima_con_agresor[".listFields"][] = "delito";
$tdataRelacion_de_victima_con_agresor[".listFields"][] = "sector_ppd";
$tdataRelacion_de_victima_con_agresor[".listFields"][] = "muni_he";
$tdataRelacion_de_victima_con_agresor[".listFields"][] = "depart_he";
$tdataRelacion_de_victima_con_agresor[".listFields"][] = "COUNT(muni_he)";

$tdataRelacion_de_victima_con_agresor[".hideMobileList"] = array();


$tdataRelacion_de_victima_con_agresor[".viewFields"] = array();
$tdataRelacion_de_victima_con_agresor[".viewFields"][] = "rel_vic_ag_anali";
$tdataRelacion_de_victima_con_agresor[".viewFields"][] = "delito";
$tdataRelacion_de_victima_con_agresor[".viewFields"][] = "sector_ppd";
$tdataRelacion_de_victima_con_agresor[".viewFields"][] = "muni_he";
$tdataRelacion_de_victima_con_agresor[".viewFields"][] = "depart_he";
$tdataRelacion_de_victima_con_agresor[".viewFields"][] = "COUNT(muni_he)";

$tdataRelacion_de_victima_con_agresor[".addFields"] = array();
$tdataRelacion_de_victima_con_agresor[".addFields"][] = "delito";
$tdataRelacion_de_victima_con_agresor[".addFields"][] = "sector_ppd";
$tdataRelacion_de_victima_con_agresor[".addFields"][] = "muni_he";
$tdataRelacion_de_victima_con_agresor[".addFields"][] = "depart_he";

$tdataRelacion_de_victima_con_agresor[".masterListFields"] = array();
$tdataRelacion_de_victima_con_agresor[".masterListFields"][] = "rel_vic_ag_anali";
$tdataRelacion_de_victima_con_agresor[".masterListFields"][] = "delito";
$tdataRelacion_de_victima_con_agresor[".masterListFields"][] = "sector_ppd";
$tdataRelacion_de_victima_con_agresor[".masterListFields"][] = "muni_he";
$tdataRelacion_de_victima_con_agresor[".masterListFields"][] = "depart_he";
$tdataRelacion_de_victima_con_agresor[".masterListFields"][] = "COUNT(muni_he)";

$tdataRelacion_de_victima_con_agresor[".inlineAddFields"] = array();
$tdataRelacion_de_victima_con_agresor[".inlineAddFields"][] = "delito";
$tdataRelacion_de_victima_con_agresor[".inlineAddFields"][] = "sector_ppd";
$tdataRelacion_de_victima_con_agresor[".inlineAddFields"][] = "muni_he";
$tdataRelacion_de_victima_con_agresor[".inlineAddFields"][] = "depart_he";

$tdataRelacion_de_victima_con_agresor[".editFields"] = array();
$tdataRelacion_de_victima_con_agresor[".editFields"][] = "delito";
$tdataRelacion_de_victima_con_agresor[".editFields"][] = "sector_ppd";
$tdataRelacion_de_victima_con_agresor[".editFields"][] = "muni_he";
$tdataRelacion_de_victima_con_agresor[".editFields"][] = "depart_he";

$tdataRelacion_de_victima_con_agresor[".inlineEditFields"] = array();
$tdataRelacion_de_victima_con_agresor[".inlineEditFields"][] = "delito";
$tdataRelacion_de_victima_con_agresor[".inlineEditFields"][] = "sector_ppd";
$tdataRelacion_de_victima_con_agresor[".inlineEditFields"][] = "muni_he";
$tdataRelacion_de_victima_con_agresor[".inlineEditFields"][] = "depart_he";

$tdataRelacion_de_victima_con_agresor[".updateSelectedFields"] = array();
$tdataRelacion_de_victima_con_agresor[".updateSelectedFields"][] = "delito";
$tdataRelacion_de_victima_con_agresor[".updateSelectedFields"][] = "sector_ppd";
$tdataRelacion_de_victima_con_agresor[".updateSelectedFields"][] = "muni_he";
$tdataRelacion_de_victima_con_agresor[".updateSelectedFields"][] = "depart_he";


$tdataRelacion_de_victima_con_agresor[".exportFields"] = array();
$tdataRelacion_de_victima_con_agresor[".exportFields"][] = "rel_vic_ag_anali";
$tdataRelacion_de_victima_con_agresor[".exportFields"][] = "delito";
$tdataRelacion_de_victima_con_agresor[".exportFields"][] = "sector_ppd";
$tdataRelacion_de_victima_con_agresor[".exportFields"][] = "muni_he";
$tdataRelacion_de_victima_con_agresor[".exportFields"][] = "depart_he";
$tdataRelacion_de_victima_con_agresor[".exportFields"][] = "COUNT(muni_he)";

$tdataRelacion_de_victima_con_agresor[".importFields"] = array();
$tdataRelacion_de_victima_con_agresor[".importFields"][] = "rel_vic_ag_anali";
$tdataRelacion_de_victima_con_agresor[".importFields"][] = "delito";
$tdataRelacion_de_victima_con_agresor[".importFields"][] = "sector_ppd";
$tdataRelacion_de_victima_con_agresor[".importFields"][] = "muni_he";
$tdataRelacion_de_victima_con_agresor[".importFields"][] = "depart_he";
$tdataRelacion_de_victima_con_agresor[".importFields"][] = "COUNT(muni_he)";

$tdataRelacion_de_victima_con_agresor[".printFields"] = array();
$tdataRelacion_de_victima_con_agresor[".printFields"][] = "rel_vic_ag_anali";
$tdataRelacion_de_victima_con_agresor[".printFields"][] = "delito";
$tdataRelacion_de_victima_con_agresor[".printFields"][] = "sector_ppd";
$tdataRelacion_de_victima_con_agresor[".printFields"][] = "muni_he";
$tdataRelacion_de_victima_con_agresor[".printFields"][] = "depart_he";
$tdataRelacion_de_victima_con_agresor[".printFields"][] = "COUNT(muni_he)";

//	rel_vic_ag_anali
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rel_vic_ag_anali";
	$fdata["GoodName"] = "rel_vic_ag_anali";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Relacion_de_victima_con_agresor","rel_vic_ag_anali");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rel_vic_ag_anali";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rel_vic_ag_anali";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataRelacion_de_victima_con_agresor["rel_vic_ag_anali"] = $fdata;
//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Relacion_de_victima_con_agresor","delito");
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataRelacion_de_victima_con_agresor["delito"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Relacion_de_victima_con_agresor","sector_ppd");
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




	$tdataRelacion_de_victima_con_agresor["sector_ppd"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Relacion_de_victima_con_agresor","muni_he");
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




	$tdataRelacion_de_victima_con_agresor["muni_he"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Relacion_de_victima_con_agresor","depart_he");
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




	$tdataRelacion_de_victima_con_agresor["depart_he"] = $fdata;
//	COUNT(muni_he)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "COUNT(muni_he)";
	$fdata["GoodName"] = "COUNT_muni_he_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Relacion_de_victima_con_agresor","COUNT_muni_he_");
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




	$tdataRelacion_de_victima_con_agresor["COUNT(muni_he)"] = $fdata;


$tables_data["Relacion de victima con agresor"]=&$tdataRelacion_de_victima_con_agresor;
$field_labels["Relacion_de_victima_con_agresor"] = &$fieldLabelsRelacion_de_victima_con_agresor;
$fieldToolTips["Relacion_de_victima_con_agresor"] = &$fieldToolTipsRelacion_de_victima_con_agresor;
$placeHolders["Relacion_de_victima_con_agresor"] = &$placeHoldersRelacion_de_victima_con_agresor;
$page_titles["Relacion_de_victima_con_agresor"] = &$pageTitlesRelacion_de_victima_con_agresor;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Relacion de victima con agresor"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Relacion_de_victima_con_agresor()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "rel_vic_ag_anali,  delito,  sector_ppd,  muni_he,  depart_he,  COUNT(muni_he) AS `COUNT(muni_he)`";
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
	"m_strName" => "rel_vic_ag_anali",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Relacion de victima con agresor"
));

$proto6["m_sql"] = "rel_vic_ag_anali";
$proto6["m_srcTableName"] = "Relacion de victima con agresor";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Relacion de victima con agresor"
));

$proto8["m_sql"] = "delito";
$proto8["m_srcTableName"] = "Relacion de victima con agresor";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Relacion de victima con agresor"
));

$proto10["m_sql"] = "sector_ppd";
$proto10["m_srcTableName"] = "Relacion de victima con agresor";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Relacion de victima con agresor"
));

$proto12["m_sql"] = "muni_he";
$proto12["m_srcTableName"] = "Relacion de victima con agresor";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Relacion de victima con agresor"
));

$proto14["m_sql"] = "depart_he";
$proto14["m_srcTableName"] = "Relacion de victima con agresor";
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
	"m_srcTableName" => "Relacion de victima con agresor"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "COUNT(muni_he)";
$proto16["m_srcTableName"] = "Relacion de victima con agresor";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "COUNT(muni_he)";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "hechos_delictivos1";
$proto20["m_srcTableName"] = "Relacion de victima con agresor";
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
$proto19["m_srcTableName"] = "Relacion de victima con agresor";
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
	"m_strName" => "rel_vic_ag_anali",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Relacion de victima con agresor"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "delito",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Relacion de victima con agresor"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Relacion de victima con agresor"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Relacion de victima con agresor"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Relacion de victima con agresor"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Relacion de victima con agresor";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Relacion_de_victima_con_agresor = createSqlQuery_Relacion_de_victima_con_agresor();


	
		;

						

$tdataRelacion_de_victima_con_agresor[".sqlquery"] = $queryData_Relacion_de_victima_con_agresor;

$tableEvents["Relacion de victima con agresor"] = new eventsBase;
$tdataRelacion_de_victima_con_agresor[".hasEvents"] = false;

?>