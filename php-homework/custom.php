<!doctype html>
<html>
<head>
<link rel="icon" href="myico.ico" type="image/x-icon">
<link rel="shortcut icon" href="image/mylogo.png" type="image/x-icon">
<link href="Style.css" rel="stylesheet" type="text/css">
<meta charset="gb2312">
<title>�������еĻ���::ϰ��</title>
<style>
		.movi{
						width:1240px;height:300px;
						margin:30px auto;
						}
			.movi ul{width:100%;height:300px;}
			.movi ul li{
									width:300px;height:290px;
									list-style-type:none;
									float:left;
									padding:4px;
									cursor:pointer;
									box-shadow:0px 0px 20px #000;
									position:relative;
									overflow:hidden;
									}
				.movi ul li .con{	background:#3E4452;
													width:170px;height:290px;
													position:absolute;left:310px;top:3px;
													padding:20px;
													}
				.movi ul li .con h4{margin-top:-15px;margin-bottom:10px;color:white;}
				.movi ul li .con p{
														
														color:#fff;width:170px;
														line-height:20px;text-indent:30px;
														font-size:15px;
														font-family:"΢���ź�"��
														}
				.movi ul li .con a{
													width:120px;height:30px;display:block;background:#3399cc;
													text-decoration:none;color:#fff;text-align:center;
													line-height:30px;
													border-radius:5px;
													margin:15px auto;
													}
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


	<div class="movi">
			<ul>
				<li>
					<img src="image/js/c1.jpg" />
					<div class="con">
					<h4>�Ĵ�����</h4>
					<p>
					ԨԴ������Ů���ŷ��Լ�����ţ����Ȼ�辰�͵�����Ϊ�����׳�����˵�ɽˮ�������ḻ��ʵĺ�ɫ�Ļ�������"�׾��β�կ�����¹۵�Ⱥ���͵���������·�����ӣ����롢��ţ������Ȫ"֮˵��
				</p>
					<a href="#">�˽�����</a>
					</div>
				</li>
				<li>
					<img src="image/js/c2.jpg" />
					<div class="con">
					<h4>������</h4>
					<p>
					�ִ��˷ſ����ƶ���Ϊ��֮�á���Ů��������д��ף������Ը��������ճɹ����Ҹ����ꡣ
				</p>
					<a href="#">�˽�����</a>
					</div>
				</li>
				<li>
					<img src="image/js/c3.jpg" />
					<div class="con">
					<h4>������ϱ�</h4>
					<p>
					�ϱ��ǲ�����������ŮѰ����ż�����������һ���罻���"�ϱ�"��������ϲ�º�ũ�иϳ�����С��ϱ�̸��˵����ʱ����Ů�������ͨ���Ը裬��ľҶ�����ȣ�������������������Լ��İ�Ľ֮�顣
				</p>
					<a href="#">�˽�����</a>
					</div>
				</li>
				<li>
					<img src="image/js/c4.jpg" />
					<div class="con">
					<h4>������ˮ��</h4>
					<p>
					��ˮ����չ�ִ���ˮ�Ļ��������赸�Ļ�����ʳ�Ļ��������Ļ��������еȴ�ͳ�Ļ����ۺ���̨�����о�������ʷ����Ҫ���ڣ����нϸߵ�ѧ����ֵ��
				</p>
					<a href="#">�˽�����</a>
					</div>
				</li>
			</ul>
		</div>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript">
				$(".movi ul li ").hover(function(){
						$(this).animate({width:"510px"},1000).siblings().animate({width:"228px"},1000);
						$(this).siblings().find("img").animate({width:"228px",height:"300px"},1000);
				},function(){
					$(".movi ul li").animate({width:"300px",height:"300px"},1000);
					$(".movi ul li").find("img").animate({width:"300px",height:"300px"},1000);
				})
		</script>

<div id="content">
<div id="firstTitle">
<div id="foodMap">���ط���</div>
<ul id="myButton_">
<a href="#cfj"><li>����ʡ</li></a>
<a href="#cgd"><li>�㶫ʡ</li></a>
<a href="#cjs"><li>����ʡ</li></a>
<a href="#cah"><li>����ʡ</li></a>
</ul>
</div>
<div id="details">
<div id="cfj">
<img src="image/cfj.jpg" width="280px" height="220px" style="margin:10px; clear:both;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">����ʡ<br></div>&nbsp;&nbsp;&nbsp;&nbsp;�ֳ���Ů�Ӵ��������ţ������١���������ҹ���Թҡ���Ϊ���¹����ӵļ��ס��Ϻ��������Ů��춰���ʱ���¹á��������������Ϊ�¹õ�������������٣������Լ�ҡ��������ҡ���Ĵ����������ס�
<br>&nbsp;&nbsp;&nbsp;&nbsp;�����˳��±�ʱ���ҳ���������س�ֱ�����������Բ��������ʳ�ã���˼�������²�������֪�������ϰ����������±��в��з�Ԫɱ����Ѷ�Ĵ�˵�������������ǰҪ�Ȱ��칫�����칫�����������͵ĺ�С��칫�������µĺ��������������״����Ŀ���Ǿ���ʮ����</div>
</div>
<div id="cgd">
<img src="image/cgd.jpg" width="280px" height="220px" style="margin:10px; float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">�㶫ʡ<br></div>&nbsp;&nbsp;&nbsp;&nbsp;�ֹ㶫����������ڳ���ͷ��ϰ�ף���˵�Ǽ���Ԫĩɱ���ӵ���ʷ���¡������ɱ�����ᣬ������ͷ���£�����������ͷ���档����㶫�˰���Ƥʱ�Գ�Ϊ������Ƥ����
<br>&nbsp;&nbsp;&nbsp;&nbsp;�㶫����Ҳ�ж�ͯ��Ƶķ��ס��ƵĲ����к���Ƥ����ֵƣ���ܰ���򻨽�Ļ��ƣ������ĵƻ��������Ļ������㣬ʹ�˰������֡���ݸ����δ����Ҳ�����·���ȼ����������Ϊ���ϡ�ϼ��������ҷʯ�ķ��ס�ҷʯ���ݼ̹ⷢ���ģ���ʯ��ϵ���������ؽ��������������ƣ���������о���</div>
</div>
<div id="cjs">
<img src="image/cjs.jpg" width="280px" height="220px" style="margin:10px;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">����ʡ<br></div>&nbsp;&nbsp;&nbsp;&nbsp;�����ڼ䣬���յ����ľ�ϰ���л��������ɣ��������һ������������ÿ���֮���������˵�������ɱ��֮��������ϡ�����³������ꣻ��ɨ�أ��°Ѳ���ɨ��ȵȡ����ſ�ѧ֪ʶ���ռ����кܶ಻��ѧ��ϰ��Ҳ�𽥱��˵���������������������л��ȴһֱ����������
<br>&nbsp;&nbsp;&nbsp;&nbsp;�����˳�Ϧ�ڷ��ڷŽ���ݩ������ʱ�ڳ�����ν֮"��Ԫ��"������������ �ݲ�ʱҪ������ֻ����魣�ν֮��"Ԫ����"����ϲ���ơ�</div>
</div>
<div id="cah">
<img src="image/cah.jpg" width="280px" height="220px" style="margin:10px;float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">����ʡ<br></div>&nbsp;&nbsp;&nbsp;&nbsp;��Դ����ڣ���ͯ��ש�߶�һ�пձ��������Ϲ�������Ҷ��װ��Ʒ������һ�����ǰ��������־�������֮���ߡ�ҹ��������Ե��ϵ��򣬹�Կɰ�����Ϫ �����ͯ�������ڡ�
<br>&nbsp;&nbsp;&nbsp;&nbsp;���������Ե������ɷ���״����ʪ������������ʯ�ϴ����ʹ �������첢���λ����ķ��ס��������ԳƲ����ɵ��������ϲ����������λ���ʱ�� ��Ķ�ͬ�У��α��������������С�</div>
</div>
</div>
</div>
</div>
<div id="backToTop"><a href="#header"><div id="top">��</div></a></div>
<footer>����ʦ����ѧ �������Ϣ����ѧԺ 2015 &copy  1308095012 13��������(1)�� ������</footer>
</body>
</html>
