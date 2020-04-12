<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<link rel="stylesheet" type="text/css" href="../css/land.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
</head>
<body>
	<div class="container">
		<div class="box">
			<h2>蔬菜质量安全管理系统</h2>
			<div class="content">
				<form action="yanzheng1.php" method="post">
					<input type="text" placeholder="请输入登录账号/用户名" name="login_user">
					<input type="password" placeholder="请输入登录密码" name="login_pas">
					<input type="submit" value="进入系统">
					<a href="zhuce.php" class="login">注册</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>