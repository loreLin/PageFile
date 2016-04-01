<!doctype html>
<html>
<head>
<link rel="icon" href="myico.ico" type="image/x-icon">
<link rel="shortcut icon" href="image/mylogo.png" type="image/x-icon">
<link href="Style.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
<title>保存旅行的回忆::讨论</title>
<style>


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
	echo "<div id='login-area'>";
	echo "<ul id='login-item'>";
	echo "<table id='myInfo'>";
	echo "<tr>";
	echo "<td width='75px' height='54px' rowspan='2'><img width='45' height='45' src='image/userInfo/picture.jpg'></td>";
	echo "<td width='100px'><a href='#'>xinke</a></td>";
	echo "<td width='100px'><a href='#'>个人中心</a></td>";
	echo "<td rowspan='2'><a href='out.php'>退出</a></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><a href='#'>新手上路</a></td>";
	echo "<td><a href='#'>积分:</a></td>";
	echo "</tr>";
	echo "</table>";
	echo "</div>";
}
?>
</div>
</div>



</body>
</html>