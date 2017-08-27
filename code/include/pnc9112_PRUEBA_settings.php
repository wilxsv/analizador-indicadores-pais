<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapnc9112_PRUEBA = array();
	$tdatapnc9112_PRUEBA[".truncateText"] = true;
	$tdatapnc9112_PRUEBA[".NumberOfChars"] = 80;
	$tdatapnc9112_PRUEBA[".ShortName"] = "pnc9112_PRUEBA";
	$tdatapnc9112_PRUEBA[".OwnerID"] = "";
	$tdatapnc9112_PRUEBA[".OriginalTable"] = "pnc911";

//	field labels
$fieldLabelspnc9112_PRUEBA = array();
$fieldToolTipspnc9112_PRUEBA = array();
$pageTitlespnc9112_PRUEBA = array();
$placeHolderspnc9112_PRUEBA = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspnc9112_PRUEBA["Spanish"] = array();
	$fieldToolTipspnc9112_PRUEBA["Spanish"] = array();
	$placeHolderspnc9112_PRUEBA["Spanish"] = array();
	$pageTitlespnc9112_PRUEBA["Spanish"] = array();
	$fieldLabelspnc9112_PRUEBA["Spanish"]["tipificacion"] = "Tipificacion";
	$fieldToolTipspnc9112_PRUEBA["Spanish"]["tipificacion"] = "";
	$placeHolderspnc9112_PRUEBA["Spanish"]["tipificacion"] = "";
	$fieldLabelspnc9112_PRUEBA["Spanish"]["avisos911"] = "Avisos911";
	$fieldToolTipspnc9112_PRUEBA["Spanish"]["avisos911"] = "";
	$placeHolderspnc9112_PRUEBA["Spanish"]["avisos911"] = "";
	if (count($fieldToolTipspnc9112_PRUEBA["Spanish"]))
		$tdatapnc9112_PRUEBA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspnc9112_PRUEBA["English"] = array();
	$fieldToolTipspnc9112_PRUEBA["English"] = array();
	$placeHolderspnc9112_PRUEBA["English"] = array();
	$pageTitlespnc9112_PRUEBA["English"] = array();
	$fieldLabelspnc9112_PRUEBA["English"]["tipificacion"] = "Tipificacion";
	$fieldToolTipspnc9112_PRUEBA["English"]["tipificacion"] = "";
	$placeHolderspnc9112_PRUEBA["English"]["tipificacion"] = "";
	$fieldLabelspnc9112_PRUEBA["English"]["avisos911"] = "Avisos911";
	$fieldToolTipspnc9112_PRUEBA["English"]["avisos911"] = "";
	$placeHolderspnc9112_PRUEBA["English"]["avisos911"] = "";
	if (count($fieldToolTipspnc9112_PRUEBA["English"]))
		$tdatapnc9112_PRUEBA[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspnc9112_PRUEBA[""] = array();
	$fieldToolTipspnc9112_PRUEBA[""] = array();
	$placeHolderspnc9112_PRUEBA[""] = array();
	$pageTitlespnc9112_PRUEBA[""] = array();
	if (count($fieldToolTipspnc9112_PRUEBA[""]))
		$tdatapnc9112_PRUEBA[".isUseToolTips"] = true;
}





$tdatapnc9112_PRUEBA[".shortTableName"] = "pnc9112_PRUEBA";
$tdatapnc9112_PRUEBA[".nSecOptions"] = 0;
$tdatapnc9112_PRUEBA[".recsPerRowPrint"] = 1;
$tdatapnc9112_PRUEBA[".mainTableOwnerID"] = "";
$tdatapnc9112_PRUEBA[".moveNext"] = 1;
$tdatapnc9112_PRUEBA[".entityType"] = 1;

$tdatapnc9112_PRUEBA[".strOriginalTableName"] = "pnc911";

	



$tdatapnc9112_PRUEBA[".showAddInPopup"] = false;

$tdatapnc9112_PRUEBA[".showEditInPopup"] = false;

$tdatapnc9112_PRUEBA[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapnc9112_PRUEBA[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapnc9112_PRUEBA[".fieldsForRegister"] = array();

	$tdatapnc9112_PRUEBA[".listAjax"] = true;

	$tdatapnc9112_PRUEBA[".audit"] = false;

	$tdatapnc9112_PRUEBA[".locking"] = false;


$tdatapnc9112_PRUEBA[".add"] = true;
$tdatapnc9112_PRUEBA[".afterAddAction"] = 1;
$tdatapnc9112_PRUEBA[".closePopupAfterAdd"] = 1;
$tdatapnc9112_PRUEBA[".afterAddActionDetTable"] = "";

$tdatapnc9112_PRUEBA[".list"] = true;



$tdatapnc9112_PRUEBA[".reorderRecordsByHeader"] = true;
$tdatapnc9112_PRUEBA[".createSortByDropdown"] = true;
$tdatapnc9112_PRUEBA[".strSortControlSettingsJSON"] = "";



$tdatapnc9112_PRUEBA[".inlineAdd"] = true;

$tdatapnc9112_PRUEBA[".import"] = true;

$tdatapnc9112_PRUEBA[".exportTo"] = true;

$tdatapnc9112_PRUEBA[".printFriendly"] = true;


$tdatapnc9112_PRUEBA[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatapnc9112_PRUEBA[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatapnc9112_PRUEBA[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatapnc9112_PRUEBA[".searchSaving"] = false;
//

$tdatapnc9112_PRUEBA[".showSearchPanel"] = true;
		$tdatapnc9112_PRUEBA[".flexibleSearch"] = true;

$tdatapnc9112_PRUEBA[".isUseAjaxSuggest"] = true;

$tdatapnc9112_PRUEBA[".rowHighlite"] = true;





$tdatapnc9112_PRUEBA[".ajaxCodeSnippetAdded"] = false;

$tdatapnc9112_PRUEBA[".buttonsAdded"] = false;

$tdatapnc9112_PRUEBA[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapnc9112_PRUEBA[".isUseTimeForSearch"] = false;





$tdatapnc9112_PRUEBA[".allSearchFields"] = array();
$tdatapnc9112_PRUEBA[".filterFields"] = array();
$tdatapnc9112_PRUEBA[".requiredSearchFields"] = array();

$tdatapnc9112_PRUEBA[".allSearchFields"][] = "tipificacion";
	$tdatapnc9112_PRUEBA[".allSearchFields"][] = "avisos911";
	

$tdatapnc9112_PRUEBA[".googleLikeFields"] = array();
$tdatapnc9112_PRUEBA[".googleLikeFields"][] = "tipificacion";
$tdatapnc9112_PRUEBA[".googleLikeFields"][] = "avisos911";


$tdatapnc9112_PRUEBA[".advSearchFields"] = array();
$tdatapnc9112_PRUEBA[".advSearchFields"][] = "tipificacion";
$tdatapnc9112_PRUEBA[".advSearchFields"][] = "avisos911";

$tdatapnc9112_PRUEBA[".tableType"] = "list";

$tdatapnc9112_PRUEBA[".printerPageOrientation"] = 0;
$tdatapnc9112_PRUEBA[".nPrinterPageScale"] = 100;

$tdatapnc9112_PRUEBA[".nPrinterSplitRecords"] = 40;

$tdatapnc9112_PRUEBA[".nPrinterPDFSplitRecords"] = 40;



$tdatapnc9112_PRUEBA[".geocodingEnabled"] = false;





$tdatapnc9112_PRUEBA[".listGridLayout"] = 3;

$tdatapnc9112_PRUEBA[".isDisplayLoading"] = true;




// view page pdf
$tdatapnc9112_PRUEBA[".isViewPagePDF"] = true;
$tdatapnc9112_PRUEBA[".nViewPagePDFScale"] = 100;

// print page pdf
$tdatapnc9112_PRUEBA[".isPrinterPagePDF"] = true;
$tdatapnc9112_PRUEBA[".nPrinterPagePDFScale"] = 100;


$tdatapnc9112_PRUEBA[".pageSize"] = 10;

$tdatapnc9112_PRUEBA[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapnc9112_PRUEBA[".strOrderBy"] = $tstrOrderBy;

$tdatapnc9112_PRUEBA[".orderindexes"] = array();

$tdatapnc9112_PRUEBA[".sqlHead"] = "SELECT tipificacion,  avisos911";
$tdatapnc9112_PRUEBA[".sqlFrom"] = "FROM pnc911";
$tdatapnc9112_PRUEBA[".sqlWhereExpr"] = "";
$tdatapnc9112_PRUEBA[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapnc9112_PRUEBA[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapnc9112_PRUEBA[".arrGroupsPerPage"] = $arrGPP;

$tdatapnc9112_PRUEBA[".highlightSearchResults"] = true;

$tableKeyspnc9112_PRUEBA = array();
$tdatapnc9112_PRUEBA[".Keys"] = $tableKeyspnc9112_PRUEBA;

$tdatapnc9112_PRUEBA[".listFields"] = array();
$tdatapnc9112_PRUEBA[".listFields"][] = "tipificacion";
$tdatapnc9112_PRUEBA[".listFields"][] = "avisos911";

$tdatapnc9112_PRUEBA[".hideMobileList"] = array();


$tdatapnc9112_PRUEBA[".viewFields"] = array();
$tdatapnc9112_PRUEBA[".viewFields"][] = "tipificacion";
$tdatapnc9112_PRUEBA[".viewFields"][] = "avisos911";

$tdatapnc9112_PRUEBA[".addFields"] = array();
$tdatapnc9112_PRUEBA[".addFields"][] = "tipificacion";
$tdatapnc9112_PRUEBA[".addFields"][] = "avisos911";

$tdatapnc9112_PRUEBA[".masterListFields"] = array();
$tdatapnc9112_PRUEBA[".masterListFields"][] = "tipificacion";
$tdatapnc9112_PRUEBA[".masterListFields"][] = "avisos911";

$tdatapnc9112_PRUEBA[".inlineAddFields"] = array();
$tdatapnc9112_PRUEBA[".inlineAddFields"][] = "tipificacion";
$tdatapnc9112_PRUEBA[".inlineAddFields"][] = "avisos911";

$tdatapnc9112_PRUEBA[".editFields"] = array();
$tdatapnc9112_PRUEBA[".editFields"][] = "tipificacion";
$tdatapnc9112_PRUEBA[".editFields"][] = "avisos911";

$tdatapnc9112_PRUEBA[".inlineEditFields"] = array();
$tdatapnc9112_PRUEBA[".inlineEditFields"][] = "tipificacion";
$tdatapnc9112_PRUEBA[".inlineEditFields"][] = "avisos911";

$tdatapnc9112_PRUEBA[".updateSelectedFields"] = array();
$tdatapnc9112_PRUEBA[".updateSelectedFields"][] = "tipificacion";
$tdatapnc9112_PRUEBA[".updateSelectedFields"][] = "avisos911";


$tdatapnc9112_PRUEBA[".exportFields"] = array();
$tdatapnc9112_PRUEBA[".exportFields"][] = "tipificacion";
$tdatapnc9112_PRUEBA[".exportFields"][] = "avisos911";

$tdatapnc9112_PRUEBA[".importFields"] = array();
$tdatapnc9112_PRUEBA[".importFields"][] = "tipificacion";
$tdatapnc9112_PRUEBA[".importFields"][] = "avisos911";

$tdatapnc9112_PRUEBA[".printFields"] = array();
$tdatapnc9112_PRUEBA[".printFields"][] = "tipificacion";
$tdatapnc9112_PRUEBA[".printFields"][] = "avisos911";

//	tipificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tipificacion";
	$fdata["GoodName"] = "tipificacion";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc9112_PRUEBA","tipificacion");
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

		$fdata["strField"] = "tipificacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipificacion";

	
	
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




	$tdatapnc9112_PRUEBA["tipificacion"] = $fdata;
//	avisos911
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "avisos911";
	$fdata["GoodName"] = "avisos911";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("pnc9112_PRUEBA","avisos911");
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

		$fdata["strField"] = "avisos911";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "avisos911";

	
	
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




	$tdatapnc9112_PRUEBA["avisos911"] = $fdata;


$tables_data["pnc9112 PRUEBA"]=&$tdatapnc9112_PRUEBA;
$field_labels["pnc9112_PRUEBA"] = &$fieldLabelspnc9112_PRUEBA;
$fieldToolTips["pnc9112_PRUEBA"] = &$fieldToolTipspnc9112_PRUEBA;
$placeHolders["pnc9112_PRUEBA"] = &$placeHolderspnc9112_PRUEBA;
$page_titles["pnc9112_PRUEBA"] = &$pageTitlespnc9112_PRUEBA;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pnc9112 PRUEBA"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["pnc9112 PRUEBA"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pnc9112_PRUEBA()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tipificacion,  avisos911";
$proto0["m_strFrom"] = "FROM pnc911";
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
	"m_strName" => "tipificacion",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc9112 PRUEBA"
));

$proto6["m_sql"] = "tipificacion";
$proto6["m_srcTableName"] = "pnc9112 PRUEBA";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "avisos911",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc9112 PRUEBA"
));

$proto8["m_sql"] = "avisos911";
$proto8["m_srcTableName"] = "pnc9112 PRUEBA";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "pnc911";
$proto11["m_srcTableName"] = "pnc9112 PRUEBA";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "tipificacion";
$proto11["m_columns"][] = "direccion_validacion";
$proto11["m_columns"][] = "direccion_libre";
$proto11["m_columns"][] = "coordenadas_x";
$proto11["m_columns"][] = "coordenadas_y";
$proto11["m_columns"][] = "departamento";
$proto11["m_columns"][] = "municipio";
$proto11["m_columns"][] = "ppddsc";
$proto11["m_columns"][] = "meses";
$proto11["m_columns"][] = "avisos911";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "pnc911";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "pnc9112 PRUEBA";
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
												$proto14=array();
						$obj = new SQLField(array(
	"m_strName" => "tipificacion",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc9112 PRUEBA"
));

$proto14["m_column"]=$obj;
$obj = new SQLGroupByItem($proto14);

$proto0["m_groupby"][]=$obj;
												$proto16=array();
						$obj = new SQLField(array(
	"m_strName" => "avisos911",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "pnc9112 PRUEBA"
));

$proto16["m_column"]=$obj;
$obj = new SQLGroupByItem($proto16);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pnc9112 PRUEBA";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pnc9112_PRUEBA = createSqlQuery_pnc9112_PRUEBA();


	
		;

		

$tdatapnc9112_PRUEBA[".sqlquery"] = $queryData_pnc9112_PRUEBA;

$tableEvents["pnc9112 PRUEBA"] = new eventsBase;
$tdatapnc9112_PRUEBA[".hasEvents"] = false;

?>