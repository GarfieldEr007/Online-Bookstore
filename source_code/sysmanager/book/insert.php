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
$au=@$_POST["author"];
$pc=@$_POST["price"];
$ps=@$_POST["press"];
$im=@$_POST["image"];
$co=@$_POST["count"];
$cy=@$_POST["clacify"];
$pf=@$_POST["profile"];

	$db->exec("INSERT INTO bookitem SET b_name = '$ti',b_auther='$au',b_price='$pc',b_press='$ps',b_image='$im',b_count='$co',clacify='$cy',b_profile='$pf'");
	?>
   <p align=center>
   <br><br><br><br><br><br><br><br><br><br>
   <font face="����" size=6 align=center>��Ŀ��ӳɹ���</font><br>
   <font face="����" size=4 align=center><a href="../book.php">����</font><br
   </p>
   <?php	
?>

</body>
</html>