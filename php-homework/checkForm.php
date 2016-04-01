<!doctype html>
<html>
<head>
<link rel="icon" href="myico.ico" type="image/x-icon">
<link rel="shortcut icon" href="image/mylogo.png" type="image/x-icon">
<link href="Style.css" rel="stylesheet" type="text/css">
<meta charset="gb2312">
<title>保存旅行的回忆::用户注册</title>
</head>

<body class="my space-course">
<?php 
	$link=mysql_connect("localhost",'root','') or die('连写失败');	/*连接数据库*/
	mysql_select_db('travelmemo',$link) or die('选择数据库失败');		/*选择数据库*/
	mysql_query("SET NAMES gb2312");			/*修改字符集*/
	$time = date("y-m-d",time());			/*获取当前时间*/
	if(isset($_POST['tableSubmit']))  
	{ 
		/******************读取用户填写表单数据*********************/
		$R_userName = @$_POST['R_userName'];
		$R_passWord = @$_POST['R_passWord'];
		$RR_passWord = @$_POST['RR_passWord'];
		$u_name = @$_POST['u_name'];
		$sex = @$_POST['sex'];
		$R_year = @$_POST['R_year'];
		$R_month = @$_POST['R_month'];
		$R_day = @$_POST['R_day'];
		$address = @$_POST['address'];
		$tel = @$_POST['telNumber'];
		$qq = @$_POST['qq'];
		
		
		$birthday = $R_year."-".$R_month."-".$R_day;
		/***********************************************************/
		
		$userName_len = strlen($R_userName);	/*获取用户名长度*/
		$pwd_len = strlen($R_passWord);			/*获取密码长度*/
		$userN_First = substr($R_userName,0,1);	/*取出用户名的第一个字符*/
		
		/*判断用户输入的表单内容是否符合要求*/
	 	
		/* 查询用户名是否重复 */
		$s_username = "select userName from userinfo where userName='$R_userName'";
		$s_result_uname = mysql_query($s_username);
		$s_row_uname = mysql_fetch_array($s_result_uname);
		
		if($userName_len<6)	/*用户名长度小于6*/
		{
			echo "<script>";
			echo "alert('您输入的用户名小于六位，请重新输入！');";
			echo "location.href='register.php';";
			echo "</script>";	   
		}
		else if(!($userN_First<='Z' && $userN_First>='A') && !($userN_First<='z' && $userN_First>='a')) /*用户名第一位不是字母*/
		{
			echo "<script>";
			echo "alert('您输入的用户名第一位不是字母，请重新输入！');";
			echo "location.href='register.php';";
			echo "</script>";
		}
		else if($s_row_uname){
			echo "<script>";
			echo "alert('用户名已存在，请重新输入！');";
			echo "location.href='register.php';";
			echo "</script>";
		}
		else if($pwd_len<6) /*密码长度小于6*/
		{
			echo "<script>";
			echo "alert('您输入的密码小于六位，请重新输入！');";
			echo "location.href='register.php';";
			echo "</script>";
		}
		else if(strcmp($R_passWord,$RR_passWord)<0)	/*两次密码输入不同*/
		{
			echo "<script>";
			echo "alert('您两次输入的密码不同，请重新输入！');";
			echo "location.href='register.php';";
			echo "</script>";
		}
		else if($R_year)  /*判断出生年是否正确*/
		{
			if($R_year>2014||$R_year<1900)
			{
				echo "<script>";
				echo "alert('您输入的出生日期有错误，请重新输入！');";
				echo "location.href='register.php';";
				echo "</script>";
			}
		}
		else if($R_month)  /*判断出生月是否正确*/
		{
			if($R_month>12||$R_month<1)
			{
				echo "<script>";
				echo "alert('您输入的出生日期有错误，请重新输入！');";
				echo "location.href='register.php';";
				echo "</script>";
			}
		}
		else if($R_day)  /*判断出生日是否正确*/
		{
			if(($R_month==1||$R_month==3||$R_month==5||$R_month==7||$R_month==8||$R_month==10||$R_month==12)&& ($R_day>31 || $R_day<1))
			{
				echo "<script>";
				echo "alert('您输入的出生日期有错误，请重新输入！');";
				echo "location.href='register.php';";
				echo "</script>";
			}
			else if(($R_month==4||$R_month==6||$R_month==9||$R_month==11)&& ($R_day>30 || $R_day<1))
			{
				echo "<script>";
				echo "alert('您输入的出生日期有错误，请重新输入！');";
				echo "location.href='register.php';";
				echo "</script>";
			}
			else if(($R_year%4==0 && $R_year%100!=0) && $R_month==2 && ($R_day<1 || $R_day>29)) /*闰年二月*/
			{
				echo "<script>";
				echo "alert('您输入的出生日期有错误，请重新输入！');";
				echo "location.href='register.php';";
				echo "</script>";
			}
			else if(!($R_year%4==0 && $R_year%100!=0) && $R_month==2 && ($R_day<1 || $R_day>28))
			{
				echo "<script>";
				echo "alert('您输入的出生日期有错误，请重新输入！');";
				echo "location.href='register.php';";
				echo "</script>";
			}
		}	
		
		
		
		/***********插入记录*********/
		$sql = "insert into userinfo() values('$R_userName','$R_passWord','$u_name',$sex,'$birthday','$address','$tel','$qq','$time','123')";
		mysql_query($sql) or die('注册失败:'.mysql_error());
		/****************************/	
		session_start();	/* 开启session */
		$_SESSION['isLogin']=0;	/* 用户登录标记 */
		$_SESSION['uname']=$R_userName;
		echo "<script>";
		echo "location.href='index.php';";
		echo "</script>";
	}	
?>
</body>
</html>