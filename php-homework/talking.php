<!doctype html>
<html>
<head>
<link rel="icon" href="myico.ico" type="image/x-icon">
<link rel="shortcut icon" href="image/mylogo.png" type="image/x-icon">
<link href="Style.css" rel="stylesheet" type="text/css">
<meta charset="gb2312">
<title>�������еĻ���::����</title>
<style>
/*banner start*/
    #banner{width:1130px; margin:0px auto; overflow:auto;/*�����Ԫ�صĸ���*/}
	#banner li{list-style:none;/*ȥ���ɰ���С��*/width:260px; height:260px; float:left;/*���� ����չʾ*/ margin-right:30px; margin-bottom:30px; overflow:hidden;}
	#banner li img{width:260px; height:260px; }
	#banner li .txtBox{width:240px; height:240px; background:url("image/js/lineBg.png"); padding:10px; transform:translateY(0px) rotate(130deg);/*css3λ��*/ transition:all 1S; /*����*/}
	#banner li:hover .txtBox{transform:translateY(-265px) rotate(360deg);/*css λ��*/}
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



<div id="banner">
		<ul>
			<li>
				<a href="#"><img src="image/js/t1.jpg"/></a>
				<div class="txtBox">
					<a href="#">
					<h3>����</h3>
						<h4>�������еĻ���</h4>
						<p>������������ʶ�ܶ�־ͬ���ϵ�����...</p>
						
					</a>
				</div>
			</li>
			<li>
				<a href="#"><img src="image/js/t2.jpg"/></a>
				<div class="txtBox">
					<a href="#">
					<h3>����</h3>
						<h4>һ��˵�߾��ߵ�����</h4>
						<p>�������ң�һ������·��ȥ���У���������Ʒ��ʳ... </p>
						
					</a>
				</div>
			</li>
			<li>
				<a href="#"><img src="image/js/t3.jpg"/></a>
				<div class="txtBox">
					<a href="#">
						<h3>����</h3>
						<h4>�������ջ�ܶ�</h4>
						<p>�������ҿ�������һ����Ϊ����Ķ�����������ʩ���в��ϵؽ����µ�δ֪����Ļ...</p>
					</a>
				</div>
			</li>
			<li>
				<a href="#"><img src="image/js/t4.jpg"/></a>
				<div class="txtBox">
					<a href="#">
						<h3>����</h3>
						<h4>����·�ϳԻ����Ҹ�</h4>
						<p>������һ���룬����װ��һֻ�Ի����е�����~</p>
					</a>
				</div>
			</li>
			
		</ul>
	</div>
	


<div id="content">
<div id="firstTitle">
<div id="foodMap">����</div>
<ul id="myButton_t">
<a href="#talk_travel"><li>���е�ͼ</li></a>
<a href="#talk_delicious"><li>��ʳʱ��</li></a>
<a href="#talk_custom"><li>���ķ���</li></a>
<a href="#building"><li>��־����</li></a>
<a href="#stranges"><li>��������</li></a>
<a href="#friends"><li>����ĺ�</li></a>
<a href="#history"><li>��������</li></a>
</ul>
</div>
<div id="details">
<div id="talk_travel">
<img src="image/talking/travel.jpg" width="280px" height="220px" style="margin:10px; clear:both;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center"><a href="map.php">���е�ͼ</a><br></div><div class="banzhu_r">������admin ��������admin</div>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;�����������˽����µ�������ѯ��������������˽���ǰ�ص����ζ�̬�����е�ͼ�����ǵ����������ʣ�</div>
</div>
<div id="talk_delicious">
<img src="image/talking/delicious.jpg" width="280px" height="220px" style="margin:10px; float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center"><a href="time">��ʳʱ��</a><br></div><div class="banzhu_l">������admin ��������admin</div>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;���Ȱ���ʳ�������Ϊһ�����ڵĳԻ�������֪����������óԵ���ʳ����Щ�㲻֪������ʳ���ܣ���������ʳʱ�⣬�����Ǹ����㣡</div>
</div>
<div id="talk_custom">
<img src="image/talking/custom.jpg" width="280px" height="220px" style="margin:10px;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center"><a href="javascript:void(0)">���ķ��׹�</a><br></div><div class="banzhu_r">������admin ��������admin</div>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;�й�����������ÿһ���ط��ܻ����Լ����ص����ķ��ף������˽���ر���һ�������ķ���ô����ӭ�������ķ��׹ݣ������������ҡ�</div>
</div>
<div id="building">
<img src="image/talking/building.jpg" width="280px" height="220px" style="margin:10px; float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center"><a href="javascript:void(0)">��־����</a><br></div><div class="banzhu_l">������admin ��������admin</div>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;һ���˵����У������ε��ڽֵ���������һ��һ���������Ľ��������벻�������������¼�����أ�</div>
</div>
<div id="stranges">
<img src="image/talking/stranges.jpg" width="280px" height="220px" style="margin:10px;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center"><a href="javascript:void(0)">��������</a><br></div><div class="banzhu_r">������admin ��������admin</div>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;�춯���������ݣ����������ֽ��ݡ����������������£��ٵݸ����������£���Ͼʱ��������̸��˵�أ����գ����գ�</div>
</div>
<div id="friends">
<img src="image/talking/friends.jpg" width="280px" height="220px" style="margin:10px; float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center"><a href="javascript:void(0)">����ĺ�</a><br></div><div class="banzhu_l">������admin ��������admin</div>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;��Ҫһλ����֪����������Ҫһ��Ը��������˵����ֿ�ѣ���ĩ����û���㣿����ĺ��������£���ӭ��·��ʿһ��ȾƳ��⽻�ѣ�</div>
</div>
<div id="history">
<img src="image/talking/history.jpg" width="280px" height="220px" style="margin:10px;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center"><a href="javascript:void(0)">��������</a><br></div><div class="banzhu_r">������admin ��������admin</div>
<br><br>&nbsp;&nbsp;&nbsp;&nbsp;�󽭶�ȥ�����Ծ���ǧ�ŷ������Ω���л������������Ź����е�����ǰ�Ժգ�����ĬĬ���ţ��е�����ǰ����������������������ӭ���һ��̸��</div>
</div>
</div>
</div>
</div>
<div id="backToTop"><a href="#header"><div id="top">��</div></a></div>
<footer>����ʦ����ѧ �������Ϣ����ѧԺ 2015 &copy  1308095012 13��������(1)�� ������</footer>
</body>
</html>