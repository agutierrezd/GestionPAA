<?php



$tdataglobal_operacion = array();
$tdataglobal_operacion[".searchableFields"] = array();
$tdataglobal_operacion[".ShortName"] = "global_operacion";
$tdataglobal_operacion[".OwnerID"] = "";
$tdataglobal_operacion[".OriginalTable"] = "global_operacion";


$tdataglobal_operacion[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdataglobal_operacion[".originalPagesByType"] = $tdataglobal_operacion[".pagesByType"];
$tdataglobal_operacion[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdataglobal_operacion[".originalPages"] = $tdataglobal_operacion[".pages"];
$tdataglobal_operacion[".defaultPages"] = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );
$tdataglobal_operacion[".originalDefaultPages"] = $tdataglobal_operacion[".defaultPages"];

//	field labels
$fieldLabelsglobal_operacion = array();
$fieldToolTipsglobal_operacion = array();
$pageTitlesglobal_operacion = array();
$placeHoldersglobal_operacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_operacion["Spanish"] = array();
	$fieldToolTipsglobal_operacion["Spanish"] = array();
	$placeHoldersglobal_operacion["Spanish"] = array();
	$pageTitlesglobal_operacion["Spanish"] = array();
	$fieldLabelsglobal_operacion["Spanish"]["COD_OPERACION"] = "COD OPERACION";
	$fieldToolTipsglobal_operacion["Spanish"]["COD_OPERACION"] = "";
	$placeHoldersglobal_operacion["Spanish"]["COD_OPERACION"] = "";
	$fieldLabelsglobal_operacion["Spanish"]["NOM_OPERACION"] = "NOM OPERACION";
	$fieldToolTipsglobal_operacion["Spanish"]["NOM_OPERACION"] = "";
	$placeHoldersglobal_operacion["Spanish"]["NOM_OPERACION"] = "";
	if (count($fieldToolTipsglobal_operacion["Spanish"]))
		$tdataglobal_operacion[".isUseToolTips"] = true;
}


	$tdataglobal_operacion[".NCSearch"] = true;



$tdataglobal_operacion[".shortTableName"] = "global_operacion";
$tdataglobal_operacion[".nSecOptions"] = 0;

$tdataglobal_operacion[".mainTableOwnerID"] = "";
$tdataglobal_operacion[".entityType"] = 0;

$tdataglobal_operacion[".strOriginalTableName"] = "global_operacion";

	



$tdataglobal_operacion[".showAddInPopup"] = false;

$tdataglobal_operacion[".showEditInPopup"] = false;

$tdataglobal_operacion[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataglobal_operacion[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataglobal_operacion[".listAjax"] = false;
//	temporary
$tdataglobal_operacion[".listAjax"] = false;

	$tdataglobal_operacion[".audit"] = false;

	$tdataglobal_operacion[".locking"] = false;


$pages = $tdataglobal_operacion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_operacion[".edit"] = true;
	$tdataglobal_operacion[".afterEditAction"] = 1;
	$tdataglobal_operacion[".closePopupAfterEdit"] = 1;
	$tdataglobal_operacion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_operacion[".add"] = true;
$tdataglobal_operacion[".afterAddAction"] = 1;
$tdataglobal_operacion[".closePopupAfterAdd"] = 1;
$tdataglobal_operacion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_operacion[".list"] = true;
}



$tdataglobal_operacion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_operacion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_operacion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_operacion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_operacion[".printFriendly"] = true;
}



$tdataglobal_operacion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_operacion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_operacion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_operacion[".isUseAjaxSuggest"] = true;

$tdataglobal_operacion[".rowHighlite"] = true;



												

$tdataglobal_operacion[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_operacion[".buttonsAdded"] = false;

$tdataglobal_operacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_operacion[".isUseTimeForSearch"] = false;


$tdataglobal_operacion[".badgeColor"] = "D2691E";


$tdataglobal_operacion[".allSearchFields"] = array();
$tdataglobal_operacion[".filterFields"] = array();
$tdataglobal_operacion[".requiredSearchFields"] = array();

$tdataglobal_operacion[".googleLikeFields"] = array();
$tdataglobal_operacion[".googleLikeFields"][] = "COD_OPERACION";
$tdataglobal_operacion[".googleLikeFields"][] = "NOM_OPERACION";



$tdataglobal_operacion[".tableType"] = "list";

$tdataglobal_operacion[".printerPageOrientation"] = 0;
$tdataglobal_operacion[".nPrinterPageScale"] = 100;

$tdataglobal_operacion[".nPrinterSplitRecords"] = 40;

$tdataglobal_operacion[".geocodingEnabled"] = false;










$tdataglobal_operacion[".pageSize"] = 20;

$tdataglobal_operacion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataglobal_operacion[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_operacion[".orderindexes"] = array();

$tdataglobal_operacion[".sqlHead"] = "SELECT COD_OPERACION,  	NOM_OPERACION";
$tdataglobal_operacion[".sqlFrom"] = "FROM global_operacion";
$tdataglobal_operacion[".sqlWhereExpr"] = "";
$tdataglobal_operacion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_operacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_operacion[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_operacion[".highlightSearchResults"] = true;

$tableKeysglobal_operacion = array();
$tableKeysglobal_operacion[] = "COD_OPERACION";
$tdataglobal_operacion[".Keys"] = $tableKeysglobal_operacion;


$tdataglobal_operacion[".hideMobileList"] = array();




//	COD_OPERACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "COD_OPERACION";
	$fdata["GoodName"] = "COD_OPERACION";
	$fdata["ownerTable"] = "global_operacion";
	$fdata["Label"] = GetFieldLabel("global_operacion","COD_OPERACION");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "COD_OPERACION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COD_OPERACION";

	
	
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


	$tdataglobal_operacion["COD_OPERACION"] = $fdata;
		$tdataglobal_operacion[".searchableFields"][] = "COD_OPERACION";
//	NOM_OPERACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOM_OPERACION";
	$fdata["GoodName"] = "NOM_OPERACION";
	$fdata["ownerTable"] = "global_operacion";
	$fdata["Label"] = GetFieldLabel("global_operacion","NOM_OPERACION");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NOM_OPERACION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOM_OPERACION";

	
	
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


	$tdataglobal_operacion["NOM_OPERACION"] = $fdata;
		$tdataglobal_operacion[".searchableFields"][] = "NOM_OPERACION";


$tables_data["global_operacion"]=&$tdataglobal_operacion;
$field_labels["global_operacion"] = &$fieldLabelsglobal_operacion;
$fieldToolTips["global_operacion"] = &$fieldToolTipsglobal_operacion;
$placeHolders["global_operacion"] = &$placeHoldersglobal_operacion;
$page_titles["global_operacion"] = &$pageTitlesglobal_operacion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["global_operacion"] = array();
//	paa_master_pscdp_admin
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="paa_master_pscdp_admin";
		$detailsParam["dOriginalTable"] = "paa_master_pscdp";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "paa_master_pscdp_admin";
	$detailsParam["dCaptionTable"] = GetTableCaption("paa_master_pscdp_admin");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["global_operacion"][$dIndex] = $detailsParam;

	
		$detailsTablesData["global_operacion"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["global_operacion"][$dIndex]["masterKeys"][]="COD_OPERACION";

				$detailsTablesData["global_operacion"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["global_operacion"][$dIndex]["detailKeys"][]="OPERACION_ID_FK";
//	paa_master_pscdp_admin_nopaa
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="paa_master_pscdp_admin_nopaa";
		$detailsParam["dOriginalTable"] = "paa_master_pscdp";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "paa_master_pscdp_admin_nopaa";
	$detailsParam["dCaptionTable"] = GetTableCaption("paa_master_pscdp_admin_nopaa");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["global_operacion"][$dIndex] = $detailsParam;

	
		$detailsTablesData["global_operacion"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["global_operacion"][$dIndex]["masterKeys"][]="COD_OPERACION";

				$detailsTablesData["global_operacion"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["global_operacion"][$dIndex]["detailKeys"][]="OPERACION_ID_FK";

// tables which are master tables for current table (detail)
$masterTablesData["global_operacion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_global_operacion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COD_OPERACION,  	NOM_OPERACION";
$proto0["m_strFrom"] = "FROM global_operacion";
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
	"m_strName" => "COD_OPERACION",
	"m_strTable" => "global_operacion",
	"m_srcTableName" => "global_operacion"
));

$proto6["m_sql"] = "COD_OPERACION";
$proto6["m_srcTableName"] = "global_operacion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NOM_OPERACION",
	"m_strTable" => "global_operacion",
	"m_srcTableName" => "global_operacion"
));

$proto8["m_sql"] = "NOM_OPERACION";
$proto8["m_srcTableName"] = "global_operacion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "global_operacion";
$proto11["m_srcTableName"] = "global_operacion";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "COD_OPERACION";
$proto11["m_columns"][] = "NOM_OPERACION";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "global_operacion";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "global_operacion";
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
$proto0["m_srcTableName"]="global_operacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_operacion = createSqlQuery_global_operacion();


	
										;

		

$tdataglobal_operacion[".sqlquery"] = $queryData_global_operacion;

$tableEvents["global_operacion"] = new eventsBase;
$tdataglobal_operacion[".hasEvents"] = false;

?>