<!doctype html>
<html>
<head>
<link rel="icon" href="myico.ico" type="image/x-icon">
<link rel="shortcut icon" href="image/mylogo.png" type="image/x-icon">
<link href="Style.css" rel="stylesheet" type="text/css">
<meta charset="gb2312">
<title>保存旅行的回忆::习俗</title>
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
														font-family:"微软雅黑"；
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


	<div class="movi">
			<ul>
				<li>
					<img src="image/js/c1.jpg" />
					<div class="con">
					<h4>四川藏区</h4>
					<p>
					渊源流长的女国遗风以及以牦牛谷天然盆景和党岭风光为代表的壮丽迷人的山水美景，丰富多彩的红色文化，素有"甲居游藏寨，梭坡观碉群，巴底赏美，中路看汉子，党岭、牦牛谷泡温泉"之说。
				</p>
					<a href="#">了解详情</a>
					</div>
				</li>
				<li>
					<img src="image/js/c2.jpg" />
					<div class="con">
					<h4>孔明灯</h4>
					<p>
					现代人放孔明灯多作为祈福之用。男女老少亲手写下祝福的心愿，象徵丰收成功，幸福年年。
				</p>
					<a href="#">了解详情</a>
					</div>
				</li>
				<li>
					<img src="image/js/c3.jpg" />
					<div class="con">
					<h4>布依族赶表</h4>
					<p>
					赶表是布依族青年男女寻觅配偶，交流感情的一种社交活动。"赶表"多造择在喜事和农闲赶场天进行。赶表（谈情说爱）时，男女青年可以通过对歌，吹木叶和勒尤（布依族乐器）来表达自己的爱慕之情。
				</p>
					<a href="#">了解详情</a>
					</div>
				</li>
				<li>
					<img src="image/js/c4.jpg" />
					<div class="con">
					<h4>傣族泼水节</h4>
					<p>
					泼水节是展现傣族水文化、音乐舞蹈文化、饮食文化、服饰文化和民间崇尚等传统文化的综合舞台，是研究傣族历史的重要窗口，具有较高的学术价值。
				</p>
					<a href="#">了解详情</a>
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
<div id="foodMap">各地风俗</div>
<ul id="myButton_">
<a href="#cfj"><li>福建省</li></a>
<a href="#cgd"><li>广东省</li></a>
<a href="#cjs"><li>江苏省</li></a>
<a href="#cah"><li>安徽省</li></a>
</ul>
</div>
<div id="details">
<div id="cfj">
<img src="image/cfj.jpg" width="280px" height="220px" style="margin:10px; clear:both;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">福建省<br></div>&nbsp;&nbsp;&nbsp;&nbsp;浦城县女子穿行南浦桥，吃求长寿。建宁中秋夜俗以挂　灯为向月宫求子的吉兆。上杭县中秋，儿女多於拜月时请月姑。方法是以竹筐作为月姑的替身，如果有神降临，竹筐会自己摇动，以其摇动的次数来卜吉凶。
<br>&nbsp;&nbsp;&nbsp;&nbsp;龙岩人吃月饼时，家长会在中央控出直径二、三寸的圆饼供长辈食用，意思是秘密事不能让晚辈知道。这个习俗是来自於月饼中藏有反元杀鞑子讯的传说。金门中秋拜月前要先拜天公。拜天公用做成仙桃型的红叫「天公」。拜月的红则做成猪羊的形状，数目必是九猪十六羊。</div>
</div>
<div id="cgd">
<img src="image/cgd.jpg" width="280px" height="220px" style="margin:10px; float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">广东省<br></div>&nbsp;&nbsp;&nbsp;&nbsp;浦广东各地有中秋节吃芋头的习俗，据说是纪念元末杀鞑子的历史故事。中秋节杀鞑子後，便以其头祭月，後来改以芋头代替。至今广东人剥芋皮时仍称为「剥鬼皮」。
<br>&nbsp;&nbsp;&nbsp;&nbsp;广东中秋也有儿童提灯的风俗。灯的材料有红柚皮雕的柚灯，素馨茉莉花结的花灯，明亮的灯火带著阵阵的花果清香，使人爱不释手。东莞青年未婚者也在月下焚香燃烛，乞求月老为其撮合。霞浦有中秋曳石的风俗。曳石是戚继光发明的，以石块系上绳索，沿街拖拉，虚张声势，用来恐哧敌军。</div>
</div>
<div id="cjs">
<img src="image/cjs.jpg" width="280px" height="220px" style="margin:10px;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">江苏省<br></div>&nbsp;&nbsp;&nbsp;&nbsp;春节期间，江苏地区的旧习俗中还有许多禁忌，诸如年初一不动剪刀，免得口舌之争；不动菜刀，以免杀身之祸；不吃稀饭，怕出门遇雨；不扫地，怕把财运扫光等等。随着科学知识的普及，有很多不科学的习俗也逐渐被人淡忘；健康有益的娱乐休闲活动，却一直延续下来。
<br>&nbsp;&nbsp;&nbsp;&nbsp;苏州人除夕在饭内放进熟荸荠，吃时挖出来，谓之"掘元宝"，亲友来往， 泡茶时要置入两只青橄榄，谓之喝"元宝茶"，恭喜发财。</div>
</div>
<div id="cah">
<img src="image/cah.jpg" width="280px" height="220px" style="margin:10px;float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">安徽省<br></div>&nbsp;&nbsp;&nbsp;&nbsp;婺源中秋节，儿童以砖瓦堆一中空宝塔。塔上挂以帐幔匾额等装饰品，又置一桌於塔前，陈设各种敬「塔神」之器具。夜间则内外皆点上灯烛，光辉可爱。绩溪 中秋儿童打中秋炮。
<br>&nbsp;&nbsp;&nbsp;&nbsp;中秋炮是以稻草扎成发辫状，浸湿后再拿起来向石上打击，使 发出巨响并有游火龙的风俗。火龙是以称草扎成的龙，身上插有香柱。游火龙时有 锣鼓队同行，游遍各村后再送至河中。</div>
</div>
</div>
</div>
</div>
<div id="backToTop"><a href="#header"><div id="top">▲</div></a></div>
<footer>江西师范大学 计算机信息工程学院 2015 &copy  1308095012 13级物联网(1)班 罗丽芳</footer>
</body>
</html>
