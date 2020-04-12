<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>生产档案</title>
	<link rel="stylesheet" type="text/css" href="../css/record.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
</head>
<body>
<?php
	$area = $_POST["area"];
	$manager = $_POST["manager"];
?>
	<div class="container">
		<div class="cont">
			<div class="top">
				<div class="top_left">
					<a href="../system.php"><img src="../images/pre_logo.jpg" alt=""></a>
				</div>
				<div class="top_cen">
					<h2>生产档案</h2>
				</div>
			</div>
			<div class="context">
				<div class="context_top">
					<form action="record1.php" method="post">
						<ul>
							<li>
								<select name="area" id="">
									<option value="选择区域名称">选择区域名称</option>
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
									<option value="E">E</option>
								</select>
							</li>
							<li>
								<select name="manager" id="">
									<option value="选择地块管理人">选择地块管理人</option>
									<option value="小吴">小吴</option>
									<option value="小刘">小刘</option>
									<option value="小王">小王</option>
									<option value="小徐">小徐</option>
									<option value="小杨">小杨</option>
									<option value="小陈">小陈</option>
									<option value="小唐">小唐</option>
									<option value="小黄">小黄</option>
									<option value="小张">小张</option>
								</select>
							</li>
							<li>
								<button>查询</button>
								<a href="add_record.php">新建档案</a>
								<a href="update_record.php">修改档案</a>
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
							$landmass_controller = $row["landmass_controller"];
							if($area == $landmass_idname || $manager == $landmass_controller){
								echo "<div class='context_box_list'>";
								echo "<ul>";
								echo "<li>";
								echo "<label>基地名称:</label>";
								echo "<span>".$row["landmass_idname"]."</span>";
								echo "</li>";
								echo "<li>";
								echo "<label>地块编号:</label>";
								echo "<span>".$row["landmass_id"]."</span>";
								echo "</li>";
								echo "<li>";
								echo "<label>种植作物:</label>";
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
		</div>


	</div>
</body>
</html>