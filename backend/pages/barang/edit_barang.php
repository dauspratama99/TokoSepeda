<?php
    


    if(isset($_GET['page'])){

        if($_GET['page'] == "edit_barang"){
    
            $tampil = mysqli_query($koneksi, "SELECT * from tb_barang where id_barang = '$_GET[id]'");
            $data = mysqli_fetch_array($tampil);
            if($data){
                $vbarang = $data['id_barang'];
                $vnama = $data['nama_barang'];
                $vjumlah = $data['jumlah'];
                $vharga = $data['harga'];
        
    
            }
        }
    }

    if(isset($_POST['bedit'])){
        
        if($_GET['page'] == "edit_barang"){
            $edit = mysqli_query($koneksi,"UPDATE tb_barang set nama_barang = '$_POST[tnama]', 
                                                                jumlah = '$_POST[tjumlah]',harga = '$_POST[tharga]' where id_barang = '$_GET[id]'" );

        if($edit){

            echo "<script> alert('Data Berhasil Di Edit');document.location='index.php?page=tampil_barang';</script>";
            }else{
            echo "<script> alert('Data Gagal Di edit')document.location='index.php?page=edit_barang';</script>";
                }
        }
    }
        
?>



<!DOCTYPE html>
<html>
    <head>
        <title>CRUD</title>
        <meta charset="utf-8">
 <!-- Fungsi widht=device-widht biar bisa responsive-->  
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body>
    <div class="container-fluid">
                        <h1 class="mt-4">Edit Barang</h1>
    <!-- Awal Card Form -->
    <div class="card mb-4">
    <div class="card-header">
    <i class="fas fa-table mr-1"></i>
            Form Edit Data
            </div>
     
     <div class="card-body">
     <div class="table-responsive">
    <form method="post" action="">
    

    <div class="form-group">
        <label for="tnama">Nama Barang</label>
        <input type="text" id="tnama" name="tnama" class="form-control" value="<?php echo $vnama ?>"  required>
    </div>

        <div class="form-group">
        <label for="tjumlah">Jumlah</label>
        <input type="number" id="tjumlah" name="tjumlah" class="form-control" value="<?php echo $vjumlah ?>" required>
    </div>
    <div class="form-group">
        <label for="tharga">Harga</label></label>
        <input type="text" id="tharga" name="tharga" class="form-control" value="<?php echo $vharga ?>"  required>
    </div>
    <br>
    <button type="submit" class="btn btn-success" name="bedit">Simpan</button>
   

    </form>
  </div>
     </div>
</div>

    <!-- Akhir Card Form -->

</div>

    <script type="text/javascript" src="js/bootstrap.min.css"></script>
    </body>
</html>