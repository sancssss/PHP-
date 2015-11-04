<?php /* Smarty version Smarty-3.1.18, created on 2015-07-26 19:20:36
         compiled from "/home/wwwroot/yzu.66geek.com/Smarty/templates/yzuapp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132344135955b4c2841ea1b3-98375425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8becab7c0c8bf5ea5677a3c1b3bfa386e237e8d9' => 
    array (
      0 => '/home/wwwroot/yzu.66geek.com/Smarty/templates/yzuapp.tpl',
      1 => 1437906272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132344135955b4c2841ea1b3-98375425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55b4c284219550_65809239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b4c284219550_65809239')) {function content_55b4c284219550_65809239($_smarty_tpl) {?><div data-role="header" id = "loginhead"><h1>输入学号密码登录扬大小工具</h1></div>
<form action="/app/index.php" method="post" name = login" data-transition="slide" >
<label for="userid" class="ui-hidden-accessible">学号</label>
<label for="pwd" class="ui-hidden-accessible">密码</label>
学号: <input type="text" name="userid" placeholder="请输入你的学号"/>
密码: <input type="password" name="pwd" placeholder="请输入正确的密码" />
<input type="submit" value="提交" data-inline="true" data-shadow = "true" />
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

</form>

<?php }} ?>
