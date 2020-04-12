<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加灌溉记录</title>
	<link rel="stylesheet" type="text/css" href="../css/add_water.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
</head>
<body>
	<div class="container">
		<div class="top">
			<div class="top_left">
				<a href="../operation.php"><img src="../images/pre_logo.jpg" alt=""></a>
			</div>
			<div class="top_cen">
				<h2>添加灌溉记录</h2>
			</div>
		</div>
		<div class="context">
			<form action="add_water1.php" method="post">
				<ul>
					<li>
						<label>地块编号:</label>
						<input type="text" value="" name="land_id" placeholder="A01">
					</li>
					<li>
						<label>地块名称:</label>
						<input type="text" value="" name="land_name" placeholder="阳江市A01">
					</li>
					<li>
						<label>作物名称:</label>
						<input type="text" value="" name="cropname">
					</li>
					<li>
						<label>作物编号:</label>
						<input type="text" value="" name="cropid">
					</li>
					<li>
						<label>农事操作:</label>
						<select name="fername" id="">
							<option value="浇水">浇水</option>
						</select>
						<input type="text" value="灌溉" name="farm_opertion" id="disinput">
					</li>
					<li>
						<label>投放量:</label>
						<input type="text" value="" name="dosage" placeholder="1kg">
					</li>
					<li>
						<label>灌溉时间:</label>
						<?php
							date_default_timezone_set("Asia/Shanghai");
							$date=date("Y-m-d");
							echo "$date";
							echo "<input type='text' value='".$date."' name='fer_time' id='time'>";
						?>
					</li>
					<li>
						<label>操作人:</label>
						<input type="text" value="" name="operater">
					</li>
					<span>
						<button>添加记录</button>
					</span>
				</ul>
			</form>
		</div>
	</div>
</body>
</html>