$(function(){
	$("#top_right_pic").click(function(){
		$(".top_right_list").css("display","block");
	});

	top_nav_len = $(".top_right_list>ul>li").length;
	$(".top_right_list>ul>li").click(showTopNav);
	function showTopNav(){
		index = $(this).index();
		for(var i = 0;i < top_nav_len;i++){
			if(i == index){
				$("#box" + index).show();

				$(".top_right_list").css("display","none");
			}else{
				$("#box" + i).hide();
			}
		}
	}

	//第一个Box
	nav_len = $(".box_content_nav>span").length;
	//console.log(nav_len);
	$(".box_content_nav>span").click(showNav);
	function showNav(){
		index = $(this).index();
		//console.log(index);
		for(var i = 0;i < nav_len;i++){
			if(i == index){
				$("#nav" + index).addClass("nonce");
				$("#content_con" + index).show();
			}else{
				$("#nav" + i).removeClass("nonce");
				$("#content_con" + i).hide();
			}
		}
	}

	//第二个Box
	nav_len1 = $(".box_content_nav>span").length;
	//console.log(nav_len);
	$(".box_content_nav>span").click(showNav1);
	function showNav1(){
		index = $(this).index();
		//console.log(index);
		for(var i = 0;i < nav_len1;i++){
			if(i == index){
				$("#navB" + index).addClass("nonce");
				$("#content_conB" + index).show();
			}else{
				$("#navB" + i).removeClass("nonce");
				$("#content_conB" + i).hide();
			}
		}
	}

	//第三个Box
	nav_len2 = $(".box_content_nav>span").length;
	//console.log(nav_len);
	$(".box_content_nav>span").click(showNav2);
	function showNav2(){
		index = $(this).index();
		//console.log(index);
		for(var i = 0;i < nav_len2;i++){
			if(i == index){
				$("#navC" + index).addClass("nonce");
				$("#content_conC" + index).show();
			}else{
				$("#navC" + i).removeClass("nonce");
				$("#content_conC" + i).hide();
			}
		}
	}

	$("#nav1").click(verBar);
	function verBar(){
		$('#bar1').jqbar({ label: '大白菜',barColor:'#1FCB1F',value:70,  orientation: 'v' });
		$('#bar2').jqbar({ label: '生菜', barColor: '#5DED0F', value: 88, orientation: 'v' });
		$('#bar3').jqbar({ label: '麦菜', barColor: '#347E0A', value: 55, orientation: 'v' });
		$('#bar4').jqbar({ label: '蒜苗', barColor: '#6C5F5F', value: 33, orientation: 'v' });
		$('#bar5').jqbar({ label: '土豆', barColor: '#F07E1C', value: 68, orientation: 'v' });
		$('#bar6').jqbar({ label: '大蒜', barColor: '#919191', value: 80, orientation: 'v' });
		$('#bar7').jqbar({ label: '萝卜', barColor: '#F2631D', value: 49, orientation: 'v' });
		$('#bar8').jqbar({ label: '青瓜', barColor: '#B7F234',value:66,  orientation: 'v' });
		$('#bar9').jqbar({ label: '豌豆', barColor: '#2EA52E', value: 78, orientation: 'v' });
	}

	$("#navB1").click(verBar1);
	function verBar1(){
		$('#bar11').jqbar({ label: '菠菜', barColor:'#1FCB1F', 	value:20,  orientation: 'v' });
		$('#bar21').jqbar({ label: '菜心', barColor: '#5DED0F', value:38, orientation: 'v' });
		$('#bar31').jqbar({ label: '蚕豆', barColor: '#347E0A', value:85, orientation: 'v' });
		$('#bar41').jqbar({ label: '蒜苗', barColor: '#EA805C', value:30, orientation: 'v' });
		$('#bar51').jqbar({ label: '土豆', barColor: '#C9B70D', value:58, orientation: 'v' });
		$('#bar61').jqbar({ label: '大蒜', barColor: '#919191', value:18, orientation: 'v' });
		$('#bar71').jqbar({ label: '豌豆', barColor: '#3885C3', value:69, orientation: 'v' });
		$('#bar81').jqbar({ label: '青瓜', barColor: '#1F4D05',	value:46,  orientation: 'v' });
		$('#bar91').jqbar({ label: '萝卜', barColor: '#F2631D', value:28, orientation: 'v' });
	}

	$("#navC1").click(verBar2);
	function verBar2(){
		$('#bar12').jqbar({ label: '大蒜', barColor:'#919191',	value:87,  orientation: 'v' });
		$('#bar22').jqbar({ label: '麦菜', barColor: '#5DED0F', value:68, orientation: 'v' });
		$('#bar32').jqbar({ label: '蚕豆', barColor: '#347E0A', value:45, orientation: 'v' });
		$('#bar42').jqbar({ label: '蒜苗', barColor: '#EA805C', value:97, orientation: 'v' });
		$('#bar52').jqbar({ label: '土豆', barColor: '#C9B70D', value:28, orientation: 'v' });
		$('#bar62').jqbar({ label: '菠菜', barColor: '#1FCB1F', value:50, orientation: 'v' });
		$('#bar72').jqbar({ label: '萝卜', barColor: '#F2631D', value:22, orientation: 'v' });
		$('#bar82').jqbar({ label: '青瓜', barColor: '#1F4D05',	value:26,  orientation: 'v' });
		$('#bar92').jqbar({ label: '豌豆', barColor: '#3885C3', value:48, orientation: 'v' });
	}

});
	/*区块*/
	function onBtn(e){
		var childs = e.childNodes;
		var landmass = document.getElementById("landmass"); //地块名
		var agrotype = document.getElementById("agrotype"); //作物类别
		var area = document.getElementById("area"); 
		landmass.value = childs[1].innerHTML;
		agrotype.value = childs[3].innerHTML;
	}

	

