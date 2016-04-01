<!doctype html>
<html>
<head>
<link rel="icon" href="myico.ico" type="image/x-icon">
<link rel="shortcut icon" href="image/mylogo.png" type="image/x-icon">
<link href="Style.css" rel="stylesheet" type="text/css">
<meta charset="gb2312">
<title>保存旅行的回忆::用户注册</title>
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
<div class="partCon">
       <div class="flash">
            <!--左右切换按扭-->
            <a href="javascript:void(0)" class="prev"></a>
            <a href="javascript:void(0)" class="next"></a>

            <!--图片滚动部分-->
            <div class="scroll">
                <img src="image/register/flash1.png" style="left:0px">
                <img src="image/register/flash2.jpeg">
                <img src="image/register/flash3.jpg">
                <img src="image/register/flash4.jpg">
                <img src="image/register/flash5.jpg">
                <img src="image/register/flash6.jpg">
            </div>


            <!--滚动按扭部分-->
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
    /*首页轮播图特效*/
var _index=0;
var _qindex=0;
var clearTime=null;


$(".But span").mouseover(function(){
	clearInterval(clearTime);
	_index=$(this).index();//获取序列号
	scrollPlay();//调用播放方法
	_qindex=_index;//把当前的值赋作为下一次的前一个序列号

}).mouseout(function(){
	autoPlay();
});

//右切换按扭
$(".flash a.next").click(function(){
	_index++;//序列号加1
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
//自动轮播
function autoPlay(){
	clearTime=setInterval(function(){
		_index++;//序列号加1

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
	}else if(_index>_qindex){//左移
		next();
	}else if(_index<_qindex){//往右移
		prev();
	}

}

//下一张，左移
function next(){
	$(".scroll img").eq(_qindex).animate({"left":"-1020px"},300);
	$(".scroll img").eq(_index).css("left","1000px").animate({"left":"0px"},300);

};

//上一张 ，右移
function prev(){
	$(".scroll img").eq(_qindex).animate({"left":"1000px"},300);
	$(".scroll img").eq(_index).css("left","-1000px").animate({"left":"0px"},300);
}
//按扭显示隐藏
$(".flash").hover(function(){
	//显示
	$("a.prev,a.next").show();
},function(){
	//隐藏
	$("a.prev,a.next").hide();
});
   </script>
   
<div id="content">
<div id="firstTitle">
<div style="font-family:'微软雅黑'; font-size:36px; color:white; text-align:center; padding-top:50px;">用户注册</div>

</div>
<div id="details">
<div id="registerTable">
<div id="mainTable" style="float:left; margin:20px 0px 0px 140px; font-size:20px; color:#666;"><form method="post" action="checkForm.php">
<div><label class="item">用户名</label><input class="ipt" required="required" type="text" name="R_userName" size="34" maxlength="18" placeholder="<6-18位英文字母或数字组成>"><span style="font-size:12px; color:#CCC">* 6-18位字母或数字,第一位不能是数字</span></div>
<div><label class="item">密码</label><input class="ipt" required="required" type="password" name="R_passWord" size="34" maxlength="16" placeholder="<6-16位英文字母或数字组成>"><span style="font-size:12px; color:#CCC">* 密码请注意区分大小写</span></div>
<div><label class="item">确认密码</label><input class="ipt" required="required" type="password" name="RR_passWord" size="34" maxlength="16" placeholder="<请再次输入以上密码作验证>"><span style="font-size:12px; color:#CCC">* 请再次输入以上密码</span></div>
<div><label class="item">昵称</label><input class="ipt" required="required" type="text" name="u_name" size="34" maxlength="12" placeholder="<12位以下中英文或数字组成>"><span style="font-size:12px; color:#CCC">* 12位以下中英文或数字</span></div>
<div><label class="item">性别</label><input type="radio" name="sex" value="1">男</label><label><input type="radio" name="sex" value="0">女</div>
<div><label class="item">生日</label><input type="text" size="6" name="R_year">年<input type="text" name="R_month" size="4">月<input type="text" name="R_day" size="4">日</div>
<div><label class="item">邮箱地址</label><input class="ipt" type="email" name="address" size="34" placeholder="<选填>"><span style="font-size:12px; color:#CCC"><选填></span></div>
<div><label class="item">电话号码</label><input class="ipt" type="tel" name="telNumber" size="34" placeholder="<选填>"><span style="font-size:12px; color:#CCC"><选填></span></div>
<div><label class="item">QQ</label><input class="ipt" type="text" maxlength="11" name="qq" size="34" placeholder="<选填>"><span style="font-size:12px; color:#CCC"><选填></span></div>
<div style="margin:10px 0px 0px 80px;">
<div style="float:left;"><input class="myButton" type="reset" name="reset" value="重置"></div>
<div style="float:right;"><input class="myButton"type="submit" name="tableSubmit" value="提交"></div>
</div>
</form></div>
</div>
</div>
</div>
</div>




<div id="backToTop"><a href="#header"><div id="top">▲</div></a></div>
<footer>江西师范大学 计算机信息工程学院 2015 &copy1308095018 13级物联网(1)班 罗丽芳</footer>
</body>
</html>
