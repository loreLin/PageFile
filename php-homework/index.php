<!doctype html>
<html>
<head>
<link rel="icon" href="myico.ico" type="image/x-icon">
<link rel="shortcut icon" href="image/mylogo.png" type="image/x-icon">
<link href="Style.css" rel="stylesheet" type="text/css">
<meta charset="gb2312">
<title>�������еĻ���::����</title>
<style>
.bg{width:100%;height:330px;background:url("image/js/ibg.jpg") center;}
			.show{width:1090px;height:300px;padding-top:15px;margin:0 auto;}
			.pic1,.pic2,.pic3,.pic4{width:100px;height:300px;float:left;}
			.pic1{background:url("image/js/i1.jpg");}
			.pic2{background:url("image/js/i2.jpg");}
			.pic3{background:url("image/js/i3.jpg");}
			.pic4{background:url("image/js/i4.jpg");width:789px;}
			.txt{width:76px;height:276px;background:rgba(0,0,0,.5);color:#fff;line-height:13px;
				padding:24px 0 0 24px;}
			.p1{width:12px;font-size:12px;float:left;}
			.p2{width:16px;font-size:14px;font-weight:700;float:left;margin-left:15px;}
		
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
	$myname ="hello";

	echo "<div id='login-area'>";
	echo "<ul id='login-item'>";
	echo "<table id='myInfo'>";
	echo "<tr>";
	echo "<td width='75px' height='54px' rowspan='2'><img width='45' height='45' src='image/userInfo/picture.jpg'></td>";
	echo "<td width='100px'><a href='#'>".$_SESSION['username']."</a></td>";
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






		<div class="bg">
			<div class="show">
				<div class="pic1 pic">
					<div class="txt">
						<p class="p1">����<br>��ĬĬ��īī</p>
						<p class="p2">�ҵĸ�������֮��حح����֮��</p>
					</div>
				</div>
				<div class="pic2 pic">
					<div class="txt">
						<p class="p1">����<br>�����������</p>
						<p class="p2">ӵ�������ĸ�ڣ�������ɳ������</p>
					</div>
				</div>
				<div class="pic3 pic">
					<div class="txt">
						<p class="p1">����<br>����Ⱦ���ҽ�</p>
						<p class="p2">���������������</p>
					</div>
				</div>
				<div class="pic4 pic">
					<div class="txt">
						<p class="p1">����<br>�����������</p>
						<p class="p2">����������Ŀ حح �ϼ�</p>
					</div>
				</div>
			</div>
		</div>
		<script src="js/jquery.js"></script>
		<script>
			$(".pic").hover(function(){
				$(this).stop(true).animate({width:"789px"},500).siblings().stop(true).animate({width:"100px"},500);
			});
		</script>
        
        
        
<div id="content">
<div id="firstTitle">
<div id="foodMap">���е�ͼ</div>
<ul id="myButton">
<a href="#gulangyu"><li>������</li></a>
<a href="#xihu"><li>������</li></a>
<a href="#wuyuan"><li>��Դ��</li></a>
<a href="#xitang"><li>������</li></a>
<a href="#wuzhen"><li>������</li></a>
<a href="#lijiang"><li>������</li></a>
</ul>
</div>
<div id="details">
<div id="gulangyu">
<img src="image/gulangyu.jpeg" width="280px" height="220px" style="margin:10px; clear:both;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">������<br></div>&nbsp;&nbsp;&nbsp;&nbsp;������λ�����������Ͻǣ��������и������������ﾰɫ���ˣ��ļ��紺������˵������Ӣ��֣�ɹ������ͱ��ڴˣ���ʹ�ù���������Զ���ˡ� ����������"�����������"֮�ơ�
<br>&nbsp;&nbsp;&nbsp;&nbsp;������ķ������ˣ�����������ĺ����ο͡����졢�̺���ɳ̲�����ʵĿ������������Ĳ���������ˬ�ĺ��磬������������</div>
</div>
<div id="xihu">
<img src="image/xihu.jpg" width="280px" height="220px" style="margin:10px; float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">����<br></div>&nbsp;&nbsp;&nbsp;&nbsp;��������λ���㽭ʡ�����е������������������ĺ���ɽɫ���ڶ����ʤ�ż����������⣬���й�����������ʤ�أ�Ҳ����Ϊ"�˼�����"��2011��6��24�գ�����������ʽ���롶�����Ų���¼������Ŀǰ�й����롶�����Ų���¼���������Ų���Ψһһ���������Ļ��Ų���Ҳ���ֽ������Ų���¼�������������������Ļ��Ų�֮һ��
<br>&nbsp;&nbsp;&nbsp;&nbsp;�δ����ĺ��ն�����д����"����������ʮ������������Ǻ���"����������ӵ��������ɽ��һˮ���ǵ�ɽ��ˮɫ������"�������������ӣ�Ũױ��Ĩ������"����Ȼ�����ϵ����������</div>
</div>
<div id="wuyuan">
<img src="image/wuyuan.jpg" width="280px" height="220px" style="margin:10px;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">��Դ<br></div>&nbsp;&nbsp;&nbsp;&nbsp;��Դ�أ� λ�ڽ���ʡ������,����"����"��"����"֮�ƣ���ȫ���������Ļ�����̬�����أ��������Ϊ"�й��������"��
<br>&nbsp;&nbsp;&nbsp;&nbsp;
�������£�������Դ����ɽ���Ͳ˻�ȫ��ʢ�������������Ͳ˻�����������ɽ��֮�У��ۺ���һ�����׵��滨����׺����ɽ��Ұ��Ӳӵ��Ͳ˻����У��γɶ���һ��������԰�������紵����������Ȼ��
</div>
</div>
<div id="xitang">
<img src="image/xitang.jpg" width="280px" height="220px" style="margin:10px; float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">����<br></div>&nbsp;&nbsp;&nbsp;&nbsp;������ʷ�ƾã��ǹŴ���Խ�Ļ��ķ����֮һ�����ڴ���ս��ʱ�ھ�����Խ�������ཻ֮�أ�����"���Խ��"��"Խ���˼�"֮�ơ��������й�����ʮ����ʷ�Ļ�����֮һ�������������񱣴���õ�25��ƽ�������彨��Ⱥ����ģ֮��ͱ���֮����ǽ������еġ�
<br>&nbsp;&nbsp;&nbsp;&nbsp;����������ҹɫ֮�У�һ���Ǿ���������ҹɫ��һ�������ֵ�ҹ����ƻ���ɺ�£���ῴ��ǧ����������ʷ�㼣�������Ѽ�ҡ��������ඹ��Ǯ�϶���������Ҷ�����⡭���㻹������������ʷ�����������Ծ�������Խ�糪����
</div>
</div>
<div id="wuzhen">
<img src="image/wuzhen.jpg" width="280px" height="220px" style="margin:10px;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">����<br></div>&nbsp;&nbsp;&nbsp;&nbsp;�����ǵ��͵Ľ��ϵ�������ˮ�������"����֮�磬˿��֮��"֮�ơ����������ǧ�����ƾ���ʷ����ȫ����ʮ���ƽ���Ԥ�����㼰�����������֮һ��
<br>&nbsp;&nbsp;&nbsp;&nbsp;���˺�ʫ�������Ӱ����"һ���ִ�����Ӱ�첻������� һ�Ź���ɫ����ȻŨ�ص�ʷҳ"���Ժӳɽ֣������������������ݣ�ˮ��һ�壬��֯��ˮ��������ʯ���é�ܹʾӵȶ��߽�����ζ�Ľ������أ��������й��ŵ����"�Ժ�Ϊ��"������˼�룬������Ȼ���������Ļ�����г�ദ�������������ֽ���ˮ�����Ŀռ�������
</div>
</div>
<div id="lijiang">
<img src="image/lijiang.jpg" width="280px" height="220px" style="margin:10px;float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">����<br></div>&nbsp;&nbsp;&nbsp;&nbsp;�����ųǣ�����"���й���"������������ʡ�����д�������һ���羰��������ʷ�ƾú��Ļ����õ����ǣ�Ҳ���й������ı����൱��õ������������
<br>&nbsp;&nbsp;&nbsp;&nbsp;�����ų�����Ѥ���ḻ��ʵĵط�����ϰ�׺����ֻ���������֡�������ʽ��ռ���Ļ�������ư��Լ��������ѽڵȵȣ����һ�������ųǳ���������й��Ŵ����н���ĳɾͣ����й�����о���������ɫ�ͷ�������֮һ��</div>
</div>
</div>
</div>
</div>
<div id="backToTop"><a href="#header"><div id="top">��</div></a></div>
<footer>����ʦ����ѧ �������Ϣ����ѧԺ 2015 &copy  1308095012 13��������(1)�� ������</footer>
</body>
</html>
