<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDelitos_especificos = array();
	$tdataDelitos_especificos[".truncateText"] = true;
	$tdataDelitos_especificos[".NumberOfChars"] = 80;
	$tdataDelitos_especificos[".ShortName"] = "Delitos_especificos";
	$tdataDelitos_especificos[".OwnerID"] = "";
	$tdataDelitos_especificos[".OriginalTable"] = "hechos_delictivos";

//	field labels
$fieldLabelsDelitos_especificos = array();
$fieldToolTipsDelitos_especificos = array();
$pageTitlesDelitos_especificos = array();
$placeHoldersDelitos_especificos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsDelitos_especificos["Spanish"] = array();
	$fieldToolTipsDelitos_especificos["Spanish"] = array();
	$placeHoldersDelitos_especificos["Spanish"] = array();
	$pageTitlesDelitos_especificos["Spanish"] = array();
	$fieldLabelsDelitos_especificos["Spanish"]["lugaranalisis"] = "Lugaranalisis";
	$fieldToolTipsDelitos_especificos["Spanish"]["lugaranalisis"] = "";
	$placeHoldersDelitos_especificos["Spanish"]["lugaranalisis"] = "";
	$fieldLabelsDelitos_especificos["Spanish"]["lugar_esp"] = "Lugar Esp";
	$fieldToolTipsDelitos_especificos["Spanish"]["lugar_esp"] = "";
	$placeHoldersDelitos_especificos["Spanish"]["lugar_esp"] = "";
	if (count($fieldToolTipsDelitos_especificos["Spanish"]))
		$tdataDelitos_especificos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDelitos_especificos["English"] = array();
	$fieldToolTipsDelitos_especificos["English"] = array();
	$placeHoldersDelitos_especificos["English"] = array();
	$pageTitlesDelitos_especificos["English"] = array();
	$fieldLabelsDelitos_especificos["English"]["lugaranalisis"] = "Lugaranalisis";
	$fieldToolTipsDelitos_especificos["English"]["lugaranalisis"] = "";
	$placeHoldersDelitos_especificos["English"]["lugaranalisis"] = "";
	$fieldLabelsDelitos_especificos["English"]["lugar_esp"] = "Lugar Esp";
	$fieldToolTipsDelitos_especificos["English"]["lugar_esp"] = "";
	$placeHoldersDelitos_especificos["English"]["lugar_esp"] = "";
	if (count($fieldToolTipsDelitos_especificos["English"]))
		$tdataDelitos_especificos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDelitos_especificos[""] = array();
	$fieldToolTipsDelitos_especificos[""] = array();
	$placeHoldersDelitos_especificos[""] = array();
	$pageTitlesDelitos_especificos[""] = array();
	if (count($fieldToolTipsDelitos_especificos[""]))
		$tdataDelitos_especificos[".isUseToolTips"] = true;
}





$tdataDelitos_especificos[".shortTableName"] = "Delitos_especificos";
$tdataDelitos_especificos[".nSecOptions"] = 0;
$tdataDelitos_especificos[".recsPerRowPrint"] = 1;
$tdataDelitos_especificos[".mainTableOwnerID"] = "";
$tdataDelitos_especificos[".moveNext"] = 1;
$tdataDelitos_especificos[".entityType"] = 1;

$tdataDelitos_especificos[".strOriginalTableName"] = "hechos_delictivos";

	



$tdataDelitos_especificos[".showAddInPopup"] = false;

$tdataDelitos_especificos[".showEditInPopup"] = false;

$tdataDelitos_especificos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDelitos_especificos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDelitos_especificos[".fieldsForRegister"] = array();

	$tdataDelitos_especificos[".listAjax"] = true;

	$tdataDelitos_especificos[".audit"] = false;

	$tdataDelitos_especificos[".locking"] = false;



$tdataDelitos_especificos[".list"] = true;



$tdataDelitos_especificos[".reorderRecordsByHeader"] = true;
$tdataDelitos_especificos[".createSortByDropdown"] = true;
$tdataDelitos_especificos[".strSortControlSettingsJSON"] = "";




$tdataDelitos_especificos[".import"] = true;

$tdataDelitos_especificos[".exportTo"] = true;

$tdataDelitos_especificos[".printFriendly"] = true;


$tdataDelitos_especificos[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataDelitos_especificos[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataDelitos_especificos[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataDelitos_especificos[".searchSaving"] = false;
//

$tdataDelitos_especificos[".showSearchPanel"] = true;
		$tdataDelitos_especificos[".flexibleSearch"] = true;

$tdataDelitos_especificos[".isUseAjaxSuggest"] = true;

$tdataDelitos_especificos[".rowHighlite"] = true;





$tdataDelitos_especificos[".ajaxCodeSnippetAdded"] = false;

$tdataDelitos_especificos[".buttonsAdded"] = false;

$tdataDelitos_especificos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDelitos_especificos[".isUseTimeForSearch"] = false;



$tdataDelitos_especificos[".badgeColor"] = "6B8E23";


$tdataDelitos_especificos[".allSearchFields"] = array();
$tdataDelitos_especificos[".filterFields"] = array();
$tdataDelitos_especificos[".requiredSearchFields"] = array();

$tdataDelitos_especificos[".allSearchFields"][] = "lugaranalisis";
	$tdataDelitos_especificos[".allSearchFields"][] = "lugar_esp";
	

$tdataDelitos_especificos[".googleLikeFields"] = array();
$tdataDelitos_especificos[".googleLikeFields"][] = "lugaranalisis";
$tdataDelitos_especificos[".googleLikeFields"][] = "lugar_esp";


$tdataDelitos_especificos[".advSearchFields"] = array();
$tdataDelitos_especificos[".advSearchFields"][] = "lugaranalisis";
$tdataDelitos_especificos[".advSearchFields"][] = "lugar_esp";

$tdataDelitos_especificos[".tableType"] = "list";

$tdataDelitos_especificos[".printerPageOrientation"] = 0;
$tdataDelitos_especificos[".nPrinterPageScale"] = 100;

$tdataDelitos_especificos[".nPrinterSplitRecords"] = 40;

$tdataDelitos_especificos[".nPrinterPDFSplitRecords"] = 40;



$tdataDelitos_especificos[".geocodingEnabled"] = false;





$tdataDelitos_especificos[".listGridLayout"] = 3;

$tdataDelitos_especificos[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdataDelitos_especificos[".pageSize"] = 10;

$tdataDelitos_especificos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDelitos_especificos[".strOrderBy"] = $tstrOrderBy;

$tdataDelitos_especificos[".orderindexes"] = array();

$tdataDelitos_especificos[".sqlHead"] = "SELECT lugaranalisis,  lugar_esp";
$tdataDelitos_especificos[".sqlFrom"] = "FROM hechos_delictivos1";
$tdataDelitos_especificos[".sqlWhereExpr"] = "";
$tdataDelitos_especificos[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDelitos_especificos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDelitos_especificos[".arrGroupsPerPage"] = $arrGPP;

$tdataDelitos_especificos[".highlightSearchResults"] = true;

$tableKeysDelitos_especificos = array();
$tdataDelitos_especificos[".Keys"] = $tableKeysDelitos_especificos;

$tdataDelitos_especificos[".listFields"] = array();
$tdataDelitos_especificos[".listFields"][] = "lugaranalisis";
$tdataDelitos_especificos[".listFields"][] = "lugar_esp";

$tdataDelitos_especificos[".hideMobileList"] = array();


$tdataDelitos_especificos[".viewFields"] = array();
$tdataDelitos_especificos[".viewFields"][] = "lugaranalisis";
$tdataDelitos_especificos[".viewFields"][] = "lugar_esp";

$tdataDelitos_especificos[".addFields"] = array();
$tdataDelitos_especificos[".addFields"][] = "lugaranalisis";
$tdataDelitos_especificos[".addFields"][] = "lugar_esp";

$tdataDelitos_especificos[".masterListFields"] = array();
$tdataDelitos_especificos[".masterListFields"][] = "lugaranalisis";
$tdataDelitos_especificos[".masterListFields"][] = "lugar_esp";

$tdataDelitos_especificos[".inlineAddFields"] = array();
$tdataDelitos_especificos[".inlineAddFields"][] = "lugaranalisis";
$tdataDelitos_especificos[".inlineAddFields"][] = "lugar_esp";

$tdataDelitos_especificos[".editFields"] = array();
$tdataDelitos_especificos[".editFields"][] = "lugaranalisis";
$tdataDelitos_especificos[".editFields"][] = "lugar_esp";

$tdataDelitos_especificos[".inlineEditFields"] = array();
$tdataDelitos_especificos[".inlineEditFields"][] = "lugaranalisis";
$tdataDelitos_especificos[".inlineEditFields"][] = "lugar_esp";

$tdataDelitos_especificos[".updateSelectedFields"] = array();
$tdataDelitos_especificos[".updateSelectedFields"][] = "lugaranalisis";
$tdataDelitos_especificos[".updateSelectedFields"][] = "lugar_esp";


$tdataDelitos_especificos[".exportFields"] = array();
$tdataDelitos_especificos[".exportFields"][] = "lugaranalisis";
$tdataDelitos_especificos[".exportFields"][] = "lugar_esp";

$tdataDelitos_especificos[".importFields"] = array();
$tdataDelitos_especificos[".importFields"][] = "lugaranalisis";
$tdataDelitos_especificos[".importFields"][] = "lugar_esp";

$tdataDelitos_especificos[".printFields"] = array();
$tdataDelitos_especificos[".printFields"][] = "lugaranalisis";
$tdataDelitos_especificos[".printFields"][] = "lugar_esp";

//	lugaranalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "lugaranalisis";
	$fdata["GoodName"] = "lugaranalisis";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_especificos","lugaranalisis");
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

		$fdata["strField"] = "lugaranalisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lugaranalisis";

	
	
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




	$tdataDelitos_especificos["lugaranalisis"] = $fdata;
//	lugar_esp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "lugar_esp";
	$fdata["GoodName"] = "lugar_esp";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("Delitos_especificos","lugar_esp");
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

		$fdata["strField"] = "lugar_esp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lugar_esp";

	
	
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




	$tdataDelitos_especificos["lugar_esp"] = $fdata;


$tables_data["Delitos especificos"]=&$tdataDelitos_especificos;
$field_labels["Delitos_especificos"] = &$fieldLabelsDelitos_especificos;
$fieldToolTips["Delitos_especificos"] = &$fieldToolTipsDelitos_especificos;
$placeHolders["Delitos_especificos"] = &$placeHoldersDelitos_especificos;
$page_titles["Delitos_especificos"] = &$pageTitlesDelitos_especificos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Delitos especificos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Delitos especificos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Delitos_especificos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "lugaranalisis,  lugar_esp";
$proto0["m_strFrom"] = "FROM hechos_delictivos1";
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
	"m_strName" => "lugaranalisis",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos especificos"
));

$proto6["m_sql"] = "lugaranalisis";
$proto6["m_srcTableName"] = "Delitos especificos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "lugar_esp",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos especificos"
));

$proto8["m_sql"] = "lugar_esp";
$proto8["m_srcTableName"] = "Delitos especificos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "hechos_delictivos1";
$proto11["m_srcTableName"] = "Delitos especificos";
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
$proto10["m_srcTableName"] = "Delitos especificos";
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
	"m_strName" => "lugaranalisis",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos especificos"
));

$proto14["m_column"]=$obj;
$obj = new SQLGroupByItem($proto14);

$proto0["m_groupby"][]=$obj;
												$proto16=array();
						$obj = new SQLField(array(
	"m_strName" => "lugar_esp",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "Delitos especificos"
));

$proto16["m_column"]=$obj;
$obj = new SQLGroupByItem($proto16);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Delitos especificos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Delitos_especificos = createSqlQuery_Delitos_especificos();


	
		;

		

$tdataDelitos_especificos[".sqlquery"] = $queryData_Delitos_especificos;

$tableEvents["Delitos especificos"] = new eventsBase;
$tdataDelitos_especificos[".hasEvents"] = false;

?>