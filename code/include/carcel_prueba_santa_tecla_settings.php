<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacarcel_prueba_santa_tecla = array();
	$tdatacarcel_prueba_santa_tecla[".truncateText"] = true;
	$tdatacarcel_prueba_santa_tecla[".NumberOfChars"] = 80;
	$tdatacarcel_prueba_santa_tecla[".ShortName"] = "carcel_prueba_santa_tecla";
	$tdatacarcel_prueba_santa_tecla[".OwnerID"] = "";
	$tdatacarcel_prueba_santa_tecla[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelscarcel_prueba_santa_tecla = array();
$fieldToolTipscarcel_prueba_santa_tecla = array();
$pageTitlescarcel_prueba_santa_tecla = array();
$placeHolderscarcel_prueba_santa_tecla = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscarcel_prueba_santa_tecla["Spanish"] = array();
	$fieldToolTipscarcel_prueba_santa_tecla["Spanish"] = array();
	$placeHolderscarcel_prueba_santa_tecla["Spanish"] = array();
	$pageTitlescarcel_prueba_santa_tecla["Spanish"] = array();
	$fieldLabelscarcel_prueba_santa_tecla["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipscarcel_prueba_santa_tecla["Spanish"]["mun_resid"] = "";
	$placeHolderscarcel_prueba_santa_tecla["Spanish"]["mun_resid"] = "";
	$fieldLabelscarcel_prueba_santa_tecla["Spanish"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipscarcel_prueba_santa_tecla["Spanish"]["tipo_mara"] = "";
	$placeHolderscarcel_prueba_santa_tecla["Spanish"]["tipo_mara"] = "";
	if (count($fieldToolTipscarcel_prueba_santa_tecla["Spanish"]))
		$tdatacarcel_prueba_santa_tecla[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscarcel_prueba_santa_tecla["English"] = array();
	$fieldToolTipscarcel_prueba_santa_tecla["English"] = array();
	$placeHolderscarcel_prueba_santa_tecla["English"] = array();
	$pageTitlescarcel_prueba_santa_tecla["English"] = array();
	$fieldLabelscarcel_prueba_santa_tecla["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipscarcel_prueba_santa_tecla["English"]["mun_resid"] = "";
	$placeHolderscarcel_prueba_santa_tecla["English"]["mun_resid"] = "";
	$fieldLabelscarcel_prueba_santa_tecla["English"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipscarcel_prueba_santa_tecla["English"]["tipo_mara"] = "";
	$placeHolderscarcel_prueba_santa_tecla["English"]["tipo_mara"] = "";
	if (count($fieldToolTipscarcel_prueba_santa_tecla["English"]))
		$tdatacarcel_prueba_santa_tecla[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscarcel_prueba_santa_tecla[""] = array();
	$fieldToolTipscarcel_prueba_santa_tecla[""] = array();
	$placeHolderscarcel_prueba_santa_tecla[""] = array();
	$pageTitlescarcel_prueba_santa_tecla[""] = array();
	if (count($fieldToolTipscarcel_prueba_santa_tecla[""]))
		$tdatacarcel_prueba_santa_tecla[".isUseToolTips"] = true;
}





$tdatacarcel_prueba_santa_tecla[".shortTableName"] = "carcel_prueba_santa_tecla";
$tdatacarcel_prueba_santa_tecla[".nSecOptions"] = 0;
$tdatacarcel_prueba_santa_tecla[".recsPerRowPrint"] = 1;
$tdatacarcel_prueba_santa_tecla[".mainTableOwnerID"] = "";
$tdatacarcel_prueba_santa_tecla[".moveNext"] = 1;
$tdatacarcel_prueba_santa_tecla[".entityType"] = 1;

$tdatacarcel_prueba_santa_tecla[".strOriginalTableName"] = "carcel";

	



$tdatacarcel_prueba_santa_tecla[".showAddInPopup"] = false;

$tdatacarcel_prueba_santa_tecla[".showEditInPopup"] = false;

$tdatacarcel_prueba_santa_tecla[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacarcel_prueba_santa_tecla[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacarcel_prueba_santa_tecla[".fieldsForRegister"] = array();

	$tdatacarcel_prueba_santa_tecla[".listAjax"] = true;

	$tdatacarcel_prueba_santa_tecla[".audit"] = false;

	$tdatacarcel_prueba_santa_tecla[".locking"] = false;



$tdatacarcel_prueba_santa_tecla[".list"] = true;



$tdatacarcel_prueba_santa_tecla[".reorderRecordsByHeader"] = true;
$tdatacarcel_prueba_santa_tecla[".createSortByDropdown"] = true;
$tdatacarcel_prueba_santa_tecla[".strSortControlSettingsJSON"] = "";




$tdatacarcel_prueba_santa_tecla[".import"] = true;

$tdatacarcel_prueba_santa_tecla[".exportTo"] = true;

$tdatacarcel_prueba_santa_tecla[".printFriendly"] = true;


$tdatacarcel_prueba_santa_tecla[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacarcel_prueba_santa_tecla[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacarcel_prueba_santa_tecla[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacarcel_prueba_santa_tecla[".searchSaving"] = false;
//

$tdatacarcel_prueba_santa_tecla[".showSearchPanel"] = true;
		$tdatacarcel_prueba_santa_tecla[".flexibleSearch"] = true;

$tdatacarcel_prueba_santa_tecla[".isUseAjaxSuggest"] = true;

$tdatacarcel_prueba_santa_tecla[".rowHighlite"] = true;





$tdatacarcel_prueba_santa_tecla[".ajaxCodeSnippetAdded"] = false;

$tdatacarcel_prueba_santa_tecla[".buttonsAdded"] = false;

$tdatacarcel_prueba_santa_tecla[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacarcel_prueba_santa_tecla[".isUseTimeForSearch"] = false;





$tdatacarcel_prueba_santa_tecla[".allSearchFields"] = array();
$tdatacarcel_prueba_santa_tecla[".filterFields"] = array();
$tdatacarcel_prueba_santa_tecla[".requiredSearchFields"] = array();

$tdatacarcel_prueba_santa_tecla[".allSearchFields"][] = "mun_resid";
	$tdatacarcel_prueba_santa_tecla[".allSearchFields"][] = "tipo_mara";
	
$tdatacarcel_prueba_santa_tecla[".filterFields"][] = "mun_resid";

$tdatacarcel_prueba_santa_tecla[".googleLikeFields"] = array();
$tdatacarcel_prueba_santa_tecla[".googleLikeFields"][] = "mun_resid";
$tdatacarcel_prueba_santa_tecla[".googleLikeFields"][] = "tipo_mara";


$tdatacarcel_prueba_santa_tecla[".advSearchFields"] = array();
$tdatacarcel_prueba_santa_tecla[".advSearchFields"][] = "mun_resid";
$tdatacarcel_prueba_santa_tecla[".advSearchFields"][] = "tipo_mara";

$tdatacarcel_prueba_santa_tecla[".tableType"] = "list";

$tdatacarcel_prueba_santa_tecla[".printerPageOrientation"] = 0;
$tdatacarcel_prueba_santa_tecla[".nPrinterPageScale"] = 100;

$tdatacarcel_prueba_santa_tecla[".nPrinterSplitRecords"] = 40;

$tdatacarcel_prueba_santa_tecla[".nPrinterPDFSplitRecords"] = 40;



$tdatacarcel_prueba_santa_tecla[".geocodingEnabled"] = false;





$tdatacarcel_prueba_santa_tecla[".listGridLayout"] = 3;

$tdatacarcel_prueba_santa_tecla[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatacarcel_prueba_santa_tecla[".pageSize"] = 10;

$tdatacarcel_prueba_santa_tecla[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacarcel_prueba_santa_tecla[".strOrderBy"] = $tstrOrderBy;

$tdatacarcel_prueba_santa_tecla[".orderindexes"] = array();

$tdatacarcel_prueba_santa_tecla[".sqlHead"] = "SELECT mun_resid,  tipo_mara";
$tdatacarcel_prueba_santa_tecla[".sqlFrom"] = "FROM carcel";
$tdatacarcel_prueba_santa_tecla[".sqlWhereExpr"] = "mun_resid ='SANTA TECLA'";
$tdatacarcel_prueba_santa_tecla[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacarcel_prueba_santa_tecla[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarcel_prueba_santa_tecla[".arrGroupsPerPage"] = $arrGPP;

$tdatacarcel_prueba_santa_tecla[".highlightSearchResults"] = true;

$tableKeyscarcel_prueba_santa_tecla = array();
$tdatacarcel_prueba_santa_tecla[".Keys"] = $tableKeyscarcel_prueba_santa_tecla;

$tdatacarcel_prueba_santa_tecla[".listFields"] = array();
$tdatacarcel_prueba_santa_tecla[".listFields"][] = "mun_resid";
$tdatacarcel_prueba_santa_tecla[".listFields"][] = "tipo_mara";

$tdatacarcel_prueba_santa_tecla[".hideMobileList"] = array();


$tdatacarcel_prueba_santa_tecla[".viewFields"] = array();
$tdatacarcel_prueba_santa_tecla[".viewFields"][] = "mun_resid";
$tdatacarcel_prueba_santa_tecla[".viewFields"][] = "tipo_mara";

$tdatacarcel_prueba_santa_tecla[".addFields"] = array();
$tdatacarcel_prueba_santa_tecla[".addFields"][] = "mun_resid";
$tdatacarcel_prueba_santa_tecla[".addFields"][] = "tipo_mara";

$tdatacarcel_prueba_santa_tecla[".masterListFields"] = array();
$tdatacarcel_prueba_santa_tecla[".masterListFields"][] = "mun_resid";
$tdatacarcel_prueba_santa_tecla[".masterListFields"][] = "tipo_mara";

$tdatacarcel_prueba_santa_tecla[".inlineAddFields"] = array();
$tdatacarcel_prueba_santa_tecla[".inlineAddFields"][] = "mun_resid";
$tdatacarcel_prueba_santa_tecla[".inlineAddFields"][] = "tipo_mara";

$tdatacarcel_prueba_santa_tecla[".editFields"] = array();
$tdatacarcel_prueba_santa_tecla[".editFields"][] = "mun_resid";
$tdatacarcel_prueba_santa_tecla[".editFields"][] = "tipo_mara";

$tdatacarcel_prueba_santa_tecla[".inlineEditFields"] = array();
$tdatacarcel_prueba_santa_tecla[".inlineEditFields"][] = "mun_resid";
$tdatacarcel_prueba_santa_tecla[".inlineEditFields"][] = "tipo_mara";

$tdatacarcel_prueba_santa_tecla[".updateSelectedFields"] = array();
$tdatacarcel_prueba_santa_tecla[".updateSelectedFields"][] = "mun_resid";
$tdatacarcel_prueba_santa_tecla[".updateSelectedFields"][] = "tipo_mara";


$tdatacarcel_prueba_santa_tecla[".exportFields"] = array();
$tdatacarcel_prueba_santa_tecla[".exportFields"][] = "mun_resid";
$tdatacarcel_prueba_santa_tecla[".exportFields"][] = "tipo_mara";

$tdatacarcel_prueba_santa_tecla[".importFields"] = array();
$tdatacarcel_prueba_santa_tecla[".importFields"][] = "mun_resid";
$tdatacarcel_prueba_santa_tecla[".importFields"][] = "tipo_mara";

$tdatacarcel_prueba_santa_tecla[".printFields"] = array();
$tdatacarcel_prueba_santa_tecla[".printFields"][] = "mun_resid";
$tdatacarcel_prueba_santa_tecla[".printFields"][] = "tipo_mara";

//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_prueba_santa_tecla","mun_resid");
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

		$fdata["strField"] = "mun_resid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mun_resid";

	
	
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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdatacarcel_prueba_santa_tecla["mun_resid"] = $fdata;
//	tipo_mara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipo_mara";
	$fdata["GoodName"] = "tipo_mara";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_prueba_santa_tecla","tipo_mara");
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




	$tdatacarcel_prueba_santa_tecla["tipo_mara"] = $fdata;


$tables_data["carcel prueba santa tecla"]=&$tdatacarcel_prueba_santa_tecla;
$field_labels["carcel_prueba_santa_tecla"] = &$fieldLabelscarcel_prueba_santa_tecla;
$fieldToolTips["carcel_prueba_santa_tecla"] = &$fieldToolTipscarcel_prueba_santa_tecla;
$placeHolders["carcel_prueba_santa_tecla"] = &$placeHolderscarcel_prueba_santa_tecla;
$page_titles["carcel_prueba_santa_tecla"] = &$pageTitlescarcel_prueba_santa_tecla;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["carcel prueba santa tecla"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["carcel prueba santa tecla"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_carcel_prueba_santa_tecla()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "mun_resid,  tipo_mara";
$proto0["m_strFrom"] = "FROM carcel";
$proto0["m_strWhere"] = "mun_resid ='SANTA TECLA'";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "mun_resid ='SANTA TECLA'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel prueba santa tecla"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "='SANTA TECLA'";
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
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel prueba santa tecla"
));

$proto6["m_sql"] = "mun_resid";
$proto6["m_srcTableName"] = "carcel prueba santa tecla";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel prueba santa tecla"
));

$proto8["m_sql"] = "tipo_mara";
$proto8["m_srcTableName"] = "carcel prueba santa tecla";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "carcel";
$proto11["m_srcTableName"] = "carcel prueba santa tecla";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "sipe";
$proto11["m_columns"][] = "afis";
$proto11["m_columns"][] = "edad";
$proto11["m_columns"][] = "rangoetario";
$proto11["m_columns"][] = "genero";
$proto11["m_columns"][] = "fecha_nac";
$proto11["m_columns"][] = "edad1";
$proto11["m_columns"][] = "dui";
$proto11["m_columns"][] = "nivel_edu";
$proto11["m_columns"][] = "educacionanalisis";
$proto11["m_columns"][] = "profesion_oficio";
$proto11["m_columns"][] = "estado_civil";
$proto11["m_columns"][] = "ciudadania";
$proto11["m_columns"][] = "mun_nacimiento";
$proto11["m_columns"][] = "depto_nacim";
$proto11["m_columns"][] = "direccion";
$proto11["m_columns"][] = "mun_resid";
$proto11["m_columns"][] = "depart_resid";
$proto11["m_columns"][] = "delitosanalisis";
$proto11["m_columns"][] = "sj_interno";
$proto11["m_columns"][] = "fase";
$proto11["m_columns"][] = "org_delictiva";
$proto11["m_columns"][] = "tipo_mara";
$proto11["m_columns"][] = "reincidente";
$proto11["m_columns"][] = "deportado";
$proto11["m_columns"][] = "direccion1";
$proto11["m_columns"][] = "sector";
$proto11["m_columns"][] = "celda";
$proto11["m_columns"][] = "fecha_ing__sp";
$proto11["m_columns"][] = "libro";
$proto11["m_columns"][] = "fecha_ing__cp";
$proto11["m_columns"][] = "total_delitos";
$proto11["m_columns"][] = "delitos";
$proto11["m_columns"][] = "delitoanalisis";
$proto11["m_columns"][] = "sector_ppd";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "carcel";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "carcel prueba santa tecla";
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
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel prueba santa tecla"
));

$proto14["m_column"]=$obj;
$obj = new SQLGroupByItem($proto14);

$proto0["m_groupby"][]=$obj;
												$proto16=array();
						$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel prueba santa tecla"
));

$proto16["m_column"]=$obj;
$obj = new SQLGroupByItem($proto16);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="carcel prueba santa tecla";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carcel_prueba_santa_tecla = createSqlQuery_carcel_prueba_santa_tecla();


	
		;

		

$tdatacarcel_prueba_santa_tecla[".sqlquery"] = $queryData_carcel_prueba_santa_tecla;

$tableEvents["carcel prueba santa tecla"] = new eventsBase;
$tdatacarcel_prueba_santa_tecla[".hasEvents"] = false;

?>