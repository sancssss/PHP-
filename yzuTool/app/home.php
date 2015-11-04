<?php
require("./head.php");
require(__SITE_ROOT.'/app/function.php');
error_reporting(0);
$title = "扬州大学工具集";
	
	if(isset($_SESSION["cookiesave"])){
		switch(@$_GET["action"]){
			case 'cj':
			$action = 1;
			$smarty->assign("action", $action);
			include('yzu_chengji.php');
			$title = "扬州大学成绩绩点查询";
			break;
			case 'pj':
			$action = 2;
			$smarty->assign("action", $action);
			include('yzu_pingjiao.php');
			$title = "扬州大学一键评教";
			break;
			case 'loginout':
			header("location:/app/index.php");
			break;
			default:
			$title = "扬州大学工具集";
			$action = 3;
			
		}
	}else{
			$title = "扬州大学工具集";
			$action = 4;
	}

$smarty->assign("title",$title);
$smarty->display('header.tpl');
$smarty->display('yzuhome.tpl');
require("foot.php");
?>