<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers("global_users");
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tbldbusers_at_localhost__Amaterasu_103_settings;
	var $tbldbusers_at_localhost_edl_funcionario;
	var $tbldbusers_at_localhost__global_status;
	var $tbldbusers_at_localhost__global_users;
	var $tbldbusers_at_localhost__q_divipola;
	var $tblmincit_global_at_localhost__gestionpaa_ver_103_audit;
	var $tblmincit_global_at_localhost__gestionpaa_ver_103_locking;
	var $tblmincit_global_at_localhost__gestionpaa_ver_103_uggroups;
	var $tblmincit_global_at_localhost__gestionpaa_ver_103_ugmembers;
	var $tblmincit_global_at_localhost__gestionpaa_ver_103_ugrights;
	var $tblmincit_global_at_localhost__global_duracion;
	var $tblmincit_global_at_localhost__global_estado;
	var $tblmincit_global_at_localhost__global_estado_mod;
	var $tblmincit_global_at_localhost__global_estado_scdp;
	var $tblmincit_global_at_localhost__global_estvf;
	var $tblmincit_global_at_localhost__global_fuenterec;
	var $tblmincit_global_at_localhost__global_meses;
	var $tblmincit_global_at_localhost__global_modalidad;
	var $tblmincit_global_at_localhost__global_operacion;
	var $tblmincit_global_at_localhost__global_paa_nopaa;
	var $tblmincit_global_at_localhost__global_ubicacion;
	var $tblmincit_global_at_localhost__global_unspsc;
	var $tblmincit_global_at_localhost__global_vf;
	var $tblmincit_global_at_localhost__global_vigencia;
	var $tblmincit_global_at_localhost__paa_master;
	var $tblmincit_global_at_localhost__paa_master_ct;
	var $tblmincit_global_at_localhost__paa_master_modifica;
	var $tblmincit_global_at_localhost__paa_master_pscdp;
	var $tblmincit_global_at_localhost__paa_master_usos;
	var $tblmincit_global_at_localhost_sep2_global_ejecucion;
	var $tblsep2_at_localhost__global_ejecucion;
	var $tblsep2_at_localhost__global_ejecucion_actividades_spi;
	var $tblsep2_at_localhost__global_ejecucion_desagregada;
	var $tblsep2_at_localhost__global_ejecucion_usos;
	var $tblsep2_at_localhost__q_list_uej;
	var $tblsep2_at_localhost__rep_prg001_catalogopresupuestal;
	var $tblsep2_at_localhost__tparam_fuente;
	var $tblsep2_at_localhost__tparam_tiporubro;
	var $tblsep2_at_localhost__tparam_vigencia;
	var $tbledl_at_localhost__cargo;
	var $tbledl_at_localhost__comportamental;
	var $tbledl_at_localhost__dependencia;
	var $tbledl_at_localhost__dependencias_001;
	var $tbledl_at_localhost__funcionario;
	var $tbledl_at_localhost__planta_tparam_tipo_nombramiento;
	var $tbldbct_at_localhost__contractor_master;
	var $tbldbct_at_localhost__contrato;
	var $tbldbct_at_localhost__tipo_banco;
	var $tbldbct_at_localhost__tipo_cta_banco;
	var $tbldbct_at_localhost__tipo_docidentidad;
	var $tbldbct_at_localhost__tparam_tipo_ct_000;
	var $tbldbct_at_localhost__tparam_tipo_ct_002;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "Amaterasu_103_settings", "varname" => "dbusers_at_localhost__Amaterasu_103_settings", "altvarname" => "Amaterasu_103_settings", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at localhost");
		$this->lstTables[] = array("name" => "funcionario", "varname" => "dbusers_at_localhost_edl_funcionario", "altvarname" => "funcionario", "connId" => "dbusers_at_localhost", "schema" => "edl", "connName" => "dbusers at localhost");
		$this->lstTables[] = array("name" => "global_status", "varname" => "dbusers_at_localhost__global_status", "altvarname" => "global_status", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at localhost");
		$this->lstTables[] = array("name" => "global_users", "varname" => "dbusers_at_localhost__global_users", "altvarname" => "global_users", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at localhost");
		$this->lstTables[] = array("name" => "q_divipola", "varname" => "dbusers_at_localhost__q_divipola", "altvarname" => "q_divipola", "connId" => "dbusers_at_localhost", "schema" => "", "connName" => "dbusers at localhost");
		$this->lstTables[] = array("name" => "gestionpaa_ver_103_audit", "varname" => "mincit_global_at_localhost__gestionpaa_ver_103_audit", "altvarname" => "gestionpaa_ver_103_audit", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "gestionpaa_ver_103_locking", "varname" => "mincit_global_at_localhost__gestionpaa_ver_103_locking", "altvarname" => "gestionpaa_ver_103_locking", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "gestionpaa_ver_103_uggroups", "varname" => "mincit_global_at_localhost__gestionpaa_ver_103_uggroups", "altvarname" => "gestionpaa_ver_103_uggroups", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "gestionpaa_ver_103_ugmembers", "varname" => "mincit_global_at_localhost__gestionpaa_ver_103_ugmembers", "altvarname" => "gestionpaa_ver_103_ugmembers", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "gestionpaa_ver_103_ugrights", "varname" => "mincit_global_at_localhost__gestionpaa_ver_103_ugrights", "altvarname" => "gestionpaa_ver_103_ugrights", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "global_duracion", "varname" => "mincit_global_at_localhost__global_duracion", "altvarname" => "global_duracion", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "global_estado", "varname" => "mincit_global_at_localhost__global_estado", "altvarname" => "global_estado", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "global_estado_mod", "varname" => "mincit_global_at_localhost__global_estado_mod", "altvarname" => "global_estado_mod", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "global_estado_scdp", "varname" => "mincit_global_at_localhost__global_estado_scdp", "altvarname" => "global_estado_scdp", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "global_estvf", "varname" => "mincit_global_at_localhost__global_estvf", "altvarname" => "global_estvf", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "global_fuenterec", "varname" => "mincit_global_at_localhost__global_fuenterec", "altvarname" => "global_fuenterec", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "global_meses", "varname" => "mincit_global_at_localhost__global_meses", "altvarname" => "global_meses", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "global_modalidad", "varname" => "mincit_global_at_localhost__global_modalidad", "altvarname" => "global_modalidad", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "global_operacion", "varname" => "mincit_global_at_localhost__global_operacion", "altvarname" => "global_operacion", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "global_paa_nopaa", "varname" => "mincit_global_at_localhost__global_paa_nopaa", "altvarname" => "global_paa_nopaa", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "global_ubicacion", "varname" => "mincit_global_at_localhost__global_ubicacion", "altvarname" => "global_ubicacion", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "global_unspsc", "varname" => "mincit_global_at_localhost__global_unspsc", "altvarname" => "global_unspsc", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "global_vf", "varname" => "mincit_global_at_localhost__global_vf", "altvarname" => "global_vf", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "global_vigencia", "varname" => "mincit_global_at_localhost__global_vigencia", "altvarname" => "global_vigencia", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "paa_master", "varname" => "mincit_global_at_localhost__paa_master", "altvarname" => "paa_master", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "paa_master_ct", "varname" => "mincit_global_at_localhost__paa_master_ct", "altvarname" => "paa_master_ct", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "paa_master_modifica", "varname" => "mincit_global_at_localhost__paa_master_modifica", "altvarname" => "paa_master_modifica", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "paa_master_pscdp", "varname" => "mincit_global_at_localhost__paa_master_pscdp", "altvarname" => "paa_master_pscdp", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "paa_master_usos", "varname" => "mincit_global_at_localhost__paa_master_usos", "altvarname" => "paa_master_usos", "connId" => "mincit_global_at_localhost", "schema" => "", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "global_ejecucion", "varname" => "mincit_global_at_localhost_sep2_global_ejecucion", "altvarname" => "global_ejecucion", "connId" => "mincit_global_at_localhost", "schema" => "sep2", "connName" => "mincit_global at localhost");
		$this->lstTables[] = array("name" => "global_ejecucion", "varname" => "sep2_at_localhost__global_ejecucion", "altvarname" => "global_ejecucion", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "sep2 at localhost");
		$this->lstTables[] = array("name" => "global_ejecucion_actividades_spi", "varname" => "sep2_at_localhost__global_ejecucion_actividades_spi", "altvarname" => "global_ejecucion_actividades_spi", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "sep2 at localhost");
		$this->lstTables[] = array("name" => "global_ejecucion_desagregada", "varname" => "sep2_at_localhost__global_ejecucion_desagregada", "altvarname" => "global_ejecucion_desagregada", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "sep2 at localhost");
		$this->lstTables[] = array("name" => "global_ejecucion_usos", "varname" => "sep2_at_localhost__global_ejecucion_usos", "altvarname" => "global_ejecucion_usos", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "sep2 at localhost");
		$this->lstTables[] = array("name" => "q_list_uej", "varname" => "sep2_at_localhost__q_list_uej", "altvarname" => "q_list_uej", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "sep2 at localhost");
		$this->lstTables[] = array("name" => "rep_prg001_catalogopresupuestal", "varname" => "sep2_at_localhost__rep_prg001_catalogopresupuestal", "altvarname" => "rep_prg001_catalogopresupuestal", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "sep2 at localhost");
		$this->lstTables[] = array("name" => "tparam_fuente", "varname" => "sep2_at_localhost__tparam_fuente", "altvarname" => "tparam_fuente", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "sep2 at localhost");
		$this->lstTables[] = array("name" => "tparam_tiporubro", "varname" => "sep2_at_localhost__tparam_tiporubro", "altvarname" => "tparam_tiporubro", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "sep2 at localhost");
		$this->lstTables[] = array("name" => "tparam_vigencia", "varname" => "sep2_at_localhost__tparam_vigencia", "altvarname" => "tparam_vigencia", "connId" => "sep2_at_localhost", "schema" => "", "connName" => "sep2 at localhost");
		$this->lstTables[] = array("name" => "cargo", "varname" => "edl_at_localhost__cargo", "altvarname" => "cargo", "connId" => "edl_at_localhost", "schema" => "", "connName" => "edl at localhost");
		$this->lstTables[] = array("name" => "comportamental", "varname" => "edl_at_localhost__comportamental", "altvarname" => "comportamental", "connId" => "edl_at_localhost", "schema" => "", "connName" => "edl at localhost");
		$this->lstTables[] = array("name" => "dependencia", "varname" => "edl_at_localhost__dependencia", "altvarname" => "dependencia", "connId" => "edl_at_localhost", "schema" => "", "connName" => "edl at localhost");
		$this->lstTables[] = array("name" => "dependencias_001", "varname" => "edl_at_localhost__dependencias_001", "altvarname" => "dependencias_001", "connId" => "edl_at_localhost", "schema" => "", "connName" => "edl at localhost");
		$this->lstTables[] = array("name" => "funcionario", "varname" => "edl_at_localhost__funcionario", "altvarname" => "funcionario", "connId" => "edl_at_localhost", "schema" => "", "connName" => "edl at localhost");
		$this->lstTables[] = array("name" => "planta_tparam_tipo_nombramiento", "varname" => "edl_at_localhost__planta_tparam_tipo_nombramiento", "altvarname" => "planta_tparam_tipo_nombramiento", "connId" => "edl_at_localhost", "schema" => "", "connName" => "edl at localhost");
		$this->lstTables[] = array("name" => "contractor_master", "varname" => "dbct_at_localhost__contractor_master", "altvarname" => "contractor_master", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "contrato", "varname" => "dbct_at_localhost__contrato", "altvarname" => "contrato", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "tipo_banco", "varname" => "dbct_at_localhost__tipo_banco", "altvarname" => "tipo_banco", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "tipo_cta_banco", "varname" => "dbct_at_localhost__tipo_cta_banco", "altvarname" => "tipo_cta_banco", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "tipo_docidentidad", "varname" => "dbct_at_localhost__tipo_docidentidad", "altvarname" => "tipo_docidentidad", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "tparam_tipo_ct_000", "varname" => "dbct_at_localhost__tparam_tipo_ct_000", "altvarname" => "tparam_tipo_ct_000", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
		$this->lstTables[] = array("name" => "tparam_tipo_ct_002", "varname" => "dbct_at_localhost__tparam_tipo_ct_002", "altvarname" => "tparam_tipo_ct_002", "connId" => "dbct_at_localhost", "schema" => "", "connName" => "dbct at localhost");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( $schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>