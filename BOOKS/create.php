<?php

$fn= $_POST['u'];
$em= $_POST['e'];
$ph= $_POST['p'];
$id= $_POST['i'];
$pb= $_POST['o'];
$yr= $_POST['c'];


$connection->query("INSERT INTO books (name,category,author,publisher,year) VALUES ('$fn','$em','$ph','$pb','$yr')");

header("Location: index.php?page=books/index.php")
?>
