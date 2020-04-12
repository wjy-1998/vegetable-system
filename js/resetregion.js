$(function(){
	var area = document.getElementById("area").value;
	var landid = document.getElementById("landid").value;
	var arealand = document.getElementById("arealand").value;
	var cropt = document.getElementById("cropt").value;
	var are1 = "阳江市";
	var are2 = "潮州市";
	var are3 = "清远市";
	if(area == are1){
		var btn = $("#content_con0>.box_content_con_right>ul>li").children("button");
		$.each(btn,function(index){
			var btn1 = btn[index].value;
			if(landid == btn1){
				var e = $(this).prev().text(); //获取同级元素中前一个元素的值
				e = cropt;
				var yecai = "叶菜类";
				var genjin = "根茎类";
				var dou = "豆类";
				var suan = "葱蒜类";
				var gua = "瓜类";
				var nocrop = "无作物";
				if(e == yecai){
					$(this).parent().find("button").css("background","#31CB17");
				}
				if(e == genjin){
					$(this).parent().find("button").css("background","#BF3B08");
				}
				if(e == dou){
					$(this).parent().find("button").css("background","#0A900A");
				}
				if(e == suan){
					$(this).parent().find("button").css("background","#5F556F");
				}
				if(e == gua){
					$(this).parent().find("button").css("background","#B2FC0A");
				}
				if(e == nocrop){
					$(this).parent().find("button").css("background","#642E05");
				}
			}
		});
	}

	if(area == are2){
		var btn = $("#content_conB0>.box_content_con_right>ul>li").children("button");
		$.each(btn,function(index){
			var btn1 = btn[index].value;
			if(landid == btn1){
				var e = $(this).prev().text(); //获取同级元素中前一个元素的值
				e = cropt;
				var yecai = "叶菜类";
				var genjin = "根茎类";
				var dou = "豆类";
				var suan = "葱蒜类";
				var gua = "瓜类";
				var nocrop = "无作物";
				if(e == yecai){
					$(this).parent().find("button").css("background","#31CB17");
				}
				if(e == genjin){
					$(this).parent().find("button").css("background","#BF3B08");
				}
				if(e == dou){
					$(this).parent().find("button").css("background","#0A900A");
				}
				if(e == suan){
					$(this).parent().find("button").css("background","#5F556F");
				}
				if(e == gua){
					$(this).parent().find("button").css("background","#B2FC0A");
				}
				if(e == nocrop){
					$(this).parent().find("button").css("background","#642E05");
				}
			}
		});
	}

	if(area == are3){
		var btn = $("#content_conC0>.box_content_con_right>ul>li").children("button");
		$.each(btn,function(index){
			var btn = btn[index].value;
			if(landid == btn3){
				var t = $(this).prev().text(); //获取同级元素中前一个元素的值
				t = cropt;
				var yecai = "叶菜类";
				var genjin = "根茎类";
				var dou = "豆类";
				var suan = "葱蒜类";
				var gua = "瓜类";
				var nocrop = "无作物";
				if(t == yecai){
					$(this).parent().find("button").css("background","#31CB17");
				}
				if(t == genjin){
					$(this).parent().find("button").css("background","#BF3B08");
				}
				if(t == dou){
					$(this).parent().find("button").css("background","#0A900A");
				}
				if(t == suan){
					$(this).parent().find("button").css("background","#5F556F");
				}
				if(t == gua){
					$(this).parent().find("button").css("background","#B2FC0A");
				}
				if(t == nocrop){
					$(this).parent().find("button").css("background","#642E05");
				}
			}
		});
	}
});