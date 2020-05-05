<?php



$tdataglobal_estvf = array();
$tdataglobal_estvf[".searchableFields"] = array();
$tdataglobal_estvf[".ShortName"] = "global_estvf";
$tdataglobal_estvf[".OwnerID"] = "";
$tdataglobal_estvf[".OriginalTable"] = "global_estvf";


$tdataglobal_estvf[".pagesByType"] = my_json_decode( "{}" );
$tdataglobal_estvf[".originalPagesByType"] = $tdataglobal_estvf[".pagesByType"];
$tdataglobal_estvf[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataglobal_estvf[".originalPages"] = $tdataglobal_estvf[".pages"];
$tdataglobal_estvf[".defaultPages"] = my_json_decode( "{}" );
$tdataglobal_estvf[".originalDefaultPages"] = $tdataglobal_estvf[".defaultPages"];

//	field labels
$fieldLabelsglobal_estvf = array();
$fieldToolTipsglobal_estvf = array();
$pageTitlesglobal_estvf = array();
$placeHoldersglobal_estvf = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_estvf["Spanish"] = array();
	$fieldToolTipsglobal_estvf["Spanish"] = array();
	$placeHoldersglobal_estvf["Spanish"] = array();
	$pageTitlesglobal_estvf["Spanish"] = array();
	$fieldLabelsglobal_estvf["Spanish"]["COD_ESTVF"] = "COD ESTVF";
	$fieldToolTipsglobal_estvf["Spanish"]["COD_ESTVF"] = "";
	$placeHoldersglobal_estvf["Spanish"]["COD_ESTVF"] = "";
	$fieldLabelsglobal_estvf["Spanish"]["NOM_ESTVF"] = "NOM ESTVF";
	$fieldToolTipsglobal_estvf["Spanish"]["NOM_ESTVF"] = "";
	$placeHoldersglobal_estvf["Spanish"]["NOM_ESTVF"] = "";
	if (count($fieldToolTipsglobal_estvf["Spanish"]))
		$tdataglobal_estvf[".isUseToolTips"] = true;
}


	$tdataglobal_estvf[".NCSearch"] = true;



$tdataglobal_estvf[".shortTableName"] = "global_estvf";
$tdataglobal_estvf[".nSecOptions"] = 0;

$tdataglobal_estvf[".mainTableOwnerID"] = "";
$tdataglobal_estvf[".entityType"] = 0;

$tdataglobal_estvf[".strOriginalTableName"] = "global_estvf";

	



$tdataglobal_estvf[".showAddInPopup"] = false;

$tdataglobal_estvf[".showEditInPopup"] = false;

$tdataglobal_estvf[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataglobal_estvf[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataglobal_estvf[".listAjax"] = false;
//	temporary
$tdataglobal_estvf[".listAjax"] = false;

	$tdataglobal_estvf[".audit"] = false;

	$tdataglobal_estvf[".locking"] = false;


$pages = $tdataglobal_estvf[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_estvf[".edit"] = true;
	$tdataglobal_estvf[".afterEditAction"] = 1;
	$tdataglobal_estvf[".closePopupAfterEdit"] = 1;
	$tdataglobal_estvf[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_estvf[".add"] = true;
$tdataglobal_estvf[".afterAddAction"] = 1;
$tdataglobal_estvf[".closePopupAfterAdd"] = 1;
$tdataglobal_estvf[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_estvf[".list"] = true;
}



$tdataglobal_estvf[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_estvf[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_estvf[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_estvf[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_estvf[".printFriendly"] = true;
}



$tdataglobal_estvf[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_estvf[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_estvf[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_estvf[".isUseAjaxSuggest"] = true;

$tdataglobal_estvf[".rowHighlite"] = true;



												

$tdataglobal_estvf[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_estvf[".buttonsAdded"] = false;

$tdataglobal_estvf[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_estvf[".isUseTimeForSearch"] = false;


$tdataglobal_estvf[".badgeColor"] = "6B8E23";


$tdataglobal_estvf[".allSearchFields"] = array();
$tdataglobal_estvf[".filterFields"] = array();
$tdataglobal_estvf[".requiredSearchFields"] = array();

$tdataglobal_estvf[".googleLikeFields"] = array();
$tdataglobal_estvf[".googleLikeFields"][] = "COD_ESTVF";
$tdataglobal_estvf[".googleLikeFields"][] = "NOM_ESTVF";



$tdataglobal_estvf[".tableType"] = "list";

$tdataglobal_estvf[".printerPageOrientation"] = 0;
$tdataglobal_estvf[".nPrinterPageScale"] = 100;

$tdataglobal_estvf[".nPrinterSplitRecords"] = 40;

$tdataglobal_estvf[".geocodingEnabled"] = false;










$tdataglobal_estvf[".pageSize"] = 20;

$tdataglobal_estvf[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataglobal_estvf[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_estvf[".orderindexes"] = array();

$tdataglobal_estvf[".sqlHead"] = "SELECT COD_ESTVF,  	NOM_ESTVF";
$tdataglobal_estvf[".sqlFrom"] = "FROM global_estvf";
$tdataglobal_estvf[".sqlWhereExpr"] = "";
$tdataglobal_estvf[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_estvf[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_estvf[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_estvf[".highlightSearchResults"] = true;

$tableKeysglobal_estvf = array();
$tableKeysglobal_estvf[] = "COD_ESTVF";
$tdataglobal_estvf[".Keys"] = $tableKeysglobal_estvf;


$tdataglobal_estvf[".hideMobileList"] = array();




//	COD_ESTVF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "COD_ESTVF";
	$fdata["GoodName"] = "COD_ESTVF";
	$fdata["ownerTable"] = "global_estvf";
	$fdata["Label"] = GetFieldLabel("global_estvf","COD_ESTVF");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "COD_ESTVF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COD_ESTVF";

	
	
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


	$tdataglobal_estvf["COD_ESTVF"] = $fdata;
		$tdataglobal_estvf[".searchableFields"][] = "COD_ESTVF";
//	NOM_ESTVF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOM_ESTVF";
	$fdata["GoodName"] = "NOM_ESTVF";
	$fdata["ownerTable"] = "global_estvf";
	$fdata["Label"] = GetFieldLabel("global_estvf","NOM_ESTVF");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NOM_ESTVF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOM_ESTVF";

	
	
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


	$tdataglobal_estvf["NOM_ESTVF"] = $fdata;
		$tdataglobal_estvf[".searchableFields"][] = "NOM_ESTVF";


$tables_data["global_estvf"]=&$tdataglobal_estvf;
$field_labels["global_estvf"] = &$fieldLabelsglobal_estvf;
$fieldToolTips["global_estvf"] = &$fieldToolTipsglobal_estvf;
$placeHolders["global_estvf"] = &$placeHoldersglobal_estvf;
$page_titles["global_estvf"] = &$pageTitlesglobal_estvf;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["global_estvf"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["global_estvf"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_global_estvf()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COD_ESTVF,  	NOM_ESTVF";
$proto0["m_strFrom"] = "FROM global_estvf";
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
	"m_strName" => "COD_ESTVF",
	"m_strTable" => "global_estvf",
	"m_srcTableName" => "global_estvf"
));

$proto6["m_sql"] = "COD_ESTVF";
$proto6["m_srcTableName"] = "global_estvf";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NOM_ESTVF",
	"m_strTable" => "global_estvf",
	"m_srcTableName" => "global_estvf"
));

$proto8["m_sql"] = "NOM_ESTVF";
$proto8["m_srcTableName"] = "global_estvf";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "global_estvf";
$proto11["m_srcTableName"] = "global_estvf";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "COD_ESTVF";
$proto11["m_columns"][] = "NOM_ESTVF";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "global_estvf";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "global_estvf";
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
$proto0["m_srcTableName"]="global_estvf";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_estvf = createSqlQuery_global_estvf();


	
										;

		

$tdataglobal_estvf[".sqlquery"] = $queryData_global_estvf;

$tableEvents["global_estvf"] = new eventsBase;
$tdataglobal_estvf[".hasEvents"] = false;

?>