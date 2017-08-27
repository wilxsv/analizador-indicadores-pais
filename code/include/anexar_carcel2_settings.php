<?php
require_once(getabspath("classes/cipherer.php"));




$tdataanexar_carcel2 = array();
	$tdataanexar_carcel2[".truncateText"] = true;
	$tdataanexar_carcel2[".NumberOfChars"] = 80;
	$tdataanexar_carcel2[".ShortName"] = "anexar_carcel2";
	$tdataanexar_carcel2[".OwnerID"] = "";
	$tdataanexar_carcel2[".OriginalTable"] = "anexar_carcel";

//	field labels
$fieldLabelsanexar_carcel2 = array();
$fieldToolTipsanexar_carcel2 = array();
$pageTitlesanexar_carcel2 = array();
$placeHoldersanexar_carcel2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsanexar_carcel2["Spanish"] = array();
	$fieldToolTipsanexar_carcel2["Spanish"] = array();
	$placeHoldersanexar_carcel2["Spanish"] = array();
	$pageTitlesanexar_carcel2["Spanish"] = array();
	$fieldLabelsanexar_carcel2["Spanish"]["sipe"] = "Sipe";
	$fieldToolTipsanexar_carcel2["Spanish"]["sipe"] = "";
	$placeHoldersanexar_carcel2["Spanish"]["sipe"] = "";
	$fieldLabelsanexar_carcel2["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsanexar_carcel2["Spanish"]["sector_ppd"] = "";
	$placeHoldersanexar_carcel2["Spanish"]["sector_ppd"] = "";
	$fieldLabelsanexar_carcel2["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsanexar_carcel2["Spanish"]["municipio"] = "";
	$placeHoldersanexar_carcel2["Spanish"]["municipio"] = "";
	if (count($fieldToolTipsanexar_carcel2["Spanish"]))
		$tdataanexar_carcel2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsanexar_carcel2["English"] = array();
	$fieldToolTipsanexar_carcel2["English"] = array();
	$placeHoldersanexar_carcel2["English"] = array();
	$pageTitlesanexar_carcel2["English"] = array();
	$fieldLabelsanexar_carcel2["English"]["sipe"] = "Sipe";
	$fieldToolTipsanexar_carcel2["English"]["sipe"] = "";
	$placeHoldersanexar_carcel2["English"]["sipe"] = "";
	$fieldLabelsanexar_carcel2["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsanexar_carcel2["English"]["sector_ppd"] = "";
	$placeHoldersanexar_carcel2["English"]["sector_ppd"] = "";
	$fieldLabelsanexar_carcel2["English"]["municipio"] = "Municipio";
	$fieldToolTipsanexar_carcel2["English"]["municipio"] = "";
	$placeHoldersanexar_carcel2["English"]["municipio"] = "";
	if (count($fieldToolTipsanexar_carcel2["English"]))
		$tdataanexar_carcel2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsanexar_carcel2[""] = array();
	$fieldToolTipsanexar_carcel2[""] = array();
	$placeHoldersanexar_carcel2[""] = array();
	$pageTitlesanexar_carcel2[""] = array();
	$fieldLabelsanexar_carcel2[""]["sipe"] = "Sipe";
	$fieldToolTipsanexar_carcel2[""]["sipe"] = "";
	$placeHoldersanexar_carcel2[""]["sipe"] = "";
	$fieldLabelsanexar_carcel2[""]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsanexar_carcel2[""]["sector_ppd"] = "";
	$placeHoldersanexar_carcel2[""]["sector_ppd"] = "";
	$fieldLabelsanexar_carcel2[""]["municipio"] = "Municipio";
	$fieldToolTipsanexar_carcel2[""]["municipio"] = "";
	$placeHoldersanexar_carcel2[""]["municipio"] = "";
	if (count($fieldToolTipsanexar_carcel2[""]))
		$tdataanexar_carcel2[".isUseToolTips"] = true;
}


	$tdataanexar_carcel2[".NCSearch"] = true;



$tdataanexar_carcel2[".shortTableName"] = "anexar_carcel2";
$tdataanexar_carcel2[".nSecOptions"] = 0;
$tdataanexar_carcel2[".recsPerRowPrint"] = 1;
$tdataanexar_carcel2[".mainTableOwnerID"] = "";
$tdataanexar_carcel2[".moveNext"] = 1;
$tdataanexar_carcel2[".entityType"] = 0;

$tdataanexar_carcel2[".strOriginalTableName"] = "anexar_carcel";

	



$tdataanexar_carcel2[".showAddInPopup"] = false;

$tdataanexar_carcel2[".showEditInPopup"] = false;

$tdataanexar_carcel2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataanexar_carcel2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataanexar_carcel2[".fieldsForRegister"] = array();

$tdataanexar_carcel2[".listAjax"] = false;

	$tdataanexar_carcel2[".audit"] = false;

	$tdataanexar_carcel2[".locking"] = false;



$tdataanexar_carcel2[".list"] = true;



$tdataanexar_carcel2[".reorderRecordsByHeader"] = true;




$tdataanexar_carcel2[".import"] = true;

$tdataanexar_carcel2[".exportTo"] = true;

$tdataanexar_carcel2[".printFriendly"] = true;


$tdataanexar_carcel2[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataanexar_carcel2[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataanexar_carcel2[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataanexar_carcel2[".searchSaving"] = false;
//

$tdataanexar_carcel2[".showSearchPanel"] = true;
		$tdataanexar_carcel2[".flexibleSearch"] = true;

$tdataanexar_carcel2[".isUseAjaxSuggest"] = true;

$tdataanexar_carcel2[".rowHighlite"] = true;





$tdataanexar_carcel2[".ajaxCodeSnippetAdded"] = false;

$tdataanexar_carcel2[".buttonsAdded"] = false;

$tdataanexar_carcel2[".addPageEvents"] = false;

// use timepicker for search panel
$tdataanexar_carcel2[".isUseTimeForSearch"] = false;





$tdataanexar_carcel2[".allSearchFields"] = array();
$tdataanexar_carcel2[".filterFields"] = array();
$tdataanexar_carcel2[".requiredSearchFields"] = array();

$tdataanexar_carcel2[".allSearchFields"][] = "sipe";
	$tdataanexar_carcel2[".allSearchFields"][] = "sector_ppd";
	$tdataanexar_carcel2[".allSearchFields"][] = "municipio";
	

$tdataanexar_carcel2[".googleLikeFields"] = array();
$tdataanexar_carcel2[".googleLikeFields"][] = "sipe";
$tdataanexar_carcel2[".googleLikeFields"][] = "sector_ppd";
$tdataanexar_carcel2[".googleLikeFields"][] = "municipio";


$tdataanexar_carcel2[".advSearchFields"] = array();
$tdataanexar_carcel2[".advSearchFields"][] = "sipe";
$tdataanexar_carcel2[".advSearchFields"][] = "sector_ppd";
$tdataanexar_carcel2[".advSearchFields"][] = "municipio";

$tdataanexar_carcel2[".tableType"] = "list";

$tdataanexar_carcel2[".printerPageOrientation"] = 0;
$tdataanexar_carcel2[".nPrinterPageScale"] = 100;

$tdataanexar_carcel2[".nPrinterSplitRecords"] = 40;

$tdataanexar_carcel2[".nPrinterPDFSplitRecords"] = 40;



$tdataanexar_carcel2[".geocodingEnabled"] = false;





$tdataanexar_carcel2[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataanexar_carcel2[".pageSize"] = 20;

$tdataanexar_carcel2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataanexar_carcel2[".strOrderBy"] = $tstrOrderBy;

$tdataanexar_carcel2[".orderindexes"] = array();

$tdataanexar_carcel2[".sqlHead"] = "SELECT sipe,  	sector_ppd,  	municipio";
$tdataanexar_carcel2[".sqlFrom"] = "FROM anexar_carcel";
$tdataanexar_carcel2[".sqlWhereExpr"] = "";
$tdataanexar_carcel2[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataanexar_carcel2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataanexar_carcel2[".arrGroupsPerPage"] = $arrGPP;

$tdataanexar_carcel2[".highlightSearchResults"] = true;

$tableKeysanexar_carcel2 = array();
$tdataanexar_carcel2[".Keys"] = $tableKeysanexar_carcel2;

$tdataanexar_carcel2[".listFields"] = array();
$tdataanexar_carcel2[".listFields"][] = "sipe";
$tdataanexar_carcel2[".listFields"][] = "sector_ppd";
$tdataanexar_carcel2[".listFields"][] = "municipio";

$tdataanexar_carcel2[".hideMobileList"] = array();


$tdataanexar_carcel2[".viewFields"] = array();
$tdataanexar_carcel2[".viewFields"][] = "sipe";
$tdataanexar_carcel2[".viewFields"][] = "sector_ppd";
$tdataanexar_carcel2[".viewFields"][] = "municipio";

$tdataanexar_carcel2[".addFields"] = array();
$tdataanexar_carcel2[".addFields"][] = "sipe";
$tdataanexar_carcel2[".addFields"][] = "sector_ppd";
$tdataanexar_carcel2[".addFields"][] = "municipio";

$tdataanexar_carcel2[".masterListFields"] = array();
$tdataanexar_carcel2[".masterListFields"][] = "sipe";
$tdataanexar_carcel2[".masterListFields"][] = "sector_ppd";
$tdataanexar_carcel2[".masterListFields"][] = "municipio";

$tdataanexar_carcel2[".inlineAddFields"] = array();
$tdataanexar_carcel2[".inlineAddFields"][] = "sipe";
$tdataanexar_carcel2[".inlineAddFields"][] = "sector_ppd";
$tdataanexar_carcel2[".inlineAddFields"][] = "municipio";

$tdataanexar_carcel2[".editFields"] = array();
$tdataanexar_carcel2[".editFields"][] = "sipe";
$tdataanexar_carcel2[".editFields"][] = "sector_ppd";
$tdataanexar_carcel2[".editFields"][] = "municipio";

$tdataanexar_carcel2[".inlineEditFields"] = array();
$tdataanexar_carcel2[".inlineEditFields"][] = "sipe";
$tdataanexar_carcel2[".inlineEditFields"][] = "sector_ppd";
$tdataanexar_carcel2[".inlineEditFields"][] = "municipio";

$tdataanexar_carcel2[".updateSelectedFields"] = array();
$tdataanexar_carcel2[".updateSelectedFields"][] = "sipe";
$tdataanexar_carcel2[".updateSelectedFields"][] = "sector_ppd";
$tdataanexar_carcel2[".updateSelectedFields"][] = "municipio";


$tdataanexar_carcel2[".exportFields"] = array();
$tdataanexar_carcel2[".exportFields"][] = "sipe";
$tdataanexar_carcel2[".exportFields"][] = "sector_ppd";
$tdataanexar_carcel2[".exportFields"][] = "municipio";

$tdataanexar_carcel2[".importFields"] = array();
$tdataanexar_carcel2[".importFields"][] = "sipe";
$tdataanexar_carcel2[".importFields"][] = "sector_ppd";
$tdataanexar_carcel2[".importFields"][] = "municipio";

$tdataanexar_carcel2[".printFields"] = array();
$tdataanexar_carcel2[".printFields"][] = "sipe";
$tdataanexar_carcel2[".printFields"][] = "sector_ppd";
$tdataanexar_carcel2[".printFields"][] = "municipio";

//	sipe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sipe";
	$fdata["GoodName"] = "sipe";
	$fdata["ownerTable"] = "anexar_carcel";
	$fdata["Label"] = GetFieldLabel("anexar_carcel2","sipe");
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




	$tdataanexar_carcel2["sipe"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "anexar_carcel";
	$fdata["Label"] = GetFieldLabel("anexar_carcel2","sector_ppd");
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




	$tdataanexar_carcel2["sector_ppd"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "anexar_carcel";
	$fdata["Label"] = GetFieldLabel("anexar_carcel2","municipio");
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




	$tdataanexar_carcel2["municipio"] = $fdata;


$tables_data["anexar_carcel2"]=&$tdataanexar_carcel2;
$field_labels["anexar_carcel2"] = &$fieldLabelsanexar_carcel2;
$fieldToolTips["anexar_carcel2"] = &$fieldToolTipsanexar_carcel2;
$placeHolders["anexar_carcel2"] = &$placeHoldersanexar_carcel2;
$page_titles["anexar_carcel2"] = &$pageTitlesanexar_carcel2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["anexar_carcel2"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["anexar_carcel2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_anexar_carcel2()
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
	"m_srcTableName" => "anexar_carcel2"
));

$proto6["m_sql"] = "sipe";
$proto6["m_srcTableName"] = "anexar_carcel2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "anexar_carcel",
	"m_srcTableName" => "anexar_carcel2"
));

$proto8["m_sql"] = "sector_ppd";
$proto8["m_srcTableName"] = "anexar_carcel2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "anexar_carcel",
	"m_srcTableName" => "anexar_carcel2"
));

$proto10["m_sql"] = "municipio";
$proto10["m_srcTableName"] = "anexar_carcel2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "anexar_carcel";
$proto13["m_srcTableName"] = "anexar_carcel2";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "sipe";
$proto13["m_columns"][] = "sector_ppd";
$proto13["m_columns"][] = "municipio";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "anexar_carcel";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "anexar_carcel2";
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
$proto0["m_srcTableName"]="anexar_carcel2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_anexar_carcel2 = createSqlQuery_anexar_carcel2();


	
		;

			

$tdataanexar_carcel2[".sqlquery"] = $queryData_anexar_carcel2;

$tableEvents["anexar_carcel2"] = new eventsBase;
$tdataanexar_carcel2[".hasEvents"] = false;

?>