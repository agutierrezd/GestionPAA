<?php



$tdataq_list_uej = array();
$tdataq_list_uej[".searchableFields"] = array();
$tdataq_list_uej[".ShortName"] = "q_list_uej";
$tdataq_list_uej[".OwnerID"] = "";
$tdataq_list_uej[".OriginalTable"] = "q_list_uej";


$tdataq_list_uej[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataq_list_uej[".originalPagesByType"] = $tdataq_list_uej[".pagesByType"];
$tdataq_list_uej[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataq_list_uej[".originalPages"] = $tdataq_list_uej[".pages"];
$tdataq_list_uej[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataq_list_uej[".originalDefaultPages"] = $tdataq_list_uej[".defaultPages"];

//	field labels
$fieldLabelsq_list_uej = array();
$fieldToolTipsq_list_uej = array();
$pageTitlesq_list_uej = array();
$placeHoldersq_list_uej = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_list_uej["Spanish"] = array();
	$fieldToolTipsq_list_uej["Spanish"] = array();
	$placeHoldersq_list_uej["Spanish"] = array();
	$pageTitlesq_list_uej["Spanish"] = array();
	$fieldLabelsq_list_uej["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTipsq_list_uej["Spanish"]["UEJ"] = "";
	$placeHoldersq_list_uej["Spanish"]["UEJ"] = "";
	$fieldLabelsq_list_uej["Spanish"]["qty_reg"] = "Qty Reg";
	$fieldToolTipsq_list_uej["Spanish"]["qty_reg"] = "";
	$placeHoldersq_list_uej["Spanish"]["qty_reg"] = "";
	$fieldLabelsq_list_uej["Spanish"]["NOMBRE_UEJ"] = "NOMBRE UEJ";
	$fieldToolTipsq_list_uej["Spanish"]["NOMBRE_UEJ"] = "";
	$placeHoldersq_list_uej["Spanish"]["NOMBRE_UEJ"] = "";
	if (count($fieldToolTipsq_list_uej["Spanish"]))
		$tdataq_list_uej[".isUseToolTips"] = true;
}


	$tdataq_list_uej[".NCSearch"] = true;



$tdataq_list_uej[".shortTableName"] = "q_list_uej";
$tdataq_list_uej[".nSecOptions"] = 0;

$tdataq_list_uej[".mainTableOwnerID"] = "";
$tdataq_list_uej[".entityType"] = 0;

$tdataq_list_uej[".strOriginalTableName"] = "q_list_uej";

	



$tdataq_list_uej[".showAddInPopup"] = false;

$tdataq_list_uej[".showEditInPopup"] = false;

$tdataq_list_uej[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataq_list_uej[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataq_list_uej[".listAjax"] = false;
//	temporary
$tdataq_list_uej[".listAjax"] = false;

	$tdataq_list_uej[".audit"] = false;

	$tdataq_list_uej[".locking"] = false;


$pages = $tdataq_list_uej[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_list_uej[".edit"] = true;
	$tdataq_list_uej[".afterEditAction"] = 1;
	$tdataq_list_uej[".closePopupAfterEdit"] = 1;
	$tdataq_list_uej[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_list_uej[".add"] = true;
$tdataq_list_uej[".afterAddAction"] = 1;
$tdataq_list_uej[".closePopupAfterAdd"] = 1;
$tdataq_list_uej[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_list_uej[".list"] = true;
}



$tdataq_list_uej[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_list_uej[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_list_uej[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_list_uej[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_list_uej[".printFriendly"] = true;
}



$tdataq_list_uej[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_list_uej[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_list_uej[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_list_uej[".isUseAjaxSuggest"] = true;

$tdataq_list_uej[".rowHighlite"] = true;



												

$tdataq_list_uej[".ajaxCodeSnippetAdded"] = false;

$tdataq_list_uej[".buttonsAdded"] = false;

$tdataq_list_uej[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_list_uej[".isUseTimeForSearch"] = false;


$tdataq_list_uej[".badgeColor"] = "7B68EE";


$tdataq_list_uej[".allSearchFields"] = array();
$tdataq_list_uej[".filterFields"] = array();
$tdataq_list_uej[".requiredSearchFields"] = array();

$tdataq_list_uej[".googleLikeFields"] = array();
$tdataq_list_uej[".googleLikeFields"][] = "UEJ";
$tdataq_list_uej[".googleLikeFields"][] = "qty_reg";
$tdataq_list_uej[".googleLikeFields"][] = "NOMBRE UEJ";



$tdataq_list_uej[".tableType"] = "list";

$tdataq_list_uej[".printerPageOrientation"] = 0;
$tdataq_list_uej[".nPrinterPageScale"] = 100;

$tdataq_list_uej[".nPrinterSplitRecords"] = 40;

$tdataq_list_uej[".geocodingEnabled"] = false;










$tdataq_list_uej[".pageSize"] = 20;

$tdataq_list_uej[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataq_list_uej[".strOrderBy"] = $tstrOrderBy;

$tdataq_list_uej[".orderindexes"] = array();

$tdataq_list_uej[".sqlHead"] = "SELECT UEJ,  	qty_reg,  	`NOMBRE UEJ`";
$tdataq_list_uej[".sqlFrom"] = "FROM q_list_uej";
$tdataq_list_uej[".sqlWhereExpr"] = "";
$tdataq_list_uej[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_list_uej[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_list_uej[".arrGroupsPerPage"] = $arrGPP;

$tdataq_list_uej[".highlightSearchResults"] = true;

$tableKeysq_list_uej = array();
$tdataq_list_uej[".Keys"] = $tableKeysq_list_uej;


$tdataq_list_uej[".hideMobileList"] = array();




//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "q_list_uej";
	$fdata["Label"] = GetFieldLabel("q_list_uej","UEJ");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "UEJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UEJ";

	
	
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


	$tdataq_list_uej["UEJ"] = $fdata;
		$tdataq_list_uej[".searchableFields"][] = "UEJ";
//	qty_reg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "qty_reg";
	$fdata["GoodName"] = "qty_reg";
	$fdata["ownerTable"] = "q_list_uej";
	$fdata["Label"] = GetFieldLabel("q_list_uej","qty_reg");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "qty_reg";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qty_reg";

	
	
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


	$tdataq_list_uej["qty_reg"] = $fdata;
		$tdataq_list_uej[".searchableFields"][] = "qty_reg";
//	NOMBRE UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NOMBRE UEJ";
	$fdata["GoodName"] = "NOMBRE_UEJ";
	$fdata["ownerTable"] = "q_list_uej";
	$fdata["Label"] = GetFieldLabel("q_list_uej","NOMBRE_UEJ");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NOMBRE UEJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`NOMBRE UEJ`";

	
	
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
			$edata["EditParams"].= " maxlength=511";

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


	$tdataq_list_uej["NOMBRE UEJ"] = $fdata;
		$tdataq_list_uej[".searchableFields"][] = "NOMBRE UEJ";


$tables_data["q_list_uej"]=&$tdataq_list_uej;
$field_labels["q_list_uej"] = &$fieldLabelsq_list_uej;
$fieldToolTips["q_list_uej"] = &$fieldToolTipsq_list_uej;
$placeHolders["q_list_uej"] = &$placeHoldersq_list_uej;
$page_titles["q_list_uej"] = &$pageTitlesq_list_uej;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["q_list_uej"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["q_list_uej"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_q_list_uej()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UEJ,  	qty_reg,  	`NOMBRE UEJ`";
$proto0["m_strFrom"] = "FROM q_list_uej";
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
	"m_strName" => "UEJ",
	"m_strTable" => "q_list_uej",
	"m_srcTableName" => "q_list_uej"
));

$proto6["m_sql"] = "UEJ";
$proto6["m_srcTableName"] = "q_list_uej";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "qty_reg",
	"m_strTable" => "q_list_uej",
	"m_srcTableName" => "q_list_uej"
));

$proto8["m_sql"] = "qty_reg";
$proto8["m_srcTableName"] = "q_list_uej";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE UEJ",
	"m_strTable" => "q_list_uej",
	"m_srcTableName" => "q_list_uej"
));

$proto10["m_sql"] = "`NOMBRE UEJ`";
$proto10["m_srcTableName"] = "q_list_uej";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "q_list_uej";
$proto13["m_srcTableName"] = "q_list_uej";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "UEJ";
$proto13["m_columns"][] = "qty_reg";
$proto13["m_columns"][] = "NOMBRE UEJ";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "q_list_uej";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "q_list_uej";
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
$proto0["m_srcTableName"]="q_list_uej";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_list_uej = createSqlQuery_q_list_uej();


	
										;

			

$tdataq_list_uej[".sqlquery"] = $queryData_q_list_uej;

$tableEvents["q_list_uej"] = new eventsBase;
$tdataq_list_uej[".hasEvents"] = false;

?>