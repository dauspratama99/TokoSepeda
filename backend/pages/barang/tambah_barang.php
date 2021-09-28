<?php

   if(isset($_POST['bsimpan'])){
        $simpan = mysqli_query($koneksi, "INSERT INTO tb_barang (nama_barang, jumlah, harga) 
                                          VALUES ('$_POST[tnama]','$_POST[tjumlah]','$_POST[tharga]' )");

        if($simpan){

            echo "<script> alert('Simpan Data Sukses');document.location='index.php?page=tampil_barang';</script>";
        }else{
            echo "<script> alert('Simpan Data Gagal')document.location='index.php?page=tambah_barang';</script>";
        }
   }

   
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
    <div class="container-fluid">
            <h1 class="mt-4">Tambah Barang</h1>
    <!-- Awal Card Form -->
    <div class="card mb-4">
    <div class="card-header bg-primary text-white">
    <i class="fas fa-table mr-1 "></i>
            Form Tambah Barang
            </div>
     
     <div class="card-body">
     <div class="table-responsive">
    <form method="post" action="">

    <div class="form-group">
        <label for="tnama">Nama Barang</label>
        <input type="text" id="t" name="tnama" class="form-control"  placeholder="Input Barang anda disini!" autocomplete='off' required>
    </div>

        <div class="form-group">
        <label for="tjumlah">Jumlah</label>
        <input type="number" id="tjumlah" name="tjumlah" class="form-control" placeholder="Input Jumlah anda disini!" autocomplete='off' required>
    </div>
        <div class="form-group">
        <label for="tharga">Harga</label>
        <input type="text" id="tharga" name="tharga" class="form-control"  placeholder="Input Harga anda disini!" autocomplete='off' required>
    </div>       
       
    <br>
    <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
    <button type="reset" class="btn btn-danger" name="breset">Reset</button>

    </form>
  </div>
</div>

    <!-- Akhir Card Form -->

</div>

    <script type="text/javascript" src="js/bootstrap.min.css"></script>
    </body>
</html>




