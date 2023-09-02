<?php


$fn= $_POST['u'];
$em= $_POST['e'];
$ph= $_POST['p'];
$id= $_POST['i'];
$pb= $_POST['o'];
$yr= $_POST['c'];

$connection->query("INSERT INTO student (full_name,nisn,competency,class,address) VALUES ('$fn','$em','$ph','$pb','$yr')");

header("Location: index.php?page=student/index.php")
?>
