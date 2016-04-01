<!doctype html>
<html>
<head>
<link rel="icon" href="myico.ico" type="image/x-icon">
<link rel="shortcut icon" href="image/mylogo.png" type="image/x-icon">
<link href="Style.css" rel="stylesheet" type="text/css">
<meta charset="gb2312">
<title>保存旅行的回忆::美食</title>
<style>
#box{height:100%;}
#pic{height:200px;margin:40px auto;
			position:relative;-webkit-transform-style:preserve-3d;
			-webkit-perspective:800px;}
#pic img{width:300px;height:200px;position:absolute;
			      -webkit-transition:.6s;}
#pic .now{transform:translateZ(100px);}
#pic .front{transform:rotateY(45deg) translateZ(-100px);}
#pic .back{transform:rotateY(-45deg) translateZ(-100px);}
		
	</style>
</head>

<body class="my space-course">
<div id="header">
<div id="nav" class="container">
<div id="title">旅行回忆<span class="entitle"><br>Travel memories</span></div>
<ul id="nav-item" class="l">
<li><a href="index.php" class="havborder">美景</a><span class="smalentitle">beauty</span></li>
<li><a href="delicious.php" class="havborder">美食</a><span class="smalentitle"> delicious</span></li>
<li><a href="custom.php" class="havborder">风俗</a><span class="smalentitle_">custom</span></li>
<li><a href="talking.php" class="havborder">讨论</a><span class="smalentitle_">Talking</span></li>
<li><a href="about.php">关于</a><span class="smalentitle_">About</span></li>
</ul>
<?php
session_start();	/*开启 session */
$link=mysql_connect("localhost",'root','') or die('连接失败');/*连接数据库*/
mysql_select_db('travelmemo',$link) or die('选择数据库失败');	/*选择数据库*/
mysql_query("SET NAMES gb2312");			/*修改字符集*/
$uname = isset($_SESSION['uname']) ? $_SESSION['uname'] : '';
$s_username = "select nickName from userinfo where userName='$uname'";		/*查询用户名*/
$s_result_uname = mysql_query($s_username);		/*用户名查询*/
$s_row_uname = mysql_fetch_array($s_result_uname);
	
if(!isset($_SESSION['isLogin']))	/*用户未登录*/
{
	echo "<div id='login-area'>";
	echo "<ul id='login-item'>";
	echo "<li><a href='register.php' class='havborder_login'>注册</a><span class='smalentitle_login'>Register</span></li>";
	echo "<li><form id='myForm' method='post' action='login.php'>";
	echo "<label>用户名：<input type='text' name='userName' size='12'></label>";
	echo "<label>密  码：<input type='password' name='passWord' size='12'></label>";
	echo "<div id='submit'><input type='submit' name='submit' value='登录'></div>"; 
	echo "</form></li>";
	echo "</ul>";
	echo "</div>";
}
else	/*用户已登录*/
{
	$myname = "hello";
	echo "<div id='login-area'>";
	echo "<ul id='login-item'>";
	echo "<table id='myInfo'>";
	echo "<tr>";
	echo "<td width='75px' height='54px' rowspan='2'><img width='45' height='45' src='image/userInfo/picture.jpg'></td>";
	echo "<td width='100px'><a href='#'>$myname</a></td>";
	echo "<td width='100px'><a href='#'>个人中心</a></td>";
	echo "<td rowspan='2'><a href='out.php'>退出</a></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><a href='#'>".$_SESSION['s_row_level']."</a></td>";
	echo "<td><a href='#'>积分:</a></td>";
	echo "</tr>";
	echo "</table>";
	echo "</div>";
}
?>
</div>
</div>

<div id="body">


<div id="box">
		<div id="pic">
			<img src="image/js/d1.jpg" />
			<img src="image/js/d2.jpg" />
			<img src="image/js/d3.jpg" />
			<img src="image/js/d4.jpg" />
			<img src="image/js/d5.jpg" />
			<img src="image/js/d6.jpg" />
			<img src="image/js/d7.jpg" />
			<img src="image/js/d8.jpg" />
			<img src="image/js/d9.jpg" />
			
		</div>
	</div>
	

	<script src="js/jquery.js"></script>
	<script>
		var imgLen = $("img").length;
		var lastIndex = Math.floor(imgLen/2); //初始中间图片序列号
		var imgLeft = [];

//为每个img添加初始命名
		for(var i=0;i<imgLen;i++){
			if(i<lastIndex){
				$("img").eq(i).addClass("front");
			}else if(i>lastIndex){
				$("img").eq(i).addClass("back");
			}else{
				$("img").eq(i).addClass("now");
			};
		};
		
//当前图片页面居中左右排开函数
		function mid(){
			var oWid = $(window).width();//窗口宽度
			var mIndex = $(".now").index();//当前图片序列号
			$(".now").css("left",oWid/2-150+'px');//当前图片位置居中
			//左右图片排开，再获取每个图片的left数值
			for(var i=0;i<imgLen;i++){
				$("img").eq(i).css("left",oWid/2-150-100*(mIndex-i)+'px');
				imgLeft[i] = parseInt($("img").eq(i).css("left"));
			}
		};
		mid();//执行
		$(window).resize(function(){mid()});//调整窗口时再执行

//点击事件
		$("img").click(function(){
			var nowIndex = $(this).index();
			//所有图片位置移动
			for(var i=0;i<imgLen;i++){
				imgLeft[i] -= 100*(nowIndex-lastIndex);
				$("img").eq(i).css("left",imgLeft[i]);
			};
	
			for(var i=0;i<imgLen;i++){
				if(i<nowIndex){
					$("img").eq(i).removeClass().addClass("front");
				}else if(i>nowIndex){
					$("img").eq(i).removeClass().addClass("back");
				};
			};

			lastIndex = nowIndex;//替换当前图片序列号
			//当前图片添加类名now
			$(this).removeClass().addClass("now").siblings().removeClass("now");
		});

	</script>
<div id="content">
<div id="firstTitle">
<div id="foodMap">各地美食</div>
<ul id="myButton_">
<a href="#guilin"><li>桂林米粉</li></a>
<a href="#fujian"><li>土笋冻</li></a>
<a href="#yunnan"><li>过桥米线</li></a>
<a href="#guangdong"><li>蜜汁叉烧</li></a>

</ul>
</div>
<div id="details">
<div id="guiling">
<img src="image/guilin.jpg" width="280px" height="220px" style="margin:10px; clear:both;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">广西：桂林米粉<br></div>&nbsp;&nbsp;&nbsp;&nbsp;桂林米粉是历史悠久的汉族传统小吃,以其独特的风味远近闻名。
<br>&nbsp;&nbsp;&nbsp;&nbsp;其做工考究，先将上好大米磨成浆，装袋滤干，揣成粉团煮熟后压榨成圆根或片状即成。圆的称米粉，片状的称切粉，通称米粉，其特点是洁白、细嫩、软滑、爽口。</div>
</div>
<div id="fujian">
<img src="image/fujian.jpg" width="280px" height="220px" style="margin:10px; float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">福建：土笋冻<br></div>&nbsp;&nbsp;&nbsp;&nbsp;土笋冻是发源于福建泉州的一种色香味俱佳的汉族传统风味小吃。如今流行于整个闽南地区，是一种由特有产品加工而成的冻品。
<br>&nbsp;&nbsp;&nbsp;&nbsp; 它含有胶质，主原料是一种蠕虫，身长二、三寸。经过熬煮，虫体所含胶质溶入水中，冷却后即凝结成块状，其肉清，味美甘鲜。配上好酱油、永春醋、甜辣酱、芥辣、蒜蓉、海蜇及芫荽、白萝卜丝、辣椒丝、番茄片。</div>
</div>
<div id="yunnan">
<img src="image/yunnan.jpg" width="280px" height="220px" style="margin:10px;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">云南：过桥米线<br></div>&nbsp;&nbsp;&nbsp;&nbsp;过桥米线是云南滇南地区特有的汉族小吃，属滇菜系。过桥米线起源于蒙自地区。
<br>&nbsp;&nbsp;&nbsp;&nbsp;过桥米线汤是用大骨、老母鸡、云南宣威火腿经长时间熬煮而成的，具有浓郁鲜香味的一类高汤。 过桥米线由四部分组成：一是汤料覆盖有一层滚油；二是佐料；三是主料；四是主食，即用水略烫过的米线。鹅油封面，汤汁滚烫，但不冒热气。</div>
</div>
<div id="guangdong">
<img src="image/guangdong.jpg" width="280px" height="220px" style="margin:10px;float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">广东：蜜汁叉烧<br></div>&nbsp;&nbsp;&nbsp;&nbsp;蜜汁叉烧是广东省汉族传统名菜之一，属于粤菜菜系。
<br>&nbsp;&nbsp;&nbsp;&nbsp;蜜汁叉烧有两种做法，插在猪腹内烧，用暗火以热辐射烧烤而熟；又是直接用火烤熟的，并在面上涂抹饴糖，使其缓解火势而不致干枯，且有甜蜜的芳香味.绝对是值得您品尝一番的美味佳肴。</div>
</div>
</div>
</div>
</div>
<div id="backToTop"><a href="#header"><div id="top">▲</div></a></div>
<footer>江西师范大学 计算机信息工程学院 2015 &copy  1308095012 13级物联网(1)班 罗丽芳</footer>
</body>
</html>
