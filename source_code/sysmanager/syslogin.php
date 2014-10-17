<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>syslogin</title>
</head>

<body leftmargin="10" topmargin="10" marginwidth="10" marginheight="10" bgcolor="#FFCC99">

 <?php

include "connect.php";
@session_start();
$p=@$_POST["user"];
$w=@$_POST["password"];
//$p=mysql_real_escape_string($p6);

//$w=mysql_real_escape_string($w6);
$cds=$db->query("select sys_name from sysmanager where (sys_name='$p') and (sys_password='$w')");
		//$_SESSION["user"]=$p;
   		//$_SESSION["password"]=$w;
//fetch(PDO::FETCH_COLUMN);
//$_SESSION['user']
$result=$cds->fetchColumn();
if(isset($_POST["user"]))
 {
 	if($result)
  	{//var_dump($cds);
		$_SESSION["user"]=$p;
   		$_SESSION["password"]=$w;
 		header("Location:sysmanager.php");
  	}
  	else
		 header("Location:loginerror.php");
 }
 else
 {
	 	$pe=@$_SESSION["user"];
  		$pa=@$_SESSION["password"];
		//var_dump($pa);
  		$cdd=$db->query("select sys_name from sysmanager where (sys_name='$pe') and (sys_password='$pa')");
		$re=$cdd->fetchColumn();
		//$re=mysql_num_rows($cdd);
  		if($re)
 			header("Location:sysmanager.php");
  		else
 		{?>
<br><br><br><br><br><br><br><br><br>
			<table width='250' border='0' align='center' cellpadding='4' cellspacing='1' class='tableoutline'>
			<tr class='tbhead'>
   		 	<td colspan='2' height='25'>
    
    		<div align='center'><b>系统管理员登录入口：</b></div>
    		</td>
    		</tr>
    		<form  action="syslogin.php" method="POST">
    		<tr class='firstalt'>
    		<td width='118'><font class='normalfont'>用户:</font></td>
    		<td width='232'><font face='Verdana' size='2'><input class=text type='text' name='user' value=''></font></td>
    		</tr>
    		<tr class='secondalt'>
    		<td width='118'><font class='normalfont'>密码:</font></td>
    		<td width='232'><font class='normalfont'><input class=text type='password' name='password' value=''></font></td>
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