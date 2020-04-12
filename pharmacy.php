<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用药记录</title>
	<link rel="stylesheet" type="text/css" href="css/pharmacy.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
</head>
<body>
	<div class="container">
		<div class="top">
			<div class="top_left">
				<a href="operation.php"><img src="images/pre_logo.jpg" alt=""></a>
			</div>
			<div class="top_cen">
				<h2>用药记录</h2>
			</div>
		</div>
		<div class="context">
			<div class="context_top">
				<a href="function/add_pharmacy.php">添加记录</a>
			</div>
			<div class="context_box">
				<div class="context_box_top">
					<a>编号</a>
					<span>地块名</span>
					<a>作物</a>
					<span>药物名</span>
					<a>投入量</a>
					<span>时间</span>
				</div>
				<ul>
					<?php
						$link = mysqli_connect("localhost","root","123456","vegppm");
						mysqli_set_charset($link,"utf8");
						$sql = "select * from function_management where farm_operation='农药';";
						$result = mysqli_query($link,$sql);
						while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
							echo "<li>";
							echo "<a>".$row["landmass_id"]."</a>";
							echo "<span>".$row["landmass_name"]."</span>";
							echo "<a>".$row["crop_name"]."</a>";
							echo "<span>".$row["farm_fername"]."</span>";
							echo "<a>".$row["farm_dosage"]."</a>";
							echo "<span id='span'>".$row["farm_time"]."</span>";
							echo "</li>";
						};
					?>					
				</ul>
			</div>
		</div>
	</div>
</body>
</html>