<?php



$tdataglobal_meses = array();
$tdataglobal_meses[".searchableFields"] = array();
$tdataglobal_meses[".ShortName"] = "global_meses";
$tdataglobal_meses[".OwnerID"] = "";
$tdataglobal_meses[".OriginalTable"] = "global_meses";


$tdataglobal_meses[".pagesByType"] = my_json_decode( "{}" );
$tdataglobal_meses[".originalPagesByType"] = $tdataglobal_meses[".pagesByType"];
$tdataglobal_meses[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataglobal_meses[".originalPages"] = $tdataglobal_meses[".pages"];
$tdataglobal_meses[".defaultPages"] = my_json_decode( "{}" );
$tdataglobal_meses[".originalDefaultPages"] = $tdataglobal_meses[".defaultPages"];

//	field labels
$fieldLabelsglobal_meses = array();
$fieldToolTipsglobal_meses = array();
$pageTitlesglobal_meses = array();
$placeHoldersglobal_meses = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_meses["Spanish"] = array();
	$fieldToolTipsglobal_meses["Spanish"] = array();
	$placeHoldersglobal_meses["Spanish"] = array();
	$pageTitlesglobal_meses["Spanish"] = array();
	$fieldLabelsglobal_meses["Spanish"]["COD_MES"] = "COD MES";
	$fieldToolTipsglobal_meses["Spanish"]["COD_MES"] = "";
	$placeHoldersglobal_meses["Spanish"]["COD_MES"] = "";
	$fieldLabelsglobal_meses["Spanish"]["NOM_MES"] = "NOM MES";
	$fieldToolTipsglobal_meses["Spanish"]["NOM_MES"] = "";
	$placeHoldersglobal_meses["Spanish"]["NOM_MES"] = "";
	if (count($fieldToolTipsglobal_meses["Spanish"]))
		$tdataglobal_meses[".isUseToolTips"] = true;
}


	$tdataglobal_meses[".NCSearch"] = true;



$tdataglobal_meses[".shortTableName"] = "global_meses";
$tdataglobal_meses[".nSecOptions"] = 0;

$tdataglobal_meses[".mainTableOwnerID"] = "";
$tdataglobal_meses[".entityType"] = 0;

$tdataglobal_meses[".strOriginalTableName"] = "global_meses";

	



$tdataglobal_meses[".showAddInPopup"] = false;

$tdataglobal_meses[".showEditInPopup"] = false;

$tdataglobal_meses[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataglobal_meses[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataglobal_meses[".listAjax"] = false;
//	temporary
$tdataglobal_meses[".listAjax"] = false;

	$tdataglobal_meses[".audit"] = false;

	$tdataglobal_meses[".locking"] = false;


$pages = $tdataglobal_meses[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_meses[".edit"] = true;
	$tdataglobal_meses[".afterEditAction"] = 1;
	$tdataglobal_meses[".closePopupAfterEdit"] = 1;
	$tdataglobal_meses[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_meses[".add"] = true;
$tdataglobal_meses[".afterAddAction"] = 1;
$tdataglobal_meses[".closePopupAfterAdd"] = 1;
$tdataglobal_meses[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_meses[".list"] = true;
}



$tdataglobal_meses[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_meses[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_meses[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_meses[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_meses[".printFriendly"] = true;
}



$tdataglobal_meses[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_meses[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_meses[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_meses[".isUseAjaxSuggest"] = true;

$tdataglobal_meses[".rowHighlite"] = true;



												

$tdataglobal_meses[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_meses[".buttonsAdded"] = false;

$tdataglobal_meses[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_meses[".isUseTimeForSearch"] = false;


$tdataglobal_meses[".badgeColor"] = "D2691E";


$tdataglobal_meses[".allSearchFields"] = array();
$tdataglobal_meses[".filterFields"] = array();
$tdataglobal_meses[".requiredSearchFields"] = array();

$tdataglobal_meses[".googleLikeFields"] = array();
$tdataglobal_meses[".googleLikeFields"][] = "COD_MES";
$tdataglobal_meses[".googleLikeFields"][] = "NOM_MES";



$tdataglobal_meses[".tableType"] = "list";

$tdataglobal_meses[".printerPageOrientation"] = 0;
$tdataglobal_meses[".nPrinterPageScale"] = 100;

$tdataglobal_meses[".nPrinterSplitRecords"] = 40;

$tdataglobal_meses[".geocodingEnabled"] = false;










$tdataglobal_meses[".pageSize"] = 20;

$tdataglobal_meses[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataglobal_meses[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_meses[".orderindexes"] = array();

$tdataglobal_meses[".sqlHead"] = "SELECT COD_MES,  	NOM_MES";
$tdataglobal_meses[".sqlFrom"] = "FROM global_meses";
$tdataglobal_meses[".sqlWhereExpr"] = "";
$tdataglobal_meses[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_meses[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_meses[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_meses[".highlightSearchResults"] = true;

$tableKeysglobal_meses = array();
$tableKeysglobal_meses[] = "COD_MES";
$tdataglobal_meses[".Keys"] = $tableKeysglobal_meses;


$tdataglobal_meses[".hideMobileList"] = array();




//	COD_MES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "COD_MES";
	$fdata["GoodName"] = "COD_MES";
	$fdata["ownerTable"] = "global_meses";
	$fdata["Label"] = GetFieldLabel("global_meses","COD_MES");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "COD_MES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COD_MES";

	
	
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


	$tdataglobal_meses["COD_MES"] = $fdata;
		$tdataglobal_meses[".searchableFields"][] = "COD_MES";
//	NOM_MES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOM_MES";
	$fdata["GoodName"] = "NOM_MES";
	$fdata["ownerTable"] = "global_meses";
	$fdata["Label"] = GetFieldLabel("global_meses","NOM_MES");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NOM_MES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOM_MES";

	
	
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


	$tdataglobal_meses["NOM_MES"] = $fdata;
		$tdataglobal_meses[".searchableFields"][] = "NOM_MES";


$tables_data["global_meses"]=&$tdataglobal_meses;
$field_labels["global_meses"] = &$fieldLabelsglobal_meses;
$fieldToolTips["global_meses"] = &$fieldToolTipsglobal_meses;
$placeHolders["global_meses"] = &$placeHoldersglobal_meses;
$page_titles["global_meses"] = &$pageTitlesglobal_meses;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["global_meses"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["global_meses"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_global_meses()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COD_MES,  	NOM_MES";
$proto0["m_strFrom"] = "FROM global_meses";
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
	"m_strName" => "COD_MES",
	"m_strTable" => "global_meses",
	"m_srcTableName" => "global_meses"
));

$proto6["m_sql"] = "COD_MES";
$proto6["m_srcTableName"] = "global_meses";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NOM_MES",
	"m_strTable" => "global_meses",
	"m_srcTableName" => "global_meses"
));

$proto8["m_sql"] = "NOM_MES";
$proto8["m_srcTableName"] = "global_meses";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "global_meses";
$proto11["m_srcTableName"] = "global_meses";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "COD_MES";
$proto11["m_columns"][] = "NOM_MES";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "global_meses";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "global_meses";
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
$proto0["m_srcTableName"]="global_meses";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_meses = createSqlQuery_global_meses();


	
										;

		

$tdataglobal_meses[".sqlquery"] = $queryData_global_meses;

$tableEvents["global_meses"] = new eventsBase;
$tdataglobal_meses[".hasEvents"] = false;

?>