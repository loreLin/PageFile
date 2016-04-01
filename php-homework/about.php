<!doctype html>
<html>
<head>
<link rel="icon" href="myico.ico" type="image/x-icon">
<link rel="shortcut icon" href="image/mylogo.png" type="image/x-icon">
<link href="Style.css" rel="stylesheet" type="text/css">
<meta charset="gb2312">
<title>保存旅行的回忆::关于</title>
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
<div id="content">
<div id="firstTitle">
<div id="foodMap">关于</div>
<ul id="myButton_">
<a href="#want"><li>网站愿景</li></a>
<a href="#people"><li>开发人员</li></a>
<a href="#techno"><li>使用技术</li></a>
<a href="#admin"><li>管理人员</li></a>
</ul>
</div>
<div id="details">
<div id="want">
<img src="image/about/dream.jpg" width="280px" height="220px" style="margin:10px; clear:both;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">网站愿景<br></div>&nbsp;&nbsp;&nbsp;&nbsp;一个良好的网站总是建立在一个良好的网站愿景之上的，只有有了自己的愿景，网站才能拥有自己的灵魂，才能向用户表达出自己的所思所想。
<br>&nbsp;&nbsp;&nbsp;&nbsp;我们的愿景是来让每个人记录自己的旅行，有一个交流旅行收获的平台。</div>
</div>
<div id="people">
<img src="image/about/people.jpg" width="280px" height="220px" style="margin:10px; float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">开发人员<br></div>&nbsp;&nbsp;&nbsp;&nbsp;本站由 江西师范大学 计算机信息工程学院
<br>&nbsp;&nbsp;&nbsp;&nbsp;13级 物联网（1）班 罗丽芳<br>&nbsp;&nbsp;&nbsp;&nbsp;制作</div>
</div>
<div id="techno">
<img src="image/about/tech.jpg" width="280px" height="220px" style="margin:10px;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">使用技术<br></div>&nbsp;&nbsp;&nbsp;&nbsp;HTML
<br>&nbsp;&nbsp;&nbsp;&nbsp;PHP
<br>&nbsp;&nbsp;&nbsp;&nbsp;MySQL
<br>&nbsp;&nbsp;&nbsp;&nbsp;javascript
</div>
</div>
<div id="admin">
<img src="image/about/admin.jpg" width="280px" height="220px" style="margin:10px;float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">管理人员<br></div>&nbsp;&nbsp;&nbsp;&nbsp;版主：admin
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;副版主：admin</div>
</div>
</div>
</div>
</div>
<div id="backToTop"><a href="#header"><div id="top">▲</div></a></div>
<footer>江西师范大学 计算机信息工程学院 2015 &copy 1308095012 13级物联网(1)班 罗丽芳</footer>
</body>
</html>
