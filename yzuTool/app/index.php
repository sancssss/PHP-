<?
require("./head.php");
require(__SITE_ROOT.'/app/function.php');

$title = "扬州大学工具集";

$login_info = 0;
if(isset($_POST['userid']) && isset($_POST['pwd'])){
	$loginurl = "http://58.192.142.134:7777/pls/wwwbks/bks_login2.uniteLogin";
	
	$userid = $_POST['userid'];
	//学校的MD5是大写的
	$md5it = md5($_POST['pwd']);
	$userpw = strtoupper($md5it);
	
	$post = "stuid=$userid&pwd=$userpw";
	
	//得到cookie并存入session
	@$_SESSION["cookiesave"] = get_cookie($loginurl,$post,0);
	if(isset($_SESSION["cookiesave"])){
		header("location:/app/home.php");
	}else{
		//0代表登录失败
		$login_info = 0;
		@$error = "</br>登录失败，请检查您的账号密码";
	}
}

$smarty->assign("info",$login_info);
@$smarty->assign("error",$error);
$smarty->assign("title",$title);

$smarty->display('header.tpl');
$smarty->display('yzuapp.tpl');
require("foot.php");
?>