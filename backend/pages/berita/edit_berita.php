<?php
    
include 'config/koneksi.php';

    if(isset($_GET['page'])){

        if($_GET['page'] == "edit_berita"){
    
            $tampil = mysqli_query($koneksi, "SELECT * from berita where id_berita = '$_GET[id]'");
            $data = mysqli_fetch_array($tampil);
            if($data){
                $vjudul = $data['judul'];
                
                $vpenulis = $data['penulis'];
                $vtanggal = $data['tanggal'];
                $vdeskripsi = $data['deskripsi'];
        
    
            }
        }
    }

    if(isset($_POST['bedit'])){
        
        
            $rand =rand();
            $ekstensi = array('png','jpg','jpeg','gif');
            $filename = $_FILES['tfoto']['name'];
            $ukuran = $_FILES['tfoto']['size'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);


        // ==(sama dengan) <= (kecil sama dengan) !=(tidak sama dengan)

            // fungsi if, dia akan cek file name kosong atau tidak
            if($filename != null){
                $foto = $rand.'_'.$filename;
              
            //script untuk mengambil gambar
                move_uploaded_file($_FILES['tfoto']['tmp_name'], '../assets/backend/img_berita/'.$rand.'_'.$filename);
        
                // Script ini berfungsi untuk pngambilan nama di judul berita 
                // $slug=str_replace('apa yang mau diubah contoh (spasi)','diganti dengan strip(-)',dari field mana?]);

                 $slug=str_replace(' ','-',$_POST['tjudul']);

                $edit = mysqli_query($koneksi,"UPDATE berita set judul = '$_POST[tjudul]', slug = '$slug', foto = '$foto', penulis = '$_POST[tpenulis]', tanggal = '$_POST[tgl]', 
                                                                deskripsi = '$_POST[tdeskripsi]' where id_berita = '$_GET[id]'" );
              
        } else {
                //script untuk mengambil gambar lam
                
                $slug=str_replace(' ','-',$_POST['tjudul']);

                $foto = $_POST['gambarOld'];
                $edit = mysqli_query($koneksi,"UPDATE berita set judul = '$_POST[tjudul]', slug = '$slug', foto = '$foto', penulis = '$_POST[tpenulis]', tanggal = '$_POST[tgl]',
                                                                    deskripsi = '$_POST[tdeskripsi]' where id_berita = '$_GET[id]'" );
            }

        //  die(); melihat error yang hilang cepat
            

        if($edit){

            echo "<script> alert('Data Berhasil Di Edit');document.location='index.php?page=tampil_berita';</script>";
            }else{
            echo "<script> alert('Data Gagal Di edit')document.location='index.php?page=edit_berita';</script>";
                }
        
    }
        
?>

<script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script> 

    <div class="container-fluid">
                        <h1 class="mt-4">Edit Berita</h1>
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
        <img src="<?php echo '../assets/backend/img_berita/'.$data['foto']; ?>"  style="width: 5em">
        <input type="file" id="tfoto" name="tfoto" >
        <input type="hidden" id="tfoto" name="gambarOld" value="<?= $data['foto'];  ?>" >
    </div>

    <div class="form-group">
        <label for="tpenulis">Penulis</label>
        <input type="text" id="tpenulis" name="tpenulis" class="form-control"  value="<?php echo $vpenulis ?>" autocomplete='off' required>
        </div>  

    <div class="form-group">
        <label for="tgl">Tanggal</label>
        <input type="datetime-local" id="tgl" name="tgl" class="form-control"  value="<?php echo $vtanggal ?>" autocomplete='off' required>
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

   