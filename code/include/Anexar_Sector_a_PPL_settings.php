<?php
require_once(getabspath("classes/cipherer.php"));




$tdataAnexar_Sector_a_PPL = array();
	$tdataAnexar_Sector_a_PPL[".truncateText"] = true;
	$tdataAnexar_Sector_a_PPL[".NumberOfChars"] = 80;
	$tdataAnexar_Sector_a_PPL[".ShortName"] = "Anexar_Sector_a_PPL";
	$tdataAnexar_Sector_a_PPL[".OwnerID"] = "";
	$tdataAnexar_Sector_a_PPL[".OriginalTable"] = "anexar_carcel";

//	field labels
$fieldLabelsAnexar_Sector_a_PPL = array();
$fieldToolTipsAnexar_Sector_a_PPL = array();
$pageTitlesAnexar_Sector_a_PPL = array();
$placeHoldersAnexar_Sector_a_PPL = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsAnexar_Sector_a_PPL["Spanish"] = array();
	$fieldToolTipsAnexar_Sector_a_PPL["Spanish"] = array();
	$placeHoldersAnexar_Sector_a_PPL["Spanish"] = array();
	$pageTitlesAnexar_Sector_a_PPL["Spanish"] = array();
	$fieldLabelsAnexar_Sector_a_PPL["Spanish"]["sipe"] = "Sipe";
	$fieldToolTipsAnexar_Sector_a_PPL["Spanish"]["sipe"] = "";
	$placeHoldersAnexar_Sector_a_PPL["Spanish"]["sipe"] = "";
	$fieldLabelsAnexar_Sector_a_PPL["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsAnexar_Sector_a_PPL["Spanish"]["sector_ppd"] = "";
	$placeHoldersAnexar_Sector_a_PPL["Spanish"]["sector_ppd"] = "";
	$fieldLabelsAnexar_Sector_a_PPL["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsAnexar_Sector_a_PPL["Spanish"]["municipio"] = "";
	$placeHoldersAnexar_Sector_a_PPL["Spanish"]["municipio"] = "";
	if (count($fieldToolTipsAnexar_Sector_a_PPL["Spanish"]))
		$tdataAnexar_Sector_a_PPL[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAnexar_Sector_a_PPL["English"] = array();
	$fieldToolTipsAnexar_Sector_a_PPL["English"] = array();
	$placeHoldersAnexar_Sector_a_PPL["English"] = array();
	$pageTitlesAnexar_Sector_a_PPL["English"] = array();
	$fieldLabelsAnexar_Sector_a_PPL["English"]["sipe"] = "Sipe";
	$fieldToolTipsAnexar_Sector_a_PPL["English"]["sipe"] = "";
	$placeHoldersAnexar_Sector_a_PPL["English"]["sipe"] = "";
	$fieldLabelsAnexar_Sector_a_PPL["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsAnexar_Sector_a_PPL["English"]["sector_ppd"] = "";
	$placeHoldersAnexar_Sector_a_PPL["English"]["sector_ppd"] = "";
	$fieldLabelsAnexar_Sector_a_PPL["English"]["municipio"] = "Municipio";
	$fieldToolTipsAnexar_Sector_a_PPL["English"]["municipio"] = "";
	$placeHoldersAnexar_Sector_a_PPL["English"]["municipio"] = "";
	if (count($fieldToolTipsAnexar_Sector_a_PPL["English"]))
		$tdataAnexar_Sector_a_PPL[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsAnexar_Sector_a_PPL[""] = array();
	$fieldToolTipsAnexar_Sector_a_PPL[""] = array();
	$placeHoldersAnexar_Sector_a_PPL[""] = array();
	$pageTitlesAnexar_Sector_a_PPL[""] = array();
	$fieldLabelsAnexar_Sector_a_PPL[""]["sipe"] = "Sipe";
	$fieldToolTipsAnexar_Sector_a_PPL[""]["sipe"] = "";
	$placeHoldersAnexar_Sector_a_PPL[""]["sipe"] = "";
	$fieldLabelsAnexar_Sector_a_PPL[""]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsAnexar_Sector_a_PPL[""]["sector_ppd"] = "";
	$placeHoldersAnexar_Sector_a_PPL[""]["sector_ppd"] = "";
	$fieldLabelsAnexar_Sector_a_PPL[""]["municipio"] = "Municipio";
	$fieldToolTipsAnexar_Sector_a_PPL[""]["municipio"] = "";
	$placeHoldersAnexar_Sector_a_PPL[""]["municipio"] = "";
	if (count($fieldToolTipsAnexar_Sector_a_PPL[""]))
		$tdataAnexar_Sector_a_PPL[".isUseToolTips"] = true;
}


	$tdataAnexar_Sector_a_PPL[".NCSearch"] = true;



$tdataAnexar_Sector_a_PPL[".shortTableName"] = "Anexar_Sector_a_PPL";
$tdataAnexar_Sector_a_PPL[".nSecOptions"] = 0;
$tdataAnexar_Sector_a_PPL[".recsPerRowPrint"] = 1;
$tdataAnexar_Sector_a_PPL[".mainTableOwnerID"] = "";
$tdataAnexar_Sector_a_PPL[".moveNext"] = 1;
$tdataAnexar_Sector_a_PPL[".entityType"] = 1;

$tdataAnexar_Sector_a_PPL[".strOriginalTableName"] = "anexar_carcel";

	



$tdataAnexar_Sector_a_PPL[".showAddInPopup"] = false;

$tdataAnexar_Sector_a_PPL[".showEditInPopup"] = false;

$tdataAnexar_Sector_a_PPL[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAnexar_Sector_a_PPL[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataAnexar_Sector_a_PPL[".fieldsForRegister"] = array();

$tdataAnexar_Sector_a_PPL[".listAjax"] = false;

	$tdataAnexar_Sector_a_PPL[".audit"] = false;

	$tdataAnexar_Sector_a_PPL[".locking"] = false;



$tdataAnexar_Sector_a_PPL[".list"] = true;



$tdataAnexar_Sector_a_PPL[".reorderRecordsByHeader"] = true;




$tdataAnexar_Sector_a_PPL[".import"] = true;

$tdataAnexar_Sector_a_PPL[".exportTo"] = true;

$tdataAnexar_Sector_a_PPL[".printFriendly"] = true;


$tdataAnexar_Sector_a_PPL[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataAnexar_Sector_a_PPL[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataAnexar_Sector_a_PPL[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataAnexar_Sector_a_PPL[".searchSaving"] = false;
//

$tdataAnexar_Sector_a_PPL[".showSearchPanel"] = true;
		$tdataAnexar_Sector_a_PPL[".flexibleSearch"] = true;

$tdataAnexar_Sector_a_PPL[".isUseAjaxSuggest"] = true;

$tdataAnexar_Sector_a_PPL[".rowHighlite"] = true;





$tdataAnexar_Sector_a_PPL[".ajaxCodeSnippetAdded"] = false;

$tdataAnexar_Sector_a_PPL[".buttonsAdded"] = false;

$tdataAnexar_Sector_a_PPL[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAnexar_Sector_a_PPL[".isUseTimeForSearch"] = false;



$tdataAnexar_Sector_a_PPL[".badgeColor"] = "3CB371";


$tdataAnexar_Sector_a_PPL[".allSearchFields"] = array();
$tdataAnexar_Sector_a_PPL[".filterFields"] = array();
$tdataAnexar_Sector_a_PPL[".requiredSearchFields"] = array();

$tdataAnexar_Sector_a_PPL[".allSearchFields"][] = "sipe";
	$tdataAnexar_Sector_a_PPL[".allSearchFields"][] = "sector_ppd";
	$tdataAnexar_Sector_a_PPL[".allSearchFields"][] = "municipio";
	

$tdataAnexar_Sector_a_PPL[".googleLikeFields"] = array();
$tdataAnexar_Sector_a_PPL[".googleLikeFields"][] = "sipe";
$tdataAnexar_Sector_a_PPL[".googleLikeFields"][] = "sector_ppd";
$tdataAnexar_Sector_a_PPL[".googleLikeFields"][] = "municipio";


$tdataAnexar_Sector_a_PPL[".advSearchFields"] = array();
$tdataAnexar_Sector_a_PPL[".advSearchFields"][] = "sipe";
$tdataAnexar_Sector_a_PPL[".advSearchFields"][] = "sector_ppd";
$tdataAnexar_Sector_a_PPL[".advSearchFields"][] = "municipio";

$tdataAnexar_Sector_a_PPL[".tableType"] = "list";

$tdataAnexar_Sector_a_PPL[".printerPageOrientation"] = 0;
$tdataAnexar_Sector_a_PPL[".nPrinterPageScale"] = 100;

$tdataAnexar_Sector_a_PPL[".nPrinterSplitRecords"] = 40;

$tdataAnexar_Sector_a_PPL[".nPrinterPDFSplitRecords"] = 40;



$tdataAnexar_Sector_a_PPL[".geocodingEnabled"] = false;





$tdataAnexar_Sector_a_PPL[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataAnexar_Sector_a_PPL[".pageSize"] = 20;

$tdataAnexar_Sector_a_PPL[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAnexar_Sector_a_PPL[".strOrderBy"] = $tstrOrderBy;

$tdataAnexar_Sector_a_PPL[".orderindexes"] = array();

$tdataAnexar_Sector_a_PPL[".sqlHead"] = "SELECT sipe,  	sector_ppd,  	municipio";
$tdataAnexar_Sector_a_PPL[".sqlFrom"] = "FROM anexar_carcel";
$tdataAnexar_Sector_a_PPL[".sqlWhereExpr"] = "";
$tdataAnexar_Sector_a_PPL[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAnexar_Sector_a_PPL[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAnexar_Sector_a_PPL[".arrGroupsPerPage"] = $arrGPP;

$tdataAnexar_Sector_a_PPL[".highlightSearchResults"] = true;

$tableKeysAnexar_Sector_a_PPL = array();
$tdataAnexar_Sector_a_PPL[".Keys"] = $tableKeysAnexar_Sector_a_PPL;

$tdataAnexar_Sector_a_PPL[".listFields"] = array();
$tdataAnexar_Sector_a_PPL[".listFields"][] = "sipe";
$tdataAnexar_Sector_a_PPL[".listFields"][] = "sector_ppd";
$tdataAnexar_Sector_a_PPL[".listFields"][] = "municipio";

$tdataAnexar_Sector_a_PPL[".hideMobileList"] = array();


$tdataAnexar_Sector_a_PPL[".viewFields"] = array();
$tdataAnexar_Sector_a_PPL[".viewFields"][] = "sipe";
$tdataAnexar_Sector_a_PPL[".viewFields"][] = "sector_ppd";
$tdataAnexar_Sector_a_PPL[".viewFields"][] = "municipio";

$tdataAnexar_Sector_a_PPL[".addFields"] = array();
$tdataAnexar_Sector_a_PPL[".addFields"][] = "sipe";
$tdataAnexar_Sector_a_PPL[".addFields"][] = "sector_ppd";
$tdataAnexar_Sector_a_PPL[".addFields"][] = "municipio";

$tdataAnexar_Sector_a_PPL[".masterListFields"] = array();
$tdataAnexar_Sector_a_PPL[".masterListFields"][] = "sipe";
$tdataAnexar_Sector_a_PPL[".masterListFields"][] = "sector_ppd";
$tdataAnexar_Sector_a_PPL[".masterListFields"][] = "municipio";

$tdataAnexar_Sector_a_PPL[".inlineAddFields"] = array();
$tdataAnexar_Sector_a_PPL[".inlineAddFields"][] = "sipe";
$tdataAnexar_Sector_a_PPL[".inlineAddFields"][] = "sector_ppd";
$tdataAnexar_Sector_a_PPL[".inlineAddFields"][] = "municipio";

$tdataAnexar_Sector_a_PPL[".editFields"] = array();
$tdataAnexar_Sector_a_PPL[".editFields"][] = "sipe";
$tdataAnexar_Sector_a_PPL[".editFields"][] = "sector_ppd";
$tdataAnexar_Sector_a_PPL[".editFields"][] = "municipio";

$tdataAnexar_Sector_a_PPL[".inlineEditFields"] = array();
$tdataAnexar_Sector_a_PPL[".inlineEditFields"][] = "sipe";
$tdataAnexar_Sector_a_PPL[".inlineEditFields"][] = "sector_ppd";
$tdataAnexar_Sector_a_PPL[".inlineEditFields"][] = "municipio";

$tdataAnexar_Sector_a_PPL[".updateSelectedFields"] = array();
$tdataAnexar_Sector_a_PPL[".updateSelectedFields"][] = "sipe";
$tdataAnexar_Sector_a_PPL[".updateSelectedFields"][] = "sector_ppd";
$tdataAnexar_Sector_a_PPL[".updateSelectedFields"][] = "municipio";


$tdataAnexar_Sector_a_PPL[".exportFields"] = array();
$tdataAnexar_Sector_a_PPL[".exportFields"][] = "sipe";
$tdataAnexar_Sector_a_PPL[".exportFields"][] = "sector_ppd";
$tdataAnexar_Sector_a_PPL[".exportFields"][] = "municipio";

$tdataAnexar_Sector_a_PPL[".importFields"] = array();
$tdataAnexar_Sector_a_PPL[".importFields"][] = "sipe";
$tdataAnexar_Sector_a_PPL[".importFields"][] = "sector_ppd";
$tdataAnexar_Sector_a_PPL[".importFields"][] = "municipio";

$tdataAnexar_Sector_a_PPL[".printFields"] = array();
$tdataAnexar_Sector_a_PPL[".printFields"][] = "sipe";
$tdataAnexar_Sector_a_PPL[".printFields"][] = "sector_ppd";
$tdataAnexar_Sector_a_PPL[".printFields"][] = "municipio";

//	sipe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sipe";
	$fdata["GoodName"] = "sipe";
	$fdata["ownerTable"] = "anexar_carcel";
	$fdata["Label"] = GetFieldLabel("Anexar_Sector_a_PPL","sipe");
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




	$tdataAnexar_Sector_a_PPL["sipe"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "anexar_carcel";
	$fdata["Label"] = GetFieldLabel("Anexar_Sector_a_PPL","sector_ppd");
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




	$tdataAnexar_Sector_a_PPL["sector_ppd"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "anexar_carcel";
	$fdata["Label"] = GetFieldLabel("Anexar_Sector_a_PPL","municipio");
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




	$tdataAnexar_Sector_a_PPL["municipio"] = $fdata;


$tables_data["Anexar Sector a PPL"]=&$tdataAnexar_Sector_a_PPL;
$field_labels["Anexar_Sector_a_PPL"] = &$fieldLabelsAnexar_Sector_a_PPL;
$fieldToolTips["Anexar_Sector_a_PPL"] = &$fieldToolTipsAnexar_Sector_a_PPL;
$placeHolders["Anexar_Sector_a_PPL"] = &$placeHoldersAnexar_Sector_a_PPL;
$page_titles["Anexar_Sector_a_PPL"] = &$pageTitlesAnexar_Sector_a_PPL;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Anexar Sector a PPL"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Anexar Sector a PPL"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Anexar_Sector_a_PPL()
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
	"m_srcTableName" => "Anexar Sector a PPL"
));

$proto6["m_sql"] = "sipe";
$proto6["m_srcTableName"] = "Anexar Sector a PPL";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "anexar_carcel",
	"m_srcTableName" => "Anexar Sector a PPL"
));

$proto8["m_sql"] = "sector_ppd";
$proto8["m_srcTableName"] = "Anexar Sector a PPL";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "anexar_carcel",
	"m_srcTableName" => "Anexar Sector a PPL"
));

$proto10["m_sql"] = "municipio";
$proto10["m_srcTableName"] = "Anexar Sector a PPL";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "anexar_carcel";
$proto13["m_srcTableName"] = "Anexar Sector a PPL";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "sipe";
$proto13["m_columns"][] = "sector_ppd";
$proto13["m_columns"][] = "municipio";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "anexar_carcel";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "Anexar Sector a PPL";
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
$proto0["m_srcTableName"]="Anexar Sector a PPL";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Anexar_Sector_a_PPL = createSqlQuery_Anexar_Sector_a_PPL();


	
		;

			

$tdataAnexar_Sector_a_PPL[".sqlquery"] = $queryData_Anexar_Sector_a_PPL;

$tableEvents["Anexar Sector a PPL"] = new eventsBase;
$tdataAnexar_Sector_a_PPL[".hasEvents"] = false;

?>