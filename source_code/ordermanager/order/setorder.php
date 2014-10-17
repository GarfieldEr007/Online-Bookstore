<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改订单</title>
</head>

<body>
<?php
include "connect.php";
$o=@$_REQUEST["oid1"];
$s=(int)$o;
$n=@$_POST["D"];
var_dump($s);
var_dump($n);
$t=$db->exec("UPDATE orderlist SET o_state='$n' WHERE (o_id='$s')");
var_dump($t);
header("Location:../order.php");
?>
</body>
</html>
