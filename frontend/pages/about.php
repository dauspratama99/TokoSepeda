
   
    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2">
                  <h1 class="title2">Tentang Kami </h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">Halaman About</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->
   
   
   
   <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Tentang Maju Bersama</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="assets/frontend/img/about/3.jpg" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
            <?php 
                include 'backend/config/koneksi.php';

                $query = mysqli_query($koneksi, "SELECT * FROM about");
                 
                $row =  mysqli_fetch_array($query);

            ?>


          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h4 class="sec-head"><?= $row['judul']; ?></h4>
                </a>
                <p>
                    <?= $row['deskripsi']; ?>
                  </p>
               
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->
<!-- ======= Footer ======= -->

