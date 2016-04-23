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
	$(".details").stop().animate({height:"230px"}).find("li").eq($(this).index()).show().siblings().hide();
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
		$(".details").stop().animate({height:"0px"}).find("li").hide();
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

/*var oTimer=null;
oTimer=setInterval(function(){$(".arrowBtn-right").trigger("click")},2000);
$(".banner-wrap").hover(function(){
	clearInterval(oTimer);
	$(".arrowBtn-left,.arrowBtn-right").show();
},function(){
	$(".arrowBtn-left,.arrowBtn-right").hide();
	oTimer=setInterval(function(){$(".arrowBtn-right").trigger("click")},2000);
})

var _index=0;
$(".arrowBtn-right").click(function(){
	_index++;
	if (_index==$(".banner-wrap-pic li").size()) {
		_index=0;
	};
	fnDo();
});

$(".arrowBtn-left").click(function(){
	_index--;
	if (_index<0) {
		_index=$(".banner-wrap-pic li").size()-1;
	};
	fnDo();
});

function fnDo(){
	$(".banner-wrap-pic li").css("left","0px").eq(_index).fadeIn().siblings().fadeOut();
	$(".bBtn").find("li").eq(_index).addClass("active").siblings().removeClass("active");
}

$(".bBtn").find("li").click(function(){
	if (_index != $(this).index()) {
		var oneWidth=$(".banner-wrap-pic li").width();
		var m = _index - $(this).index()>0 || -1;
		$(".banner-wrap-pic li").eq(_index).animate({left:m*oneWidth},function(){ $(this).hide();
		}).end().eq($(this).index()).show().css("left",-m*oneWidth).animate({left:0});
		_index=$(this).index();
		$(this).addClass("active").siblings().removeClass("active");
	};
});*/


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

$(".star-goods .more").find("a").click(function(){
	if ($(this).not(".disClick")) {
		$(".star-goods-wrap").find("ul").css("margin-left",-1240*$(this).index()+"px");
		$(this).addClass("disClick").siblings().removeClass("disClick");
	};
})


function fnTab(objLi,objUl){
	objLi.mouseover(function(){
		objUl.eq($(this).index()).show().siblings().hide();
		$(this).addClass("active").siblings().removeClass("active");
	})
}

fnTab($("#match .topic .more li"),$("#match .content-right ul"));
fnTab($("#parts .topic .more li"),$("#parts .content-right ul"));
fnTab($("#around .topic .more li"),$("#around .content-right ul"));


function changeHight(oLi,oDiv){
	oLi.hover(function(){
		$(this).find(oDiv).css("height","80px");
	},function(){
		$(this).find(oDiv).css("height","0px");
	});
}
changeHight($("#match .content-right li"),".comment");
changeHight($("#parts .content-right li"),".comment");
changeHight($("#around .content-right li"),".comment");


/*var iCount=0;
$("#recommend .more a").eq(1).click(function(){
	iCount++;
	if(iCount>0){
	  $("#recommend .more a").removeClass("disClick");
	}
	if(iCount==3){
		$(this).addClass("disClick").siblings().removeClass("disClick");
	}
	else if(iCount>3){
		iCount=3;
		return;
	}
	$("#recommend").find("ul").css("left",-1240*iCount+"px");
})

$("#recommend .more a").eq(0).click(function(){
	iCount--;
	if(iCount<0){
		iCount=0;
		return;
	}
	else if(iCount==0){
		$(this).addClass("disClick").siblings().removeClass("disClick");
	}
	if(iCount>0){
		$("#recommend .more a").removeClass("disClick");
	}
	$("#recommend").find("ul").css("left",-1240*iCount+"px");
})*/

var iCount=0;
$("#recommend .more a").eq(1).click(function(){
	if(iCount<3){
		iCount++;
		$("#recommend .more a").removeClass("disClick");
		iCount==3 && $(this).addClass("disClick");
		$("#recommend").find("ul").css("left",-1240*iCount+"px");
	}
})

$("#recommend .more a").eq(0).click(function(){
	if(iCount>0){
		iCount--;
		$("#recommend .more a").removeClass("disClick");
		iCount==0 && $(this).addClass("disClick");
		$("#recommend").find("ul").css("left",-1240*iCount+"px");
	}
})


$("#content").find(".content-item").each(function(i,elem){
	(function (obj){
		var iNum=0;
		obj.find(".nextBtn").click(function(){
			if(iNum<3){
				iNum++;
				fntab();
			}
		})
		obj.find(".prevBtn").click(function(){
			if(iNum>0){
				iNum--;
				fntab();
			}
		})

		obj.find(".dotBtn").find("li").click(function(){
			iNum=$(this).index();
			fntab();
		})

		function fntab(){
			obj.find(".content-scroll").css("left",-296*iNum+"px");
			obj.find(".dotBtn").find("li").eq(iNum).addClass("on").siblings().removeClass("on");
		}
	})($(elem));
});
