<!doctype html>
<html>
<head>
<link rel="icon" href="myico.ico" type="image/x-icon">
<link rel="shortcut icon" href="image/mylogo.png" type="image/x-icon">
<link href="Style.css" rel="stylesheet" type="text/css">
<meta charset="gb2312">
<title>�������еĻ���::��ʳ</title>
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
		var lastIndex = Math.floor(imgLen/2); //��ʼ�м�ͼƬ���к�
		var imgLeft = [];

//Ϊÿ��img��ӳ�ʼ����
		for(var i=0;i<imgLen;i++){
			if(i<lastIndex){
				$("img").eq(i).addClass("front");
			}else if(i>lastIndex){
				$("img").eq(i).addClass("back");
			}else{
				$("img").eq(i).addClass("now");
			};
		};
		
//��ǰͼƬҳ����������ſ�����
		function mid(){
			var oWid = $(window).width();//���ڿ��
			var mIndex = $(".now").index();//��ǰͼƬ���к�
			$(".now").css("left",oWid/2-150+'px');//��ǰͼƬλ�þ���
			//����ͼƬ�ſ����ٻ�ȡÿ��ͼƬ��left��ֵ
			for(var i=0;i<imgLen;i++){
				$("img").eq(i).css("left",oWid/2-150-100*(mIndex-i)+'px');
				imgLeft[i] = parseInt($("img").eq(i).css("left"));
			}
		};
		mid();//ִ��
		$(window).resize(function(){mid()});//��������ʱ��ִ��

//����¼�
		$("img").click(function(){
			var nowIndex = $(this).index();
			//����ͼƬλ���ƶ�
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

			lastIndex = nowIndex;//�滻��ǰͼƬ���к�
			//��ǰͼƬ�������now
			$(this).removeClass().addClass("now").siblings().removeClass("now");
		});

	</script>
<div id="content">
<div id="firstTitle">
<div id="foodMap">������ʳ</div>
<ul id="myButton_">
<a href="#guilin"><li>�����׷�</li></a>
<a href="#fujian"><li>����</li></a>
<a href="#yunnan"><li>��������</li></a>
<a href="#guangdong"><li>��֭����</li></a>

</ul>
</div>
<div id="details">
<div id="guiling">
<img src="image/guilin.jpg" width="280px" height="220px" style="margin:10px; clear:both;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">�����������׷�<br></div>&nbsp;&nbsp;&nbsp;&nbsp;�����׷�����ʷ�ƾõĺ��崫ͳС��,������صķ�ζԶ��������
<br>&nbsp;&nbsp;&nbsp;&nbsp;�������������Ƚ��Ϻô���ĥ�ɽ���װ���˸ɣ����ɷ��������ѹե��Բ����Ƭ״���ɡ�Բ�ĳ��׷ۣ�Ƭ״�ĳ��зۣ�ͨ���׷ۣ����ص��ǽ�ס�ϸ�ۡ�����ˬ�ڡ�</div>
</div>
<div id="fujian">
<img src="image/fujian.jpg" width="280px" height="220px" style="margin:10px; float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">����������<br></div>&nbsp;&nbsp;&nbsp;&nbsp;�����Ƿ�Դ�ڸ���Ȫ�ݵ�һ��ɫ��ζ��ѵĺ��崫ͳ��ζС�ԡ�����������������ϵ�������һ�������в�Ʒ�ӹ����ɵĶ�Ʒ��
<br>&nbsp;&nbsp;&nbsp;&nbsp; �����н��ʣ���ԭ����һ����棬���������硣�������󣬳���������������ˮ�У���ȴ������ɿ�״�������壬ζ�����ʡ����Ϻý��͡������ס������������������ء����ؼ�ܾݴ�����ܲ�˿������˿������Ƭ��</div>
</div>
<div id="yunnan">
<img src="image/yunnan.jpg" width="280px" height="220px" style="margin:10px;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">���ϣ���������<br></div>&nbsp;&nbsp;&nbsp;&nbsp;�������������ϵ��ϵ������еĺ���С�ԣ������ϵ������������Դ�����Ե�����
<br>&nbsp;&nbsp;&nbsp;&nbsp;�������������ô�ǡ���ĸ���������������Ⱦ���ʱ�䰾����ɵģ�����Ũ������ζ��һ������� �����������Ĳ�����ɣ�һ�����ϸ�����һ����ͣ��������ϣ��������ϣ�������ʳ������ˮ���̹������ߡ����ͷ��棬��֭���̣�����ð������</div>
</div>
<div id="guangdong">
<img src="image/guangdong.jpg" width="280px" height="220px" style="margin:10px;float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">�㶫����֭����<br></div>&nbsp;&nbsp;&nbsp;&nbsp;��֭�����ǹ㶫ʡ���崫ͳ����֮һ���������˲�ϵ��
<br>&nbsp;&nbsp;&nbsp;&nbsp;��֭�������������������������գ��ð������ȷ����տ����죻����ֱ���û���ģ���������ͿĨ���ǣ�ʹ�仺����ƶ����¸ɿݣ��������۵ķ���ζ.������ֵ����Ʒ��һ������ζ���ȡ�</div>
</div>
</div>
</div>
</div>
<div id="backToTop"><a href="#header"><div id="top">��</div></a></div>
<footer>����ʦ����ѧ �������Ϣ����ѧԺ 2015 &copy  1308095012 13��������(1)�� ������</footer>
</body>
</html>
