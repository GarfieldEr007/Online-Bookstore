<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>管理员退出</title>
</head>

<body>
<?php
@session_start();
//注销session
$_SESSION["user"]="";
$_SESSION["password"]="";
//重定向页面
$dest="http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/syslogin.php";
header("Location: syslogin.php");
?>
</body>
</html>