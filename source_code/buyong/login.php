<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sysmanager</title>
<meta content="text/html;charset=gb2312" http-equiv="Content-Type>
<meta http-equib="Pragma" content="no-cache">
<meta http-equib="Cache-Control" content="no-cache">
<meta http-equib="Expires" content="-1">
<link rel="stylesheet" href="cp.css" type="text/css">
<script language="JavaScript">
window.onload=function(){
	if(self != top){
    	top.location=self.location;
    }
    document.forms[0].username.focus();
};
</head>

<body leftmargin="10" topmargin="10" marginwidth="10" marginheight="10">
<?php
include('connect.php');
if(isset($_POST['username'])&&$_POST['username']){
	@session_start();
	$query="SELECT password FROM sysmanager WHERE sys_name='".$_POST['username']."'";
	$result =mysql_query($query);
	$row =mysql_fetch_array($query);
	$_SESSION['isAdmin']=($row[0]==md5($_POST['password']))?true:false;
	if($_SESSION['isAdmin']){
		$_SESSION['username']=$_POST['username'];
		$dest="http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."index.php";
		header("Location:".dest);
		}
	?>
	<br><br><br><br><br>
<form method='POST' action='login.php'>
<table width='250' border='0' align='center' cellpadding='4' cellspacing='1' class='tableoutline'>
	<tr class='tbhead'>
    <td colspan='2' height='25'>
    <input type='hidden' name=action value='login'>
    <div align='center'><b>登录入口</b></di>
    </td>
    </tr>
    <tr class='firstalt'>
    <td width='118'><font class='normalfont'>用户:</font></td>
    <td width='232'><font face='Verdana' size='2'><input class=text type='text' name='username' value=''></font></td>
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
		mysql_close();
}
?>
</body>
</html>