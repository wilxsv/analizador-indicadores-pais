<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacarcel_visualizacion_todos = array();
	$tdatacarcel_visualizacion_todos[".truncateText"] = true;
	$tdatacarcel_visualizacion_todos[".NumberOfChars"] = 80;
	$tdatacarcel_visualizacion_todos[".ShortName"] = "carcel_visualizacion_todos";
	$tdatacarcel_visualizacion_todos[".OwnerID"] = "";
	$tdatacarcel_visualizacion_todos[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelscarcel_visualizacion_todos = array();
$fieldToolTipscarcel_visualizacion_todos = array();
$pageTitlescarcel_visualizacion_todos = array();
$placeHolderscarcel_visualizacion_todos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscarcel_visualizacion_todos["Spanish"] = array();
	$fieldToolTipscarcel_visualizacion_todos["Spanish"] = array();
	$placeHolderscarcel_visualizacion_todos["Spanish"] = array();
	$pageTitlescarcel_visualizacion_todos["Spanish"] = array();
	$fieldLabelscarcel_visualizacion_todos["Spanish"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipscarcel_visualizacion_todos["Spanish"]["delitoanalisis"] = "";
	$placeHolderscarcel_visualizacion_todos["Spanish"]["delitoanalisis"] = "";
	$fieldLabelscarcel_visualizacion_todos["Spanish"]["delitos"] = "Delitos";
	$fieldToolTipscarcel_visualizacion_todos["Spanish"]["delitos"] = "";
	$placeHolderscarcel_visualizacion_todos["Spanish"]["delitos"] = "";
	if (count($fieldToolTipscarcel_visualizacion_todos["Spanish"]))
		$tdatacarcel_visualizacion_todos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscarcel_visualizacion_todos["English"] = array();
	$fieldToolTipscarcel_visualizacion_todos["English"] = array();
	$placeHolderscarcel_visualizacion_todos["English"] = array();
	$pageTitlescarcel_visualizacion_todos["English"] = array();
	$fieldLabelscarcel_visualizacion_todos["English"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipscarcel_visualizacion_todos["English"]["delitoanalisis"] = "";
	$placeHolderscarcel_visualizacion_todos["English"]["delitoanalisis"] = "";
	$fieldLabelscarcel_visualizacion_todos["English"]["delitos"] = "Delitos";
	$fieldToolTipscarcel_visualizacion_todos["English"]["delitos"] = "";
	$placeHolderscarcel_visualizacion_todos["English"]["delitos"] = "";
	if (count($fieldToolTipscarcel_visualizacion_todos["English"]))
		$tdatacarcel_visualizacion_todos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscarcel_visualizacion_todos[""] = array();
	$fieldToolTipscarcel_visualizacion_todos[""] = array();
	$placeHolderscarcel_visualizacion_todos[""] = array();
	$pageTitlescarcel_visualizacion_todos[""] = array();
	if (count($fieldToolTipscarcel_visualizacion_todos[""]))
		$tdatacarcel_visualizacion_todos[".isUseToolTips"] = true;
}





$tdatacarcel_visualizacion_todos[".shortTableName"] = "carcel_visualizacion_todos";
$tdatacarcel_visualizacion_todos[".nSecOptions"] = 0;
$tdatacarcel_visualizacion_todos[".recsPerRowPrint"] = 1;
$tdatacarcel_visualizacion_todos[".mainTableOwnerID"] = "";
$tdatacarcel_visualizacion_todos[".moveNext"] = 1;
$tdatacarcel_visualizacion_todos[".entityType"] = 1;

$tdatacarcel_visualizacion_todos[".strOriginalTableName"] = "carcel";

	



$tdatacarcel_visualizacion_todos[".showAddInPopup"] = false;

$tdatacarcel_visualizacion_todos[".showEditInPopup"] = false;

$tdatacarcel_visualizacion_todos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacarcel_visualizacion_todos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacarcel_visualizacion_todos[".fieldsForRegister"] = array();

	$tdatacarcel_visualizacion_todos[".listAjax"] = true;

	$tdatacarcel_visualizacion_todos[".audit"] = false;

	$tdatacarcel_visualizacion_todos[".locking"] = false;



$tdatacarcel_visualizacion_todos[".list"] = true;



$tdatacarcel_visualizacion_todos[".reorderRecordsByHeader"] = true;
$tdatacarcel_visualizacion_todos[".createSortByDropdown"] = true;
$tdatacarcel_visualizacion_todos[".strSortControlSettingsJSON"] = "";




$tdatacarcel_visualizacion_todos[".import"] = true;

$tdatacarcel_visualizacion_todos[".exportTo"] = true;

$tdatacarcel_visualizacion_todos[".printFriendly"] = true;


$tdatacarcel_visualizacion_todos[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacarcel_visualizacion_todos[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacarcel_visualizacion_todos[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacarcel_visualizacion_todos[".searchSaving"] = false;
//

$tdatacarcel_visualizacion_todos[".showSearchPanel"] = true;
		$tdatacarcel_visualizacion_todos[".flexibleSearch"] = true;

$tdatacarcel_visualizacion_todos[".isUseAjaxSuggest"] = true;

$tdatacarcel_visualizacion_todos[".rowHighlite"] = true;





$tdatacarcel_visualizacion_todos[".ajaxCodeSnippetAdded"] = false;

$tdatacarcel_visualizacion_todos[".buttonsAdded"] = false;

$tdatacarcel_visualizacion_todos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacarcel_visualizacion_todos[".isUseTimeForSearch"] = false;





$tdatacarcel_visualizacion_todos[".allSearchFields"] = array();
$tdatacarcel_visualizacion_todos[".filterFields"] = array();
$tdatacarcel_visualizacion_todos[".requiredSearchFields"] = array();

$tdatacarcel_visualizacion_todos[".allSearchFields"][] = "delitoanalisis";
	$tdatacarcel_visualizacion_todos[".allSearchFields"][] = "delitos";
	

$tdatacarcel_visualizacion_todos[".googleLikeFields"] = array();
$tdatacarcel_visualizacion_todos[".googleLikeFields"][] = "delitoanalisis";
$tdatacarcel_visualizacion_todos[".googleLikeFields"][] = "delitos";


$tdatacarcel_visualizacion_todos[".advSearchFields"] = array();
$tdatacarcel_visualizacion_todos[".advSearchFields"][] = "delitoanalisis";
$tdatacarcel_visualizacion_todos[".advSearchFields"][] = "delitos";

$tdatacarcel_visualizacion_todos[".tableType"] = "list";

$tdatacarcel_visualizacion_todos[".printerPageOrientation"] = 0;
$tdatacarcel_visualizacion_todos[".nPrinterPageScale"] = 100;

$tdatacarcel_visualizacion_todos[".nPrinterSplitRecords"] = 40;

$tdatacarcel_visualizacion_todos[".nPrinterPDFSplitRecords"] = 40;



$tdatacarcel_visualizacion_todos[".geocodingEnabled"] = false;





$tdatacarcel_visualizacion_todos[".listGridLayout"] = 3;

$tdatacarcel_visualizacion_todos[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdatacarcel_visualizacion_todos[".pageSize"] = 10;

$tdatacarcel_visualizacion_todos[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY delitoanalisis DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacarcel_visualizacion_todos[".strOrderBy"] = $tstrOrderBy;

$tdatacarcel_visualizacion_todos[".orderindexes"] = array();
$tdatacarcel_visualizacion_todos[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "delitoanalisis");

$tdatacarcel_visualizacion_todos[".sqlHead"] = "SELECT delitoanalisis,  delitos";
$tdatacarcel_visualizacion_todos[".sqlFrom"] = "FROM carcel";
$tdatacarcel_visualizacion_todos[".sqlWhereExpr"] = "delitoanalisis LIKE '%DELITO%'";
$tdatacarcel_visualizacion_todos[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacarcel_visualizacion_todos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarcel_visualizacion_todos[".arrGroupsPerPage"] = $arrGPP;

$tdatacarcel_visualizacion_todos[".highlightSearchResults"] = true;

$tableKeyscarcel_visualizacion_todos = array();
$tdatacarcel_visualizacion_todos[".Keys"] = $tableKeyscarcel_visualizacion_todos;

$tdatacarcel_visualizacion_todos[".listFields"] = array();
$tdatacarcel_visualizacion_todos[".listFields"][] = "delitoanalisis";
$tdatacarcel_visualizacion_todos[".listFields"][] = "delitos";

$tdatacarcel_visualizacion_todos[".hideMobileList"] = array();


$tdatacarcel_visualizacion_todos[".viewFields"] = array();
$tdatacarcel_visualizacion_todos[".viewFields"][] = "delitoanalisis";
$tdatacarcel_visualizacion_todos[".viewFields"][] = "delitos";

$tdatacarcel_visualizacion_todos[".addFields"] = array();
$tdatacarcel_visualizacion_todos[".addFields"][] = "delitoanalisis";
$tdatacarcel_visualizacion_todos[".addFields"][] = "delitos";

$tdatacarcel_visualizacion_todos[".masterListFields"] = array();
$tdatacarcel_visualizacion_todos[".masterListFields"][] = "delitoanalisis";
$tdatacarcel_visualizacion_todos[".masterListFields"][] = "delitos";

$tdatacarcel_visualizacion_todos[".inlineAddFields"] = array();
$tdatacarcel_visualizacion_todos[".inlineAddFields"][] = "delitoanalisis";
$tdatacarcel_visualizacion_todos[".inlineAddFields"][] = "delitos";

$tdatacarcel_visualizacion_todos[".editFields"] = array();
$tdatacarcel_visualizacion_todos[".editFields"][] = "delitoanalisis";
$tdatacarcel_visualizacion_todos[".editFields"][] = "delitos";

$tdatacarcel_visualizacion_todos[".inlineEditFields"] = array();
$tdatacarcel_visualizacion_todos[".inlineEditFields"][] = "delitoanalisis";
$tdatacarcel_visualizacion_todos[".inlineEditFields"][] = "delitos";

$tdatacarcel_visualizacion_todos[".updateSelectedFields"] = array();
$tdatacarcel_visualizacion_todos[".updateSelectedFields"][] = "delitoanalisis";
$tdatacarcel_visualizacion_todos[".updateSelectedFields"][] = "delitos";


$tdatacarcel_visualizacion_todos[".exportFields"] = array();
$tdatacarcel_visualizacion_todos[".exportFields"][] = "delitoanalisis";
$tdatacarcel_visualizacion_todos[".exportFields"][] = "delitos";

$tdatacarcel_visualizacion_todos[".importFields"] = array();
$tdatacarcel_visualizacion_todos[".importFields"][] = "delitoanalisis";
$tdatacarcel_visualizacion_todos[".importFields"][] = "delitos";

$tdatacarcel_visualizacion_todos[".printFields"] = array();
$tdatacarcel_visualizacion_todos[".printFields"][] = "delitoanalisis";
$tdatacarcel_visualizacion_todos[".printFields"][] = "delitos";

//	delitoanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "delitoanalisis";
	$fdata["GoodName"] = "delitoanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_visualizacion_todos","delitoanalisis");
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

		$fdata["strField"] = "delitoanalisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delitoanalisis";

	
	
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




	$tdatacarcel_visualizacion_todos["delitoanalisis"] = $fdata;
//	delitos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "delitos";
	$fdata["GoodName"] = "delitos";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("carcel_visualizacion_todos","delitos");
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

		$fdata["strField"] = "delitos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delitos";

	
	
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




	$tdatacarcel_visualizacion_todos["delitos"] = $fdata;


$tables_data["carcel visualizacion todos"]=&$tdatacarcel_visualizacion_todos;
$field_labels["carcel_visualizacion_todos"] = &$fieldLabelscarcel_visualizacion_todos;
$fieldToolTips["carcel_visualizacion_todos"] = &$fieldToolTipscarcel_visualizacion_todos;
$placeHolders["carcel_visualizacion_todos"] = &$placeHolderscarcel_visualizacion_todos;
$page_titles["carcel_visualizacion_todos"] = &$pageTitlescarcel_visualizacion_todos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["carcel visualizacion todos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["carcel visualizacion todos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_carcel_visualizacion_todos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "delitoanalisis,  delitos";
$proto0["m_strFrom"] = "FROM carcel";
$proto0["m_strWhere"] = "delitoanalisis LIKE '%DELITO%'";
$proto0["m_strOrderBy"] = "ORDER BY delitoanalisis DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "delitoanalisis LIKE '%DELITO%'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel visualizacion todos"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "LIKE '%DELITO%'";
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
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel visualizacion todos"
));

$proto6["m_sql"] = "delitoanalisis";
$proto6["m_srcTableName"] = "carcel visualizacion todos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel visualizacion todos"
));

$proto8["m_sql"] = "delitos";
$proto8["m_srcTableName"] = "carcel visualizacion todos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "carcel";
$proto11["m_srcTableName"] = "carcel visualizacion todos";
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
$proto10["m_srcTableName"] = "carcel visualizacion todos";
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
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel visualizacion todos"
));

$proto14["m_column"]=$obj;
$obj = new SQLGroupByItem($proto14);

$proto0["m_groupby"][]=$obj;
												$proto16=array();
						$obj = new SQLField(array(
	"m_strName" => "delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel visualizacion todos"
));

$proto16["m_column"]=$obj;
$obj = new SQLGroupByItem($proto16);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "carcel visualizacion todos"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 0;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="carcel visualizacion todos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carcel_visualizacion_todos = createSqlQuery_carcel_visualizacion_todos();


	
		;

		

$tdatacarcel_visualizacion_todos[".sqlquery"] = $queryData_carcel_visualizacion_todos;

$tableEvents["carcel visualizacion todos"] = new eventsBase;
$tdatacarcel_visualizacion_todos[".hasEvents"] = false;

?>