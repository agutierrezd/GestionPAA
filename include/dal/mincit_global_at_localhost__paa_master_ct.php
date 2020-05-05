<?php
$dalTablepaa_master_ct = array();
$dalTablepaa_master_ct["PAAC_ID"] = array("type"=>3,"varname"=>"PAAC_ID", "name" => "PAAC_ID");
$dalTablepaa_master_ct["PAA_ID_FK"] = array("type"=>3,"varname"=>"PAA_ID_FK", "name" => "PAA_ID_FK");
$dalTablepaa_master_ct["CONT_ID_FK"] = array("type"=>3,"varname"=>"CONT_ID_FK", "name" => "CONT_ID_FK");
$dalTablepaa_master_ct["CONT_NUMCONTRATO"] = array("type"=>200,"varname"=>"CONT_NUMCONTRATO", "name" => "CONT_NUMCONTRATO");
$dalTablepaa_master_ct["CONT_DOC"] = array("type"=>200,"varname"=>"CONT_DOC", "name" => "CONT_DOC");
$dalTablepaa_master_ct["CONT_NAME"] = array("type"=>200,"varname"=>"CONT_NAME", "name" => "CONT_NAME");
$dalTablepaa_master_ct["CONT_VIGENCIA"] = array("type"=>2,"varname"=>"CONT_VIGENCIA", "name" => "CONT_VIGENCIA");
	$dalTablepaa_master_ct["PAAC_ID"]["key"]=true;

$dal_info["mincit_global_at_localhost__paa_master_ct"] = &$dalTablepaa_master_ct;
?>