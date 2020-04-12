<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改档案</title>
	<link rel="stylesheet" type="text/css" href="../css/update_record.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
</head>
<body>
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
			</div>
		</div>
	</div>
</body>
</html>