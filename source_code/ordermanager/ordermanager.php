
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta http-equiv="Content-Language" content="zh-cn">
<link rel="stylesheet" href="../image/register.css" type="text/css">
<meta name="GENERATOR" content="Microsoft FrontPage 4.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>订单管理员界面</title>
</head>
<form action=ordermanager.php method=post>
<body topmargin="0" leftmargin="0">
<div align="center"><img height=148 src="../image/a3.jpg" 
width=780><BR>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta http-equiv="Content-Language" content="zh-cn">
<link rel="stylesheet" href="../image/index.css" type="text/css">
<meta name="GENERATOR" content="Microsoft FrontPage 4.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>管理员界面</title>
</head>
<SCRIPT LANGUAGE="JavaScript">
<!--//
function check()
{
   if (isNaN(go2to.page.value))
		alert("请正确填写转到页数！");
   else if (go2to.page.value=="") 
	     {
		alert("请输入转到页数！");
		 }
   else
		go2to.submit();
}
//-->
</SCRIPT>
<SCRIPT language=JavaScript src="../image/window.js"></SCRIPT>
<body topmargin="0" leftmargin="0">
<?php 
include "connect.php";
@session_start();
//$u=@$_SESSION["user"];
//$p=@$_SESSION["password"];
$u=@$_POST["user1"];
$p=@$_POST["password1"];
@$_SESSION["user1"]=$u;
@$_SESSION["password1"]=$p;
$cds=$db->query("select ordermanager_name from ordermanager where (ordermanager_name='$u') and (ordermanager_password='$p')");
$result=$cds->fetchColumn();
//var_dump($u);
if(!$result){header("Location:loginerror.php");}
?>

<table border="0" cellpadding="0" cellspacing="0" width="780" height="450">
  <tr bgcolor="#5388C1"> 
    <td height="14" valign="top" colspan="3"></td>
  </tr>
  <tr> 
    <td valign="top" height="424" width="193" bgcolor="#E1E1E1"> 　 
      <div align="center"> 
        <center>
          <table border="0" cellpadding="0" cellspacing="0" width="118">
            <tr> 
              <td height="34"> <p align="center"> <a href="../index.php"> 书城主页</a> 
              </td>
            </tr>
            <tr> 
              <td height="29"> <p align="center"><a href="order.php"> 订单管理</a> 
              </td>
            </tr>
            <tr> 
              <td height="28"> <p align="center"><a href="exit.php">退出登录</a> </td>
            </tr>
          </table>
        </center>
      </div>
      <p align="center">&nbsp; </td>
      
    <td valign="top" height="424" width="12" bgcolor="#5388C1"> 　 
      <div align="right"></div></td>
    <td valign="top" height="424" width="575"> <center> <div align="right"> 
        <table width="637" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">
          <tr> 
            <td height="1" colspan="4" valign="bottom"><font color="#000000">&nbsp;</font></td>
          </tr>
          <tr> 
            <td height="6" colspan="4" valign="bottom" align=center> <br><br><br><br><br><br><br><font color="#000000" size="6">欢迎您！订单经理</font></td>
          </tr>
          <tr> 
            <td height="7" colspan="4" valign="bottom"></td>
          </tr>
          <tr> 
            <td height="6" colspan="4" valign="bottom"> </tr></form>
        </table>
      </div>
      <div align="center"></div></td>
  </tr>
  <tr bgcolor="#5388C1"> 
    <td valign="top" height="12" colspan="3"> 　 </td>
  </tr>
</table>
</body>

</html>