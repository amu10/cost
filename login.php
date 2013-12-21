<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Bootstrap Version2.0 horizontal form browser status example</title>
<meta name="description"
	content="Bootstrap Version2.0 horizontal form browser status example from w3cschool.cc.">
<link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
<?php include 'easyuihead.php';?>
</head>
<body background="">
<div class="container" style="margin-top: 100px">
	<form action="login.jspx" method="post" class="well"
		style="width: 220px; margin: 0px auto;">
		<h3>系统登录</h3>
		<div style="color: red; font-size: 18px">用户名或密码错误</div>
		<div style="color: red; font-size: 18px">请输入用户名或密码</div>
		<div style="color: red; font-size: 18px">请先登录</div>
		<label>用户名:</label> <input type="text" name="username"
			style="height: 30px" class="span3" /> <label>密码：</label> <input
			type="password" name="password" style="height: 30px" class="span3">
		<button type="submit" class="btn btn-primary">登陆系统</button>
	</form>
</div>

</body>
</html>