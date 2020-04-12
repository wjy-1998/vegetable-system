<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>验证注册</title>
</head>
<body>
	<?php
		$name = $_POST["name"];
		$password = $_POST["password"];
		$link = mysqli_connect("localhost","root","123456","vegppm"); 
		$sql = "INSERT INTO `admin`(`user`,`password`)
		VALUES('$name','$password');";
		$result = mysqli_query($link,$sql);
		if($name != "" && $password != ""){
			header('Location:land.php');
			//echo "插入成功。";
		}else{
			header('Location:zhuce.php');
			//echo "插入失败";
		}
	?>
</body>
</html>