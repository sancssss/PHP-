<?php /* Smarty version Smarty-3.1.18, created on 2015-07-22 22:14:17
         compiled from "I:\PHP\WWW\Smarty\templates\grade.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2518455abd94e07c857-20012973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ab8b0aa73529e0d5b50180828dff99dadb00777' => 
    array (
      0 => 'I:\\PHP\\WWW\\Smarty\\templates\\grade.tpl',
      1 => 1437489168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2518455abd94e07c857-20012973',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55abd94e0d9088_27817349',
  'variables' => 
  array (
    'content' => 0,
    'item' => 0,
    'totalcj' => 0,
    'totalxf' => 0,
    'gpa1' => 0,
    'warnning' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55abd94e0d9088_27817349')) {function content_55abd94e0d9088_27817349($_smarty_tpl) {?><html>
<body>
<head><title>扬大成绩查询</title></head>
<form action="" method="get">
学号: <input type="text" name="userid" />
<br />
密码: <input type="password" name="pwd" />
<br />

<input type="submit" value="提交" />
</form>

		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<?php echo $_smarty_tpl->tpl_vars['item']->value[2];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value[7];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value[8];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value[9];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value[10];?>
<br>
		<?php } ?>
<br>
总成绩：<?php echo $_smarty_tpl->tpl_vars['totalcj']->value;?>

<br>
总学分：<?php echo $_smarty_tpl->tpl_vars['totalxf']->value;?>

<br>
标准算法：<?php echo $_smarty_tpl->tpl_vars['gpa1']->value;?>

<?php echo $_smarty_tpl->tpl_vars['warnning']->value;?>

</body>
</html><?php }} ?>
