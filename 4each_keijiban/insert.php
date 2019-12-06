<?php

mb_internal_encoding("utf8");

$pdo=new PDO("mysql:dbname=4each_keijiban;host=localhost;","root","mysql");
    
$pdo->exec("insert 4each_keijiban(name,title,come) values('".$_POST['ind_name']."','".$_POST['ind_title']."','".$_POST['ind_come']."');");
    
header("location:http://localhost/4each_keijiban/index.php");

//echo "insert 4each_keijiban(name,title,come) values('".$_POST['ind_name']."','".$_POST['ind_title']."','".$_POST['ind_come']."');"

?>