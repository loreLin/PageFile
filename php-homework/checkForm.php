<!doctype html>
<html>
<head>
<link rel="icon" href="myico.ico" type="image/x-icon">
<link rel="shortcut icon" href="image/mylogo.png" type="image/x-icon">
<link href="Style.css" rel="stylesheet" type="text/css">
<meta charset="gb2312">
<title>�������еĻ���::�û�ע��</title>
</head>

<body class="my space-course">
<?php 
	$link=mysql_connect("localhost",'root','') or die('��дʧ��');	/*�������ݿ�*/
	mysql_select_db('travelmemo',$link) or die('ѡ�����ݿ�ʧ��');		/*ѡ�����ݿ�*/
	mysql_query("SET NAMES gb2312");			/*�޸��ַ���*/
	$time = date("y-m-d",time());			/*��ȡ��ǰʱ��*/
	if(isset($_POST['tableSubmit']))  
	{ 
		/******************��ȡ�û���д������*********************/
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
		
		$userName_len = strlen($R_userName);	/*��ȡ�û�������*/
		$pwd_len = strlen($R_passWord);			/*��ȡ���볤��*/
		$userN_First = substr($R_userName,0,1);	/*ȡ���û����ĵ�һ���ַ�*/
		
		/*�ж��û�����ı������Ƿ����Ҫ��*/
	 	
		/* ��ѯ�û����Ƿ��ظ� */
		$s_username = "select userName from userinfo where userName='$R_userName'";
		$s_result_uname = mysql_query($s_username);
		$s_row_uname = mysql_fetch_array($s_result_uname);
		
		if($userName_len<6)	/*�û�������С��6*/
		{
			echo "<script>";
			echo "alert('��������û���С����λ�����������룡');";
			echo "location.href='register.php';";
			echo "</script>";	   
		}
		else if(!($userN_First<='Z' && $userN_First>='A') && !($userN_First<='z' && $userN_First>='a')) /*�û�����һλ������ĸ*/
		{
			echo "<script>";
			echo "alert('��������û�����һλ������ĸ�����������룡');";
			echo "location.href='register.php';";
			echo "</script>";
		}
		else if($s_row_uname){
			echo "<script>";
			echo "alert('�û����Ѵ��ڣ����������룡');";
			echo "location.href='register.php';";
			echo "</script>";
		}
		else if($pwd_len<6) /*���볤��С��6*/
		{
			echo "<script>";
			echo "alert('�����������С����λ�����������룡');";
			echo "location.href='register.php';";
			echo "</script>";
		}
		else if(strcmp($R_passWord,$RR_passWord)<0)	/*�����������벻ͬ*/
		{
			echo "<script>";
			echo "alert('��������������벻ͬ�����������룡');";
			echo "location.href='register.php';";
			echo "</script>";
		}
		else if($R_year)  /*�жϳ������Ƿ���ȷ*/
		{
			if($R_year>2014||$R_year<1900)
			{
				echo "<script>";
				echo "alert('������ĳ��������д������������룡');";
				echo "location.href='register.php';";
				echo "</script>";
			}
		}
		else if($R_month)  /*�жϳ������Ƿ���ȷ*/
		{
			if($R_month>12||$R_month<1)
			{
				echo "<script>";
				echo "alert('������ĳ��������д������������룡');";
				echo "location.href='register.php';";
				echo "</script>";
			}
		}
		else if($R_day)  /*�жϳ������Ƿ���ȷ*/
		{
			if(($R_month==1||$R_month==3||$R_month==5||$R_month==7||$R_month==8||$R_month==10||$R_month==12)&& ($R_day>31 || $R_day<1))
			{
				echo "<script>";
				echo "alert('������ĳ��������д������������룡');";
				echo "location.href='register.php';";
				echo "</script>";
			}
			else if(($R_month==4||$R_month==6||$R_month==9||$R_month==11)&& ($R_day>30 || $R_day<1))
			{
				echo "<script>";
				echo "alert('������ĳ��������д������������룡');";
				echo "location.href='register.php';";
				echo "</script>";
			}
			else if(($R_year%4==0 && $R_year%100!=0) && $R_month==2 && ($R_day<1 || $R_day>29)) /*�������*/
			{
				echo "<script>";
				echo "alert('������ĳ��������д������������룡');";
				echo "location.href='register.php';";
				echo "</script>";
			}
			else if(!($R_year%4==0 && $R_year%100!=0) && $R_month==2 && ($R_day<1 || $R_day>28))
			{
				echo "<script>";
				echo "alert('������ĳ��������д������������룡');";
				echo "location.href='register.php';";
				echo "</script>";
			}
		}	
		
		
		
		/***********�����¼*********/
		$sql = "insert into userinfo() values('$R_userName','$R_passWord','$u_name',$sex,'$birthday','$address','$tel','$qq','$time','123')";
		mysql_query($sql) or die('ע��ʧ��:'.mysql_error());
		/****************************/	
		session_start();	/* ����session */
		$_SESSION['isLogin']=0;	/* �û���¼��� */
		$_SESSION['uname']=$R_userName;
		echo "<script>";
		echo "location.href='index.php';";
		echo "</script>";
	}	
?>
</body>
</html>