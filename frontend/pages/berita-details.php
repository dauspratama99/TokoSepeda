  <?php 
  include 'backend/config/koneksi.php';
    $sql = mysqli_query($koneksi, "SELECT * FROM berita WHERE slug = '$_GET[slug]'");

    $detail = mysqli_fetch_array($sql);
  

  ?>  
        
        
      
    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2">
                  <h1 class="title2">Blog Details </h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">Halaman Detail</h2>
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
                    
                    $sql1 = mysqli_query($koneksi, "SELECT * FROM berita  ORDER BY id_berita DESC LIMIT 4");
                    
                   while($detail1 = mysqli_fetch_array($sql1)) { 

                    ?>
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="index.php?page2=detail-berita&slug=<?= $detail1['slug']; ?>">
                          <img src="<?php echo 'assets/backend/img_berita/'.$detail1['foto']; ?>" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <p> <a href="index.php?page2=detail-berita&slug=<?= $detail1['slug']; ?>"><?= $detail1['judul']; ?> </a></p>
                      </div>
                    </div>
                    <?php } ?>
                    <!-- End single post -->
                   
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
              <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- single-blog start -->
                <article class="blog-post-wrapper">
                  <div class="post-thumbnail">
                    <img src="<?php echo 'assets/backend/img_berita/'.$detail['foto']; ?>" alt="" />
                  </div>

                  <div class="post-information">
                    <h2><?= $detail['judul'];?></h2>
                    <div class="entry-meta">
                      <span class="author-meta"><i class="bi bi-person"></i> <a href="#"><?= $detail['penulis']; ?></a></span>
                      <span><i class="bi bi-clock"></i> <?= $detail['tanggal']; ?></span> 
                    </div>

                    <div class="entry-content">
                      <p><?= $detail['deskripsi'];?></p>
        
                    </div>
                  </div>
                </article>
                
                <!-- single-blog end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Page -->


 