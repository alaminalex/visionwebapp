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
		
	function ProjectSettings($table = "", $page = "")
	{
		if($table && $table != NOT_TABLE_BASED_TNAME)
			$this->setTable($table);
		if($page)
			$this->setPage($page);
	}
	
	
	function setTable($table)
	{
		$this->_table = $table;
		global $tables_data, $field_labels, $fieldToolTips, $page_titles, $detailsTablesData, $masterTablesData, $tableEvents, $bSubqueriesSupported;
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
			$editPage = $this->getDefaultEditPageType($this->getTableType());;
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

	function isUsebuttonHandlers()
	{
		return $this->getTableData(".isUsebuttonHandlers");
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
	 * Build CSS media clause for given device code. 
	 * Thanks to mobile device vendors, there are plenty of weird heuristics here, take it easy.
	 */	
	static function getDeviceMediaClause($device)
	{
		if( $device == DESKTOP )
		{
			//	Desktop. We don't care about prehistoric VGA displays
			return "@media (min-device-width: 1280px) and (min-device-height: 1024px), (min-device-width: 1360px)";
		}
		else if( $device == TABLET_10_IN )	//	10" tablets
		{
			// All iPads including mini go here, because there is no way to tell full-sized iPad from mini.
			return "@media (device-width: 768px) and (device-height: 1024px)".

			// The rest of contemporary 10" devices supposedly go here
				" , (min-device-width: 1025px) and (max-device-width: 1280px) and (max-device-height: 1023px) , (min-device-height: 1025px) and (max-device-height: 1280px) and (max-device-width: 1023px)";
		}
		else if( $device == TABLET_7_IN )
		{
			return "@media (max-device-width: 1024px) and (max-device-height: 800px) , (max-device-height: 1024px) and (max-device-width: 800px)";
		}

		else if( $device == SMARTPHONE_LANDSCAPE )
		{
			return "@media (orientation: landscape) and (max-device-height: 400px), (orientation: landscape) and (max-device-width: 400px)";
		}		

		else if( $device == SMARTPHONE_PORTRAIT )
		{
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
	
	function getMapIcon($field)
	{
		if( !$this->isMapIconCustom($field) ) {
			$mapData = $this->getMapData($field);
			return $mapData["mapIcon"];
		}
		else {
			return getCustomMapIcon($field);
		}
	}
	
	function isMapIconCustom($field)
	{
		$mapData = $this->getMapData($field);
		return $mapData["isMapIconCustom"];
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

//	return table short name
function GetTableURL($table = "")
{
	global $strTableName, $projectTables;
	if(!$table)
		$table=$strTableName;
	if("department" == $table) 
		return "department";
	if("group" == $table) 
		return "group";
	if("job" == $table) 
		return "job";
	if("jobfile" == $table) 
		return "jobfile";
	if("jobstatus" == $table) 
		return "jobstatus";
	if("notifyoption" == $table) 
		return "notifyoption";
	if("subdivision" == $table) 
		return "subdivision";
	if("user" == $table) 
		return "user";
	if("Dashboard" == $table) 
		return "Dashboard";
	if("File Distribution" == $table) 
		return "File_Distribution";
	if("Download Job" == $table) 
		return "Download_Job";
	if("Pending Jobs" == $table) 
		return "Pending_Jobs";
	if("pdf" == $table) 
		return "pdf";
	if("project" == $table) 
		return "project";
	if("Designer Worksheet" == $table) 
		return "Designer_Worksheet";
	if("Designer Filesheet" == $table) 
		return "Designer_Filesheet";
	if("team" == $table) 
		return "team";
	if("QC Worksheet" == $table) 
		return "QC_Worksheet";
	if("QC Filesheet" == $table) 
		return "QC_Filesheet";
	if("All Jobs" == $table) 
		return "All_Jobs";
	if("Daily Job Report (Accepted)" == $table) 
		return "Daily_Job_Report__Accepted_";
	if("Users" == $table) 
		return "Users";
	if("ad_uggroups" == $table) 
		return "ad_uggroups";
	if("ad_ugmembers" == $table) 
		return "ad_ugmembers";
	if("Designer Level 2" == $table) 
		return "Designer_Level_2";
	if("Designer Level2 Filesheet" == $table) 
		return "Designer_Level2_Filesheet";
	if("data_audit" == $table) 
		return "data_audit";
	if("Urgent Jobs" == $table) 
		return "Urgent_Jobs";
	if("Deadline Missed" == $table) 
		return "Deadline_Missed";
	if("Need to Accept" == $table) 
		return "Need_to_Accept";
	if("Need Notify" == $table) 
		return "Need_Notify";
	if("Need Download" == $table) 
		return "Need_Download";
	if("Need QC" == $table) 
		return "Need_QC";
	if("Need Upload" == $table) 
		return "Need_Upload";
	if("Pending 14704" == $table) 
		return "Pending_14704";
	if("Daily Job Report (Notified)" == $table) 
		return "Daily_Job_Report__Notified_";
	if("14704 Need QC" == $table) 
		return "14704_Need_QC";
	if("14704 Need Upload" == $table) 
		return "14704_Need_Upload";
	if("14704 Need Download" == $table) 
		return "14704_Need_Download";
	if("14704 Need Notify" == $table) 
		return "14704_Need_Notify";
	if("14704 Need Accept" == $table) 
		return "14704_Need_Accept";
	if("14704 Deadline Missed" == $table) 
		return "14704_Deadline_Missed";
	if("14704 Urgent Jobs" == $table) 
		return "14704_Urgent_Jobs";
	if("File Reject" == $table) 
		return "File_Reject";
	if("designer_report" == $table) 
		return "designer_report";
	if("Designer Report (All)" == $table) 
		return "Designer_Report__All_";
	if("custompages" == $table) 
		return "custompages";
	if("14704 Daily Report Full" == $table) 
		return "14704_Daily_Report_Full";
	if("rejected_jobfile" == $table) 
		return "rejected_jobfile";
	if("type_of_errors" == $table) 
		return "type_of_errors";
	if("14704 Designer Report" == $table) 
		return "14704_Designer_Report";
	if("Team Report" == $table) 
		return "Team_Report";
	if("status" == $table) 
		return "status";
	if("designation" == $table) 
		return "designation";
	if("Correction Files" == $table) 
		return "Correction_Files";
	if("Client Instruction" == $table) 
		return "Client_Instruction";
	if("14704 Monthly Report Full" == $table) 
		return "14704_Monthly_Report_Full";
	if("14704 Daily Report Designers" == $table) 
		return "14704_Daily_Report_Designers";
	if("14704 Monthly Report Designers" == $table) 
		return "14704_Monthly_Report_Designers";
	if("14704 Daily Report  Team" == $table) 
		return "14704_Daily_Report__Team";
	if("Delected Jobs" == $table) 
		return "Delected_Jobs";
	if("14704 Monthly Report Team" == $table) 
		return "14704_Monthly_Report_Team";
	if("Daily Report Designers" == $table) 
		return "Daily_Report_Designers";
	if("Monthly Report Designers" == $table) 
		return "Monthly_Report_Designers";
	if("Daily Report Team" == $table) 
		return "Daily_Report_Team";
	if("Monthly Report Team" == $table) 
		return "Monthly_Report_Team";
	if("Daily Report Full" == $table) 
		return "Daily_Report_Full";
	if("Monthly Report Full" == $table) 
		return "Monthly_Report_Full";
	if("Capacity - Night Shift" == $table) 
		return "Capacity___Night_Shift";
	if("Capacity - Morning Shift" == $table) 
		return "Capacity___Morning_Shift";
	if("Capacity - Evening Shift" == $table) 
		return "Capacity___Evening_Shift";
	if("Pending 18442" == $table) 
		return "Pending_18442";
	if("18442 Deadline Missed" == $table) 
		return "18442_Deadline_Missed";
	if("18442 Urgent Jobs" == $table) 
		return "18442_Urgent_Jobs";
	if("18442 Need Notify" == $table) 
		return "18442_Need_Notify";
	if("18442 Need Upload" == $table) 
		return "18442_Need_Upload";
	if("18442 Need QC" == $table) 
		return "18442_Need_QC";
	if("18442 Need Download" == $table) 
		return "18442_Need_Download";
	if("18442 Need Accept" == $table) 
		return "18442_Need_Accept";
	if("Monthly PDF Avrage" == $table) 
		return "Monthly_PDF_Avrage";
	if("Daily Report Designer PDF" == $table) 
		return "Daily_Report_Designer_PDF";
	if("Monthly Job Report (Accepted)" == $table) 
		return "Monthly_Job_Report__Accepted_";
	if("Monthly Report Designer PDF" == $table) 
		return "Monthly_Report_Designer_PDF";
	if("Monthly Job Report (Notified)" == $table) 
		return "Monthly_Job_Report__Notified_";
	if("14704 Week Report Team" == $table) 
		return "14704_Week_Report_Team";
	if("14704 Monthly Designers Avrage" == $table) 
		return "14704_Monthly_Designers_Avrage";
	if("clients" == $table) 
		return "clients";
	if("admin_rights" == $table) 
		return "admin_rights";
	if("admin_admembers" == $table) 
		return "admin_admembers";
	if("Designer files report" == $table) 
		return "Designer_files_report";
	if("PDF Done - Evening Shift" == $table) 
		return "PDF_Done___Evening_Shift";
	if("PDF Done - Morning Shift" == $table) 
		return "PDF_Done___Morning_Shift";
	if("PDF Done - Night Shift" == $table) 
		return "PDF_Done___Night_Shift";
	if("PDF Done - Today" == $table) 
		return "PDF_Done___Today";
	if("Files Need to Work" == $table) 
		return "Files_Need_to_Work";
	if("Weekly Report Designers" == $table) 
		return "Weekly_Report_Designers";
	if("Designers Work Profile" == $table) 
		return "Designers_Work_Profile";
	if("Designers Performance" == $table) 
		return "Designers_Performance";
	if("Designers Performance Monthly" == $table) 
		return "Designers_Performance_Monthly";
	if("Display" == $table) 
		return "Display";
	if("Daily QC" == $table) 
		return "Daily_QC";
	if("Display Files Now Working" == $table) 
		return "Display_Files_Now_Working";
	if("Display Files Need to Work QC" == $table) 
		return "Display_Files_Need_to_Work_QC";
	if("Display Files Done Today" == $table) 
		return "Display_Files_Done_Today";
	if("Daily Report 33392" == $table) 
		return "Daily_Report_33392";
	if("generator_rex" == $table) 
		return "generator_rex";
	if("Display generator_top_images" == $table) 
		return "Display_generator_top_images";
	if("Display_top_team_performance" == $table) 
		return "Display_top_team_performance";
	if("Display_top_designer_performance" == $table) 
		return "Display_top_designer_performance";
	if("Daily PDF Avrage" == $table) 
		return "Daily_PDF_Avrage";
	if("Weekly PDF Avrage" == $table) 
		return "Weekly_PDF_Avrage";
	if("pdf_report" == $table) 
		return "pdf_report";
	if("Display Rejected today" == $table) 
		return "Display_Rejected_today";
	if("Display QC Done Today" == $table) 
		return "Display_QC_Done_Today";
	if("Display Files Notifyed Today" == $table) 
		return "Display_Files_Notifyed_Today";
	if("mail_messages" == $table) 
		return "mail_messages";
	if("Emailer" == $table) 
		return "Emailer";
	if("Display Files Need to Download" == $table) 
		return "Display_Files_Need_to_Download";
	if("Display Files Need to Distribute" == $table) 
		return "Display_Files_Need_to_Distribute";
	if("Display ETA" == $table) 
		return "Display_ETA";
	if("Display_top_designer_Files" == $table) 
		return "Display_top_designer_Files";
	if("Display Files Need to Prosess" == $table) 
		return "Display_Files_Need_to_Prosess";
	if("Daily Accepted Riajul" == $table) 
		return "Daily_Accepted_Riajul";
	if("attendance_sheet" == $table) 
		return "attendance_sheet";
	if("employee_present" == $table) 
		return "employee_present";
	if("ShiftType" == $table) 
		return "ShiftType";
	if("UserShift" == $table) 
		return "UserShift";
	if("user1" == $table) 
		return "user1";
	if("Daily Designers and QC" == $table) 
		return "Daily_Designers_and_QC";
	if("work_type" == $table) 
		return "work_type";
	if("rejected_job" == $table) 
		return "rejected_job";
	if("Download Reject Job" == $table) 
		return "Download_Reject_Job";
	if("rejected_jobfile2" == $table) 
		return "rejected_jobfile2";
	if("File Distribution Rejected" == $table) 
		return "File_Distribution_Rejected";
	if("Designer Level 2 for Correction" == $table) 
		return "Designer_Level_2_for_Correction";
	if("Designer Level2 Filesheet for Correction" == $table) 
		return "Designer_Level2_Filesheet_for_Correction";
	if("QC Worksheet for Correction" == $table) 
		return "QC_Worksheet_for_Correction";
	if("QC Filesheet for Correction" == $table) 
		return "QC_Filesheet_for_Correction";
	if("External Rejection" == $table) 
		return "External_Rejection";
	if("files_menu_count" == $table) 
		return "files_menu_count";
	if("Display_Designer_Need" == $table) 
		return "Display_Designer_Need";
	if("Internal Rejection" == $table) 
		return "Internal_Rejection";
	if("Daily Users Work" == $table) 
		return "Daily_Users_Work";
	if("not for use" == $table) 
		return "not_for_use";
	if("jobfile_type" == $table) 
		return "jobfile_type";
	if("users_work_report" == $table) 
		return "users_work_report";
	if("Daily Users Work Summery" == $table) 
		return "Daily_Users_Work_Summery";
	if("Daily PDF Work Summery" == $table) 
		return "Daily_PDF_Work_Summery";
	if("Backup Notified Jobs" == $table) 
		return "Backup_Notified_Jobs";
	if("Daily Users Work Summery QC" == $table) 
		return "Daily_Users_Work_Summery_QC";

	return "";
}

//	return strTableName by short table name
function GetTableByShort($shortTName = "")
{	
	global $projectTables;
	if(!$shortTName)
		return false;
	if("department" == $shortTName) 
		return "department";
	if("group" == $shortTName) 
		return "group";
	if("job" == $shortTName) 
		return "job";
	if("jobfile" == $shortTName) 
		return "jobfile";
	if("jobstatus" == $shortTName) 
		return "jobstatus";
	if("notifyoption" == $shortTName) 
		return "notifyoption";
	if("subdivision" == $shortTName) 
		return "subdivision";
	if("user" == $shortTName) 
		return "user";
	if("Dashboard" == $shortTName) 
		return "Dashboard";
	if("File_Distribution" == $shortTName) 
		return "File Distribution";
	if("Download_Job" == $shortTName) 
		return "Download Job";
	if("Pending_Jobs" == $shortTName) 
		return "Pending Jobs";
	if("pdf" == $shortTName) 
		return "pdf";
	if("project" == $shortTName) 
		return "project";
	if("Designer_Worksheet" == $shortTName) 
		return "Designer Worksheet";
	if("Designer_Filesheet" == $shortTName) 
		return "Designer Filesheet";
	if("team" == $shortTName) 
		return "team";
	if("QC_Worksheet" == $shortTName) 
		return "QC Worksheet";
	if("QC_Filesheet" == $shortTName) 
		return "QC Filesheet";
	if("All_Jobs" == $shortTName) 
		return "All Jobs";
	if("Daily_Job_Report__Accepted_" == $shortTName) 
		return "Daily Job Report (Accepted)";
	if("Users" == $shortTName) 
		return "Users";
	if("ad_uggroups" == $shortTName) 
		return "ad_uggroups";
	if("ad_ugmembers" == $shortTName) 
		return "ad_ugmembers";
	if("Designer_Level_2" == $shortTName) 
		return "Designer Level 2";
	if("Designer_Level2_Filesheet" == $shortTName) 
		return "Designer Level2 Filesheet";
	if("data_audit" == $shortTName) 
		return "data_audit";
	if("Urgent_Jobs" == $shortTName) 
		return "Urgent Jobs";
	if("Deadline_Missed" == $shortTName) 
		return "Deadline Missed";
	if("Need_to_Accept" == $shortTName) 
		return "Need to Accept";
	if("Need_Notify" == $shortTName) 
		return "Need Notify";
	if("Need_Download" == $shortTName) 
		return "Need Download";
	if("Need_QC" == $shortTName) 
		return "Need QC";
	if("Need_Upload" == $shortTName) 
		return "Need Upload";
	if("Pending_14704" == $shortTName) 
		return "Pending 14704";
	if("Daily_Job_Report__Notified_" == $shortTName) 
		return "Daily Job Report (Notified)";
	if("14704_Need_QC" == $shortTName) 
		return "14704 Need QC";
	if("14704_Need_Upload" == $shortTName) 
		return "14704 Need Upload";
	if("14704_Need_Download" == $shortTName) 
		return "14704 Need Download";
	if("14704_Need_Notify" == $shortTName) 
		return "14704 Need Notify";
	if("14704_Need_Accept" == $shortTName) 
		return "14704 Need Accept";
	if("14704_Deadline_Missed" == $shortTName) 
		return "14704 Deadline Missed";
	if("14704_Urgent_Jobs" == $shortTName) 
		return "14704 Urgent Jobs";
	if("File_Reject" == $shortTName) 
		return "File Reject";
	if("designer_report" == $shortTName) 
		return "designer_report";
	if("Designer_Report__All_" == $shortTName) 
		return "Designer Report (All)";
	if("custompages" == $shortTName) 
		return "custompages";
	if("14704_Daily_Report_Full" == $shortTName) 
		return "14704 Daily Report Full";
	if("rejected_jobfile" == $shortTName) 
		return "rejected_jobfile";
	if("type_of_errors" == $shortTName) 
		return "type_of_errors";
	if("14704_Designer_Report" == $shortTName) 
		return "14704 Designer Report";
	if("Team_Report" == $shortTName) 
		return "Team Report";
	if("status" == $shortTName) 
		return "status";
	if("designation" == $shortTName) 
		return "designation";
	if("Correction_Files" == $shortTName) 
		return "Correction Files";
	if("Client_Instruction" == $shortTName) 
		return "Client Instruction";
	if("14704_Monthly_Report_Full" == $shortTName) 
		return "14704 Monthly Report Full";
	if("14704_Daily_Report_Designers" == $shortTName) 
		return "14704 Daily Report Designers";
	if("14704_Monthly_Report_Designers" == $shortTName) 
		return "14704 Monthly Report Designers";
	if("14704_Daily_Report__Team" == $shortTName) 
		return "14704 Daily Report  Team";
	if("Delected_Jobs" == $shortTName) 
		return "Delected Jobs";
	if("14704_Monthly_Report_Team" == $shortTName) 
		return "14704 Monthly Report Team";
	if("Daily_Report_Designers" == $shortTName) 
		return "Daily Report Designers";
	if("Monthly_Report_Designers" == $shortTName) 
		return "Monthly Report Designers";
	if("Daily_Report_Team" == $shortTName) 
		return "Daily Report Team";
	if("Monthly_Report_Team" == $shortTName) 
		return "Monthly Report Team";
	if("Daily_Report_Full" == $shortTName) 
		return "Daily Report Full";
	if("Monthly_Report_Full" == $shortTName) 
		return "Monthly Report Full";
	if("Capacity___Night_Shift" == $shortTName) 
		return "Capacity - Night Shift";
	if("Capacity___Morning_Shift" == $shortTName) 
		return "Capacity - Morning Shift";
	if("Capacity___Evening_Shift" == $shortTName) 
		return "Capacity - Evening Shift";
	if("Pending_18442" == $shortTName) 
		return "Pending 18442";
	if("18442_Deadline_Missed" == $shortTName) 
		return "18442 Deadline Missed";
	if("18442_Urgent_Jobs" == $shortTName) 
		return "18442 Urgent Jobs";
	if("18442_Need_Notify" == $shortTName) 
		return "18442 Need Notify";
	if("18442_Need_Upload" == $shortTName) 
		return "18442 Need Upload";
	if("18442_Need_QC" == $shortTName) 
		return "18442 Need QC";
	if("18442_Need_Download" == $shortTName) 
		return "18442 Need Download";
	if("18442_Need_Accept" == $shortTName) 
		return "18442 Need Accept";
	if("Monthly_PDF_Avrage" == $shortTName) 
		return "Monthly PDF Avrage";
	if("Daily_Report_Designer_PDF" == $shortTName) 
		return "Daily Report Designer PDF";
	if("Monthly_Job_Report__Accepted_" == $shortTName) 
		return "Monthly Job Report (Accepted)";
	if("Monthly_Report_Designer_PDF" == $shortTName) 
		return "Monthly Report Designer PDF";
	if("Monthly_Job_Report__Notified_" == $shortTName) 
		return "Monthly Job Report (Notified)";
	if("14704_Week_Report_Team" == $shortTName) 
		return "14704 Week Report Team";
	if("14704_Monthly_Designers_Avrage" == $shortTName) 
		return "14704 Monthly Designers Avrage";
	if("clients" == $shortTName) 
		return "clients";
	if("admin_rights" == $shortTName) 
		return "admin_rights";
	if("admin_admembers" == $shortTName) 
		return "admin_admembers";
	if("Designer_files_report" == $shortTName) 
		return "Designer files report";
	if("PDF_Done___Evening_Shift" == $shortTName) 
		return "PDF Done - Evening Shift";
	if("PDF_Done___Morning_Shift" == $shortTName) 
		return "PDF Done - Morning Shift";
	if("PDF_Done___Night_Shift" == $shortTName) 
		return "PDF Done - Night Shift";
	if("PDF_Done___Today" == $shortTName) 
		return "PDF Done - Today";
	if("Files_Need_to_Work" == $shortTName) 
		return "Files Need to Work";
	if("Weekly_Report_Designers" == $shortTName) 
		return "Weekly Report Designers";
	if("Designers_Work_Profile" == $shortTName) 
		return "Designers Work Profile";
	if("Designers_Performance" == $shortTName) 
		return "Designers Performance";
	if("Designers_Performance_Monthly" == $shortTName) 
		return "Designers Performance Monthly";
	if("Display" == $shortTName) 
		return "Display";
	if("Daily_QC" == $shortTName) 
		return "Daily QC";
	if("Display_Files_Now_Working" == $shortTName) 
		return "Display Files Now Working";
	if("Display_Files_Need_to_Work_QC" == $shortTName) 
		return "Display Files Need to Work QC";
	if("Display_Files_Done_Today" == $shortTName) 
		return "Display Files Done Today";
	if("Daily_Report_33392" == $shortTName) 
		return "Daily Report 33392";
	if("generator_rex" == $shortTName) 
		return "generator_rex";
	if("Display_generator_top_images" == $shortTName) 
		return "Display generator_top_images";
	if("Display_top_team_performance" == $shortTName) 
		return "Display_top_team_performance";
	if("Display_top_designer_performance" == $shortTName) 
		return "Display_top_designer_performance";
	if("Daily_PDF_Avrage" == $shortTName) 
		return "Daily PDF Avrage";
	if("Weekly_PDF_Avrage" == $shortTName) 
		return "Weekly PDF Avrage";
	if("pdf_report" == $shortTName) 
		return "pdf_report";
	if("Display_Rejected_today" == $shortTName) 
		return "Display Rejected today";
	if("Display_QC_Done_Today" == $shortTName) 
		return "Display QC Done Today";
	if("Display_Files_Notifyed_Today" == $shortTName) 
		return "Display Files Notifyed Today";
	if("mail_messages" == $shortTName) 
		return "mail_messages";
	if("Emailer" == $shortTName) 
		return "Emailer";
	if("Display_Files_Need_to_Download" == $shortTName) 
		return "Display Files Need to Download";
	if("Display_Files_Need_to_Distribute" == $shortTName) 
		return "Display Files Need to Distribute";
	if("Display_ETA" == $shortTName) 
		return "Display ETA";
	if("Display_top_designer_Files" == $shortTName) 
		return "Display_top_designer_Files";
	if("Display_Files_Need_to_Prosess" == $shortTName) 
		return "Display Files Need to Prosess";
	if("Daily_Accepted_Riajul" == $shortTName) 
		return "Daily Accepted Riajul";
	if("attendance_sheet" == $shortTName) 
		return "attendance_sheet";
	if("employee_present" == $shortTName) 
		return "employee_present";
	if("ShiftType" == $shortTName) 
		return "ShiftType";
	if("UserShift" == $shortTName) 
		return "UserShift";
	if("user1" == $shortTName) 
		return "user1";
	if("Daily_Designers_and_QC" == $shortTName) 
		return "Daily Designers and QC";
	if("work_type" == $shortTName) 
		return "work_type";
	if("rejected_job" == $shortTName) 
		return "rejected_job";
	if("Download_Reject_Job" == $shortTName) 
		return "Download Reject Job";
	if("rejected_jobfile2" == $shortTName) 
		return "rejected_jobfile2";
	if("File_Distribution_Rejected" == $shortTName) 
		return "File Distribution Rejected";
	if("Designer_Level_2_for_Correction" == $shortTName) 
		return "Designer Level 2 for Correction";
	if("Designer_Level2_Filesheet_for_Correction" == $shortTName) 
		return "Designer Level2 Filesheet for Correction";
	if("QC_Worksheet_for_Correction" == $shortTName) 
		return "QC Worksheet for Correction";
	if("QC_Filesheet_for_Correction" == $shortTName) 
		return "QC Filesheet for Correction";
	if("External_Rejection" == $shortTName) 
		return "External Rejection";
	if("files_menu_count" == $shortTName) 
		return "files_menu_count";
	if("Display_Designer_Need" == $shortTName) 
		return "Display_Designer_Need";
	if("Internal_Rejection" == $shortTName) 
		return "Internal Rejection";
	if("Daily_Users_Work" == $shortTName) 
		return "Daily Users Work";
	if("not_for_use" == $shortTName) 
		return "not for use";
	if("jobfile_type" == $shortTName) 
		return "jobfile_type";
	if("users_work_report" == $shortTName) 
		return "users_work_report";
	if("Daily_Users_Work_Summery" == $shortTName) 
		return "Daily Users Work Summery";
	if("Daily_PDF_Work_Summery" == $shortTName) 
		return "Daily PDF Work Summery";
	if("Backup_Notified_Jobs" == $shortTName) 
		return "Backup Notified Jobs";
	if("Daily_Users_Work_Summery_QC" == $shortTName) 
		return "Daily Users Work Summery QC";
}

//	A
	$g_defaultOptionValues["add"] = false;
	$g_defaultOptionValues["addMultistep"] = false;
	$g_defaultOptionValues["Absolute"] = false;
	$g_defaultOptionValues["acceptFileTypes"] = ".+$";
	$g_defaultOptionValues["addFields"] = array();
	$g_defaultOptionValues["addPageEvents"] = false;
	$g_defaultOptionValues["advSearchFields"] = array();
	$g_defaultOptionValues["afterAddAction"] = 1;
	$g_defaultOptionValues["afterAddActionDetTable"] = "";
	$g_defaultOptionValues["afterEditAction"] = 1;
	$g_defaultOptionValues["afterEditActionDetTable"] = "";
	$g_defaultOptionValues["AllowToAdd"] = false;
	$g_defaultOptionValues["allSearchFields"] = array();
	$g_defaultOptionValues["arrGroupsPerPage"] = array();
	$g_defaultOptionValues["arrKeyFields"] = array();
	$g_defaultOptionValues["arrAddTabs"] = array();
	$g_defaultOptionValues["arrEditTabs"] = array();
	$g_defaultOptionValues["arrRecsPerPage"] = array();
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
	$g_defaultOptionValues["bEditPage"] = false;
	$g_defaultOptionValues["bExportPage"] = false;
	$g_defaultOptionValues["bInlineAdd"] = false;
	$g_defaultOptionValues["bInlineEdit"] = false;
	$g_defaultOptionValues["bIsEncrypted"] = false;
	$g_defaultOptionValues["bListPage"] = false;
	$g_defaultOptionValues["bPrinterPage"] = false;
	$g_defaultOptionValues["bViewPage"] = false;
	$g_defaultOptionValues["isCaptchaEnabledOnAdd"] = false;
	$g_defaultOptionValues["isCaptchaEnabledOnEdit"] = false;
//	C
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
	$g_defaultOptionValues["inlineEditFields"] = array();
	$g_defaultOptionValues["isDisplayLoading"] = false;
	$g_defaultOptionValues["tableType"] = "";
	$g_defaultOptionValues["IsRequired"] = false;
	$g_defaultOptionValues["isResizeColumns"] = false;
	$g_defaultOptionValues["isSeparate"] = false;
	$g_defaultOptionValues["UpdateLatLng"] = false;
	$g_defaultOptionValues["isUseAjaxSuggest"] = false;
	$g_defaultOptionValues["isUseAudio"] = false;
	$g_defaultOptionValues["isUsebuttonHandlers"] = false;
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