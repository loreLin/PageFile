<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>无标题文档</title>
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