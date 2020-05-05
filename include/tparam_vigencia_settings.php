<?php



$tdatatparam_vigencia = array();
$tdatatparam_vigencia[".searchableFields"] = array();
$tdatatparam_vigencia[".ShortName"] = "tparam_vigencia";
$tdatatparam_vigencia[".OwnerID"] = "";
$tdatatparam_vigencia[".OriginalTable"] = "tparam_vigencia";


$tdatatparam_vigencia[".pagesByType"] = my_json_decode( "{}" );
$tdatatparam_vigencia[".originalPagesByType"] = $tdatatparam_vigencia[".pagesByType"];
$tdatatparam_vigencia[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatparam_vigencia[".originalPages"] = $tdatatparam_vigencia[".pages"];
$tdatatparam_vigencia[".defaultPages"] = my_json_decode( "{}" );
$tdatatparam_vigencia[".originalDefaultPages"] = $tdatatparam_vigencia[".defaultPages"];

//	field labels
$fieldLabelstparam_vigencia = array();
$fieldToolTipstparam_vigencia = array();
$pageTitlestparam_vigencia = array();
$placeHolderstparam_vigencia = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_vigencia["Spanish"] = array();
	$fieldToolTipstparam_vigencia["Spanish"] = array();
	$placeHolderstparam_vigencia["Spanish"] = array();
	$pageTitlestparam_vigencia["Spanish"] = array();
	$fieldLabelstparam_vigencia["Spanish"]["anio_id"] = "Anio Id";
	$fieldToolTipstparam_vigencia["Spanish"]["anio_id"] = "";
	$placeHolderstparam_vigencia["Spanish"]["anio_id"] = "";
	$fieldLabelstparam_vigencia["Spanish"]["vigencia"] = "Vigencia";
	$fieldToolTipstparam_vigencia["Spanish"]["vigencia"] = "";
	$placeHolderstparam_vigencia["Spanish"]["vigencia"] = "";
	$fieldLabelstparam_vigencia["Spanish"]["estado"] = "Estado";
	$fieldToolTipstparam_vigencia["Spanish"]["estado"] = "";
	$placeHolderstparam_vigencia["Spanish"]["estado"] = "";
	if (count($fieldToolTipstparam_vigencia["Spanish"]))
		$tdatatparam_vigencia[".isUseToolTips"] = true;
}


	$tdatatparam_vigencia[".NCSearch"] = true;



$tdatatparam_vigencia[".shortTableName"] = "tparam_vigencia";
$tdatatparam_vigencia[".nSecOptions"] = 0;

$tdatatparam_vigencia[".mainTableOwnerID"] = "";
$tdatatparam_vigencia[".entityType"] = 0;

$tdatatparam_vigencia[".strOriginalTableName"] = "tparam_vigencia";

	



$tdatatparam_vigencia[".showAddInPopup"] = false;

$tdatatparam_vigencia[".showEditInPopup"] = false;

$tdatatparam_vigencia[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatparam_vigencia[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatparam_vigencia[".listAjax"] = false;
//	temporary
$tdatatparam_vigencia[".listAjax"] = false;

	$tdatatparam_vigencia[".audit"] = false;

	$tdatatparam_vigencia[".locking"] = false;


$pages = $tdatatparam_vigencia[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_vigencia[".edit"] = true;
	$tdatatparam_vigencia[".afterEditAction"] = 1;
	$tdatatparam_vigencia[".closePopupAfterEdit"] = 1;
	$tdatatparam_vigencia[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_vigencia[".add"] = true;
$tdatatparam_vigencia[".afterAddAction"] = 1;
$tdatatparam_vigencia[".closePopupAfterAdd"] = 1;
$tdatatparam_vigencia[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_vigencia[".list"] = true;
}



$tdatatparam_vigencia[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_vigencia[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_vigencia[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_vigencia[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_vigencia[".printFriendly"] = true;
}



$tdatatparam_vigencia[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_vigencia[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_vigencia[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_vigencia[".isUseAjaxSuggest"] = true;

$tdatatparam_vigencia[".rowHighlite"] = true;



												

$tdatatparam_vigencia[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_vigencia[".buttonsAdded"] = false;

$tdatatparam_vigencia[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_vigencia[".isUseTimeForSearch"] = false;


$tdatatparam_vigencia[".badgeColor"] = "DB7093";


$tdatatparam_vigencia[".allSearchFields"] = array();
$tdatatparam_vigencia[".filterFields"] = array();
$tdatatparam_vigencia[".requiredSearchFields"] = array();

$tdatatparam_vigencia[".googleLikeFields"] = array();
$tdatatparam_vigencia[".googleLikeFields"][] = "anio_id";
$tdatatparam_vigencia[".googleLikeFields"][] = "vigencia";
$tdatatparam_vigencia[".googleLikeFields"][] = "estado";



$tdatatparam_vigencia[".tableType"] = "list";

$tdatatparam_vigencia[".printerPageOrientation"] = 0;
$tdatatparam_vigencia[".nPrinterPageScale"] = 100;

$tdatatparam_vigencia[".nPrinterSplitRecords"] = 40;

$tdatatparam_vigencia[".geocodingEnabled"] = false;










$tdatatparam_vigencia[".pageSize"] = 20;

$tdatatparam_vigencia[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatparam_vigencia[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_vigencia[".orderindexes"] = array();

$tdatatparam_vigencia[".sqlHead"] = "SELECT anio_id,  	vigencia,  	estado";
$tdatatparam_vigencia[".sqlFrom"] = "FROM tparam_vigencia";
$tdatatparam_vigencia[".sqlWhereExpr"] = "";
$tdatatparam_vigencia[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_vigencia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_vigencia[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_vigencia[".highlightSearchResults"] = true;

$tableKeystparam_vigencia = array();
$tableKeystparam_vigencia[] = "anio_id";
$tdatatparam_vigencia[".Keys"] = $tableKeystparam_vigencia;


$tdatatparam_vigencia[".hideMobileList"] = array();




//	anio_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "anio_id";
	$fdata["GoodName"] = "anio_id";
	$fdata["ownerTable"] = "tparam_vigencia";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia","anio_id");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "anio_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anio_id";

	
	
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


	$tdatatparam_vigencia["anio_id"] = $fdata;
		$tdatatparam_vigencia[".searchableFields"][] = "anio_id";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "tparam_vigencia";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia","vigencia");
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


	$tdatatparam_vigencia["vigencia"] = $fdata;
		$tdatatparam_vigencia[".searchableFields"][] = "vigencia";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "tparam_vigencia";
	$fdata["Label"] = GetFieldLabel("tparam_vigencia","estado");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";

	
	
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


	$tdatatparam_vigencia["estado"] = $fdata;
		$tdatatparam_vigencia[".searchableFields"][] = "estado";


$tables_data["tparam_vigencia"]=&$tdatatparam_vigencia;
$field_labels["tparam_vigencia"] = &$fieldLabelstparam_vigencia;
$fieldToolTips["tparam_vigencia"] = &$fieldToolTipstparam_vigencia;
$placeHolders["tparam_vigencia"] = &$placeHolderstparam_vigencia;
$page_titles["tparam_vigencia"] = &$pageTitlestparam_vigencia;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tparam_vigencia"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tparam_vigencia"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_tparam_vigencia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "anio_id,  	vigencia,  	estado";
$proto0["m_strFrom"] = "FROM tparam_vigencia";
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
	"m_strName" => "anio_id",
	"m_strTable" => "tparam_vigencia",
	"m_srcTableName" => "tparam_vigencia"
));

$proto6["m_sql"] = "anio_id";
$proto6["m_srcTableName"] = "tparam_vigencia";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "tparam_vigencia",
	"m_srcTableName" => "tparam_vigencia"
));

$proto8["m_sql"] = "vigencia";
$proto8["m_srcTableName"] = "tparam_vigencia";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "tparam_vigencia",
	"m_srcTableName" => "tparam_vigencia"
));

$proto10["m_sql"] = "estado";
$proto10["m_srcTableName"] = "tparam_vigencia";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tparam_vigencia";
$proto13["m_srcTableName"] = "tparam_vigencia";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "anio_id";
$proto13["m_columns"][] = "vigencia";
$proto13["m_columns"][] = "estado";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "tparam_vigencia";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tparam_vigencia";
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
$proto0["m_srcTableName"]="tparam_vigencia";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_vigencia = createSqlQuery_tparam_vigencia();


	
										;

			

$tdatatparam_vigencia[".sqlquery"] = $queryData_tparam_vigencia;

$tableEvents["tparam_vigencia"] = new eventsBase;
$tdatatparam_vigencia[".hasEvents"] = false;

?>