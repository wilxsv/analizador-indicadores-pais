<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMunicipios = array();
	$tdataMunicipios[".truncateText"] = true;
	$tdataMunicipios[".NumberOfChars"] = 80;
	$tdataMunicipios[".ShortName"] = "Municipios";
	$tdataMunicipios[".OwnerID"] = "";
	$tdataMunicipios[".OriginalTable"] = "pnc911";

//	field labels
$fieldLabelsMunicipios = array();
$fieldToolTipsMunicipios = array();
$pageTitlesMunicipios = array();
$placeHoldersMunicipios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsMunicipios["Spanish"] = array();
	$fieldToolTipsMunicipios["Spanish"] = array();
	$placeHoldersMunicipios["Spanish"] = array();
	$pageTitlesMunicipios["Spanish"] = array();
	$fieldLabelsMunicipios["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsMunicipios["Spanish"]["departamento"] = "";
	$placeHoldersMunicipios["Spanish"]["departamento"] = "";
	$fieldLabelsMunicipios["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsMunicipios["Spanish"]["municipio"] = "";
	$placeHoldersMunicipios["Spanish"]["municipio"] = "";
	if (count($fieldToolTipsMunicipios["Spanish"]))
		$tdataMunicipios[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMunicipios["English"] = array();
	$fieldToolTipsMunicipios["English"] = array();
	$placeHoldersMunicipios["English"] = array();
	$pageTitlesMunicipios["English"] = array();
	$fieldLabelsMunicipios["English"]["departamento"] = "Departamento";
	$fieldToolTipsMunicipios["English"]["departamento"] = "";
	$placeHoldersMunicipios["English"]["departamento"] = "";
	$fieldLabelsMunicipios["English"]["municipio"] = "Municipio";
	$fieldToolTipsMunicipios["English"]["municipio"] = "";
	$placeHoldersMunicipios["English"]["municipio"] = "";
	if (count($fieldToolTipsMunicipios["English"]))
		$tdataMunicipios[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMunicipios[""] = array();
	$fieldToolTipsMunicipios[""] = array();
	$placeHoldersMunicipios[""] = array();
	$pageTitlesMunicipios[""] = array();
	if (count($fieldToolTipsMunicipios[""]))
		$tdataMunicipios[".isUseToolTips"] = true;
}





$tdataMunicipios[".shortTableName"] = "Municipios";
$tdataMunicipios[".nSecOptions"] = 0;
$tdataMunicipios[".recsPerRowPrint"] = 1;
$tdataMunicipios[".mainTableOwnerID"] = "";
$tdataMunicipios[".moveNext"] = 1;
$tdataMunicipios[".entityType"] = 1;

$tdataMunicipios[".strOriginalTableName"] = "pnc911";

	



$tdataMunicipios[".showAddInPopup"] = false;

$tdataMunicipios[".showEditInPopup"] = false;

$tdataMunicipios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMunicipios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMunicipios[".fieldsForRegister"] = array();

	$tdataMunicipios[".listAjax"] = true;

	$tdataMunicipios[".audit"] = false;

	$tdataMunicipios[".locking"] = false;


$tdataMunicipios[".add"] = true;
$tdataMunicipios[".afterAddAction"] = 1;
$tdataMunicipios[".closePopupAfterAdd"] = 1;
$tdataMunicipios[".afterAddActionDetTable"] = "";

$tdataMunicipios[".list"] = true;



$tdataMunicipios[".reorderRecordsByHeader"] = true;
$tdataMunicipios[".createSortByDropdown"] = true;
$tdataMunicipios[".strSortControlSettingsJSON"] = "";



$tdataMunicipios[".inlineAdd"] = true;

$tdataMunicipios[".import"] = true;

$tdataMunicipios[".exportTo"] = true;

$tdataMunicipios[".printFriendly"] = true;


$tdataMunicipios[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataMunicipios[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataMunicipios[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataMunicipios[".searchSaving"] = false;
//

$tdataMunicipios[".showSearchPanel"] = true;
		$tdataMunicipios[".flexibleSearch"] = true;

$tdataMunicipios[".isUseAjaxSuggest"] = true;

$tdataMunicipios[".rowHighlite"] = true;





$tdataMunicipios[".ajaxCodeSnippetAdded"] = false;

$tdataMunicipios[".buttonsAdded"] = false;

$tdataMunicipios[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMunicipios[".isUseTimeForSearch"] = false;





$tdataMunicipios[".allSearchFields"] = array();
$tdataMunicipios[".filterFields"] = array();
$tdataMunicipios[".requiredSearchFields"] = array();

$tdataMunicipios[".allSearchFields"][] = "municipio";
	$tdataMunicipios[".allSearchFields"][] = "departamento";
	

$tdataMunicipios[".googleLikeFields"] = array();
$tdataMunicipios[".googleLikeFields"][] = "municipio";
$tdataMunicipios[".googleLikeFields"][] = "departamento";


$tdataMunicipios[".advSearchFields"] = array();
$tdataMunicipios[".advSearchFields"][] = "municipio";
$tdataMunicipios[".advSearchFields"][] = "departamento";

$tdataMunicipios[".tableType"] = "list";

$tdataMunicipios[".printerPageOrientation"] = 0;
$tdataMunicipios[".nPrinterPageScale"] = 100;

$tdataMunicipios[".nPrinterSplitRecords"] = 40;

$tdataMunicipios[".nPrinterPDFSplitRecords"] = 40;



$tdataMunicipios[".geocodingEnabled"] = false;





$tdataMunicipios[".listGridLayout"] = 3;

$tdataMunicipios[".isDisplayLoading"] = true;




// view page pdf
$tdataMunicipios[".isViewPagePDF"] = true;
$tdataMunicipios[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataMunicipios[".isPrinterPagePDF"] = true;
$tdataMunicipios[".nPrinterPagePDFScale"] = 100;


$tdataMunicipios[".pageSize"] = 10;

$tdataMunicipios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMunicipios[".strOrderBy"] = $tstrOrderBy;

$tdataMunicipios[".orderindexes"] = array();

$tdataMunicipios[".sqlHead"] = "SELECT municipio,  departamento";
$tdataMunicipios[".sqlFrom"] = "FROM pnc911";
$tdataMunicipios[".sqlWhereExpr"] = "";
$tdataMunicipios[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMunicipios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMunicipios[".arrGroupsPerPage"] = $arrGPP;

$tdataMunicipios[".highlightSearchResults"] = true;

$tableKeysMunicipios = array();
$tdataMunicipios[".Keys"] = $tableKeysMunicipios;

$tdataMunicipios[".listFields"] = array();
$tdataMunicipios[".listFields"][] = "municipio";
$tdataMunicipios[".listFields"][] = "departamento";

$tdataMunicipios[".hideMobileList"] = array();


$tdataMunicipios[".viewFields"] = array();
$tdataMunicipios[".viewFields"][] = "municipio";
$tdataMunicipios[".viewFields"][] = "departamento";

$tdataMunicipios[".addFields"] = array();
$tdataMunicipios[".addFields"][] = "municipio";
$tdataMunicipios[".addFields"][] = "departamento";

$tdataMunicipios[".masterListFields"] = array();
$tdataMunicipios[".masterListFields"][] = "municipio";
$tdataMunicipios[".masterListFields"][] = "departamento";

$tdataMunicipios[".inlineAddFields"] = array();
$tdataMunicipios[".inlineAddFields"][] = "municipio";
$tdataMunicipios[".inlineAddFields"][] = "departamento";

$tdataMunicipios[".editFields"] = array();
$tdataMunicipios[".editFields"][] = "municipio";
$tdataMunicipios[".editFields"][] = "departamento";

$tdataMunicipios[".inlineEditFields"] = array();
$tdataMunicipios[".inlineEditFields"][] = "municipio";
$tdataMunicipios[".inlineEditFields"][] = "departamento";

$tdataMunicipios[".updateSelectedFields"] = array();
$tdataMunicipios[".updateSelectedFields"][] = "municipio";
$tdataMunicipios[".updateSelectedFields"][] = "departamento";


$tdataMunicipios[".exportFields"] = array();
$tdataMunicipios[".exportFields"][] = "municipio";
$tdataMunicipios[".exportFields"][] = "departamento";

$tdataMunicipios[".importFields"] = array();
$tdataMunicipios[".importFields"][] = "municipio";
$tdataMunicipios[".importFields"][] = "departamento";

$tdataMunicipios[".printFields"] = array();
$tdataMunicipios[".printFields"][] = "municipio";
$tdataMunicipios[".printFields"][] = "departamento";

//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("Municipios","municipio");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataMunicipios["municipio"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "pnc911";
	$fdata["Label"] = GetFieldLabel("Municipios","departamento");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataMunicipios["departamento"] = $fdata;


$tables_data["Municipios"]=&$tdataMunicipios;
$field_labels["Municipios"] = &$fieldLabelsMunicipios;
$fieldToolTips["Municipios"] = &$fieldToolTipsMunicipios;
$placeHolders["Municipios"] = &$placeHoldersMunicipios;
$page_titles["Municipios"] = &$pageTitlesMunicipios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Municipios"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Municipios"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Municipios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "municipio,  departamento";
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
	"m_strName" => "municipio",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "Municipios"
));

$proto6["m_sql"] = "municipio";
$proto6["m_srcTableName"] = "Municipios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "Municipios"
));

$proto8["m_sql"] = "departamento";
$proto8["m_srcTableName"] = "Municipios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "pnc911";
$proto11["m_srcTableName"] = "Municipios";
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
$proto10["m_srcTableName"] = "Municipios";
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
	"m_strName" => "municipio",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "Municipios"
));

$proto14["m_column"]=$obj;
$obj = new SQLGroupByItem($proto14);

$proto0["m_groupby"][]=$obj;
												$proto16=array();
						$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "pnc911",
	"m_srcTableName" => "Municipios"
));

$proto16["m_column"]=$obj;
$obj = new SQLGroupByItem($proto16);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Municipios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Municipios = createSqlQuery_Municipios();


	
		;

		

$tdataMunicipios[".sqlquery"] = $queryData_Municipios;

$tableEvents["Municipios"] = new eventsBase;
$tdataMunicipios[".hasEvents"] = false;

?>