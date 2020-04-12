<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>地块管理</title>
	<link rel="stylesheet" type="text/css" href="css/region.css">
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
				<h2>地块管理</h2>
			</div>
			<div class="top_right">
				<img src="images/gps_logo.jpg" alt="" id="top_right_pic">
				<div class="top_right_list">
					<ul>
						<li>
							<p><span id="top_nav0">阳江市</span></p>
						</li>
						<li>
							<p><span id="top_nav1">潮州市</span></p>
						</li>
						<li>
							<p><span id="top_nav2">清远市</span></p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- 内容区域 -->
		<form action="function/region_block.php" method="post">
			<div class="box" id="box0" style="display:block;">
				<div class="box_list">
					<ul class="box_list_left">
						<li>当前位置:</li>			
						<li>土地类型:</li>			
						<li>气候特点:</li>			
						<li>种植面积:</li>	
						<li>播种面积:</li>
					</ul>
					<ul class="box_list_right list_right_font">
						<li>
							<?php
								$link = mysqli_connect("localhost","root","123456","vegppm");
								mysqli_set_charset($link,"utf8");
								$sql = "select * from landmass_area where landmass_gps = '阳江市';";
								$result = mysqli_query($link,$sql);
								$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
								echo $row["landmass_gps"];
							?>
						</li>
						<li>
							<?php
								$link1 = mysqli_connect("localhost","root","123456","vegppm");
								mysqli_set_charset($link1,"utf8");
								$sql1 = "select * from landmass_area where landmass_gps = '阳江市';";
								$result1 = mysqli_query($link1,$sql1);
								$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
								echo $row1["landtype"];
							?>
						</li>
						<li>
							<?php
								$link2 = mysqli_connect("localhost","root","123456","vegppm");
								mysqli_set_charset($link2,"utf8");
								$sql2 = "select * from landmass_area where landmass_gps = '阳江市';";
								$result2 = mysqli_query($link2,$sql2);
								$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
								echo $row2["climate"];
							?>
						</li>
						<li>
							<?php
								$link3 = mysqli_connect("localhost","root","123456","vegppm");
								mysqli_set_charset($link3,"utf8");
								$sql3 = "select * from landmass_area where landmass_gps = '阳江市';";
								$result3 = mysqli_query($link3,$sql3);
								$row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC);
								echo $row3["plant_area"];
							?>
						</li>
						<li>
							<?php
								$link4 = mysqli_connect("localhost","root","123456","vegppm");
								mysqli_set_charset($link4,"utf8");
								$sql4 = "select * from landmass_area where landmass_gps = '阳江市';";
								$result4 = mysqli_query($link4,$sql4);
								$row4 = mysqli_fetch_array($result4,MYSQLI_ASSOC);
								echo $row4["sown_area"];
							?>
						</li>
					</ul>
				</div>
				<div class="box_content">
					<div class="box_content_nav">
						<span><b id="nav0" class="nonce">区域分布</b></span>
						<span><b id="nav1">作物播种面积</b></span>
					</div>
					<div class="box_content_con" id="content_con0" style="display:block;">
						<div class="box_content_con_tit">
							<p>
								<span style="background:#31CB17;">叶菜类</span>
								<span style="background:#B2FC0A;">瓜类</span>
								<span style="background:#BF3B08;">根茎类</span>
								<span style="background:#0A900A;">豆类</span>
								<span style="background:#5F556F;">葱蒜类</span>
								<span style="background:#642E05;">无作物</span>
							</p>
						</div>
						<div class="box_content_con_left">
							<ul>
								<li><h2>A区</h2></li>
								<li><h2>B区</h2></li>
								<li><h2>C区</h2></li>
								<li><h2>D区</h2></li>
								<li><h2>E区</h2></li>
							</ul>
						</div>
						<div class="box_content_con_right">
							<ul>
								<li onclick="onBtn(this)">
									<a href="#">阳江市A01</a>
									<a href="#">叶菜类</a>
									<button class="leafbgcolor">A01</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市A02</a>
									<a href="#">叶菜类</a>
									<button class="leafbgcolor">A02</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市A03</a>
									<a href="#">叶菜类</a>
									<button class="leafbgcolor">A03</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市A04</a>
									<a href="#">根茎类</a>
									<button class="rootbgcolor">A04</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市A05</a>
									<a href="#">瓜类</a>
									<button class="melon">A05</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市B01</a>
									<a href="#">无作物</a>
									<button class="nocrop">B01</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市B02</a>
									<a href="#">无作物</a>
									<button class="nocrop">B02</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市B03</a>
									<a href="#">叶菜类</a>
									<button class="leafbgcolor">B03</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市B04</a>
									<a href="#">根茎类</a>
									<button class="rootbgcolor">B04</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市B05</a>
									<a href="#">豆类</a>
									<button class="peas">B05</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市C01</a>
									<a href="#">瓜类</a>
									<button class="melon">C01</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市C02</a>
									<a href="#">瓜类</a>
									<button class="melon">C02</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市C03</a>
									<a href="#">根茎类</a>
									<button class="rootbgcolor">C03</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市C04</a>
									<a href="#">叶菜类</a>
									<button class="leafbgcolor">C04</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市C05</a>
									<a href="#">豆类</a>
									<button class="peas">C05</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市D01</a>
									<a href="#">无作物</a>
									<button class="nocrop">D01</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市D02</a>
									<a href="#">根茎类</a>
									<button class="rootbgcolor">D02</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市D03</a>
									<a href="#">瓜类</a>
									<button class="melon">D03</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市D04</a>
									<a href="#">葱蒜类</a>
									<button class="onion">D04</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市D05</a>
									<a href="#">叶菜类</a>
									<button class="leafbgcolor">D05</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市E01</a>
									<a href="#">叶菜类</a>
									<button class="leafbgcolor">E01</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市E02</a>
									<a href="#">无作物</a>
									<button class="nocrop">E02</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市E03</a>
									<a href="#">瓜类</a>
									<button class="melon">E03</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市E04</a>
									<a href="#">葱蒜类</a>
									<button class="onion">E04</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">阳江市E05</a>
									<a href="#">葱蒜类</a>
									<button class="onion">E05</button>
								</li>
							</ul>
						</div>
						
					</div>
					<div class="box_content_con" id="content_con1" style="display:none;">
						<h2>蔬菜作物播种情况图(2.16亩=1%)</h2>
						<div class="content_con1">
							<div class="bar">
								<div id="bar1"></div>
								<div id="bar2"></div>
								<div id="bar3"></div>
								<div id="bar4"></div>
								<div id="bar5"></div>
								<div id="bar6"></div>
								<div id="bar7"></div>
								<div id="bar8"></div>
								<div id="bar9"></div>
							</div>
						</div>
					</div> 
				</div>
			</div>

			<div class="box" id="box1" style="display:none;">
				<div class="box_list">
					<ul class="box_list_left">
						<li>当前位置:</li>			
						<li>土地类型:</li>			
						<li>气候特点:</li>			
						<li>种植面积:</li>	
						<li>播种面积:</li>
					</ul>
					<ul class="box_list_right list_right_font">
						<li>
							<?php
								$link = mysqli_connect("localhost","root","123456","vegppm");
								mysqli_set_charset($link,"utf8");
								$sql = "select * from landmass_area where landmass_gps = '潮州市';";
								$result = mysqli_query($link,$sql);
								$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
								echo $row["landmass_gps"];
							?>
						</li>
						<li>
							<?php
								$link1 = mysqli_connect("localhost","root","123456","vegppm");
								mysqli_set_charset($link1,"utf8");
								$sql1 = "select * from landmass_area where landmass_gps = '潮州市';";
								$result1 = mysqli_query($link1,$sql1);
								$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
								echo $row1["landtype"];
							?>
						</li>
						<li>
							<?php
								$link2 = mysqli_connect("localhost","root","123456","vegppm");
								mysqli_set_charset($link2,"utf8");
								$sql2 = "select * from landmass_area where landmass_gps = '潮州市';";
								$result2 = mysqli_query($link2,$sql2);
								$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
								echo $row2["climate"];
							?>
						</li>
						<li>
							<?php
								$link3 = mysqli_connect("localhost","root","123456","vegppm");
								mysqli_set_charset($link3,"utf8");
								$sql3 = "select * from landmass_area where landmass_gps = '潮州市';";
								$result3 = mysqli_query($link3,$sql3);
								$row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC);
								echo $row3["plant_area"];
							?>
						</li>
						<li>
							<?php
								$link4 = mysqli_connect("localhost","root","123456","vegppm");
								mysqli_set_charset($link4,"utf8");
								$sql4 = "select * from landmass_area where landmass_gps = '潮州市';";
								$result4 = mysqli_query($link4,$sql4);
								$row4 = mysqli_fetch_array($result4,MYSQLI_ASSOC);
								echo $row4["sown_area"];
							?>
						</li>
					</ul>
				</div>
				<div class="box_content">
					<div class="box_content_nav">
						<span><b id="navB0" class="nonce">区域分布</b></span>
						<span><b id="navB1">作物播种面积</b></span>
					</div>
					<div class="box_content_con" id="content_conB0" style="display:block;">
						<div class="box_content_con_tit">
							<p>
								<span style="background:#31CB17;">叶菜类</span>
								<span style="background:#B2FC0A;">瓜类</span>
								<span style="background:#BF3B08;">根茎类</span>
								<span style="background:#0A900A;">豆类</span>
								<span style="background:#5F556F;">葱蒜类</span>
								<span style="background:#642E05;">无作物</span>
							</p>
						</div>
						<div class="box_content_con_left">
							<ul>
								<li><h2>A区</h2></li>
								<li><h2>B区</h2></li>
								<li><h2>C区</h2></li>
								<li><h2>D区</h2></li>
								<li><h2>E区</h2></li>
							</ul>
						</div>
						<div class="box_content_con_right">
							<ul>
								<li onclick="onBtn(this)">
									<a href="#">潮州市A01</a>
									<a href="#">豆类</a>
									<button class="peas">A01</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市A02</a>
									<a href="#">叶菜类</a>
									<button class="leafbgcolor">A02</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市A03</a>
									<a href="#">瓜类</a>
									<button class="melon">A03</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市A04</a>
									<a href="#">瓜类</a>
									<button class="melon">A04</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市A05</a>
									<a href="#">瓜类</a>
									<button class="melon">A05</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市B01</a>
									<a href="#">豆类</a>
									<button class="peas">B01</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市B02</a>
									<a href="#">无作物</a>
									<button class="nocrop">B02</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市B03</a>
									<a href="#">叶菜类</a>
									<button class="leafbgcolor">B03</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市B04</a>
									<a href="#">根茎类</a>
									<button class="rootbgcolor">B04</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市B05</a>
									<a href="#">瓜类</a>
									<button class="melon">B05</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市C01</a>
									<a href="#">豆类</a>
									<button class="peas">C01</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市C02</a>							
									<a href="#">豆类</a>
									<button class="peas">C02</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市C03</a>
									<a href="#">豆类</a>
									<button class="peas">C03</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市C04</a>
									<a href="#">叶菜类</a>
									<button class="leafbgcolor">C04</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市C05</a>
									<a href="#">瓜类</a>
									<button class="melon">C05</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市D01</a>
									<a href="#">无作物</a>
									<button class="nocrop">D01</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市D02</a>
									<a href="#">根茎类</a>
									<button class="rootbgcolor">D02</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市D03</a>
									<a href="#">豆类</a>
									<button class="peas">D03</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市D04</a>
									<a href="#">葱蒜类</a>
									<button class="onion">D04</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市D05</a>
									<a href="#">叶菜类</a>
									<button class="leafbgcolor">D05</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市E01</a>
									<a href="#">叶菜类</a>
									<button class="leafbgcolor">E01</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市E02</a>
									<a href="#">根茎类</a>
									<button class="rootbgcolor">E02</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市E03</a>
									<a href="#">豆类</a>
									<button class="peas">E03</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市E04</a>
									<a href="#">根茎类</a>
									<button class="rootbgcolor">E04</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">潮州市E05</a>
									<a href="#">葱蒜类</a>
									<button class="onion">E05</button>
								</li>
							</ul>
						</div>
						
					</div>
					<div class="box_content_con" id="content_conB1" style="display:none;">
						<h2>蔬菜作物播种情况图(0.31亩=1%)</h2>
						<div class="content_con1">
							<div class="bar">
								<div id="bar11"></div>
								<div id="bar21"></div>
								<div id="bar31"></div>
								<div id="bar41"></div>
								<div id="bar51"></div>
								<div id="bar61"></div>
								<div id="bar71"></div>
								<div id="bar81"></div>
								<div id="bar91"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="box" id="box2" style="display:none;">
				<div class="box_list">
					<ul class="box_list_left">
						<li>当前位置:</li>			
						<li>土地类型:</li>			
						<li>气候特点:</li>			
						<li>种植面积:</li>	
						<li>播种面积:</li>
					</ul>
					<ul class="box_list_right list_right_font">
						<li>
							<?php
								$link = mysqli_connect("localhost","root","123456","vegppm");
								mysqli_set_charset($link,"utf8");
								$sql = "select * from landmass_area where landmass_gps = '清远市';";
								$result = mysqli_query($link,$sql);
								$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
								echo $row["landmass_gps"];
							?>
						</li>
						<li>
							<?php
								$link1 = mysqli_connect("localhost","root","123456","vegppm");
								mysqli_set_charset($link1,"utf8");
								$sql1 = "select * from landmass_area where landmass_gps = '清远市';";
								$result1 = mysqli_query($link1,$sql1);
								$row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);
								echo $row1["landtype"];
							?>
						</li>
						<li>
							<?php
								$link2 = mysqli_connect("localhost","root","123456","vegppm");
								mysqli_set_charset($link2,"utf8");
								$sql2 = "select * from landmass_area where landmass_gps = '清远市';";
								$result2 = mysqli_query($link2,$sql2);
								$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
								echo $row2["climate"];
							?>
						</li>
						<li>
							<?php
								$link3 = mysqli_connect("localhost","root","123456","vegppm");
								mysqli_set_charset($link3,"utf8");
								$sql3 = "select * from landmass_area where landmass_gps = '清远市';";
								$result3 = mysqli_query($link3,$sql3);
								$row3 = mysqli_fetch_array($result3,MYSQLI_ASSOC);
								echo $row3["plant_area"];
							?>
						</li>
						<li>
							<?php
								$link4 = mysqli_connect("localhost","root","123456","vegppm");
								mysqli_set_charset($link4,"utf8");
								$sql4 = "select * from landmass_area where landmass_gps = '清远市';";
								$result4 = mysqli_query($link4,$sql4);
								$row4 = mysqli_fetch_array($result4,MYSQLI_ASSOC);
								echo $row4["sown_area"];
							?>
						</li>
					</ul>
				</div>
				<div class="box_content">
					<div class="box_content_nav">
						<span><b id="navC0" class="nonce">区域分布</b></span>
						<span><b id="navC1">作物播种面积</b></span>
					</div>
					<div class="box_content_con" id="content_conC0" style="display:block;">
						<div class="box_content_con_tit">
							<p>
								<span style="background:#31CB17;">叶菜类</span>
								<span style="background:#B2FC0A;">瓜类</span>
								<span style="background:#BF3B08;">根茎类</span>
								<span style="background:#0A900A;">豆类</span>
								<span style="background:#5F556F;">葱蒜类</span>
								<span style="background:#642E05;">无作物</span>
							</p>
						</div>
						<div class="box_content_con_left">
							<ul>
								<li><h2>A区</h2></li>
								<li><h2>B区</h2></li>
								<li><h2>C区</h2></li>
								<li><h2>D区</h2></li>
								<li><h2>E区</h2></li>
							</ul>
						</div>
						<div class="box_content_con_right">
							<ul>
								<li onclick="onBtn(this)">
									<a href="#">清远市A01</a>
									<a href="#">无作物</a>
									<button class="nocrop">A01</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市A02</a>
									<a href="#">葱蒜类</a>
									<button class="onion">A02</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市A03</a>
									<a href="#">葱蒜类</a>
									<button class="onion">A03</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市A04</a>
									<a href="#">瓜类</a>
									<button class="melon">A04</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市A05</a>
									<a href="#">瓜类</a>
									<button class="melon">A05</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市B01</a>
									<a href="#">豆类</a>
									<button class="peas">B01</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市B02</a>
									<a href="#">无作物</a>
									<button class="nocrop">B02</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市B03</a>
									<a href="#">葱蒜类</a>
									<button class="onion">B03</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市B04</a>
									<a href="#">葱蒜类</a>
									<button class="onion">B04</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市B05</a>
									<a href="#">豆类</a>
									<button class="peas">B05</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市C01</a>
									<a href="#">豆类</a>
									<button class="peas">C01</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市C02</a>
									<a href="#">叶菜类</a>
									<button class="leafbgcolor">C02</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市C03</a>
									<a href="#">叶菜类</a>
									<button class="leafbgcolor">C03</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市C04</a>
									<a href="#">葱蒜类</a>
									<button class="onion">C04</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市C05</a>
									<a href="#">葱蒜类</a>
									<button class="onion">C05</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市D01</a>
									<a href="#">叶菜类</a>
									<button class="leafbgcolor">D01</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市D02</a>
									<a href="#">叶菜类</a>
									<button class="leafbgcolor">D02</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市D013</a>
									<a href="#">豆类</a>
									<button class="peas">D03</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市D04</a>
									<a href="#">无作物</a>
									<button class="nocrop">D04</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市D05</a>
									<a href="#">葱蒜类</a>
									<button class="onion">D05</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市E01</a>
									<a href="#">叶菜类</a>
									<button class="leafbgcolor">E01</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市E02</a>
									<a href="#">根茎类</a>
									<button class="rootbgcolor">E02</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市E03</a>
									<a href="#">豆类</a>
									<button class="peas">E03</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市E04</a>
									<a href="#">根茎类</a>
									<button class="rootbgcolor">E04</button>
								</li>
								<li onclick="onBtn(this)">
									<a href="#">清远市E05</a>
									<a href="#">无作物</a>
									<button class="nocrop">E05</button>
								</li>
							</ul>
						</div>
						
					</div>
					<div class="box_content_con" id="content_conC1" style="display:none;">
						<h2>蔬菜作物播种情况图(0.57亩=1%)</h2>
						<div class="content_con1">
							<div class="bar">
								<div id="bar12"></div>
								<div id="bar22"></div>
								<div id="bar32"></div>
								<div id="bar42"></div>
								<div id="bar52"></div>
								<div id="bar62"></div>
								<div id="bar72"></div>
								<div id="bar82"></div>
								<div id="bar92"></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<input type="text" id="landmass" name="landmass" value="">
			<input type="text" id="agrotype" name="agrotype" value="">
		</form>
	</div>


	<script src="js/region.js"></script>
	<script src="js/jqbar.js"></script>
</body>
</html>