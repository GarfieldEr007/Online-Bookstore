<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>���붩��</title>
</head>

<body leftmargin="10" topmargin="10" marginwidth="10" marginheight="10" bgcolor="#FFCC99">

 <?php
// @session_start();
include "connect.php";

$b=@$_POST["BID"];
$c=@$_POST["CID"];
$ad=@$_POST["addr"];
$st=@$_POST["state"];
//var_dump(@$da);
	$db->exec("INSERT INTO orderlist SET bid = '$b',cid='$c',o_addr='$ad',o_state='$st',o_data=NOW()");

	?>
   
   <p align=center>
   <br><br><br><br><br><br><br><br><br><br>
   <font face="����" size=6 align=center>������ӳɹ���</font><br>
   <font face="����" size=4 align=center><a href="../order.php">����</font><br
   </p>
   <?php	
?>

</body>
</html>