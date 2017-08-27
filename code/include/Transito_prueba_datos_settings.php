<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTransito_prueba_datos = array();
	$tdataTransito_prueba_datos[".truncateText"] = true;
	$tdataTransito_prueba_datos[".NumberOfChars"] = 80;
	$tdataTransito_prueba_datos[".ShortName"] = "Transito_prueba_datos";
	$tdataTransito_prueba_datos[".OwnerID"] = "";
	$tdataTransito_prueba_datos[".OriginalTable"] = "transito";

//	field labels
$fieldLabelsTransito_prueba_datos = array();
$fieldToolTipsTransito_prueba_datos = array();
$pageTitlesTransito_prueba_datos = array();
$placeHoldersTransito_prueba_datos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsTransito_prueba_datos["Spanish"] = array();
	$fieldToolTipsTransito_prueba_datos["Spanish"] = array();
	$placeHoldersTransito_prueba_datos["Spanish"] = array();
	$pageTitlesTransito_prueba_datos["Spanish"] = array();
	$fieldLabelsTransito_prueba_datos["Spanish"]["tipo_analisis"] = "Tipo Analisis";
	$fieldToolTipsTransito_prueba_datos["Spanish"]["tipo_analisis"] = "";
	$placeHoldersTransito_prueba_datos["Spanish"]["tipo_analisis"] = "";
	$fieldLabelsTransito_prueba_datos["Spanish"]["munacc"] = "Munacc";
	$fieldToolTipsTransito_prueba_datos["Spanish"]["munacc"] = "";
	$placeHoldersTransito_prueba_datos["Spanish"]["munacc"] = "";
	$fieldLabelsTransito_prueba_datos["Spanish"]["COUNT_munacc_"] = "COUNT(munacc)";
	$fieldToolTipsTransito_prueba_datos["Spanish"]["COUNT_munacc_"] = "";
	$placeHoldersTransito_prueba_datos["Spanish"]["COUNT_munacc_"] = "";
	if (count($fieldToolTipsTransito_prueba_datos["Spanish"]))
		$tdataTransito_prueba_datos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTransito_prueba_datos["English"] = array();
	$fieldToolTipsTransito_prueba_datos["English"] = array();
	$placeHoldersTransito_prueba_datos["English"] = array();
	$pageTitlesTransito_prueba_datos["English"] = array();
	$fieldLabelsTransito_prueba_datos["English"]["tipo_analisis"] = "Tipo Analisis";
	$fieldToolTipsTransito_prueba_datos["English"]["tipo_analisis"] = "";
	$placeHoldersTransito_prueba_datos["English"]["tipo_analisis"] = "";
	$fieldLabelsTransito_prueba_datos["English"]["munacc"] = "Munacc";
	$fieldToolTipsTransito_prueba_datos["English"]["munacc"] = "";
	$placeHoldersTransito_prueba_datos["English"]["munacc"] = "";
	$fieldLabelsTransito_prueba_datos["English"]["COUNT_munacc_"] = "COUNT(munacc)";
	$fieldToolTipsTransito_prueba_datos["English"]["COUNT_munacc_"] = "";
	$placeHoldersTransito_prueba_datos["English"]["COUNT_munacc_"] = "";
	if (count($fieldToolTipsTransito_prueba_datos["English"]))
		$tdataTransito_prueba_datos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTransito_prueba_datos[""] = array();
	$fieldToolTipsTransito_prueba_datos[""] = array();
	$placeHoldersTransito_prueba_datos[""] = array();
	$pageTitlesTransito_prueba_datos[""] = array();
	if (count($fieldToolTipsTransito_prueba_datos[""]))
		$tdataTransito_prueba_datos[".isUseToolTips"] = true;
}


	$tdataTransito_prueba_datos[".NCSearch"] = true;



$tdataTransito_prueba_datos[".shortTableName"] = "Transito_prueba_datos";
$tdataTransito_prueba_datos[".nSecOptions"] = 0;
$tdataTransito_prueba_datos[".recsPerRowPrint"] = 1;
$tdataTransito_prueba_datos[".mainTableOwnerID"] = "";
$tdataTransito_prueba_datos[".moveNext"] = 1;
$tdataTransito_prueba_datos[".entityType"] = 1;

$tdataTransito_prueba_datos[".strOriginalTableName"] = "transito";

	



$tdataTransito_prueba_datos[".showAddInPopup"] = false;

$tdataTransito_prueba_datos[".showEditInPopup"] = false;

$tdataTransito_prueba_datos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTransito_prueba_datos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTransito_prueba_datos[".fieldsForRegister"] = array();

	$tdataTransito_prueba_datos[".listAjax"] = true;

	$tdataTransito_prueba_datos[".audit"] = false;

	$tdataTransito_prueba_datos[".locking"] = false;



$tdataTransito_prueba_datos[".list"] = true;



$tdataTransito_prueba_datos[".reorderRecordsByHeader"] = true;
$tdataTransito_prueba_datos[".createSortByDropdown"] = true;
$tdataTransito_prueba_datos[".strSortControlSettingsJSON"] = "";




$tdataTransito_prueba_datos[".import"] = true;

$tdataTransito_prueba_datos[".exportTo"] = true;

$tdataTransito_prueba_datos[".printFriendly"] = true;


$tdataTransito_prueba_datos[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataTransito_prueba_datos[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataTransito_prueba_datos[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataTransito_prueba_datos[".searchSaving"] = false;
//

$tdataTransito_prueba_datos[".showSearchPanel"] = true;
		$tdataTransito_prueba_datos[".flexibleSearch"] = true;

$tdataTransito_prueba_datos[".isUseAjaxSuggest"] = true;

$tdataTransito_prueba_datos[".rowHighlite"] = true;





$tdataTransito_prueba_datos[".ajaxCodeSnippetAdded"] = false;

$tdataTransito_prueba_datos[".buttonsAdded"] = false;

$tdataTransito_prueba_datos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTransito_prueba_datos[".isUseTimeForSearch"] = false;





$tdataTransito_prueba_datos[".allSearchFields"] = array();
$tdataTransito_prueba_datos[".filterFields"] = array();
$tdataTransito_prueba_datos[".requiredSearchFields"] = array();

$tdataTransito_prueba_datos[".allSearchFields"][] = "tipo_analisis";
	$tdataTransito_prueba_datos[".allSearchFields"][] = "munacc";
	$tdataTransito_prueba_datos[".allSearchFields"][] = "COUNT(munacc)";
	

$tdataTransito_prueba_datos[".googleLikeFields"] = array();
$tdataTransito_prueba_datos[".googleLikeFields"][] = "tipo_analisis";
$tdataTransito_prueba_datos[".googleLikeFields"][] = "munacc";
$tdataTransito_prueba_datos[".googleLikeFields"][] = "COUNT(munacc)";


$tdataTransito_prueba_datos[".advSearchFields"] = array();
$tdataTransito_prueba_datos[".advSearchFields"][] = "tipo_analisis";
$tdataTransito_prueba_datos[".advSearchFields"][] = "munacc";
$tdataTransito_prueba_datos[".advSearchFields"][] = "COUNT(munacc)";

$tdataTransito_prueba_datos[".tableType"] = "list";

$tdataTransito_prueba_datos[".printerPageOrientation"] = 0;
$tdataTransito_prueba_datos[".nPrinterPageScale"] = 100;

$tdataTransito_prueba_datos[".nPrinterSplitRecords"] = 40;

$tdataTransito_prueba_datos[".nPrinterPDFSplitRecords"] = 40;



$tdataTransito_prueba_datos[".geocodingEnabled"] = false;





$tdataTransito_prueba_datos[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataTransito_prueba_datos[".pageSize"] = 20;

$tdataTransito_prueba_datos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTransito_prueba_datos[".strOrderBy"] = $tstrOrderBy;

$tdataTransito_prueba_datos[".orderindexes"] = array();

$tdataTransito_prueba_datos[".sqlHead"] = "SELECT tipo_analisis,  munacc,  COUNT(munacc) AS `COUNT(munacc)`";
$tdataTransito_prueba_datos[".sqlFrom"] = "FROM transito";
$tdataTransito_prueba_datos[".sqlWhereExpr"] = "munacc like '%Ahuacha%'";
$tdataTransito_prueba_datos[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTransito_prueba_datos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTransito_prueba_datos[".arrGroupsPerPage"] = $arrGPP;

$tdataTransito_prueba_datos[".highlightSearchResults"] = true;

$tableKeysTransito_prueba_datos = array();
$tdataTransito_prueba_datos[".Keys"] = $tableKeysTransito_prueba_datos;

$tdataTransito_prueba_datos[".listFields"] = array();
$tdataTransito_prueba_datos[".listFields"][] = "tipo_analisis";
$tdataTransito_prueba_datos[".listFields"][] = "munacc";
$tdataTransito_prueba_datos[".listFields"][] = "COUNT(munacc)";

$tdataTransito_prueba_datos[".hideMobileList"] = array();


$tdataTransito_prueba_datos[".viewFields"] = array();
$tdataTransito_prueba_datos[".viewFields"][] = "tipo_analisis";
$tdataTransito_prueba_datos[".viewFields"][] = "munacc";
$tdataTransito_prueba_datos[".viewFields"][] = "COUNT(munacc)";

$tdataTransito_prueba_datos[".addFields"] = array();
$tdataTransito_prueba_datos[".addFields"][] = "tipo_analisis";
$tdataTransito_prueba_datos[".addFields"][] = "munacc";

$tdataTransito_prueba_datos[".masterListFields"] = array();
$tdataTransito_prueba_datos[".masterListFields"][] = "tipo_analisis";
$tdataTransito_prueba_datos[".masterListFields"][] = "munacc";
$tdataTransito_prueba_datos[".masterListFields"][] = "COUNT(munacc)";

$tdataTransito_prueba_datos[".inlineAddFields"] = array();
$tdataTransito_prueba_datos[".inlineAddFields"][] = "tipo_analisis";
$tdataTransito_prueba_datos[".inlineAddFields"][] = "munacc";

$tdataTransito_prueba_datos[".editFields"] = array();
$tdataTransito_prueba_datos[".editFields"][] = "tipo_analisis";
$tdataTransito_prueba_datos[".editFields"][] = "munacc";

$tdataTransito_prueba_datos[".inlineEditFields"] = array();
$tdataTransito_prueba_datos[".inlineEditFields"][] = "tipo_analisis";
$tdataTransito_prueba_datos[".inlineEditFields"][] = "munacc";

$tdataTransito_prueba_datos[".updateSelectedFields"] = array();
$tdataTransito_prueba_datos[".updateSelectedFields"][] = "tipo_analisis";
$tdataTransito_prueba_datos[".updateSelectedFields"][] = "munacc";


$tdataTransito_prueba_datos[".exportFields"] = array();
$tdataTransito_prueba_datos[".exportFields"][] = "tipo_analisis";
$tdataTransito_prueba_datos[".exportFields"][] = "munacc";
$tdataTransito_prueba_datos[".exportFields"][] = "COUNT(munacc)";

$tdataTransito_prueba_datos[".importFields"] = array();
$tdataTransito_prueba_datos[".importFields"][] = "tipo_analisis";
$tdataTransito_prueba_datos[".importFields"][] = "munacc";
$tdataTransito_prueba_datos[".importFields"][] = "COUNT(munacc)";

$tdataTransito_prueba_datos[".printFields"] = array();
$tdataTransito_prueba_datos[".printFields"][] = "tipo_analisis";
$tdataTransito_prueba_datos[".printFields"][] = "munacc";
$tdataTransito_prueba_datos[".printFields"][] = "COUNT(munacc)";

//	tipo_analisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tipo_analisis";
	$fdata["GoodName"] = "tipo_analisis";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("Transito_prueba_datos","tipo_analisis");
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




	$tdataTransito_prueba_datos["tipo_analisis"] = $fdata;
//	munacc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "munacc";
	$fdata["GoodName"] = "munacc";
	$fdata["ownerTable"] = "transito";
	$fdata["Label"] = GetFieldLabel("Transito_prueba_datos","munacc");
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

		$fdata["strField"] = "munacc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "munacc";

	
	
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




	$tdataTransito_prueba_datos["munacc"] = $fdata;
//	COUNT(munacc)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "COUNT(munacc)";
	$fdata["GoodName"] = "COUNT_munacc_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Transito_prueba_datos","COUNT_munacc_");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(munacc)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(munacc)";

	
	
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




	$tdataTransito_prueba_datos["COUNT(munacc)"] = $fdata;


$tables_data["Transito prueba datos"]=&$tdataTransito_prueba_datos;
$field_labels["Transito_prueba_datos"] = &$fieldLabelsTransito_prueba_datos;
$fieldToolTips["Transito_prueba_datos"] = &$fieldToolTipsTransito_prueba_datos;
$placeHolders["Transito_prueba_datos"] = &$placeHoldersTransito_prueba_datos;
$page_titles["Transito_prueba_datos"] = &$pageTitlesTransito_prueba_datos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Transito prueba datos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Transito prueba datos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Transito_prueba_datos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tipo_analisis,  munacc,  COUNT(munacc) AS `COUNT(munacc)`";
$proto0["m_strFrom"] = "FROM transito";
$proto0["m_strWhere"] = "munacc like '%Ahuacha%'";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "munacc like '%Ahuacha%'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "munacc",
	"m_strTable" => "transito",
	"m_srcTableName" => "Transito prueba datos"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "like '%Ahuacha%'";
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
	"m_srcTableName" => "Transito prueba datos"
));

$proto6["m_sql"] = "tipo_analisis";
$proto6["m_srcTableName"] = "Transito prueba datos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "munacc",
	"m_strTable" => "transito",
	"m_srcTableName" => "Transito prueba datos"
));

$proto8["m_sql"] = "munacc";
$proto8["m_srcTableName"] = "Transito prueba datos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_COUNT";
$proto11["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "munacc",
	"m_strTable" => "transito",
	"m_srcTableName" => "Transito prueba datos"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "COUNT(munacc)";
$proto10["m_srcTableName"] = "Transito prueba datos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "COUNT(munacc)";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "transito";
$proto14["m_srcTableName"] = "Transito prueba datos";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "eid";
$proto14["m_columns"][] = "pid";
$proto14["m_columns"][] = "unidad";
$proto14["m_columns"][] = "sexo";
$proto14["m_columns"][] = "edad";
$proto14["m_columns"][] = "resu";
$proto14["m_columns"][] = "calidad";
$proto14["m_columns"][] = "fecacc";
$proto14["m_columns"][] = "horacc";
$proto14["m_columns"][] = "rangohorario";
$proto14["m_columns"][] = "tipacc";
$proto14["m_columns"][] = "cauacc";
$proto14["m_columns"][] = "diracc";
$proto14["m_columns"][] = "munacc";
$proto14["m_columns"][] = "clares";
$proto14["m_columns"][] = "rutres";
$proto14["m_columns"][] = "repdet";
$proto14["m_columns"][] = "departamento";
$proto14["m_columns"][] = "dia";
$proto14["m_columns"][] = "sectorppd";
$proto14["m_columns"][] = "rangoetario";
$proto14["m_columns"][] = "causa_analisis";
$proto14["m_columns"][] = "tipo_analisis";
$proto14["m_columns"][] = "mes_analisis";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "transito";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "Transito prueba datos";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto17=array();
						$obj = new SQLField(array(
	"m_strName" => "tipo_analisis",
	"m_strTable" => "transito",
	"m_srcTableName" => "Transito prueba datos"
));

$proto17["m_column"]=$obj;
$obj = new SQLGroupByItem($proto17);

$proto0["m_groupby"][]=$obj;
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "munacc",
	"m_strTable" => "transito",
	"m_srcTableName" => "Transito prueba datos"
));

$proto19["m_column"]=$obj;
$obj = new SQLGroupByItem($proto19);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Transito prueba datos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Transito_prueba_datos = createSqlQuery_Transito_prueba_datos();


	
		;

			

$tdataTransito_prueba_datos[".sqlquery"] = $queryData_Transito_prueba_datos;

$tableEvents["Transito prueba datos"] = new eventsBase;
$tdataTransito_prueba_datos[".hasEvents"] = false;

?>