<?
require("./app/head.php");
require(__SITE_ROOT.'/app/function.php');
$title = "扬州大学小工具";

$smarty->display('header.tpl');
$smarty->display('index.tpl');
require("./app/foot.php");
?>
