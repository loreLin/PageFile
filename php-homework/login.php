<!doctype html>
<html>
<head>
<link rel="icon" href="myico.ico" type="image/x-icon">
<link rel="shortcut icon" href="image/mylogo.png" type="image/x-icon">
<link href="Style.css" rel="stylesheet" type="text/css">
<meta charset="gb2312">
<title>�������еĻ���::�û���¼</title>
</head>

<body>
<?php
		session_start();	/* ����session */
		$link=mysql_connect("localhost",'root','') or die('����ʧ��');/*�������ݿ�*/
		mysql_select_db('travelmemo',$link) or die('ѡ�����ݿ�ʧ��');	/*ѡ�����ݿ�*/
		mysql_query("SET NAMES gb2312");			/*�޸��ַ���*/	
		$userName = @$_POST['userName'];			/*��ȡ�û�������û���*/
		$passWord = @$_POST['passWord'];			/*��ȡ�û����������*/
		$_SESSION['isLogin']=0;	/* �û���¼��� */
		if($passWord && $userName)/*�������û�������*/
		{
			$s_username = "select userName from userinfo where userName='$userName'";		/*��ѯ�û���*/
			$s_password = "select passWord from userinfo where passWord='$passWord'";		/*��ѯ����*/
			$s_level = "select level from userinfo where userName='$userName'";				/*�û��ȼ�*/
			$s_result_uname = mysql_query($s_username);		/*�û�����ѯ*/
			$s_result_pwd = mysql_query($s_password);			/*�����ѯ*/
			$s_result_level = mysql_query($s_level);		/*�ȼ���ѯ*/
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
				echo "alert('��������û�����������������µ�¼��');";
				unset($_SESSION['isLogin']);
				echo "location.href='index.php';";
				echo "</script>";	   
			}
		}
		else/*û�������û���������*/
		{
			echo "<script>";
			echo "alert('�������û��������룡');";
			unset($_SESSION['isLogin']);
			echo "location.href='index.php';";
			echo "</script>";
		}
	
?>
</body>
</html>