<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatipo_mara = array();
	$tdatatipo_mara[".truncateText"] = true;
	$tdatatipo_mara[".NumberOfChars"] = 80;
	$tdatatipo_mara[".ShortName"] = "tipo_mara";
	$tdatatipo_mara[".OwnerID"] = "";
	$tdatatipo_mara[".OriginalTable"] = "tipo_mara";

//	field labels
$fieldLabelstipo_mara = array();
$fieldToolTipstipo_mara = array();
$pageTitlestipo_mara = array();
$placeHolderstipo_mara = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipo_mara["Spanish"] = array();
	$fieldToolTipstipo_mara["Spanish"] = array();
	$placeHolderstipo_mara["Spanish"] = array();
	$pageTitlestipo_mara["Spanish"] = array();
	$fieldLabelstipo_mara["Spanish"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipstipo_mara["Spanish"]["org_delictiva"] = "";
	$placeHolderstipo_mara["Spanish"]["org_delictiva"] = "";
	$fieldLabelstipo_mara["Spanish"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipstipo_mara["Spanish"]["tipo_mara"] = "";
	$placeHolderstipo_mara["Spanish"]["tipo_mara"] = "";
	$fieldLabelstipo_mara["Spanish"]["ID_1"] = "ID 1";
	$fieldToolTipstipo_mara["Spanish"]["ID_1"] = "";
	$placeHolderstipo_mara["Spanish"]["ID_1"] = "";
	if (count($fieldToolTipstipo_mara["Spanish"]))
		$tdatatipo_mara[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstipo_mara["English"] = array();
	$fieldToolTipstipo_mara["English"] = array();
	$placeHolderstipo_mara["English"] = array();
	$pageTitlestipo_mara["English"] = array();
	$fieldLabelstipo_mara["English"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipstipo_mara["English"]["org_delictiva"] = "";
	$placeHolderstipo_mara["English"]["org_delictiva"] = "";
	$fieldLabelstipo_mara["English"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipstipo_mara["English"]["tipo_mara"] = "";
	$placeHolderstipo_mara["English"]["tipo_mara"] = "";
	$fieldLabelstipo_mara["English"]["ID_1"] = "ID 1";
	$fieldToolTipstipo_mara["English"]["ID_1"] = "";
	$placeHolderstipo_mara["English"]["ID_1"] = "";
	if (count($fieldToolTipstipo_mara["English"]))
		$tdatatipo_mara[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstipo_mara[""] = array();
	$fieldToolTipstipo_mara[""] = array();
	$placeHolderstipo_mara[""] = array();
	$pageTitlestipo_mara[""] = array();
	if (count($fieldToolTipstipo_mara[""]))
		$tdatatipo_mara[".isUseToolTips"] = true;
}





$tdatatipo_mara[".shortTableName"] = "tipo_mara";
$tdatatipo_mara[".nSecOptions"] = 0;
$tdatatipo_mara[".recsPerRowPrint"] = 1;
$tdatatipo_mara[".mainTableOwnerID"] = "";
$tdatatipo_mara[".moveNext"] = 1;
$tdatatipo_mara[".entityType"] = 0;

$tdatatipo_mara[".strOriginalTableName"] = "tipo_mara";

	



$tdatatipo_mara[".showAddInPopup"] = false;

$tdatatipo_mara[".showEditInPopup"] = false;

$tdatatipo_mara[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatipo_mara[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatipo_mara[".fieldsForRegister"] = array();

	$tdatatipo_mara[".listAjax"] = true;

	$tdatatipo_mara[".audit"] = false;

	$tdatatipo_mara[".locking"] = false;



$tdatatipo_mara[".list"] = true;



$tdatatipo_mara[".reorderRecordsByHeader"] = true;
$tdatatipo_mara[".createSortByDropdown"] = true;
$tdatatipo_mara[".strSortControlSettingsJSON"] = "";




$tdatatipo_mara[".import"] = true;

$tdatatipo_mara[".exportTo"] = true;

$tdatatipo_mara[".printFriendly"] = true;


$tdatatipo_mara[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatatipo_mara[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatatipo_mara[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatatipo_mara[".searchSaving"] = false;
//

$tdatatipo_mara[".showSearchPanel"] = true;
		$tdatatipo_mara[".flexibleSearch"] = true;

$tdatatipo_mara[".isUseAjaxSuggest"] = true;

$tdatatipo_mara[".rowHighlite"] = true;





$tdatatipo_mara[".ajaxCodeSnippetAdded"] = false;

$tdatatipo_mara[".buttonsAdded"] = false;

$tdatatipo_mara[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipo_mara[".isUseTimeForSearch"] = false;





$tdatatipo_mara[".allSearchFields"] = array();
$tdatatipo_mara[".filterFields"] = array();
$tdatatipo_mara[".requiredSearchFields"] = array();

$tdatatipo_mara[".allSearchFields"][] = "org_delictiva";
	$tdatatipo_mara[".allSearchFields"][] = "tipo_mara";
	$tdatatipo_mara[".allSearchFields"][] = "ID_1";
	

$tdatatipo_mara[".googleLikeFields"] = array();
$tdatatipo_mara[".googleLikeFields"][] = "org_delictiva";
$tdatatipo_mara[".googleLikeFields"][] = "tipo_mara";
$tdatatipo_mara[".googleLikeFields"][] = "ID_1";


$tdatatipo_mara[".advSearchFields"] = array();
$tdatatipo_mara[".advSearchFields"][] = "org_delictiva";
$tdatatipo_mara[".advSearchFields"][] = "tipo_mara";
$tdatatipo_mara[".advSearchFields"][] = "ID_1";

$tdatatipo_mara[".tableType"] = "list";

$tdatatipo_mara[".printerPageOrientation"] = 0;
$tdatatipo_mara[".nPrinterPageScale"] = 100;

$tdatatipo_mara[".nPrinterSplitRecords"] = 40;

$tdatatipo_mara[".nPrinterPDFSplitRecords"] = 40;



$tdatatipo_mara[".geocodingEnabled"] = false;





$tdatatipo_mara[".listGridLayout"] = 3;

$tdatatipo_mara[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatatipo_mara[".pageSize"] = 10;

$tdatatipo_mara[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatipo_mara[".strOrderBy"] = $tstrOrderBy;

$tdatatipo_mara[".orderindexes"] = array();

$tdatatipo_mara[".sqlHead"] = "SELECT org_delictiva,  tipo_mara,  ID_1";
$tdatatipo_mara[".sqlFrom"] = "FROM tipo_mara";
$tdatatipo_mara[".sqlWhereExpr"] = "";
$tdatatipo_mara[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipo_mara[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipo_mara[".arrGroupsPerPage"] = $arrGPP;

$tdatatipo_mara[".highlightSearchResults"] = true;

$tableKeystipo_mara = array();
$tdatatipo_mara[".Keys"] = $tableKeystipo_mara;

$tdatatipo_mara[".listFields"] = array();
$tdatatipo_mara[".listFields"][] = "org_delictiva";
$tdatatipo_mara[".listFields"][] = "tipo_mara";
$tdatatipo_mara[".listFields"][] = "ID_1";

$tdatatipo_mara[".hideMobileList"] = array();


$tdatatipo_mara[".viewFields"] = array();
$tdatatipo_mara[".viewFields"][] = "org_delictiva";
$tdatatipo_mara[".viewFields"][] = "tipo_mara";
$tdatatipo_mara[".viewFields"][] = "ID_1";

$tdatatipo_mara[".addFields"] = array();
$tdatatipo_mara[".addFields"][] = "org_delictiva";
$tdatatipo_mara[".addFields"][] = "tipo_mara";
$tdatatipo_mara[".addFields"][] = "ID_1";

$tdatatipo_mara[".masterListFields"] = array();
$tdatatipo_mara[".masterListFields"][] = "org_delictiva";
$tdatatipo_mara[".masterListFields"][] = "tipo_mara";
$tdatatipo_mara[".masterListFields"][] = "ID_1";

$tdatatipo_mara[".inlineAddFields"] = array();
$tdatatipo_mara[".inlineAddFields"][] = "org_delictiva";
$tdatatipo_mara[".inlineAddFields"][] = "tipo_mara";
$tdatatipo_mara[".inlineAddFields"][] = "ID_1";

$tdatatipo_mara[".editFields"] = array();
$tdatatipo_mara[".editFields"][] = "org_delictiva";
$tdatatipo_mara[".editFields"][] = "tipo_mara";
$tdatatipo_mara[".editFields"][] = "ID_1";

$tdatatipo_mara[".inlineEditFields"] = array();
$tdatatipo_mara[".inlineEditFields"][] = "org_delictiva";
$tdatatipo_mara[".inlineEditFields"][] = "tipo_mara";
$tdatatipo_mara[".inlineEditFields"][] = "ID_1";

$tdatatipo_mara[".updateSelectedFields"] = array();
$tdatatipo_mara[".updateSelectedFields"][] = "org_delictiva";
$tdatatipo_mara[".updateSelectedFields"][] = "tipo_mara";
$tdatatipo_mara[".updateSelectedFields"][] = "ID_1";


$tdatatipo_mara[".exportFields"] = array();
$tdatatipo_mara[".exportFields"][] = "org_delictiva";
$tdatatipo_mara[".exportFields"][] = "tipo_mara";
$tdatatipo_mara[".exportFields"][] = "ID_1";

$tdatatipo_mara[".importFields"] = array();
$tdatatipo_mara[".importFields"][] = "org_delictiva";
$tdatatipo_mara[".importFields"][] = "tipo_mara";
$tdatatipo_mara[".importFields"][] = "ID_1";

$tdatatipo_mara[".printFields"] = array();
$tdatatipo_mara[".printFields"][] = "org_delictiva";
$tdatatipo_mara[".printFields"][] = "tipo_mara";
$tdatatipo_mara[".printFields"][] = "ID_1";

//	org_delictiva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "org_delictiva";
	$fdata["GoodName"] = "org_delictiva";
	$fdata["ownerTable"] = "tipo_mara";
	$fdata["Label"] = GetFieldLabel("tipo_mara","org_delictiva");
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

		$fdata["strField"] = "org_delictiva";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "org_delictiva";

	
	
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




	$tdatatipo_mara["org_delictiva"] = $fdata;
//	tipo_mara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipo_mara";
	$fdata["GoodName"] = "tipo_mara";
	$fdata["ownerTable"] = "tipo_mara";
	$fdata["Label"] = GetFieldLabel("tipo_mara","tipo_mara");
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

		$fdata["strField"] = "tipo_mara";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_mara";

	
	
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




	$tdatatipo_mara["tipo_mara"] = $fdata;
//	ID_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ID_1";
	$fdata["GoodName"] = "ID_1";
	$fdata["ownerTable"] = "tipo_mara";
	$fdata["Label"] = GetFieldLabel("tipo_mara","ID_1");
	$fdata["FieldType"] = 3;

	
	
	
			
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

		$fdata["strField"] = "ID_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID_1";

	
	
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




	$tdatatipo_mara["ID_1"] = $fdata;


$tables_data["tipo_mara"]=&$tdatatipo_mara;
$field_labels["tipo_mara"] = &$fieldLabelstipo_mara;
$fieldToolTips["tipo_mara"] = &$fieldToolTipstipo_mara;
$placeHolders["tipo_mara"] = &$placeHolderstipo_mara;
$page_titles["tipo_mara"] = &$pageTitlestipo_mara;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tipo_mara"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tipo_mara"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tipo_mara()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "org_delictiva,  tipo_mara,  ID_1";
$proto0["m_strFrom"] = "FROM tipo_mara";
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
	"m_strName" => "org_delictiva",
	"m_strTable" => "tipo_mara",
	"m_srcTableName" => "tipo_mara"
));

$proto6["m_sql"] = "org_delictiva";
$proto6["m_srcTableName"] = "tipo_mara";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "tipo_mara",
	"m_srcTableName" => "tipo_mara"
));

$proto8["m_sql"] = "tipo_mara";
$proto8["m_srcTableName"] = "tipo_mara";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ID_1",
	"m_strTable" => "tipo_mara",
	"m_srcTableName" => "tipo_mara"
));

$proto10["m_sql"] = "ID_1";
$proto10["m_srcTableName"] = "tipo_mara";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tipo_mara";
$proto13["m_srcTableName"] = "tipo_mara";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "org_delictiva";
$proto13["m_columns"][] = "tipo_mara";
$proto13["m_columns"][] = "ID_1";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tipo_mara";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tipo_mara";
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
												$proto16=array();
						$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "tipo_mara",
	"m_srcTableName" => "tipo_mara"
));

$proto16["m_column"]=$obj;
$obj = new SQLGroupByItem($proto16);

$proto0["m_groupby"][]=$obj;
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "tipo_mara",
	"m_srcTableName" => "tipo_mara"
));

$proto18["m_column"]=$obj;
$obj = new SQLGroupByItem($proto18);

$proto0["m_groupby"][]=$obj;
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "ID_1",
	"m_strTable" => "tipo_mara",
	"m_srcTableName" => "tipo_mara"
));

$proto20["m_column"]=$obj;
$obj = new SQLGroupByItem($proto20);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tipo_mara";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipo_mara = createSqlQuery_tipo_mara();


	
		;

			

$tdatatipo_mara[".sqlquery"] = $queryData_tipo_mara;

$tableEvents["tipo_mara"] = new eventsBase;
$tdatatipo_mara[".hasEvents"] = false;

?>