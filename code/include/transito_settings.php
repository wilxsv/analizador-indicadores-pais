<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatransito = array();
	$tdatatransito[".truncateText"] = true;
	$tdatatransito[".NumberOfChars"] = 80;
	$tdatatransito[".ShortName"] = "transito";
	$tdatatransito[".OwnerID"] = "";
	$tdatatransito[".OriginalTable"] = "transito";

//	field labels
$fieldLabelstransito = array();
$fieldToolTipstransito = array();
$pageTitlestransito = array();
$placeHolderstransito = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstransito["Spanish"] = array();
	$fieldToolTipstransito["Spanish"] = array();
	$placeHolderstransito["Spanish"] = array();
	$pageTitlestransito["Spanish"] = array();
	$fieldLabelstransito["Spanish"]["clares"] = "Clares";
	$fieldToolTipstransito["Spanish"]["clares"] = "";
	$placeHolderstransito["Spanish"]["clares"] = "";
	$fieldLabelstransito["Spanish"]["tipo_analisis"] = "Tipo Analisis";
	$fieldToolTipstransito["Spanish"]["tipo_analisis"] = "";
	$placeHolderstransito["Spanish"]["tipo_analisis"] = "";
	if (count($fieldToolTipstransito["Spanish"]))
		$tdatatransito[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstransito["English"] = array();
	$fieldToolTipstransito["English"] = array();
	$placeHolderstransito["English"] = array();
	$pageTitlestransito["English"] = array();
	$fieldLabelstransito["English"]["clares"] = "Clares";
	$fieldToolTipstransito["English"]["clares"] = "";
	$placeHolderstransito["English"]["clares"] = "";
	$fieldLabelstransito["English"]["tipo_analisis"] = "Tipo Analisis";
	$fieldToolTipstransito["English"]["tipo_analisis"] = "";
	$placeHolderstransito["English"]["tipo_analisis"] = "";
	if (count($fieldToolTipstransito["English"]))
		$tdatatransito[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstransito[""] = array();
	$fieldToolTipstransito[""] = array();
	$placeHolderstransito[""] = array();
	$pageTitlestransito[""] = array();
	if (count($fieldToolTipstransito[""]))
		$tdatatransito[".isUseToolTips"] = true;
}


	$tdatatransito[".NCSearch"] = true;



$tdatatransito[".shortTableName"] = "transito";
$tdatatransito[".nSecOptions"] = 0;
$tdatatransito[".recsPerRowPrint"] = 1;
$tdatatransito[".mainTableOwnerID"] = "";
$tdatatransito[".moveNext"] = 1;
$tdatatransito[".entityType"] = 0;

$tdatatransito[".strOriginalTableName"] = "transito";

	



$tdatatransito[".showAddInPopup"] = false;

$tdatatransito[".showEditInPopup"] = false;

$tdatatransito[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatransito[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatransito[".fieldsForRegister"] = array();

	$tdatatransito[".listAjax"] = true;

	$tdatatransito[".audit"] = false;

	$tdatatransito[".locking"] = false;



$tdatatransito[".list"] = true;



$tdatatransito[".reorderRecordsByHeader"] = true;
$tdatatransito[".createSortByDropdown"] = true;
$tdatatransito[".strSortControlSettingsJSON"] = "";




$tdatatransito[".import"] = true;

$tdatatransito[".exportTo"] = true;

$tdatatransito[".printFriendly"] = true;


$tdatatransito[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatatransito[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatatransito[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatatransito[".searchSaving"] = false;
//

$tdatatransito[".showSearchPanel"] = true;
		$tdatatransito[".flexibleSearch"] = true;

$tdatatransito[".isUseAjaxSuggest"] = true;

$tdatatransito[".rowHighlite"] = true;





$tdatatransito[".ajaxCodeSnippetAdded"] = false;

$tdatatransito[".buttonsAdded"] = false;

$tdatatransito[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatransito[".isUseTimeForSearch"] = false;





$tdatatransito[".allSearchFields"] = array();
$tdatatransito[".filterFields"] = array();
$tdatatransito[".requiredSearchFields"] = array();

$tdatatransito[".allSearchFields"][] = "tipo_analisis";
	$tdatatransito[".allSearchFields"][] = "clares";
	

$tdatatransito[".googleLikeFields"] = array();
$tdatatransito[".googleLikeFields"][] = "tipo_analisis";
$tdatatransito[".googleLikeFields"][] = "clares";


$tdatatransito[".advSearchFields"] = array();
$tdatatransito[".advSearchFields"][] = "tipo_analisis";
$tdatatransito[".advSearchFields"][] = "clares";

$tdatatransito[".tableType"] = "list";

$tdatatransito[".printerPageOrientation"] = 0;
$tdatatransito[".nPrinterPageScale"] = 100;

$tdatatransito[".nPrinterSplitRecords"] = 40;

$tdatatransito[".nPrinterPDFSplitRecords"] = 40;



$tdatatransito[".geocodingEnabled"] = false;





$tdatatransito[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatatransito[".pageSize"] = 20;

$tdatatransito[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatransito[".strOrderBy"] = $tstrOrderBy;

$tdatatransito[".orderindexes"] = array();

$tdatatransito[".sqlHead"] = "SELECT tipo_analisis,  clares";
$tdatatransito[".sqlFrom"] = "FROM transito";
$tdatatransito[".sqlWhereExpr"] = "";
$tdatatransito[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatransito[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatransito[".arrGroupsPerPage"] = $arrGPP;

$tdatatransito[".highlightSearchResults"] = true;

$tableKeystransito = array();
$tdatatransito[".Keys"] = $tableKeystransito;

$tdatatransito[".listFields"] = array();
$tdatatransito[".listFields"][] = "tipo_analisis";
$tdatatransito[".listFields"][] = "clares";

$tdatatransito[".hideMobileList"] = array();


$tdatatransito[".viewFields"] = array();
$tdatatransito[".viewFields"][] = "tipo_analisis";
$tdatatransito[".viewFields"][] = "clares";

$tdatatransito[".addFields"] = array();
$tdatatransito[".addFields"][] = "tipo_analisis";
$tdatatransito[".addFields"][] = "clares";

$tdatatransito[".masterListFields"] = array();
$tdatatransito[".masterListFields"][] = "tipo_analisis";
$tdatatransito[".masterListFields"][] = "clares";

$tdatatransito[".inlineAddFields"] = array();
$tdatatransito[".inlineAddFields"][] = "tipo_analisis";
$tdatatransito[".inlineAddFields"][] = "clares";

$tdatatransito[".editFields"] = array();
$tdatatransito[".editFields"][] = "tipo_analisis";
$tdatatransito[".editFields"][] = "clares";

$tdatatransito[".inlineEditFields"] = array();
$tdatatransito[".inlineEditFields"][] = "tipo_analisis";
$tdatatransito[".inlineEditFields"][] = "clares";

$tdatatransito[".updateSelectedFields"] = array();
$tdatatransito[".updateSelectedFields"][] = "tipo_analisis";
$tdatatransito[".updateSelectedFields"][] = "clares";


$tdatatransito[".exportFields"] = array();
$tdatatransito[".exportFields"][] = "tipo_analisis";
$tdatatransito[".exportFields"][] = "clares";

$tdatatransito[".importFields"] = array();
$tdatatransito[".importFields"][] = "tipo_analisis";
$tdatatransito[".importFields"][] = "clares";

$tdatatransito[".printFields"] = array();
$tdatatransito[".printFields"][] = "tipo_analisis";
$tdatatransito[".printFields"][] = "clares";

//	tipo_analisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tipo_analisis";
	$fdata["GoodName"] = "tipo_analisis";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito","tipo_analisis");
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

		$fdata["strField"] = "tipo_analisis";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_analisis";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdatatransito["tipo_analisis"] = $fdata;
//	clares
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "clares";
	$fdata["GoodName"] = "clares";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("transito","clares");
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

		$fdata["strField"] = "clares";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clares";

	
	
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




	$tdatatransito["clares"] = $fdata;


$tables_data["transito"]=&$tdatatransito;
$field_labels["transito"] = &$fieldLabelstransito;
$fieldToolTips["transito"] = &$fieldToolTipstransito;
$placeHolders["transito"] = &$placeHolderstransito;
$page_titles["transito"] = &$pageTitlestransito;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["transito"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["transito"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_transito()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tipo_analisis,  clares";
$proto0["m_strFrom"] = "FROM transito";
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
	"m_strName" => "tipo_analisis",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito"
));

$proto6["m_sql"] = "tipo_analisis";
$proto6["m_srcTableName"] = "transito";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "clares",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito"
));

$proto8["m_sql"] = "clares";
$proto8["m_srcTableName"] = "transito";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "transito";
$proto11["m_srcTableName"] = "transito";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "eid";
$proto11["m_columns"][] = "pid";
$proto11["m_columns"][] = "unidad";
$proto11["m_columns"][] = "sexo";
$proto11["m_columns"][] = "edad";
$proto11["m_columns"][] = "resu";
$proto11["m_columns"][] = "calidad";
$proto11["m_columns"][] = "fecacc";
$proto11["m_columns"][] = "horacc";
$proto11["m_columns"][] = "rangohorario";
$proto11["m_columns"][] = "tipacc";
$proto11["m_columns"][] = "cauacc";
$proto11["m_columns"][] = "diracc";
$proto11["m_columns"][] = "munacc";
$proto11["m_columns"][] = "clares";
$proto11["m_columns"][] = "rutres";
$proto11["m_columns"][] = "repdet";
$proto11["m_columns"][] = "departamento";
$proto11["m_columns"][] = "dia";
$proto11["m_columns"][] = "sectorppd";
$proto11["m_columns"][] = "rangoetario";
$proto11["m_columns"][] = "causa_analisis";
$proto11["m_columns"][] = "tipo_analisis";
$proto11["m_columns"][] = "mes_analisis";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "transito";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "transito";
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
	"m_strName" => "tipo_analisis",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito"
));

$proto14["m_column"]=$obj;
$obj = new SQLGroupByItem($proto14);

$proto0["m_groupby"][]=$obj;
												$proto16=array();
						$obj = new SQLField(array(
	"m_strName" => "clares",
	"m_strTable" => "transito",
	"m_srcTableName" => "transito"
));

$proto16["m_column"]=$obj;
$obj = new SQLGroupByItem($proto16);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="transito";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_transito = createSqlQuery_transito();


	
		;

		

$tdatatransito[".sqlquery"] = $queryData_transito;

$tableEvents["transito"] = new eventsBase;
$tdatatransito[".hasEvents"] = false;

?>