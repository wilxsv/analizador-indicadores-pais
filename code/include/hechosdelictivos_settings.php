<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahechosdelictivos = array();
	$tdatahechosdelictivos[".truncateText"] = true;
	$tdatahechosdelictivos[".NumberOfChars"] = 80;
	$tdatahechosdelictivos[".ShortName"] = "hechosdelictivos";
	$tdatahechosdelictivos[".OwnerID"] = "";
	$tdatahechosdelictivos[".OriginalTable"] = "hechosdelictivos";

//	field labels
$fieldLabelshechosdelictivos = array();
$fieldToolTipshechosdelictivos = array();
$pageTitleshechosdelictivos = array();
$placeHoldershechosdelictivos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshechosdelictivos["Spanish"] = array();
	$fieldToolTipshechosdelictivos["Spanish"] = array();
	$placeHoldershechosdelictivos["Spanish"] = array();
	$pageTitleshechosdelictivos["Spanish"] = array();
	$fieldLabelshechosdelictivos["Spanish"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipshechosdelictivos["Spanish"]["a_o_hecho"] = "";
	$placeHoldershechosdelictivos["Spanish"]["a_o_hecho"] = "";
	$fieldLabelshechosdelictivos["Spanish"]["mes_corre"] = "Mes Corre";
	$fieldToolTipshechosdelictivos["Spanish"]["mes_corre"] = "";
	$placeHoldershechosdelictivos["Spanish"]["mes_corre"] = "";
	if (count($fieldToolTipshechosdelictivos["Spanish"]))
		$tdatahechosdelictivos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshechosdelictivos["English"] = array();
	$fieldToolTipshechosdelictivos["English"] = array();
	$placeHoldershechosdelictivos["English"] = array();
	$pageTitleshechosdelictivos["English"] = array();
	$fieldLabelshechosdelictivos["English"]["a_o_hecho"] = "AÑo Hecho";
	$fieldToolTipshechosdelictivos["English"]["a_o_hecho"] = "";
	$placeHoldershechosdelictivos["English"]["a_o_hecho"] = "";
	$fieldLabelshechosdelictivos["English"]["mes_corre"] = "Mes Corre";
	$fieldToolTipshechosdelictivos["English"]["mes_corre"] = "";
	$placeHoldershechosdelictivos["English"]["mes_corre"] = "";
	if (count($fieldToolTipshechosdelictivos["English"]))
		$tdatahechosdelictivos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshechosdelictivos[""] = array();
	$fieldToolTipshechosdelictivos[""] = array();
	$placeHoldershechosdelictivos[""] = array();
	$pageTitleshechosdelictivos[""] = array();
	if (count($fieldToolTipshechosdelictivos[""]))
		$tdatahechosdelictivos[".isUseToolTips"] = true;
}





$tdatahechosdelictivos[".shortTableName"] = "hechosdelictivos";
$tdatahechosdelictivos[".nSecOptions"] = 0;
$tdatahechosdelictivos[".recsPerRowPrint"] = 1;
$tdatahechosdelictivos[".mainTableOwnerID"] = "";
$tdatahechosdelictivos[".moveNext"] = 1;
$tdatahechosdelictivos[".entityType"] = 1;

$tdatahechosdelictivos[".strOriginalTableName"] = "hechosdelictivos";

	



$tdatahechosdelictivos[".showAddInPopup"] = false;

$tdatahechosdelictivos[".showEditInPopup"] = false;

$tdatahechosdelictivos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahechosdelictivos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahechosdelictivos[".fieldsForRegister"] = array();

	$tdatahechosdelictivos[".listAjax"] = true;

	$tdatahechosdelictivos[".audit"] = false;

	$tdatahechosdelictivos[".locking"] = false;


$tdatahechosdelictivos[".add"] = true;
$tdatahechosdelictivos[".afterAddAction"] = 1;
$tdatahechosdelictivos[".closePopupAfterAdd"] = 1;
$tdatahechosdelictivos[".afterAddActionDetTable"] = "";

$tdatahechosdelictivos[".list"] = true;



$tdatahechosdelictivos[".reorderRecordsByHeader"] = true;
$tdatahechosdelictivos[".createSortByDropdown"] = true;
$tdatahechosdelictivos[".strSortControlSettingsJSON"] = "";



$tdatahechosdelictivos[".inlineAdd"] = true;

$tdatahechosdelictivos[".import"] = true;

$tdatahechosdelictivos[".exportTo"] = true;

$tdatahechosdelictivos[".printFriendly"] = true;


$tdatahechosdelictivos[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatahechosdelictivos[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatahechosdelictivos[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatahechosdelictivos[".searchSaving"] = false;
//

$tdatahechosdelictivos[".showSearchPanel"] = true;
		$tdatahechosdelictivos[".flexibleSearch"] = true;

$tdatahechosdelictivos[".isUseAjaxSuggest"] = true;

$tdatahechosdelictivos[".rowHighlite"] = true;





$tdatahechosdelictivos[".ajaxCodeSnippetAdded"] = false;

$tdatahechosdelictivos[".buttonsAdded"] = false;

$tdatahechosdelictivos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahechosdelictivos[".isUseTimeForSearch"] = false;





$tdatahechosdelictivos[".allSearchFields"] = array();
$tdatahechosdelictivos[".filterFields"] = array();
$tdatahechosdelictivos[".requiredSearchFields"] = array();

$tdatahechosdelictivos[".allSearchFields"][] = "aÑo_hecho";
	$tdatahechosdelictivos[".allSearchFields"][] = "mes_corre";
	

$tdatahechosdelictivos[".googleLikeFields"] = array();
$tdatahechosdelictivos[".googleLikeFields"][] = "aÑo_hecho";
$tdatahechosdelictivos[".googleLikeFields"][] = "mes_corre";


$tdatahechosdelictivos[".advSearchFields"] = array();
$tdatahechosdelictivos[".advSearchFields"][] = "aÑo_hecho";
$tdatahechosdelictivos[".advSearchFields"][] = "mes_corre";

$tdatahechosdelictivos[".tableType"] = "list";

$tdatahechosdelictivos[".printerPageOrientation"] = 0;
$tdatahechosdelictivos[".nPrinterPageScale"] = 100;

$tdatahechosdelictivos[".nPrinterSplitRecords"] = 40;

$tdatahechosdelictivos[".nPrinterPDFSplitRecords"] = 40;



$tdatahechosdelictivos[".geocodingEnabled"] = false;





$tdatahechosdelictivos[".listGridLayout"] = 3;

$tdatahechosdelictivos[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatahechosdelictivos[".pageSize"] = 10;

$tdatahechosdelictivos[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `aÑo_hecho` DESC, mes_corre";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahechosdelictivos[".strOrderBy"] = $tstrOrderBy;

$tdatahechosdelictivos[".orderindexes"] = array();
$tdatahechosdelictivos[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`aÑo_hecho`");
$tdatahechosdelictivos[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "mes_corre");

$tdatahechosdelictivos[".sqlHead"] = "SELECT `aÑo_hecho`,  mes_corre";
$tdatahechosdelictivos[".sqlFrom"] = "FROM hechos_delictivos1";
$tdatahechosdelictivos[".sqlWhereExpr"] = "`aÑo_hecho` =2016";
$tdatahechosdelictivos[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahechosdelictivos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahechosdelictivos[".arrGroupsPerPage"] = $arrGPP;

$tdatahechosdelictivos[".highlightSearchResults"] = true;

$tableKeyshechosdelictivos = array();
$tdatahechosdelictivos[".Keys"] = $tableKeyshechosdelictivos;

$tdatahechosdelictivos[".listFields"] = array();
$tdatahechosdelictivos[".listFields"][] = "aÑo_hecho";
$tdatahechosdelictivos[".listFields"][] = "mes_corre";

$tdatahechosdelictivos[".hideMobileList"] = array();


$tdatahechosdelictivos[".viewFields"] = array();
$tdatahechosdelictivos[".viewFields"][] = "aÑo_hecho";
$tdatahechosdelictivos[".viewFields"][] = "mes_corre";

$tdatahechosdelictivos[".addFields"] = array();
$tdatahechosdelictivos[".addFields"][] = "aÑo_hecho";

$tdatahechosdelictivos[".masterListFields"] = array();
$tdatahechosdelictivos[".masterListFields"][] = "aÑo_hecho";
$tdatahechosdelictivos[".masterListFields"][] = "mes_corre";

$tdatahechosdelictivos[".inlineAddFields"] = array();
$tdatahechosdelictivos[".inlineAddFields"][] = "aÑo_hecho";

$tdatahechosdelictivos[".editFields"] = array();
$tdatahechosdelictivos[".editFields"][] = "aÑo_hecho";

$tdatahechosdelictivos[".inlineEditFields"] = array();
$tdatahechosdelictivos[".inlineEditFields"][] = "aÑo_hecho";

$tdatahechosdelictivos[".updateSelectedFields"] = array();
$tdatahechosdelictivos[".updateSelectedFields"][] = "aÑo_hecho";


$tdatahechosdelictivos[".exportFields"] = array();
$tdatahechosdelictivos[".exportFields"][] = "aÑo_hecho";
$tdatahechosdelictivos[".exportFields"][] = "mes_corre";

$tdatahechosdelictivos[".importFields"] = array();
$tdatahechosdelictivos[".importFields"][] = "aÑo_hecho";
$tdatahechosdelictivos[".importFields"][] = "mes_corre";

$tdatahechosdelictivos[".printFields"] = array();
$tdatahechosdelictivos[".printFields"][] = "aÑo_hecho";
$tdatahechosdelictivos[".printFields"][] = "mes_corre";

//	aÑo_hecho
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "aÑo_hecho";
	$fdata["GoodName"] = "a_o_hecho";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos","a_o_hecho");
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

		$fdata["strField"] = "aÑo_hecho";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`aÑo_hecho`";

	
	
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




	$tdatahechosdelictivos["aÑo_hecho"] = $fdata;
//	mes_corre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "mes_corre";
	$fdata["GoodName"] = "mes_corre";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechosdelictivos","mes_corre");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mes_corre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mes_corre";

	
	
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




	$tdatahechosdelictivos["mes_corre"] = $fdata;


$tables_data["hechosdelictivos"]=&$tdatahechosdelictivos;
$field_labels["hechosdelictivos"] = &$fieldLabelshechosdelictivos;
$fieldToolTips["hechosdelictivos"] = &$fieldToolTipshechosdelictivos;
$placeHolders["hechosdelictivos"] = &$placeHoldershechosdelictivos;
$page_titles["hechosdelictivos"] = &$pageTitleshechosdelictivos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hechosdelictivos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hechosdelictivos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hechosdelictivos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`aÑo_hecho`,  mes_corre";
$proto0["m_strFrom"] = "FROM hechos_delictivos1";
$proto0["m_strWhere"] = "`aÑo_hecho` =2016";
$proto0["m_strOrderBy"] = "ORDER BY `aÑo_hecho` DESC, mes_corre";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`aÑo_hecho` =2016";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechosdelictivos"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=2016";
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
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechosdelictivos"
));

$proto6["m_sql"] = "`aÑo_hecho`";
$proto6["m_srcTableName"] = "hechosdelictivos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "mes_corre",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechosdelictivos"
));

$proto8["m_sql"] = "mes_corre";
$proto8["m_srcTableName"] = "hechosdelictivos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "hechos_delictivos1";
$proto11["m_srcTableName"] = "hechosdelictivos";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id1";
$proto11["m_columns"][] = "id11";
$proto11["m_columns"][] = "correlativo";
$proto11["m_columns"][] = "numero";
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "numero2";
$proto11["m_columns"][] = "lugaranalisis";
$proto11["m_columns"][] = "area";
$proto11["m_columns"][] = "delito";
$proto11["m_columns"][] = "codigo_muni";
$proto11["m_columns"][] = "depart_he";
$proto11["m_columns"][] = "muni_he";
$proto11["m_columns"][] = "dire_hecho";
$proto11["m_columns"][] = "lugar_esp";
$proto11["m_columns"][] = "forma_cono";
$proto11["m_columns"][] = "delito_espe";
$proto11["m_columns"][] = "dia_hecho";
$proto11["m_columns"][] = "hora_hecho";
$proto11["m_columns"][] = "rango_hora";
$proto11["m_columns"][] = "fecha_hecho";
$proto11["m_columns"][] = "mes_hecho";
$proto11["m_columns"][] = "aÑo_hecho";
$proto11["m_columns"][] = "edad_victima";
$proto11["m_columns"][] = "ran_eta_vic";
$proto11["m_columns"][] = "s_victima";
$proto11["m_columns"][] = "oc_victima";
$proto11["m_columns"][] = "relacion_vi_agre";
$proto11["m_columns"][] = "edad_agresor";
$proto11["m_columns"][] = "sexo_agresor";
$proto11["m_columns"][] = "ocupa_agresor";
$proto11["m_columns"][] = "movil";
$proto11["m_columns"][] = "tipo_arma";
$proto11["m_columns"][] = "canton_hecho";
$proto11["m_columns"][] = "colonia_hecho";
$proto11["m_columns"][] = "caserio_hecho";
$proto11["m_columns"][] = "calle_hecho";
$proto11["m_columns"][] = "avenida_hecho";
$proto11["m_columns"][] = "casa_hecho";
$proto11["m_columns"][] = "com_hecho";
$proto11["m_columns"][] = "barrio_hecho";
$proto11["m_columns"][] = "comp_hecho";
$proto11["m_columns"][] = "sector_ppd";
$proto11["m_columns"][] = "tipo";
$proto11["m_columns"][] = "nombre";
$proto11["m_columns"][] = "x";
$proto11["m_columns"][] = "y";
$proto11["m_columns"][] = "correlativo1";
$proto11["m_columns"][] = "mes_corre";
$proto11["m_columns"][] = "arma_analisis";
$proto11["m_columns"][] = "movil_he";
$proto11["m_columns"][] = "ocupa_analisis";
$proto11["m_columns"][] = "rel_vic_ag_anali";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "hechos_delictivos1";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "hechosdelictivos";
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
	"m_strName" => "aÑo_hecho",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechosdelictivos"
));

$proto14["m_column"]=$obj;
$proto14["m_bAsc"] = 0;
$proto14["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto14);

$proto0["m_orderby"][]=$obj;					
												$proto16=array();
						$obj = new SQLField(array(
	"m_strName" => "mes_corre",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechosdelictivos"
));

$proto16["m_column"]=$obj;
$proto16["m_bAsc"] = 1;
$proto16["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto16);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="hechosdelictivos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hechosdelictivos = createSqlQuery_hechosdelictivos();


	
		;

		

$tdatahechosdelictivos[".sqlquery"] = $queryData_hechosdelictivos;

$tableEvents["hechosdelictivos"] = new eventsBase;
$tdatahechosdelictivos[".hasEvents"] = false;

?>