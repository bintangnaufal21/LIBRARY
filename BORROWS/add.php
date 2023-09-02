
<!DOCTYPE html>
<html lang="en">

<head>

    <title>edit</title>
</head>

<body>
    <form action="index.php?page=borrows/create.php" method="post">
        <input type="hidden" name="i" value="">
        <td>Nama Buku:</td><br>
        <select name="b">
            <?php  
            include "../config.php";
            $books =$connection -> query("SELECT id,name FROM books ");
            while( $row = $books ->fetch_object() ){
            ?>
                <option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
            <?php 
            }
            ?>
        </select>
        <br><br>

       
        
        <td>Nama Siswa:</td><br>
        <select name="s">
            <?php 
            $books =$connection -> query("SELECT id,full_name FROM student ");
            while( $row = $books ->fetch_object() ){
            ?>
                <option value="<?php echo $row->id ?>"><?php echo $row->full_name ?></option>
            <?php 
            }
            ?>
        </select>
        <br><br>

        <label for="">tanggal pengembalian: </label><br>
        <input type="date"  name="r"><br><br>

        <label for="">staf perpustakaan: </label><br>
        <input type="text"  name="t"><br><br>

        <input type="submit" value="update">
    </form>
</body>

</html> 