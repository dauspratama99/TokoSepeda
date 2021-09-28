

 <!-- ======= Blog Header ======= -->
 <div class="header-bg page-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2">
                  <h1 class="title2">Latest News </h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">Halaman Berita</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->
  
   

    <!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="page-head-blog">
              <div class="single-blog-page">
              
              </div>
              <div class="single-blog-page">
                <!-- recent start -->
                <div class="left-blog">
                  <h4>Berita Terkini</h4>
                  <div class="recent-post">
                    <!-- start single post -->

                    <?php
                    include 'backend/config/koneksi.php';

                    $sql = mysqli_query($koneksi,"SELECT * FROM berita ORDER BY id_berita DESC  LIMIT 4");
                    
                    while($ambil = mysqli_fetch_array($sql)){
                    
                    ?>

                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="">
                          <img src="<?php echo 'assets/backend/img_berita/'.$ambil['foto']; ?>" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <p> <a href="index.php?page2=detail-berita&slug=<?= $ambil['slug']; ?>"><?= $ambil['judul']; ?></a></p>
                      </div>
                    </div>
                    <!-- End single post -->
                    <?php } ?>
              
                  </div>
                </div>
                <!-- recent end -->
              </div>
           
            </div>
          </div>
          <!-- End left sidebar -->

          


          <!-- Start single blog -->
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">

         <?php
          
          include 'backend/config/koneksi.php';

        //  ini script untuk paganetion 

          $halaman = 5;
          $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
          $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
          $result = mysqli_query($koneksi, "SELECT * FROM berita");
          $total = mysqli_num_rows($result);
          $pages = ceil($total/$halaman);            
          $query = mysqli_query($koneksi, " SELECT * FROM berita ORDER BY id_berita DESC  LIMIT $mulai, $halaman");
          $no =$mulai+1;

          while ($kumpulan = mysqli_fetch_assoc($query)){
          
          ?>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <a href="blog-details.html">
                      <img src="<?php echo 'assets/backend/img_berita/'.$kumpulan['foto']; ?>" alt="">
                    </a>
                  </div>
                  <div class="blog-meta">
                    <span class="comments-type">
                      <i class="bi bi-chat"></i>
                      <a href="#"><?= $kumpulan['penulis']; ?></a>
                    </span>
                    <span class="date-type">
                      <i class="bi bi-calendar"></i><?= $kumpulan['tanggal']; ?>
                    </span>
                  </div>
                  <div class="blog-text">
                    <h4>
                      <a href="#"><?= $kumpulan['judul']; ?></a>
                    </h4>
                    <p>
                    <?= substr($kumpulan['deskripsi'],0,150)."...." ?>
                           </p>
                  </div>
                  <span>
                  <a href="index.php?page2=detail-berita&slug=<?= $kumpulan['slug']; ?>" class="ready-btn">Read more</a>
                  </span>
                </div>
              </div>
              <?php } ?>
              <!-- End single blog -->
              
              <!-- End single blog -->
              <div class="blog-pagination">
                <ul class="pagination">
                  
              <!-- Script Perulangan untuk paganetion -->
                <?php

                $jumlah_number = 1; //jumlah halaman ke kanan dan kiri dari halaman yang aktif
                $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
                $end_number = ($page < ($pages - $jumlah_number))? $page + $jumlah_number : $pages;

                if($page == 1){
                 echo '<li class="page-item disabled"><a href="#" class="page-link"><span arial-hiden="true">&lt;</span></a></li>';
                }else{
                  $link_prev = ($page > 1)? $page - 1 : 1;
                  echo '<li class="page-item disabled"><a href="?halaman='.$link_prev.'" aria-label="Previous" class="page-link"><span arial-hiden="true">&lt;</span></a></li>';
                }
                for($i = $start_number; $i <= $end_number; $i++){
                  $link_active = ($page == $i)? ' active' : '';
                  echo '<li class="page-item '.$link_active.'"><a class="page-link" href="?halaman='.$i.'">'.$i.'</a></li>';
                }
                if($page == $pages){
                  echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&gt;</span></a></li>';
                   } else {
                  $link_next = ($page < $pages)? $page + 1 : $pages;
                  echo '<li class="page-item"><a class="page-link" href="?halaman='.$link_next.'" aria-label="Next"><span aria-hidden="true">&gt</span></a></li>';
                
                }
                ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Page -->

  </main><!-- End #main -->

  
