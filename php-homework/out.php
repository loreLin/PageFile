<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>�ޱ����ĵ�</title>
</head>

<body>
<?php
	session_start();
	unset($_SESSION['isLogin']);
	echo "<script>";
	echo "location.href='index.php';";
	echo "</script>";
?>
</body>
</html>