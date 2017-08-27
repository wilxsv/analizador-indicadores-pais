<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSector_PPD = array();
	$tdataSector_PPD[".truncateText"] = true;
	$tdataSector_PPD[".NumberOfChars"] = 80;
	$tdataSector_PPD[".ShortName"] = "Sector_PPD";
	$tdataSector_PPD[".OwnerID"] = "";
	$tdataSector_PPD[".OriginalTable"] = "sectorppdf";

//	field labels
$fieldLabelsSector_PPD = array();
$fieldToolTipsSector_PPD = array();
$pageTitlesSector_PPD = array();
$placeHoldersSector_PPD = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsSector_PPD["Spanish"] = array();
	$fieldToolTipsSector_PPD["Spanish"] = array();
	$placeHoldersSector_PPD["Spanish"] = array();
	$pageTitlesSector_PPD["Spanish"] = array();
	$fieldLabelsSector_PPD["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsSector_PPD["Spanish"]["departamento"] = "";
	$placeHoldersSector_PPD["Spanish"]["departamento"] = "";
	$fieldLabelsSector_PPD["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsSector_PPD["Spanish"]["municipio"] = "";
	$placeHoldersSector_PPD["Spanish"]["municipio"] = "";
	$fieldLabelsSector_PPD["Spanish"]["area"] = "Area";
	$fieldToolTipsSector_PPD["Spanish"]["area"] = "";
	$placeHoldersSector_PPD["Spanish"]["area"] = "";
	$fieldLabelsSector_PPD["Spanish"]["sect_estan"] = "Sect Estan";
	$fieldToolTipsSector_PPD["Spanish"]["sect_estan"] = "";
	$placeHoldersSector_PPD["Spanish"]["sect_estan"] = "";
	$fieldLabelsSector_PPD["Spanish"]["COUNT_sect_ppd_"] = "COUNT(sect Ppd)";
	$fieldToolTipsSector_PPD["Spanish"]["COUNT_sect_ppd_"] = "";
	$placeHoldersSector_PPD["Spanish"]["COUNT_sect_ppd_"] = "";
	if (count($fieldToolTipsSector_PPD["Spanish"]))
		$tdataSector_PPD[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSector_PPD["English"] = array();
	$fieldToolTipsSector_PPD["English"] = array();
	$placeHoldersSector_PPD["English"] = array();
	$pageTitlesSector_PPD["English"] = array();
	$fieldLabelsSector_PPD["English"]["departamento"] = "Departamento";
	$fieldToolTipsSector_PPD["English"]["departamento"] = "";
	$placeHoldersSector_PPD["English"]["departamento"] = "";
	$fieldLabelsSector_PPD["English"]["municipio"] = "Municipio";
	$fieldToolTipsSector_PPD["English"]["municipio"] = "";
	$placeHoldersSector_PPD["English"]["municipio"] = "";
	$fieldLabelsSector_PPD["English"]["area"] = "Area";
	$fieldToolTipsSector_PPD["English"]["area"] = "";
	$placeHoldersSector_PPD["English"]["area"] = "";
	$fieldLabelsSector_PPD["English"]["sect_estan"] = "Sect Estan";
	$fieldToolTipsSector_PPD["English"]["sect_estan"] = "";
	$placeHoldersSector_PPD["English"]["sect_estan"] = "";
	$fieldLabelsSector_PPD["English"]["COUNT_sect_ppd_"] = "COUNT(sect Ppd)";
	$fieldToolTipsSector_PPD["English"]["COUNT_sect_ppd_"] = "";
	$placeHoldersSector_PPD["English"]["COUNT_sect_ppd_"] = "";
	if (count($fieldToolTipsSector_PPD["English"]))
		$tdataSector_PPD[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSector_PPD[""] = array();
	$fieldToolTipsSector_PPD[""] = array();
	$placeHoldersSector_PPD[""] = array();
	$pageTitlesSector_PPD[""] = array();
	if (count($fieldToolTipsSector_PPD[""]))
		$tdataSector_PPD[".isUseToolTips"] = true;
}





$tdataSector_PPD[".shortTableName"] = "Sector_PPD";
$tdataSector_PPD[".nSecOptions"] = 0;
$tdataSector_PPD[".recsPerRowPrint"] = 1;
$tdataSector_PPD[".mainTableOwnerID"] = "";
$tdataSector_PPD[".moveNext"] = 1;
$tdataSector_PPD[".entityType"] = 2;

$tdataSector_PPD[".strOriginalTableName"] = "sectorppdf";

	



$tdataSector_PPD[".showAddInPopup"] = false;

$tdataSector_PPD[".showEditInPopup"] = false;

$tdataSector_PPD[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSector_PPD[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSector_PPD[".fieldsForRegister"] = array();

$tdataSector_PPD[".listAjax"] = false;

	$tdataSector_PPD[".audit"] = false;

	$tdataSector_PPD[".locking"] = false;



$tdataSector_PPD[".list"] = true;



$tdataSector_PPD[".reorderRecordsByHeader"] = true;





$tdataSector_PPD[".exportTo"] = true;

$tdataSector_PPD[".printFriendly"] = true;


$tdataSector_PPD[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataSector_PPD[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataSector_PPD[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataSector_PPD[".searchSaving"] = false;
//

$tdataSector_PPD[".showSearchPanel"] = true;
		$tdataSector_PPD[".flexibleSearch"] = true;

$tdataSector_PPD[".isUseAjaxSuggest"] = true;






$tdataSector_PPD[".ajaxCodeSnippetAdded"] = false;

$tdataSector_PPD[".buttonsAdded"] = false;

$tdataSector_PPD[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSector_PPD[".isUseTimeForSearch"] = false;





$tdataSector_PPD[".allSearchFields"] = array();
$tdataSector_PPD[".filterFields"] = array();
$tdataSector_PPD[".requiredSearchFields"] = array();

$tdataSector_PPD[".allSearchFields"][] = "departamento";
	$tdataSector_PPD[".allSearchFields"][] = "municipio";
	$tdataSector_PPD[".allSearchFields"][] = "area";
	$tdataSector_PPD[".allSearchFields"][] = "sect_estan";
	$tdataSector_PPD[".allSearchFields"][] = "COUNT(sect_ppd)";
	

$tdataSector_PPD[".googleLikeFields"] = array();
$tdataSector_PPD[".googleLikeFields"][] = "departamento";
$tdataSector_PPD[".googleLikeFields"][] = "municipio";
$tdataSector_PPD[".googleLikeFields"][] = "area";
$tdataSector_PPD[".googleLikeFields"][] = "sect_estan";
$tdataSector_PPD[".googleLikeFields"][] = "COUNT(sect_ppd)";


$tdataSector_PPD[".advSearchFields"] = array();
$tdataSector_PPD[".advSearchFields"][] = "departamento";
$tdataSector_PPD[".advSearchFields"][] = "municipio";
$tdataSector_PPD[".advSearchFields"][] = "area";
$tdataSector_PPD[".advSearchFields"][] = "sect_estan";
$tdataSector_PPD[".advSearchFields"][] = "COUNT(sect_ppd)";

$tdataSector_PPD[".tableType"] = "report";

$tdataSector_PPD[".printerPageOrientation"] = 0;
$tdataSector_PPD[".nPrinterPageScale"] = 100;

$tdataSector_PPD[".nPrinterSplitRecords"] = 40;

$tdataSector_PPD[".nPrinterPDFSplitRecords"] = 40;



$tdataSector_PPD[".geocodingEnabled"] = false;

//report settings
$tdataSector_PPD[".printReportLayout"] = 6;

$tdataSector_PPD[".reportPrintPartitionType"] = 1;
$tdataSector_PPD[".reportPrintGroupsPerPage"] = 40;
$tdataSector_PPD[".reportPrintPDFGroupsPerPage"] = 40;
$tdataSector_PPD[".lowGroup"] = 0;



$tdataSector_PPD[".pageSize"] = 10;






$tdataSector_PPD[".repShowDet"] = true;

$tdataSector_PPD[".reportLayout"] = 6;

//end of report settings




$tdataSector_PPD[".listGridLayout"] = 3;

$tdataSector_PPD[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSector_PPD[".strOrderBy"] = $tstrOrderBy;

$tdataSector_PPD[".orderindexes"] = array();

$tdataSector_PPD[".sqlHead"] = "SELECT departamento,  municipio,  area,  sect_estan,  COUNT(sect_ppd) AS `COUNT(sect_ppd)`";
$tdataSector_PPD[".sqlFrom"] = "FROM sectorppdf";
$tdataSector_PPD[".sqlWhereExpr"] = "";
$tdataSector_PPD[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSector_PPD[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSector_PPD[".arrGroupsPerPage"] = $arrGPP;

$tdataSector_PPD[".highlightSearchResults"] = true;

$tableKeysSector_PPD = array();
$tdataSector_PPD[".Keys"] = $tableKeysSector_PPD;

$tdataSector_PPD[".listFields"] = array();
$tdataSector_PPD[".listFields"][] = "departamento";
$tdataSector_PPD[".listFields"][] = "municipio";
$tdataSector_PPD[".listFields"][] = "area";
$tdataSector_PPD[".listFields"][] = "sect_estan";
$tdataSector_PPD[".listFields"][] = "COUNT(sect_ppd)";

$tdataSector_PPD[".hideMobileList"] = array();


$tdataSector_PPD[".viewFields"] = array();
$tdataSector_PPD[".viewFields"][] = "departamento";
$tdataSector_PPD[".viewFields"][] = "municipio";
$tdataSector_PPD[".viewFields"][] = "area";
$tdataSector_PPD[".viewFields"][] = "sect_estan";
$tdataSector_PPD[".viewFields"][] = "COUNT(sect_ppd)";

$tdataSector_PPD[".addFields"] = array();
$tdataSector_PPD[".addFields"][] = "departamento";
$tdataSector_PPD[".addFields"][] = "municipio";
$tdataSector_PPD[".addFields"][] = "area";
$tdataSector_PPD[".addFields"][] = "sect_estan";

$tdataSector_PPD[".masterListFields"] = array();
$tdataSector_PPD[".masterListFields"][] = "departamento";
$tdataSector_PPD[".masterListFields"][] = "municipio";
$tdataSector_PPD[".masterListFields"][] = "area";
$tdataSector_PPD[".masterListFields"][] = "sect_estan";
$tdataSector_PPD[".masterListFields"][] = "COUNT(sect_ppd)";

$tdataSector_PPD[".inlineAddFields"] = array();
$tdataSector_PPD[".inlineAddFields"][] = "departamento";
$tdataSector_PPD[".inlineAddFields"][] = "municipio";
$tdataSector_PPD[".inlineAddFields"][] = "area";
$tdataSector_PPD[".inlineAddFields"][] = "sect_estan";

$tdataSector_PPD[".editFields"] = array();
$tdataSector_PPD[".editFields"][] = "departamento";
$tdataSector_PPD[".editFields"][] = "municipio";
$tdataSector_PPD[".editFields"][] = "area";
$tdataSector_PPD[".editFields"][] = "sect_estan";

$tdataSector_PPD[".inlineEditFields"] = array();
$tdataSector_PPD[".inlineEditFields"][] = "departamento";
$tdataSector_PPD[".inlineEditFields"][] = "municipio";
$tdataSector_PPD[".inlineEditFields"][] = "area";
$tdataSector_PPD[".inlineEditFields"][] = "sect_estan";

$tdataSector_PPD[".updateSelectedFields"] = array();
$tdataSector_PPD[".updateSelectedFields"][] = "departamento";
$tdataSector_PPD[".updateSelectedFields"][] = "municipio";
$tdataSector_PPD[".updateSelectedFields"][] = "area";
$tdataSector_PPD[".updateSelectedFields"][] = "sect_estan";


$tdataSector_PPD[".exportFields"] = array();
$tdataSector_PPD[".exportFields"][] = "departamento";
$tdataSector_PPD[".exportFields"][] = "municipio";
$tdataSector_PPD[".exportFields"][] = "area";
$tdataSector_PPD[".exportFields"][] = "sect_estan";
$tdataSector_PPD[".exportFields"][] = "COUNT(sect_ppd)";

$tdataSector_PPD[".importFields"] = array();
$tdataSector_PPD[".importFields"][] = "departamento";
$tdataSector_PPD[".importFields"][] = "municipio";
$tdataSector_PPD[".importFields"][] = "area";
$tdataSector_PPD[".importFields"][] = "sect_estan";
$tdataSector_PPD[".importFields"][] = "COUNT(sect_ppd)";

$tdataSector_PPD[".printFields"] = array();
$tdataSector_PPD[".printFields"][] = "departamento";
$tdataSector_PPD[".printFields"][] = "municipio";
$tdataSector_PPD[".printFields"][] = "area";
$tdataSector_PPD[".printFields"][] = "sect_estan";
$tdataSector_PPD[".printFields"][] = "COUNT(sect_ppd)";

//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "sectorppdf";
	$fdata["Label"] = GetFieldLabel("Sector_PPD","departamento");
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

		$fdata["strField"] = "departamento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "departamento";

	
	
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




	$tdataSector_PPD["departamento"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "sectorppdf";
	$fdata["Label"] = GetFieldLabel("Sector_PPD","municipio");
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

		$fdata["strField"] = "municipio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "municipio";

	
	
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




	$tdataSector_PPD["municipio"] = $fdata;
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "sectorppdf";
	$fdata["Label"] = GetFieldLabel("Sector_PPD","area");
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSector_PPD["area"] = $fdata;
//	sect_estan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sect_estan";
	$fdata["GoodName"] = "sect_estan";
	$fdata["ownerTable"] = "sectorppdf";
	$fdata["Label"] = GetFieldLabel("Sector_PPD","sect_estan");
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

		$fdata["strField"] = "sect_estan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sect_estan";

	
	
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




	$tdataSector_PPD["sect_estan"] = $fdata;
//	COUNT(sect_ppd)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "COUNT(sect_ppd)";
	$fdata["GoodName"] = "COUNT_sect_ppd_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Sector_PPD","COUNT_sect_ppd_");
	$fdata["FieldType"] = 3;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(sect_ppd)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(sect_ppd)";

	
	
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




	$tdataSector_PPD["COUNT(sect_ppd)"] = $fdata;


$tables_data["Sector PPD"]=&$tdataSector_PPD;
$field_labels["Sector_PPD"] = &$fieldLabelsSector_PPD;
$fieldToolTips["Sector_PPD"] = &$fieldToolTipsSector_PPD;
$placeHolders["Sector_PPD"] = &$placeHoldersSector_PPD;
$page_titles["Sector_PPD"] = &$pageTitlesSector_PPD;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Sector PPD"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Sector PPD"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Sector_PPD()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "departamento,  municipio,  area,  sect_estan,  COUNT(sect_ppd) AS `COUNT(sect_ppd)`";
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
	"m_srcTableName" => "Sector PPD"
));

$proto6["m_sql"] = "departamento";
$proto6["m_srcTableName"] = "Sector PPD";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "sectorppdf",
	"m_srcTableName" => "Sector PPD"
));

$proto8["m_sql"] = "municipio";
$proto8["m_srcTableName"] = "Sector PPD";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "sectorppdf",
	"m_srcTableName" => "Sector PPD"
));

$proto10["m_sql"] = "area";
$proto10["m_srcTableName"] = "Sector PPD";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sect_estan",
	"m_strTable" => "sectorppdf",
	"m_srcTableName" => "Sector PPD"
));

$proto12["m_sql"] = "sect_estan";
$proto12["m_srcTableName"] = "Sector PPD";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$proto15=array();
$proto15["m_functiontype"] = "SQLF_COUNT";
$proto15["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "sect_ppd",
	"m_strTable" => "sectorppdf",
	"m_srcTableName" => "Sector PPD"
));

$proto15["m_arguments"][]=$obj;
$proto15["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto15);

$proto14["m_sql"] = "COUNT(sect_ppd)";
$proto14["m_srcTableName"] = "Sector PPD";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "COUNT(sect_ppd)";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "sectorppdf";
$proto18["m_srcTableName"] = "Sector PPD";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "departamento";
$proto18["m_columns"][] = "municipio";
$proto18["m_columns"][] = "area";
$proto18["m_columns"][] = "sect_estan";
$proto18["m_columns"][] = "sect_ppd";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "sectorppdf";
$proto17["m_alias"] = "";
$proto17["m_srcTableName"] = "Sector PPD";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto21=array();
						$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "sectorppdf",
	"m_srcTableName" => "Sector PPD"
));

$proto21["m_column"]=$obj;
$obj = new SQLGroupByItem($proto21);

$proto0["m_groupby"][]=$obj;
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "sectorppdf",
	"m_srcTableName" => "Sector PPD"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "sectorppdf",
	"m_srcTableName" => "Sector PPD"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "sect_estan",
	"m_strTable" => "sectorppdf",
	"m_srcTableName" => "Sector PPD"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Sector PPD";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Sector_PPD = createSqlQuery_Sector_PPD();


	
		;

					

$tdataSector_PPD[".sqlquery"] = $queryData_Sector_PPD;

$tableEvents["Sector PPD"] = new eventsBase;
$tdataSector_PPD[".hasEvents"] = false;

?>