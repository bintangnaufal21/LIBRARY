
    <h1 align="center">BOOKS</h1>
    <table border="2" cellspacing="0" cellpadding="10" align="center" width="800">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>category</th>
            <th>author</th>
            <th>publisher</th>
            <th>year</th>
            <th colspan="2">Action</th>
        </tr>

        <?php
        $no=1;
        $result =$connection -> query("SELECT *FROM books");
        while( $row = $result->fetch_object() ) {
            ?>
         <tr>
            <td> <?php echo $no?></td>
            <td> <?php echo $row->name?></td>
            <td> <?php echo $row->category?></td>
            <td> <?php echo $row->author?></td>
            <td> <?php echo $row->publisher?></td>
            <td> <?php echo $row->year?></td>
            <td>
            <a href="index.php?page=books/edit.php&i=<?php echo $row->id?>">edit</a>
            <a href="index.php?page=books/delete.php&i=<?php echo $row->id?>">delete</a>
            </td>
        </tr> 
    <?php
    $no++; 
    }
    ?>
  
    </table>
    <br><br>
    <center><a href="index.php?page=books/add.php">ADD NEW</a></center>
    </table>