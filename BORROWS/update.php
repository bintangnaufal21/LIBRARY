<?php

$book= $_POST['b'];
$student= $_POST['s'];
$return= $_POST['r'];
$staff= $_POST['t'];
$id= $_POST['i'];


$connection->query("UPDATE borrows SET book_id='$book', nisn='$student',date_return='$return', staff='$staff'  WHERE id='$id'");

header("location: index.php?page=borrows/index.php")
?>