<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>sys_manager</title>
</head>

<body leftmargin="10" topmargin="10" marginwidth="10" marginheight="10">
 <?php
//$conn=mysql_connect("localhost","root","");
//mysql_select_db("person");
include "linkdatabase.php";
$p6=$_POST["user"];
$w6=$_POST["password"];
$p=mysql_real_escape_string($p6);

$w=mysql_real_escape_string($w6);
$cds=mysql_query("select sys_name from sysmanager where (sys_name='$p') and (sys_password='$w')");
$result=mysql_num_rows($cds);

//var_dump($result);

if(isset($_POST["user"]))
 {
 if($result)
  {
$_SESSION["user"]=$p;
   $_SESSION["password"]=$w;
 header("Location:myindex.php");
  }
  else
 header("Location:wrong.php");
  }
  else
  {$pe=$_SESSION["user"];
  $pa=$_SESSION["password"];
  $cdd=mysql_query("select sys_name from sysmanager where (sys_name='$pe') and (sys_password='$pa')");
$re=mysql_num_rows($cdd);
  if($re)
 header("Location:myindex.php");
  else
 {?>
<br><br><br><br><br>
<table width='250' border='0' align='center' cellpadding='4' cellspacing='1' class='tableoutline'>
	<tr class='tbhead'>
    <td colspan='2' height='25'>
    <input type='hidden' name=action value='login'>
    <div align='center'><b>登录入口：</b></div>
    </td>
    </tr>
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
  mysql_close($conn);
  ?>
</body>
</html>