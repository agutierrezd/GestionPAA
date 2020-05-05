<?php



$tdataq_group_rec = array();
$tdataq_group_rec[".searchableFields"] = array();
$tdataq_group_rec[".ShortName"] = "q_group_rec";
$tdataq_group_rec[".OwnerID"] = "";
$tdataq_group_rec[".OriginalTable"] = "paa_master_usos";


$tdataq_group_rec[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataq_group_rec[".originalPagesByType"] = $tdataq_group_rec[".pagesByType"];
$tdataq_group_rec[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataq_group_rec[".originalPages"] = $tdataq_group_rec[".pages"];
$tdataq_group_rec[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataq_group_rec[".originalDefaultPages"] = $tdataq_group_rec[".defaultPages"];

//	field labels
$fieldLabelsq_group_rec = array();
$fieldToolTipsq_group_rec = array();
$pageTitlesq_group_rec = array();
$placeHoldersq_group_rec = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_group_rec["Spanish"] = array();
	$fieldToolTipsq_group_rec["Spanish"] = array();
	$placeHoldersq_group_rec["Spanish"] = array();
	$pageTitlesq_group_rec["Spanish"] = array();
	$fieldLabelsq_group_rec["Spanish"]["REC"] = "REC";
	$fieldToolTipsq_group_rec["Spanish"]["REC"] = "";
	$placeHoldersq_group_rec["Spanish"]["REC"] = "";
	$fieldLabelsq_group_rec["Spanish"]["QTY_REC"] = "QTY REC";
	$fieldToolTipsq_group_rec["Spanish"]["QTY_REC"] = "";
	$placeHoldersq_group_rec["Spanish"]["QTY_REC"] = "";
	$fieldLabelsq_group_rec["Spanish"]["TIPO"] = "TIPO DE FUENTE";
	$fieldToolTipsq_group_rec["Spanish"]["TIPO"] = "";
	$placeHoldersq_group_rec["Spanish"]["TIPO"] = "";
	$fieldLabelsq_group_rec["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTipsq_group_rec["Spanish"]["UEJ"] = "";
	$placeHoldersq_group_rec["Spanish"]["UEJ"] = "";
	if (count($fieldToolTipsq_group_rec["Spanish"]))
		$tdataq_group_rec[".isUseToolTips"] = true;
}


	$tdataq_group_rec[".NCSearch"] = true;



$tdataq_group_rec[".shortTableName"] = "q_group_rec";
$tdataq_group_rec[".nSecOptions"] = 0;

$tdataq_group_rec[".mainTableOwnerID"] = "";
$tdataq_group_rec[".entityType"] = 1;

$tdataq_group_rec[".strOriginalTableName"] = "paa_master_usos";

	



$tdataq_group_rec[".showAddInPopup"] = false;

$tdataq_group_rec[".showEditInPopup"] = false;

$tdataq_group_rec[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataq_group_rec[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataq_group_rec[".listAjax"] = false;
//	temporary
$tdataq_group_rec[".listAjax"] = false;

	$tdataq_group_rec[".audit"] = false;

	$tdataq_group_rec[".locking"] = false;


$pages = $tdataq_group_rec[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_group_rec[".edit"] = true;
	$tdataq_group_rec[".afterEditAction"] = 1;
	$tdataq_group_rec[".closePopupAfterEdit"] = 1;
	$tdataq_group_rec[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_group_rec[".add"] = true;
$tdataq_group_rec[".afterAddAction"] = 1;
$tdataq_group_rec[".closePopupAfterAdd"] = 1;
$tdataq_group_rec[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_group_rec[".list"] = true;
}



$tdataq_group_rec[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_group_rec[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_group_rec[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_group_rec[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_group_rec[".printFriendly"] = true;
}



$tdataq_group_rec[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_group_rec[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_group_rec[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_group_rec[".isUseAjaxSuggest"] = true;

$tdataq_group_rec[".rowHighlite"] = true;



												

$tdataq_group_rec[".ajaxCodeSnippetAdded"] = false;

$tdataq_group_rec[".buttonsAdded"] = false;

$tdataq_group_rec[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_group_rec[".isUseTimeForSearch"] = false;


$tdataq_group_rec[".badgeColor"] = "8FBC8B";


$tdataq_group_rec[".allSearchFields"] = array();
$tdataq_group_rec[".filterFields"] = array();
$tdataq_group_rec[".requiredSearchFields"] = array();

$tdataq_group_rec[".googleLikeFields"] = array();
$tdataq_group_rec[".googleLikeFields"][] = "REC";
$tdataq_group_rec[".googleLikeFields"][] = "QTY_REC";
$tdataq_group_rec[".googleLikeFields"][] = "TIPO";
$tdataq_group_rec[".googleLikeFields"][] = "UEJ";



$tdataq_group_rec[".tableType"] = "list";

$tdataq_group_rec[".printerPageOrientation"] = 0;
$tdataq_group_rec[".nPrinterPageScale"] = 100;

$tdataq_group_rec[".nPrinterSplitRecords"] = 40;

$tdataq_group_rec[".geocodingEnabled"] = false;










$tdataq_group_rec[".pageSize"] = 20;

$tdataq_group_rec[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY
sep2.global_ejecucion.REC ASC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataq_group_rec[".strOrderBy"] = $tstrOrderBy;

$tdataq_group_rec[".orderindexes"] = array();
	$tdataq_group_rec[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "REC");


$tdataq_group_rec[".sqlHead"] = "SELECT sep2.global_ejecucion.REC, Count(sep2.global_ejecucion.REC) AS QTY_REC, sep2.global_ejecucion.TIPO, sep2.global_ejecucion.UEJ";
$tdataq_group_rec[".sqlFrom"] = "FROM sep2.global_ejecucion";
$tdataq_group_rec[".sqlWhereExpr"] = "";
$tdataq_group_rec[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_group_rec[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_group_rec[".arrGroupsPerPage"] = $arrGPP;

$tdataq_group_rec[".highlightSearchResults"] = true;

$tableKeysq_group_rec = array();
$tdataq_group_rec[".Keys"] = $tableKeysq_group_rec;


$tdataq_group_rec[".hideMobileList"] = array();




//	REC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "REC";
	$fdata["GoodName"] = "REC";
	$fdata["ownerTable"] = "sep2.global_ejecucion";
	$fdata["Label"] = GetFieldLabel("q_group_rec","REC");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "REC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sep2.global_ejecucion.REC";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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


	$tdataq_group_rec["REC"] = $fdata;
		$tdataq_group_rec[".searchableFields"][] = "REC";
//	QTY_REC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "QTY_REC";
	$fdata["GoodName"] = "QTY_REC";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("q_group_rec","QTY_REC");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "QTY_REC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Count(sep2.global_ejecucion.REC)";

	
	
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


	$tdataq_group_rec["QTY_REC"] = $fdata;
		$tdataq_group_rec[".searchableFields"][] = "QTY_REC";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "sep2.global_ejecucion";
	$fdata["Label"] = GetFieldLabel("q_group_rec","TIPO");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "TIPO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sep2.global_ejecucion.TIPO";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_fuente";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "fuente_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "fuente_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdataq_group_rec["TIPO"] = $fdata;
		$tdataq_group_rec[".searchableFields"][] = "TIPO";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "sep2.global_ejecucion";
	$fdata["Label"] = GetFieldLabel("q_group_rec","UEJ");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "UEJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sep2.global_ejecucion.UEJ";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "UEJ";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "UEJ";

	

	
	$edata["LookupOrderBy"] = "UEJ";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdataq_group_rec["UEJ"] = $fdata;
		$tdataq_group_rec[".searchableFields"][] = "UEJ";


$tables_data["q_group_rec"]=&$tdataq_group_rec;
$field_labels["q_group_rec"] = &$fieldLabelsq_group_rec;
$fieldToolTips["q_group_rec"] = &$fieldToolTipsq_group_rec;
$placeHolders["q_group_rec"] = &$placeHoldersq_group_rec;
$page_titles["q_group_rec"] = &$pageTitlesq_group_rec;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["q_group_rec"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["q_group_rec"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_q_group_rec()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sep2.global_ejecucion.REC, Count(sep2.global_ejecucion.REC) AS QTY_REC, sep2.global_ejecucion.TIPO, sep2.global_ejecucion.UEJ";
$proto0["m_strFrom"] = "FROM sep2.global_ejecucion";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY sep2.global_ejecucion.REC ASC";
	
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
	"m_strName" => "REC",
	"m_strTable" => "sep2.global_ejecucion",
	"m_srcTableName" => "q_group_rec"
));

$proto6["m_sql"] = "sep2.global_ejecucion.REC";
$proto6["m_srcTableName"] = "q_group_rec";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_COUNT";
$proto9["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "REC",
	"m_strTable" => "sep2.global_ejecucion",
	"m_srcTableName" => "q_group_rec"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "Count";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "Count(sep2.global_ejecucion.REC)";
$proto8["m_srcTableName"] = "q_group_rec";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "QTY_REC";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "sep2.global_ejecucion",
	"m_srcTableName" => "q_group_rec"
));

$proto11["m_sql"] = "sep2.global_ejecucion.TIPO";
$proto11["m_srcTableName"] = "q_group_rec";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "sep2.global_ejecucion",
	"m_srcTableName" => "q_group_rec"
));

$proto13["m_sql"] = "sep2.global_ejecucion.UEJ";
$proto13["m_srcTableName"] = "q_group_rec";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "sep2.global_ejecucion";
$proto16["m_srcTableName"] = "q_group_rec";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "id_transac";
$proto16["m_columns"][] = "VIGENCIA";
$proto16["m_columns"][] = "CODIGO_BPIN";
$proto16["m_columns"][] = "FICHA_BPIN";
$proto16["m_columns"][] = "UEJ";
$proto16["m_columns"][] = "UEJ_S";
$proto16["m_columns"][] = "UEJ_MIN";
$proto16["m_columns"][] = "NOMBRE UEJ";
$proto16["m_columns"][] = "RUBRO";
$proto16["m_columns"][] = "USO_SN";
$proto16["m_columns"][] = "TIPO";
$proto16["m_columns"][] = "CTA";
$proto16["m_columns"][] = "SUBCTA";
$proto16["m_columns"][] = "OBJ";
$proto16["m_columns"][] = "ORD";
$proto16["m_columns"][] = "SORORD";
$proto16["m_columns"][] = "ITEM";
$proto16["m_columns"][] = "SUBITEM";
$proto16["m_columns"][] = "SUBITEM 2";
$proto16["m_columns"][] = "FUENTE";
$proto16["m_columns"][] = "REC";
$proto16["m_columns"][] = "SIT";
$proto16["m_columns"][] = "DESCRIPCION";
$proto16["m_columns"][] = "APR. INICIAL";
$proto16["m_columns"][] = "APR. ADICIONADA";
$proto16["m_columns"][] = "APR. REDUCIDA";
$proto16["m_columns"][] = "APR. VIGENTE";
$proto16["m_columns"][] = "APR BLOQUEADA";
$proto16["m_columns"][] = "CDP";
$proto16["m_columns"][] = "APR. DISPONIBLE";
$proto16["m_columns"][] = "COMPROMISO";
$proto16["m_columns"][] = "OBLIGACION";
$proto16["m_columns"][] = "ORDEN PAGO";
$proto16["m_columns"][] = "PAGOS";
$proto16["m_columns"][] = "FECHA_CORTE";
$proto16["m_columns"][] = "FECHA_ACTUALIZACION";
$proto16["m_columns"][] = "DEPENDENCIA_ID";
$proto16["m_columns"][] = "RESPONSABLE_ID";
$proto16["m_columns"][] = "DEPENDENCIA_SUP_ID";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "sep2.global_ejecucion";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "q_group_rec";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto19=array();
						$obj = new SQLField(array(
	"m_strName" => "REC",
	"m_strTable" => "sep2.global_ejecucion",
	"m_srcTableName" => "q_group_rec"
));

$proto19["m_column"]=$obj;
$obj = new SQLGroupByItem($proto19);

$proto0["m_groupby"][]=$obj;
												$proto21=array();
						$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "sep2.global_ejecucion",
	"m_srcTableName" => "q_group_rec"
));

$proto21["m_column"]=$obj;
$obj = new SQLGroupByItem($proto21);

$proto0["m_groupby"][]=$obj;
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "sep2.global_ejecucion",
	"m_srcTableName" => "q_group_rec"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "REC",
	"m_strTable" => "sep2.global_ejecucion",
	"m_srcTableName" => "q_group_rec"
));

$proto25["m_column"]=$obj;
$proto25["m_bAsc"] = 1;
$proto25["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto25);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="q_group_rec";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_group_rec = createSqlQuery_q_group_rec();


	
										;

				

$tdataq_group_rec[".sqlquery"] = $queryData_q_group_rec;

$tableEvents["q_group_rec"] = new eventsBase;
$tdataq_group_rec[".hasEvents"] = false;

?>