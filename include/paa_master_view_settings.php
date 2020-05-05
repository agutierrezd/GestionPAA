<?php



$tdatapaa_master_view = array();
$tdatapaa_master_view[".searchableFields"] = array();
$tdatapaa_master_view[".ShortName"] = "paa_master_view";
$tdatapaa_master_view[".OwnerID"] = "sys_user";
$tdatapaa_master_view[".OriginalTable"] = "paa_master";


$tdatapaa_master_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapaa_master_view[".originalPagesByType"] = $tdatapaa_master_view[".pagesByType"];
$tdatapaa_master_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapaa_master_view[".originalPages"] = $tdatapaa_master_view[".pages"];
$tdatapaa_master_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapaa_master_view[".originalDefaultPages"] = $tdatapaa_master_view[".defaultPages"];

//	field labels
$fieldLabelspaa_master_view = array();
$fieldToolTipspaa_master_view = array();
$pageTitlespaa_master_view = array();
$placeHolderspaa_master_view = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspaa_master_view["Spanish"] = array();
	$fieldToolTipspaa_master_view["Spanish"] = array();
	$placeHolderspaa_master_view["Spanish"] = array();
	$pageTitlespaa_master_view["Spanish"] = array();
	$fieldLabelspaa_master_view["Spanish"]["PAA_ID"] = "PAA ID";
	$fieldToolTipspaa_master_view["Spanish"]["PAA_ID"] = "";
	$placeHolderspaa_master_view["Spanish"]["PAA_ID"] = "";
	$fieldLabelspaa_master_view["Spanish"]["COD_UNSPSC"] = "COD UNSPSC";
	$fieldToolTipspaa_master_view["Spanish"]["COD_UNSPSC"] = "";
	$placeHolderspaa_master_view["Spanish"]["COD_UNSPSC"] = "";
	$fieldLabelspaa_master_view["Spanish"]["DESCRIPCION"] = "DESCRIPCION / OBJETO";
	$fieldToolTipspaa_master_view["Spanish"]["DESCRIPCION"] = "";
	$placeHolderspaa_master_view["Spanish"]["DESCRIPCION"] = "";
	$fieldLabelspaa_master_view["Spanish"]["MES_INICIO"] = "MES INICIO DEL PROCESO";
	$fieldToolTipspaa_master_view["Spanish"]["MES_INICIO"] = "";
	$placeHolderspaa_master_view["Spanish"]["MES_INICIO"] = "";
	$fieldLabelspaa_master_view["Spanish"]["MES_PRESENTA"] = "MES PRESENTACIÓN DE PROPUESTAS";
	$fieldToolTipspaa_master_view["Spanish"]["MES_PRESENTA"] = "";
	$placeHolderspaa_master_view["Spanish"]["MES_PRESENTA"] = "";
	$fieldLabelspaa_master_view["Spanish"]["DURACION_CONTRATO"] = "DURACIÓN DEL CONTRATO";
	$fieldToolTipspaa_master_view["Spanish"]["DURACION_CONTRATO"] = "";
	$placeHolderspaa_master_view["Spanish"]["DURACION_CONTRATO"] = "";
	$fieldLabelspaa_master_view["Spanish"]["DURACION_ESTIMADA_DMA"] = "DURACION ESTIMADA DMA";
	$fieldToolTipspaa_master_view["Spanish"]["DURACION_ESTIMADA_DMA"] = "";
	$placeHolderspaa_master_view["Spanish"]["DURACION_ESTIMADA_DMA"] = "";
	$fieldLabelspaa_master_view["Spanish"]["MODALIDAD"] = "MODALIDAD";
	$fieldToolTipspaa_master_view["Spanish"]["MODALIDAD"] = "";
	$placeHolderspaa_master_view["Spanish"]["MODALIDAD"] = "";
	$fieldLabelspaa_master_view["Spanish"]["FUENTE_RECURSOS"] = "FUENTE RECURSOS";
	$fieldToolTipspaa_master_view["Spanish"]["FUENTE_RECURSOS"] = "";
	$placeHolderspaa_master_view["Spanish"]["FUENTE_RECURSOS"] = "";
	$fieldLabelspaa_master_view["Spanish"]["VALOR"] = "VALOR";
	$fieldToolTipspaa_master_view["Spanish"]["VALOR"] = "";
	$placeHolderspaa_master_view["Spanish"]["VALOR"] = "";
	$fieldLabelspaa_master_view["Spanish"]["VALOR_VIGENCIA"] = "VALOR PROYECTADO 2020";
	$fieldToolTipspaa_master_view["Spanish"]["VALOR_VIGENCIA"] = "";
	$placeHolderspaa_master_view["Spanish"]["VALOR_VIGENCIA"] = "";
	$fieldLabelspaa_master_view["Spanish"]["VF"] = "¿VIGENCIA FUTURA?";
	$fieldToolTipspaa_master_view["Spanish"]["VF"] = "";
	$placeHolderspaa_master_view["Spanish"]["VF"] = "";
	$fieldLabelspaa_master_view["Spanish"]["ESTADO_VF"] = "ESTADO VIGENCIA FUTURA";
	$fieldToolTipspaa_master_view["Spanish"]["ESTADO_VF"] = "";
	$placeHolderspaa_master_view["Spanish"]["ESTADO_VF"] = "";
	$fieldLabelspaa_master_view["Spanish"]["UNIDAD_CONTRATACION"] = "UNIDAD CONTRATACION";
	$fieldToolTipspaa_master_view["Spanish"]["UNIDAD_CONTRATACION"] = "";
	$placeHolderspaa_master_view["Spanish"]["UNIDAD_CONTRATACION"] = "";
	$fieldLabelspaa_master_view["Spanish"]["COD_UBICACION"] = "COD UBICACION";
	$fieldToolTipspaa_master_view["Spanish"]["COD_UBICACION"] = "";
	$placeHolderspaa_master_view["Spanish"]["COD_UBICACION"] = "";
	$fieldLabelspaa_master_view["Spanish"]["RESPONSABLE_NOMBRE"] = "RESPONSABLE NOMBRE";
	$fieldToolTipspaa_master_view["Spanish"]["RESPONSABLE_NOMBRE"] = "";
	$placeHolderspaa_master_view["Spanish"]["RESPONSABLE_NOMBRE"] = "";
	$fieldLabelspaa_master_view["Spanish"]["RESPONSABLE_TELEFONO"] = "RESPONSABLE TELEFONO";
	$fieldToolTipspaa_master_view["Spanish"]["RESPONSABLE_TELEFONO"] = "";
	$placeHolderspaa_master_view["Spanish"]["RESPONSABLE_TELEFONO"] = "";
	$fieldLabelspaa_master_view["Spanish"]["RESPONSABLE_EMAIL"] = "RESPONSABLE EMAIL";
	$fieldToolTipspaa_master_view["Spanish"]["RESPONSABLE_EMAIL"] = "";
	$placeHolderspaa_master_view["Spanish"]["RESPONSABLE_EMAIL"] = "";
	$fieldLabelspaa_master_view["Spanish"]["responsable"] = "SOLICITADO POR:";
	$fieldToolTipspaa_master_view["Spanish"]["responsable"] = "";
	$placeHolderspaa_master_view["Spanish"]["responsable"] = "";
	$fieldLabelspaa_master_view["Spanish"]["vigencia"] = "VIGENCIA";
	$fieldToolTipspaa_master_view["Spanish"]["vigencia"] = "";
	$placeHolderspaa_master_view["Spanish"]["vigencia"] = "";
	$fieldLabelspaa_master_view["Spanish"]["sys_user"] = "USUARIO";
	$fieldToolTipspaa_master_view["Spanish"]["sys_user"] = "";
	$placeHolderspaa_master_view["Spanish"]["sys_user"] = "";
	$fieldLabelspaa_master_view["Spanish"]["sys_date"] = "FECHA";
	$fieldToolTipspaa_master_view["Spanish"]["sys_date"] = "";
	$placeHolderspaa_master_view["Spanish"]["sys_date"] = "";
	$fieldLabelspaa_master_view["Spanish"]["sys_status"] = "ESTADO";
	$fieldToolTipspaa_master_view["Spanish"]["sys_status"] = "";
	$placeHolderspaa_master_view["Spanish"]["sys_status"] = "";
	$fieldLabelspaa_master_view["Spanish"]["TIPOSOL"] = "TIPOSOL";
	$fieldToolTipspaa_master_view["Spanish"]["TIPOSOL"] = "";
	$placeHolderspaa_master_view["Spanish"]["TIPOSOL"] = "";
	$fieldLabelspaa_master_view["Spanish"]["USOS_TOTAL"] = "TOTAL USO PRESUPUESTAL";
	$fieldToolTipspaa_master_view["Spanish"]["USOS_TOTAL"] = "";
	$placeHolderspaa_master_view["Spanish"]["USOS_TOTAL"] = "";
	$fieldLabelspaa_master_view["Spanish"]["VALOR_VIGENCIA_FUTURA"] = "VALOR PROYECTADO VIGENCIAS FUTURAS";
	$fieldToolTipspaa_master_view["Spanish"]["VALOR_VIGENCIA_FUTURA"] = "";
	$placeHolderspaa_master_view["Spanish"]["VALOR_VIGENCIA_FUTURA"] = "";
	if (count($fieldToolTipspaa_master_view["Spanish"]))
		$tdatapaa_master_view[".isUseToolTips"] = true;
}


	$tdatapaa_master_view[".NCSearch"] = true;



$tdatapaa_master_view[".shortTableName"] = "paa_master_view";
$tdatapaa_master_view[".nSecOptions"] = 0;

$tdatapaa_master_view[".mainTableOwnerID"] = "sys_user";
$tdatapaa_master_view[".entityType"] = 1;

$tdatapaa_master_view[".strOriginalTableName"] = "paa_master";

	



$tdatapaa_master_view[".showAddInPopup"] = false;

$tdatapaa_master_view[".showEditInPopup"] = false;

$tdatapaa_master_view[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapaa_master_view[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatapaa_master_view[".listAjax"] = true;
//	temporary
$tdatapaa_master_view[".listAjax"] = false;

	$tdatapaa_master_view[".audit"] = true;

	$tdatapaa_master_view[".locking"] = true;


$pages = $tdatapaa_master_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapaa_master_view[".edit"] = true;
	$tdatapaa_master_view[".afterEditAction"] = 1;
	$tdatapaa_master_view[".closePopupAfterEdit"] = 1;
	$tdatapaa_master_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapaa_master_view[".add"] = true;
$tdatapaa_master_view[".afterAddAction"] = 0;
$tdatapaa_master_view[".closePopupAfterAdd"] = 1;
$tdatapaa_master_view[".afterAddActionDetTable"] = "paa_master_usos";
}

if( $pages[PAGE_LIST] ) {
	$tdatapaa_master_view[".list"] = true;
}



$tdatapaa_master_view[".strSortControlSettingsJSON"] = "[]";




if( $pages[PAGE_VIEW] ) {
$tdatapaa_master_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapaa_master_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapaa_master_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapaa_master_view[".printFriendly"] = true;
}



$tdatapaa_master_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapaa_master_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapaa_master_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapaa_master_view[".isUseAjaxSuggest"] = true;

$tdatapaa_master_view[".rowHighlite"] = true;



																								

$tdatapaa_master_view[".ajaxCodeSnippetAdded"] = false;

$tdatapaa_master_view[".buttonsAdded"] = false;

$tdatapaa_master_view[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapaa_master_view[".isUseTimeForSearch"] = false;


$tdatapaa_master_view[".badgeColor"] = "cd853f";


$tdatapaa_master_view[".allSearchFields"] = array();
$tdatapaa_master_view[".filterFields"] = array();
$tdatapaa_master_view[".requiredSearchFields"] = array();

$tdatapaa_master_view[".googleLikeFields"] = array();
$tdatapaa_master_view[".googleLikeFields"][] = "PAA_ID";
$tdatapaa_master_view[".googleLikeFields"][] = "COD_UNSPSC";
$tdatapaa_master_view[".googleLikeFields"][] = "DESCRIPCION";
$tdatapaa_master_view[".googleLikeFields"][] = "MES_INICIO";
$tdatapaa_master_view[".googleLikeFields"][] = "MES_PRESENTA";
$tdatapaa_master_view[".googleLikeFields"][] = "DURACION_CONTRATO";
$tdatapaa_master_view[".googleLikeFields"][] = "DURACION_ESTIMADA_DMA";
$tdatapaa_master_view[".googleLikeFields"][] = "MODALIDAD";
$tdatapaa_master_view[".googleLikeFields"][] = "FUENTE_RECURSOS";
$tdatapaa_master_view[".googleLikeFields"][] = "VALOR";
$tdatapaa_master_view[".googleLikeFields"][] = "USOS_TOTAL";
$tdatapaa_master_view[".googleLikeFields"][] = "VALOR_VIGENCIA";
$tdatapaa_master_view[".googleLikeFields"][] = "VALOR_VIGENCIA_FUTURA";
$tdatapaa_master_view[".googleLikeFields"][] = "VF";
$tdatapaa_master_view[".googleLikeFields"][] = "ESTADO_VF";
$tdatapaa_master_view[".googleLikeFields"][] = "UNIDAD_CONTRATACION";
$tdatapaa_master_view[".googleLikeFields"][] = "COD_UBICACION";
$tdatapaa_master_view[".googleLikeFields"][] = "RESPONSABLE_NOMBRE";
$tdatapaa_master_view[".googleLikeFields"][] = "RESPONSABLE_TELEFONO";
$tdatapaa_master_view[".googleLikeFields"][] = "RESPONSABLE_EMAIL";
$tdatapaa_master_view[".googleLikeFields"][] = "responsable";
$tdatapaa_master_view[".googleLikeFields"][] = "vigencia";
$tdatapaa_master_view[".googleLikeFields"][] = "sys_user";
$tdatapaa_master_view[".googleLikeFields"][] = "sys_date";
$tdatapaa_master_view[".googleLikeFields"][] = "sys_status";
$tdatapaa_master_view[".googleLikeFields"][] = "TIPOSOL";



$tdatapaa_master_view[".tableType"] = "list";

$tdatapaa_master_view[".printerPageOrientation"] = 0;
$tdatapaa_master_view[".nPrinterPageScale"] = 100;

$tdatapaa_master_view[".nPrinterSplitRecords"] = 40;

$tdatapaa_master_view[".geocodingEnabled"] = false;





$tdatapaa_master_view[".isResizeColumns"] = true;


$tdatapaa_master_view[".noRecordsFirstPage"] = true;



$tdatapaa_master_view[".pageSize"] = 25;

$tdatapaa_master_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapaa_master_view[".strOrderBy"] = $tstrOrderBy;

$tdatapaa_master_view[".orderindexes"] = array();

$tdatapaa_master_view[".sqlHead"] = "SELECT PAA_ID, COD_UNSPSC, DESCRIPCION, MES_INICIO, MES_PRESENTA, DURACION_CONTRATO, DURACION_ESTIMADA_DMA, MODALIDAD, FUENTE_RECURSOS, VALOR, USOS_TOTAL, VALOR_VIGENCIA, VALOR_VIGENCIA_FUTURA, VF, ESTADO_VF, UNIDAD_CONTRATACION, COD_UBICACION, RESPONSABLE_NOMBRE, RESPONSABLE_TELEFONO, RESPONSABLE_EMAIL, responsable, vigencia, sys_user, sys_date, sys_status, TIPOSOL";
$tdatapaa_master_view[".sqlFrom"] = "FROM paa_master";
$tdatapaa_master_view[".sqlWhereExpr"] = "(TIPOSOL =1)";
$tdatapaa_master_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapaa_master_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapaa_master_view[".arrGroupsPerPage"] = $arrGPP;

$tdatapaa_master_view[".highlightSearchResults"] = true;

$tableKeyspaa_master_view = array();
$tableKeyspaa_master_view[] = "PAA_ID";
$tdatapaa_master_view[".Keys"] = $tableKeyspaa_master_view;


$tdatapaa_master_view[".hideMobileList"] = array();




//	PAA_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PAA_ID";
	$fdata["GoodName"] = "PAA_ID";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","PAA_ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "PAA_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAA_ID";

	
	
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


	$tdatapaa_master_view["PAA_ID"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "PAA_ID";
//	COD_UNSPSC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "COD_UNSPSC";
	$fdata["GoodName"] = "COD_UNSPSC";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","COD_UNSPSC");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "COD_UNSPSC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COD_UNSPSC";

	
	
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
	$edata["LookupTable"] = "global_unspsc";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "COD_UNSPSC";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "DESC_UNSPSC";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
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


	$tdatapaa_master_view["COD_UNSPSC"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "COD_UNSPSC";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","DESCRIPCION");
	$fdata["FieldType"] = 201;

	
	
	
			

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


	$tdatapaa_master_view["DESCRIPCION"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "DESCRIPCION";
//	MES_INICIO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "MES_INICIO";
	$fdata["GoodName"] = "MES_INICIO";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","MES_INICIO");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "MES_INICIO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MES_INICIO";

	
	
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
	$edata["LookupTable"] = "global_meses";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "COD_MES";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "NOM_MES";

	

	
	$edata["LookupOrderBy"] = "COD_MES";

	
	
	
	

	
	
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


	$tdatapaa_master_view["MES_INICIO"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "MES_INICIO";
//	MES_PRESENTA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MES_PRESENTA";
	$fdata["GoodName"] = "MES_PRESENTA";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","MES_PRESENTA");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "MES_PRESENTA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MES_PRESENTA";

	
	
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
	$edata["LookupTable"] = "global_meses";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "COD_MES";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NOM_MES";

	

	
	$edata["LookupOrderBy"] = "COD_MES";

	
	
	
	

	
	
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


	$tdatapaa_master_view["MES_PRESENTA"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "MES_PRESENTA";
//	DURACION_CONTRATO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DURACION_CONTRATO";
	$fdata["GoodName"] = "DURACION_CONTRATO";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","DURACION_CONTRATO");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "DURACION_CONTRATO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DURACION_CONTRATO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
	
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


	$tdatapaa_master_view["DURACION_CONTRATO"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "DURACION_CONTRATO";
//	DURACION_ESTIMADA_DMA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DURACION_ESTIMADA_DMA";
	$fdata["GoodName"] = "DURACION_ESTIMADA_DMA";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","DURACION_ESTIMADA_DMA");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "DURACION_ESTIMADA_DMA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DURACION_ESTIMADA_DMA";

	
	
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
	$edata["LookupTable"] = "global_duracion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "COD_DURACION";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "NOM_DURACION";

	

	
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


	$tdatapaa_master_view["DURACION_ESTIMADA_DMA"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "DURACION_ESTIMADA_DMA";
//	MODALIDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "MODALIDAD";
	$fdata["GoodName"] = "MODALIDAD";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","MODALIDAD");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "MODALIDAD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MODALIDAD";

	
	
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
	$edata["LookupTable"] = "global_modalidad";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "COD_MODALIDAD";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "NOM_MODALIDAD";

	

	
	$edata["LookupOrderBy"] = "NOM_MODALIDAD";

	
	
	
	

	
	
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


	$tdatapaa_master_view["MODALIDAD"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "MODALIDAD";
//	FUENTE_RECURSOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FUENTE_RECURSOS";
	$fdata["GoodName"] = "FUENTE_RECURSOS";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","FUENTE_RECURSOS");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "FUENTE_RECURSOS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FUENTE_RECURSOS";

	
	
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
	$edata["LookupTable"] = "global_fuenterec";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "COD_FUENTE";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "NOM_FUENTE";

	

	
	$edata["LookupOrderBy"] = "NOM_FUENTE";

	
	
	
	

	
	
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


	$tdatapaa_master_view["FUENTE_RECURSOS"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "FUENTE_RECURSOS";
//	VALOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "VALOR";
	$fdata["GoodName"] = "VALOR";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","VALOR");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "VALOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VALOR";

	
	
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


	$tdatapaa_master_view["VALOR"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "VALOR";
//	USOS_TOTAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "USOS_TOTAL";
	$fdata["GoodName"] = "USOS_TOTAL";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","USOS_TOTAL");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "USOS_TOTAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USOS_TOTAL";

	
	
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


	$tdatapaa_master_view["USOS_TOTAL"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "USOS_TOTAL";
//	VALOR_VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "VALOR_VIGENCIA";
	$fdata["GoodName"] = "VALOR_VIGENCIA";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","VALOR_VIGENCIA");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "VALOR_VIGENCIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VALOR_VIGENCIA";

	
	
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


	$tdatapaa_master_view["VALOR_VIGENCIA"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "VALOR_VIGENCIA";
//	VALOR_VIGENCIA_FUTURA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "VALOR_VIGENCIA_FUTURA";
	$fdata["GoodName"] = "VALOR_VIGENCIA_FUTURA";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","VALOR_VIGENCIA_FUTURA");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "VALOR_VIGENCIA_FUTURA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VALOR_VIGENCIA_FUTURA";

	
	
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


	$tdatapaa_master_view["VALOR_VIGENCIA_FUTURA"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "VALOR_VIGENCIA_FUTURA";
//	VF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "VF";
	$fdata["GoodName"] = "VF";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","VF");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "VF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VF";

	
	
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
	$edata["LookupTable"] = "global_vf";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "COD_VF";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "NOM_VF";

	

	
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


	$tdatapaa_master_view["VF"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "VF";
//	ESTADO_VF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ESTADO_VF";
	$fdata["GoodName"] = "ESTADO_VF";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","ESTADO_VF");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "ESTADO_VF";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ESTADO_VF";

	
	
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
	$edata["LookupTable"] = "global_estvf";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "COD_ESTVF";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "NOM_ESTVF";

	

	
	$edata["LookupOrderBy"] = "COD_ESTVF";

	
	
	
	

	
	
	
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


	$tdatapaa_master_view["ESTADO_VF"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "ESTADO_VF";
//	UNIDAD_CONTRATACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "UNIDAD_CONTRATACION";
	$fdata["GoodName"] = "UNIDAD_CONTRATACION";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","UNIDAD_CONTRATACION");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "UNIDAD_CONTRATACION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UNIDAD_CONTRATACION";

	
	
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


	$tdatapaa_master_view["UNIDAD_CONTRATACION"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "UNIDAD_CONTRATACION";
//	COD_UBICACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "COD_UBICACION";
	$fdata["GoodName"] = "COD_UBICACION";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","COD_UBICACION");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "COD_UBICACION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COD_UBICACION";

	
	
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
	$edata["LookupTable"] = "global_ubicacion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "COD_UBICA";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "NOM_UBICA";

	

	
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


	$tdatapaa_master_view["COD_UBICACION"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "COD_UBICACION";
//	RESPONSABLE_NOMBRE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "RESPONSABLE_NOMBRE";
	$fdata["GoodName"] = "RESPONSABLE_NOMBRE";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","RESPONSABLE_NOMBRE");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "RESPONSABLE_NOMBRE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RESPONSABLE_NOMBRE";

	
	
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


	$tdatapaa_master_view["RESPONSABLE_NOMBRE"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "RESPONSABLE_NOMBRE";
//	RESPONSABLE_TELEFONO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "RESPONSABLE_TELEFONO";
	$fdata["GoodName"] = "RESPONSABLE_TELEFONO";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","RESPONSABLE_TELEFONO");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "RESPONSABLE_TELEFONO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RESPONSABLE_TELEFONO";

	
	
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


	$tdatapaa_master_view["RESPONSABLE_TELEFONO"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "RESPONSABLE_TELEFONO";
//	RESPONSABLE_EMAIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "RESPONSABLE_EMAIL";
	$fdata["GoodName"] = "RESPONSABLE_EMAIL";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","RESPONSABLE_EMAIL");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "RESPONSABLE_EMAIL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RESPONSABLE_EMAIL";

	
	
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


	$tdatapaa_master_view["RESPONSABLE_EMAIL"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "RESPONSABLE_EMAIL";
//	responsable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "responsable";
	$fdata["GoodName"] = "responsable";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","responsable");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "responsable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "responsable";

	
	
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


	$tdatapaa_master_view["responsable"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "responsable";
//	vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "vigencia";
	$fdata["GoodName"] = "vigencia";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","vigencia");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "vigencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vigencia";

	
	
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
	$edata["LookupTable"] = "global_vigencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "vigencia";
	$edata["LinkFieldType"] = 2;
	$edata["DisplayField"] = "vigencia";

				$edata["LookupWhereCode"] = true;


	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "PAA_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapaa_master_view["vigencia"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "vigencia";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","sys_user");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "sys_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_user";

	
	
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


	$tdatapaa_master_view["sys_user"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "sys_user";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","sys_date");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "sys_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_date";

	
	
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


	$tdatapaa_master_view["sys_date"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "sys_date";
//	sys_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "sys_status";
	$fdata["GoodName"] = "sys_status";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","sys_status");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "sys_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_status";

	
	
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
	$edata["LinkFieldType"] = 3;
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


	$tdatapaa_master_view["sys_status"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "sys_status";
//	TIPOSOL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "TIPOSOL";
	$fdata["GoodName"] = "TIPOSOL";
	$fdata["ownerTable"] = "paa_master";
	$fdata["Label"] = GetFieldLabel("paa_master_view","TIPOSOL");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "TIPOSOL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPOSOL";

	
	
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
		$fdata["filterTotalFields"] = "PAA_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapaa_master_view["TIPOSOL"] = $fdata;
		$tdatapaa_master_view[".searchableFields"][] = "TIPOSOL";


$tables_data["paa_master_view"]=&$tdatapaa_master_view;
$field_labels["paa_master_view"] = &$fieldLabelspaa_master_view;
$fieldToolTips["paa_master_view"] = &$fieldToolTipspaa_master_view;
$placeHolders["paa_master_view"] = &$placeHolderspaa_master_view;
$page_titles["paa_master_view"] = &$pageTitlespaa_master_view;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["paa_master_view"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["paa_master_view"] = array();



	
				$strOriginalDetailsTable="paa_master_modifica";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="paa_master_modifica_adm";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "paa_master_modifica_adm";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["paa_master_view"][0] = $masterParams;
				$masterTablesData["paa_master_view"][0]["masterKeys"] = array();
	$masterTablesData["paa_master_view"][0]["masterKeys"][]="PAA_ID_FK";
				$masterTablesData["paa_master_view"][0]["detailKeys"] = array();
	$masterTablesData["paa_master_view"][0]["detailKeys"][]="PAA_ID";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_paa_master_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PAA_ID, COD_UNSPSC, DESCRIPCION, MES_INICIO, MES_PRESENTA, DURACION_CONTRATO, DURACION_ESTIMADA_DMA, MODALIDAD, FUENTE_RECURSOS, VALOR, USOS_TOTAL, VALOR_VIGENCIA, VALOR_VIGENCIA_FUTURA, VF, ESTADO_VF, UNIDAD_CONTRATACION, COD_UBICACION, RESPONSABLE_NOMBRE, RESPONSABLE_TELEFONO, RESPONSABLE_EMAIL, responsable, vigencia, sys_user, sys_date, sys_status, TIPOSOL";
$proto0["m_strFrom"] = "FROM paa_master";
$proto0["m_strWhere"] = "(TIPOSOL =1)";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "TIPOSOL =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "TIPOSOL",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=1";
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
	"m_strName" => "PAA_ID",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto6["m_sql"] = "PAA_ID";
$proto6["m_srcTableName"] = "paa_master_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "COD_UNSPSC",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto8["m_sql"] = "COD_UNSPSC";
$proto8["m_srcTableName"] = "paa_master_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto10["m_sql"] = "DESCRIPCION";
$proto10["m_srcTableName"] = "paa_master_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "MES_INICIO",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto12["m_sql"] = "MES_INICIO";
$proto12["m_srcTableName"] = "paa_master_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MES_PRESENTA",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto14["m_sql"] = "MES_PRESENTA";
$proto14["m_srcTableName"] = "paa_master_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DURACION_CONTRATO",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto16["m_sql"] = "DURACION_CONTRATO";
$proto16["m_srcTableName"] = "paa_master_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DURACION_ESTIMADA_DMA",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto18["m_sql"] = "DURACION_ESTIMADA_DMA";
$proto18["m_srcTableName"] = "paa_master_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "MODALIDAD",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto20["m_sql"] = "MODALIDAD";
$proto20["m_srcTableName"] = "paa_master_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "FUENTE_RECURSOS",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto22["m_sql"] = "FUENTE_RECURSOS";
$proto22["m_srcTableName"] = "paa_master_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto24["m_sql"] = "VALOR";
$proto24["m_srcTableName"] = "paa_master_view";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "USOS_TOTAL",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto26["m_sql"] = "USOS_TOTAL";
$proto26["m_srcTableName"] = "paa_master_view";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR_VIGENCIA",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto28["m_sql"] = "VALOR_VIGENCIA";
$proto28["m_srcTableName"] = "paa_master_view";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR_VIGENCIA_FUTURA",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto30["m_sql"] = "VALOR_VIGENCIA_FUTURA";
$proto30["m_srcTableName"] = "paa_master_view";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "VF",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto32["m_sql"] = "VF";
$proto32["m_srcTableName"] = "paa_master_view";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ESTADO_VF",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto34["m_sql"] = "ESTADO_VF";
$proto34["m_srcTableName"] = "paa_master_view";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "UNIDAD_CONTRATACION",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto36["m_sql"] = "UNIDAD_CONTRATACION";
$proto36["m_srcTableName"] = "paa_master_view";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "COD_UBICACION",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto38["m_sql"] = "COD_UBICACION";
$proto38["m_srcTableName"] = "paa_master_view";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "RESPONSABLE_NOMBRE",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto40["m_sql"] = "RESPONSABLE_NOMBRE";
$proto40["m_srcTableName"] = "paa_master_view";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "RESPONSABLE_TELEFONO",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto42["m_sql"] = "RESPONSABLE_TELEFONO";
$proto42["m_srcTableName"] = "paa_master_view";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "RESPONSABLE_EMAIL",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto44["m_sql"] = "RESPONSABLE_EMAIL";
$proto44["m_srcTableName"] = "paa_master_view";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "responsable",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto46["m_sql"] = "responsable";
$proto46["m_srcTableName"] = "paa_master_view";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "vigencia",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto48["m_sql"] = "vigencia";
$proto48["m_srcTableName"] = "paa_master_view";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto50["m_sql"] = "sys_user";
$proto50["m_srcTableName"] = "paa_master_view";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto52["m_sql"] = "sys_date";
$proto52["m_srcTableName"] = "paa_master_view";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_status",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto54["m_sql"] = "sys_status";
$proto54["m_srcTableName"] = "paa_master_view";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPOSOL",
	"m_strTable" => "paa_master",
	"m_srcTableName" => "paa_master_view"
));

$proto56["m_sql"] = "TIPOSOL";
$proto56["m_srcTableName"] = "paa_master_view";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "paa_master";
$proto59["m_srcTableName"] = "paa_master_view";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "PAA_ID";
$proto59["m_columns"][] = "COD_UNSPSC";
$proto59["m_columns"][] = "DESCRIPCION";
$proto59["m_columns"][] = "DESCRIPCION_NEW";
$proto59["m_columns"][] = "MES_INICIO";
$proto59["m_columns"][] = "MES_PRESENTA";
$proto59["m_columns"][] = "DURACION_CONTRATO";
$proto59["m_columns"][] = "DURACION_ESTIMADA_DMA";
$proto59["m_columns"][] = "MODALIDAD";
$proto59["m_columns"][] = "FUENTE_RECURSOS";
$proto59["m_columns"][] = "VALOR";
$proto59["m_columns"][] = "VALOR_VIGENCIA";
$proto59["m_columns"][] = "VALOR_VIGENCIA_FUTURA";
$proto59["m_columns"][] = "VF";
$proto59["m_columns"][] = "ESTADO_VF";
$proto59["m_columns"][] = "UNIDAD_CONTRATACION";
$proto59["m_columns"][] = "COD_UBICACION";
$proto59["m_columns"][] = "RESPONSABLE_NOMBRE";
$proto59["m_columns"][] = "RESPONSABLE_TELEFONO";
$proto59["m_columns"][] = "RESPONSABLE_EMAIL";
$proto59["m_columns"][] = "responsable";
$proto59["m_columns"][] = "vigencia";
$proto59["m_columns"][] = "sys_user";
$proto59["m_columns"][] = "sys_date";
$proto59["m_columns"][] = "sys_status";
$proto59["m_columns"][] = "REQ_OBS";
$proto59["m_columns"][] = "REQ_DATE";
$proto59["m_columns"][] = "REQ_MAILNOT";
$proto59["m_columns"][] = "SolModifica";
$proto59["m_columns"][] = "ContIdFK";
$proto59["m_columns"][] = "OBS_anulacion";
$proto59["m_columns"][] = "TIPOSOL";
$proto59["m_columns"][] = "USOS_TOTAL";
$proto59["m_columns"][] = "responsable_dep";
$proto59["m_columns"][] = "responsable_depsup";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "paa_master";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "paa_master_view";
$proto60=array();
$proto60["m_sql"] = "";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="paa_master_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_paa_master_view = createSqlQuery_paa_master_view();


	
										;

																										

$tdatapaa_master_view[".sqlquery"] = $queryData_paa_master_view;

include_once(getabspath("include/paa_master_view_events.php"));
$tableEvents["paa_master_view"] = new eventclass_paa_master_view;
$tdatapaa_master_view[".hasEvents"] = true;

?>