<?php
    
include 'config/koneksi.php';

    if(isset($_GET['page'])){

        if($_GET['page'] == "edit_galeri"){
    
            $tampil = mysqli_query($koneksi, "SELECT * from galeri where id_galeri = '$_GET[id]'");
            $data = mysqli_fetch_array($tampil);
            if($data){
                $vjudul = $data['judul'];
        
                $vdeskripsi = $data['deskripsi'];
        
    
            }
        }
    }

    if(isset($_POST['bedit'])){
        
            $rand =rand();
            $ekstensi = array('png','jpg','jpeg','gif');
            $filename = $_FILES['tgambar']['name'];
            $ukuran = $_FILES['tgambar']['size'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);


        // ==(sama dengan) <= (kecil sama dengan) !=(tidak sama dengan)

            // fungsi if, dia akan cek file name kosong atau tidak
            if($filename != null){
                $gambar = $rand.'_'.$filename;
              
            //script untuk mengambil gambar
                move_uploaded_file($_FILES['tgambar']['tmp_name'], '../assets/backend/img_galeri/'.$rand.'_'.$filename);
        
                $edit = mysqli_query($koneksi,"UPDATE galeri set judul = '$_POST[tjudul]', gambar = '$gambar', 
                                                                deskripsi = '$_POST[tdeskripsi]' where id_galeri = '$_GET[id]'" );
            } else {
                //script untuk mengambil gambar lama
                $gambar = $_POST['gambarOld'];
                $edit = mysqli_query($koneksi,"UPDATE galeri set judul = '$_POST[tjudul]', gambar = '$gambar',
                                                                    deskripsi = '$_POST[tdeskripsi]' where id_galeri = '$_GET[id]'" );
            }
        //  die(); melihat error yang hilang cepat
            

        if($edit){

            echo "<script> alert('Data Berhasil Di Edit');document.location='index.php?page=tampil_galeri';</script>";
            }else{
            echo "<script> alert('Data Gagal Di edit')document.location='index.php?page=edit_galeri';</script>";
                }
        
    }
        
?>

<script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script> 

    <div class="container-fluid">
                        <h1 class="mt-4">Edit Gallery</h1>
    <!-- Awal Card Form -->
    <div class="card mb-4">
    <div class="card-header">
    <i class="fas fa-table mr-1"></i>
            Form Edit Data
            </div>
     
     <div class="card-body">
     <div class="table-responsive">
    <form method="post" action="" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="tjudul">Judul</label>
        <input type="text" id="tjudul" name="tjudul" class="form-control"  value="<?php echo $vjudul ?>" autocomplete='off' required>
    </div>

    <div class="form-group">
        <label for="tgambar">Foto</label>
        <img src="<?php echo '../assets/backend/img_galeri/'.$data['gambar']; ?>"  style="width: 5em">
        <input type="file" id="tgambar" name="tgambar" >
        <input type="hidden" id="tgambar" name="gambarOld" value="<?= $data['gambar'];  ?>" >
    </div>  

    <div class="form-group">
        <label for="tdeskripsi">Deskripsi</label>
        <textarea class="ckeditor" id="tdeskripsi" name="tdeskripsi" class="form-control" value="" required><?php echo $vdeskripsi ?></textarea> 
    </div>    
    
    <br>
    <button type="submit" class="btn btn-success" name="bedit">Simpan</button>
   

    </form>
  </div>
     </div>
</div>

    <!-- Akhir Card Form -->

</div>

   