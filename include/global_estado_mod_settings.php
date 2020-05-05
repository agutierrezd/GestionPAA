<?php



$tdataglobal_estado_mod = array();
$tdataglobal_estado_mod[".searchableFields"] = array();
$tdataglobal_estado_mod[".ShortName"] = "global_estado_mod";
$tdataglobal_estado_mod[".OwnerID"] = "";
$tdataglobal_estado_mod[".OriginalTable"] = "global_estado_mod";


$tdataglobal_estado_mod[".pagesByType"] = my_json_decode( "{}" );
$tdataglobal_estado_mod[".originalPagesByType"] = $tdataglobal_estado_mod[".pagesByType"];
$tdataglobal_estado_mod[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataglobal_estado_mod[".originalPages"] = $tdataglobal_estado_mod[".pages"];
$tdataglobal_estado_mod[".defaultPages"] = my_json_decode( "{}" );
$tdataglobal_estado_mod[".originalDefaultPages"] = $tdataglobal_estado_mod[".defaultPages"];

//	field labels
$fieldLabelsglobal_estado_mod = array();
$fieldToolTipsglobal_estado_mod = array();
$pageTitlesglobal_estado_mod = array();
$placeHoldersglobal_estado_mod = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_estado_mod["Spanish"] = array();
	$fieldToolTipsglobal_estado_mod["Spanish"] = array();
	$placeHoldersglobal_estado_mod["Spanish"] = array();
	$pageTitlesglobal_estado_mod["Spanish"] = array();
	$fieldLabelsglobal_estado_mod["Spanish"]["status_mod_id"] = "Status Mod Id";
	$fieldToolTipsglobal_estado_mod["Spanish"]["status_mod_id"] = "";
	$placeHoldersglobal_estado_mod["Spanish"]["status_mod_id"] = "";
	$fieldLabelsglobal_estado_mod["Spanish"]["status_mod_name"] = "Status Mod Name";
	$fieldToolTipsglobal_estado_mod["Spanish"]["status_mod_name"] = "";
	$placeHoldersglobal_estado_mod["Spanish"]["status_mod_name"] = "";
	if (count($fieldToolTipsglobal_estado_mod["Spanish"]))
		$tdataglobal_estado_mod[".isUseToolTips"] = true;
}


	$tdataglobal_estado_mod[".NCSearch"] = true;



$tdataglobal_estado_mod[".shortTableName"] = "global_estado_mod";
$tdataglobal_estado_mod[".nSecOptions"] = 0;

$tdataglobal_estado_mod[".mainTableOwnerID"] = "";
$tdataglobal_estado_mod[".entityType"] = 0;

$tdataglobal_estado_mod[".strOriginalTableName"] = "global_estado_mod";

	



$tdataglobal_estado_mod[".showAddInPopup"] = false;

$tdataglobal_estado_mod[".showEditInPopup"] = false;

$tdataglobal_estado_mod[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataglobal_estado_mod[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataglobal_estado_mod[".listAjax"] = false;
//	temporary
$tdataglobal_estado_mod[".listAjax"] = false;

	$tdataglobal_estado_mod[".audit"] = false;

	$tdataglobal_estado_mod[".locking"] = false;


$pages = $tdataglobal_estado_mod[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_estado_mod[".edit"] = true;
	$tdataglobal_estado_mod[".afterEditAction"] = 1;
	$tdataglobal_estado_mod[".closePopupAfterEdit"] = 1;
	$tdataglobal_estado_mod[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_estado_mod[".add"] = true;
$tdataglobal_estado_mod[".afterAddAction"] = 1;
$tdataglobal_estado_mod[".closePopupAfterAdd"] = 1;
$tdataglobal_estado_mod[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_estado_mod[".list"] = true;
}



$tdataglobal_estado_mod[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_estado_mod[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_estado_mod[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_estado_mod[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_estado_mod[".printFriendly"] = true;
}



$tdataglobal_estado_mod[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_estado_mod[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_estado_mod[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_estado_mod[".isUseAjaxSuggest"] = true;

$tdataglobal_estado_mod[".rowHighlite"] = true;



												

$tdataglobal_estado_mod[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_estado_mod[".buttonsAdded"] = false;

$tdataglobal_estado_mod[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_estado_mod[".isUseTimeForSearch"] = false;


$tdataglobal_estado_mod[".badgeColor"] = "D2AF80";


$tdataglobal_estado_mod[".allSearchFields"] = array();
$tdataglobal_estado_mod[".filterFields"] = array();
$tdataglobal_estado_mod[".requiredSearchFields"] = array();

$tdataglobal_estado_mod[".googleLikeFields"] = array();
$tdataglobal_estado_mod[".googleLikeFields"][] = "status_mod_id";
$tdataglobal_estado_mod[".googleLikeFields"][] = "status_mod_name";



$tdataglobal_estado_mod[".tableType"] = "list";

$tdataglobal_estado_mod[".printerPageOrientation"] = 0;
$tdataglobal_estado_mod[".nPrinterPageScale"] = 100;

$tdataglobal_estado_mod[".nPrinterSplitRecords"] = 40;

$tdataglobal_estado_mod[".geocodingEnabled"] = false;










$tdataglobal_estado_mod[".pageSize"] = 20;

$tdataglobal_estado_mod[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataglobal_estado_mod[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_estado_mod[".orderindexes"] = array();

$tdataglobal_estado_mod[".sqlHead"] = "SELECT status_mod_id,  	status_mod_name";
$tdataglobal_estado_mod[".sqlFrom"] = "FROM global_estado_mod";
$tdataglobal_estado_mod[".sqlWhereExpr"] = "";
$tdataglobal_estado_mod[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_estado_mod[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_estado_mod[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_estado_mod[".highlightSearchResults"] = true;

$tableKeysglobal_estado_mod = array();
$tableKeysglobal_estado_mod[] = "status_mod_id";
$tdataglobal_estado_mod[".Keys"] = $tableKeysglobal_estado_mod;


$tdataglobal_estado_mod[".hideMobileList"] = array();




//	status_mod_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "status_mod_id";
	$fdata["GoodName"] = "status_mod_id";
	$fdata["ownerTable"] = "global_estado_mod";
	$fdata["Label"] = GetFieldLabel("global_estado_mod","status_mod_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "status_mod_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_mod_id";

	
	
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


	$tdataglobal_estado_mod["status_mod_id"] = $fdata;
		$tdataglobal_estado_mod[".searchableFields"][] = "status_mod_id";
//	status_mod_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status_mod_name";
	$fdata["GoodName"] = "status_mod_name";
	$fdata["ownerTable"] = "global_estado_mod";
	$fdata["Label"] = GetFieldLabel("global_estado_mod","status_mod_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "status_mod_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_mod_name";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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


	$tdataglobal_estado_mod["status_mod_name"] = $fdata;
		$tdataglobal_estado_mod[".searchableFields"][] = "status_mod_name";


$tables_data["global_estado_mod"]=&$tdataglobal_estado_mod;
$field_labels["global_estado_mod"] = &$fieldLabelsglobal_estado_mod;
$fieldToolTips["global_estado_mod"] = &$fieldToolTipsglobal_estado_mod;
$placeHolders["global_estado_mod"] = &$placeHoldersglobal_estado_mod;
$page_titles["global_estado_mod"] = &$pageTitlesglobal_estado_mod;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["global_estado_mod"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["global_estado_mod"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_global_estado_mod()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "status_mod_id,  	status_mod_name";
$proto0["m_strFrom"] = "FROM global_estado_mod";
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
	"m_strName" => "status_mod_id",
	"m_strTable" => "global_estado_mod",
	"m_srcTableName" => "global_estado_mod"
));

$proto6["m_sql"] = "status_mod_id";
$proto6["m_srcTableName"] = "global_estado_mod";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "status_mod_name",
	"m_strTable" => "global_estado_mod",
	"m_srcTableName" => "global_estado_mod"
));

$proto8["m_sql"] = "status_mod_name";
$proto8["m_srcTableName"] = "global_estado_mod";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "global_estado_mod";
$proto11["m_srcTableName"] = "global_estado_mod";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "status_mod_id";
$proto11["m_columns"][] = "status_mod_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "global_estado_mod";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "global_estado_mod";
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
$proto0["m_srcTableName"]="global_estado_mod";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_estado_mod = createSqlQuery_global_estado_mod();


	
										;

		

$tdataglobal_estado_mod[".sqlquery"] = $queryData_global_estado_mod;

$tableEvents["global_estado_mod"] = new eventsBase;
$tdataglobal_estado_mod[".hasEvents"] = false;

?>