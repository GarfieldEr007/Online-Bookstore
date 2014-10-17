<?php
session_start();

?>
<html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Content-Type" content="text/html; charset=gb2312">
<title>登录页面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">

</style>
</head>


<body bg="u=1339641298,4150089441&fm=3&gp=0.jpg">
<p>&nbsp;</p>
<p>
  <?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("person");
$p=$_POST["person"];
$w=$_POST["password"];
$cds=mysql_query("select username from user where (username='$p') and (password='$w')");
$result=mysql_num_rows($cds);
//var_dump($result);
if(isset($_POST["person"]))
 {
 if($result)
  {
  $_SESSION["person"]=$p;
   $_SESSION["password"]=$w;
 header("Location:jinru.php");
  }
  else
 header("Location:cuowu.php");
  }
  else
  {$pe=$_SESSION["person"];
  $pa=$_SESSION["password"];
  $cdd=mysql_query("select username from user where (username='$pe') and (password='$pa')");
$re=mysql_num_rows($cdd);
  if($re)
 header("Location:jinru.php");
  else
  {?>
</p>
<form action="denglu.html" method="POST">
<table width="247" border="2" align="center" cellpadding="1" bordercolor="#FFFF99" bgcolor="#99FF66">
  <tr>
    <td width="62">name: </td>
    <td width="167"><input type="text" name="person" /></td>
  </tr>
  <tr>
    <td>password:</td>
    <td><input type="password" name="password" /></td>
  </tr>
  <tr>
    <td bgcolor="#99FF66"><a href="login.php">注册 </a></td>
    <td><input type="submit" value="go" size="15"/></td>
  </tr>
</table>

<br />
</form>
<?php
 }

 
  }
  mysql_close($conn);
?>

<a href="login.php"></a>

</body>
</html>