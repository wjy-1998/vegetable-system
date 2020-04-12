<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>投入品</title>
	<link rel="stylesheet" type="text/css" href="css/touru.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
	<script src="js/jquery.js"></script>
</head>
<body>
	<div class="container">
		<div class="top">
			<div class="top_left">
				<a href="system.php"><img src="images/pre_logo.jpg" alt=""></a>
			</div>
			<div class="top_cen">
				<h2>投入品</h2>
			</div>
		</div>
		<div class="context">
			<form action="function/touru1.php" method="post">
				<p>
					种类:
				</p>
				<ul>
					<li>
						<select id="showSelect">
							<option value="种子" id="opt_li0">种子</option>
							<option value="肥料" id="opt_li1">肥料</option>
							<option value="农药" id="opt_li2">农药</option>
						</select>
					</li>
					<li id="hidli">
						<select name="fername0" id="sel0" style="display:block;">
							<option value="">--请选择--</option>
							<option value="大白菜">大白菜</option>
							<option value="菜心">菜心</option>
							<option value="生菜">生菜</option>
							<option value="萝卜">萝卜</option>
							<option value="菠菜">菠菜</option>
							<option value="土豆">土豆</option>
							<option value="青瓜">青瓜</option>
							<option value="麦菜">麦菜</option>
							<option value="黄瓜">黄瓜</option>
							<option value="豌豆">豌豆</option>
							<option value="蚕豆">蚕豆</option>
							<option value="黄豆">黄豆</option>
							<option value="大葱">大葱</option>
							<option value="蒜苗">蒜苗</option>
							<option value="蒜头">蒜头</option>
						</select>
						<select name="fername1" id="sel1" style="display:none;">
							<option value="">--请选择--</option>
							<option value="有机肥">有机肥</option>
							<option value="化肥">化肥</option>
							<option value="水溶性肥料">水溶性肥料</option>
						</select>
						<select name="fername2" id="sel2" style="display:none;">
							<option value="">--请选择--</option>
							<option value="杀虫剂">杀虫剂</option>
							<option value="杀菌剂">杀菌剂</option>
						</select>
					</li>
				</ul>
				<div class="context_btn">
					<button>查询</button>
					<a href="function/add_touru.php">新增</a>
				</div>
			</form>
		</div>

	</div>

	<script src="js/touru.js"></script>
</body>
</html>