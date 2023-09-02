<?php

$id = $_GET['i'];


$connection->query("DELETE FROM student WHERE id='$id'");

header("location: index.php?page=student/index.php")
?>