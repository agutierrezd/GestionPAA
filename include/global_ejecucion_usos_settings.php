<?php



$tdataglobal_ejecucion_usos = array();
$tdataglobal_ejecucion_usos[".searchableFields"] = array();
$tdataglobal_ejecucion_usos[".ShortName"] = "global_ejecucion_usos";
$tdataglobal_ejecucion_usos[".OwnerID"] = "";
$tdataglobal_ejecucion_usos[".OriginalTable"] = "global_ejecucion_usos";


$tdataglobal_ejecucion_usos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"list\":[\"list\"]}" );
$tdataglobal_ejecucion_usos[".originalPagesByType"] = $tdataglobal_ejecucion_usos[".pagesByType"];
$tdataglobal_ejecucion_usos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"list\":[\"list\"]}" ) );
$tdataglobal_ejecucion_usos[".originalPages"] = $tdataglobal_ejecucion_usos[".pages"];
$tdataglobal_ejecucion_usos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"list\":\"list\"}" );
$tdataglobal_ejecucion_usos[".originalDefaultPages"] = $tdataglobal_ejecucion_usos[".defaultPages"];

//	field labels
$fieldLabelsglobal_ejecucion_usos = array();
$fieldToolTipsglobal_ejecucion_usos = array();
$pageTitlesglobal_ejecucion_usos = array();
$placeHoldersglobal_ejecucion_usos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_ejecucion_usos["Spanish"] = array();
	$fieldToolTipsglobal_ejecucion_usos["Spanish"] = array();
	$placeHoldersglobal_ejecucion_usos["Spanish"] = array();
	$pageTitlesglobal_ejecucion_usos["Spanish"] = array();
	$fieldLabelsglobal_ejecucion_usos["Spanish"]["RUBRO"] = "RUBRO";
	$fieldToolTipsglobal_ejecucion_usos["Spanish"]["RUBRO"] = "";
	$placeHoldersglobal_ejecucion_usos["Spanish"]["RUBRO"] = "";
	$fieldLabelsglobal_ejecucion_usos["Spanish"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipsglobal_ejecucion_usos["Spanish"]["DESCRIPCION"] = "";
	$placeHoldersglobal_ejecucion_usos["Spanish"]["DESCRIPCION"] = "";
	if (count($fieldToolTipsglobal_ejecucion_usos["Spanish"]))
		$tdataglobal_ejecucion_usos[".isUseToolTips"] = true;
}


	$tdataglobal_ejecucion_usos[".NCSearch"] = true;



$tdataglobal_ejecucion_usos[".shortTableName"] = "global_ejecucion_usos";
$tdataglobal_ejecucion_usos[".nSecOptions"] = 0;

$tdataglobal_ejecucion_usos[".mainTableOwnerID"] = "";
$tdataglobal_ejecucion_usos[".entityType"] = 0;

$tdataglobal_ejecucion_usos[".strOriginalTableName"] = "global_ejecucion_usos";

	



$tdataglobal_ejecucion_usos[".showAddInPopup"] = false;

$tdataglobal_ejecucion_usos[".showEditInPopup"] = false;

$tdataglobal_ejecucion_usos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataglobal_ejecucion_usos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataglobal_ejecucion_usos[".listAjax"] = false;
//	temporary
$tdataglobal_ejecucion_usos[".listAjax"] = false;

	$tdataglobal_ejecucion_usos[".audit"] = false;

	$tdataglobal_ejecucion_usos[".locking"] = false;


$pages = $tdataglobal_ejecucion_usos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_ejecucion_usos[".edit"] = true;
	$tdataglobal_ejecucion_usos[".afterEditAction"] = 1;
	$tdataglobal_ejecucion_usos[".closePopupAfterEdit"] = 1;
	$tdataglobal_ejecucion_usos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_ejecucion_usos[".add"] = true;
$tdataglobal_ejecucion_usos[".afterAddAction"] = 1;
$tdataglobal_ejecucion_usos[".closePopupAfterAdd"] = 1;
$tdataglobal_ejecucion_usos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_ejecucion_usos[".list"] = true;
}



$tdataglobal_ejecucion_usos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_ejecucion_usos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_ejecucion_usos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_ejecucion_usos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_ejecucion_usos[".printFriendly"] = true;
}



$tdataglobal_ejecucion_usos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_ejecucion_usos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_ejecucion_usos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_ejecucion_usos[".isUseAjaxSuggest"] = true;

$tdataglobal_ejecucion_usos[".rowHighlite"] = true;



												

$tdataglobal_ejecucion_usos[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_ejecucion_usos[".buttonsAdded"] = false;

$tdataglobal_ejecucion_usos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_ejecucion_usos[".isUseTimeForSearch"] = false;


$tdataglobal_ejecucion_usos[".badgeColor"] = "DAA520";


$tdataglobal_ejecucion_usos[".allSearchFields"] = array();
$tdataglobal_ejecucion_usos[".filterFields"] = array();
$tdataglobal_ejecucion_usos[".requiredSearchFields"] = array();

$tdataglobal_ejecucion_usos[".googleLikeFields"] = array();
$tdataglobal_ejecucion_usos[".googleLikeFields"][] = "RUBRO";
$tdataglobal_ejecucion_usos[".googleLikeFields"][] = "DESCRIPCION";



$tdataglobal_ejecucion_usos[".tableType"] = "list";

$tdataglobal_ejecucion_usos[".printerPageOrientation"] = 0;
$tdataglobal_ejecucion_usos[".nPrinterPageScale"] = 100;

$tdataglobal_ejecucion_usos[".nPrinterSplitRecords"] = 40;

$tdataglobal_ejecucion_usos[".geocodingEnabled"] = false;










$tdataglobal_ejecucion_usos[".pageSize"] = 20;

$tdataglobal_ejecucion_usos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataglobal_ejecucion_usos[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_ejecucion_usos[".orderindexes"] = array();

$tdataglobal_ejecucion_usos[".sqlHead"] = "SELECT RUBRO, DESCRIPCION";
$tdataglobal_ejecucion_usos[".sqlFrom"] = "FROM global_ejecucion_usos";
$tdataglobal_ejecucion_usos[".sqlWhereExpr"] = "";
$tdataglobal_ejecucion_usos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_ejecucion_usos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_ejecucion_usos[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_ejecucion_usos[".highlightSearchResults"] = true;

$tableKeysglobal_ejecucion_usos = array();
$tableKeysglobal_ejecucion_usos[] = "RUBRO";
$tdataglobal_ejecucion_usos[".Keys"] = $tableKeysglobal_ejecucion_usos;


$tdataglobal_ejecucion_usos[".hideMobileList"] = array();




//	RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "RUBRO";
	$fdata["GoodName"] = "RUBRO";
	$fdata["ownerTable"] = "global_ejecucion_usos";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_usos","RUBRO");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "RUBRO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RUBRO";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataglobal_ejecucion_usos["RUBRO"] = $fdata;
		$tdataglobal_ejecucion_usos[".searchableFields"][] = "RUBRO";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "global_ejecucion_usos";
	$fdata["Label"] = GetFieldLabel("global_ejecucion_usos","DESCRIPCION");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "DESCRIPCION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdataglobal_ejecucion_usos["DESCRIPCION"] = $fdata;
		$tdataglobal_ejecucion_usos[".searchableFields"][] = "DESCRIPCION";


$tables_data["global_ejecucion_usos"]=&$tdataglobal_ejecucion_usos;
$field_labels["global_ejecucion_usos"] = &$fieldLabelsglobal_ejecucion_usos;
$fieldToolTips["global_ejecucion_usos"] = &$fieldToolTipsglobal_ejecucion_usos;
$placeHolders["global_ejecucion_usos"] = &$placeHoldersglobal_ejecucion_usos;
$page_titles["global_ejecucion_usos"] = &$pageTitlesglobal_ejecucion_usos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["global_ejecucion_usos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["global_ejecucion_usos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_global_ejecucion_usos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "RUBRO, DESCRIPCION";
$proto0["m_strFrom"] = "FROM global_ejecucion_usos";
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
	"m_strName" => "RUBRO",
	"m_strTable" => "global_ejecucion_usos",
	"m_srcTableName" => "global_ejecucion_usos"
));

$proto6["m_sql"] = "RUBRO";
$proto6["m_srcTableName"] = "global_ejecucion_usos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "global_ejecucion_usos",
	"m_srcTableName" => "global_ejecucion_usos"
));

$proto8["m_sql"] = "DESCRIPCION";
$proto8["m_srcTableName"] = "global_ejecucion_usos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "global_ejecucion_usos";
$proto11["m_srcTableName"] = "global_ejecucion_usos";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_transac_des";
$proto11["m_columns"][] = "UEJ";
$proto11["m_columns"][] = "NOMBRE UEJ";
$proto11["m_columns"][] = "RUB";
$proto11["m_columns"][] = "RUBRO";
$proto11["m_columns"][] = "TIPO";
$proto11["m_columns"][] = "CTA";
$proto11["m_columns"][] = "SUBCTA";
$proto11["m_columns"][] = "OBJ";
$proto11["m_columns"][] = "ORD";
$proto11["m_columns"][] = "SORORD";
$proto11["m_columns"][] = "ITEM";
$proto11["m_columns"][] = "SUBITEM";
$proto11["m_columns"][] = "SUBITEM 2";
$proto11["m_columns"][] = "FUENTE";
$proto11["m_columns"][] = "REC";
$proto11["m_columns"][] = "SIT";
$proto11["m_columns"][] = "DESCRIPCION";
$proto11["m_columns"][] = "APR. INICIAL";
$proto11["m_columns"][] = "APR. ADICIONADA";
$proto11["m_columns"][] = "APR. REDUCIDA";
$proto11["m_columns"][] = "APR. VIGENTE";
$proto11["m_columns"][] = "APR BLOQUEADA";
$proto11["m_columns"][] = "CDP";
$proto11["m_columns"][] = "APR. DISPONIBLE";
$proto11["m_columns"][] = "COMPROMISO";
$proto11["m_columns"][] = "OBLIGACION";
$proto11["m_columns"][] = "ORDEN PAGO";
$proto11["m_columns"][] = "PAGOS";
$proto11["m_columns"][] = "FECHA_CORTE";
$proto11["m_columns"][] = "FECHA_ACTUALIZACION";
$proto11["m_columns"][] = "VIGENCIA";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "global_ejecucion_usos";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "global_ejecucion_usos";
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
$proto0["m_srcTableName"]="global_ejecucion_usos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_ejecucion_usos = createSqlQuery_global_ejecucion_usos();


	
										;

		

$tdataglobal_ejecucion_usos[".sqlquery"] = $queryData_global_ejecucion_usos;

$tableEvents["global_ejecucion_usos"] = new eventsBase;
$tdataglobal_ejecucion_usos[".hasEvents"] = false;

?>