<?
  require_once('init.php');
  ldap_login();

  //prepare templates
  tpl_std();
  tpl_orgs();
  //display templates
  header('Content-Type: text/html; charset=utf-8');
  $smarty->display('header.tpl');
  $smarty->display('list_filter.tpl');
  $smarty->display('orgs.tpl');
  $smarty->display('footer.tpl');


?>