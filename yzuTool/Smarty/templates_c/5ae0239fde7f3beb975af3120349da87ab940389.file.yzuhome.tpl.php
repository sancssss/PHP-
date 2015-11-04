<?php /* Smarty version Smarty-3.1.18, created on 2015-07-26 19:23:19
         compiled from "/home/wwwroot/yzu.66geek.com/Smarty/templates/yzuhome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65296399055b4c286e90e56-26209187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ae0239fde7f3beb975af3120349da87ab940389' => 
    array (
      0 => '/home/wwwroot/yzu.66geek.com/Smarty/templates/yzuhome.tpl',
      1 => 1437909796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65296399055b4c286e90e56-26209187',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55b4c286f0a079_59148845',
  'variables' => 
  array (
    'action' => 0,
    'is_past' => 0,
    'content' => 0,
    'item' => 0,
    'totalcj' => 0,
    'totalxf' => 0,
    'gpa1' => 0,
    'yzucontent' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55b4c286f0a079_59148845')) {function content_55b4c286f0a079_59148845($_smarty_tpl) {?><!-- CSS goes in the document HEAD or added to your external stylesheet -->
<style type="text/css">
table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
}
table.gridtable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}
</style>


<?php if ($_smarty_tpl->tpl_vars['action']->value==1) {?>

<div data-role="header"><a href="/app/home.php" data-role="button" data-icon="home" >首页</a><h1>扬大绩点成绩查询</h1></div>
 <?php if ($_smarty_tpl->tpl_vars['is_past']->value==1) {?>
 <div data-role="navbar">
      <ul>
        <li><a href="/app/home.php?action=cj&is_past=yes" data-icon="arrow-l">历史成绩与平均绩点</a></li>
        <li><a href="/app/home.php?action=cj&is_past=" data-icon="arrow-r"  class="ui-btn-active ui-state-persist">当前成绩与平均绩点</a></li>
      </ul>
    </div>
 <?php } else { ?>
 <div data-role="navbar">
      <ul>
        <li><a href="/app/home.php?action=cj&is_past=yes" data-icon="arrow-l"  class="ui-btn-active ui-state-persist">历史成绩与平均绩点</a></li>
        <li><a href="/app/home.php?action=cj&is_past=" data-icon="arrow-r" >当前成绩与平均绩点</a></li>
      </ul>
    </div>
<?php }?>
<table class="gridtable">
<tr>
	<th>科目</th><th>平时成绩</th><th>期中成绩</th><th>期末成绩</th><th>最终成绩</th>
</tr>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['is_past']->value==1) {?>
<tr>
 <td><?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
</td>
 <td><?php echo $_smarty_tpl->tpl_vars['item']->value[6];?>
</td>
 <td><?php echo $_smarty_tpl->tpl_vars['item']->value[7];?>
</td>
 <td><?php echo $_smarty_tpl->tpl_vars['item']->value[8];?>
</td>
 <td><?php echo $_smarty_tpl->tpl_vars['item']->value[9];?>
</td>
 </tr>
<?php } else { ?>
<tr>
 <td><?php echo $_smarty_tpl->tpl_vars['item']->value[2];?>
</td>
 <td><?php echo $_smarty_tpl->tpl_vars['item']->value[7];?>
</td>
 <td><?php echo $_smarty_tpl->tpl_vars['item']->value[8];?>
</td>
 <td><?php echo $_smarty_tpl->tpl_vars['item']->value[9];?>
</td>
 <td><?php echo $_smarty_tpl->tpl_vars['item']->value[10];?>
</td>
 </tr>
<?php }?>
<?php } ?>
</table>
 <a href="#" data-role="button">总成绩：<?php echo $_smarty_tpl->tpl_vars['totalcj']->value;?>
</a>
 <a href="#" data-role="button">总学分：<?php echo $_smarty_tpl->tpl_vars['totalxf']->value;?>
</a>
 <a href="#" data-role="button">扬大学分算法平均绩点：<?php echo $_smarty_tpl->tpl_vars['gpa1']->value;?>
</a>
<?php } elseif ($_smarty_tpl->tpl_vars['action']->value==2) {?>
<div data-role="header"><a href="/app/home.php" data-role="button" data-icon="home" >首页</a><h1>扬大一键自动评教</h1></div>
<font color =red>后程序开始运行时间可能有好几秒，请不要关闭连接</font><br/>
<form action="" method="post">
评语：<input type="text" name="py" />
<input type="submit" value="提交" data-inline="true" />
</form>
<div data-role="content">
<?php echo $_smarty_tpl->tpl_vars['yzucontent']->value;?>

</div>
<?php } else { ?>
<div data-role="header" id = "loginhead"><h1>登录成功</h1><a href="/app/home.php?action=loginout" data-role="button" >退出</a></div>
<div data-role="controlgroup" data-type="vertical">
    <a href="/app/home.php?action=cj" data-role="button">扬大成绩及学分绩点查询</a>
    <a href="/app/home.php?action=pj" data-role="button">扬大一键自动评教</a>
    <a href="#" data-role="button">更多正在开发中</a>
	</div>
<?php }?><?php }} ?>
