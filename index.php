<?php

include "config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home library</title>
    <link rel="stylesheet" href="nav.css">
</head>
<body>
    

<nav> 
        <div class="menu">
            <a class="logo" href="#">LIBRARY</a>
            <a href="index.php?page=home.php">Home</a>
            <a href="index.php?page=BOOKS/index.php">Books</a>
            <a href="index.php?page=BORROWS/index.php">Borrows</a>
            <a href="index.php?page=STUDENT/index.php">Student</a>
        </div>
        <div class="extra">
            <a href="login.php ">Logout</a>
            <div class="translate">
                <a href="#">Andi</a>
            </div>
        </div>
    </nav>

    <section>
    <?php include $_GET['page']; ?>
    </section>

</body>
</html>