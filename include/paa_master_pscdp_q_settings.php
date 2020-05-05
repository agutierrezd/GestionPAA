<?php



$tdatapaa_master_pscdp_q = array();
$tdatapaa_master_pscdp_q[".searchableFields"] = array();
$tdatapaa_master_pscdp_q[".ShortName"] = "paa_master_pscdp_q";
$tdatapaa_master_pscdp_q[".OwnerID"] = "";
$tdatapaa_master_pscdp_q[".OriginalTable"] = "paa_master_pscdp";


$tdatapaa_master_pscdp_q[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapaa_master_pscdp_q[".originalPagesByType"] = $tdatapaa_master_pscdp_q[".pagesByType"];
$tdatapaa_master_pscdp_q[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapaa_master_pscdp_q[".originalPages"] = $tdatapaa_master_pscdp_q[".pages"];
$tdatapaa_master_pscdp_q[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapaa_master_pscdp_q[".originalDefaultPages"] = $tdatapaa_master_pscdp_q[".defaultPages"];

//	field labels
$fieldLabelspaa_master_pscdp_q = array();
$fieldToolTipspaa_master_pscdp_q = array();
$pageTitlespaa_master_pscdp_q = array();
$placeHolderspaa_master_pscdp_q = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspaa_master_pscdp_q["Spanish"] = array();
	$fieldToolTipspaa_master_pscdp_q["Spanish"] = array();
	$placeHolderspaa_master_pscdp_q["Spanish"] = array();
	$pageTitlespaa_master_pscdp_q["Spanish"] = array();
	$fieldLabelspaa_master_pscdp_q["Spanish"]["PAAU_ID"] = "SOL_ID";
	$fieldToolTipspaa_master_pscdp_q["Spanish"]["PAAU_ID"] = "";
	$placeHolderspaa_master_pscdp_q["Spanish"]["PAAU_ID"] = "";
	$fieldLabelspaa_master_pscdp_q["Spanish"]["PAA_ID_FK"] = "PAA ID";
	$fieldToolTipspaa_master_pscdp_q["Spanish"]["PAA_ID_FK"] = "";
	$placeHolderspaa_master_pscdp_q["Spanish"]["PAA_ID_FK"] = "";
	$fieldLabelspaa_master_pscdp_q["Spanish"]["SOL_FECHA"] = "FECHA SOLICITUD";
	$fieldToolTipspaa_master_pscdp_q["Spanish"]["SOL_FECHA"] = "";
	$placeHolderspaa_master_pscdp_q["Spanish"]["SOL_FECHA"] = "";
	$fieldLabelspaa_master_pscdp_q["Spanish"]["SOL_DEPENDENCIA"] = "DEPENDENCIA";
	$fieldToolTipspaa_master_pscdp_q["Spanish"]["SOL_DEPENDENCIA"] = "";
	$placeHolderspaa_master_pscdp_q["Spanish"]["SOL_DEPENDENCIA"] = "";
	$fieldLabelspaa_master_pscdp_q["Spanish"]["OPERACION_ID_FK"] = "OPERACION A REALIZAR";
	$fieldToolTipspaa_master_pscdp_q["Spanish"]["OPERACION_ID_FK"] = "";
	$placeHolderspaa_master_pscdp_q["Spanish"]["OPERACION_ID_FK"] = "";
	$fieldLabelspaa_master_pscdp_q["Spanish"]["USER_REG"] = "USER REG";
	$fieldToolTipspaa_master_pscdp_q["Spanish"]["USER_REG"] = "";
	$placeHolderspaa_master_pscdp_q["Spanish"]["USER_REG"] = "";
	$fieldLabelspaa_master_pscdp_q["Spanish"]["SYS_STATUS"] = "ESTADO";
	$fieldToolTipspaa_master_pscdp_q["Spanish"]["SYS_STATUS"] = "";
	$placeHolderspaa_master_pscdp_q["Spanish"]["SYS_STATUS"] = "";
	$fieldLabelspaa_master_pscdp_q["Spanish"]["NUMERO_SCDP_SIIF"] = "NUMERO SCDP SIIF";
	$fieldToolTipspaa_master_pscdp_q["Spanish"]["NUMERO_SCDP_SIIF"] = "";
	$placeHolderspaa_master_pscdp_q["Spanish"]["NUMERO_SCDP_SIIF"] = "";
	$fieldLabelspaa_master_pscdp_q["Spanish"]["DOCUMENTO_SCDP_SIIF"] = "DOCUMENTO SCDP SIIF";
	$fieldToolTipspaa_master_pscdp_q["Spanish"]["DOCUMENTO_SCDP_SIIF"] = "";
	$placeHolderspaa_master_pscdp_q["Spanish"]["DOCUMENTO_SCDP_SIIF"] = "";
	$fieldLabelspaa_master_pscdp_q["Spanish"]["FECHA_SCDP_SIIF"] = "FECHA SCDP SIIF";
	$fieldToolTipspaa_master_pscdp_q["Spanish"]["FECHA_SCDP_SIIF"] = "";
	$placeHolderspaa_master_pscdp_q["Spanish"]["FECHA_SCDP_SIIF"] = "";
	$fieldLabelspaa_master_pscdp_q["Spanish"]["USUARIO_SCDP_SIIF"] = "USUARIO SCDP SIIF";
	$fieldToolTipspaa_master_pscdp_q["Spanish"]["USUARIO_SCDP_SIIF"] = "";
	$placeHolderspaa_master_pscdp_q["Spanish"]["USUARIO_SCDP_SIIF"] = "";
	$fieldLabelspaa_master_pscdp_q["Spanish"]["TIPO_SOL"] = "TIPO SOL";
	$fieldToolTipspaa_master_pscdp_q["Spanish"]["TIPO_SOL"] = "";
	$placeHolderspaa_master_pscdp_q["Spanish"]["TIPO_SOL"] = "";
	$fieldLabelspaa_master_pscdp_q["Spanish"]["DEV_FECHA"] = "DEV FECHA";
	$fieldToolTipspaa_master_pscdp_q["Spanish"]["DEV_FECHA"] = "";
	$placeHolderspaa_master_pscdp_q["Spanish"]["DEV_FECHA"] = "";
	$fieldLabelspaa_master_pscdp_q["Spanish"]["DEV_USER"] = "DEV USER";
	$fieldToolTipspaa_master_pscdp_q["Spanish"]["DEV_USER"] = "";
	$placeHolderspaa_master_pscdp_q["Spanish"]["DEV_USER"] = "";
	$fieldLabelspaa_master_pscdp_q["Spanish"]["DEV_MSG"] = "DEV MSG";
	$fieldToolTipspaa_master_pscdp_q["Spanish"]["DEV_MSG"] = "";
	$placeHolderspaa_master_pscdp_q["Spanish"]["DEV_MSG"] = "";
	$fieldLabelspaa_master_pscdp_q["Spanish"]["DEV_MAIL"] = "DEV MAIL";
	$fieldToolTipspaa_master_pscdp_q["Spanish"]["DEV_MAIL"] = "";
	$placeHolderspaa_master_pscdp_q["Spanish"]["DEV_MAIL"] = "";
	$fieldLabelspaa_master_pscdp_q["Spanish"]["FECHA_REG"] = "FECHA REGISTRO";
	$fieldToolTipspaa_master_pscdp_q["Spanish"]["FECHA_REG"] = "";
	$placeHolderspaa_master_pscdp_q["Spanish"]["FECHA_REG"] = "";
	$fieldLabelspaa_master_pscdp_q["Spanish"]["VALOR_SOLICITADO"] = "VALOR SOLICITADO";
	$fieldToolTipspaa_master_pscdp_q["Spanish"]["VALOR_SOLICITADO"] = "";
	$placeHolderspaa_master_pscdp_q["Spanish"]["VALOR_SOLICITADO"] = "";
	if (count($fieldToolTipspaa_master_pscdp_q["Spanish"]))
		$tdatapaa_master_pscdp_q[".isUseToolTips"] = true;
}


	$tdatapaa_master_pscdp_q[".NCSearch"] = true;



$tdatapaa_master_pscdp_q[".shortTableName"] = "paa_master_pscdp_q";
$tdatapaa_master_pscdp_q[".nSecOptions"] = 0;

$tdatapaa_master_pscdp_q[".mainTableOwnerID"] = "";
$tdatapaa_master_pscdp_q[".entityType"] = 1;

$tdatapaa_master_pscdp_q[".strOriginalTableName"] = "paa_master_pscdp";

	



$tdatapaa_master_pscdp_q[".showAddInPopup"] = false;

$tdatapaa_master_pscdp_q[".showEditInPopup"] = false;

$tdatapaa_master_pscdp_q[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapaa_master_pscdp_q[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapaa_master_pscdp_q[".listAjax"] = false;
//	temporary
$tdatapaa_master_pscdp_q[".listAjax"] = false;

	$tdatapaa_master_pscdp_q[".audit"] = false;

	$tdatapaa_master_pscdp_q[".locking"] = false;


$pages = $tdatapaa_master_pscdp_q[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapaa_master_pscdp_q[".edit"] = true;
	$tdatapaa_master_pscdp_q[".afterEditAction"] = 1;
	$tdatapaa_master_pscdp_q[".closePopupAfterEdit"] = 1;
	$tdatapaa_master_pscdp_q[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapaa_master_pscdp_q[".add"] = true;
$tdatapaa_master_pscdp_q[".afterAddAction"] = 1;
$tdatapaa_master_pscdp_q[".closePopupAfterAdd"] = 1;
$tdatapaa_master_pscdp_q[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapaa_master_pscdp_q[".list"] = true;
}



$tdatapaa_master_pscdp_q[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapaa_master_pscdp_q[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapaa_master_pscdp_q[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapaa_master_pscdp_q[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapaa_master_pscdp_q[".printFriendly"] = true;
}



$tdatapaa_master_pscdp_q[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapaa_master_pscdp_q[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapaa_master_pscdp_q[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapaa_master_pscdp_q[".isUseAjaxSuggest"] = true;

$tdatapaa_master_pscdp_q[".rowHighlite"] = true;



																								

$tdatapaa_master_pscdp_q[".ajaxCodeSnippetAdded"] = false;

$tdatapaa_master_pscdp_q[".buttonsAdded"] = false;

$tdatapaa_master_pscdp_q[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapaa_master_pscdp_q[".isUseTimeForSearch"] = false;


$tdatapaa_master_pscdp_q[".badgeColor"] = "008b8b";


$tdatapaa_master_pscdp_q[".allSearchFields"] = array();
$tdatapaa_master_pscdp_q[".filterFields"] = array();
$tdatapaa_master_pscdp_q[".requiredSearchFields"] = array();

$tdatapaa_master_pscdp_q[".googleLikeFields"] = array();
$tdatapaa_master_pscdp_q[".googleLikeFields"][] = "PAAU_ID";
$tdatapaa_master_pscdp_q[".googleLikeFields"][] = "PAA_ID_FK";
$tdatapaa_master_pscdp_q[".googleLikeFields"][] = "SOL_FECHA";
$tdatapaa_master_pscdp_q[".googleLikeFields"][] = "SOL_DEPENDENCIA";
$tdatapaa_master_pscdp_q[".googleLikeFields"][] = "OPERACION_ID_FK";
$tdatapaa_master_pscdp_q[".googleLikeFields"][] = "USER_REG";
$tdatapaa_master_pscdp_q[".googleLikeFields"][] = "SYS_STATUS";
$tdatapaa_master_pscdp_q[".googleLikeFields"][] = "NUMERO_SCDP_SIIF";
$tdatapaa_master_pscdp_q[".googleLikeFields"][] = "DOCUMENTO_SCDP_SIIF";
$tdatapaa_master_pscdp_q[".googleLikeFields"][] = "FECHA_SCDP_SIIF";
$tdatapaa_master_pscdp_q[".googleLikeFields"][] = "USUARIO_SCDP_SIIF";
$tdatapaa_master_pscdp_q[".googleLikeFields"][] = "TIPO_SOL";
$tdatapaa_master_pscdp_q[".googleLikeFields"][] = "DEV_FECHA";
$tdatapaa_master_pscdp_q[".googleLikeFields"][] = "DEV_USER";
$tdatapaa_master_pscdp_q[".googleLikeFields"][] = "DEV_MSG";
$tdatapaa_master_pscdp_q[".googleLikeFields"][] = "DEV_MAIL";
$tdatapaa_master_pscdp_q[".googleLikeFields"][] = "FECHA_REG";
$tdatapaa_master_pscdp_q[".googleLikeFields"][] = "VALOR_SOLICITADO";



$tdatapaa_master_pscdp_q[".tableType"] = "list";

$tdatapaa_master_pscdp_q[".printerPageOrientation"] = 0;
$tdatapaa_master_pscdp_q[".nPrinterPageScale"] = 100;

$tdatapaa_master_pscdp_q[".nPrinterSplitRecords"] = 40;

$tdatapaa_master_pscdp_q[".geocodingEnabled"] = false;










$tdatapaa_master_pscdp_q[".pageSize"] = 20;

$tdatapaa_master_pscdp_q[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapaa_master_pscdp_q[".strOrderBy"] = $tstrOrderBy;

$tdatapaa_master_pscdp_q[".orderindexes"] = array();

$tdatapaa_master_pscdp_q[".sqlHead"] = "SELECT PAAU_ID,  	PAA_ID_FK,  	SOL_FECHA,  	SOL_DEPENDENCIA,  	OPERACION_ID_FK,  	USER_REG,  	SYS_STATUS,  	NUMERO_SCDP_SIIF,  	DOCUMENTO_SCDP_SIIF,  	FECHA_SCDP_SIIF,  	USUARIO_SCDP_SIIF,  	TIPO_SOL,  	DEV_FECHA,  	DEV_USER,  	DEV_MSG,  	DEV_MAIL,  	FECHA_REG,  	VALOR_SOLICITADO";
$tdatapaa_master_pscdp_q[".sqlFrom"] = "FROM paa_master_pscdp";
$tdatapaa_master_pscdp_q[".sqlWhereExpr"] = "";
$tdatapaa_master_pscdp_q[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapaa_master_pscdp_q[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapaa_master_pscdp_q[".arrGroupsPerPage"] = $arrGPP;

$tdatapaa_master_pscdp_q[".highlightSearchResults"] = true;

$tableKeyspaa_master_pscdp_q = array();
$tableKeyspaa_master_pscdp_q[] = "PAAU_ID";
$tdatapaa_master_pscdp_q[".Keys"] = $tableKeyspaa_master_pscdp_q;


$tdatapaa_master_pscdp_q[".hideMobileList"] = array();




//	PAAU_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PAAU_ID";
	$fdata["GoodName"] = "PAAU_ID";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_q","PAAU_ID");
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


	$tdatapaa_master_pscdp_q["PAAU_ID"] = $fdata;
		$tdatapaa_master_pscdp_q[".searchableFields"][] = "PAAU_ID";
//	PAA_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PAA_ID_FK";
	$fdata["GoodName"] = "PAA_ID_FK";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_q","PAA_ID_FK");
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


	$tdatapaa_master_pscdp_q["PAA_ID_FK"] = $fdata;
		$tdatapaa_master_pscdp_q[".searchableFields"][] = "PAA_ID_FK";
//	SOL_FECHA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SOL_FECHA";
	$fdata["GoodName"] = "SOL_FECHA";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_q","SOL_FECHA");
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


	$tdatapaa_master_pscdp_q["SOL_FECHA"] = $fdata;
		$tdatapaa_master_pscdp_q[".searchableFields"][] = "SOL_FECHA";
//	SOL_DEPENDENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SOL_DEPENDENCIA";
	$fdata["GoodName"] = "SOL_DEPENDENCIA";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_q","SOL_DEPENDENCIA");
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdatapaa_master_pscdp_q["SOL_DEPENDENCIA"] = $fdata;
		$tdatapaa_master_pscdp_q[".searchableFields"][] = "SOL_DEPENDENCIA";
//	OPERACION_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "OPERACION_ID_FK";
	$fdata["GoodName"] = "OPERACION_ID_FK";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_q","OPERACION_ID_FK");
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


	$tdatapaa_master_pscdp_q["OPERACION_ID_FK"] = $fdata;
		$tdatapaa_master_pscdp_q[".searchableFields"][] = "OPERACION_ID_FK";
//	USER_REG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USER_REG";
	$fdata["GoodName"] = "USER_REG";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_q","USER_REG");
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


	$tdatapaa_master_pscdp_q["USER_REG"] = $fdata;
		$tdatapaa_master_pscdp_q[".searchableFields"][] = "USER_REG";
//	SYS_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SYS_STATUS";
	$fdata["GoodName"] = "SYS_STATUS";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_q","SYS_STATUS");
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


	$tdatapaa_master_pscdp_q["SYS_STATUS"] = $fdata;
		$tdatapaa_master_pscdp_q[".searchableFields"][] = "SYS_STATUS";
//	NUMERO_SCDP_SIIF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "NUMERO_SCDP_SIIF";
	$fdata["GoodName"] = "NUMERO_SCDP_SIIF";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_q","NUMERO_SCDP_SIIF");
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


	$tdatapaa_master_pscdp_q["NUMERO_SCDP_SIIF"] = $fdata;
		$tdatapaa_master_pscdp_q[".searchableFields"][] = "NUMERO_SCDP_SIIF";
//	DOCUMENTO_SCDP_SIIF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DOCUMENTO_SCDP_SIIF";
	$fdata["GoodName"] = "DOCUMENTO_SCDP_SIIF";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_q","DOCUMENTO_SCDP_SIIF");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "DOCUMENTO_SCDP_SIIF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DOCUMENTO_SCDP_SIIF";

	
	
				$fdata["UploadFolder"] = "scdp";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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


	$tdatapaa_master_pscdp_q["DOCUMENTO_SCDP_SIIF"] = $fdata;
		$tdatapaa_master_pscdp_q[".searchableFields"][] = "DOCUMENTO_SCDP_SIIF";
//	FECHA_SCDP_SIIF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FECHA_SCDP_SIIF";
	$fdata["GoodName"] = "FECHA_SCDP_SIIF";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_q","FECHA_SCDP_SIIF");
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


	$tdatapaa_master_pscdp_q["FECHA_SCDP_SIIF"] = $fdata;
		$tdatapaa_master_pscdp_q[".searchableFields"][] = "FECHA_SCDP_SIIF";
//	USUARIO_SCDP_SIIF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "USUARIO_SCDP_SIIF";
	$fdata["GoodName"] = "USUARIO_SCDP_SIIF";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_q","USUARIO_SCDP_SIIF");
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


	$tdatapaa_master_pscdp_q["USUARIO_SCDP_SIIF"] = $fdata;
		$tdatapaa_master_pscdp_q[".searchableFields"][] = "USUARIO_SCDP_SIIF";
//	TIPO_SOL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "TIPO_SOL";
	$fdata["GoodName"] = "TIPO_SOL";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_q","TIPO_SOL");
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


	$tdatapaa_master_pscdp_q["TIPO_SOL"] = $fdata;
		$tdatapaa_master_pscdp_q[".searchableFields"][] = "TIPO_SOL";
//	DEV_FECHA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DEV_FECHA";
	$fdata["GoodName"] = "DEV_FECHA";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_q","DEV_FECHA");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "DEV_FECHA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEV_FECHA";

	
	
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


	$tdatapaa_master_pscdp_q["DEV_FECHA"] = $fdata;
		$tdatapaa_master_pscdp_q[".searchableFields"][] = "DEV_FECHA";
//	DEV_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DEV_USER";
	$fdata["GoodName"] = "DEV_USER";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_q","DEV_USER");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "DEV_USER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEV_USER";

	
	
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


	$tdatapaa_master_pscdp_q["DEV_USER"] = $fdata;
		$tdatapaa_master_pscdp_q[".searchableFields"][] = "DEV_USER";
//	DEV_MSG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "DEV_MSG";
	$fdata["GoodName"] = "DEV_MSG";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_q","DEV_MSG");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "DEV_MSG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEV_MSG";

	
	
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
			$edata["EditParams"].= " maxlength=800";

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


	$tdatapaa_master_pscdp_q["DEV_MSG"] = $fdata;
		$tdatapaa_master_pscdp_q[".searchableFields"][] = "DEV_MSG";
//	DEV_MAIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "DEV_MAIL";
	$fdata["GoodName"] = "DEV_MAIL";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_q","DEV_MAIL");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "DEV_MAIL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEV_MAIL";

	
	
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


	$tdatapaa_master_pscdp_q["DEV_MAIL"] = $fdata;
		$tdatapaa_master_pscdp_q[".searchableFields"][] = "DEV_MAIL";
//	FECHA_REG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "FECHA_REG";
	$fdata["GoodName"] = "FECHA_REG";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_q","FECHA_REG");
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


	$tdatapaa_master_pscdp_q["FECHA_REG"] = $fdata;
		$tdatapaa_master_pscdp_q[".searchableFields"][] = "FECHA_REG";
//	VALOR_SOLICITADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "VALOR_SOLICITADO";
	$fdata["GoodName"] = "VALOR_SOLICITADO";
	$fdata["ownerTable"] = "paa_master_pscdp";
	$fdata["Label"] = GetFieldLabel("paa_master_pscdp_q","VALOR_SOLICITADO");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "VALOR_SOLICITADO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VALOR_SOLICITADO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
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


	$tdatapaa_master_pscdp_q["VALOR_SOLICITADO"] = $fdata;
		$tdatapaa_master_pscdp_q[".searchableFields"][] = "VALOR_SOLICITADO";


$tables_data["paa_master_pscdp_q"]=&$tdatapaa_master_pscdp_q;
$field_labels["paa_master_pscdp_q"] = &$fieldLabelspaa_master_pscdp_q;
$fieldToolTips["paa_master_pscdp_q"] = &$fieldToolTipspaa_master_pscdp_q;
$placeHolders["paa_master_pscdp_q"] = &$placeHolderspaa_master_pscdp_q;
$page_titles["paa_master_pscdp_q"] = &$pageTitlespaa_master_pscdp_q;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["paa_master_pscdp_q"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["paa_master_pscdp_q"] = array();



	
				$strOriginalDetailsTable="paa_master";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="paa_master_q";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paa_master_q";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["paa_master_pscdp_q"][0] = $masterParams;
				$masterTablesData["paa_master_pscdp_q"][0]["masterKeys"] = array();
	$masterTablesData["paa_master_pscdp_q"][0]["masterKeys"][]="PAA_ID";
				$masterTablesData["paa_master_pscdp_q"][0]["detailKeys"] = array();
	$masterTablesData["paa_master_pscdp_q"][0]["detailKeys"][]="PAA_ID_FK";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_paa_master_pscdp_q()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PAAU_ID,  	PAA_ID_FK,  	SOL_FECHA,  	SOL_DEPENDENCIA,  	OPERACION_ID_FK,  	USER_REG,  	SYS_STATUS,  	NUMERO_SCDP_SIIF,  	DOCUMENTO_SCDP_SIIF,  	FECHA_SCDP_SIIF,  	USUARIO_SCDP_SIIF,  	TIPO_SOL,  	DEV_FECHA,  	DEV_USER,  	DEV_MSG,  	DEV_MAIL,  	FECHA_REG,  	VALOR_SOLICITADO";
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
	"m_srcTableName" => "paa_master_pscdp_q"
));

$proto6["m_sql"] = "PAAU_ID";
$proto6["m_srcTableName"] = "paa_master_pscdp_q";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PAA_ID_FK",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_q"
));

$proto8["m_sql"] = "PAA_ID_FK";
$proto8["m_srcTableName"] = "paa_master_pscdp_q";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SOL_FECHA",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_q"
));

$proto10["m_sql"] = "SOL_FECHA";
$proto10["m_srcTableName"] = "paa_master_pscdp_q";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SOL_DEPENDENCIA",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_q"
));

$proto12["m_sql"] = "SOL_DEPENDENCIA";
$proto12["m_srcTableName"] = "paa_master_pscdp_q";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "OPERACION_ID_FK",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_q"
));

$proto14["m_sql"] = "OPERACION_ID_FK";
$proto14["m_srcTableName"] = "paa_master_pscdp_q";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "USER_REG",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_q"
));

$proto16["m_sql"] = "USER_REG";
$proto16["m_srcTableName"] = "paa_master_pscdp_q";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "SYS_STATUS",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_q"
));

$proto18["m_sql"] = "SYS_STATUS";
$proto18["m_srcTableName"] = "paa_master_pscdp_q";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "NUMERO_SCDP_SIIF",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_q"
));

$proto20["m_sql"] = "NUMERO_SCDP_SIIF";
$proto20["m_srcTableName"] = "paa_master_pscdp_q";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DOCUMENTO_SCDP_SIIF",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_q"
));

$proto22["m_sql"] = "DOCUMENTO_SCDP_SIIF";
$proto22["m_srcTableName"] = "paa_master_pscdp_q";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_SCDP_SIIF",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_q"
));

$proto24["m_sql"] = "FECHA_SCDP_SIIF";
$proto24["m_srcTableName"] = "paa_master_pscdp_q";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "USUARIO_SCDP_SIIF",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_q"
));

$proto26["m_sql"] = "USUARIO_SCDP_SIIF";
$proto26["m_srcTableName"] = "paa_master_pscdp_q";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO_SOL",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_q"
));

$proto28["m_sql"] = "TIPO_SOL";
$proto28["m_srcTableName"] = "paa_master_pscdp_q";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "DEV_FECHA",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_q"
));

$proto30["m_sql"] = "DEV_FECHA";
$proto30["m_srcTableName"] = "paa_master_pscdp_q";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DEV_USER",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_q"
));

$proto32["m_sql"] = "DEV_USER";
$proto32["m_srcTableName"] = "paa_master_pscdp_q";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "DEV_MSG",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_q"
));

$proto34["m_sql"] = "DEV_MSG";
$proto34["m_srcTableName"] = "paa_master_pscdp_q";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "DEV_MAIL",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_q"
));

$proto36["m_sql"] = "DEV_MAIL";
$proto36["m_srcTableName"] = "paa_master_pscdp_q";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_REG",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_q"
));

$proto38["m_sql"] = "FECHA_REG";
$proto38["m_srcTableName"] = "paa_master_pscdp_q";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR_SOLICITADO",
	"m_strTable" => "paa_master_pscdp",
	"m_srcTableName" => "paa_master_pscdp_q"
));

$proto40["m_sql"] = "VALOR_SOLICITADO";
$proto40["m_srcTableName"] = "paa_master_pscdp_q";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "paa_master_pscdp";
$proto43["m_srcTableName"] = "paa_master_pscdp_q";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "PAAU_ID";
$proto43["m_columns"][] = "PAA_ID_FK";
$proto43["m_columns"][] = "SOL_FECHA";
$proto43["m_columns"][] = "SOL_DEPENDENCIA";
$proto43["m_columns"][] = "OPERACION_ID_FK";
$proto43["m_columns"][] = "USER_REG";
$proto43["m_columns"][] = "SYS_STATUS";
$proto43["m_columns"][] = "NUMERO_SCDP_SIIF";
$proto43["m_columns"][] = "DOCUMENTO_SCDP_SIIF";
$proto43["m_columns"][] = "FECHA_SCDP_SIIF";
$proto43["m_columns"][] = "USUARIO_SCDP_SIIF";
$proto43["m_columns"][] = "TIPO_SOL";
$proto43["m_columns"][] = "DEV_FECHA";
$proto43["m_columns"][] = "DEV_USER";
$proto43["m_columns"][] = "DEV_MSG";
$proto43["m_columns"][] = "DEV_MAIL";
$proto43["m_columns"][] = "FECHA_REG";
$proto43["m_columns"][] = "VALOR_SOLICITADO";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "paa_master_pscdp";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "paa_master_pscdp_q";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="paa_master_pscdp_q";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_paa_master_pscdp_q = createSqlQuery_paa_master_pscdp_q();


	
										;

																		

$tdatapaa_master_pscdp_q[".sqlquery"] = $queryData_paa_master_pscdp_q;

$tableEvents["paa_master_pscdp_q"] = new eventsBase;
$tdatapaa_master_pscdp_q[".hasEvents"] = false;

?>