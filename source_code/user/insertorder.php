<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>插入数据库新闻</title>
</head>

<body leftmargin="10" topmargin="10" marginwidth="10" marginheight="10" bgcolor="#FFCC99">

 <?php
@session_start();
include "connect.php";
$o=@$_REQUEST["bid1"];
$s=(int)$o;
$p=@$_SESSION["user2"];
$cid1=$db->query("select c_id from customer where (c_name='$p')");
$result=$cid1->fetch();
$re=(int)$result['0'];

$price=$db->query("select b_price from bookitem where (b_id='$s')");
$price1=$price->fetch();
$price2=(float)$price1['0']-10;

$addr=@$_POST["address"];
$sta="待处理";
//var_dump($s);
//var_dump($p);
//var_dump($re);
//var_dump($addr);
//var_dump($sta);
	$db->exec("INSERT INTO orderlist SET bid = '$s',cid=$re,o_data=NOW(),o_addr='$addr',o_state='$sta',o_price='$price2'");
	?>
   <p align=center>
   <br><br><br><br><br><br><br><br><br><br>
   <font face="宋体" size=6 align=center>订单提交成功！</font><br>
   <font face="宋体" size=4 align=center><a href="../userindex.php">返回</font><br
   </p>
   <?php	
?>

</body>
</html>