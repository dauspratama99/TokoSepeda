<?php
    
include 'config/koneksi.php';
    
            $tampil = mysqli_query($koneksi, "SELECT * from contact");
            $data = mysqli_fetch_array($tampil);
            if($data){
                $vnama = $data['nama'];
                $vemail = $data['email'];
                $vnohp = $data['nohp'];
                $vtanggal = $data['tanggal'];
                $vdeskripsi = $data['deskripsi'];
        
    
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
        <label for="tnama">NAMA</label>
        <input type="text" id="tnama" name="tnama" class="form-control" value="<?php echo $vnama ?>"  required>
    </div>

    <div class="form-group">
        <label for="temail">EMAIL</label>
        <input type="text" id="temail" name="temail" class="form-control" value="<?php echo $vemail ?>"  required>
    </div>

    <div class="form-group">
        <label for="tnohp">NO HP</label>
        <input type="text" id="tnohp" name="tnohp" class="form-control" value="<?php echo $vnohp ?>"  required>
    </div>

    <div class="form-group">
        <label for="tgl">TANGGAL</label>
        <input type="date" id="tgl" name="tgl" class="form-control" value="<?php echo $vtanggal ?>"  required>
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


<?php 

if(isset($_POST['bedit'])){
        
    if($_GET['page'] == "edit_contact"){
        $edit = mysqli_query($koneksi,"UPDATE contact set nama = '$_POST[tnama]', email = '$_POST[temail]', nohp = '$_POST[tnohp]', tanggal = '$_POST[tgl]',
                                                            deskripsi = '$_POST[tdeskripsi]'" );

    if($edit){

        echo "<script> alert('Data Berhasil Di Edit');document.location='index.php?page=edit_contact';</script>";
        }
    }
}

?>