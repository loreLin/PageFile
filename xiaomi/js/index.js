/*首页的js*/
$("#header").find(".txt").focus(function(){  //获取焦点
	$(".header-form").find(".datalist").show();

	
});

$("#header").find(".txt").blur(function(){  //失去焦点
	$(".header-form").find(".datalist").hide();
});



var timer=null;
$(".header-nav li").not(".noselect").hover(function(){	
	clearInterval(timer);  
	$(".details").animate({height:"230px"}).find("li").eq($(this).index()).show().siblings().hide();
},function(){
	fnHide();
});

$(".details li").hover(function(){
	clearInterval(timer);
},function(){
	fnHide();
});

function fnHide(){
	timer=setTimeout(function(){
		$(".details").animate({height:"0px"}).find("li").hide();
	},200);
};
/*移入的时候清楚延迟消失的定时器*/
/*var timer=null;
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
};*/

/*banner-nav */
$(".banner-aside .topic").hover(function(){
	$(this).find(".children-list").show();
},function(){
	$(this).find(".children-list").hide();
})



/*banner*/
var oTimer=null;
$("#banner .banner-wrap").hover(function(){
	clearInterval(oTimer);
	$("#banner .banner-wrap .btnLeft,#banner .banner-wrap .btnRight").show();
},function(){
	$("#banner .banner-wrap .btnLeft,#banner .banner-wrap .btnRight").hide();
	oTimer=setInterval(fnNext,2000);
})

var _index=0;
$("#banner .banner-wrap .btnRight").click(function(){
	fnNext();
})

$("#banner .banner-wrap .btnLeft").click(function(){
	_index--;
	if (_index<0) {
		_index=$(".banner-wrap-pic li").size()-1;
	};
	fnDo();
})

oTimer=setInterval(fnNext,2000);

function fnNext(){
	_index++;
	if (_index==$(".banner-wrap-pic li").size()) {
		_index=0;
	};
	fnDo();
}

function fnDo(){
	$(".banner-wrap-pic li").css("left","0px").eq(_index).fadeIn().siblings().fadeOut();
	$(".banner-wrap ol li").eq(_index).addClass("active").siblings().removeClass("active");
}

$(".banner-wrap ol li").click(function(){
	if (_index!=$(this).index()) {
		var oneWidth=$(".banner-wrap-pic li").width();
		var m=_index>$(this).index()?-1:1;
		$(".banner-wrap-pic li").eq(_index).animate({left:-m*oneWidth},function(){$(this).hide();
		}).end().eq($(this).index()).show().css("left",m*oneWidth).animate({left:0});
		_index=$(this).index();
		$(this).addClass("active").siblings().removeClass("active");
	};
})

$(".more").find("a").click(function(){
	if ($(this).not(".disClick")) {
		$(".star-goods-wrap").find("ul").css("margin-left",-1240*$(this).index()+"px");
		$(this).addClass("disClick").siblings().removeClass("disClick");
	};
})