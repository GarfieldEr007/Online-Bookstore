<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�������ݿ�����</title>
</head>

<body leftmargin="10" topmargin="10" marginwidth="10" marginheight="10" bgcolor="#FFCC99">

 <?php
// @session_start();
include "connect.php";

$ti=@$_POST["title"];
$te=@$_POST["text"];

	$db->exec("INSERT INTO news SET n_name = '$ti',n_content='$te',n_data=NOW()");
	?>
   <p align=center>
   <br><br><br><br><br><br><br><br><br><br>
   <font face="����" size=6 align=center>���ŷ����ɹ���</font><br>
   <font face="����" size=4 align=center><a href="../news.php">����</font><br
   </p>
   <?php	
?>

</body>
</html>