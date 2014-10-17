<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>注册用户</title>
</head>

<body>
<?php
include "connect.php";
$u=@$_POST["uname"];
$p=@$_POST["pwd"];
$e=@$_POST["email"];
//$ut=@$_POST["usertype"];
//$v=@$_POST["value"];
//var_dump($ut);
//$cp=@$_POST["company"];
//$cds=mysql_query("select username from user where (username='$u')");
$cds=$db->query("select c_name from customer where (c_name='$u')");
$cdd=$db->query("select ordermanager_name from ordermanager where (ordermanager_name='$u')");
//$count = $db->exec("INSERT INTO customer SET c_name = 'heiyeluren',gender='男',time=NOW()");
//$result=mysql_num_rows($cds);
$result=$cds->fetchColumn();
$re=$cdd->fetchColumn();
//$field=mysql_fetch_field($cds);
if($re||$result)
{
  header("Location:orderrepeat.php");
}

	else
	{
	$db->exec("INSERT INTO ordermanager SET ordermanager_name = '$u',ordermanager_password='$p',ordermanager_email='$e'");		
?>
   <p align=center>
   <br><br><br><br><br><br><br><br><br><br>
   <font face="宋体" size=6 align=center>恭喜！注册成功</font><br>
   <font face="宋体" size=4 align=center><a href="../index.php">跳转主页</font><br
   </p>
   <?php
  }
?>

</body>
</html>
