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
      //  alert(nowTime,new Date());
		if(new Date()-nowTime>500){
			nowTime=new Date();
			
			var arrIndex = $(this).index();
			if(arrIndex==2){
				index++;
			}else if(arrIndex==1){
				index--;
			}
			//alert(index);
			$(".index-slide .swiper-wrapper").animate({
				marginLeft: -index*$slide.width()+'px'
				},1000,function(){
					if(index==$slide.length-1){
					    index = 1;
						$(".swiper-wrapper").css("marginLeft",-$slide.width()+'px');
					}else if(index == 0){
						index=$slide.length-2;
						$(".swiper-wrapper").css("marginLeft",-index*$slide.width()+'px')
					}
				})
		}	
	});

    $(".pagination span").mouseover(function(){
		
		index = $(this).index()-1;
		var $span = $("span");
		
		if ( index >= $span.length )
			{
				$span.eq(0).addClass('swiper-pagination-color').siblings().removeClass('swiper-pagination-color');
			}else if ( index < 0 )
			{
				$span.eq($span.length-1).addClass('swiper-pagination-color').siblings().removeClass('swiper-pagination-color');
			}else{
				$span.eq(index).addClass('swiper-pagination-color').siblings().removeClass('swiper-pagination-color');
			}
	  
	});

