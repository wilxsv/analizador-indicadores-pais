<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCruce_Sector_PPD = array();
	$tdataCruce_Sector_PPD[".truncateText"] = true;
	$tdataCruce_Sector_PPD[".NumberOfChars"] = 80;
	$tdataCruce_Sector_PPD[".ShortName"] = "Cruce_Sector_PPD";
	$tdataCruce_Sector_PPD[".OwnerID"] = "";
	$tdataCruce_Sector_PPD[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsCruce_Sector_PPD = array();
$fieldToolTipsCruce_Sector_PPD = array();
$pageTitlesCruce_Sector_PPD = array();
$placeHoldersCruce_Sector_PPD = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsCruce_Sector_PPD["Spanish"] = array();
	$fieldToolTipsCruce_Sector_PPD["Spanish"] = array();
	$placeHoldersCruce_Sector_PPD["Spanish"] = array();
	$pageTitlesCruce_Sector_PPD["Spanish"] = array();
	$fieldLabelsCruce_Sector_PPD["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipsCruce_Sector_PPD["Spanish"]["muni_he"] = "";
	$placeHoldersCruce_Sector_PPD["Spanish"]["muni_he"] = "";
	$fieldLabelsCruce_Sector_PPD["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsCruce_Sector_PPD["Spanish"]["a_o_hecho"] = "";
	$placeHoldersCruce_Sector_PPD["Spanish"]["a_o_hecho"] = "";
	$fieldLabelsCruce_Sector_PPD["Spanish"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipsCruce_Sector_PPD["Spanish"]["tipo_arma"] = "";
	$placeHoldersCruce_Sector_PPD["Spanish"]["tipo_arma"] = "";
	$fieldLabelsCruce_Sector_PPD["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipsCruce_Sector_PPD["Spanish"]["depart_he"] = "";
	$placeHoldersCruce_Sector_PPD["Spanish"]["depart_he"] = "";
	$fieldLabelsCruce_Sector_PPD["Spanish"]["COUNT_muni_he_"] = "COUNT(muni He)";
	$fieldToolTipsCruce_Sector_PPD["Spanish"]["COUNT_muni_he_"] = "";
	$placeHoldersCruce_Sector_PPD["Spanish"]["COUNT_muni_he_"] = "";
	$fieldLabelsCruce_Sector_PPD["Spanish"]["arma_analisis"] = "Arma Analisis";
	$fieldToolTipsCruce_Sector_PPD["Spanish"]["arma_analisis"] = "";
	$placeHoldersCruce_Sector_PPD["Spanish"]["arma_analisis"] = "";
	$fieldLabelsCruce_Sector_PPD["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsCruce_Sector_PPD["Spanish"]["sector_ppd"] = "";
	$placeHoldersCruce_Sector_PPD["Spanish"]["sector_ppd"] = "";
	if (count($fieldToolTipsCruce_Sector_PPD["Spanish"]))
		$tdataCruce_Sector_PPD[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCruce_Sector_PPD["English"] = array();
	$fieldToolTipsCruce_Sector_PPD["English"] = array();
	$placeHoldersCruce_Sector_PPD["English"] = array();
	$pageTitlesCruce_Sector_PPD["English"] = array();
	$fieldLabelsCruce_Sector_PPD["English"]["muni_he"] = "Muni He";
	$fieldToolTipsCruce_Sector_PPD["English"]["muni_he"] = "";
	$placeHoldersCruce_Sector_PPD["English"]["muni_he"] = "";
	$fieldLabelsCruce_Sector_PPD["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsCruce_Sector_PPD["English"]["a_o_hecho"] = "";
	$placeHoldersCruce_Sector_PPD["English"]["a_o_hecho"] = "";
	$fieldLabelsCruce_Sector_PPD["English"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipsCruce_Sector_PPD["English"]["tipo_arma"] = "";
	$placeHoldersCruce_Sector_PPD["English"]["tipo_arma"] = "";
	$fieldLabelsCruce_Sector_PPD["English"]["depart_he"] = "Depart He";
	$fieldToolTipsCruce_Sector_PPD["English"]["depart_he"] = "";
	$placeHoldersCruce_Sector_PPD["English"]["depart_he"] = "";
	$fieldLabelsCruce_Sector_PPD["English"]["COUNT_muni_he_"] = "COUNT(muni He)";
	$fieldToolTipsCruce_Sector_PPD["English"]["COUNT_muni_he_"] = "";
	$placeHoldersCruce_Sector_PPD["English"]["COUNT_muni_he_"] = "";
	$fieldLabelsCruce_Sector_PPD["English"]["arma_analisis"] = "Arma Analisis";
	$fieldToolTipsCruce_Sector_PPD["English"]["arma_analisis"] = "";
	$placeHoldersCruce_Sector_PPD["English"]["arma_analisis"] = "";
	$fieldLabelsCruce_Sector_PPD["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsCruce_Sector_PPD["English"]["sector_ppd"] = "";
	$placeHoldersCruce_Sector_PPD["English"]["sector_ppd"] = "";
	if (count($fieldToolTipsCruce_Sector_PPD["English"]))
		$tdataCruce_Sector_PPD[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCruce_Sector_PPD[""] = array();
	$fieldToolTipsCruce_Sector_PPD[""] = array();
	$placeHoldersCruce_Sector_PPD[""] = array();
	$pageTitlesCruce_Sector_PPD[""] = array();
	if (count($fieldToolTipsCruce_Sector_PPD[""]))
		$tdataCruce_Sector_PPD[".isUseToolTips"] = true;
}





$tdataCruce_Sector_PPD[".shortTableName"] = "Cruce_Sector_PPD";
$tdataCruce_Sector_PPD[".nSecOptions"] = 0;
$tdataCruce_Sector_PPD[".recsPerRowPrint"] = 1;
$tdataCruce_Sector_PPD[".mainTableOwnerID"] = "";
$tdataCruce_Sector_PPD[".moveNext"] = 1;
$tdataCruce_Sector_PPD[".entityType"] = 2;

$tdataCruce_Sector_PPD[".strOriginalTableName"] = "hechosdelictivos";

	



$tdataCruce_Sector_PPD[".showAddInPopup"] = false;

$tdataCruce_Sector_PPD[".showEditInPopup"] = false;

$tdataCruce_Sector_PPD[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCruce_Sector_PPD[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCruce_Sector_PPD[".fieldsForRegister"] = array();

$tdataCruce_Sector_PPD[".listAjax"] = false;

	$tdataCruce_Sector_PPD[".audit"] = false;

	$tdataCruce_Sector_PPD[".locking"] = false;


$tdataCruce_Sector_PPD[".add"] = true;
$tdataCruce_Sector_PPD[".afterAddAction"] = 1;
$tdataCruce_Sector_PPD[".closePopupAfterAdd"] = 1;
$tdataCruce_Sector_PPD[".afterAddActionDetTable"] = "";

$tdataCruce_Sector_PPD[".list"] = true;



$tdataCruce_Sector_PPD[".reorderRecordsByHeader"] = true;



$tdataCruce_Sector_PPD[".inlineAdd"] = true;


$tdataCruce_Sector_PPD[".exportTo"] = true;

$tdataCruce_Sector_PPD[".printFriendly"] = true;


$tdataCruce_Sector_PPD[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataCruce_Sector_PPD[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataCruce_Sector_PPD[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataCruce_Sector_PPD[".searchSaving"] = false;
//

$tdataCruce_Sector_PPD[".showSearchPanel"] = true;
		$tdataCruce_Sector_PPD[".flexibleSearch"] = true;

$tdataCruce_Sector_PPD[".isUseAjaxSuggest"] = true;






$tdataCruce_Sector_PPD[".ajaxCodeSnippetAdded"] = false;

$tdataCruce_Sector_PPD[".buttonsAdded"] = false;

$tdataCruce_Sector_PPD[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCruce_Sector_PPD[".isUseTimeForSearch"] = false;





$tdataCruce_Sector_PPD[".allSearchFields"] = array();
$tdataCruce_Sector_PPD[".filterFields"] = array();
$tdataCruce_Sector_PPD[".requiredSearchFields"] = array();

$tdataCruce_Sector_PPD[".allSearchFields"][] = "aÑo_hecho";
		$tdataCruce_Sector_PPD[".requiredSearchFields"][] = "aÑo_hecho";
$tdataCruce_Sector_PPD[".allSearchFields"][] = "muni_he";
		$tdataCruce_Sector_PPD[".requiredSearchFields"][] = "muni_he";
$tdataCruce_Sector_PPD[".allSearchFields"][] = "depart_he";
		$tdataCruce_Sector_PPD[".requiredSearchFields"][] = "depart_he";
$tdataCruce_Sector_PPD[".allSearchFields"][] = "sector_ppd";
		$tdataCruce_Sector_PPD[".requiredSearchFields"][] = "sector_ppd";


$tdataCruce_Sector_PPD[".googleLikeFields"] = array();
$tdataCruce_Sector_PPD[".googleLikeFields"][] = "sector_ppd";

$tdataCruce_Sector_PPD[".panelSearchFields"] = array();
$tdataCruce_Sector_PPD[".searchPanelOptions"] = array();
$tdataCruce_Sector_PPD[".panelSearchFields"][] = "aÑo_hecho";
	$tdataCruce_Sector_PPD[".panelSearchFields"][] = "muni_he";
	$tdataCruce_Sector_PPD[".panelSearchFields"][] = "depart_he";
	$tdataCruce_Sector_PPD[".panelSearchFields"][] = "sector_ppd";
	
$tdataCruce_Sector_PPD[".advSearchFields"] = array();
$tdataCruce_Sector_PPD[".advSearchFields"][] = "sector_ppd";

$tdataCruce_Sector_PPD[".tableType"] = "report";

$tdataCruce_Sector_PPD[".printerPageOrientation"] = 0;
$tdataCruce_Sector_PPD[".nPrinterPageScale"] = 100;

$tdataCruce_Sector_PPD[".nPrinterSplitRecords"] = 40;

$tdataCruce_Sector_PPD[".nPrinterPDFSplitRecords"] = 40;



$tdataCruce_Sector_PPD[".geocodingEnabled"] = false;

//report settings
$tdataCruce_Sector_PPD[".crossTabReport"] = true;

$tdataCruce_Sector_PPD[".reportGroupFields"] = true;
$tdataCruce_Sector_PPD[".pageSize"] = 5;
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
$tdataCruce_Sector_PPD[".reportGroupFieldsData"] = $reportGroupFields;

$tdataCruce_Sector_PPD[".reportHorizontalSummary"] = true;

$tdataCruce_Sector_PPD[".isExistTotalFields"] = true;

$tdataCruce_Sector_PPD[".reportVerticalSummary"] = true;



$tdataCruce_Sector_PPD[".repShowDet"] = true;

$tdataCruce_Sector_PPD[".reportLayout"] = 6;

//end of report settings




$tdataCruce_Sector_PPD[".listGridLayout"] = 3;

$tdataCruce_Sector_PPD[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY hechos_delictivos1.tipo_arma DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCruce_Sector_PPD[".strOrderBy"] = $tstrOrderBy;

$tdataCruce_Sector_PPD[".orderindexes"] = array();
$tdataCruce_Sector_PPD[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "hechos_delictivos1.tipo_arma");

$tdataCruce_Sector_PPD[".sqlHead"] = "SELECT hechos_delictivos1.tipo_arma,  hechos_delictivos1.`aÑo_hecho`,  hechos_delictivos1.muni_he,  hechos_delictivos1.depart_he,  COUNT(hechos_delictivos1.muni_he) AS `COUNT(muni_he)`,  hechos_delictivos1.arma_analisis,  hechos_delictivos1.sector_ppd";
$tdataCruce_Sector_PPD[".sqlFrom"] = "FROM hechos_delictivos1  INNER JOIN pnc911 ON hechos_delictivos1.sector_ppd = pnc911.ppddsc";
$tdataCruce_Sector_PPD[".sqlWhereExpr"] = "";
$tdataCruce_Sector_PPD[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCruce_Sector_PPD[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCruce_Sector_PPD[".arrGroupsPerPage"] = $arrGPP;

$tdataCruce_Sector_PPD[".highlightSearchResults"] = true;

$tableKeysCruce_Sector_PPD = array();
$tdataCruce_Sector_PPD[".Keys"] = $tableKeysCruce_Sector_PPD;

$tdataCruce_Sector_PPD[".listFields"] = array();
$tdataCruce_Sector_PPD[".listFields"][] = "tipo_arma";
$tdataCruce_Sector_PPD[".listFields"][] = "aÑo_hecho";
$tdataCruce_Sector_PPD[".listFields"][] = "muni_he";
$tdataCruce_Sector_PPD[".listFields"][] = "depart_he";
$tdataCruce_Sector_PPD[".listFields"][] = "COUNT(muni_he)";
$tdataCruce_Sector_PPD[".listFields"][] = "arma_analisis";
$tdataCruce_Sector_PPD[".listFields"][] = "sector_ppd";

$tdataCruce_Sector_PPD[".hideMobileList"] = array();


$tdataCruce_Sector_PPD[".viewFields"] = array();
$tdataCruce_Sector_PPD[".viewFields"][] = "tipo_arma";
$tdataCruce_Sector_PPD[".viewFields"][] = "aÑo_hecho";
$tdataCruce_Sector_PPD[".viewFields"][] = "muni_he";
$tdataCruce_Sector_PPD[".viewFields"][] = "depart_he";
$tdataCruce_Sector_PPD[".viewFields"][] = "COUNT(muni_he)";
$tdataCruce_Sector_PPD[".viewFields"][] = "arma_analisis";
$tdataCruce_Sector_PPD[".viewFields"][] = "sector_ppd";

$tdataCruce_Sector_PPD[".addFields"] = array();
$tdataCruce_Sector_PPD[".addFields"][] = "tipo_arma";
$tdataCruce_Sector_PPD[".addFields"][] = "aÑo_hecho";
$tdataCruce_Sector_PPD[".addFields"][] = "muni_he";
$tdataCruce_Sector_PPD[".addFields"][] = "depart_he";
$tdataCruce_Sector_PPD[".addFields"][] = "sector_ppd";

$tdataCruce_Sector_PPD[".masterListFields"] = array();
$tdataCruce_Sector_PPD[".masterListFields"][] = "tipo_arma";
$tdataCruce_Sector_PPD[".masterListFields"][] = "aÑo_hecho";
$tdataCruce_Sector_PPD[".masterListFields"][] = "muni_he";
$tdataCruce_Sector_PPD[".masterListFields"][] = "depart_he";
$tdataCruce_Sector_PPD[".masterListFields"][] = "COUNT(muni_he)";
$tdataCruce_Sector_PPD[".masterListFields"][] = "arma_analisis";
$tdataCruce_Sector_PPD[".masterListFields"][] = "sector_ppd";

$tdataCruce_Sector_PPD[".inlineAddFields"] = array();
$tdataCruce_Sector_PPD[".inlineAddFields"][] = "tipo_arma";
$tdataCruce_Sector_PPD[".inlineAddFields"][] = "aÑo_hecho";
$tdataCruce_Sector_PPD[".inlineAddFields"][] = "muni_he";
$tdataCruce_Sector_PPD[".inlineAddFields"][] = "depart_he";
$tdataCruce_Sector_PPD[".inlineAddFields"][] = "sector_ppd";

$tdataCruce_Sector_PPD[".editFields"] = array();
$tdataCruce_Sector_PPD[".editFields"][] = "tipo_arma";
$tdataCruce_Sector_PPD[".editFields"][] = "aÑo_hecho";
$tdataCruce_Sector_PPD[".editFields"][] = "muni_he";
$tdataCruce_Sector_PPD[".editFields"][] = "depart_he";
$tdataCruce_Sector_PPD[".editFields"][] = "sector_ppd";

$tdataCruce_Sector_PPD[".inlineEditFields"] = array();
$tdataCruce_Sector_PPD[".inlineEditFields"][] = "tipo_arma";
$tdataCruce_Sector_PPD[".inlineEditFields"][] = "aÑo_hecho";
$tdataCruce_Sector_PPD[".inlineEditFields"][] = "muni_he";
$tdataCruce_Sector_PPD[".inlineEditFields"][] = "depart_he";
$tdataCruce_Sector_PPD[".inlineEditFields"][] = "sector_ppd";

$tdataCruce_Sector_PPD[".updateSelectedFields"] = array();
$tdataCruce_Sector_PPD[".updateSelectedFields"][] = "tipo_arma";
$tdataCruce_Sector_PPD[".updateSelectedFields"][] = "aÑo_hecho";
$tdataCruce_Sector_PPD[".updateSelectedFields"][] = "muni_he";
$tdataCruce_Sector_PPD[".updateSelectedFields"][] = "depart_he";
$tdataCruce_Sector_PPD[".updateSelectedFields"][] = "sector_ppd";


$tdataCruce_Sector_PPD[".exportFields"] = array();
$tdataCruce_Sector_PPD[".exportFields"][] = "tipo_arma";
$tdataCruce_Sector_PPD[".exportFields"][] = "aÑo_hecho";
$tdataCruce_Sector_PPD[".exportFields"][] = "muni_he";
$tdataCruce_Sector_PPD[".exportFields"][] = "depart_he";
$tdataCruce_Sector_PPD[".exportFields"][] = "COUNT(muni_he)";
$tdataCruce_Sector_PPD[".exportFields"][] = "arma_analisis";
$tdataCruce_Sector_PPD[".exportFields"][] = "sector_ppd";

$tdataCruce_Sector_PPD[".importFields"] = array();
$tdataCruce_Sector_PPD[".importFields"][] = "tipo_arma";
$tdataCruce_Sector_PPD[".importFields"][] = "aÑo_hecho";
$tdataCruce_Sector_PPD[".importFields"][] = "muni_he";
$tdataCruce_Sector_PPD[".importFields"][] = "depart_he";
$tdataCruce_Sector_PPD[".importFields"][] = "COUNT(muni_he)";
$tdataCruce_Sector_PPD[".importFields"][] = "arma_analisis";
$tdataCruce_Sector_PPD[".importFields"][] = "sector_ppd";

$tdataCruce_Sector_PPD[".printFields"] = array();
$tdataCruce_Sector_PPD[".printFields"][] = "tipo_arma";
$tdataCruce_Sector_PPD[".printFields"][] = "aÑo_hecho";
$tdataCruce_Sector_PPD[".printFields"][] = "muni_he";
$tdataCruce_Sector_PPD[".printFields"][] = "depart_he";
$tdataCruce_Sector_PPD[".printFields"][] = "COUNT(muni_he)";
$tdataCruce_Sector_PPD[".printFields"][] = "arma_analisis";
$tdataCruce_Sector_PPD[".printFields"][] = "sector_ppd";

//	tipo_arma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tipo_arma";
	$fdata["GoodName"] = "tipo_arma";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Cruce_Sector_PPD","tipo_arma");
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
	$fdata["FullName"] = "hechos_delictivos1.tipo_arma";

	
	
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








	$tdataCruce_Sector_PPD["tipo_arma"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Cruce_Sector_PPD","a_o_hecho");
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
	$fdata["FullName"] = "hechos_delictivos1.`aÑo_hecho`";

	
	
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




	$tdataCruce_Sector_PPD["aÑo_hecho"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Cruce_Sector_PPD","muni_he");
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
	$fdata["FullName"] = "hechos_delictivos1.muni_he";

	
	
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




	$tdataCruce_Sector_PPD["muni_he"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Cruce_Sector_PPD","depart_he");
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
	$fdata["FullName"] = "hechos_delictivos1.depart_he";

	
	
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




	$tdataCruce_Sector_PPD["depart_he"] = $fdata;
//	COUNT(muni_he)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "COUNT(muni_he)";
	$fdata["GoodName"] = "COUNT_muni_he_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Cruce_Sector_PPD","COUNT_muni_he_");
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
	$fdata["FullName"] = "COUNT(hechos_delictivos1.muni_he)";

	
	
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








	$tdataCruce_Sector_PPD["COUNT(muni_he)"] = $fdata;
//	arma_analisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "arma_analisis";
	$fdata["GoodName"] = "arma_analisis";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Cruce_Sector_PPD","arma_analisis");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "arma_analisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hechos_delictivos1.arma_analisis";

	
	
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








	$tdataCruce_Sector_PPD["arma_analisis"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Cruce_Sector_PPD","sector_ppd");
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
	$fdata["FullName"] = "hechos_delictivos1.sector_ppd";

	
	
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




	$tdataCruce_Sector_PPD["sector_ppd"] = $fdata;


$tables_data["Cruce Sector PPD"]=&$tdataCruce_Sector_PPD;
$field_labels["Cruce_Sector_PPD"] = &$fieldLabelsCruce_Sector_PPD;
$fieldToolTips["Cruce_Sector_PPD"] = &$fieldToolTipsCruce_Sector_PPD;
$placeHolders["Cruce_Sector_PPD"] = &$placeHoldersCruce_Sector_PPD;
$page_titles["Cruce_Sector_PPD"] = &$pageTitlesCruce_Sector_PPD;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Cruce Sector PPD"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Cruce_Sector_PPD()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "hechos_delictivos1.tipo_arma,  hechos_delictivos1.`aÑo_hecho`,  hechos_delictivos1.muni_he,  hechos_delictivos1.depart_he,  COUNT(hechos_delictivos1.muni_he) AS `COUNT(muni_he)`,  hechos_delictivos1.arma_analisis,  hechos_delictivos1.sector_ppd";
$proto0["m_strFrom"] = "FROM hechos_delictivos1  INNER JOIN pnc911 ON hechos_delictivos1.sector_ppd = pnc911.ppddsc";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY hechos_delictivos1.tipo_arma DESC";
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
	"m_srcTableName" => "Cruce Sector PPD"
));

$proto6["m_sql"] = "hechos_delictivos1.tipo_arma";
$proto6["m_srcTableName"] = "Cruce Sector PPD";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Cruce Sector PPD"
));

$proto8["m_sql"] = "hechos_delictivos1.`aÑo_hecho`";
$proto8["m_srcTableName"] = "Cruce Sector PPD";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Cruce Sector PPD"
));

$proto10["m_sql"] = "hechos_delictivos1.muni_he";
$proto10["m_srcTableName"] = "Cruce Sector PPD";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Cruce Sector PPD"
));

$proto12["m_sql"] = "hechos_delictivos1.depart_he";
$proto12["m_srcTableName"] = "Cruce Sector PPD";
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
	"m_srcTableName" => "Cruce Sector PPD"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "COUNT(hechos_delictivos1.muni_he)";
$proto14["m_srcTableName"] = "Cruce Sector PPD";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "COUNT(muni_he)";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "arma_analisis",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Cruce Sector PPD"
));

$proto17["m_sql"] = "hechos_delictivos1.arma_analisis";
$proto17["m_srcTableName"] = "Cruce Sector PPD";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Cruce Sector PPD"
));

$proto19["m_sql"] = "hechos_delictivos1.sector_ppd";
$proto19["m_srcTableName"] = "Cruce Sector PPD";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "hechos_delictivos1";
$proto22["m_srcTableName"] = "Cruce Sector PPD";
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
$proto21["m_srcTableName"] = "Cruce Sector PPD";
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
												$proto25=array();
$proto25["m_link"] = "SQLL_INNERJOIN";
			$proto26=array();
$proto26["m_strName"] = "pnc911";
$proto26["m_srcTableName"] = "Cruce Sector PPD";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "tipificacion";
$proto26["m_columns"][] = "direccion_validacion";
$proto26["m_columns"][] = "direccion_libre";
$proto26["m_columns"][] = "coordenadas_x";
$proto26["m_columns"][] = "coordenadas_y";
$proto26["m_columns"][] = "departamento";
$proto26["m_columns"][] = "municipio";
$proto26["m_columns"][] = "ppddsc";
$proto26["m_columns"][] = "meses";
$proto26["m_columns"][] = "avisos911";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "INNER JOIN pnc911 ON hechos_delictivos1.sector_ppd = pnc911.ppddsc";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "Cruce Sector PPD";
$proto27=array();
$proto27["m_sql"] = "hechos_delictivos1.sector_ppd = pnc911.ppddsc";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Cruce Sector PPD"
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "= pnc911.ppddsc";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "tipo_arma",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Cruce Sector PPD"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Cruce Sector PPD"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Cruce Sector PPD"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Cruce Sector PPD"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "arma_analisis",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Cruce Sector PPD"
));

$proto37["m_column"]=$obj;
$obj = new SQLGroupByItem($proto37);

$proto0["m_groupby"][]=$obj;
												$proto39=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Cruce Sector PPD"
));

$proto39["m_column"]=$obj;
$obj = new SQLGroupByItem($proto39);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto41=array();
						$obj = new SQLField(array(
	"m_strName" => "tipo_arma",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Cruce Sector PPD"
));

$proto41["m_column"]=$obj;
$proto41["m_bAsc"] = 0;
$proto41["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto41);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Cruce Sector PPD";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Cruce_Sector_PPD = createSqlQuery_Cruce_Sector_PPD();


	
		;

							

$tdataCruce_Sector_PPD[".sqlquery"] = $queryData_Cruce_Sector_PPD;

$tableEvents["Cruce Sector PPD"] = new eventsBase;
$tdataCruce_Sector_PPD[".hasEvents"] = false;

?>