<?php



$tdataplanta_tparam_tipo_nombramiento = array();
$tdataplanta_tparam_tipo_nombramiento[".searchableFields"] = array();
$tdataplanta_tparam_tipo_nombramiento[".ShortName"] = "planta_tparam_tipo_nombramiento";
$tdataplanta_tparam_tipo_nombramiento[".OwnerID"] = "";
$tdataplanta_tparam_tipo_nombramiento[".OriginalTable"] = "planta_tparam_tipo_nombramiento";


$tdataplanta_tparam_tipo_nombramiento[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataplanta_tparam_tipo_nombramiento[".originalPagesByType"] = $tdataplanta_tparam_tipo_nombramiento[".pagesByType"];
$tdataplanta_tparam_tipo_nombramiento[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataplanta_tparam_tipo_nombramiento[".originalPages"] = $tdataplanta_tparam_tipo_nombramiento[".pages"];
$tdataplanta_tparam_tipo_nombramiento[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataplanta_tparam_tipo_nombramiento[".originalDefaultPages"] = $tdataplanta_tparam_tipo_nombramiento[".defaultPages"];

//	field labels
$fieldLabelsplanta_tparam_tipo_nombramiento = array();
$fieldToolTipsplanta_tparam_tipo_nombramiento = array();
$pageTitlesplanta_tparam_tipo_nombramiento = array();
$placeHoldersplanta_tparam_tipo_nombramiento = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsplanta_tparam_tipo_nombramiento["Spanish"] = array();
	$fieldToolTipsplanta_tparam_tipo_nombramiento["Spanish"] = array();
	$placeHoldersplanta_tparam_tipo_nombramiento["Spanish"] = array();
	$pageTitlesplanta_tparam_tipo_nombramiento["Spanish"] = array();
	$fieldLabelsplanta_tparam_tipo_nombramiento["Spanish"]["nombramiento_tipo_id"] = "Nombramiento Tipo Id";
	$fieldToolTipsplanta_tparam_tipo_nombramiento["Spanish"]["nombramiento_tipo_id"] = "";
	$placeHoldersplanta_tparam_tipo_nombramiento["Spanish"]["nombramiento_tipo_id"] = "";
	$fieldLabelsplanta_tparam_tipo_nombramiento["Spanish"]["nombramiento"] = "Nombramiento";
	$fieldToolTipsplanta_tparam_tipo_nombramiento["Spanish"]["nombramiento"] = "";
	$placeHoldersplanta_tparam_tipo_nombramiento["Spanish"]["nombramiento"] = "";
	if (count($fieldToolTipsplanta_tparam_tipo_nombramiento["Spanish"]))
		$tdataplanta_tparam_tipo_nombramiento[".isUseToolTips"] = true;
}


	$tdataplanta_tparam_tipo_nombramiento[".NCSearch"] = true;



$tdataplanta_tparam_tipo_nombramiento[".shortTableName"] = "planta_tparam_tipo_nombramiento";
$tdataplanta_tparam_tipo_nombramiento[".nSecOptions"] = 0;

$tdataplanta_tparam_tipo_nombramiento[".mainTableOwnerID"] = "";
$tdataplanta_tparam_tipo_nombramiento[".entityType"] = 0;

$tdataplanta_tparam_tipo_nombramiento[".strOriginalTableName"] = "planta_tparam_tipo_nombramiento";

	



$tdataplanta_tparam_tipo_nombramiento[".showAddInPopup"] = false;

$tdataplanta_tparam_tipo_nombramiento[".showEditInPopup"] = false;

$tdataplanta_tparam_tipo_nombramiento[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataplanta_tparam_tipo_nombramiento[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataplanta_tparam_tipo_nombramiento[".listAjax"] = false;
//	temporary
$tdataplanta_tparam_tipo_nombramiento[".listAjax"] = false;

	$tdataplanta_tparam_tipo_nombramiento[".audit"] = false;

	$tdataplanta_tparam_tipo_nombramiento[".locking"] = false;


$pages = $tdataplanta_tparam_tipo_nombramiento[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataplanta_tparam_tipo_nombramiento[".edit"] = true;
	$tdataplanta_tparam_tipo_nombramiento[".afterEditAction"] = 1;
	$tdataplanta_tparam_tipo_nombramiento[".closePopupAfterEdit"] = 1;
	$tdataplanta_tparam_tipo_nombramiento[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataplanta_tparam_tipo_nombramiento[".add"] = true;
$tdataplanta_tparam_tipo_nombramiento[".afterAddAction"] = 1;
$tdataplanta_tparam_tipo_nombramiento[".closePopupAfterAdd"] = 1;
$tdataplanta_tparam_tipo_nombramiento[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataplanta_tparam_tipo_nombramiento[".list"] = true;
}



$tdataplanta_tparam_tipo_nombramiento[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataplanta_tparam_tipo_nombramiento[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataplanta_tparam_tipo_nombramiento[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataplanta_tparam_tipo_nombramiento[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataplanta_tparam_tipo_nombramiento[".printFriendly"] = true;
}



$tdataplanta_tparam_tipo_nombramiento[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataplanta_tparam_tipo_nombramiento[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataplanta_tparam_tipo_nombramiento[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataplanta_tparam_tipo_nombramiento[".isUseAjaxSuggest"] = true;

$tdataplanta_tparam_tipo_nombramiento[".rowHighlite"] = true;



												

$tdataplanta_tparam_tipo_nombramiento[".ajaxCodeSnippetAdded"] = false;

$tdataplanta_tparam_tipo_nombramiento[".buttonsAdded"] = false;

$tdataplanta_tparam_tipo_nombramiento[".addPageEvents"] = false;

// use timepicker for search panel
$tdataplanta_tparam_tipo_nombramiento[".isUseTimeForSearch"] = false;


$tdataplanta_tparam_tipo_nombramiento[".badgeColor"] = "E67349";


$tdataplanta_tparam_tipo_nombramiento[".allSearchFields"] = array();
$tdataplanta_tparam_tipo_nombramiento[".filterFields"] = array();
$tdataplanta_tparam_tipo_nombramiento[".requiredSearchFields"] = array();

$tdataplanta_tparam_tipo_nombramiento[".googleLikeFields"] = array();
$tdataplanta_tparam_tipo_nombramiento[".googleLikeFields"][] = "nombramiento_tipo_id";
$tdataplanta_tparam_tipo_nombramiento[".googleLikeFields"][] = "nombramiento";



$tdataplanta_tparam_tipo_nombramiento[".tableType"] = "list";

$tdataplanta_tparam_tipo_nombramiento[".printerPageOrientation"] = 0;
$tdataplanta_tparam_tipo_nombramiento[".nPrinterPageScale"] = 100;

$tdataplanta_tparam_tipo_nombramiento[".nPrinterSplitRecords"] = 40;

$tdataplanta_tparam_tipo_nombramiento[".geocodingEnabled"] = false;










$tdataplanta_tparam_tipo_nombramiento[".pageSize"] = 20;

$tdataplanta_tparam_tipo_nombramiento[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataplanta_tparam_tipo_nombramiento[".strOrderBy"] = $tstrOrderBy;

$tdataplanta_tparam_tipo_nombramiento[".orderindexes"] = array();

$tdataplanta_tparam_tipo_nombramiento[".sqlHead"] = "SELECT nombramiento_tipo_id,  	nombramiento";
$tdataplanta_tparam_tipo_nombramiento[".sqlFrom"] = "FROM planta_tparam_tipo_nombramiento";
$tdataplanta_tparam_tipo_nombramiento[".sqlWhereExpr"] = "";
$tdataplanta_tparam_tipo_nombramiento[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataplanta_tparam_tipo_nombramiento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataplanta_tparam_tipo_nombramiento[".arrGroupsPerPage"] = $arrGPP;

$tdataplanta_tparam_tipo_nombramiento[".highlightSearchResults"] = true;

$tableKeysplanta_tparam_tipo_nombramiento = array();
$tableKeysplanta_tparam_tipo_nombramiento[] = "nombramiento_tipo_id";
$tdataplanta_tparam_tipo_nombramiento[".Keys"] = $tableKeysplanta_tparam_tipo_nombramiento;


$tdataplanta_tparam_tipo_nombramiento[".hideMobileList"] = array();




//	nombramiento_tipo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nombramiento_tipo_id";
	$fdata["GoodName"] = "nombramiento_tipo_id";
	$fdata["ownerTable"] = "planta_tparam_tipo_nombramiento";
	$fdata["Label"] = GetFieldLabel("planta_tparam_tipo_nombramiento","nombramiento_tipo_id");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombramiento_tipo_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombramiento_tipo_id";

	
	
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
			$edata["EditParams"].= " maxlength=1";

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


	$tdataplanta_tparam_tipo_nombramiento["nombramiento_tipo_id"] = $fdata;
		$tdataplanta_tparam_tipo_nombramiento[".searchableFields"][] = "nombramiento_tipo_id";
//	nombramiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombramiento";
	$fdata["GoodName"] = "nombramiento";
	$fdata["ownerTable"] = "planta_tparam_tipo_nombramiento";
	$fdata["Label"] = GetFieldLabel("planta_tparam_tipo_nombramiento","nombramiento");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombramiento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombramiento";

	
	
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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataplanta_tparam_tipo_nombramiento["nombramiento"] = $fdata;
		$tdataplanta_tparam_tipo_nombramiento[".searchableFields"][] = "nombramiento";


$tables_data["planta_tparam_tipo_nombramiento"]=&$tdataplanta_tparam_tipo_nombramiento;
$field_labels["planta_tparam_tipo_nombramiento"] = &$fieldLabelsplanta_tparam_tipo_nombramiento;
$fieldToolTips["planta_tparam_tipo_nombramiento"] = &$fieldToolTipsplanta_tparam_tipo_nombramiento;
$placeHolders["planta_tparam_tipo_nombramiento"] = &$placeHoldersplanta_tparam_tipo_nombramiento;
$page_titles["planta_tparam_tipo_nombramiento"] = &$pageTitlesplanta_tparam_tipo_nombramiento;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["planta_tparam_tipo_nombramiento"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["planta_tparam_tipo_nombramiento"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_planta_tparam_tipo_nombramiento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "nombramiento_tipo_id,  	nombramiento";
$proto0["m_strFrom"] = "FROM planta_tparam_tipo_nombramiento";
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
	"m_strName" => "nombramiento_tipo_id",
	"m_strTable" => "planta_tparam_tipo_nombramiento",
	"m_srcTableName" => "planta_tparam_tipo_nombramiento"
));

$proto6["m_sql"] = "nombramiento_tipo_id";
$proto6["m_srcTableName"] = "planta_tparam_tipo_nombramiento";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombramiento",
	"m_strTable" => "planta_tparam_tipo_nombramiento",
	"m_srcTableName" => "planta_tparam_tipo_nombramiento"
));

$proto8["m_sql"] = "nombramiento";
$proto8["m_srcTableName"] = "planta_tparam_tipo_nombramiento";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "planta_tparam_tipo_nombramiento";
$proto11["m_srcTableName"] = "planta_tparam_tipo_nombramiento";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "nombramiento_tipo_id";
$proto11["m_columns"][] = "nombramiento";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "planta_tparam_tipo_nombramiento";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "planta_tparam_tipo_nombramiento";
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
$proto0["m_srcTableName"]="planta_tparam_tipo_nombramiento";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_planta_tparam_tipo_nombramiento = createSqlQuery_planta_tparam_tipo_nombramiento();


	
										;

		

$tdataplanta_tparam_tipo_nombramiento[".sqlquery"] = $queryData_planta_tparam_tipo_nombramiento;

$tableEvents["planta_tparam_tipo_nombramiento"] = new eventsBase;
$tdataplanta_tparam_tipo_nombramiento[".hasEvents"] = false;

?>