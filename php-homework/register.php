<!doctype html>
<html>
<head>
<link rel="icon" href="myico.ico" type="image/x-icon">
<link rel="shortcut icon" href="image/mylogo.png" type="image/x-icon">
<link href="Style.css" rel="stylesheet" type="text/css">
<meta charset="gb2312">
<title>�������еĻ���::�û�ע��</title>
<style type="text/css">
.partCon{width;1000px;height:400px;}
.flash{width:1000px;height: 400px;margin:10px auto;position: relative;}
.flash a{width: 71px;height: 71px;display: block;position: absolute;top:165px;z-index: 333;}
.flash a.prev{left:-35px;background:url("image/register/but.png") -71px 0px;}
.flash a.next{right:-35px;background:url("image/register/but.png") -71px 71px;}
.flash a.prev:hover{background-position: 0px 0px;}
.flash a.next:hover{background-position: 0px -71px;}
.flash .scroll{width: 1000px;height:400px;position: relative;overflow: hidden;}
.flash .scroll img{position: absolute;left: 1000px;}
.flash .But{width: 150px;height: 20px;background:rgba(0,0,0,0.5);position:absolute;
left: 430px;bottom: 10px;border-radius: 20px;text-align:center;}
.flash .But span{width:10px;height:10px;background:#666;display: inline-block;border-radius: 5px;}
.flash .But span.hover{background:#ff0099;}
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
<div class="partCon">
       <div class="flash">
            <!--�����л���Ť-->
            <a href="javascript:void(0)" class="prev"></a>
            <a href="javascript:void(0)" class="next"></a>

            <!--ͼƬ��������-->
            <div class="scroll">
                <img src="image/register/flash1.png" style="left:0px">
                <img src="image/register/flash2.jpeg">
                <img src="image/register/flash3.jpg">
                <img src="image/register/flash4.jpg">
                <img src="image/register/flash5.jpg">
                <img src="image/register/flash6.jpg">
            </div>


            <!--������Ť����-->
            <div class="But">
                <span class="hover"></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>

            </div>
        </div>
   </div>
   
<script type="text/javascript" src="js/register.js"></script>
<script>
    /*��ҳ�ֲ�ͼ��Ч*/
var _index=0;
var _qindex=0;
var clearTime=null;


$(".But span").mouseover(function(){
	clearInterval(clearTime);
	_index=$(this).index();//��ȡ���к�
	scrollPlay();//���ò��ŷ���
	_qindex=_index;//�ѵ�ǰ��ֵ����Ϊ��һ�ε�ǰһ�����к�

}).mouseout(function(){
	autoPlay();
});

//���л���Ť
$(".flash a.next").click(function(){
	_index++;//���кż�1
	if(_index>5){
		_index=0;
		_qindex=5;
	}
	scrollPlay();
	_qindex=_index;

});

$(".flash a.prev").click(function(){
	_index--;
	if(_index<0){
		_qindex=0;

		_index=5;
	}
	scrollPlay();
	_qindex=_index;
});


autoPlay();
//�Զ��ֲ�
function autoPlay(){
	clearTime=setInterval(function(){
		_index++;//���кż�1

		if(_index>5){
			_index=0;
			_qindex=5;
		}
		scrollPlay();
		_qindex=_index;

	},2000);


}


function scrollPlay(){
	$(".But span").eq(_index).addClass("hover").siblings("span").removeClass("hover");
	if(_index==0 && _qindex==5){
		next();
	}else if(_index==5 && _qindex==0){
		prev();
	}else if(_index>_qindex){//����
		next();
	}else if(_index<_qindex){//������
		prev();
	}

}

//��һ�ţ�����
function next(){
	$(".scroll img").eq(_qindex).animate({"left":"-1020px"},300);
	$(".scroll img").eq(_index).css("left","1000px").animate({"left":"0px"},300);

};

//��һ�� ������
function prev(){
	$(".scroll img").eq(_qindex).animate({"left":"1000px"},300);
	$(".scroll img").eq(_index).css("left","-1000px").animate({"left":"0px"},300);
}
//��Ť��ʾ����
$(".flash").hover(function(){
	//��ʾ
	$("a.prev,a.next").show();
},function(){
	//����
	$("a.prev,a.next").hide();
});
   </script>
   
<div id="content">
<div id="firstTitle">
<div style="font-family:'΢���ź�'; font-size:36px; color:white; text-align:center; padding-top:50px;">�û�ע��</div>

</div>
<div id="details">
<div id="registerTable">
<div id="mainTable" style="float:left; margin:20px 0px 0px 140px; font-size:20px; color:#666;"><form method="post" action="checkForm.php">
<div><label class="item">�û���</label><input class="ipt" required="required" type="text" name="R_userName" size="34" maxlength="18" placeholder="<6-18λӢ����ĸ���������>"><span style="font-size:12px; color:#CCC">* 6-18λ��ĸ������,��һλ����������</span></div>
<div><label class="item">����</label><input class="ipt" required="required" type="password" name="R_passWord" size="34" maxlength="16" placeholder="<6-16λӢ����ĸ���������>"><span style="font-size:12px; color:#CCC">* ������ע�����ִ�Сд</span></div>
<div><label class="item">ȷ������</label><input class="ipt" required="required" type="password" name="RR_passWord" size="34" maxlength="16" placeholder="<���ٴ�����������������֤>"><span style="font-size:12px; color:#CCC">* ���ٴ�������������</span></div>
<div><label class="item">�ǳ�</label><input class="ipt" required="required" type="text" name="u_name" size="34" maxlength="12" placeholder="<12λ������Ӣ�Ļ��������>"><span style="font-size:12px; color:#CCC">* 12λ������Ӣ�Ļ�����</span></div>
<div><label class="item">�Ա�</label><input type="radio" name="sex" value="1">��</label><label><input type="radio" name="sex" value="0">Ů</div>
<div><label class="item">����</label><input type="text" size="6" name="R_year">��<input type="text" name="R_month" size="4">��<input type="text" name="R_day" size="4">��</div>
<div><label class="item">�����ַ</label><input class="ipt" type="email" name="address" size="34" placeholder="<ѡ��>"><span style="font-size:12px; color:#CCC"><ѡ��></span></div>
<div><label class="item">�绰����</label><input class="ipt" type="tel" name="telNumber" size="34" placeholder="<ѡ��>"><span style="font-size:12px; color:#CCC"><ѡ��></span></div>
<div><label class="item">QQ</label><input class="ipt" type="text" maxlength="11" name="qq" size="34" placeholder="<ѡ��>"><span style="font-size:12px; color:#CCC"><ѡ��></span></div>
<div style="margin:10px 0px 0px 80px;">
<div style="float:left;"><input class="myButton" type="reset" name="reset" value="����"></div>
<div style="float:right;"><input class="myButton"type="submit" name="tableSubmit" value="�ύ"></div>
</div>
</form></div>
</div>
</div>
</div>
</div>




<div id="backToTop"><a href="#header"><div id="top">��</div></a></div>
<footer>����ʦ����ѧ �������Ϣ����ѧԺ 2015 &copy1308095018 13��������(1)�� ������</footer>
</body>
</html>
