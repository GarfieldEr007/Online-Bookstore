
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta http-equiv="Content-Language" content="zh-cn">
<link rel="stylesheet" href="../image/register.css" type="text/css">
<meta name="GENERATOR" content="Microsoft FrontPage 4.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>���Ž���</title>
</head>
<form action=sysmanager.php method=post>
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
<title>���Ž���</title>
</head>
<SCRIPT LANGUAGE="JavaScript">
<!--//
function check()
{
   if (isNaN(go2to.page.value))
		alert("����ȷ��дת��ҳ����");
   else if (go2to.page.value=="") 
	     {
		alert("������ת��ҳ����");
		 }
   else
		go2to.submit();
}
//-->
</SCRIPT>
<SCRIPT language=JavaScript src="image/window.js"></SCRIPT>
<body topmargin="0" leftmargin="0">

<?php 
include "sysconfirm.php";
?>

<table border="0" cellpadding="0" cellspacing="0" width="780" height="450">
  <tr bgcolor="#5388C1"> 
    <td height="14" valign="top" colspan="3"></td>
  </tr>
  <tr> 
    <td valign="top" height="424" width="193" bgcolor="#E1E1E1"> �� 
      <div align="center"> 
        <center>
          <table border="0" cellpadding="0" cellspacing="0" width="118">
            <tr> 
              <td height="34"> <p align="center"> <a href="news.php"> ���Ź���</a> 
              </td>
            </tr>
            <tr>
              <td height="29"> <p align="center"><a href="customer.php"> �ͻ�����</a> 
              </td>
            </tr>
            <tr> 
              <td height="34"> <p align="center"><a href="employee.php">Ա������</a> 
              </td>
            </tr>
            <tr>
              <td height="29"> <p align="center"><a href="book.php"> ��Ŀ����</a> 
              </td>
            </tr>
            <tr> 
              <td height="29"> <p align="center"><a href="order.php"> ��������</a> 
              </td>
            </tr>
            <tr> 
              <td height="29"> <p align="center"><a href="notes.php"> ���Թ���</a> 
              </td>
            </tr>
            <!--<tr> 
              <td height="34"> <p align="center"><a href="#"onclick="javascript:if (confirm('�Ƿ�ȷ����յ�����������?')) href='reset.htm'; 
	    else return;">��յ�������</a> </td>
            </tr>-->
            <tr> 
              <td height="28"> <p align="center"><a href="exit.php">�˳���¼</a> </td>
            </tr>
          </table>
        </center>
      </div>
      <p align="center">&nbsp; </td>
      
      
      
    <td valign="top" height="424" width="12" bgcolor="#5388C1"> �� 
      <div align="right"></div></td>
    <td valign="top" height="424" width="575"> <center> <div align="right"> 
        <table width="637" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolorlight="#FFFFFF" bordercolordark="#FFFFFF">
          <tr> 
            <td height="1" colspan="4" valign="bottom"><font color="#000000">&nbsp;</font></td>
            <tr> 
            <td height="8" valign="bottom" colspan="4"> <p align="center">
                <center>
                  <a href="news/addnews.php"><font color="#000060" size='+2'>�������</font>
                  </a> 
                </center>
            </td>
          </tr>
          
          <tr> 
            <td height="6" colspan="4" valign="bottom"> </tr></form>
          <tr> 
            <td height="3" valign="top" colspan="4" bgcolor="#000000"> </td>
          </tr> 
          
          <tr> 
            <td width="42" height="18" bgcolor="#EBEEF3" valign="bottom"> <p align="center">NewsID</p></td>
            <td width="308" height="18" bgcolor="#EBEEF3" valign="bottom"><p align="center">&nbsp;�� ��</p></td>
            <td height="18" bgcolor="#EBEEF3" valign="bottom" width="103"><p align="center">��������</p></td>
            <td height="18" bgcolor="#EBEEF3" valign="bottom" width="174"> <p align="center">- ɾ�� -</td>
          </tr>
           <tr> 
            <td height="3" valign="top" colspan="4" bgcolor="#000000"> </td>
          </tr>

          <?php
			include "connect.php";
			$rs = $db->query("SELECT count(*) FROM news"); 
			$num = $rs->fetchColumn();
			//var_dump($col);
			$rd = $db->query("SELECT * FROM news"); 
			//$result_arr = $rs->fetchAll(); 
			$idd_arr = $rd->fetchAll();
			for($i=0;$i<$num;$i++)
			{
				//print_r($idd_arr['0']['0']);
 			?>
          <tr> 
            <td height="18" bgcolor="#EBEEF3" valign="bottom"> <p align="center"><?php print_r($idd_arr[$i]['0']); ?></p></td>
            <td height="18" bgcolor="#EBEEF3" valign="bottom"><a href="news/displaynews.php?is=<?php print_r($idd_arr[$i]['0']); ?>"><p align="center">&nbsp;<?php print_r($idd_arr[$i]['1']); ?></p></a></td>
            <td height="18" bgcolor="#EBEEF3" valign="bottom"><p align="center"><font color="#000046"><?php print_r($idd_arr[$i]['2']); ?></font></p></td>
            <td height="18" bgcolor="#EBEEF3" valign="bottom"> <p align="center"><a href="news/deletenews.php?id=<?php print_r($idd_arr[$i]['0']); ?>">ɾ��</a></td>
          </tr>
          <?php
			}
		  ?>
			<tr> 
            <td height="3" valign="top" colspan="4" bgcolor="#000000"> </td>
          </tr><tr> 
            <td height="3" valign="top" colspan="4" bgcolor="#000000"> </td>
          </tr>
        </table>
      </div>
      <div align="center"></div></td>
  </tr>
  <tr bgcolor="#5388C1"> 
    <td valign="top" height="12" colspan="3"> �� </td>
  </tr>
</table>
</body>

</html>