<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>设置绑定地块</title>
	<link rel="stylesheet" type="text/css" href="css/boundplots.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
</head>
<body>
	<div class="container">
		<h2>请选择需绑定的地块</h2>
		<form action="resetregion.php" method="post">
			<ul>
				<li>
					<label>需绑定的地方区域:</label>
					<select name="area" id="">
						<option value="阳江市">阳江市</option>
						<option value="潮州市">潮州市</option>
						<option value="清远市">清远市</option>
					</select>
				</li>
				<li>
					<label>需绑定的地块区域:</label>
					<select name="land" id="">
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
					</select>
				</li>
				<li>
					<label>需绑定的地块编号:</label>
					<input type="text" placeholder="A01" name="landid">
				</li>
				<li>
					<label>选择地块的作物类型:</label>
					<select name="croptype" id="">
						<option value="--请选择--">--请选择--</option>
						<option value="叶菜类" style="background:#31CB17;color:#ffffff;">叶菜类</option>
						<option value="瓜类" style="background:#B2FC0A;color:#ffffff;">瓜类</option>
						<option value="根茎类" style="background:#BF3B08;color:#ffffff;">根茎类</option>
						<option value="豆类" style="background:#0A900A;color:#ffffff;">豆类</option>
						<option value="葱蒜类" style="background:#5F556F;color:#ffffff;">葱蒜类</option>
						<option value="无作物" style="background:#642E05;color:#ffffff;">无作物</option>
					</select>
				</li>
				<p>
					<button>绑定</button>
				</p>
			</ul>

		</form>
	</div>
</body>
</html>