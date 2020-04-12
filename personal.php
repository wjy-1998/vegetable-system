<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>设置中心</title>
	<link rel="stylesheet" type="text/css" href="css/system.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
</head>
<body>
	<div class="container">
		<!-- 导航栏 -->
		<div class="navigation">
			<div class="navigation_right">
				<a href="system.php">
					<div class="navigation_pic">
						<img src="images/func11.jpg" alt="">
						<p id="navigation_pic_font">功能菜单</p>
					</div>
				</a>
			</div>
			<div class="navigation_left">
				<a href="#">
					<div class="navigation_pic">
						<img src="images/func22.jpg" alt="">
						<p>设置</p>
					</div>
				</a>
			</div>
		</div>
		<div class="content">
			<!-- 头部 -->
			<div class="content_top">
				<div class="content_top_div1">
					<p>设置中心</p>
				</div>
			</div>
			<div class="content_info">
				<div class="content_info_box">
					<div class="content_info_box_top">
						<img src="images/g15.jpg" alt="">
					</div>
					<div class="content_info_box_container">
						<ul>
							<li>
								<form action="cleardata.php" method="post">
									<button>清除基础数据</button>
								</form>
							</li>
							<li>
								<a href="boundplots.php">设置绑定地块</a>
							</li>
							<li>
								<a href="index.php">注销</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>