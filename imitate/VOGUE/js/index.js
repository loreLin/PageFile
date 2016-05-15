  var _index = 0;
  var nowTime=new Date();
/*$("#header .nav ul li").hover(function(){
   _index = $(this).index();
   if(_index != 0)$("#header .sub-item").eq(_index-1).css("display","block");
},function(){
   $("#header .sub-item").eq(_index-1).css("display","none");
});*/

   $("#header .nav ul li").mouseover(function(){
		if(new Date()-nowTime>200){
			nowTime=new Date();
			index1 = $(this).index();
			//alert(index1);
			if(index1 !=0)$("#header .sub-item").eq(index1-1).stop().slideDown(100);
		}
	});

   $("#header .nav ul li").mouseout(function(){
		index1 = $(this).index();
		//alert(index1);
		if(index1 !=0)$("#header .sub-item").eq(index1-1).stop().slideUp(50);
   });
	
   $("#header .sub-item").mouseenter(function(){
		$(this).stop();
	}).mouseleave(function(){
		$(this).slideUp(50);
   });

/*吸顶盒*/
/*var lastScrollTop = $(window).scrollTop();
$(document).scroll(function(){
   var ScrollTop = $(window).scrollTop();
   if(ScrollTop-lastScrollTop<0){
      $(".nav-wrapper").addClass("fix-wrapper");
   }else{
	  $(".nav-wrapper").removeClass("fix-wrapper");
   }
   if(ScrollTop==0){
		$(".nav-wrapper").removeClass("fix-wrapper");
   }
	lastScrollTop = $(window).scrollTop();
});
*/

//导航一直处于浏览器顶部
  $(window).scroll(function(){
	 var ScrollTop=$(window).scrollTop();//获取浏览器滚动的高度

	 var _height=$("#TopMain").height();
	 if(ScrollTop >= _height){
		$(".nav-wrapper").addClass("fix-wrapper");
	 }else{
		$(".nav-wrapper").removeClass("fix-wrapper");
	 }
     if(ScrollTop==0){
		$(".nav-wrapper").removeClass("fix-wrapper");
    }
	
 });


/*Banner-1无缝滚动*/
	var index=1;
	var $slide=$(".index-slide .swiper-slide");
	
	$(".main .arrow").click(function(){
		if(new Date()-nowTime>1000){
			nowTime=new Date();
		
			var arrIndex =$(this).index();
			//alert(arrIndex)
			if(arrIndex==2){
				index++;
			}else{
				index--;	
			}
			$(".swiper-wrapper").animate({
				marginLeft: -index*$slide.width()+'px'
				},1000,function(){
					if(index==$slide.length-1){
					    index = 1;
						$(".swiper-wrapper").css("marginLeft",-$slide.width()+'px');
					}else if(index ==0){
						index=$slide.length-2;
						$(".swiper-wrapper").css("marginLeft",-index*$slide.width()+'px')
					}
				})
		}	
	});


/*var nindex = 0;
var qindex = 0;
var clearTime = null;
var $slide = $(".swiper-slide");
alert($slide.width());
$(".pagination span").mouseover(function(){
   clearInterval(clearTime);
   nindex=$(this).index();
   scrollPlay();
   qindex=nindex;
}).mouseout(function(){
   autoPlay();
});

//左切换按扭
$("pre-arrow").click(function(){
   nindex--;
   if(nindex<0){
     qindex=0;

	 nindex=8;
   }
   scrollPlay();
   qindex=nindex;
});

//右切换按扭
$(".next-arrow").click(function(){
	_index++;//序列号加1
	if(_index>8){
		_index=0;
		_qindex=8;
	}
	scrollPlay();
	_qindex=_index;

});


autoPlay();//一开始就要自动轮播
//自动轮播
function autoPlay(){
	clearTime=setInterval(function(){
		nindex++;//序列号加1

		if(nindex=>10){
			nindex=0;
			qindex=8;
		}
		scrollPlay();
		qindex=nindex;

	},2000);

};
function scrollPlay(){
	if(nindex==0 && qindex==8){
		next();
	}else if(nindex==8 && qindex==0){
		prev();
	}else if(nindex>qindex){//左移
		next();
	}else if(nindex<qindex){//往右移
		prev();
	}

}

//下一张，左移
function next(){
	 $(".swiper-wrapper").css("marginLeft",-$slide.width()+'px')
};

//上一张 ，右移
function prev(){
	 $(".swiper-wrapper").css("marginLeft",$slide.width()+'px')
};*/
