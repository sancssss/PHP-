<div data-role="header" id = "loginhead"><h1>输入学号密码登录扬大小工具</h1></div>
<form action="/app/index.php" method="post" name = login" data-transition="slide" >
<label for="userid" class="ui-hidden-accessible">学号</label>
<label for="pwd" class="ui-hidden-accessible">密码</label>
学号: <input type="text" name="userid" placeholder="请输入你的学号"/>
密码: <input type="password" name="pwd" placeholder="请输入正确的密码" />
<input type="submit" value="提交" data-inline="true" data-shadow = "true" />
<{$error}>
</form>

