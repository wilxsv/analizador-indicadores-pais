<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamined21 = array();
	$tdatamined21[".truncateText"] = true;
	$tdatamined21[".NumberOfChars"] = 80;
	$tdatamined21[".ShortName"] = "mined21";
	$tdatamined21[".OwnerID"] = "";
	$tdatamined21[".OriginalTable"] = "mined";

//	field labels
$fieldLabelsmined21 = array();
$fieldToolTipsmined21 = array();
$pageTitlesmined21 = array();
$placeHoldersmined21 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmined21["Spanish"] = array();
	$fieldToolTipsmined21["Spanish"] = array();
	$placeHoldersmined21["Spanish"] = array();
	$pageTitlesmined21["Spanish"] = array();
	$fieldLabelsmined21["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsmined21["Spanish"]["departamento"] = "";
	$placeHoldersmined21["Spanish"]["departamento"] = "";
	$fieldLabelsmined21["Spanish"]["mun"] = "Mun";
	$fieldToolTipsmined21["Spanish"]["mun"] = "";
	$placeHoldersmined21["Spanish"]["mun"] = "";
	$fieldLabelsmined21["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsmined21["Spanish"]["municipio"] = "";
	$placeHoldersmined21["Spanish"]["municipio"] = "";
	$fieldLabelsmined21["Spanish"]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipsmined21["Spanish"]["max_matric2016"] = "";
	$placeHoldersmined21["Spanish"]["max_matric2016"] = "";
	if (count($fieldToolTipsmined21["Spanish"]))
		$tdatamined21[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmined21["English"] = array();
	$fieldToolTipsmined21["English"] = array();
	$placeHoldersmined21["English"] = array();
	$pageTitlesmined21["English"] = array();
	$fieldLabelsmined21["English"]["departamento"] = "Departamento";
	$fieldToolTipsmined21["English"]["departamento"] = "";
	$placeHoldersmined21["English"]["departamento"] = "";
	$fieldLabelsmined21["English"]["mun"] = "Mun";
	$fieldToolTipsmined21["English"]["mun"] = "";
	$placeHoldersmined21["English"]["mun"] = "";
	$fieldLabelsmined21["English"]["municipio"] = "Municipio";
	$fieldToolTipsmined21["English"]["municipio"] = "";
	$placeHoldersmined21["English"]["municipio"] = "";
	$fieldLabelsmined21["English"]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipsmined21["English"]["max_matric2016"] = "";
	$placeHoldersmined21["English"]["max_matric2016"] = "";
	if (count($fieldToolTipsmined21["English"]))
		$tdatamined21[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmined21[""] = array();
	$fieldToolTipsmined21[""] = array();
	$placeHoldersmined21[""] = array();
	$pageTitlesmined21[""] = array();
	$fieldLabelsmined21[""]["departamento"] = "Departamento";
	$fieldToolTipsmined21[""]["departamento"] = "";
	$placeHoldersmined21[""]["departamento"] = "";
	$fieldLabelsmined21[""]["mun"] = "Mun";
	$fieldToolTipsmined21[""]["mun"] = "";
	$placeHoldersmined21[""]["mun"] = "";
	$fieldLabelsmined21[""]["municipio"] = "Municipio";
	$fieldToolTipsmined21[""]["municipio"] = "";
	$placeHoldersmined21[""]["municipio"] = "";
	$fieldLabelsmined21[""]["max_matric2016"] = "Max Matric2016";
	$fieldToolTipsmined21[""]["max_matric2016"] = "";
	$placeHoldersmined21[""]["max_matric2016"] = "";
	if (count($fieldToolTipsmined21[""]))
		$tdatamined21[".isUseToolTips"] = true;
}


	$tdatamined21[".NCSearch"] = true;



$tdatamined21[".shortTableName"] = "mined21";
$tdatamined21[".nSecOptions"] = 0;
$tdatamined21[".recsPerRowPrint"] = 1;
$tdatamined21[".mainTableOwnerID"] = "";
$tdatamined21[".moveNext"] = 1;
$tdatamined21[".entityType"] = 1;

$tdatamined21[".strOriginalTableName"] = "mined";

	



$tdatamined21[".showAddInPopup"] = false;

$tdatamined21[".showEditInPopup"] = false;

$tdatamined21[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamined21[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamined21[".fieldsForRegister"] = array();

	$tdatamined21[".listAjax"] = true;

	$tdatamined21[".audit"] = false;

	$tdatamined21[".locking"] = false;



$tdatamined21[".list"] = true;



$tdatamined21[".reorderRecordsByHeader"] = true;
$tdatamined21[".createSortByDropdown"] = true;
$tdatamined21[".strSortControlSettingsJSON"] = "[]";




$tdatamined21[".import"] = true;

$tdatamined21[".exportTo"] = true;

$tdatamined21[".printFriendly"] = true;


$tdatamined21[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamined21[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamined21[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamined21[".searchSaving"] = false;
//

$tdatamined21[".showSearchPanel"] = true;
		$tdatamined21[".flexibleSearch"] = true;

$tdatamined21[".isUseAjaxSuggest"] = true;

$tdatamined21[".rowHighlite"] = true;





$tdatamined21[".ajaxCodeSnippetAdded"] = false;

$tdatamined21[".buttonsAdded"] = false;

$tdatamined21[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamined21[".isUseTimeForSearch"] = false;



$tdatamined21[".badgeColor"] = "00C2C5";


$tdatamined21[".allSearchFields"] = array();
$tdatamined21[".filterFields"] = array();
$tdatamined21[".requiredSearchFields"] = array();

$tdatamined21[".allSearchFields"][] = "departamento";
	$tdatamined21[".allSearchFields"][] = "mun";
	$tdatamined21[".allSearchFields"][] = "municipio";
	$tdatamined21[".allSearchFields"][] = "max_matric2016";
	

$tdatamined21[".googleLikeFields"] = array();
$tdatamined21[".googleLikeFields"][] = "departamento";
$tdatamined21[".googleLikeFields"][] = "mun";
$tdatamined21[".googleLikeFields"][] = "municipio";
$tdatamined21[".googleLikeFields"][] = "max_matric2016";


$tdatamined21[".advSearchFields"] = array();
$tdatamined21[".advSearchFields"][] = "departamento";
$tdatamined21[".advSearchFields"][] = "mun";
$tdatamined21[".advSearchFields"][] = "municipio";
$tdatamined21[".advSearchFields"][] = "max_matric2016";

$tdatamined21[".tableType"] = "list";

$tdatamined21[".printerPageOrientation"] = 0;
$tdatamined21[".nPrinterPageScale"] = 100;

$tdatamined21[".nPrinterSplitRecords"] = 40;

$tdatamined21[".nPrinterPDFSplitRecords"] = 40;



$tdatamined21[".geocodingEnabled"] = true;
$tdatamined21[".geocodingData"] = array();
$tdatamined21[".geocodingData"]["latField"] = "y";
$tdatamined21[".geocodingData"]["lngField"] = "x";
$tdatamined21[".geocodingData"]["addressFields"] = array();
	$tdatamined21[".geocodingData"]["addressFields"][] = "departamento";
	$tdatamined21[".geocodingData"]["addressFields"][] = "dep_mun";





$tdatamined21[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamined21[".pageSize"] = 20;

$tdatamined21[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamined21[".strOrderBy"] = $tstrOrderBy;

$tdatamined21[".orderindexes"] = array();

$tdatamined21[".sqlHead"] = "SELECT departamento,  mun,  municipio,  max_matric2016";
$tdatamined21[".sqlFrom"] = "FROM mined";
$tdatamined21[".sqlWhereExpr"] = "";
$tdatamined21[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamined21[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamined21[".arrGroupsPerPage"] = $arrGPP;

$tdatamined21[".highlightSearchResults"] = true;

$tableKeysmined21 = array();
$tdatamined21[".Keys"] = $tableKeysmined21;

$tdatamined21[".listFields"] = array();
$tdatamined21[".listFields"][] = "departamento";
$tdatamined21[".listFields"][] = "mun";
$tdatamined21[".listFields"][] = "municipio";
$tdatamined21[".listFields"][] = "max_matric2016";

$tdatamined21[".hideMobileList"] = array();


$tdatamined21[".viewFields"] = array();
$tdatamined21[".viewFields"][] = "departamento";
$tdatamined21[".viewFields"][] = "mun";
$tdatamined21[".viewFields"][] = "municipio";
$tdatamined21[".viewFields"][] = "max_matric2016";

$tdatamined21[".addFields"] = array();
$tdatamined21[".addFields"][] = "departamento";
$tdatamined21[".addFields"][] = "mun";
$tdatamined21[".addFields"][] = "municipio";
$tdatamined21[".addFields"][] = "max_matric2016";

$tdatamined21[".masterListFields"] = array();
$tdatamined21[".masterListFields"][] = "departamento";
$tdatamined21[".masterListFields"][] = "mun";
$tdatamined21[".masterListFields"][] = "municipio";
$tdatamined21[".masterListFields"][] = "max_matric2016";

$tdatamined21[".inlineAddFields"] = array();
$tdatamined21[".inlineAddFields"][] = "departamento";
$tdatamined21[".inlineAddFields"][] = "mun";
$tdatamined21[".inlineAddFields"][] = "municipio";
$tdatamined21[".inlineAddFields"][] = "max_matric2016";

$tdatamined21[".editFields"] = array();
$tdatamined21[".editFields"][] = "departamento";
$tdatamined21[".editFields"][] = "mun";
$tdatamined21[".editFields"][] = "municipio";
$tdatamined21[".editFields"][] = "max_matric2016";

$tdatamined21[".inlineEditFields"] = array();
$tdatamined21[".inlineEditFields"][] = "departamento";
$tdatamined21[".inlineEditFields"][] = "mun";
$tdatamined21[".inlineEditFields"][] = "municipio";
$tdatamined21[".inlineEditFields"][] = "max_matric2016";

$tdatamined21[".updateSelectedFields"] = array();
$tdatamined21[".updateSelectedFields"][] = "departamento";
$tdatamined21[".updateSelectedFields"][] = "mun";
$tdatamined21[".updateSelectedFields"][] = "municipio";
$tdatamined21[".updateSelectedFields"][] = "max_matric2016";


$tdatamined21[".exportFields"] = array();
$tdatamined21[".exportFields"][] = "departamento";
$tdatamined21[".exportFields"][] = "mun";
$tdatamined21[".exportFields"][] = "municipio";
$tdatamined21[".exportFields"][] = "max_matric2016";

$tdatamined21[".importFields"] = array();
$tdatamined21[".importFields"][] = "departamento";
$tdatamined21[".importFields"][] = "mun";
$tdatamined21[".importFields"][] = "municipio";
$tdatamined21[".importFields"][] = "max_matric2016";

$tdatamined21[".printFields"] = array();
$tdatamined21[".printFields"][] = "departamento";
$tdatamined21[".printFields"][] = "mun";
$tdatamined21[".printFields"][] = "municipio";
$tdatamined21[".printFields"][] = "max_matric2016";

//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined21","departamento");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined21["departamento"] = $fdata;
//	mun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "mun";
	$fdata["GoodName"] = "mun";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined21","mun");
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

		$fdata["strField"] = "mun";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mun";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined21["mun"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined21","municipio");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined21["municipio"] = $fdata;
//	max_matric2016
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "max_matric2016";
	$fdata["GoodName"] = "max_matric2016";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined21","max_matric2016");
	$fdata["FieldType"] = 5;

	
	
	
			
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

		$fdata["strField"] = "max_matric2016";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "max_matric2016";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined21["max_matric2016"] = $fdata;


$tables_data["mined21"]=&$tdatamined21;
$field_labels["mined21"] = &$fieldLabelsmined21;
$fieldToolTips["mined21"] = &$fieldToolTipsmined21;
$placeHolders["mined21"] = &$placeHoldersmined21;
$page_titles["mined21"] = &$pageTitlesmined21;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mined21"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mined21"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mined21()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "departamento,  mun,  municipio,  max_matric2016";
$proto0["m_strFrom"] = "FROM mined";
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
	"m_strTable" => "mined",
	"m_srcTableName" => "mined21"
));

$proto6["m_sql"] = "departamento";
$proto6["m_srcTableName"] = "mined21";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "mun",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined21"
));

$proto8["m_sql"] = "mun";
$proto8["m_srcTableName"] = "mined21";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined21"
));

$proto10["m_sql"] = "municipio";
$proto10["m_srcTableName"] = "mined21";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "max_matric2016",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined21"
));

$proto12["m_sql"] = "max_matric2016";
$proto12["m_srcTableName"] = "mined21";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "mined";
$proto15["m_srcTableName"] = "mined21";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "idderespuesta";
$proto15["m_columns"][] = "codigo";
$proto15["m_columns"][] = "depto";
$proto15["m_columns"][] = "departamento";
$proto15["m_columns"][] = "mun";
$proto15["m_columns"][] = "municipio";
$proto15["m_columns"][] = "nombre_c_e";
$proto15["m_columns"][] = "x";
$proto15["m_columns"][] = "y";
$proto15["m_columns"][] = "sector_ppd";
$proto15["m_columns"][] = "matricula_inicial";
$proto15["m_columns"][] = "matricula_final";
$proto15["m_columns"][] = "maras";
$proto15["m_columns"][] = "robos";
$proto15["m_columns"][] = "hurtos";
$proto15["m_columns"][] = "drogas";
$proto15["m_columns"][] = "violaciones";
$proto15["m_columns"][] = "pab";
$proto15["m_columns"][] = "paf";
$proto15["m_columns"][] = "escasos_recursos";
$proto15["m_columns"][] = "incorpo_actividades_prod";
$proto15["m_columns"][] = "lejania_ce";
$proto15["m_columns"][] = "violencia_pandilleril";
$proto15["m_columns"][] = "embarazo";
$proto15["m_columns"][] = "acoso";
$proto15["m_columns"][] = "violacion_sexual";
$proto15["m_columns"][] = "cambio_domicilio";
$proto15["m_columns"][] = "migracion";
$proto15["m_columns"][] = "bajo_rendimiento";
$proto15["m_columns"][] = "enfermedad";
$proto15["m_columns"][] = "prostitucion";
$proto15["m_columns"][] = "dep_mun";
$proto15["m_columns"][] = "max_matric2016";
$proto15["m_columns"][] = "mrf2016";
$proto15["m_columns"][] = "pab_af";
$proto15["m_columns"][] = "r_h";
$proto15["m_columns"][] = "ipce_naive";
$proto15["m_columns"][] = "ipce_0_1";
$proto15["m_columns"][] = "aÑo";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "mined";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "mined21";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined21"
));

$proto18["m_column"]=$obj;
$obj = new SQLGroupByItem($proto18);

$proto0["m_groupby"][]=$obj;
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "mun",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined21"
));

$proto20["m_column"]=$obj;
$obj = new SQLGroupByItem($proto20);

$proto0["m_groupby"][]=$obj;
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined21"
));

$proto22["m_column"]=$obj;
$obj = new SQLGroupByItem($proto22);

$proto0["m_groupby"][]=$obj;
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "max_matric2016",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined21"
));

$proto24["m_column"]=$obj;
$obj = new SQLGroupByItem($proto24);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mined21";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mined21 = createSqlQuery_mined21();


	
		;

				

$tdatamined21[".sqlquery"] = $queryData_mined21;

$tableEvents["mined21"] = new eventsBase;
$tdatamined21[".hasEvents"] = false;

?>