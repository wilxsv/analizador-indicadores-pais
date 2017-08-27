<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamined_maximo_valor = array();
	$tdatamined_maximo_valor[".truncateText"] = true;
	$tdatamined_maximo_valor[".NumberOfChars"] = 80;
	$tdatamined_maximo_valor[".ShortName"] = "mined_maximo_valor";
	$tdatamined_maximo_valor[".OwnerID"] = "";
	$tdatamined_maximo_valor[".OriginalTable"] = "mined";

//	field labels
$fieldLabelsmined_maximo_valor = array();
$fieldToolTipsmined_maximo_valor = array();
$pageTitlesmined_maximo_valor = array();
$placeHoldersmined_maximo_valor = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmined_maximo_valor["Spanish"] = array();
	$fieldToolTipsmined_maximo_valor["Spanish"] = array();
	$placeHoldersmined_maximo_valor["Spanish"] = array();
	$pageTitlesmined_maximo_valor["Spanish"] = array();
	$fieldLabelsmined_maximo_valor["Spanish"]["MAX_ipce_naive_"] = "MAX(ipce Naive)";
	$fieldToolTipsmined_maximo_valor["Spanish"]["MAX_ipce_naive_"] = "";
	$placeHoldersmined_maximo_valor["Spanish"]["MAX_ipce_naive_"] = "";
	$fieldLabelsmined_maximo_valor["Spanish"]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipsmined_maximo_valor["Spanish"]["ipce_naive"] = "";
	$placeHoldersmined_maximo_valor["Spanish"]["ipce_naive"] = "";
	if (count($fieldToolTipsmined_maximo_valor["Spanish"]))
		$tdatamined_maximo_valor[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmined_maximo_valor["English"] = array();
	$fieldToolTipsmined_maximo_valor["English"] = array();
	$placeHoldersmined_maximo_valor["English"] = array();
	$pageTitlesmined_maximo_valor["English"] = array();
	$fieldLabelsmined_maximo_valor["English"]["MAX_ipce_naive_"] = "MAX(ipce Naive)";
	$fieldToolTipsmined_maximo_valor["English"]["MAX_ipce_naive_"] = "";
	$placeHoldersmined_maximo_valor["English"]["MAX_ipce_naive_"] = "";
	$fieldLabelsmined_maximo_valor["English"]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipsmined_maximo_valor["English"]["ipce_naive"] = "";
	$placeHoldersmined_maximo_valor["English"]["ipce_naive"] = "";
	if (count($fieldToolTipsmined_maximo_valor["English"]))
		$tdatamined_maximo_valor[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmined_maximo_valor[""] = array();
	$fieldToolTipsmined_maximo_valor[""] = array();
	$placeHoldersmined_maximo_valor[""] = array();
	$pageTitlesmined_maximo_valor[""] = array();
	$fieldLabelsmined_maximo_valor[""]["MAX_ipce_naive_"] = "MAX(ipce Naive)";
	$fieldToolTipsmined_maximo_valor[""]["MAX_ipce_naive_"] = "";
	$placeHoldersmined_maximo_valor[""]["MAX_ipce_naive_"] = "";
	$fieldLabelsmined_maximo_valor[""]["ipce_naive"] = "Ipce Naive";
	$fieldToolTipsmined_maximo_valor[""]["ipce_naive"] = "";
	$placeHoldersmined_maximo_valor[""]["ipce_naive"] = "";
	if (count($fieldToolTipsmined_maximo_valor[""]))
		$tdatamined_maximo_valor[".isUseToolTips"] = true;
}


	$tdatamined_maximo_valor[".NCSearch"] = true;



$tdatamined_maximo_valor[".shortTableName"] = "mined_maximo_valor";
$tdatamined_maximo_valor[".nSecOptions"] = 0;
$tdatamined_maximo_valor[".recsPerRowPrint"] = 1;
$tdatamined_maximo_valor[".mainTableOwnerID"] = "";
$tdatamined_maximo_valor[".moveNext"] = 1;
$tdatamined_maximo_valor[".entityType"] = 1;

$tdatamined_maximo_valor[".strOriginalTableName"] = "mined";

	



$tdatamined_maximo_valor[".showAddInPopup"] = false;

$tdatamined_maximo_valor[".showEditInPopup"] = false;

$tdatamined_maximo_valor[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamined_maximo_valor[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamined_maximo_valor[".fieldsForRegister"] = array();

	$tdatamined_maximo_valor[".listAjax"] = true;

	$tdatamined_maximo_valor[".audit"] = false;

	$tdatamined_maximo_valor[".locking"] = false;



$tdatamined_maximo_valor[".list"] = true;



$tdatamined_maximo_valor[".reorderRecordsByHeader"] = true;
$tdatamined_maximo_valor[".createSortByDropdown"] = true;
$tdatamined_maximo_valor[".strSortControlSettingsJSON"] = "";




$tdatamined_maximo_valor[".import"] = true;

$tdatamined_maximo_valor[".exportTo"] = true;

$tdatamined_maximo_valor[".printFriendly"] = true;


$tdatamined_maximo_valor[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamined_maximo_valor[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamined_maximo_valor[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamined_maximo_valor[".searchSaving"] = false;
//

$tdatamined_maximo_valor[".showSearchPanel"] = true;
		$tdatamined_maximo_valor[".flexibleSearch"] = true;

$tdatamined_maximo_valor[".isUseAjaxSuggest"] = true;

$tdatamined_maximo_valor[".rowHighlite"] = true;





$tdatamined_maximo_valor[".ajaxCodeSnippetAdded"] = false;

$tdatamined_maximo_valor[".buttonsAdded"] = false;

$tdatamined_maximo_valor[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamined_maximo_valor[".isUseTimeForSearch"] = false;



$tdatamined_maximo_valor[".badgeColor"] = "EDCA00";


$tdatamined_maximo_valor[".allSearchFields"] = array();
$tdatamined_maximo_valor[".filterFields"] = array();
$tdatamined_maximo_valor[".requiredSearchFields"] = array();

$tdatamined_maximo_valor[".allSearchFields"][] = "MAX(ipce_naive)";
	$tdatamined_maximo_valor[".allSearchFields"][] = "ipce_naive";
	

$tdatamined_maximo_valor[".googleLikeFields"] = array();
$tdatamined_maximo_valor[".googleLikeFields"][] = "MAX(ipce_naive)";
$tdatamined_maximo_valor[".googleLikeFields"][] = "ipce_naive";


$tdatamined_maximo_valor[".advSearchFields"] = array();
$tdatamined_maximo_valor[".advSearchFields"][] = "MAX(ipce_naive)";
$tdatamined_maximo_valor[".advSearchFields"][] = "ipce_naive";

$tdatamined_maximo_valor[".tableType"] = "list";

$tdatamined_maximo_valor[".printerPageOrientation"] = 0;
$tdatamined_maximo_valor[".nPrinterPageScale"] = 100;

$tdatamined_maximo_valor[".nPrinterSplitRecords"] = 40;

$tdatamined_maximo_valor[".nPrinterPDFSplitRecords"] = 40;



$tdatamined_maximo_valor[".geocodingEnabled"] = false;





$tdatamined_maximo_valor[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamined_maximo_valor[".pageSize"] = 20;

$tdatamined_maximo_valor[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY ipce_naive DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamined_maximo_valor[".strOrderBy"] = $tstrOrderBy;

$tdatamined_maximo_valor[".orderindexes"] = array();
$tdatamined_maximo_valor[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "ipce_naive");

$tdatamined_maximo_valor[".sqlHead"] = "SELECT MAX(ipce_naive) AS `MAX(ipce_naive)`,  ipce_naive AS ipce_naive";
$tdatamined_maximo_valor[".sqlFrom"] = "FROM mined";
$tdatamined_maximo_valor[".sqlWhereExpr"] = "";
$tdatamined_maximo_valor[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamined_maximo_valor[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamined_maximo_valor[".arrGroupsPerPage"] = $arrGPP;

$tdatamined_maximo_valor[".highlightSearchResults"] = true;

$tableKeysmined_maximo_valor = array();
$tdatamined_maximo_valor[".Keys"] = $tableKeysmined_maximo_valor;

$tdatamined_maximo_valor[".listFields"] = array();
$tdatamined_maximo_valor[".listFields"][] = "MAX(ipce_naive)";
$tdatamined_maximo_valor[".listFields"][] = "ipce_naive";

$tdatamined_maximo_valor[".hideMobileList"] = array();


$tdatamined_maximo_valor[".viewFields"] = array();
$tdatamined_maximo_valor[".viewFields"][] = "MAX(ipce_naive)";
$tdatamined_maximo_valor[".viewFields"][] = "ipce_naive";

$tdatamined_maximo_valor[".addFields"] = array();
$tdatamined_maximo_valor[".addFields"][] = "ipce_naive";

$tdatamined_maximo_valor[".masterListFields"] = array();
$tdatamined_maximo_valor[".masterListFields"][] = "MAX(ipce_naive)";
$tdatamined_maximo_valor[".masterListFields"][] = "ipce_naive";

$tdatamined_maximo_valor[".inlineAddFields"] = array();
$tdatamined_maximo_valor[".inlineAddFields"][] = "ipce_naive";

$tdatamined_maximo_valor[".editFields"] = array();
$tdatamined_maximo_valor[".editFields"][] = "ipce_naive";

$tdatamined_maximo_valor[".inlineEditFields"] = array();
$tdatamined_maximo_valor[".inlineEditFields"][] = "ipce_naive";

$tdatamined_maximo_valor[".updateSelectedFields"] = array();
$tdatamined_maximo_valor[".updateSelectedFields"][] = "ipce_naive";


$tdatamined_maximo_valor[".exportFields"] = array();
$tdatamined_maximo_valor[".exportFields"][] = "MAX(ipce_naive)";
$tdatamined_maximo_valor[".exportFields"][] = "ipce_naive";

$tdatamined_maximo_valor[".importFields"] = array();
$tdatamined_maximo_valor[".importFields"][] = "MAX(ipce_naive)";
$tdatamined_maximo_valor[".importFields"][] = "ipce_naive";

$tdatamined_maximo_valor[".printFields"] = array();
$tdatamined_maximo_valor[".printFields"][] = "MAX(ipce_naive)";
$tdatamined_maximo_valor[".printFields"][] = "ipce_naive";

//	MAX(ipce_naive)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MAX(ipce_naive)";
	$fdata["GoodName"] = "MAX_ipce_naive_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("mined_maximo_valor","MAX_ipce_naive_");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MAX(ipce_naive)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(ipce_naive)";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined_maximo_valor["MAX(ipce_naive)"] = $fdata;
//	ipce_naive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ipce_naive";
	$fdata["GoodName"] = "ipce_naive";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined_maximo_valor","ipce_naive");
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

		$fdata["strField"] = "ipce_naive";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ipce_naive";

	
	
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




	$tdatamined_maximo_valor["ipce_naive"] = $fdata;


$tables_data["mined maximo valor"]=&$tdatamined_maximo_valor;
$field_labels["mined_maximo_valor"] = &$fieldLabelsmined_maximo_valor;
$fieldToolTips["mined_maximo_valor"] = &$fieldToolTipsmined_maximo_valor;
$placeHolders["mined_maximo_valor"] = &$placeHoldersmined_maximo_valor;
$page_titles["mined_maximo_valor"] = &$pageTitlesmined_maximo_valor;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mined maximo valor"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mined maximo valor"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mined_maximo_valor()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MAX(ipce_naive) AS `MAX(ipce_naive)`,  ipce_naive AS ipce_naive";
$proto0["m_strFrom"] = "FROM mined";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY ipce_naive DESC";
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
			$proto7=array();
$proto7["m_functiontype"] = "SQLF_MAX";
$proto7["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "ipce_naive",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined maximo valor"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto7);

$proto6["m_sql"] = "MAX(ipce_naive)";
$proto6["m_srcTableName"] = "mined maximo valor";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "MAX(ipce_naive)";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ipce_naive",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined maximo valor"
));

$proto9["m_sql"] = "ipce_naive";
$proto9["m_srcTableName"] = "mined maximo valor";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "ipce_naive";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "mined";
$proto12["m_srcTableName"] = "mined maximo valor";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "idderespuesta";
$proto12["m_columns"][] = "codigo";
$proto12["m_columns"][] = "depto";
$proto12["m_columns"][] = "departamento";
$proto12["m_columns"][] = "mun";
$proto12["m_columns"][] = "municipio";
$proto12["m_columns"][] = "nombre_c_e";
$proto12["m_columns"][] = "x";
$proto12["m_columns"][] = "y";
$proto12["m_columns"][] = "sector_ppd";
$proto12["m_columns"][] = "matricula_inicial";
$proto12["m_columns"][] = "matricula_final";
$proto12["m_columns"][] = "maras";
$proto12["m_columns"][] = "robos";
$proto12["m_columns"][] = "hurtos";
$proto12["m_columns"][] = "drogas";
$proto12["m_columns"][] = "violaciones";
$proto12["m_columns"][] = "pab";
$proto12["m_columns"][] = "paf";
$proto12["m_columns"][] = "escasos_recursos";
$proto12["m_columns"][] = "incorpo_actividades_prod";
$proto12["m_columns"][] = "lejania_ce";
$proto12["m_columns"][] = "violencia_pandilleril";
$proto12["m_columns"][] = "embarazo";
$proto12["m_columns"][] = "acoso";
$proto12["m_columns"][] = "violacion_sexual";
$proto12["m_columns"][] = "cambio_domicilio";
$proto12["m_columns"][] = "migracion";
$proto12["m_columns"][] = "bajo_rendimiento";
$proto12["m_columns"][] = "enfermedad";
$proto12["m_columns"][] = "prostitucion";
$proto12["m_columns"][] = "dep_mun";
$proto12["m_columns"][] = "max_matric2016";
$proto12["m_columns"][] = "mrf2016";
$proto12["m_columns"][] = "pab_af";
$proto12["m_columns"][] = "r_h";
$proto12["m_columns"][] = "ipce_naive";
$proto12["m_columns"][] = "ipce_0_1";
$proto12["m_columns"][] = "aÑo";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "mined";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "mined maximo valor";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto15=array();
						$obj = new SQLField(array(
	"m_strName" => "ipce_naive",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined maximo valor"
));

$proto15["m_column"]=$obj;
$proto15["m_bAsc"] = 0;
$proto15["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto15);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mined maximo valor";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mined_maximo_valor = createSqlQuery_mined_maximo_valor();


	
		;

		

$tdatamined_maximo_valor[".sqlquery"] = $queryData_mined_maximo_valor;

$tableEvents["mined maximo valor"] = new eventsBase;
$tdatamined_maximo_valor[".hasEvents"] = false;

?>