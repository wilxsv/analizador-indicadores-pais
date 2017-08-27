<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasectorppdf = array();
	$tdatasectorppdf[".truncateText"] = true;
	$tdatasectorppdf[".NumberOfChars"] = 80;
	$tdatasectorppdf[".ShortName"] = "sectorppdf";
	$tdatasectorppdf[".OwnerID"] = "";
	$tdatasectorppdf[".OriginalTable"] = "sectorppdf";

//	field labels
$fieldLabelssectorppdf = array();
$fieldToolTipssectorppdf = array();
$pageTitlessectorppdf = array();
$placeHolderssectorppdf = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssectorppdf["Spanish"] = array();
	$fieldToolTipssectorppdf["Spanish"] = array();
	$placeHolderssectorppdf["Spanish"] = array();
	$pageTitlessectorppdf["Spanish"] = array();
	$fieldLabelssectorppdf["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipssectorppdf["Spanish"]["departamento"] = "";
	$placeHolderssectorppdf["Spanish"]["departamento"] = "";
	$fieldLabelssectorppdf["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipssectorppdf["Spanish"]["municipio"] = "";
	$placeHolderssectorppdf["Spanish"]["municipio"] = "";
	$fieldLabelssectorppdf["Spanish"]["area"] = "Area";
	$fieldToolTipssectorppdf["Spanish"]["area"] = "";
	$placeHolderssectorppdf["Spanish"]["area"] = "";
	$fieldLabelssectorppdf["Spanish"]["sect_estan"] = "Sect Estan";
	$fieldToolTipssectorppdf["Spanish"]["sect_estan"] = "";
	$placeHolderssectorppdf["Spanish"]["sect_estan"] = "";
	$fieldLabelssectorppdf["Spanish"]["sect_ppd"] = "Sect Ppd";
	$fieldToolTipssectorppdf["Spanish"]["sect_ppd"] = "";
	$placeHolderssectorppdf["Spanish"]["sect_ppd"] = "";
	if (count($fieldToolTipssectorppdf["Spanish"]))
		$tdatasectorppdf[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssectorppdf["English"] = array();
	$fieldToolTipssectorppdf["English"] = array();
	$placeHolderssectorppdf["English"] = array();
	$pageTitlessectorppdf["English"] = array();
	$fieldLabelssectorppdf["English"]["departamento"] = "Departamento";
	$fieldToolTipssectorppdf["English"]["departamento"] = "";
	$placeHolderssectorppdf["English"]["departamento"] = "";
	$fieldLabelssectorppdf["English"]["municipio"] = "Municipio";
	$fieldToolTipssectorppdf["English"]["municipio"] = "";
	$placeHolderssectorppdf["English"]["municipio"] = "";
	$fieldLabelssectorppdf["English"]["area"] = "Area";
	$fieldToolTipssectorppdf["English"]["area"] = "";
	$placeHolderssectorppdf["English"]["area"] = "";
	$fieldLabelssectorppdf["English"]["sect_estan"] = "Sect Estan";
	$fieldToolTipssectorppdf["English"]["sect_estan"] = "";
	$placeHolderssectorppdf["English"]["sect_estan"] = "";
	$fieldLabelssectorppdf["English"]["sect_ppd"] = "Sect Ppd";
	$fieldToolTipssectorppdf["English"]["sect_ppd"] = "";
	$placeHolderssectorppdf["English"]["sect_ppd"] = "";
	if (count($fieldToolTipssectorppdf["English"]))
		$tdatasectorppdf[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssectorppdf[""] = array();
	$fieldToolTipssectorppdf[""] = array();
	$placeHolderssectorppdf[""] = array();
	$pageTitlessectorppdf[""] = array();
	if (count($fieldToolTipssectorppdf[""]))
		$tdatasectorppdf[".isUseToolTips"] = true;
}





$tdatasectorppdf[".shortTableName"] = "sectorppdf";
$tdatasectorppdf[".nSecOptions"] = 0;
$tdatasectorppdf[".recsPerRowPrint"] = 1;
$tdatasectorppdf[".mainTableOwnerID"] = "";
$tdatasectorppdf[".moveNext"] = 1;
$tdatasectorppdf[".entityType"] = 0;

$tdatasectorppdf[".strOriginalTableName"] = "sectorppdf";

	



$tdatasectorppdf[".showAddInPopup"] = false;

$tdatasectorppdf[".showEditInPopup"] = false;

$tdatasectorppdf[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasectorppdf[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasectorppdf[".fieldsForRegister"] = array();

	$tdatasectorppdf[".listAjax"] = true;

	$tdatasectorppdf[".audit"] = false;

	$tdatasectorppdf[".locking"] = false;



$tdatasectorppdf[".list"] = true;



$tdatasectorppdf[".reorderRecordsByHeader"] = true;
$tdatasectorppdf[".createSortByDropdown"] = true;
$tdatasectorppdf[".strSortControlSettingsJSON"] = "";




$tdatasectorppdf[".import"] = true;

$tdatasectorppdf[".exportTo"] = true;

$tdatasectorppdf[".printFriendly"] = true;


$tdatasectorppdf[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasectorppdf[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasectorppdf[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasectorppdf[".searchSaving"] = false;
//

$tdatasectorppdf[".showSearchPanel"] = true;
		$tdatasectorppdf[".flexibleSearch"] = true;

$tdatasectorppdf[".isUseAjaxSuggest"] = true;

$tdatasectorppdf[".rowHighlite"] = true;





$tdatasectorppdf[".ajaxCodeSnippetAdded"] = false;

$tdatasectorppdf[".buttonsAdded"] = false;

$tdatasectorppdf[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasectorppdf[".isUseTimeForSearch"] = false;



$tdatasectorppdf[".badgeColor"] = "E8926F";


$tdatasectorppdf[".allSearchFields"] = array();
$tdatasectorppdf[".filterFields"] = array();
$tdatasectorppdf[".requiredSearchFields"] = array();

$tdatasectorppdf[".allSearchFields"][] = "departamento";
	$tdatasectorppdf[".allSearchFields"][] = "municipio";
	$tdatasectorppdf[".allSearchFields"][] = "area";
	$tdatasectorppdf[".allSearchFields"][] = "sect_estan";
	$tdatasectorppdf[".allSearchFields"][] = "sect_ppd";
	

$tdatasectorppdf[".googleLikeFields"] = array();
$tdatasectorppdf[".googleLikeFields"][] = "departamento";
$tdatasectorppdf[".googleLikeFields"][] = "municipio";
$tdatasectorppdf[".googleLikeFields"][] = "area";
$tdatasectorppdf[".googleLikeFields"][] = "sect_estan";
$tdatasectorppdf[".googleLikeFields"][] = "sect_ppd";


$tdatasectorppdf[".advSearchFields"] = array();
$tdatasectorppdf[".advSearchFields"][] = "departamento";
$tdatasectorppdf[".advSearchFields"][] = "municipio";
$tdatasectorppdf[".advSearchFields"][] = "area";
$tdatasectorppdf[".advSearchFields"][] = "sect_estan";
$tdatasectorppdf[".advSearchFields"][] = "sect_ppd";

$tdatasectorppdf[".tableType"] = "list";

$tdatasectorppdf[".printerPageOrientation"] = 0;
$tdatasectorppdf[".nPrinterPageScale"] = 100;

$tdatasectorppdf[".nPrinterSplitRecords"] = 40;

$tdatasectorppdf[".nPrinterPDFSplitRecords"] = 40;



$tdatasectorppdf[".geocodingEnabled"] = false;





$tdatasectorppdf[".listGridLayout"] = 3;

$tdatasectorppdf[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatasectorppdf[".pageSize"] = 10;

$tdatasectorppdf[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasectorppdf[".strOrderBy"] = $tstrOrderBy;

$tdatasectorppdf[".orderindexes"] = array();

$tdatasectorppdf[".sqlHead"] = "SELECT departamento,  	municipio,  	area,  	sect_estan,  	sect_ppd";
$tdatasectorppdf[".sqlFrom"] = "FROM sectorppdf";
$tdatasectorppdf[".sqlWhereExpr"] = "";
$tdatasectorppdf[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasectorppdf[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasectorppdf[".arrGroupsPerPage"] = $arrGPP;

$tdatasectorppdf[".highlightSearchResults"] = true;

$tableKeyssectorppdf = array();
$tdatasectorppdf[".Keys"] = $tableKeyssectorppdf;

$tdatasectorppdf[".listFields"] = array();
$tdatasectorppdf[".listFields"][] = "departamento";
$tdatasectorppdf[".listFields"][] = "municipio";
$tdatasectorppdf[".listFields"][] = "area";
$tdatasectorppdf[".listFields"][] = "sect_estan";
$tdatasectorppdf[".listFields"][] = "sect_ppd";

$tdatasectorppdf[".hideMobileList"] = array();


$tdatasectorppdf[".viewFields"] = array();
$tdatasectorppdf[".viewFields"][] = "departamento";
$tdatasectorppdf[".viewFields"][] = "municipio";
$tdatasectorppdf[".viewFields"][] = "area";
$tdatasectorppdf[".viewFields"][] = "sect_estan";
$tdatasectorppdf[".viewFields"][] = "sect_ppd";

$tdatasectorppdf[".addFields"] = array();
$tdatasectorppdf[".addFields"][] = "departamento";
$tdatasectorppdf[".addFields"][] = "municipio";
$tdatasectorppdf[".addFields"][] = "area";
$tdatasectorppdf[".addFields"][] = "sect_estan";
$tdatasectorppdf[".addFields"][] = "sect_ppd";

$tdatasectorppdf[".masterListFields"] = array();
$tdatasectorppdf[".masterListFields"][] = "departamento";
$tdatasectorppdf[".masterListFields"][] = "municipio";
$tdatasectorppdf[".masterListFields"][] = "area";
$tdatasectorppdf[".masterListFields"][] = "sect_estan";
$tdatasectorppdf[".masterListFields"][] = "sect_ppd";

$tdatasectorppdf[".inlineAddFields"] = array();
$tdatasectorppdf[".inlineAddFields"][] = "departamento";
$tdatasectorppdf[".inlineAddFields"][] = "municipio";
$tdatasectorppdf[".inlineAddFields"][] = "area";
$tdatasectorppdf[".inlineAddFields"][] = "sect_estan";
$tdatasectorppdf[".inlineAddFields"][] = "sect_ppd";

$tdatasectorppdf[".editFields"] = array();
$tdatasectorppdf[".editFields"][] = "departamento";
$tdatasectorppdf[".editFields"][] = "municipio";
$tdatasectorppdf[".editFields"][] = "area";
$tdatasectorppdf[".editFields"][] = "sect_estan";
$tdatasectorppdf[".editFields"][] = "sect_ppd";

$tdatasectorppdf[".inlineEditFields"] = array();
$tdatasectorppdf[".inlineEditFields"][] = "departamento";
$tdatasectorppdf[".inlineEditFields"][] = "municipio";
$tdatasectorppdf[".inlineEditFields"][] = "area";
$tdatasectorppdf[".inlineEditFields"][] = "sect_estan";
$tdatasectorppdf[".inlineEditFields"][] = "sect_ppd";

$tdatasectorppdf[".updateSelectedFields"] = array();
$tdatasectorppdf[".updateSelectedFields"][] = "departamento";
$tdatasectorppdf[".updateSelectedFields"][] = "municipio";
$tdatasectorppdf[".updateSelectedFields"][] = "area";
$tdatasectorppdf[".updateSelectedFields"][] = "sect_estan";
$tdatasectorppdf[".updateSelectedFields"][] = "sect_ppd";


$tdatasectorppdf[".exportFields"] = array();
$tdatasectorppdf[".exportFields"][] = "departamento";
$tdatasectorppdf[".exportFields"][] = "municipio";
$tdatasectorppdf[".exportFields"][] = "area";
$tdatasectorppdf[".exportFields"][] = "sect_estan";
$tdatasectorppdf[".exportFields"][] = "sect_ppd";

$tdatasectorppdf[".importFields"] = array();
$tdatasectorppdf[".importFields"][] = "departamento";
$tdatasectorppdf[".importFields"][] = "municipio";
$tdatasectorppdf[".importFields"][] = "area";
$tdatasectorppdf[".importFields"][] = "sect_estan";
$tdatasectorppdf[".importFields"][] = "sect_ppd";

$tdatasectorppdf[".printFields"] = array();
$tdatasectorppdf[".printFields"][] = "departamento";
$tdatasectorppdf[".printFields"][] = "municipio";
$tdatasectorppdf[".printFields"][] = "area";
$tdatasectorppdf[".printFields"][] = "sect_estan";
$tdatasectorppdf[".printFields"][] = "sect_ppd";

//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "sectorppdf";
	$fdata["Label"] = GetFieldLabel("sectorppdf","departamento");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "departamento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "departamento";

	
	
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




	$tdatasectorppdf["departamento"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "sectorppdf";
	$fdata["Label"] = GetFieldLabel("sectorppdf","municipio");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "municipio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "municipio";

	
	
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




	$tdatasectorppdf["municipio"] = $fdata;
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "sectorppdf";
	$fdata["Label"] = GetFieldLabel("sectorppdf","area");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "area";

	
	
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




	$tdatasectorppdf["area"] = $fdata;
//	sect_estan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sect_estan";
	$fdata["GoodName"] = "sect_estan";
	$fdata["ownerTable"] = "sectorppdf";
	$fdata["Label"] = GetFieldLabel("sectorppdf","sect_estan");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "sect_estan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sect_estan";

	
	
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




	$tdatasectorppdf["sect_estan"] = $fdata;
//	sect_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sect_ppd";
	$fdata["GoodName"] = "sect_ppd";
	$fdata["ownerTable"] = "sectorppdf";
	$fdata["Label"] = GetFieldLabel("sectorppdf","sect_ppd");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "sect_ppd";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sect_ppd";

	
	
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




	$tdatasectorppdf["sect_ppd"] = $fdata;


$tables_data["sectorppdf"]=&$tdatasectorppdf;
$field_labels["sectorppdf"] = &$fieldLabelssectorppdf;
$fieldToolTips["sectorppdf"] = &$fieldToolTipssectorppdf;
$placeHolders["sectorppdf"] = &$placeHolderssectorppdf;
$page_titles["sectorppdf"] = &$pageTitlessectorppdf;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sectorppdf"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["sectorppdf"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_sectorppdf()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "departamento,  	municipio,  	area,  	sect_estan,  	sect_ppd";
$proto0["m_strFrom"] = "FROM sectorppdf";
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
	"m_strName" => "departamento",
	"m_strTable" => "sectorppdf",
	"m_srcTableName" => "sectorppdf"
));

$proto6["m_sql"] = "departamento";
$proto6["m_srcTableName"] = "sectorppdf";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "sectorppdf",
	"m_srcTableName" => "sectorppdf"
));

$proto8["m_sql"] = "municipio";
$proto8["m_srcTableName"] = "sectorppdf";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "sectorppdf",
	"m_srcTableName" => "sectorppdf"
));

$proto10["m_sql"] = "area";
$proto10["m_srcTableName"] = "sectorppdf";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sect_estan",
	"m_strTable" => "sectorppdf",
	"m_srcTableName" => "sectorppdf"
));

$proto12["m_sql"] = "sect_estan";
$proto12["m_srcTableName"] = "sectorppdf";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sect_ppd",
	"m_strTable" => "sectorppdf",
	"m_srcTableName" => "sectorppdf"
));

$proto14["m_sql"] = "sect_ppd";
$proto14["m_srcTableName"] = "sectorppdf";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "sectorppdf";
$proto17["m_srcTableName"] = "sectorppdf";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "departamento";
$proto17["m_columns"][] = "municipio";
$proto17["m_columns"][] = "area";
$proto17["m_columns"][] = "sect_estan";
$proto17["m_columns"][] = "sect_ppd";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "sectorppdf";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "sectorppdf";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="sectorppdf";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sectorppdf = createSqlQuery_sectorppdf();


	
		;

					

$tdatasectorppdf[".sqlquery"] = $queryData_sectorppdf;

$tableEvents["sectorppdf"] = new eventsBase;
$tdatasectorppdf[".hasEvents"] = false;

?>