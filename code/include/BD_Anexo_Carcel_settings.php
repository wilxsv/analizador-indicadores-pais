<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBD_ANEXO_CARCEL = array();
	$tdataBD_ANEXO_CARCEL[".truncateText"] = true;
	$tdataBD_ANEXO_CARCEL[".NumberOfChars"] = 80;
	$tdataBD_ANEXO_CARCEL[".ShortName"] = "BD_ANEXO_CARCEL";
	$tdataBD_ANEXO_CARCEL[".OwnerID"] = "";
	$tdataBD_ANEXO_CARCEL[".OriginalTable"] = "anexar_carcel";

//	field labels
$fieldLabelsBD_ANEXO_CARCEL = array();
$fieldToolTipsBD_ANEXO_CARCEL = array();
$pageTitlesBD_ANEXO_CARCEL = array();
$placeHoldersBD_ANEXO_CARCEL = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsBD_ANEXO_CARCEL["Spanish"] = array();
	$fieldToolTipsBD_ANEXO_CARCEL["Spanish"] = array();
	$placeHoldersBD_ANEXO_CARCEL["Spanish"] = array();
	$pageTitlesBD_ANEXO_CARCEL["Spanish"] = array();
	$fieldLabelsBD_ANEXO_CARCEL["Spanish"]["sipe"] = "Sipe";
	$fieldToolTipsBD_ANEXO_CARCEL["Spanish"]["sipe"] = "";
	$placeHoldersBD_ANEXO_CARCEL["Spanish"]["sipe"] = "";
	$fieldLabelsBD_ANEXO_CARCEL["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsBD_ANEXO_CARCEL["Spanish"]["sector_ppd"] = "";
	$placeHoldersBD_ANEXO_CARCEL["Spanish"]["sector_ppd"] = "";
	$fieldLabelsBD_ANEXO_CARCEL["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsBD_ANEXO_CARCEL["Spanish"]["municipio"] = "";
	$placeHoldersBD_ANEXO_CARCEL["Spanish"]["municipio"] = "";
	if (count($fieldToolTipsBD_ANEXO_CARCEL["Spanish"]))
		$tdataBD_ANEXO_CARCEL[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBD_ANEXO_CARCEL["English"] = array();
	$fieldToolTipsBD_ANEXO_CARCEL["English"] = array();
	$placeHoldersBD_ANEXO_CARCEL["English"] = array();
	$pageTitlesBD_ANEXO_CARCEL["English"] = array();
	$fieldLabelsBD_ANEXO_CARCEL["English"]["sipe"] = "Sipe";
	$fieldToolTipsBD_ANEXO_CARCEL["English"]["sipe"] = "";
	$placeHoldersBD_ANEXO_CARCEL["English"]["sipe"] = "";
	$fieldLabelsBD_ANEXO_CARCEL["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsBD_ANEXO_CARCEL["English"]["sector_ppd"] = "";
	$placeHoldersBD_ANEXO_CARCEL["English"]["sector_ppd"] = "";
	$fieldLabelsBD_ANEXO_CARCEL["English"]["municipio"] = "Municipio";
	$fieldToolTipsBD_ANEXO_CARCEL["English"]["municipio"] = "";
	$placeHoldersBD_ANEXO_CARCEL["English"]["municipio"] = "";
	if (count($fieldToolTipsBD_ANEXO_CARCEL["English"]))
		$tdataBD_ANEXO_CARCEL[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBD_ANEXO_CARCEL[""] = array();
	$fieldToolTipsBD_ANEXO_CARCEL[""] = array();
	$placeHoldersBD_ANEXO_CARCEL[""] = array();
	$pageTitlesBD_ANEXO_CARCEL[""] = array();
	$fieldLabelsBD_ANEXO_CARCEL[""]["sipe"] = "Sipe";
	$fieldToolTipsBD_ANEXO_CARCEL[""]["sipe"] = "";
	$placeHoldersBD_ANEXO_CARCEL[""]["sipe"] = "";
	$fieldLabelsBD_ANEXO_CARCEL[""]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsBD_ANEXO_CARCEL[""]["sector_ppd"] = "";
	$placeHoldersBD_ANEXO_CARCEL[""]["sector_ppd"] = "";
	$fieldLabelsBD_ANEXO_CARCEL[""]["municipio"] = "Municipio";
	$fieldToolTipsBD_ANEXO_CARCEL[""]["municipio"] = "";
	$placeHoldersBD_ANEXO_CARCEL[""]["municipio"] = "";
	if (count($fieldToolTipsBD_ANEXO_CARCEL[""]))
		$tdataBD_ANEXO_CARCEL[".isUseToolTips"] = true;
}


	$tdataBD_ANEXO_CARCEL[".NCSearch"] = true;



$tdataBD_ANEXO_CARCEL[".shortTableName"] = "BD_ANEXO_CARCEL";
$tdataBD_ANEXO_CARCEL[".nSecOptions"] = 0;
$tdataBD_ANEXO_CARCEL[".recsPerRowPrint"] = 1;
$tdataBD_ANEXO_CARCEL[".mainTableOwnerID"] = "";
$tdataBD_ANEXO_CARCEL[".moveNext"] = 1;
$tdataBD_ANEXO_CARCEL[".entityType"] = 1;

$tdataBD_ANEXO_CARCEL[".strOriginalTableName"] = "anexar_carcel";

	



$tdataBD_ANEXO_CARCEL[".showAddInPopup"] = false;

$tdataBD_ANEXO_CARCEL[".showEditInPopup"] = false;

$tdataBD_ANEXO_CARCEL[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBD_ANEXO_CARCEL[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBD_ANEXO_CARCEL[".fieldsForRegister"] = array();

$tdataBD_ANEXO_CARCEL[".listAjax"] = false;

	$tdataBD_ANEXO_CARCEL[".audit"] = false;

	$tdataBD_ANEXO_CARCEL[".locking"] = false;



$tdataBD_ANEXO_CARCEL[".list"] = true;



$tdataBD_ANEXO_CARCEL[".reorderRecordsByHeader"] = true;




$tdataBD_ANEXO_CARCEL[".import"] = true;

$tdataBD_ANEXO_CARCEL[".exportTo"] = true;

$tdataBD_ANEXO_CARCEL[".printFriendly"] = true;


$tdataBD_ANEXO_CARCEL[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataBD_ANEXO_CARCEL[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataBD_ANEXO_CARCEL[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataBD_ANEXO_CARCEL[".searchSaving"] = false;
//

$tdataBD_ANEXO_CARCEL[".showSearchPanel"] = true;
		$tdataBD_ANEXO_CARCEL[".flexibleSearch"] = true;

$tdataBD_ANEXO_CARCEL[".isUseAjaxSuggest"] = true;

$tdataBD_ANEXO_CARCEL[".rowHighlite"] = true;





$tdataBD_ANEXO_CARCEL[".ajaxCodeSnippetAdded"] = false;

$tdataBD_ANEXO_CARCEL[".buttonsAdded"] = false;

$tdataBD_ANEXO_CARCEL[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBD_ANEXO_CARCEL[".isUseTimeForSearch"] = false;



$tdataBD_ANEXO_CARCEL[".badgeColor"] = "9ACD32";


$tdataBD_ANEXO_CARCEL[".allSearchFields"] = array();
$tdataBD_ANEXO_CARCEL[".filterFields"] = array();
$tdataBD_ANEXO_CARCEL[".requiredSearchFields"] = array();

$tdataBD_ANEXO_CARCEL[".allSearchFields"][] = "sipe";
	$tdataBD_ANEXO_CARCEL[".allSearchFields"][] = "sector_ppd";
	$tdataBD_ANEXO_CARCEL[".allSearchFields"][] = "municipio";
	

$tdataBD_ANEXO_CARCEL[".googleLikeFields"] = array();
$tdataBD_ANEXO_CARCEL[".googleLikeFields"][] = "sipe";
$tdataBD_ANEXO_CARCEL[".googleLikeFields"][] = "sector_ppd";
$tdataBD_ANEXO_CARCEL[".googleLikeFields"][] = "municipio";


$tdataBD_ANEXO_CARCEL[".advSearchFields"] = array();
$tdataBD_ANEXO_CARCEL[".advSearchFields"][] = "sipe";
$tdataBD_ANEXO_CARCEL[".advSearchFields"][] = "sector_ppd";
$tdataBD_ANEXO_CARCEL[".advSearchFields"][] = "municipio";

$tdataBD_ANEXO_CARCEL[".tableType"] = "list";

$tdataBD_ANEXO_CARCEL[".printerPageOrientation"] = 0;
$tdataBD_ANEXO_CARCEL[".nPrinterPageScale"] = 100;

$tdataBD_ANEXO_CARCEL[".nPrinterSplitRecords"] = 40;

$tdataBD_ANEXO_CARCEL[".nPrinterPDFSplitRecords"] = 40;



$tdataBD_ANEXO_CARCEL[".geocodingEnabled"] = false;





$tdataBD_ANEXO_CARCEL[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataBD_ANEXO_CARCEL[".pageSize"] = 20;

$tdataBD_ANEXO_CARCEL[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBD_ANEXO_CARCEL[".strOrderBy"] = $tstrOrderBy;

$tdataBD_ANEXO_CARCEL[".orderindexes"] = array();

$tdataBD_ANEXO_CARCEL[".sqlHead"] = "SELECT sipe,  	sector_ppd,  	municipio";
$tdataBD_ANEXO_CARCEL[".sqlFrom"] = "FROM anexar_carcel";
$tdataBD_ANEXO_CARCEL[".sqlWhereExpr"] = "";
$tdataBD_ANEXO_CARCEL[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBD_ANEXO_CARCEL[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBD_ANEXO_CARCEL[".arrGroupsPerPage"] = $arrGPP;

$tdataBD_ANEXO_CARCEL[".highlightSearchResults"] = true;

$tableKeysBD_ANEXO_CARCEL = array();
$tdataBD_ANEXO_CARCEL[".Keys"] = $tableKeysBD_ANEXO_CARCEL;

$tdataBD_ANEXO_CARCEL[".listFields"] = array();
$tdataBD_ANEXO_CARCEL[".listFields"][] = "sipe";
$tdataBD_ANEXO_CARCEL[".listFields"][] = "sector_ppd";
$tdataBD_ANEXO_CARCEL[".listFields"][] = "municipio";

$tdataBD_ANEXO_CARCEL[".hideMobileList"] = array();


$tdataBD_ANEXO_CARCEL[".viewFields"] = array();
$tdataBD_ANEXO_CARCEL[".viewFields"][] = "sipe";
$tdataBD_ANEXO_CARCEL[".viewFields"][] = "sector_ppd";
$tdataBD_ANEXO_CARCEL[".viewFields"][] = "municipio";

$tdataBD_ANEXO_CARCEL[".addFields"] = array();
$tdataBD_ANEXO_CARCEL[".addFields"][] = "sipe";
$tdataBD_ANEXO_CARCEL[".addFields"][] = "sector_ppd";
$tdataBD_ANEXO_CARCEL[".addFields"][] = "municipio";

$tdataBD_ANEXO_CARCEL[".masterListFields"] = array();
$tdataBD_ANEXO_CARCEL[".masterListFields"][] = "sipe";
$tdataBD_ANEXO_CARCEL[".masterListFields"][] = "sector_ppd";
$tdataBD_ANEXO_CARCEL[".masterListFields"][] = "municipio";

$tdataBD_ANEXO_CARCEL[".inlineAddFields"] = array();
$tdataBD_ANEXO_CARCEL[".inlineAddFields"][] = "sipe";
$tdataBD_ANEXO_CARCEL[".inlineAddFields"][] = "sector_ppd";
$tdataBD_ANEXO_CARCEL[".inlineAddFields"][] = "municipio";

$tdataBD_ANEXO_CARCEL[".editFields"] = array();
$tdataBD_ANEXO_CARCEL[".editFields"][] = "sipe";
$tdataBD_ANEXO_CARCEL[".editFields"][] = "sector_ppd";
$tdataBD_ANEXO_CARCEL[".editFields"][] = "municipio";

$tdataBD_ANEXO_CARCEL[".inlineEditFields"] = array();
$tdataBD_ANEXO_CARCEL[".inlineEditFields"][] = "sipe";
$tdataBD_ANEXO_CARCEL[".inlineEditFields"][] = "sector_ppd";
$tdataBD_ANEXO_CARCEL[".inlineEditFields"][] = "municipio";

$tdataBD_ANEXO_CARCEL[".updateSelectedFields"] = array();
$tdataBD_ANEXO_CARCEL[".updateSelectedFields"][] = "sipe";
$tdataBD_ANEXO_CARCEL[".updateSelectedFields"][] = "sector_ppd";
$tdataBD_ANEXO_CARCEL[".updateSelectedFields"][] = "municipio";


$tdataBD_ANEXO_CARCEL[".exportFields"] = array();
$tdataBD_ANEXO_CARCEL[".exportFields"][] = "sipe";
$tdataBD_ANEXO_CARCEL[".exportFields"][] = "sector_ppd";
$tdataBD_ANEXO_CARCEL[".exportFields"][] = "municipio";

$tdataBD_ANEXO_CARCEL[".importFields"] = array();
$tdataBD_ANEXO_CARCEL[".importFields"][] = "sipe";
$tdataBD_ANEXO_CARCEL[".importFields"][] = "sector_ppd";
$tdataBD_ANEXO_CARCEL[".importFields"][] = "municipio";

$tdataBD_ANEXO_CARCEL[".printFields"] = array();
$tdataBD_ANEXO_CARCEL[".printFields"][] = "sipe";
$tdataBD_ANEXO_CARCEL[".printFields"][] = "sector_ppd";
$tdataBD_ANEXO_CARCEL[".printFields"][] = "municipio";

//	sipe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sipe";
	$fdata["GoodName"] = "sipe";
	$fdata["ownerTable"] = "anexar_carcel";
	$fdata["Label"] = GetFieldLabel("BD_ANEXO_CARCEL","sipe");
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

		$fdata["strField"] = "sipe";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sipe";

	
	
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




	$tdataBD_ANEXO_CARCEL["sipe"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "anexar_carcel";
	$fdata["Label"] = GetFieldLabel("BD_ANEXO_CARCEL","sector_ppd");
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




	$tdataBD_ANEXO_CARCEL["sector_ppd"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "anexar_carcel";
	$fdata["Label"] = GetFieldLabel("BD_ANEXO_CARCEL","municipio");
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




	$tdataBD_ANEXO_CARCEL["municipio"] = $fdata;


$tables_data["BD ANEXO CARCEL"]=&$tdataBD_ANEXO_CARCEL;
$field_labels["BD_ANEXO_CARCEL"] = &$fieldLabelsBD_ANEXO_CARCEL;
$fieldToolTips["BD_ANEXO_CARCEL"] = &$fieldToolTipsBD_ANEXO_CARCEL;
$placeHolders["BD_ANEXO_CARCEL"] = &$placeHoldersBD_ANEXO_CARCEL;
$page_titles["BD_ANEXO_CARCEL"] = &$pageTitlesBD_ANEXO_CARCEL;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BD ANEXO CARCEL"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["BD ANEXO CARCEL"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BD_ANEXO_CARCEL()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sipe,  	sector_ppd,  	municipio";
$proto0["m_strFrom"] = "FROM anexar_carcel";
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
	"m_strName" => "sipe",
	"m_strTable" => "anexar_carcel",
	"m_srcTableName" => "BD ANEXO CARCEL"
));

$proto6["m_sql"] = "sipe";
$proto6["m_srcTableName"] = "BD ANEXO CARCEL";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "anexar_carcel",
	"m_srcTableName" => "BD ANEXO CARCEL"
));

$proto8["m_sql"] = "sector_ppd";
$proto8["m_srcTableName"] = "BD ANEXO CARCEL";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "anexar_carcel",
	"m_srcTableName" => "BD ANEXO CARCEL"
));

$proto10["m_sql"] = "municipio";
$proto10["m_srcTableName"] = "BD ANEXO CARCEL";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "anexar_carcel";
$proto13["m_srcTableName"] = "BD ANEXO CARCEL";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "sipe";
$proto13["m_columns"][] = "sector_ppd";
$proto13["m_columns"][] = "municipio";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "anexar_carcel";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "BD ANEXO CARCEL";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="BD ANEXO CARCEL";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BD_ANEXO_CARCEL = createSqlQuery_BD_ANEXO_CARCEL();


	
		;

			

$tdataBD_ANEXO_CARCEL[".sqlquery"] = $queryData_BD_ANEXO_CARCEL;

$tableEvents["BD ANEXO CARCEL"] = new eventsBase;
$tdataBD_ANEXO_CARCEL[".hasEvents"] = false;

?>