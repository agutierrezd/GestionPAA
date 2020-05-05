<?php



$tdatapaa_master_pscdp_nopaa = array();
$tdatapaa_master_pscdp_nopaa[".searchableFields"] = array();
$tdatapaa_master_pscdp_nopaa[".ShortName"] = "paa_master_pscdp_nopaa";
$tdatapaa_master_pscdp_nopaa[".OwnerID"] = "";
$tdatapaa_master_pscdp_nopaa[".OriginalTable"] = "paa_master_pscdp";


$tdatapaa_master_pscdp_nopaa[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapaa_master_pscdp_nopaa[".originalPagesByType"] = $tdatapaa_master_pscdp_nopaa[".pagesByType"];
$tdatapaa_master_pscdp_nopaa[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapaa_master_pscdp_nopaa[".originalPages"] = $tdatapaa_master_pscdp_nopaa[".pages"];
$tdatapaa_master_pscdp_nopaa[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapaa_master_pscdp_nopaa[".originalDefaultPages"] = $tdatapaa_master_pscdp_nopaa[".defaultPages"];

//	field labels
$fieldLabelspaa_master_pscdp_nopaa = array();
$fieldToolTipspaa_master_pscdp_nopaa = array();
$pageTitlespaa_master_pscdp_nopaa = array();
$placeHolderspaa_master_pscdp_nopaa = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspaa_master_pscdp_nopaa["Spanish"] = array();
	$fieldToolTipspaa_master_pscdp_nopaa["Spanish"] = array();
	$placeHolderspaa_master_pscdp_nopaa["Spanish"] = array();
	$pageTitlespaa_master_pscdp_nopaa["Spanish"] = array();
	$fieldLabelspaa_master_pscdp_nopaa["Spanish"]["PAAU_ID"] = "SOL_ID";
	$fieldToolTipspaa_master_pscdp_nopaa["Spanish"]["PAAU_ID"] = "";
	$placeHolderspaa_master_pscdp_nopaa["Spanish"]["PAAU_ID"] = "";
	$fieldLabelspaa_master_pscdp_nopaa["Spanish"]["PAA_ID_FK"] = "PAA ID";
	$fieldToolTipspaa_master_pscdp_nopaa["Spanish"]["PAA_ID_FK"] = "";
	$placeHolderspaa_master_pscdp_nopaa["Spanish"]["PAA_ID_FK"] = "";
	$fieldLabelspaa_master_pscdp_nopaa["Spanish"]["SOL_FECHA"] = "FECHA SOLICITUD";
	$fieldToolTipspaa_master_pscdp_nopaa["Spanish"]["SOL_FECHA"] = "";
	$placeHolderspaa_master_pscdp_nopaa["Spanish"]["SOL_FECHA"] = "";
	$fieldLabelspaa_master_pscdp_nopaa["Spanish"]["SOL_DEPENDENCIA"] = "DEPENDENCIA";
	$fieldToolTipspaa_master_pscdp_nopaa["Spanish"]["SOL_DEPENDENCIA"] = "";
	$placeHolderspaa_master_pscdp_nopaa["Spanish"]["SOL_DEPENDENCIA"] = "";
	$fieldLabelspaa_master_pscdp_nopaa["Spanish"]["OPERACION_ID_FK"] = "OPERACION A REALIZAR";
	$fieldToolTipspaa_master_pscdp_nopaa["Spanish"]["OPERACION_ID_FK"] = "";
	$placeHolderspaa_master_pscdp_nopaa["Spanish"]["OPERACION_ID_FK"] = "";
	$fieldLabelspaa_master_pscdp_nopaa["Spanish"]["USER_REG"] = "SOLICITADO POR";
	$fieldToolTipspaa_master_pscdp_nopaa["Spanish"]["USER_REG"] = "";
	$placeHolderspaa_master_pscdp_nopaa["Spanish"]["USER_REG"] = "";
	$fieldLabelspaa_master_pscdp_nopaa["Spanish"]["SYS_STATUS"] = "ESTADO";
	$fieldToolTipspaa_master_pscdp_nopaa["Spanish"]["SYS_STATUS"] = "";
	$placeHolderspaa_master_pscdp_nopaa["Spanish"]["SYS_STATUS"] = "";
	$fieldLabelspaa_master_pscdp_nopaa["Spanish"]["NUMERO_SCDP_SIIF"] = "NUMERO SCDP SIIF";
	$fieldToolTipspaa_master_pscdp_nopaa["Spanish"]["NUMERO_SCDP_SIIF"] = "";
	$placeHolderspaa_master_pscdp_nopaa["Spanish"]["NUMERO_SCDP_SIIF"] = "";
	$fieldLabelspaa_master_pscdp_nopaa["Spanish"]["DOCUMENTO_SCDP_SIIF"] = "DOCUMENTO SCDP SIIF";
	$fieldToolTipspaa_master_pscdp_nopaa["Spanish"]["DOCUMENTO_SCDP_SIIF"] = "";
	$placeHolderspaa_master_pscdp_nopaa["Spanish"]["DOCUMENTO_SCDP_SIIF"] = "";
	$fieldLabelspaa_master_pscdp_nopaa["Spanish"]["FECHA_SCDP_SIIF"] = "FECHA SCDP SIIF";
	$fieldToolTipspaa_master_pscdp_nopaa["Spanish"]["FECHA_SCDP_SIIF"] = "";
	$placeHolderspaa_master_pscdp_nopaa["Spanish"]["FECHA_SCDP_SIIF"] = "";
	$fieldLabelspaa_master_pscdp_nopaa["Spanish"]["USUARIO_SCDP_SIIF"] = "USUARIO SCDP SIIF";
	$fieldToolTipspaa_master_pscdp_nopaa["Spanish"]["USUARIO_SCDP_SIIF"] = "";
	$placeHolderspaa_master_pscdp_nopaa["Spanish"]["USUARIO_SCDP_SIIF"] = "";
	$fieldLabelspaa_master_pscdp_nopaa["Spanish"]["TIPO_SOL"] = "TIPO SOL";
	$fieldToolTipspaa_master_pscdp_nopaa["Spanish"]["TIPO_SOL"] = "";
	$placeHolderspaa_master_pscdp_nopaa["Spanish"]["TIPO_SOL"] = "";
	$fieldLabelspaa_master_pscdp_nopaa["Spanish"]["FECHA_REG"] = "FECHA REGISTRO";
	$fieldToolTipspaa_master_pscdp_nopaa["Spanish"]["FECHA_REG"] = "";
	$placeHolderspaa_master_pscdp_nopaa["Spanish"]["FECHA_REG"] = "";
	$fieldLabelspaa_master_pscdp_nopaa["Spanish"]["VALOR_SOLICITADO"] = "VALOR SOLICITADO";
	$fieldToolTipspaa_master_pscdp_nopaa["Spanish"]["VALOR_SOLICITADO"] = "";
	$placeHolderspaa_master_pscdp_nopaa["Spanish"]["VALOR_SOLICITADO"] = "";
	if (count($fieldToolTipspaa_master_pscdp_nopaa["Spanish"]))
		$tdatapaa_master_pscdp_nopaa[".isUseToolTips"] = true;
}


	$tdatapaa_master_pscdp_nopaa[".NCSearch"] = true;



$tdatapaa_master_pscdp_nopaa[".shortTableName"] = "paa_master_pscdp_nopaa";
$tdatapaa_master_pscdp_nopaa[".nSecOptions"] = 0;

$tdatapaa_master_pscdp_nopaa[".mainTableOwnerID"] = "";
$tdatapaa_master_pscdp_nopaa[".entityType"] = 1;

$tdatapaa_master_pscdp_nopaa[".strOriginalTableName"] = "paa_master_pscdp";

	



$tdatapaa_master_pscdp_nopaa[".showAddInPopup"] = false;

$tdatapaa_master_pscdp_nopaa[".showEditInPopup"] = false;

$tdatapaa_master_pscdp_nopaa[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapaa_master_pscdp_nopaa[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapaa_master_pscdp_nopaa[".listAjax"] = false;
//	temporary
$tdatapaa_master_pscdp_nopaa[".listAjax"] = false;

	$tdatapaa_master_pscdp_nopaa[".audit"] = false;

	$tdatapaa_master_pscdp_nopaa[".locking"] = false;


$pages = $tdatapaa_master_pscdp_nopaa[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapaa_master_pscdp_nopaa[".edit"] = true;
	$tdatapaa_master_pscdp_nopaa[".afterEditAction"] = 1;
	$tdatapaa_master_pscdp_nopaa[".closePopupAfterEdit"] = 1;
	$tdatapaa_master_pscdp_nopaa[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapaa_master_pscdp_nopaa[".add"] = true;
$tdatapaa_master_pscdp_nopaa[".afterAddAction"] = 1;
$tdatapaa_master_pscdp_nopaa[".closePopupAfterAdd"] = 1;
$tdatapaa_master_pscdp_nopaa[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapaa_master_pscdp_nopaa[".list"] = true;
}



$tdatapaa_master_pscdp_nopaa[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapaa_master_pscdp_nopaa[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapaa_master_pscdp_nopaa[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapaa_master_pscdp_nopaa[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapaa_master_pscdp_nopaa[".printFriendly"] = true;
}



$tdatapaa_master_pscdp_nopaa[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapaa_master_pscdp_nopaa[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapaa_master_pscdp_nopaa[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapaa_master_pscdp_nopaa[".isUseAjaxSuggest"] = true;

$tdatapaa_master_pscdp_nopaa[".rowHighlite"] = true;



																								

$tdatapaa_master_pscdp_nopaa[".ajaxCodeSnippetAdded"] = false;

$tdatapaa_master_pscdp_nopaa[".buttonsAdded"] = false;

$tdatapaa_master_pscdp_nopaa[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapaa_master_pscdp_nopaa[".isUseTimeForSearch"] = false;


$tdatapaa_master_pscdp_nopaa[".badgeColor"] = "1e90ff";


$tdatapaa_master_pscdp_nopaa[".allSearchFields"] = array();
$tdatapaa_master_pscdp_nopaa[".filterFields"] = array();
$tdatapaa_master_pscdp_nopaa[".requiredSearchFields"] = array();

$tdatapaa_master_pscdp_nopaa[".googleLikeFields"] = array();
$tdatapaa_master_pscdp_nopaa[".googleLikeFields"][] = "PAAU_ID";
$tdatapaa_master_pscdp_nopaa[".googleLikeFields"][] = "PAA_ID_FK";
$tdatapaa_master_pscdp_nopaa[".googleLikeFields"][] = "SOL_FECHA";
$tdatapaa_master_pscdp_nopaa[".googleLikeFields"][] = "SOL_DEPENDENCIA";
$tdatapaa_master_pscdp_nopaa[".googleLikeFields"][] = "OPERACION_ID_FK";
$tdatapaa_master_pscdp_nopaa[".googleLikeFields"][] = "USER_REG";
$tdatapaa_master_pscdp_nopaa[".googleLikeFields"][] = "SYS_STATUS";
$tdatapaa_master_pscdp_nopaa[".googleLikeFields"][] = "NUMERO_SCDP_SIIF";
$tdatapaa_master_pscdp_nopaa[".googleLikeFields"][] = "DOCUMENTO_SCDP_SIIF";
$tdatapaa_master_pscdp_nopaa[".googleLikeFields"][] = "FECHA_SCDP_SIIF";
$tdatapaa_master_pscdp_nopaa[".googleLikeFields"][] = "USUARIO_SCDP_SIIF";
$tdatapaa_master_pscdp_nopaa[".googleLikeFields"][] = "TIPO_SOL";
$tdatapaa_master_pscdp_nopaa[".googleLikeFields"][] = "FECHA_REG";
$tdatapaa_master_pscdp_nopaa[".googleLikeFields"][] = "VALOR_SOLICITADO";



$tdatapaa_master_pscdp_nopaa[".tableType"] = "list";

$tdatapaa_master_pscdp_nopaa[".printerPageOrientation"] = 0;
$tdatapaa_master_pscdp_nopaa[".nPrinterPageScale"] = 100;

$tdatapaa_master_pscdp_nopaa[".nPrinterSplitRecords"] = 40;

$tdatapaa_master_pscdp_nopaa[".geocodingEnabled"] = false;




$tdatapaa_master_pscdp_nopaa[".isDisplayLoading"] = true;






$tdatapaa_master_pscdp_nopaa[".pageSize"] = 20;

$tdatapaa_master_pscdp_nopaa[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapaa_master_pscdp_nopaa[".strOrderBy"] = $tstrOrderBy;

$tdatapaa_master_pscdp_nopaa[".orderindexes"] = array();

$tdatapaa_master_pscdp_nopaa[".sqlHead"] = "SELECT PAAU_ID, PAA_ID_FK, SOL_FECHA, SOL_DEPENDENCIA, OPERACION_ID_FK, USER_REG, SYS_STATUS, NUMERO_SCDP_SIIF, DOCUMENTO_SCDP_SIIF, FECHA_SCDP_SIIF, USUARIO_SCDP_SIIF, TIPO_SOL, FECHA_REG, VALOR_SOLICITADO";
$tdatapaa_master_pscdp_nopaa[".sqlFrom"] = "FROM paa_master_pscdp";
$tdatapaa_master_pscdp_nopaa[".sqlWhereExpr"] = "";
$tdatapaa_master_pscdp_nopaa[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatapaa_master_pscdp_nopaa[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapaa_master_pscdp_nopaa[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapaa_master_pscdp_nopaa[".arrGroupsPerPage"] = $arrGPP;

$tdatapaa_master_pscdp_nopaa[".highlightSearchResults"] = true;

$tableKeyspaa_master_pscdp_nopaa = array();
$tableKeyspaa_master_pscdp_nopaa[] = "PAAU_ID";
$tdatapaa_master_pscdp_nopaa[".Keys"] = $tableKeyspaa_master_pscdp_nopaa;


$tdatapaa_master_pscdp_nopaa[".hideMobileList"] = array();




//	PAAU_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PAAU_ID";
	$fdata["GoodName"] = "PAAU_ID";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_nopaa","PAAU_ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "PAAU_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAAU_ID";

	
	
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


	$tdatapaa_master_pscdp_nopaa["PAAU_ID"] = $fdata;
		$tdatapaa_master_pscdp_nopaa[".searchableFields"][] = "PAAU_ID";
//	PAA_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PAA_ID_FK";
	$fdata["GoodName"] = "PAA_ID_FK";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_nopaa","PAA_ID_FK");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "PAA_ID_FK";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAA_ID_FK";

	
	
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

	
		
	$edata["LinkField"] = "PAA_ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "PAA_ID";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
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


	$tdatapaa_master_pscdp_nopaa["PAA_ID_FK"] = $fdata;
		$tdatapaa_master_pscdp_nopaa[".searchableFields"][] = "PAA_ID_FK";
//	SOL_FECHA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SOL_FECHA";
	$fdata["GoodName"] = "SOL_FECHA";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_nopaa","SOL_FECHA");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "SOL_FECHA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SOL_FECHA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatapaa_master_pscdp_nopaa["SOL_FECHA"] = $fdata;
		$tdatapaa_master_pscdp_nopaa[".searchableFields"][] = "SOL_FECHA";
//	SOL_DEPENDENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SOL_DEPENDENCIA";
	$fdata["GoodName"] = "SOL_DEPENDENCIA";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_nopaa","SOL_DEPENDENCIA");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "SOL_DEPENDENCIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SOL_DEPENDENCIA";

	
	
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
	$edata["LookupTable"] = "dependencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "nombre";

	
	
	
	

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatapaa_master_pscdp_nopaa["SOL_DEPENDENCIA"] = $fdata;
		$tdatapaa_master_pscdp_nopaa[".searchableFields"][] = "SOL_DEPENDENCIA";
//	OPERACION_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "OPERACION_ID_FK";
	$fdata["GoodName"] = "OPERACION_ID_FK";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_nopaa","OPERACION_ID_FK");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "OPERACION_ID_FK";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OPERACION_ID_FK";

	
	
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
	$edata["LookupTable"] = "global_operacion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "COD_OPERACION";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "NOM_OPERACION";

	

	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatapaa_master_pscdp_nopaa["OPERACION_ID_FK"] = $fdata;
		$tdatapaa_master_pscdp_nopaa[".searchableFields"][] = "OPERACION_ID_FK";
//	USER_REG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USER_REG";
	$fdata["GoodName"] = "USER_REG";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_nopaa","USER_REG");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "USER_REG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USER_REG";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

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


	$tdatapaa_master_pscdp_nopaa["USER_REG"] = $fdata;
		$tdatapaa_master_pscdp_nopaa[".searchableFields"][] = "USER_REG";
//	SYS_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SYS_STATUS";
	$fdata["GoodName"] = "SYS_STATUS";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_nopaa","SYS_STATUS");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "SYS_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SYS_STATUS";

	
	
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
	$edata["LookupTable"] = "global_estado_scdp";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "status_scdp_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "status_scdp_name";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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
		
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatapaa_master_pscdp_nopaa["SYS_STATUS"] = $fdata;
		$tdatapaa_master_pscdp_nopaa[".searchableFields"][] = "SYS_STATUS";
//	NUMERO_SCDP_SIIF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "NUMERO_SCDP_SIIF";
	$fdata["GoodName"] = "NUMERO_SCDP_SIIF";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_nopaa","NUMERO_SCDP_SIIF");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NUMERO_SCDP_SIIF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NUMERO_SCDP_SIIF";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatapaa_master_pscdp_nopaa["NUMERO_SCDP_SIIF"] = $fdata;
		$tdatapaa_master_pscdp_nopaa[".searchableFields"][] = "NUMERO_SCDP_SIIF";
//	DOCUMENTO_SCDP_SIIF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DOCUMENTO_SCDP_SIIF";
	$fdata["GoodName"] = "DOCUMENTO_SCDP_SIIF";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_nopaa","DOCUMENTO_SCDP_SIIF");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "DOCUMENTO_SCDP_SIIF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DOCUMENTO_SCDP_SIIF";

	
	
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
			$edata["EditParams"].= " maxlength=600";

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


	$tdatapaa_master_pscdp_nopaa["DOCUMENTO_SCDP_SIIF"] = $fdata;
		$tdatapaa_master_pscdp_nopaa[".searchableFields"][] = "DOCUMENTO_SCDP_SIIF";
//	FECHA_SCDP_SIIF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FECHA_SCDP_SIIF";
	$fdata["GoodName"] = "FECHA_SCDP_SIIF";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_nopaa","FECHA_SCDP_SIIF");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FECHA_SCDP_SIIF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHA_SCDP_SIIF";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatapaa_master_pscdp_nopaa["FECHA_SCDP_SIIF"] = $fdata;
		$tdatapaa_master_pscdp_nopaa[".searchableFields"][] = "FECHA_SCDP_SIIF";
//	USUARIO_SCDP_SIIF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "USUARIO_SCDP_SIIF";
	$fdata["GoodName"] = "USUARIO_SCDP_SIIF";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_nopaa","USUARIO_SCDP_SIIF");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "USUARIO_SCDP_SIIF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USUARIO_SCDP_SIIF";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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


	$tdatapaa_master_pscdp_nopaa["USUARIO_SCDP_SIIF"] = $fdata;
		$tdatapaa_master_pscdp_nopaa[".searchableFields"][] = "USUARIO_SCDP_SIIF";
//	TIPO_SOL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "TIPO_SOL";
	$fdata["GoodName"] = "TIPO_SOL";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_nopaa","TIPO_SOL");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "TIPO_SOL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPO_SOL";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatapaa_master_pscdp_nopaa["TIPO_SOL"] = $fdata;
		$tdatapaa_master_pscdp_nopaa[".searchableFields"][] = "TIPO_SOL";
//	FECHA_REG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "FECHA_REG";
	$fdata["GoodName"] = "FECHA_REG";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_nopaa","FECHA_REG");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FECHA_REG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHA_REG";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatapaa_master_pscdp_nopaa["FECHA_REG"] = $fdata;
		$tdatapaa_master_pscdp_nopaa[".searchableFields"][] = "FECHA_REG";
//	VALOR_SOLICITADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "VALOR_SOLICITADO";
	$fdata["GoodName"] = "VALOR_SOLICITADO";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_nopaa","VALOR_SOLICITADO");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "VALOR_SOLICITADO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VALOR_SOLICITADO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
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


	$tdatapaa_master_pscdp_nopaa["VALOR_SOLICITADO"] = $fdata;
		$tdatapaa_master_pscdp_nopaa[".searchableFields"][] = "VALOR_SOLICITADO";


$tables_data["paa_master_pscdp_nopaa"]=&$tdatapaa_master_pscdp_nopaa;
$field_labels["paa_master_pscdp_nopaa"] = &$fieldLabelspaa_master_pscdp_nopaa;
$fieldToolTips["paa_master_pscdp_nopaa"] = &$fieldToolTipspaa_master_pscdp_nopaa;
$placeHolders["paa_master_pscdp_nopaa"] = &$placeHolderspaa_master_pscdp_nopaa;
$page_titles["paa_master_pscdp_nopaa"] = &$pageTitlespaa_master_pscdp_nopaa;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["paa_master_pscdp_nopaa"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["paa_master_pscdp_nopaa"] = array();



	
				$strOriginalDetailsTable="paa_master";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="paa_master_no_paa";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paa_master_no_paa";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["paa_master_pscdp_nopaa"][0] = $masterParams;
				$masterTablesData["paa_master_pscdp_nopaa"][0]["masterKeys"] = array();
	$masterTablesData["paa_master_pscdp_nopaa"][0]["masterKeys"][]="PAA_ID";
				$masterTablesData["paa_master_pscdp_nopaa"][0]["detailKeys"] = array();
	$masterTablesData["paa_master_pscdp_nopaa"][0]["detailKeys"][]="PAA_ID_FK";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_paa_master_pscdp_nopaa()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PAAU_ID, PAA_ID_FK, SOL_FECHA, SOL_DEPENDENCIA, OPERACION_ID_FK, USER_REG, SYS_STATUS, NUMERO_SCDP_SIIF, DOCUMENTO_SCDP_SIIF, FECHA_SCDP_SIIF, USUARIO_SCDP_SIIF, TIPO_SOL, FECHA_REG, VALOR_SOLICITADO";
$proto0["m_strFrom"] = "FROM paa_master_pscdp";
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
	"m_strName" => "PAAU_ID",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_nopaa"
));

$proto6["m_sql"] = "PAAU_ID";
$proto6["m_srcTableName"] = "paa_master_pscdp_nopaa";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PAA_ID_FK",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_nopaa"
));

$proto8["m_sql"] = "PAA_ID_FK";
$proto8["m_srcTableName"] = "paa_master_pscdp_nopaa";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SOL_FECHA",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_nopaa"
));

$proto10["m_sql"] = "SOL_FECHA";
$proto10["m_srcTableName"] = "paa_master_pscdp_nopaa";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SOL_DEPENDENCIA",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_nopaa"
));

$proto12["m_sql"] = "SOL_DEPENDENCIA";
$proto12["m_srcTableName"] = "paa_master_pscdp_nopaa";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "OPERACION_ID_FK",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_nopaa"
));

$proto14["m_sql"] = "OPERACION_ID_FK";
$proto14["m_srcTableName"] = "paa_master_pscdp_nopaa";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "USER_REG",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_nopaa"
));

$proto16["m_sql"] = "USER_REG";
$proto16["m_srcTableName"] = "paa_master_pscdp_nopaa";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "SYS_STATUS",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_nopaa"
));

$proto18["m_sql"] = "SYS_STATUS";
$proto18["m_srcTableName"] = "paa_master_pscdp_nopaa";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "NUMERO_SCDP_SIIF",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_nopaa"
));

$proto20["m_sql"] = "NUMERO_SCDP_SIIF";
$proto20["m_srcTableName"] = "paa_master_pscdp_nopaa";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DOCUMENTO_SCDP_SIIF",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_nopaa"
));

$proto22["m_sql"] = "DOCUMENTO_SCDP_SIIF";
$proto22["m_srcTableName"] = "paa_master_pscdp_nopaa";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_SCDP_SIIF",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_nopaa"
));

$proto24["m_sql"] = "FECHA_SCDP_SIIF";
$proto24["m_srcTableName"] = "paa_master_pscdp_nopaa";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_SCDP_SIIF",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_nopaa"
));

$proto26["m_sql"] = "USUARIO_SCDP_SIIF";
$proto26["m_srcTableName"] = "paa_master_pscdp_nopaa";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO_SOL",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_nopaa"
));

$proto28["m_sql"] = "TIPO_SOL";
$proto28["m_srcTableName"] = "paa_master_pscdp_nopaa";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_REG",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_nopaa"
));

$proto30["m_sql"] = "FECHA_REG";
$proto30["m_srcTableName"] = "paa_master_pscdp_nopaa";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR_SOLICITADO",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_nopaa"
));

$proto32["m_sql"] = "VALOR_SOLICITADO";
$proto32["m_srcTableName"] = "paa_master_pscdp_nopaa";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "paa_master_pscdp";
$proto35["m_srcTableName"] = "paa_master_pscdp_nopaa";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "PAAU_ID";
$proto35["m_columns"][] = "PAA_ID_FK";
$proto35["m_columns"][] = "SOL_FECHA";
$proto35["m_columns"][] = "SOL_DEPENDENCIA";
$proto35["m_columns"][] = "OPERACION_ID_FK";
$proto35["m_columns"][] = "USER_REG";
$proto35["m_columns"][] = "SYS_STATUS";
$proto35["m_columns"][] = "NUMERO_SCDP_SIIF";
$proto35["m_columns"][] = "DOCUMENTO_SCDP_SIIF";
$proto35["m_columns"][] = "FECHA_SCDP_SIIF";
$proto35["m_columns"][] = "USUARIO_SCDP_SIIF";
$proto35["m_columns"][] = "TIPO_SOL";
$proto35["m_columns"][] = "DEV_FECHA";
$proto35["m_columns"][] = "DEV_USER";
$proto35["m_columns"][] = "DEV_MSG";
$proto35["m_columns"][] = "DEV_MAIL";
$proto35["m_columns"][] = "FECHA_REG";
$proto35["m_columns"][] = "VALOR_SOLICITADO";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "paa_master_pscdp";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "paa_master_pscdp_nopaa";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="paa_master_pscdp_nopaa";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_paa_master_pscdp_nopaa = createSqlQuery_paa_master_pscdp_nopaa();


	
										;

														

$tdatapaa_master_pscdp_nopaa[".sqlquery"] = $queryData_paa_master_pscdp_nopaa;

$tableEvents["paa_master_pscdp_nopaa"] = new eventsBase;
$tdatapaa_master_pscdp_nopaa[".hasEvents"] = false;

?>