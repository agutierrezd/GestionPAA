<?php



$tdataglobal_modalidad = array();
$tdataglobal_modalidad[".searchableFields"] = array();
$tdataglobal_modalidad[".ShortName"] = "global_modalidad";
$tdataglobal_modalidad[".OwnerID"] = "";
$tdataglobal_modalidad[".OriginalTable"] = "global_modalidad";


$tdataglobal_modalidad[".pagesByType"] = my_json_decode( "{}" );
$tdataglobal_modalidad[".originalPagesByType"] = $tdataglobal_modalidad[".pagesByType"];
$tdataglobal_modalidad[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataglobal_modalidad[".originalPages"] = $tdataglobal_modalidad[".pages"];
$tdataglobal_modalidad[".defaultPages"] = my_json_decode( "{}" );
$tdataglobal_modalidad[".originalDefaultPages"] = $tdataglobal_modalidad[".defaultPages"];

//	field labels
$fieldLabelsglobal_modalidad = array();
$fieldToolTipsglobal_modalidad = array();
$pageTitlesglobal_modalidad = array();
$placeHoldersglobal_modalidad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_modalidad["Spanish"] = array();
	$fieldToolTipsglobal_modalidad["Spanish"] = array();
	$placeHoldersglobal_modalidad["Spanish"] = array();
	$pageTitlesglobal_modalidad["Spanish"] = array();
	$fieldLabelsglobal_modalidad["Spanish"]["COD_MODALIDAD"] = "COD MODALIDAD";
	$fieldToolTipsglobal_modalidad["Spanish"]["COD_MODALIDAD"] = "";
	$placeHoldersglobal_modalidad["Spanish"]["COD_MODALIDAD"] = "";
	$fieldLabelsglobal_modalidad["Spanish"]["NOM_MODALIDAD"] = "NOM MODALIDAD";
	$fieldToolTipsglobal_modalidad["Spanish"]["NOM_MODALIDAD"] = "";
	$placeHoldersglobal_modalidad["Spanish"]["NOM_MODALIDAD"] = "";
	$fieldLabelsglobal_modalidad["Spanish"]["NOM_STORM"] = "NOM STORM";
	$fieldToolTipsglobal_modalidad["Spanish"]["NOM_STORM"] = "";
	$placeHoldersglobal_modalidad["Spanish"]["NOM_STORM"] = "";
	$fieldLabelsglobal_modalidad["Spanish"]["COD_STORM"] = "COD STORM";
	$fieldToolTipsglobal_modalidad["Spanish"]["COD_STORM"] = "";
	$placeHoldersglobal_modalidad["Spanish"]["COD_STORM"] = "";
	if (count($fieldToolTipsglobal_modalidad["Spanish"]))
		$tdataglobal_modalidad[".isUseToolTips"] = true;
}


	$tdataglobal_modalidad[".NCSearch"] = true;



$tdataglobal_modalidad[".shortTableName"] = "global_modalidad";
$tdataglobal_modalidad[".nSecOptions"] = 0;

$tdataglobal_modalidad[".mainTableOwnerID"] = "";
$tdataglobal_modalidad[".entityType"] = 0;

$tdataglobal_modalidad[".strOriginalTableName"] = "global_modalidad";

	



$tdataglobal_modalidad[".showAddInPopup"] = false;

$tdataglobal_modalidad[".showEditInPopup"] = false;

$tdataglobal_modalidad[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataglobal_modalidad[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataglobal_modalidad[".listAjax"] = false;
//	temporary
$tdataglobal_modalidad[".listAjax"] = false;

	$tdataglobal_modalidad[".audit"] = false;

	$tdataglobal_modalidad[".locking"] = false;


$pages = $tdataglobal_modalidad[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_modalidad[".edit"] = true;
	$tdataglobal_modalidad[".afterEditAction"] = 1;
	$tdataglobal_modalidad[".closePopupAfterEdit"] = 1;
	$tdataglobal_modalidad[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_modalidad[".add"] = true;
$tdataglobal_modalidad[".afterAddAction"] = 1;
$tdataglobal_modalidad[".closePopupAfterAdd"] = 1;
$tdataglobal_modalidad[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_modalidad[".list"] = true;
}



$tdataglobal_modalidad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_modalidad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_modalidad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_modalidad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_modalidad[".printFriendly"] = true;
}



$tdataglobal_modalidad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_modalidad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_modalidad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_modalidad[".isUseAjaxSuggest"] = true;

$tdataglobal_modalidad[".rowHighlite"] = true;



												

$tdataglobal_modalidad[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_modalidad[".buttonsAdded"] = false;

$tdataglobal_modalidad[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_modalidad[".isUseTimeForSearch"] = false;


$tdataglobal_modalidad[".badgeColor"] = "EDCA00";


$tdataglobal_modalidad[".allSearchFields"] = array();
$tdataglobal_modalidad[".filterFields"] = array();
$tdataglobal_modalidad[".requiredSearchFields"] = array();

$tdataglobal_modalidad[".googleLikeFields"] = array();
$tdataglobal_modalidad[".googleLikeFields"][] = "COD_MODALIDAD";
$tdataglobal_modalidad[".googleLikeFields"][] = "NOM_MODALIDAD";
$tdataglobal_modalidad[".googleLikeFields"][] = "NOM_STORM";
$tdataglobal_modalidad[".googleLikeFields"][] = "COD_STORM";



$tdataglobal_modalidad[".tableType"] = "list";

$tdataglobal_modalidad[".printerPageOrientation"] = 0;
$tdataglobal_modalidad[".nPrinterPageScale"] = 100;

$tdataglobal_modalidad[".nPrinterSplitRecords"] = 40;

$tdataglobal_modalidad[".geocodingEnabled"] = false;










$tdataglobal_modalidad[".pageSize"] = 20;

$tdataglobal_modalidad[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataglobal_modalidad[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_modalidad[".orderindexes"] = array();

$tdataglobal_modalidad[".sqlHead"] = "SELECT COD_MODALIDAD,  	NOM_MODALIDAD,  	NOM_STORM,  	COD_STORM";
$tdataglobal_modalidad[".sqlFrom"] = "FROM global_modalidad";
$tdataglobal_modalidad[".sqlWhereExpr"] = "";
$tdataglobal_modalidad[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_modalidad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_modalidad[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_modalidad[".highlightSearchResults"] = true;

$tableKeysglobal_modalidad = array();
$tableKeysglobal_modalidad[] = "COD_MODALIDAD";
$tdataglobal_modalidad[".Keys"] = $tableKeysglobal_modalidad;


$tdataglobal_modalidad[".hideMobileList"] = array();




//	COD_MODALIDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "COD_MODALIDAD";
	$fdata["GoodName"] = "COD_MODALIDAD";
	$fdata["ownerTable"] = "global_modalidad";
	$fdata["Label"] = GetFieldLabel("global_modalidad","COD_MODALIDAD");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "COD_MODALIDAD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COD_MODALIDAD";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdataglobal_modalidad["COD_MODALIDAD"] = $fdata;
		$tdataglobal_modalidad[".searchableFields"][] = "COD_MODALIDAD";
//	NOM_MODALIDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOM_MODALIDAD";
	$fdata["GoodName"] = "NOM_MODALIDAD";
	$fdata["ownerTable"] = "global_modalidad";
	$fdata["Label"] = GetFieldLabel("global_modalidad","NOM_MODALIDAD");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NOM_MODALIDAD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOM_MODALIDAD";

	
	
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


	$tdataglobal_modalidad["NOM_MODALIDAD"] = $fdata;
		$tdataglobal_modalidad[".searchableFields"][] = "NOM_MODALIDAD";
//	NOM_STORM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NOM_STORM";
	$fdata["GoodName"] = "NOM_STORM";
	$fdata["ownerTable"] = "global_modalidad";
	$fdata["Label"] = GetFieldLabel("global_modalidad","NOM_STORM");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NOM_STORM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOM_STORM";

	
	
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


	$tdataglobal_modalidad["NOM_STORM"] = $fdata;
		$tdataglobal_modalidad[".searchableFields"][] = "NOM_STORM";
//	COD_STORM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "COD_STORM";
	$fdata["GoodName"] = "COD_STORM";
	$fdata["ownerTable"] = "global_modalidad";
	$fdata["Label"] = GetFieldLabel("global_modalidad","COD_STORM");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "COD_STORM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COD_STORM";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataglobal_modalidad["COD_STORM"] = $fdata;
		$tdataglobal_modalidad[".searchableFields"][] = "COD_STORM";


$tables_data["global_modalidad"]=&$tdataglobal_modalidad;
$field_labels["global_modalidad"] = &$fieldLabelsglobal_modalidad;
$fieldToolTips["global_modalidad"] = &$fieldToolTipsglobal_modalidad;
$placeHolders["global_modalidad"] = &$placeHoldersglobal_modalidad;
$page_titles["global_modalidad"] = &$pageTitlesglobal_modalidad;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["global_modalidad"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["global_modalidad"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_global_modalidad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COD_MODALIDAD,  	NOM_MODALIDAD,  	NOM_STORM,  	COD_STORM";
$proto0["m_strFrom"] = "FROM global_modalidad";
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
	"m_strName" => "COD_MODALIDAD",
	"m_strTable" => "global_modalidad",
	"m_srcTableName" => "global_modalidad"
));

$proto6["m_sql"] = "COD_MODALIDAD";
$proto6["m_srcTableName"] = "global_modalidad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NOM_MODALIDAD",
	"m_strTable" => "global_modalidad",
	"m_srcTableName" => "global_modalidad"
));

$proto8["m_sql"] = "NOM_MODALIDAD";
$proto8["m_srcTableName"] = "global_modalidad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NOM_STORM",
	"m_strTable" => "global_modalidad",
	"m_srcTableName" => "global_modalidad"
));

$proto10["m_sql"] = "NOM_STORM";
$proto10["m_srcTableName"] = "global_modalidad";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "COD_STORM",
	"m_strTable" => "global_modalidad",
	"m_srcTableName" => "global_modalidad"
));

$proto12["m_sql"] = "COD_STORM";
$proto12["m_srcTableName"] = "global_modalidad";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "global_modalidad";
$proto15["m_srcTableName"] = "global_modalidad";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "COD_MODALIDAD";
$proto15["m_columns"][] = "NOM_MODALIDAD";
$proto15["m_columns"][] = "NOM_STORM";
$proto15["m_columns"][] = "COD_STORM";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "global_modalidad";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "global_modalidad";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="global_modalidad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_modalidad = createSqlQuery_global_modalidad();


	
										;

				

$tdataglobal_modalidad[".sqlquery"] = $queryData_global_modalidad;

$tableEvents["global_modalidad"] = new eventsBase;
$tdataglobal_modalidad[".hasEvents"] = false;

?>