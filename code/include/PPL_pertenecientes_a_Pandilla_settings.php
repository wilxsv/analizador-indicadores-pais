<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPPL_pertenecientes_a_Pandilla = array();
	$tdataPPL_pertenecientes_a_Pandilla[".truncateText"] = true;
	$tdataPPL_pertenecientes_a_Pandilla[".NumberOfChars"] = 80;
	$tdataPPL_pertenecientes_a_Pandilla[".ShortName"] = "PPL_pertenecientes_a_Pandilla";
	$tdataPPL_pertenecientes_a_Pandilla[".OwnerID"] = "";
	$tdataPPL_pertenecientes_a_Pandilla[".OriginalTable"] = "carcel";

//	field labels
$fieldLabelsPPL_pertenecientes_a_Pandilla = array();
$fieldToolTipsPPL_pertenecientes_a_Pandilla = array();
$pageTitlesPPL_pertenecientes_a_Pandilla = array();
$placeHoldersPPL_pertenecientes_a_Pandilla = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPPL_pertenecientes_a_Pandilla["Spanish"] = array();
	$fieldToolTipsPPL_pertenecientes_a_Pandilla["Spanish"] = array();
	$placeHoldersPPL_pertenecientes_a_Pandilla["Spanish"] = array();
	$pageTitlesPPL_pertenecientes_a_Pandilla["Spanish"] = array();
	$fieldLabelsPPL_pertenecientes_a_Pandilla["Spanish"]["org_delictiva1"] = "Org Delictiva1";
	$fieldToolTipsPPL_pertenecientes_a_Pandilla["Spanish"]["org_delictiva1"] = "";
	$placeHoldersPPL_pertenecientes_a_Pandilla["Spanish"]["org_delictiva1"] = "";
	$fieldLabelsPPL_pertenecientes_a_Pandilla["Spanish"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPPL_pertenecientes_a_Pandilla["Spanish"]["mun_resid"] = "";
	$placeHoldersPPL_pertenecientes_a_Pandilla["Spanish"]["mun_resid"] = "";
	$fieldLabelsPPL_pertenecientes_a_Pandilla["Spanish"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsPPL_pertenecientes_a_Pandilla["Spanish"]["COUNT_mun_resid_"] = "";
	$placeHoldersPPL_pertenecientes_a_Pandilla["Spanish"]["COUNT_mun_resid_"] = "";
	if (count($fieldToolTipsPPL_pertenecientes_a_Pandilla["Spanish"]))
		$tdataPPL_pertenecientes_a_Pandilla[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPPL_pertenecientes_a_Pandilla["English"] = array();
	$fieldToolTipsPPL_pertenecientes_a_Pandilla["English"] = array();
	$placeHoldersPPL_pertenecientes_a_Pandilla["English"] = array();
	$pageTitlesPPL_pertenecientes_a_Pandilla["English"] = array();
	$fieldLabelsPPL_pertenecientes_a_Pandilla["English"]["org_delictiva1"] = "Org Delictiva1";
	$fieldToolTipsPPL_pertenecientes_a_Pandilla["English"]["org_delictiva1"] = "";
	$placeHoldersPPL_pertenecientes_a_Pandilla["English"]["org_delictiva1"] = "";
	$fieldLabelsPPL_pertenecientes_a_Pandilla["English"]["mun_resid"] = "Mun Resid";
	$fieldToolTipsPPL_pertenecientes_a_Pandilla["English"]["mun_resid"] = "";
	$placeHoldersPPL_pertenecientes_a_Pandilla["English"]["mun_resid"] = "";
	$fieldLabelsPPL_pertenecientes_a_Pandilla["English"]["COUNT_mun_resid_"] = "COUNT(mun Resid)";
	$fieldToolTipsPPL_pertenecientes_a_Pandilla["English"]["COUNT_mun_resid_"] = "";
	$placeHoldersPPL_pertenecientes_a_Pandilla["English"]["COUNT_mun_resid_"] = "";
	if (count($fieldToolTipsPPL_pertenecientes_a_Pandilla["English"]))
		$tdataPPL_pertenecientes_a_Pandilla[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPPL_pertenecientes_a_Pandilla[""] = array();
	$fieldToolTipsPPL_pertenecientes_a_Pandilla[""] = array();
	$placeHoldersPPL_pertenecientes_a_Pandilla[""] = array();
	$pageTitlesPPL_pertenecientes_a_Pandilla[""] = array();
	if (count($fieldToolTipsPPL_pertenecientes_a_Pandilla[""]))
		$tdataPPL_pertenecientes_a_Pandilla[".isUseToolTips"] = true;
}





$tdataPPL_pertenecientes_a_Pandilla[".shortTableName"] = "PPL_pertenecientes_a_Pandilla";
$tdataPPL_pertenecientes_a_Pandilla[".nSecOptions"] = 0;
$tdataPPL_pertenecientes_a_Pandilla[".recsPerRowPrint"] = 1;
$tdataPPL_pertenecientes_a_Pandilla[".mainTableOwnerID"] = "";
$tdataPPL_pertenecientes_a_Pandilla[".moveNext"] = 1;
$tdataPPL_pertenecientes_a_Pandilla[".entityType"] = 2;

$tdataPPL_pertenecientes_a_Pandilla[".strOriginalTableName"] = "carcel";

	



$tdataPPL_pertenecientes_a_Pandilla[".showAddInPopup"] = false;

$tdataPPL_pertenecientes_a_Pandilla[".showEditInPopup"] = false;

$tdataPPL_pertenecientes_a_Pandilla[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPPL_pertenecientes_a_Pandilla[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPPL_pertenecientes_a_Pandilla[".fieldsForRegister"] = array();

$tdataPPL_pertenecientes_a_Pandilla[".listAjax"] = false;

	$tdataPPL_pertenecientes_a_Pandilla[".audit"] = false;

	$tdataPPL_pertenecientes_a_Pandilla[".locking"] = false;



$tdataPPL_pertenecientes_a_Pandilla[".list"] = true;



$tdataPPL_pertenecientes_a_Pandilla[".reorderRecordsByHeader"] = true;





$tdataPPL_pertenecientes_a_Pandilla[".exportTo"] = true;

$tdataPPL_pertenecientes_a_Pandilla[".printFriendly"] = true;


$tdataPPL_pertenecientes_a_Pandilla[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPPL_pertenecientes_a_Pandilla[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPPL_pertenecientes_a_Pandilla[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPPL_pertenecientes_a_Pandilla[".searchSaving"] = false;
//

$tdataPPL_pertenecientes_a_Pandilla[".showSearchPanel"] = true;
		$tdataPPL_pertenecientes_a_Pandilla[".flexibleSearch"] = true;

$tdataPPL_pertenecientes_a_Pandilla[".isUseAjaxSuggest"] = true;






$tdataPPL_pertenecientes_a_Pandilla[".ajaxCodeSnippetAdded"] = false;

$tdataPPL_pertenecientes_a_Pandilla[".buttonsAdded"] = false;

$tdataPPL_pertenecientes_a_Pandilla[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPPL_pertenecientes_a_Pandilla[".isUseTimeForSearch"] = false;





$tdataPPL_pertenecientes_a_Pandilla[".allSearchFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla[".filterFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla[".requiredSearchFields"] = array();

$tdataPPL_pertenecientes_a_Pandilla[".allSearchFields"][] = "mun_resid";
	$tdataPPL_pertenecientes_a_Pandilla[".allSearchFields"][] = "org_delictiva1";
	$tdataPPL_pertenecientes_a_Pandilla[".allSearchFields"][] = "COUNT(mun_resid)";
	

$tdataPPL_pertenecientes_a_Pandilla[".googleLikeFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla[".googleLikeFields"][] = "mun_resid";
$tdataPPL_pertenecientes_a_Pandilla[".googleLikeFields"][] = "org_delictiva1";


$tdataPPL_pertenecientes_a_Pandilla[".advSearchFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla[".advSearchFields"][] = "mun_resid";
$tdataPPL_pertenecientes_a_Pandilla[".advSearchFields"][] = "org_delictiva1";

$tdataPPL_pertenecientes_a_Pandilla[".tableType"] = "report";

$tdataPPL_pertenecientes_a_Pandilla[".printerPageOrientation"] = 0;
$tdataPPL_pertenecientes_a_Pandilla[".nPrinterPageScale"] = 100;

$tdataPPL_pertenecientes_a_Pandilla[".nPrinterSplitRecords"] = 40;

$tdataPPL_pertenecientes_a_Pandilla[".nPrinterPDFSplitRecords"] = 40;



$tdataPPL_pertenecientes_a_Pandilla[".geocodingEnabled"] = false;

//report settings
$tdataPPL_pertenecientes_a_Pandilla[".crossTabReport"] = true;

$tdataPPL_pertenecientes_a_Pandilla[".reportGroupFields"] = true;
$tdataPPL_pertenecientes_a_Pandilla[".pageSize"] = 5;
$reportGroupFields = array();
	$rgroupField = array();
	$rgroupField['strGroupField'] = "org_delictiva1";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 1;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "0";
	$reportGroupFields[] = $rgroupField;
	$rgroupField = array();
	$rgroupField['strGroupField'] = "mun_resid";
	$rgroupField['groupInterval'] = 0;
	$rgroupField['groupOrder'] = 2;
	$rgroupField['showGroupSummary'] = "1";
	$rgroupField['crossTabAxis'] = "1";
	$reportGroupFields[] = $rgroupField;
$tdataPPL_pertenecientes_a_Pandilla[".reportGroupFieldsData"] = $reportGroupFields;

$tdataPPL_pertenecientes_a_Pandilla[".reportHorizontalSummary"] = true;

$tdataPPL_pertenecientes_a_Pandilla[".isExistTotalFields"] = true;

$tdataPPL_pertenecientes_a_Pandilla[".reportVerticalSummary"] = true;



$tdataPPL_pertenecientes_a_Pandilla[".repShowDet"] = true;

$tdataPPL_pertenecientes_a_Pandilla[".reportLayout"] = 6;

//end of report settings




$tdataPPL_pertenecientes_a_Pandilla[".listGridLayout"] = 3;

$tdataPPL_pertenecientes_a_Pandilla[".isDisplayLoading"] = true;




// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPPL_pertenecientes_a_Pandilla[".strOrderBy"] = $tstrOrderBy;

$tdataPPL_pertenecientes_a_Pandilla[".orderindexes"] = array();

$tdataPPL_pertenecientes_a_Pandilla[".sqlHead"] = "SELECT p.mun_resid,  p.org_delictiva AS org_delictiva1,  COUNT(p.mun_resid) AS `COUNT(mun_resid)`";
$tdataPPL_pertenecientes_a_Pandilla[".sqlFrom"] = "FROM carcel AS p  INNER JOIN tipo_mara AS sp ON p.org_delictiva = sp.org_delictiva";
$tdataPPL_pertenecientes_a_Pandilla[".sqlWhereExpr"] = "p.mun_resid IN       (SELECT mun_resid     FROM carcel)";
$tdataPPL_pertenecientes_a_Pandilla[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPPL_pertenecientes_a_Pandilla[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPPL_pertenecientes_a_Pandilla[".arrGroupsPerPage"] = $arrGPP;

$tdataPPL_pertenecientes_a_Pandilla[".highlightSearchResults"] = true;

$tableKeysPPL_pertenecientes_a_Pandilla = array();
$tdataPPL_pertenecientes_a_Pandilla[".Keys"] = $tableKeysPPL_pertenecientes_a_Pandilla;

$tdataPPL_pertenecientes_a_Pandilla[".listFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla[".listFields"][] = "mun_resid";
$tdataPPL_pertenecientes_a_Pandilla[".listFields"][] = "org_delictiva1";
$tdataPPL_pertenecientes_a_Pandilla[".listFields"][] = "COUNT(mun_resid)";

$tdataPPL_pertenecientes_a_Pandilla[".hideMobileList"] = array();


$tdataPPL_pertenecientes_a_Pandilla[".viewFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla[".viewFields"][] = "mun_resid";
$tdataPPL_pertenecientes_a_Pandilla[".viewFields"][] = "org_delictiva1";
$tdataPPL_pertenecientes_a_Pandilla[".viewFields"][] = "COUNT(mun_resid)";

$tdataPPL_pertenecientes_a_Pandilla[".addFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla[".addFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla[".masterListFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla[".masterListFields"][] = "mun_resid";
$tdataPPL_pertenecientes_a_Pandilla[".masterListFields"][] = "org_delictiva1";
$tdataPPL_pertenecientes_a_Pandilla[".masterListFields"][] = "COUNT(mun_resid)";

$tdataPPL_pertenecientes_a_Pandilla[".inlineAddFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla[".inlineAddFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla[".editFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla[".editFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla[".inlineEditFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla[".inlineEditFields"][] = "mun_resid";

$tdataPPL_pertenecientes_a_Pandilla[".updateSelectedFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla[".updateSelectedFields"][] = "mun_resid";


$tdataPPL_pertenecientes_a_Pandilla[".exportFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla[".exportFields"][] = "mun_resid";
$tdataPPL_pertenecientes_a_Pandilla[".exportFields"][] = "org_delictiva1";
$tdataPPL_pertenecientes_a_Pandilla[".exportFields"][] = "COUNT(mun_resid)";

$tdataPPL_pertenecientes_a_Pandilla[".importFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla[".importFields"][] = "mun_resid";
$tdataPPL_pertenecientes_a_Pandilla[".importFields"][] = "org_delictiva1";
$tdataPPL_pertenecientes_a_Pandilla[".importFields"][] = "COUNT(mun_resid)";

$tdataPPL_pertenecientes_a_Pandilla[".printFields"] = array();
$tdataPPL_pertenecientes_a_Pandilla[".printFields"][] = "mun_resid";
$tdataPPL_pertenecientes_a_Pandilla[".printFields"][] = "org_delictiva1";
$tdataPPL_pertenecientes_a_Pandilla[".printFields"][] = "COUNT(mun_resid)";

//	mun_resid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "mun_resid";
	$fdata["GoodName"] = "mun_resid";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_pertenecientes_a_Pandilla","mun_resid");
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

		$fdata["strField"] = "mun_resid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.mun_resid";

	
	
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




	$tdataPPL_pertenecientes_a_Pandilla["mun_resid"] = $fdata;
//	org_delictiva1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "org_delictiva1";
	$fdata["GoodName"] = "org_delictiva1";
	$fdata["ownerTable"] = "carcel";
	$fdata["Label"] = GetFieldLabel("PPL_pertenecientes_a_Pandilla","org_delictiva1");
	$fdata["FieldType"] = 200;

		// report field settings
					// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "org_delictiva";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.org_delictiva";

	
	
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




	$tdataPPL_pertenecientes_a_Pandilla["org_delictiva1"] = $fdata;
//	COUNT(mun_resid)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "COUNT(mun_resid)";
	$fdata["GoodName"] = "COUNT_mun_resid_";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("PPL_pertenecientes_a_Pandilla","COUNT_mun_resid_");
	$fdata["FieldType"] = 3;

		// report field settings
					$fdata["isTotalSum"] = true;
	// end of report field settings

	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "COUNT(mun_resid)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(p.mun_resid)";

	
	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPPL_pertenecientes_a_Pandilla["COUNT(mun_resid)"] = $fdata;


$tables_data["PPL pertenecientes a Pandilla"]=&$tdataPPL_pertenecientes_a_Pandilla;
$field_labels["PPL_pertenecientes_a_Pandilla"] = &$fieldLabelsPPL_pertenecientes_a_Pandilla;
$fieldToolTips["PPL_pertenecientes_a_Pandilla"] = &$fieldToolTipsPPL_pertenecientes_a_Pandilla;
$placeHolders["PPL_pertenecientes_a_Pandilla"] = &$placeHoldersPPL_pertenecientes_a_Pandilla;
$page_titles["PPL_pertenecientes_a_Pandilla"] = &$pageTitlesPPL_pertenecientes_a_Pandilla;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

// tables which are master tables for current table (detail)
$masterTablesData["PPL pertenecientes a Pandilla"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PPL_pertenecientes_a_Pandilla()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "p.mun_resid,  p.org_delictiva AS org_delictiva1,  COUNT(p.mun_resid) AS `COUNT(mun_resid)`";
$proto0["m_strFrom"] = "FROM carcel AS p  INNER JOIN tipo_mara AS sp ON p.org_delictiva = sp.org_delictiva";
$proto0["m_strWhere"] = "p.mun_resid IN       (SELECT mun_resid     FROM carcel)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "p.mun_resid IN       (SELECT mun_resid     FROM carcel)";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "p",
	"m_srcTableName" => "PPL pertenecientes a Pandilla"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "IN       (SELECT mun_resid     FROM carcel)";
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
	"m_strTable" => "p",
	"m_srcTableName" => "PPL pertenecientes a Pandilla"
));

$proto6["m_sql"] = "p.mun_resid";
$proto6["m_srcTableName"] = "PPL pertenecientes a Pandilla";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "p",
	"m_srcTableName" => "PPL pertenecientes a Pandilla"
));

$proto8["m_sql"] = "p.org_delictiva";
$proto8["m_srcTableName"] = "PPL pertenecientes a Pandilla";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "org_delictiva1";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_COUNT";
$proto11["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "p",
	"m_srcTableName" => "PPL pertenecientes a Pandilla"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "COUNT(p.mun_resid)";
$proto10["m_srcTableName"] = "PPL pertenecientes a Pandilla";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "COUNT(mun_resid)";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "carcel";
$proto14["m_srcTableName"] = "PPL pertenecientes a Pandilla";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "sipe";
$proto14["m_columns"][] = "afis";
$proto14["m_columns"][] = "edad";
$proto14["m_columns"][] = "rangoetario";
$proto14["m_columns"][] = "genero";
$proto14["m_columns"][] = "fecha_nac";
$proto14["m_columns"][] = "edad1";
$proto14["m_columns"][] = "dui";
$proto14["m_columns"][] = "nivel_edu";
$proto14["m_columns"][] = "educacionanalisis";
$proto14["m_columns"][] = "profesion_oficio";
$proto14["m_columns"][] = "estado_civil";
$proto14["m_columns"][] = "ciudadania";
$proto14["m_columns"][] = "mun_nacimiento";
$proto14["m_columns"][] = "depto_nacim";
$proto14["m_columns"][] = "direccion";
$proto14["m_columns"][] = "mun_resid";
$proto14["m_columns"][] = "depart_resid";
$proto14["m_columns"][] = "delitosanalisis";
$proto14["m_columns"][] = "sj_interno";
$proto14["m_columns"][] = "fase";
$proto14["m_columns"][] = "org_delictiva";
$proto14["m_columns"][] = "tipo_mara";
$proto14["m_columns"][] = "reincidente";
$proto14["m_columns"][] = "deportado";
$proto14["m_columns"][] = "direccion1";
$proto14["m_columns"][] = "sector";
$proto14["m_columns"][] = "celda";
$proto14["m_columns"][] = "fecha_ing__sp";
$proto14["m_columns"][] = "libro";
$proto14["m_columns"][] = "fecha_ing__cp";
$proto14["m_columns"][] = "total_delitos";
$proto14["m_columns"][] = "delitos";
$proto14["m_columns"][] = "delitoanalisis";
$proto14["m_columns"][] = "sector_ppd";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "carcel AS p";
$proto13["m_alias"] = "p";
$proto13["m_srcTableName"] = "PPL pertenecientes a Pandilla";
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
												$proto17=array();
$proto17["m_link"] = "SQLL_INNERJOIN";
			$proto18=array();
$proto18["m_strName"] = "tipo_mara";
$proto18["m_srcTableName"] = "PPL pertenecientes a Pandilla";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "org_delictiva";
$proto18["m_columns"][] = "tipo_mara";
$proto18["m_columns"][] = "ID_1";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "INNER JOIN tipo_mara AS sp ON p.org_delictiva = sp.org_delictiva";
$proto17["m_alias"] = "sp";
$proto17["m_srcTableName"] = "PPL pertenecientes a Pandilla";
$proto19=array();
$proto19["m_sql"] = "p.org_delictiva = sp.org_delictiva";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "p",
	"m_srcTableName" => "PPL pertenecientes a Pandilla"
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "= sp.org_delictiva";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto21=array();
						$obj = new SQLField(array(
	"m_strName" => "mun_resid",
	"m_strTable" => "p",
	"m_srcTableName" => "PPL pertenecientes a Pandilla"
));

$proto21["m_column"]=$obj;
$obj = new SQLGroupByItem($proto21);

$proto0["m_groupby"][]=$obj;
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "org_delictiva",
	"m_strTable" => "p",
	"m_srcTableName" => "PPL pertenecientes a Pandilla"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="PPL pertenecientes a Pandilla";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PPL_pertenecientes_a_Pandilla = createSqlQuery_PPL_pertenecientes_a_Pandilla();


	
		;

			

$tdataPPL_pertenecientes_a_Pandilla[".sqlquery"] = $queryData_PPL_pertenecientes_a_Pandilla;

$tableEvents["PPL pertenecientes a Pandilla"] = new eventsBase;
$tdataPPL_pertenecientes_a_Pandilla[".hasEvents"] = false;

?>