<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ע���û�</title>
</head>

<body>
<?php
include "connect.php";
@session_start();
$u=@$_POST["uname"];
$p=@$_POST["pwd"];
$e=@$_POST["email"];

$cds=$db->query("select c_name from customer where (c_name='$u')");
$cdd=$db->query("select ordermanager_name from ordermanager where (ordermanager_name='$u')");
//$count = $db->exec("INSERT INTO customer SET c_name = 'heiyeluren',gender='��',time=NOW()");
//$result=mysql_num_rows($cds);
$result=$cds->fetchColumn();
$re=$cdd->fetchColumn();
$dq=@$_SESSION["user2"];
//var_dump($dq);
//$field=mysql_fetch_field($cds);
//var_dump($u);
$lb=$db->query("select c_id from customer where (c_name='$dq')");
$ls=$lb->fetch();
$ll=(int)$ls['0'];
//var_dump($ll);
if($result||$re)
{
	?>
   <p align=center>
   <br><br><br><br><br><br><br><br><br><br>
   <font face="����" size=6 align=center>�û�����ͻ���޸�ʧ��</font><br>
   <font face="����" size=4 align=center><a href="reset.php">����</font><br
   </p>
<?php 
  //header("Location:error.php");
}
//var_dump($u);
else
{
$t=$db->exec("UPDATE customer SET c_name='$u',c_password='$p',c_email='$e' WHERE (c_id=$ll)");
//$ddd=$dss->fetchAll();
//var_dump($t);
@$_SESSION["user2"]=$u;
@$_SESSION["password2"]=$p;
	?>
   <p align=center>
   <br><br><br><br><br><br><br><br><br><br>
   <font face="����" size=6 align=center>��ϲ���˻��޸ĳɹ�</font><br>
   <font face="����" size=4 align=center><a href="../userindex.php">��ת��ҳ</font><br
   </p>
<?php 
}
?>
</body>
</html>
