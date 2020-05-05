<?php



$tdataglobal_ubicacion = array();
$tdataglobal_ubicacion[".searchableFields"] = array();
$tdataglobal_ubicacion[".ShortName"] = "global_ubicacion";
$tdataglobal_ubicacion[".OwnerID"] = "";
$tdataglobal_ubicacion[".OriginalTable"] = "global_ubicacion";


$tdataglobal_ubicacion[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdataglobal_ubicacion[".originalPagesByType"] = $tdataglobal_ubicacion[".pagesByType"];
$tdataglobal_ubicacion[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdataglobal_ubicacion[".originalPages"] = $tdataglobal_ubicacion[".pages"];
$tdataglobal_ubicacion[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdataglobal_ubicacion[".originalDefaultPages"] = $tdataglobal_ubicacion[".defaultPages"];

//	field labels
$fieldLabelsglobal_ubicacion = array();
$fieldToolTipsglobal_ubicacion = array();
$pageTitlesglobal_ubicacion = array();
$placeHoldersglobal_ubicacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_ubicacion["Spanish"] = array();
	$fieldToolTipsglobal_ubicacion["Spanish"] = array();
	$placeHoldersglobal_ubicacion["Spanish"] = array();
	$pageTitlesglobal_ubicacion["Spanish"] = array();
	$fieldLabelsglobal_ubicacion["Spanish"]["COD_UBICA"] = "COD UBICA";
	$fieldToolTipsglobal_ubicacion["Spanish"]["COD_UBICA"] = "";
	$placeHoldersglobal_ubicacion["Spanish"]["COD_UBICA"] = "";
	$fieldLabelsglobal_ubicacion["Spanish"]["NOM_UBICA"] = "NOM UBICA";
	$fieldToolTipsglobal_ubicacion["Spanish"]["NOM_UBICA"] = "";
	$placeHoldersglobal_ubicacion["Spanish"]["NOM_UBICA"] = "";
	if (count($fieldToolTipsglobal_ubicacion["Spanish"]))
		$tdataglobal_ubicacion[".isUseToolTips"] = true;
}


	$tdataglobal_ubicacion[".NCSearch"] = true;



$tdataglobal_ubicacion[".shortTableName"] = "global_ubicacion";
$tdataglobal_ubicacion[".nSecOptions"] = 0;

$tdataglobal_ubicacion[".mainTableOwnerID"] = "";
$tdataglobal_ubicacion[".entityType"] = 0;

$tdataglobal_ubicacion[".strOriginalTableName"] = "global_ubicacion";

	



$tdataglobal_ubicacion[".showAddInPopup"] = false;

$tdataglobal_ubicacion[".showEditInPopup"] = false;

$tdataglobal_ubicacion[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataglobal_ubicacion[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataglobal_ubicacion[".listAjax"] = false;
//	temporary
$tdataglobal_ubicacion[".listAjax"] = false;

	$tdataglobal_ubicacion[".audit"] = false;

	$tdataglobal_ubicacion[".locking"] = false;


$pages = $tdataglobal_ubicacion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_ubicacion[".edit"] = true;
	$tdataglobal_ubicacion[".afterEditAction"] = 1;
	$tdataglobal_ubicacion[".closePopupAfterEdit"] = 1;
	$tdataglobal_ubicacion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_ubicacion[".add"] = true;
$tdataglobal_ubicacion[".afterAddAction"] = 1;
$tdataglobal_ubicacion[".closePopupAfterAdd"] = 1;
$tdataglobal_ubicacion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_ubicacion[".list"] = true;
}



$tdataglobal_ubicacion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_ubicacion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_ubicacion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_ubicacion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_ubicacion[".printFriendly"] = true;
}



$tdataglobal_ubicacion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_ubicacion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_ubicacion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_ubicacion[".isUseAjaxSuggest"] = true;

$tdataglobal_ubicacion[".rowHighlite"] = true;



												

$tdataglobal_ubicacion[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_ubicacion[".buttonsAdded"] = false;

$tdataglobal_ubicacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_ubicacion[".isUseTimeForSearch"] = false;


$tdataglobal_ubicacion[".badgeColor"] = "7B68EE";


$tdataglobal_ubicacion[".allSearchFields"] = array();
$tdataglobal_ubicacion[".filterFields"] = array();
$tdataglobal_ubicacion[".requiredSearchFields"] = array();

$tdataglobal_ubicacion[".googleLikeFields"] = array();
$tdataglobal_ubicacion[".googleLikeFields"][] = "COD_UBICA";
$tdataglobal_ubicacion[".googleLikeFields"][] = "NOM_UBICA";



$tdataglobal_ubicacion[".tableType"] = "list";

$tdataglobal_ubicacion[".printerPageOrientation"] = 0;
$tdataglobal_ubicacion[".nPrinterPageScale"] = 100;

$tdataglobal_ubicacion[".nPrinterSplitRecords"] = 40;

$tdataglobal_ubicacion[".geocodingEnabled"] = false;










$tdataglobal_ubicacion[".pageSize"] = 20;

$tdataglobal_ubicacion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataglobal_ubicacion[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_ubicacion[".orderindexes"] = array();

$tdataglobal_ubicacion[".sqlHead"] = "SELECT COD_UBICA,  	NOM_UBICA";
$tdataglobal_ubicacion[".sqlFrom"] = "FROM global_ubicacion";
$tdataglobal_ubicacion[".sqlWhereExpr"] = "";
$tdataglobal_ubicacion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_ubicacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_ubicacion[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_ubicacion[".highlightSearchResults"] = true;

$tableKeysglobal_ubicacion = array();
$tdataglobal_ubicacion[".Keys"] = $tableKeysglobal_ubicacion;


$tdataglobal_ubicacion[".hideMobileList"] = array();




//	COD_UBICA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "COD_UBICA";
	$fdata["GoodName"] = "COD_UBICA";
	$fdata["ownerTable"] = "global_ubicacion";
	$fdata["Label"] = GetFieldLabel("global_ubicacion","COD_UBICA");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "COD_UBICA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COD_UBICA";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdataglobal_ubicacion["COD_UBICA"] = $fdata;
		$tdataglobal_ubicacion[".searchableFields"][] = "COD_UBICA";
//	NOM_UBICA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOM_UBICA";
	$fdata["GoodName"] = "NOM_UBICA";
	$fdata["ownerTable"] = "global_ubicacion";
	$fdata["Label"] = GetFieldLabel("global_ubicacion","NOM_UBICA");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NOM_UBICA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOM_UBICA";

	
	
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


	$tdataglobal_ubicacion["NOM_UBICA"] = $fdata;
		$tdataglobal_ubicacion[".searchableFields"][] = "NOM_UBICA";


$tables_data["global_ubicacion"]=&$tdataglobal_ubicacion;
$field_labels["global_ubicacion"] = &$fieldLabelsglobal_ubicacion;
$fieldToolTips["global_ubicacion"] = &$fieldToolTipsglobal_ubicacion;
$placeHolders["global_ubicacion"] = &$placeHoldersglobal_ubicacion;
$page_titles["global_ubicacion"] = &$pageTitlesglobal_ubicacion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["global_ubicacion"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["global_ubicacion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_global_ubicacion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COD_UBICA,  	NOM_UBICA";
$proto0["m_strFrom"] = "FROM global_ubicacion";
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
	"m_strName" => "COD_UBICA",
	"m_strTable" => "global_ubicacion",
	"m_srcTableName" => "global_ubicacion"
));

$proto6["m_sql"] = "COD_UBICA";
$proto6["m_srcTableName"] = "global_ubicacion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NOM_UBICA",
	"m_strTable" => "global_ubicacion",
	"m_srcTableName" => "global_ubicacion"
));

$proto8["m_sql"] = "NOM_UBICA";
$proto8["m_srcTableName"] = "global_ubicacion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "global_ubicacion";
$proto11["m_srcTableName"] = "global_ubicacion";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "COD_UBICA";
$proto11["m_columns"][] = "NOM_UBICA";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "global_ubicacion";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "global_ubicacion";
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
$proto0["m_srcTableName"]="global_ubicacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_ubicacion = createSqlQuery_global_ubicacion();


	
										;

		

$tdataglobal_ubicacion[".sqlquery"] = $queryData_global_ubicacion;

$tableEvents["global_ubicacion"] = new eventsBase;
$tdataglobal_ubicacion[".hasEvents"] = false;

?>