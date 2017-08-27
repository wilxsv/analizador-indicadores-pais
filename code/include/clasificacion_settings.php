<?php
require_once(getabspath("classes/cipherer.php"));




$tdataclasificacion = array();
	$tdataclasificacion[".truncateText"] = true;
	$tdataclasificacion[".NumberOfChars"] = 80;
	$tdataclasificacion[".ShortName"] = "clasificacion";
	$tdataclasificacion[".OwnerID"] = "";
	$tdataclasificacion[".OriginalTable"] = "tipo_mara";

//	field labels
$fieldLabelsclasificacion = array();
$fieldToolTipsclasificacion = array();
$pageTitlesclasificacion = array();
$placeHoldersclasificacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsclasificacion["Spanish"] = array();
	$fieldToolTipsclasificacion["Spanish"] = array();
	$placeHoldersclasificacion["Spanish"] = array();
	$pageTitlesclasificacion["Spanish"] = array();
	$fieldLabelsclasificacion["Spanish"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipsclasificacion["Spanish"]["org_delictiva"] = "";
	$placeHoldersclasificacion["Spanish"]["org_delictiva"] = "";
	$fieldLabelsclasificacion["Spanish"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsclasificacion["Spanish"]["tipo_mara"] = "";
	$placeHoldersclasificacion["Spanish"]["tipo_mara"] = "";
	$fieldLabelsclasificacion["Spanish"]["ID_1"] = "ID 1";
	$fieldToolTipsclasificacion["Spanish"]["ID_1"] = "";
	$placeHoldersclasificacion["Spanish"]["ID_1"] = "";
	if (count($fieldToolTipsclasificacion["Spanish"]))
		$tdataclasificacion[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsclasificacion["English"] = array();
	$fieldToolTipsclasificacion["English"] = array();
	$placeHoldersclasificacion["English"] = array();
	$pageTitlesclasificacion["English"] = array();
	$fieldLabelsclasificacion["English"]["org_delictiva"] = "Org Delictiva";
	$fieldToolTipsclasificacion["English"]["org_delictiva"] = "";
	$placeHoldersclasificacion["English"]["org_delictiva"] = "";
	$fieldLabelsclasificacion["English"]["tipo_mara"] = "Tipo Mara";
	$fieldToolTipsclasificacion["English"]["tipo_mara"] = "";
	$placeHoldersclasificacion["English"]["tipo_mara"] = "";
	$fieldLabelsclasificacion["English"]["ID_1"] = "ID 1";
	$fieldToolTipsclasificacion["English"]["ID_1"] = "";
	$placeHoldersclasificacion["English"]["ID_1"] = "";
	if (count($fieldToolTipsclasificacion["English"]))
		$tdataclasificacion[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsclasificacion[""] = array();
	$fieldToolTipsclasificacion[""] = array();
	$placeHoldersclasificacion[""] = array();
	$pageTitlesclasificacion[""] = array();
	if (count($fieldToolTipsclasificacion[""]))
		$tdataclasificacion[".isUseToolTips"] = true;
}





$tdataclasificacion[".shortTableName"] = "clasificacion";
$tdataclasificacion[".nSecOptions"] = 0;
$tdataclasificacion[".recsPerRowPrint"] = 1;
$tdataclasificacion[".mainTableOwnerID"] = "";
$tdataclasificacion[".moveNext"] = 1;
$tdataclasificacion[".entityType"] = 1;

$tdataclasificacion[".strOriginalTableName"] = "tipo_mara";

	



$tdataclasificacion[".showAddInPopup"] = false;

$tdataclasificacion[".showEditInPopup"] = false;

$tdataclasificacion[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataclasificacion[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataclasificacion[".fieldsForRegister"] = array();

	$tdataclasificacion[".listAjax"] = true;

	$tdataclasificacion[".audit"] = false;

	$tdataclasificacion[".locking"] = false;



$tdataclasificacion[".list"] = true;



$tdataclasificacion[".reorderRecordsByHeader"] = true;
$tdataclasificacion[".createSortByDropdown"] = true;
$tdataclasificacion[".strSortControlSettingsJSON"] = "";




$tdataclasificacion[".import"] = true;

$tdataclasificacion[".exportTo"] = true;

$tdataclasificacion[".printFriendly"] = true;


$tdataclasificacion[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataclasificacion[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataclasificacion[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataclasificacion[".searchSaving"] = false;
//

$tdataclasificacion[".showSearchPanel"] = true;
		$tdataclasificacion[".flexibleSearch"] = true;

$tdataclasificacion[".isUseAjaxSuggest"] = true;

$tdataclasificacion[".rowHighlite"] = true;





$tdataclasificacion[".ajaxCodeSnippetAdded"] = false;

$tdataclasificacion[".buttonsAdded"] = false;

$tdataclasificacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdataclasificacion[".isUseTimeForSearch"] = false;





$tdataclasificacion[".allSearchFields"] = array();
$tdataclasificacion[".filterFields"] = array();
$tdataclasificacion[".requiredSearchFields"] = array();

$tdataclasificacion[".allSearchFields"][] = "org_delictiva";
	$tdataclasificacion[".allSearchFields"][] = "tipo_mara";
	$tdataclasificacion[".allSearchFields"][] = "ID_1";
	

$tdataclasificacion[".googleLikeFields"] = array();
$tdataclasificacion[".googleLikeFields"][] = "org_delictiva";
$tdataclasificacion[".googleLikeFields"][] = "tipo_mara";
$tdataclasificacion[".googleLikeFields"][] = "ID_1";


$tdataclasificacion[".advSearchFields"] = array();
$tdataclasificacion[".advSearchFields"][] = "org_delictiva";
$tdataclasificacion[".advSearchFields"][] = "tipo_mara";
$tdataclasificacion[".advSearchFields"][] = "ID_1";

$tdataclasificacion[".tableType"] = "list";

$tdataclasificacion[".printerPageOrientation"] = 0;
$tdataclasificacion[".nPrinterPageScale"] = 100;

$tdataclasificacion[".nPrinterSplitRecords"] = 40;

$tdataclasificacion[".nPrinterPDFSplitRecords"] = 40;



$tdataclasificacion[".geocodingEnabled"] = false;





$tdataclasificacion[".listGridLayout"] = 3;

$tdataclasificacion[".isDisplayLoading"] = true;




// view page pdf

// print page pdf


$tdataclasificacion[".pageSize"] = 10;

$tdataclasificacion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataclasificacion[".strOrderBy"] = $tstrOrderBy;

$tdataclasificacion[".orderindexes"] = array();

$tdataclasificacion[".sqlHead"] = "SELECT org_delictiva,  	tipo_mara,  	ID_1";
$tdataclasificacion[".sqlFrom"] = "FROM tipo_mara";
$tdataclasificacion[".sqlWhereExpr"] = "";
$tdataclasificacion[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataclasificacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataclasificacion[".arrGroupsPerPage"] = $arrGPP;

$tdataclasificacion[".highlightSearchResults"] = true;

$tableKeysclasificacion = array();
$tdataclasificacion[".Keys"] = $tableKeysclasificacion;

$tdataclasificacion[".listFields"] = array();
$tdataclasificacion[".listFields"][] = "org_delictiva";
$tdataclasificacion[".listFields"][] = "tipo_mara";
$tdataclasificacion[".listFields"][] = "ID_1";

$tdataclasificacion[".hideMobileList"] = array();


$tdataclasificacion[".viewFields"] = array();

$tdataclasificacion[".addFields"] = array();

$tdataclasificacion[".masterListFields"] = array();
$tdataclasificacion[".masterListFields"][] = "org_delictiva";
$tdataclasificacion[".masterListFields"][] = "tipo_mara";
$tdataclasificacion[".masterListFields"][] = "ID_1";

$tdataclasificacion[".inlineAddFields"] = array();

$tdataclasificacion[".editFields"] = array();

$tdataclasificacion[".inlineEditFields"] = array();

$tdataclasificacion[".updateSelectedFields"] = array();


$tdataclasificacion[".exportFields"] = array();
$tdataclasificacion[".exportFields"][] = "org_delictiva";
$tdataclasificacion[".exportFields"][] = "tipo_mara";
$tdataclasificacion[".exportFields"][] = "ID_1";

$tdataclasificacion[".importFields"] = array();
$tdataclasificacion[".importFields"][] = "org_delictiva";
$tdataclasificacion[".importFields"][] = "tipo_mara";
$tdataclasificacion[".importFields"][] = "ID_1";

$tdataclasificacion[".printFields"] = array();
$tdataclasificacion[".printFields"][] = "org_delictiva";
$tdataclasificacion[".printFields"][] = "tipo_mara";
$tdataclasificacion[".printFields"][] = "ID_1";

//	org_delictiva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "org_delictiva";
	$fdata["GoodName"] = "org_delictiva";
	$fdata["ownerTable"] = "tipo_mara";
	$fdata["Label"] = GetFieldLabel("clasificacion","org_delictiva");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "org_delictiva";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "org_delictiva";

	
	
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




	$tdataclasificacion["org_delictiva"] = $fdata;
//	tipo_mara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipo_mara";
	$fdata["GoodName"] = "tipo_mara";
	$fdata["ownerTable"] = "tipo_mara";
	$fdata["Label"] = GetFieldLabel("clasificacion","tipo_mara");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataclasificacion["tipo_mara"] = $fdata;
//	ID_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ID_1";
	$fdata["GoodName"] = "ID_1";
	$fdata["ownerTable"] = "tipo_mara";
	$fdata["Label"] = GetFieldLabel("clasificacion","ID_1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID_1";

	
	
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




	$tdataclasificacion["ID_1"] = $fdata;


$tables_data["clasificacion"]=&$tdataclasificacion;
$field_labels["clasificacion"] = &$fieldLabelsclasificacion;
$fieldToolTips["clasificacion"] = &$fieldToolTipsclasificacion;
$placeHolders["clasificacion"] = &$placeHoldersclasificacion;
$page_titles["clasificacion"] = &$pageTitlesclasificacion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["clasificacion"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["clasificacion"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_clasificacion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "org_delictiva,  	tipo_mara,  	ID_1";
$proto0["m_strFrom"] = "FROM tipo_mara";
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
	"m_strName" => "org_delictiva",
	"m_strTable" => "tipo_mara",
	"m_srcTableName" => "clasificacion"
));

$proto6["m_sql"] = "org_delictiva";
$proto6["m_srcTableName"] = "clasificacion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_mara",
	"m_strTable" => "tipo_mara",
	"m_srcTableName" => "clasificacion"
));

$proto8["m_sql"] = "tipo_mara";
$proto8["m_srcTableName"] = "clasificacion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ID_1",
	"m_strTable" => "tipo_mara",
	"m_srcTableName" => "clasificacion"
));

$proto10["m_sql"] = "ID_1";
$proto10["m_srcTableName"] = "clasificacion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tipo_mara";
$proto13["m_srcTableName"] = "clasificacion";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "org_delictiva";
$proto13["m_columns"][] = "tipo_mara";
$proto13["m_columns"][] = "ID_1";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tipo_mara";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "clasificacion";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="clasificacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_clasificacion = createSqlQuery_clasificacion();


	
		;

			

$tdataclasificacion[".sqlquery"] = $queryData_clasificacion;

$tableEvents["clasificacion"] = new eventsBase;
$tdataclasificacion[".hasEvents"] = false;

?>