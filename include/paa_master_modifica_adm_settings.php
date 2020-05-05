<?php



$tdatapaa_master_modifica_adm = array();
$tdatapaa_master_modifica_adm[".searchableFields"] = array();
$tdatapaa_master_modifica_adm[".ShortName"] = "paa_master_modifica_adm";
$tdatapaa_master_modifica_adm[".OwnerID"] = "";
$tdatapaa_master_modifica_adm[".OriginalTable"] = "paa_master_modifica";


$tdatapaa_master_modifica_adm[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapaa_master_modifica_adm[".originalPagesByType"] = $tdatapaa_master_modifica_adm[".pagesByType"];
$tdatapaa_master_modifica_adm[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapaa_master_modifica_adm[".originalPages"] = $tdatapaa_master_modifica_adm[".pages"];
$tdatapaa_master_modifica_adm[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapaa_master_modifica_adm[".originalDefaultPages"] = $tdatapaa_master_modifica_adm[".defaultPages"];

//	field labels
$fieldLabelspaa_master_modifica_adm = array();
$fieldToolTipspaa_master_modifica_adm = array();
$pageTitlespaa_master_modifica_adm = array();
$placeHolderspaa_master_modifica_adm = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspaa_master_modifica_adm["Spanish"] = array();
	$fieldToolTipspaa_master_modifica_adm["Spanish"] = array();
	$placeHolderspaa_master_modifica_adm["Spanish"] = array();
	$pageTitlespaa_master_modifica_adm["Spanish"] = array();
	$fieldLabelspaa_master_modifica_adm["Spanish"]["PAAM_ID"] = "TRANSACCIÓN";
	$fieldToolTipspaa_master_modifica_adm["Spanish"]["PAAM_ID"] = "";
	$placeHolderspaa_master_modifica_adm["Spanish"]["PAAM_ID"] = "";
	$fieldLabelspaa_master_modifica_adm["Spanish"]["PAA_ID_FK"] = "PAA ID";
	$fieldToolTipspaa_master_modifica_adm["Spanish"]["PAA_ID_FK"] = "";
	$placeHolderspaa_master_modifica_adm["Spanish"]["PAA_ID_FK"] = "";
	$fieldLabelspaa_master_modifica_adm["Spanish"]["PAAM_FECHA"] = "FECHA";
	$fieldToolTipspaa_master_modifica_adm["Spanish"]["PAAM_FECHA"] = "";
	$placeHolderspaa_master_modifica_adm["Spanish"]["PAAM_FECHA"] = "";
	$fieldLabelspaa_master_modifica_adm["Spanish"]["PAA_MODIFICA"] = "DETALLE DE LA SOLICITUD";
	$fieldToolTipspaa_master_modifica_adm["Spanish"]["PAA_MODIFICA"] = "";
	$placeHolderspaa_master_modifica_adm["Spanish"]["PAA_MODIFICA"] = "";
	$fieldLabelspaa_master_modifica_adm["Spanish"]["SYSUSER"] = "SOLICITADO POR";
	$fieldToolTipspaa_master_modifica_adm["Spanish"]["SYSUSER"] = "";
	$placeHolderspaa_master_modifica_adm["Spanish"]["SYSUSER"] = "";
	$fieldLabelspaa_master_modifica_adm["Spanish"]["MAIL_NOT"] = "CORREO";
	$fieldToolTipspaa_master_modifica_adm["Spanish"]["MAIL_NOT"] = "";
	$placeHolderspaa_master_modifica_adm["Spanish"]["MAIL_NOT"] = "";
	$fieldLabelspaa_master_modifica_adm["Spanish"]["PAAM_ST"] = "ESTADO";
	$fieldToolTipspaa_master_modifica_adm["Spanish"]["PAAM_ST"] = "";
	$placeHolderspaa_master_modifica_adm["Spanish"]["PAAM_ST"] = "";
	$fieldLabelspaa_master_modifica_adm["Spanish"]["SYS_USER"] = "MODIFICADO POR";
	$fieldToolTipspaa_master_modifica_adm["Spanish"]["SYS_USER"] = "";
	$placeHolderspaa_master_modifica_adm["Spanish"]["SYS_USER"] = "";
	$fieldLabelspaa_master_modifica_adm["Spanish"]["SYS_DATE"] = "FECHA";
	$fieldToolTipspaa_master_modifica_adm["Spanish"]["SYS_DATE"] = "";
	$placeHolderspaa_master_modifica_adm["Spanish"]["SYS_DATE"] = "";
	if (count($fieldToolTipspaa_master_modifica_adm["Spanish"]))
		$tdatapaa_master_modifica_adm[".isUseToolTips"] = true;
}


	$tdatapaa_master_modifica_adm[".NCSearch"] = true;



$tdatapaa_master_modifica_adm[".shortTableName"] = "paa_master_modifica_adm";
$tdatapaa_master_modifica_adm[".nSecOptions"] = 0;

$tdatapaa_master_modifica_adm[".mainTableOwnerID"] = "";
$tdatapaa_master_modifica_adm[".entityType"] = 1;

$tdatapaa_master_modifica_adm[".strOriginalTableName"] = "paa_master_modifica";

	



$tdatapaa_master_modifica_adm[".showAddInPopup"] = false;

$tdatapaa_master_modifica_adm[".showEditInPopup"] = false;

$tdatapaa_master_modifica_adm[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapaa_master_modifica_adm[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapaa_master_modifica_adm[".listAjax"] = false;
//	temporary
$tdatapaa_master_modifica_adm[".listAjax"] = false;

	$tdatapaa_master_modifica_adm[".audit"] = false;

	$tdatapaa_master_modifica_adm[".locking"] = false;


$pages = $tdatapaa_master_modifica_adm[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapaa_master_modifica_adm[".edit"] = true;
	$tdatapaa_master_modifica_adm[".afterEditAction"] = 1;
	$tdatapaa_master_modifica_adm[".closePopupAfterEdit"] = 1;
	$tdatapaa_master_modifica_adm[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapaa_master_modifica_adm[".add"] = true;
$tdatapaa_master_modifica_adm[".afterAddAction"] = 1;
$tdatapaa_master_modifica_adm[".closePopupAfterAdd"] = 1;
$tdatapaa_master_modifica_adm[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapaa_master_modifica_adm[".list"] = true;
}



$tdatapaa_master_modifica_adm[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapaa_master_modifica_adm[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapaa_master_modifica_adm[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapaa_master_modifica_adm[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapaa_master_modifica_adm[".printFriendly"] = true;
}



$tdatapaa_master_modifica_adm[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapaa_master_modifica_adm[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapaa_master_modifica_adm[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapaa_master_modifica_adm[".isUseAjaxSuggest"] = true;

$tdatapaa_master_modifica_adm[".rowHighlite"] = true;



												

$tdatapaa_master_modifica_adm[".ajaxCodeSnippetAdded"] = false;

$tdatapaa_master_modifica_adm[".buttonsAdded"] = false;

$tdatapaa_master_modifica_adm[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapaa_master_modifica_adm[".isUseTimeForSearch"] = false;


$tdatapaa_master_modifica_adm[".badgeColor"] = "DC143C";


$tdatapaa_master_modifica_adm[".allSearchFields"] = array();
$tdatapaa_master_modifica_adm[".filterFields"] = array();
$tdatapaa_master_modifica_adm[".requiredSearchFields"] = array();

$tdatapaa_master_modifica_adm[".googleLikeFields"] = array();
$tdatapaa_master_modifica_adm[".googleLikeFields"][] = "PAAM_ID";
$tdatapaa_master_modifica_adm[".googleLikeFields"][] = "PAA_ID_FK";
$tdatapaa_master_modifica_adm[".googleLikeFields"][] = "PAAM_FECHA";
$tdatapaa_master_modifica_adm[".googleLikeFields"][] = "PAA_MODIFICA";
$tdatapaa_master_modifica_adm[".googleLikeFields"][] = "SYSUSER";
$tdatapaa_master_modifica_adm[".googleLikeFields"][] = "MAIL_NOT";
$tdatapaa_master_modifica_adm[".googleLikeFields"][] = "PAAM_ST";
$tdatapaa_master_modifica_adm[".googleLikeFields"][] = "SYS_USER";
$tdatapaa_master_modifica_adm[".googleLikeFields"][] = "SYS_DATE";



$tdatapaa_master_modifica_adm[".tableType"] = "list";

$tdatapaa_master_modifica_adm[".printerPageOrientation"] = 0;
$tdatapaa_master_modifica_adm[".nPrinterPageScale"] = 100;

$tdatapaa_master_modifica_adm[".nPrinterSplitRecords"] = 40;

$tdatapaa_master_modifica_adm[".geocodingEnabled"] = false;










$tdatapaa_master_modifica_adm[".pageSize"] = 20;

$tdatapaa_master_modifica_adm[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapaa_master_modifica_adm[".strOrderBy"] = $tstrOrderBy;

$tdatapaa_master_modifica_adm[".orderindexes"] = array();

$tdatapaa_master_modifica_adm[".sqlHead"] = "SELECT PAAM_ID, PAA_ID_FK, PAAM_FECHA, PAA_MODIFICA, SYSUSER, MAIL_NOT, PAAM_ST, SYS_USER, SYS_DATE";
$tdatapaa_master_modifica_adm[".sqlFrom"] = "FROM paa_master_modifica";
$tdatapaa_master_modifica_adm[".sqlWhereExpr"] = "(LEFT(paa_master_modifica.PAAM_FECHA, 4) = 2020)";
$tdatapaa_master_modifica_adm[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "0",
	'name' => "Nuevas",
	'nameType' => 'Text',
	'where' => "PAAM_ST = 0",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "1",
	'name' => "Tramitadas",
	'nameType' => 'Text',
	'where' => "PAAM_ST = 1",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatapaa_master_modifica_adm[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapaa_master_modifica_adm[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapaa_master_modifica_adm[".arrGroupsPerPage"] = $arrGPP;

$tdatapaa_master_modifica_adm[".highlightSearchResults"] = true;

$tableKeyspaa_master_modifica_adm = array();
$tableKeyspaa_master_modifica_adm[] = "PAAM_ID";
$tdatapaa_master_modifica_adm[".Keys"] = $tableKeyspaa_master_modifica_adm;


$tdatapaa_master_modifica_adm[".hideMobileList"] = array();




//	PAAM_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PAAM_ID";
	$fdata["GoodName"] = "PAAM_ID";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica_adm","PAAM_ID");
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


	$tdatapaa_master_modifica_adm["PAAM_ID"] = $fdata;
		$tdatapaa_master_modifica_adm[".searchableFields"][] = "PAAM_ID";
//	PAA_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PAA_ID_FK";
	$fdata["GoodName"] = "PAA_ID_FK";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica_adm","PAA_ID_FK");
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


	$tdatapaa_master_modifica_adm["PAA_ID_FK"] = $fdata;
		$tdatapaa_master_modifica_adm[".searchableFields"][] = "PAA_ID_FK";
//	PAAM_FECHA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PAAM_FECHA";
	$fdata["GoodName"] = "PAAM_FECHA";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica_adm","PAAM_FECHA");
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


	$tdatapaa_master_modifica_adm["PAAM_FECHA"] = $fdata;
		$tdatapaa_master_modifica_adm[".searchableFields"][] = "PAAM_FECHA";
//	PAA_MODIFICA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PAA_MODIFICA";
	$fdata["GoodName"] = "PAA_MODIFICA";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica_adm","PAA_MODIFICA");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "PAA_MODIFICA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAA_MODIFICA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
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


	$tdatapaa_master_modifica_adm["PAA_MODIFICA"] = $fdata;
		$tdatapaa_master_modifica_adm[".searchableFields"][] = "PAA_MODIFICA";
//	SYSUSER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SYSUSER";
	$fdata["GoodName"] = "SYSUSER";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica_adm","SYSUSER");
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

	
		
	$edata["LinkField"] = "usuario";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre_funcionario";

	

	
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


	$tdatapaa_master_modifica_adm["SYSUSER"] = $fdata;
		$tdatapaa_master_modifica_adm[".searchableFields"][] = "SYSUSER";
//	MAIL_NOT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "MAIL_NOT";
	$fdata["GoodName"] = "MAIL_NOT";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica_adm","MAIL_NOT");
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


	$tdatapaa_master_modifica_adm["MAIL_NOT"] = $fdata;
		$tdatapaa_master_modifica_adm[".searchableFields"][] = "MAIL_NOT";
//	PAAM_ST
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PAAM_ST";
	$fdata["GoodName"] = "PAAM_ST";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica_adm","PAAM_ST");
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "status_mod_name";

	

	
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


	$tdatapaa_master_modifica_adm["PAAM_ST"] = $fdata;
		$tdatapaa_master_modifica_adm[".searchableFields"][] = "PAAM_ST";
//	SYS_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SYS_USER";
	$fdata["GoodName"] = "SYS_USER";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica_adm","SYS_USER");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SYS_USER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SYS_USER";

	
	
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


	$tdatapaa_master_modifica_adm["SYS_USER"] = $fdata;
		$tdatapaa_master_modifica_adm[".searchableFields"][] = "SYS_USER";
//	SYS_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SYS_DATE";
	$fdata["GoodName"] = "SYS_DATE";
	$fdata["ownerTable"] = "paa_master_modifica";
	$fdata["Label"] = GetFieldLabel("paa_master_modifica_adm","SYS_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "SYS_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SYS_DATE";

	
	
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


	$tdatapaa_master_modifica_adm["SYS_DATE"] = $fdata;
		$tdatapaa_master_modifica_adm[".searchableFields"][] = "SYS_DATE";


$tables_data["paa_master_modifica_adm"]=&$tdatapaa_master_modifica_adm;
$field_labels["paa_master_modifica_adm"] = &$fieldLabelspaa_master_modifica_adm;
$fieldToolTips["paa_master_modifica_adm"] = &$fieldToolTipspaa_master_modifica_adm;
$placeHolders["paa_master_modifica_adm"] = &$placeHolderspaa_master_modifica_adm;
$page_titles["paa_master_modifica_adm"] = &$pageTitlespaa_master_modifica_adm;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["paa_master_modifica_adm"] = array();
//	paa_master_view
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="paa_master_view";
		$detailsParam["dOriginalTable"] = "paa_master";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "paa_master_view";
	$detailsParam["dCaptionTable"] = GetTableCaption("paa_master_view");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["paa_master_modifica_adm"][$dIndex] = $detailsParam;

	
		$detailsTablesData["paa_master_modifica_adm"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["paa_master_modifica_adm"][$dIndex]["masterKeys"][]="PAA_ID_FK";

				$detailsTablesData["paa_master_modifica_adm"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["paa_master_modifica_adm"][$dIndex]["detailKeys"][]="PAA_ID";

// tables which are master tables for current table (detail)
$masterTablesData["paa_master_modifica_adm"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_paa_master_modifica_adm()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PAAM_ID, PAA_ID_FK, PAAM_FECHA, PAA_MODIFICA, SYSUSER, MAIL_NOT, PAAM_ST, SYS_USER, SYS_DATE";
$proto0["m_strFrom"] = "FROM paa_master_modifica";
$proto0["m_strWhere"] = "(LEFT(paa_master_modifica.PAAM_FECHA, 4) = 2020)";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "LEFT(paa_master_modifica.PAAM_FECHA, 4) = 2020";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$proto3=array();
$proto3["m_functiontype"] = "SQLF_CUSTOM";
$proto3["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "paa_master_modifica.PAAM_FECHA"
));

$proto3["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "4"
));

$proto3["m_arguments"][]=$obj;
$proto3["m_strFunctionName"] = "LEFT";
$obj = new SQLFunctionCall($proto3);

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 2020";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto6=array();
$proto6["m_sql"] = "";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PAAM_ID",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica_adm"
));

$proto8["m_sql"] = "PAAM_ID";
$proto8["m_srcTableName"] = "paa_master_modifica_adm";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PAA_ID_FK",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica_adm"
));

$proto10["m_sql"] = "PAA_ID_FK";
$proto10["m_srcTableName"] = "paa_master_modifica_adm";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PAAM_FECHA",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica_adm"
));

$proto12["m_sql"] = "PAAM_FECHA";
$proto12["m_srcTableName"] = "paa_master_modifica_adm";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PAA_MODIFICA",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica_adm"
));

$proto14["m_sql"] = "PAA_MODIFICA";
$proto14["m_srcTableName"] = "paa_master_modifica_adm";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SYSUSER",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica_adm"
));

$proto16["m_sql"] = "SYSUSER";
$proto16["m_srcTableName"] = "paa_master_modifica_adm";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "MAIL_NOT",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica_adm"
));

$proto18["m_sql"] = "MAIL_NOT";
$proto18["m_srcTableName"] = "paa_master_modifica_adm";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "PAAM_ST",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica_adm"
));

$proto20["m_sql"] = "PAAM_ST";
$proto20["m_srcTableName"] = "paa_master_modifica_adm";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "SYS_USER",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica_adm"
));

$proto22["m_sql"] = "SYS_USER";
$proto22["m_srcTableName"] = "paa_master_modifica_adm";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "SYS_DATE",
	"m_strTable" => "paa_master_modifica",
	"m_srcTableName" => "paa_master_modifica_adm"
));

$proto24["m_sql"] = "SYS_DATE";
$proto24["m_srcTableName"] = "paa_master_modifica_adm";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "paa_master_modifica";
$proto27["m_srcTableName"] = "paa_master_modifica_adm";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "PAAM_ID";
$proto27["m_columns"][] = "PAA_ID_FK";
$proto27["m_columns"][] = "PAAM_FECHA";
$proto27["m_columns"][] = "PAA_MODIFICA";
$proto27["m_columns"][] = "PAA_JUSTIFICA";
$proto27["m_columns"][] = "SYSUSER";
$proto27["m_columns"][] = "MAIL_NOT";
$proto27["m_columns"][] = "PAAM_ST";
$proto27["m_columns"][] = "SYS_USER";
$proto27["m_columns"][] = "SYS_DATE";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "paa_master_modifica";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "paa_master_modifica_adm";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="paa_master_modifica_adm";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_paa_master_modifica_adm = createSqlQuery_paa_master_modifica_adm();


	
										;

									

$tdatapaa_master_modifica_adm[".sqlquery"] = $queryData_paa_master_modifica_adm;

$tableEvents["paa_master_modifica_adm"] = new eventsBase;
$tdatapaa_master_modifica_adm[".hasEvents"] = false;

?>