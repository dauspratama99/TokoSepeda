
<?php

include 'config/koneksi.php';

if(isset($_POST['bsimpan'])){

    $rand =rand();
    $ekstensi = array('png','jpg','jpeg','gif');
    $filename = $_FILES['tgambar']['name'];
    $ukuran = $_FILES['tgambar']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    $gambar = $rand.'_'.$filename;
    //script untuk mengambil gambar
        move_uploaded_file($_FILES['tgambar']['tmp_name'], '../assets/backend/img_produk/'.$rand.'_'.$filename);

    $simpan = mysqli_query($koneksi, "INSERT INTO produk (nama_produk, gambar, deskripsi) 
                                      VALUES ('$_POST[tnama]','$gambar','$_POST[tdeskripsi]' )");

    if($simpan){

        echo "<script> alert('Simpan Data Sukses');document.location='index.php?page=tampil_produk';</script>";
    }else{
        echo "<script> alert('Simpan Data Gagal')document.location='index.php?page=tambah_produk';</script>";
    }
}
    

?>

<script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script> 
    <div class="container-fluid">
            <h1 class="mt-4">Tambah Produk</h1>
    <!-- Awal Card Form -->
    <div class="card mb-4">
    <div class="card-header bg-primary text-white">
    <i class="fas fa-table mr-1 "></i>
            Form Tambah Produk
            </div>
     
     <div class="card-body">
     <div class="table-responsive">
    <form method="post" action="" enctype="multipart/form-data">

    <div class="form-group">
        <label for="tnama">Nama Produk</label>
        <input type="text" id="tnama" name="tnama" class="form-control"  placeholder="Input Produk  disini!" autocomplete='off' required>
    </div>

    <div class="form-group">
        <label for="tgambar">Gambar</label>
        <input type="file" id="tgambar" name="tgambar" class="form-control"  placeholder="" autocomplete='off' required>
    </div>

    <div class="form-group">
        <label for="tdeskripsi">Deskripsi</label>
        <textarea class="ckeditor" id="tdeskripsi" name="tdeskripsi" class="form-control" value="" required></textarea> 
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
  




