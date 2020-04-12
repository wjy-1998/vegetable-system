<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>清除基础数据</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
	<style>
		.container{
			width:100%;
			max-width:414px;
			max-height:680px;
			height:680px;
			padding-top:10%;
			background:url("../images/b6.jpg") no-repeat;
			background-size:100% 100%;
		}
		.container h2{
			display:block;
			width:100%;
			font-size:25px;
			text-align:center;
			/* border:1px solid; */
		}
		.container h3{
			display:block;
			float:left;
			width:100%;
			font-size:20px;
			text-align:center;
			/* border:1px solid red; */
		}
		.container h3 a{
			width:100%;
			text-decoration:none;
			color:#086A27;
		}
	</style>
</head>
<body>
	<?php
		$link = mysqli_connect("localhost","root","123456","vegppm");
		mysqli_set_charset($link,"utf8");
		$sql = "DELETE * FROM function_management;";
		$result = mysqli_query($link,$sql);
	?>
	<div class="container">
		<h2>清除数据成功！</h2>
		<h3><a href="system.php">返回</a></h3>
	</div>
</body>
</html>