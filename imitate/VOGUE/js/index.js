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

/*������*/
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

//����һֱ�������������
  $(window).scroll(function(){
	 var ScrollTop=$(window).scrollTop();//��ȡ����������ĸ߶�

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


/*Banner-1�޷������ʼ*/
  function bannerAuto($next , $prep , $span , $wrap , $box ){
	 // ��һ�Ű�ť  ǰһ�Ű�ť �ײ���ť ͼƬ���� ������
    

	 var index=0;
	 var 
  
 }