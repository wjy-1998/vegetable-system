<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加用药记录</title>
	<link rel="stylesheet" type="text/css" href="../css/add_pharmacy.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
</head>
<body>
	<div class="container">
		<div class="top">
			<div class="top_left">
				<a href="../operation.php"><img src="../images/pre_logo.jpg" alt=""></a>
			</div>
			<div class="top_cen">
				<h2>添加用药记录</h2>
			</div>
		</div>
		<div class="context">
			<form action="add_pharmacy1.php" method="post">
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
						<label>药物名称:</label>
						<select name="fername" id="">
							<option value="杀虫剂">杀虫剂</option>
							<option value="杀菌剂">杀菌剂</option>
						</select>
						<input type="text" value="农药" name="farm_opertion" id="disinput">
					</li>
					<li>
						<label>投放量:</label>
						<input type="text" value="" name="dosage" placeholder="1kg">
					</li>
					<li>
						<label>用药时间:</label>
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