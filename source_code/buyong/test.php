<?php 
$dsn = "mysql:host=localhost;dbname=test"; 
$db = new PDO($dsn, 'root', ''); 

$rs = $db->query("SELECT * FROM foo"); 

$result_arr = $rs->fetchAll(); 
print_r($result_arr['0']['0']);
print_r($result_arr['0']['1']);
print_r($result_arr['0']['2']);

$rd = $db->query("SELECT count(*) FROM foo"); 
$num = $rd->fetchColumn();
echo $num;
?>