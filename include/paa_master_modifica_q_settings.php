<?php



$tdatapaa_master_modifica_q = array();
$tdatapaa_master_modifica_q[".searchableFields"] = array();
$tdatapaa_master_modifica_q[".ShortName"] = "paa_master_modifica_q";
$tdatapaa_master_modifica_q[".OwnerID"] = "";
$tdatapaa_master_modifica_q[".OriginalTable"] = "paa_master_modifica";


$tdatapaa_master_modifica_q[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapaa_master_modifica_q[".originalPagesByType"] = $tdatapaa_master_modifica_q[".pagesByType"];
$tdatapaa_master_modifica_q[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapaa_master_modifica_q[".originalPages"] = $tdatapaa_master_modifica_q[".pages"];
$tdatapaa_master_modifica_q[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapaa_master_modifica_q[".originalDefaultPages"] = $tdatapaa_master_modifica_q[".defaultPages"];

//	field labels
$fieldLabelspaa_master_modifica_q = array();
$fieldToolTipspaa_master_modifica_q = array();
$pageTitlespaa_master_modifica_q = array();
$placeHolderspaa_master_modifica_q = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspaa_master_modifica_q["Spanish"] = array();
	$fieldToolTipspaa_master_modifica_q["Spanish"] = array();
	$placeHolderspaa_master_modifica_q["Spanish"] = array();
	$pageTitlespaa_master_modifica_q["Spanish"] = array();
	$fieldLabelspaa_master_modifica_q["Spanish"]["PAAM_ID"] = "TRANSACCIÓN";
	$fieldToolTipspaa_master_modifica_q["Spanish"]["PAAM_ID"] = "";
	$placeHolderspaa_master_modifica_q["Spanish"]["PAAM_ID"] = "";
	$fieldLabelspaa_master_modifica_q["Spanish"]["PAA_ID_FK"] = "PAA ID";
	$fieldToolTipspaa_master_modifica_q["Spanish"]["PAA_ID_FK"] = "";
	$placeHolderspaa_master_modifica_q["Spanish"]["PAA_ID_FK"] = "";
	$fieldLabelspaa_master_modifica_q["Spanish"]["PAAM_FECHA"] = "FECHA";
	$fieldToolTipspaa_master_modifica_q["Spanish"]["PAAM_FECHA"] = "";
	$placeHolderspaa_master_modifica_q["Spanish"]["PAAM_FECHA"] = "";
	$fieldLabelspaa_master_modifica_q["Spanish"]["PAA_MODIFICA"] = "DETALLE DE LA SOLICITUD";
	$fieldToolTipspaa_master_modifica_q["Spanish"]["PAA_MODIFICA"] = "";
	$placeHolderspaa_master_modifica_q["Spanish"]["PAA_MODIFICA"] = "";
	$fieldLabelspaa_master_modifica_q["Spanish"]["SYSUSER"] = "SOLICITADO POR";
	$fieldToolTipspaa_master_modifica_q["Spanish"]["SYSUSER"] = "";
	$placeHolderspaa_master_modifica_q["Spanish"]["SYSUSER"] = "";
	$fieldLabelspaa_master_modifica_q["Spanish"]["MAIL_NOT"] = "CORREO";
	$fieldToolTipspaa_master_modifica_q["Spanish"]["MAIL_NOT"] = "";
	$placeHolderspaa_master_modifica_q["Spanish"]["MAIL_NOT"] = "";
	$fieldLabelspaa_master_modifica_q["Spanish"]["PAAM_ST"] = "ESTADO";
	$fieldToolTipspaa_master_modifica_q["Spanish"]["PAAM_ST"] = "";
	$placeHolderspaa_master_modifica_q["Spanish"]["PAAM_ST"] = "";
	if (count($fieldToolTipspaa_master_modifica_q["Spanish"]))
		$tdatapaa_master_modifica_q[".isUseToolTips"] = true;
}


	$tdatapaa_master_modifica_q[".NCSearch"] = true;



$tdatapaa_master_modifica_q[".shortTableName"] = "paa_master_modifica_q";
$tdatapaa_master_modifica_q[".nSecOptions"] = 0;

$tdatapaa_master_modifica_q[".mainTableOwnerID"] = "";
$tdatapaa_master_modifica_q[".entityType"] = 1;

$tdatapaa_master_modifica_q[".strOriginalTableName"] = "paa_master_modifica";

	



$tdatapaa_master_modifica_q[".showAddInPopup"] = false;

$tdatapaa_master_modifica_q[".showEditInPopup"] = false;

$tdatapaa_master_modifica_q[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapaa_master_modifica_q[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapaa_master_modifica_q[".listAjax"] = false;
//	temporary
$tdatapaa_master_modifica_q[".listAjax"] = false;

	$tdatapaa_master_modifica_q[".audit"] = false;

	$tdatapaa_master_modifica_q[".locking"] = false;


$pages = $tdatapaa_master_modifica_q[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapaa_master_modifica_q[".edit"] = true;
	$tdatapaa_master_modifica_q[".afterEditAction"] = 1;
	$tdatapaa_master_modifica_q[".closePopupAfterEdit"] = 1;
	$tdatapaa_master_modifica_q[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapaa_master_modifica_q[".add"] = true;
$tdatapaa_master_modifica_q[".afterAddAction"] = 1;
$tdatapaa_master_modifica_q[".closePopupAfterAdd"] = 1;
$tdatapaa_master_modifica_q[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapaa_master_modifica_q[".list"] = true;
}



$tdatapaa_master_modifica_q[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapaa_master_modifica_q[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapaa_master_modifica_q[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapaa_master_modifica_q[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapaa_master_modifica_q[".printFriendly"] = true;
}



$tdatapaa_master_modifica_q[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapaa_master_modifica_q[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapaa_master_modifica_q[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapaa_master_modifica_q[".isUseAjaxSuggest"] = true;

$tdatapaa_master_modifica_q[".rowHighlite"] = true;



																								

$tdatapaa_master_modifica_q[".ajaxCodeSnippetAdded"] = false;

$tdatapaa_master_modifica_q[".buttonsAdded"] = false;

$tdatapaa_master_modifica_q[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapaa_master_modifica_q[".isUseTimeForSearch"] = false;


$tdatapaa_master_modifica_q[".badgeColor"] = "d2af80";


$tdatapaa_master_modifica_q[".allSearchFields"] = array();
$tdatapaa_master_modifica_q[".filterFields"] = array();
$tdatapaa_master_modifica_q[".requiredSearchFields"] = array();

$tdatapaa_master_modifica_q[".googleLikeFields"] = array();
$tdatapaa_master_modifica_q[".googleLikeFields"][] = "PAAM_ID";
$tdatapaa_master_modifica_q[".googleLikeFields"][] = "PAA_ID_FK";
$tdatapaa_master_modifica_q[".googleLikeFields"][] = "PAAM_FECHA";
$tdatapaa_master_modifica_q[".googleLikeFields"][] = "PAA_MODIFICA";
$tdatapaa_master_modifica_q[".googleLikeFields"][] = "SYSUSER";
$tdatapaa_master_modifica_q[".googleLikeFields"][] = "MAIL_NOT";
$tdatapaa_master_modifica_q[".googleLikeFields"][] = "PAAM_ST";



$tdatapaa_master_modifica_q[".tableType"] = "list";

$tdatapaa_master_modifica_q[".printerPageOrientation"] = 0;
$tdatapaa_master_modifica_q[".nPrinterPageScale"] = 100;

$tdatapaa_master_modifica_q[".nPrinterSplitRecords"] = 40;

$tdatapaa_master_modifica_q[".geocodingEnabled"] = false;










$tdatapaa_master_modifica_q[".pageSize"] = 20;

$tdatapaa_master_modifica_q[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapaa_master_modifica_q[".strOrderBy"] = $tstrOrderBy;

$tdatapaa_master_modifica_q[".orderindexes"] = array();

$tdatapaa_master_modifica_q[".sqlHead"] = "SELECT PAAM_ID, PAA_ID_FK, PAAM_FECHA, PAA_MODIFICA, SYSUSER, MAIL_NOT, PAAM_ST";
$tdatapaa_master_modifica_q[".sqlFrom"] = "FROM paa_master_modifica";
$tdatapaa_master_modifica_q[".sqlWhereExpr"] = "";
$tdatapaa_master_modifica_q[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapaa_master_modifica_q[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapaa_master_modifica_q[".arrGroupsPerPage"] = $arrGPP;

$tdatapaa_master_modifica_q[".highlightSearchResults"] = true;

$tableKeyspaa_master_modifica_q = array();
$tableKeyspaa_master_modifica_q[] = "PAAM_ID";
$tdatapaa_master_modifica_q[".Keys"] = $tableKeyspaa_master_modifica_q;


$tdatapaa_master_modifica_q[".hideMobileList"] = array();




//	PAAM_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PAAM_ID";
	$fdata["GoodName"] = "PAAM_ID";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica_q","PAAM_ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "PAAM_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAAM_ID";

	
	
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


	$tdatapaa_master_modifica_q["PAAM_ID"] = $fdata;
		$tdatapaa_master_modifica_q[".searchableFields"][] = "PAAM_ID";
//	PAA_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PAA_ID_FK";
	$fdata["GoodName"] = "PAA_ID_FK";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica_q","PAA_ID_FK");
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "paa_master";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"MAIL_NOT", 'lookupF'=>"RESPONSABLE_EMAIL");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PAA_ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "PAA_ID";

	

	
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


	$tdatapaa_master_modifica_q["PAA_ID_FK"] = $fdata;
		$tdatapaa_master_modifica_q[".searchableFields"][] = "PAA_ID_FK";
//	PAAM_FECHA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PAAM_FECHA";
	$fdata["GoodName"] = "PAAM_FECHA";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica_q","PAAM_FECHA");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "PAAM_FECHA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAAM_FECHA";

	
	
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


	$tdatapaa_master_modifica_q["PAAM_FECHA"] = $fdata;
		$tdatapaa_master_modifica_q[".searchableFields"][] = "PAAM_FECHA";
//	PAA_MODIFICA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PAA_MODIFICA";
	$fdata["GoodName"] = "PAA_MODIFICA";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica_q","PAA_MODIFICA");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "PAA_MODIFICA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAA_MODIFICA";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatapaa_master_modifica_q["PAA_MODIFICA"] = $fdata;
		$tdatapaa_master_modifica_q[".searchableFields"][] = "PAA_MODIFICA";
//	SYSUSER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SYSUSER";
	$fdata["GoodName"] = "SYSUSER";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica_q","SYSUSER");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SYSUSER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SYSUSER";

	
	
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


	$tdatapaa_master_modifica_q["SYSUSER"] = $fdata;
		$tdatapaa_master_modifica_q[".searchableFields"][] = "SYSUSER";
//	MAIL_NOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "MAIL_NOT";
	$fdata["GoodName"] = "MAIL_NOT";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica_q","MAIL_NOT");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "MAIL_NOT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MAIL_NOT";

	
	
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


	$tdatapaa_master_modifica_q["MAIL_NOT"] = $fdata;
		$tdatapaa_master_modifica_q[".searchableFields"][] = "MAIL_NOT";
//	PAAM_ST
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PAAM_ST";
	$fdata["GoodName"] = "PAAM_ST";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica_q","PAAM_ST");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "PAAM_ST";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAAM_ST";

	
	
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
	$edata["LookupTable"] = "global_estado_mod";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "status_mod_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "status_mod_name";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "status_mod_id";

	
	
	
	

	
	
	
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


	$tdatapaa_master_modifica_q["PAAM_ST"] = $fdata;
		$tdatapaa_master_modifica_q[".searchableFields"][] = "PAAM_ST";


$tables_data["paa_master_modifica_q"]=&$tdatapaa_master_modifica_q;
$field_labels["paa_master_modifica_q"] = &$fieldLabelspaa_master_modifica_q;
$fieldToolTips["paa_master_modifica_q"] = &$fieldToolTipspaa_master_modifica_q;
$placeHolders["paa_master_modifica_q"] = &$placeHolderspaa_master_modifica_q;
$page_titles["paa_master_modifica_q"] = &$pageTitlespaa_master_modifica_q;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["paa_master_modifica_q"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["paa_master_modifica_q"] = array();



	
				$strOriginalDetailsTable="paa_master";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="paa_master_q";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paa_master_q";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["paa_master_modifica_q"][0] = $masterParams;
				$masterTablesData["paa_master_modifica_q"][0]["masterKeys"] = array();
	$masterTablesData["paa_master_modifica_q"][0]["masterKeys"][]="PAA_ID";
				$masterTablesData["paa_master_modifica_q"][0]["detailKeys"] = array();
	$masterTablesData["paa_master_modifica_q"][0]["detailKeys"][]="PAA_ID_FK";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_paa_master_modifica_q()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PAAM_ID, PAA_ID_FK, PAAM_FECHA, PAA_MODIFICA, SYSUSER, MAIL_NOT, PAAM_ST";
$proto0["m_strFrom"] = "FROM paa_master_modifica";
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
	"m_strName" => "PAAM_ID",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica_q"
));

$proto6["m_sql"] = "PAAM_ID";
$proto6["m_srcTableName"] = "paa_master_modifica_q";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PAA_ID_FK",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica_q"
));

$proto8["m_sql"] = "PAA_ID_FK";
$proto8["m_srcTableName"] = "paa_master_modifica_q";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PAAM_FECHA",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica_q"
));

$proto10["m_sql"] = "PAAM_FECHA";
$proto10["m_srcTableName"] = "paa_master_modifica_q";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PAA_MODIFICA",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica_q"
));

$proto12["m_sql"] = "PAA_MODIFICA";
$proto12["m_srcTableName"] = "paa_master_modifica_q";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SYSUSER",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica_q"
));

$proto14["m_sql"] = "SYSUSER";
$proto14["m_srcTableName"] = "paa_master_modifica_q";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "MAIL_NOT",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica_q"
));

$proto16["m_sql"] = "MAIL_NOT";
$proto16["m_srcTableName"] = "paa_master_modifica_q";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PAAM_ST",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica_q"
));

$proto18["m_sql"] = "PAAM_ST";
$proto18["m_srcTableName"] = "paa_master_modifica_q";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "paa_master_modifica";
$proto21["m_srcTableName"] = "paa_master_modifica_q";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "PAAM_ID";
$proto21["m_columns"][] = "PAA_ID_FK";
$proto21["m_columns"][] = "PAAM_FECHA";
$proto21["m_columns"][] = "PAA_MODIFICA";
$proto21["m_columns"][] = "PAA_JUSTIFICA";
$proto21["m_columns"][] = "SYSUSER";
$proto21["m_columns"][] = "MAIL_NOT";
$proto21["m_columns"][] = "PAAM_ST";
$proto21["m_columns"][] = "SYS_USER";
$proto21["m_columns"][] = "SYS_DATE";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "paa_master_modifica";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "paa_master_modifica_q";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="paa_master_modifica_q";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_paa_master_modifica_q = createSqlQuery_paa_master_modifica_q();


	
										;

							

$tdatapaa_master_modifica_q[".sqlquery"] = $queryData_paa_master_modifica_q;

$tableEvents["paa_master_modifica_q"] = new eventsBase;
$tdatapaa_master_modifica_q[".hasEvents"] = false;

?>