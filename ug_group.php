<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 


if(!isLogged())
{ 
	return;
}
if(!IsAdmin())
{
	return;
}
$nonAdminTablesArr = array();
$nonAdminTablesArr[] = "global_users";
$nonAdminTablesArr[] = "paa_master";
$nonAdminTablesArr[] = "global_unspsc";
$nonAdminTablesArr[] = "global_meses";
$nonAdminTablesArr[] = "global_duracion";
$nonAdminTablesArr[] = "global_modalidad";
$nonAdminTablesArr[] = "global_fuenterec";
$nonAdminTablesArr[] = "global_vf";
$nonAdminTablesArr[] = "global_estvf";
$nonAdminTablesArr[] = "global_ubicacion";
$nonAdminTablesArr[] = "paa_master_no_paa";
$nonAdminTablesArr[] = "paa_master_usos";
$nonAdminTablesArr[] = "tparam_fuente";
$nonAdminTablesArr[] = "q_group_rec";
$nonAdminTablesArr[] = "global_ejecucion_desagregada";
$nonAdminTablesArr[] = "global_vigencia";
$nonAdminTablesArr[] = "dependencia";
$nonAdminTablesArr[] = "funcionario";
$nonAdminTablesArr[] = "global_estado";
$nonAdminTablesArr[] = "tparam_vigencia";
$nonAdminTablesArr[] = "cargo";
$nonAdminTablesArr[] = "planta_tparam_tipo_nombramiento";
$nonAdminTablesArr[] = "tipo_banco";
$nonAdminTablesArr[] = "tipo_cta_banco";
$nonAdminTablesArr[] = "contractor_master";
$nonAdminTablesArr[] = "tipo_docidentidad";
$nonAdminTablesArr[] = "global_status";
$nonAdminTablesArr[] = "q_divipola";
$nonAdminTablesArr[] = "contrato";
$nonAdminTablesArr[] = "global_ejecucion_usos";
$nonAdminTablesArr[] = "global_ejecucion_actividades_spi";
$nonAdminTablesArr[] = "global_ejecucion";
$nonAdminTablesArr[] = "paa_master_send";
$nonAdminTablesArr[] = "rep_prg001_catalogopresupuestal";
$nonAdminTablesArr[] = "tparam_tiporubro";
$nonAdminTablesArr[] = "global_paa_nopaa";
$nonAdminTablesArr[] = "paa_master_admin";
$nonAdminTablesArr[] = "paa_master_usos_admin";
$nonAdminTablesArr[] = "paa_master_no_paa_admin";
$nonAdminTablesArr[] = "paa_master_pscdp";
$nonAdminTablesArr[] = "global_operacion";
$nonAdminTablesArr[] = "paa_master_pscdp_admin";
$nonAdminTablesArr[] = "global_estado_scdp";
$nonAdminTablesArr[] = "paa_master_pscdp_admin_nopaa";
$nonAdminTablesArr[] = "paa_master_modifica";
$nonAdminTablesArr[] = "paa_master_modifica_adm";
$nonAdminTablesArr[] = "paa_master_view";
$nonAdminTablesArr[] = "global_estado_mod";
$nonAdminTablesArr[] = "paa_master_q";
$nonAdminTablesArr[] = "paa_master_usos_q";
$nonAdminTablesArr[] = "paa_master_pscdp_q";
$nonAdminTablesArr[] = "paa_master_modifica_q";
$nonAdminTablesArr[] = "paa_master_pscdp_nopaa";
$nonAdminTablesArr[] = "paa_master_ct";
$nonAdminTablesArr[] = "dependencias_001";
$nonAdminTablesArr[] = "q_list_uej";

$ug_connection = $cman->getForUserGroups();

$cbxNames = array('add' => array('mask' => 'A', 'rightName' => 'add')
	, 'edt' => array('mask' => 'E', 'rightName' => 'edit')
	, 'del' => array('mask' => 'D', 'rightName' => 'delete')
	, 'lst' => array('mask' => 'S', 'rightName' => 'list')
	, 'exp' => array('mask' => 'P', 'rightName' => 'export')
	, 'imp' => array('mask' => 'I', 'rightName' => 'import')
	, 'adm' => array('mask' => 'M'));

$wGroupTableName = $ug_connection->addTableWrappers( "gestionpaa_ver_103_uggroups" );
	
switch(postvalue("a"))
{
	case "add":
		$sql = "insert into ". $wGroupTableName ." (". $ug_connection->addFieldWrappers( "Label" ) .")"
			." values (". $ug_connection->prepareString( postvalue("name") ). ")";		
		$ug_connection->exec( $sql );

		$sql = "select max(". $ug_connection->addFieldWrappers( "GroupID") .") from ". $wGroupTableName;
		$data = $ug_connection->query( $sql )->fetchNumeric();
		
		echo printJSON( array('success' => true, 'id' => $data[0]) );
		break;
		
	case "del":
		$sql = "delete from ". $wGroupTableName ." where ". $ug_connection->addFieldWrappers("GroupID") ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		$sql = "delete from ". $ug_connection->addTableWrappers( "gestionpaa_ver_103_ugrights" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		$sql = "delete from ".$ug_connection->addTableWrappers( "gestionpaa_ver_103_ugmembers" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
		
	case "rename":
		$sql = "update ". $wGroupTableName  
			." set ". $ug_connection->addFieldWrappers( "Label" ) ."=". $ug_connection->prepareString( postvalue("name") )
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
	
	// @deprecated 
	// see ug_rights
	case 'saveRights':
		$error = '';
		if( postvalue('state') )
		{	
			$allRights = array();
			$sql = "select ". $ug_connection->addFieldWrappers( "GroupID" ) 
				.", ". $ug_connection->addFieldWrappers( "TableName" ) 
				.", ". $ug_connection->addFieldWrappers( "AccessMask" ) ." from ". $wGroupTableName;
			
			$qResult = $ug_connection->query( $sql );
			// don't use fetchAssoc! because of ORACLE and PostgreSQL
			while( $rightsRow = $qResult->fetchNumeric() )
			{
				$allRights[] = $rightsRow;
			}
			
			$wRightsTableName = $ug_connection->addTableWrappers( "gestionpaa_ver_103_ugrights" );
			
			$delGroupId = 0;
			$state = my_json_decode( postvalue('state') );
			// delete all extra permissions from db
			foreach($allRights as $i => $rightValue)
			{
				$groupIDInt = (int) $rightValue[0];
				
				if($groupIDInt == $delGroupId)
					continue;
					
				//delete all extra permissions for group
				if( !array_key_exists($groupIDInt, $state) )
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt;
					$ug_connection->exec( $sql );
				}
				//delete all extra permissions for table in group
				else if(!array_key_exists(GetTableId($data[1]), $state[$groupIDInt]))
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt 
						." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=".$ug_connection->prepareString( html_special_decode($data[1]) );				
					$ug_connection->exec( $sql );
				}
			}
			
			$realTables = GetRealValues();
			foreach ($state as $groupId => $groupRights)
			{
				foreach ($groupRights as $table => $mask)
				{
					if( !array_key_exists($table, $realTables) )
						continue;
					
					$ins = true;
					foreach($allRights as $i => $rightValue)
					{	
						if($rightValue[0] == $groupId && $rightValue[1] == $realTables[$table])	
						{
							$ins = false;
							if($data[2]!= $mask)
							{
								$sql ="update". $wRightsTableName 
									." set ". $ug_connection->addFieldWrappers( "AccessMask" ) ."=". $ug_connection->prepareString( $mask )
									." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupId 
									." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=". $ug_connection->prepareString( html_special_decode($realTables[$table]) );
								$ug_connection->exec( $sql );
							}
						}
					}
					if($ins)
					{
						$sql = "insert into ". $wRightsTableName
							." (". $ug_connection->addFieldWrappers( "TableName" ) 
							.", ". $ug_connection->addFieldWrappers( "GroupID" ) 
							.", ". $ug_connection->addFieldWrappers( "AccessMask" ) .") " 
							."values (". $ug_connection->prepareString(html_special_decode($realTables[$table])) .", ". $groupId .", ". $ug_connection->prepareString($mask)  .")";
						$ug_connection->exec( $sql );
					}
					
					$error = $ug_connection->lastError();
				}
			}
		}
		
		getJSONResult($error);
		break;
}

function GetTableId($name)
{
	$tbls = GetRealValues();
	for($i = 0;$i < count($tbls); $i++)
	{
		if($tbls[$i] == $name)
			return $i;
	}
	return -1;
}

/**
 * GetRealValues
 * Form array with real users or tables names
 * @return {array} array of reaf names
 */
function GetRealValues()
{
	$result = array();
	if(postvalue('realValues'))
		$realValues = my_json_decode(postvalue('realValues'));
		foreach ($realValues as $key =>$value)
			$result[$key] = $value;
	return $result;
}

/**
 * getJSONResult
 * Form result as a JSON object according of errors
 * @param {string} list of errors
 */
function getJSONResult($error)
{
	$result['success'] = $error == '';
	$result['error'] = $error;	
	echo printJSON($result);
}