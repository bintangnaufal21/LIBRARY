<?php


$d = $_GET['i'];

$result = $connection ->query("SELECT *FROM books WHERE id=$d");
$row = $result->fetch_object();
?>

    <form action="index.php?page=books/update.php" method="post">
    <input type="hidden" name="i" value=" <?php echo $row->id?>"
        <label for="">name:</label><br>
        <input type="text" name="u" value=" <?php echo $row->name?>"><br><br> 

        <label for="">category: </label><br>
        <input type="text"  name="e" value=" <?php echo $row->category?>"><br><br>

        <label for="">author: </label><br>
        <input type="text"  name="p" value=" <?php echo $row->author?>"><br><br>

        <label for="">publisher: </label><br>
        <input type="text"  name="o" value=" <?php echo $row->publisher?>"><br><br>

        <label for="">year: </label><br>
        <input type="text"  name="c" value=" <?php echo $row->year?>"><br><br>

        <input type="submit" value="update">
    </form>