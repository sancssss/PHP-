<?php
/*
Smarty配置文件
**/
define(__SITE_ROOT, $_SERVER['DOCUMENT_ROOT']); 
require(__SITE_ROOT.'/Smarty/libs/Smarty.class.php');

$smarty = new Smarty();
$smarty->template_dir =__SITE_ROOT."/Smarty/templates";   
$smarty->compile_dir = __SITE_ROOT."/Smarty/templates_c";    
$smarty->config_dir =__SITE_ROOT."/Smarty/configs";
$smarty->cache_dir = __SITE_ROOT."/Smarty/cache"; 
$smarty->left_delimiter = "<{";
$smarty->right_delimiter = "}>";
//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;
//$smarty->cache_lifetime = 120;

?>
