<?php



$tdataglobal_ejecucion = array();
$tdataglobal_ejecucion[".searchableFields"] = array();
$tdataglobal_ejecucion[".ShortName"] = "global_ejecucion";
$tdataglobal_ejecucion[".OwnerID"] = "";
$tdataglobal_ejecucion[".OriginalTable"] = "global_ejecucion";


$tdataglobal_ejecucion[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataglobal_ejecucion[".originalPagesByType"] = $tdataglobal_ejecucion[".pagesByType"];
$tdataglobal_ejecucion[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataglobal_ejecucion[".originalPages"] = $tdataglobal_ejecucion[".pages"];
$tdataglobal_ejecucion[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdataglobal_ejecucion[".originalDefaultPages"] = $tdataglobal_ejecucion[".defaultPages"];

//	field labels
$fieldLabelsglobal_ejecucion = array();
$fieldToolTipsglobal_ejecucion = array();
$pageTitlesglobal_ejecucion = array();
$placeHoldersglobal_ejecucion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_ejecucion["Spanish"] = array();
	$fieldToolTipsglobal_ejecucion["Spanish"] = array();
	$placeHoldersglobal_ejecucion["Spanish"] = array();
	$pageTitlesglobal_ejecucion["Spanish"] = array();
	$fieldLabelsglobal_ejecucion["Spanish"]["id_transac"] = "Id Transac";
	$fieldToolTipsglobal_ejecucion["Spanish"]["id_transac"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["id_transac"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["VIGENCIA"] = "VIGENCIA";
	$fieldToolTipsglobal_ejecucion["Spanish"]["VIGENCIA"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["VIGENCIA"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["CODIGO_BPIN"] = "CODIGO BPIN";
	$fieldToolTipsglobal_ejecucion["Spanish"]["CODIGO_BPIN"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["CODIGO_BPIN"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["FICHA_BPIN"] = "FICHA BPIN";
	$fieldToolTipsglobal_ejecucion["Spanish"]["FICHA_BPIN"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["FICHA_BPIN"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["UEJ"] = "UEJ";
	$fieldToolTipsglobal_ejecucion["Spanish"]["UEJ"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["UEJ"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["UEJ_S"] = "UEJ S";
	$fieldToolTipsglobal_ejecucion["Spanish"]["UEJ_S"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["UEJ_S"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["UEJ_MIN"] = "UEJ MIN";
	$fieldToolTipsglobal_ejecucion["Spanish"]["UEJ_MIN"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["UEJ_MIN"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["NOMBRE_UEJ"] = "NOMBRE UEJ";
	$fieldToolTipsglobal_ejecucion["Spanish"]["NOMBRE_UEJ"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["NOMBRE_UEJ"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["RUBRO"] = "RUBRO";
	$fieldToolTipsglobal_ejecucion["Spanish"]["RUBRO"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["RUBRO"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["TIPO"] = "TIPO";
	$fieldToolTipsglobal_ejecucion["Spanish"]["TIPO"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["TIPO"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["CTA"] = "CTA";
	$fieldToolTipsglobal_ejecucion["Spanish"]["CTA"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["CTA"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["SUBCTA"] = "SUBCTA";
	$fieldToolTipsglobal_ejecucion["Spanish"]["SUBCTA"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["SUBCTA"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["OBJ"] = "OBJ";
	$fieldToolTipsglobal_ejecucion["Spanish"]["OBJ"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["OBJ"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["ORD"] = "ORD";
	$fieldToolTipsglobal_ejecucion["Spanish"]["ORD"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["ORD"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["SORORD"] = "SORORD";
	$fieldToolTipsglobal_ejecucion["Spanish"]["SORORD"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["SORORD"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["ITEM"] = "ITEM";
	$fieldToolTipsglobal_ejecucion["Spanish"]["ITEM"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["ITEM"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["SUBITEM"] = "SUBITEM";
	$fieldToolTipsglobal_ejecucion["Spanish"]["SUBITEM"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["SUBITEM"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["SUBITEM_2"] = "SUBITEM 2";
	$fieldToolTipsglobal_ejecucion["Spanish"]["SUBITEM_2"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["SUBITEM_2"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["FUENTE"] = "FUENTE";
	$fieldToolTipsglobal_ejecucion["Spanish"]["FUENTE"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["FUENTE"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["REC"] = "REC";
	$fieldToolTipsglobal_ejecucion["Spanish"]["REC"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["REC"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["SIT"] = "SIT";
	$fieldToolTipsglobal_ejecucion["Spanish"]["SIT"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["SIT"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipsglobal_ejecucion["Spanish"]["DESCRIPCION"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["DESCRIPCION"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["APR__INICIAL"] = "APR. INICIAL";
	$fieldToolTipsglobal_ejecucion["Spanish"]["APR__INICIAL"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["APR__INICIAL"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["APR__ADICIONADA"] = "APR. ADICIONADA";
	$fieldToolTipsglobal_ejecucion["Spanish"]["APR__ADICIONADA"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["APR__ADICIONADA"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["APR__REDUCIDA"] = "APR. REDUCIDA";
	$fieldToolTipsglobal_ejecucion["Spanish"]["APR__REDUCIDA"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["APR__REDUCIDA"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["APR__VIGENTE"] = "APR. VIGENTE";
	$fieldToolTipsglobal_ejecucion["Spanish"]["APR__VIGENTE"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["APR__VIGENTE"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["APR_BLOQUEADA"] = "APR BLOQUEADA";
	$fieldToolTipsglobal_ejecucion["Spanish"]["APR_BLOQUEADA"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["APR_BLOQUEADA"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["CDP"] = "CDP";
	$fieldToolTipsglobal_ejecucion["Spanish"]["CDP"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["CDP"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["APR__DISPONIBLE"] = "APR. DISPONIBLE";
	$fieldToolTipsglobal_ejecucion["Spanish"]["APR__DISPONIBLE"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["APR__DISPONIBLE"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["COMPROMISO"] = "COMPROMISO";
	$fieldToolTipsglobal_ejecucion["Spanish"]["COMPROMISO"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["COMPROMISO"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["OBLIGACION"] = "OBLIGACION";
	$fieldToolTipsglobal_ejecucion["Spanish"]["OBLIGACION"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["OBLIGACION"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["ORDEN_PAGO"] = "ORDEN PAGO";
	$fieldToolTipsglobal_ejecucion["Spanish"]["ORDEN_PAGO"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["ORDEN_PAGO"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["PAGOS"] = "PAGOS";
	$fieldToolTipsglobal_ejecucion["Spanish"]["PAGOS"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["PAGOS"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["FECHA_CORTE"] = "FECHA CORTE";
	$fieldToolTipsglobal_ejecucion["Spanish"]["FECHA_CORTE"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["FECHA_CORTE"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["FECHA_ACTUALIZACION"] = "FECHA ACTUALIZACION";
	$fieldToolTipsglobal_ejecucion["Spanish"]["FECHA_ACTUALIZACION"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["FECHA_ACTUALIZACION"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["DEPENDENCIA_ID"] = "DEPENDENCIA ID";
	$fieldToolTipsglobal_ejecucion["Spanish"]["DEPENDENCIA_ID"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["DEPENDENCIA_ID"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["RESPONSABLE_ID"] = "RESPONSABLE ID";
	$fieldToolTipsglobal_ejecucion["Spanish"]["RESPONSABLE_ID"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["RESPONSABLE_ID"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["DEPENDENCIA_SUP_ID"] = "DEPENDENCIA SUP ID";
	$fieldToolTipsglobal_ejecucion["Spanish"]["DEPENDENCIA_SUP_ID"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["DEPENDENCIA_SUP_ID"] = "";
	$fieldLabelsglobal_ejecucion["Spanish"]["USO_SN"] = "USO SN";
	$fieldToolTipsglobal_ejecucion["Spanish"]["USO_SN"] = "";
	$placeHoldersglobal_ejecucion["Spanish"]["USO_SN"] = "";
	if (count($fieldToolTipsglobal_ejecucion["Spanish"]))
		$tdataglobal_ejecucion[".isUseToolTips"] = true;
}


	$tdataglobal_ejecucion[".NCSearch"] = true;



$tdataglobal_ejecucion[".shortTableName"] = "global_ejecucion";
$tdataglobal_ejecucion[".nSecOptions"] = 0;

$tdataglobal_ejecucion[".mainTableOwnerID"] = "";
$tdataglobal_ejecucion[".entityType"] = 0;

$tdataglobal_ejecucion[".strOriginalTableName"] = "global_ejecucion";

	



$tdataglobal_ejecucion[".showAddInPopup"] = false;

$tdataglobal_ejecucion[".showEditInPopup"] = false;

$tdataglobal_ejecucion[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataglobal_ejecucion[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataglobal_ejecucion[".listAjax"] = false;
//	temporary
$tdataglobal_ejecucion[".listAjax"] = false;

	$tdataglobal_ejecucion[".audit"] = false;

	$tdataglobal_ejecucion[".locking"] = false;


$pages = $tdataglobal_ejecucion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_ejecucion[".edit"] = true;
	$tdataglobal_ejecucion[".afterEditAction"] = 1;
	$tdataglobal_ejecucion[".closePopupAfterEdit"] = 1;
	$tdataglobal_ejecucion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_ejecucion[".add"] = true;
$tdataglobal_ejecucion[".afterAddAction"] = 1;
$tdataglobal_ejecucion[".closePopupAfterAdd"] = 1;
$tdataglobal_ejecucion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_ejecucion[".list"] = true;
}



$tdataglobal_ejecucion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_ejecucion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_ejecucion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_ejecucion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_ejecucion[".printFriendly"] = true;
}



$tdataglobal_ejecucion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_ejecucion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_ejecucion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_ejecucion[".isUseAjaxSuggest"] = true;

$tdataglobal_ejecucion[".rowHighlite"] = true;



												

$tdataglobal_ejecucion[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_ejecucion[".buttonsAdded"] = false;

$tdataglobal_ejecucion[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_ejecucion[".isUseTimeForSearch"] = false;


$tdataglobal_ejecucion[".badgeColor"] = "E07878";


$tdataglobal_ejecucion[".allSearchFields"] = array();
$tdataglobal_ejecucion[".filterFields"] = array();
$tdataglobal_ejecucion[".requiredSearchFields"] = array();

$tdataglobal_ejecucion[".googleLikeFields"] = array();
$tdataglobal_ejecucion[".googleLikeFields"][] = "id_transac";
$tdataglobal_ejecucion[".googleLikeFields"][] = "VIGENCIA";
$tdataglobal_ejecucion[".googleLikeFields"][] = "CODIGO_BPIN";
$tdataglobal_ejecucion[".googleLikeFields"][] = "FICHA_BPIN";
$tdataglobal_ejecucion[".googleLikeFields"][] = "UEJ";
$tdataglobal_ejecucion[".googleLikeFields"][] = "UEJ_S";
$tdataglobal_ejecucion[".googleLikeFields"][] = "UEJ_MIN";
$tdataglobal_ejecucion[".googleLikeFields"][] = "NOMBRE UEJ";
$tdataglobal_ejecucion[".googleLikeFields"][] = "RUBRO";
$tdataglobal_ejecucion[".googleLikeFields"][] = "USO_SN";
$tdataglobal_ejecucion[".googleLikeFields"][] = "TIPO";
$tdataglobal_ejecucion[".googleLikeFields"][] = "CTA";
$tdataglobal_ejecucion[".googleLikeFields"][] = "SUBCTA";
$tdataglobal_ejecucion[".googleLikeFields"][] = "OBJ";
$tdataglobal_ejecucion[".googleLikeFields"][] = "ORD";
$tdataglobal_ejecucion[".googleLikeFields"][] = "SORORD";
$tdataglobal_ejecucion[".googleLikeFields"][] = "ITEM";
$tdataglobal_ejecucion[".googleLikeFields"][] = "SUBITEM";
$tdataglobal_ejecucion[".googleLikeFields"][] = "SUBITEM 2";
$tdataglobal_ejecucion[".googleLikeFields"][] = "FUENTE";
$tdataglobal_ejecucion[".googleLikeFields"][] = "REC";
$tdataglobal_ejecucion[".googleLikeFields"][] = "SIT";
$tdataglobal_ejecucion[".googleLikeFields"][] = "DESCRIPCION";
$tdataglobal_ejecucion[".googleLikeFields"][] = "APR. INICIAL";
$tdataglobal_ejecucion[".googleLikeFields"][] = "APR. ADICIONADA";
$tdataglobal_ejecucion[".googleLikeFields"][] = "APR. REDUCIDA";
$tdataglobal_ejecucion[".googleLikeFields"][] = "APR. VIGENTE";
$tdataglobal_ejecucion[".googleLikeFields"][] = "APR BLOQUEADA";
$tdataglobal_ejecucion[".googleLikeFields"][] = "CDP";
$tdataglobal_ejecucion[".googleLikeFields"][] = "APR. DISPONIBLE";
$tdataglobal_ejecucion[".googleLikeFields"][] = "COMPROMISO";
$tdataglobal_ejecucion[".googleLikeFields"][] = "OBLIGACION";
$tdataglobal_ejecucion[".googleLikeFields"][] = "ORDEN PAGO";
$tdataglobal_ejecucion[".googleLikeFields"][] = "PAGOS";
$tdataglobal_ejecucion[".googleLikeFields"][] = "FECHA_CORTE";
$tdataglobal_ejecucion[".googleLikeFields"][] = "FECHA_ACTUALIZACION";
$tdataglobal_ejecucion[".googleLikeFields"][] = "DEPENDENCIA_ID";
$tdataglobal_ejecucion[".googleLikeFields"][] = "RESPONSABLE_ID";
$tdataglobal_ejecucion[".googleLikeFields"][] = "DEPENDENCIA_SUP_ID";



$tdataglobal_ejecucion[".tableType"] = "list";

$tdataglobal_ejecucion[".printerPageOrientation"] = 0;
$tdataglobal_ejecucion[".nPrinterPageScale"] = 100;

$tdataglobal_ejecucion[".nPrinterSplitRecords"] = 40;

$tdataglobal_ejecucion[".geocodingEnabled"] = false;










$tdataglobal_ejecucion[".pageSize"] = 20;

$tdataglobal_ejecucion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataglobal_ejecucion[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_ejecucion[".orderindexes"] = array();

$tdataglobal_ejecucion[".sqlHead"] = "SELECT id_transac,  	VIGENCIA,  	CODIGO_BPIN,  	FICHA_BPIN,  	UEJ,  	UEJ_S,  	UEJ_MIN,  	`NOMBRE UEJ`,  	RUBRO,  	USO_SN,  	TIPO,  	CTA,  	SUBCTA,  	OBJ,  	ORD,  	SORORD,  	ITEM,  	SUBITEM,  	`SUBITEM 2`,  	FUENTE,  	REC,  	SIT,  	DESCRIPCION,  	`APR. INICIAL`,  	`APR. ADICIONADA`,  	`APR. REDUCIDA`,  	`APR. VIGENTE`,  	`APR BLOQUEADA`,  	CDP,  	`APR. DISPONIBLE`,  	COMPROMISO,  	OBLIGACION,  	`ORDEN PAGO`,  	PAGOS,  	FECHA_CORTE,  	FECHA_ACTUALIZACION,  	DEPENDENCIA_ID,  	RESPONSABLE_ID,  	DEPENDENCIA_SUP_ID";
$tdataglobal_ejecucion[".sqlFrom"] = "FROM global_ejecucion";
$tdataglobal_ejecucion[".sqlWhereExpr"] = "";
$tdataglobal_ejecucion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_ejecucion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_ejecucion[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_ejecucion[".highlightSearchResults"] = true;

$tableKeysglobal_ejecucion = array();
$tableKeysglobal_ejecucion[] = "id_transac";
$tdataglobal_ejecucion[".Keys"] = $tableKeysglobal_ejecucion;


$tdataglobal_ejecucion[".hideMobileList"] = array();




//	id_transac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_transac";
	$fdata["GoodName"] = "id_transac";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","id_transac");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_transac";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_transac";

	
	
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


	$tdataglobal_ejecucion["id_transac"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "id_transac";
//	VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "VIGENCIA";
	$fdata["GoodName"] = "VIGENCIA";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","VIGENCIA");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "VIGENCIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VIGENCIA";

	
	
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


	$tdataglobal_ejecucion["VIGENCIA"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "VIGENCIA";
//	CODIGO_BPIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CODIGO_BPIN";
	$fdata["GoodName"] = "CODIGO_BPIN";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","CODIGO_BPIN");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CODIGO_BPIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CODIGO_BPIN";

	
	
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
			$edata["EditParams"].= " maxlength=13";

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


	$tdataglobal_ejecucion["CODIGO_BPIN"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "CODIGO_BPIN";
//	FICHA_BPIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FICHA_BPIN";
	$fdata["GoodName"] = "FICHA_BPIN";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","FICHA_BPIN");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "FICHA_BPIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FICHA_BPIN";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdataglobal_ejecucion["FICHA_BPIN"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "FICHA_BPIN";
//	UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "UEJ";
	$fdata["GoodName"] = "UEJ";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","UEJ");
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


	$tdataglobal_ejecucion["UEJ"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "UEJ";
//	UEJ_S
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "UEJ_S";
	$fdata["GoodName"] = "UEJ_S";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","UEJ_S");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "UEJ_S";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UEJ_S";

	
	
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


	$tdataglobal_ejecucion["UEJ_S"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "UEJ_S";
//	UEJ_MIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "UEJ_MIN";
	$fdata["GoodName"] = "UEJ_MIN";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","UEJ_MIN");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "UEJ_MIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UEJ_MIN";

	
	
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


	$tdataglobal_ejecucion["UEJ_MIN"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "UEJ_MIN";
//	NOMBRE UEJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "NOMBRE UEJ";
	$fdata["GoodName"] = "NOMBRE_UEJ";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","NOMBRE_UEJ");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NOMBRE UEJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`NOMBRE UEJ`";

	
	
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


	$tdataglobal_ejecucion["NOMBRE UEJ"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "NOMBRE UEJ";
//	RUBRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "RUBRO";
	$fdata["GoodName"] = "RUBRO";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","RUBRO");
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


	$tdataglobal_ejecucion["RUBRO"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "RUBRO";
//	USO_SN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "USO_SN";
	$fdata["GoodName"] = "USO_SN";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","USO_SN");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "USO_SN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "USO_SN";

	
	
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


	$tdataglobal_ejecucion["USO_SN"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "USO_SN";
//	TIPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "TIPO";
	$fdata["GoodName"] = "TIPO";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","TIPO");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=1";

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


	$tdataglobal_ejecucion["TIPO"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "TIPO";
//	CTA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "CTA";
	$fdata["GoodName"] = "CTA";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","CTA");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CTA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CTA";

	
	
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


	$tdataglobal_ejecucion["CTA"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "CTA";
//	SUBCTA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "SUBCTA";
	$fdata["GoodName"] = "SUBCTA";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","SUBCTA");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SUBCTA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUBCTA";

	
	
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


	$tdataglobal_ejecucion["SUBCTA"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "SUBCTA";
//	OBJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "OBJ";
	$fdata["GoodName"] = "OBJ";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","OBJ");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "OBJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBJ";

	
	
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


	$tdataglobal_ejecucion["OBJ"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "OBJ";
//	ORD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ORD";
	$fdata["GoodName"] = "ORD";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","ORD");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ORD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ORD";

	
	
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


	$tdataglobal_ejecucion["ORD"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "ORD";
//	SORORD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "SORORD";
	$fdata["GoodName"] = "SORORD";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","SORORD");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SORORD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SORORD";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdataglobal_ejecucion["SORORD"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "SORORD";
//	ITEM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ITEM";
	$fdata["GoodName"] = "ITEM";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","ITEM");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ITEM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ITEM";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdataglobal_ejecucion["ITEM"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "ITEM";
//	SUBITEM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "SUBITEM";
	$fdata["GoodName"] = "SUBITEM";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","SUBITEM");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SUBITEM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUBITEM";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdataglobal_ejecucion["SUBITEM"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "SUBITEM";
//	SUBITEM 2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "SUBITEM 2";
	$fdata["GoodName"] = "SUBITEM_2";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","SUBITEM_2");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SUBITEM 2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`SUBITEM 2`";

	
	
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


	$tdataglobal_ejecucion["SUBITEM 2"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "SUBITEM 2";
//	FUENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "FUENTE";
	$fdata["GoodName"] = "FUENTE";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","FUENTE");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "FUENTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FUENTE";

	
	
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


	$tdataglobal_ejecucion["FUENTE"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "FUENTE";
//	REC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "REC";
	$fdata["GoodName"] = "REC";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","REC");
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


	$tdataglobal_ejecucion["REC"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "REC";
//	SIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "SIT";
	$fdata["GoodName"] = "SIT";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","SIT");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SIT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SIT";

	
	
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


	$tdataglobal_ejecucion["SIT"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "SIT";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","DESCRIPCION");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "DESCRIPCION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
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


	$tdataglobal_ejecucion["DESCRIPCION"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "DESCRIPCION";
//	APR. INICIAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "APR. INICIAL";
	$fdata["GoodName"] = "APR__INICIAL";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","APR__INICIAL");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "APR. INICIAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR. INICIAL`";

	
	
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


	$tdataglobal_ejecucion["APR. INICIAL"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "APR. INICIAL";
//	APR. ADICIONADA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "APR. ADICIONADA";
	$fdata["GoodName"] = "APR__ADICIONADA";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","APR__ADICIONADA");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "APR. ADICIONADA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR. ADICIONADA`";

	
	
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


	$tdataglobal_ejecucion["APR. ADICIONADA"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "APR. ADICIONADA";
//	APR. REDUCIDA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "APR. REDUCIDA";
	$fdata["GoodName"] = "APR__REDUCIDA";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","APR__REDUCIDA");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "APR. REDUCIDA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR. REDUCIDA`";

	
	
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


	$tdataglobal_ejecucion["APR. REDUCIDA"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "APR. REDUCIDA";
//	APR. VIGENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "APR. VIGENTE";
	$fdata["GoodName"] = "APR__VIGENTE";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","APR__VIGENTE");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "APR. VIGENTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR. VIGENTE`";

	
	
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


	$tdataglobal_ejecucion["APR. VIGENTE"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "APR. VIGENTE";
//	APR BLOQUEADA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "APR BLOQUEADA";
	$fdata["GoodName"] = "APR_BLOQUEADA";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","APR_BLOQUEADA");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "APR BLOQUEADA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR BLOQUEADA`";

	
	
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


	$tdataglobal_ejecucion["APR BLOQUEADA"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "APR BLOQUEADA";
//	CDP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "CDP";
	$fdata["GoodName"] = "CDP";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","CDP");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "CDP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CDP";

	
	
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


	$tdataglobal_ejecucion["CDP"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "CDP";
//	APR. DISPONIBLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "APR. DISPONIBLE";
	$fdata["GoodName"] = "APR__DISPONIBLE";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","APR__DISPONIBLE");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "APR. DISPONIBLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APR. DISPONIBLE`";

	
	
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


	$tdataglobal_ejecucion["APR. DISPONIBLE"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "APR. DISPONIBLE";
//	COMPROMISO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "COMPROMISO";
	$fdata["GoodName"] = "COMPROMISO";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","COMPROMISO");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "COMPROMISO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMPROMISO";

	
	
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


	$tdataglobal_ejecucion["COMPROMISO"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "COMPROMISO";
//	OBLIGACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "OBLIGACION";
	$fdata["GoodName"] = "OBLIGACION";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","OBLIGACION");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "OBLIGACION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBLIGACION";

	
	
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


	$tdataglobal_ejecucion["OBLIGACION"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "OBLIGACION";
//	ORDEN PAGO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "ORDEN PAGO";
	$fdata["GoodName"] = "ORDEN_PAGO";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","ORDEN_PAGO");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "ORDEN PAGO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ORDEN PAGO`";

	
	
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


	$tdataglobal_ejecucion["ORDEN PAGO"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "ORDEN PAGO";
//	PAGOS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "PAGOS";
	$fdata["GoodName"] = "PAGOS";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","PAGOS");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "PAGOS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PAGOS";

	
	
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


	$tdataglobal_ejecucion["PAGOS"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "PAGOS";
//	FECHA_CORTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "FECHA_CORTE";
	$fdata["GoodName"] = "FECHA_CORTE";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","FECHA_CORTE");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "FECHA_CORTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHA_CORTE";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataglobal_ejecucion["FECHA_CORTE"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "FECHA_CORTE";
//	FECHA_ACTUALIZACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "FECHA_ACTUALIZACION";
	$fdata["GoodName"] = "FECHA_ACTUALIZACION";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","FECHA_ACTUALIZACION");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "FECHA_ACTUALIZACION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHA_ACTUALIZACION";

	
	
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


	$tdataglobal_ejecucion["FECHA_ACTUALIZACION"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "FECHA_ACTUALIZACION";
//	DEPENDENCIA_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "DEPENDENCIA_ID";
	$fdata["GoodName"] = "DEPENDENCIA_ID";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","DEPENDENCIA_ID");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "DEPENDENCIA_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEPENDENCIA_ID";

	
	
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


	$tdataglobal_ejecucion["DEPENDENCIA_ID"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "DEPENDENCIA_ID";
//	RESPONSABLE_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "RESPONSABLE_ID";
	$fdata["GoodName"] = "RESPONSABLE_ID";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","RESPONSABLE_ID");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "RESPONSABLE_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RESPONSABLE_ID";

	
	
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


	$tdataglobal_ejecucion["RESPONSABLE_ID"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "RESPONSABLE_ID";
//	DEPENDENCIA_SUP_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "DEPENDENCIA_SUP_ID";
	$fdata["GoodName"] = "DEPENDENCIA_SUP_ID";
	$fdata["ownerTable"] = "global_ejecucion";
	$fdata["Label"] = GetFieldLabel("global_ejecucion","DEPENDENCIA_SUP_ID");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "DEPENDENCIA_SUP_ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DEPENDENCIA_SUP_ID";

	
	
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


	$tdataglobal_ejecucion["DEPENDENCIA_SUP_ID"] = $fdata;
		$tdataglobal_ejecucion[".searchableFields"][] = "DEPENDENCIA_SUP_ID";


$tables_data["global_ejecucion"]=&$tdataglobal_ejecucion;
$field_labels["global_ejecucion"] = &$fieldLabelsglobal_ejecucion;
$fieldToolTips["global_ejecucion"] = &$fieldToolTipsglobal_ejecucion;
$placeHolders["global_ejecucion"] = &$placeHoldersglobal_ejecucion;
$page_titles["global_ejecucion"] = &$pageTitlesglobal_ejecucion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["global_ejecucion"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["global_ejecucion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_global_ejecucion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_transac,  	VIGENCIA,  	CODIGO_BPIN,  	FICHA_BPIN,  	UEJ,  	UEJ_S,  	UEJ_MIN,  	`NOMBRE UEJ`,  	RUBRO,  	USO_SN,  	TIPO,  	CTA,  	SUBCTA,  	OBJ,  	ORD,  	SORORD,  	ITEM,  	SUBITEM,  	`SUBITEM 2`,  	FUENTE,  	REC,  	SIT,  	DESCRIPCION,  	`APR. INICIAL`,  	`APR. ADICIONADA`,  	`APR. REDUCIDA`,  	`APR. VIGENTE`,  	`APR BLOQUEADA`,  	CDP,  	`APR. DISPONIBLE`,  	COMPROMISO,  	OBLIGACION,  	`ORDEN PAGO`,  	PAGOS,  	FECHA_CORTE,  	FECHA_ACTUALIZACION,  	DEPENDENCIA_ID,  	RESPONSABLE_ID,  	DEPENDENCIA_SUP_ID";
$proto0["m_strFrom"] = "FROM global_ejecucion";
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
	"m_strName" => "id_transac",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto6["m_sql"] = "id_transac";
$proto6["m_srcTableName"] = "global_ejecucion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "VIGENCIA",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto8["m_sql"] = "VIGENCIA";
$proto8["m_srcTableName"] = "global_ejecucion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CODIGO_BPIN",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto10["m_sql"] = "CODIGO_BPIN";
$proto10["m_srcTableName"] = "global_ejecucion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FICHA_BPIN",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto12["m_sql"] = "FICHA_BPIN";
$proto12["m_srcTableName"] = "global_ejecucion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto14["m_sql"] = "UEJ";
$proto14["m_srcTableName"] = "global_ejecucion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ_S",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto16["m_sql"] = "UEJ_S";
$proto16["m_srcTableName"] = "global_ejecucion";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "UEJ_MIN",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto18["m_sql"] = "UEJ_MIN";
$proto18["m_srcTableName"] = "global_ejecucion";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE UEJ",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto20["m_sql"] = "`NOMBRE UEJ`";
$proto20["m_srcTableName"] = "global_ejecucion";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "RUBRO",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto22["m_sql"] = "RUBRO";
$proto22["m_srcTableName"] = "global_ejecucion";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "USO_SN",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto24["m_sql"] = "USO_SN";
$proto24["m_srcTableName"] = "global_ejecucion";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPO",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto26["m_sql"] = "TIPO";
$proto26["m_srcTableName"] = "global_ejecucion";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "CTA",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto28["m_sql"] = "CTA";
$proto28["m_srcTableName"] = "global_ejecucion";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "SUBCTA",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto30["m_sql"] = "SUBCTA";
$proto30["m_srcTableName"] = "global_ejecucion";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "OBJ",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto32["m_sql"] = "OBJ";
$proto32["m_srcTableName"] = "global_ejecucion";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ORD",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto34["m_sql"] = "ORD";
$proto34["m_srcTableName"] = "global_ejecucion";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "SORORD",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto36["m_sql"] = "SORORD";
$proto36["m_srcTableName"] = "global_ejecucion";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "ITEM",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto38["m_sql"] = "ITEM";
$proto38["m_srcTableName"] = "global_ejecucion";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "SUBITEM",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto40["m_sql"] = "SUBITEM";
$proto40["m_srcTableName"] = "global_ejecucion";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "SUBITEM 2",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto42["m_sql"] = "`SUBITEM 2`";
$proto42["m_srcTableName"] = "global_ejecucion";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "FUENTE",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto44["m_sql"] = "FUENTE";
$proto44["m_srcTableName"] = "global_ejecucion";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "REC",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto46["m_sql"] = "REC";
$proto46["m_srcTableName"] = "global_ejecucion";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "SIT",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto48["m_sql"] = "SIT";
$proto48["m_srcTableName"] = "global_ejecucion";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto50["m_sql"] = "DESCRIPCION";
$proto50["m_srcTableName"] = "global_ejecucion";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "APR. INICIAL",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto52["m_sql"] = "`APR. INICIAL`";
$proto52["m_srcTableName"] = "global_ejecucion";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "APR. ADICIONADA",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto54["m_sql"] = "`APR. ADICIONADA`";
$proto54["m_srcTableName"] = "global_ejecucion";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "APR. REDUCIDA",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto56["m_sql"] = "`APR. REDUCIDA`";
$proto56["m_srcTableName"] = "global_ejecucion";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "APR. VIGENTE",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto58["m_sql"] = "`APR. VIGENTE`";
$proto58["m_srcTableName"] = "global_ejecucion";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "APR BLOQUEADA",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto60["m_sql"] = "`APR BLOQUEADA`";
$proto60["m_srcTableName"] = "global_ejecucion";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "CDP",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto62["m_sql"] = "CDP";
$proto62["m_srcTableName"] = "global_ejecucion";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "APR. DISPONIBLE",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto64["m_sql"] = "`APR. DISPONIBLE`";
$proto64["m_srcTableName"] = "global_ejecucion";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "COMPROMISO",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto66["m_sql"] = "COMPROMISO";
$proto66["m_srcTableName"] = "global_ejecucion";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "OBLIGACION",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto68["m_sql"] = "OBLIGACION";
$proto68["m_srcTableName"] = "global_ejecucion";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "ORDEN PAGO",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto70["m_sql"] = "`ORDEN PAGO`";
$proto70["m_srcTableName"] = "global_ejecucion";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "PAGOS",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto72["m_sql"] = "PAGOS";
$proto72["m_srcTableName"] = "global_ejecucion";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_CORTE",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto74["m_sql"] = "FECHA_CORTE";
$proto74["m_srcTableName"] = "global_ejecucion";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_ACTUALIZACION",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto76["m_sql"] = "FECHA_ACTUALIZACION";
$proto76["m_srcTableName"] = "global_ejecucion";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "DEPENDENCIA_ID",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto78["m_sql"] = "DEPENDENCIA_ID";
$proto78["m_srcTableName"] = "global_ejecucion";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "RESPONSABLE_ID",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto80["m_sql"] = "RESPONSABLE_ID";
$proto80["m_srcTableName"] = "global_ejecucion";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "DEPENDENCIA_SUP_ID",
	"m_strTable" => "global_ejecucion",
	"m_srcTableName" => "global_ejecucion"
));

$proto82["m_sql"] = "DEPENDENCIA_SUP_ID";
$proto82["m_srcTableName"] = "global_ejecucion";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto84=array();
$proto84["m_link"] = "SQLL_MAIN";
			$proto85=array();
$proto85["m_strName"] = "global_ejecucion";
$proto85["m_srcTableName"] = "global_ejecucion";
$proto85["m_columns"] = array();
$proto85["m_columns"][] = "id_transac";
$proto85["m_columns"][] = "VIGENCIA";
$proto85["m_columns"][] = "CODIGO_BPIN";
$proto85["m_columns"][] = "FICHA_BPIN";
$proto85["m_columns"][] = "UEJ";
$proto85["m_columns"][] = "UEJ_S";
$proto85["m_columns"][] = "UEJ_MIN";
$proto85["m_columns"][] = "NOMBRE UEJ";
$proto85["m_columns"][] = "RUBRO";
$proto85["m_columns"][] = "USO_SN";
$proto85["m_columns"][] = "TIPO";
$proto85["m_columns"][] = "CTA";
$proto85["m_columns"][] = "SUBCTA";
$proto85["m_columns"][] = "OBJ";
$proto85["m_columns"][] = "ORD";
$proto85["m_columns"][] = "SORORD";
$proto85["m_columns"][] = "ITEM";
$proto85["m_columns"][] = "SUBITEM";
$proto85["m_columns"][] = "SUBITEM 2";
$proto85["m_columns"][] = "FUENTE";
$proto85["m_columns"][] = "REC";
$proto85["m_columns"][] = "SIT";
$proto85["m_columns"][] = "DESCRIPCION";
$proto85["m_columns"][] = "APR. INICIAL";
$proto85["m_columns"][] = "APR. ADICIONADA";
$proto85["m_columns"][] = "APR. REDUCIDA";
$proto85["m_columns"][] = "APR. VIGENTE";
$proto85["m_columns"][] = "APR BLOQUEADA";
$proto85["m_columns"][] = "CDP";
$proto85["m_columns"][] = "APR. DISPONIBLE";
$proto85["m_columns"][] = "COMPROMISO";
$proto85["m_columns"][] = "OBLIGACION";
$proto85["m_columns"][] = "ORDEN PAGO";
$proto85["m_columns"][] = "PAGOS";
$proto85["m_columns"][] = "FECHA_CORTE";
$proto85["m_columns"][] = "FECHA_ACTUALIZACION";
$proto85["m_columns"][] = "DEPENDENCIA_ID";
$proto85["m_columns"][] = "RESPONSABLE_ID";
$proto85["m_columns"][] = "DEPENDENCIA_SUP_ID";
$obj = new SQLTable($proto85);

$proto84["m_table"] = $obj;
$proto84["m_sql"] = "global_ejecucion";
$proto84["m_alias"] = "";
$proto84["m_srcTableName"] = "global_ejecucion";
$proto86=array();
$proto86["m_sql"] = "";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto86["m_column"]=$obj;
$proto86["m_contained"] = array();
$proto86["m_strCase"] = "";
$proto86["m_havingmode"] = false;
$proto86["m_inBrackets"] = false;
$proto86["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto86);

$proto84["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto84);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="global_ejecucion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_ejecucion = createSqlQuery_global_ejecucion();


	
										;

																																							

$tdataglobal_ejecucion[".sqlquery"] = $queryData_global_ejecucion;

$tableEvents["global_ejecucion"] = new eventsBase;
$tdataglobal_ejecucion[".hasEvents"] = false;

?>