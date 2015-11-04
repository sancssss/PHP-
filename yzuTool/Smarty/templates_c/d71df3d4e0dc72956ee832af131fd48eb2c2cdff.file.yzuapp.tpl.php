<?php /* Smarty version Smarty-3.1.18, created on 2015-07-26 18:24:35
         compiled from "I:\PHP\WWW\Smarty\templates\yzuapp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:882255b0fb07a39e90-92523173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd71df3d4e0dc72956ee832af131fd48eb2c2cdff' => 
    array (
      0 => 'I:\\PHP\\WWW\\Smarty\\templates\\yzuapp.tpl',
      1 => 1437906273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '882255b0fb07a39e90-92523173',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55b0fb07ba5c65_16378709',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b0fb07ba5c65_16378709')) {function content_55b0fb07ba5c65_16378709($_smarty_tpl) {?><div data-role="header" id = "loginhead"><h1>输入学号密码登录扬大小工具</h1></div>
<form action="/app/index.php" method="post" name = login" data-transition="slide" >
<label for="userid" class="ui-hidden-accessible">学号</label>
<label for="pwd" class="ui-hidden-accessible">密码</label>
学号: <input type="text" name="userid" placeholder="请输入你的学号"/>
密码: <input type="password" name="pwd" placeholder="请输入正确的密码" />
<input type="submit" value="提交" data-inline="true" data-shadow = "true" />
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

</form>

<?php }} ?>
