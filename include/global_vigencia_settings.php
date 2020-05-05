<?php



$tdataglobal_vigencia = array();
$tdataglobal_vigencia[".searchableFields"] = array();
$tdataglobal_vigencia[".ShortName"] = "global_vigencia";
$tdataglobal_vigencia[".OwnerID"] = "";
$tdataglobal_vigencia[".OriginalTable"] = "global_vigencia";


$tdataglobal_vigencia[".pagesByType"] = my_json_decode( "{}" );
$tdataglobal_vigencia[".originalPagesByType"] = $tdataglobal_vigencia[".pagesByType"];
$tdataglobal_vigencia[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataglobal_vigencia[".originalPages"] = $tdataglobal_vigencia[".pages"];
$tdataglobal_vigencia[".defaultPages"] = my_json_decode( "{}" );
$tdataglobal_vigencia[".originalDefaultPages"] = $tdataglobal_vigencia[".defaultPages"];

//	field labels
$fieldLabelsglobal_vigencia = array();
$fieldToolTipsglobal_vigencia = array();
$pageTitlesglobal_vigencia = array();
$placeHoldersglobal_vigencia = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_vigencia["Spanish"] = array();
	$fieldToolTipsglobal_vigencia["Spanish"] = array();
	$placeHoldersglobal_vigencia["Spanish"] = array();
	$pageTitlesglobal_vigencia["Spanish"] = array();
	$fieldLabelsglobal_vigencia["Spanish"]["vigencia_id"] = "Vigencia Id";
	$fieldToolTipsglobal_vigencia["Spanish"]["vigencia_id"] = "";
	$placeHoldersglobal_vigencia["Spanish"]["vigencia_id"] = "";
	$fieldLabelsglobal_vigencia["Spanish"]["vigencia"] = "Vigencia";
	$fieldToolTipsglobal_vigencia["Spanish"]["vigencia"] = "";
	$placeHoldersglobal_vigencia["Spanish"]["vigencia"] = "";
	$fieldLabelsglobal_vigencia["Spanish"]["vigencia_st"] = "Vigencia St";
	$fieldToolTipsglobal_vigencia["Spanish"]["vigencia_st"] = "";
	$placeHoldersglobal_vigencia["Spanish"]["vigencia_st"] = "";
	if (count($fieldToolTipsglobal_vigencia["Spanish"]))
		$tdataglobal_vigencia[".isUseToolTips"] = true;
}


	$tdataglobal_vigencia[".NCSearch"] = true;



$tdataglobal_vigencia[".shortTableName"] = "global_vigencia";
$tdataglobal_vigencia[".nSecOptions"] = 0;

$tdataglobal_vigencia[".mainTableOwnerID"] = "";
$tdataglobal_vigencia[".entityType"] = 0;

$tdataglobal_vigencia[".strOriginalTableName"] = "global_vigencia";

	



$tdataglobal_vigencia[".showAddInPopup"] = false;

$tdataglobal_vigencia[".showEditInPopup"] = false;

$tdataglobal_vigencia[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataglobal_vigencia[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataglobal_vigencia[".listAjax"] = false;
//	temporary
$tdataglobal_vigencia[".listAjax"] = false;

	$tdataglobal_vigencia[".audit"] = false;

	$tdataglobal_vigencia[".locking"] = false;


$pages = $tdataglobal_vigencia[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_vigencia[".edit"] = true;
	$tdataglobal_vigencia[".afterEditAction"] = 1;
	$tdataglobal_vigencia[".closePopupAfterEdit"] = 1;
	$tdataglobal_vigencia[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_vigencia[".add"] = true;
$tdataglobal_vigencia[".afterAddAction"] = 1;
$tdataglobal_vigencia[".closePopupAfterAdd"] = 1;
$tdataglobal_vigencia[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_vigencia[".list"] = true;
}



$tdataglobal_vigencia[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_vigencia[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_vigencia[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_vigencia[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_vigencia[".printFriendly"] = true;
}



$tdataglobal_vigencia[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_vigencia[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_vigencia[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_vigencia[".isUseAjaxSuggest"] = true;

$tdataglobal_vigencia[".rowHighlite"] = true;



												

$tdataglobal_vigencia[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_vigencia[".buttonsAdded"] = false;

$tdataglobal_vigencia[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_vigencia[".isUseTimeForSearch"] = false;


$tdataglobal_vigencia[".badgeColor"] = "2F4F4F";


$tdataglobal_vigencia[".allSearchFields"] = array();
$tdataglobal_vigencia[".filterFields"] = array();
$tdataglobal_vigencia[".requiredSearchFields"] = array();

$tdataglobal_vigencia[".googleLikeFields"] = array();
$tdataglobal_vigencia[".googleLikeFields"][] = "vigencia_id";
$tdataglobal_vigencia[".googleLikeFields"][] = "vigencia";
$tdataglobal_vigencia[".googleLikeFields"][] = "vigencia_st";



$tdataglobal_vigencia[".tableType"] = "list";

$tdataglobal_vigencia[".printerPageOrientation"] = 0;
$tdataglobal_vigencia[".nPrinterPageScale"] = 100;

$tdataglobal_vigencia[".nPrinterSplitRecords"] = 40;

$tdataglobal_vigencia[".geocodingEnabled"] = false;










$tdataglobal_vigencia[".pageSize"] = 20;

$tdataglobal_vigencia[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataglobal_vigencia[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_vigencia[".orderindexes"] = array();

$tdataglobal_vigencia[".sqlHead"] = "SELECT vigencia_id,  	vigencia,  	vigencia_st";
$tdataglobal_vigencia[".sqlFrom"] = "FROM global_vigencia";
$tdataglobal_vigencia[".sqlWhereExpr"] = "";
$tdataglobal_vigencia[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_vigencia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_vigencia[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_vigencia[".highlightSearchResults"] = true;

$tableKeysglobal_vigencia = array();
$tableKeysglobal_vigencia[] = "vigencia_id";
$tdataglobal_vigencia[".Keys"] = $tableKeysglobal_vigencia;


$tdataglobal_vigencia[".hideMobileList"] = array();




//	vigencia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vigencia_id";
	$fdata["GoodName"] = "vigencia_id";
	$fdata["ownerTable"] = "global_vigencia";
	$fdata["Label"] = GetFieldLabel("global_vigencia","vigencia_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "vigencia_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia_id";

	
	
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


	$tdataglobal_vigencia["vigencia_id"] = $fdata;
		$tdataglobal_vigencia[".searchableFields"][] = "vigencia_id";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "global_vigencia";
	$fdata["Label"] = GetFieldLabel("global_vigencia","vigencia");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "vigencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia";

	
	
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


	$tdataglobal_vigencia["vigencia"] = $fdata;
		$tdataglobal_vigencia[".searchableFields"][] = "vigencia";
//	vigencia_st
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "vigencia_st";
	$fdata["GoodName"] = "vigencia_st";
	$fdata["ownerTable"] = "global_vigencia";
	$fdata["Label"] = GetFieldLabel("global_vigencia","vigencia_st");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "vigencia_st";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia_st";

	
	
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


	$tdataglobal_vigencia["vigencia_st"] = $fdata;
		$tdataglobal_vigencia[".searchableFields"][] = "vigencia_st";


$tables_data["global_vigencia"]=&$tdataglobal_vigencia;
$field_labels["global_vigencia"] = &$fieldLabelsglobal_vigencia;
$fieldToolTips["global_vigencia"] = &$fieldToolTipsglobal_vigencia;
$placeHolders["global_vigencia"] = &$placeHoldersglobal_vigencia;
$page_titles["global_vigencia"] = &$pageTitlesglobal_vigencia;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["global_vigencia"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["global_vigencia"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_global_vigencia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vigencia_id,  	vigencia,  	vigencia_st";
$proto0["m_strFrom"] = "FROM global_vigencia";
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
	"m_strName" => "vigencia_id",
	"m_strTable" => "global_vigencia",
	"m_srcTableName" => "global_vigencia"
));

$proto6["m_sql"] = "vigencia_id";
$proto6["m_srcTableName"] = "global_vigencia";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "global_vigencia",
	"m_srcTableName" => "global_vigencia"
));

$proto8["m_sql"] = "vigencia";
$proto8["m_srcTableName"] = "global_vigencia";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia_st",
	"m_strTable" => "global_vigencia",
	"m_srcTableName" => "global_vigencia"
));

$proto10["m_sql"] = "vigencia_st";
$proto10["m_srcTableName"] = "global_vigencia";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "global_vigencia";
$proto13["m_srcTableName"] = "global_vigencia";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "vigencia_id";
$proto13["m_columns"][] = "vigencia";
$proto13["m_columns"][] = "vigencia_st";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "global_vigencia";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "global_vigencia";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="global_vigencia";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_vigencia = createSqlQuery_global_vigencia();


	
										;

			

$tdataglobal_vigencia[".sqlquery"] = $queryData_global_vigencia;

$tableEvents["global_vigencia"] = new eventsBase;
$tdataglobal_vigencia[".hasEvents"] = false;

?>