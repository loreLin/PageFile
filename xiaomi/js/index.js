/*首页的js*/
$("#header").find(".txt").focus(function(){  //获取焦点
	$(".header-form").find(".datalist").show();

	
});

$("#header").find(".txt").blur(function(){  //失去焦点
	$(".header-form").find(".datalist").hide();
});



var timer=null;
$(".header-nav li").hover(function(){	
	clearInterval(timer);
	$(".details li").eq($(this).index()).stop().animate({height:"210px"}).siblings().css("height","0px");
},function(){
	fnHide();
});

$(".details li").hover(function(){
	clearInterval(timer);
	$(this).animate({height:"210px"}).siblings().css("height","0px");
},function(){
	fnHide();
});

function fnHide(){
	timer=setTimeout(function(){
		$(".details li").css("height","0px");
	},200);
};