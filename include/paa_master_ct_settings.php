<?php



$tdatapaa_master_ct = array();
$tdatapaa_master_ct[".searchableFields"] = array();
$tdatapaa_master_ct[".ShortName"] = "paa_master_ct";
$tdatapaa_master_ct[".OwnerID"] = "";
$tdatapaa_master_ct[".OriginalTable"] = "paa_master_ct";


$tdatapaa_master_ct[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapaa_master_ct[".originalPagesByType"] = $tdatapaa_master_ct[".pagesByType"];
$tdatapaa_master_ct[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapaa_master_ct[".originalPages"] = $tdatapaa_master_ct[".pages"];
$tdatapaa_master_ct[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapaa_master_ct[".originalDefaultPages"] = $tdatapaa_master_ct[".defaultPages"];

//	field labels
$fieldLabelspaa_master_ct = array();
$fieldToolTipspaa_master_ct = array();
$pageTitlespaa_master_ct = array();
$placeHolderspaa_master_ct = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspaa_master_ct["Spanish"] = array();
	$fieldToolTipspaa_master_ct["Spanish"] = array();
	$placeHolderspaa_master_ct["Spanish"] = array();
	$pageTitlespaa_master_ct["Spanish"] = array();
	$fieldLabelspaa_master_ct["Spanish"]["PAAC_ID"] = "PAAC ID";
	$fieldToolTipspaa_master_ct["Spanish"]["PAAC_ID"] = "";
	$placeHolderspaa_master_ct["Spanish"]["PAAC_ID"] = "";
	$fieldLabelspaa_master_ct["Spanish"]["PAA_ID_FK"] = "PAA ID";
	$fieldToolTipspaa_master_ct["Spanish"]["PAA_ID_FK"] = "";
	$placeHolderspaa_master_ct["Spanish"]["PAA_ID_FK"] = "";
	$fieldLabelspaa_master_ct["Spanish"]["CONT_ID_FK"] = "VINCULAR CONTRATO";
	$fieldToolTipspaa_master_ct["Spanish"]["CONT_ID_FK"] = "";
	$placeHolderspaa_master_ct["Spanish"]["CONT_ID_FK"] = "";
	$fieldLabelspaa_master_ct["Spanish"]["CONT_NUMCONTRATO"] = "NUM. CONTRATO";
	$fieldToolTipspaa_master_ct["Spanish"]["CONT_NUMCONTRATO"] = "";
	$placeHolderspaa_master_ct["Spanish"]["CONT_NUMCONTRATO"] = "";
	$fieldLabelspaa_master_ct["Spanish"]["CONT_DOC"] = "DOCUMENTO";
	$fieldToolTipspaa_master_ct["Spanish"]["CONT_DOC"] = "";
	$placeHolderspaa_master_ct["Spanish"]["CONT_DOC"] = "";
	$fieldLabelspaa_master_ct["Spanish"]["CONT_NAME"] = "NOMBRE CONTRATISTA";
	$fieldToolTipspaa_master_ct["Spanish"]["CONT_NAME"] = "";
	$placeHolderspaa_master_ct["Spanish"]["CONT_NAME"] = "";
	$fieldLabelspaa_master_ct["Spanish"]["CONT_VIGENCIA"] = "CONT VIGENCIA";
	$fieldToolTipspaa_master_ct["Spanish"]["CONT_VIGENCIA"] = "";
	$placeHolderspaa_master_ct["Spanish"]["CONT_VIGENCIA"] = "";
	if (count($fieldToolTipspaa_master_ct["Spanish"]))
		$tdatapaa_master_ct[".isUseToolTips"] = true;
}


	$tdatapaa_master_ct[".NCSearch"] = true;



$tdatapaa_master_ct[".shortTableName"] = "paa_master_ct";
$tdatapaa_master_ct[".nSecOptions"] = 0;

$tdatapaa_master_ct[".mainTableOwnerID"] = "";
$tdatapaa_master_ct[".entityType"] = 0;

$tdatapaa_master_ct[".strOriginalTableName"] = "paa_master_ct";

	



$tdatapaa_master_ct[".showAddInPopup"] = false;

$tdatapaa_master_ct[".showEditInPopup"] = false;

$tdatapaa_master_ct[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapaa_master_ct[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapaa_master_ct[".listAjax"] = false;
//	temporary
$tdatapaa_master_ct[".listAjax"] = false;

	$tdatapaa_master_ct[".audit"] = true;

	$tdatapaa_master_ct[".locking"] = true;


$pages = $tdatapaa_master_ct[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapaa_master_ct[".edit"] = true;
	$tdatapaa_master_ct[".afterEditAction"] = 1;
	$tdatapaa_master_ct[".closePopupAfterEdit"] = 1;
	$tdatapaa_master_ct[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapaa_master_ct[".add"] = true;
$tdatapaa_master_ct[".afterAddAction"] = 1;
$tdatapaa_master_ct[".closePopupAfterAdd"] = 1;
$tdatapaa_master_ct[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapaa_master_ct[".list"] = true;
}



$tdatapaa_master_ct[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapaa_master_ct[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapaa_master_ct[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapaa_master_ct[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapaa_master_ct[".printFriendly"] = true;
}



$tdatapaa_master_ct[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapaa_master_ct[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapaa_master_ct[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapaa_master_ct[".isUseAjaxSuggest"] = true;

$tdatapaa_master_ct[".rowHighlite"] = true;



																								

$tdatapaa_master_ct[".ajaxCodeSnippetAdded"] = false;

$tdatapaa_master_ct[".buttonsAdded"] = false;

$tdatapaa_master_ct[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapaa_master_ct[".isUseTimeForSearch"] = false;


$tdatapaa_master_ct[".badgeColor"] = "004040";


$tdatapaa_master_ct[".allSearchFields"] = array();
$tdatapaa_master_ct[".filterFields"] = array();
$tdatapaa_master_ct[".requiredSearchFields"] = array();

$tdatapaa_master_ct[".googleLikeFields"] = array();
$tdatapaa_master_ct[".googleLikeFields"][] = "PAAC_ID";
$tdatapaa_master_ct[".googleLikeFields"][] = "PAA_ID_FK";
$tdatapaa_master_ct[".googleLikeFields"][] = "CONT_ID_FK";
$tdatapaa_master_ct[".googleLikeFields"][] = "CONT_NUMCONTRATO";
$tdatapaa_master_ct[".googleLikeFields"][] = "CONT_DOC";
$tdatapaa_master_ct[".googleLikeFields"][] = "CONT_NAME";
$tdatapaa_master_ct[".googleLikeFields"][] = "CONT_VIGENCIA";



$tdatapaa_master_ct[".tableType"] = "list";

$tdatapaa_master_ct[".printerPageOrientation"] = 0;
$tdatapaa_master_ct[".nPrinterPageScale"] = 100;

$tdatapaa_master_ct[".nPrinterSplitRecords"] = 40;

$tdatapaa_master_ct[".geocodingEnabled"] = false;










$tdatapaa_master_ct[".pageSize"] = 20;

$tdatapaa_master_ct[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapaa_master_ct[".strOrderBy"] = $tstrOrderBy;

$tdatapaa_master_ct[".orderindexes"] = array();

$tdatapaa_master_ct[".sqlHead"] = "SELECT PAAC_ID,  	PAA_ID_FK,  	CONT_ID_FK,  	CONT_NUMCONTRATO,  	CONT_DOC,  	CONT_NAME,  	CONT_VIGENCIA";
$tdatapaa_master_ct[".sqlFrom"] = "FROM paa_master_ct";
$tdatapaa_master_ct[".sqlWhereExpr"] = "";
$tdatapaa_master_ct[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapaa_master_ct[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapaa_master_ct[".arrGroupsPerPage"] = $arrGPP;

$tdatapaa_master_ct[".highlightSearchResults"] = true;

$tableKeyspaa_master_ct = array();
$tableKeyspaa_master_ct[] = "PAAC_ID";
$tdatapaa_master_ct[".Keys"] = $tableKeyspaa_master_ct;


$tdatapaa_master_ct[".hideMobileList"] = array();




//	PAAC_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PAAC_ID";
	$fdata["GoodName"] = "PAAC_ID";
	$fdata["ownerTable"] = "paa_master_ct";
	$fdata["Label"] = GetFieldLabel("paa_master_ct","PAAC_ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "PAAC_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAAC_ID";

	
	
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


	$tdatapaa_master_ct["PAAC_ID"] = $fdata;
		$tdatapaa_master_ct[".searchableFields"][] = "PAAC_ID";
//	PAA_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PAA_ID_FK";
	$fdata["GoodName"] = "PAA_ID_FK";
	$fdata["ownerTable"] = "paa_master_ct";
	$fdata["Label"] = GetFieldLabel("paa_master_ct","PAA_ID_FK");
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


	$tdatapaa_master_ct["PAA_ID_FK"] = $fdata;
		$tdatapaa_master_ct[".searchableFields"][] = "PAA_ID_FK";
//	CONT_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CONT_ID_FK";
	$fdata["GoodName"] = "CONT_ID_FK";
	$fdata["ownerTable"] = "paa_master_ct";
	$fdata["Label"] = GetFieldLabel("paa_master_ct","CONT_ID_FK");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "CONT_ID_FK";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONT_ID_FK";

	
	
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
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_cont";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_cont";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
	
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


	$tdatapaa_master_ct["CONT_ID_FK"] = $fdata;
		$tdatapaa_master_ct[".searchableFields"][] = "CONT_ID_FK";
//	CONT_NUMCONTRATO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CONT_NUMCONTRATO";
	$fdata["GoodName"] = "CONT_NUMCONTRATO";
	$fdata["ownerTable"] = "paa_master_ct";
	$fdata["Label"] = GetFieldLabel("paa_master_ct","CONT_NUMCONTRATO");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CONT_NUMCONTRATO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONT_NUMCONTRATO";

	
	
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


	$tdatapaa_master_ct["CONT_NUMCONTRATO"] = $fdata;
		$tdatapaa_master_ct[".searchableFields"][] = "CONT_NUMCONTRATO";
//	CONT_DOC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CONT_DOC";
	$fdata["GoodName"] = "CONT_DOC";
	$fdata["ownerTable"] = "paa_master_ct";
	$fdata["Label"] = GetFieldLabel("paa_master_ct","CONT_DOC");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CONT_DOC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONT_DOC";

	
	
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


	$tdatapaa_master_ct["CONT_DOC"] = $fdata;
		$tdatapaa_master_ct[".searchableFields"][] = "CONT_DOC";
//	CONT_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CONT_NAME";
	$fdata["GoodName"] = "CONT_NAME";
	$fdata["ownerTable"] = "paa_master_ct";
	$fdata["Label"] = GetFieldLabel("paa_master_ct","CONT_NAME");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CONT_NAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONT_NAME";

	
	
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


	$tdatapaa_master_ct["CONT_NAME"] = $fdata;
		$tdatapaa_master_ct[".searchableFields"][] = "CONT_NAME";
//	CONT_VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CONT_VIGENCIA";
	$fdata["GoodName"] = "CONT_VIGENCIA";
	$fdata["ownerTable"] = "paa_master_ct";
	$fdata["Label"] = GetFieldLabel("paa_master_ct","CONT_VIGENCIA");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "CONT_VIGENCIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONT_VIGENCIA";

	
	
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


	$tdatapaa_master_ct["CONT_VIGENCIA"] = $fdata;
		$tdatapaa_master_ct[".searchableFields"][] = "CONT_VIGENCIA";


$tables_data["paa_master_ct"]=&$tdatapaa_master_ct;
$field_labels["paa_master_ct"] = &$fieldLabelspaa_master_ct;
$fieldToolTips["paa_master_ct"] = &$fieldToolTipspaa_master_ct;
$placeHolders["paa_master_ct"] = &$placeHolderspaa_master_ct;
$page_titles["paa_master_ct"] = &$pageTitlespaa_master_ct;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["paa_master_ct"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["paa_master_ct"] = array();



	
				$strOriginalDetailsTable="paa_master";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="paa_master";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paa_master";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["paa_master_ct"][0] = $masterParams;
				$masterTablesData["paa_master_ct"][0]["masterKeys"] = array();
	$masterTablesData["paa_master_ct"][0]["masterKeys"][]="PAA_ID";
				$masterTablesData["paa_master_ct"][0]["detailKeys"] = array();
	$masterTablesData["paa_master_ct"][0]["detailKeys"][]="PAA_ID_FK";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_paa_master_ct()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PAAC_ID,  	PAA_ID_FK,  	CONT_ID_FK,  	CONT_NUMCONTRATO,  	CONT_DOC,  	CONT_NAME,  	CONT_VIGENCIA";
$proto0["m_strFrom"] = "FROM paa_master_ct";
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
	"m_strName" => "PAAC_ID",
	"m_strTable" => "paa_master_ct",
	"m_srcTableName" => "paa_master_ct"
));

$proto6["m_sql"] = "PAAC_ID";
$proto6["m_srcTableName"] = "paa_master_ct";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PAA_ID_FK",
	"m_strTable" => "paa_master_ct",
	"m_srcTableName" => "paa_master_ct"
));

$proto8["m_sql"] = "PAA_ID_FK";
$proto8["m_srcTableName"] = "paa_master_ct";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CONT_ID_FK",
	"m_strTable" => "paa_master_ct",
	"m_srcTableName" => "paa_master_ct"
));

$proto10["m_sql"] = "CONT_ID_FK";
$proto10["m_srcTableName"] = "paa_master_ct";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CONT_NUMCONTRATO",
	"m_strTable" => "paa_master_ct",
	"m_srcTableName" => "paa_master_ct"
));

$proto12["m_sql"] = "CONT_NUMCONTRATO";
$proto12["m_srcTableName"] = "paa_master_ct";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CONT_DOC",
	"m_strTable" => "paa_master_ct",
	"m_srcTableName" => "paa_master_ct"
));

$proto14["m_sql"] = "CONT_DOC";
$proto14["m_srcTableName"] = "paa_master_ct";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CONT_NAME",
	"m_strTable" => "paa_master_ct",
	"m_srcTableName" => "paa_master_ct"
));

$proto16["m_sql"] = "CONT_NAME";
$proto16["m_srcTableName"] = "paa_master_ct";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CONT_VIGENCIA",
	"m_strTable" => "paa_master_ct",
	"m_srcTableName" => "paa_master_ct"
));

$proto18["m_sql"] = "CONT_VIGENCIA";
$proto18["m_srcTableName"] = "paa_master_ct";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "paa_master_ct";
$proto21["m_srcTableName"] = "paa_master_ct";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "PAAC_ID";
$proto21["m_columns"][] = "PAA_ID_FK";
$proto21["m_columns"][] = "CONT_ID_FK";
$proto21["m_columns"][] = "CONT_NUMCONTRATO";
$proto21["m_columns"][] = "CONT_DOC";
$proto21["m_columns"][] = "CONT_NAME";
$proto21["m_columns"][] = "CONT_VIGENCIA";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "paa_master_ct";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "paa_master_ct";
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
$proto0["m_srcTableName"]="paa_master_ct";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_paa_master_ct = createSqlQuery_paa_master_ct();


	
										;

							

$tdatapaa_master_ct[".sqlquery"] = $queryData_paa_master_ct;

include_once(getabspath("include/paa_master_ct_events.php"));
$tableEvents["paa_master_ct"] = new eventclass_paa_master_ct;
$tdatapaa_master_ct[".hasEvents"] = true;

?>