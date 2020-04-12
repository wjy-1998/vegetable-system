<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加农事操作</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
	<style>
		.container{
			width:100%;
			max-width:414px;
			max-height:680px;
			height:680px;
			padding-top:50%;
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
	$landmass = $_POST["landmass1"];
	$crop_id = $_POST["crop_id"];
	$crop_name = $_POST["crop_name"];
	$pattern = $_POST["pattern"];
	$dosage = $_POST["dosage"];
	$time = $_POST["time"];
	$user = $_POST["user"];
	$touru = $_POST["touru"];
	$landmass_id = $_POST["landmass_id"];
	$link = mysqli_connect("localhost","root","123456","vegppm");
	mysqli_set_charset($link,"utf8");
	$sql = "INSERT INTO `function_management`(`landmass_id`,`landmass_name`,`crop_name`,`crop_id`,`farm_operation`,`farm_fername`,`farm_dosage`,`farm_time`,`operation_name`) VALUES('$landmass_id','$landmass','$crop_name','$crop_id','$pattern','$touru','$dosage','$time','$user');";
	$result = mysqli_query($link,$sql);
?>
	<div class="container">
		<h2>添加成功！</h2>
		<h3><a href="../region.php">返回</a></h3>
	</div>

</body>
</html>