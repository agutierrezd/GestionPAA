<?php
$strTableName="paa_master_pscdp_nopaa";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="paa_master_pscdp";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("paa_master_pscdp_nopaa");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["paa_master_pscdp_nopaa"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>