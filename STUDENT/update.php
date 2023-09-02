<?php

$fn= $_POST['u'];
$em= $_POST['e'];
$ph= $_POST['p'];
$id= $_POST['i'];
$pb= $_POST['o'];
$yr= $_POST['c'];


$connection->query("UPDATE student SET full_name='$fn', nisn='$em', competency='$ph', class='$pb', address='$yr' WHERE id=$id");

header("location: index.php?page=student/index.php")
?>