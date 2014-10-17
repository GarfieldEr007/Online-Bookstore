
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
include "orderconfirm.php";
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
            <td height="1" colspan="8" valign="bottom"><font color="#000000">&nbsp;</font></td>
            <tr> 
            <td height="8" valign="bottom" colspan="8"> <p align="center">
                <center>
                  <a href="news/addnews.php"><font color="#000060" size='+2'>订单管理</font>
                  </a> 
                </center>
            </td>
          </tr>
          
          <tr> 
            <td height="6" colspan="8" valign="bottom"> </tr></form>
          <tr> 
            <td height="3" valign="top" colspan="8:" bgcolor="#000000"> </td>
          </tr> 
          
          <tr> 
            <td width="60" height="18" bgcolor="#EBEEF3" valign="bottom"> <p align="center">O_ID</p></td>
            <td width="60" height="18" bgcolor="#EBEEF3" valign="bottom"><p align="center">B_ID</p></td>
            <td height="18" bgcolor="#EBEEF3" valign="bottom" width="60"><p align="center">C_ID</p></td>
            <td height="18" bgcolor="#EBEEF3" valign="bottom" width="83"><p align="center">日 期</p></td>
            <td height="18" bgcolor="#EBEEF3" valign="bottom" width="203"><p align="center">地 址</p></td>
            <td height="18" bgcolor="#EBEEF3" valign="bottom" width="100"><p align="center">当前状态</p></td>
            <td height="18" bgcolor="#EBEEF3" valign="bottom" width="0"><p align="center">     </p></td>
            <td height="18" bgcolor="#EBEEF3" valign="bottom" width="70"> <p align="center">&nbsp;&nbsp;&nbsp;-修改为-</td>
          </tr>
           <tr> 
            <td height="3" valign="top" colspan="8" bgcolor="#000000"> </td>
          </tr>

          <?php
			include "connect.php";
			$rs = $db->query("SELECT count(*) FROM orderlist"); 
			$num = $rs->fetchColumn();
			//var_dump($col);
			$rd = $db->query("SELECT * FROM orderlist"); 
			//$result_arr = $rs->fetchAll(); 
			$idd_arr = $rd->fetchAll();
			for($i=0;$i<$num;$i++)
			{
				//print_r($idd_arr['0']['0']);
 			?><FORM name=Searching action=order/setorder.php method=post>
            <input type= "hidden" name="oid1" id="oid1" value="<?php print_r($idd_arr[$i]['0']); ?>">
          <tr> 
            <td height="18" bgcolor="#EBEEF3" valign="bottom"> <p align="center"><?php print_r($idd_arr[$i]['0']); ?></p></td>
            <td height="18" bgcolor="#EBEEF3" valign="bottom"><p align="center">&nbsp;<?php print_r($idd_arr[$i]['1']); ?></p></td>
            <td height="18" bgcolor="#EBEEF3" valign="bottom"><p align="center"><?php print_r($idd_arr[$i]['2']); ?></p></td>
            <td height="18" bgcolor="#EBEEF3" valign="bottom"> <p align="center"><?php print_r($idd_arr[$i]['3']); ?></td>
            <td height="18" bgcolor="#EBEEF3" valign="bottom"> <p align="center"><?php print_r($idd_arr[$i]['4']); ?></td>
            <td height="18" bgcolor="#EBEEF3" valign="bottom"> <p align="center"><?php print_r($idd_arr[$i]['5']); ?></td>
            <td height="18" bgcolor="#EBEEF3" valign="bottom"> 
            
                      <TD><SELECT size=1 name=D> <OPTION value=所有状态
                          selected>-所有状态-</OPTION> <OPTION 
                          value=待处理>待处理</OPTION> <OPTION 
                          value=已发货>已发货</OPTION> <OPTION 
                          value=已签收>已签收</OPTION> <OPTION 
                          value=订单结束>订单结束</OPTION></SELECT></TD></td>
                         
            <td height="18" bgcolor="#EBEEF3" valign="bottom"> <p align="center"><font color="#000046"><input type="submit" value="提交" name="B1" style="position: relative; height: 22"></font></a></td>
            
          </tr></FORM>
          <?php
			}
		  ?>
			<tr> 
            <td height="3" valign="top" colspan="8" bgcolor="#000000"> </td>
          </tr><tr> 
            <td height="3" valign="top" colspan="8" bgcolor="#000000"> </td>
          </tr>
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