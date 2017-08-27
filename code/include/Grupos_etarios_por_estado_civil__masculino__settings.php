<?php
require_once(getabspath("classes/cipherer.php"));




$tdataGrupos_etarios_por_estado_civil__masculino_ = array();
	$tdataGrupos_etarios_por_estado_civil__masculino_[".truncateText"] = true;
	$tdataGrupos_etarios_por_estado_civil__masculino_[".NumberOfChars"] = 80;
	$tdataGrupos_etarios_por_estado_civil__masculino_[".ShortName"] = "Grupos_etarios_por_estado_civil__masculino_";
	$tdataGrupos_etarios_por_estado_civil__masculino_[".OwnerID"] = "";
	$tdataGrupos_etarios_por_estado_civil__masculino_[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsGrupos_etarios_por_estado_civil__masculino_ = array();
$fieldToolTipsGrupos_etarios_por_estado_civil__masculino_ = array();
$pageTitlesGrupos_etarios_por_estado_civil__masculino_ = array();
$placeHoldersGrupos_etarios_por_estado_civil__masculino_ = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsGrupos_etarios_por_estado_civil__masculino_["Spanish"] = array();
	$fieldToolTipsGrupos_etarios_por_estado_civil__masculino_["Spanish"] = array();
	$placeHoldersGrupos_etarios_por_estado_civil__masculino_["Spanish"] = array();
	$pageTitlesGrupos_etarios_por_estado_civil__masculino_["Spanish"] = array();
	$fieldLabelsGrupos_etarios_por_estado_civil__masculino_["Spanish"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsGrupos_etarios_por_estado_civil__masculino_["Spanish"]["rangoetario"] = "";
	$placeHoldersGrupos_etarios_por_estado_civil__masculino_["Spanish"]["rangoetario"] = "";
	$fieldLabelsGrupos_etarios_por_estado_civil__masculino_["Spanish"]["estado_civil"] = "Estado Civil";
	$fieldToolTipsGrupos_etarios_por_estado_civil__masculino_["Spanish"]["estado_civil"] = "";
	$placeHoldersGrupos_etarios_por_estado_civil__masculino_["Spanish"]["estado_civil"] = "";
	$fieldLabelsGrupos_etarios_por_estado_civil__masculino_["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsGrupos_etarios_por_estado_civil__masculino_["Spanish"]["mun_resid"] = "";
	$placeHoldersGrupos_etarios_por_estado_civil__masculino_["Spanish"]["mun_resid"] = "";
	$fieldLabelsGrupos_etarios_por_estado_civil__masculino_["Spanish"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsGrupos_etarios_por_estado_civil__masculino_["Spanish"]["depart_resid"] = "";
	$placeHoldersGrupos_etarios_por_estado_civil__masculino_["Spanish"]["depart_resid"] = "";
	$fieldLabelsGrupos_etarios_por_estado_civil__masculino_["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsGrupos_etarios_por_estado_civil__masculino_["Spanish"]["sector_ppd"] = "";
	$placeHoldersGrupos_etarios_por_estado_civil__masculino_["Spanish"]["sector_ppd"] = "";
	$fieldLabelsGrupos_etarios_por_estado_civil__masculino_["Spanish"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsGrupos_etarios_por_estado_civil__masculino_["Spanish"]["COUNT_mun_resid_"] = "";
	$placeHoldersGrupos_etarios_por_estado_civil__masculino_["Spanish"]["COUNT_mun_resid_"] = "";
	if (count($fieldToolTipsGrupos_etarios_por_estado_civil__masculino_["Spanish"]))
		$tdataGrupos_etarios_por_estado_civil__masculino_[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsGrupos_etarios_por_estado_civil__masculino_["English"] = array();
	$fieldToolTipsGrupos_etarios_por_estado_civil__masculino_["English"] = array();
	$placeHoldersGrupos_etarios_por_estado_civil__masculino_["English"] = array();
	$pageTitlesGrupos_etarios_por_estado_civil__masculino_["English"] = array();
	$fieldLabelsGrupos_etarios_por_estado_civil__masculino_["English"]["rangoetario"] = "Rangoetario";
	$fieldToolTipsGrupos_etarios_por_estado_civil__masculino_["English"]["rangoetario"] = "";
	$placeHoldersGrupos_etarios_por_estado_civil__masculino_["English"]["rangoetario"] = "";
	$fieldLabelsGrupos_etarios_por_estado_civil__masculino_["English"]["estado_civil"] = "Estado Civil";
	$fieldToolTipsGrupos_etarios_por_estado_civil__masculino_["English"]["estado_civil"] = "";
	$placeHoldersGrupos_etarios_por_estado_civil__masculino_["English"]["estado_civil"] = "";
	$fieldLabelsGrupos_etarios_por_estado_civil__masculino_["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsGrupos_etarios_por_estado_civil__masculino_["English"]["mun_resid"] = "";
	$placeHoldersGrupos_etarios_por_estado_civil__masculino_["English"]["mun_resid"] = "";
	$fieldLabelsGrupos_etarios_por_estado_civil__masculino_["English"]["depart_resid"] = "Depart Resid";
	$fieldToolTipsGrupos_etarios_por_estado_civil__masculino_["English"]["depart_resid"] = "";
	$placeHoldersGrupos_etarios_por_estado_civil__masculino_["English"]["depart_resid"] = "";
	$fieldLabelsGrupos_etarios_por_estado_civil__masculino_["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsGrupos_etarios_por_estado_civil__masculino_["English"]["sector_ppd"] = "";
	$placeHoldersGrupos_etarios_por_estado_civil__masculino_["English"]["sector_ppd"] = "";
	$fieldLabelsGrupos_etarios_por_estado_civil__masculino_["English"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsGrupos_etarios_por_estado_civil__masculino_["English"]["COUNT_mun_resid_"] = "";
	$placeHoldersGrupos_etarios_por_estado_civil__masculino_["English"]["COUNT_mun_resid_"] = "";
	if (count($fieldToolTipsGrupos_etarios_por_estado_civil__masculino_["English"]))
		$tdataGrupos_etarios_por_estado_civil__masculino_[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsGrupos_etarios_por_estado_civil__masculino_[""] = array();
	$fieldToolTipsGrupos_etarios_por_estado_civil__masculino_[""] = array();
	$placeHoldersGrupos_etarios_por_estado_civil__masculino_[""] = array();
	$pageTitlesGrupos_etarios_por_estado_civil__masculino_[""] = array();
	if (count($fieldToolTipsGrupos_etarios_por_estado_civil__masculino_[""]))
		$tdataGrupos_etarios_por_estado_civil__masculino_[".isUseToolTips"] = true;
}





$tdataGrupos_etarios_por_estado_civil__masculino_[".shortTableName"] = "Grupos_etarios_por_estado_civil__masculino_";
$tdataGrupos_etarios_por_estado_civil__masculino_[".nSecOptions"] = 0;
$tdataGrupos_etarios_por_estado_civil__masculino_[".recsPerRowPrint"] = 1;
$tdataGrupos_etarios_por_estado_civil__masculino_[".mainTableOwnerID"] = "";
$tdataGrupos_etarios_por_estado_civil__masculino_[".moveNext"] = 1;
$tdataGrupos_etarios_por_estado_civil__masculino_[".entityType"] = 1;

$tdataGrupos_etarios_por_estado_civil__masculino_[".strOriginalTableName"] = "carcel";

	



$tdataGrupos_etarios_por_estado_civil__masculino_[".showAddInPopup"] = false;

$tdataGrupos_etarios_por_estado_civil__masculino_[".showEditInPopup"] = false;

$tdataGrupos_etarios_por_estado_civil__masculino_[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataGrupos_etarios_por_estado_civil__masculino_[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataGrupos_etarios_por_estado_civil__masculino_[".fieldsForRegister"] = array();

	$tdataGrupos_etarios_por_estado_civil__masculino_[".listAjax"] = true;

	$tdataGrupos_etarios_por_estado_civil__masculino_[".audit"] = false;

	$tdataGrupos_etarios_por_estado_civil__masculino_[".locking"] = false;



$tdataGrupos_etarios_por_estado_civil__masculino_[".list"] = true;



$tdataGrupos_etarios_por_estado_civil__masculino_[".reorderRecordsByHeader"] = true;
$tdataGrupos_etarios_por_estado_civil__masculino_[".createSortByDropdown"] = true;
$tdataGrupos_etarios_por_estado_civil__masculino_[".strSortControlSettingsJSON"] = "";




$tdataGrupos_etarios_por_estado_civil__masculino_[".import"] = true;

$tdataGrupos_etarios_por_estado_civil__masculino_[".exportTo"] = true;

$tdataGrupos_etarios_por_estado_civil__masculino_[".printFriendly"] = true;


$tdataGrupos_etarios_por_estado_civil__masculino_[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataGrupos_etarios_por_estado_civil__masculino_[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataGrupos_etarios_por_estado_civil__masculino_[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataGrupos_etarios_por_estado_civil__masculino_[".searchSaving"] = false;
//

$tdataGrupos_etarios_por_estado_civil__masculino_[".showSearchPanel"] = true;
		$tdataGrupos_etarios_por_estado_civil__masculino_[".flexibleSearch"] = true;

$tdataGrupos_etarios_por_estado_civil__masculino_[".isUseAjaxSuggest"] = true;

$tdataGrupos_etarios_por_estado_civil__masculino_[".rowHighlite"] = true;





$tdataGrupos_etarios_por_estado_civil__masculino_[".ajaxCodeSnippetAdded"] = false;

$tdataGrupos_etarios_por_estado_civil__masculino_[".buttonsAdded"] = false;

$tdataGrupos_etarios_por_estado_civil__masculino_[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGrupos_etarios_por_estado_civil__masculino_[".isUseTimeForSearch"] = false;





$tdataGrupos_etarios_por_estado_civil__masculino_[".allSearchFields"] = array();
$tdataGrupos_etarios_por_estado_civil__masculino_[".filterFields"] = array();
$tdataGrupos_etarios_por_estado_civil__masculino_[".requiredSearchFields"] = array();

$tdataGrupos_etarios_por_estado_civil__masculino_[".allSearchFields"][] = "rangoetario";
	$tdataGrupos_etarios_por_estado_civil__masculino_[".allSearchFields"][] = "sector_ppd";
	$tdataGrupos_etarios_por_estado_civil__masculino_[".allSearchFields"][] = "mun_resid";
	$tdataGrupos_etarios_por_estado_civil__masculino_[".allSearchFields"][] = "depart_resid";
	$tdataGrupos_etarios_por_estado_civil__masculino_[".allSearchFields"][] = "estado_civil";
	$tdataGrupos_etarios_por_estado_civil__masculino_[".allSearchFields"][] = "COUNT(mun_resid)";
	
$tdataGrupos_etarios_por_estado_civil__masculino_[".filterFields"][] = "mun_resid";
$tdataGrupos_etarios_por_estado_civil__masculino_[".filterFields"][] = "depart_resid";

$tdataGrupos_etarios_por_estado_civil__masculino_[".googleLikeFields"] = array();
$tdataGrupos_etarios_por_estado_civil__masculino_[".googleLikeFields"][] = "rangoetario";
$tdataGrupos_etarios_por_estado_civil__masculino_[".googleLikeFields"][] = "sector_ppd";
$tdataGrupos_etarios_por_estado_civil__masculino_[".googleLikeFields"][] = "mun_resid";
$tdataGrupos_etarios_por_estado_civil__masculino_[".googleLikeFields"][] = "depart_resid";
$tdataGrupos_etarios_por_estado_civil__masculino_[".googleLikeFields"][] = "estado_civil";
$tdataGrupos_etarios_por_estado_civil__masculino_[".googleLikeFields"][] = "COUNT(mun_resid)";


$tdataGrupos_etarios_por_estado_civil__masculino_[".advSearchFields"] = array();
$tdataGrupos_etarios_por_estado_civil__masculino_[".advSearchFields"][] = "rangoetario";
$tdataGrupos_etarios_por_estado_civil__masculino_[".advSearchFields"][] = "sector_ppd";
$tdataGrupos_etarios_por_estado_civil__masculino_[".advSearchFields"][] = "mun_resid";
$tdataGrupos_etarios_por_estado_civil__masculino_[".advSearchFields"][] = "depart_resid";
$tdataGrupos_etarios_por_estado_civil__masculino_[".advSearchFields"][] = "estado_civil";
$tdataGrupos_etarios_por_estado_civil__masculino_[".advSearchFields"][] = "COUNT(mun_resid)";

$tdataGrupos_etarios_por_estado_civil__masculino_[".tableType"] = "list";

$tdataGrupos_etarios_por_estado_civil__masculino_[".printerPageOrientation"] = 0;
$tdataGrupos_etarios_por_estado_civil__masculino_[".nPrinterPageScale"] = 100;

$tdataGrupos_etarios_por_estado_civil__masculino_[".nPrinterSplitRecords"] = 40;

$tdataGrupos_etarios_por_estado_civil__masculino_[".nPrinterPDFSplitRecords"] = 40;



$tdataGrupos_etarios_por_estado_civil__masculino_[".geocodingEnabled"] = false;





$tdataGrupos_etarios_por_estado_civil__masculino_[".listGridLayout"] = 3;

$tdataGrupos_etarios_por_estado_civil__masculino_[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdataGrupos_etarios_por_estado_civil__masculino_[".pageSize"] = 10;

$tdataGrupos_etarios_por_estado_civil__masculino_[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGrupos_etarios_por_estado_civil__masculino_[".strOrderBy"] = $tstrOrderBy;

$tdataGrupos_etarios_por_estado_civil__masculino_[".orderindexes"] = array();

$tdataGrupos_etarios_por_estado_civil__masculino_[".sqlHead"] = "SELECT rangoetario,  sector_ppd,  mun_resid,  depart_resid,  estado_civil,  COUNT(mun_resid) AS `COUNT(mun_resid)`";
$tdataGrupos_etarios_por_estado_civil__masculino_[".sqlFrom"] = "FROM carcel";
$tdataGrupos_etarios_por_estado_civil__masculino_[".sqlWhereExpr"] = "";
$tdataGrupos_etarios_por_estado_civil__masculino_[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGrupos_etarios_por_estado_civil__masculino_[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGrupos_etarios_por_estado_civil__masculino_[".arrGroupsPerPage"] = $arrGPP;

$tdataGrupos_etarios_por_estado_civil__masculino_[".highlightSearchResults"] = true;

$tableKeysGrupos_etarios_por_estado_civil__masculino_ = array();
$tdataGrupos_etarios_por_estado_civil__masculino_[".Keys"] = $tableKeysGrupos_etarios_por_estado_civil__masculino_;

$tdataGrupos_etarios_por_estado_civil__masculino_[".listFields"] = array();
$tdataGrupos_etarios_por_estado_civil__masculino_[".listFields"][] = "rangoetario";
$tdataGrupos_etarios_por_estado_civil__masculino_[".listFields"][] = "sector_ppd";
$tdataGrupos_etarios_por_estado_civil__masculino_[".listFields"][] = "mun_resid";
$tdataGrupos_etarios_por_estado_civil__masculino_[".listFields"][] = "depart_resid";
$tdataGrupos_etarios_por_estado_civil__masculino_[".listFields"][] = "estado_civil";
$tdataGrupos_etarios_por_estado_civil__masculino_[".listFields"][] = "COUNT(mun_resid)";

$tdataGrupos_etarios_por_estado_civil__masculino_[".hideMobileList"] = array();


$tdataGrupos_etarios_por_estado_civil__masculino_[".viewFields"] = array();

$tdataGrupos_etarios_por_estado_civil__masculino_[".addFields"] = array();

$tdataGrupos_etarios_por_estado_civil__masculino_[".masterListFields"] = array();
$tdataGrupos_etarios_por_estado_civil__masculino_[".masterListFields"][] = "rangoetario";
$tdataGrupos_etarios_por_estado_civil__masculino_[".masterListFields"][] = "sector_ppd";
$tdataGrupos_etarios_por_estado_civil__masculino_[".masterListFields"][] = "mun_resid";
$tdataGrupos_etarios_por_estado_civil__masculino_[".masterListFields"][] = "depart_resid";
$tdataGrupos_etarios_por_estado_civil__masculino_[".masterListFields"][] = "estado_civil";
$tdataGrupos_etarios_por_estado_civil__masculino_[".masterListFields"][] = "COUNT(mun_resid)";

$tdataGrupos_etarios_por_estado_civil__masculino_[".inlineAddFields"] = array();

$tdataGrupos_etarios_por_estado_civil__masculino_[".editFields"] = array();

$tdataGrupos_etarios_por_estado_civil__masculino_[".inlineEditFields"] = array();

$tdataGrupos_etarios_por_estado_civil__masculino_[".updateSelectedFields"] = array();


$tdataGrupos_etarios_por_estado_civil__masculino_[".exportFields"] = array();
$tdataGrupos_etarios_por_estado_civil__masculino_[".exportFields"][] = "rangoetario";
$tdataGrupos_etarios_por_estado_civil__masculino_[".exportFields"][] = "sector_ppd";
$tdataGrupos_etarios_por_estado_civil__masculino_[".exportFields"][] = "mun_resid";
$tdataGrupos_etarios_por_estado_civil__masculino_[".exportFields"][] = "depart_resid";
$tdataGrupos_etarios_por_estado_civil__masculino_[".exportFields"][] = "estado_civil";
$tdataGrupos_etarios_por_estado_civil__masculino_[".exportFields"][] = "COUNT(mun_resid)";

$tdataGrupos_etarios_por_estado_civil__masculino_[".importFields"] = array();
$tdataGrupos_etarios_por_estado_civil__masculino_[".importFields"][] = "rangoetario";
$tdataGrupos_etarios_por_estado_civil__masculino_[".importFields"][] = "sector_ppd";
$tdataGrupos_etarios_por_estado_civil__masculino_[".importFields"][] = "mun_resid";
$tdataGrupos_etarios_por_estado_civil__masculino_[".importFields"][] = "depart_resid";
$tdataGrupos_etarios_por_estado_civil__masculino_[".importFields"][] = "estado_civil";
$tdataGrupos_etarios_por_estado_civil__masculino_[".importFields"][] = "COUNT(mun_resid)";

$tdataGrupos_etarios_por_estado_civil__masculino_[".printFields"] = array();
$tdataGrupos_etarios_por_estado_civil__masculino_[".printFields"][] = "rangoetario";
$tdataGrupos_etarios_por_estado_civil__masculino_[".printFields"][] = "sector_ppd";
$tdataGrupos_etarios_por_estado_civil__masculino_[".printFields"][] = "mun_resid";
$tdataGrupos_etarios_por_estado_civil__masculino_[".printFields"][] = "depart_resid";
$tdataGrupos_etarios_por_estado_civil__masculino_[".printFields"][] = "estado_civil";
$tdataGrupos_etarios_por_estado_civil__masculino_[".printFields"][] = "COUNT(mun_resid)";

//	rangoetario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rangoetario";
	$fdata["GoodName"] = "rangoetario";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Grupos_etarios_por_estado_civil__masculino_","rangoetario");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rangoetario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rangoetario";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataGrupos_etarios_por_estado_civil__masculino_["rangoetario"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Grupos_etarios_por_estado_civil__masculino_","sector_ppd");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataGrupos_etarios_por_estado_civil__masculino_["sector_ppd"] = $fdata;
//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Grupos_etarios_por_estado_civil__masculino_","mun_resid");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataGrupos_etarios_por_estado_civil__masculino_["mun_resid"] = $fdata;
//	depart_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "depart_resid";
	$fdata["GoodName"] = "depart_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Grupos_etarios_por_estado_civil__masculino_","depart_resid");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataGrupos_etarios_por_estado_civil__masculino_["depart_resid"] = $fdata;
//	estado_civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "estado_civil";
	$fdata["GoodName"] = "estado_civil";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Grupos_etarios_por_estado_civil__masculino_","estado_civil");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "estado_civil";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_civil";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataGrupos_etarios_por_estado_civil__masculino_["estado_civil"] = $fdata;
//	COUNT(mun_resid)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "COUNT(mun_resid)";
	$fdata["GoodName"] = "COUNT_mun_resid_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Grupos_etarios_por_estado_civil__masculino_","COUNT_mun_resid_");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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

	$fdata["ViewFormats"]["view"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataGrupos_etarios_por_estado_civil__masculino_["COUNT(mun_resid)"] = $fdata;


$tables_data["Grupos etarios por estado civil (masculino)"]=&$tdataGrupos_etarios_por_estado_civil__masculino_;
$field_labels["Grupos_etarios_por_estado_civil__masculino_"] = &$fieldLabelsGrupos_etarios_por_estado_civil__masculino_;
$fieldToolTips["Grupos_etarios_por_estado_civil__masculino_"] = &$fieldToolTipsGrupos_etarios_por_estado_civil__masculino_;
$placeHolders["Grupos_etarios_por_estado_civil__masculino_"] = &$placeHoldersGrupos_etarios_por_estado_civil__masculino_;
$page_titles["Grupos_etarios_por_estado_civil__masculino_"] = &$pageTitlesGrupos_etarios_por_estado_civil__masculino_;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Grupos etarios por estado civil (masculino)"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Grupos etarios por estado civil (masculino)"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Grupos_etarios_por_estado_civil__masculino_()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "rangoetario,  sector_ppd,  mun_resid,  depart_resid,  estado_civil,  COUNT(mun_resid) AS `COUNT(mun_resid)`";
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
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupos etarios por estado civil (masculino)"
));

$proto6["m_sql"] = "rangoetario";
$proto6["m_srcTableName"] = "Grupos etarios por estado civil (masculino)";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupos etarios por estado civil (masculino)"
));

$proto8["m_sql"] = "sector_ppd";
$proto8["m_srcTableName"] = "Grupos etarios por estado civil (masculino)";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupos etarios por estado civil (masculino)"
));

$proto10["m_sql"] = "mun_resid";
$proto10["m_srcTableName"] = "Grupos etarios por estado civil (masculino)";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupos etarios por estado civil (masculino)"
));

$proto12["m_sql"] = "depart_resid";
$proto12["m_srcTableName"] = "Grupos etarios por estado civil (masculino)";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupos etarios por estado civil (masculino)"
));

$proto14["m_sql"] = "estado_civil";
$proto14["m_srcTableName"] = "Grupos etarios por estado civil (masculino)";
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
	"m_srcTableName" => "Grupos etarios por estado civil (masculino)"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "COUNT(mun_resid)";
$proto16["m_srcTableName"] = "Grupos etarios por estado civil (masculino)";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "COUNT(mun_resid)";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "carcel";
$proto20["m_srcTableName"] = "Grupos etarios por estado civil (masculino)";
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
$proto19["m_srcTableName"] = "Grupos etarios por estado civil (masculino)";
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
	"m_strName" => "rangoetario",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupos etarios por estado civil (masculino)"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupos etarios por estado civil (masculino)"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupos etarios por estado civil (masculino)"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "depart_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupos etarios por estado civil (masculino)"
));

$proto29["m_column"]=$obj;
$obj = new SQLGroupByItem($proto29);

$proto0["m_groupby"][]=$obj;
												$proto31=array();
						$obj = new SQLField(array(
	"m_strName" => "estado_civil",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Grupos etarios por estado civil (masculino)"
));

$proto31["m_column"]=$obj;
$obj = new SQLGroupByItem($proto31);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Grupos etarios por estado civil (masculino)";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Grupos_etarios_por_estado_civil__masculino_ = createSqlQuery_Grupos_etarios_por_estado_civil__masculino_();


	
		;

						

$tdataGrupos_etarios_por_estado_civil__masculino_[".sqlquery"] = $queryData_Grupos_etarios_por_estado_civil__masculino_;

$tableEvents["Grupos etarios por estado civil (masculino)"] = new eventsBase;
$tdataGrupos_etarios_por_estado_civil__masculino_[".hasEvents"] = false;

?>