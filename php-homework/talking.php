<!doctype html>
<html>
<head>
<link rel="icon" href="myico.ico" type="image/x-icon">
<link rel="shortcut icon" href="image/mylogo.png" type="image/x-icon">
<link href="Style.css" rel="stylesheet" type="text/css">
<meta charset="gb2312">
<title>保存旅行的回忆::讨论</title>
<style>
/*banner start*/
    #banner{width:1130px; margin:0px auto; overflow:auto;/*清除子元素的浮动*/}
	#banner li{list-style:none;/*去除可爱的小黑*/width:260px; height:260px; float:left;/*浮动 并排展示*/ margin-right:30px; margin-bottom:30px; overflow:hidden;}
	#banner li img{width:260px; height:260px; }
	#banner li .txtBox{width:240px; height:240px; background:url("image/js/lineBg.png"); padding:10px; transform:translateY(0px) rotate(130deg);/*css3位移*/ transition:all 1S; /*过渡*/}
	#banner li:hover .txtBox{transform:translateY(-265px) rotate(360deg);/*css 位移*/}
	#banner li .txtBox a{background:#fff;width:180px; height:180px; display:block; text-align:center;  padding:60px 30px 0px 30px; color:#333; text-decoration:none;}
	#banner li .txtBox a h3{font-size:18px;}
	#banner li .txtBox a h4{font-size:16px; font-weight:400; line-height:80px}
	#banner li .txtBox a p{font-size:12px; text-align:left;}
	#banner li:nth-child(4n){margin-right:0px;}
			
/*end banner*/



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



<div id="banner">
		<ul>
			<li>
				<a href="#"><img src="image/js/t1.jpg"/></a>
				<div class="txtBox">
					<a href="#">
					<h3>我们</h3>
						<h4>保存旅行的回忆</h4>
						<p>在这里你能认识很多志同道合的朋友...</p>
						
					</a>
				</div>
			</li>
			<li>
				<a href="#"><img src="image/js/t2.jpg"/></a>
				<div class="txtBox">
					<a href="#">
					<h3>我们</h3>
						<h4>一场说走就走的旅行</h4>
						<p>背起行囊，一个人上路，去旅行，看美景，品美食... </p>
						
					</a>
				</div>
			</li>
			<li>
				<a href="#"><img src="image/js/t3.jpg"/></a>
				<div class="txtBox">
					<a href="#">
						<h3>我们</h3>
						<h4>旅行能收获很多</h4>
						<p>旅行在我看来还是一种颇为有益的锻炼，心灵在施行中不断地进行新的未知事物的活动...</p>
					</a>
				</div>
			</li>
			<li>
				<a href="#"><img src="image/js/t4.jpg"/></a>
				<div class="txtBox">
					<a href="#">
						<h3>我们</h3>
						<h4>旅行路上吃货很幸福</h4>
						<p>旅行有一个碗，可以装下一只吃货所有的梦想~</p>
					</a>
				</div>
			</li>
			
		</ul>
	</div>
	


<div id="content">
<div id="firstTitle">
<div id="foodMap">讨论</div>
<ul id="myButton_t">
<a href="#talk_travel"><li>旅行地图</li></a>
<a href="#talk_delicious"><li>美食时光</li></a>
<a href="#talk_custom"><li>人文风俗</li></a>
<a href="#building"><li>标志建筑</li></a>
<a href="#stranges"><li>奇闻异事</li></a>
<a href="#friends"><li>五湖四海</li></a>
<a href="#history"><li>风流人物</li></a>
</ul>
</div>
<div id="details">
<div id="talk_travel">
<img src="image/talking/travel.jpg" width="280px" height="220px" style="margin:10px; clear:both;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center"><a href="map.php">旅行地图</a><br></div><div class="banzhu_r">版主：admin 副版主：admin</div>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;在这里，你可以了解最新的旅行咨询，在这里你可以了解最前沿的旅游动态，旅行地图，我们等你加入更精彩！</div>
</div>
<div id="talk_delicious">
<img src="image/talking/delicious.jpg" width="280px" height="220px" style="margin:10px; float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center"><a href="time">美食时光</a><br></div><div class="banzhu_l">版主：admin 副版主：admin</div>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;你热爱美食吗？你想成为一名正宗的吃货吗？你想知道哪里有最好吃的美食吗？那些你不知道的美食秘密，荡漾于美食时光，让我们告诉你！</div>
</div>
<div id="talk_custom">
<img src="image/talking/custom.jpg" width="280px" height="220px" style="margin:10px;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center"><a href="javascript:void(0)">人文风俗馆</a><br></div><div class="banzhu_r">版主：admin 副版主：admin</div>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;中国土地辽阔，每一个地方总会有自己独特的人文风俗，你想了解各地悲剧一个的人文风俗么？欢迎加入人文风俗馆，这里有你有我。</div>
</div>
<div id="building">
<img src="image/talking/building.jpg" width="280px" height="220px" style="margin:10px; float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center"><a href="javascript:void(0)">标志建筑</a><br></div><div class="banzhu_l">版主：admin 副版主：admin</div>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;一个人的旅行，独自游荡在街道，看着那一幢一幢风格迥异的建筑，你想不想用相机把他记录下来呢？</div>
</div>
<div id="stranges">
<img src="image/talking/stranges.jpg" width="280px" height="220px" style="margin:10px;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center"><a href="javascript:void(0)">奇闻异事</a><br></div><div class="banzhu_r">版主：admin 副版主：admin</div>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;天动雷鸣彻九州，奇闻异事闹锦州。网罗天下奇闻妙事，速递各地奇闻异事，闲暇时光让我们谈天说地，快哉，快哉！</div>
</div>
<div id="friends">
<img src="image/talking/friends.jpg" width="280px" height="220px" style="margin:10px; float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center"><a href="javascript:void(0)">五湖四海</a><br></div><div class="banzhu_l">版主：admin 副版主：admin</div>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;想要一位红颜知己？还是想要一名愿意倾听你说话的挚友？周末出行没人陪？五湖四海囊括天下，欢迎各路人士一起喝酒吃肉交友！</div>
</div>
<div id="history">
<img src="image/talking/history.jpg" width="280px" height="220px" style="margin:10px;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center"><a href="javascript:void(0)">风流人物</a><br></div><div class="banzhu_r">版主：admin 副版主：admin</div>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;大江东去，浪淘尽，千古风流人物。惟我中华，湍湍文明古国。有的人生前显赫，死后默默无闻；有的人生前无名，死后流芳百世。欢迎大家一起畅谈！</div>
</div>
</div>
</div>
</div>
<div id="backToTop"><a href="#header"><div id="top">▲</div></a></div>
<footer>江西师范大学 计算机信息工程学院 2015 &copy  1308095012 13级物联网(1)班 罗丽芳</footer>
</body>
</html>