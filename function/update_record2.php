<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改档案</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
	<style>
		*{
			padding:0px;
			margin:0px auto;
		}
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
			margin-top:20%;
			font-size:20px;
			text-align:center;
			/* border:1px solid red; */
		}
		.container h3 a{
			display:inline-block;
			width:100%;
			height:100%;
			text-decoration:none;
			color:#086A27;
		}
	</style>
</head>
<body>
<?php
	$landname = $_POST["landname"];
	$agrotype = $_POST["agrotype"];
	$cropname = $_POST["cropname"];
	$cropid = $_POST["cropid"];
	$plantarea = $_POST["plantarea"];
	$plant_patt = $_POST["plant_patt"];
	$planttime = $_POST["planttime"];
	$bfarea = $_POST["bfarea"];
	$bftime = $_POST["bftime"];
	$link = mysqli_connect("localhost","root","123456","vegppm");
	mysqli_set_charset($link,"utf8");
	$sql = "UPDATE crop_production SET landmass_name='$landname',agrotype='$agrotype',crop_name='$cropname',crop_id='$cropid',crop_plant_area='$plantarea',plant_pattern='$plant_patt',plant_time='$planttime' WHERE plant_time='$bftime';";
	$result = mysqli_query($link,$sql);
?>
	<div class="container">
		<h2>修改档案成功！</h2>
		<h3><a href="../record.php">返回</a></h3>
	</div>
</body>
</html>