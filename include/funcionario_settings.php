<?php



$tdatafuncionario = array();
$tdatafuncionario[".searchableFields"] = array();
$tdatafuncionario[".ShortName"] = "funcionario";
$tdatafuncionario[".OwnerID"] = "";
$tdatafuncionario[".OriginalTable"] = "funcionario";


$tdatafuncionario[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatafuncionario[".originalPagesByType"] = $tdatafuncionario[".pagesByType"];
$tdatafuncionario[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatafuncionario[".originalPages"] = $tdatafuncionario[".pages"];
$tdatafuncionario[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatafuncionario[".originalDefaultPages"] = $tdatafuncionario[".defaultPages"];

//	field labels
$fieldLabelsfuncionario = array();
$fieldToolTipsfuncionario = array();
$pageTitlesfuncionario = array();
$placeHoldersfuncionario = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsfuncionario["Spanish"] = array();
	$fieldToolTipsfuncionario["Spanish"] = array();
	$placeHoldersfuncionario["Spanish"] = array();
	$pageTitlesfuncionario["Spanish"] = array();
	$fieldLabelsfuncionario["Spanish"]["id"] = "Id";
	$fieldToolTipsfuncionario["Spanish"]["id"] = "";
	$placeHoldersfuncionario["Spanish"]["id"] = "";
	$fieldLabelsfuncionario["Spanish"]["idEvaluador"] = "Id Evaluador";
	$fieldToolTipsfuncionario["Spanish"]["idEvaluador"] = "";
	$placeHoldersfuncionario["Spanish"]["idEvaluador"] = "";
	$fieldLabelsfuncionario["Spanish"]["IdEvaluador_c"] = "IdEvaluador C";
	$fieldToolTipsfuncionario["Spanish"]["IdEvaluador_c"] = "";
	$placeHoldersfuncionario["Spanish"]["IdEvaluador_c"] = "";
	$fieldLabelsfuncionario["Spanish"]["cedula"] = "Cedula";
	$fieldToolTipsfuncionario["Spanish"]["cedula"] = "";
	$placeHoldersfuncionario["Spanish"]["cedula"] = "";
	$fieldLabelsfuncionario["Spanish"]["lugarExpedicion"] = "Lugar Expedicion";
	$fieldToolTipsfuncionario["Spanish"]["lugarExpedicion"] = "";
	$placeHoldersfuncionario["Spanish"]["lugarExpedicion"] = "";
	$fieldLabelsfuncionario["Spanish"]["refer"] = "Refer";
	$fieldToolTipsfuncionario["Spanish"]["refer"] = "";
	$placeHoldersfuncionario["Spanish"]["refer"] = "";
	$fieldLabelsfuncionario["Spanish"]["fechaIngreso"] = "Fecha Ingreso";
	$fieldToolTipsfuncionario["Spanish"]["fechaIngreso"] = "";
	$placeHoldersfuncionario["Spanish"]["fechaIngreso"] = "";
	$fieldLabelsfuncionario["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsfuncionario["Spanish"]["nombre"] = "";
	$placeHoldersfuncionario["Spanish"]["nombre"] = "";
	$fieldLabelsfuncionario["Spanish"]["ubicacionFisica"] = "Ubicacion Fisica";
	$fieldToolTipsfuncionario["Spanish"]["ubicacionFisica"] = "";
	$placeHoldersfuncionario["Spanish"]["ubicacionFisica"] = "";
	$fieldLabelsfuncionario["Spanish"]["idCargo"] = "Id Cargo";
	$fieldToolTipsfuncionario["Spanish"]["idCargo"] = "";
	$placeHoldersfuncionario["Spanish"]["idCargo"] = "";
	$fieldLabelsfuncionario["Spanish"]["idDependencia"] = "Id Dependencia";
	$fieldToolTipsfuncionario["Spanish"]["idDependencia"] = "";
	$placeHoldersfuncionario["Spanish"]["idDependencia"] = "";
	$fieldLabelsfuncionario["Spanish"]["idContrato"] = "Id Contrato";
	$fieldToolTipsfuncionario["Spanish"]["idContrato"] = "";
	$placeHoldersfuncionario["Spanish"]["idContrato"] = "";
	$fieldLabelsfuncionario["Spanish"]["idNombramiento"] = "Id Nombramiento";
	$fieldToolTipsfuncionario["Spanish"]["idNombramiento"] = "";
	$placeHoldersfuncionario["Spanish"]["idNombramiento"] = "";
	$fieldLabelsfuncionario["Spanish"]["estado"] = "Estado";
	$fieldToolTipsfuncionario["Spanish"]["estado"] = "";
	$placeHoldersfuncionario["Spanish"]["estado"] = "";
	$fieldLabelsfuncionario["Spanish"]["estado_funcionario"] = "Estado Funcionario";
	$fieldToolTipsfuncionario["Spanish"]["estado_funcionario"] = "";
	$placeHoldersfuncionario["Spanish"]["estado_funcionario"] = "";
	$fieldLabelsfuncionario["Spanish"]["CargoProp"] = "Cargo Prop";
	$fieldToolTipsfuncionario["Spanish"]["CargoProp"] = "";
	$placeHoldersfuncionario["Spanish"]["CargoProp"] = "";
	$fieldLabelsfuncionario["Spanish"]["GradoProp"] = "Grado Prop";
	$fieldToolTipsfuncionario["Spanish"]["GradoProp"] = "";
	$placeHoldersfuncionario["Spanish"]["GradoProp"] = "";
	$fieldLabelsfuncionario["Spanish"]["apellidos"] = "Apellidos";
	$fieldToolTipsfuncionario["Spanish"]["apellidos"] = "";
	$placeHoldersfuncionario["Spanish"]["apellidos"] = "";
	$fieldLabelsfuncionario["Spanish"]["sueldo"] = "Sueldo";
	$fieldToolTipsfuncionario["Spanish"]["sueldo"] = "";
	$placeHoldersfuncionario["Spanish"]["sueldo"] = "";
	$fieldLabelsfuncionario["Spanish"]["signpad"] = "Signpad";
	$fieldToolTipsfuncionario["Spanish"]["signpad"] = "";
	$placeHoldersfuncionario["Spanish"]["signpad"] = "";
	if (count($fieldToolTipsfuncionario["Spanish"]))
		$tdatafuncionario[".isUseToolTips"] = true;
}


	$tdatafuncionario[".NCSearch"] = true;



$tdatafuncionario[".shortTableName"] = "funcionario";
$tdatafuncionario[".nSecOptions"] = 0;

$tdatafuncionario[".mainTableOwnerID"] = "";
$tdatafuncionario[".entityType"] = 0;

$tdatafuncionario[".strOriginalTableName"] = "funcionario";

	



$tdatafuncionario[".showAddInPopup"] = false;

$tdatafuncionario[".showEditInPopup"] = false;

$tdatafuncionario[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafuncionario[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafuncionario[".listAjax"] = false;
//	temporary
$tdatafuncionario[".listAjax"] = false;

	$tdatafuncionario[".audit"] = false;

	$tdatafuncionario[".locking"] = false;


$pages = $tdatafuncionario[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatafuncionario[".edit"] = true;
	$tdatafuncionario[".afterEditAction"] = 1;
	$tdatafuncionario[".closePopupAfterEdit"] = 1;
	$tdatafuncionario[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatafuncionario[".add"] = true;
$tdatafuncionario[".afterAddAction"] = 1;
$tdatafuncionario[".closePopupAfterAdd"] = 1;
$tdatafuncionario[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatafuncionario[".list"] = true;
}



$tdatafuncionario[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatafuncionario[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatafuncionario[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatafuncionario[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatafuncionario[".printFriendly"] = true;
}



$tdatafuncionario[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatafuncionario[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatafuncionario[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatafuncionario[".isUseAjaxSuggest"] = true;

$tdatafuncionario[".rowHighlite"] = true;



												

$tdatafuncionario[".ajaxCodeSnippetAdded"] = false;

$tdatafuncionario[".buttonsAdded"] = false;

$tdatafuncionario[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafuncionario[".isUseTimeForSearch"] = false;


$tdatafuncionario[".badgeColor"] = "DAA520";


$tdatafuncionario[".allSearchFields"] = array();
$tdatafuncionario[".filterFields"] = array();
$tdatafuncionario[".requiredSearchFields"] = array();

$tdatafuncionario[".googleLikeFields"] = array();
$tdatafuncionario[".googleLikeFields"][] = "id";
$tdatafuncionario[".googleLikeFields"][] = "idEvaluador";
$tdatafuncionario[".googleLikeFields"][] = "IdEvaluador_c";
$tdatafuncionario[".googleLikeFields"][] = "cedula";
$tdatafuncionario[".googleLikeFields"][] = "lugarExpedicion";
$tdatafuncionario[".googleLikeFields"][] = "refer";
$tdatafuncionario[".googleLikeFields"][] = "fechaIngreso";
$tdatafuncionario[".googleLikeFields"][] = "nombre";
$tdatafuncionario[".googleLikeFields"][] = "apellidos";
$tdatafuncionario[".googleLikeFields"][] = "ubicacionFisica";
$tdatafuncionario[".googleLikeFields"][] = "idCargo";
$tdatafuncionario[".googleLikeFields"][] = "idDependencia";
$tdatafuncionario[".googleLikeFields"][] = "idContrato";
$tdatafuncionario[".googleLikeFields"][] = "idNombramiento";
$tdatafuncionario[".googleLikeFields"][] = "sueldo";
$tdatafuncionario[".googleLikeFields"][] = "estado";
$tdatafuncionario[".googleLikeFields"][] = "estado_funcionario";
$tdatafuncionario[".googleLikeFields"][] = "CargoProp";
$tdatafuncionario[".googleLikeFields"][] = "GradoProp";
$tdatafuncionario[".googleLikeFields"][] = "signpad";



$tdatafuncionario[".tableType"] = "list";

$tdatafuncionario[".printerPageOrientation"] = 0;
$tdatafuncionario[".nPrinterPageScale"] = 100;

$tdatafuncionario[".nPrinterSplitRecords"] = 40;

$tdatafuncionario[".geocodingEnabled"] = false;










$tdatafuncionario[".pageSize"] = 20;

$tdatafuncionario[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafuncionario[".strOrderBy"] = $tstrOrderBy;

$tdatafuncionario[".orderindexes"] = array();

$tdatafuncionario[".sqlHead"] = "SELECT id,  	idEvaluador,  	IdEvaluador_c,  	cedula,  	lugarExpedicion,  	refer,  	fechaIngreso,  	nombre,  	apellidos,  	ubicacionFisica,  	idCargo,  	idDependencia,  	idContrato,  	idNombramiento,  	sueldo,  	estado,  	estado_funcionario,  	CargoProp,  	GradoProp,  	signpad";
$tdatafuncionario[".sqlFrom"] = "FROM funcionario";
$tdatafuncionario[".sqlWhereExpr"] = "";
$tdatafuncionario[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafuncionario[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafuncionario[".arrGroupsPerPage"] = $arrGPP;

$tdatafuncionario[".highlightSearchResults"] = true;

$tableKeysfuncionario = array();
$tableKeysfuncionario[] = "id";
$tdatafuncionario[".Keys"] = $tableKeysfuncionario;


$tdatafuncionario[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatafuncionario["id"] = $fdata;
		$tdatafuncionario[".searchableFields"][] = "id";
//	idEvaluador
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idEvaluador";
	$fdata["GoodName"] = "idEvaluador";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","idEvaluador");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "idEvaluador";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idEvaluador";

	
	
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


	$tdatafuncionario["idEvaluador"] = $fdata;
		$tdatafuncionario[".searchableFields"][] = "idEvaluador";
//	IdEvaluador_c
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "IdEvaluador_c";
	$fdata["GoodName"] = "IdEvaluador_c";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","IdEvaluador_c");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "IdEvaluador_c";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IdEvaluador_c";

	
	
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


	$tdatafuncionario["IdEvaluador_c"] = $fdata;
		$tdatafuncionario[".searchableFields"][] = "IdEvaluador_c";
//	cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cedula";
	$fdata["GoodName"] = "cedula";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","cedula");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cedula";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cedula";

	
	
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


	$tdatafuncionario["cedula"] = $fdata;
		$tdatafuncionario[".searchableFields"][] = "cedula";
//	lugarExpedicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "lugarExpedicion";
	$fdata["GoodName"] = "lugarExpedicion";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","lugarExpedicion");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "lugarExpedicion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lugarExpedicion";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatafuncionario["lugarExpedicion"] = $fdata;
		$tdatafuncionario[".searchableFields"][] = "lugarExpedicion";
//	refer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "refer";
	$fdata["GoodName"] = "refer";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","refer");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "refer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "refer";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatafuncionario["refer"] = $fdata;
		$tdatafuncionario[".searchableFields"][] = "refer";
//	fechaIngreso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fechaIngreso";
	$fdata["GoodName"] = "fechaIngreso";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","fechaIngreso");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "fechaIngreso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fechaIngreso";

	
	
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


	$tdatafuncionario["fechaIngreso"] = $fdata;
		$tdatafuncionario[".searchableFields"][] = "fechaIngreso";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","nombre");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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


	$tdatafuncionario["nombre"] = $fdata;
		$tdatafuncionario[".searchableFields"][] = "nombre";
//	apellidos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "apellidos";
	$fdata["GoodName"] = "apellidos";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","apellidos");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "apellidos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apellidos";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdatafuncionario["apellidos"] = $fdata;
		$tdatafuncionario[".searchableFields"][] = "apellidos";
//	ubicacionFisica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ubicacionFisica";
	$fdata["GoodName"] = "ubicacionFisica";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","ubicacionFisica");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ubicacionFisica";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ubicacionFisica";

	
	
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


	$tdatafuncionario["ubicacionFisica"] = $fdata;
		$tdatafuncionario[".searchableFields"][] = "ubicacionFisica";
//	idCargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "idCargo";
	$fdata["GoodName"] = "idCargo";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","idCargo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "idCargo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idCargo";

	
	
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


	$tdatafuncionario["idCargo"] = $fdata;
		$tdatafuncionario[".searchableFields"][] = "idCargo";
//	idDependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "idDependencia";
	$fdata["GoodName"] = "idDependencia";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","idDependencia");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "idDependencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idDependencia";

	
	
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id";

	

	
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


	$tdatafuncionario["idDependencia"] = $fdata;
		$tdatafuncionario[".searchableFields"][] = "idDependencia";
//	idContrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "idContrato";
	$fdata["GoodName"] = "idContrato";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","idContrato");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "idContrato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idContrato";

	
	
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


	$tdatafuncionario["idContrato"] = $fdata;
		$tdatafuncionario[".searchableFields"][] = "idContrato";
//	idNombramiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "idNombramiento";
	$fdata["GoodName"] = "idNombramiento";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","idNombramiento");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "idNombramiento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idNombramiento";

	
	
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


	$tdatafuncionario["idNombramiento"] = $fdata;
		$tdatafuncionario[".searchableFields"][] = "idNombramiento";
//	sueldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sueldo";
	$fdata["GoodName"] = "sueldo";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","sueldo");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "sueldo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sueldo";

	
	
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


	$tdatafuncionario["sueldo"] = $fdata;
		$tdatafuncionario[".searchableFields"][] = "sueldo";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","estado");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";

	
	
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


	$tdatafuncionario["estado"] = $fdata;
		$tdatafuncionario[".searchableFields"][] = "estado";
//	estado_funcionario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "estado_funcionario";
	$fdata["GoodName"] = "estado_funcionario";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","estado_funcionario");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "estado_funcionario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_funcionario";

	
	
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


	$tdatafuncionario["estado_funcionario"] = $fdata;
		$tdatafuncionario[".searchableFields"][] = "estado_funcionario";
//	CargoProp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "CargoProp";
	$fdata["GoodName"] = "CargoProp";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","CargoProp");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CargoProp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CargoProp";

	
	
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
			$edata["EditParams"].= " maxlength=6";

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


	$tdatafuncionario["CargoProp"] = $fdata;
		$tdatafuncionario[".searchableFields"][] = "CargoProp";
//	GradoProp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "GradoProp";
	$fdata["GoodName"] = "GradoProp";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","GradoProp");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "GradoProp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GradoProp";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatafuncionario["GradoProp"] = $fdata;
		$tdatafuncionario[".searchableFields"][] = "GradoProp";
//	signpad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "signpad";
	$fdata["GoodName"] = "signpad";
	$fdata["ownerTable"] = "funcionario";
	$fdata["Label"] = GetFieldLabel("funcionario","signpad");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "signpad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "signpad";

	
	
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


	$tdatafuncionario["signpad"] = $fdata;
		$tdatafuncionario[".searchableFields"][] = "signpad";


$tables_data["funcionario"]=&$tdatafuncionario;
$field_labels["funcionario"] = &$fieldLabelsfuncionario;
$fieldToolTips["funcionario"] = &$fieldToolTipsfuncionario;
$placeHolders["funcionario"] = &$placeHoldersfuncionario;
$page_titles["funcionario"] = &$pageTitlesfuncionario;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["funcionario"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["funcionario"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_funcionario()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	idEvaluador,  	IdEvaluador_c,  	cedula,  	lugarExpedicion,  	refer,  	fechaIngreso,  	nombre,  	apellidos,  	ubicacionFisica,  	idCargo,  	idDependencia,  	idContrato,  	idNombramiento,  	sueldo,  	estado,  	estado_funcionario,  	CargoProp,  	GradoProp,  	signpad";
$proto0["m_strFrom"] = "FROM funcionario";
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
	"m_strName" => "id",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "funcionario";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvaluador",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto8["m_sql"] = "idEvaluador";
$proto8["m_srcTableName"] = "funcionario";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "IdEvaluador_c",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto10["m_sql"] = "IdEvaluador_c";
$proto10["m_srcTableName"] = "funcionario";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cedula",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto12["m_sql"] = "cedula";
$proto12["m_srcTableName"] = "funcionario";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "lugarExpedicion",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto14["m_sql"] = "lugarExpedicion";
$proto14["m_srcTableName"] = "funcionario";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "refer",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto16["m_sql"] = "refer";
$proto16["m_srcTableName"] = "funcionario";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fechaIngreso",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto18["m_sql"] = "fechaIngreso";
$proto18["m_srcTableName"] = "funcionario";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto20["m_sql"] = "nombre";
$proto20["m_srcTableName"] = "funcionario";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "apellidos",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto22["m_sql"] = "apellidos";
$proto22["m_srcTableName"] = "funcionario";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ubicacionFisica",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto24["m_sql"] = "ubicacionFisica";
$proto24["m_srcTableName"] = "funcionario";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "idCargo",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto26["m_sql"] = "idCargo";
$proto26["m_srcTableName"] = "funcionario";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "idDependencia",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto28["m_sql"] = "idDependencia";
$proto28["m_srcTableName"] = "funcionario";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "idContrato",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto30["m_sql"] = "idContrato";
$proto30["m_srcTableName"] = "funcionario";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "idNombramiento",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto32["m_sql"] = "idNombramiento";
$proto32["m_srcTableName"] = "funcionario";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sueldo",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto34["m_sql"] = "sueldo";
$proto34["m_srcTableName"] = "funcionario";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto36["m_sql"] = "estado";
$proto36["m_srcTableName"] = "funcionario";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_funcionario",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto38["m_sql"] = "estado_funcionario";
$proto38["m_srcTableName"] = "funcionario";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "CargoProp",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto40["m_sql"] = "CargoProp";
$proto40["m_srcTableName"] = "funcionario";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "GradoProp",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto42["m_sql"] = "GradoProp";
$proto42["m_srcTableName"] = "funcionario";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "signpad",
	"m_strTable" => "funcionario",
	"m_srcTableName" => "funcionario"
));

$proto44["m_sql"] = "signpad";
$proto44["m_srcTableName"] = "funcionario";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "funcionario";
$proto47["m_srcTableName"] = "funcionario";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "id";
$proto47["m_columns"][] = "idEvaluador";
$proto47["m_columns"][] = "IdEvaluador_c";
$proto47["m_columns"][] = "cedula";
$proto47["m_columns"][] = "lugarExpedicion";
$proto47["m_columns"][] = "refer";
$proto47["m_columns"][] = "fechaIngreso";
$proto47["m_columns"][] = "nombre";
$proto47["m_columns"][] = "apellidos";
$proto47["m_columns"][] = "ubicacionFisica";
$proto47["m_columns"][] = "idCargo";
$proto47["m_columns"][] = "idDependencia";
$proto47["m_columns"][] = "idContrato";
$proto47["m_columns"][] = "idNombramiento";
$proto47["m_columns"][] = "sueldo";
$proto47["m_columns"][] = "estado";
$proto47["m_columns"][] = "estado_funcionario";
$proto47["m_columns"][] = "CargoProp";
$proto47["m_columns"][] = "GradoProp";
$proto47["m_columns"][] = "signpad";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "funcionario";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "funcionario";
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
$proto0["m_srcTableName"]="funcionario";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_funcionario = createSqlQuery_funcionario();


	
										;

																				

$tdatafuncionario[".sqlquery"] = $queryData_funcionario;

$tableEvents["funcionario"] = new eventsBase;
$tdatafuncionario[".hasEvents"] = false;

?>