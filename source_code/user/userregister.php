
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Language" content="zh-cn">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="../image/register.css" type="text/css">
<meta name="GENERATOR" content="Microsoft FrontPage 4.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>新会员注册</title>
</head>

<body topmargin="0" leftmargin="0">

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<tr>
    
  <td height="33">&nbsp; </td>
  </tr>
      

<div align="center">
  <table width="780" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td><img src="../image/a3.jpg" width="780" height="148"></td>
    </tr>
  </table>
  <table border="0" cellpadding="0" cellspacing="0" width="780">
    <center>
      <tr> 
        <td height="2" valign="top" colspan="3" bgcolor="#00006A"> </td>
      </tr>
    </center>
    <tr>
      <td width="157" height="16" bgcolor="#93BEF2" valign="bottom"> 
        <div align="center"><a href="../index.php">首页</a></div>
      </td>
      <center>
        <td width="492" height="16" bgcolor="#93BEF2" valign="bottom"> &nbsp; 
          <marquee onmouseout=this.start() onmouseover=this.stop() border="0"  align="middle" scrolldelay="150" behavior="scroll"  width="100%">网站测试中</marquee></td>
      </center>
      <td width="131" height="16" bgcolor="#93BEF2" valign="bottom"> 
        <p align="center"> 
          <script language="javascript" src="../image/date.js"></script>
      </td>
    </tr>
    <center>
      <tr> 
        <td height="2" valign="top" colspan="3" bgcolor="#00006A"> </td>
      </tr>
    </center>
  </table>
  
</div>

<SCRIPT language=JavaScript src="../image/validate.js"></SCRIPT>
<SCRIPT language=JavaScript>
<!--
function checkform()
{
 if (checkstring("用户名", document.userregister.uname.value, false)) {
    document.userregister.uname.focus();
    return false;   
  }
  var pwd = document.userregister.pwd.value;
  if (userregister.pwd.value=="") {
		alert("请输入登录密码！");
		userregister.pwd.focus();		
		    return (false);
  }
  if (pwd.length < 3) {
    alert("密码不能少于三位！");
    return false;   
  }
  var pwd2 = document.userregister.pwd2.value;
  if (pwd != pwd2) {
    alert("两次密码输入不一致！");
    document.userregister.pwd.value="";
    document.userregister.pwd2.value="";
	return false;
  }
  if (checkemail("电子邮件", document.userregister.email.value, false)) {
    document.userregister.email.focus();
    return false;   
  }

  return true;
}
//-->
</SCRIPT>

<div align="center">

  <center>
  <table border="0" cellpadding="0" cellspacing="0" width="780" height="45">
    <tr>
      <td width="766" height="18" valign="top" colspan="5" bgcolor="#5388C1"> 
        　 </td>
    </tr>
	<tr>
      <td width="144" height="162" valign="top" bgcolor="#5388C1">
        <p align="center">　</p>
        <p>　
      </td>
      <td width="29" height="309" valign="top"><img border="0" src="../image/selfk.GIF"></td>
      <td width="462" height="309">
      <FORM name=userregister onsubmit="return checkform();" action=insert.php method=post>
  </center>
        <div align="center">
        <table border="1" cellpadding="0" cellspacing="0" width="352" height="1" bordercolor="#000000" bordercolorlight="#000000" bordercolordark="#FFFFFF">
          <tr>
            <td width="350" height="13" background="../images/t-bg1.gif">
              <p align="center"><strong>=== 新会员注册 ===</strong></td>            
          </tr>
  <center>
          <center>
          <tr>
            <td width="350" height="263" bgcolor="#fffff4">
              <p align="center">&nbsp;&nbsp;&nbsp; 用户名:<input type="text" name="uname" size="15" maxLength=15> </p>           
              <p align="center">&nbsp; 登录密码:<input type="password" name="pwd" size="15" maxLength=15></p>            
              <p align="center">&nbsp; 重复密码:<input type="password" name="pwd2" size="15" maxLength=15></p>          
              <p align="center">联系E-mail:<input type="text" name="email" size="15" maxLength=30></p>
              <p align="center"><input type="submit" value="注 册" name="B1" style="position: relative; height: 19"></td>
          </tr>
          </center>
  </center>
  <center>
          <center>
          </center>
  </center>
        </table>
        </div>
      
  <center>
      
	  <td width="1" height="309" valign="top" bgcolor="#00006A">
      
	  <td width="119" height="309" valign="top" bgcolor="#F3F3F3"></td>
    
    <tr>
      <td width="743" height="1" valign="top" colspan="5" bgcolor="#5388C1"> 
        <p align="center"> </td>
    </tr>
    <tr>
      <td width="743" height="3" valign="top" colspan="5">
      <p align="center">
      </td>
    </tr>
    <tr>
      <td width="743" height="7" valign="top" colspan="5">
      <p align="center"><script language="javascript" src="../image/copyright.js"></script>
      </td>
    </tr>
    <tr>
      <td width="743" height="3" valign="top" colspan="5">
      </td>
    </tr>
  </table>

  
</div>

</body>

</html>


