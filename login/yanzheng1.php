<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>验证登录</title>
</head>
<body>
	<?php
		$login_user = $_POST["login_user"];
		$login_pas = $_POST["login_pas"];
		$link1 = mysqli_connect("localhost","root","123456","vegppm");
		$sql1 = "select * from admin where user='$login_user';";
		$result1 = mysqli_query($link1,$sql1);
		$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
		$login_user1 = $row1["user"];
		$login_pas1 = $row1["password"];
		if($login_user == $login_user1){
			if($login_pas == $login_pas1){
				header('Location:../system.php');
			}else{
				echo "输入密码错误！";
				header('Location:land.php');
			}

		}else{
			echo "输入用户名错误！";
			header('Location:land.php');
		}
	?>
</body>
</html>