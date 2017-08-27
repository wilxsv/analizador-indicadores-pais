<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacarcel_CAMBIOS = array();
	$tdatacarcel_CAMBIOS[".truncateText"] = true;
	$tdatacarcel_CAMBIOS[".NumberOfChars"] = 80;
	$tdatacarcel_CAMBIOS[".ShortName"] = "carcel_CAMBIOS";
	$tdatacarcel_CAMBIOS[".OwnerID"] = "";
	$tdatacarcel_CAMBIOS[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelscarcel_CAMBIOS = array();
$fieldToolTipscarcel_CAMBIOS = array();
$pageTitlescarcel_CAMBIOS = array();
$placeHolderscarcel_CAMBIOS = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscarcel_CAMBIOS["Spanish"] = array();
	$fieldToolTipscarcel_CAMBIOS["Spanish"] = array();
	$placeHolderscarcel_CAMBIOS["Spanish"] = array();
	$pageTitlescarcel_CAMBIOS["Spanish"] = array();
	$fieldLabelscarcel_CAMBIOS["Spanish"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipscarcel_CAMBIOS["Spanish"]["org_delictiva"] = "";
	$placeHolderscarcel_CAMBIOS["Spanish"]["org_delictiva"] = "";
	$fieldLabelscarcel_CAMBIOS["Spanish"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipscarcel_CAMBIOS["Spanish"]["tipo_mara"] = "";
	$placeHolderscarcel_CAMBIOS["Spanish"]["tipo_mara"] = "";
	$fieldLabelscarcel_CAMBIOS["Spanish"]["org_delictiva1"] = "Org Delictiva1";
	$fieldToolTipscarcel_CAMBIOS["Spanish"]["org_delictiva1"] = "";
	$placeHolderscarcel_CAMBIOS["Spanish"]["org_delictiva1"] = "";
	$fieldLabelscarcel_CAMBIOS["Spanish"]["delitos"] = "Delitos";
	$fieldToolTipscarcel_CAMBIOS["Spanish"]["delitos"] = "";
	$placeHolderscarcel_CAMBIOS["Spanish"]["delitos"] = "";
	$fieldLabelscarcel_CAMBIOS["Spanish"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipscarcel_CAMBIOS["Spanish"]["delitoanalisis"] = "";
	$placeHolderscarcel_CAMBIOS["Spanish"]["delitoanalisis"] = "";
	if (count($fieldToolTipscarcel_CAMBIOS["Spanish"]))
		$tdatacarcel_CAMBIOS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscarcel_CAMBIOS["English"] = array();
	$fieldToolTipscarcel_CAMBIOS["English"] = array();
	$placeHolderscarcel_CAMBIOS["English"] = array();
	$pageTitlescarcel_CAMBIOS["English"] = array();
	$fieldLabelscarcel_CAMBIOS["English"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipscarcel_CAMBIOS["English"]["org_delictiva"] = "";
	$placeHolderscarcel_CAMBIOS["English"]["org_delictiva"] = "";
	$fieldLabelscarcel_CAMBIOS["English"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipscarcel_CAMBIOS["English"]["tipo_mara"] = "";
	$placeHolderscarcel_CAMBIOS["English"]["tipo_mara"] = "";
	$fieldLabelscarcel_CAMBIOS["English"]["org_delictiva1"] = "Org Delictiva1";
	$fieldToolTipscarcel_CAMBIOS["English"]["org_delictiva1"] = "";
	$placeHolderscarcel_CAMBIOS["English"]["org_delictiva1"] = "";
	$fieldLabelscarcel_CAMBIOS["English"]["delitos"] = "Delitos";
	$fieldToolTipscarcel_CAMBIOS["English"]["delitos"] = "";
	$placeHolderscarcel_CAMBIOS["English"]["delitos"] = "";
	$fieldLabelscarcel_CAMBIOS["English"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipscarcel_CAMBIOS["English"]["delitoanalisis"] = "";
	$placeHolderscarcel_CAMBIOS["English"]["delitoanalisis"] = "";
	if (count($fieldToolTipscarcel_CAMBIOS["English"]))
		$tdatacarcel_CAMBIOS[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscarcel_CAMBIOS[""] = array();
	$fieldToolTipscarcel_CAMBIOS[""] = array();
	$placeHolderscarcel_CAMBIOS[""] = array();
	$pageTitlescarcel_CAMBIOS[""] = array();
	if (count($fieldToolTipscarcel_CAMBIOS[""]))
		$tdatacarcel_CAMBIOS[".isUseToolTips"] = true;
}





$tdatacarcel_CAMBIOS[".shortTableName"] = "carcel_CAMBIOS";
$tdatacarcel_CAMBIOS[".nSecOptions"] = 0;
$tdatacarcel_CAMBIOS[".recsPerRowPrint"] = 1;
$tdatacarcel_CAMBIOS[".mainTableOwnerID"] = "";
$tdatacarcel_CAMBIOS[".moveNext"] = 1;
$tdatacarcel_CAMBIOS[".entityType"] = 1;

$tdatacarcel_CAMBIOS[".strOriginalTableName"] = "carcel";

	



$tdatacarcel_CAMBIOS[".showAddInPopup"] = false;

$tdatacarcel_CAMBIOS[".showEditInPopup"] = false;

$tdatacarcel_CAMBIOS[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacarcel_CAMBIOS[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacarcel_CAMBIOS[".fieldsForRegister"] = array();

	$tdatacarcel_CAMBIOS[".listAjax"] = true;

	$tdatacarcel_CAMBIOS[".audit"] = false;

	$tdatacarcel_CAMBIOS[".locking"] = false;



$tdatacarcel_CAMBIOS[".list"] = true;



$tdatacarcel_CAMBIOS[".reorderRecordsByHeader"] = true;
$tdatacarcel_CAMBIOS[".createSortByDropdown"] = true;
$tdatacarcel_CAMBIOS[".strSortControlSettingsJSON"] = "";




$tdatacarcel_CAMBIOS[".import"] = true;

$tdatacarcel_CAMBIOS[".exportTo"] = true;

$tdatacarcel_CAMBIOS[".printFriendly"] = true;


$tdatacarcel_CAMBIOS[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacarcel_CAMBIOS[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacarcel_CAMBIOS[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacarcel_CAMBIOS[".searchSaving"] = false;
//

$tdatacarcel_CAMBIOS[".showSearchPanel"] = true;
		$tdatacarcel_CAMBIOS[".flexibleSearch"] = true;

$tdatacarcel_CAMBIOS[".isUseAjaxSuggest"] = true;

$tdatacarcel_CAMBIOS[".rowHighlite"] = true;





$tdatacarcel_CAMBIOS[".ajaxCodeSnippetAdded"] = false;

$tdatacarcel_CAMBIOS[".buttonsAdded"] = false;

$tdatacarcel_CAMBIOS[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacarcel_CAMBIOS[".isUseTimeForSearch"] = false;





$tdatacarcel_CAMBIOS[".allSearchFields"] = array();
$tdatacarcel_CAMBIOS[".filterFields"] = array();
$tdatacarcel_CAMBIOS[".requiredSearchFields"] = array();

$tdatacarcel_CAMBIOS[".allSearchFields"][] = "org_delictiva";
	$tdatacarcel_CAMBIOS[".allSearchFields"][] = "org_delictiva1";
	$tdatacarcel_CAMBIOS[".allSearchFields"][] = "tipo_mara";
	$tdatacarcel_CAMBIOS[".allSearchFields"][] = "delitos";
	$tdatacarcel_CAMBIOS[".allSearchFields"][] = "delitoanalisis";
	

$tdatacarcel_CAMBIOS[".googleLikeFields"] = array();
$tdatacarcel_CAMBIOS[".googleLikeFields"][] = "org_delictiva";
$tdatacarcel_CAMBIOS[".googleLikeFields"][] = "org_delictiva1";
$tdatacarcel_CAMBIOS[".googleLikeFields"][] = "tipo_mara";
$tdatacarcel_CAMBIOS[".googleLikeFields"][] = "delitos";
$tdatacarcel_CAMBIOS[".googleLikeFields"][] = "delitoanalisis";


$tdatacarcel_CAMBIOS[".advSearchFields"] = array();
$tdatacarcel_CAMBIOS[".advSearchFields"][] = "org_delictiva";
$tdatacarcel_CAMBIOS[".advSearchFields"][] = "org_delictiva1";
$tdatacarcel_CAMBIOS[".advSearchFields"][] = "tipo_mara";
$tdatacarcel_CAMBIOS[".advSearchFields"][] = "delitos";
$tdatacarcel_CAMBIOS[".advSearchFields"][] = "delitoanalisis";

$tdatacarcel_CAMBIOS[".tableType"] = "list";

$tdatacarcel_CAMBIOS[".printerPageOrientation"] = 0;
$tdatacarcel_CAMBIOS[".nPrinterPageScale"] = 100;

$tdatacarcel_CAMBIOS[".nPrinterSplitRecords"] = 40;

$tdatacarcel_CAMBIOS[".nPrinterPDFSplitRecords"] = 40;



$tdatacarcel_CAMBIOS[".geocodingEnabled"] = false;





$tdatacarcel_CAMBIOS[".listGridLayout"] = 3;

$tdatacarcel_CAMBIOS[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatacarcel_CAMBIOS[".pageSize"] = 10;

$tdatacarcel_CAMBIOS[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY carcel.delitoanalisis";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacarcel_CAMBIOS[".strOrderBy"] = $tstrOrderBy;

$tdatacarcel_CAMBIOS[".orderindexes"] = array();
$tdatacarcel_CAMBIOS[".orderindexes"][] = array(5, (1 ? "ASC" : "DESC"), "carcel.delitoanalisis");

$tdatacarcel_CAMBIOS[".sqlHead"] = "SELECT carcel.org_delictiva,  tipo_mara.org_delictiva AS org_delictiva1,  tipo_mara.tipo_mara,  carcel.delitos,  carcel.delitoanalisis";
$tdatacarcel_CAMBIOS[".sqlFrom"] = "FROM carcel  INNER JOIN tipo_mara ON carcel.org_delictiva = tipo_mara.org_delictiva";
$tdatacarcel_CAMBIOS[".sqlWhereExpr"] = "";
$tdatacarcel_CAMBIOS[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacarcel_CAMBIOS[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarcel_CAMBIOS[".arrGroupsPerPage"] = $arrGPP;

$tdatacarcel_CAMBIOS[".highlightSearchResults"] = true;

$tableKeyscarcel_CAMBIOS = array();
$tdatacarcel_CAMBIOS[".Keys"] = $tableKeyscarcel_CAMBIOS;

$tdatacarcel_CAMBIOS[".listFields"] = array();
$tdatacarcel_CAMBIOS[".listFields"][] = "org_delictiva";
$tdatacarcel_CAMBIOS[".listFields"][] = "org_delictiva1";
$tdatacarcel_CAMBIOS[".listFields"][] = "tipo_mara";
$tdatacarcel_CAMBIOS[".listFields"][] = "delitos";
$tdatacarcel_CAMBIOS[".listFields"][] = "delitoanalisis";

$tdatacarcel_CAMBIOS[".hideMobileList"] = array();


$tdatacarcel_CAMBIOS[".viewFields"] = array();

$tdatacarcel_CAMBIOS[".addFields"] = array();

$tdatacarcel_CAMBIOS[".masterListFields"] = array();
$tdatacarcel_CAMBIOS[".masterListFields"][] = "org_delictiva";
$tdatacarcel_CAMBIOS[".masterListFields"][] = "org_delictiva1";
$tdatacarcel_CAMBIOS[".masterListFields"][] = "tipo_mara";
$tdatacarcel_CAMBIOS[".masterListFields"][] = "delitos";
$tdatacarcel_CAMBIOS[".masterListFields"][] = "delitoanalisis";

$tdatacarcel_CAMBIOS[".inlineAddFields"] = array();

$tdatacarcel_CAMBIOS[".editFields"] = array();

$tdatacarcel_CAMBIOS[".inlineEditFields"] = array();

$tdatacarcel_CAMBIOS[".updateSelectedFields"] = array();


$tdatacarcel_CAMBIOS[".exportFields"] = array();
$tdatacarcel_CAMBIOS[".exportFields"][] = "org_delictiva";
$tdatacarcel_CAMBIOS[".exportFields"][] = "org_delictiva1";
$tdatacarcel_CAMBIOS[".exportFields"][] = "tipo_mara";
$tdatacarcel_CAMBIOS[".exportFields"][] = "delitos";
$tdatacarcel_CAMBIOS[".exportFields"][] = "delitoanalisis";

$tdatacarcel_CAMBIOS[".importFields"] = array();
$tdatacarcel_CAMBIOS[".importFields"][] = "org_delictiva";
$tdatacarcel_CAMBIOS[".importFields"][] = "org_delictiva1";
$tdatacarcel_CAMBIOS[".importFields"][] = "tipo_mara";
$tdatacarcel_CAMBIOS[".importFields"][] = "delitos";
$tdatacarcel_CAMBIOS[".importFields"][] = "delitoanalisis";

$tdatacarcel_CAMBIOS[".printFields"] = array();
$tdatacarcel_CAMBIOS[".printFields"][] = "org_delictiva";
$tdatacarcel_CAMBIOS[".printFields"][] = "org_delictiva1";
$tdatacarcel_CAMBIOS[".printFields"][] = "tipo_mara";
$tdatacarcel_CAMBIOS[".printFields"][] = "delitos";
$tdatacarcel_CAMBIOS[".printFields"][] = "delitoanalisis";

//	org_delictiva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "org_delictiva";
	$fdata["GoodName"] = "org_delictiva";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_CAMBIOS","org_delictiva");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "org_delictiva";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carcel.org_delictiva";

	
	
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




	$tdatacarcel_CAMBIOS["org_delictiva"] = $fdata;
//	org_delictiva1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "org_delictiva1";
	$fdata["GoodName"] = "org_delictiva1";
	$fdata["ownerTable"] = "tipo_mara";
	$fdata["Label"] = GetFieldLabel("carcel_CAMBIOS","org_delictiva1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "org_delictiva";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_mara.org_delictiva";

	
	
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




	$tdatacarcel_CAMBIOS["org_delictiva1"] = $fdata;
//	tipo_mara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tipo_mara";
	$fdata["GoodName"] = "tipo_mara";
	$fdata["ownerTable"] = "tipo_mara";
	$fdata["Label"] = GetFieldLabel("carcel_CAMBIOS","tipo_mara");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tipo_mara";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_mara.tipo_mara";

	
	
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




	$tdatacarcel_CAMBIOS["tipo_mara"] = $fdata;
//	delitos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "delitos";
	$fdata["GoodName"] = "delitos";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_CAMBIOS","delitos");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "delitos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carcel.delitos";

	
	
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




	$tdatacarcel_CAMBIOS["delitos"] = $fdata;
//	delitoanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "delitoanalisis";
	$fdata["GoodName"] = "delitoanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_CAMBIOS","delitoanalisis");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "delitoanalisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carcel.delitoanalisis";

	
	
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




	$tdatacarcel_CAMBIOS["delitoanalisis"] = $fdata;


$tables_data["carcel_CAMBIOS"]=&$tdatacarcel_CAMBIOS;
$field_labels["carcel_CAMBIOS"] = &$fieldLabelscarcel_CAMBIOS;
$fieldToolTips["carcel_CAMBIOS"] = &$fieldToolTipscarcel_CAMBIOS;
$placeHolders["carcel_CAMBIOS"] = &$placeHolderscarcel_CAMBIOS;
$page_titles["carcel_CAMBIOS"] = &$pageTitlescarcel_CAMBIOS;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["carcel_CAMBIOS"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["carcel_CAMBIOS"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_carcel_CAMBIOS()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "carcel.org_delictiva,  tipo_mara.org_delictiva AS org_delictiva1,  tipo_mara.tipo_mara,  carcel.delitos,  carcel.delitoanalisis";
$proto0["m_strFrom"] = "FROM carcel  INNER JOIN tipo_mara ON carcel.org_delictiva = tipo_mara.org_delictiva";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY carcel.delitoanalisis";
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
	"m_strName" => "org_delictiva",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_CAMBIOS"
));

$proto6["m_sql"] = "carcel.org_delictiva";
$proto6["m_srcTableName"] = "carcel_CAMBIOS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "tipo_mara",
	"m_srcTableName" => "carcel_CAMBIOS"
));

$proto8["m_sql"] = "tipo_mara.org_delictiva";
$proto8["m_srcTableName"] = "carcel_CAMBIOS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "org_delictiva1";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "tipo_mara",
	"m_srcTableName" => "carcel_CAMBIOS"
));

$proto10["m_sql"] = "tipo_mara.tipo_mara";
$proto10["m_srcTableName"] = "carcel_CAMBIOS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_CAMBIOS"
));

$proto12["m_sql"] = "carcel.delitos";
$proto12["m_srcTableName"] = "carcel_CAMBIOS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_CAMBIOS"
));

$proto14["m_sql"] = "carcel.delitoanalisis";
$proto14["m_srcTableName"] = "carcel_CAMBIOS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "carcel";
$proto17["m_srcTableName"] = "carcel_CAMBIOS";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "sipe";
$proto17["m_columns"][] = "afis";
$proto17["m_columns"][] = "edad";
$proto17["m_columns"][] = "rangoetario";
$proto17["m_columns"][] = "genero";
$proto17["m_columns"][] = "fecha_nac";
$proto17["m_columns"][] = "edad1";
$proto17["m_columns"][] = "dui";
$proto17["m_columns"][] = "nivel_edu";
$proto17["m_columns"][] = "educacionanalisis";
$proto17["m_columns"][] = "profesion_oficio";
$proto17["m_columns"][] = "estado_civil";
$proto17["m_columns"][] = "ciudadania";
$proto17["m_columns"][] = "mun_nacimiento";
$proto17["m_columns"][] = "depto_nacim";
$proto17["m_columns"][] = "direccion";
$proto17["m_columns"][] = "mun_resid";
$proto17["m_columns"][] = "depart_resid";
$proto17["m_columns"][] = "delitosanalisis";
$proto17["m_columns"][] = "sj_interno";
$proto17["m_columns"][] = "fase";
$proto17["m_columns"][] = "org_delictiva";
$proto17["m_columns"][] = "tipo_mara";
$proto17["m_columns"][] = "reincidente";
$proto17["m_columns"][] = "deportado";
$proto17["m_columns"][] = "direccion1";
$proto17["m_columns"][] = "sector";
$proto17["m_columns"][] = "celda";
$proto17["m_columns"][] = "fecha_ing__sp";
$proto17["m_columns"][] = "libro";
$proto17["m_columns"][] = "fecha_ing__cp";
$proto17["m_columns"][] = "total_delitos";
$proto17["m_columns"][] = "delitos";
$proto17["m_columns"][] = "delitoanalisis";
$proto17["m_columns"][] = "sector_ppd";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "carcel";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "carcel_CAMBIOS";
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
												$proto20=array();
$proto20["m_link"] = "SQLL_INNERJOIN";
			$proto21=array();
$proto21["m_strName"] = "tipo_mara";
$proto21["m_srcTableName"] = "carcel_CAMBIOS";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "org_delictiva";
$proto21["m_columns"][] = "tipo_mara";
$proto21["m_columns"][] = "ID_1";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "INNER JOIN tipo_mara ON carcel.org_delictiva = tipo_mara.org_delictiva";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "carcel_CAMBIOS";
$proto22=array();
$proto22["m_sql"] = "carcel.org_delictiva = tipo_mara.org_delictiva";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_CAMBIOS"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= tipo_mara.org_delictiva";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_CAMBIOS"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "tipo_mara",
	"m_srcTableName" => "carcel_CAMBIOS"
));

$proto26["m_column"]=$obj;
$obj = new SQLGroupByItem($proto26);

$proto0["m_groupby"][]=$obj;
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "tipo_mara",
	"m_srcTableName" => "carcel_CAMBIOS"
));

$proto28["m_column"]=$obj;
$obj = new SQLGroupByItem($proto28);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel_CAMBIOS"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 1;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="carcel_CAMBIOS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carcel_CAMBIOS = createSqlQuery_carcel_CAMBIOS();


	
		;

					

$tdatacarcel_CAMBIOS[".sqlquery"] = $queryData_carcel_CAMBIOS;

$tableEvents["carcel_CAMBIOS"] = new eventsBase;
$tdatacarcel_CAMBIOS[".hasEvents"] = false;

?>