<?php
require_once(getabspath("classes/cipherer.php"));




$tdatahechos_delictivos_class_delitos = array();
	$tdatahechos_delictivos_class_delitos[".truncateText"] = true;
	$tdatahechos_delictivos_class_delitos[".NumberOfChars"] = 80;
	$tdatahechos_delictivos_class_delitos[".ShortName"] = "hechos_delictivos_class_delitos";
	$tdatahechos_delictivos_class_delitos[".OwnerID"] = "";
	$tdatahechos_delictivos_class_delitos[".OriginalTable"] = "hechos_delictivos1";

//	field labels
$fieldLabelshechos_delictivos_class_delitos = array();
$fieldToolTipshechos_delictivos_class_delitos = array();
$pageTitleshechos_delictivos_class_delitos = array();
$placeHoldershechos_delictivos_class_delitos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelshechos_delictivos_class_delitos["Spanish"] = array();
	$fieldToolTipshechos_delictivos_class_delitos["Spanish"] = array();
	$placeHoldershechos_delictivos_class_delitos["Spanish"] = array();
	$pageTitleshechos_delictivos_class_delitos["Spanish"] = array();
	$fieldLabelshechos_delictivos_class_delitos["Spanish"]["lugar_esp"] = "Lugar Esp";
	$fieldToolTipshechos_delictivos_class_delitos["Spanish"]["lugar_esp"] = "";
	$placeHoldershechos_delictivos_class_delitos["Spanish"]["lugar_esp"] = "";
	$fieldLabelshechos_delictivos_class_delitos["Spanish"]["lugaranalisis"] = "Lugaranalisis";
	$fieldToolTipshechos_delictivos_class_delitos["Spanish"]["lugaranalisis"] = "";
	$placeHoldershechos_delictivos_class_delitos["Spanish"]["lugaranalisis"] = "";
	if (count($fieldToolTipshechos_delictivos_class_delitos["Spanish"]))
		$tdatahechos_delictivos_class_delitos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshechos_delictivos_class_delitos["English"] = array();
	$fieldToolTipshechos_delictivos_class_delitos["English"] = array();
	$placeHoldershechos_delictivos_class_delitos["English"] = array();
	$pageTitleshechos_delictivos_class_delitos["English"] = array();
	$fieldLabelshechos_delictivos_class_delitos["English"]["lugar_esp"] = "Lugar Esp";
	$fieldToolTipshechos_delictivos_class_delitos["English"]["lugar_esp"] = "";
	$placeHoldershechos_delictivos_class_delitos["English"]["lugar_esp"] = "";
	$fieldLabelshechos_delictivos_class_delitos["English"]["lugaranalisis"] = "Lugaranalisis";
	$fieldToolTipshechos_delictivos_class_delitos["English"]["lugaranalisis"] = "";
	$placeHoldershechos_delictivos_class_delitos["English"]["lugaranalisis"] = "";
	if (count($fieldToolTipshechos_delictivos_class_delitos["English"]))
		$tdatahechos_delictivos_class_delitos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelshechos_delictivos_class_delitos[""] = array();
	$fieldToolTipshechos_delictivos_class_delitos[""] = array();
	$placeHoldershechos_delictivos_class_delitos[""] = array();
	$pageTitleshechos_delictivos_class_delitos[""] = array();
	if (count($fieldToolTipshechos_delictivos_class_delitos[""]))
		$tdatahechos_delictivos_class_delitos[".isUseToolTips"] = true;
}





$tdatahechos_delictivos_class_delitos[".shortTableName"] = "hechos_delictivos_class_delitos";
$tdatahechos_delictivos_class_delitos[".nSecOptions"] = 0;
$tdatahechos_delictivos_class_delitos[".recsPerRowPrint"] = 1;
$tdatahechos_delictivos_class_delitos[".mainTableOwnerID"] = "";
$tdatahechos_delictivos_class_delitos[".moveNext"] = 1;
$tdatahechos_delictivos_class_delitos[".entityType"] = 1;

$tdatahechos_delictivos_class_delitos[".strOriginalTableName"] = "hechos_delictivos1";

	



$tdatahechos_delictivos_class_delitos[".showAddInPopup"] = false;

$tdatahechos_delictivos_class_delitos[".showEditInPopup"] = false;

$tdatahechos_delictivos_class_delitos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahechos_delictivos_class_delitos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahechos_delictivos_class_delitos[".fieldsForRegister"] = array();

	$tdatahechos_delictivos_class_delitos[".listAjax"] = true;

	$tdatahechos_delictivos_class_delitos[".audit"] = false;

	$tdatahechos_delictivos_class_delitos[".locking"] = false;



$tdatahechos_delictivos_class_delitos[".list"] = true;



$tdatahechos_delictivos_class_delitos[".reorderRecordsByHeader"] = true;
$tdatahechos_delictivos_class_delitos[".createSortByDropdown"] = true;
$tdatahechos_delictivos_class_delitos[".strSortControlSettingsJSON"] = "";




$tdatahechos_delictivos_class_delitos[".import"] = true;

$tdatahechos_delictivos_class_delitos[".exportTo"] = true;

$tdatahechos_delictivos_class_delitos[".printFriendly"] = true;


$tdatahechos_delictivos_class_delitos[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatahechos_delictivos_class_delitos[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatahechos_delictivos_class_delitos[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatahechos_delictivos_class_delitos[".searchSaving"] = false;
//

$tdatahechos_delictivos_class_delitos[".showSearchPanel"] = true;
		$tdatahechos_delictivos_class_delitos[".flexibleSearch"] = true;

$tdatahechos_delictivos_class_delitos[".isUseAjaxSuggest"] = true;

$tdatahechos_delictivos_class_delitos[".rowHighlite"] = true;





$tdatahechos_delictivos_class_delitos[".ajaxCodeSnippetAdded"] = false;

$tdatahechos_delictivos_class_delitos[".buttonsAdded"] = false;

$tdatahechos_delictivos_class_delitos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahechos_delictivos_class_delitos[".isUseTimeForSearch"] = false;





$tdatahechos_delictivos_class_delitos[".allSearchFields"] = array();
$tdatahechos_delictivos_class_delitos[".filterFields"] = array();
$tdatahechos_delictivos_class_delitos[".requiredSearchFields"] = array();

$tdatahechos_delictivos_class_delitos[".allSearchFields"][] = "lugaranalisis";
	$tdatahechos_delictivos_class_delitos[".allSearchFields"][] = "lugar_esp";
	

$tdatahechos_delictivos_class_delitos[".googleLikeFields"] = array();
$tdatahechos_delictivos_class_delitos[".googleLikeFields"][] = "lugaranalisis";
$tdatahechos_delictivos_class_delitos[".googleLikeFields"][] = "lugar_esp";


$tdatahechos_delictivos_class_delitos[".advSearchFields"] = array();
$tdatahechos_delictivos_class_delitos[".advSearchFields"][] = "lugaranalisis";
$tdatahechos_delictivos_class_delitos[".advSearchFields"][] = "lugar_esp";

$tdatahechos_delictivos_class_delitos[".tableType"] = "list";

$tdatahechos_delictivos_class_delitos[".printerPageOrientation"] = 0;
$tdatahechos_delictivos_class_delitos[".nPrinterPageScale"] = 100;

$tdatahechos_delictivos_class_delitos[".nPrinterSplitRecords"] = 40;

$tdatahechos_delictivos_class_delitos[".nPrinterPDFSplitRecords"] = 40;



$tdatahechos_delictivos_class_delitos[".geocodingEnabled"] = false;





$tdatahechos_delictivos_class_delitos[".listGridLayout"] = 3;

$tdatahechos_delictivos_class_delitos[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatahechos_delictivos_class_delitos[".pageSize"] = 10;

$tdatahechos_delictivos_class_delitos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahechos_delictivos_class_delitos[".strOrderBy"] = $tstrOrderBy;

$tdatahechos_delictivos_class_delitos[".orderindexes"] = array();

$tdatahechos_delictivos_class_delitos[".sqlHead"] = "SELECT lugaranalisis,  lugar_esp";
$tdatahechos_delictivos_class_delitos[".sqlFrom"] = "FROM hechos_delictivos1";
$tdatahechos_delictivos_class_delitos[".sqlWhereExpr"] = "";
$tdatahechos_delictivos_class_delitos[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahechos_delictivos_class_delitos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahechos_delictivos_class_delitos[".arrGroupsPerPage"] = $arrGPP;

$tdatahechos_delictivos_class_delitos[".highlightSearchResults"] = true;

$tableKeyshechos_delictivos_class_delitos = array();
$tdatahechos_delictivos_class_delitos[".Keys"] = $tableKeyshechos_delictivos_class_delitos;

$tdatahechos_delictivos_class_delitos[".listFields"] = array();
$tdatahechos_delictivos_class_delitos[".listFields"][] = "lugaranalisis";
$tdatahechos_delictivos_class_delitos[".listFields"][] = "lugar_esp";

$tdatahechos_delictivos_class_delitos[".hideMobileList"] = array();


$tdatahechos_delictivos_class_delitos[".viewFields"] = array();

$tdatahechos_delictivos_class_delitos[".addFields"] = array();

$tdatahechos_delictivos_class_delitos[".masterListFields"] = array();
$tdatahechos_delictivos_class_delitos[".masterListFields"][] = "lugaranalisis";
$tdatahechos_delictivos_class_delitos[".masterListFields"][] = "lugar_esp";

$tdatahechos_delictivos_class_delitos[".inlineAddFields"] = array();

$tdatahechos_delictivos_class_delitos[".editFields"] = array();

$tdatahechos_delictivos_class_delitos[".inlineEditFields"] = array();

$tdatahechos_delictivos_class_delitos[".updateSelectedFields"] = array();


$tdatahechos_delictivos_class_delitos[".exportFields"] = array();
$tdatahechos_delictivos_class_delitos[".exportFields"][] = "lugaranalisis";
$tdatahechos_delictivos_class_delitos[".exportFields"][] = "lugar_esp";

$tdatahechos_delictivos_class_delitos[".importFields"] = array();
$tdatahechos_delictivos_class_delitos[".importFields"][] = "lugaranalisis";
$tdatahechos_delictivos_class_delitos[".importFields"][] = "lugar_esp";

$tdatahechos_delictivos_class_delitos[".printFields"] = array();
$tdatahechos_delictivos_class_delitos[".printFields"][] = "lugaranalisis";
$tdatahechos_delictivos_class_delitos[".printFields"][] = "lugar_esp";

//	lugaranalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "lugaranalisis";
	$fdata["GoodName"] = "lugaranalisis";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_class_delitos","lugaranalisis");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatahechos_delictivos_class_delitos["lugaranalisis"] = $fdata;
//	lugar_esp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "lugar_esp";
	$fdata["GoodName"] = "lugar_esp";
	$fdata["ownerTable"] = "hechos_delictivos1";
	$fdata["Label"] = GetFieldLabel("hechos_delictivos_class_delitos","lugar_esp");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatahechos_delictivos_class_delitos["lugar_esp"] = $fdata;


$tables_data["hechos_delictivos_class delitos"]=&$tdatahechos_delictivos_class_delitos;
$field_labels["hechos_delictivos_class_delitos"] = &$fieldLabelshechos_delictivos_class_delitos;
$fieldToolTips["hechos_delictivos_class_delitos"] = &$fieldToolTipshechos_delictivos_class_delitos;
$placeHolders["hechos_delictivos_class_delitos"] = &$placeHoldershechos_delictivos_class_delitos;
$page_titles["hechos_delictivos_class_delitos"] = &$pageTitleshechos_delictivos_class_delitos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hechos_delictivos_class delitos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hechos_delictivos_class delitos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_hechos_delictivos_class_delitos()
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
	"m_srcTableName" => "hechos_delictivos_class delitos"
));

$proto6["m_sql"] = "lugaranalisis";
$proto6["m_srcTableName"] = "hechos_delictivos_class delitos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "lugar_esp",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_class delitos"
));

$proto8["m_sql"] = "lugar_esp";
$proto8["m_srcTableName"] = "hechos_delictivos_class delitos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "hechos_delictivos1";
$proto11["m_srcTableName"] = "hechos_delictivos_class delitos";
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
$proto10["m_srcTableName"] = "hechos_delictivos_class delitos";
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
	"m_srcTableName" => "hechos_delictivos_class delitos"
));

$proto14["m_column"]=$obj;
$obj = new SQLGroupByItem($proto14);

$proto0["m_groupby"][]=$obj;
												$proto16=array();
						$obj = new SQLField(array(
	"m_strName" => "lugar_esp",
	"m_strTable" => "hechos_delictivos1",
	"m_srcTableName" => "hechos_delictivos_class delitos"
));

$proto16["m_column"]=$obj;
$obj = new SQLGroupByItem($proto16);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hechos_delictivos_class delitos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hechos_delictivos_class_delitos = createSqlQuery_hechos_delictivos_class_delitos();


	
		;

		

$tdatahechos_delictivos_class_delitos[".sqlquery"] = $queryData_hechos_delictivos_class_delitos;

$tableEvents["hechos_delictivos_class delitos"] = new eventsBase;
$tdatahechos_delictivos_class_delitos[".hasEvents"] = false;

?>