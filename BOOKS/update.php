<?php


$fn= $_POST['u'];
$em= $_POST['e'];
$ph= $_POST['p'];
$id= $_POST['i'];
$pb= $_POST['o'];
$yr= $_POST['c'];


$connection->query("UPDATE books SET name='$fn', category='$em', author='$ph', publisher='$pb', year='$yr' WHERE id=$id");

header("location: index.php?page=books/index.php")
?>