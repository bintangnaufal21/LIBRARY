<?php

$id = $_GET['i'];

$connection->query("DELETE FROM borrows WHERE id='$id'");

header("location: index.php?page=borrows/index.php")
?>