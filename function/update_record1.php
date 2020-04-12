<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改档案</title>
	<link rel="stylesheet" type="text/css" href="../css/update_record.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
	<script src="../js/jquery.js"></script>
</head>
<body>
<?php
	$area = $_POST["area"];
	$landmass = $_POST["landmass"];
?>
	<div class="container">
		<div class="cont">
			<div class="top">
				<div class="top_left">
					<a href="../record.php"><img src="../images/pre_logo.jpg" alt=""></a>
				</div>
				<div class="top_cen">
					<h2>修改档案</h2>
				</div>
			</div>
			<div class="context">
				<div class="context_top">
					<form action="update_record1.php" method="post">
						<ul>
							<li>
								<select name="landmass" id="">
									<option value="选择修改市区">选择修改市区</option>
									<option value="阳江市">阳江市</option>
									<option value="潮州市">潮州市</option>
									<option value="清远市">清远市</option>
								</select>
							</li>
							<li>
								<select name="area" id="">
									<option value="选择区域名称">选择修改区域</option>
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="E">E</option>
								</select>
							</li>
							<li>
								<button>查询</button>
							</li>
						</ul>
					</form>
				</div>
				<div id="context_box">
					<?php
						$link = mysqli_connect("localhost","root","123456","vegppm");
						mysqli_set_charset($link,"utf8");
						$sql = "select * from crop_production;";
						$result = mysqli_query($link,$sql);
						while($row=mysqli_fetch_array($result)){
							$landmass_idname = $row["landmass_idname"];
							$landm = $row["landmass"];
							$landmass_id = $row["landmass_id"];
							$landmass_name = $row["landmass_name"];
							$crop_name = $row["crop_name"];
							$crop_id = $row["crop_id"];
							$crop_plant_area = $row["crop_plant_area"];
							$plant_time = $row["plant_time"];
							$plant_pattern = $row["plant_pattern"];
							$agro = $row["agrotype"];
							if($area == $landmass_idname || $landmass == $landm){
								echo "<div class='context_box_list' onclick='showRecord(this);'>";
								echo "<a id='landm'>$landm</a>";
								echo "<a id='landmass_id'>$landmass_id</a>";
								echo "<a id='landmass_name'>$landmass_name</a>";
								echo "<a id='crop_name'>$crop_name</a>";
								echo "<a id='crop_id'>$crop_id</a>";
								echo "<a id='crop_area'>$crop_plant_area</a>";
								echo "<a id='plant_time'>$plant_time</a>";
								echo "<a id='plant_pattern'>$plant_pattern</a>";
								echo "<ul>";
								echo "<li>";
								echo "<label>地块编号:</label>";
								echo "<span>".$row["landmass_id"]."</span>";
								echo "</li>";
								echo "<li>";
								echo "<label>地块名称:</label>";
								echo "<span>".$row["landmass_name"]."</span>";
								echo "</li>";
								echo "<li>";
								echo "<label>作物种类:</label>";
								echo "<span>".$row["agrotype"]."</span>";
								echo "</li>";
								echo "<li>";
								echo "<label>作物名称:</label>";
								echo "<span>".$row["crop_name"]."</span>";
								echo "</li>";
								echo "<li>";
								echo "<label>种植时间:</label>";
								echo "<span>".$row["plant_time"]."</span>";
								echo "</li>";
								echo "</ul>";
								echo "</div>";
							}
						}
					?>
				</div>
			</div>

			<!-- 弹框 -->
			<div class="showDiv" id="showDiv">
				<p>
					<span>修改信息</span>
					<a href="#" class="closebtn" onclick="closeDiv();">&times;</a>
				</p>
				<form action="update_record2.php" method="post">
					<ul>
						<li>
							<label>当前地区:</label>
							<span id="nowland"></span>
						</li>
						<li>
							<label>地块编号:</label>
							<span id="nowland_id"></span>
						</li>
						<li>
							<label>地块名称:</label>
							<span id="nowland_name"></span>
							<input type="text" value="" name="landname" id="landname">
						</li>
						<li>
							<label>作物种类:</label>
							<select name="agrotype">
								<option value="叶菜类">叶菜类</option>
								<option value="瓜类">瓜类</option>
								<option value="豆类">豆类</option>
								<option value="根茎类">根茎类</option>
								<option value="葱蒜类">葱蒜类</option>
								<option value="无作物">无作物</option>
							</select>
						</li>
						<li>
							<label>作物名称:</label>
							<input type="text" value="" name="cropname" id="cropname">
						</li>
						<li>
							<label>作物编号:</label>
							<input type="text" value="" name="cropid" id="cropid">
						</li>
						<li>
							<label>种植面积:</label>
							<input type="text" value="" name="plantarea" id="plantarea">
							<input type="text" value="" name="bfarea" id="bfarea">
						</li>
						<li>
							<label>种植方式:</label>
							<select name="plant_patt">
								<option value="人工播种">人工播种</option>
								<option value="机械播种">机械播种</option>
								<option value="无">无</option>
							</select>
						</li>
						<span>
							<label>种植时间:</label>
							<input type="text" value="" name="planttime" id="planttime">
							<input type="text" value="" name="bftime" id="bftime">
						</span>
						<p>
							<button>修改记录</button>
						</p>
					</ul>
				</form>
			</div>


		</div>
	</div>

	<script src="../js/update_record.js"></script>
</body>
</html>