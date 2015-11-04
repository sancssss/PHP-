<?php /* Smarty version Smarty-3.1.18, created on 2015-07-23 17:40:08
         compiled from "I:\PHP\WWW\Smarty\templates\yzupj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77255b0b67853b6c6-59446279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b12dcf9f53fb4343cc6d6451f1405699605dc13a' => 
    array (
      0 => 'I:\\PHP\\WWW\\Smarty\\templates\\yzupj.tpl',
      1 => 1437491369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77255b0b67853b6c6-59446279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55b0b6786e2d00_61808438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b0b6786e2d00_61808438')) {function content_55b0b6786e2d00_61808438($_smarty_tpl) {?><head><title>扬大一键评课系统</title></head>
<font color =red>输入学号和登录密码一键完成对所有老师的好评(评语可为空)</font>,<br/>登陆后程序开始运行时间可能有好几秒，<font color =red>请不要关闭连接</font><br/>

<hr/>
<form action="" method="post">
学号: <input type="text" name="id" />
<br />
密码: <input type="password" name="pw" />
<br />
评语：<input type="text" name="py" />
<br />

<input type="submit" value="提交" />
</form>
<?php echo $_smarty_tpl->tpl_vars['content']->value;?>
<?php }} ?>
