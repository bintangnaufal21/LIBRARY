
    <h1 align="center">BORROWS</h1>
    <table border="2" cellspacing="0" cellpadding="10" align="center" width="800">
        <tr>
            <th>no</th>
            <th>nama buku</th>
            <th>nama siswa</th>
            <th>tanggal peminjaman</th>
            <th>tanggal pengembalian</th> 
            <th>staf perpustakaan</th>
            <th colspan="2">Action</th>
        </tr>

        <?php
        $no=1;
        $result =$connection -> query("SELECT br.id,bk.name,st.full_name,br.date,br.date_return,br.staff FROM borrows br INNER JOIN student st ON st.id = br.nisn INNER JOIN books bk ON bk.id = br.book_id;");
        
        while( $row = $result->fetch_object() ) {
            ?>
         <tr>
            <td> <?php echo $no?></td>
            <td> <?php echo $row->name?></td>
            <td> <?php echo $row->full_name?></td>
            <td> <?php echo $row->date?></td>
            <td> <?php echo $row->date_return?></td>
            <td> <?php echo $row->staff?></td> 
            <td><a href="index.php?page=borrows/edit.php&i=<?php echo $row->id?>">edit</a></td>
            <td><a href="index.php?page=borrows/delete.php&i=<?php echo $row->id?>">delete</a></td>
            
        </tr> 
    <?php
    $no++; 
    }
    ?>
  
    </table>
    <br><br>
    <center><a href="index.php?page=borrows/add.php">ADD NEW</a></center>
    </table>
