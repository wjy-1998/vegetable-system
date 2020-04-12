<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>系统首页</title>
	<link rel="stylesheet" type="text/css" href="css/system.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
	<script src="js/jquery.js"></script>
</head>
<body>
	<div class="container">
		<!-- 导航栏 -->
		<div class="navigation">
			<div class="navigation_left">
				<a href="system.php">
					<div class="navigation_pic">
						<img src="images/func1.jpg" alt="">
						<p>功能菜单</p>
					</div>
				</a>
			</div>
			<div class="navigation_right">
				<a href="personal.php">
					<div class="navigation_pic">
						<img src="images/func2.jpg" alt="">
						<p id="navigation_pic_font">设置</p>
					</div>
				</a>
			</div>
		</div>
		<div class="content">
			<!-- 头部 -->
			<div class="content_top">
				<div class="content_top_div">
					<img src="images/pic1.jpg" alt="">
					<p>蔬菜质量安全管理系统</p>
				</div>
			</div>
			<div class="content_function">
				<!-- 图片栏 -->
				<div class="content_function_pic">
					<ul>
						<li><img src="images/b1.jpg" alt=""></li>
						<li><img src="images/b18.jpg" alt=""></li>
					</ul>
				</div>
				<!-- 公告栏 -->
				<div class="content_function_notice">
					<img src="images/notice_logo.jpg" alt="">
					<div class="content_function_notice_box">
						 <h2>通知公告:</h2>
						<div id="content_function_notice_box_con">
							<div id="content_function_notice_box_con_level">
								<div id="content_function_notice_box_con1">
									<ul>
										<li>
											<a href="#">1、科学有机的种植作物，产量能增加60%</a>
										</li>
										<li>
											<a href="#">2、棚内蔬菜栽培技术</a>
										</li>
										<li>
											<a href="#">3、欢迎使用蔬菜种植生产管理系统</a>
										</li>
									</ul>
								</div>
								<div id="content_function_notice_box_con2">
									
								</div>
							</div>
						</div>
					
					</div>
				</div>
				<!-- 功能按钮栏 -->
				<div class="content_function_menu">
					<div class="content_function_menu_box">
						<ul>
							<li class="function_menu_border">
								<a href="region.php">
									<div class="content_function_menu_box_list">
										<img src="images/g11.jpg" alt="">
										<p>区域管理</p>
									</div>
								</a>
							</li>
							<li class="function_menu_border">
								<a href="record.php">
									<div class="content_function_menu_box_list">
										<img src="images/g16.jpg" alt="">
										<p>生产档案</p>
									</div>
								</a>
							</li>
							<li class="function_menu_border1">
								<a href="operation.php">
									<div class="content_function_menu_box_list">
										<img src="images/g15.jpg" alt="">
										<p>农事操作</p>
									</div>
								</a>
							</li>
							<li class="function_menu_border2">
								<a href="vegnumber.php">
									<div class="content_function_menu_box_list">
										<img src="images/g17.jpg" alt="">
										<p>档案追溯</p>
									</div>
								</a>
							</li>
							<li class="function_menu_border2">
								<a href="touru.php">
									<div class="content_function_menu_box_list">
										<img src="images/g19.jpg" alt="">
										<p>投入品</p>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/system.js"></script>
</body>
</html>