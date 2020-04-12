<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>地块管理</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.4.1.min.css">
	<link rel="stylesheet" type="text/css" href="../css/region_block.css">
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../js/popper.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.4.1.min.js"></script>
</head>
<body>
	<?php
		$landmass = $_POST["landmass"];
		$agrotype = $_POST["agrotype"];
	?>
	<div class="container">
		<div class="top">
			<div class="top_left">
				<a href="../personal.php"><img src="../images/pre_logo.jpg" alt=""></a>
			</div>
			<div class="top_right">
				<h2><?php echo $landmass;?></h2>
			</div>
		</div>
		<div class="context">
			<h2>请选择时间段</h2>
			<div class="accordion" id="accordionEX">
				<!-- 第一个卡片-->
				<?php
					$link = mysqli_connect("localhost","root","123456","vegppm");
					mysqli_set_charset($link,"utf8");
					$sql = "select * from crop_production as a where not exists(select 1 from crop_production where landmass_name = a.landmass_name and agrotype = a.agrotype and crop_name = a.crop_name and a.plant_time < plant_time);";
					$result = mysqli_query($link,$sql);
					$i = 0;
					while($row = mysqli_fetch_array($result)){
						$landm = $row["landmass_name"];
						$ag = $row["agrotype"];
						$landmass_id = $row["landmass_id"];
						if($landm == $landmass && $ag == $agrotype){
							$crop_id = $row["crop_id"];
							$crop_name = $row["crop_name"];
							$i++;
							echo "<div class='card'>";
							echo "<div class='card-header text-white bg-success col-sm-12' style='border-bottom:12px solid #ffffff;'>";
							echo "<button class='btn btn-success col-sm-12' data-toggle='collapse' data-target='#time".$i."'>".$row["plant_time"]."</button>";
							echo "</div>";
							echo "<div id='time".$i."' class='collapse col-sm-12' data-parent='#accordionEX'>";
							echo "<div class='card-body'>";
							echo "<p class='card-text'>";
							echo "<a class='card-link text-success' style='font-size:16px;'>地块名称:</a>";
							echo "<span class='card-link'>".$row["landmass_name"]."</span>";
							echo "</p>";
							echo "<p class='card-text'>";
							echo "<a class='card-link text-success' style='font-size:16px;'>作物类别:</a>";
							echo "<span class='card-link'>".$row["agrotype"]."</span>";
							echo "</p>";
							echo "<p class='card-text'>";
							echo "<a class='card-link text-success' style='font-size:16px;'>作物编号:</a>";
							echo "<span class='card-link'>".$row["crop_id"]."</span>";
							echo "</p>";
							echo "<p class='card-text'>";
							echo "<a class='card-link text-success' style='font-size:16px;'>作物名称:</a>";
							echo "<span class='card-link'>".$row["crop_name"]."</span>";
							echo "</p>";
							echo "<p class='card-text'>";
							echo "<a class='card-link text-success' style='font-size:16px;'>种植面积:</a>";
							echo "<span class='card-link'>".$row["crop_plant_area"]."</span>";
							echo "</p>";
							echo "<p class='card-text'>";
							echo "<a class='card-link text-success' style='font-size:16px;'>地块管理者:</a>";
							echo "<span class=card-link'>".$row["landmass_controller"]."</span>";
							echo "</p>";
							echo "<p class='card-text'>";
							echo "<a class='card-link text-success' style='font-size:16px;'>种植方式:</a>";
							echo "<span class='card-link'>".$row["plant_pattern"]."</span>";
							echo "</p>";
							echo "<p class='card-text'>";
							echo "<ul id='specUL'>";
							echo "<li  onclick='showModel(this)'>";
							echo "<a>$landm</a>";
							echo "<a>$crop_id</a>";
							echo "<a>$crop_name</a>";
							echo "<a>$landmass_id</a>";
							echo "<button class='btn btn-success col-sm-12'>农事操作</button>";
							echo "</ul>";
							echo "</li>";
							echo "</p>";
							echo "</div>";
							echo "</div>";
							echo "</div>";
						}

					}			

						
				 ?>				 
			</div>
		</div>

		<!-- 弹框 -->
		<div id="showDiv" class="showDiv">
			<p>
				<span>请选择农事操作</span>
				<a href="#" class="closebtn" onclick="closeDiv();">&times;</a>
			</p>
			<form action="region_block1.php" method="post">
				<ul>
					<li>
						<label>操作方式:</label>
						<select name="pattern">
							<option value="灌溉">灌溉</option>
							<option value="施肥">施肥</option>
							<option value="农药">农药</option>
							<option value="采收">采收</option>
						</select>
					</li>
					<li>
						<label>投入品名称:</label>
						<input type="text" value="" name="touru">
					</li>
					<li>
						<label>添加用量:</label>
						<input type="text" value="1kg" name="dosage">
					</li>
					<li>
						<label>操作时间:</label>
							<?php
								date_default_timezone_set("Asia/Shanghai");
								$date=date("Y-m-d");
								echo "$date";
								echo "<input type='text' value='".$date."' name='time' id='time'>";
							?>
					</li>
					<li>
						<label>操作者:</label>
						<input type="text" value="" name="user">
					</li>
					<li><button>确认</button></li>
				</ul>
				<div id="hidiv">
					<input type="text" value="" name="landmass1" id="landmass1">
					<input type="text" value="" name="crop_id" id="crop_id">
					<input type="text" value="" name="crop_name" id="crop_name">
					<input type="text" value="" name="landmass_id" id="landmass_id">
				</div>

			</form>
		</div>

	</div>

	<script src="../js/region_block.js"></script>
</body>
</html>