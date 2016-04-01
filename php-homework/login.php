<!doctype html>
<html>
<head>
<link rel="icon" href="myico.ico" type="image/x-icon">
<link rel="shortcut icon" href="image/mylogo.png" type="image/x-icon">
<link href="Style.css" rel="stylesheet" type="text/css">
<meta charset="gb2312">
<title>保存旅行的回忆::用户登录</title>
</head>

<body>
<?php
		session_start();	/* 开启session */
		$link=mysql_connect("localhost",'root','') or die('连接失败');/*连接数据库*/
		mysql_select_db('travelmemo',$link) or die('选择数据库失败');	/*选择数据库*/
		mysql_query("SET NAMES gb2312");			/*修改字符集*/	
		$userName = @$_POST['userName'];			/*获取用户输入的用户名*/
		$passWord = @$_POST['passWord'];			/*获取用户输入的密码*/
		$_SESSION['isLogin']=0;	/* 用户登录标记 */
		if($passWord && $userName)/*输入了用户名密码*/
		{
			$s_username = "select userName from userinfo where userName='$userName'";		/*查询用户名*/
			$s_password = "select passWord from userinfo where passWord='$passWord'";		/*查询密码*/
			$s_level = "select level from userinfo where userName='$userName'";				/*用户等级*/
			$s_result_uname = mysql_query($s_username);		/*用户名查询*/
			$s_result_pwd = mysql_query($s_password);			/*密码查询*/
			$s_result_level = mysql_query($s_level);		/*等级查询*/
			$s_row_uname = mysql_fetch_array($s_result_uname);
			$s_row_pwd = mysql_fetch_array($s_result_pwd);
			$s_row_level = mysql_fetch_array($s_result_level);
			$_SESSION['s_row_level']=$s_result_level;
			$_SESSION['username']=$userName;
			
			if($s_row_uname && $s_row_pwd)
			{
				$_SESSION['isLogin']=1;
				
				header("location:index.php");
				
			}
			else
			{
				echo "<script>";
				echo "alert('您输入的用户名或密码错误，请重新登录！');";
				unset($_SESSION['isLogin']);
				echo "location.href='index.php';";
				echo "</script>";	   
			}
		}
		else/*没有输入用户名或密码*/
		{
			echo "<script>";
			echo "alert('请输入用户名或密码！');";
			unset($_SESSION['isLogin']);
			echo "location.href='index.php';";
			echo "</script>";
		}
	
?>
</body>
</html>