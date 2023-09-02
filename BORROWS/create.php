<?php
include "../config.php";

$book= $_POST['b'];
$student= $_POST['s'];
$return= $_POST['r'];
$staff= $_POST['t'];

$connection->query("INSERT INTO borrows (book_id,nisn,date,date_return,staff) VALUES ('$book','$student',CURDATE(),'$return','$staff')");

header("Location: index.php?page=borrows/index.php")
?>
