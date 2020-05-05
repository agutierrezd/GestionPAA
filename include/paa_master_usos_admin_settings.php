<?php



$tdatapaa_master_usos_admin = array();
$tdatapaa_master_usos_admin[".searchableFields"] = array();
$tdatapaa_master_usos_admin[".ShortName"] = "paa_master_usos_admin";
$tdatapaa_master_usos_admin[".OwnerID"] = "";
$tdatapaa_master_usos_admin[".OriginalTable"] = "paa_master_usos";


$tdatapaa_master_usos_admin[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapaa_master_usos_admin[".originalPagesByType"] = $tdatapaa_master_usos_admin[".pagesByType"];
$tdatapaa_master_usos_admin[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapaa_master_usos_admin[".originalPages"] = $tdatapaa_master_usos_admin[".pages"];
$tdatapaa_master_usos_admin[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapaa_master_usos_admin[".originalDefaultPages"] = $tdatapaa_master_usos_admin[".defaultPages"];

//	field labels
$fieldLabelspaa_master_usos_admin = array();
$fieldToolTipspaa_master_usos_admin = array();
$pageTitlespaa_master_usos_admin = array();
$placeHolderspaa_master_usos_admin = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspaa_master_usos_admin["Spanish"] = array();
	$fieldToolTipspaa_master_usos_admin["Spanish"] = array();
	$placeHolderspaa_master_usos_admin["Spanish"] = array();
	$pageTitlespaa_master_usos_admin["Spanish"] = array();
	$fieldLabelspaa_master_usos_admin["Spanish"]["PAAU_ID"] = "REC_ID";
	$fieldToolTipspaa_master_usos_admin["Spanish"]["PAAU_ID"] = "";
	$placeHolderspaa_master_usos_admin["Spanish"]["PAAU_ID"] = "";
	$fieldLabelspaa_master_usos_admin["Spanish"]["PAA_ID_FK"] = "PAA _D";
	$fieldToolTipspaa_master_usos_admin["Spanish"]["PAA_ID_FK"] = "";
	$placeHolderspaa_master_usos_admin["Spanish"]["PAA_ID_FK"] = "";
	$fieldLabelspaa_master_usos_admin["Spanish"]["ACT_ID_FK"] = "5. ACTIVIDAD ASOCIADA DE LA FICHA EBI";
	$fieldToolTipspaa_master_usos_admin["Spanish"]["ACT_ID_FK"] = "";
	$placeHolderspaa_master_usos_admin["Spanish"]["ACT_ID_FK"] = "";
	$fieldLabelspaa_master_usos_admin["Spanish"]["UEJ"] = "1. UEJ";
	$fieldToolTipspaa_master_usos_admin["Spanish"]["UEJ"] = "";
	$placeHolderspaa_master_usos_admin["Spanish"]["UEJ"] = "";
	$fieldLabelspaa_master_usos_admin["Spanish"]["RUBRO"] = "3. RUBRO";
	$fieldToolTipspaa_master_usos_admin["Spanish"]["RUBRO"] = "";
	$placeHolderspaa_master_usos_admin["Spanish"]["RUBRO"] = "";
	$fieldLabelspaa_master_usos_admin["Spanish"]["CATALOGO_PRESUPUESTAL"] = "RUBRO PRESUPUESTAL";
	$fieldToolTipspaa_master_usos_admin["Spanish"]["CATALOGO_PRESUPUESTAL"] = "";
	$placeHolderspaa_master_usos_admin["Spanish"]["CATALOGO_PRESUPUESTAL"] = "";
	$fieldLabelspaa_master_usos_admin["Spanish"]["ACTIVIDAD"] = "ACTIVIDAD";
	$fieldToolTipspaa_master_usos_admin["Spanish"]["ACTIVIDAD"] = "";
	$placeHolderspaa_master_usos_admin["Spanish"]["ACTIVIDAD"] = "";
	$fieldLabelspaa_master_usos_admin["Spanish"]["RECURSOS_VIGENTES"] = "RECURSOS VIGENTES";
	$fieldToolTipspaa_master_usos_admin["Spanish"]["RECURSOS_VIGENTES"] = "";
	$placeHolderspaa_master_usos_admin["Spanish"]["RECURSOS_VIGENTES"] = "";
	$fieldLabelspaa_master_usos_admin["Spanish"]["RECURSOS_SOLICITADOS"] = "6. RECURSOS SOLICITADOS";
	$fieldToolTipspaa_master_usos_admin["Spanish"]["RECURSOS_SOLICITADOS"] = "";
	$placeHolderspaa_master_usos_admin["Spanish"]["RECURSOS_SOLICITADOS"] = "";
	$fieldLabelspaa_master_usos_admin["Spanish"]["FECHA_REG"] = "FECHA REGISTRO";
	$fieldToolTipspaa_master_usos_admin["Spanish"]["FECHA_REG"] = "";
	$placeHolderspaa_master_usos_admin["Spanish"]["FECHA_REG"] = "";
	$fieldLabelspaa_master_usos_admin["Spanish"]["USER_REG"] = "REGISTRADO POR:";
	$fieldToolTipspaa_master_usos_admin["Spanish"]["USER_REG"] = "";
	$placeHolderspaa_master_usos_admin["Spanish"]["USER_REG"] = "";
	$fieldLabelspaa_master_usos_admin["Spanish"]["TIPO"] = "2. TIPO DE FUENTE";
	$fieldToolTipspaa_master_usos_admin["Spanish"]["TIPO"] = "";
	$placeHolderspaa_master_usos_admin["Spanish"]["TIPO"] = "";
	$fieldLabelspaa_master_usos_admin["Spanish"]["REC"] = "REC";
	$fieldToolTipspaa_master_usos_admin["Spanish"]["REC"] = "";
	$placeHolderspaa_master_usos_admin["Spanish"]["REC"] = "";
	$fieldLabelspaa_master_usos_admin["Spanish"]["RECURSOS_VIGENTES_USO"] = "RECURSOS VIGENTES USO";
	$fieldToolTipspaa_master_usos_admin["Spanish"]["RECURSOS_VIGENTES_USO"] = "";
	$placeHolderspaa_master_usos_admin["Spanish"]["RECURSOS_VIGENTES_USO"] = "";
	$fieldLabelspaa_master_usos_admin["Spanish"]["RECURSOS_CADENA_VALOR"] = "RECURSOS CADENA VALOR";
	$fieldToolTipspaa_master_usos_admin["Spanish"]["RECURSOS_CADENA_VALOR"] = "";
	$placeHolderspaa_master_usos_admin["Spanish"]["RECURSOS_CADENA_VALOR"] = "";
	$fieldLabelspaa_master_usos_admin["Spanish"]["EBI"] = "4.BPIN";
	$fieldToolTipspaa_master_usos_admin["Spanish"]["EBI"] = "";
	$placeHolderspaa_master_usos_admin["Spanish"]["EBI"] = "";
	$fieldLabelspaa_master_usos_admin["Spanish"]["SYS_STATUS"] = "ESTADO";
	$fieldToolTipspaa_master_usos_admin["Spanish"]["SYS_STATUS"] = "";
	$placeHolderspaa_master_usos_admin["Spanish"]["SYS_STATUS"] = "";
	$fieldLabelspaa_master_usos_admin["Spanish"]["PROYECTO"] = "PROYECTO";
	$fieldToolTipspaa_master_usos_admin["Spanish"]["PROYECTO"] = "";
	$placeHolderspaa_master_usos_admin["Spanish"]["PROYECTO"] = "";
	$fieldLabelspaa_master_usos_admin["Spanish"]["USO_CONTABILIDAD_A"] = "USO PRESUPUESTAL";
	$fieldToolTipspaa_master_usos_admin["Spanish"]["USO_CONTABILIDAD_A"] = "";
	$placeHolderspaa_master_usos_admin["Spanish"]["USO_CONTABILIDAD_A"] = "";
	$fieldLabelspaa_master_usos_admin["Spanish"]["USO_CONTABILIDAD_B"] = "USO PRESUPUESTAL DETALLADO";
	$fieldToolTipspaa_master_usos_admin["Spanish"]["USO_CONTABILIDAD_B"] = "";
	$placeHolderspaa_master_usos_admin["Spanish"]["USO_CONTABILIDAD_B"] = "";
	if (count($fieldToolTipspaa_master_usos_admin["Spanish"]))
		$tdatapaa_master_usos_admin[".isUseToolTips"] = true;
}


	$tdatapaa_master_usos_admin[".NCSearch"] = true;



$tdatapaa_master_usos_admin[".shortTableName"] = "paa_master_usos_admin";
$tdatapaa_master_usos_admin[".nSecOptions"] = 0;

$tdatapaa_master_usos_admin[".mainTableOwnerID"] = "";
$tdatapaa_master_usos_admin[".entityType"] = 1;

$tdatapaa_master_usos_admin[".strOriginalTableName"] = "paa_master_usos";

	



$tdatapaa_master_usos_admin[".showAddInPopup"] = false;

$tdatapaa_master_usos_admin[".showEditInPopup"] = false;

$tdatapaa_master_usos_admin[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapaa_master_usos_admin[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatapaa_master_usos_admin[".listAjax"] = true;
//	temporary
$tdatapaa_master_usos_admin[".listAjax"] = false;

	$tdatapaa_master_usos_admin[".audit"] = true;

	$tdatapaa_master_usos_admin[".locking"] = true;


$pages = $tdatapaa_master_usos_admin[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapaa_master_usos_admin[".edit"] = true;
	$tdatapaa_master_usos_admin[".afterEditAction"] = 1;
	$tdatapaa_master_usos_admin[".closePopupAfterEdit"] = 1;
	$tdatapaa_master_usos_admin[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatapaa_master_usos_admin[".add"] = true;
$tdatapaa_master_usos_admin[".afterAddAction"] = 1;
$tdatapaa_master_usos_admin[".closePopupAfterAdd"] = 1;
$tdatapaa_master_usos_admin[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapaa_master_usos_admin[".list"] = true;
}



$tdatapaa_master_usos_admin[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapaa_master_usos_admin[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapaa_master_usos_admin[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapaa_master_usos_admin[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapaa_master_usos_admin[".printFriendly"] = true;
}



$tdatapaa_master_usos_admin[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapaa_master_usos_admin[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapaa_master_usos_admin[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapaa_master_usos_admin[".isUseAjaxSuggest"] = true;

$tdatapaa_master_usos_admin[".rowHighlite"] = true;



																								

$tdatapaa_master_usos_admin[".ajaxCodeSnippetAdded"] = false;

$tdatapaa_master_usos_admin[".buttonsAdded"] = false;

$tdatapaa_master_usos_admin[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapaa_master_usos_admin[".isUseTimeForSearch"] = false;


$tdatapaa_master_usos_admin[".badgeColor"] = "3cb371";


$tdatapaa_master_usos_admin[".allSearchFields"] = array();
$tdatapaa_master_usos_admin[".filterFields"] = array();
$tdatapaa_master_usos_admin[".requiredSearchFields"] = array();

$tdatapaa_master_usos_admin[".googleLikeFields"] = array();
$tdatapaa_master_usos_admin[".googleLikeFields"][] = "PAAU_ID";
$tdatapaa_master_usos_admin[".googleLikeFields"][] = "PAA_ID_FK";
$tdatapaa_master_usos_admin[".googleLikeFields"][] = "UEJ";
$tdatapaa_master_usos_admin[".googleLikeFields"][] = "TIPO";
$tdatapaa_master_usos_admin[".googleLikeFields"][] = "REC";
$tdatapaa_master_usos_admin[".googleLikeFields"][] = "RUBRO";
$tdatapaa_master_usos_admin[".googleLikeFields"][] = "PROYECTO";
$tdatapaa_master_usos_admin[".googleLikeFields"][] = "EBI";
$tdatapaa_master_usos_admin[".googleLikeFields"][] = "CATALOGO_PRESUPUESTAL";
$tdatapaa_master_usos_admin[".googleLikeFields"][] = "ACT_ID_FK";
$tdatapaa_master_usos_admin[".googleLikeFields"][] = "ACTIVIDAD";
$tdatapaa_master_usos_admin[".googleLikeFields"][] = "RECURSOS_VIGENTES";
$tdatapaa_master_usos_admin[".googleLikeFields"][] = "RECURSOS_VIGENTES_USO";
$tdatapaa_master_usos_admin[".googleLikeFields"][] = "RECURSOS_CADENA_VALOR";
$tdatapaa_master_usos_admin[".googleLikeFields"][] = "RECURSOS_SOLICITADOS";
$tdatapaa_master_usos_admin[".googleLikeFields"][] = "FECHA_REG";
$tdatapaa_master_usos_admin[".googleLikeFields"][] = "USER_REG";
$tdatapaa_master_usos_admin[".googleLikeFields"][] = "SYS_STATUS";
$tdatapaa_master_usos_admin[".googleLikeFields"][] = "USO_CONTABILIDAD_A";
$tdatapaa_master_usos_admin[".googleLikeFields"][] = "USO_CONTABILIDAD_B";



$tdatapaa_master_usos_admin[".tableType"] = "list";

$tdatapaa_master_usos_admin[".printerPageOrientation"] = 0;
$tdatapaa_master_usos_admin[".nPrinterPageScale"] = 100;

$tdatapaa_master_usos_admin[".nPrinterSplitRecords"] = 40;

$tdatapaa_master_usos_admin[".geocodingEnabled"] = false;




$tdatapaa_master_usos_admin[".isDisplayLoading"] = true;






$tdatapaa_master_usos_admin[".pageSize"] = 20;

$tdatapaa_master_usos_admin[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapaa_master_usos_admin[".strOrderBy"] = $tstrOrderBy;

$tdatapaa_master_usos_admin[".orderindexes"] = array();

$tdatapaa_master_usos_admin[".sqlHead"] = "SELECT PAAU_ID, PAA_ID_FK, UEJ, TIPO, REC, RUBRO, PROYECTO, EBI, CATALOGO_PRESUPUESTAL, ACT_ID_FK, ACTIVIDAD, RECURSOS_VIGENTES, RECURSOS_VIGENTES_USO, RECURSOS_CADENA_VALOR, RECURSOS_SOLICITADOS, FECHA_REG, USER_REG, SYS_STATUS, USO_CONTABILIDAD_A, USO_CONTABILIDAD_B";
$tdatapaa_master_usos_admin[".sqlFrom"] = "FROM paa_master_usos";
$tdatapaa_master_usos_admin[".sqlWhereExpr"] = "";
$tdatapaa_master_usos_admin[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapaa_master_usos_admin[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapaa_master_usos_admin[".arrGroupsPerPage"] = $arrGPP;

$tdatapaa_master_usos_admin[".highlightSearchResults"] = true;

$tableKeyspaa_master_usos_admin = array();
$tableKeyspaa_master_usos_admin[] = "PAAU_ID";
$tdatapaa_master_usos_admin[".Keys"] = $tableKeyspaa_master_usos_admin;


$tdatapaa_master_usos_admin[".hideMobileList"] = array();




//	PAAU_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PAAU_ID";
	$fdata["GoodName"] = "PAAU_ID";
	$fdata["ownerTable"] = "paa_master_usos";
	$fdata["Label"] = GetFieldLabel("paa_master_usos_admin","PAAU_ID");
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


	$tdatapaa_master_usos_admin["PAAU_ID"] = $fdata;
		$tdatapaa_master_usos_admin[".searchableFields"][] = "PAAU_ID";
//	PAA_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PAA_ID_FK";
	$fdata["GoodName"] = "PAA_ID_FK";
	$fdata["ownerTable"] = "paa_master_usos";
	$fdata["Label"] = GetFieldLabel("paa_master_usos_admin","PAA_ID_FK");
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "PAA_ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "PAA_ID";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdatapaa_master_usos_admin["PAA_ID_FK"] = $fdata;
		$tdatapaa_master_usos_admin[".searchableFields"][] = "PAA_ID_FK";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "paa_master_usos";
	$fdata["Label"] = GetFieldLabel("paa_master_usos_admin","UEJ");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "UEJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UEJ";

	
	
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
	$edata["DisplayField"] = "NOMBRE UEJ";

	

	
	$edata["LookupOrderBy"] = "UEJ";

	
	
	
		$edata["SimpleAdd"] = true;

				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "REC";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "RUBRO";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "EBI";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "CATALOGO_PRESUPUESTAL";

	
	
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


	$tdatapaa_master_usos_admin["UEJ"] = $fdata;
		$tdatapaa_master_usos_admin[".searchableFields"][] = "UEJ";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "paa_master_usos";
	$fdata["Label"] = GetFieldLabel("paa_master_usos_admin","TIPO");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "TIPO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPO";

	
	
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

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "REC";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "RUBRO";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "CATALOGO_PRESUPUESTAL";

	
	
	
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


	$tdatapaa_master_usos_admin["TIPO"] = $fdata;
		$tdatapaa_master_usos_admin[".searchableFields"][] = "TIPO";
//	REC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "REC";
	$fdata["GoodName"] = "REC";
	$fdata["ownerTable"] = "paa_master_usos";
	$fdata["Label"] = GetFieldLabel("paa_master_usos_admin","REC");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "REC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REC";

	
	
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
	$edata["LookupTable"] = "q_group_rec";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "REC";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "REC";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "UEJ", "lookup" => "UEJ" );
	$edata["categoryFields"][] = array( "main" => "TIPO", "lookup" => "TIPO" );

	
	

	
	
	
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


	$tdatapaa_master_usos_admin["REC"] = $fdata;
		$tdatapaa_master_usos_admin[".searchableFields"][] = "REC";
//	RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "RUBRO";
	$fdata["GoodName"] = "RUBRO";
	$fdata["ownerTable"] = "paa_master_usos";
	$fdata["Label"] = GetFieldLabel("paa_master_usos_admin","RUBRO");
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

	
		
	$edata["LinkField"] = "RUBRO";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "RUBRO";

	

	
	$edata["LookupOrderBy"] = "RUBRO";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "UEJ", "lookup" => "UEJ" );
	$edata["categoryFields"][] = array( "main" => "TIPO", "lookup" => "TIPO" );

	
		$edata["SimpleAdd"] = true;

				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "EBI";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "CATALOGO_PRESUPUESTAL";

	
	
	
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


	$tdatapaa_master_usos_admin["RUBRO"] = $fdata;
		$tdatapaa_master_usos_admin[".searchableFields"][] = "RUBRO";
//	PROYECTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PROYECTO";
	$fdata["GoodName"] = "PROYECTO";
	$fdata["ownerTable"] = "paa_master_usos";
	$fdata["Label"] = GetFieldLabel("paa_master_usos_admin","PROYECTO");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "PROYECTO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROYECTO";

	
	
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


	$tdatapaa_master_usos_admin["PROYECTO"] = $fdata;
		$tdatapaa_master_usos_admin[".searchableFields"][] = "PROYECTO";
//	EBI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "EBI";
	$fdata["GoodName"] = "EBI";
	$fdata["ownerTable"] = "paa_master_usos";
	$fdata["Label"] = GetFieldLabel("paa_master_usos_admin","EBI");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "EBI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EBI";

	
	
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

	
		
	$edata["LinkField"] = "CODIGO_BPIN";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "CODIGO_BPIN";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "UEJ", "lookup" => "UEJ" );
	$edata["categoryFields"][] = array( "main" => "RUBRO", "lookup" => "RUBRO" );

	
		$edata["SimpleAdd"] = true;

				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "ACT_ID_FK";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdatapaa_master_usos_admin["EBI"] = $fdata;
		$tdatapaa_master_usos_admin[".searchableFields"][] = "EBI";
//	CATALOGO_PRESUPUESTAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CATALOGO_PRESUPUESTAL";
	$fdata["GoodName"] = "CATALOGO_PRESUPUESTAL";
	$fdata["ownerTable"] = "paa_master_usos";
	$fdata["Label"] = GetFieldLabel("paa_master_usos_admin","CATALOGO_PRESUPUESTAL");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CATALOGO_PRESUPUESTAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CATALOGO_PRESUPUESTAL";

	
	
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
	$edata["LookupTable"] = "global_ejecucion_desagregada";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "RUBRO";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "RUBRO";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "UEJ", "lookup" => "UEJ" );
	$edata["categoryFields"][] = array( "main" => "TIPO", "lookup" => "TIPO" );
	$edata["categoryFields"][] = array( "main" => "RUBRO", "lookup" => "RUB" );

	
	

	
	
	
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


	$tdatapaa_master_usos_admin["CATALOGO_PRESUPUESTAL"] = $fdata;
		$tdatapaa_master_usos_admin[".searchableFields"][] = "CATALOGO_PRESUPUESTAL";
//	ACT_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ACT_ID_FK";
	$fdata["GoodName"] = "ACT_ID_FK";
	$fdata["ownerTable"] = "paa_master_usos";
	$fdata["Label"] = GetFieldLabel("paa_master_usos_admin","ACT_ID_FK");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ACT_ID_FK";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACT_ID_FK";

	
	
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
	$edata["LookupTable"] = "global_ejecucion_actividades_spi";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"ACTIVIDAD", 'lookupF'=>"Actividad");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "Id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Id";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "EBI", "lookup" => "codigoBPINProyecto" );

	
	

	
	
	
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


	$tdatapaa_master_usos_admin["ACT_ID_FK"] = $fdata;
		$tdatapaa_master_usos_admin[".searchableFields"][] = "ACT_ID_FK";
//	ACTIVIDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ACTIVIDAD";
	$fdata["GoodName"] = "ACTIVIDAD";
	$fdata["ownerTable"] = "paa_master_usos";
	$fdata["Label"] = GetFieldLabel("paa_master_usos_admin","ACTIVIDAD");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ACTIVIDAD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACTIVIDAD";

	
	
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


	$tdatapaa_master_usos_admin["ACTIVIDAD"] = $fdata;
		$tdatapaa_master_usos_admin[".searchableFields"][] = "ACTIVIDAD";
//	RECURSOS_VIGENTES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "RECURSOS_VIGENTES";
	$fdata["GoodName"] = "RECURSOS_VIGENTES";
	$fdata["ownerTable"] = "paa_master_usos";
	$fdata["Label"] = GetFieldLabel("paa_master_usos_admin","RECURSOS_VIGENTES");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "RECURSOS_VIGENTES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RECURSOS_VIGENTES";

	
	
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


	$tdatapaa_master_usos_admin["RECURSOS_VIGENTES"] = $fdata;
		$tdatapaa_master_usos_admin[".searchableFields"][] = "RECURSOS_VIGENTES";
//	RECURSOS_VIGENTES_USO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "RECURSOS_VIGENTES_USO";
	$fdata["GoodName"] = "RECURSOS_VIGENTES_USO";
	$fdata["ownerTable"] = "paa_master_usos";
	$fdata["Label"] = GetFieldLabel("paa_master_usos_admin","RECURSOS_VIGENTES_USO");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "RECURSOS_VIGENTES_USO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RECURSOS_VIGENTES_USO";

	
	
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


	$tdatapaa_master_usos_admin["RECURSOS_VIGENTES_USO"] = $fdata;
		$tdatapaa_master_usos_admin[".searchableFields"][] = "RECURSOS_VIGENTES_USO";
//	RECURSOS_CADENA_VALOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RECURSOS_CADENA_VALOR";
	$fdata["GoodName"] = "RECURSOS_CADENA_VALOR";
	$fdata["ownerTable"] = "paa_master_usos";
	$fdata["Label"] = GetFieldLabel("paa_master_usos_admin","RECURSOS_CADENA_VALOR");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "RECURSOS_CADENA_VALOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RECURSOS_CADENA_VALOR";

	
	
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


	$tdatapaa_master_usos_admin["RECURSOS_CADENA_VALOR"] = $fdata;
		$tdatapaa_master_usos_admin[".searchableFields"][] = "RECURSOS_CADENA_VALOR";
//	RECURSOS_SOLICITADOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "RECURSOS_SOLICITADOS";
	$fdata["GoodName"] = "RECURSOS_SOLICITADOS";
	$fdata["ownerTable"] = "paa_master_usos";
	$fdata["Label"] = GetFieldLabel("paa_master_usos_admin","RECURSOS_SOLICITADOS");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "RECURSOS_SOLICITADOS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RECURSOS_SOLICITADOS";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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


	$tdatapaa_master_usos_admin["RECURSOS_SOLICITADOS"] = $fdata;
		$tdatapaa_master_usos_admin[".searchableFields"][] = "RECURSOS_SOLICITADOS";
//	FECHA_REG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "FECHA_REG";
	$fdata["GoodName"] = "FECHA_REG";
	$fdata["ownerTable"] = "paa_master_usos";
	$fdata["Label"] = GetFieldLabel("paa_master_usos_admin","FECHA_REG");
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdatapaa_master_usos_admin["FECHA_REG"] = $fdata;
		$tdatapaa_master_usos_admin[".searchableFields"][] = "FECHA_REG";
//	USER_REG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "USER_REG";
	$fdata["GoodName"] = "USER_REG";
	$fdata["ownerTable"] = "paa_master_usos";
	$fdata["Label"] = GetFieldLabel("paa_master_usos_admin","USER_REG");
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


	$tdatapaa_master_usos_admin["USER_REG"] = $fdata;
		$tdatapaa_master_usos_admin[".searchableFields"][] = "USER_REG";
//	SYS_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "SYS_STATUS";
	$fdata["GoodName"] = "SYS_STATUS";
	$fdata["ownerTable"] = "paa_master_usos";
	$fdata["Label"] = GetFieldLabel("paa_master_usos_admin","SYS_STATUS");
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
	$edata["LookupTable"] = "global_estado";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "status_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "status_name";

	

	
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


	$tdatapaa_master_usos_admin["SYS_STATUS"] = $fdata;
		$tdatapaa_master_usos_admin[".searchableFields"][] = "SYS_STATUS";
//	USO_CONTABILIDAD_A
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "USO_CONTABILIDAD_A";
	$fdata["GoodName"] = "USO_CONTABILIDAD_A";
	$fdata["ownerTable"] = "paa_master_usos";
	$fdata["Label"] = GetFieldLabel("paa_master_usos_admin","USO_CONTABILIDAD_A");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "USO_CONTABILIDAD_A";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USO_CONTABILIDAD_A";

	
	
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

	
		
	$edata["LinkField"] = "PosicionMinCIT";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Descripcion";

	

	
	$edata["LookupOrderBy"] = "PosicionMinCIT";

	
	
	
		$edata["SimpleAdd"] = true;

				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "USO_CONTABILIDAD_B";

	
	
	
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


	$tdatapaa_master_usos_admin["USO_CONTABILIDAD_A"] = $fdata;
		$tdatapaa_master_usos_admin[".searchableFields"][] = "USO_CONTABILIDAD_A";
//	USO_CONTABILIDAD_B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "USO_CONTABILIDAD_B";
	$fdata["GoodName"] = "USO_CONTABILIDAD_B";
	$fdata["ownerTable"] = "paa_master_usos";
	$fdata["Label"] = GetFieldLabel("paa_master_usos_admin","USO_CONTABILIDAD_B");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "USO_CONTABILIDAD_B";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USO_CONTABILIDAD_B";

	
	
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
	$edata["LookupTable"] = "rep_prg001_catalogopresupuestal";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "Identificacion";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Descripcion";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "USO_CONTABILIDAD_A", "lookup" => "PosicionMinCIT" );

	
	

	
	
	
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


	$tdatapaa_master_usos_admin["USO_CONTABILIDAD_B"] = $fdata;
		$tdatapaa_master_usos_admin[".searchableFields"][] = "USO_CONTABILIDAD_B";


$tables_data["paa_master_usos_admin"]=&$tdatapaa_master_usos_admin;
$field_labels["paa_master_usos_admin"] = &$fieldLabelspaa_master_usos_admin;
$fieldToolTips["paa_master_usos_admin"] = &$fieldToolTipspaa_master_usos_admin;
$placeHolders["paa_master_usos_admin"] = &$placeHolderspaa_master_usos_admin;
$page_titles["paa_master_usos_admin"] = &$pageTitlespaa_master_usos_admin;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["paa_master_usos_admin"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["paa_master_usos_admin"] = array();



	
				$strOriginalDetailsTable="paa_master";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="paa_master_admin";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paa_master_admin";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["paa_master_usos_admin"][0] = $masterParams;
				$masterTablesData["paa_master_usos_admin"][0]["masterKeys"] = array();
	$masterTablesData["paa_master_usos_admin"][0]["masterKeys"][]="PAA_ID";
				$masterTablesData["paa_master_usos_admin"][0]["detailKeys"] = array();
	$masterTablesData["paa_master_usos_admin"][0]["detailKeys"][]="PAA_ID_FK";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_paa_master_usos_admin()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PAAU_ID, PAA_ID_FK, UEJ, TIPO, REC, RUBRO, PROYECTO, EBI, CATALOGO_PRESUPUESTAL, ACT_ID_FK, ACTIVIDAD, RECURSOS_VIGENTES, RECURSOS_VIGENTES_USO, RECURSOS_CADENA_VALOR, RECURSOS_SOLICITADOS, FECHA_REG, USER_REG, SYS_STATUS, USO_CONTABILIDAD_A, USO_CONTABILIDAD_B";
$proto0["m_strFrom"] = "FROM paa_master_usos";
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
	"m_strTable" => "paa_master_usos",
	"m_srcTableName" => "paa_master_usos_admin"
));

$proto6["m_sql"] = "PAAU_ID";
$proto6["m_srcTableName"] = "paa_master_usos_admin";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PAA_ID_FK",
	"m_strTable" => "paa_master_usos",
	"m_srcTableName" => "paa_master_usos_admin"
));

$proto8["m_sql"] = "PAA_ID_FK";
$proto8["m_srcTableName"] = "paa_master_usos_admin";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "paa_master_usos",
	"m_srcTableName" => "paa_master_usos_admin"
));

$proto10["m_sql"] = "UEJ";
$proto10["m_srcTableName"] = "paa_master_usos_admin";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "paa_master_usos",
	"m_srcTableName" => "paa_master_usos_admin"
));

$proto12["m_sql"] = "TIPO";
$proto12["m_srcTableName"] = "paa_master_usos_admin";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "REC",
	"m_strTable" => "paa_master_usos",
	"m_srcTableName" => "paa_master_usos_admin"
));

$proto14["m_sql"] = "REC";
$proto14["m_srcTableName"] = "paa_master_usos_admin";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO",
	"m_strTable" => "paa_master_usos",
	"m_srcTableName" => "paa_master_usos_admin"
));

$proto16["m_sql"] = "RUBRO";
$proto16["m_srcTableName"] = "paa_master_usos_admin";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PROYECTO",
	"m_strTable" => "paa_master_usos",
	"m_srcTableName" => "paa_master_usos_admin"
));

$proto18["m_sql"] = "PROYECTO";
$proto18["m_srcTableName"] = "paa_master_usos_admin";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "EBI",
	"m_strTable" => "paa_master_usos",
	"m_srcTableName" => "paa_master_usos_admin"
));

$proto20["m_sql"] = "EBI";
$proto20["m_srcTableName"] = "paa_master_usos_admin";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CATALOGO_PRESUPUESTAL",
	"m_strTable" => "paa_master_usos",
	"m_srcTableName" => "paa_master_usos_admin"
));

$proto22["m_sql"] = "CATALOGO_PRESUPUESTAL";
$proto22["m_srcTableName"] = "paa_master_usos_admin";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ACT_ID_FK",
	"m_strTable" => "paa_master_usos",
	"m_srcTableName" => "paa_master_usos_admin"
));

$proto24["m_sql"] = "ACT_ID_FK";
$proto24["m_srcTableName"] = "paa_master_usos_admin";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ACTIVIDAD",
	"m_strTable" => "paa_master_usos",
	"m_srcTableName" => "paa_master_usos_admin"
));

$proto26["m_sql"] = "ACTIVIDAD";
$proto26["m_srcTableName"] = "paa_master_usos_admin";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "RECURSOS_VIGENTES",
	"m_strTable" => "paa_master_usos",
	"m_srcTableName" => "paa_master_usos_admin"
));

$proto28["m_sql"] = "RECURSOS_VIGENTES";
$proto28["m_srcTableName"] = "paa_master_usos_admin";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "RECURSOS_VIGENTES_USO",
	"m_strTable" => "paa_master_usos",
	"m_srcTableName" => "paa_master_usos_admin"
));

$proto30["m_sql"] = "RECURSOS_VIGENTES_USO";
$proto30["m_srcTableName"] = "paa_master_usos_admin";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "RECURSOS_CADENA_VALOR",
	"m_strTable" => "paa_master_usos",
	"m_srcTableName" => "paa_master_usos_admin"
));

$proto32["m_sql"] = "RECURSOS_CADENA_VALOR";
$proto32["m_srcTableName"] = "paa_master_usos_admin";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "RECURSOS_SOLICITADOS",
	"m_strTable" => "paa_master_usos",
	"m_srcTableName" => "paa_master_usos_admin"
));

$proto34["m_sql"] = "RECURSOS_SOLICITADOS";
$proto34["m_srcTableName"] = "paa_master_usos_admin";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_REG",
	"m_strTable" => "paa_master_usos",
	"m_srcTableName" => "paa_master_usos_admin"
));

$proto36["m_sql"] = "FECHA_REG";
$proto36["m_srcTableName"] = "paa_master_usos_admin";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "USER_REG",
	"m_strTable" => "paa_master_usos",
	"m_srcTableName" => "paa_master_usos_admin"
));

$proto38["m_sql"] = "USER_REG";
$proto38["m_srcTableName"] = "paa_master_usos_admin";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "SYS_STATUS",
	"m_strTable" => "paa_master_usos",
	"m_srcTableName" => "paa_master_usos_admin"
));

$proto40["m_sql"] = "SYS_STATUS";
$proto40["m_srcTableName"] = "paa_master_usos_admin";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "USO_CONTABILIDAD_A",
	"m_strTable" => "paa_master_usos",
	"m_srcTableName" => "paa_master_usos_admin"
));

$proto42["m_sql"] = "USO_CONTABILIDAD_A";
$proto42["m_srcTableName"] = "paa_master_usos_admin";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "USO_CONTABILIDAD_B",
	"m_strTable" => "paa_master_usos",
	"m_srcTableName" => "paa_master_usos_admin"
));

$proto44["m_sql"] = "USO_CONTABILIDAD_B";
$proto44["m_srcTableName"] = "paa_master_usos_admin";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "paa_master_usos";
$proto47["m_srcTableName"] = "paa_master_usos_admin";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "PAAU_ID";
$proto47["m_columns"][] = "PAA_ID_FK";
$proto47["m_columns"][] = "ACT_ID_FK";
$proto47["m_columns"][] = "UEJ";
$proto47["m_columns"][] = "TIPO";
$proto47["m_columns"][] = "REC";
$proto47["m_columns"][] = "RUBRO";
$proto47["m_columns"][] = "EBI";
$proto47["m_columns"][] = "CATALOGO_PRESUPUESTAL";
$proto47["m_columns"][] = "PROYECTO";
$proto47["m_columns"][] = "OBJETIVO";
$proto47["m_columns"][] = "PRODUCTO";
$proto47["m_columns"][] = "ACTIVIDAD";
$proto47["m_columns"][] = "RECURSOS_VIGENTES";
$proto47["m_columns"][] = "RECURSOS_VIGENTES_USO";
$proto47["m_columns"][] = "RECURSOS_CADENA_VALOR";
$proto47["m_columns"][] = "RECURSOS_SOLICITADOS";
$proto47["m_columns"][] = "FECHA_REG";
$proto47["m_columns"][] = "USER_REG";
$proto47["m_columns"][] = "SYS_STATUS";
$proto47["m_columns"][] = "USO_CONTABILIDAD_A";
$proto47["m_columns"][] = "USO_CONTABILIDAD_B";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "paa_master_usos";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "paa_master_usos_admin";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="paa_master_usos_admin";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_paa_master_usos_admin = createSqlQuery_paa_master_usos_admin();


	
										;

																				

$tdatapaa_master_usos_admin[".sqlquery"] = $queryData_paa_master_usos_admin;

include_once(getabspath("include/paa_master_usos_admin_events.php"));
$tableEvents["paa_master_usos_admin"] = new eventclass_paa_master_usos_admin;
$tdatapaa_master_usos_admin[".hasEvents"] = true;

?>