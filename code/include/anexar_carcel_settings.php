<?php
require_once(getabspath("classes/cipherer.php"));




$tdataanexar_carcel = array();
	$tdataanexar_carcel[".truncateText"] = true;
	$tdataanexar_carcel[".NumberOfChars"] = 80;
	$tdataanexar_carcel[".ShortName"] = "anexar_carcel";
	$tdataanexar_carcel[".OwnerID"] = "";
	$tdataanexar_carcel[".OriginalTable"] = "anexar_carcel";

//	field labels
$fieldLabelsanexar_carcel = array();
$fieldToolTipsanexar_carcel = array();
$pageTitlesanexar_carcel = array();
$placeHoldersanexar_carcel = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsanexar_carcel["Spanish"] = array();
	$fieldToolTipsanexar_carcel["Spanish"] = array();
	$placeHoldersanexar_carcel["Spanish"] = array();
	$pageTitlesanexar_carcel["Spanish"] = array();
	$fieldLabelsanexar_carcel["Spanish"]["sipe"] = "Sipe";
	$fieldToolTipsanexar_carcel["Spanish"]["sipe"] = "";
	$placeHoldersanexar_carcel["Spanish"]["sipe"] = "";
	$fieldLabelsanexar_carcel["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsanexar_carcel["Spanish"]["sector_ppd"] = "";
	$placeHoldersanexar_carcel["Spanish"]["sector_ppd"] = "";
	if (count($fieldToolTipsanexar_carcel["Spanish"]))
		$tdataanexar_carcel[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsanexar_carcel["English"] = array();
	$fieldToolTipsanexar_carcel["English"] = array();
	$placeHoldersanexar_carcel["English"] = array();
	$pageTitlesanexar_carcel["English"] = array();
	$fieldLabelsanexar_carcel["English"]["sipe"] = "Sipe";
	$fieldToolTipsanexar_carcel["English"]["sipe"] = "";
	$placeHoldersanexar_carcel["English"]["sipe"] = "";
	$fieldLabelsanexar_carcel["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsanexar_carcel["English"]["sector_ppd"] = "";
	$placeHoldersanexar_carcel["English"]["sector_ppd"] = "";
	if (count($fieldToolTipsanexar_carcel["English"]))
		$tdataanexar_carcel[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsanexar_carcel[""] = array();
	$fieldToolTipsanexar_carcel[""] = array();
	$placeHoldersanexar_carcel[""] = array();
	$pageTitlesanexar_carcel[""] = array();
	if (count($fieldToolTipsanexar_carcel[""]))
		$tdataanexar_carcel[".isUseToolTips"] = true;
}


	$tdataanexar_carcel[".NCSearch"] = true;



$tdataanexar_carcel[".shortTableName"] = "anexar_carcel";
$tdataanexar_carcel[".nSecOptions"] = 0;
$tdataanexar_carcel[".recsPerRowPrint"] = 1;
$tdataanexar_carcel[".mainTableOwnerID"] = "";
$tdataanexar_carcel[".moveNext"] = 1;
$tdataanexar_carcel[".entityType"] = 1;

$tdataanexar_carcel[".strOriginalTableName"] = "anexar_carcel";

	



$tdataanexar_carcel[".showAddInPopup"] = false;

$tdataanexar_carcel[".showEditInPopup"] = false;

$tdataanexar_carcel[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataanexar_carcel[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataanexar_carcel[".fieldsForRegister"] = array();

	$tdataanexar_carcel[".listAjax"] = true;

	$tdataanexar_carcel[".audit"] = false;

	$tdataanexar_carcel[".locking"] = false;



$tdataanexar_carcel[".list"] = true;



$tdataanexar_carcel[".reorderRecordsByHeader"] = true;
$tdataanexar_carcel[".createSortByDropdown"] = true;
$tdataanexar_carcel[".strSortControlSettingsJSON"] = "";




$tdataanexar_carcel[".import"] = true;

$tdataanexar_carcel[".exportTo"] = true;

$tdataanexar_carcel[".printFriendly"] = true;


$tdataanexar_carcel[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataanexar_carcel[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataanexar_carcel[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataanexar_carcel[".searchSaving"] = false;
//

$tdataanexar_carcel[".showSearchPanel"] = true;
		$tdataanexar_carcel[".flexibleSearch"] = true;

$tdataanexar_carcel[".isUseAjaxSuggest"] = true;

$tdataanexar_carcel[".rowHighlite"] = true;





$tdataanexar_carcel[".ajaxCodeSnippetAdded"] = false;

$tdataanexar_carcel[".buttonsAdded"] = false;

$tdataanexar_carcel[".addPageEvents"] = false;

// use timepicker for search panel
$tdataanexar_carcel[".isUseTimeForSearch"] = false;





$tdataanexar_carcel[".allSearchFields"] = array();
$tdataanexar_carcel[".filterFields"] = array();
$tdataanexar_carcel[".requiredSearchFields"] = array();

$tdataanexar_carcel[".allSearchFields"][] = "sipe";
	$tdataanexar_carcel[".allSearchFields"][] = "sector_ppd";
	

$tdataanexar_carcel[".googleLikeFields"] = array();
$tdataanexar_carcel[".googleLikeFields"][] = "sipe";
$tdataanexar_carcel[".googleLikeFields"][] = "sector_ppd";


$tdataanexar_carcel[".advSearchFields"] = array();
$tdataanexar_carcel[".advSearchFields"][] = "sipe";
$tdataanexar_carcel[".advSearchFields"][] = "sector_ppd";

$tdataanexar_carcel[".tableType"] = "list";

$tdataanexar_carcel[".printerPageOrientation"] = 0;
$tdataanexar_carcel[".nPrinterPageScale"] = 100;

$tdataanexar_carcel[".nPrinterSplitRecords"] = 40;

$tdataanexar_carcel[".nPrinterPDFSplitRecords"] = 40;



$tdataanexar_carcel[".geocodingEnabled"] = false;





$tdataanexar_carcel[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataanexar_carcel[".pageSize"] = 20;

$tdataanexar_carcel[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY sector_ppd";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataanexar_carcel[".strOrderBy"] = $tstrOrderBy;

$tdataanexar_carcel[".orderindexes"] = array();
$tdataanexar_carcel[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "sector_ppd");

$tdataanexar_carcel[".sqlHead"] = "SELECT sipe,  sector_ppd";
$tdataanexar_carcel[".sqlFrom"] = "FROM anexar_carcel";
$tdataanexar_carcel[".sqlWhereExpr"] = "sector_ppd is null";
$tdataanexar_carcel[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataanexar_carcel[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataanexar_carcel[".arrGroupsPerPage"] = $arrGPP;

$tdataanexar_carcel[".highlightSearchResults"] = true;

$tableKeysanexar_carcel = array();
$tdataanexar_carcel[".Keys"] = $tableKeysanexar_carcel;

$tdataanexar_carcel[".listFields"] = array();
$tdataanexar_carcel[".listFields"][] = "sipe";
$tdataanexar_carcel[".listFields"][] = "sector_ppd";

$tdataanexar_carcel[".hideMobileList"] = array();


$tdataanexar_carcel[".viewFields"] = array();
$tdataanexar_carcel[".viewFields"][] = "sipe";
$tdataanexar_carcel[".viewFields"][] = "sector_ppd";

$tdataanexar_carcel[".addFields"] = array();
$tdataanexar_carcel[".addFields"][] = "sipe";
$tdataanexar_carcel[".addFields"][] = "sector_ppd";

$tdataanexar_carcel[".masterListFields"] = array();
$tdataanexar_carcel[".masterListFields"][] = "sipe";
$tdataanexar_carcel[".masterListFields"][] = "sector_ppd";

$tdataanexar_carcel[".inlineAddFields"] = array();
$tdataanexar_carcel[".inlineAddFields"][] = "sipe";
$tdataanexar_carcel[".inlineAddFields"][] = "sector_ppd";

$tdataanexar_carcel[".editFields"] = array();
$tdataanexar_carcel[".editFields"][] = "sipe";
$tdataanexar_carcel[".editFields"][] = "sector_ppd";

$tdataanexar_carcel[".inlineEditFields"] = array();
$tdataanexar_carcel[".inlineEditFields"][] = "sipe";
$tdataanexar_carcel[".inlineEditFields"][] = "sector_ppd";

$tdataanexar_carcel[".updateSelectedFields"] = array();
$tdataanexar_carcel[".updateSelectedFields"][] = "sipe";
$tdataanexar_carcel[".updateSelectedFields"][] = "sector_ppd";


$tdataanexar_carcel[".exportFields"] = array();
$tdataanexar_carcel[".exportFields"][] = "sipe";
$tdataanexar_carcel[".exportFields"][] = "sector_ppd";

$tdataanexar_carcel[".importFields"] = array();
$tdataanexar_carcel[".importFields"][] = "sipe";
$tdataanexar_carcel[".importFields"][] = "sector_ppd";

$tdataanexar_carcel[".printFields"] = array();
$tdataanexar_carcel[".printFields"][] = "sipe";
$tdataanexar_carcel[".printFields"][] = "sector_ppd";

//	sipe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sipe";
	$fdata["GoodName"] = "sipe";
	$fdata["ownerTable"] = "anexar_carcel";
	$fdata["Label"] = GetFieldLabel("anexar_carcel","sipe");
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataanexar_carcel["sipe"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "anexar_carcel";
	$fdata["Label"] = GetFieldLabel("anexar_carcel","sector_ppd");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataanexar_carcel["sector_ppd"] = $fdata;


$tables_data["anexar_carcel"]=&$tdataanexar_carcel;
$field_labels["anexar_carcel"] = &$fieldLabelsanexar_carcel;
$fieldToolTips["anexar_carcel"] = &$fieldToolTipsanexar_carcel;
$placeHolders["anexar_carcel"] = &$placeHoldersanexar_carcel;
$page_titles["anexar_carcel"] = &$pageTitlesanexar_carcel;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["anexar_carcel"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["anexar_carcel"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_anexar_carcel()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sipe,  sector_ppd";
$proto0["m_strFrom"] = "FROM anexar_carcel";
$proto0["m_strWhere"] = "sector_ppd is null";
$proto0["m_strOrderBy"] = "ORDER BY sector_ppd";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "sector_ppd is null";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "anexar_carcel",
	"m_srcTableName" => "anexar_carcel"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "is null";
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
	"m_srcTableName" => "anexar_carcel"
));

$proto6["m_sql"] = "sipe";
$proto6["m_srcTableName"] = "anexar_carcel";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "anexar_carcel",
	"m_srcTableName" => "anexar_carcel"
));

$proto8["m_sql"] = "sector_ppd";
$proto8["m_srcTableName"] = "anexar_carcel";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "anexar_carcel";
$proto11["m_srcTableName"] = "anexar_carcel";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "sipe";
$proto11["m_columns"][] = "sector_ppd";
$proto11["m_columns"][] = "municipio";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "anexar_carcel";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "anexar_carcel";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto14=array();
						$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "anexar_carcel",
	"m_srcTableName" => "anexar_carcel"
));

$proto14["m_column"]=$obj;
$proto14["m_bAsc"] = 1;
$proto14["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto14);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="anexar_carcel";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_anexar_carcel = createSqlQuery_anexar_carcel();


	
		;

		

$tdataanexar_carcel[".sqlquery"] = $queryData_anexar_carcel;

$tableEvents["anexar_carcel"] = new eventsBase;
$tdataanexar_carcel[".hasEvents"] = false;

?>