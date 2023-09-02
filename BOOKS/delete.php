<?php

$id = $_GET['i'];

$connection->query("DELETE FROM books WHERE id='$id'");

header("location: index.php")
?>