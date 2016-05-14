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
		(".nav-wrapper").removeClass("fix-wrapper");
	 }
     if(ScrollTop==0){
		$(".nav-wrapper").removeClass("fix-wrapper");
    }
	
 });


/*Banner-1无缝滚动开始*/
  function bannerAuto($next , $prep , $span , $wrap , $box ){
	 // 下一张按钮  前一张按钮 底部按钮 图片盒子 外层盒子
    

	 var index=0;
	 var 
  
 }