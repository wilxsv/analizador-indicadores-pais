<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamined2 = array();
	$tdatamined2[".truncateText"] = true;
	$tdatamined2[".NumberOfChars"] = 80;
	$tdatamined2[".ShortName"] = "mined2";
	$tdatamined2[".OwnerID"] = "";
	$tdatamined2[".OriginalTable"] = "mined";

//	field labels
$fieldLabelsmined2 = array();
$fieldToolTipsmined2 = array();
$pageTitlesmined2 = array();
$placeHoldersmined2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmined2["Spanish"] = array();
	$fieldToolTipsmined2["Spanish"] = array();
	$placeHoldersmined2["Spanish"] = array();
	$pageTitlesmined2["Spanish"] = array();
	$fieldLabelsmined2["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsmined2["Spanish"]["departamento"] = "";
	$placeHoldersmined2["Spanish"]["departamento"] = "";
	$fieldLabelsmined2["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsmined2["Spanish"]["municipio"] = "";
	$placeHoldersmined2["Spanish"]["municipio"] = "";
	$fieldLabelsmined2["Spanish"]["MAX_matricula_final_"] = "MAX(matricula Final)";
	$fieldToolTipsmined2["Spanish"]["MAX_matricula_final_"] = "";
	$placeHoldersmined2["Spanish"]["MAX_matricula_final_"] = "";
	if (count($fieldToolTipsmined2["Spanish"]))
		$tdatamined2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmined2["English"] = array();
	$fieldToolTipsmined2["English"] = array();
	$placeHoldersmined2["English"] = array();
	$pageTitlesmined2["English"] = array();
	$fieldLabelsmined2["English"]["departamento"] = "Departamento";
	$fieldToolTipsmined2["English"]["departamento"] = "";
	$placeHoldersmined2["English"]["departamento"] = "";
	$fieldLabelsmined2["English"]["municipio"] = "Municipio";
	$fieldToolTipsmined2["English"]["municipio"] = "";
	$placeHoldersmined2["English"]["municipio"] = "";
	$fieldLabelsmined2["English"]["MAX_matricula_final_"] = "MAX(matricula Final)";
	$fieldToolTipsmined2["English"]["MAX_matricula_final_"] = "";
	$placeHoldersmined2["English"]["MAX_matricula_final_"] = "";
	if (count($fieldToolTipsmined2["English"]))
		$tdatamined2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmined2[""] = array();
	$fieldToolTipsmined2[""] = array();
	$placeHoldersmined2[""] = array();
	$pageTitlesmined2[""] = array();
	$fieldLabelsmined2[""]["MAX_matricula_final_"] = "MAX(matricula Final)";
	$fieldToolTipsmined2[""]["MAX_matricula_final_"] = "";
	$placeHoldersmined2[""]["MAX_matricula_final_"] = "";
	if (count($fieldToolTipsmined2[""]))
		$tdatamined2[".isUseToolTips"] = true;
}


	$tdatamined2[".NCSearch"] = true;



$tdatamined2[".shortTableName"] = "mined2";
$tdatamined2[".nSecOptions"] = 0;
$tdatamined2[".recsPerRowPrint"] = 1;
$tdatamined2[".mainTableOwnerID"] = "";
$tdatamined2[".moveNext"] = 1;
$tdatamined2[".entityType"] = 1;

$tdatamined2[".strOriginalTableName"] = "mined";

	



$tdatamined2[".showAddInPopup"] = false;

$tdatamined2[".showEditInPopup"] = false;

$tdatamined2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamined2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamined2[".fieldsForRegister"] = array();

	$tdatamined2[".listAjax"] = true;

	$tdatamined2[".audit"] = false;

	$tdatamined2[".locking"] = false;



$tdatamined2[".list"] = true;



$tdatamined2[".reorderRecordsByHeader"] = true;
$tdatamined2[".createSortByDropdown"] = true;
$tdatamined2[".strSortControlSettingsJSON"] = "";




$tdatamined2[".import"] = true;

$tdatamined2[".exportTo"] = true;

$tdatamined2[".printFriendly"] = true;


$tdatamined2[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamined2[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamined2[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamined2[".searchSaving"] = false;
//

$tdatamined2[".showSearchPanel"] = true;
		$tdatamined2[".flexibleSearch"] = true;

$tdatamined2[".isUseAjaxSuggest"] = true;

$tdatamined2[".rowHighlite"] = true;





$tdatamined2[".ajaxCodeSnippetAdded"] = false;

$tdatamined2[".buttonsAdded"] = false;

$tdatamined2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamined2[".isUseTimeForSearch"] = false;



$tdatamined2[".badgeColor"] = "00C2C5";


$tdatamined2[".allSearchFields"] = array();
$tdatamined2[".filterFields"] = array();
$tdatamined2[".requiredSearchFields"] = array();

$tdatamined2[".allSearchFields"][] = "MAX(matricula_final)";
	$tdatamined2[".allSearchFields"][] = "departamento";
	$tdatamined2[".allSearchFields"][] = "municipio";
	

$tdatamined2[".googleLikeFields"] = array();
$tdatamined2[".googleLikeFields"][] = "MAX(matricula_final)";
$tdatamined2[".googleLikeFields"][] = "departamento";
$tdatamined2[".googleLikeFields"][] = "municipio";


$tdatamined2[".advSearchFields"] = array();
$tdatamined2[".advSearchFields"][] = "MAX(matricula_final)";
$tdatamined2[".advSearchFields"][] = "departamento";
$tdatamined2[".advSearchFields"][] = "municipio";

$tdatamined2[".tableType"] = "list";

$tdatamined2[".printerPageOrientation"] = 0;
$tdatamined2[".nPrinterPageScale"] = 100;

$tdatamined2[".nPrinterSplitRecords"] = 40;

$tdatamined2[".nPrinterPDFSplitRecords"] = 40;



$tdatamined2[".geocodingEnabled"] = true;
$tdatamined2[".geocodingData"] = array();
$tdatamined2[".geocodingData"]["latField"] = "y";
$tdatamined2[".geocodingData"]["lngField"] = "x";
$tdatamined2[".geocodingData"]["addressFields"] = array();
	$tdatamined2[".geocodingData"]["addressFields"][] = "acoso";
	$tdatamined2[".geocodingData"]["addressFields"][] = "aÑo";
	$tdatamined2[".geocodingData"]["addressFields"][] = "bajo_rendimiento";
	$tdatamined2[".geocodingData"]["addressFields"][] = "cambio_domicilio";
	$tdatamined2[".geocodingData"]["addressFields"][] = "codigo";
	$tdatamined2[".geocodingData"]["addressFields"][] = "dep_mun";
	$tdatamined2[".geocodingData"]["addressFields"][] = "departamento";
	$tdatamined2[".geocodingData"]["addressFields"][] = "depto";
	$tdatamined2[".geocodingData"]["addressFields"][] = "drogas";
	$tdatamined2[".geocodingData"]["addressFields"][] = "embarazo";
	$tdatamined2[".geocodingData"]["addressFields"][] = "enfermedad";
	$tdatamined2[".geocodingData"]["addressFields"][] = "escasos_recursos";
	$tdatamined2[".geocodingData"]["addressFields"][] = "hurtos";
	$tdatamined2[".geocodingData"]["addressFields"][] = "idderespuesta";
	$tdatamined2[".geocodingData"]["addressFields"][] = "incorpo_actividades_prod";
	$tdatamined2[".geocodingData"]["addressFields"][] = "ipce_0_1";
	$tdatamined2[".geocodingData"]["addressFields"][] = "ipce_naive";
	$tdatamined2[".geocodingData"]["addressFields"][] = "lejania_ce";
	$tdatamined2[".geocodingData"]["addressFields"][] = "maras";
	$tdatamined2[".geocodingData"]["addressFields"][] = "matricula_final";
	$tdatamined2[".geocodingData"]["addressFields"][] = "matricula_inicial";
	$tdatamined2[".geocodingData"]["addressFields"][] = "max_matric2016";
	$tdatamined2[".geocodingData"]["addressFields"][] = "migracion";
	$tdatamined2[".geocodingData"]["addressFields"][] = "mrf2016";
	$tdatamined2[".geocodingData"]["addressFields"][] = "mun";
	$tdatamined2[".geocodingData"]["addressFields"][] = "municipio";
	$tdatamined2[".geocodingData"]["addressFields"][] = "nombre_c_e";
	$tdatamined2[".geocodingData"]["addressFields"][] = "pab";
	$tdatamined2[".geocodingData"]["addressFields"][] = "pab_af";
	$tdatamined2[".geocodingData"]["addressFields"][] = "paf";
	$tdatamined2[".geocodingData"]["addressFields"][] = "prostitucion";
	$tdatamined2[".geocodingData"]["addressFields"][] = "r_h";
	$tdatamined2[".geocodingData"]["addressFields"][] = "robos";
	$tdatamined2[".geocodingData"]["addressFields"][] = "sector_ppd";
	$tdatamined2[".geocodingData"]["addressFields"][] = "violacion_sexual";
	$tdatamined2[".geocodingData"]["addressFields"][] = "violaciones";
	$tdatamined2[".geocodingData"]["addressFields"][] = "violencia_pandilleril";
	$tdatamined2[".geocodingData"]["addressFields"][] = "x";
	$tdatamined2[".geocodingData"]["addressFields"][] = "y";





$tdatamined2[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamined2[".pageSize"] = 20;

$tdatamined2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamined2[".strOrderBy"] = $tstrOrderBy;

$tdatamined2[".orderindexes"] = array();

$tdatamined2[".sqlHead"] = "SELECT MAX(matricula_final) AS `MAX(matricula_final)`,  departamento,  municipio";
$tdatamined2[".sqlFrom"] = "FROM mined";
$tdatamined2[".sqlWhereExpr"] = "";
$tdatamined2[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamined2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamined2[".arrGroupsPerPage"] = $arrGPP;

$tdatamined2[".highlightSearchResults"] = true;

$tableKeysmined2 = array();
$tdatamined2[".Keys"] = $tableKeysmined2;

$tdatamined2[".listFields"] = array();
$tdatamined2[".listFields"][] = "MAX(matricula_final)";
$tdatamined2[".listFields"][] = "departamento";
$tdatamined2[".listFields"][] = "municipio";

$tdatamined2[".hideMobileList"] = array();


$tdatamined2[".viewFields"] = array();
$tdatamined2[".viewFields"][] = "MAX(matricula_final)";
$tdatamined2[".viewFields"][] = "departamento";
$tdatamined2[".viewFields"][] = "municipio";

$tdatamined2[".addFields"] = array();
$tdatamined2[".addFields"][] = "departamento";
$tdatamined2[".addFields"][] = "municipio";

$tdatamined2[".masterListFields"] = array();
$tdatamined2[".masterListFields"][] = "MAX(matricula_final)";
$tdatamined2[".masterListFields"][] = "departamento";
$tdatamined2[".masterListFields"][] = "municipio";

$tdatamined2[".inlineAddFields"] = array();
$tdatamined2[".inlineAddFields"][] = "departamento";
$tdatamined2[".inlineAddFields"][] = "municipio";

$tdatamined2[".editFields"] = array();
$tdatamined2[".editFields"][] = "departamento";
$tdatamined2[".editFields"][] = "municipio";

$tdatamined2[".inlineEditFields"] = array();
$tdatamined2[".inlineEditFields"][] = "departamento";
$tdatamined2[".inlineEditFields"][] = "municipio";

$tdatamined2[".updateSelectedFields"] = array();
$tdatamined2[".updateSelectedFields"][] = "departamento";
$tdatamined2[".updateSelectedFields"][] = "municipio";


$tdatamined2[".exportFields"] = array();
$tdatamined2[".exportFields"][] = "MAX(matricula_final)";
$tdatamined2[".exportFields"][] = "departamento";
$tdatamined2[".exportFields"][] = "municipio";

$tdatamined2[".importFields"] = array();
$tdatamined2[".importFields"][] = "MAX(matricula_final)";
$tdatamined2[".importFields"][] = "departamento";
$tdatamined2[".importFields"][] = "municipio";

$tdatamined2[".printFields"] = array();
$tdatamined2[".printFields"][] = "MAX(matricula_final)";
$tdatamined2[".printFields"][] = "departamento";
$tdatamined2[".printFields"][] = "municipio";

//	MAX(matricula_final)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MAX(matricula_final)";
	$fdata["GoodName"] = "MAX_matricula_final_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("mined2","MAX_matricula_final_");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MAX(matricula_final)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAX(matricula_final)";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined2["MAX(matricula_final)"] = $fdata;
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined2","departamento");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined2["departamento"] = $fdata;
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "mined";
	$fdata["Label"] = GetFieldLabel("mined2","municipio");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamined2["municipio"] = $fdata;


$tables_data["mined2"]=&$tdatamined2;
$field_labels["mined2"] = &$fieldLabelsmined2;
$fieldToolTips["mined2"] = &$fieldToolTipsmined2;
$placeHolders["mined2"] = &$placeHoldersmined2;
$page_titles["mined2"] = &$pageTitlesmined2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mined2"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mined2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mined2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MAX(matricula_final) AS `MAX(matricula_final)`,  departamento,  municipio";
$proto0["m_strFrom"] = "FROM mined";
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
			$proto7=array();
$proto7["m_functiontype"] = "SQLF_MAX";
$proto7["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "matricula_final",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined2"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "MAX";
$obj = new SQLFunctionCall($proto7);

$proto6["m_sql"] = "MAX(matricula_final)";
$proto6["m_srcTableName"] = "mined2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "MAX(matricula_final)";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "departamento",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined2"
));

$proto9["m_sql"] = "departamento";
$proto9["m_srcTableName"] = "mined2";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined2"
));

$proto11["m_sql"] = "municipio";
$proto11["m_srcTableName"] = "mined2";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "mined";
$proto14["m_srcTableName"] = "mined2";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "idderespuesta";
$proto14["m_columns"][] = "codigo";
$proto14["m_columns"][] = "depto";
$proto14["m_columns"][] = "departamento";
$proto14["m_columns"][] = "mun";
$proto14["m_columns"][] = "municipio";
$proto14["m_columns"][] = "nombre_c_e";
$proto14["m_columns"][] = "x";
$proto14["m_columns"][] = "y";
$proto14["m_columns"][] = "sector_ppd";
$proto14["m_columns"][] = "matricula_inicial";
$proto14["m_columns"][] = "matricula_final";
$proto14["m_columns"][] = "maras";
$proto14["m_columns"][] = "robos";
$proto14["m_columns"][] = "hurtos";
$proto14["m_columns"][] = "drogas";
$proto14["m_columns"][] = "violaciones";
$proto14["m_columns"][] = "pab";
$proto14["m_columns"][] = "paf";
$proto14["m_columns"][] = "escasos_recursos";
$proto14["m_columns"][] = "incorpo_actividades_prod";
$proto14["m_columns"][] = "lejania_ce";
$proto14["m_columns"][] = "violencia_pandilleril";
$proto14["m_columns"][] = "embarazo";
$proto14["m_columns"][] = "acoso";
$proto14["m_columns"][] = "violacion_sexual";
$proto14["m_columns"][] = "cambio_domicilio";
$proto14["m_columns"][] = "migracion";
$proto14["m_columns"][] = "bajo_rendimiento";
$proto14["m_columns"][] = "enfermedad";
$proto14["m_columns"][] = "prostitucion";
$proto14["m_columns"][] = "dep_mun";
$proto14["m_columns"][] = "max_matric2016";
$proto14["m_columns"][] = "mrf2016";
$proto14["m_columns"][] = "pab_af";
$proto14["m_columns"][] = "r_h";
$proto14["m_columns"][] = "ipce_naive";
$proto14["m_columns"][] = "ipce_0_1";
$proto14["m_columns"][] = "aÑo";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "mined";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "mined2";
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
	"m_strName" => "departamento",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined2"
));

$proto17["m_column"]=$obj;
$obj = new SQLGroupByItem($proto17);

$proto0["m_groupby"][]=$obj;
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "mined",
	"m_srcTableName" => "mined2"
));

$proto19["m_column"]=$obj;
$obj = new SQLGroupByItem($proto19);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mined2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mined2 = createSqlQuery_mined2();


	
		;

			

$tdatamined2[".sqlquery"] = $queryData_mined2;

$tableEvents["mined2"] = new eventsBase;
$tdatamined2[".hasEvents"] = false;

?>