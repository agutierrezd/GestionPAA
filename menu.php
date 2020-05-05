<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");
require_once('classes/menupage.php');


Security::processLogoutRequest();
if( !isLogged() || isLoggedAsGuest() ) 
{
	Security::tryRelogin();
}

if( !isLogged() )
{
	HeaderRedirect("login");
	return;
}


if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}





require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/paa_master_events.php"));
$tableEvents["paa_master"] = new eventclass_paa_master;
include_once(getabspath("include/paa_master_no_paa_events.php"));
$tableEvents["paa_master_no_paa"] = new eventclass_paa_master_no_paa;
include_once(getabspath("include/paa_master_usos_events.php"));
$tableEvents["paa_master_usos"] = new eventclass_paa_master_usos;
include_once(getabspath("include/paa_master_send_events.php"));
$tableEvents["paa_master_send"] = new eventclass_paa_master_send;
include_once(getabspath("include/paa_master_admin_events.php"));
$tableEvents["paa_master_admin"] = new eventclass_paa_master_admin;
include_once(getabspath("include/paa_master_usos_admin_events.php"));
$tableEvents["paa_master_usos_admin"] = new eventclass_paa_master_usos_admin;
include_once(getabspath("include/paa_master_no_paa_admin_events.php"));
$tableEvents["paa_master_no_paa_admin"] = new eventclass_paa_master_no_paa_admin;
include_once(getabspath("include/paa_master_view_events.php"));
$tableEvents["paa_master_view"] = new eventclass_paa_master_view;
include_once(getabspath("include/paa_master_q_events.php"));
$tableEvents["paa_master_q"] = new eventclass_paa_master_q;
include_once(getabspath("include/paa_master_usos_q_events.php"));
$tableEvents["paa_master_usos_q"] = new eventclass_paa_master_usos_q;
include_once(getabspath("include/paa_master_ct_events.php"));
$tableEvents["paa_master_ct"] = new eventclass_paa_master_ct;

$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue_number("id"); 
$params["xt"] = &$xt;
$params["tName"] = GLOBAL_PAGES;
$params["pageType"] = PAGE_MENU;
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$params["pageName"] = postvalue("page"); 

$pageObject = new MenuPage($params);
$pageObject->init();

$pageObject->process();
?>