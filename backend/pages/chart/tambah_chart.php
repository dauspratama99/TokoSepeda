<?php
		
		
   if(isset($_POST['bsimpan'])){

    //    pengambilan data dari table barang
       $cek = mysqli_query($koneksi,"SELECT * FROM tb_barang where id_barang='$_POST[tbarang]'");

       $ambil = mysqli_fetch_array($cek);

   // iko untuk penjumlahan 
       $total_harga = $_POST['tjumlah'] * $ambil['harga'];

       $sisa =$ambil['jumlah'] - $_POST['tjumlah'] ;

       //cek apakah stok nya masih ada dari jumlah beli
      if($ambil['jumlah'] < $_POST['tjumlah'] ){
        
        echo "<script> alert('Stok Tidak Mencukupi');document.location='index.php?page=tambah_chart';</script>";
 
      }else{

        //Script untuk penyimpanan
        //cek barang sudah ada atau belum
        $cek2 = mysqli_query($koneksi,"SELECT * FROM tb_chart where id_barang='$_POST[tbarang]'");
        $ambil2 = mysqli_fetch_array($cek2);
        $jmlAwal = $ambil2['jumlah'];
        $jmlTambah = $_POST['tjumlah'];
        $jmlUpdate = $jmlAwal + $jmlTambah;

        //Script Untuk menambah total hrga yang sudah ada dengan yang baru
        $cekHarga = mysqli_query($koneksi,"SELECT * FROM tb_barang where id_barang='$_POST[tbarang]'");
        $ambilHarga = mysqli_fetch_array($cekHarga);
        $total_harga_tambah = $_POST['tjumlah'] * $ambilHarga['harga'];
        $ttlHargaTambah = $ambil2['total_harga'] + $total_harga_tambah;
 
        //logika untuk menambah jumlah beli barang yang sudah ada dan yang baru
        if($ambil2){
            $simpan = mysqli_query($koneksi, "UPDATE tb_chart SET jumlah='$jmlUpdate', total_harga='$ttlHargaTambah' WHERE id_barang='$_POST[tbarang]'"); 
        }else{
            $simpan = mysqli_query($koneksi, "INSERT INTO tb_chart (id_barang, jumlah, total_harga) 
            VALUES ('$_POST[tbarang]','$_POST[tjumlah]','$total_harga' )");
        }

   
        if($simpan){

            //ini untuk pengurangan dari jumlah stok(jumlah ditabel barang)
            $upstok= mysqli_query($koneksi, "UPDATE tb_barang SET jumlah='$sisa' WHERE id_barang='$_POST[tbarang]'");
        

            echo "<script> alert('Simpan Data Sukses');document.location='index.php?page=tampil_chart';</script>";
        } else{
            echo "<script> alert('Simpan Data Gagal')document.location='index.php?page=tambah_chart';</script>";
        }
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
    <div class="container">

      
    <!-- Awal Card Form -->
        <div class="card mt-3">
     <div class="card-header bg-primary text-white">
    Form Input Data Chart
     </div>
     
     <div class="card-body">
    <form method="post" action="">
        <div class="form-group">
        <label for="tbarang">Id Barang</label>
        <select name="tbarang" id="" class="form-control">
        <?php
	  $query = "SELECT * FROM tb_barang ORDER BY id_barang asc";
      $result = mysqli_query($koneksi, $query);

      while ($row = mysqli_fetch_array($result)) {
	?>
      <option value="<?php echo $row ['id_barang'];?>"><?php echo $row ['nama_barang'] ;?></option>
	<?php } ?>
        </select>
     </div>
    
     
        <div class="form-group">
        <label for="tjumlah">Jumlah</label>
        <input type="number" id="tjumlah" name="tjumlah" class="form-control" value="" required>
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




