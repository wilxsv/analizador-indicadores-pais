<?php
require_once(getabspath("classes/cipherer.php"));




$tdataanexar_carcel3 = array();
	$tdataanexar_carcel3[".truncateText"] = true;
	$tdataanexar_carcel3[".NumberOfChars"] = 80;
	$tdataanexar_carcel3[".ShortName"] = "anexar_carcel3";
	$tdataanexar_carcel3[".OwnerID"] = "";
	$tdataanexar_carcel3[".OriginalTable"] = "anexar_carcel";

//	field labels
$fieldLabelsanexar_carcel3 = array();
$fieldToolTipsanexar_carcel3 = array();
$pageTitlesanexar_carcel3 = array();
$placeHoldersanexar_carcel3 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsanexar_carcel3["Spanish"] = array();
	$fieldToolTipsanexar_carcel3["Spanish"] = array();
	$placeHoldersanexar_carcel3["Spanish"] = array();
	$pageTitlesanexar_carcel3["Spanish"] = array();
	$fieldLabelsanexar_carcel3["Spanish"]["sipe"] = "Sipe";
	$fieldToolTipsanexar_carcel3["Spanish"]["sipe"] = "";
	$placeHoldersanexar_carcel3["Spanish"]["sipe"] = "";
	$fieldLabelsanexar_carcel3["Spanish"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsanexar_carcel3["Spanish"]["sector_ppd"] = "";
	$placeHoldersanexar_carcel3["Spanish"]["sector_ppd"] = "";
	$fieldLabelsanexar_carcel3["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsanexar_carcel3["Spanish"]["municipio"] = "";
	$placeHoldersanexar_carcel3["Spanish"]["municipio"] = "";
	if (count($fieldToolTipsanexar_carcel3["Spanish"]))
		$tdataanexar_carcel3[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsanexar_carcel3["English"] = array();
	$fieldToolTipsanexar_carcel3["English"] = array();
	$placeHoldersanexar_carcel3["English"] = array();
	$pageTitlesanexar_carcel3["English"] = array();
	$fieldLabelsanexar_carcel3["English"]["sipe"] = "Sipe";
	$fieldToolTipsanexar_carcel3["English"]["sipe"] = "";
	$placeHoldersanexar_carcel3["English"]["sipe"] = "";
	$fieldLabelsanexar_carcel3["English"]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsanexar_carcel3["English"]["sector_ppd"] = "";
	$placeHoldersanexar_carcel3["English"]["sector_ppd"] = "";
	$fieldLabelsanexar_carcel3["English"]["municipio"] = "Municipio";
	$fieldToolTipsanexar_carcel3["English"]["municipio"] = "";
	$placeHoldersanexar_carcel3["English"]["municipio"] = "";
	if (count($fieldToolTipsanexar_carcel3["English"]))
		$tdataanexar_carcel3[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsanexar_carcel3[""] = array();
	$fieldToolTipsanexar_carcel3[""] = array();
	$placeHoldersanexar_carcel3[""] = array();
	$pageTitlesanexar_carcel3[""] = array();
	$fieldLabelsanexar_carcel3[""]["sipe"] = "Sipe";
	$fieldToolTipsanexar_carcel3[""]["sipe"] = "";
	$placeHoldersanexar_carcel3[""]["sipe"] = "";
	$fieldLabelsanexar_carcel3[""]["sector_ppd"] = "Sector Ppd";
	$fieldToolTipsanexar_carcel3[""]["sector_ppd"] = "";
	$placeHoldersanexar_carcel3[""]["sector_ppd"] = "";
	$fieldLabelsanexar_carcel3[""]["municipio"] = "Municipio";
	$fieldToolTipsanexar_carcel3[""]["municipio"] = "";
	$placeHoldersanexar_carcel3[""]["municipio"] = "";
	if (count($fieldToolTipsanexar_carcel3[""]))
		$tdataanexar_carcel3[".isUseToolTips"] = true;
}


	$tdataanexar_carcel3[".NCSearch"] = true;



$tdataanexar_carcel3[".shortTableName"] = "anexar_carcel3";
$tdataanexar_carcel3[".nSecOptions"] = 0;
$tdataanexar_carcel3[".recsPerRowPrint"] = 1;
$tdataanexar_carcel3[".mainTableOwnerID"] = "";
$tdataanexar_carcel3[".moveNext"] = 1;
$tdataanexar_carcel3[".entityType"] = 1;

$tdataanexar_carcel3[".strOriginalTableName"] = "anexar_carcel";

	



$tdataanexar_carcel3[".showAddInPopup"] = false;

$tdataanexar_carcel3[".showEditInPopup"] = false;

$tdataanexar_carcel3[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataanexar_carcel3[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataanexar_carcel3[".fieldsForRegister"] = array();

$tdataanexar_carcel3[".listAjax"] = false;

	$tdataanexar_carcel3[".audit"] = false;

	$tdataanexar_carcel3[".locking"] = false;



$tdataanexar_carcel3[".list"] = true;



$tdataanexar_carcel3[".reorderRecordsByHeader"] = true;




$tdataanexar_carcel3[".import"] = true;

$tdataanexar_carcel3[".exportTo"] = true;

$tdataanexar_carcel3[".printFriendly"] = true;


$tdataanexar_carcel3[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataanexar_carcel3[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataanexar_carcel3[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataanexar_carcel3[".searchSaving"] = false;
//

$tdataanexar_carcel3[".showSearchPanel"] = true;
		$tdataanexar_carcel3[".flexibleSearch"] = true;

$tdataanexar_carcel3[".isUseAjaxSuggest"] = true;

$tdataanexar_carcel3[".rowHighlite"] = true;





$tdataanexar_carcel3[".ajaxCodeSnippetAdded"] = false;

$tdataanexar_carcel3[".buttonsAdded"] = false;

$tdataanexar_carcel3[".addPageEvents"] = false;

// use timepicker for search panel
$tdataanexar_carcel3[".isUseTimeForSearch"] = false;



$tdataanexar_carcel3[".badgeColor"] = "9ACD32";


$tdataanexar_carcel3[".allSearchFields"] = array();
$tdataanexar_carcel3[".filterFields"] = array();
$tdataanexar_carcel3[".requiredSearchFields"] = array();

$tdataanexar_carcel3[".allSearchFields"][] = "sipe";
	$tdataanexar_carcel3[".allSearchFields"][] = "sector_ppd";
	$tdataanexar_carcel3[".allSearchFields"][] = "municipio";
	

$tdataanexar_carcel3[".googleLikeFields"] = array();
$tdataanexar_carcel3[".googleLikeFields"][] = "sipe";
$tdataanexar_carcel3[".googleLikeFields"][] = "sector_ppd";
$tdataanexar_carcel3[".googleLikeFields"][] = "municipio";


$tdataanexar_carcel3[".advSearchFields"] = array();
$tdataanexar_carcel3[".advSearchFields"][] = "sipe";
$tdataanexar_carcel3[".advSearchFields"][] = "sector_ppd";
$tdataanexar_carcel3[".advSearchFields"][] = "municipio";

$tdataanexar_carcel3[".tableType"] = "list";

$tdataanexar_carcel3[".printerPageOrientation"] = 0;
$tdataanexar_carcel3[".nPrinterPageScale"] = 100;

$tdataanexar_carcel3[".nPrinterSplitRecords"] = 40;

$tdataanexar_carcel3[".nPrinterPDFSplitRecords"] = 40;



$tdataanexar_carcel3[".geocodingEnabled"] = false;





$tdataanexar_carcel3[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataanexar_carcel3[".pageSize"] = 20;

$tdataanexar_carcel3[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataanexar_carcel3[".strOrderBy"] = $tstrOrderBy;

$tdataanexar_carcel3[".orderindexes"] = array();

$tdataanexar_carcel3[".sqlHead"] = "SELECT sipe,  sector_ppd,  municipio";
$tdataanexar_carcel3[".sqlFrom"] = "FROM anexar_carcel";
$tdataanexar_carcel3[".sqlWhereExpr"] = "(sipe =1028)";
$tdataanexar_carcel3[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataanexar_carcel3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataanexar_carcel3[".arrGroupsPerPage"] = $arrGPP;

$tdataanexar_carcel3[".highlightSearchResults"] = true;

$tableKeysanexar_carcel3 = array();
$tdataanexar_carcel3[".Keys"] = $tableKeysanexar_carcel3;

$tdataanexar_carcel3[".listFields"] = array();
$tdataanexar_carcel3[".listFields"][] = "sipe";
$tdataanexar_carcel3[".listFields"][] = "sector_ppd";
$tdataanexar_carcel3[".listFields"][] = "municipio";

$tdataanexar_carcel3[".hideMobileList"] = array();


$tdataanexar_carcel3[".viewFields"] = array();
$tdataanexar_carcel3[".viewFields"][] = "sipe";
$tdataanexar_carcel3[".viewFields"][] = "sector_ppd";
$tdataanexar_carcel3[".viewFields"][] = "municipio";

$tdataanexar_carcel3[".addFields"] = array();
$tdataanexar_carcel3[".addFields"][] = "sipe";
$tdataanexar_carcel3[".addFields"][] = "sector_ppd";
$tdataanexar_carcel3[".addFields"][] = "municipio";

$tdataanexar_carcel3[".masterListFields"] = array();
$tdataanexar_carcel3[".masterListFields"][] = "sipe";
$tdataanexar_carcel3[".masterListFields"][] = "sector_ppd";
$tdataanexar_carcel3[".masterListFields"][] = "municipio";

$tdataanexar_carcel3[".inlineAddFields"] = array();
$tdataanexar_carcel3[".inlineAddFields"][] = "sipe";
$tdataanexar_carcel3[".inlineAddFields"][] = "sector_ppd";
$tdataanexar_carcel3[".inlineAddFields"][] = "municipio";

$tdataanexar_carcel3[".editFields"] = array();
$tdataanexar_carcel3[".editFields"][] = "sipe";
$tdataanexar_carcel3[".editFields"][] = "sector_ppd";
$tdataanexar_carcel3[".editFields"][] = "municipio";

$tdataanexar_carcel3[".inlineEditFields"] = array();
$tdataanexar_carcel3[".inlineEditFields"][] = "sipe";
$tdataanexar_carcel3[".inlineEditFields"][] = "sector_ppd";
$tdataanexar_carcel3[".inlineEditFields"][] = "municipio";

$tdataanexar_carcel3[".updateSelectedFields"] = array();
$tdataanexar_carcel3[".updateSelectedFields"][] = "sipe";
$tdataanexar_carcel3[".updateSelectedFields"][] = "sector_ppd";
$tdataanexar_carcel3[".updateSelectedFields"][] = "municipio";


$tdataanexar_carcel3[".exportFields"] = array();
$tdataanexar_carcel3[".exportFields"][] = "sipe";
$tdataanexar_carcel3[".exportFields"][] = "sector_ppd";
$tdataanexar_carcel3[".exportFields"][] = "municipio";

$tdataanexar_carcel3[".importFields"] = array();
$tdataanexar_carcel3[".importFields"][] = "sipe";
$tdataanexar_carcel3[".importFields"][] = "sector_ppd";
$tdataanexar_carcel3[".importFields"][] = "municipio";

$tdataanexar_carcel3[".printFields"] = array();
$tdataanexar_carcel3[".printFields"][] = "sipe";
$tdataanexar_carcel3[".printFields"][] = "sector_ppd";
$tdataanexar_carcel3[".printFields"][] = "municipio";

//	sipe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sipe";
	$fdata["GoodName"] = "sipe";
	$fdata["ownerTable"] = "anexar_carcel";
	$fdata["Label"] = GetFieldLabel("anexar_carcel3","sipe");
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




	$tdataanexar_carcel3["sipe"] = $fdata;
//	sector_ppd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sector_ppd";
	$fdata["GoodName"] = "sector_ppd";
	$fdata["ownerTable"] = "anexar_carcel";
	$fdata["Label"] = GetFieldLabel("anexar_carcel3","sector_ppd");
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




	$tdataanexar_carcel3["sector_ppd"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "anexar_carcel";
	$fdata["Label"] = GetFieldLabel("anexar_carcel3","municipio");
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




	$tdataanexar_carcel3["municipio"] = $fdata;


$tables_data["anexar_carcel3"]=&$tdataanexar_carcel3;
$field_labels["anexar_carcel3"] = &$fieldLabelsanexar_carcel3;
$fieldToolTips["anexar_carcel3"] = &$fieldToolTipsanexar_carcel3;
$placeHolders["anexar_carcel3"] = &$placeHoldersanexar_carcel3;
$page_titles["anexar_carcel3"] = &$pageTitlesanexar_carcel3;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["anexar_carcel3"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["anexar_carcel3"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_anexar_carcel3()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sipe,  sector_ppd,  municipio";
$proto0["m_strFrom"] = "FROM anexar_carcel";
$proto0["m_strWhere"] = "(sipe =1028)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "sipe =1028";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sipe",
	"m_strTable" => "anexar_carcel",
	"m_srcTableName" => "anexar_carcel3"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=1028";
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
	"m_srcTableName" => "anexar_carcel3"
));

$proto6["m_sql"] = "sipe";
$proto6["m_srcTableName"] = "anexar_carcel3";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sector_ppd",
	"m_strTable" => "anexar_carcel",
	"m_srcTableName" => "anexar_carcel3"
));

$proto8["m_sql"] = "sector_ppd";
$proto8["m_srcTableName"] = "anexar_carcel3";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "anexar_carcel",
	"m_srcTableName" => "anexar_carcel3"
));

$proto10["m_sql"] = "municipio";
$proto10["m_srcTableName"] = "anexar_carcel3";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "anexar_carcel";
$proto13["m_srcTableName"] = "anexar_carcel3";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "sipe";
$proto13["m_columns"][] = "sector_ppd";
$proto13["m_columns"][] = "municipio";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "anexar_carcel";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "anexar_carcel3";
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
$proto0["m_srcTableName"]="anexar_carcel3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_anexar_carcel3 = createSqlQuery_anexar_carcel3();


	
		;

			

$tdataanexar_carcel3[".sqlquery"] = $queryData_anexar_carcel3;

$tableEvents["anexar_carcel3"] = new eventsBase;
$tdataanexar_carcel3[".hasEvents"] = false;

?>