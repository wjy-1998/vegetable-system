<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加档案记录</title>
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
		$newland = $_POST["newland"];
		$land_name = $_POST["land_name"];
		$newland_id = $_POST["newland_id"];
		$newland_name = $_POST["newland_name"];
		$newagrotype = $_POST["newagrotype"];
		$new_cropname = $_POST["new_cropname"];
		$new_cropid = $_POST["new_cropid"];
		$new_area = $_POST["new_area"];
		$new_manageter = $_POST["new_manageter"];
		$new_pattern = $_POST["new_pattern"];
		$new_time = $_POST["new_time"];
		$link = mysqli_connect("localhost","root","123456","vegppm");
		mysqli_set_charset($link,"utf8");
		$sql = "INSERT INTO `crop_production`(`landmass_idname`,`landmass_id`,`landmass`,`landmass_name`,`agrotype`,`crop_name`,`crop_id`,`crop_plant_area`,`landmass_controller`,`plant_time`,`plant_pattern`) VALUES('$newland','$newland_id','$land_name','$newland_name','$newagrotype','$new_cropname','$new_cropid','$new_area','$new_manageter','$new_time','$new_pattern');";
		$result = mysqli_query($link,$sql);
	?>
	<div class="container">
		<h2>添加档案成功！</h2>
		<h3><a href="../record.php">返回</a></h3>
	</div>

</body>
</html>