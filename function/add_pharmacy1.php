<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加施肥记录</title>
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
		$land_id = $_POST["land_id"];
		$land_name = $_POST["land_name"];
		$cropname = $_POST["cropname"];
		$cropid = $_POST["cropid"];
		$farm_opertion = $_POST["farm_opertion"];
		$fername = $_POST["fername"];
		$dosage = $_POST["dosage"];
		$fer_time = $_POST["fer_time"];
		$operater = $_POST["operater"];
		$link = mysqli_connect("localhost","root","123456","vegppm");
		mysqli_set_charset($link,"utf8");
		$sql = "INSERT INTO `function_management`(`landmass_id`,`landmass_name`,`crop_name`,`crop_id`,`farm_operation`,`farm_fername`,`farm_dosage`,`farm_time`,`operation_name`) VALUES('$land_id','$land_name','$cropname','$cropid','$farm_opertion','$fername','$dosage','$fer_time','$operater');";
		$result = mysqli_query($link,$sql);
	?>
	<div class="container">
		<h2>添加记录成功！</h2>
		<h3><a href="../operation.php">返回</a></h3>
	</div>

</body>
</html>