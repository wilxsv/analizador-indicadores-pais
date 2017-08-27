<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPPL_delitos = array();
	$tdataPPL_delitos[".truncateText"] = true;
	$tdataPPL_delitos[".NumberOfChars"] = 80;
	$tdataPPL_delitos[".ShortName"] = "PPL_delitos";
	$tdataPPL_delitos[".OwnerID"] = "";
	$tdataPPL_delitos[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsPPL_delitos = array();
$fieldToolTipsPPL_delitos = array();
$pageTitlesPPL_delitos = array();
$placeHoldersPPL_delitos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPPL_delitos["Spanish"] = array();
	$fieldToolTipsPPL_delitos["Spanish"] = array();
	$placeHoldersPPL_delitos["Spanish"] = array();
	$pageTitlesPPL_delitos["Spanish"] = array();
	$fieldLabelsPPL_delitos["Spanish"]["delitos"] = "Delitos";
	$fieldToolTipsPPL_delitos["Spanish"]["delitos"] = "";
	$placeHoldersPPL_delitos["Spanish"]["delitos"] = "";
	$fieldLabelsPPL_delitos["Spanish"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipsPPL_delitos["Spanish"]["delitoanalisis"] = "";
	$placeHoldersPPL_delitos["Spanish"]["delitoanalisis"] = "";
	if (count($fieldToolTipsPPL_delitos["Spanish"]))
		$tdataPPL_delitos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPPL_delitos["English"] = array();
	$fieldToolTipsPPL_delitos["English"] = array();
	$placeHoldersPPL_delitos["English"] = array();
	$pageTitlesPPL_delitos["English"] = array();
	$fieldLabelsPPL_delitos["English"]["delitos"] = "Delitos";
	$fieldToolTipsPPL_delitos["English"]["delitos"] = "";
	$placeHoldersPPL_delitos["English"]["delitos"] = "";
	$fieldLabelsPPL_delitos["English"]["delitoanalisis"] = "Delitoanalisis";
	$fieldToolTipsPPL_delitos["English"]["delitoanalisis"] = "";
	$placeHoldersPPL_delitos["English"]["delitoanalisis"] = "";
	if (count($fieldToolTipsPPL_delitos["English"]))
		$tdataPPL_delitos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPPL_delitos[""] = array();
	$fieldToolTipsPPL_delitos[""] = array();
	$placeHoldersPPL_delitos[""] = array();
	$pageTitlesPPL_delitos[""] = array();
	if (count($fieldToolTipsPPL_delitos[""]))
		$tdataPPL_delitos[".isUseToolTips"] = true;
}





$tdataPPL_delitos[".shortTableName"] = "PPL_delitos";
$tdataPPL_delitos[".nSecOptions"] = 0;
$tdataPPL_delitos[".recsPerRowPrint"] = 1;
$tdataPPL_delitos[".mainTableOwnerID"] = "";
$tdataPPL_delitos[".moveNext"] = 1;
$tdataPPL_delitos[".entityType"] = 2;

$tdataPPL_delitos[".strOriginalTableName"] = "carcel";

	



$tdataPPL_delitos[".showAddInPopup"] = false;

$tdataPPL_delitos[".showEditInPopup"] = false;

$tdataPPL_delitos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPPL_delitos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPPL_delitos[".fieldsForRegister"] = array();

$tdataPPL_delitos[".listAjax"] = false;

	$tdataPPL_delitos[".audit"] = false;

	$tdataPPL_delitos[".locking"] = false;



$tdataPPL_delitos[".list"] = true;



$tdataPPL_delitos[".reorderRecordsByHeader"] = true;





$tdataPPL_delitos[".exportTo"] = true;

$tdataPPL_delitos[".printFriendly"] = true;


$tdataPPL_delitos[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPPL_delitos[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPPL_delitos[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPPL_delitos[".searchSaving"] = false;
//

$tdataPPL_delitos[".showSearchPanel"] = true;
		$tdataPPL_delitos[".flexibleSearch"] = true;

$tdataPPL_delitos[".isUseAjaxSuggest"] = true;






$tdataPPL_delitos[".ajaxCodeSnippetAdded"] = false;

$tdataPPL_delitos[".buttonsAdded"] = false;

$tdataPPL_delitos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPPL_delitos[".isUseTimeForSearch"] = false;





$tdataPPL_delitos[".allSearchFields"] = array();
$tdataPPL_delitos[".filterFields"] = array();
$tdataPPL_delitos[".requiredSearchFields"] = array();

$tdataPPL_delitos[".allSearchFields"][] = "delitos";
	$tdataPPL_delitos[".allSearchFields"][] = "delitoanalisis";
	

$tdataPPL_delitos[".googleLikeFields"] = array();
$tdataPPL_delitos[".googleLikeFields"][] = "delitos";
$tdataPPL_delitos[".googleLikeFields"][] = "delitoanalisis";


$tdataPPL_delitos[".advSearchFields"] = array();
$tdataPPL_delitos[".advSearchFields"][] = "delitos";
$tdataPPL_delitos[".advSearchFields"][] = "delitoanalisis";

$tdataPPL_delitos[".tableType"] = "report";

$tdataPPL_delitos[".printerPageOrientation"] = 0;
$tdataPPL_delitos[".nPrinterPageScale"] = 100;

$tdataPPL_delitos[".nPrinterSplitRecords"] = 40;

$tdataPPL_delitos[".nPrinterPDFSplitRecords"] = 40;



$tdataPPL_delitos[".geocodingEnabled"] = false;

//report settings
$tdataPPL_delitos[".printReportLayout"] = 6;

$tdataPPL_delitos[".reportPrintPartitionType"] = 1;
$tdataPPL_delitos[".reportPrintGroupsPerPage"] = 40;
$tdataPPL_delitos[".reportPrintPDFGroupsPerPage"] = 40;
$tdataPPL_delitos[".lowGroup"] = 0;



$tdataPPL_delitos[".pageSize"] = 10;






$tdataPPL_delitos[".repShowDet"] = true;

$tdataPPL_delitos[".reportLayout"] = 6;

//end of report settings




$tdataPPL_delitos[".listGridLayout"] = 3;

$tdataPPL_delitos[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPPL_delitos[".strOrderBy"] = $tstrOrderBy;

$tdataPPL_delitos[".orderindexes"] = array();

$tdataPPL_delitos[".sqlHead"] = "SELECT delitos,  delitoanalisis";
$tdataPPL_delitos[".sqlFrom"] = "FROM carcel";
$tdataPPL_delitos[".sqlWhereExpr"] = "";
$tdataPPL_delitos[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPPL_delitos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPPL_delitos[".arrGroupsPerPage"] = $arrGPP;

$tdataPPL_delitos[".highlightSearchResults"] = true;

$tableKeysPPL_delitos = array();
$tdataPPL_delitos[".Keys"] = $tableKeysPPL_delitos;

$tdataPPL_delitos[".listFields"] = array();
$tdataPPL_delitos[".listFields"][] = "delitos";
$tdataPPL_delitos[".listFields"][] = "delitoanalisis";

$tdataPPL_delitos[".hideMobileList"] = array();


$tdataPPL_delitos[".viewFields"] = array();
$tdataPPL_delitos[".viewFields"][] = "delitos";
$tdataPPL_delitos[".viewFields"][] = "delitoanalisis";

$tdataPPL_delitos[".addFields"] = array();
$tdataPPL_delitos[".addFields"][] = "delitos";
$tdataPPL_delitos[".addFields"][] = "delitoanalisis";

$tdataPPL_delitos[".masterListFields"] = array();
$tdataPPL_delitos[".masterListFields"][] = "delitos";
$tdataPPL_delitos[".masterListFields"][] = "delitoanalisis";

$tdataPPL_delitos[".inlineAddFields"] = array();
$tdataPPL_delitos[".inlineAddFields"][] = "delitos";
$tdataPPL_delitos[".inlineAddFields"][] = "delitoanalisis";

$tdataPPL_delitos[".editFields"] = array();
$tdataPPL_delitos[".editFields"][] = "delitos";
$tdataPPL_delitos[".editFields"][] = "delitoanalisis";

$tdataPPL_delitos[".inlineEditFields"] = array();
$tdataPPL_delitos[".inlineEditFields"][] = "delitos";
$tdataPPL_delitos[".inlineEditFields"][] = "delitoanalisis";

$tdataPPL_delitos[".updateSelectedFields"] = array();
$tdataPPL_delitos[".updateSelectedFields"][] = "delitos";
$tdataPPL_delitos[".updateSelectedFields"][] = "delitoanalisis";


$tdataPPL_delitos[".exportFields"] = array();
$tdataPPL_delitos[".exportFields"][] = "delitos";
$tdataPPL_delitos[".exportFields"][] = "delitoanalisis";

$tdataPPL_delitos[".importFields"] = array();
$tdataPPL_delitos[".importFields"][] = "delitos";
$tdataPPL_delitos[".importFields"][] = "delitoanalisis";

$tdataPPL_delitos[".printFields"] = array();
$tdataPPL_delitos[".printFields"][] = "delitos";
$tdataPPL_delitos[".printFields"][] = "delitoanalisis";

//	delitos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "delitos";
	$fdata["GoodName"] = "delitos";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos","delitos");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPPL_delitos["delitos"] = $fdata;
//	delitoanalisis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "delitoanalisis";
	$fdata["GoodName"] = "delitoanalisis";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_delitos","delitoanalisis");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPPL_delitos["delitoanalisis"] = $fdata;


$tables_data["PPL delitos"]=&$tdataPPL_delitos;
$field_labels["PPL_delitos"] = &$fieldLabelsPPL_delitos;
$fieldToolTips["PPL_delitos"] = &$fieldToolTipsPPL_delitos;
$placeHolders["PPL_delitos"] = &$placeHoldersPPL_delitos;
$page_titles["PPL_delitos"] = &$pageTitlesPPL_delitos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PPL delitos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PPL delitos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PPL_delitos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "delitos,  delitoanalisis";
$proto0["m_strFrom"] = "FROM carcel";
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
	"m_strName" => "delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos"
));

$proto6["m_sql"] = "delitos";
$proto6["m_srcTableName"] = "PPL delitos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos"
));

$proto8["m_sql"] = "delitoanalisis";
$proto8["m_srcTableName"] = "PPL delitos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "carcel";
$proto11["m_srcTableName"] = "PPL delitos";
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
$proto10["m_srcTableName"] = "PPL delitos";
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
	"m_strName" => "delitos",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos"
));

$proto14["m_column"]=$obj;
$obj = new SQLGroupByItem($proto14);

$proto0["m_groupby"][]=$obj;
												$proto16=array();
						$obj = new SQLField(array(
	"m_strName" => "delitoanalisis",
	"m_strTable" => "carcel",
	"m_srcTableName" => "PPL delitos"
));

$proto16["m_column"]=$obj;
$obj = new SQLGroupByItem($proto16);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PPL delitos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PPL_delitos = createSqlQuery_PPL_delitos();


	
		;

		

$tdataPPL_delitos[".sqlquery"] = $queryData_PPL_delitos;

$tableEvents["PPL delitos"] = new eventsBase;
$tdataPPL_delitos[".hasEvents"] = false;

?>