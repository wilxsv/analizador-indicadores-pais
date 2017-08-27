<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMunicipios_y_delitos = array();
	$tdataMunicipios_y_delitos[".truncateText"] = true;
	$tdataMunicipios_y_delitos[".NumberOfChars"] = 80;
	$tdataMunicipios_y_delitos[".ShortName"] = "Municipios_y_delitos";
	$tdataMunicipios_y_delitos[".OwnerID"] = "";
	$tdataMunicipios_y_delitos[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelsMunicipios_y_delitos = array();
$fieldToolTipsMunicipios_y_delitos = array();
$pageTitlesMunicipios_y_delitos = array();
$placeHoldersMunicipios_y_delitos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsMunicipios_y_delitos["Spanish"] = array();
	$fieldToolTipsMunicipios_y_delitos["Spanish"] = array();
	$placeHoldersMunicipios_y_delitos["Spanish"] = array();
	$pageTitlesMunicipios_y_delitos["Spanish"] = array();
	$fieldLabelsMunicipios_y_delitos["Spanish"]["muni_he"] = "Muni He";
	$fieldToolTipsMunicipios_y_delitos["Spanish"]["muni_he"] = "";
	$placeHoldersMunicipios_y_delitos["Spanish"]["muni_he"] = "";
	$fieldLabelsMunicipios_y_delitos["Spanish"]["delito"] = "Delito";
	$fieldToolTipsMunicipios_y_delitos["Spanish"]["delito"] = "";
	$placeHoldersMunicipios_y_delitos["Spanish"]["delito"] = "";
	$fieldLabelsMunicipios_y_delitos["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsMunicipios_y_delitos["Spanish"]["a_o_hecho"] = "";
	$placeHoldersMunicipios_y_delitos["Spanish"]["a_o_hecho"] = "";
	$fieldLabelsMunicipios_y_delitos["Spanish"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipsMunicipios_y_delitos["Spanish"]["tipo_arma"] = "";
	$placeHoldersMunicipios_y_delitos["Spanish"]["tipo_arma"] = "";
	$fieldLabelsMunicipios_y_delitos["Spanish"]["depart_he"] = "Depart He";
	$fieldToolTipsMunicipios_y_delitos["Spanish"]["depart_he"] = "";
	$placeHoldersMunicipios_y_delitos["Spanish"]["depart_he"] = "";
	$fieldLabelsMunicipios_y_delitos["Spanish"]["COUNT_muni_he_"] = "COUNT(muni He)";
	$fieldToolTipsMunicipios_y_delitos["Spanish"]["COUNT_muni_he_"] = "";
	$placeHoldersMunicipios_y_delitos["Spanish"]["COUNT_muni_he_"] = "";
	$fieldLabelsMunicipios_y_delitos["Spanish"]["arma_analisis"] = "Arma Analisis";
	$fieldToolTipsMunicipios_y_delitos["Spanish"]["arma_analisis"] = "";
	$placeHoldersMunicipios_y_delitos["Spanish"]["arma_analisis"] = "";
	if (count($fieldToolTipsMunicipios_y_delitos["Spanish"]))
		$tdataMunicipios_y_delitos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMunicipios_y_delitos["English"] = array();
	$fieldToolTipsMunicipios_y_delitos["English"] = array();
	$placeHoldersMunicipios_y_delitos["English"] = array();
	$pageTitlesMunicipios_y_delitos["English"] = array();
	$fieldLabelsMunicipios_y_delitos["English"]["muni_he"] = "Muni He";
	$fieldToolTipsMunicipios_y_delitos["English"]["muni_he"] = "";
	$placeHoldersMunicipios_y_delitos["English"]["muni_he"] = "";
	$fieldLabelsMunicipios_y_delitos["English"]["delito"] = "Delito";
	$fieldToolTipsMunicipios_y_delitos["English"]["delito"] = "";
	$placeHoldersMunicipios_y_delitos["English"]["delito"] = "";
	$fieldLabelsMunicipios_y_delitos["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipsMunicipios_y_delitos["English"]["a_o_hecho"] = "";
	$placeHoldersMunicipios_y_delitos["English"]["a_o_hecho"] = "";
	$fieldLabelsMunicipios_y_delitos["English"]["tipo_arma"] = "Tipo Arma";
	$fieldToolTipsMunicipios_y_delitos["English"]["tipo_arma"] = "";
	$placeHoldersMunicipios_y_delitos["English"]["tipo_arma"] = "";
	$fieldLabelsMunicipios_y_delitos["English"]["depart_he"] = "Depart He";
	$fieldToolTipsMunicipios_y_delitos["English"]["depart_he"] = "";
	$placeHoldersMunicipios_y_delitos["English"]["depart_he"] = "";
	$fieldLabelsMunicipios_y_delitos["English"]["COUNT_muni_he_"] = "COUNT(muni He)";
	$fieldToolTipsMunicipios_y_delitos["English"]["COUNT_muni_he_"] = "";
	$placeHoldersMunicipios_y_delitos["English"]["COUNT_muni_he_"] = "";
	$fieldLabelsMunicipios_y_delitos["English"]["arma_analisis"] = "Arma Analisis";
	$fieldToolTipsMunicipios_y_delitos["English"]["arma_analisis"] = "";
	$placeHoldersMunicipios_y_delitos["English"]["arma_analisis"] = "";
	if (count($fieldToolTipsMunicipios_y_delitos["English"]))
		$tdataMunicipios_y_delitos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMunicipios_y_delitos[""] = array();
	$fieldToolTipsMunicipios_y_delitos[""] = array();
	$placeHoldersMunicipios_y_delitos[""] = array();
	$pageTitlesMunicipios_y_delitos[""] = array();
	if (count($fieldToolTipsMunicipios_y_delitos[""]))
		$tdataMunicipios_y_delitos[".isUseToolTips"] = true;
}





$tdataMunicipios_y_delitos[".shortTableName"] = "Municipios_y_delitos";
$tdataMunicipios_y_delitos[".nSecOptions"] = 0;
$tdataMunicipios_y_delitos[".recsPerRowPrint"] = 1;
$tdataMunicipios_y_delitos[".mainTableOwnerID"] = "";
$tdataMunicipios_y_delitos[".moveNext"] = 1;
$tdataMunicipios_y_delitos[".entityType"] = 2;

$tdataMunicipios_y_delitos[".strOriginalTableName"] = "hechosdelictivos";

	



$tdataMunicipios_y_delitos[".showAddInPopup"] = false;

$tdataMunicipios_y_delitos[".showEditInPopup"] = false;

$tdataMunicipios_y_delitos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMunicipios_y_delitos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMunicipios_y_delitos[".fieldsForRegister"] = array();

$tdataMunicipios_y_delitos[".listAjax"] = false;

	$tdataMunicipios_y_delitos[".audit"] = false;

	$tdataMunicipios_y_delitos[".locking"] = false;


$tdataMunicipios_y_delitos[".add"] = true;
$tdataMunicipios_y_delitos[".afterAddAction"] = 1;
$tdataMunicipios_y_delitos[".closePopupAfterAdd"] = 1;
$tdataMunicipios_y_delitos[".afterAddActionDetTable"] = "";

$tdataMunicipios_y_delitos[".list"] = true;



$tdataMunicipios_y_delitos[".reorderRecordsByHeader"] = true;



$tdataMunicipios_y_delitos[".inlineAdd"] = true;


$tdataMunicipios_y_delitos[".exportTo"] = true;

$tdataMunicipios_y_delitos[".printFriendly"] = true;


$tdataMunicipios_y_delitos[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataMunicipios_y_delitos[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataMunicipios_y_delitos[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataMunicipios_y_delitos[".searchSaving"] = false;
//

$tdataMunicipios_y_delitos[".showSearchPanel"] = true;
		$tdataMunicipios_y_delitos[".flexibleSearch"] = true;

$tdataMunicipios_y_delitos[".isUseAjaxSuggest"] = true;






$tdataMunicipios_y_delitos[".ajaxCodeSnippetAdded"] = false;

$tdataMunicipios_y_delitos[".buttonsAdded"] = false;

$tdataMunicipios_y_delitos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMunicipios_y_delitos[".isUseTimeForSearch"] = false;





$tdataMunicipios_y_delitos[".allSearchFields"] = array();
$tdataMunicipios_y_delitos[".filterFields"] = array();
$tdataMunicipios_y_delitos[".requiredSearchFields"] = array();

$tdataMunicipios_y_delitos[".allSearchFields"][] = "delito";
	$tdataMunicipios_y_delitos[".allSearchFields"][] = "tipo_arma";
	$tdataMunicipios_y_delitos[".allSearchFields"][] = "aÑo_hecho";
	$tdataMunicipios_y_delitos[".allSearchFields"][] = "muni_he";
		$tdataMunicipios_y_delitos[".requiredSearchFields"][] = "muni_he";
$tdataMunicipios_y_delitos[".allSearchFields"][] = "depart_he";
		$tdataMunicipios_y_delitos[".requiredSearchFields"][] = "depart_he";
$tdataMunicipios_y_delitos[".allSearchFields"][] = "COUNT(muni_he)";
	$tdataMunicipios_y_delitos[".allSearchFields"][] = "arma_analisis";
	

$tdataMunicipios_y_delitos[".googleLikeFields"] = array();
$tdataMunicipios_y_delitos[".googleLikeFields"][] = "delito";
$tdataMunicipios_y_delitos[".googleLikeFields"][] = "tipo_arma";
$tdataMunicipios_y_delitos[".googleLikeFields"][] = "aÑo_hecho";
$tdataMunicipios_y_delitos[".googleLikeFields"][] = "muni_he";
$tdataMunicipios_y_delitos[".googleLikeFields"][] = "depart_he";
$tdataMunicipios_y_delitos[".googleLikeFields"][] = "COUNT(muni_he)";
$tdataMunicipios_y_delitos[".googleLikeFields"][] = "arma_analisis";

$tdataMunicipios_y_delitos[".panelSearchFields"] = array();
$tdataMunicipios_y_delitos[".searchPanelOptions"] = array();
$tdataMunicipios_y_delitos[".panelSearchFields"][] = "muni_he";
	$tdataMunicipios_y_delitos[".panelSearchFields"][] = "depart_he";
	
$tdataMunicipios_y_delitos[".advSearchFields"] = array();
$tdataMunicipios_y_delitos[".advSearchFields"][] = "delito";
$tdataMunicipios_y_delitos[".advSearchFields"][] = "tipo_arma";
$tdataMunicipios_y_delitos[".advSearchFields"][] = "aÑo_hecho";
$tdataMunicipios_y_delitos[".advSearchFields"][] = "muni_he";
$tdataMunicipios_y_delitos[".advSearchFields"][] = "depart_he";
$tdataMunicipios_y_delitos[".advSearchFields"][] = "COUNT(muni_he)";
$tdataMunicipios_y_delitos[".advSearchFields"][] = "arma_analisis";

$tdataMunicipios_y_delitos[".tableType"] = "report";

$tdataMunicipios_y_delitos[".printerPageOrientation"] = 0;
$tdataMunicipios_y_delitos[".nPrinterPageScale"] = 100;

$tdataMunicipios_y_delitos[".nPrinterSplitRecords"] = 40;

$tdataMunicipios_y_delitos[".nPrinterPDFSplitRecords"] = 40;



$tdataMunicipios_y_delitos[".geocodingEnabled"] = false;

//report settings
$tdataMunicipios_y_delitos[".crossTabReport"] = true;

$tdataMunicipios_y_delitos[".reportGroupFields"] = true;
$tdataMunicipios_y_delitos[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "delito";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "muni_he";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdataMunicipios_y_delitos[".reportGroupFieldsData"] = $reportGroupFields;

$tdataMunicipios_y_delitos[".reportHorizontalSummary"] = true;

$tdataMunicipios_y_delitos[".isExistTotalFields"] = true;

$tdataMunicipios_y_delitos[".reportVerticalSummary"] = true;



$tdataMunicipios_y_delitos[".repShowDet"] = true;

$tdataMunicipios_y_delitos[".reportLayout"] = 6;

//end of report settings




$tdataMunicipios_y_delitos[".listGridLayout"] = 3;

$tdataMunicipios_y_delitos[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "ORDER BY muni_he DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMunicipios_y_delitos[".strOrderBy"] = $tstrOrderBy;

$tdataMunicipios_y_delitos[".orderindexes"] = array();
$tdataMunicipios_y_delitos[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "muni_he");

$tdataMunicipios_y_delitos[".sqlHead"] = "SELECT delito,  tipo_arma,  `aÑo_hecho`,  muni_he,  depart_he,  COUNT(muni_he) AS `COUNT(muni_he)`,  arma_analisis";
$tdataMunicipios_y_delitos[".sqlFrom"] = "FROM hechos_delictivos1";
$tdataMunicipios_y_delitos[".sqlWhereExpr"] = "";
$tdataMunicipios_y_delitos[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMunicipios_y_delitos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMunicipios_y_delitos[".arrGroupsPerPage"] = $arrGPP;

$tdataMunicipios_y_delitos[".highlightSearchResults"] = true;

$tableKeysMunicipios_y_delitos = array();
$tdataMunicipios_y_delitos[".Keys"] = $tableKeysMunicipios_y_delitos;

$tdataMunicipios_y_delitos[".listFields"] = array();
$tdataMunicipios_y_delitos[".listFields"][] = "delito";
$tdataMunicipios_y_delitos[".listFields"][] = "tipo_arma";
$tdataMunicipios_y_delitos[".listFields"][] = "aÑo_hecho";
$tdataMunicipios_y_delitos[".listFields"][] = "muni_he";
$tdataMunicipios_y_delitos[".listFields"][] = "depart_he";
$tdataMunicipios_y_delitos[".listFields"][] = "COUNT(muni_he)";
$tdataMunicipios_y_delitos[".listFields"][] = "arma_analisis";

$tdataMunicipios_y_delitos[".hideMobileList"] = array();


$tdataMunicipios_y_delitos[".viewFields"] = array();
$tdataMunicipios_y_delitos[".viewFields"][] = "delito";
$tdataMunicipios_y_delitos[".viewFields"][] = "tipo_arma";
$tdataMunicipios_y_delitos[".viewFields"][] = "aÑo_hecho";
$tdataMunicipios_y_delitos[".viewFields"][] = "muni_he";
$tdataMunicipios_y_delitos[".viewFields"][] = "depart_he";
$tdataMunicipios_y_delitos[".viewFields"][] = "COUNT(muni_he)";
$tdataMunicipios_y_delitos[".viewFields"][] = "arma_analisis";

$tdataMunicipios_y_delitos[".addFields"] = array();
$tdataMunicipios_y_delitos[".addFields"][] = "delito";
$tdataMunicipios_y_delitos[".addFields"][] = "tipo_arma";
$tdataMunicipios_y_delitos[".addFields"][] = "aÑo_hecho";
$tdataMunicipios_y_delitos[".addFields"][] = "muni_he";
$tdataMunicipios_y_delitos[".addFields"][] = "depart_he";

$tdataMunicipios_y_delitos[".masterListFields"] = array();
$tdataMunicipios_y_delitos[".masterListFields"][] = "delito";
$tdataMunicipios_y_delitos[".masterListFields"][] = "tipo_arma";
$tdataMunicipios_y_delitos[".masterListFields"][] = "aÑo_hecho";
$tdataMunicipios_y_delitos[".masterListFields"][] = "muni_he";
$tdataMunicipios_y_delitos[".masterListFields"][] = "depart_he";
$tdataMunicipios_y_delitos[".masterListFields"][] = "COUNT(muni_he)";
$tdataMunicipios_y_delitos[".masterListFields"][] = "arma_analisis";

$tdataMunicipios_y_delitos[".inlineAddFields"] = array();
$tdataMunicipios_y_delitos[".inlineAddFields"][] = "delito";
$tdataMunicipios_y_delitos[".inlineAddFields"][] = "tipo_arma";
$tdataMunicipios_y_delitos[".inlineAddFields"][] = "aÑo_hecho";
$tdataMunicipios_y_delitos[".inlineAddFields"][] = "muni_he";
$tdataMunicipios_y_delitos[".inlineAddFields"][] = "depart_he";

$tdataMunicipios_y_delitos[".editFields"] = array();
$tdataMunicipios_y_delitos[".editFields"][] = "delito";
$tdataMunicipios_y_delitos[".editFields"][] = "tipo_arma";
$tdataMunicipios_y_delitos[".editFields"][] = "aÑo_hecho";
$tdataMunicipios_y_delitos[".editFields"][] = "muni_he";
$tdataMunicipios_y_delitos[".editFields"][] = "depart_he";

$tdataMunicipios_y_delitos[".inlineEditFields"] = array();
$tdataMunicipios_y_delitos[".inlineEditFields"][] = "delito";
$tdataMunicipios_y_delitos[".inlineEditFields"][] = "tipo_arma";
$tdataMunicipios_y_delitos[".inlineEditFields"][] = "aÑo_hecho";
$tdataMunicipios_y_delitos[".inlineEditFields"][] = "muni_he";
$tdataMunicipios_y_delitos[".inlineEditFields"][] = "depart_he";

$tdataMunicipios_y_delitos[".updateSelectedFields"] = array();
$tdataMunicipios_y_delitos[".updateSelectedFields"][] = "delito";
$tdataMunicipios_y_delitos[".updateSelectedFields"][] = "tipo_arma";
$tdataMunicipios_y_delitos[".updateSelectedFields"][] = "aÑo_hecho";
$tdataMunicipios_y_delitos[".updateSelectedFields"][] = "muni_he";
$tdataMunicipios_y_delitos[".updateSelectedFields"][] = "depart_he";


$tdataMunicipios_y_delitos[".exportFields"] = array();
$tdataMunicipios_y_delitos[".exportFields"][] = "delito";
$tdataMunicipios_y_delitos[".exportFields"][] = "tipo_arma";
$tdataMunicipios_y_delitos[".exportFields"][] = "aÑo_hecho";
$tdataMunicipios_y_delitos[".exportFields"][] = "muni_he";
$tdataMunicipios_y_delitos[".exportFields"][] = "depart_he";
$tdataMunicipios_y_delitos[".exportFields"][] = "COUNT(muni_he)";
$tdataMunicipios_y_delitos[".exportFields"][] = "arma_analisis";

$tdataMunicipios_y_delitos[".importFields"] = array();
$tdataMunicipios_y_delitos[".importFields"][] = "delito";
$tdataMunicipios_y_delitos[".importFields"][] = "tipo_arma";
$tdataMunicipios_y_delitos[".importFields"][] = "aÑo_hecho";
$tdataMunicipios_y_delitos[".importFields"][] = "muni_he";
$tdataMunicipios_y_delitos[".importFields"][] = "depart_he";
$tdataMunicipios_y_delitos[".importFields"][] = "COUNT(muni_he)";
$tdataMunicipios_y_delitos[".importFields"][] = "arma_analisis";

$tdataMunicipios_y_delitos[".printFields"] = array();
$tdataMunicipios_y_delitos[".printFields"][] = "delito";
$tdataMunicipios_y_delitos[".printFields"][] = "tipo_arma";
$tdataMunicipios_y_delitos[".printFields"][] = "aÑo_hecho";
$tdataMunicipios_y_delitos[".printFields"][] = "muni_he";
$tdataMunicipios_y_delitos[".printFields"][] = "depart_he";
$tdataMunicipios_y_delitos[".printFields"][] = "COUNT(muni_he)";
$tdataMunicipios_y_delitos[".printFields"][] = "arma_analisis";

//	delito
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "delito";
	$fdata["GoodName"] = "delito";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Municipios_y_delitos","delito");
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




	$tdataMunicipios_y_delitos["delito"] = $fdata;
//	tipo_arma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipo_arma";
	$fdata["GoodName"] = "tipo_arma";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Municipios_y_delitos","tipo_arma");
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataMunicipios_y_delitos["tipo_arma"] = $fdata;
//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Municipios_y_delitos","a_o_hecho");
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




	$tdataMunicipios_y_delitos["aÑo_hecho"] = $fdata;
//	muni_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "muni_he";
	$fdata["GoodName"] = "muni_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Municipios_y_delitos","muni_he");
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




	$tdataMunicipios_y_delitos["muni_he"] = $fdata;
//	depart_he
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "depart_he";
	$fdata["GoodName"] = "depart_he";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Municipios_y_delitos","depart_he");
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




	$tdataMunicipios_y_delitos["depart_he"] = $fdata;
//	COUNT(muni_he)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "COUNT(muni_he)";
	$fdata["GoodName"] = "COUNT_muni_he_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Municipios_y_delitos","COUNT_muni_he_");
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




	$tdataMunicipios_y_delitos["COUNT(muni_he)"] = $fdata;
//	arma_analisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "arma_analisis";
	$fdata["GoodName"] = "arma_analisis";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Municipios_y_delitos","arma_analisis");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataMunicipios_y_delitos["arma_analisis"] = $fdata;


$tables_data["Municipios y delitos"]=&$tdataMunicipios_y_delitos;
$field_labels["Municipios_y_delitos"] = &$fieldLabelsMunicipios_y_delitos;
$fieldToolTips["Municipios_y_delitos"] = &$fieldToolTipsMunicipios_y_delitos;
$placeHolders["Municipios_y_delitos"] = &$placeHoldersMunicipios_y_delitos;
$page_titles["Municipios_y_delitos"] = &$pageTitlesMunicipios_y_delitos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["Municipios y delitos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Municipios_y_delitos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "delito,  tipo_arma,  `aÑo_hecho`,  muni_he,  depart_he,  COUNT(muni_he) AS `COUNT(muni_he)`,  arma_analisis";
$proto0["m_strFrom"] = "FROM hechos_delictivos1";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY muni_he DESC";
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
	"m_srcTableName" => "Municipios y delitos"
));

$proto6["m_sql"] = "delito";
$proto6["m_srcTableName"] = "Municipios y delitos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_arma",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Municipios y delitos"
));

$proto8["m_sql"] = "tipo_arma";
$proto8["m_srcTableName"] = "Municipios y delitos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Municipios y delitos"
));

$proto10["m_sql"] = "`aÑo_hecho`";
$proto10["m_srcTableName"] = "Municipios y delitos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Municipios y delitos"
));

$proto12["m_sql"] = "muni_he";
$proto12["m_srcTableName"] = "Municipios y delitos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Municipios y delitos"
));

$proto14["m_sql"] = "depart_he";
$proto14["m_srcTableName"] = "Municipios y delitos";
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
	"m_srcTableName" => "Municipios y delitos"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "COUNT(muni_he)";
$proto16["m_srcTableName"] = "Municipios y delitos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "COUNT(muni_he)";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "arma_analisis",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Municipios y delitos"
));

$proto19["m_sql"] = "arma_analisis";
$proto19["m_srcTableName"] = "Municipios y delitos";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "hechos_delictivos1";
$proto22["m_srcTableName"] = "Municipios y delitos";
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
$proto21["m_srcTableName"] = "Municipios y delitos";
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
	"m_srcTableName" => "Municipios y delitos"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "tipo_arma",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Municipios y delitos"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Municipios y delitos"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Municipios y delitos"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Municipios y delitos"
));

$proto33["m_column"]=$obj;
$obj = new SQLGroupByItem($proto33);

$proto0["m_groupby"][]=$obj;
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "arma_analisis",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Municipios y delitos"
));

$proto35["m_column"]=$obj;
$obj = new SQLGroupByItem($proto35);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto37=array();
						$obj = new SQLField(array(
	"m_strName" => "muni_he",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Municipios y delitos"
));

$proto37["m_column"]=$obj;
$proto37["m_bAsc"] = 0;
$proto37["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto37);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Municipios y delitos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Municipios_y_delitos = createSqlQuery_Municipios_y_delitos();


	
		;

							

$tdataMunicipios_y_delitos[".sqlquery"] = $queryData_Municipios_y_delitos;

$tableEvents["Municipios y delitos"] = new eventsBase;
$tdataMunicipios_y_delitos[".hasEvents"] = false;

?>