<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加投入</title>
	<link rel="stylesheet" type="text/css" href="../css/add_touru.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
</head>
<body>
	<div class="container">
		<div class="top">
			<div class="top_left">
				<a href="../touru.php"><img src="../images/pre_logo.jpg" alt=""></a>
			</div>
			<div class="top_cen">
				<h2>添加投入品</h2>
			</div>
		</div>
		<div class="context">
			<form action="add_touru1.php" method="post">
				<ul>
					<li>
						<label>地块编号:</label>
						<input type="text" value="" name="touruland_id" placeholder="A01">
					</li>
					<p>
						<label>地块名称:</label>
						<input type="text" value="" name="touruland_name" placeholder="阳江市A01">
					</p>
					<li>
						<label>作物名称:</label>
						<input type="text" value="" name="tourucrop_name">
					</li>
					<li>
						<label>作物编号:</label>
						<input type="text" value="" name="tourucrop_id">
					</li>
					<li>
						<label>操作类型:</label>
						<select name="touru_type" id="">
							<option value="施肥">施肥</option>
							<option value="农药">农药</option>
						</select>
					</li>
					<li>
						<label>投入物料:</label>
						<input type="text" value="" name="touru_crop">
					</li>
					<li>
						<label>投入量:</label>
						<input type="text" value="" name="touru_crop_dosage" placeholder="1kg">
					</li>
					<li>
						<label>投放时间:</label>
						<input type="text" value="" name="touru_time">
					</li>
					<li>
						<label>操作者:</label>
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