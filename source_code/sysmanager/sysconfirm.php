<?php 
include "connect.php";
@session_start();
$u=@$_SESSION["user"];
$p=@$_SESSION["password"];
$cds=$db->query("select sys_name from sysmanager where (sys_name='$u') and (sys_password='$p')");
$result=$cds->fetchColumn();

//var_dump($u);
if(!$result){header("Location:loginerror.php");}
?>