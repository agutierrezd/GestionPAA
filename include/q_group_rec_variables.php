<?php
$strTableName="q_group_rec";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="paa_master_usos";

$gstrOrderBy="ORDER BY
sep2.global_ejecucion.REC ASC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("q_group_rec");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["q_group_rec"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>