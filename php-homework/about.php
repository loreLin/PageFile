<!doctype html>
<html>
<head>
<link rel="icon" href="myico.ico" type="image/x-icon">
<link rel="shortcut icon" href="image/mylogo.png" type="image/x-icon">
<link href="Style.css" rel="stylesheet" type="text/css">
<meta charset="gb2312">
<title>�������еĻ���::����</title>
</head>

<body class="my space-course">
<div id="header">
<div id="nav" class="container">
<div id="title">���л���<span class="entitle"><br>Travel memories</span></div>
<ul id="nav-item" class="l">
<li><a href="index.php" class="havborder">����</a><span class="smalentitle">beauty</span></li>
<li><a href="delicious.php" class="havborder">��ʳ</a><span class="smalentitle"> delicious</span></li>
<li><a href="custom.php" class="havborder">����</a><span class="smalentitle_">custom</span></li>
<li><a href="talking.php" class="havborder">����</a><span class="smalentitle_">Talking</span></li>
<li><a href="about.php">����</a><span class="smalentitle_">About</span></li>
</ul>
<?php
session_start();	/*���� session */
$link=mysql_connect("localhost",'root','') or die('����ʧ��');/*�������ݿ�*/
mysql_select_db('travelmemo',$link) or die('ѡ�����ݿ�ʧ��');	/*ѡ�����ݿ�*/
mysql_query("SET NAMES gb2312");			/*�޸��ַ���*/
$uname = isset($_SESSION['uname']) ? $_SESSION['uname'] : '';
$s_username = "select nickName from userinfo where userName='$uname'";		/*��ѯ�û���*/
$s_result_uname = mysql_query($s_username);		/*�û�����ѯ*/
$s_row_uname = mysql_fetch_array($s_result_uname);
	
if(!isset($_SESSION['isLogin']))	/*�û�δ��¼*/
{
	echo "<div id='login-area'>";
	echo "<ul id='login-item'>";
	echo "<li><a href='register.php' class='havborder_login'>ע��</a><span class='smalentitle_login'>Register</span></li>";
	echo "<li><form id='myForm' method='post' action='login.php'>";
	echo "<label>�û�����<input type='text' name='userName' size='12'></label>";
	echo "<label>��  �룺<input type='password' name='passWord' size='12'></label>";
	echo "<div id='submit'><input type='submit' name='submit' value='��¼'></div>"; 
	echo "</form></li>";
	echo "</ul>";
	echo "</div>";
}
else	/*�û��ѵ�¼*/
{
	$myname = "hello";
	echo "<div id='login-area'>";
	echo "<ul id='login-item'>";
	echo "<table id='myInfo'>";
	echo "<tr>";
	echo "<td width='75px' height='54px' rowspan='2'><img width='45' height='45' src='image/userInfo/picture.jpg'></td>";
	echo "<td width='100px'><a href='#'>$myname</a></td>";
	echo "<td width='100px'><a href='#'>��������</a></td>";
	echo "<td rowspan='2'><a href='out.php'>�˳�</a></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td><a href='#'>".$_SESSION['s_row_level']."</a></td>";
	echo "<td><a href='#'>����:</a></td>";
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
<div id="foodMap">����</div>
<ul id="myButton_">
<a href="#want"><li>��վԸ��</li></a>
<a href="#people"><li>������Ա</li></a>
<a href="#techno"><li>ʹ�ü���</li></a>
<a href="#admin"><li>������Ա</li></a>
</ul>
</div>
<div id="details">
<div id="want">
<img src="image/about/dream.jpg" width="280px" height="220px" style="margin:10px; clear:both;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">��վԸ��<br></div>&nbsp;&nbsp;&nbsp;&nbsp;һ�����õ���վ���ǽ�����һ�����õ���վԸ��֮�ϵģ�ֻ�������Լ���Ը������վ����ӵ���Լ�����꣬�������û������Լ�����˼���롣
<br>&nbsp;&nbsp;&nbsp;&nbsp;���ǵ�Ը��������ÿ���˼�¼�Լ������У���һ�����������ջ��ƽ̨��</div>
</div>
<div id="people">
<img src="image/about/people.jpg" width="280px" height="220px" style="margin:10px; float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">������Ա<br></div>&nbsp;&nbsp;&nbsp;&nbsp;��վ�� ����ʦ����ѧ �������Ϣ����ѧԺ
<br>&nbsp;&nbsp;&nbsp;&nbsp;13�� ��������1���� ������<br>&nbsp;&nbsp;&nbsp;&nbsp;����</div>
</div>
<div id="techno">
<img src="image/about/tech.jpg" width="280px" height="220px" style="margin:10px;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">ʹ�ü���<br></div>&nbsp;&nbsp;&nbsp;&nbsp;HTML
<br>&nbsp;&nbsp;&nbsp;&nbsp;PHP
<br>&nbsp;&nbsp;&nbsp;&nbsp;MySQL
<br>&nbsp;&nbsp;&nbsp;&nbsp;javascript
</div>
</div>
<div id="admin">
<img src="image/about/admin.jpg" width="280px" height="220px" style="margin:10px;float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">������Ա<br></div>&nbsp;&nbsp;&nbsp;&nbsp;������admin
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;��������admin</div>
</div>
</div>
</div>
</div>
<div id="backToTop"><a href="#header"><div id="top">��</div></a></div>
<footer>����ʦ����ѧ �������Ϣ����ѧԺ 2015 &copy 1308095012 13��������(1)�� ������</footer>
</body>
</html>
