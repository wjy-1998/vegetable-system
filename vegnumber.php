<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>档案追溯</title>
	<link rel="stylesheet" type="text/css" href="css/vegnumber.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
</head>
<body>
	<div class="container">
		<div class="top">
			<div class="top_left">
				<a href="system.php"><img src="images/pre_logo.jpg" alt=""></a>
			</div>
			<div class="top_cen">
				<h2>档案追溯</h2>
			</div>
		</div>
		<div class="context">
			<form action="function/vegnumber_list.php" method="post">
				<h2>请在下方输入蔬菜编号</h2>
				<input type="text" value="" name="veg_num" placeholder="B001">
				<button>查询</button>
			</form>
			<div class="contlist">
				<ul>
					<h3>叶菜类</h3>
					<li>大白菜:B001</li>
					<li>菜心:B002</li>
					<li>生菜:B003</li>
					<li>菠菜:B004</li>
					<li>麦菜:B008</li>
					<h3>瓜类</h3>
					<li>青瓜:B007</li>
					<li>黄瓜:B009</li>
				</ul>
				<ul>
					<h3>豆类</h3>
					<li>豌豆:B010</li>
					<li>蚕豆:B011</li>
					<li>黄豆:B012</li>
					<h3>根茎类</h3>
					<li>萝卜:B005</li>
					<li>土豆:B006</li>
					<h3>葱蒜类</h3>
					<li>大葱:B013</li>
					<li>蒜苗:B014</li>
					<li>蒜头:B015</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>