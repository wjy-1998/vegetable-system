$(function(){
	$("#showSelect").click(function(){
		$("#hidli").css("display","block");
	});

	optLen = $("#showSelect>option").length;
	$("#showSelect>option").click(showSelectNav);
	function showSelectNav(){
		index = $(this).index();
		for(var i = 0;i < optLen;i++){
			if(i == index){
				$("#sel" + index).show();
			}else{
				$("#sel" + i).hide();
			}
		}
	}
});