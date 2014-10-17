<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>orderlogin</title>
</head>

<body leftmargin="10" topmargin="10" marginwidth="10" marginheight="10" bgcolor="#99FF99">

 <?php
// @session_start();
include "connect.php";
@session_start();
$p=@$_POST["user2"];
$w=@$_POST["password2"];
//$p=mysql_real_escape_string($p6);

//$w=mysql_real_escape_string($w6);
$cds=$db->query("select c_name from customer where (c_name='$p') and (c_password='$w')");
//fetch(PDO::FETCH_COLUMN);
//$_SESSION['user']
$result=$cds->fetchColumn();
if(isset($_POST["user2"]))
 {
 	if($result)
  	{//var_dump($cds);
		$_SESSION["user2"]=$p;
   		$_SESSION["password2"]=$w;
 		header("Location:../userindex.php");
  	}
  	else
		 header("Location:loginerror.php");
 }
 else
 {
	 	$pe=@$_SESSION["user2"];
  		$pa=@$_SESSION["password2"];
  		$cdd=$db->query("select c_name from customer where (c_name='$pe') and (c_password='$pa')");
		$re=$cdd->fetchColumn();
		//$re=mysql_num_rows($cdd);
  		if($re)
 			header("Location:../userindex.php");
  		else
 		{?>
<br><br><br><br><br><br><br><br><br>
			<table width='250' border='0' align='center' cellpadding='4' cellspacing='1' class='tableoutline'>
			<tr class='tbhead'>
   		 	<td colspan='2' height='25'>
    
    		<div align='center'><b>会员登录入口：</b></div>
    		</td>
    		</tr>
    		<form action="userlogin.php" method="POST">
    		<tr class='firstalt'>
    		<td width='118'><font class='normalfont'>用户:</font></td>
    		<td width='232'><font face='Verdana' size='2'><input class=text type='text' name='user2' value=''></font></td>
    		</tr>
    		<tr class='secondalt'>
    		<td width='118'><font class='normalfont'>密码:</font></td>
    		<td width='232'><font class='normalfont'><input class=text type='password' name='password2' value=''></font></td>
    		</tr>
   		 	<tr class='tbhead'>
    		<td colspan='2'><div align='center'><input class='bginput' type='submit' value='登录'><input class='bginput' type='reset' value='重置'></div></td>
    		</tr>
    		</table>
    		</form>
			<?php
 		}
  }

  ?>
</body>
</html>