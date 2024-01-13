
    <h1 align="center">BOOKS</h1>
    <table border="2" cellspacing="0" cellpadding="10" align="center" width="800">
        <tr>
            <th>id</th>
            <th>Judul Buku</th>
            <th>NUP</th>
            <th>Kode Klasifikasi</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Sumber Buku</th>
            <th>Jumlah</th>
            <th colspan="2">Action</th>
        </tr>

        <?php
        $no=1;
        $result =$connection -> query("SELECT *FROM daftar_buku");
        while( $row = $result->fetch_object() ) {
            ?>
         <tr>
            <td> <?php echo $no?></td>
            <td> <?php echo $row->Judul_Buku?></td>
            <td> <?php echo $row->Nup?></td>
            <td> <?php echo $row->Kode_Klasifikasi?></td>
            <td> <?php echo $row->Pengarang?></td>
            <td> <?php echo $row->Penerbit?></td>
            <td> <?php echo $row->Tahun_Terbit?></td>
            <td> <?php echo $row->Sumber_Buku?></td>
            <td> <?php echo $row->Jumlah?></td>
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