<!doctype html>
<html>
<head>
<link rel="icon" href="myico.ico" type="image/x-icon">
<link rel="shortcut icon" href="image/mylogo.png" type="image/x-icon">
<link href="Style.css" rel="stylesheet" type="text/css">
<meta charset="gb2312">
<title>保存旅行的回忆::美景</title>
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
	$myname ="hello";

	echo "<div id='login-area'>";
	echo "<ul id='login-item'>";
	echo "<table id='myInfo'>";
	echo "<tr>";
	echo "<td width='75px' height='54px' rowspan='2'><img width='45' height='45' src='image/userInfo/picture.jpg'></td>";
	echo "<td width='100px'><a href='#'>".$_SESSION['username']."</a></td>";
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






		<div class="bg">
			<div class="show">
				<div class="pic1 pic">
					<div class="txt">
						<p class="p1">作者<br>：默默的墨墨</p>
						<p class="p2">我的个人拉萨之旅丨丨故事之城</p>
					</div>
				</div>
				<div class="pic2 pic">
					<div class="txt">
						<p class="p1">作者<br>：美丽的天空</p>
						<p class="p2">拥抱绝美的戈壁，倾听响沙的乐奏</p>
					</div>
				</div>
				<div class="pic3 pic">
					<div class="txt">
						<p class="p1">作者<br>：蓝染惣右介</p>
						<p class="p2">这美丽的香格里拉</p>
					</div>
				</div>
				<div class="pic4 pic">
					<div class="txt">
						<p class="p1">作者<br>：美丽的天空</p>
						<p class="p2">征服个人项目 丨丨 南极</p>
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
<div id="foodMap">旅行地图</div>
<ul id="myButton">
<a href="#gulangyu"><li>鼓浪屿</li></a>
<a href="#xihu"><li>西湖景</li></a>
<a href="#wuyuan"><li>婺源游</li></a>
<a href="#xitang"><li>走西塘</li></a>
<a href="#wuzhen"><li>逛乌镇</li></a>
<a href="#lijiang"><li>丽江美</li></a>
</ul>
</div>
<div id="details">
<div id="gulangyu">
<img src="image/gulangyu.jpeg" width="280px" height="220px" style="margin:10px; clear:both;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">鼓浪屿<br></div>&nbsp;&nbsp;&nbsp;&nbsp;鼓浪屿位于厦门市西南角，与厦门市隔海相望，那里景色宜人，四季如春。导游说，民族英雄郑成功曾经屯兵于此，更使得鼓浪屿名声远扬了。 鼓浪屿素有"万国建筑博览"之称。
<br>&nbsp;&nbsp;&nbsp;&nbsp;鼓浪屿的风光更宜人，吸引了五湖四海的游客。蓝天、碧海、沙滩、新鲜的空气、哗啦啦的波浪声、凉爽的海风，真是让人陶醉。</div>
</div>
<div id="xihu">
<img src="image/xihu.jpg" width="280px" height="220px" style="margin:10px; float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">西湖<br></div>&nbsp;&nbsp;&nbsp;&nbsp;杭州西湖位于浙江省杭州市的西方，它以其秀丽的湖光山色和众多的名胜古迹而闻名中外，是中国著名的旅游胜地，也被誉为"人间天堂"。2011年6月24日，杭州西湖正式列入《世界遗产名录》，是目前中国列入《世界遗产名录》的世界遗产中唯一一处湖泊类文化遗产，也是现今《世界遗产名录》中少数几个湖泊类文化遗产之一。
<br>&nbsp;&nbsp;&nbsp;&nbsp;宋代大文豪苏东坡曾写道："天下西湖三十六，就中最好是杭州"。西湖，她拥有三面云山，一水抱城的山光水色，她以"欲把西湖比西子，浓妆淡抹总相宜"的自然风光情系天下众生。</div>
</div>
<div id="wuyuan">
<img src="image/wuyuan.jpg" width="280px" height="220px" style="margin:10px;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">婺源<br></div>&nbsp;&nbsp;&nbsp;&nbsp;婺源县， 位于江西省东北部,素有"书乡"、"茶乡"之称，是全国著名的文化与生态旅游县，被外界誉为"中国最美乡村"。
<br>&nbsp;&nbsp;&nbsp;&nbsp;
阳春三月，江西婺源篁岭山间油菜花全面盛开，层层叠叠的油菜花梯田蜿蜒于山岭之中，粉红的桃花、洁白的梨花，点缀在漫山遍野金灿灿的油菜花田中，形成独具一格的乡村田园画卷，春风吹过，生机盎然。
</div>
</div>
<div id="xitang">
<img src="image/xitang.jpg" width="280px" height="220px" style="margin:10px; float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">西塘<br></div>&nbsp;&nbsp;&nbsp;&nbsp;西塘历史悠久，是古代吴越文化的发祥地之一。早在春秋战国时期就是吴越两国的相交之地，故有"吴根越角"和"越角人家"之称。西塘是中国首批十大历史文化名镇之一。老镇区内至今保存完好的25万平方米明清建筑群，规模之大和保存之完好是江南少有的。
<br>&nbsp;&nbsp;&nbsp;&nbsp;漫步在西塘夜色之中，一边是静静的西塘夜色，一边是热闹的夜生活。灯火阑珊下，你会看到千年西塘的历史足迹：馄饨老鸭煲、西塘炒青豆、钱氏豆腐花、荷叶粉蒸肉……你还会听到来自历史的声音——苍劲有力的越剧唱调。
</div>
</div>
<div id="wuzhen">
<img src="image/wuzhen.jpg" width="280px" height="220px" style="margin:10px;">
<div style="float:right;width: 800px;padding:10px 30px 0px 0px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">乌镇<br></div>&nbsp;&nbsp;&nbsp;&nbsp;乌镇是典型的江南地区汉族水乡古镇，有"鱼米之乡，丝绸之府"之称。乌镇具有六千余年悠久历史，是全国二十个黄金周预报景点及江南六大古镇之一。
<br>&nbsp;&nbsp;&nbsp;&nbsp;陈运和诗《乌镇剪影》赞"一个现代文明影响不大的世界 一张古老色彩依然浓重的史页"。以河成街，街桥相连，依河筑屋，水镇一体，组织起水阁、桥梁、石板巷、茅盾故居等独具江南韵味的建筑因素，体现了中国古典民居"以和为美"的人文思想，以其自然环境和人文环境和谐相处的整体美，呈现江南水乡古镇的空间魅力。
</div>
</div>
<div id="lijiang">
<img src="image/lijiang.jpg" width="280px" height="220px" style="margin:10px;float:right;">
<div style="float:left;width: 800px;padding:10px 10px 0px 30px; line-height:30px; height:230px;"><div style="font-weight:bold; font-size:22px; margin-bottom:15px; text-align:center">丽江<br></div>&nbsp;&nbsp;&nbsp;&nbsp;丽江古城，又名"大研古镇"，坐落在云南省丽江市大研镇，是一座风景秀丽，历史悠久和文化灿烂的名城，也是中国罕见的保存相当完好的少数民族古镇。
<br>&nbsp;&nbsp;&nbsp;&nbsp;丽江古城有着绚丽丰富多彩的地方民族习俗和娱乐活动，纳西古乐、东巴仪式、占卜文化、古镇酒吧以及纳西族火把节等等，别具一格。丽江古城充分体现了中国古代城市建设的成就，是中国民居中具有鲜明特色和风格的类型之一。</div>
</div>
</div>
</div>
</div>
<div id="backToTop"><a href="#header"><div id="top">▲</div></a></div>
<footer>江西师范大学 计算机信息工程学院 2015 &copy  1308095012 13级物联网(1)班 罗丽芳</footer>
</body>
</html>
