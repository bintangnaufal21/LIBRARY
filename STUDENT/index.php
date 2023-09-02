    <h1 align="center">STUDENT</h1>
    <table border="2" cellspacing="0" cellpadding="10" align="center" width="800">
        <tr>
            <th>id</th>
            <th>full_name</th>
            <th>nisn</th>
            <th>competency</th>
            <th>class</th>
            <th>address</th>
            <th colspan="2">Action</th>
        </tr>

        <?php
        $no=1;
        $result =$connection -> query("SELECT *FROM student");
        while( $row = $result->fetch_object() ) {
            ?>
         <tr>
            <td> <?php echo $no?></td>
            <td> <?php echo $row->full_name ?></td>
            <td> <?php echo $row->nisn ?></td>
            <td> <?php echo $row->competency ?></td>
            <td> <?php echo $row->class ?></td>
            <td> <?php echo $row->address ?></td>
            <td>
            <a href="index.php?page=student/edit.php&i=<?php echo $row->id?>">edit</a>
            <a href="index.php?page=student/delete.php&i=<?php echo $row->id?>">delete</a>
            </td>
        </tr> 
    <?php
    $no++; 
    }
    ?>
  
    </table>
    <br><br>
    <center><a href="index.php?page=student/add.php">ADD NEW</a></center>
    </table>