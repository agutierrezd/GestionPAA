<?php



$tdataglobal_paa_nopaa = array();
$tdataglobal_paa_nopaa[".searchableFields"] = array();
$tdataglobal_paa_nopaa[".ShortName"] = "global_paa_nopaa";
$tdataglobal_paa_nopaa[".OwnerID"] = "";
$tdataglobal_paa_nopaa[".OriginalTable"] = "global_paa_nopaa";


$tdataglobal_paa_nopaa[".pagesByType"] = my_json_decode( "{}" );
$tdataglobal_paa_nopaa[".originalPagesByType"] = $tdataglobal_paa_nopaa[".pagesByType"];
$tdataglobal_paa_nopaa[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataglobal_paa_nopaa[".originalPages"] = $tdataglobal_paa_nopaa[".pages"];
$tdataglobal_paa_nopaa[".defaultPages"] = my_json_decode( "{}" );
$tdataglobal_paa_nopaa[".originalDefaultPages"] = $tdataglobal_paa_nopaa[".defaultPages"];

//	field labels
$fieldLabelsglobal_paa_nopaa = array();
$fieldToolTipsglobal_paa_nopaa = array();
$pageTitlesglobal_paa_nopaa = array();
$placeHoldersglobal_paa_nopaa = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_paa_nopaa["Spanish"] = array();
	$fieldToolTipsglobal_paa_nopaa["Spanish"] = array();
	$placeHoldersglobal_paa_nopaa["Spanish"] = array();
	$pageTitlesglobal_paa_nopaa["Spanish"] = array();
	$fieldLabelsglobal_paa_nopaa["Spanish"]["paan_id"] = "Paan Id";
	$fieldToolTipsglobal_paa_nopaa["Spanish"]["paan_id"] = "";
	$placeHoldersglobal_paa_nopaa["Spanish"]["paan_id"] = "";
	$fieldLabelsglobal_paa_nopaa["Spanish"]["paan_name"] = "Paan Name";
	$fieldToolTipsglobal_paa_nopaa["Spanish"]["paan_name"] = "";
	$placeHoldersglobal_paa_nopaa["Spanish"]["paan_name"] = "";
	if (count($fieldToolTipsglobal_paa_nopaa["Spanish"]))
		$tdataglobal_paa_nopaa[".isUseToolTips"] = true;
}


	$tdataglobal_paa_nopaa[".NCSearch"] = true;



$tdataglobal_paa_nopaa[".shortTableName"] = "global_paa_nopaa";
$tdataglobal_paa_nopaa[".nSecOptions"] = 0;

$tdataglobal_paa_nopaa[".mainTableOwnerID"] = "";
$tdataglobal_paa_nopaa[".entityType"] = 0;

$tdataglobal_paa_nopaa[".strOriginalTableName"] = "global_paa_nopaa";

	



$tdataglobal_paa_nopaa[".showAddInPopup"] = false;

$tdataglobal_paa_nopaa[".showEditInPopup"] = false;

$tdataglobal_paa_nopaa[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataglobal_paa_nopaa[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataglobal_paa_nopaa[".listAjax"] = false;
//	temporary
$tdataglobal_paa_nopaa[".listAjax"] = false;

	$tdataglobal_paa_nopaa[".audit"] = false;

	$tdataglobal_paa_nopaa[".locking"] = false;


$pages = $tdataglobal_paa_nopaa[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_paa_nopaa[".edit"] = true;
	$tdataglobal_paa_nopaa[".afterEditAction"] = 1;
	$tdataglobal_paa_nopaa[".closePopupAfterEdit"] = 1;
	$tdataglobal_paa_nopaa[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_paa_nopaa[".add"] = true;
$tdataglobal_paa_nopaa[".afterAddAction"] = 1;
$tdataglobal_paa_nopaa[".closePopupAfterAdd"] = 1;
$tdataglobal_paa_nopaa[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_paa_nopaa[".list"] = true;
}



$tdataglobal_paa_nopaa[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_paa_nopaa[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_paa_nopaa[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_paa_nopaa[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_paa_nopaa[".printFriendly"] = true;
}



$tdataglobal_paa_nopaa[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_paa_nopaa[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_paa_nopaa[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_paa_nopaa[".isUseAjaxSuggest"] = true;

$tdataglobal_paa_nopaa[".rowHighlite"] = true;



												

$tdataglobal_paa_nopaa[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_paa_nopaa[".buttonsAdded"] = false;

$tdataglobal_paa_nopaa[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_paa_nopaa[".isUseTimeForSearch"] = false;


$tdataglobal_paa_nopaa[".badgeColor"] = "6493EA";


$tdataglobal_paa_nopaa[".allSearchFields"] = array();
$tdataglobal_paa_nopaa[".filterFields"] = array();
$tdataglobal_paa_nopaa[".requiredSearchFields"] = array();

$tdataglobal_paa_nopaa[".googleLikeFields"] = array();
$tdataglobal_paa_nopaa[".googleLikeFields"][] = "paan_id";
$tdataglobal_paa_nopaa[".googleLikeFields"][] = "paan_name";



$tdataglobal_paa_nopaa[".tableType"] = "list";

$tdataglobal_paa_nopaa[".printerPageOrientation"] = 0;
$tdataglobal_paa_nopaa[".nPrinterPageScale"] = 100;

$tdataglobal_paa_nopaa[".nPrinterSplitRecords"] = 40;

$tdataglobal_paa_nopaa[".geocodingEnabled"] = false;










$tdataglobal_paa_nopaa[".pageSize"] = 20;

$tdataglobal_paa_nopaa[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataglobal_paa_nopaa[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_paa_nopaa[".orderindexes"] = array();

$tdataglobal_paa_nopaa[".sqlHead"] = "SELECT paan_id,  	paan_name";
$tdataglobal_paa_nopaa[".sqlFrom"] = "FROM global_paa_nopaa";
$tdataglobal_paa_nopaa[".sqlWhereExpr"] = "";
$tdataglobal_paa_nopaa[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_paa_nopaa[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_paa_nopaa[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_paa_nopaa[".highlightSearchResults"] = true;

$tableKeysglobal_paa_nopaa = array();
$tableKeysglobal_paa_nopaa[] = "paan_id";
$tdataglobal_paa_nopaa[".Keys"] = $tableKeysglobal_paa_nopaa;


$tdataglobal_paa_nopaa[".hideMobileList"] = array();




//	paan_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "paan_id";
	$fdata["GoodName"] = "paan_id";
	$fdata["ownerTable"] = "global_paa_nopaa";
	$fdata["Label"] = GetFieldLabel("global_paa_nopaa","paan_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "paan_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paan_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_paa_nopaa["paan_id"] = $fdata;
		$tdataglobal_paa_nopaa[".searchableFields"][] = "paan_id";
//	paan_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "paan_name";
	$fdata["GoodName"] = "paan_name";
	$fdata["ownerTable"] = "global_paa_nopaa";
	$fdata["Label"] = GetFieldLabel("global_paa_nopaa","paan_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "paan_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paan_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataglobal_paa_nopaa["paan_name"] = $fdata;
		$tdataglobal_paa_nopaa[".searchableFields"][] = "paan_name";


$tables_data["global_paa_nopaa"]=&$tdataglobal_paa_nopaa;
$field_labels["global_paa_nopaa"] = &$fieldLabelsglobal_paa_nopaa;
$fieldToolTips["global_paa_nopaa"] = &$fieldToolTipsglobal_paa_nopaa;
$placeHolders["global_paa_nopaa"] = &$placeHoldersglobal_paa_nopaa;
$page_titles["global_paa_nopaa"] = &$pageTitlesglobal_paa_nopaa;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["global_paa_nopaa"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["global_paa_nopaa"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_global_paa_nopaa()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "paan_id,  	paan_name";
$proto0["m_strFrom"] = "FROM global_paa_nopaa";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
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
	"m_strName" => "paan_id",
	"m_strTable" => "global_paa_nopaa",
	"m_srcTableName" => "global_paa_nopaa"
));

$proto6["m_sql"] = "paan_id";
$proto6["m_srcTableName"] = "global_paa_nopaa";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "paan_name",
	"m_strTable" => "global_paa_nopaa",
	"m_srcTableName" => "global_paa_nopaa"
));

$proto8["m_sql"] = "paan_name";
$proto8["m_srcTableName"] = "global_paa_nopaa";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "global_paa_nopaa";
$proto11["m_srcTableName"] = "global_paa_nopaa";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "paan_id";
$proto11["m_columns"][] = "paan_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "global_paa_nopaa";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "global_paa_nopaa";
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
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="global_paa_nopaa";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_paa_nopaa = createSqlQuery_global_paa_nopaa();


	
										;

		

$tdataglobal_paa_nopaa[".sqlquery"] = $queryData_global_paa_nopaa;

$tableEvents["global_paa_nopaa"] = new eventsBase;
$tdataglobal_paa_nopaa[".hasEvents"] = false;

?>