<?php 
include "connect.php";
@session_start();
$u=@$_SESSION["user1"];
$p=@$_SESSION["password1"];
$cds=$db->query("select ordermanager_name from ordermanager where (ordermanager_name='$u') and (ordermanager_password='$p')");
$result=$cds->fetchColumn();
//var_dump($u);
if(!$result){header("Location:loginerror.php");}
?>