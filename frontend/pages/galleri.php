
<!-- ======= Blog Header ======= -->
<div class="header-bg page-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2">
                  <h1 class="title2">Gallery Kami</h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">Halaman Gallery</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->
  



<!-- ======= Gallery Section ======= -->
<div id="galeri" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Gallery Sepeda</h2>
            </div>
          </div>
        </div>
       
        
    <div class="row awesome-project-content portfolio-container">

        <?php 
                  include 'backend/config/koneksi.php';
                  $sql1 = mysqli_query($koneksi, "SELECT * FROM galeri");
               while($galeri = mysqli_fetch_array($sql1))   {

               
            
            ?>
          
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
         
            <div class="single-awesome-project">

          
              <div class="awesome-img">
                <img src="<?php echo 'assets/backend/img_galeri/'.$galeri['gambar']; ?>" alt="" />
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="<?php echo 'assets/backend/img_galeri/'.$galeri['gambar']; ?>">
                      <h4><?= $galeri['judul']; ?></h4>
                      <span class="text-primary"><?= $galeri['deskripsi']; ?></span>
                    </a>
                  </div>
                </div>
              </div>
               

            </div>
         
          </div>
          <?php } ?>

         

        </div>
      </div>
    </div><!-- End Gallery Section -->

  