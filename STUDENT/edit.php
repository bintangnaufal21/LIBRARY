<?php

$d = $_GET['i'];

$result = $connection ->query("SELECT *FROM student WHERE id=$d");
$row = $result->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>edit</title>
</head>

<body>
    <form action="index.php?page=student/update.php" method="post">
    <input type="hidden" name="i" value=" <?php echo $row->id?>"
        <label for="">full_name:</label><br>
        <input type="text" name="u" value=" <?php echo $row->full_name?>"><br><br> 

        <label for="">nisn: </label><br>
        <input type="text"  name="e" value=" <?php echo $row->nisn?>"><br><br>

        <label for="">competency: </label><br>
        <input type="text"  name="p" value=" <?php echo $row->competency?>"><br><br>

        <label for="">class: </label><br>
        <input type="text"  name="o" value=" <?php echo $row->class?>"><br><br>

        <label for="">address: </label><br>
        <input type="text"  name="c" value=" <?php echo $row->address?>"><br><br>

        <input type="submit" value="update">
    </form>
</body>

</html> 