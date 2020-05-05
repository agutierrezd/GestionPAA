<?php
$strTableName="planta_tparam_tipo_nombramiento";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="planta_tparam_tipo_nombramiento";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("planta_tparam_tipo_nombramiento");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["planta_tparam_tipo_nombramiento"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>