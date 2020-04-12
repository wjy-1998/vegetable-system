/*图片轮播*/
$(document).ready(function(){
	var liLength = $(".content_function_pic>ul>li").length;
	var sHeight = $(".content_function_pic").height();
	$(".content_function_pic>ul").css("height",liLength*sHeight);
	//当前Li的索引值
	var index = 0;

	/*轮播计时事件*/
	//当前ul的值
	var nowTop = null;
	var stop_pic = "";
	$(".content_function_pic").hover(function(){
		clearInterval(stop_pic);
	},function(){
		stop_pic = setInterval(function(){
			if(index < liLength){
				autoScoll_pic(index);
				++index;
			}else{
				nowTop += 200;
				$(".content_function_pic>ul").stop(true,false).animate({marginTop:nowTop},1300);
				if(nowTop > -1){
					index = 0;
				}
			}
		},2500);
	}).trigger("mouseleave");

	//添加动画效果
	function autoScoll_pic(index){
		nowTop = -(index*sHeight);
		$(".content_function_pic>ul").stop(true,false).animate({
			marginTop:nowTop,
		},1200);
	} 

});

/*公告栏*/
var notice = document.getElementById("content_function_notice_box_con");
var notice_box_con1 = document.getElementById("content_function_notice_box_con1");
var notice_box_con2 = document.getElementById("content_function_notice_box_con2");
notice_box_con2.innerHTML = notice_box_con1.innerHTML;
//定义一个计时事件初始值
var stop_notice = "";
function autoScoll_notice(){
	//播放完重新恢复到初始值
	if(notice_box_con1.offsetWidth == notice.scrollLeft){
		notice.scrollLeft = 0;
	}else{
		++notice.scrollLeft;
	}
} 
//计时事件不断刷新notice_box_con的值
stop_notice = setInterval(autoScoll_notice,70);
//悬停清除计时事件
notice.onmouseover = function(){
	clearInterval(stop_notice);
}
//继续计时事件
notice.onmouseout = function(){
	stop_notice = setInterval(autoScoll_notice,70);
}