<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>档案追溯</title>
	<link rel="stylesheet" type="text/css" href="../css/vegnumber_list.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
</head>
<body>
<?php
	$veg_num = $_POST["veg_num"];
?>
	<div class="container">
		<div class="top">
			<div class="top_left">
				<a href="../vegnumber.php"><img src="../images/pre_logo.jpg" alt=""></a>
			</div>
			<div class="top_cen">
				<h2><?php echo $veg_num; ?></h2>
			</div>
		</div>
		<div class="context">
			<ul>
				<?php
					$link = mysqli_connect("localhost","root","123456","vegppm");
					mysqli_set_charset($link,"utf8");
					$sql = "select * from crop_production,function_management where crop_production.crop_id = function_management.crop_id;";
					$result = mysqli_query($link,$sql);
					while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
						$crop_id = $row["crop_id"];
						$landmass_name = $row["landmass_name"];
						$landmass_id = $row["landmass_id"];
						$crop_plant_area = $row["crop_plant_area"];
						$plant_time = $row["plant_time"];
						$plant_pattern = $row["plant_pattern"];
						$landmass_controller = $row["landmass_controller"];
						$farm_operation = $row["farm_operation"];
						$farm_fername = $row["farm_fername"];
						$farm_dosage = $row["farm_dosage"];
						$farm_time = $row["farm_time"];
						$operation_name = $row["operation_name"];

						if($veg_num == $crop_id){
							echo "<li>";
							echo "<div class='context_listdiv'>";
							echo "<ul>";
							echo "<li>";
							echo "<label>地块名称:</label>";
							echo "<span>$landmass_name</span>";
							echo "</li>";
							echo "<li>";
							echo "<label>地块编号:</label>";
							echo "<span>$landmass_id</span>";
							echo "</li>";
							echo "<li>";
							echo "<label>种植面积:</label>";
							echo "<span>$crop_plant_area</span>";
							echo "</li>";
							echo "<p>";
							echo "<label>种植时间:</label>";
							echo "<span>$plant_time</span>";
							echo "</p>";
							echo "<li>";
							echo "<label>种植方式:</label>";
							echo "<span>$plant_pattern</span>";
							echo "</li>";
							echo "<li>";
							echo "<label>管理员:</label>";
							echo "<span>$landmass_controller</span>";
							echo "</li>";
							echo "<li>";
							echo "<label>农事操作:</label>";
							echo "<span>$farm_operation</span>";
							echo "</li>";
							echo "<li>";
							echo "<label>投入品:</label>";
							echo "<span>$farm_fername</span>";
							echo "</li>";
							echo "<li>";
							echo "<label>投入量:</label>";
							echo "<span>$farm_dosage</span>";
							echo "</li>";
							echo "<li>";
							echo "<label>投入时间:</label>";
							echo "<span>$farm_time</span>";
							echo "</li>";
							echo "<li>";
							echo "<label>操作者:</label>";
							echo "<span>$operation_name</span>";
							echo "</li>";
							echo "</ul>";
							echo "</div>";
							echo "</li>";
						}
					}
				?>	
			</ul>
		</div>
	</div>
</body>
</html>