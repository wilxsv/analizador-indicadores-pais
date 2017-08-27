<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCarcel_hurto_mercaderia = array();
	$tdataCarcel_hurto_mercaderia[".truncateText"] = true;
	$tdataCarcel_hurto_mercaderia[".NumberOfChars"] = 80;
	$tdataCarcel_hurto_mercaderia[".ShortName"] = "Carcel_hurto_mercaderia";
	$tdataCarcel_hurto_mercaderia[".OwnerID"] = "";
	$tdataCarcel_hurto_mercaderia[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsCarcel_hurto_mercaderia = array();
$fieldToolTipsCarcel_hurto_mercaderia = array();
$pageTitlesCarcel_hurto_mercaderia = array();
$placeHoldersCarcel_hurto_mercaderia = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsCarcel_hurto_mercaderia["Spanish"] = array();
	$fieldToolTipsCarcel_hurto_mercaderia["Spanish"] = array();
	$placeHoldersCarcel_hurto_mercaderia["Spanish"] = array();
	$pageTitlesCarcel_hurto_mercaderia["Spanish"] = array();
	$fieldLabelsCarcel_hurto_mercaderia["Spanish"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipsCarcel_hurto_mercaderia["Spanish"]["delitoanalisis"] = "";
	$placeHoldersCarcel_hurto_mercaderia["Spanish"]["delitoanalisis"] = "";
	$fieldLabelsCarcel_hurto_mercaderia["Spanish"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsCarcel_hurto_mercaderia["Spanish"]["COUNT_mun_resid_"] = "";
	$placeHoldersCarcel_hurto_mercaderia["Spanish"]["COUNT_mun_resid_"] = "";
	if (count($fieldToolTipsCarcel_hurto_mercaderia["Spanish"]))
		$tdataCarcel_hurto_mercaderia[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCarcel_hurto_mercaderia["English"] = array();
	$fieldToolTipsCarcel_hurto_mercaderia["English"] = array();
	$placeHoldersCarcel_hurto_mercaderia["English"] = array();
	$pageTitlesCarcel_hurto_mercaderia["English"] = array();
	$fieldLabelsCarcel_hurto_mercaderia["English"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipsCarcel_hurto_mercaderia["English"]["delitoanalisis"] = "";
	$placeHoldersCarcel_hurto_mercaderia["English"]["delitoanalisis"] = "";
	$fieldLabelsCarcel_hurto_mercaderia["English"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsCarcel_hurto_mercaderia["English"]["COUNT_mun_resid_"] = "";
	$placeHoldersCarcel_hurto_mercaderia["English"]["COUNT_mun_resid_"] = "";
	if (count($fieldToolTipsCarcel_hurto_mercaderia["English"]))
		$tdataCarcel_hurto_mercaderia[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCarcel_hurto_mercaderia[""] = array();
	$fieldToolTipsCarcel_hurto_mercaderia[""] = array();
	$placeHoldersCarcel_hurto_mercaderia[""] = array();
	$pageTitlesCarcel_hurto_mercaderia[""] = array();
	if (count($fieldToolTipsCarcel_hurto_mercaderia[""]))
		$tdataCarcel_hurto_mercaderia[".isUseToolTips"] = true;
}





$tdataCarcel_hurto_mercaderia[".shortTableName"] = "Carcel_hurto_mercaderia";
$tdataCarcel_hurto_mercaderia[".nSecOptions"] = 0;
$tdataCarcel_hurto_mercaderia[".recsPerRowPrint"] = 1;
$tdataCarcel_hurto_mercaderia[".mainTableOwnerID"] = "";
$tdataCarcel_hurto_mercaderia[".moveNext"] = 1;
$tdataCarcel_hurto_mercaderia[".entityType"] = 1;

$tdataCarcel_hurto_mercaderia[".strOriginalTableName"] = "carcel";

	



$tdataCarcel_hurto_mercaderia[".showAddInPopup"] = false;

$tdataCarcel_hurto_mercaderia[".showEditInPopup"] = false;

$tdataCarcel_hurto_mercaderia[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCarcel_hurto_mercaderia[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCarcel_hurto_mercaderia[".fieldsForRegister"] = array();

	$tdataCarcel_hurto_mercaderia[".listAjax"] = true;

	$tdataCarcel_hurto_mercaderia[".audit"] = false;

	$tdataCarcel_hurto_mercaderia[".locking"] = false;



$tdataCarcel_hurto_mercaderia[".list"] = true;



$tdataCarcel_hurto_mercaderia[".reorderRecordsByHeader"] = true;
$tdataCarcel_hurto_mercaderia[".createSortByDropdown"] = true;
$tdataCarcel_hurto_mercaderia[".strSortControlSettingsJSON"] = "";




$tdataCarcel_hurto_mercaderia[".import"] = true;

$tdataCarcel_hurto_mercaderia[".exportTo"] = true;

$tdataCarcel_hurto_mercaderia[".printFriendly"] = true;


$tdataCarcel_hurto_mercaderia[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataCarcel_hurto_mercaderia[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataCarcel_hurto_mercaderia[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataCarcel_hurto_mercaderia[".searchSaving"] = false;
//

$tdataCarcel_hurto_mercaderia[".showSearchPanel"] = true;
		$tdataCarcel_hurto_mercaderia[".flexibleSearch"] = true;

$tdataCarcel_hurto_mercaderia[".isUseAjaxSuggest"] = true;

$tdataCarcel_hurto_mercaderia[".rowHighlite"] = true;





$tdataCarcel_hurto_mercaderia[".ajaxCodeSnippetAdded"] = false;

$tdataCarcel_hurto_mercaderia[".buttonsAdded"] = false;

$tdataCarcel_hurto_mercaderia[".addPageEvents"] = false;

// use timepicker for search panel
$tdataCarcel_hurto_mercaderia[".isUseTimeForSearch"] = false;





$tdataCarcel_hurto_mercaderia[".allSearchFields"] = array();
$tdataCarcel_hurto_mercaderia[".filterFields"] = array();
$tdataCarcel_hurto_mercaderia[".requiredSearchFields"] = array();

$tdataCarcel_hurto_mercaderia[".allSearchFields"][] = "delitoanalisis";
	$tdataCarcel_hurto_mercaderia[".allSearchFields"][] = "COUNT(mun_resid)";
	

$tdataCarcel_hurto_mercaderia[".googleLikeFields"] = array();
$tdataCarcel_hurto_mercaderia[".googleLikeFields"][] = "delitoanalisis";
$tdataCarcel_hurto_mercaderia[".googleLikeFields"][] = "COUNT(mun_resid)";


$tdataCarcel_hurto_mercaderia[".advSearchFields"] = array();
$tdataCarcel_hurto_mercaderia[".advSearchFields"][] = "delitoanalisis";
$tdataCarcel_hurto_mercaderia[".advSearchFields"][] = "COUNT(mun_resid)";

$tdataCarcel_hurto_mercaderia[".tableType"] = "list";

$tdataCarcel_hurto_mercaderia[".printerPageOrientation"] = 0;
$tdataCarcel_hurto_mercaderia[".nPrinterPageScale"] = 100;

$tdataCarcel_hurto_mercaderia[".nPrinterSplitRecords"] = 40;

$tdataCarcel_hurto_mercaderia[".nPrinterPDFSplitRecords"] = 40;



$tdataCarcel_hurto_mercaderia[".geocodingEnabled"] = false;





$tdataCarcel_hurto_mercaderia[".listGridLayout"] = 3;

$tdataCarcel_hurto_mercaderia[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdataCarcel_hurto_mercaderia[".pageSize"] = 10;

$tdataCarcel_hurto_mercaderia[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY delitoanalisis DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCarcel_hurto_mercaderia[".strOrderBy"] = $tstrOrderBy;

$tdataCarcel_hurto_mercaderia[".orderindexes"] = array();
$tdataCarcel_hurto_mercaderia[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "delitoanalisis");

$tdataCarcel_hurto_mercaderia[".sqlHead"] = "SELECT delitoanalisis,  COUNT(mun_resid) AS `COUNT(mun_resid)`";
$tdataCarcel_hurto_mercaderia[".sqlFrom"] = "FROM carcel";
$tdataCarcel_hurto_mercaderia[".sqlWhereExpr"] = "";
$tdataCarcel_hurto_mercaderia[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCarcel_hurto_mercaderia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCarcel_hurto_mercaderia[".arrGroupsPerPage"] = $arrGPP;

$tdataCarcel_hurto_mercaderia[".highlightSearchResults"] = true;

$tableKeysCarcel_hurto_mercaderia = array();
$tdataCarcel_hurto_mercaderia[".Keys"] = $tableKeysCarcel_hurto_mercaderia;

$tdataCarcel_hurto_mercaderia[".listFields"] = array();
$tdataCarcel_hurto_mercaderia[".listFields"][] = "delitoanalisis";
$tdataCarcel_hurto_mercaderia[".listFields"][] = "COUNT(mun_resid)";

$tdataCarcel_hurto_mercaderia[".hideMobileList"] = array();


$tdataCarcel_hurto_mercaderia[".viewFields"] = array();

$tdataCarcel_hurto_mercaderia[".addFields"] = array();

$tdataCarcel_hurto_mercaderia[".masterListFields"] = array();
$tdataCarcel_hurto_mercaderia[".masterListFields"][] = "delitoanalisis";
$tdataCarcel_hurto_mercaderia[".masterListFields"][] = "COUNT(mun_resid)";

$tdataCarcel_hurto_mercaderia[".inlineAddFields"] = array();

$tdataCarcel_hurto_mercaderia[".editFields"] = array();

$tdataCarcel_hurto_mercaderia[".inlineEditFields"] = array();

$tdataCarcel_hurto_mercaderia[".updateSelectedFields"] = array();


$tdataCarcel_hurto_mercaderia[".exportFields"] = array();
$tdataCarcel_hurto_mercaderia[".exportFields"][] = "delitoanalisis";
$tdataCarcel_hurto_mercaderia[".exportFields"][] = "COUNT(mun_resid)";

$tdataCarcel_hurto_mercaderia[".importFields"] = array();
$tdataCarcel_hurto_mercaderia[".importFields"][] = "delitoanalisis";
$tdataCarcel_hurto_mercaderia[".importFields"][] = "COUNT(mun_resid)";

$tdataCarcel_hurto_mercaderia[".printFields"] = array();
$tdataCarcel_hurto_mercaderia[".printFields"][] = "delitoanalisis";
$tdataCarcel_hurto_mercaderia[".printFields"][] = "COUNT(mun_resid)";

//	delitoanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "delitoanalisis";
	$fdata["GoodName"] = "delitoanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("Carcel_hurto_mercaderia","delitoanalisis");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataCarcel_hurto_mercaderia["delitoanalisis"] = $fdata;
//	COUNT(mun_resid)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "COUNT(mun_resid)";
	$fdata["GoodName"] = "COUNT_mun_resid_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Carcel_hurto_mercaderia","COUNT_mun_resid_");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(mun_resid)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(mun_resid)";

	
	
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




	$tdataCarcel_hurto_mercaderia["COUNT(mun_resid)"] = $fdata;


$tables_data["Carcel_hurto_mercaderia"]=&$tdataCarcel_hurto_mercaderia;
$field_labels["Carcel_hurto_mercaderia"] = &$fieldLabelsCarcel_hurto_mercaderia;
$fieldToolTips["Carcel_hurto_mercaderia"] = &$fieldToolTipsCarcel_hurto_mercaderia;
$placeHolders["Carcel_hurto_mercaderia"] = &$placeHoldersCarcel_hurto_mercaderia;
$page_titles["Carcel_hurto_mercaderia"] = &$pageTitlesCarcel_hurto_mercaderia;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Carcel_hurto_mercaderia"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Carcel_hurto_mercaderia"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Carcel_hurto_mercaderia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "delitoanalisis,  COUNT(mun_resid) AS `COUNT(mun_resid)`";
$proto0["m_strFrom"] = "FROM carcel";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY delitoanalisis DESC";
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
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Carcel_hurto_mercaderia"
));

$proto6["m_sql"] = "delitoanalisis";
$proto6["m_srcTableName"] = "Carcel_hurto_mercaderia";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_COUNT";
$proto9["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Carcel_hurto_mercaderia"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "COUNT(mun_resid)";
$proto8["m_srcTableName"] = "Carcel_hurto_mercaderia";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "COUNT(mun_resid)";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "carcel";
$proto12["m_srcTableName"] = "Carcel_hurto_mercaderia";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "sipe";
$proto12["m_columns"][] = "afis";
$proto12["m_columns"][] = "edad";
$proto12["m_columns"][] = "rangoetario";
$proto12["m_columns"][] = "genero";
$proto12["m_columns"][] = "fecha_nac";
$proto12["m_columns"][] = "edad1";
$proto12["m_columns"][] = "dui";
$proto12["m_columns"][] = "nivel_edu";
$proto12["m_columns"][] = "educacionanalisis";
$proto12["m_columns"][] = "profesion_oficio";
$proto12["m_columns"][] = "estado_civil";
$proto12["m_columns"][] = "ciudadania";
$proto12["m_columns"][] = "mun_nacimiento";
$proto12["m_columns"][] = "depto_nacim";
$proto12["m_columns"][] = "direccion";
$proto12["m_columns"][] = "mun_resid";
$proto12["m_columns"][] = "depart_resid";
$proto12["m_columns"][] = "delitosanalisis";
$proto12["m_columns"][] = "sj_interno";
$proto12["m_columns"][] = "fase";
$proto12["m_columns"][] = "org_delictiva";
$proto12["m_columns"][] = "tipo_mara";
$proto12["m_columns"][] = "reincidente";
$proto12["m_columns"][] = "deportado";
$proto12["m_columns"][] = "direccion1";
$proto12["m_columns"][] = "sector";
$proto12["m_columns"][] = "celda";
$proto12["m_columns"][] = "fecha_ing__sp";
$proto12["m_columns"][] = "libro";
$proto12["m_columns"][] = "fecha_ing__cp";
$proto12["m_columns"][] = "total_delitos";
$proto12["m_columns"][] = "delitos";
$proto12["m_columns"][] = "delitoanalisis";
$proto12["m_columns"][] = "sector_ppd";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "carcel";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "Carcel_hurto_mercaderia";
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
												$proto15=array();
						$obj = new SQLField(array(
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Carcel_hurto_mercaderia"
));

$proto15["m_column"]=$obj;
$obj = new SQLGroupByItem($proto15);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto17=array();
						$obj = new SQLField(array(
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "Carcel_hurto_mercaderia"
));

$proto17["m_column"]=$obj;
$proto17["m_bAsc"] = 0;
$proto17["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto17);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Carcel_hurto_mercaderia";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Carcel_hurto_mercaderia = createSqlQuery_Carcel_hurto_mercaderia();


	
		;

		

$tdataCarcel_hurto_mercaderia[".sqlquery"] = $queryData_Carcel_hurto_mercaderia;

$tableEvents["Carcel_hurto_mercaderia"] = new eventsBase;
$tdataCarcel_hurto_mercaderia[".hasEvents"] = false;

?>