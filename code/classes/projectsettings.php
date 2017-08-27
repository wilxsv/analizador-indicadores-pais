<?php
class ProjectSettings
{
	var $_table;

	var $_pageMode;

	var $_viewPage = PAGE_VIEW;

	var $_defaultViewPage = PAGE_VIEW;

	var $_editPage = PAGE_EDIT;

	var $_defaultEditPage = PAGE_EDIT;

	var $_tableData = array();

	var $_mastersTableData = array();

	var $_detailsTableData = array();

	var $_dashboardElemPSet = array();

	function __construct($table = "", $page = "")
	{
		if($table && $table != NOT_TABLE_BASED_TNAME)
			$this->setTable($table);
		if($page)
			$this->setPage($page);
	}


	function setTable($table)
	{
		$this->_table = $table;
		global $tables_data, $field_labels, $fieldToolTips, $placeHolders, $page_titles, $detailsTablesData, $masterTablesData, $tableEvents, $bSubqueriesSupported;
		if(GetTableURL($table) != "")
			include_once(getabspath("include/".GetTableURL($table)."_settings.php"));

		if(isset($tables_data[$this->_table]))
			$this->_tableData = &$tables_data[$this->_table];

		$this->_mastersTableData = &$masterTablesData[$this->_table];
		$this->_detailsTableData = &$detailsTablesData[$this->_table];

		$tableType = $this->getTableType();

		$this->_editPage = $this->getDefaultEditPageType($tableType);
		$this->_viewPage = $this->getDefaultViewPageType($tableType);
		$this->_defaultEditPage = $this->_editPage;
		$this->_defaultViewPage = $this->_viewPage;
	}

	function getDefaultViewPageType($tableType)
	{
		if($tableType == PAGE_CHART || $tableType == PAGE_REPORT)
			return $tableType;

		return PAGE_VIEW;
	}

	function getDefaultEditPageType($tableType)
	{
		if($tableType == PAGE_CHART || $tableType == PAGE_REPORT)
			return PAGE_SEARCH;

		return PAGE_EDIT;
	}

	function setPage($page)
	{
		//	a deeper checking for table and page types compatibility might be added here
		if($this->isPageTypeForView($page))
		{
			$tableType = $this->getTableType();
			if($tableType != "report" && $tableType != "chart"
				&& ($page == PAGE_CHART || $page == PAGE_REPORT))
				$this->_viewPage = PAGE_LIST;
			else
				$this->_viewPage = $page;
			$this->_defaultViewPage = $this->getDefaultViewPageType($tableType);
		}
		if($this->isPageTypeForEdit($page))
		{
			$this->_editPage = $page;
			$this->_defaultEditPage = $this->getDefaultEditPageType($this->getTableType());
		}
	}

	function getEditPageType()
	{
		return $this->_editPage;
	}

	function isPageTypeForView($ptype)
	{
		global $pageTypesForView;
		return in_array(strtolower($ptype), $pageTypesForView);
	}

	function isPageTypeForEdit($ptype)
	{
		global $pageTypesForEdit;
		return in_array(strtolower($ptype), $pageTypesForEdit);
	}

	function getTable($table, $page = "")
	{
		return new ProjectSettings($table, $page);
	}

	function getPageTypeByFieldEditFormat($field, $editFormat)
	{
		if(isset($this->_tableData[$field]) && isset($this->_tableData[$field][FORMAT_EDIT]))
		{
			foreach($this->_tableData[$field][FORMAT_EDIT] as $pageType => $editSettings)
			{
				if(isset($editSettings["EditFormat"]) && $editSettings["EditFormat"] == $editFormat)
					return $pageType;
			}
		}
		return "";
	}

	function getTableData($key)
	{
		if(!$this->isExistsTableKey($key))
			return $this->getDefaultValueByKey(substr($key,1));
		return $this->_tableData[$key];
	}

	private function getEffectiveEditPage( $field )
	{
		if( $this->isSeparate($field) )
		{
			return $this->_editPage;
		}
		return $this->_defaultEditPage;
	}

	private function getEffectiveViewPage( $field )
	{
		if( $this->isSeparate($field) )
		{
			if( $this->_pageMode == EDIT_INLINE )
				return PAGE_LIST;
			else if ( $this->_pageMode == LIST_MASTER && $this->_viewPage == PAGE_LIST ) 			
				return PAGE_MASTER_INFO_LIST;
			else if ( $this->_pageMode == LIST_MASTER && $this->_viewPage == PAGE_REPORT ) 			
				return PAGE_MASTER_INFO_REPORT;
			else if ( $this->_pageMode == PRINT_MASTER && $this->_viewPage == PAGE_RPRINT )
				return PAGE_MASTER_INFO_RPRINT;
			else if ( $this->_pageMode == PRINT_MASTER )
				return PAGE_MASTER_INFO_PRINT;

			return $this->_viewPage;
		}
		return $this->_defaultViewPage;
	}
	function getFieldData( $field, $key )
	{
		global $g_settingsType;
		if( $this->getEntityType() == titDASHBOARD )
		{
			return $this->getDashFieldData( $field, $key );
		}

		if(!isset($this->_tableData[$field]))
			return $this->getDefaultValueByKey($key);

		$settingType = $g_settingsType[$key];
		if($settingType == null)
			$settingType = "";

		switch($settingType)
		{
			case SETTING_TYPE_VIEW:
				$viewPage = $this->getEffectiveViewPage( $field );

				if(isset($this->_tableData[$field][FORMAT_VIEW][$viewPage][$key]))
					return $this->_tableData[$field][FORMAT_VIEW][$viewPage][$key];
				break;
			case SETTING_TYPE_EDIT:
				$editPage = $this->getEffectiveEditPage( $field );

				if(isset($this->_tableData[$field][FORMAT_EDIT][$editPage][$key]))
					return $this->_tableData[$field][FORMAT_EDIT][$editPage][$key];
				break;
			default:
				if (isset($this->_tableData[$field][$key]))
					return $this->_tableData[$field][$key];
				break;
		}
		return $this->getDefaultValueByKey($key);
	}

	function setFieldData( $field, $key, $value )
	{
		$oldValue = $this->getFieldData( $field, $key );
		global $g_settingsType;

		$settingType = $g_settingsType[$key];
		if($settingType == null)
			$settingType = "";

		switch($settingType)
		{
			case SETTING_TYPE_VIEW:
				$viewPage = $this->getEffectiveViewPage( $field );
				$this->_tableData[$field][FORMAT_VIEW][$viewPage][$key] = $value;
				break;
			case SETTING_TYPE_EDIT:
				$editPage = $this->getEffectiveEditPage( $field );
				$this->_tableData[$field][FORMAT_EDIT][$editPage][$key] = $value;
				break;
			default:
				$this->_tableData[$field][$key] = $value;
				break;
		}
		return $oldValue;
	}

	/**
	 * getTableName
	 * Returns table name the class is created for
	 */
	function getTableName()
	{
		return $this->_table;
	}
	
	/**
	 * findField
	 * Returns field name in correct case if the field is found. Empty string otherwise.
	 * @param {string} field name in arbitrary case, original or GoodFieldName result
	 */
	
	function findField( $f ) 
	{
		global $field_labels, $mlang_defaultlang;
		//	check exact match
		$fields = $this->getFieldsList();
		if( array_search( $f, $fields ) !== FALSE ) 
			return $f;
		
		//	check goodfieldname
		$gTable = GoodFieldName( $this->_table );
		if( isset( $field_labels[ $mlang_defaultlang ][ $f ] ) ) 
			return $this->getFieldByGoodFieldName( $f );
		
		//	case-insensitive check
		$f = strtoupper( $f );
		foreach( $fields as $ff ) 
		{
			if( strtoupper( $ff ) == $f )
				return $ff;

			if( strtoupper( GoodFieldName($ff) ) == $f )
				return $ff;
		}
		return "";
		
	}

	/**
	 * addCustomExpressionIndex
	 * Add new index to list, for determination of custom expressions position in SQL query
	 * @param {string} table wich contain a lookup field
	 * @param {string} name of lookup field
	 * @param {int} index
	 */
	function addCustomExpressionIndex($mainTable, $mainField, $index)
	{
		if(!$this->isExistsTableKey(".customExpressionIndexes"))
			$this->_tableData[".customExpressionIndexes"] = array();
		if(!isset($this->_tableData[".customExpressionIndexes"][$mainTable]))
			$this->_tableData[".customExpressionIndexes"][$mainTable] = array();
		$this->_tableData[".customExpressionIndexes"][$mainTable][$mainField] = $index;
	}

	/**
	 * getCustomExpressionIndex
	 * Get index of custom expression in SQL field
	 * @param {string} table wich contain a lookup field
	 * @param {string} name of lookup field
	 */
	function getCustomExpressionIndex($mainTable, $mainField)
	{
		if(!$this->isExistsTableKey(".customExpressionIndexes"))
			$this->_tableData[".customExpressionIndexes"] = array();
		if(isset($this->_tableData[".customExpressionIndexes"][$mainTable])
			&& isset($this->_tableData[".customExpressionIndexes"][$mainTable][$mainField]))
			return $this->_tableData[".customExpressionIndexes"][$mainTable][$mainField];

		return FALSE;
	}

	function isExistsTableKey($key)
	{
		if(!isset($this->_tableData[$key]))
			return false;
		return true;
	}

	function isExistsFieldKey($field, $key)
	{
		if(!$this->isExistsTableKey($field))
			return false;
		if(!isset($this->_tableData[$field][$key]))
			return false;
		return true;
	}

	function getDefaultValueByKey($key)
	{
		global $g_defaultOptionValues;
		if(isset($g_defaultOptionValues[$key]))
			return $g_defaultOptionValues[$key];
		return false;
	}

	/**
	 * Returns array of master tables , which are master for current detail table
	 * @param string $tName - it's data source detail table name
	 * @return array if success otherwise false
	 */
	function getMasterTablesArr($tName)
	{
		return $this->_mastersTableData;
	}

	/**
	 * Returns array of master keys for passed detailTable
	 *
	 * @param string $dTableName - it's detail data sourse table name,
	 * @return array if success otherwise false
	 */
	function getMasterKeysByDetailTable($dTableName, $default = array())
	{
		if(!$dTableName)
			return $default;
		foreach ($this->_detailsTableData as $dTableDataArr)
		{
			if ($dTableDataArr['dDataSourceTable'] == $dTableName)
				return $dTableDataArr['masterKeys'];
		}
		return $default;
	}

	/**
	 * Returns array of detail tables , which are detail for current master table
	 * @param string $tName - it's data source master table name
	 * @return array if success otherwise false
	 */
	function getDetailTablesArr()
	{
		return $this->_detailsTableData;
	}

	/**
	 * Returns array of detail keys for passed masterTable
	 *
	 * @param string $mTableName - it's master table name,
	 * @param string $tName - it's current (detail) table
	 * @return array if success otherwise default value
	 */
	function getDetailKeysByMasterTable($mTableName = "", $default = array())
	{
		if(!$mTableName)
			return $default;
		foreach($this->_mastersTableData as $mTableDataArr)
		{
			if ($mTableDataArr['mDataSourceTable'] == $mTableName)
				return $mTableDataArr['detailKeys'];
		}
		return $default;
	}

	/**
	 * Returns array of detail keys for passed detailTable
	 *
	 * @param string $dTableName - It's detail data sourse table name
	 * @param string $tName - current(master) table name
	 * @return array if success otherwise false
	 */
	function getDetailKeysByDetailTable($dTableName, $default = array())
	{
		foreach ($this->_detailsTableData as $dTableDataArr)
		{
			if ($dTableDataArr['dDataSourceTable'] == $dTableName)
				return $dTableDataArr['detailKeys'];
		}
		return $default;
	}

	/**
	 * Returns details preview Type
	 *
	 * @param string $dTableName - it's detail data sourse table name,
	 * @param string $tName - current(master) table name
	 * @return array if success otherwise false
	 */
	function getDPType($dTableName)
	{
		if(!$dTableName)
			return false;
		foreach ($this->_detailsTableData as $dTableDataArr)
		{
			if ($dTableDataArr['dDataSourceTable'] == $dTableName)
				return $dTableDataArr['previewOnList'];
		}
		return false;
	}

	function GetFieldByIndex($index)
	{
		foreach($this->_tableData as $key => $value)
		{
			if(!is_array($value))
				continue;
			elseif(!isset($value["Index"]))
				continue;
			if($value["Index"] == $index && $this->getFieldIndex($key))
				return $key;
		}
		return null;
	}

	//	Is field has separate type for editing and viewing
	function isSeparate($field)
	{
		if (isset($this->_tableData[$field]["isSeparate"]))
			return $this->_tableData[$field]["isSeparate"];
		return false;
	}

	// return field label
	function label($field)
	{
		$result = GetFieldLabel( GoodFieldName($this->_table), GoodFieldName($field) );
		return $result != "" ? $result : $field;
	}

	//	return filename field if any
	//	viewFormat setting
	function getFilenameField($field)
	{
		return $this->getFieldData($field, "Filename");
	}

	//	return hyperlink prefix
	//	viewFormat setting
	function getLinkPrefix($field)
	{
		return $this->getFieldData($field, "LinkPrefix");
	}

	/**
	 * Get hyperlink type
	 */
	function getLinkType($field)
	{
		return $this->getFieldData($field, "hlType");
	}

	/**
	 * Get hyperlink display field for title
	 * @return string field name
	 */
	function getLinkDisplayField($field)
	{
		return $this->getFieldData($field, "hlTitleField");
	}

	function openLinkInNewWindow($field)
	{
		return $this->getFieldData($field, "hlNewWindow");
	}

	function getLinkWordNameType($field)
	{
		return $this->getFieldData($field, "hlLinkWordNameType");
	}

	function getLinkWordText($field)
	{
		return $this->getFieldData($field, "hlLinkWordText");
	}

	//	return database field type
	//	using ADO DataTypeEnum constants
	//	the full list available at:
	//	http://msdn.microsoft.com/library/default.asp?url=/library/en-us/ado270/htm/mdcstdatatypeenum.asp
	function getFieldType($field)
	{
		return $this->getFieldData($field, "FieldType");
	}

	function isAutoincField($field)
	{
		return $this->getFieldData($field, "AutoInc");
	}

	function getOraSequenceName($field)
	{
		return $this->getFieldData($field, "OraSequenceName");
	}

	function getDefaultValue($field, $table = "")
	{
		$tableName = $table ? $table : $this->_table;
		$editPage = $this->_editPage;
		if(!$this->isSeparate($field))
			return;
		return GetDefaultValue($field, $editPage, $tableName);
	}

	function isAutoUpdatable($field)
	{
		return $this->getFieldData($field, "autoUpdatable");
	}

	function getAutoUpdateValue($field)
	{
		$editPage = $this->_editPage;
		if(!$this->isSeparate($field))
			$editPage = $this->getDefaultEditPageType($this->getTableType());;
		return GetAutoUpdateValue($field, $editPage, $this->_table);
	}

	//	return Edit format
	//	editFormats
	function getEditFormat($field)
	{
		return $this->getFieldData($field, "EditFormat");
	}

	function isReadonly($field)
	{
		if($this->getEditFormat($field) == EDIT_FORMAT_READONLY)
			return true;
		return false;
	}

	//	return View format
	//	viewFormat setting
	function getViewFormat($field)
	{
		return $this->getFieldData($field, "ViewFormat");
	}

	//	show time in datepicker or not
	function dateEditShowTime($field)
	{
		return $this->getFieldData($field, "ShowTime");
	}

	function lookupControlType($field)
	{
		return $this->getFieldData($field, "LCType");
	}

	function isDeleteAssociatedFile($field)
	{
		return $this->getFieldData($field, "DeleteAssociatedFile");
	}

	//	is Lookup wizard dependent or not
	function useCategory($field)
	{
		return $this->getFieldData($field, "UseCategory");
	}

	//	is Lookup wizard with multiple selection
	function multiSelect($field)
	{
		return $this->getFieldData($field, "Multiselect");
	}

	// Lookup wizard select size
	function selectSize($field)
	{
		return $this->getFieldData($field, "SelectSize");
	}

	function showThumbnail($field)
	{
		return $this->getFieldData($field, "ShowThumbnail");
	}

	function showCustomExpr($field)
	{
		return $this->getFieldData($field, "ShowCustomExpr");
	}

	function showFileSize($field)
	{
		return $this->getFieldData($field, "ShowFileSize");
	}

	function showIcon($field)
	{
		return $this->getFieldData($field, "ShowIcon");
	}

	function getImageWidth($field)
	{
		return $this->getFieldData($field, "ImageWidth");
	}

	function getImageHeight($field)
	{
		return $this->getFieldData($field, "ImageHeight");
	}

	function getThumbnailWidth($field)
	{
		return $this->getFieldData($field, "ThumbWidth");
	}

	function getThumbnailHeight($field)
	{
		return $this->getFieldData($field, "ThumbHeight");
	}

	// Get nLookupType for current field
	function getLookupType($field)
	{
		return $this->getFieldData($field, "LookupType");
	}

	//Get lookup table name
	function getLookupTable($field)
	{
		return $this->getFieldData($field, "LookupTable");
	}

	function getNotProjectLookupTableConnId($field)
	{
		return $this->getFieldData($field, "LookupConnId");
	}

	function getLinkField($field)
	{
		return $this->getFieldData($field, "LinkField");
	}

	function getLWLinkFieldType($field)
	{
		return $this->getFieldData($field, "LinkFieldType");
	}

	function getDisplayField($field)
	{
		return $this->getFieldData($field, "DisplayField");
	}

	function getCustomDisplay($field)
	{
		return $this->getFieldData($field, 'CustomDisplay');
	}

	//	viewFormats
	function NeedEncode($field)
	{
		return $this->getFieldData($field, "NeedEncode");
	}

	/**
	 * Get array of validation for control
	 * return array - of validations
	 */
	function getValidation($field)
	{
		return $this->getFieldData($field, "validateAs");
	}

	/**
	 * Check is appear current field on list page
	 * return boolean - true or false
	 */
	function appearOnListPage($field)
	{
		return $this->getFieldData($field, "bListPage");
	}

	/**
	 * Check is appear current field on add page
	 * return boolean - true or false
	 */
	function appearOnAddPage($field)
	{
		return $this->getFieldData($field,"bAddPage");
	}

	/**
	 * Check is appear current field on inline add
	 * return boolean
	 */
	function appearOnInlineAdd($field)
	{
		return $this->getFieldData($field,"bInlineAdd");
	}

	/**
	 * Check is appear current field on edit page
	 * return boolean - true or false
	 */
	function appearOnEditPage($field)
	{
		return $this->getFieldData($field, "bEditPage");
	}

	/**
	 * Check is appear current field on edit page
	 * return boolean - true or false
	 */
	function appearOnInlineEdit($field)
	{
		return $this->getFieldData($field, "bInlineEdit");
	}

	/**
	 * Check is appear current field on edit page
	 * return boolean - true or false
	 */
	function appearOnUpdateSelected($field)
	{
		return $this->getFieldData($field, "bUpdateSelected");
	}
	
	
	/**
	 * Check is appear current field on view page
	 * return boolean - true or false
	 */
	function appearOnViewPage($field)
	{
		return $this->getFieldData($field, "bViewPage");
	}

	/**
	 * Check is appear current field on print page
	 * return boolean - true or false
	 */
	function appearOnPrinterPage($field)
	{
		return $this->getFieldData($field, "bPrinterPage");
	}

	function isVideoUrlField($field)
	{
		return $this->getFieldData($field, "fieldIsVideoUrl");
	}

	function isAbsolute($field)
	{
		return $this->getFieldData($field, "Absolute");
	}

	function getAudioTitleField($field)
	{
		return $this->getFieldData($field, "audioTitleField");
	}

	function getVideoWidth($field)
	{
		return $this->getFieldData($field, "videoWidth");
	}

	function getVideoHeight($field)
	{
		return $this->getFieldData($field, "videoHeight");
	}

	function isRewindEnabled($field)
	{
		return $this->getFieldData($field, "RewindEnabled");
	}

	/**
	 * @param String field
	 * @return Array
	 */
	function getParentFieldsData( $field )
	{
		return $this->getFieldData($field, "categoryFields");
	}

	/**
	 * @param String field
	 * @return Array
	 */
	function getLookupParentFNames( $field )
	{
		$fNames = array();
		foreach( $this->getParentFieldsData( $field ) as $data )
		{
			$fNames[] = $data["main"];
		}
		return $fNames;
	}

	function isLookupUnique($field)
	{
		return $this->getFieldData($field, "LookupUnique");
	}

	function getLookupOrderBy($field)
	{
		return $this->getFieldData($field, "LookupOrderBy");
	}

	function isLookupDesc($field)
	{
		return $this->getFieldData($field, "LookupDesc");
	}

	function getOwnerTable($field)
	{
		return $this->getFieldData($field, "ownerTable");
	}

	function isFieldEncrypted($field)
	{
		return $this->getFieldData($field, "bIsEncrypted");
	}

	function isAllowToAdd($field)
	{
		return $this->getFieldData($field, "AllowToAdd");
	}

	function isSimpleAdd($field)
	{
		return $this->getFieldData($field, "SimpleAdd");
	}

	/**
	 * Get the array containing the autocomplete fields data
	 * basing on page's type and lookup wizard settings
	 * @param String field
	 * @return Array
	 */
	function getAutoCompleteFields($field)
	{
		$editPageType = $this->getEditPageType();

		if( $editPageType == PAGE_REGISTER || $editPageType == PAGE_ADD || $editPageType == PAGE_EDIT && ( $this->isSeparate($field) || $this->isAutoCompleteFieldsOnEdit($field) ) )
		{
			return $this->getFieldData($field, "autoCompleteFields");
		}

		return $this->getDefaultValueByKey("autoCompleteFields");
	}

	function isAutoCompleteFieldsOnEdit($field)
	{
		return $this->getFieldData($field, "autoCompleteFieldsOnEdit");
	}

	function isFreeInput($field)
	{
		return $this->getFieldData($field, "freeInput");
	}

	function getMapData($field)
	{
		return $this->getFieldData($field, "mapData");
	}

	function getFormatTimeAttrs($field)
	{
		return $this->getFieldData($field, "FormatTimeAttrs");
	}

	/**
	 * Check is appear current field on export page
	 * return boolean - true or false
	 */
	function appearOnExportPage($field)
	{
		return $this->getFieldData($field, "bExportPage");
	}

	/**
	 * Check is appear current field on register page
	 * return boolean
	 */
	function appearOnRegisterOrSearchPage($field, $pageType)
	{
		if( $pageType != PAGE_REGISTER && $pageType != PAGE_SEARCH )
			return false;

		$arrFields = array();
		if( $pageType == PAGE_REGISTER )
			$arrFields = $this->getFieldsForRegister();
		elseif( $pageType == PAGE_SEARCH )
			$arrFields = $this->getAllSearchFields();

		if( in_array($field, $arrFields) )
			return true;

		return false;
	}

	/**
	 * Return original table name for report or chart
	 */
	function getStrOriginalTableName()
	{
		return $this->getTableData(".strOriginalTableName");
	}

	function getFieldsForRegister()
	{
		return $this->getTableData(".fieldsForRegister");
	}

	function getAllSearchFields()
	{
		return $this->getTableData('.allSearchFields');
	}

	function getAdvSearchFields()
	{
		return $this->getEntityType() == titDASHBOARD ? $this->getAllSearchFields() :  $this->getTableData('.advSearchFields');
	}

	function isUseTimeForSearch()
	{
		return $this->getTableData(".isUseTimeForSearch");
	}

	function isUseToolTips()
	{
		return $this->getTableData(".isUseToolTips");
	}

	function isUseVideo()
	{
		return $this->getTableData(".isUseVideo");
	}

	function isUseAudio()
	{
		return $this->getTableData(".isUseAudio");
	}

	function isUseAudioOnDetails()
	{
		for($i = 0; $i < count($this->_detailsTableData); $i++)
		{
			if($this->_detailsTableData[$i]["isUseAudio"])
				return true;
		}
		return false;
	}

	function getTableType()
	{
		return $this->getTableData(".tableType");
	}

	function getShortTableName()
	{
		return $this->getTableData(".shortTableName");
	}

	function isShowAddInPopup()
	{
		return $this->getTableData(".showAddInPopup");
	}

	function isShowEditInPopup()
	{
		return $this->getTableData(".showEditInPopup");
	}

	function isShowViewInPopup()
	{
		return $this->getTableData(".showViewInPopup");
	}

	function getPopupPagesLayoutNames()
	{
		return $this->getTableData(".popupPagesLayoutNames");
	}

	function isResizeColumns()
	{
		return $this->getTableData(".isResizeColumns");
	}

	function isUseAjaxSuggest()
	{
		return $this->getTableData(".isUseAjaxSuggest");
	}

	function getDetailsLinksOnList()
	{
		return $this->getTableData(".detailsLinksOnList");
	}

	function getPanelSearchFields()
	{
		return $this->getTableData(".panelSearchFields");
	}

	function getSearchPanelOptions()
	{
		return $this->GetTableData(".searchPanelOptions");
	}

	function getGoogleLikeFields()
	{
		return $this->getTableData(".googleLikeFields");
	}

	function getInlineEditFields()
	{
		return $this->getTableData(".inlineEditFields");
	}

	function getUpdateSelectedFields()
	{
		return $this->getTableData(".updateSelectedFields");
	}

	function getExportFields()
	{
		return $this->getTableData(".exportFields");
	}

	function getImportFields()
	{
		return $this->getTableData(".importFields");
	}

	function getEditFields()
	{
		return $this->getTableData(".editFields");
	}

	function getInlineAddFields()
	{
		return $this->getTableData(".inlineAddFields");
	}

	function getAddFields()
	{
		return $this->getTableData(".addFields");
	}

	function getMasterListFields()
	{
		return $this->getTableData(".masterListFields");
	}

	function getViewFields()
	{
		return $this->getTableData(".viewFields");
	}

	function getPrinterFields()
	{
		return $this->getTableData(".printFields");
	}

	function getListFields()
	{
		return $this->getTableData(".listFields");
	}

	function isAddPageEvents()
	{
		return $this->getTableData(".addPageEvents");
	}

	function hasAjaxSnippet()
	{
		return $this->getTableData(".ajaxCodeSnippetAdded");
	}
	
	function hasButtonsAdded()
	{
		return $this->getTableData(".buttonsAdded");
	}

	function isUseMainMaps()
	{
		return $this->getTableData(".isUseMainMaps");
	}

	function isUseFieldsMaps()
	{
		return $this->getTableData(".isUseFieldsMaps");
	}

	function getOrderIndexes()
	{
		return $this->getTableData(".orderindexes");
	}

	function getStrOrderBy()
	{
		return $this->getTableData(".strOrderBy");
	}

	function getSQLQuery()
	{
		$query = $this->getTableData(".sqlquery");
		if($query != null)
		{
			return $query;
		}
		return null;
	}
	/* Dashboard-safe version of getSQLQuery
	*/
	function getSQLQueryByField( $field )
	{
		if( $this->getTableType() == PAGE_DASHBOARD )
		{
			$query = $this->getDashTableData($field, ".sqlquery");
			if($query != null)
			{
				return $query;
			}
			return null;

		}
		else
		{
			$query = $this->getTableData(".sqlquery");
			if($query != null)
			{
				return $query;
			}
			return null;
		}

	}

	/**
	 * Create Thumbnail or not
	 */
	function getCreateThumbnail($field)
	{
		return $this->getFieldData($field, "CreateThumbnail");
	}

	/**
	 * Return Thumbnail prefix
	 */
	function getStrThumbnail($field)
	{
		return $this->getFieldData($field, "StrThumbnail");
	}

	/**
	 * Return Thumbnail prefix
	 */
	function getThumbnailSize($field)
	{
		return $this->getFieldData($field, "ThumbnailSize");
	}

	/**
	 * Resize on upload
	 */
	function getResizeOnUpload($field)
	{
		return $this->getFieldData($field, "ResizeImage");
	}

	/**
	 * True if FileField must work in old single-file mode
	 */
	function isBasicUploadUsed($field)
	{
		return $this->getFieldData($field, "CompatibilityMode");
	}

	/**
	 * True if file in FileField must be uploaded immediately after choosing or dropping
	 */
	function isAutoUpload($field)
	{
		return $this->getFieldData($field, "autoUpload");
	}

	/**
	 * Get size to reduce image after upload
	 */
	function getNewImageSize($field)
	{
		return $this->getFieldData($field, "NewSize");
	}

	function getAcceptFileTypes($field)
	{
		return $this->getFieldData($field, "acceptFileTypes");
	}

	/**
	 * Get maximum allowed size for uploaded files
	 */
	function getMaxFileSize($field)
	{
		return $this->getFieldData($field, "maxFileSize");
	}

	/**
	 * Get maximum allowed size for all uploaded files per field
	 */
	function getMaxTotalFilesSize($field)
	{
		return $this->getFieldData($field, "maxTotalFilesSize");
	}

	/**
	 * Get maximum allowed number of uploaded files
	 */
	function getMaxNumberOfFiles($field)
	{
		return $this->getFieldData($field, "maxNumberOfFiles");
	}

	/**
	 * Get maximum allowed width of uploaded image
	 */
	function getMaxImageWidth($field)
	{
		return $this->getFieldData($field, "maxImageWidth");
	}

	/**
	 * Get maximum allowed heiht of uploaded image
	 */
	function getMaxImageHeight($field)
	{
		return $this->getFieldData($field, "maxImageHeight");
	}

	/**
	 * Get size to reduce image after upload
	 */
	function getStrFilename($field)
	{
		return $this->getFieldData($field, "strFilename");
	}

	/**
	 * Return height of text area
	 * EditFormat setting
	 */
	function getNRows($field)
	{
		return $this->getFieldData($field, "nRows");
	}

	/**
	 * Return width of text area
	 * EditFormat setting
	 */
	function getNCols($field)
	{
		return $this->getFieldData($field, "nCols");
	}

	/**
	 * Return original table name
	 */
	function getOriginalTableName()
	{
		$result = $this->getTableData(".OriginalTable");
		return $result != "" ? $result : $this->_table;
	}

	/**
	 * Return list of key fields
	 */
	function getTableKeys()
	{
		return $this->getTableData(".Keys");
	}

	function isLargeTextTruncationSet()
	{
		return $this->getTableData(".truncateText");
	}

	/**
	 * Return number of chars to show before "More..." link
	 */
	function getNumberOfChars()
	{
		return $this->getTableData(".NumberOfChars");
	}

	/**
	 * Check if the field is an sql expression
	 */
	function isSQLExpression($field)
	{
		return $this->getFieldData($field, "isSQLExpression");
	}

	/**
	 * Get full field name
	 */
	function getFullFieldName($field)
	{
		return $this->getFieldData($field, "FullName");
	}

	/**
	 * set full field name
	 */
	function setFullFieldName($field, $value)
	{
		return $this->setFieldData($field, "FullName", $value);
	}


	/**
	 * Return table Owner ID field
	 */
	function getTableOwnerID()
	{
		return $this->getTableData(".OwnerID");
	}

	/**
	 * Is field marked as required
	 * EditFormat setting
	 */
	function isRequired($field)
	{
		return $this->getFieldData($field, "IsRequired");
	}

	/**
	 * IS use Rich Text Editor or not
	 */
	function isUseRTE($field)
	{
		return $this->getFieldData($field, "UseRTE");
	}

	/**
	 * Is use Rich Text Editor BASIC or not
	 */
	function isUseRTEBasic($field)
	{
		global $isUseRTEBasic;
		return $this->isUseRTE($field) && $isUseRTEBasic;
	}

	/**
	 * Is use Rich Text Editor FCK or not
	 */
	function isUseRTEFCK($field)
	{
		global $isUseRTECK;
		return $this->isUseRTE($field) && $isUseRTECK;
	}

	/**
	 * Is use Rich Text Editor INNOVA or not
	 */
	function isUseRTEInnova($field)
	{
		global $isUseRTEInnova;
		return $this->isUseRTE($field) && $isUseRTEInnova;
	}

	/**
	 * Add timestamp to filename when files uploading or not
	 * EditFormat setting
	 */
	function isUseTimestamp($field)
	{
		return $this->getFieldData($field, "UseTimestamp");
	}

	function getFieldIndex($field)
	{
		return $this->getFieldData($field, "Index");
	}

	function getEntityType()
	{
		return $this->getTableData(".entityType");
	}


	/**
	 * Return Date field edit type
	 */
	function getDateEditType($field)
	{
		return $this->getFieldData($field, "DateEditType");
	}

	function getHTML5InputType($field)
	{
		return $this->getFieldData($field, "HTML5InuptType");
	}

	/**
	 * Return text edit parameters
	 */
	function getEditParams($field)
	{
		return $this->getFieldData($field, "EditParams");
	}


	function getControlWidth($field)
	{
		return $this->getFieldData($field, "controlWidth");
	}

	/**
	 * Check whether field is viewable
	 */
	function checkFieldPermissions($field)
	{
		return $this->getFieldData($field,"FieldPermissions");
	}

	function getTableOwnerIdField()
	{
		return $this->getTableData(".mainTableOwnerID");
	}

	function getDependentLookups($field)
	{
		return $this->getFieldData($field, "DependentLookups");
	}

	function isHorizontalLookup($field)
	{
		return $this->getFieldData($field, "HorizontalLookup");
	}

	function isDecimalDigits($field)
	{
		return $this->getFieldData($field, "DecimalDigits");
	}

	function getLookupValues($field)
	{
		return $this->getFieldData($field, "LookupValues");
	}

	function hasEditPage()
	{
		return $this->getTableData(".edit");
	}

	function hasAddPage()
	{
		return $this->getTableData(".add");
	}

	function hasListPage()
	{
		return $this->getTableData(".list");
	}

	function hasImportPage()
	{
		return $this->getTableData(".import");
	}

	function hasInlineEdit()
	{
		return $this->getTableData(".inlineEdit");
	}
	
	function hasUpdateSelected()
	{
		return $this->getTableData(".updateSelected");
	}
	
	function hasReorderingByHeader()
	{
		return $this->getTableData(".reorderRecordsByHeader");
	}
	
	function hasSortByDropdown()
	{
		return $this->getTableData(".createSortByDropdown");
	}
	
	function getSortControlSettingsJSONString()
	{
		return $this->getTableData(".strSortControlSettingsJSON");
	}
	function getClickActionJSONString()
	{
		return $this->getTableData(".strClickActionJSON");
	}
	
	function hasCopyPage()
	{
		return $this->getTableData(".copy");
	}
	function hasViewPage()
	{
		return $this->getTableData(".view");
	}
	function hasExportPage()
	{
		return $this->getTableData(".exportTo");
	}
	function hasPrintPage()
	{
		return $this->getTableData(".printFriendly");
	}
	function hasDelete()
	{
		return $this->getTableData(".delete");
	}
	function getTotalsFields()
	{
		return $this->getTableData(".totalsFields");
	}
	function getAdvancedSecurityType()
	{
		if( !GetGlobalData("createLoginPage",null) || (GetGlobalData("nLoginMethod", null) != SECURITY_TABLE && GetGlobalData("nLoginMethod", null) != SECURITY_AD ) )
			return ADVSECURITY_ALL;
		return $this->getTableData(".nSecOptions");
	}
	function displayLoading()
	{
		return $this->getTableData(".isDisplayLoading");
	}
	function getRecordsPerPageArray()
	{
		return $this->getTableData(".arrRecsPerPage");
	}
	function getGroupsPerPageArray()
	{
		return $this->getTableData(".arrGroupsPerPage");
	}

	function isReportWithGroups()
	{
		return $this->getTableData(".reportGroupFields");
	}

	function isCrossTabReport()
	{
		return $this->getTableData(".crossTabReport");
	}

	function getReportGroupFieldsData()
	{
		return $this->getTableData(".reportGroupFieldsData");
	}

	function reportHasHorizontalSummary()
	{
		return $this->getTableData(".reportHorizontalSummary");
	}

	function reportHasVerticalSummary()
	{
		return $this->getTableData(".reportVerticalSummary");
	}

	function reportHasPageSummary()
	{
		return $this->getTableData(".reportPageSummary");
	}

	function reportHasGlobalSummary()
	{
		return $this->getTableData(".reportGlobalSummary");
	}

	function getReportLayout()
	{
		return  $this->getTableData(".reportLayout");
	}

	function isGroupSummaryCountShown()
	{
		return  $this->getTableData(".showGroupSummaryCount");
	}

	function reportDetailsShown()
	{
		return $this->getTableData(".repShowDet");
	}

	function reportTotalFieldsExist()
	{
		return $this->getTableData(".isExistTotalFields");
	}

	function noRecordsOnFirstPage()
	{
		return $this->getTableData(".noRecordsFirstPage");
	}

	function isViewPagePDF()
	{
		return $this->getTableData(".isViewPagePDF");
	}

	function isLandscapeViewPDFOrientation()
	{
		return $this->getTableData(".isLandscapeViewPDFOrientation");
	}

	function isViewPagePDFFitToPage()
	{
		return $this->getTableData(".isViewPagePDFFitToPage");
	}

	function getViewPagePDFScale()
	{
		return $this->getTableData(".nViewPagePDFScale");
	}

	function isLandscapePrinterPagePDFOrientation()
	{
		return $this->getTableData(".isLandscapePrinterPagePDFOrientation");
	}

	function isPrinterPagePDFFitToPage()
	{
		return $this->getTableData(".isPrinterPagePDFFitToPage");
	}

	function getPrinterPagePDFScale()
	{
		return $this->getTableData(".nPrinterPagePDFScale");
	}

	function isPrinterPageFitToPage()
	{
		return $this->getTableData(".isPrinterPageFitToPage");
	}

	function getPrinterPageScale()
	{
		return $this->getTableData(".nPrinterPageScale");
	}

	function getPrinterSplitRecords()
	{
		return $this->getTableData(".nPrinterSplitRecords");
	}

	function getPrinterPDFSplitRecords()
	{
		return $this->getTableData(".nPrinterPDFSplitRecords");
	}

	function isPrinterPagePDF()
	{
		return $this->getTableData(".isPrinterPagePDF");
	}

	function isCaptchaEnabledOnEdit()
	{
		return $this->getTableData(".isCaptchaEnabledOnEdit");
	}

	function isCaptchaEnabledOnAdd()
	{
		return $this->getTableData(".isCaptchaEnabledOnAdd");
	}

	function captchaEditFieldName()
	{
		return $this->getTableData(".captchaEditFieldName");
	}

	function captchaAddFieldName()
	{
		return $this->getTableData(".captchaAddFieldName");
	}

	function isSearchRequiredForFiltering()
	{
		return $this->getTableData(".searchIsRequiredForFilters");
	}
	function warnLeavingPages()
	{
		return $this->getTableData(".warnLeavingPages");
	}

	function hideEmptyViewFields()
	{
		return $this->getTableData(".hideEmptyFieldsOnView");
	}

	function getInitialPageSize()
	{
		return $this->getTableData(".pageSize");
	}

	function getRecordsPerRowList()
	{
		return $this->getTableData(".recsPerRowList");
	}

	function getRecordsPerRowPrint()
	{
		return $this->getTableData(".recsPerRowPrint");
	}

	function useMoveNext()
	{
		return $this->getTableData(".moveNext");
	}

	function highlightRows()
	{
		return $this->getTableData(".rowHighlite");
	}

	function hasInlineAdd()
	{
		return $this->getTableData(".inlineAdd");
	}

	function getListGridLayout()
	{
		return $this->getTableData(".listGridLayout");
	}

	function getPrintGridLayout()
	{
		return $this->getTableData(".printGridLayout");
	}

	function getReportPrintLayout()
	{
		return $this->getTableData(".printReportLayout");
	}

	function getPrinterPageOrientation()
	{
		return $this->getTableData(".printerPageOrientation");
	}

	function getReportPrintPartitionType()
	{
		return $this->getTableData(".reportPrintPartitionType");
	}

	function getReportPrintGroupsPerPage()
	{
		return $this->getTableData(".reportPrintGroupsPerPage");
	}

	function getReportPrintPDFGroupsPerPage()
	{
		return $this->getTableData(".reportPrintPDFGroupsPerPage");
	}


	function getLowGroup()
	{
		return $this->getTableData(".lowGroup");
	}

	function ajaxBasedListPage()
	{
		return $this->getTableData(".listAjax");
	}


	/**
	 * Returns true when the Add page has multistep layout
	 * @return boolean
	 */
	function isAddMultistep()
	{
		return $this->getTableData(".addMultistep");
	}

	/**
	 * Returns true when the Edit page has multistep layout
	 * @return boolean
	 */
	function isEditMultistep()
	{
		return $this->getTableData(".editMultistep");
	}

	/**
	 * Returns true when the View page has multistep layout
	 * @return boolean
	 */
	function isViewMultistep()
	{
		return $this->getTableData(".viewMultistep");
	}

	function isRegisterMultistep()
	{
		return $this->getTableData(".registerMultistep");
	}

	/**
	 * Returns array of tabs and sections, which use on add page
	 * @param string $table - current data source table name
	 * @return array
	 */
	function getAddTabs()
	{
		return $this->getTableData(".arrAddTabs");
	}

	/**
	 * Check use tabs and sections on add page or not
	 * @param string $table - current data source table name
	 * @return boolean result - true or false
	 */
	function useTabsOnAdd()
	{
		if(count($this->getAddTabs()))
			return true;
		return false;
	}

	/**
	 * Returns array of tabs and sections, which use on edit page
	 * @param string $table - current data source table name
	 * @return array
	 */
	function getEditTabs()
	{
		return $this->getTableData(".arrEditTabs");
	}

	/**
	 * Check use tabs and sections on edit page or not
	 * @param string $table - current data source table name
	 * @return boolean result - true or false
	 */
	function useTabsOnEdit()
	{
		if(count($this->getEditTabs()))
			return true;
		return false;
	}

	/**
	 * Returns array of tabs and sections, which use on view page
	 * @param string $table - current data source table name
	 * @return array
	 */
	function getViewTabs()
	{
		return $this->getTableData(".arrViewTabs");
	}

	/**
	 * Check use tabs and sections on view page or not
	 * @param string $table - current data source table name
	 * @return boolean result - true or false
	 */
	function useTabsOnView()
	{
		if(count($this->getViewTabs()))
			return true;
		return false;
	}
	
	/**
	 * Returns array of tabs and sections, which use on view page
	 * @param string $table - current data source table name
	 * @return array
	 */
	function getRegisterTabs()
	{
		return $this->getTableData(".arrRegisterTabs");
	}

	/**
	 * Check use tabs and sections on view page or not
	 * @param string $table - current data source table name
	 * @return boolean result - true or false
	 */
	function useTabsOnRegister()
	{
		if(count($this->getRegisterTabs()))
			return true;
		return false;
	}

	function highlightSearchResults()
	{
		return $this->getTableData(".highlightSearchResults");
	}


	function getFieldsList()
	{
		if(is_null($this->_tableData))
			return array();
		$t = array_keys($this->_tableData);
		$arr = array();
		foreach($t as $f)
			if(substr($f,0,1)!=".")
				$arr[] = $f;
		return $arr;
	}

	function getBinaryFieldsIndices()
	{
		$fields = $this->getFieldsList();
		$out = array();
		foreach($fields as $idx => $f)
		{
			if(IsBinaryType($this->getFieldType($f)))
				$out[] = $idx + 1;
		}
		return $out;
	}

	function getNBFieldsList()
	{
		$t = $this->getFieldsList();
		$arr = array();
		foreach($t as $f)
			if(!IsBinaryType($this->getFieldType($f)))
				$arr[] = $f;
		return $arr;
	}

	/**
	 * Get field by good field name
	 * @param string	$field The good field name
	 * @return string
	 */
	function getFieldByGoodFieldName($field)
	{
		foreach($this->_tableData as $key => $value)
		{
			if(count($value) > 1)
			{
				if($value["GoodName"] == $field)
					return $key;
			}
		}
		return "";
	}

	/**
	 * getUploadFolder
	 * Return inputed value or calculated path for upload folder
	 * @param {string} field name
	 * @param {array} file info (name, type, size)
	 */
	function getUploadFolder($field, $fileData = array())
	{
		if($this->isUploadCodeExpression($field))
			$path = GetUploadFolderExpression($field, $fileData);
		else
			$path = $this->getFieldData($field, "UploadFolder");
				if(strlen($path) && substr($path,strlen($path)-1) != "/")
			$path.="/";
		return $path;
	}

	function isMakeDirectoryNeeded($field)
	{
		return $this->isUploadCodeExpression($field) || !$this->isAbsolute($field);
	}

	function getFinalUploadFolder($field, $fileData = array())
	{
		if($this->isAbsolute($field))
			$path = $this->getUploadFolder($field, $fileData);
		else
			$path = getabspath($this->getUploadFolder($field, $fileData));
				if(strlen($path) && substr($path,strlen($path)-1) != "/")
			$path.="/";
		return $path;
	}

	function isUploadCodeExpression($field)
	{
		return $this->getFieldData($field, "UploadCodeExpression");
	}

	function &getQueryObject()
	{
		$queryObj = $this->getSQLQuery();
		return $queryObj;
	}

	function getListOfFieldsByExprType($needaggregate)
	{
		$query = &$this->getSQLQuery();
		$fields = $this->getFieldsList();
		$out = array();
		foreach($fields as $idx=>$f)
		{
			$aggr = $query->IsAggrFuncField($idx);
			if($needaggregate && $aggr || !$needaggregate && !$aggr)
				$out[] = $f;
		}
		return $out;
	}

	function isAggregateField($field)
	{
		$query = &$this->getSQLQuery();
		$idx = $this->getFieldIndex($field) - 1;
		return $query->IsAggrFuncField($idx);
	}

	/**
	 * Check if searching is case insensitive for the table
	 * @return Boolean
	 */
	function getNCSearch()
	{
		return $this->getTableData(".NCSearch");
	}

	function getChartType()
	{
		return $this->getTableData(".chartType");
	}

	function getChartRefreshTime()
	{
		return $this->getTableData(".ChartRefreshTime");
	}

	function getChartXml()
	{
		return $this->getTableData(".chartXml");
	}

	function auditEnabled()
	{
		return $this->getTableData(".audit");
	}

	function isSearchSavingEnabled()
	{
		return $this->getTableData(".searchSaving");
	}

	function isAllowShowHideFields()
	{
		if ( $this->getScrollGridBody() )
			return false;

		return $this->getTableData(".allowShowHideFields");
	}

	function isAllowFieldsReordering()
	{
		if ( $this->getScrollGridBody() || $this->getRecordsPerRowList() > 1)
			return false;

		return $this->getTableData(".allowFieldsReordering");
	}

	function lockingEnabled()
	{
		return $this->getTableData(".locking");
	}

	function hasEncryptedFields()
	{
		return $this->getTableData(".hasEncryptedFields");
	}

	function showSearchPanel()
	{
		return $this->getTableData(".showSearchPanel");
	}

	function isFlexibleSearch()
	{
		return $this->getTableData(".flexibleSearch");
	}

	function getSearchRequiredFields()
	{
		return $this->getTableData(".requiredSearchFields");
	}

	function showSimpleSearchOptions()
	{
		return $this->getTableData(".showSimpleSearchOptions");
	}

	function getFilterFields()
	{
		return $this->getTableData(".filterFields");
	}

	function getFilterFieldFormat($field)
	{
		return $this->getFieldData($field, "filterFormat");
	}

	function getFilterFieldTotal($field)
	{
		return $this->getFieldData($field, "filterTotals");
	}

	function showWithNoRecords($field)
	{
		return $this->getFieldData($field, "showWithNoRecords");
	}

	function getFilterSortValueType($field)
	{
		return $this->getFieldData($field, "sortValueType");
	}

	function isFilterSortOrderDescending($field)
	{
		return $this->getFieldData($field, "descendingOrder");
	}

	function getNumberOfVisibleFilterItems($field)
	{
		return $this->getFieldData($field, "numberOfVisibleItems");
	}

	function getParentFilterName($field)
	{
		return $this->getFieldData($field, "parentFilterField");
	}

	function getParentFiltersNames($field)
	{
		return $this->getFieldData($field, "parentFilters");
	}

	function hasDependentFilter($field)
	{
		return $this->getDependentFilterName($field) != "";
	}

	function getDependentFilterName($field)
	{
		return $this->getFieldData($field, "dependentFilterName");
	}

	function getDependentFiltersNames($field)
	{
		return $this->getFieldData($field, "dependentFilters");
	}

	function getFilterIntervals($field)
	{
		return $this->getFieldData($field, "filterIntervals");
	}

	function showCollapsed($field)
	{
		return $this->getFieldData($field, "showCollapsed");
	}

	function getFilterIntervalDatabyIndex($field, $idx)
	{
		$intervalData = array();

		$filterIntervalsData = $this->getFilterIntervals($field);
		foreach($filterIntervalsData as $interval)
		{
			if($interval["index"] == $idx)
			{
				$intervalData = $interval;
				break;
			}
		}

		return $intervalData;
	}

	function getFilterTotalsField($field)
	{
		return $this->getFieldData($field, "filterTotalFields");
	}

	function getFilterFiledMultiSelect($field)
	{
		return $this->getFieldData($field, "filterMultiSelect");
	}

	function getFilterCheckedMessage($field)
	{
		return $this->getFieldData($field, "filterCheckedMessageText");
	}

	function getFilterCheckedMessageType($field)
	{
		return $this->getFieldData($field, "filterCheckedMessageType");
	}

	function getFilterUncheckedMessage($field)
	{
		return $this->getFieldData($field, "filterUncheckedMessageText");
	}

	function getFilterUncheckedMessageType($field)
	{
		return $this->getFieldData($field, "filterUncheckedMessageType");
	}

	function getFilterStepType($field)
	{
		return $this->getFieldData($field, "filterSliderStepType");
	}

	function getFilterStepValue($field)
	{
		return $this->getFieldData($field, "filterSliderStepValue");
	}

	function getFilterKnobsType($field)
	{
		return $this->getFieldData($field, "filterKnobsType");
	}

	function isFilterApplyBtnSet($field)
	{
		return $this->getFieldData($field, "filterApplyBtn");
	}

	function isCaseInsensitiveUsername()
	{
		global $caseInsensitiveUsername;
		return $caseInsensitiveUsername;
	}

	function getCaseSensitiveUsername($value)
	{
		if (!$this->isCaseInsensitiveUsername())
			return $value;
		return strtoupper($value);
	}

	function getStrField($field)
	{
		return $this->getFieldData($field, "strField");
	}

	function getScrollGridBody()
	{
		return $this->getTableData(".scrollGridBody");
	}

	/**
	 * Is 'UpdateLatLng' ticked for the table
	 */
	function isUpdateLatLng()
	{
		return $this->getTableData(".geocodingEnabled");
	}

	/**
	 * get geocoding data for the table
	 */
	function getGeocodingData()
	{
		return $this->getTableData(".geocodingData");
	}

	function allowDuplicateValues($field)
	{
		return !$this->getFieldData($field, "denyDuplicates");
	}

	function getDashFieldData($field, $key)
	{
		$dashSearchFields = $this->getDashboardSearchFields();
		$dfield = $dashSearchFields[ $field ];
		if( $dfield )
			$table = $dfield[0]["table"];
		if( !$dfield || !$table)
			return $this->getDefaultValueByKey( $key );

		if( !$this->_dashboardElemPSet[ $table ] )
			$this->_dashboardElemPSet[ $table ] = new ProjectSettings( $table, $this->_editPage );

		return $this->_dashboardElemPSet[ $table ]->getFieldData( $dfield[0]["field"], $key );
	}

	function getDashTableData($field, $key)
	{
		$dashSearchFields = $this->getDashboardSearchFields();
		$tableSettings = new ProjectSettings($dashSearchFields[$field][0]["table"], $this->_editPage);
		return $tableSettings->getTableData( $key );
	}


	/**
	 * It returns an empty array if the 'Select all' (search options) is ticked
	 */
	function getSearchOptionsList($field)
	{
		return $this->getFieldData($field, "searchOptionsList");
	}


	function getDefaultSearchOption($field)
	{
		$defaultOpt = $this->getFieldData($field, "defaultSearchOption");

		if( !$defaultOpt )
		{
			$searchOptionsList = $this->getSearchOptionsList($field);
			if( count($searchOptionsList) )
				$defaultOpt = $searchOptionsList[0];
		}
		return $defaultOpt;
	}

	/**
	 * Get status show list of thumbnails
	 * @param string $field field name
	 * @return boolean
	 */
	function showListOfThumbnails($field)
	{
		return $this->getFieldData($field, "ShowListOfThumbnails");
	}
	/**
	 * Returns menu name for given menuId and page
	 * @param string $page page name
	 * @param string $menuId menu id
	 * @return string
	 */
	function getMenuName($page, $id, $horizontal)
	{
		global $menuAssignments;
		$menuId = $id;
		$isho = strlen($horizontal) > 0 ? "1" : "0";
		foreach($menuAssignments as $m)
		{
			if($m["page"] == $page && $m["id"] == $menuId && $isho == $m["horizontal"])
				return $m["name"];
		}
		return "main";
	}

	function getMenuStyle($page, $id, $horizontal)
	{
		global $menuStyles;
		$menuId = $id;
		$isho = (bool)strlen($horizontal);
		foreach($menuStyles as $m)
		{
			if($m["page"] == $page && $m["id"] == $menuId && $isho == (bool)$m["horizontal"])
				return $m["style"];
		}
	// return default style
		if($id == "main")
			return 0;
		return 1;
	}

	static function isMenuTreelike( $menuName )
	{
		global $menuTreelikeFlags;
		return $menuTreelikeFlags[$menuName];
	}

	static function isMenuDrillDown( $menuName )
	{
		global $menuDrillDownFlags;
		return $menuDrillDownFlags[$menuName];
	}
	
	
	function setPageMode($pageMode)
	{
		$this->_pageMode = $pageMode;
	}

	function editPageHasDenyDuplicatesFields()
	{
		foreach($this->getEditFields() as $fieldName)
		{
			if( !$this->allowDuplicateValues($fieldName) )
			{
				return true;
			}
		}
		return false;
	}

	/**
	 * Get a field's RTE type for RTE fields
	 * and the empty string for others
	 * @param {String} $field 	A field's name
	 * @return {String}
	 */
	function getRTEType($field)
	{
		if($this->isUseRTEBasic($field))
		{
			return "RTE";
		}
		if($this->isUseRTEFCK($field))
		{
			return "RTECK";
		}
		if($this->isUseRTEInnova($field))
		{
			return "RTEINNOVA";
		}
		return "";
	}

	/**
	 * Get the list of the fields that must be hidden on the List page on a particular device
	 * @param {Number} Device code : 1-4
	 * @return {Array} array in the form of: $arr[$field]=true, where the $field must be hidden.
	 */
	function getHiddenFields($device)
	{
		$list = $this->getTableData( ".hideMobileList" );
		if( isset( $list[$device] ) )
			return $list[$device];
		return array();
	}

	/**
	 * Get the list of the fields that must be hidden on the List page on a particular device
	 * @param {Number} Device code : 1-4
	 * @return {Array} array in the form of: $arr[$goodfieldName]=true, where the $field must be hidden.
	 */
	function getHiddenGoodNameFields($device)
	{
		$hGoodFields = array();
		$hFields = $this->getHiddenFields($device);
		foreach ( $hFields as $field => $isShow ) {
			$hGoodFields[GoodFieldName($field)] = $isShow;
		}

		return $hGoodFields;
	}

	/**
	 * Checks if the 'columns By Device' is enabled
	 * @return {Boolean} 
	 */
	function columnsByDeviceEnabled()
	{
		$list = $this->getTableData( ".hideMobileList" );
		foreach( $list as $d => $v )
		{
			if( $v )
				return true;
		}
		return false;
	}
	
	
	/**
	 * Build CSS media clause for given device code.
	 * Thanks to mobile device vendors, there are plenty of weird heuristics here, take it easy.
	 */
	static function getDeviceMediaClause($device)
	{
		if( $device == DESKTOP )
		{
			// width >= 1281
			
			//	Desktop. We don't care about prehistoric VGA displays
			return "@media (min-device-width: 1281px)";
		}
		else if( $device == TABLET_10_IN )	//	10" tablets
		{
			// width >= 768 and height == 1024 ( iPad )
			// or width between 1025 and 1280 and height is less than 1023
			// or the same with width and height interchanged
			
			// All iPads including mini go here, because there is no way to tell full-sized iPad from mini.
			return "@media (device-width: 768px) and (device-height: 1024px)".

			// The rest of contemporary 10" devices supposedly go here
				" , (min-device-width: 1025px) and (max-device-width: 1280px) and (max-device-height: 1023px) , (min-device-height: 1025px) and (max-device-height: 1280px) and (max-device-width: 1023px)";
		}
		else if( $device == TABLET_7_IN )
		{
			// width between 401 and 1024 and height between 401 and 800
			// or the same with width and height interchanged

			return "@media (min-device-height: 401px) and (max-device-height: 800px) and (min-device-width: 401px) and (max-device-width: 1024px) , (min-device-height: 401px) and (min-device-width: 401px) and (max-device-height: 1024px) and (max-device-width: 800px)";
		}

		else if( $device == SMARTPHONE_LANDSCAPE )
		{
			// landscape mode and width or height no more than 400 
			return "@media (orientation: landscape) and (max-device-height: 400px), (orientation: landscape) and (max-device-width: 400px)";
		}

		else if( $device == SMARTPHONE_PORTRAIT )
		{
			// potrait mode and width or height no more than 400 
			return "@media (orientation: portrait) and (max-device-height: 400px), (orientation: portrait) and (max-device-width: 400px)";
		}
	}

	/**
	 * @return Mixed
	 */
	public static function getForLogin()
	{
		return null;
	}

	/**
	 * Returns the list of the dashboard search fields.
	 * Each field is an array of "table", "field" pairs.
	 */
	function getDashboardSearchFields()
	{
		return $this->getTableData(".searchFields");
	}
	/**
	 * Returns the list of the dashboard elements
	 * Each element is represented by the array of "name", "table" and "type"
	 */
	function getDashboardElements()
	{
		return $this->getTableData(".dashElements");
	}

	/**
	 * @param String dashElementName
	 * @return Array
	 */
	function getDashboardElementData( $dashElementName )
	{
		$dElements = $this->getTableData(".dashElements");
		foreach( $dElements as $dElemData )
		{
			if( $dElemData["elementName"] == $dashElementName )
				return $dElemData;
		}
		return array();
	}

	/**
	 * @return Number
	 */
	function getAfterAddAction()
	{
		return $this->getTableData(".afterAddAction");
	}

	/**
	 * @return String
	 */
	function getAADetailTable()
	{
		return $this->getTableData(".afterAddActionDetTable");
	}

	/**
	 * @return Boolean
	 */
	function checkClosePopupAfterAdd()
	{
		return $this->getTableData(".closePopupAfterAdd");
	}

	/**
	 * @return Number
	 */
	function getAfterEditAction()
	{
		return $this->getTableData(".afterEditAction");
	}

	/**
	 * @return String
	 */
	function getAEDetailTable()
	{
		return $this->getTableData(".afterEditActionDetTable");
	}

	/**
	 * @return Boolean
	 */
	function checkClosePopupAfterEdit()
	{
		return $this->getTableData(".closePopupAfterEdit");
	}

	function getMapIcon($field, $data)
	{
		if( !$this->isMapIconCustom($field) ) {
			$mapData = $this->getMapData($field);
			if( $mapData["mapIcon"] != "" )
				return "images/menuicons/" . $mapData["mapIcon"];
			return "";
		}
		else 
		{
			return getCustomMapIcon($field, "", $data);
		}
	}
	
	/**
	 * @param String dashElementName
	 * @param Array data
	 * @return String
	 */
	function getDashMapIcon( $dashElementName, $data )
	{
		$dashElementData = $this->getDashboardElementData( $dashElementName );
		
		if( $dashElementData["isMarkerIconCustom"] )
			return getDashMapCustomIcon( $this->_table, $dashElementName, $data );
		
		if( $dashElementData["iconF"] )
			return $dashElementData["iconF"];
			
		return "";	
	}

	function isMapIconCustom($field)
	{
		$mapData = $this->getMapData($field);
		return $mapData["isMapIconCustom"];
	}
	
	function getDetailsBadgeColor()
	{
		return $this->getTableData(".badgeColor");
	}
}

$pageTypesForView = array();
$pageTypesForView[] = "list";
$pageTypesForView[] = "view";
$pageTypesForView[] = "export";
$pageTypesForView[] = "print";
$pageTypesForView[] = "report";
$pageTypesForView[] = "rprint";
$pageTypesForView[] = "chart";

$pageTypesForEdit = array();
$pageTypesForEdit[] = "add";
$pageTypesForEdit[] = "edit";
$pageTypesForEdit[] = "search";
$pageTypesForEdit[] = "register";


$projectEntities = array();
$projectEntitiesReverse = array();
$tablesByGoodName = array();
$tablesByUpperCase = array();
$tablesByUpperGoodname = array();

function fillProjectEntites()
{
	global $projectEntities, $projectEntitiesReverse, $tablesByGoodName, $tablesByUpperCase, $tablesByUpperGoodname; 
	if( count( $projectEntities ) )
		return;
	$projectEntities[ "Delitos especificos" ] = array( "url" => "Delitos_especificos", "type" => 1 );
	$projectEntitiesReverse[ "Delitos_especificos" ] = "Delitos especificos";
	$projectEntities[ "carcel1" ] = array( "url" => "carcel1", "type" => 0 );
	$projectEntitiesReverse[ "carcel1" ] = "carcel1";
	$projectEntities[ "class_lugarespecifico" ] = array( "url" => "class_lugarespecifico", "type" => 0 );
	$projectEntitiesReverse[ "class_lugarespecifico" ] = "class_lugarespecifico";
	$projectEntities[ "sectorppdf" ] = array( "url" => "sectorppdf", "type" => 0 );
	$projectEntitiesReverse[ "sectorppdf" ] = "sectorppdf";
	$projectEntities[ "tipo_mara" ] = array( "url" => "tipo_mara", "type" => 0 );
	$projectEntitiesReverse[ "tipo_mara" ] = "tipo_mara";
	$projectEntities[ "carcel_CAMBIOS" ] = array( "url" => "carcel_CAMBIOS", "type" => 1 );
	$projectEntitiesReverse[ "carcel_CAMBIOS" ] = "carcel_CAMBIOS";
	$projectEntities[ "clasificacion" ] = array( "url" => "clasificacion", "type" => 1 );
	$projectEntitiesReverse[ "clasificacion" ] = "clasificacion";
	$projectEntities[ "Espacios abiertos" ] = array( "url" => "Espacios_abiertos", "type" => 1 );
	$projectEntitiesReverse[ "Espacios_abiertos" ] = "Espacios abiertos";
	$projectEntities[ "hechosdelictivos" ] = array( "url" => "hechosdelictivos", "type" => 1 );
	$projectEntitiesReverse[ "hechosdelictivos" ] = "hechosdelictivos";
	$projectEntities[ "hechosdelictivos_lugaresp" ] = array( "url" => "hechosdelictivos_lugaresp", "type" => 1 );
	$projectEntitiesReverse[ "hechosdelictivos_lugaresp" ] = "hechosdelictivos_lugaresp";
	$projectEntities[ "Todos los datos PPL" ] = array( "url" => "Todos_los_datos_PPL", "type" => 1 );
	$projectEntitiesReverse[ "Todos_los_datos_PPL" ] = "Todos los datos PPL";
	$projectEntities[ "PPL pertenecientes a Pandilla" ] = array( "url" => "PPL_pertenecientes_a_Pandilla", "type" => 2 );
	$projectEntitiesReverse[ "PPL_pertenecientes_a_Pandilla" ] = "PPL pertenecientes a Pandilla";
	$projectEntities[ "Sector PPD" ] = array( "url" => "Sector_PPD", "type" => 2 );
	$projectEntitiesReverse[ "Sector_PPD" ] = "Sector PPD";
	$projectEntities[ "Homicidios tentados por rango etarios, según sexo victima" ] = array( "url" => "Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima", "type" => 2 );
	$projectEntitiesReverse[ "Homicidios_tentados_por_rango_etarios__seg_n_sexo_victima" ] = "Homicidios tentados por rango etarios, según sexo victima";
	$projectEntities[ "Hurtos por rango etarios, según sexo victima" ] = array( "url" => "Hurtos_por_rango_etarios__seg_n_sexo_victima", "type" => 2 );
	$projectEntitiesReverse[ "Hurtos_por_rango_etarios__seg_n_sexo_victima" ] = "Hurtos por rango etarios, según sexo victima";
	$projectEntities[ "Hurtos de vehículo por rango etarios, según sexo victima" ] = array( "url" => "Hurtos_de_veh_culo_por_rango_etarios__seg_n_sexo_victima", "type" => 2 );
	$projectEntitiesReverse[ "Hurtos_de_veh_culo_por_rango_etarios__seg_n_sexo_victima" ] = "Hurtos de vehículo por rango etarios, según sexo victima";
	$projectEntities[ "Lesiones por rango etarios etarios, según sexo victima" ] = array( "url" => "Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima", "type" => 2 );
	$projectEntitiesReverse[ "Lesiones_por_rango_etarios_etarios__seg_n_sexo_victima" ] = "Lesiones por rango etarios etarios, según sexo victima";
	$projectEntities[ "Robos por rango etario, según sexo victima" ] = array( "url" => "Robos_por_rango_etario__seg_n_sexo_victima", "type" => 2 );
	$projectEntitiesReverse[ "Robos_por_rango_etario__seg_n_sexo_victima" ] = "Robos por rango etario, según sexo victima";
	$projectEntities[ "Robo de vehículo por rango etario, según sexo victima" ] = array( "url" => "Robo_de_veh_culo_por_rango_etario__seg_n_sexo_victima", "type" => 2 );
	$projectEntitiesReverse[ "Robo_de_veh_culo_por_rango_etario__seg_n_sexo_victima" ] = "Robo de vehículo por rango etario, según sexo victima";
	$projectEntities[ "Robo y hurto de vehículo con mercaderia por rango etario, según sexo victima" ] = array( "url" => "Robo_y_hurto_de_veh_culo_con_mercaderia_por_rango_etario__seg_n_sexo_victima", "type" => 2 );
	$projectEntitiesReverse[ "Robo_y_hurto_de_veh_culo_con_mercaderia_por_rango_etario__seg_n_sexo_victima" ] = "Robo y hurto de vehículo con mercaderia por rango etario, según sexo victima";
	$projectEntities[ "Personas privadas de libertad por Sectores Estandarizados según género" ] = array( "url" => "Personas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero", "type" => 2 );
	$projectEntitiesReverse[ "Personas_privadas_de_libertad_por_Sectores_Estandarizados_seg_n_g_nero" ] = "Personas privadas de libertad por Sectores Estandarizados según género";
	$projectEntities[ "Delitos por área" ] = array( "url" => "Delitos_por__rea", "type" => 2 );
	$projectEntitiesReverse[ "Delitos_por__rea" ] = "Delitos por área";
	$projectEntities[ "Personas privadas de libertad por rango etario según género" ] = array( "url" => "Personas_privadas_de_libertad_por_rango_etario_seg_n_g_nero", "type" => 2 );
	$projectEntitiesReverse[ "Personas_privadas_de_libertad_por_rango_etario_seg_n_g_nero" ] = "Personas privadas de libertad por rango etario según género";
	$projectEntities[ "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino" ] = array( "url" => "Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino", "type" => 2 );
	$projectEntitiesReverse[ "Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Femenino" ] = "Personas privadas de libertad por rango etario, segun nivel educativo y genero Femenino";
	$projectEntities[ "Personas privadas de libertad por rango etario, segun nivel educativo y genero Masculino" ] = array( "url" => "Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Masculino", "type" => 2 );
	$projectEntitiesReverse[ "Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_genero_Masculino" ] = "Personas privadas de libertad por rango etario, segun nivel educativo y genero Masculino";
	$projectEntities[ "Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas" ] = array( "url" => "Personas_privadas_de_libertad__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas", "type" => 2 );
	$projectEntitiesReverse[ "Personas_privadas_de_libertad__segun_Sector_Estandarizado_y_pertenecientes_a_pandillas" ] = "Personas privadas de libertad  segun Sector Estandarizado y pertenecientes a pandillas";
	$projectEntities[ "Delitos por lugar del hecho" ] = array( "url" => "Delitos_por_lugar_del_hecho", "type" => 2 );
	$projectEntitiesReverse[ "Delitos_por_lugar_del_hecho" ] = "Delitos por lugar del hecho";
	$projectEntities[ "Delitos por Móvil" ] = array( "url" => "Delitos_por_M_vil", "type" => 2 );
	$projectEntitiesReverse[ "Delitos_por_M_vil" ] = "Delitos por Móvil";
	$projectEntities[ "Conteo de delitos por sector estandarizado según Movil" ] = array( "url" => "Conteo_de_delitos_por_sector_estandarizado_seg_n_Movil", "type" => 2 );
	$projectEntitiesReverse[ "Conteo_de_delitos_por_sector_estandarizado_seg_n_Movil" ] = "Conteo de delitos por sector estandarizado según Movil";
	$projectEntities[ "Delitos por tipo de arma" ] = array( "url" => "Delitos_por_tipo_de_arma", "type" => 2 );
	$projectEntitiesReverse[ "Delitos_por_tipo_de_arma" ] = "Delitos por tipo de arma";
	$projectEntities[ "Ocupación de la víctima por Delitos" ] = array( "url" => "Ocupaci_n_de_la_v_ctima_por_Delitos", "type" => 2 );
	$projectEntitiesReverse[ "Ocupaci_n_de_la_v_ctima_por_Delitos" ] = "Ocupación de la víctima por Delitos";
	$projectEntities[ "Amenazas, por rango etarios, según sexo victima" ] = array( "url" => "Amenazas__por_rango_etarios__seg_n_sexo_victima", "type" => 2 );
	$projectEntitiesReverse[ "Amenazas__por_rango_etarios__seg_n_sexo_victima" ] = "Amenazas, por rango etarios, según sexo victima";
	$projectEntities[ "Delitos Sexuales  por rango etarios, según sexo victima" ] = array( "url" => "Delitos_Sexuales__por_rango_etarios__seg_n_sexo_victima", "type" => 2 );
	$projectEntitiesReverse[ "Delitos_Sexuales__por_rango_etarios__seg_n_sexo_victima" ] = "Delitos Sexuales  por rango etarios, según sexo victima";
	$projectEntities[ "Homicidios por rango etarios, según sexo" ] = array( "url" => "Homicidios_por_rango_etarios__seg_n_sexo", "type" => 2 );
	$projectEntitiesReverse[ "Homicidios_por_rango_etarios__seg_n_sexo" ] = "Homicidios por rango etarios, según sexo";
	$projectEntities[ "Delitos por sector Estandarizado" ] = array( "url" => "Delitos_por_sector_Estandarizado", "type" => 2 );
	$projectEntitiesReverse[ "Delitos_por_sector_Estandarizado" ] = "Delitos por sector Estandarizado";
	$projectEntities[ "Delitos por rango de horas" ] = array( "url" => "Delitos_por_rango_de_horas", "type" => 2 );
	$projectEntitiesReverse[ "Delitos_por_rango_de_horas" ] = "Delitos por rango de horas";
	$projectEntities[ "Conteo de delitos, por Sector Estandarizado según Movil" ] = array( "url" => "Conteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil", "type" => 2 );
	$projectEntitiesReverse[ "Conteo_de_delitos__por_Sector_Estandarizado_seg_n_Movil" ] = "Conteo de delitos, por Sector Estandarizado según Movil";
	$projectEntities[ "Delitos por mes del hecho" ] = array( "url" => "Delitos_por_mes_del_hecho", "type" => 2 );
	$projectEntitiesReverse[ "Delitos_por_mes_del_hecho" ] = "Delitos por mes del hecho";
	$projectEntities[ "homicidios_sv_2016" ] = array( "url" => "homicidios_sv_2016", "type" => 1 );
	$projectEntitiesReverse[ "homicidios_sv_2016" ] = "homicidios_sv_2016";
	$projectEntities[ "homicidios_sv_2016 Report" ] = array( "url" => "homicidios_sv_2016_Report", "type" => 2 );
	$projectEntitiesReverse[ "homicidios_sv_2016_Report" ] = "homicidios_sv_2016 Report";
	$projectEntities[ "homicidios_sv_2016 Report1" ] = array( "url" => "homicidios_sv_2016_Report1", "type" => 2 );
	$projectEntitiesReverse[ "homicidios_sv_2016_Report1" ] = "homicidios_sv_2016 Report1";
	$projectEntities[ "Muertes PNC enfrentamientos" ] = array( "url" => "Muertes_PNC_enfrentamientos", "type" => 2 );
	$projectEntitiesReverse[ "Muertes_PNC_enfrentamientos" ] = "Muertes PNC enfrentamientos";
	$projectEntities[ "homicidios_municipio" ] = array( "url" => "homicidios_municipio", "type" => 2 );
	$projectEntitiesReverse[ "homicidios_municipio" ] = "homicidios_municipio";
	$projectEntities[ "Municipios con porcentaje de enfrentamiento" ] = array( "url" => "Municipios_con_porcentaje_de_enfrentamiento", "type" => 2 );
	$projectEntitiesReverse[ "Municipios_con_porcentaje_de_enfrentamiento" ] = "Municipios con porcentaje de enfrentamiento";
	$projectEntities[ "PPL pertenecientes a pandillas por municipio" ] = array( "url" => "PPL_pertenecientes_a_pandillas_por_municipio", "type" => 2 );
	$projectEntitiesReverse[ "PPL_pertenecientes_a_pandillas_por_municipio" ] = "PPL pertenecientes a pandillas por municipio";
	$projectEntities[ "PPL delitos" ] = array( "url" => "PPL_delitos", "type" => 2 );
	$projectEntitiesReverse[ "PPL_delitos" ] = "PPL delitos";
	$projectEntities[ "Transito class Rango Etario" ] = array( "url" => "Transito_class_Rango_Etario", "type" => 1 );
	$projectEntitiesReverse[ "Transito_class_Rango_Etario" ] = "Transito class Rango Etario";
	$projectEntities[ "PPL delitos_clasificacion" ] = array( "url" => "PPL_delitos_clasificacion", "type" => 1 );
	$projectEntitiesReverse[ "PPL_delitos_clasificacion" ] = "PPL delitos_clasificacion";
	$projectEntities[ "Carcel_hurto_mercaderia" ] = array( "url" => "Carcel_hurto_mercaderia", "type" => 1 );
	$projectEntitiesReverse[ "Carcel_hurto_mercaderia" ] = "Carcel_hurto_mercaderia";
	$projectEntities[ "PPL_educacion" ] = array( "url" => "PPL_educacion", "type" => 1 );
	$projectEntitiesReverse[ "PPL_educacion" ] = "PPL_educacion";
	$projectEntities[ "Personas Privadas de Libertad" ] = array( "url" => "Personas_Privadas_de_Libertad", "type" => 4 );
	$projectEntitiesReverse[ "Personas_Privadas_de_Libertad" ] = "Personas Privadas de Libertad";
	$projectEntities[ "hechos_delictivos_class delitos" ] = array( "url" => "hechos_delictivos_class_delitos", "type" => 1 );
	$projectEntitiesReverse[ "hechos_delictivos_class_delitos" ] = "hechos_delictivos_class delitos";
	$projectEntities[ "Sector PPD por pandilla de afiliacion (prueba)" ] = array( "url" => "Sector_PPD_por_pandilla_de_afiliacion__prueba_", "type" => 2 );
	$projectEntitiesReverse[ "Sector_PPD_por_pandilla_de_afiliacion__prueba_" ] = "Sector PPD por pandilla de afiliacion (prueba)";
	$projectEntities[ "tipo organizacion delictiva" ] = array( "url" => "tipo_organizacion_delictiva", "type" => 1 );
	$projectEntitiesReverse[ "tipo_organizacion_delictiva" ] = "tipo organizacion delictiva";
	$projectEntities[ "carcel visualizacion todos" ] = array( "url" => "carcel_visualizacion_todos", "type" => 1 );
	$projectEntitiesReverse[ "carcel_visualizacion_todos" ] = "carcel visualizacion todos";
	$projectEntities[ "Grupos etarios por estado civil (masculino)" ] = array( "url" => "Grupos_etarios_por_estado_civil__masculino_", "type" => 1 );
	$projectEntitiesReverse[ "Grupos_etarios_por_estado_civil__masculino_" ] = "Grupos etarios por estado civil (masculino)";
	$projectEntities[ "Grupo etarios por estado civil (masculino)" ] = array( "url" => "Grupo_etarios_por_estado_civil__masculino_", "type" => 2 );
	$projectEntitiesReverse[ "Grupo_etarios_por_estado_civil__masculino_" ] = "Grupo etarios por estado civil (masculino)";
	$projectEntities[ "Grupo etarios por estado civil (femenino)" ] = array( "url" => "Grupo_etarios_por_estado_civil__femenino_", "type" => 2 );
	$projectEntitiesReverse[ "Grupo_etarios_por_estado_civil__femenino_" ] = "Grupo etarios por estado civil (femenino)";
	$projectEntities[ "PPL Grupos etarios por afiliación a Pandillas" ] = array( "url" => "PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas", "type" => 2 );
	$projectEntitiesReverse[ "PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas" ] = "PPL Grupos etarios por afiliación a Pandillas";
	$projectEntities[ "PPL Grupos etarios por afiliación a Pandillas femenino" ] = array( "url" => "PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino", "type" => 2 );
	$projectEntitiesReverse[ "PPL_Grupos_etarios_por_afiliaci_n_a_Pandillas_femenino" ] = "PPL Grupos etarios por afiliación a Pandillas femenino";
	$projectEntities[ "PPL grupos etarios por Deportado masculino" ] = array( "url" => "PPL_grupos_etarios_por_Deportado_masculino", "type" => 2 );
	$projectEntitiesReverse[ "PPL_grupos_etarios_por_Deportado_masculino" ] = "PPL grupos etarios por Deportado masculino";
	$projectEntities[ "PPL grupos etarios por Deportado Femenino" ] = array( "url" => "PPL_grupos_etarios_por_Deportado_Femenino", "type" => 2 );
	$projectEntitiesReverse[ "PPL_grupos_etarios_por_Deportado_Femenino" ] = "PPL grupos etarios por Deportado Femenino";
	$projectEntities[ "PPL grupos etarios delito genero masculino" ] = array( "url" => "PPL_grupos_etarios_delito_genero_masculino", "type" => 2 );
	$projectEntitiesReverse[ "PPL_grupos_etarios_delito_genero_masculino" ] = "PPL grupos etarios delito genero masculino";
	$projectEntities[ "hechos_delictivos1" ] = array( "url" => "hechos_delictivos1", "type" => 0 );
	$projectEntitiesReverse[ "hechos_delictivos1" ] = "hechos_delictivos1";
	$projectEntities[ "PPL Grupos etarios por delitos masculino" ] = array( "url" => "PPL_Grupos_etarios_por_delitos_masculino", "type" => 2 );
	$projectEntitiesReverse[ "PPL_Grupos_etarios_por_delitos_masculino" ] = "PPL Grupos etarios por delitos masculino";
	$projectEntities[ "PPL Grupos etarios por delitos femenino" ] = array( "url" => "PPL_Grupos_etarios_por_delitos_femenino", "type" => 2 );
	$projectEntitiesReverse[ "PPL_Grupos_etarios_por_delitos_femenino" ] = "PPL Grupos etarios por delitos femenino";
	$projectEntities[ "DELITOS PNC" ] = array( "url" => "DELITOS_PNC", "type" => 4 );
	$projectEntitiesReverse[ "DELITOS_PNC" ] = "DELITOS PNC";
	$projectEntities[ "carcel prueba santa tecla" ] = array( "url" => "carcel_prueba_santa_tecla", "type" => 1 );
	$projectEntitiesReverse[ "carcel_prueba_santa_tecla" ] = "carcel prueba santa tecla";
	$projectEntities[ "carcel_clasificacion lugar" ] = array( "url" => "carcel_clasificacion_lugar", "type" => 1 );
	$projectEntitiesReverse[ "carcel_clasificacion_lugar" ] = "carcel_clasificacion lugar";
	$projectEntities[ "mes_corregido" ] = array( "url" => "mes_corregido", "type" => 1 );
	$projectEntitiesReverse[ "mes_corregido" ] = "mes_corregido";
	$projectEntities[ "Hechos delictivos dia del hecho" ] = array( "url" => "Hechos_delictivos_dia_del_hecho", "type" => 2 );
	$projectEntitiesReverse[ "Hechos_delictivos_dia_del_hecho" ] = "Hechos delictivos dia del hecho";
	$projectEntities[ "hechos_delictivos11" ] = array( "url" => "hechos_delictivos11", "type" => 1 );
	$projectEntitiesReverse[ "hechos_delictivos11" ] = "hechos_delictivos11";
	$projectEntities[ "BD Carcel" ] = array( "url" => "BD_Carcel", "type" => 1 );
	$projectEntitiesReverse[ "BD_Carcel" ] = "BD Carcel";
	$projectEntities[ "DB PNC" ] = array( "url" => "DB_PNC", "type" => 1 );
	$projectEntitiesReverse[ "DB_PNC" ] = "DB PNC";
	$projectEntities[ "Hechosdelictivos movil class" ] = array( "url" => "Hechosdelictivos_movil_class", "type" => 1 );
	$projectEntitiesReverse[ "Hechosdelictivos_movil_class" ] = "Hechosdelictivos movil class";
	$projectEntities[ "hechosdelictivos_tipo_arma" ] = array( "url" => "hechosdelictivos_tipo_arma", "type" => 1 );
	$projectEntitiesReverse[ "hechosdelictivos_tipo_arma" ] = "hechosdelictivos_tipo_arma";
	$projectEntities[ "Municipios y delitos" ] = array( "url" => "Municipios_y_delitos", "type" => 2 );
	$projectEntitiesReverse[ "Municipios_y_delitos" ] = "Municipios y delitos";
	$projectEntities[ "Hechosdelictivos ocupacion class" ] = array( "url" => "Hechosdelictivos_ocupacion_class", "type" => 1 );
	$projectEntitiesReverse[ "Hechosdelictivos_ocupacion_class" ] = "Hechosdelictivos ocupacion class";
	$projectEntities[ "hechosdelictivos_relacion_vict_agresor" ] = array( "url" => "hechosdelictivos_relacion_vict_agresor", "type" => 1 );
	$projectEntitiesReverse[ "hechosdelictivos_relacion_vict_agresor" ] = "hechosdelictivos_relacion_vict_agresor";
	$projectEntities[ "Relacion de victima con agresor" ] = array( "url" => "Relacion_de_victima_con_agresor", "type" => 2 );
	$projectEntitiesReverse[ "Relacion_de_victima_con_agresor" ] = "Relacion de victima con agresor";
	$projectEntities[ "hechosdelictivos_lugar_del_hecho" ] = array( "url" => "hechosdelictivos_lugar_del_hecho", "type" => 1 );
	$projectEntitiesReverse[ "hechosdelictivos_lugar_del_hecho" ] = "hechosdelictivos_lugar_del_hecho";
	$projectEntities[ "pnc911" ] = array( "url" => "pnc911", "type" => 1 );
	$projectEntitiesReverse[ "pnc911" ] = "pnc911";
	$projectEntities[ "pnc9111 class delito" ] = array( "url" => "pnc9111_class_delito", "type" => 1 );
	$projectEntitiesReverse[ "pnc9111_class_delito" ] = "pnc9111 class delito";
	$projectEntities[ "pnc9111" ] = array( "url" => "pnc9111", "type" => 0 );
	$projectEntitiesReverse[ "pnc9111" ] = "pnc9111";
	$projectEntities[ "pnc911 Sector por eventos" ] = array( "url" => "pnc911_Sector_por_eventos", "type" => 2 );
	$projectEntitiesReverse[ "pnc911_Sector_por_eventos" ] = "pnc911 Sector por eventos";
	$projectEntities[ "pnc911municipios" ] = array( "url" => "pnc911municipios", "type" => 2 );
	$projectEntitiesReverse[ "pnc911municipios" ] = "pnc911municipios";
	$projectEntities[ "PNC911 Avisos" ] = array( "url" => "PNC911_Avisos", "type" => 4 );
	$projectEntitiesReverse[ "PNC911_Avisos" ] = "PNC911 Avisos";
	$projectEntities[ "horas_completar" ] = array( "url" => "horas_completar", "type" => 1 );
	$projectEntitiesReverse[ "horas_completar" ] = "horas_completar";
	$projectEntities[ "hora_sustituir" ] = array( "url" => "hora_sustituir", "type" => 1 );
	$projectEntitiesReverse[ "hora_sustituir" ] = "hora_sustituir";
	$projectEntities[ "hechos_delictivos" ] = array( "url" => "hechos_delictivos", "type" => 0 );
	$projectEntitiesReverse[ "hechos_delictivos" ] = "hechos_delictivos";
	$projectEntities[ "hechosdelictivos2" ] = array( "url" => "hechosdelictivos2", "type" => 0 );
	$projectEntitiesReverse[ "hechosdelictivos2" ] = "hechosdelictivos2";
	$projectEntities[ "PPL pertenecientes a Pandilla_prueba" ] = array( "url" => "PPL_pertenecientes_a_Pandilla_prueba", "type" => 2 );
	$projectEntitiesReverse[ "PPL_pertenecientes_a_Pandilla_prueba" ] = "PPL pertenecientes a Pandilla_prueba";
	$projectEntities[ "PPL pertenecientes a Pandilla_prueba1" ] = array( "url" => "PPL_pertenecientes_a_Pandilla_prueba1", "type" => 2 );
	$projectEntitiesReverse[ "PPL_pertenecientes_a_Pandilla_prueba1" ] = "PPL pertenecientes a Pandilla_prueba1";
	$projectEntities[ "retornados" ] = array( "url" => "retornados", "type" => 0 );
	$projectEntitiesReverse[ "retornados" ] = "retornados";
	$projectEntities[ "Retornados, clasificacion rango etario" ] = array( "url" => "Retornados__clasificacion_rango_etario", "type" => 1 );
	$projectEntitiesReverse[ "Retornados__clasificacion_rango_etario" ] = "Retornados, clasificacion rango etario";
	$projectEntities[ "BD Retornados" ] = array( "url" => "BD_Retornados", "type" => 2 );
	$projectEntitiesReverse[ "BD_Retornados" ] = "BD Retornados";
	$projectEntities[ "Retornados-Región Repatriación por año" ] = array( "url" => "Retornados_Regi_n_Repatriaci_n_por_a_o", "type" => 2 );
	$projectEntitiesReverse[ "Retornados_Regi_n_Repatriaci_n_por_a_o" ] = "Retornados-Región Repatriación por año";
	$projectEntities[ "mes corregido retornado" ] = array( "url" => "mes_corregido_retornado", "type" => 1 );
	$projectEntitiesReverse[ "mes_corregido_retornado" ] = "mes corregido retornado";
	$projectEntities[ "Retornados-Regiones repatriación por meses" ] = array( "url" => "Retornados_Regiones_repatriaci_n_por_meses", "type" => 2 );
	$projectEntitiesReverse[ "Retornados_Regiones_repatriaci_n_por_meses" ] = "Retornados-Regiones repatriación por meses";
	$projectEntities[ "Retornados-Consulados por año" ] = array( "url" => "Retornados_Consulados_por_a_o", "type" => 2 );
	$projectEntitiesReverse[ "Retornados_Consulados_por_a_o" ] = "Retornados-Consulados por año";
	$projectEntities[ "Retornados Dashboard" ] = array( "url" => "Retornados_Dashboard", "type" => 4 );
	$projectEntitiesReverse[ "Retornados_Dashboard" ] = "Retornados Dashboard";
	$projectEntities[ "Retornados-Departamento por año" ] = array( "url" => "Retornados_Departamento_por_a_o", "type" => 2 );
	$projectEntitiesReverse[ "Retornados_Departamento_por_a_o" ] = "Retornados-Departamento por año";
	$projectEntities[ "Retornados-Municipios por año" ] = array( "url" => "Retornados_Municipios_por_a_o", "type" => 2 );
	$projectEntitiesReverse[ "Retornados_Municipios_por_a_o" ] = "Retornados-Municipios por año";
	$projectEntities[ "Retornados-Rango etario por sexo" ] = array( "url" => "Retornados_Rango_etario_por_sexo", "type" => 2 );
	$projectEntitiesReverse[ "Retornados_Rango_etario_por_sexo" ] = "Retornados-Rango etario por sexo";
	$projectEntities[ "Retornados-Rango etario por antecedentes género masculino" ] = array( "url" => "Retornados_Rango_etario_por_antecedentes_g_nero_masculino", "type" => 2 );
	$projectEntitiesReverse[ "Retornados_Rango_etario_por_antecedentes_g_nero_masculino" ] = "Retornados-Rango etario por antecedentes género masculino";
	$projectEntities[ "Retornados-Rango etario por antecedentes género femenino" ] = array( "url" => "Retornados_Rango_etario_por_antecedentes_g_nero_femenino", "type" => 2 );
	$projectEntitiesReverse[ "Retornados_Rango_etario_por_antecedentes_g_nero_femenino" ] = "Retornados-Rango etario por antecedentes género femenino";
	$projectEntities[ "transito" ] = array( "url" => "transito", "type" => 0 );
	$projectEntitiesReverse[ "transito" ] = "transito";
	$projectEntities[ "Tránsito- Departamento por resultado del accidente" ] = array( "url" => "Tr_nsito__Departamento_por_resultado_del_accidente", "type" => 2 );
	$projectEntitiesReverse[ "Tr_nsito__Departamento_por_resultado_del_accidente" ] = "Tránsito- Departamento por resultado del accidente";
	$projectEntities[ "Tránsito" ] = array( "url" => "Tr_nsito", "type" => 4 );
	$projectEntitiesReverse[ "Tr_nsito" ] = "Tránsito";
	$projectEntities[ "Tránsito- municipio por resultado del accidente" ] = array( "url" => "Tr_nsito__municipio_por_resultado_del_accidente", "type" => 2 );
	$projectEntitiesReverse[ "Tr_nsito__municipio_por_resultado_del_accidente" ] = "Tránsito- municipio por resultado del accidente";
	$projectEntities[ "Tránsito-Fallecidos Rango etario víctima por sexo víctima" ] = array( "url" => "Tr_nsito_Fallecidos_Rango_etario_v_ctima_por_sexo_v_ctima", "type" => 2 );
	$projectEntitiesReverse[ "Tr_nsito_Fallecidos_Rango_etario_v_ctima_por_sexo_v_ctima" ] = "Tránsito-Fallecidos Rango etario víctima por sexo víctima";
	$projectEntities[ "Tránsito-Lesionados Rango etario víctima por sexo víctima" ] = array( "url" => "Tr_nsito_Lesionados_Rango_etario_v_ctima_por_sexo_v_ctima", "type" => 2 );
	$projectEntitiesReverse[ "Tr_nsito_Lesionados_Rango_etario_v_ctima_por_sexo_v_ctima" ] = "Tránsito-Lesionados Rango etario víctima por sexo víctima";
	$projectEntities[ "Tránsito-Calidad de la víctima por resultado del accidente" ] = array( "url" => "Tr_nsito_Calidad_de_la_v_ctima_por_resultado_del_accidente", "type" => 2 );
	$projectEntitiesReverse[ "Tr_nsito_Calidad_de_la_v_ctima_por_resultado_del_accidente" ] = "Tránsito-Calidad de la víctima por resultado del accidente";
	$projectEntities[ "Tránsito-Tipo de accidente por resultado del accidente" ] = array( "url" => "Tr_nsito_Tipo_de_accidente_por_resultado_del_accidente", "type" => 2 );
	$projectEntitiesReverse[ "Tr_nsito_Tipo_de_accidente_por_resultado_del_accidente" ] = "Tránsito-Tipo de accidente por resultado del accidente";
	$projectEntities[ "Transito class causas" ] = array( "url" => "Transito_class_causas", "type" => 1 );
	$projectEntitiesReverse[ "Transito_class_causas" ] = "Transito class causas";
	$projectEntities[ "transito1" ] = array( "url" => "transito1", "type" => 1 );
	$projectEntitiesReverse[ "transito1" ] = "transito1";
	$projectEntities[ "Tránsito-Causa del accidente por resultado del accidente" ] = array( "url" => "Tr_nsito_Causa_del_accidente_por_resultado_del_accidente", "type" => 2 );
	$projectEntitiesReverse[ "Tr_nsito_Causa_del_accidente_por_resultado_del_accidente" ] = "Tránsito-Causa del accidente por resultado del accidente";
	$projectEntities[ "Transito class tipo vehículo" ] = array( "url" => "Transito_class_tipo_veh_culo", "type" => 1 );
	$projectEntitiesReverse[ "Transito_class_tipo_veh_culo" ] = "Transito class tipo vehículo";
	$projectEntities[ "Tránsito-Tipo de vehículo por resultado del accidente" ] = array( "url" => "Tr_nsito_Tipo_de_veh_culo_por_resultado_del_accidente", "type" => 2 );
	$projectEntitiesReverse[ "Tr_nsito_Tipo_de_veh_culo_por_resultado_del_accidente" ] = "Tránsito-Tipo de vehículo por resultado del accidente";
	$projectEntities[ "Tránsito-Ruta transporte colectivo por resultado del accidente" ] = array( "url" => "Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente", "type" => 2 );
	$projectEntitiesReverse[ "Tr_nsito_Ruta_transporte_colectivo_por_resultado_del_accidente" ] = "Tránsito-Ruta transporte colectivo por resultado del accidente";
	$projectEntities[ "Tránsito-Responsable accidente detenido por resultado del accidente" ] = array( "url" => "Tr_nsito_Responsable_accidente_detenido_por_resultado_del_accidente", "type" => 2 );
	$projectEntitiesReverse[ "Tr_nsito_Responsable_accidente_detenido_por_resultado_del_accidente" ] = "Tránsito-Responsable accidente detenido por resultado del accidente";
	$projectEntities[ "Transito extraer mes" ] = array( "url" => "Transito_extraer_mes", "type" => 1 );
	$projectEntitiesReverse[ "Transito_extraer_mes" ] = "Transito extraer mes";
	$projectEntities[ "Tránsito-Resultado del accidente por meses de accidentes" ] = array( "url" => "Tr_nsito_Resultado_del_accidente_por_meses_de_accidentes", "type" => 2 );
	$projectEntitiesReverse[ "Tr_nsito_Resultado_del_accidente_por_meses_de_accidentes" ] = "Tránsito-Resultado del accidente por meses de accidentes";
	$projectEntities[ "Tránsito-Resultado del accidente por rango horario de accidentes" ] = array( "url" => "Tr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes", "type" => 2 );
	$projectEntitiesReverse[ "Tr_nsito_Resultado_del_accidente_por_rango_horario_de_accidentes" ] = "Tránsito-Resultado del accidente por rango horario de accidentes";
	$projectEntities[ "Tránsito-Dirección accidente por resultado del accidente" ] = array( "url" => "Tr_nsito_Direcci_n_accidente_por_resultado_del_accidente", "type" => 2 );
	$projectEntitiesReverse[ "Tr_nsito_Direcci_n_accidente_por_resultado_del_accidente" ] = "Tránsito-Dirección accidente por resultado del accidente";
	$projectEntities[ "Transito prueba datos" ] = array( "url" => "Transito_prueba_datos", "type" => 1 );
	$projectEntitiesReverse[ "Transito_prueba_datos" ] = "Transito prueba datos";
	$projectEntities[ "empalme tablas" ] = array( "url" => "empalme_tablas", "type" => 1 );
	$projectEntitiesReverse[ "empalme_tablas" ] = "empalme tablas";
	$projectEntities[ "hechos_delictivos12" ] = array( "url" => "hechos_delictivos12", "type" => 1 );
	$projectEntitiesReverse[ "hechos_delictivos12" ] = "hechos_delictivos12";
	$projectEntities[ "Municipios" ] = array( "url" => "Municipios", "type" => 1 );
	$projectEntitiesReverse[ "Municipios" ] = "Municipios";
	$projectEntities[ "Transito arreglar guiones" ] = array( "url" => "Transito_arreglar_guiones", "type" => 1 );
	$projectEntitiesReverse[ "Transito_arreglar_guiones" ] = "Transito arreglar guiones";
	$projectEntities[ "sectorppd1" ] = array( "url" => "sectorppd1", "type" => 0 );
	$projectEntitiesReverse[ "sectorppd1" ] = "sectorppd1";
	$projectEntities[ "Sector PPD 24" ] = array( "url" => "Sector_PPD_24", "type" => 1 );
	$projectEntitiesReverse[ "Sector_PPD_24" ] = "Sector PPD 24";
	$projectEntities[ "sectorppd1 Report" ] = array( "url" => "sectorppd1_Report", "type" => 2 );
	$projectEntitiesReverse[ "sectorppd1_Report" ] = "sectorppd1 Report";
	$projectEntities[ "Dashboard" ] = array( "url" => "Dashboard", "type" => 4 );
	$projectEntitiesReverse[ "Dashboard" ] = "Dashboard";
	$projectEntities[ "sectorppd1 Chart" ] = array( "url" => "sectorppd1_Chart", "type" => 3 );
	$projectEntitiesReverse[ "sectorppd1_Chart" ] = "sectorppd1 Chart";
	$projectEntities[ "Hechosdelictivos_rango etario" ] = array( "url" => "Hechosdelictivos_rango_etario", "type" => 1 );
	$projectEntitiesReverse[ "Hechosdelictivos_rango_etario" ] = "Hechosdelictivos_rango etario";
	$projectEntities[ "carcel Report" ] = array( "url" => "carcel_Report", "type" => 2 );
	$projectEntitiesReverse[ "carcel_Report" ] = "carcel Report";
	$projectEntities[ "pnc9112 PRUEBA" ] = array( "url" => "pnc9112_PRUEBA", "type" => 1 );
	$projectEntitiesReverse[ "pnc9112_PRUEBA" ] = "pnc9112 PRUEBA";
	$projectEntities[ "Sector PPD por tipo de arma" ] = array( "url" => "Sector_PPD_por_tipo_de_arma", "type" => 2 );
	$projectEntitiesReverse[ "Sector_PPD_por_tipo_de_arma" ] = "Sector PPD por tipo de arma";
	$projectEntities[ "Cruce Sector PPD" ] = array( "url" => "Cruce_Sector_PPD", "type" => 2 );
	$projectEntitiesReverse[ "Cruce_Sector_PPD" ] = "Cruce Sector PPD";
	$projectEntities[ "enlazando sector" ] = array( "url" => "enlazando_sector", "type" => 1 );
	$projectEntitiesReverse[ "enlazando_sector" ] = "enlazando sector";
	$projectEntities[ "Retornados-Todos los departamentos" ] = array( "url" => "Retornados_Todos_los_departamentos", "type" => 2 );
	$projectEntitiesReverse[ "Retornados_Todos_los_departamentos" ] = "Retornados-Todos los departamentos";
	$projectEntities[ "reemplazar sectores" ] = array( "url" => "reemplazar_sectores", "type" => 1 );
	$projectEntitiesReverse[ "reemplazar_sectores" ] = "reemplazar sectores";
	$projectEntities[ "hechos_delictivos_VISTA" ] = array( "url" => "hechos_delictivos_VISTA", "type" => 1 );
	$projectEntitiesReverse[ "hechos_delictivos_VISTA" ] = "hechos_delictivos_VISTA";
	$projectEntities[ "reemplazar sectores PPL" ] = array( "url" => "reemplazar_sectores_PPL", "type" => 1 );
	$projectEntitiesReverse[ "reemplazar_sectores_PPL" ] = "reemplazar sectores PPL";
	$projectEntities[ "anexar_carcel" ] = array( "url" => "anexar_carcel", "type" => 1 );
	$projectEntitiesReverse[ "anexar_carcel" ] = "anexar_carcel";
	$projectEntities[ "anexar_carcel1" ] = array( "url" => "anexar_carcel1", "type" => 1 );
	$projectEntitiesReverse[ "anexar_carcel1" ] = "anexar_carcel1";
	$projectEntities[ "SUPRIMIR REGISTROS ANEXO CARCEL" ] = array( "url" => "SUPRIMIR_REGISTROS_ANEXO_CARCEL", "type" => 1 );
	$projectEntitiesReverse[ "SUPRIMIR_REGISTROS_ANEXO_CARCEL" ] = "SUPRIMIR REGISTROS ANEXO CARCEL";
	$projectEntities[ "Sectorizacion" ] = array( "url" => "Sectorizacion", "type" => 4 );
	$projectEntitiesReverse[ "Sectorizacion" ] = "Sectorizacion";
	$projectEntities[ "PPL DGCP" ] = array( "url" => "PPL_DGCP", "type" => 4 );
	$projectEntitiesReverse[ "PPL_DGCP" ] = "PPL DGCP";
	$projectEntities[ "Personas Privadas de Libertad123" ] = array( "url" => "Personas_Privadas_de_Libertad123", "type" => 4 );
	$projectEntitiesReverse[ "Personas_Privadas_de_Libertad123" ] = "Personas Privadas de Libertad123";
	$projectEntities[ "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino" ] = array( "url" => "Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino", "type" => 2 );
	$projectEntitiesReverse[ "Personas_privadas_de_libertad_por_rango_etario__segun_nivel_educativo_y_g_nero_femenino" ] = "Personas privadas de libertad por rango etario, segun nivel educativo y género femenino";
	$projectEntities[ "Dashboard1" ] = array( "url" => "Dashboard1", "type" => 4 );
	$projectEntitiesReverse[ "Dashboard1" ] = "Dashboard1";
	$projectEntities[ "PPL por rango etario según género" ] = array( "url" => "PPL_por_rango_etario_seg_n_g_nero", "type" => 2 );
	$projectEntitiesReverse[ "PPL_por_rango_etario_seg_n_g_nero" ] = "PPL por rango etario según género";
	$projectEntities[ "reemplazar_sectores_hechosdelictivos" ] = array( "url" => "reemplazar_sectores_hechosdelictivos", "type" => 1 );
	$projectEntitiesReverse[ "reemplazar_sectores_hechosdelictivos" ] = "reemplazar_sectores_hechosdelictivos";
	$projectEntities[ "mined" ] = array( "url" => "mined", "type" => 0 );
	$projectEntitiesReverse[ "mined" ] = "mined";
	$projectEntities[ "mined1" ] = array( "url" => "mined1", "type" => 1 );
	$projectEntitiesReverse[ "mined1" ] = "mined1";
	$projectEntities[ "mined2" ] = array( "url" => "mined2", "type" => 1 );
	$projectEntitiesReverse[ "mined2" ] = "mined2";
	$projectEntities[ "mined21" ] = array( "url" => "mined21", "type" => 1 );
	$projectEntitiesReverse[ "mined21" ] = "mined21";
	$projectEntities[ "mined Report" ] = array( "url" => "mined_Report", "type" => 2 );
	$projectEntitiesReverse[ "mined_Report" ] = "mined Report";
	$projectEntities[ "MINED IPCE" ] = array( "url" => "MINED_IPCE", "type" => 4 );
	$projectEntitiesReverse[ "MINED_IPCE" ] = "MINED IPCE";
	$projectEntities[ "MINED INDICE" ] = array( "url" => "MINED_INDICE", "type" => 1 );
	$projectEntitiesReverse[ "MINED_INDICE" ] = "MINED INDICE";
	$projectEntities[ "mined11" ] = array( "url" => "mined11", "type" => 0 );
	$projectEntitiesReverse[ "mined11" ] = "mined11";
	$projectEntities[ "calcular indice MINED" ] = array( "url" => "calcular_indice_MINED", "type" => 1 );
	$projectEntitiesReverse[ "calcular_indice_MINED" ] = "calcular indice MINED";
	$projectEntities[ "calcular indice MINED2" ] = array( "url" => "calcular_indice_MINED2", "type" => 1 );
	$projectEntitiesReverse[ "calcular_indice_MINED2" ] = "calcular indice MINED2";
	$projectEntities[ "mined1 Report" ] = array( "url" => "mined1_Report", "type" => 2 );
	$projectEntitiesReverse[ "mined1_Report" ] = "mined1 Report";
	$projectEntities[ "Maxima Matricula Mined" ] = array( "url" => "Maxima_Matricula_Mined", "type" => 1 );
	$projectEntitiesReverse[ "Maxima_Matricula_Mined" ] = "Maxima Matricula Mined";
	$projectEntities[ "Matricula Relativa Final" ] = array( "url" => "Matricula_Relativa_Final", "type" => 1 );
	$projectEntitiesReverse[ "Matricula_Relativa_Final" ] = "Matricula Relativa Final";
	$projectEntities[ "IPCE_NAIVE" ] = array( "url" => "IPCE_NAIVE", "type" => 1 );
	$projectEntitiesReverse[ "IPCE_NAIVE" ] = "IPCE_NAIVE";
	$projectEntities[ "IPCE_FINAL" ] = array( "url" => "IPCE_FINAL", "type" => 1 );
	$projectEntitiesReverse[ "IPCE_FINAL" ] = "IPCE_FINAL";
	$projectEntities[ "Mined_Maximo IPCE" ] = array( "url" => "Mined_Maximo_IPCE", "type" => 1 );
	$projectEntitiesReverse[ "Mined_Maximo_IPCE" ] = "Mined_Maximo IPCE";
	$projectEntities[ "mined maximo valor" ] = array( "url" => "mined_maximo_valor", "type" => 1 );
	$projectEntitiesReverse[ "mined_maximo_valor" ] = "mined maximo valor";
	$projectEntities[ "BD Mined" ] = array( "url" => "BD_Mined", "type" => 1 );
	$projectEntitiesReverse[ "BD_Mined" ] = "BD Mined";
	$projectEntities[ "mined3" ] = array( "url" => "mined3", "type" => 1 );
	$projectEntitiesReverse[ "mined3" ] = "mined3";
	$projectEntities[ "valor maximo mined 2" ] = array( "url" => "valor_maximo_mined_2", "type" => 1 );
	$projectEntitiesReverse[ "valor_maximo_mined_2" ] = "valor maximo mined 2";
	$projectEntities[ "BD SECTORES" ] = array( "url" => "BD_SECTORES", "type" => 1 );
	$projectEntitiesReverse[ "BD_SECTORES" ] = "BD SECTORES";
	$projectEntities[ "Anexar Sector a PPL" ] = array( "url" => "Anexar_Sector_a_PPL", "type" => 1 );
	$projectEntitiesReverse[ "Anexar_Sector_a_PPL" ] = "Anexar Sector a PPL";
	$projectEntities[ "mined4" ] = array( "url" => "mined4", "type" => 1 );
	$projectEntitiesReverse[ "mined4" ] = "mined4";
	$projectEntities[ "anexar_carcel2" ] = array( "url" => "anexar_carcel2", "type" => 0 );
	$projectEntitiesReverse[ "anexar_carcel2" ] = "anexar_carcel2";
	$projectEntities[ "BD ANEXO CARCEL" ] = array( "url" => "BD_ANEXO_CARCEL", "type" => 1 );
	$projectEntitiesReverse[ "BD_ANEXO_CARCEL" ] = "BD ANEXO CARCEL";
}

function findTable( $table ) {
	global $projectEntities, $projectEntitiesReverse; 
	fillProjectEntites();

	if( isset( $projectEntities[ $table ] ) )
		return $table;
	$uTable = strtoupper( $table );

	foreach( $projectEntities as $t => $d ) {
		if( $uTable == strtoupper($t) )
			return $t;
		$gt = GoodFieldName($t);
		if( $table == $gt || $uTable == strtoupper( $gt ) )
			return $t;
	}
	
	//	check shortTableName
	if( isset( $projectEntitiesReverse[ $table ] ) )
		return $projectEntitiesReverse[ $table ];
	foreach( $projectEntitiesReverse as $t => $v ) {
		if( $uTable == strtoupper($t) )
			return $v;
	}
	return "";
}
//	return table short name
function GetTableURL($table = "")
{
	global $strTableName, $projectEntities;
	if(!$table)
		$table=$strTableName;
	fillProjectEntites();
	
	if( isset( $projectEntities[ $table ] ) )
		return $projectEntities[ $table ][ "url" ];

	return "";
}

function GetEntityType($table = "")
{
	global $strTableName, $projectEntities;
	if(!$table)
		$table=$strTableName;
	fillProjectEntites();
	
	if( isset( $projectEntities[ $table ] ) )
		return $projectEntities[ $table ][ "type" ];

	return "";
}


//	return strTableName by short table name
function GetTableByShort( $shortTName )
{
	global $projectEntitiesReverse;
	fillProjectEntites();
	if(!$shortTName)
		return false;
	return $projectEntitiesReverse[ $shortTName ];
}

//	A
	$g_defaultOptionValues["add"] = false;
	$g_defaultOptionValues["addMultistep"] = false;
	$g_defaultOptionValues["Absolute"] = false;
	$g_defaultOptionValues["acceptFileTypes"] = ".+$";
	$g_defaultOptionValues["addFields"] = array();
	$g_defaultOptionValues["addPageEvents"] = false;
	$g_defaultOptionValues["ajaxCodeSnippetAdded"] = false;
	$g_defaultOptionValues["advSearchFields"] = array();
	$g_defaultOptionValues["afterAddAction"] = 1;
	$g_defaultOptionValues["afterAddActionDetTable"] = "";
	$g_defaultOptionValues["afterEditAction"] = 1;
	$g_defaultOptionValues["afterEditActionDetTable"] = "";
	$g_defaultOptionValues["AllowToAdd"] = false;
	$g_defaultOptionValues["allowFieldsReordering"] = false;
	$g_defaultOptionValues["allowShowHideFields"] = false;
	$g_defaultOptionValues["allSearchFields"] = array();
	$g_defaultOptionValues["arrGroupsPerPage"] = array();
	$g_defaultOptionValues["arrKeyFields"] = array();
	$g_defaultOptionValues["arrAddTabs"] = array();
	$g_defaultOptionValues["arrEditTabs"] = array();
	$g_defaultOptionValues["arrRecsPerPage"] = array();
	$g_defaultOptionValues["arrRegisterTabs"] = array();
	$g_defaultOptionValues["arrViewTabs"] = array();
	$g_defaultOptionValues["audioTitleField"] = "";
	$g_defaultOptionValues["audit"] = false;
	$g_defaultOptionValues["autoCompleteFields"] = array();
	$g_defaultOptionValues["autoCompleteFieldsAdd"] = array();
	$g_defaultOptionValues["autoCompleteFieldsEdit"] = array();
	$g_defaultOptionValues["autoCompleteFieldsOnEdit"] = false;
	$g_defaultOptionValues["AutoInc"] = false;
	$g_defaultOptionValues["autoUpload"] = false;
	$g_defaultOptionValues["autoUpdatable"] = false;
//	B
	$g_defaultOptionValues["bAddPage"] = false;
	$g_defaultOptionValues["bAdvancedSearch"] = false;
	$g_defaultOptionValues["badgeColor"] = "";
	$g_defaultOptionValues["bEditPage"] = false;
	$g_defaultOptionValues["bExportPage"] = false;
	$g_defaultOptionValues["bInlineAdd"] = false;
	$g_defaultOptionValues["bInlineEdit"] = false;
	$g_defaultOptionValues["bUpdateSelected"] = false;
	$g_defaultOptionValues["bIsEncrypted"] = false;
	$g_defaultOptionValues["bListPage"] = false;
	$g_defaultOptionValues["bPrinterPage"] = false;
	$g_defaultOptionValues["bViewPage"] = false;
	$g_defaultOptionValues["buttonsAdded"] = false;
//	C
	$g_defaultOptionValues["captchaAddFieldName"] = "captcha";
	$g_defaultOptionValues["captchaEditFieldName"] = "captcha";
	$g_defaultOptionValues["CompatibilityMode"] = false;
	$g_defaultOptionValues["categoryFields"] = array();
	$g_defaultOptionValues["ChartRefreshTime"] = 60;
	$g_defaultOptionValues["chartXml"] = "";
	$g_defaultOptionValues["chartType"] = "";
	$g_defaultOptionValues["closePopupAfterAdd"] = false;
	$g_defaultOptionValues["closePopupAfterEdit"] = false;
	$g_defaultOptionValues["controlWidth"] = 160;
	$g_defaultOptionValues["copy"] = false;
	$g_defaultOptionValues["CreateThumbnail"] = false;
	$g_defaultOptionValues["createSortByDropdown"] = false;
	$g_defaultOptionValues["crossTabReport"] = false;
	$g_defaultOptionValues["CustomDisplay"] = false;
//	D
	$g_defaultOptionValues["detailsLinksOnList"] = DL_SINGLE;
	$g_defaultOptionValues["dashElements"] = array();
	$g_defaultOptionValues["dashCells"] = array();
	$g_defaultOptionValues["DateEditType"] = 0;
	$g_defaultOptionValues["DecimalDigits"] = "";
	$g_defaultOptionValues["defaultSearchOption"] = "";
	$g_defaultOptionValues["DefaultValue"] = "";
	$g_defaultOptionValues["delete"] = false;
	$g_defaultOptionValues["DeleteAssociatedFile"] = false;
	$g_defaultOptionValues["denyDuplicates"] = false;
	$g_defaultOptionValues["DependentLookups"] = array();
	$g_defaultOptionValues["dependentFilterName"] = "";
	$g_defaultOptionValues["dependentFilters"] = array();
	$g_defaultOptionValues["descendingOrder"] = false;
	$g_defaultOptionValues["DisplayField"] = "";
//	E
	$g_defaultOptionValues["edit"] = false;
	$g_defaultOptionValues["editMultistep"] = false;
	$g_defaultOptionValues["editFields"] = array();
	$g_defaultOptionValues["EditFormat"] = "";
	$g_defaultOptionValues["EditParams"] = "";
	$g_defaultOptionValues["exportTo"] = false;
//	F
	$g_defaultOptionValues["fieldIsVideoUrl"] = false;
	$g_defaultOptionValues["FieldType"] = "";
	$g_defaultOptionValues["FieldPermissions"] = false;
	$g_defaultOptionValues["fieldsForRegister"] = array();
	$g_defaultOptionValues["Filename"] = "";
	$g_defaultOptionValues["filterFields"] = array();
	$g_defaultOptionValues["filterFormat"] = FF_VALUE_LIST;
	$g_defaultOptionValues["filterIntervals"] = array();
	$g_defaultOptionValues["filterTotals"] = FT_NONE;
	$g_defaultOptionValues["filterMultiSelect"] = FM_NONE;
	$g_defaultOptionValues["filterCheckedMessageText"] = "";
	$g_defaultOptionValues["filterCheckedMessageType"] = "";
	$g_defaultOptionValues["filterUncheckedMessageText"] = "";
	$g_defaultOptionValues["filterUncheckedMessageType"] = "";
	$g_defaultOptionValues["filterSliderStepType"] = 1;
	$g_defaultOptionValues["filterSliderStepValue"] = 1;
	$g_defaultOptionValues["filterKnobsType"] = 0;
	$g_defaultOptionValues["filterApplyBtn"] = false;
	$g_defaultOptionValues["flexibleSearch"] = false;
	$g_defaultOptionValues["FormatTimeAttrs"] = array();
	$g_defaultOptionValues["freeInput"] = false;
	$g_defaultOptionValues["FullName"] = "";
//	G
	$g_defaultOptionValues["googleLikeFields"] = array();
	$g_defaultOptionValues["GoodName"] = "";
//	H
	$g_defaultOptionValues["hasDependentFilter"] = false;
	$g_defaultOptionValues["hasEncryptedFields"] = false;
	$g_defaultOptionValues["hideEmptyFieldsOnView"] = false;
	$g_defaultOptionValues["HorizontalLookup"] = false;
	$g_defaultOptionValues["hlNewWindow"] = false;
	$g_defaultOptionValues["hlType"] = 0;
	$g_defaultOptionValues["hlLinkWordNameType"] = "";
	$g_defaultOptionValues["hlLinkWordText"] = "";
	$g_defaultOptionValues["hlTitleField"] = "";
	$g_defaultOptionValues["highlightSearchResults"] = false;
	$g_defaultOptionValues["HTML5InuptType"] = "text";
//	I
	$g_defaultOptionValues["Index"] = 0;
	$g_defaultOptionValues["InitialYearFactor"] = 100;
	$g_defaultOptionValues["ImageHeight"] = 0;
	$g_defaultOptionValues["ImageWidth"] = 0;
	$g_defaultOptionValues["import"] = false;
	$g_defaultOptionValues["inlineAdd"] = false;
	$g_defaultOptionValues["inlineAddFields"] = array();
	$g_defaultOptionValues["inlineEdit"] = false;
	$g_defaultOptionValues["updateSelected"] = false;
	$g_defaultOptionValues["inlineEditFields"] = array();
	$g_defaultOptionValues["isDisplayLoading"] = false;
	$g_defaultOptionValues["tableType"] = "";
	$g_defaultOptionValues["IsRequired"] = false;
	$g_defaultOptionValues["isResizeColumns"] = false;
	$g_defaultOptionValues["isSeparate"] = false;
	$g_defaultOptionValues["UpdateLatLng"] = false;
	$g_defaultOptionValues["isUseAjaxSuggest"] = false;
	$g_defaultOptionValues["isUseAudio"] = false;
	$g_defaultOptionValues["isUseFieldsMaps"] = false;
	$g_defaultOptionValues["isUseMainMaps"] = false;
	$g_defaultOptionValues["isUseTimeForSearch"] = false;
	$g_defaultOptionValues["isUseToolTips"] = false;
	$g_defaultOptionValues["isUseVideo"] = false;
	$g_defaultOptionValues["listGridLayout"] = 0;
	$g_defaultOptionValues["isExistTotalFields"] = false;
	$g_defaultOptionValues["isTotalMin"] = false;
	$g_defaultOptionValues["isTotalAvg"] = false;
	$g_defaultOptionValues["isTotalMax"] = false;
	$g_defaultOptionValues["isTotalSum"] = false;
	$g_defaultOptionValues["isViewPagePDFFitToPage"] = 1;
	$g_defaultOptionValues["isPrinterPagePDFFitToPage"] = 1;
	$g_defaultOptionValues["isLandscapeViewPDFOrientation"] = 0;
	$g_defaultOptionValues["isLandscapePrinterPagePDFOrientation"] = 0;
	$g_defaultOptionValues["isPrinterPagePDF"] = false;
	$g_defaultOptionValues["isViewPagePDF"] = false;
	$g_defaultOptionValues["isSQLExpression"] = false;
	$g_defaultOptionValues["isPrinterPageFitToPage"] = 1;
	$g_defaultOptionValues["isCaptchaEnabledOnAdd"] = false;
	$g_defaultOptionValues["isCaptchaEnabledOnEdit"] = false;	
//	J
//	K
	$g_defaultOptionValues["Keys"] = array();
//	L
	$g_defaultOptionValues["Label"] = "";
	$g_defaultOptionValues["LookupConnId"] = "";
	$g_defaultOptionValues["LastYearFactor"] = 10;
	$g_defaultOptionValues["LCType"] = LCT_DROPDOWN;
	$g_defaultOptionValues["LinkField"] = "";
	$g_defaultOptionValues["LinkFieldType"] = 0;
	$g_defaultOptionValues["LinkPrefix"] = "";
	$g_defaultOptionValues["list"] = false;
	$g_defaultOptionValues["listAjax"] = false;
	$g_defaultOptionValues["listFields"] = array();
	$g_defaultOptionValues["locking"] = false;
	$g_defaultOptionValues["LookupDesc"] = false;
	$g_defaultOptionValues["LookupOrderBy"] = "";
	$g_defaultOptionValues["LookupTable"] = "";
	$g_defaultOptionValues["LookupType"] = 0;
	$g_defaultOptionValues["LookupUnique"] = false;
	$g_defaultOptionValues["LookupValues"] = array();
	$g_defaultOptionValues["LookupWhere"] = "";
//	M
	$g_defaultOptionValues["mainTableOwnerID"] = "";
	$g_defaultOptionValues["mapData"] = array();
	$g_defaultOptionValues["masterListFields"] = array();
	$g_defaultOptionValues["maxFileSize"] = null;
	$g_defaultOptionValues["maxImageHeight"] = null;
	$g_defaultOptionValues["maxImageWidth"] = null;
	$g_defaultOptionValues["maxNumberOfFiles"] = 1;
	$g_defaultOptionValues["maxTotalFilesSize"] = null;
	$g_defaultOptionValues["moveNext"] = "";
	$g_defaultOptionValues["Multiselect"] = false;
//	N
	$g_defaultOptionValues["NCSearch"] = false;
	$g_defaultOptionValues["NeedEncode"] = false;
	$g_defaultOptionValues["NewSize"] = 0;
	$g_defaultOptionValues["noRecordsFirstPage"] = false;
	$g_defaultOptionValues["nSecOptions"] = ADVSECURITY_NONE;
	$g_defaultOptionValues["NumberOfChars"] = 0;
	$g_defaultOptionValues["numberOfVisibleItems"] = 10;
	$g_defaultOptionValues["nViewPagePDFScale"] = 100;
	$g_defaultOptionValues["nPrinterPagePDFScale"] = 100;
	$g_defaultOptionValues["nPrinterPageScale"] = 100;
	$g_defaultOptionValues["nPrinterPDFSplitRecords"] = 0;
	$g_defaultOptionValues["nPrinterSplitRecords"] = 0;


//	O
	$g_defaultOptionValues["OriginalTable"] = "";
	$g_defaultOptionValues["orderindexes"] = array();
	$g_defaultOptionValues["OwnerID"] = 0;
	$g_defaultOptionValues["ownerTable"] = "";
	$g_defaultOptionValues["OraSequenceName"] = "";
//	P
	$g_defaultOptionValues["pageSize"] = 0;
	$g_defaultOptionValues["panelSearchFields"] = array();
	$g_defaultOptionValues["parentFilterField"] = "";
	$g_defaultOptionValues["parentFilters"] = array();
	$g_defaultOptionValues["printFriendly"] = false;
	$g_defaultOptionValues["printFields"] = array();
	$g_defaultOptionValues["popupPagesLayoutNames"] = array();
	$g_defaultOptionValues["printGridLayout"] = 0;
	$g_defaultOptionValues["printReportLayout"] = 0;
	$g_defaultOptionValues["printerPageOrientation"] = 0;
//	Q
//	R
	$g_defaultOptionValues["recsPerRowList"] = 1;
	$g_defaultOptionValues["recsPerRowPrint"] = 1;
	$g_defaultOptionValues["registerMultistep"] = false;
	$g_defaultOptionValues["reportGroupFields"] = false;
	$g_defaultOptionValues["reportGroupFieldsData"] = array();
	$g_defaultOptionValues["reportHorizontalSummary"] = false;
	$g_defaultOptionValues["reportVerticalSummary"] = false;
	$g_defaultOptionValues["reportPageSummary"] = false;
	$g_defaultOptionValues["reportGlobalSummary"] = false;
	$g_defaultOptionValues["repShowDet"] = false;
	$g_defaultOptionValues["ResizeImage"] = false;
	$g_defaultOptionValues["RewindEnabled"] = false;
	$g_defaultOptionValues["rowHighlite"] = false;
	$g_defaultOptionValues["requiredSearchFields"] = array();
	$g_defaultOptionValues["reportPrintPartitionType"] = 0;
	$g_defaultOptionValues["reportPrintGroupsPerPage"] = 3;
	$g_defaultOptionValues["reportPrintPDFGroupsPerPage"] = 0;
	$g_defaultOptionValues["reorderRecordsByHeader"] = false;

//	S
	$g_defaultOptionValues["searchFields"] = false;
	$g_defaultOptionValues["searchSaving"] = false;
	$g_defaultOptionValues["searchPanelOptions"] = array();
	$g_defaultOptionValues["SelectSize"] = 1;
	$g_defaultOptionValues["searchIsRequiredForFilters"] = false;
	$g_defaultOptionValues["searchOptionsList"] = array();
	$g_defaultOptionValues["ShortName"] = "";
	$g_defaultOptionValues["shortTableName"] = "";
	$g_defaultOptionValues["showAddInPopup"] = false;
	$g_defaultOptionValues["ShowCustomExpr"] = false;
	$g_defaultOptionValues["showEditInPopup"] = false;
	$g_defaultOptionValues["ShowFileSize"] = false;
	$g_defaultOptionValues["ShowIcon"] = false;
	$g_defaultOptionValues["showSearchPanel"] = false;
	$g_defaultOptionValues["showSimpleSearchOptions"] = false;
	$g_defaultOptionValues["ShowThumbnail"] = false;
	$g_defaultOptionValues["ShowTime"] = false;
	$g_defaultOptionValues["showViewInPopup"] = false;
	$g_defaultOptionValues["showCollapsed"] = false;
	$g_defaultOptionValues["showWithNoRecords"] = false;
	$g_defaultOptionValues["SimpleAdd"] = false;
	$g_defaultOptionValues["ShowListOfThumbnails"] = false;
	$g_defaultOptionValues["sortValueType"] = SORT_BY_DISP_VALUE;
	$g_defaultOptionValues["sqlFrom"] = "";
	$g_defaultOptionValues["sqlHead"] = "";
	$g_defaultOptionValues["sqlTail"] = "";
	$g_defaultOptionValues["sqlWhereExpr"] = "";
	$g_defaultOptionValues["sqlquery"] = null;
	$g_defaultOptionValues["strField"] = "";
	$g_defaultOptionValues["strFilename"] = "";
	$g_defaultOptionValues["strName"] = "";
	$g_defaultOptionValues["strOrderBy"] = "";
	$g_defaultOptionValues["StrThumbnail"] = "";
	$g_defaultOptionValues["strSortControlSettingsJSON"] = "";
	$g_defaultOptionValues["strClickActionJSON"] = "";
	$g_defaultOptionValues["ThumbnailSize"] = 0;
	$g_defaultOptionValues["scrollGridBody"] = false;
	$g_defaultOptionValues["showGroupSummaryCount"] = false;
//	T
	$g_defaultOptionValues["totalsFields"] = array();
	$g_defaultOptionValues["ThumbHeight"] = 72;
	$g_defaultOptionValues["ThumbWidth"] = 72;
	$g_defaultOptionValues["truncateText"] = false;
//	U
	$g_defaultOptionValues["UploadFolder"] = "";
	$g_defaultOptionValues["UploadCodeExpression"] = false;
	$g_defaultOptionValues["UseCategory"] = false;
	$g_defaultOptionValues["UseRTE"] = false;
	$g_defaultOptionValues["UseTimestamp"] = false;
//	V
	$g_defaultOptionValues["validateAs"] = array();
	$g_defaultOptionValues["videoHeight"] = 200;
	$g_defaultOptionValues["videoWidth"] = 300;
	$g_defaultOptionValues["videoTitleField"] = "";
	$g_defaultOptionValues["view"] = false;
	$g_defaultOptionValues["ViewFormat"] = "";
	$g_defaultOptionValues["viewFields"] = array();
	$g_defaultOptionValues["viewMultistep"] = false;
//	W
	$g_defaultOptionValues["warnLeavingPages"] = false;
//	X
//	Y
//	Z


//	A
	$g_settingsType["Absolute"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["acceptFileTypes"] = SETTING_TYPE_EDIT;
	$g_settingsType["AllowToAdd"] = SETTING_TYPE_EDIT;
	$g_settingsType["autoCompleteFields"] = SETTING_TYPE_EDIT;
	$g_settingsType["autoCompleteFieldsOnEdit"] = SETTING_TYPE_EDIT;
	$g_settingsType["AutoInc"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["audioTitleField"] = SETTING_TYPE_VIEW;
	$g_settingsType["autoUpload"] = SETTING_TYPE_EDIT;
	$g_settingsType["autoUpdatable"] = SETTING_TYPE_EDIT;
//	B
	$g_settingsType["bAddPage"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["bAdvancedSearch"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["bEditPage"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["bExportPage"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["bInlineAdd"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["bInlineEdit"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["bUpdateSelected"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["bIsEncrypted"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["bListPage"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["bPrinterPage"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["bViewPage"] = SETTING_TYPE_GLOBAL;
//	C
	$g_settingsType["CompatibilityMode"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["categoryFields"] = SETTING_TYPE_EDIT;
	$g_settingsType["controlWidth"] = SETTING_TYPE_EDIT;
	$g_settingsType["CreateThumbnail"] = SETTING_TYPE_EDIT;
	$g_settingsType["CustomDisplay"] = SETTING_TYPE_EDIT;
//	D
	$g_settingsType["DateEditType"] = SETTING_TYPE_EDIT;
	$g_settingsType["DecimalDigits"] = SETTING_TYPE_VIEW;
	$g_settingsType["DeleteAssociatedFile"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["denyDuplicates"] = SETTING_TYPE_EDIT;
	$g_settingsType["DependentLookups"] = SETTING_TYPE_EDIT;
	$g_settingsType["DisplayField"] = SETTING_TYPE_EDIT;
//	E
	$g_settingsType["EditFormat"] = SETTING_TYPE_EDIT;
	$g_settingsType["EditParams"] = SETTING_TYPE_EDIT;
//	F
	$g_settingsType["fieldIsVideoUrl"] = SETTING_TYPE_VIEW;
	$g_settingsType["FieldType"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["FieldPermissions"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["Filename"] = SETTING_TYPE_VIEW;
	$g_settingsType["FormatTimeAttrs"] = SETTING_TYPE_EDIT;
	$g_settingsType["freeInput"] = SETTING_TYPE_EDIT;
	$g_settingsType["FullName"] = SETTING_TYPE_GLOBAL;
//	G
	$g_settingsType["GoodName"] = SETTING_TYPE_GLOBAL;
//	H
	$g_settingsType["HorizontalLookup"] = SETTING_TYPE_EDIT;
	$g_settingsType["hlNewWindow"] = SETTING_TYPE_VIEW;
	$g_settingsType["hlType"] = SETTING_TYPE_VIEW;
	$g_settingsType["hlLinkWordNameType"] = SETTING_TYPE_VIEW;
	$g_settingsType["hlLinkWordText"] = SETTING_TYPE_VIEW;
	$g_settingsType["hlTitleField"] = SETTING_TYPE_VIEW;
	$g_settingsType["HTML5InuptType"] = SETTING_TYPE_EDIT;
//	I
	$g_settingsType["Index"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["InitialYearFactor"] = SETTING_TYPE_EDIT;
	$g_settingsType["ImageHeight"] = SETTING_TYPE_VIEW;
	$g_settingsType["ImageWidth"] = SETTING_TYPE_VIEW;
	$g_settingsType["IsRequired"] = SETTING_TYPE_EDIT;
	$g_settingsType["isSeparate"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["UpdateLatLng"] = SETTING_TYPE_EDIT;
//	J
//	K
//	L
	$g_settingsType["Label"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["LastYearFactor"] = SETTING_TYPE_EDIT;
	$g_settingsType["LCType"] = SETTING_TYPE_EDIT;
	$g_settingsType["LinkField"] = SETTING_TYPE_EDIT;
	$g_settingsType["LinkFieldType"] = SETTING_TYPE_EDIT;
	$g_settingsType["LinkPrefix"] = SETTING_TYPE_VIEW;
	$g_settingsType["LookupConnId"] = SETTING_TYPE_EDIT;
	$g_settingsType["LookupDesc"] = SETTING_TYPE_EDIT;
	$g_settingsType["LookupOrderBy"] = SETTING_TYPE_EDIT;
	$g_settingsType["LookupTable"] = SETTING_TYPE_EDIT;
	$g_settingsType["LookupType"] = SETTING_TYPE_EDIT;
	$g_settingsType["LookupUnique"] = SETTING_TYPE_EDIT;
	$g_settingsType["LookupValues"] = SETTING_TYPE_EDIT;
	$g_settingsType["LookupWhere"] = SETTING_TYPE_EDIT;
	$g_settingsType["lowGroup"] = 1;
//	M
	$g_settingsType["mapData"] = SETTING_TYPE_VIEW;
	$g_settingsType["maxFileSize"] = SETTING_TYPE_EDIT;
	$g_settingsType["maxImageHeight"] = SETTING_TYPE_EDIT;
	$g_settingsType["maxImageWidth"] = SETTING_TYPE_EDIT;
	$g_settingsType["maxNumberOfFiles"] = SETTING_TYPE_EDIT;
	$g_settingsType["maxTotalFilesSize"] = SETTING_TYPE_EDIT;
	$g_settingsType["Multiselect"] = SETTING_TYPE_EDIT;
//	N
	$g_settingsType["nCols"] = SETTING_TYPE_EDIT;
	$g_settingsType["NeedEncode"] = SETTING_TYPE_VIEW;
	$g_settingsType["NewSize"] = SETTING_TYPE_EDIT;
	$g_settingsType["nRows"] = SETTING_TYPE_EDIT;
	$g_settingsType["nSecOptions"] = ADVSECURITY_NONE;
//	O
	$g_settingsType["ownerTable"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["OraSequenceName"] = SETTING_TYPE_GLOBAL;
//	P
//	Q
//	R
	$g_settingsType["ResizeImage"] = SETTING_TYPE_EDIT;
	$g_settingsType["RewindEnabled"] = SETTING_TYPE_VIEW;
//	S
	$g_settingsType["SelectSize"] = SETTING_TYPE_EDIT;
	$g_settingsType["ShowCustomExpr"] = SETTING_TYPE_VIEW;
	$g_settingsType["ShowFileSize"] = SETTING_TYPE_VIEW;
	$g_settingsType["ShowIcon"] = SETTING_TYPE_VIEW;
	$g_settingsType["ShowThumbnail"] = SETTING_TYPE_VIEW;
	$g_settingsType["ShowTime"] = SETTING_TYPE_EDIT;
	$g_settingsType["SimpleAdd"] = SETTING_TYPE_EDIT;
	$g_settingsType["ShowListOfThumbnails"] = SETTING_TYPE_VIEW;
	$g_settingsType["strField"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["strFilename"] = SETTING_TYPE_VIEW;
	$g_settingsType["filterTotalFields"] = '';
	$g_settingsType["strEditMask"] = SETTING_TYPE_EDIT;
	$g_settingsType["strName"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["StrThumbnail"] = SETTING_TYPE_EDIT;
//	T
	$g_settingsType["ThumbnailSize"] = SETTING_TYPE_EDIT;
	$g_settingsType["ThumbHeight"] = SETTING_TYPE_VIEW;
	$g_settingsType["ThumbWidth"] = SETTING_TYPE_VIEW;
//	U
	$g_settingsType["UploadFolder"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["UploadCodeExpression"] = SETTING_TYPE_GLOBAL;
	$g_settingsType["UseCategory"] = SETTING_TYPE_EDIT;
	$g_settingsType["UseRTE"] = SETTING_TYPE_EDIT;
	$g_settingsType["UseTimestamp"] = SETTING_TYPE_EDIT;
//	V
	$g_settingsType["validateAs"] = SETTING_TYPE_EDIT;
	$g_settingsType["videoHeight"] = SETTING_TYPE_VIEW;
	$g_settingsType["videoWidth"] = SETTING_TYPE_VIEW;
	$g_settingsType["videoTitleField"] = SETTING_TYPE_VIEW;
	$g_settingsType["ViewFormat"] = SETTING_TYPE_VIEW;
//	W
//	X
//	Y
//	Z

?>