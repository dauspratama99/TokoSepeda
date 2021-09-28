
<!-- ======= Blog Header ======= -->
<div class="header-bg page-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2">
                  <h1 class="title2">Kumpulan produk</h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">Halaman Produk</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->
  

 <!-- ======= Produk Section ======= -->
 <div id="produk" class="our-team-area area-padding" >
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12" >
            <div class="section-headline text-center">
              <h2>Spesial Produk</h2>
            </div>
          </div>
        </div>

    
        <div class="row">

            
            <?php       
                include 'backend/config/koneksi.php';
                $sql = mysqli_query($koneksi, "SELECT * FROM produk");
    
                while ($produk = mysqli_fetch_array($sql)){
            ?>
            <div class="col-md-3 col-sm-3 col-xs-12 " data-bs-ride="carousel" data-bs-interval="5000">
                <div class="single-team-member">
                    <div class="team-img">
                        <a href="#">
                            <img src="<?php echo 'assets/backend/img_produk/'.$produk['gambar']; ?>">
                        </a>
                    </div>
                    <div class="team-content text-center">
                
                        <h4><?= $produk['nama_produk']; ?></h4>
                        <p><?= $produk['deskripsi']; ?></p>
                    </div>
                </div>
            </div>
          <!-- End column -->
            <?php } ?>
        </div>
      </div>
    </div><!-- End Team Section -->


<!-- ======= Footer ======= -->
