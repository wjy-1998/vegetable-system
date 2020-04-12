<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加档案记录</title>
	<link rel="stylesheet" type="text/css" href="../css/add_record.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
</head>
<body>
	<div class="container">
		<div class="top">
			<div class="top_left">
				<a href="../record.php"><img src="../images/pre_logo.jpg" alt=""></a>
			</div>
			<div class="top_cen">
				<h2>添加档案</h2>
			</div>
		</div>
		<div class="context">
			<form action="add_record1.php" method="post">
				<ul>
					<li>
						<label>新区域:</label>
						<select name="newland" id="">
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
						</select>
					</li>
					<li>
						<label>地块编号:</label>
						<input type="text" value="" name="newland_id" placeholder="A01">
					</li>
					<p>
						<label>市区名称:</label>
						<input type="text" value="" name="land_name" placeholder="阳江市">
					</p>
					<p>
						<label>地块名称:</label>
						<input type="text" value="" name="newland_name" placeholder="阳江市A01">
					</p>
					<li>
						<label>种类:</label>
						<select name="newagrotype" id="">
							<option value="叶菜类">叶菜类</option>
							<option value="根茎类">根茎类</option>
							<option value="瓜类">瓜类</option>
							<option value="豆类">豆类</option>
							<option value="葱蒜类">葱蒜类</option>
							<option value="无作物">无作物</option>
						</select>
					</li>
					<p>
						<label>作物名称:</label>
						<input type="text" value="" name="new_cropname">
					</p>
					<li>
						<label>作物编号:</label>
						<input type="text" value="" name="new_cropid">
					</li>
					<li>
						<label>种植面积:</label>
						<input type="text" value="" name="new_area">
					</li>
					<li>
						<label>管理者:</label>
						<select name="new_manageter" id="">
							<option value="小吴">小吴</option>
							<option value="小刘">小刘</option>
							<option value="小杨">小杨</option>
							<option value="小徐">小徐</option>
							<option value="小王">小王</option>
							<option value="小陈">小陈</option>
							<option value="小黄">小黄</option>
							<option value="小唐">小唐</option>
							<option value="小张">小张</option>
						</select>
					</li>
					<p>
						<label>种植时间:</label>
						<input type="text" value="" name="new_time">
					</p>
					<li>
						<label>种植方式:</label>
						<select name="new_pattern" id="">
							<option value="人工播种">人工播种</option>
							<option value="机械播种">机械播种</option>
						</select>
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