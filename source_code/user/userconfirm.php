<?php 
include "connect.php";
@session_start();
$u=@$_SESSION["user2"];
$p=@$_SESSION["password2"];
$cds=$db->query("select c_name from customer where (c_name='$u') and (c_password='$p')");
$result=$cds->fetchColumn();

//var_dump($u);
if(!$result){header("Location:user/loginerror.php");}
?>