/*qqke首页的js*/
/*var flag = true;/*延时加载标识/
var index = 0;/*banner图索引/
var timer;/*定时器引用变量*/
var _index=0;
var _qindex=0;
var clesrTime=null;
var topFlag= true;/*回到顶部标识*/


   /*课程导航右侧图标变换样式 */
  $(".big-banner-ul ul li").hover(function(){
      $(this).find("i").css("backgroundPosition","-157px -163px");
  },function(){
      $(this).find("i").css("backgroundPosition","-147px -163px")
  })



  /*课程导航右侧菜单显示 */
  $(".course-li").hover(function(){
      $(this).find(".course-list").fadeIn("slow").show();
  },function(){
	  $("course-list").stop();
	  $(this).find(".course-list").fadeOut("slow").hide();
  })




  /*banner轮播图特效*/
  $("#ban-nav li,.ban-next,.ban-pre").mouseover(function(){
    clearInterval(clearTime);
	_index=$(this).index();//获取序列号
	scrollPlay();//调用播放方法
	_qindex=_index;//把当前的值赋作为下一次的前一个序列号

}).mouseout(function(){
	autoPlay();
});


//右切换按扭
$(".ban-next").click(function(){
  _index++;
  if(_index>4){
    _index=0;
	_qindex=4;
  }
  scrollplay();
  _qindex=_index;
});


//右切换按扭
$(".ban-pre").click(function(){
    _index--;
	if(_index<0){
		_qindex=0;

		_index=4;
	}
	scrollPlay();
	_qindex=_index;
});
autoPlay();//一开始就要自动轮播


//按扭显示隐藏
$(".big-banner-img").hover(function(){
	//显示
	$(".ban-pre,.ban-next").show();
},function(){
	//隐藏
	$(".ban-pre,.ban-next").hide();
});




//自动轮播
function autoPlay(){
	clearTime=setInterval(function(){
		_index++;//序列号加1

		if(_index>4){
			_index=0;
			_qindex=4;
		}
		scrollPlay();
		_qindex=_index;

	},5000);


}
function scrollPlay(){
  $("#ban-nav").eq(_index).css("backgroundPosition","-74px -116px");
  if(_index==0 && _qindex==4){
    scroll();
	}else if(_index==4 && _qindex==0){
		scroll();
	}else if(_index>_qindex){//左移
		scroll();
	}else if(_index<_qindex){//往右移
		scroll();
	
  }
}


//下一张，左移
function scroll(){
   $("#ban-nav li").eq(_index).css("backgroundPosition","-74px -116px");
   $("#ban-nav li").eq(_index).siblings().css("backgroundPosition","-87px -116px");
   var background=$("#ban-nav li").eq(_index).data("color");
   $("#ban-ul a").stop();
   $("#ban-ul a:visible").hide();
   $("#ban-ul li").eq(_index).find("a").fadeIn("slow").show();
   $(".big-bg").css("background",background);
  
}


/*微信二维码显示*/
$("#board-qr,.weixin").hover(function(){
    $(this).find("img").fadeTo("500",1);
    },function(){       
        $(this).find("img").animate({
        opacity: "hide"
    },"500");
})
   

/*热门课程导航效果*/
$(".course-hot-nav li").hover(function(){
   $(this).css("borderBottom","2px solid #188eee").siblings().css("borderBottom","0px");
   if($(this).is($("#video").parents("li"))){
      $(this).find("i").css("backgroundPosition","-49px -78px");
   }else{
      $("#video").css("backgroundPosition","-49px -99px");
   }
      $(".course-hot-nav ul a").css("color","#333");
      $(this).find("a").css("color","#188eee");
})

 /* /*初始化banner自动切换/
   $("#ban-nav li").eq(0).css("backgroundPosition","-74px -116px");
   loop_banner_change();


   /*banner图滑动触发左右按钮显示 /
   $("#ban-ul li").hover(function(){
       $(".ban-pre,.ban-next").show();
       /*清除自动切换图片/
       if(timer){
          clearInterval(timer);
       }
    },function(){
       $(".ban-pre,.ban-next").hide();
       /*启动自动切换图片/
       loop_banner_change();
    })
   

  

   /*banner图左侧按钮滑动变换样式 /
   $(".ban-pre").hover(function(){
      $(".ban-pre,.ban-next").show();
      $(this).css("backgroundPosition","-172px 0");
      if(timer){
         clearInterval(timer);
      }
    },function(){
      $(this).css("backgroundPosition","-74px 0");
    })
   /*banner图右侧按钮滑动变换样式 /
   $(".ban-next").hover(function(){
      $(".ban-pre,.ban-next").show();
      $(this).css("backgroundPosition","0 -57px");
      if(timer){
         clearInterval(timer);
      }
    },function(){
      $(this).css("backgroundPosition","-123px 0");
    })
	

	/*banner图底部按钮触发保持左右侧按钮显示 /
    $("#ban-nav").hover(function(){
       $(".ban-pre,.ban-next").show();
       if(timer){
         clearInterval(timer);
       }
    })


	/*banner图右侧按钮点击切换banner图/
    $(".ban-next").click(function(){
       if(flag){
       flag=false;
       if(index<$("#ban-nav li").length-1){
          index++;
        }else{
            index = 0;
        }           
       banner_change(index);
       timeout();
	   }                  
    })


    /*banner图底部按钮滑动触发切换效果 
    $("#ban-nav li").mouseover(function(){
      $(this).css("backgroundPosition","-74px -116px").siblings().css("backgroundPosition","-87px -116px");
      var _index=$(this).index();
      var background=$(this).data("color");
      $("#ban-ul a").stop();
      $("#ban-ul a:visible").hide();
      $("#ban-ul li").eq(_index).find("a").fadeIn("slow").show();
      $(".big-bg").css("background",background);
         index = _index;
    })



	

})



 /*自动定时切换banner图
 function loop_banner_change(){
    timer = setInterval(function(){
        $(".ban-next").trigger("click");
    },5000);
}
    
/*切换banner图特效
function banner_change(index){
   $("#ban-nav li").eq(index).css("backgroundPosition","-74px -116px");
   $("#ban-nav li").eq(index).siblings().css("backgroundPosition","-87px -116px");
   var background=$("#ban-nav li").eq(index).data("color");
   $("#ban-ul a").stop();
   $("#ban-ul a:visible").hide();
   $("#ban-ul li").eq(index).find("a").fadeIn("slow").show();
   $(".big-bg").css("background",background);
}

/*延时加载
function timeout(){
  var setTimer = setTimeout(function(){
    flag = true;
    clearTimeout(setTimer);
    },1000);
}
*/