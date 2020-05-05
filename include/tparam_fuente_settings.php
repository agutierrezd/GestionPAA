<?php



$tdatatparam_fuente = array();
$tdatatparam_fuente[".searchableFields"] = array();
$tdatatparam_fuente[".ShortName"] = "tparam_fuente";
$tdatatparam_fuente[".OwnerID"] = "";
$tdatatparam_fuente[".OriginalTable"] = "tparam_fuente";


$tdatatparam_fuente[".pagesByType"] = my_json_decode( "{}" );
$tdatatparam_fuente[".originalPagesByType"] = $tdatatparam_fuente[".pagesByType"];
$tdatatparam_fuente[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatparam_fuente[".originalPages"] = $tdatatparam_fuente[".pages"];
$tdatatparam_fuente[".defaultPages"] = my_json_decode( "{}" );
$tdatatparam_fuente[".originalDefaultPages"] = $tdatatparam_fuente[".defaultPages"];

//	field labels
$fieldLabelstparam_fuente = array();
$fieldToolTipstparam_fuente = array();
$pageTitlestparam_fuente = array();
$placeHolderstparam_fuente = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_fuente["Spanish"] = array();
	$fieldToolTipstparam_fuente["Spanish"] = array();
	$placeHolderstparam_fuente["Spanish"] = array();
	$pageTitlestparam_fuente["Spanish"] = array();
	$fieldLabelstparam_fuente["Spanish"]["fuente_id"] = "Fuente Id";
	$fieldToolTipstparam_fuente["Spanish"]["fuente_id"] = "";
	$placeHolderstparam_fuente["Spanish"]["fuente_id"] = "";
	$fieldLabelstparam_fuente["Spanish"]["fuente_name"] = "Fuente Name";
	$fieldToolTipstparam_fuente["Spanish"]["fuente_name"] = "";
	$placeHolderstparam_fuente["Spanish"]["fuente_name"] = "";
	if (count($fieldToolTipstparam_fuente["Spanish"]))
		$tdatatparam_fuente[".isUseToolTips"] = true;
}


	$tdatatparam_fuente[".NCSearch"] = true;



$tdatatparam_fuente[".shortTableName"] = "tparam_fuente";
$tdatatparam_fuente[".nSecOptions"] = 0;

$tdatatparam_fuente[".mainTableOwnerID"] = "";
$tdatatparam_fuente[".entityType"] = 0;

$tdatatparam_fuente[".strOriginalTableName"] = "tparam_fuente";

	



$tdatatparam_fuente[".showAddInPopup"] = false;

$tdatatparam_fuente[".showEditInPopup"] = false;

$tdatatparam_fuente[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatparam_fuente[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatparam_fuente[".listAjax"] = false;
//	temporary
$tdatatparam_fuente[".listAjax"] = false;

	$tdatatparam_fuente[".audit"] = false;

	$tdatatparam_fuente[".locking"] = false;


$pages = $tdatatparam_fuente[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_fuente[".edit"] = true;
	$tdatatparam_fuente[".afterEditAction"] = 1;
	$tdatatparam_fuente[".closePopupAfterEdit"] = 1;
	$tdatatparam_fuente[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_fuente[".add"] = true;
$tdatatparam_fuente[".afterAddAction"] = 1;
$tdatatparam_fuente[".closePopupAfterAdd"] = 1;
$tdatatparam_fuente[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_fuente[".list"] = true;
}



$tdatatparam_fuente[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_fuente[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_fuente[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_fuente[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_fuente[".printFriendly"] = true;
}



$tdatatparam_fuente[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_fuente[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_fuente[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_fuente[".isUseAjaxSuggest"] = true;

$tdatatparam_fuente[".rowHighlite"] = true;



												

$tdatatparam_fuente[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_fuente[".buttonsAdded"] = false;

$tdatatparam_fuente[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_fuente[".isUseTimeForSearch"] = false;


$tdatatparam_fuente[".badgeColor"] = "E07878";


$tdatatparam_fuente[".allSearchFields"] = array();
$tdatatparam_fuente[".filterFields"] = array();
$tdatatparam_fuente[".requiredSearchFields"] = array();

$tdatatparam_fuente[".googleLikeFields"] = array();
$tdatatparam_fuente[".googleLikeFields"][] = "fuente_id";
$tdatatparam_fuente[".googleLikeFields"][] = "fuente_name";



$tdatatparam_fuente[".tableType"] = "list";

$tdatatparam_fuente[".printerPageOrientation"] = 0;
$tdatatparam_fuente[".nPrinterPageScale"] = 100;

$tdatatparam_fuente[".nPrinterSplitRecords"] = 40;

$tdatatparam_fuente[".geocodingEnabled"] = false;










$tdatatparam_fuente[".pageSize"] = 20;

$tdatatparam_fuente[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatparam_fuente[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_fuente[".orderindexes"] = array();

$tdatatparam_fuente[".sqlHead"] = "SELECT fuente_id,  	fuente_name";
$tdatatparam_fuente[".sqlFrom"] = "FROM tparam_fuente";
$tdatatparam_fuente[".sqlWhereExpr"] = "";
$tdatatparam_fuente[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_fuente[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_fuente[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_fuente[".highlightSearchResults"] = true;

$tableKeystparam_fuente = array();
$tableKeystparam_fuente[] = "fuente_id";
$tdatatparam_fuente[".Keys"] = $tableKeystparam_fuente;


$tdatatparam_fuente[".hideMobileList"] = array();




//	fuente_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "fuente_id";
	$fdata["GoodName"] = "fuente_id";
	$fdata["ownerTable"] = "tparam_fuente";
	$fdata["Label"] = GetFieldLabel("tparam_fuente","fuente_id");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "fuente_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fuente_id";

	
	
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


	$tdatatparam_fuente["fuente_id"] = $fdata;
		$tdatatparam_fuente[".searchableFields"][] = "fuente_id";
//	fuente_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fuente_name";
	$fdata["GoodName"] = "fuente_name";
	$fdata["ownerTable"] = "tparam_fuente";
	$fdata["Label"] = GetFieldLabel("tparam_fuente","fuente_name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "fuente_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fuente_name";

	
	
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


	$tdatatparam_fuente["fuente_name"] = $fdata;
		$tdatatparam_fuente[".searchableFields"][] = "fuente_name";


$tables_data["tparam_fuente"]=&$tdatatparam_fuente;
$field_labels["tparam_fuente"] = &$fieldLabelstparam_fuente;
$fieldToolTips["tparam_fuente"] = &$fieldToolTipstparam_fuente;
$placeHolders["tparam_fuente"] = &$placeHolderstparam_fuente;
$page_titles["tparam_fuente"] = &$pageTitlestparam_fuente;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tparam_fuente"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tparam_fuente"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tparam_fuente()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "fuente_id,  	fuente_name";
$proto0["m_strFrom"] = "FROM tparam_fuente";
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
	"m_strName" => "fuente_id",
	"m_strTable" => "tparam_fuente",
	"m_srcTableName" => "tparam_fuente"
));

$proto6["m_sql"] = "fuente_id";
$proto6["m_srcTableName"] = "tparam_fuente";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fuente_name",
	"m_strTable" => "tparam_fuente",
	"m_srcTableName" => "tparam_fuente"
));

$proto8["m_sql"] = "fuente_name";
$proto8["m_srcTableName"] = "tparam_fuente";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_fuente";
$proto11["m_srcTableName"] = "tparam_fuente";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "fuente_id";
$proto11["m_columns"][] = "fuente_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_fuente";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_fuente";
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
$proto0["m_srcTableName"]="tparam_fuente";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_fuente = createSqlQuery_tparam_fuente();


	
										;

		

$tdatatparam_fuente[".sqlquery"] = $queryData_tparam_fuente;

$tableEvents["tparam_fuente"] = new eventsBase;
$tdatatparam_fuente[".hasEvents"] = false;

?>