<?php



$tdataglobal_vf = array();
$tdataglobal_vf[".searchableFields"] = array();
$tdataglobal_vf[".ShortName"] = "global_vf";
$tdataglobal_vf[".OwnerID"] = "";
$tdataglobal_vf[".OriginalTable"] = "global_vf";


$tdataglobal_vf[".pagesByType"] = my_json_decode( "{}" );
$tdataglobal_vf[".originalPagesByType"] = $tdataglobal_vf[".pagesByType"];
$tdataglobal_vf[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataglobal_vf[".originalPages"] = $tdataglobal_vf[".pages"];
$tdataglobal_vf[".defaultPages"] = my_json_decode( "{}" );
$tdataglobal_vf[".originalDefaultPages"] = $tdataglobal_vf[".defaultPages"];

//	field labels
$fieldLabelsglobal_vf = array();
$fieldToolTipsglobal_vf = array();
$pageTitlesglobal_vf = array();
$placeHoldersglobal_vf = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_vf["Spanish"] = array();
	$fieldToolTipsglobal_vf["Spanish"] = array();
	$placeHoldersglobal_vf["Spanish"] = array();
	$pageTitlesglobal_vf["Spanish"] = array();
	$fieldLabelsglobal_vf["Spanish"]["COD_VF"] = "COD VF";
	$fieldToolTipsglobal_vf["Spanish"]["COD_VF"] = "";
	$placeHoldersglobal_vf["Spanish"]["COD_VF"] = "";
	$fieldLabelsglobal_vf["Spanish"]["NOM_VF"] = "NOM VF";
	$fieldToolTipsglobal_vf["Spanish"]["NOM_VF"] = "";
	$placeHoldersglobal_vf["Spanish"]["NOM_VF"] = "";
	if (count($fieldToolTipsglobal_vf["Spanish"]))
		$tdataglobal_vf[".isUseToolTips"] = true;
}


	$tdataglobal_vf[".NCSearch"] = true;



$tdataglobal_vf[".shortTableName"] = "global_vf";
$tdataglobal_vf[".nSecOptions"] = 0;

$tdataglobal_vf[".mainTableOwnerID"] = "";
$tdataglobal_vf[".entityType"] = 0;

$tdataglobal_vf[".strOriginalTableName"] = "global_vf";

	



$tdataglobal_vf[".showAddInPopup"] = false;

$tdataglobal_vf[".showEditInPopup"] = false;

$tdataglobal_vf[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataglobal_vf[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataglobal_vf[".listAjax"] = false;
//	temporary
$tdataglobal_vf[".listAjax"] = false;

	$tdataglobal_vf[".audit"] = false;

	$tdataglobal_vf[".locking"] = false;


$pages = $tdataglobal_vf[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_vf[".edit"] = true;
	$tdataglobal_vf[".afterEditAction"] = 1;
	$tdataglobal_vf[".closePopupAfterEdit"] = 1;
	$tdataglobal_vf[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_vf[".add"] = true;
$tdataglobal_vf[".afterAddAction"] = 1;
$tdataglobal_vf[".closePopupAfterAdd"] = 1;
$tdataglobal_vf[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_vf[".list"] = true;
}



$tdataglobal_vf[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_vf[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_vf[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_vf[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_vf[".printFriendly"] = true;
}



$tdataglobal_vf[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_vf[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_vf[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_vf[".isUseAjaxSuggest"] = true;

$tdataglobal_vf[".rowHighlite"] = true;



												

$tdataglobal_vf[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_vf[".buttonsAdded"] = false;

$tdataglobal_vf[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_vf[".isUseTimeForSearch"] = false;


$tdataglobal_vf[".badgeColor"] = "D2691E";


$tdataglobal_vf[".allSearchFields"] = array();
$tdataglobal_vf[".filterFields"] = array();
$tdataglobal_vf[".requiredSearchFields"] = array();

$tdataglobal_vf[".googleLikeFields"] = array();
$tdataglobal_vf[".googleLikeFields"][] = "COD_VF";
$tdataglobal_vf[".googleLikeFields"][] = "NOM_VF";



$tdataglobal_vf[".tableType"] = "list";

$tdataglobal_vf[".printerPageOrientation"] = 0;
$tdataglobal_vf[".nPrinterPageScale"] = 100;

$tdataglobal_vf[".nPrinterSplitRecords"] = 40;

$tdataglobal_vf[".geocodingEnabled"] = false;










$tdataglobal_vf[".pageSize"] = 20;

$tdataglobal_vf[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataglobal_vf[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_vf[".orderindexes"] = array();

$tdataglobal_vf[".sqlHead"] = "SELECT COD_VF,  	NOM_VF";
$tdataglobal_vf[".sqlFrom"] = "FROM global_vf";
$tdataglobal_vf[".sqlWhereExpr"] = "";
$tdataglobal_vf[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_vf[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_vf[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_vf[".highlightSearchResults"] = true;

$tableKeysglobal_vf = array();
$tableKeysglobal_vf[] = "COD_VF";
$tdataglobal_vf[".Keys"] = $tableKeysglobal_vf;


$tdataglobal_vf[".hideMobileList"] = array();




//	COD_VF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "COD_VF";
	$fdata["GoodName"] = "COD_VF";
	$fdata["ownerTable"] = "global_vf";
	$fdata["Label"] = GetFieldLabel("global_vf","COD_VF");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "COD_VF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COD_VF";

	
	
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


	$tdataglobal_vf["COD_VF"] = $fdata;
		$tdataglobal_vf[".searchableFields"][] = "COD_VF";
//	NOM_VF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOM_VF";
	$fdata["GoodName"] = "NOM_VF";
	$fdata["ownerTable"] = "global_vf";
	$fdata["Label"] = GetFieldLabel("global_vf","NOM_VF");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NOM_VF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOM_VF";

	
	
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


	$tdataglobal_vf["NOM_VF"] = $fdata;
		$tdataglobal_vf[".searchableFields"][] = "NOM_VF";


$tables_data["global_vf"]=&$tdataglobal_vf;
$field_labels["global_vf"] = &$fieldLabelsglobal_vf;
$fieldToolTips["global_vf"] = &$fieldToolTipsglobal_vf;
$placeHolders["global_vf"] = &$placeHoldersglobal_vf;
$page_titles["global_vf"] = &$pageTitlesglobal_vf;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["global_vf"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["global_vf"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_global_vf()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COD_VF,  	NOM_VF";
$proto0["m_strFrom"] = "FROM global_vf";
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
	"m_strName" => "COD_VF",
	"m_strTable" => "global_vf",
	"m_srcTableName" => "global_vf"
));

$proto6["m_sql"] = "COD_VF";
$proto6["m_srcTableName"] = "global_vf";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NOM_VF",
	"m_strTable" => "global_vf",
	"m_srcTableName" => "global_vf"
));

$proto8["m_sql"] = "NOM_VF";
$proto8["m_srcTableName"] = "global_vf";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "global_vf";
$proto11["m_srcTableName"] = "global_vf";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "COD_VF";
$proto11["m_columns"][] = "NOM_VF";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "global_vf";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "global_vf";
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
$proto0["m_srcTableName"]="global_vf";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_vf = createSqlQuery_global_vf();


	
										;

		

$tdataglobal_vf[".sqlquery"] = $queryData_global_vf;

$tableEvents["global_vf"] = new eventsBase;
$tdataglobal_vf[".hasEvents"] = false;

?>