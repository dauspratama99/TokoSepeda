<?php
    
    include 'config/koneksi.php';
    
    //    script untuk memanggil data
    
            if($_GET['page'] == "edit_about"){
        
                $tampil = mysqli_query($koneksi, "SELECT * from about ");
                $data = mysqli_fetch_array($tampil);
                if($data){
                    $vjudul = $data['judul'];
                    $vdeskripsi = $data['deskripsi'];
            
        
                }
            }
    
    
       
            
    ?>


        <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script> 

    <div class="container-fluid">
                        <h1 class="mt-4">Contact</h1>
    <!-- Awal Card Form -->
    <div class="card mb-4">
    <div class="card-header">
    <i class="fas fa-table mr-1"></i>
            Form Contact
            </div>
     
     <div class="card-body">
     <div class="table-responsive">
    <form method="post" action="">
    

    <div class="form-group">
        <label for="tjudul">Judul</label>
        <input type="text" id="tjudul" name="tjudul" class="form-control" value="<?php echo $vjudul ?>"  required>
    </div>

    <div class="form-group">
        <label for="tdeskripsi">Deskripsi</label>
        <textarea class="ckeditor" id="tdeskripsi" name="tdeskripsi" class="form-control" value="" required><?php echo $vdeskripsi ?></textarea> 
    </div>    
    <br>
    <button type="submit" class="btn btn-success" name="bedit">UPDATE</button>
   

    </form>
  </div>
     </div>
</div>

    <!-- Akhir Card Form -->

</div>

    <script type="text/javascript" src="js/bootstrap.min.css"></script>
    </body>
</html>


<!-- Script Untuk Menyimpan Data -->

<?php 

if(isset($_POST['bedit'])){
    
    $edit = mysqli_query($koneksi,"UPDATE about set judul = '$_POST[tjudul]', 
                                                        deskripsi = '$_POST[tdeskripsi]'" );

if($edit){

    echo "<script> alert('Data Berhasil Di Edit');window.location.href='index.php?page=edit_about';</script>";
        }else{
            echo "<script> alert('Data Gagal Di edit')document.location='index.php?page=edit_about';</script>";
           
        }
}


?>
