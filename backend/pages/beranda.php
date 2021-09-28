<?php 
 include '../backend/config/koneksi.php';

 $sql = mysqli_query($koneksi, "SELECT * FROM produk");

 $produk = mysqli_num_rows($sql);

?>
  
  
  <!-- Content Row -->
  <div class="row">
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                        Banyak Produk</div>
                    <div class="h3 mb-0 font-weight-bold text-gray-800 text-center"><?= $produk; ?><span>&nbsp; Unit</span></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-box fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
 include '../backend/config/koneksi.php';

 $sql1 = mysqli_query($koneksi,"SELECT * FROM galeri");

 $galeri = mysqli_num_rows($sql1);

?>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1 text-center">
                        Banyak Gallery</div>
                    <div class="h3 mb-0 font-weight-bold text-gray-800 text-center"><?= $galeri; ?><span>&nbsp; Gambar</span></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-photo-video fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 

include '../backend/config/koneksi.php';

$sql2 = mysqli_query($koneksi, "SELECT * FROM berita");

$berita = mysqli_num_rows($sql2);

?>
<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1 text-center">Banyak Berita
                    </div>
                   
                 <div class="h3 mb-0 mr-3 font-weight-bold text-gray-800 text-center"><?= $berita; ?><span>&nbsp; News</span></div>
                </div>
                <div class="col-auto">
                    <i class="	far fa-newspaper fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->

</div>

<!-- Content Row -->
