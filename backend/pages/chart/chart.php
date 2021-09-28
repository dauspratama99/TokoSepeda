<?php
 

   
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
        <meta charset="utf-8">
 <!-- Fungsi widht=device-widht biar bisa responsive-->  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">


    <!-- Awal Card Form -->
        <div class="card mt-3">
     <div class="card-header bg-success text-white">
         Daftar Chart
     </div>
    
  <div class="card-body">
  <a href="index.php?page=tambah_chart" class="btn btn-danger">+ &nbsp; Tambah Data </a>
  <br> <br>  <table class="table table-bordered table-striped">
         <tr>
            <th>No</th>
            <th>Id Barang</th>
            <th>Nama Barang</th>
            <th>jumlah</th>
            <th>Total Harga</th>
        </tr>

        <?php

            $tampil = mysqli_query($koneksi, "SELECT * from tb_barang,tb_chart where tb_chart.id_barang=tb_barang.id_barang order by tb_chart.id_chart ASC");
           
            

           $no=1;
             while($data=mysqli_fetch_array($tampil)) {
        ?>        
        <tr>
            <td><?php echo $no++  ?></td>
            <td><?php echo $data['id_barang']  ?></td>
            <td><?php echo $data['nama_barang']  ?></td>
            <td><?php echo $data['jumlah']  ?></td>
            <td>Rp.<?php echo number_format($data['total_harga'],2) ?></td>
            
        </tr>
        <?php
            
             } ?>
      </table>
    

    <!-- Akhir Card Form -->

</div>
</div>
</div>
    <script type="text/javascript" src="js/bootstrap.min.css"></script>
    </body>
</html>