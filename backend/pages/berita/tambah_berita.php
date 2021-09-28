

<script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script> 
    <div class="container-fluid">
            <h1 class="mt-4">Tambah Berita</h1>
    <!-- Awal Card Form -->
    <div class="card mb-4">
    <div class="card-header bg-primary text-white">
    <i class="fas fa-table mr-1 "></i>
            Form Tambah Berita
            </div>
     
     <div class="card-body">
     <div class="table-responsive">
    <form method="post" action="" enctype="multipart/form-data">

    <div class="form-group">
        <label for="tjudul">Judul</label>
        <input type="text" id="tjudul" name="tjudul" class="form-control"  placeholder="Input Judul Anda disini!" autocomplete='off' required>
    </div>

    <div class="form-group">
        <label for="tfoto">Foto</label>
        <input type="file" id="tfoto" name="tfoto" class="form-control"  placeholder="" autocomplete='off' required>
    </div>

    <div class="form-group">
        <label for="tpenulis">Penulis</label>
        <input type="text" id="tpenulis" name="tpenulis" class="form-control"  placeholder="Input Nama Penulis disini!" autocomplete='off' required>
    </div>

    <div class="form-group">
        <label for="tgl">Tanggal Publish</label>
        <input type="datetime-local" id="tgl" name="tgl" class="form-control"  placeholder="Input Nama Penulis disini!" autocomplete='off' required>
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
  



    <?php

include 'config/koneksi.php';

if(isset($_POST['bsimpan'])){

    $rand =rand();
    $ekstensi = array('png','jpg','jpeg','gif');
    $filename = $_FILES['tfoto']['name'];
    $ukuran = $_FILES['tfoto']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    $foto = $rand.'_'.$filename;
    //script untuk mengambil gambar
        move_uploaded_file($_FILES['tfoto']['tmp_name'], '../assets/backend/img_berita/'.$rand.'_'.$filename); //pengambilan  Alamat file nya dihitung dari index

// Script ini berfungsi untuk pngambilan nama di judul berita 
   $slug=str_replace(' ','-',$_POST['tjudul']);

   $simpan = mysqli_query($koneksi, "INSERT INTO berita (judul, slug, foto, penulis, tanggal, deskripsi) 
                                      VALUES ('$_POST[tjudul]','$slug','$foto','$_POST[tpenulis]','$_POST[tgl]','$_POST[tdeskripsi]' )");

    if($simpan){

        echo "<script> alert('Simpan Data Sukses');document.location='index.php?page=tampil_berita';</script>";
    }else{
        echo "<script> alert('Simpan Data Gagal')document.location='index.php?page=tambah_berita';</script>";
    }
}
    

?>

