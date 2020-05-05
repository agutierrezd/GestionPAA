<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["edl.funcionario"] ) ) {
			$lookupTableLinks["edl.funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["edl.funcionario"]["global_users.id_fk"] )) {
			$lookupTableLinks["edl.funcionario"]["global_users.id_fk"] = array();
		}
		$lookupTableLinks["edl.funcionario"]["global_users.id_fk"]["edit"] = array("table" => "global_users", "field" => "id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master.COD_UNSPSC"]["edit"] = array("table" => "paa_master", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master.MES_INICIO"]["edit"] = array("table" => "paa_master", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master.MES_PRESENTA"]["edit"] = array("table" => "paa_master", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master.MODALIDAD"]["edit"] = array("table" => "paa_master", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master.VF"]["edit"] = array("table" => "paa_master", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master.ESTADO_VF"]["edit"] = array("table" => "paa_master", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master.COD_UBICACION"]["edit"] = array("table" => "paa_master", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vigencia"] ) ) {
			$lookupTableLinks["global_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["global_vigencia"]["paa_master.vigencia"] )) {
			$lookupTableLinks["global_vigencia"]["paa_master.vigencia"] = array();
		}
		$lookupTableLinks["global_vigencia"]["paa_master.vigencia"]["edit"] = array("table" => "paa_master", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master.sys_status"]["edit"] = array("table" => "paa_master", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master_no_paa.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master_no_paa.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master_no_paa.COD_UNSPSC"]["edit"] = array("table" => "paa_master_no_paa", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_no_paa.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master_no_paa.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_no_paa.MES_INICIO"]["edit"] = array("table" => "paa_master_no_paa", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_no_paa.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master_no_paa.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_no_paa.MES_PRESENTA"]["edit"] = array("table" => "paa_master_no_paa", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master_no_paa.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master_no_paa.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master_no_paa.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master_no_paa", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master_no_paa.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master_no_paa.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master_no_paa.MODALIDAD"]["edit"] = array("table" => "paa_master_no_paa", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master_no_paa.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master_no_paa.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master_no_paa.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master_no_paa", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master_no_paa.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master_no_paa.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master_no_paa.VF"]["edit"] = array("table" => "paa_master_no_paa", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master_no_paa.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master_no_paa.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master_no_paa.ESTADO_VF"]["edit"] = array("table" => "paa_master_no_paa", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master_no_paa.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master_no_paa.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master_no_paa.COD_UBICACION"]["edit"] = array("table" => "paa_master_no_paa", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vigencia"] ) ) {
			$lookupTableLinks["global_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["global_vigencia"]["paa_master_no_paa.vigencia"] )) {
			$lookupTableLinks["global_vigencia"]["paa_master_no_paa.vigencia"] = array();
		}
		$lookupTableLinks["global_vigencia"]["paa_master_no_paa.vigencia"]["edit"] = array("table" => "paa_master_no_paa", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["paa_master"] ) ) {
			$lookupTableLinks["paa_master"] = array();
		}
		if( !isset( $lookupTableLinks["paa_master"]["paa_master_usos.PAA_ID_FK"] )) {
			$lookupTableLinks["paa_master"]["paa_master_usos.PAA_ID_FK"] = array();
		}
		$lookupTableLinks["paa_master"]["paa_master_usos.PAA_ID_FK"]["edit"] = array("table" => "paa_master_usos", "field" => "PAA_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["q_list_uej"] ) ) {
			$lookupTableLinks["q_list_uej"] = array();
		}
		if( !isset( $lookupTableLinks["q_list_uej"]["paa_master_usos.UEJ"] )) {
			$lookupTableLinks["q_list_uej"]["paa_master_usos.UEJ"] = array();
		}
		$lookupTableLinks["q_list_uej"]["paa_master_usos.UEJ"]["edit"] = array("table" => "paa_master_usos", "field" => "UEJ", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["paa_master_usos.TIPO"] )) {
			$lookupTableLinks["tparam_fuente"]["paa_master_usos.TIPO"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["paa_master_usos.TIPO"]["edit"] = array("table" => "paa_master_usos", "field" => "TIPO", "page" => "edit");
		if( !isset( $lookupTableLinks["q_group_rec"] ) ) {
			$lookupTableLinks["q_group_rec"] = array();
		}
		if( !isset( $lookupTableLinks["q_group_rec"]["paa_master_usos.REC"] )) {
			$lookupTableLinks["q_group_rec"]["paa_master_usos.REC"] = array();
		}
		$lookupTableLinks["q_group_rec"]["paa_master_usos.REC"]["edit"] = array("table" => "paa_master_usos", "field" => "REC", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_usos.RUBRO"] )) {
			$lookupTableLinks[""]["paa_master_usos.RUBRO"] = array();
		}
		$lookupTableLinks[""]["paa_master_usos.RUBRO"]["edit"] = array("table" => "paa_master_usos", "field" => "RUBRO", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_usos.PROYECTO"] )) {
			$lookupTableLinks[""]["paa_master_usos.PROYECTO"] = array();
		}
		$lookupTableLinks[""]["paa_master_usos.PROYECTO"]["edit"] = array("table" => "paa_master_usos", "field" => "PROYECTO", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_usos.EBI"] )) {
			$lookupTableLinks[""]["paa_master_usos.EBI"] = array();
		}
		$lookupTableLinks[""]["paa_master_usos.EBI"]["edit"] = array("table" => "paa_master_usos", "field" => "EBI", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ejecucion_desagregada"] ) ) {
			$lookupTableLinks["global_ejecucion_desagregada"] = array();
		}
		if( !isset( $lookupTableLinks["global_ejecucion_desagregada"]["paa_master_usos.CATALOGO_PRESUPUESTAL"] )) {
			$lookupTableLinks["global_ejecucion_desagregada"]["paa_master_usos.CATALOGO_PRESUPUESTAL"] = array();
		}
		$lookupTableLinks["global_ejecucion_desagregada"]["paa_master_usos.CATALOGO_PRESUPUESTAL"]["edit"] = array("table" => "paa_master_usos", "field" => "CATALOGO_PRESUPUESTAL", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ejecucion_actividades_spi"] ) ) {
			$lookupTableLinks["global_ejecucion_actividades_spi"] = array();
		}
		if( !isset( $lookupTableLinks["global_ejecucion_actividades_spi"]["paa_master_usos.ACT_ID_FK"] )) {
			$lookupTableLinks["global_ejecucion_actividades_spi"]["paa_master_usos.ACT_ID_FK"] = array();
		}
		$lookupTableLinks["global_ejecucion_actividades_spi"]["paa_master_usos.ACT_ID_FK"]["edit"] = array("table" => "paa_master_usos", "field" => "ACT_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_usos.USO_CONTABILIDAD_A"] )) {
			$lookupTableLinks[""]["paa_master_usos.USO_CONTABILIDAD_A"] = array();
		}
		$lookupTableLinks[""]["paa_master_usos.USO_CONTABILIDAD_A"]["edit"] = array("table" => "paa_master_usos", "field" => "USO_CONTABILIDAD_A", "page" => "edit");
		if( !isset( $lookupTableLinks["rep_prg001_catalogopresupuestal"] ) ) {
			$lookupTableLinks["rep_prg001_catalogopresupuestal"] = array();
		}
		if( !isset( $lookupTableLinks["rep_prg001_catalogopresupuestal"]["paa_master_usos.USO_CONTABILIDAD_B"] )) {
			$lookupTableLinks["rep_prg001_catalogopresupuestal"]["paa_master_usos.USO_CONTABILIDAD_B"] = array();
		}
		$lookupTableLinks["rep_prg001_catalogopresupuestal"]["paa_master_usos.USO_CONTABILIDAD_B"]["edit"] = array("table" => "paa_master_usos", "field" => "USO_CONTABILIDAD_B", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["q_group_rec.TIPO"] )) {
			$lookupTableLinks["tparam_fuente"]["q_group_rec.TIPO"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["q_group_rec.TIPO"]["edit"] = array("table" => "q_group_rec", "field" => "TIPO", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["q_group_rec.UEJ"] )) {
			$lookupTableLinks[""]["q_group_rec.UEJ"] = array();
		}
		$lookupTableLinks[""]["q_group_rec.UEJ"]["edit"] = array("table" => "q_group_rec", "field" => "UEJ", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"] )) {
			$lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"] = array();
		}
		$lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"]["edit"] = array("table" => "dependencia", "field" => "id_depto_superior", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["funcionario.idDependencia"] )) {
			$lookupTableLinks["dependencia"]["funcionario.idDependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["funcionario.idDependencia"]["edit"] = array("table" => "funcionario", "field" => "idDependencia", "page" => "edit");
		if( !isset( $lookupTableLinks["comportamental"] ) ) {
			$lookupTableLinks["comportamental"] = array();
		}
		if( !isset( $lookupTableLinks["comportamental"]["cargo.idComportamentalFK"] )) {
			$lookupTableLinks["comportamental"]["cargo.idComportamentalFK"] = array();
		}
		$lookupTableLinks["comportamental"]["cargo.idComportamentalFK"]["edit"] = array("table" => "cargo", "field" => "idComportamentalFK", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_docidentidad"] ) ) {
			$lookupTableLinks["tipo_docidentidad"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_docidentidad"]["contractor_master.contractor_type"] )) {
			$lookupTableLinks["tipo_docidentidad"]["contractor_master.contractor_type"] = array();
		}
		$lookupTableLinks["tipo_docidentidad"]["contractor_master.contractor_type"]["edit"] = array("table" => "contractor_master", "field" => "contractor_type", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["contractor_master.contractor_city"] )) {
			$lookupTableLinks["q_divipola"]["contractor_master.contractor_city"] = array();
		}
		$lookupTableLinks["q_divipola"]["contractor_master.contractor_city"]["edit"] = array("table" => "contractor_master", "field" => "contractor_city", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_banco"] ) ) {
			$lookupTableLinks["tipo_banco"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_banco"]["contractor_master.bank_name"] )) {
			$lookupTableLinks["tipo_banco"]["contractor_master.bank_name"] = array();
		}
		$lookupTableLinks["tipo_banco"]["contractor_master.bank_name"]["edit"] = array("table" => "contractor_master", "field" => "bank_name", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_cta_banco"] ) ) {
			$lookupTableLinks["tipo_cta_banco"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_cta_banco"]["contractor_master.bank_cta_type"] )) {
			$lookupTableLinks["tipo_cta_banco"]["contractor_master.bank_cta_type"] = array();
		}
		$lookupTableLinks["tipo_cta_banco"]["contractor_master.bank_cta_type"]["edit"] = array("table" => "contractor_master", "field" => "bank_cta_type", "page" => "edit");
		if( !isset( $lookupTableLinks["global_status"] ) ) {
			$lookupTableLinks["global_status"] = array();
		}
		if( !isset( $lookupTableLinks["global_status"]["contractor_master.sys_status"] )) {
			$lookupTableLinks["global_status"]["contractor_master.sys_status"] = array();
		}
		$lookupTableLinks["global_status"]["contractor_master.sys_status"]["edit"] = array("table" => "contractor_master", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["contrato.cont_nit_contra_ta"] )) {
			$lookupTableLinks["contractor_master"]["contrato.cont_nit_contra_ta"] = array();
		}
		$lookupTableLinks["contractor_master"]["contrato.cont_nit_contra_ta"]["edit"] = array("table" => "contrato", "field" => "cont_nit_contra_ta", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ejecucion_usos"] ) ) {
			$lookupTableLinks["global_ejecucion_usos"] = array();
		}
		if( !isset( $lookupTableLinks["global_ejecucion_usos"]["contrato.cont_codrubro"] )) {
			$lookupTableLinks["global_ejecucion_usos"]["contrato.cont_codrubro"] = array();
		}
		$lookupTableLinks["global_ejecucion_usos"]["contrato.cont_codrubro"]["edit"] = array("table" => "contrato", "field" => "cont_codrubro", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_000"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"]["contrato.cont_tipoc"] )) {
			$lookupTableLinks["tparam_tipo_ct_000"]["contrato.cont_tipoc"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_000"]["contrato.cont_tipoc"]["edit"] = array("table" => "contrato", "field" => "cont_tipoc", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_002"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"]["contrato.cont_causalc"] )) {
			$lookupTableLinks["tparam_tipo_ct_002"]["contrato.cont_causalc"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_002"]["contrato.cont_causalc"]["edit"] = array("table" => "contrato", "field" => "cont_causalc", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["global_ejecucion_actividades_spi.DEPENDENCIA_ID"] )) {
			$lookupTableLinks["dependencia"]["global_ejecucion_actividades_spi.DEPENDENCIA_ID"] = array();
		}
		$lookupTableLinks["dependencia"]["global_ejecucion_actividades_spi.DEPENDENCIA_ID"]["edit"] = array("table" => "global_ejecucion_actividades_spi", "field" => "DEPENDENCIA_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["funcionario"] ) ) {
			$lookupTableLinks["funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["funcionario"]["global_ejecucion_actividades_spi.RESPONSABLE_ID"] )) {
			$lookupTableLinks["funcionario"]["global_ejecucion_actividades_spi.RESPONSABLE_ID"] = array();
		}
		$lookupTableLinks["funcionario"]["global_ejecucion_actividades_spi.RESPONSABLE_ID"]["edit"] = array("table" => "global_ejecucion_actividades_spi", "field" => "RESPONSABLE_ID", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master_send.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master_send.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master_send.COD_UNSPSC"]["edit"] = array("table" => "paa_master_send", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_send.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master_send.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_send.MES_INICIO"]["edit"] = array("table" => "paa_master_send", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_send.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master_send.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_send.MES_PRESENTA"]["edit"] = array("table" => "paa_master_send", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master_send.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master_send.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master_send.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master_send", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master_send.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master_send.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master_send.MODALIDAD"]["edit"] = array("table" => "paa_master_send", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master_send.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master_send.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master_send.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master_send", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master_send.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master_send.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master_send.VF"]["edit"] = array("table" => "paa_master_send", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master_send.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master_send.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master_send.ESTADO_VF"]["edit"] = array("table" => "paa_master_send", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master_send.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master_send.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master_send.COD_UBICACION"]["edit"] = array("table" => "paa_master_send", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vigencia"] ) ) {
			$lookupTableLinks["global_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["global_vigencia"]["paa_master_send.vigencia"] )) {
			$lookupTableLinks["global_vigencia"]["paa_master_send.vigencia"] = array();
		}
		$lookupTableLinks["global_vigencia"]["paa_master_send.vigencia"]["edit"] = array("table" => "paa_master_send", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master_send.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master_send.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master_send.sys_status"]["edit"] = array("table" => "paa_master_send", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master_admin.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master_admin.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master_admin.COD_UNSPSC"]["edit"] = array("table" => "paa_master_admin", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_admin.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master_admin.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_admin.MES_INICIO"]["edit"] = array("table" => "paa_master_admin", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_admin.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master_admin.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_admin.MES_PRESENTA"]["edit"] = array("table" => "paa_master_admin", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master_admin.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master_admin.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master_admin.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master_admin", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master_admin.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master_admin.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master_admin.MODALIDAD"]["edit"] = array("table" => "paa_master_admin", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master_admin.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master_admin.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master_admin.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master_admin", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master_admin.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master_admin.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master_admin.VF"]["edit"] = array("table" => "paa_master_admin", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master_admin.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master_admin.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master_admin.ESTADO_VF"]["edit"] = array("table" => "paa_master_admin", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master_admin.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master_admin.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master_admin.COD_UBICACION"]["edit"] = array("table" => "paa_master_admin", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vigencia"] ) ) {
			$lookupTableLinks["global_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["global_vigencia"]["paa_master_admin.vigencia"] )) {
			$lookupTableLinks["global_vigencia"]["paa_master_admin.vigencia"] = array();
		}
		$lookupTableLinks["global_vigencia"]["paa_master_admin.vigencia"]["edit"] = array("table" => "paa_master_admin", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master_admin.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master_admin.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master_admin.sys_status"]["edit"] = array("table" => "paa_master_admin", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["paa_master"] ) ) {
			$lookupTableLinks["paa_master"] = array();
		}
		if( !isset( $lookupTableLinks["paa_master"]["paa_master_usos_admin.PAA_ID_FK"] )) {
			$lookupTableLinks["paa_master"]["paa_master_usos_admin.PAA_ID_FK"] = array();
		}
		$lookupTableLinks["paa_master"]["paa_master_usos_admin.PAA_ID_FK"]["edit"] = array("table" => "paa_master_usos_admin", "field" => "PAA_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_usos_admin.UEJ"] )) {
			$lookupTableLinks[""]["paa_master_usos_admin.UEJ"] = array();
		}
		$lookupTableLinks[""]["paa_master_usos_admin.UEJ"]["edit"] = array("table" => "paa_master_usos_admin", "field" => "UEJ", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["paa_master_usos_admin.TIPO"] )) {
			$lookupTableLinks["tparam_fuente"]["paa_master_usos_admin.TIPO"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["paa_master_usos_admin.TIPO"]["edit"] = array("table" => "paa_master_usos_admin", "field" => "TIPO", "page" => "edit");
		if( !isset( $lookupTableLinks["q_group_rec"] ) ) {
			$lookupTableLinks["q_group_rec"] = array();
		}
		if( !isset( $lookupTableLinks["q_group_rec"]["paa_master_usos_admin.REC"] )) {
			$lookupTableLinks["q_group_rec"]["paa_master_usos_admin.REC"] = array();
		}
		$lookupTableLinks["q_group_rec"]["paa_master_usos_admin.REC"]["edit"] = array("table" => "paa_master_usos_admin", "field" => "REC", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_usos_admin.RUBRO"] )) {
			$lookupTableLinks[""]["paa_master_usos_admin.RUBRO"] = array();
		}
		$lookupTableLinks[""]["paa_master_usos_admin.RUBRO"]["edit"] = array("table" => "paa_master_usos_admin", "field" => "RUBRO", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_usos_admin.EBI"] )) {
			$lookupTableLinks[""]["paa_master_usos_admin.EBI"] = array();
		}
		$lookupTableLinks[""]["paa_master_usos_admin.EBI"]["edit"] = array("table" => "paa_master_usos_admin", "field" => "EBI", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ejecucion_desagregada"] ) ) {
			$lookupTableLinks["global_ejecucion_desagregada"] = array();
		}
		if( !isset( $lookupTableLinks["global_ejecucion_desagregada"]["paa_master_usos_admin.CATALOGO_PRESUPUESTAL"] )) {
			$lookupTableLinks["global_ejecucion_desagregada"]["paa_master_usos_admin.CATALOGO_PRESUPUESTAL"] = array();
		}
		$lookupTableLinks["global_ejecucion_desagregada"]["paa_master_usos_admin.CATALOGO_PRESUPUESTAL"]["edit"] = array("table" => "paa_master_usos_admin", "field" => "CATALOGO_PRESUPUESTAL", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ejecucion_actividades_spi"] ) ) {
			$lookupTableLinks["global_ejecucion_actividades_spi"] = array();
		}
		if( !isset( $lookupTableLinks["global_ejecucion_actividades_spi"]["paa_master_usos_admin.ACT_ID_FK"] )) {
			$lookupTableLinks["global_ejecucion_actividades_spi"]["paa_master_usos_admin.ACT_ID_FK"] = array();
		}
		$lookupTableLinks["global_ejecucion_actividades_spi"]["paa_master_usos_admin.ACT_ID_FK"]["edit"] = array("table" => "paa_master_usos_admin", "field" => "ACT_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master_usos_admin.SYS_STATUS"] )) {
			$lookupTableLinks["global_estado"]["paa_master_usos_admin.SYS_STATUS"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master_usos_admin.SYS_STATUS"]["edit"] = array("table" => "paa_master_usos_admin", "field" => "SYS_STATUS", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_usos_admin.USO_CONTABILIDAD_A"] )) {
			$lookupTableLinks[""]["paa_master_usos_admin.USO_CONTABILIDAD_A"] = array();
		}
		$lookupTableLinks[""]["paa_master_usos_admin.USO_CONTABILIDAD_A"]["edit"] = array("table" => "paa_master_usos_admin", "field" => "USO_CONTABILIDAD_A", "page" => "edit");
		if( !isset( $lookupTableLinks["rep_prg001_catalogopresupuestal"] ) ) {
			$lookupTableLinks["rep_prg001_catalogopresupuestal"] = array();
		}
		if( !isset( $lookupTableLinks["rep_prg001_catalogopresupuestal"]["paa_master_usos_admin.USO_CONTABILIDAD_B"] )) {
			$lookupTableLinks["rep_prg001_catalogopresupuestal"]["paa_master_usos_admin.USO_CONTABILIDAD_B"] = array();
		}
		$lookupTableLinks["rep_prg001_catalogopresupuestal"]["paa_master_usos_admin.USO_CONTABILIDAD_B"]["edit"] = array("table" => "paa_master_usos_admin", "field" => "USO_CONTABILIDAD_B", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master_no_paa_admin.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master_no_paa_admin.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master_no_paa_admin.COD_UNSPSC"]["edit"] = array("table" => "paa_master_no_paa_admin", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_no_paa_admin.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master_no_paa_admin.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_no_paa_admin.MES_INICIO"]["edit"] = array("table" => "paa_master_no_paa_admin", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_no_paa_admin.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master_no_paa_admin.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_no_paa_admin.MES_PRESENTA"]["edit"] = array("table" => "paa_master_no_paa_admin", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master_no_paa_admin.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master_no_paa_admin.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master_no_paa_admin.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master_no_paa_admin", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master_no_paa_admin.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master_no_paa_admin.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master_no_paa_admin.MODALIDAD"]["edit"] = array("table" => "paa_master_no_paa_admin", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master_no_paa_admin.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master_no_paa_admin.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master_no_paa_admin.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master_no_paa_admin", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master_no_paa_admin.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master_no_paa_admin.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master_no_paa_admin.VF"]["edit"] = array("table" => "paa_master_no_paa_admin", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master_no_paa_admin.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master_no_paa_admin.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master_no_paa_admin.ESTADO_VF"]["edit"] = array("table" => "paa_master_no_paa_admin", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master_no_paa_admin.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master_no_paa_admin.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master_no_paa_admin.COD_UBICACION"]["edit"] = array("table" => "paa_master_no_paa_admin", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_no_paa_admin.responsable"] )) {
			$lookupTableLinks[""]["paa_master_no_paa_admin.responsable"] = array();
		}
		$lookupTableLinks[""]["paa_master_no_paa_admin.responsable"]["edit"] = array("table" => "paa_master_no_paa_admin", "field" => "responsable", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_no_paa_admin.dep"] )) {
			$lookupTableLinks[""]["paa_master_no_paa_admin.dep"] = array();
		}
		$lookupTableLinks[""]["paa_master_no_paa_admin.dep"]["edit"] = array("table" => "paa_master_no_paa_admin", "field" => "dep", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_no_paa_admin.deps"] )) {
			$lookupTableLinks[""]["paa_master_no_paa_admin.deps"] = array();
		}
		$lookupTableLinks[""]["paa_master_no_paa_admin.deps"]["edit"] = array("table" => "paa_master_no_paa_admin", "field" => "deps", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vigencia"] ) ) {
			$lookupTableLinks["global_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["global_vigencia"]["paa_master_no_paa_admin.vigencia"] )) {
			$lookupTableLinks["global_vigencia"]["paa_master_no_paa_admin.vigencia"] = array();
		}
		$lookupTableLinks["global_vigencia"]["paa_master_no_paa_admin.vigencia"]["edit"] = array("table" => "paa_master_no_paa_admin", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master_no_paa_admin.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master_no_paa_admin.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master_no_paa_admin.sys_status"]["edit"] = array("table" => "paa_master_no_paa_admin", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_pscdp.PAA_ID_FK"] )) {
			$lookupTableLinks[""]["paa_master_pscdp.PAA_ID_FK"] = array();
		}
		$lookupTableLinks[""]["paa_master_pscdp.PAA_ID_FK"]["edit"] = array("table" => "paa_master_pscdp", "field" => "PAA_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["paa_master_pscdp.SOL_DEPENDENCIA"] )) {
			$lookupTableLinks["dependencia"]["paa_master_pscdp.SOL_DEPENDENCIA"] = array();
		}
		$lookupTableLinks["dependencia"]["paa_master_pscdp.SOL_DEPENDENCIA"]["edit"] = array("table" => "paa_master_pscdp", "field" => "SOL_DEPENDENCIA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_operacion"] ) ) {
			$lookupTableLinks["global_operacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_operacion"]["paa_master_pscdp.OPERACION_ID_FK"] )) {
			$lookupTableLinks["global_operacion"]["paa_master_pscdp.OPERACION_ID_FK"] = array();
		}
		$lookupTableLinks["global_operacion"]["paa_master_pscdp.OPERACION_ID_FK"]["edit"] = array("table" => "paa_master_pscdp", "field" => "OPERACION_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado_scdp"] ) ) {
			$lookupTableLinks["global_estado_scdp"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado_scdp"]["paa_master_pscdp.SYS_STATUS"] )) {
			$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp.SYS_STATUS"] = array();
		}
		$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp.SYS_STATUS"]["edit"] = array("table" => "paa_master_pscdp", "field" => "SYS_STATUS", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["paa_master_pscdp_admin.SOL_DEPENDENCIA"] )) {
			$lookupTableLinks["dependencia"]["paa_master_pscdp_admin.SOL_DEPENDENCIA"] = array();
		}
		$lookupTableLinks["dependencia"]["paa_master_pscdp_admin.SOL_DEPENDENCIA"]["edit"] = array("table" => "paa_master_pscdp_admin", "field" => "SOL_DEPENDENCIA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_operacion"] ) ) {
			$lookupTableLinks["global_operacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_operacion"]["paa_master_pscdp_admin.OPERACION_ID_FK"] )) {
			$lookupTableLinks["global_operacion"]["paa_master_pscdp_admin.OPERACION_ID_FK"] = array();
		}
		$lookupTableLinks["global_operacion"]["paa_master_pscdp_admin.OPERACION_ID_FK"]["edit"] = array("table" => "paa_master_pscdp_admin", "field" => "OPERACION_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado_scdp"] ) ) {
			$lookupTableLinks["global_estado_scdp"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_admin.SYS_STATUS"] )) {
			$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_admin.SYS_STATUS"] = array();
		}
		$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_admin.SYS_STATUS"]["edit"] = array("table" => "paa_master_pscdp_admin", "field" => "SYS_STATUS", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["paa_master_pscdp_admin_nopaa.SOL_DEPENDENCIA"] )) {
			$lookupTableLinks["dependencia"]["paa_master_pscdp_admin_nopaa.SOL_DEPENDENCIA"] = array();
		}
		$lookupTableLinks["dependencia"]["paa_master_pscdp_admin_nopaa.SOL_DEPENDENCIA"]["edit"] = array("table" => "paa_master_pscdp_admin_nopaa", "field" => "SOL_DEPENDENCIA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_operacion"] ) ) {
			$lookupTableLinks["global_operacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_operacion"]["paa_master_pscdp_admin_nopaa.OPERACION_ID_FK"] )) {
			$lookupTableLinks["global_operacion"]["paa_master_pscdp_admin_nopaa.OPERACION_ID_FK"] = array();
		}
		$lookupTableLinks["global_operacion"]["paa_master_pscdp_admin_nopaa.OPERACION_ID_FK"]["edit"] = array("table" => "paa_master_pscdp_admin_nopaa", "field" => "OPERACION_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_pscdp_admin_nopaa.USER_REG"] )) {
			$lookupTableLinks[""]["paa_master_pscdp_admin_nopaa.USER_REG"] = array();
		}
		$lookupTableLinks[""]["paa_master_pscdp_admin_nopaa.USER_REG"]["edit"] = array("table" => "paa_master_pscdp_admin_nopaa", "field" => "USER_REG", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado_scdp"] ) ) {
			$lookupTableLinks["global_estado_scdp"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_admin_nopaa.SYS_STATUS"] )) {
			$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_admin_nopaa.SYS_STATUS"] = array();
		}
		$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_admin_nopaa.SYS_STATUS"]["edit"] = array("table" => "paa_master_pscdp_admin_nopaa", "field" => "SYS_STATUS", "page" => "edit");
		if( !isset( $lookupTableLinks["paa_master"] ) ) {
			$lookupTableLinks["paa_master"] = array();
		}
		if( !isset( $lookupTableLinks["paa_master"]["paa_master_modifica.PAA_ID_FK"] )) {
			$lookupTableLinks["paa_master"]["paa_master_modifica.PAA_ID_FK"] = array();
		}
		$lookupTableLinks["paa_master"]["paa_master_modifica.PAA_ID_FK"]["edit"] = array("table" => "paa_master_modifica", "field" => "PAA_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado_mod"] ) ) {
			$lookupTableLinks["global_estado_mod"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado_mod"]["paa_master_modifica.PAAM_ST"] )) {
			$lookupTableLinks["global_estado_mod"]["paa_master_modifica.PAAM_ST"] = array();
		}
		$lookupTableLinks["global_estado_mod"]["paa_master_modifica.PAAM_ST"]["edit"] = array("table" => "paa_master_modifica", "field" => "PAAM_ST", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_modifica_adm.SYSUSER"] )) {
			$lookupTableLinks[""]["paa_master_modifica_adm.SYSUSER"] = array();
		}
		$lookupTableLinks[""]["paa_master_modifica_adm.SYSUSER"]["edit"] = array("table" => "paa_master_modifica_adm", "field" => "SYSUSER", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado_mod"] ) ) {
			$lookupTableLinks["global_estado_mod"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado_mod"]["paa_master_modifica_adm.PAAM_ST"] )) {
			$lookupTableLinks["global_estado_mod"]["paa_master_modifica_adm.PAAM_ST"] = array();
		}
		$lookupTableLinks["global_estado_mod"]["paa_master_modifica_adm.PAAM_ST"]["edit"] = array("table" => "paa_master_modifica_adm", "field" => "PAAM_ST", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master_view.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master_view.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master_view.COD_UNSPSC"]["edit"] = array("table" => "paa_master_view", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_view.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master_view.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_view.MES_INICIO"]["edit"] = array("table" => "paa_master_view", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_view.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master_view.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_view.MES_PRESENTA"]["edit"] = array("table" => "paa_master_view", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master_view.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master_view.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master_view.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master_view", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master_view.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master_view.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master_view.MODALIDAD"]["edit"] = array("table" => "paa_master_view", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master_view.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master_view.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master_view.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master_view", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master_view.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master_view.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master_view.VF"]["edit"] = array("table" => "paa_master_view", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master_view.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master_view.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master_view.ESTADO_VF"]["edit"] = array("table" => "paa_master_view", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master_view.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master_view.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master_view.COD_UBICACION"]["edit"] = array("table" => "paa_master_view", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vigencia"] ) ) {
			$lookupTableLinks["global_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["global_vigencia"]["paa_master_view.vigencia"] )) {
			$lookupTableLinks["global_vigencia"]["paa_master_view.vigencia"] = array();
		}
		$lookupTableLinks["global_vigencia"]["paa_master_view.vigencia"]["edit"] = array("table" => "paa_master_view", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master_view.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master_view.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master_view.sys_status"]["edit"] = array("table" => "paa_master_view", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["global_unspsc"] ) ) {
			$lookupTableLinks["global_unspsc"] = array();
		}
		if( !isset( $lookupTableLinks["global_unspsc"]["paa_master_q.COD_UNSPSC"] )) {
			$lookupTableLinks["global_unspsc"]["paa_master_q.COD_UNSPSC"] = array();
		}
		$lookupTableLinks["global_unspsc"]["paa_master_q.COD_UNSPSC"]["edit"] = array("table" => "paa_master_q", "field" => "COD_UNSPSC", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_q.MES_INICIO"] )) {
			$lookupTableLinks["global_meses"]["paa_master_q.MES_INICIO"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_q.MES_INICIO"]["edit"] = array("table" => "paa_master_q", "field" => "MES_INICIO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_meses"] ) ) {
			$lookupTableLinks["global_meses"] = array();
		}
		if( !isset( $lookupTableLinks["global_meses"]["paa_master_q.MES_PRESENTA"] )) {
			$lookupTableLinks["global_meses"]["paa_master_q.MES_PRESENTA"] = array();
		}
		$lookupTableLinks["global_meses"]["paa_master_q.MES_PRESENTA"]["edit"] = array("table" => "paa_master_q", "field" => "MES_PRESENTA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["paa_master_q.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["paa_master_q.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["paa_master_q.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "paa_master_q", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_modalidad"] ) ) {
			$lookupTableLinks["global_modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["global_modalidad"]["paa_master_q.MODALIDAD"] )) {
			$lookupTableLinks["global_modalidad"]["paa_master_q.MODALIDAD"] = array();
		}
		$lookupTableLinks["global_modalidad"]["paa_master_q.MODALIDAD"]["edit"] = array("table" => "paa_master_q", "field" => "MODALIDAD", "page" => "edit");
		if( !isset( $lookupTableLinks["global_fuenterec"] ) ) {
			$lookupTableLinks["global_fuenterec"] = array();
		}
		if( !isset( $lookupTableLinks["global_fuenterec"]["paa_master_q.FUENTE_RECURSOS"] )) {
			$lookupTableLinks["global_fuenterec"]["paa_master_q.FUENTE_RECURSOS"] = array();
		}
		$lookupTableLinks["global_fuenterec"]["paa_master_q.FUENTE_RECURSOS"]["edit"] = array("table" => "paa_master_q", "field" => "FUENTE_RECURSOS", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vf"] ) ) {
			$lookupTableLinks["global_vf"] = array();
		}
		if( !isset( $lookupTableLinks["global_vf"]["paa_master_q.VF"] )) {
			$lookupTableLinks["global_vf"]["paa_master_q.VF"] = array();
		}
		$lookupTableLinks["global_vf"]["paa_master_q.VF"]["edit"] = array("table" => "paa_master_q", "field" => "VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estvf"] ) ) {
			$lookupTableLinks["global_estvf"] = array();
		}
		if( !isset( $lookupTableLinks["global_estvf"]["paa_master_q.ESTADO_VF"] )) {
			$lookupTableLinks["global_estvf"]["paa_master_q.ESTADO_VF"] = array();
		}
		$lookupTableLinks["global_estvf"]["paa_master_q.ESTADO_VF"]["edit"] = array("table" => "paa_master_q", "field" => "ESTADO_VF", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ubicacion"] ) ) {
			$lookupTableLinks["global_ubicacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_ubicacion"]["paa_master_q.COD_UBICACION"] )) {
			$lookupTableLinks["global_ubicacion"]["paa_master_q.COD_UBICACION"] = array();
		}
		$lookupTableLinks["global_ubicacion"]["paa_master_q.COD_UBICACION"]["edit"] = array("table" => "paa_master_q", "field" => "COD_UBICACION", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_q.responsable"] )) {
			$lookupTableLinks[""]["paa_master_q.responsable"] = array();
		}
		$lookupTableLinks[""]["paa_master_q.responsable"]["edit"] = array("table" => "paa_master_q", "field" => "responsable", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_q.dep"] )) {
			$lookupTableLinks[""]["paa_master_q.dep"] = array();
		}
		$lookupTableLinks[""]["paa_master_q.dep"]["edit"] = array("table" => "paa_master_q", "field" => "dep", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_q.deps"] )) {
			$lookupTableLinks[""]["paa_master_q.deps"] = array();
		}
		$lookupTableLinks[""]["paa_master_q.deps"]["edit"] = array("table" => "paa_master_q", "field" => "deps", "page" => "edit");
		if( !isset( $lookupTableLinks["global_vigencia"] ) ) {
			$lookupTableLinks["global_vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["global_vigencia"]["paa_master_q.vigencia"] )) {
			$lookupTableLinks["global_vigencia"]["paa_master_q.vigencia"] = array();
		}
		$lookupTableLinks["global_vigencia"]["paa_master_q.vigencia"]["edit"] = array("table" => "paa_master_q", "field" => "vigencia", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master_q.sys_status"] )) {
			$lookupTableLinks["global_estado"]["paa_master_q.sys_status"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master_q.sys_status"]["edit"] = array("table" => "paa_master_q", "field" => "sys_status", "page" => "edit");
		if( !isset( $lookupTableLinks["paa_master"] ) ) {
			$lookupTableLinks["paa_master"] = array();
		}
		if( !isset( $lookupTableLinks["paa_master"]["paa_master_usos_q.PAA_ID_FK"] )) {
			$lookupTableLinks["paa_master"]["paa_master_usos_q.PAA_ID_FK"] = array();
		}
		$lookupTableLinks["paa_master"]["paa_master_usos_q.PAA_ID_FK"]["edit"] = array("table" => "paa_master_usos_q", "field" => "PAA_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_usos_q.UEJ"] )) {
			$lookupTableLinks[""]["paa_master_usos_q.UEJ"] = array();
		}
		$lookupTableLinks[""]["paa_master_usos_q.UEJ"]["edit"] = array("table" => "paa_master_usos_q", "field" => "UEJ", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_fuente"] ) ) {
			$lookupTableLinks["tparam_fuente"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_fuente"]["paa_master_usos_q.TIPO"] )) {
			$lookupTableLinks["tparam_fuente"]["paa_master_usos_q.TIPO"] = array();
		}
		$lookupTableLinks["tparam_fuente"]["paa_master_usos_q.TIPO"]["edit"] = array("table" => "paa_master_usos_q", "field" => "TIPO", "page" => "edit");
		if( !isset( $lookupTableLinks["q_group_rec"] ) ) {
			$lookupTableLinks["q_group_rec"] = array();
		}
		if( !isset( $lookupTableLinks["q_group_rec"]["paa_master_usos_q.REC"] )) {
			$lookupTableLinks["q_group_rec"]["paa_master_usos_q.REC"] = array();
		}
		$lookupTableLinks["q_group_rec"]["paa_master_usos_q.REC"]["edit"] = array("table" => "paa_master_usos_q", "field" => "REC", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_usos_q.RUBRO"] )) {
			$lookupTableLinks[""]["paa_master_usos_q.RUBRO"] = array();
		}
		$lookupTableLinks[""]["paa_master_usos_q.RUBRO"]["edit"] = array("table" => "paa_master_usos_q", "field" => "RUBRO", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_usos_q.EBI"] )) {
			$lookupTableLinks[""]["paa_master_usos_q.EBI"] = array();
		}
		$lookupTableLinks[""]["paa_master_usos_q.EBI"]["edit"] = array("table" => "paa_master_usos_q", "field" => "EBI", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ejecucion_desagregada"] ) ) {
			$lookupTableLinks["global_ejecucion_desagregada"] = array();
		}
		if( !isset( $lookupTableLinks["global_ejecucion_desagregada"]["paa_master_usos_q.CATALOGO_PRESUPUESTAL"] )) {
			$lookupTableLinks["global_ejecucion_desagregada"]["paa_master_usos_q.CATALOGO_PRESUPUESTAL"] = array();
		}
		$lookupTableLinks["global_ejecucion_desagregada"]["paa_master_usos_q.CATALOGO_PRESUPUESTAL"]["edit"] = array("table" => "paa_master_usos_q", "field" => "CATALOGO_PRESUPUESTAL", "page" => "edit");
		if( !isset( $lookupTableLinks["global_ejecucion_actividades_spi"] ) ) {
			$lookupTableLinks["global_ejecucion_actividades_spi"] = array();
		}
		if( !isset( $lookupTableLinks["global_ejecucion_actividades_spi"]["paa_master_usos_q.ACT_ID_FK"] )) {
			$lookupTableLinks["global_ejecucion_actividades_spi"]["paa_master_usos_q.ACT_ID_FK"] = array();
		}
		$lookupTableLinks["global_ejecucion_actividades_spi"]["paa_master_usos_q.ACT_ID_FK"]["edit"] = array("table" => "paa_master_usos_q", "field" => "ACT_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado"] ) ) {
			$lookupTableLinks["global_estado"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado"]["paa_master_usos_q.SYS_STATUS"] )) {
			$lookupTableLinks["global_estado"]["paa_master_usos_q.SYS_STATUS"] = array();
		}
		$lookupTableLinks["global_estado"]["paa_master_usos_q.SYS_STATUS"]["edit"] = array("table" => "paa_master_usos_q", "field" => "SYS_STATUS", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_usos_q.USO_CONTABILIDAD_A"] )) {
			$lookupTableLinks[""]["paa_master_usos_q.USO_CONTABILIDAD_A"] = array();
		}
		$lookupTableLinks[""]["paa_master_usos_q.USO_CONTABILIDAD_A"]["edit"] = array("table" => "paa_master_usos_q", "field" => "USO_CONTABILIDAD_A", "page" => "edit");
		if( !isset( $lookupTableLinks["rep_prg001_catalogopresupuestal"] ) ) {
			$lookupTableLinks["rep_prg001_catalogopresupuestal"] = array();
		}
		if( !isset( $lookupTableLinks["rep_prg001_catalogopresupuestal"]["paa_master_usos_q.USO_CONTABILIDAD_B"] )) {
			$lookupTableLinks["rep_prg001_catalogopresupuestal"]["paa_master_usos_q.USO_CONTABILIDAD_B"] = array();
		}
		$lookupTableLinks["rep_prg001_catalogopresupuestal"]["paa_master_usos_q.USO_CONTABILIDAD_B"]["edit"] = array("table" => "paa_master_usos_q", "field" => "USO_CONTABILIDAD_B", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_pscdp_q.PAA_ID_FK"] )) {
			$lookupTableLinks[""]["paa_master_pscdp_q.PAA_ID_FK"] = array();
		}
		$lookupTableLinks[""]["paa_master_pscdp_q.PAA_ID_FK"]["edit"] = array("table" => "paa_master_pscdp_q", "field" => "PAA_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["paa_master_pscdp_q.SOL_DEPENDENCIA"] )) {
			$lookupTableLinks["dependencia"]["paa_master_pscdp_q.SOL_DEPENDENCIA"] = array();
		}
		$lookupTableLinks["dependencia"]["paa_master_pscdp_q.SOL_DEPENDENCIA"]["edit"] = array("table" => "paa_master_pscdp_q", "field" => "SOL_DEPENDENCIA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_operacion"] ) ) {
			$lookupTableLinks["global_operacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_operacion"]["paa_master_pscdp_q.OPERACION_ID_FK"] )) {
			$lookupTableLinks["global_operacion"]["paa_master_pscdp_q.OPERACION_ID_FK"] = array();
		}
		$lookupTableLinks["global_operacion"]["paa_master_pscdp_q.OPERACION_ID_FK"]["edit"] = array("table" => "paa_master_pscdp_q", "field" => "OPERACION_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado_scdp"] ) ) {
			$lookupTableLinks["global_estado_scdp"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_q.SYS_STATUS"] )) {
			$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_q.SYS_STATUS"] = array();
		}
		$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_q.SYS_STATUS"]["edit"] = array("table" => "paa_master_pscdp_q", "field" => "SYS_STATUS", "page" => "edit");
		if( !isset( $lookupTableLinks["paa_master"] ) ) {
			$lookupTableLinks["paa_master"] = array();
		}
		if( !isset( $lookupTableLinks["paa_master"]["paa_master_modifica_q.PAA_ID_FK"] )) {
			$lookupTableLinks["paa_master"]["paa_master_modifica_q.PAA_ID_FK"] = array();
		}
		$lookupTableLinks["paa_master"]["paa_master_modifica_q.PAA_ID_FK"]["edit"] = array("table" => "paa_master_modifica_q", "field" => "PAA_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado_mod"] ) ) {
			$lookupTableLinks["global_estado_mod"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado_mod"]["paa_master_modifica_q.PAAM_ST"] )) {
			$lookupTableLinks["global_estado_mod"]["paa_master_modifica_q.PAAM_ST"] = array();
		}
		$lookupTableLinks["global_estado_mod"]["paa_master_modifica_q.PAAM_ST"]["edit"] = array("table" => "paa_master_modifica_q", "field" => "PAAM_ST", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_pscdp_nopaa.PAA_ID_FK"] )) {
			$lookupTableLinks[""]["paa_master_pscdp_nopaa.PAA_ID_FK"] = array();
		}
		$lookupTableLinks[""]["paa_master_pscdp_nopaa.PAA_ID_FK"]["edit"] = array("table" => "paa_master_pscdp_nopaa", "field" => "PAA_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["paa_master_pscdp_nopaa.SOL_DEPENDENCIA"] )) {
			$lookupTableLinks["dependencia"]["paa_master_pscdp_nopaa.SOL_DEPENDENCIA"] = array();
		}
		$lookupTableLinks["dependencia"]["paa_master_pscdp_nopaa.SOL_DEPENDENCIA"]["edit"] = array("table" => "paa_master_pscdp_nopaa", "field" => "SOL_DEPENDENCIA", "page" => "edit");
		if( !isset( $lookupTableLinks["global_operacion"] ) ) {
			$lookupTableLinks["global_operacion"] = array();
		}
		if( !isset( $lookupTableLinks["global_operacion"]["paa_master_pscdp_nopaa.OPERACION_ID_FK"] )) {
			$lookupTableLinks["global_operacion"]["paa_master_pscdp_nopaa.OPERACION_ID_FK"] = array();
		}
		$lookupTableLinks["global_operacion"]["paa_master_pscdp_nopaa.OPERACION_ID_FK"]["edit"] = array("table" => "paa_master_pscdp_nopaa", "field" => "OPERACION_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["global_estado_scdp"] ) ) {
			$lookupTableLinks["global_estado_scdp"] = array();
		}
		if( !isset( $lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_nopaa.SYS_STATUS"] )) {
			$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_nopaa.SYS_STATUS"] = array();
		}
		$lookupTableLinks["global_estado_scdp"]["paa_master_pscdp_nopaa.SYS_STATUS"]["edit"] = array("table" => "paa_master_pscdp_nopaa", "field" => "SYS_STATUS", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["paa_master_ct.CONT_ID_FK"] )) {
			$lookupTableLinks[""]["paa_master_ct.CONT_ID_FK"] = array();
		}
		$lookupTableLinks[""]["paa_master_ct.CONT_ID_FK"]["edit"] = array("table" => "paa_master_ct", "field" => "CONT_ID_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["edl.funcionario"] ) ) {
			$lookupTableLinks["edl.funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["edl.funcionario"]["admin_members.id_fk"] )) {
			$lookupTableLinks["edl.funcionario"]["admin_members.id_fk"] = array();
		}
		$lookupTableLinks["edl.funcionario"]["admin_members.id_fk"]["edit"] = array("table" => "admin_members", "field" => "id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["edl.funcionario"] ) ) {
			$lookupTableLinks["edl.funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["edl.funcionario"]["admin_users.id_fk"] )) {
			$lookupTableLinks["edl.funcionario"]["admin_users.id_fk"] = array();
		}
		$lookupTableLinks["edl.funcionario"]["admin_users.id_fk"]["edit"] = array("table" => "admin_users", "field" => "id_fk", "page" => "edit");
}

?>