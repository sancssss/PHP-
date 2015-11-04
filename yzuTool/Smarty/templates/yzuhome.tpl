<!-- CSS goes in the document HEAD or added to your external stylesheet -->
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


<{if $action == 1 }>

<div data-role="header"><a href="/app/home.php" data-role="button" data-icon="home" >首页</a><h1>扬大绩点成绩查询</h1></div>
 <{if $is_past == 1 }>
 <div data-role="navbar">
      <ul>
        <li><a href="/app/home.php?action=cj&is_past=yes" data-icon="arrow-l">历史成绩与平均绩点</a></li>
        <li><a href="/app/home.php?action=cj&is_past=" data-icon="arrow-r"  class="ui-btn-active ui-state-persist">当前成绩与平均绩点</a></li>
      </ul>
    </div>
 <{else}>
 <div data-role="navbar">
      <ul>
        <li><a href="/app/home.php?action=cj&is_past=yes" data-icon="arrow-l"  class="ui-btn-active ui-state-persist">历史成绩与平均绩点</a></li>
        <li><a href="/app/home.php?action=cj&is_past=" data-icon="arrow-r" >当前成绩与平均绩点</a></li>
      </ul>
    </div>
<{/if}>
<table class="gridtable">
<tr>
	<th>科目</th><th>平时成绩</th><th>期中成绩</th><th>期末成绩</th><th>最终成绩</th>
</tr>
<{foreach key=key item=item from=$content}>
<{if $is_past == 1 }>
<tr>
 <td><{$item.1}></td>
 <td><{$item.6}></td>
 <td><{$item.7}></td>
 <td><{$item.8}></td>
 <td><{$item.9}></td>
 </tr>
<{else}>
<tr>
 <td><{$item.2}></td>
 <td><{$item.7}></td>
 <td><{$item.8}></td>
 <td><{$item.9}></td>
 <td><{$item.10}></td>
 </tr>
<{/if}>
<{/foreach}>
</table>
 <a href="#" data-role="button">总成绩：<{$totalcj}></a>
 <a href="#" data-role="button">总学分：<{$totalxf}></a>
 <a href="#" data-role="button">扬大学分算法平均绩点：<{$gpa1}></a>
<{else if $action == 2}>
<div data-role="header"><a href="/app/home.php" data-role="button" data-icon="home" >首页</a><h1>扬大一键自动评教</h1></div>
<font color =red>后程序开始运行时间可能有好几秒，请不要关闭连接</font><br/>
<form action="" method="post">
评语：<input type="text" name="py" />
<input type="submit" value="提交" data-inline="true" />
</form>
<div data-role="content">
<{$yzucontent}>
</div>
<{else}>
<div data-role="header" id = "loginhead"><h1>登录成功</h1><a href="/app/home.php?action=loginout" data-role="button" >退出</a></div>
<div data-role="controlgroup" data-type="vertical">
    <a href="/app/home.php?action=cj" data-role="button">扬大成绩及学分绩点查询</a>
    <a href="/app/home.php?action=pj" data-role="button">扬大一键自动评教</a>
    <a href="#" data-role="button">更多正在开发中</a>
	</div>
<{/if}>