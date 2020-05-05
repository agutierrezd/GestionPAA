<?php



$tdataglobal_fuenterec = array();
$tdataglobal_fuenterec[".searchableFields"] = array();
$tdataglobal_fuenterec[".ShortName"] = "global_fuenterec";
$tdataglobal_fuenterec[".OwnerID"] = "";
$tdataglobal_fuenterec[".OriginalTable"] = "global_fuenterec";


$tdataglobal_fuenterec[".pagesByType"] = my_json_decode( "{}" );
$tdataglobal_fuenterec[".originalPagesByType"] = $tdataglobal_fuenterec[".pagesByType"];
$tdataglobal_fuenterec[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataglobal_fuenterec[".originalPages"] = $tdataglobal_fuenterec[".pages"];
$tdataglobal_fuenterec[".defaultPages"] = my_json_decode( "{}" );
$tdataglobal_fuenterec[".originalDefaultPages"] = $tdataglobal_fuenterec[".defaultPages"];

//	field labels
$fieldLabelsglobal_fuenterec = array();
$fieldToolTipsglobal_fuenterec = array();
$pageTitlesglobal_fuenterec = array();
$placeHoldersglobal_fuenterec = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_fuenterec["Spanish"] = array();
	$fieldToolTipsglobal_fuenterec["Spanish"] = array();
	$placeHoldersglobal_fuenterec["Spanish"] = array();
	$pageTitlesglobal_fuenterec["Spanish"] = array();
	$fieldLabelsglobal_fuenterec["Spanish"]["COD_FUENTE"] = "COD FUENTE";
	$fieldToolTipsglobal_fuenterec["Spanish"]["COD_FUENTE"] = "";
	$placeHoldersglobal_fuenterec["Spanish"]["COD_FUENTE"] = "";
	$fieldLabelsglobal_fuenterec["Spanish"]["NOM_FUENTE"] = "NOM FUENTE";
	$fieldToolTipsglobal_fuenterec["Spanish"]["NOM_FUENTE"] = "";
	$placeHoldersglobal_fuenterec["Spanish"]["NOM_FUENTE"] = "";
	if (count($fieldToolTipsglobal_fuenterec["Spanish"]))
		$tdataglobal_fuenterec[".isUseToolTips"] = true;
}


	$tdataglobal_fuenterec[".NCSearch"] = true;



$tdataglobal_fuenterec[".shortTableName"] = "global_fuenterec";
$tdataglobal_fuenterec[".nSecOptions"] = 0;

$tdataglobal_fuenterec[".mainTableOwnerID"] = "";
$tdataglobal_fuenterec[".entityType"] = 0;

$tdataglobal_fuenterec[".strOriginalTableName"] = "global_fuenterec";

	



$tdataglobal_fuenterec[".showAddInPopup"] = false;

$tdataglobal_fuenterec[".showEditInPopup"] = false;

$tdataglobal_fuenterec[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataglobal_fuenterec[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataglobal_fuenterec[".listAjax"] = false;
//	temporary
$tdataglobal_fuenterec[".listAjax"] = false;

	$tdataglobal_fuenterec[".audit"] = false;

	$tdataglobal_fuenterec[".locking"] = false;


$pages = $tdataglobal_fuenterec[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_fuenterec[".edit"] = true;
	$tdataglobal_fuenterec[".afterEditAction"] = 1;
	$tdataglobal_fuenterec[".closePopupAfterEdit"] = 1;
	$tdataglobal_fuenterec[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_fuenterec[".add"] = true;
$tdataglobal_fuenterec[".afterAddAction"] = 1;
$tdataglobal_fuenterec[".closePopupAfterAdd"] = 1;
$tdataglobal_fuenterec[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_fuenterec[".list"] = true;
}



$tdataglobal_fuenterec[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_fuenterec[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_fuenterec[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_fuenterec[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_fuenterec[".printFriendly"] = true;
}



$tdataglobal_fuenterec[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_fuenterec[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_fuenterec[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_fuenterec[".isUseAjaxSuggest"] = true;

$tdataglobal_fuenterec[".rowHighlite"] = true;



												

$tdataglobal_fuenterec[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_fuenterec[".buttonsAdded"] = false;

$tdataglobal_fuenterec[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_fuenterec[".isUseTimeForSearch"] = false;


$tdataglobal_fuenterec[".badgeColor"] = "4682B4";


$tdataglobal_fuenterec[".allSearchFields"] = array();
$tdataglobal_fuenterec[".filterFields"] = array();
$tdataglobal_fuenterec[".requiredSearchFields"] = array();

$tdataglobal_fuenterec[".googleLikeFields"] = array();
$tdataglobal_fuenterec[".googleLikeFields"][] = "COD_FUENTE";
$tdataglobal_fuenterec[".googleLikeFields"][] = "NOM_FUENTE";



$tdataglobal_fuenterec[".tableType"] = "list";

$tdataglobal_fuenterec[".printerPageOrientation"] = 0;
$tdataglobal_fuenterec[".nPrinterPageScale"] = 100;

$tdataglobal_fuenterec[".nPrinterSplitRecords"] = 40;

$tdataglobal_fuenterec[".geocodingEnabled"] = false;










$tdataglobal_fuenterec[".pageSize"] = 20;

$tdataglobal_fuenterec[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataglobal_fuenterec[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_fuenterec[".orderindexes"] = array();

$tdataglobal_fuenterec[".sqlHead"] = "SELECT COD_FUENTE,  	NOM_FUENTE";
$tdataglobal_fuenterec[".sqlFrom"] = "FROM global_fuenterec";
$tdataglobal_fuenterec[".sqlWhereExpr"] = "";
$tdataglobal_fuenterec[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_fuenterec[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_fuenterec[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_fuenterec[".highlightSearchResults"] = true;

$tableKeysglobal_fuenterec = array();
$tableKeysglobal_fuenterec[] = "COD_FUENTE";
$tdataglobal_fuenterec[".Keys"] = $tableKeysglobal_fuenterec;


$tdataglobal_fuenterec[".hideMobileList"] = array();




//	COD_FUENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "COD_FUENTE";
	$fdata["GoodName"] = "COD_FUENTE";
	$fdata["ownerTable"] = "global_fuenterec";
	$fdata["Label"] = GetFieldLabel("global_fuenterec","COD_FUENTE");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "COD_FUENTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COD_FUENTE";

	
	
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


	$tdataglobal_fuenterec["COD_FUENTE"] = $fdata;
		$tdataglobal_fuenterec[".searchableFields"][] = "COD_FUENTE";
//	NOM_FUENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOM_FUENTE";
	$fdata["GoodName"] = "NOM_FUENTE";
	$fdata["ownerTable"] = "global_fuenterec";
	$fdata["Label"] = GetFieldLabel("global_fuenterec","NOM_FUENTE");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NOM_FUENTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOM_FUENTE";

	
	
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


	$tdataglobal_fuenterec["NOM_FUENTE"] = $fdata;
		$tdataglobal_fuenterec[".searchableFields"][] = "NOM_FUENTE";


$tables_data["global_fuenterec"]=&$tdataglobal_fuenterec;
$field_labels["global_fuenterec"] = &$fieldLabelsglobal_fuenterec;
$fieldToolTips["global_fuenterec"] = &$fieldToolTipsglobal_fuenterec;
$placeHolders["global_fuenterec"] = &$placeHoldersglobal_fuenterec;
$page_titles["global_fuenterec"] = &$pageTitlesglobal_fuenterec;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["global_fuenterec"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["global_fuenterec"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_global_fuenterec()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COD_FUENTE,  	NOM_FUENTE";
$proto0["m_strFrom"] = "FROM global_fuenterec";
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
	"m_strName" => "COD_FUENTE",
	"m_strTable" => "global_fuenterec",
	"m_srcTableName" => "global_fuenterec"
));

$proto6["m_sql"] = "COD_FUENTE";
$proto6["m_srcTableName"] = "global_fuenterec";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NOM_FUENTE",
	"m_strTable" => "global_fuenterec",
	"m_srcTableName" => "global_fuenterec"
));

$proto8["m_sql"] = "NOM_FUENTE";
$proto8["m_srcTableName"] = "global_fuenterec";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "global_fuenterec";
$proto11["m_srcTableName"] = "global_fuenterec";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "COD_FUENTE";
$proto11["m_columns"][] = "NOM_FUENTE";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "global_fuenterec";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "global_fuenterec";
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
$proto0["m_srcTableName"]="global_fuenterec";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_fuenterec = createSqlQuery_global_fuenterec();


	
										;

		

$tdataglobal_fuenterec[".sqlquery"] = $queryData_global_fuenterec;

$tableEvents["global_fuenterec"] = new eventsBase;
$tdataglobal_fuenterec[".hasEvents"] = false;

?>